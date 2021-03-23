<?php

namespace App\Controllers;

use App\Models\KomikModel;

class Komik extends BaseController
{
    protected $komikModel;
    public function __construct()
    {
        $this->komikModel = new KomikModel();
    }


    public function index()
    {
        $data = [
            'title' => 'komik | deZadev',
            'komik' => $this->komikModel->getKomik()
        ];

        return view('komik/index', $data);
    }


    public function detail($slug)
    {
        // $komik = $this->komikModel->where(['slug' == $slug])->first();
        // dd($komik);
        $data = [
            'title' => 'detail | deZadev',
            'komik' => $this->komikModel->getKomik($slug)
        ];

        return view('komik/detail', $data);
    }
}
