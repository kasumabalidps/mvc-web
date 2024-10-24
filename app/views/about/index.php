<div class="container py-5">
    <div class="row">
        <div class="col-lg-6">
            <img src="<?= BASEURL; ?>/img/image.png" alt="Foto Profil" class="img-fluid rounded mb-4 shadow-lg">
        </div>
        <div class="col-lg-6">
            <h1 class="display-4 mb-4">Tentang Saya</h1>
            <div class="card bg-light shadow-sm">
                <div class="card-body">
                    <h2 class="card-title mb-3">Halo, saya <?=$data['nama'] ?></h2>
                    <p class="card-text lead">
                        Umur saya <?php echo $data['umur']; ?> tahun dan saya adalah seorang <?php echo $data['pekerjaan']; ?>.
                    </p>
                    <a href="#" class="btn btn-primary btn-lg mt-3">Hubungi Saya</a>
                </div>
            </div>
        </div>
    </div>
</div>