<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = [
            'pentingnya-struktur-bangunan' => [
                'title' => 'Pentingnya Struktur Bangunan: Fondasi Kekuatan dan Keamanan Rumah Anda',
                'author' => 'Admin',
                'category' => 'Architecture',
                'date' => 'January 2, 2025',
                'image' => 'assets_3/assets/img/blog/blog-1.jpg',
                'content' => 'Membangun rumah impian bukan hanya tentang desain yang menawan atau interior yang mewah...',
            ],
            'tips-membangun-rumah' => [
                'title' => 'Tips Membangun Rumah Impian dengan Anggaran Terbatas',
                'author' => 'John Doe',
                'category' => 'Construction',
                'date' => 'December 12, 2024',
                'image' => 'assets_3/assets/img/blog/blog-2.jpg',
                'content' => 'Membangun rumah impian dengan anggaran terbatas bukanlah hal yang mustahil...',
            ],
            'mengapa-renovasi-diperlukan' => [
                'title' => 'Mengapa Renovasi Rumah Diperlukan?',
                'author' => 'Jane Smith',
                'category' => 'Home Improvement',
                'date' => 'November 20, 2024',
                'image' => 'assets_3/assets/img/blog/blog-3.jpg',
                'content' => 'Renovasi rumah tidak hanya memperbaiki tampilan, tetapi juga meningkatkan fungsionalitas...',
            ],
            'panduan-memilih-material' => [
                'title' => 'Panduan Memilih Material Bangunan Berkualitas',
                'author' => 'Admin',
                'category' => 'Construction',
                'date' => 'October 15, 2024',
                'image' => 'assets_3/assets/img/blog/blog-4.jpg',
                'content' => 'Material yang berkualitas adalah kunci dari bangunan yang kokoh dan tahan lama...',
            ],
            'keuntungan-rumah-minimalis' => [
                'title' => 'Keuntungan Memiliki Rumah Bergaya Minimalis',
                'author' => 'Sarah Lee',
                'category' => 'Design',
                'date' => 'September 10, 2024',
                'image' => 'assets_3/assets/img/blog/blog-5.jpg',
                'content' => 'Rumah minimalis menjadi pilihan banyak orang karena desainnya yang simpel dan efisien...',
            ],
            'cara-merawat-rumah' => [
                'title' => 'Cara Merawat Rumah Agar Tetap Nyaman dan Bersih',
                'author' => 'John Doe',
                'category' => 'Maintenance',
                'date' => 'August 5, 2024',
                'image' => 'assets_3/assets/img/blog/blog-6.jpg',
                'content' => 'Merawat rumah secara rutin adalah cara terbaik untuk menjaga kenyamanan dan kebersihan...',
            ],
            'desain-interior-modern' => [
                'title' => 'Desain Interior Modern untuk Rumah Masa Kini',
                'author' => 'Jane Smith',
                'category' => 'Interior Design',
                'date' => 'July 20, 2024',
                'image' => 'assets_3/assets/img/blog/blog-7.jpg',
                'content' => 'Interior modern menonjolkan elemen sederhana, tetapi tetap elegan dan fungsional...',
            ],
            'pemanfaatan-energi-terbarukan' => [
                'title' => 'Pemanfaatan Energi Terbarukan di Rumah',
                'author' => 'Admin',
                'category' => 'Green Living',
                'date' => 'June 10, 2024',
                'image' => 'assets_3/assets/img/blog/blog-8.jpg',
                'content' => 'Energi terbarukan seperti panel surya semakin banyak digunakan di rumah-rumah modern...',
            ],
            'tips-menghemat-energi' => [
                'title' => 'Tips Menghemat Energi di Rumah Anda',
                'author' => 'John Doe',
                'category' => 'Green Living',
                'date' => 'May 5, 2024',
                'image' => 'assets_3/assets/img/blog/blog-9.jpg',
                'content' => 'Hemat energi di rumah Anda dengan langkah-langkah sederhana seperti mengganti lampu LED...',
            ],
            'perencanaan-pembangunan' => [
                'title' => 'Perencanaan Pembangunan Rumah yang Tepat',
                'author' => 'Sarah Lee',
                'category' => 'Planning',
                'date' => 'April 25, 2024',
                'image' => 'assets_3/assets/img/blog/blog-10.jpg',
                'content' => 'Perencanaan yang baik adalah langkah awal untuk memastikan pembangunan rumah berjalan lancar...',
            ],
            'perawatan-bangunan-tua' => [
                'title' => 'Perawatan Bangunan Tua: Antara Nilai Sejarah dan Keamanan',
                'author' => 'Jane Smith',
                'category' => 'Preservation',
                'date' => 'March 15, 2024',
                'image' => 'assets_3/assets/img/blog/blog-11.jpg',
                'content' => 'Bangunan tua memiliki nilai sejarah, tetapi memerlukan perawatan ekstra untuk tetap aman...',
            ],
        ];  
        
        return view('tamplate_artikel.index', ['artikel' => $artikel]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function detail($slug)
{
    // Data artikel berdasarkan slug
    $artikel = [
        'pentingnya-struktur-bangunan' => [
            'title' => 'Pentingnya Struktur Bangunan: Fondasi Kekuatan dan Keamanan Rumah Anda',
            'author' => 'Admin',
            'category' => 'Architecture',
            'date' => 'January 2, 2025',
            'image' => 'assets_3/assets/img/blog/blog-1.jpg',
            'content' => 'Membangun rumah impian bukan hanya tentang desain yang menawan atau interior yang mewah...',
        ],
        'tips-membangun-rumah' => [
            'title' => 'Tips Membangun Rumah Impian dengan Anggaran Terbatas',
            'author' => 'John Doe',
            'category' => 'Construction',
            'date' => 'December 12, 2024',
            'image' => 'assets_3/assets/img/blog/blog-2.jpg',
            'content' => 'Membangun rumah impian dengan anggaran terbatas bukanlah hal yang mustahil...',
        ],
        'mengapa-renovasi-diperlukan' => [
            'title' => 'Mengapa Renovasi Rumah Diperlukan?',
            'author' => 'Jane Smith',
            'category' => 'Home Improvement',
            'date' => 'November 20, 2024',
            'image' => 'assets_3/assets/img/blog/blog-3.jpg',
            'content' => 'Renovasi rumah tidak hanya memperbaiki tampilan, tetapi juga meningkatkan fungsionalitas...',
        ],
        'panduan-memilih-material' => [
            'title' => 'Panduan Memilih Material Bangunan Berkualitas',
            'author' => 'Admin',
            'category' => 'Construction',
            'date' => 'October 15, 2024',
            'image' => 'assets_3/assets/img/blog/blog-4.jpg',
            'content' => 'Material yang berkualitas adalah kunci dari bangunan yang kokoh dan tahan lama...',
        ],
        'keuntungan-rumah-minimalis' => [
            'title' => 'Keuntungan Memiliki Rumah Bergaya Minimalis',
            'author' => 'Sarah Lee',
            'category' => 'Design',
            'date' => 'September 10, 2024',
            'image' => 'assets_3/assets/img/blog/blog-5.jpg',
            'content' => 'Rumah minimalis menjadi pilihan banyak orang karena desainnya yang simpel dan efisien...',
        ],
        'cara-merawat-rumah' => [
            'title' => 'Cara Merawat Rumah Agar Tetap Nyaman dan Bersih',
            'author' => 'John Doe',
            'category' => 'Maintenance',
            'date' => 'August 5, 2024',
            'image' => 'assets_3/assets/img/blog/blog-6.jpg',
            'content' => 'Merawat rumah secara rutin adalah cara terbaik untuk menjaga kenyamanan dan kebersihan...',
        ],
        'desain-interior-modern' => [
            'title' => 'Desain Interior Modern untuk Rumah Masa Kini',
            'author' => 'Jane Smith',
            'category' => 'Interior Design',
            'date' => 'July 20, 2024',
            'image' => 'assets_3/assets/img/blog/blog-7.jpg',
            'content' => 'Interior modern menonjolkan elemen sederhana, tetapi tetap elegan dan fungsional...',
        ],
        'pemanfaatan-energi-terbarukan' => [
            'title' => 'Pemanfaatan Energi Terbarukan di Rumah',
            'author' => 'Admin',
            'category' => 'Green Living',
            'date' => 'June 10, 2024',
            'image' => 'assets_3/assets/img/blog/blog-8.jpg',
            'content' => 'Energi terbarukan seperti panel surya semakin banyak digunakan di rumah-rumah modern...',
        ],
        'tips-menghemat-energi' => [
            'title' => 'Tips Menghemat Energi di Rumah Anda',
            'author' => 'John Doe',
            'category' => 'Green Living',
            'date' => 'May 5, 2024',
            'image' => 'assets_3/assets/img/blog/blog-9.jpg',
            'content' => 'Hemat energi di rumah Anda dengan langkah-langkah sederhana seperti mengganti lampu LED...',
        ],
        'perencanaan-pembangunan' => [
            'title' => 'Perencanaan Pembangunan Rumah yang Tepat',
            'author' => 'Sarah Lee',
            'category' => 'Planning',
            'date' => 'April 25, 2024',
            'image' => 'assets_3/assets/img/blog/blog-10.jpg',
            'content' => 'Perencanaan yang baik adalah langkah awal untuk memastikan pembangunan rumah berjalan lancar...',
        ],
        'perawatan-bangunan-tua' => [
            'title' => 'Perawatan Bangunan Tua: Antara Nilai Sejarah dan Keamanan',
            'author' => 'Jane Smith',
            'category' => 'Preservation',
            'date' => 'March 15, 2024',
            'image' => 'assets_3/assets/img/blog/blog-11.jpg',
            'content' => 'Bangunan tua memiliki nilai sejarah, tetapi memerlukan perawatan ekstra untuk tetap aman...',
        ],
    ];    

    // Cek apakah slug ada dalam data artikel
    if (!array_key_exists($slug, $artikel)) {
        abort(404); // Jika tidak ditemukan, tampilkan halaman 404
    }

    return view('tamplate_artikel.detail', ['artikel' => $artikel[$slug], 'detail' => $artikel[$slug]]);

}
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
