<?php

namespace App\Controllers;

use App\Models\OrangModel;

class Orang extends BaseController
{
    protected $orangModel;

    public function __construct()
    {
        $this->orangModel = new OrangModel();
    }


    public function index()
    {
        $curentPage = $this->request->getVar('page_orang') ? $this->request->getVar('page_orang') : 1;
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $orang = $this->orangModel->search($keyword);
        } else {
            $orang = $this->orangModel;
        }


        $data = [
            'title' => 'orang | deZadev',
            'orang' => $orang->paginate(5, 'orang'),
            'pager' => $this->orangModel->pager,
            'curentPage' => $curentPage
        ];

        return view('orang/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'create | deZadev',
            'validation' => \Config\Services::Validation()
        ];

        return view('orang/create', $data);
    }

    public function save()
    {
        //validasi input
        if (!$this->validate([
            'nama' => 'required[orang.nama]',
            'alamat' => 'required[orang.alamat]',
            'email' => [
                'rules' => 'required|is_unique[orang.email]',
                'errors' => [
                    'required' => '{field} harus di isi',
                    'is_unique' => '{field} sudah ada'
                ]
            ]
        ])) {
            $validation = \Config\Services::Validation();
            return redirect()->to('/orang/create')->withInput()->with('validation', $validation);
        }

        // dd($this->request->getVar());
        $this->orangModel->save([
            'nama' => $this->request->getVar('nama'),
            'alamat' => $this->request->getVar('alamat'),
            'email' => $this->request->getVar('email')
        ]);

        session()->setFlashdata('pesan', 'data berhasil di tambah');
        return redirect()->to('/orang');
    }

    public function delete($id)
    {
        $this->orangModel->delete($id);
        session()->setFlashdata('pesan', 'data berhasil di hapus');
        return redirect()->to('/orang');
    }


    public function edit($id)
    {
        $data = [
            'title' => 'edit | deZadev',
            'validation' => \Config\Services::Validation(),
            'orang' => $this->orangModel->getOrang($id)
        ];

        return view('orang/edit', $data);
    }


    public function update($id)
    {
        // if (!$this->validate([
        //     'nama' => 'required[orang.nama]',
        //     'alamat' => 'required[orang.alamat]',
        //     'email' => [
        //         'rules' => 'required|is_unique[orang.email]',
        //         'errors' => [
        //             'required' => '{field} harus di isi',
        //             'is_unique' => '{field} sudah ada'
        //         ]
        //     ]
        // ])) {
        //     $validation = \Config\Services::Validation();
        //     return redirect()->to('orang/edit/' . $this->request->getVar('id'))->withInput()->with('validation', $validation);
        // }

        $this->orangModel->save([
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'alamat' => $this->request->getVar('alamat'),
            'email' => $this->request->getVar('email')
        ]);

        session()->setFlashdata('pesan', 'data berhasil di ubah');
        return redirect()->to('/orang');
    }

    public function detail($id)
    {
        $data = [
            'title' => 'detail | deZadev',
            'orang' => $this->orangModel->getOrang($id)
        ];

        return view('orang/detail', $data);
    }
}
