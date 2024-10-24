<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul']; ?></title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="<?= BASEURL; ?>">
            <i class="fas fa-graduation-cap mr-2"></i>
            Sistem Akademik
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
              <a class="nav-link <?= (isset($data['judul']) && strtolower($data['judul']) == 'home') ? 'active' : ''; ?>" href="<?= BASEURL; ?>">
                  <i class="fas fa-home mr-1"></i> Beranda
              </a>
              <a class="nav-link <?= (isset($data['judul']) && strtolower($data['judul']) == 'about') ? 'active' : ''; ?>" href="<?= BASEURL; ?>/about">
                  <i class="fas fa-info-circle mr-1"></i> Tentang
              </a>
              <a class="nav-link <?= (isset($data['judul']) && strtolower($data['judul']) == 'mahasiswa') ? 'active' : ''; ?>" href="<?= BASEURL; ?>/mahasiswa">
                  <i class="fas fa-users mr-1"></i> Mahasiswa
              </a>
          </div>
        </div>
    </div>
</nav>