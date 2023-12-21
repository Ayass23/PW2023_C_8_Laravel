<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Mail\MailSend;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function register()
    {
        return view('Register');
    }

    public function actionRegister(Request $request)
    {
        $imagePath = 'public/images/user.jpeg';
        $str = Str::random(100);
        $user = User::create ([
            'image' => $imagePath,
            'role' => 'user',
            'noTelp' => $request->noTelp,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'verify_key' => $str,
        ]);

        $details = [
            'username' => $request->username,
            'website' => 'GeTix',
            'datetime' => date('Y-m-d H:i:s'),
            'url' => request()->getHttpHost() . '/register/verify/' . $str
        ];

        Mail::to($request->email)->send(new MailSend($details));

        Session::flash('message', 'Link verifikasi telah dikirim ke email anda. Silakan cek email anda untuk mengaktifkan akun');
        return redirect('register');
    }

    public function verify($verify_key) {
        $keyCheck = User::select('verify_key')
            ->where('verify_key', $verify_key)
            ->exists();

        if ($keyCheck) {
            $user = User::where('verify_key', $verify_key)
            ->update([
                'active' => 1,
                'email_verified_at' => date('Y-m-d H:i:s'),
            ]);

            return "Verifikasi email berhasil. Akun anda sudah aktif";
            
        } else {
            return "Keys tidak valid.";
        }
    }

    public function updateUser(Request $request){
        $validated = $request->validate([
            'username' => 'required',
            'noTelp'=>'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048|required',
        ]);

        $user = User::findOrFail(auth()->id());

        $user->username = $request->username;
        $user->noTelp = $request->noTelp;
        $validated['email'] = $user->email;
        $validated['role'] = $user->role;
        $validated['password'] = $user->password;
        $validated['verify_key'] = $user->verify_key;
        $validated['active'] = $user->active;

        $validated['image'] = $user->image;
        $path = public_path('public/images');
        if ($request->hasFile('image')) {
            $fileName = time() . '.' . $request->image->getClientOriginalExtension();
            $validated['image'] = $fileName;

            $request->image->move($path, $fileName);

            $user->image = '/public/images/' . $fileName;

            $oldPath = public_path('/public/images/' . $user->image);
            if (file_exists($oldPath) && is_file($oldPath) && $user->image != 'image.png') {
                unlink($oldPath);
            }
        }

        $user->save();

        return redirect()->back()->with('success', 'Profile picture updated successfully!');
    }
    public function destroy($id)
    {
        $user =User::find($id);
        
        $oldPath = public_path('/public/images/'.$user->image);
        if(file_exists($oldPath) && $user->image != 'poster.png'){
            unlink($oldPath);
        }
        $user->delete();
        return redirect(url('ReportUser'))->with(['success' => 'Data
        Berhasil Dihapus!']);
    }
}
