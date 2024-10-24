<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <h3 class="mb-4 text-center">Daftar Mahasiswa</h3>
            <div class="row">
                <?php foreach( $data['mhs'] as $mhs ) : ?>
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title"><?= $mhs['nama']; ?></h5>
                                <p class="card-text">
                                    <strong>NIM:</strong> <?= $mhs['nim']; ?><br>
                                    <strong>Email:</strong> <?= $mhs['email']; ?><br>
                                    <strong>Jurusan:</strong> <?= $mhs['jurusan']; ?>
                                </p>
                                <a href="#" class="btn btn-primary btn-sm">Detail</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>    
            </div>
        </div>
    </div>
</div>