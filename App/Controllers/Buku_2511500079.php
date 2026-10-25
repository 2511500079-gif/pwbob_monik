<?php
class Buku_2511500079 extends Controller {
    public function index()
    {
        $data['judul'] = 'Daftar Buku';
        $data['buku'] = $this->model('Buku_model_2511500079')->getAllBuku();

        $this->view('templates/header', $data);
        $this->view('buku/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Buku';
        $data['buku'] = $this->model('Buku_model_2511500079')->getBukuById($id);

        $this->view('templates/header', $data);
        $this->view('buku/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Buku_model_2511500079')->tambahDataBuku($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
        }

        header('Location: ' . BASEURL . '/Buku_2511500079');
        exit;
    }

    public function hapus($id)
    {
        if ($this->model('Buku_model_2511500079')->hapusDataBuku($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
        }

        header('Location: ' . BASEURL . '/Buku_2511500079');
        exit;
    }
}