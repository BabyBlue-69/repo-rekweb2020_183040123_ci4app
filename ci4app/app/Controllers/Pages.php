<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Rumah Akuh',
            'tes' => ['satu', 'dua', 'tiga']
        ];

        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'Tentang Saya'
        ];

        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Hubungi Kami',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'jl. Raya Petir KM.6',
                    'kota' => 'Serang'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Perum Widya Asri, Blok C no.23',
                    'kota' => 'Serang'
                ]
            ]
        ];

        return view('pages/contact', $data);
    }

    //--------------------------------------------------------------------

}
