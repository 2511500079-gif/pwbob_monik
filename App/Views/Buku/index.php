
<div class="container mt-4">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">

            <button type="button" class="btn btn-primary"
                data-toggle="modal" data-target="#formModal">
                Tambah Data Buku
            </button>

            <br><br>

            <h3>Daftar Buku</h3>

            <ul class="list-group">
                <?php foreach ($data['buku'] as $buku) : ?>
                    <li class="list-group-item">
                        <?php echo $buku['judul']; ?>

                        <a href="<?php echo BASEURL; ?>/Buku_2511500079/hapus/<?php echo $buku['id']; ?>"
                           class="badge badge-danger float-right ml-1"
                           onclick="return confirm('Yakin ingin menghapus buku ini?');">
                            hapus
                        </a>

                        <a href="<?php echo BASEURL; ?>/Buku_2511500079/detail/<?php echo $buku['id']; ?>"
                           class="badge badge-primary float-right ml-1">
                            detail
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>

        </div>
    </div>
</div>

<!-- Modal Tambah Buku -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog"
    aria-labelledby="judulModal" aria-hidden="true">

    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="judulModal">
                    Tambah Data Buku
                </h5>

                <button type="button" class="close"
                    data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="<?php echo BASEURL; ?>/Buku_2511500079/tambah"
                    method="post">

                    <div class="form-group">
                        <label for="judul">Judul Buku</label>
                        <input type="text" class="form-control"
                            id="judul" name="judul" required>
                    </div>

                    <div class="form-group">
                        <label for="penulis">Penulis</label>
                        <input type="text" class="form-control"
                            id="penulis" name="penulis" required>
                    </div>

                    <div class="form-group">
                        <label for="penerbit">Penerbit</label>
                        <input type="text" class="form-control"
                            id="penerbit" name="penerbit" required>
                    </div>

                    <div class="form-group">
                        <label for="tahun">Tahun Terbit</label>
                        <input type="number" class="form-control"
                            id="tahun" name="tahun"
                            min="1901" max="2155" required>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                            data-dismiss="modal">
                            Tutup
                        </button>

                        <button type="submit" class="btn btn-primary">
                            Tambah Data
                        </button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>