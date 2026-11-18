<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
    protected $mahasiswaModel;

    public function __construct()
    {
        $this->mahasiswaModel = new MahasiswaModel();
    }

    // READ: Menampilkan seluruh data
    public function index()
    {
        $data = [
            'title' => 'Data Mahasiswa',
            'mahasiswa' => $this->mahasiswaModel->findAll()
        ];

        return view('mahasiswa/index', $data);
    }

    // Menampilkan formulir tambah
    public function create()
    {
        helper('form');

        return view('mahasiswa/create', [
            'title' => 'Tambah Mahasiswa'
        ]);
    }

    // CREATE: Menyimpan data baru
    public function store()
    {
        $data = [
            'nim' => trim($this->request->getPost('nim') ?? ''),
            'nama' => trim($this->request->getPost('nama') ?? ''),
            'prodi' => trim($this->request->getPost('prodi') ?? '')
        ];

        if (
            $data['nim'] === '' ||
            $data['nama'] === '' ||
            $data['prodi'] === ''
        ) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Semua kolom wajib diisi.');
        }

        $this->mahasiswaModel->insert($data);

        return redirect()->to('/mahasiswa')
            ->with('success', 'Data mahasiswa berhasil ditambahkan.');
    }

    // Menampilkan formulir edit
    public function edit($id)
    {
        helper('form');

        $mhs = $this->mahasiswaModel->find($id);

        if (!$mhs) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound(
                'Data mahasiswa tidak ditemukan.'
            );
        }

        return view('mahasiswa/edit', [
            'title' => 'Edit Mahasiswa',
            'mhs' => $mhs
        ]);
    }

    // UPDATE: Memperbarui data
    public function update($id)
    {
        $mhs = $this->mahasiswaModel->find($id);

        if (!$mhs) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound(
                'Data mahasiswa tidak ditemukan.'
            );
        }

        $data = [
            'nim' => trim($this->request->getPost('nim') ?? ''),
            'nama' => trim($this->request->getPost('nama') ?? ''),
            'prodi' => trim($this->request->getPost('prodi') ?? '')
        ];

        if (
            $data['nim'] === '' ||
            $data['nama'] === '' ||
            $data['prodi'] === ''
        ) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Semua kolom wajib diisi.');
        }

        $this->mahasiswaModel->update($id, $data);

        return redirect()->to('/mahasiswa')
            ->with('success', 'Data mahasiswa berhasil diperbarui.');
    }

    // DELETE: Menghapus data
    public function delete($id)
    {
        $mhs = $this->mahasiswaModel->find($id);

        if (!$mhs) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound(
                'Data mahasiswa tidak ditemukan.'
            );
        }

        $this->mahasiswaModel->delete($id);

        return redirect()->to('/mahasiswa')
            ->with('success', 'Data mahasiswa berhasil dihapus.');
    }
}
