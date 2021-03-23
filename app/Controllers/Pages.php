<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {

        $data = [
            'title' => 'home | deZadev'
        ];
        echo view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'about | deZadev'
        ];
        echo view('pages/about', $data);
    }
    public function contak()
    {
        $data = [
            'title' => 'contak | deZadev',
            'alamat' => [
                [
                    'tipe' => 'rumah',
                    'alamat' => 'jl. jetis no. 123',
                    'kota' => 'semarang'
                ],
                [
                    'tipe' => 'kantor',
                    'alamat' => 'jl. kalisegoro no. 321',
                    'kota' => 'jepara'
                ]
            ]
        ];
        return view('pages/contak', $data);
    }

    public function layout()
    {
        $data = [
            'title' => 'layout'
        ];
        return view('pages/layout', $data);
    }
}
