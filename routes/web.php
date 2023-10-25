<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Homepage', [
        'tickets' => [
            [
                'name' => 'Virtual Concert : Devano Danendra',
                'date' => '26 September 2023',
                'lokasi' => 'Online Platform',
                'harga' => 'Rp.60.000',
                'jam' => '20.00'
            ],
            [
                'name' => 'Virtual Concert : Devano Danendra',
                'date' => '26 September 2023',
                'lokasi' => 'Online Platform',
                'harga' => 'Rp.60.000',
                'jam' => '20.00'
            ],
            [
                'name' => 'Virtual Concert : Devano Danendra',
                'date' => '26 September 2023',
                'lokasi' => 'Online Platform',
                'harga' => 'Rp.60.000',
                'jam' => '20.00'
            ],
            [
                'name' => 'Virtual Concert : Devano Danendra',
                'date' => '26 September 2023',
                'lokasi' => 'Online Platform',
                'harga' => 'Rp.60.000',
                'jam' => '20.00'
            ],
            [
                'name' => 'Virtual Concert : Devano Danendra',
                'date' => '26 September 2023',
                'lokasi' => 'Online Platform',
                'harga' => 'Rp.60.000',
                'jam' => '20.00'
            ],
            [
                'name' => 'Virtual Concert : Devano Danendra',
                'date' => '26 September 2023',
                'lokasi' => 'Online Platform',
                'harga' => 'Rp.60.000',
                'jam' => '20.00'
            ]
        ]
    ]);
});

Route::get('/homepage', function () {
    return view('Homepage', [
        'tickets' => [
            [
                'name' => 'Virtual Concert : Devano Danendra',
                'date' => '26 September 2023',
                'lokasi' => 'Online Platform',
                'harga' => 'Rp.60.000',
                'jam' => '20.00'
            ],
            [
                'name' => 'Virtual Concert : Devano Danendra',
                'date' => '26 September 2023',
                'lokasi' => 'Online Platform',
                'harga' => 'Rp.60.000',
                'jam' => '20.00'
            ],
            [
                'name' => 'Virtual Concert : Devano Danendra',
                'date' => '26 September 2023',
                'lokasi' => 'Online Platform',
                'harga' => 'Rp.60.000',
                'jam' => '20.00'
            ],
            [
                'name' => 'Virtual Concert : Devano Danendra',
                'date' => '26 September 2023',
                'lokasi' => 'Online Platform',
                'harga' => 'Rp.60.000',
                'jam' => '20.00'
            ],
            [
                'name' => 'Virtual Concert : Devano Danendra',
                'date' => '26 September 2023',
                'lokasi' => 'Online Platform',
                'harga' => 'Rp.60.000',
                'jam' => '20.00'
            ],
            [
                'name' => 'Virtual Concert : Devano Danendra',
                'date' => '26 September 2023',
                'lokasi' => 'Online Platform',
                'harga' => 'Rp.60.000',
                'jam' => '20.00'
            ]
        ]
    ]);
});

Route::get('/pembelian', function () {
    return view('Pembelian', [
        'ticket' => [
            [
                'nama' => 'Phase 1: Regular A',
                'jumlah' => 0,
                'harga' => '50.000',
            ],
            [
                'nama' => 'Phase 2: Regular B',
                'jumlah' => 3,
                'harga' => '50.000',
            ]
        ]
    ]);
});
Route::get('/pembayaran', function () {
    return view('Pembayaran');
});

Route::get('/login', function () {
    return view('Login');
});

Route::get('/register', function () {
    return view('Register');
});
Route::get('/profile', function () {
    return view('Profile');
});

Route::get('/admindashboard', function () {
    return view('adminDashboard', [
        'transaksi' => [
            [
                'no' => 1,
                'gambar' => 'https://ik.imagekit.io/tvlk/xpe-asset/AyJ40ZAo1DOyPyKLZ9c3RGQHTP2oT4ZXW+QmPVVkFQiXFSv42UaHGzSmaSzQ8DO5QIbWPZuF+VkYVRk6gh-Vg4ECbfuQRQ4pHjWJ5Rmbtkk=/4956795833494/Devano%2520Danendra%2520Intimate%2520Virtual%2520Concert%2520-%2520Online%2520Concert-98e4011b-59fa-4bca-9d6b-7ecdaf6134f1.jpeg?tr=q-60,c-at_max,w-1280,h-720&_src=imagekit',
                'nama' => 'Virtual Concert : Devano Danendra',
                'date' => '26 September 2023',
                'lokasi' => 'Online Platform',
                'harga' => 'Rp.60.000',
                'total' => '100',
                'jenis' => '2',
                'ket' => 'Available',
            ],
            [
                'no' => 2,
                'gambar' => 'https://static.gatra.com/foldershared/images/2023/iwan/07-Jul/IMG_20230711_161148.jpg',
                'nama' => 'Electrochestra : Tiga Masa',
                'date' => '26 September 2023',
                'lokasi' => 'Online Platform',
                'harga' => 'Rp.150.000',
                'total' => '500',
                'jenis' => '4',
                'ket' => 'Available',
            ],
            [
                'no' => 3,
                'gambar' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQVJhHdye3461OAcaubRyy-19DNCoMuIMvnQg&usqp=CAU',
                'nama' => 'Spesial Konser : Sheila On 7',
                'date' => '28 September 2023',
                'lokasi' => 'Online Platform',
                'harga' => 'Rp.100.000',
                'total' => '250',
                'jenis' => '4',
                'ket' => 'Unavailable',
            ],
            [
                'no' => 4,
                'gambar' => 'https://editorial.femaledaily.com/wp-content/uploads/2022/11/gudfest-2.png',
                'nama' => 'GUD FEST',
                'date' => '29 September 2023',
                'lokasi' => 'Online Platform',
                'harga' => 'Rp.40.000',
                'total' => '200',
                'jenis' => '3',
                'ket' => 'Available',
            ],
            [
                'no' => 5,
                'gambar' => 'https://static.gatra.com/foldershared/images/2023/RLN/05-May/1591033789-758x644_(1).jpg',
                'nama' => 'COLDPLAY : MUSIC of the SPHERES',
                'date' => '29 September 2023',
                'lokasi' => 'Online Platform',
                'harga' => 'Rp.600.000',
                'total' => '1000',
                'jenis' => '5',
                'ket' => 'Unavailable',
            ],
            [
                'no' => 6,
                'gambar' => 'https://s-light.tiket.photos/t/01E25EBZS3W0FY9GTG6C42E1SE/original/events/2020/12/23/36392418-df84-41ab-a182-17bba7e20f84-1608718575458-813815e967e2e7df7956c39fb8250fb1.jpg',       
                'nama' => 'Skyland Festival : Fourtwenty',
                'date' => '30 September 2023',      
                'lokasi' => 'Online Platform',
                'harga' => 'Rp.70.000',
                'total' => '125',
                'jenis' => '2',
                'ket' => 'Available',
            ],
            [
                'no' => 7,
                'gambar' => 'https://selasarnews.com/wp-content/uploads/2022/12/Denny-Caknan-dan-Guyon-Waton-Bakal-Hadir-di-Gayeng-Fest.jpg',
                'nama' => 'Gayeng Fest',
                'date' => '29 September 2023',
                'lokasi' => 'Halaman Stadiun Joyokusumo Pati',
                'harga' => 'Rp.80.000',
                'total' => '200',
                'jenis' => '2',
                'ket' => 'Available',
            ],
            [
                'no' => 8,
                'gambar' => 'https://jkt48.com/upload/news/64942b330ff63.jpg',
                'nama' => 'JKT 48 : Summer Tour',
                'date' => '9-15 Juli 2023',
                'lokasi' => 'Online Platform',
                'harga' => 'Rp.140.000',
                'total' => '280',
                'jenis' => '3',
                'ket' => 'Unavailable',
            ],
            [
                'no' => 9,
                'gambar' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjpRkoK7XGOyQ-Ib8_qzLDNimcoeK_ODshXA&usqp=CAU',       
                'nama' => 'Vitual Concert : NDX A.K.A',
                'date' => '30 September 2023',      
                'lokasi' => 'Online Platform',
                'harga' => 'Rp.60.000',
                'total' => '200',
                'jenis' => '2',
                'ket' => 'Available',
            ]
        ]
    ]);
});

Route::get('/event', function () {
    return view('Event');
});

Route::get('/report', function () {
    return view('Report', [
        'transaksi' => [
            [
                'no' => 1,
                'gambar' => 'data:image/jpeg;base64,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',
                'nama' => 'COLDPLAY : MUSIC of the SPHERES',
                'tanggal' => '30 September 2023',      
                'lokasi' => 'Online Platform',
                'harga' => 'Rp.60.000',
                'ket' => 'Lunas',
            ],
            [
                'no' => 2,
                'gambar' => 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxIQEBMQEA8SFRUXFRAQEhUVFxARGA8XFRYXFhUWFxYYHSggGBolHRUVIjEhJikrLi4uFx8zODMtNygtLisBCgoKDg0OGhAQGy0lHyItLS0rLi0rLS0tLS0tLSsrLS0tKy0tLS0tLSstLS0tKy0tKy0tLS0tLS0rLTc3Ky03N//AABEIAKgBLAMBIgACEQEDEQH/xAAcAAEAAgMBAQEAAAAAAAAAAAAAAQUEBgcCAwj/xAA+EAACAQIDBQYEAwYEBwAAAAAAAQIDEQQhMQUSQVFhBhMicYGRMkKhsQcj0RRScoKSwWLS4fEVJDNDU8Lw/8QAGAEBAAMBAAAAAAAAAAAAAAAAAAECAwT/xAAgEQEBAAICAwEBAQEAAAAAAAAAAQIRAzETIUESUSIy/9oADAMBAAIRAxEAPwDqwAAAACGgiQB5BLRAAAAAAAAAAAACG7Zt288rGFtjaUcNSdSWf7q4yf6HLds9oa9d2nJ2u/Cso87JLhp7MJmO3Vf+JUL27+lf+OH6n3o14TzhOMv4WpfY4M68m7Rb3XdpP5vFbhwv9DO2dtOtQqJ05zi1a6WWlrprja680ydLfh28Gs9lO06xX5dVKNTdTVslPn5M2YhWzQAAgAAAAADzY9EXAgAAAAAAAAAAfQAAAAAAAAhEgBY8noiwEAWAAAAAABpHaPaMamMnhnluU4O+uck5Ze69jW8TsuCl4Xk3fqvDb/1SNop4G+08VVkv/HFeXdxLerhKc096nB9Wk9Cnl1dadGGPpzXF4KnDjfOKf+F2/wBWP2CLfebyW9aULuzfy+l0vsbjjdn075Uo630MWlgaaaXdp8r529yPPLelvG1HF4t4ScZxmrq0otaXvf8AQ7FsrGKvQp1lpOEZ+W8rnKO2exoqG9CKXTguZ0vsjScNn4SLVmsPQv8A0IvMtseSaW4AJZgAAAAAQSABFiQBFgSAPLJRIAAAD0AAAAAAAAAAAAAEJEgDyCWiAB5qTUYuT0SbdumZ6IYIpk9+cqqjuuUKeuem9a9ujXsU+P7QdxKEHvPf3rflySyyb3lojYlh1BtcLK3kskjExmBjOS3vhyfn0Oa2/XXjr4rNp4juqfeNZbu8a5htq1J1Em5xvGNVWgmt2Wju1n5G47UpRcVGUbppproUOApxspRbtnbmuhXa/adtYXvcPZ55xbassr+K19MjY+z22o4i9KNNw3IwaV7rdatGzsiq2vR3sNKEWleNru+WazLns3szuKXiXjkouXNJK0Y+31bNMLd+mecx/Ft7WwAN3KAAAAAAAAAAAAAAAAAAD0CbEAAAAAAAAAAAAAAAhkhgeQS0GgPjXhdX4r7GBUaybeVy0sUmJjnZ2t1zTMeX034fav2viopL8+3C+9HW99emRW7OhBKW5LeW823e6u3nn5mTtPCNv/tK2a8Kv7nxptLir5aGDpX+zMIqivNZRcZLXVZouzA2J/0vV/2M868OnFyX/VAAWUAAAAAAAAAAAAAAAAAAB7ZB6IaAgAAAAAAAAAAAAAAKXb/afD4O0JuU6rTcaNNb05WTd2tIrJ6gXR8sViYUoudScYRWspNRS9Wcw27+IOOUHKnhoUIXsnNqpUfC6i/8vE0jG4rEY2ulWqzqONpS3ndJ8ktIpdETod6jtWnOkqtGcZRlLcjLO0ne2V9dGeJ076nPdkUqkaEKE6u8k5SitEnLk+d+fUu6G2a9FWqRVRcNU/fj6meXFnfbTHkxxfXbuy75wqzj0vdfUw6FDdS49Txju1MJWvh6q/of9zCnt2pNWp0t3lfxS9lkjHwZ2tvNjpaY7G1ISpQp1ZQlKUVFJ2Td1e6eTVrlntPt7hMLW7mvvxdoy3oxdRK7drpZrS+jNGqYWcpd5VnZrNtvPLr8pqO2ainWnPvXUcnvSk+L8+K8jXHhyxy3v1/GWXJM50/QWzNr4fFR3sPXp1Fyi1vLzi816ozj86bJwcqk4921GT0bkobvXe4G07J7aYzBuCqt1qcknFVHnu841Nfe5rpnp2IFdsHbVHG0VXoSvF5STylCS1jJf/XLEhAAAAAAAAAAAAAAAAD6BghgCD0LAeQSyAAAAAAAAAMDbu0lhcNUruz3Y+Fc5PKK92jjmLrNd7Wde86tJSlKSTvKTSnGFSMrwkt74Ws0nyRv/wCKNa2Gp0k7b9Tey1tBXv7tHJa9C63Xlytony8uK5acSYMbCO83Ced7WvzTzz56l1hsF3GMnC996nv3fUq8Lh7vvJfK4p24NtJv639TaMVByxGHqO150akJdXFr9S+MRlVlTnazXHJ/7FtgcYppweUlouElxSMDD4Oc4vdjJpZtpZR83oj5tbsk+KZootcTCCi5OK8rIrMdtKlhY/mPxvNQja/RdPNlLtTtBPf7mk1k299/Sy4+bKGpFyk3Jtu+bebb8ytq8j1tra9TEXUrRjm1COnq+LKd6SfRP6ltS2RXrOUaVGc5RkozSWcb31XozAxmFnSdWFSLjKPhlF6pqxl+pb2vp6w9bdpt5eFLr1X1LOWMUaEk0vGoJ/DvqSV0oytdRus1wWSKrulLu4JZuUk/4Y639T64uV57q0j9+JKG0/hTtV0MYqDfgrJwa4KcU3CX3X8x2g/Ouw63dYmjVT+GpTl6KSbP0UyKUABCAAAAAAAAAAAAAB9CGSACAAAhIkhgQCSAAAAAADmf4k4xPFwpt5QhC/Rzbf8AlNMxsLOz0eSfLozaO0+0IU8bVqbkKjnJwTnd7jp2jZR0a+K/VZaGpSq7q3J+KGieriuT/UvOh5w6sq1N/NBVI9XF/fP6Gy4KpTdalv33Y1KabjbLvaLzz6qPuadWk4u129d180000/RlnsjaDtOUdYww9TjrStdZZ6RLS/EZR1WOPpxSsluRV1C07t8llZZ/Ne/2NW2hUbcpS1bbZYV9ttw3m4pWTveWXFNO+RpO3tuud4020ne8uMvLkT0jtmbV2lGnikoqLcqaWiag7/crKibu3q235ldipeOi+iRY1Z2K27WkdBr1qNGEJ08RCUVQpppSj3taMWr3aaalZqz4Zo5/2oxDxeKXdpS76SdNQ1lBZq64Ste99LMxu6lUxNClTV5NRikucn9jI7UYd7Pl+zxner3CjVkvl7x2cIPVJpO74nJOPHDL1d2tbdxWxxFNRi6ad4wnvzek5VJN+FcIpZc3mY7k9Fq85dOSfU+WGyhfV3tFc3z9P7H1pUb39bvmzojNuWyOxqnh41Z1Wqk478Yq3hT+Hevq300OtbIruph6NR6yp02+j3Vde9znvZvtDSqUVGclGcYxhZ2W9bK8W/7aXN17JYhVMJGSd0p14p9FVnb6WL5SxWWX77+xcgAzSAAAAAAAAAAAAAPoAAAYAEXAJA8kixAAAABcHwx+JVKlOpJ2jGMpN62SXIDS6mwqKp1alWPe1PHUqTfjjTmrysk8rLTPXI5piaqk5ThHdTlK8Ndy7yXtl1Ns292oqYt9zRi407/DHNz/AIv0RSYjYWJl444Wtnq1Cef0LXOQxla7iVurLR8OC5NdDxsvGKnWvL4WmpdeZmYzCVKSaq0pxWeUoyjryuijxGUsuS9OhEy+xNXm0dpSnCEd7JKyXlld9cjDqSukYkZ3R97+EnezTJxkvDTfJoz8PhauJqRp0YOUpeyXFt6JdWYiwtSrTSp05zfBRjKV/Y67sLZscFhIxhTU6rinUtaLnPlvPJRWnoYc/L+J/n3WmGG77VNGlh9kTUqslKrKmlfjOSfwQWqX+7OV7f2pUxWIqV6lt6T0WSio5RS9EdE2r2TxmNxCxGIxFGNsowipzVNclovXiUeK7A9xeVXEOS18EFH3u2ZcUxxtyyu8q0zxyy9Semt0YXslwtCPna85Fts7A99UjRUlFWbk/wB2K1fV5r3MZ01GbzTSuk1813e9uensz3hcTKlVVWO62r21azTVsvM7cdb9sLv3pvcOy+AhGF6VWe8n+ZKpu7rvJRaUfCr7reaNt7E4J0MM6Td0qlSUXpeMrNXXuc92V25lTW7VoQa1bilG+qzTy4v3N67EbcjjO/cIbii6Vl/EpXfJfCRbPkUm/raAAVSAAAAAAAAAAAAAPoAAAAAhoEkNAQCbACAAAK7tE4/stVzpynHdvKEcnNJp2vwXN8rliCLNxM7aF2N2jVxFSrF0qVCnBQcYUYKLmpX+KbV8rcOZttaOWr92ferh4pOUYxT4tJK58rnN+Nf9OiZS+4p9o4CVeDpSqSUZZSXhd1/MnYqIdhsCneWHUm825SnK/pe30Nlr10jDqYkpJ+emnbBh2cwcco4Sh/RF/cyKezaEfhoUl5Qh+hE8QeJVidp0zHNRySSXJZHzdUrq2KtqyvpbQnXk44eG/bWo/DTj/N8z6K5GqmL910uJQbbrOqpU6UXUenhTaXroWeH2TBZ1pOrLrlFeUP1uZdSokrLJdCEtK2B2Nc3vYpyila0Fu3ldZ+K7UVrormwS2NhYZRwlJ24z7yo/qzKqYnkfKVRvMZZXLuqzjxjHlsWlUT/5TCPoo1KV/wCaLdvY+v4dzw6r4mFCnUpSSSqUptVI3hJrehPVrN5PmiwwP3LvZex6OG3nShaUm3OTd5Sbd9eV3ojXiws9xny3GTTPAB0uUAAAAAAAAAAAAAfQAAAAAAAEAkgAQejyAAABq+RS42bhdMuj44nCwqK04pr1X1RXLHa+Gf5aViNoK7zu/sKNdatmp7apzhiKsVOSjTjUlJJtK7baWXLJehpVP9onKO9Oq1LS8p2lbW12Z+C/1t5p/HXcTtKlTV5zivNpfco8V2toO6p1Iyemtl78TSauxqkPzKnw5NN5t9OrPOG2YpvfUbRv8Otl5FvAr5m3YVvFTvVk3BP4FlF+fP1NvpYmMIKMVZJWSSsjnMez7mu8wtTdfFKU4q/pnF9GY2G2ji4TlRdWamvhUmnvPlmnfmrFcuCxfHmldOljD4SrXOf1+0OKpp71Sk3y3XdebUrHyodqcXN2jCD9Jr+5S8OSfLi6NFx5nzxOKUVZZmlrbddd1vqKU3uvKWTvbmbV+HcIY+nXWIuqtKoo+B2W61k7O/FSIvDkebFe9nE6kldZLN+mn1NsMfAYCFCO7BPq3m2ZTN8MdRhyZ/q+nkEEl2YAAAAAAAAAAAAA+gAAAAAAABDAAMEACQQAJPhja3d05T5L6t2X1aAIvQ5lLCd9UqJ3Xe1ty/8AhTbl9mZ+0tj0YUYyaUVTs4WWnJdbkg3nSrV8ZWlipK9NpLKENbdfNlrszYqgr1Em/wB3gvPmwCPqawsbsudOW/h5uL5N5Ncuq6Mr8RtX9pX7NVpqFS9lP4Unzi/lfrYkE2EYmJ2DUptKrbN/Fa8aj53+WXR68Cx2fg1SjKTWqd+HQkFce9Iyt0wMdT7ym1HWPjXS3+l/obV+Gr7vaNaPy18NTxC84ySl9ZSIBXLtedOohkAqhDAAAAAAAAAAAAAAAB//2Q==',
                'nama' => 'Virtual Concert : Devano Danendra',
                'tanggal' => '26 September 2023',
                'lokasi' => 'Online Platform',
                'harga' => 'Rp.60.000',
                'ket' => 'Lunas',
            ],
            [
                'no' => 3,
                'gambar' => 'data:image/jpeg;base64,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',
                'nama' => 'Virtual Concert : 3 Composer',
                'tanggal' => '26 September 2023',
                'lokasi' => 'Online Platform',
                'harga' => 'Rp.60.000',
                'ket' => 'Lunas',
            ],
            [
                'no' => 4,
                'gambar' => 'data:image/jpeg;base64,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',
                'nama' => 'ART FEST 2021 : Sheila On 7 & JKT 48',
                'tanggal' => '28 September 2023',
                'lokasi' => 'Online Platform',
                'harga' => 'Rp.60.000',
                'ket' => 'Lunas',
            ],
            [
                'no' => 5,
                'gambar' => 'data:image/jpeg;base64,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',
                'nama' => 'NGAMEN 0.3 Autheticity Soundroom : MORAD',
                'tanggal' => '29 September 2023',
                'lokasi' => 'Online Platform',
                'harga' => 'Rp.60.000',
                'ket' => 'Lunas',
            ],
            [
                'no' => 6,
                'gambar' => 'data:image/jpeg;base64,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',
                'nama' => 'COLDPLAY : MUSIC of the SPHERES',
                'tanggal' => '29 September 2023',
                'lokasi' => 'Online Platform',
                'harga' => 'Rp.60.000',
                'ket' => 'Lunas',
            ],
            [
                'no' => 7,
                'gambar' => 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBUSFRgSEhUZGRgYGBgYGBkYGhgYGRwcGBgZGhocGRocIS4lHB4rHxgYJjgmKy8xNTU1GiQ9QDs0Py40NTEBDAwMEA8QHhISHzQrJSs0NDQ0NjQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NP/AABEIAKIBNwMBIgACEQEDEQH/xAAcAAABBAMBAAAAAAAAAAAAAAAAAQIEBwMFBgj/xABEEAACAQIEAwQFCAcIAgMAAAABAgADEQQSITEFQVEGImFxEzKBkaEHQlJyscHR8CM0YnOSstIUFhckM1NU4RWzQ6Lx/8QAGgEAAgMBAQAAAAAAAAAAAAAAAAECAwQFBv/EAC8RAAICAQMDAwIFBAMAAAAAAAABAhEDBCExEkFREyIyFHEFM2GBkRVSseEjodH/2gAMAwEAAhEDEQA/AKhsLeOlunjG2jyIlpAkxsSLCSEJFhaOAgAyLaOvpb86RIAJEiwiQABJ/DeGNWN75V5ta5Pgo5+cbgcHmGd9F6DdvZ0m1dSwsjaAbIpIXza1ifxj+wGdcFh6HeK5zbTMC1iOZINh7NpjxFZHADoABsfsmvxIdbfpLnlqSPL2xKdS4tybS3Q25e4GFILNk3DMO49Uodsym4v5HSaPiOAai2UkMOTDY+zkZsRiCEYXvovvGxHTrFxBNSmQdwtx5r+TE9h7M0UIsBGISEmUwi3LKWBU5Ttrpr7JDiTGEIQjsQQiqpOgispGhhYDYQhAAgYQgAQhFiYBC0WBjAS0LQhABIRbQtAAgI60LQAVrWFvbCAEIrJD8sYyzOy2MMTWLm5tewGgA2FuUimJojNFAiGOUSYCRDHtGkQBjYRSIkBBJnD8MHJLequp8TrYfCQzNlfJTRRu2re22n2e6IDLVrFsoAsNgALaH7JjxONIApjRR05nqev56TAXO2mmm0y4XAvVPdF/da8ey5Gk5OkRlOuv5PWPdzuByJ+6dJhOyVRrXO/O06LCdhlPrNpz/wCpB5YlqwSfJXHpGsdD4+ySMFX72VjoRbxsRb75YGO7DKAfRv13+E5LjXBnoEXFjzEFNS2FLDKKs0eOwno2y7qRdT4fjI1pua9qlE39ZNVPhzBmoEkmV0DEkAE6DaNjoWjAbACKYtoCHUHKsGBsQbjzEyYqrnOY7nUnr4mYxEaR7j7UMtEiwkhCQhCACwhCJgEIQjAWKBACEACIY5YjCRGII4JEAkihWKXt84FTtsYNgjGBCZFS8JGyVG7x3CGVPSfNzZb3G9r7XvNE6yfWxrEWJmvcyEFJcjk4vgxQhCWkRSYkISQmI0IsS0BATNjiHCqhG1lI9wH4zXGTaFqiZb95SbD9nw8iYhmPDUc9QKObeehlpcK4ciBbDYTkOzPCL/pWOgNlHiDrO3w+NFMXFN3tuQLe4dJRll1OkbNPHoj1S7/4N/hsMNDoJOSmOZFpyY7UU9hTqK37Vre7eSK3EXVAy6mwJHS4vr5St7cl/wAt0dE9BdwZyfa7B+kQtluUBJ8tJDqdosSxyq1NF66+HU6ze4So9RRndXBB5C+vlykuNyv5JplTOuVHItYqbW8bD75pp1XabACg9VF9UqHUeDEe+crNCd7mGUXF0whCEBWGWE2HBmo+kyYkfo37pddHQ8mXyO4O4vJ/aDstWwfeIz0ztUQXWx2zD5p+B6w6oppPuSUW1aNBAwhAjY2BimJJAJCdV2b7HtjaRrCsF75WxUttbXcdZtf8NW/5C/wH+qUS1OKMumUtyyODJJWkcDCd9/hq3/IX+A/1RR8mzf8AIX+Bv6pH6vB/cP6bJ4OAhO//AMNW/wCQv8B/qjK3yb1QO7XQnoyso9+v2Q+rwf3B9Nk8HCCLNxxbs1icL3qlM5Ppr3l9pHq+2008vjKMlcXaK3FxdMBCF4QAUTNTW5mATKjWMGJHQYfg7ejWobZWJA1F7jfSE11PGMBYGEzOMvJoUo+CG0xkR5iTQUMxkRseYlo7AY0AYrCLTC3717WO3XlAQl4XjTCSEE2fBME9VyUFwou2oGhBAAvub8vCaydd8nLJ6dkfUlQyg88pJa3jY/bIybUW0Sgk5JM6TsrQzUl5WL301uGN5K4hwyu2b9Iyixy5dNeWbmV6gW3mfhFUB6hUWVnLrfo9jf33906dKYqLrMt+6zoV7VFle8K4Q4dQWZjqXYm4JvpbTSdrjOGg4e66NbKTy25yVkSmwRQLnmdPaYtfjdFEZMyZQe+SRlW3Uxt27Yq6VSOETgjXph1UtTcvdlzB+9cK4OjAbW00nTcK4OaZNTNbMSSFGVbkk2A5DXQeEy0MUPSZdCjhXRgbghhqPZNiX310g5N7Magou0uTku0HDUq4lM651FF+6bgOyMCisRqBv7pWHFqSpWdU9UMQo3sN7X8L29ktjGI9TFoy6IiOahvYBT19xlP4mtndn+kzN7yT98uxtmbUKKSrlmMmCxIS0zDiZZvyf8dFamcJVN3RTkza505qb7ldvLylYSRgsW1J0qI1mUhlPiOXlv75TmxLLDp/j7luHI4Sv+Sw+0nYRXvUwdlbc0jop+ofmnwOnlK6xNB6bFKilWU2ZWFiPMS8OBcWTF0VrJpfR1+iw9Zfjp4ETFxzgNDGLlqr3gO666OvkeY8DpOfh1sscvTy9u/c2ZNNGa6of6KOiToO0PZetgjmYZqd7LUXbwDDdT56eJmgnUjKMl1Rdo58ouLp8lrfJn+qH9632LOunI/Jn+qH9632LOunntX+dL7nY0/5S+wQhI2O4lRoW9NVVM17ZmAJtvb3yiMZSdItbS3ZJhMOFxdOsL0nVx1Vgw9tpmg006YJp7oLX0OoOhB2PmOcrjtz2SWkDicMtlv+kQbLf5yjkvUcvKWPG1KYcFHF1YFWB2IYWIPhYy/TaiWKe3Hcry4ozjTPPwiyfxjh/wDZ69Sj9ByB4rup9qkSFaehTTVo47VbMAI4CII8QBDhCJCRGLaIY8iNMSAaqyTQw19/K8wIbSS+MYgLfQbe60Ur7Aq7jcdhfRsVuD4jY+RkAiSatctoTtI0nG63E6sQiJFMSTFQkl8MxhoVUrLujBtNzbce6RYRciV9i5boTTrU7ZKisQV9U65hYfNPeNx4Td4PE6aSneyfEWSstLMcjX7pJsGsSCByPL2yz8NiOcyzj0ujo45qcTZYoIysp9ZhoQbEW535c5zHoKKrlTIVsRZUL97N62vreck4+gKmYMzWbdQbXFtjbW3hIbJSGnoDppbM7A2sLmxFvKJUy1R3N1w6pTSmqm3eN1Yai/QHkeVpPV9D8JzowlNe8i5cxuVBNr9fObanV0F9onQmmaDtTx2nQp16Wc+mqKEVVGwI1Zm2A1Om8qybPtBivTYmq/IuQPJe6PsmtImqK6Uc7LJykJCLaJJlYQhACKgOk7F8fOErWc/oqhCv+yb6P7Nb+BPQS4JXfZrsJmUVcXcA6rTU5WI/bPzfIe08pYGHoLTRUQWVAFUXJsBoNTczi6+WKU04vfv4OppFOMfdx2HuoYFSAQdCDqCOhHOVd8oHAKWFKVaIKioXDJuoKgG6k6ga7e6WlOD+VT/Tw/1n/lSQ0E5LMop7PsS1UE8bb5J3yaEf2RgCLiqxI5i4XlOulM4Dh+Mo0kx2HzZWza0ySVykqc629XTxE6/s/wBvkqWp4sBG2zrfIfrDdfPbyl+q0kpTc4u/08FeDPGMVF7HbyuPlV9fD/Vf+YSxUcOAyEMpFwVIII6gjlK6+VX18P8AVf8AmWUaFNZ1fhlmqf8AxP8AY5DhHE3wtRatM2KnUbBhzVuoI+6Xte+o25SpOzPZKtiWSpUUrQuGLMbFl6INzfa8twy78SlBuKXO9lejUkm3wJFBiRROYbSs+2eDV8a9yFBpoxJva+Ui3tyictVo2m07VcU9NiqrKe4GCKeRCd2/vv75qlxBAPjvPRYoyjBJ+EcfJKLk68mAiKIExQJaVCgQigQiGOaYzHGNaCAaYkIhMkhMaTGxxELRgNhaKYkBMLRpEdALfYX9kkIlcGq5K9Jujr8Tb75ZpYqSAZXHD+H1PSISlhnQm5UaZhyJvLJr4djqPZM+blG3SXTFWrzPui/2lTqB9khNicujrMD1kJ0HxlNGts2wrqfPpMqPofIn4TU0Kw2UTaYdTbXmIccia22KfXYRSJMp4c0n/SoSqsVYagGxtv7JFxJGYkCwJuADewPK823ucpoYTGwhBEQnY/Jzwda1Zq1QXWiFIBFwXa+XztYnztOOlnfJd+r1evpdfLItvvlGrnKOGTjyX6eKlkVnbmJCE84dkx4iutNWqO2VVUsxPID7ZU/bLtMuOyIiFVpsxDMe82YAagber15zu+3aM2Cq5OWQt9UOCZTpnX/DsMXH1HzdHO1eSV9PYuD5P/1Gl51P/Y8x8f7GUMTd6dqVTe6gZCf2l6+I185k+T/9RpedT/2NOjmPLmnjzycXW7/yaYY4zxJSXYqZKuO4Q9m/0ydjd6LfVPJjblZusw9ru0CY70LKpVkDBlOoBYg908xod5blakjqUdQynQqwuD5gyo+2/C6WFxGSipVGRXykk2LMwIF+Wg0m/S54Zp24+5LlGTPiljjSdr/ssnsp+p4f92v2GbaaXsfWR8HRCMGyoqtY7MAbg9DN1OXqFWSV+WbsW8FXgDtc6Ac+U4Tth2xUK2HwrZmYZXqL6oBuCqkbt+0NB57dD2r4QcXh2RCQ695NSAxHzWG1iLjXY2lNMhUlWBBBIIO4sbWPjNugwY5Lrbtrt4M2qyzj7Vw+40GPBjQI4TrM544RwjI9ZFjMiwiLCRAbEMIo10jAZaNtJHoxGFLR2JjAhY7Xj6GEd2yopJtc+A8Tym14BXRagDJnvoE6kg/Zv7J2+BpUsOpplRla+dwt3DEWDAjWwIHd2IvziTlb2JNKjgE4I9/0jKg6+t7dOUmHgK0yPSFjdA6BlKBlOzX3K+I0nRY/hoqMq07LUJugQ9x+RamTpfw9jAbiFw3iNUJ6NajL6N8yqO9lbUZkzAlQQ2qg2OoIMsSIN0RsHwqi6O6BQ6KzGm2diygqGyN6txmBtfa/SYVpejuqgIL6gAi5B1HW4tb3ybiqhqMM+XYLzCWBbugfNUarYaWjMbxB6irTqFTkLEHKM3ey3DPzF1B0568yS+kVmoxzG5IJ8dOX3zfcA7VWtTxJtbRX39j2/m9/Waaqtten2H/uRKuGvqNOvT/rl74pQjJUyUMkou0WbdKgzDKw6ghh7xMD8Pp2vlAlaUzUp3yMy9cjEe3Q6zIeM4kf/O/8X4yj0GuGa1q490WGiAaATT8c7RrTU06TBqmxYWKr9xb8npOOrcSrVBleq7DmCxt8JHVZKOGnbIT1XUqiqJa4tm9Y3B0sdb+d49sJTfYlD4ajzsfumGkttT7Pvm8wlbDFVD0wuSi92KvUd67KcpIvkFMEgAG1tzrLuky2c+/DnGoAYeB+4zAcK97ZGvvaxnVYGlhWpgNVqJVIBzso9EpF7oLHMx2N9jlIFr3hXaitN3ptVZiyqmbKuRbkMXKjVyQBYaAPe5K6lMLRyE775L8aA9WgT66q6+aXDfBh7po6lKnU0de91XQj8fKQ6JqYKslZDmysGVh6rDmrdNCR7ZVmx+pCUSzFPpmpF3QkLhHFKeKprVpHQ6Mvzla2qsOR+2TZ5qcJQfTLk7UZKStCOoYFWAIIIIOoIO4I6Tjsf8nmHqMWp1Gpg65bB1Hlcgj4zsoSzHnyY/i6ITxxn8kQOCcNXC0Vw6sWC5jmIAJzMWOg85PhCVyk5ScnyycUoqkEq35TB/m0/cr/ADvLSEq35S/1tf3C/wAzzd+Hfm/sZtX8P3RzvDeIVcM/pKLlW521BHRhsRLM7O9sqWJslW1Ortqe431WPqnwPvMq1LW1mNhOnmwQzL3c+TDiyyx8fwegLSuPlD4Dlb+10x3WIFUDk2wbyOx8bdZB7N9tamHtTr3qUxsb99fIn1h4H3yx8PiaGMpHIyvTcFWHMXGqsPmnWc1Y8mkydXMTb1QzwpclHCFpte0HB2wlZqTar6yN9JSTlPnoQfETXKl51lJSSa7nOlGnTMYjxMppiYzHyAoMIghABIq7xAJkprEwJCU7zFUpzb8Jp0yw9KTl5239kj49FLkU7nWyi2pudBYc5VGXuom4+2zpexXDlpYapjXF3qMaFC/zVH+q4vz+bfzkqrVK65SRzy6m3iOc3HDuFFaNOnVyotKjpTNRVqE2L1GIscvezHX6I6TnOIIwdhTJbKxCvTYAsAbBsj6EEa7zbTSRni05MGxQUCpTOekHDPTUjMpXdk+i2XNdec09YlKp7wYOos+pzL6yOCDuRv4zICzOxDKlUDUkFA1tg6NofNST0FpCxNwEZkygkgDMO6xF7Cx9XUMD+EhtZOm0SVqDNby+/wDGOdbk2mtpVmLEk3O17/RGmvskzC1Net9tN9eS/jaSIjjT67bHyNhr03Ejuulzvax03A0Pu08JNd7j2W+A58j5ayI7gg+y/wBh8/bACLVHLp5yOaMmKBazctCbi9uVh1tMONJUBbany25bc4ARMl/L4nyj1p/NG/OZ0QLYb7/DUzJQp6ZuZv8AH7dIAM9H4eH4zN6O+nKSKdIHTnt0t+ekGqqBax3PMbjmNPhtABhpgAX5nTUHQdfGYatYhFC2uTf7TqfojeNWpfO55TBUIsguTpcjlfSwHWAEimdLXPUnm1+fgJJpBWUo4up/II6W+6Q6b30F9dSeZ8deXw6TOrqumrH6K6m99v8AuJqwRCwPE6uCrM1BipBKkHUMoOgdeYnc8N+UWkwAxFNkbmyWdfOxOYfGcPxxO8rWF7Wa1j3t7EjnYiauUZcGPL8kXQzSh8WXInbTAkX9PbwKPf7Iv988D/vj+F/6ZTUcDM39Ow+WXrVz/QuP++WB/wB8fwv/AExf75YH/f8A/o/9Mpy0fk0vF/T8Xlh9XP8AQuD++WB/3x/C/wDTK/7dcSpYnELUotnUUlUmxHeDMSNR0InOkRLS3DpYYpdUbsryaiU1UhQYt4kQiaSkLydwzidXDOKlFyrc/osOjL84SDaOWDVqmCdcHe1+K0uK0RSqAU8Snep3NkdraqrHbNbY8wN7TkEpEEgggg2IOhBGmo85GSbvhrIzg1SSCe8b973nnKOlY4tR48Ft9bt8+fJAenaRWm44oqZiafq30vvbxmocaxwdqxSVDLwhaEsIGV0tFU2jqhjLyPYHyZlqmSeF4V8RXpUUNmeoq5r2yi9y1+VgCb+E15m97HYfPVaobgIhtuBd+7Y9e7fSEY7g3ZZXGuMowejTUMjAq7toz9bhbHLoNL62nMthUey01Ie4CoxD0Gc90FkfXnsD8NJmNB6jimjWZ2CqbCwLaAm/KdK1FChCYWjiEUBb0yM2gs2cEhiScx2ls2lzyPHBvZHLYvgGLyZXw61US/8ApVQ63vq1LZ0cfRZSDYdZzfG6FgaiKyKMihGGV0zMc2dWALC+ub6TdDLBp1MNSt6RcRSbqXrKL9BmOok9MQuKUqKiumoanXAcMp5BrXX2yr1KZpeDZlK0mtt18zby5jxklH18Dvub6j+P2bTqu1PYg0lathFZqY7z0W1dBr3kYeug948eXGLU6e/r5dPZL4yTVoxyi4umT1qk6DfbqeWg/N4I2XU35gct99T08fGYEOXMCNQN72tccgN45N2tm0A3INr735axkRykq+pBvr822a+/iLSPVGZ+WgvppFrv3tDoDobAe3xPjGU39d+gteAGSimdm6Duje2n4zcYThz1AjIoZXdUzAkBHJAAqWF1uDodjcW6TSYU5QL89/bOx4HxnDU8P6CuHQ+kDuUQOKgD51D21sLAewWlWWUlG4qyzHGMpe50YOJ9nK1FGqNkYJ6+SoWK6AXKkA+J12YaaXnMVWtc3nT8V7QpUTEUaeZVdwyPYlnUKgKVc3eA0sGG1gDpOSYliF6nyiwude8eVRT9o52y0/Frnyv/APswZSzAAXsLW236xcZUuQoGgt8P+xHYdQTdtbm1utup5DUy4qFIXYtmO9l22520+J8pKw7kbJYW+cco89NTB1NtLIvlYk+R2H2yTh6QSzMRfezBn2OgYDkdPfADBxJAaN8wzXUhQLAKLi9uQ1miEtvtXhUr8Pc01VmRvSCogUlwoTN6Qr1zHQ6jImgvKlBicXF0wUk1aEtFhC0gTFEFgIogAsW0aI4mACGAEIogAWgBFEW0QUKpkinUmC0LyL3GtiUasxMbwERpFILHKl4R9MxIWGwNrGWixpMYDjLO+Tzs+tTCirUJRGdiSNGexsLE7KLWvueUq7WehOyNJThcMUN1Wiip09QF28yxIv4eJvGfVVJ1/wCEorca3BMNlKjDkg82JDa9GZrj4TTHhz4Y/oaNaqKhAbOUcoo6Orhu8bam57onT4rEZJrnxrEypR6Xy2bIRdbEOrRxtsqEMp29IUDL4Eeq6+weUxr2dDqCVWk41L0CAhPjTOlvKxk04ojcxF4kBuZK/JPpkZcFQxFJcpdHt6psVt53JnHdtuzL1QuJwuHC1ASKqIoIcG1mVRuwIN+ZBG9p2C8SXqJlHEk6yUZdL2K5wclTRTPDez1aoxFRfQols1Sqjgd7ZVS2Z3PJV+E2HE+zaU0ZqZqgqM1q4RXI5WoU1dxfYZytpap4mnWYn4ug2tLPVKfpij//AB9djcUapGm1N/6Zl/8ACYlkIXDViSf9t/vEuN+OKOcjvx0Res/BJaQqxezOONrYSrt9FR98z4PszjndafoHQsSA9TuoLKSczi+Xaw8SJYh7Q66C8nUONqVBO50Ih6zB6VIpvGYOvTY03pOrKbEZWPxW4I8idDMFPDuLt6N9Bp3H3909B0aquAytMdQdDH6r8EPQXk841L5jmBBHI3BHsMnYZTa2nUkaXv472/PjLc7VcLpVqFRnpU2cI2V7AOuUEizb6GVFh00Dbnqdr+A5yyMlJFOTE4slIijnmflexABveynnHhza17+4/k+M3fZPg1DFs9Kq7pUADJkCWZR6+jA94aE+B8DNpiewrKf0VYH9momU/wASfhK5ajHCXTJ0OOGUo2kavs7xQ0hVouxFHEI6ONwpZbLUAHMG3mPKcMVsbcxofZpOzxPDauFqBa1PKd15q46qw0YfZznJY2kyO6tvmJ95uPgRJqSluiDTTpmCKYkdaAwEBFtFAhYCWix1oWhYqEtHKIoELSNkqAiFototorAaRC0faGSIBYhhaAMAMim0I2EAMlX1m+s32zEYQggRkWX/APJ9+oYb93CEROPDM+P3mvxEISp8m+HxRqcT98hPv+ekIRFyGtv7pjqbmEI0NCHn5iIfviwgBibnA/fCEGJC09vaY5fWPs++EIIUjoeE7Hym8PLyhCS7FD5Nbxj/AEav7t/5TKTo7D6ohCW4uGZtT2Nj2YP+cofXb+R5ceE9QeZ+yJCc38T+a+xfpfg/uavtgP8AJ1PCtTt4a8pS/HP1ip9eEJo0H5aMuf5M18yCEJtKhYsIRdwARwhCDGOEdCEgAQhCADhCEIAI0SEIDMuH3H55QhCAj//Z',       
                'nama' => 'Skyland Festival : Fourtwenty & Guyon Waton',
                'tanggal' => '30 September 2023',      
                'lokasi' => 'Online Platform',
                'harga' => 'Rp.60.000',
                'ket' => 'Lunas',
            ],
            [
                'no' => 8,
                'gambar' => 'data:image/jpeg;base64,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',
                'nama' => 'NGAMEN 0.3 Autheticity Soundroom : MORAD',
                'tanggal' => '29 September 2023',
                'lokasi' => 'Online Platform',
                'harga' => 'Rp.60.000',
                'ket' => 'Lunas',
            ],
            [
                'no' => 9,
                'gambar' => 'data:image/jpeg;base64,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',
                'nama' => 'COLDPLAY : MUSIC of the SPHERES',
                'tanggal' => '29 September 2023',
                'lokasi' => 'Online Platform',
                'harga' => 'Rp.60.000',
                'ket' => 'Lunas',
            ]
        ]
    ]);
});

Route::get('/reportpelanggan', function () {
    return view('ReportPelanggan', [
        'report' => [
            [
                'no' => 1,
                'nama' => 'Bambang',
                'identitas' => 'KTP',
                'no_identitas' => '3334455675696547',
                'email' => 'bambang@gmail.com',
                'no_wa' => '08124569573',
                'ket' => 'Lunas',
            ],
            [
                'no' => 2,
                'nama' => 'Lisa',
                'identitas' => 'KTP',
                'no_identitas' => '3354867542398760',
                'email' => 'Lisa@gmail.com',
                'no_wa' => '08578965432',
                'ket' => 'Lunas',
            ],
            [
                'no' => 3,
                'nama' => 'Kuro',
                'identitas' => 'SIM',
                'no_identitas' => '2638492034495674',
                'email' => 'kuro@gmail.com',
                'no_wa' => '08156743621',
                'ket' => 'Lunas',
            ],
            [
                'no' => 4,
                'nama' => 'Kira',
                'identitas' => 'KTP',
                'no_identitas' => '1986756743023451',
                'email' => 'kirabg@gmail.com',
                'no_wa' => '08986745261',
                'ket' => 'Lunas',
            ],
            [
                'no' => 5,
                'nama' => 'Shampuu',
                'identitas' => 'SIM',
                'no_identitas' => '2098467389203765',
                'email' => 'inishampuu@gmail.com',
                'no_wa' => '08246738920',
                'ket' => 'Lunas',
            ]
        ]
    ]);
});


Route::get('/reportevent', function () {
    return view('ReportEvent', [
        'reportEvent' => [
            [
                'no' => 1,
                'gambar' => 'https://ik.imagekit.io/tvlk/xpe-asset/AyJ40ZAo1DOyPyKLZ9c3RGQHTP2oT4ZXW+QmPVVkFQiXFSv42UaHGzSmaSzQ8DO5QIbWPZuF+VkYVRk6gh-Vg4ECbfuQRQ4pHjWJ5Rmbtkk=/4956795833494/Devano%2520Danendra%2520Intimate%2520Virtual%2520Concert%2520-%2520Online%2520Concert-98e4011b-59fa-4bca-9d6b-7ecdaf6134f1.jpeg?tr=q-60,c-at_max,w-1280,h-720&_src=imagekit',
                'penyelenggara'=> 'AKA',
                'nama'=> 'Virtual Concert : Devano Danendra',
                'harga' => 'Rp.60.000',
                'tanggal' => '26 September 2023',
                'waktu' => '18.00 WIB',
            ],
            [
                'no' => 2,
                'gambar' => 'https://static.gatra.com/foldershared/images/2023/iwan/07-Jul/IMG_20230711_161148.jpg',
                'penyelenggara'=> 'SONGS',
                'nama'=> 'Electrochestra : Tiga Masa',
                'harga' => 'Rp.150.000',
                'tanggal' => '26 September 2023',
                'waktu' => '19.00 WIB',
            ],
            [
                'no' => 3,
                'gambar' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQVJhHdye3461OAcaubRyy-19DNCoMuIMvnQg&usqp=CAU',
                'penyelenggara'=> 'INIKK',
                'nama'=> 'Spesial Konser : Sheila On 7',
                'harga' => 'Rp.100.000',
                'tanggal' => '28 September 2023',
                'waktu' => '19.00 WIB',
            ],
            [
                'no' => 4,
                'gambar' => 'https://editorial.femaledaily.com/wp-content/uploads/2022/11/gudfest-2.png',
                'penyelenggara'=> 'SSIG',
                'nama'=> 'GUD FEST',
                'harga' => 'Rp.40.000',
                'tanggal' => '29 September 2023',
                'waktu' => '16.00 WIB',
            ],
            [
                'no' => 5,
                'gambar' => 'https://static.gatra.com/foldershared/images/2023/RLN/05-May/1591033789-758x644_(1).jpg',
                'penyelenggara'=> 'PP3',
                'nama'=> 'COLDPLAY : MUSIC of the SPHERES',
                'harga' => 'Rp.600.000',
                'tanggal' => '29 September 2023',
                'waktu' => '17.00 WIB',
            ]
        ]
    ]);
});

Route::get('/editPelanggan', function () {
    return view('EditPelanggan');
});

Route::get('/editEvent', function () {
    return view('EditEvent');
});
