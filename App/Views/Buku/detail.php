<div class="container mt-3">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">
                <?php echo $data['buku']['judul']; ?>
            </h5>

            <h6 class="card-subtitle mb-2 text-muted">
                <?php echo $data['buku']['penulis']; ?>
            </h6>

            <p class="card-text">
                Penerbit: <?php echo $data['buku']['penerbit']; ?>
            </p>

            <p class="card-text">
                Tahun: <?php echo $data['buku']['tahun']; ?>
            </p>

            <a href="<?php echo BASEURL; ?>/Buku_2511500079"
               class="card-link">Kembali</a>
        </div>
    </div>
</div>