<?php

namespace App\Controllers;

use App\Models\ArtikelModel;

class Artikel extends BaseController
{
    // LIST USER
   public function index()
{
    $model = new ArtikelModel();

    $keyword = $this->request->getGet('q');

    if ($keyword) {
        $artikel = $model
            ->like('judul', $keyword)
            ->orLike('isi', $keyword)
            ->findAll();
    } else {
        $artikel = $model->findAll();
    }

    return view('artikel/index', [
        'title' => 'Daftar Artikel',
        'artikel' => $artikel,
        'keyword' => $keyword
    ]);
}

    // DETAIL
    public function view($slug)
    {
        $model = new ArtikelModel();
        $artikel = $model->where(['slug' => $slug])->first();

        if (!$artikel) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('artikel/detail', [
            'title' => $artikel['judul'],
            'artikel' => $artikel
        ]);
    }

    // ADMIN LIST
    public function admin_index()
    {
        $model = new ArtikelModel();

        return view('artikel/admin_index', [
            'title' => 'Admin Artikel',
            'artikel' => $model->findAll()
        ]);
    }

    // FORM TAMBAH
    public function add()
    {
        return view('artikel/form_add', [
            'title' => 'Tambah Artikel'
        ]);
    }

    // SIMPAN
    public function save()
{
    // VALIDASI
    if (!$this->validate([
        'judul' => 'required',
        'isi'   => 'required'
    ])) {
        return redirect()->back()->withInput();
    }

    $model = new ArtikelModel();

    $model->save([
        'judul' => $this->request->getPost('judul'),
        'isi'   => $this->request->getPost('isi'),
        'slug'  => url_title($this->request->getPost('judul'), '-', true),
        'status'=> 1
    ]);

    return redirect()->to('/admin/artikel');
}

    // FORM EDIT
    public function edit($id)
    {
        $model = new ArtikelModel();

        return view('artikel/form_edit', [
            'title' => 'Edit Artikel',
            'artikel' => $model->find($id)
        ]);
    }

    // UPDATE
   public function update($id)
{
    // VALIDASI
    if (!$this->validate([
        'judul' => 'required',
        'isi'   => 'required'
    ])) {
        return redirect()->back()->withInput();
    }

    $model = new ArtikelModel();

    $model->update($id, [
        'judul' => $this->request->getPost('judul'),
        'isi'   => $this->request->getPost('isi'),
        'slug'  => url_title($this->request->getPost('judul'), '-', true),
    ]);

    return redirect()->to('/admin/artikel');
}
    // DELETE
    public function delete($id)
    {
        $model = new ArtikelModel();
        $model->delete($id);

        return redirect()->to('/admin/artikel');
    }
}