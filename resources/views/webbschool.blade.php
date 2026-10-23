<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Webs Sekolah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid px-4">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="https://e7.pngegg.com/pngimages/518/469/png-clipart-smk-pgri-wlingi-logo-vocational-school-islami-text-logo-thumbnail.png"
                     alt="Logo SMK PGRI Wlingi"
                     width="70"
                     height="70"
                     class="me-2">
                <div>
                    <div>SMK PGRI WLINGI</div>
                    <h6><small class="text-muted">
                        <a class="nav-link p-0" href="https://www.nasa.gov/">XI RPL 2</a></small></h6>
                </div>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Profil</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Sejarah</a></li>
                            <li><a class="dropdown-item" href="#">Visi & Misi</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Akademik</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Jurusan</a></li>
                            <li><a class="dropdown-item" href="#">Kurikulum</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Kesiswaan</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Ekstrakurikuler</a></li>
                            <li><a class="dropdown-item" href="#">Prestasi</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Berita</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Pengumuman</a></li>
                            <li><a class="dropdown-item" href="#">Artikel</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontak</a>
                    </li>
                </ul>

                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    {{-- Carousel --}}
    <div id="carouselExampleIndicators" class="carousel slide mb-5">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://smkpgriwlingi.sch.id/gambar/hero-sekolah.jpeg" class="d-block w-100" style="height: 500px; object-fit: cover;" alt="SMK">
            </div>
            <div class="carousel-item">
                <img src="https://smkpgriwlingi.sch.id/gambar/dropzone/IMG_8778_1784596927.jpg" class="d-block w-100" style="height: 500px; object-fit: cover;" alt="SMK">
            </div>
            <div class="carousel-item">
                <img src="https://smkpgriwlingi.sch.id/gambar/dropzone/WhatsApp%20Image%202025-09-18%20at%2012.31.02_1758174017.jpg" class="d-block w-100" style="height: 500px; object-fit: cover;" alt="SMK">
            </div>
            <div class="position-absolute bottom-0 start-0 m-3 text-white p-3 rounded" style="background-color: rgba(0, 0, 0, 0.6);">
                <h5 class="m-0">Selamat datang di Website Sekolah</h5>
                <p class="m-0"><small>SMKS PGRI WLINGI</small></p>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    {{-- Main Content Container (Full Width dengan Padding Samping) --}}
    <div class="container-fluid px-4 my-4">
        <div class="row justify-content-between g-4 mb-5">
            <div class="col-lg-6">
                <div class="card h-100 shadow-sm border">
                    <h5 class="card-header bg-secondary text-white fw-bold">Kepala Sekolah</h5>
                    <div class="card-body p-4">
                        <div class="row g-3 align-items-center">
                            <div class="col-md-4 text-center">
                                <img src="https://sikabar.smkpgriwlingi.sch.id/img/guru-putih/Drs.%20BAMBANG%20SETIYONO,%20ST,%20M.Pd.jpg" class="img-fluid rounded shadow-sm" alt="Kepala Sekolah">
                            </div>
                            <div class="col-md-8">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item px-0"><strong>Nama Guru:</strong> Drs. BAMBANG SETIYONO, S.T., M.Pd</li>
                                    <li class="list-group-item px-0"><strong>Kode Guru:</strong> A1</li>
                                    <li class="list-group-item px-0"><strong>Atribut:</strong> Kepala Sekolah, Guru Pengajar</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- KARTU PENGUMUMAN TERBARU (POJOK KANAN) -->
            <div class="col-lg-6">
                <div class="card h-100 shadow-sm border">
                    <h6 class="card-header bg-info text-dark fw-bold fs-5">Pengumuman Terbaru</h6>
                    <div class="card-body p-3" style="max-height: 260px; overflow-y: auto;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex align-items-center py-2">
                                <svg class="me-3 text-primary flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16"><path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5z"/></svg>
                                <div>Pendaftaran Peserta Didik TA 2026/2027 - <strong>RPL</strong></div>
                            </li>
                            <li class="list-group-item d-flex align-items-center py-2">
                                <svg class="me-3 text-primary flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16"><path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5z"/></svg>
                                <div>Pendaftaran Peserta Didik TA 2026/2027 - <strong>TKJ</strong></div>
                            </li>
                            <li class="list-group-item d-flex align-items-center py-2">
                                <svg class="me-3 text-primary flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16"><path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5z"/></svg>
                                <div>Pendaftaran Peserta Didik TA 2026/2027 - <strong>DKV</strong></div>
                            </li>
                            <li class="list-group-item d-flex align-items-center py-2">
                                <svg class="me-3 text-primary flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16"><path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5z"/></svg>
                                <div>Pendaftaran Peserta Didik TA 2026/2027 - <strong>TKKR</strong></div>
                            </li>
                            <li class="list-group-item d-flex align-items-center py-2">
                                <svg class="me-3 text-primary flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16"><path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5z"/></svg>
                                <div>Pendaftaran Peserta Didik TA 2026/2027 - <strong>TAB</strong></div>
                            </li>
                            <li class="list-group-item d-flex align-items-center py-2">
                                <svg class="me-3 text-primary flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16"><path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5z"/></svg>
                                <div>Pendaftaran Peserta Didik TA 2026/2027 - <strong>TKRO</strong></div>
                            </li>
                            <li class="list-group-item d-flex align-items-center py-2">
                                <svg class="me-3 text-primary flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16"><path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5z"/></svg>
                                <div>Pendaftaran Peserta Didik TA 2026/2027 - <strong>TPM</strong></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

        <!-- ROW BAWAH: KEGIATAN TERBARU (MEMBENTANG DI BAWAH) -->
        <div class="row">
            <div class="col-12">
                <div class="card shadow-sm">
                    <div class="card-header bg-secondary text-white d-flex justify-content-between align-items-center">
                        <span class="fw-bold">Kegiatan Terbaru</span>
                        <a href="#" class="text-white text-decoration-none small">Lihat semua Kegiatan &rarr;</a>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            
                            <div class="col-md-3">
                                <div class="card h-100">
                                    <img src="https://smkpgriwlingi.sch.id/gambar/dropzone/WhatsApp%20Image%202026-08-28%20at%2011.00.00_1788240035.jpg" class="card-img-top" alt="PT Tesco Indomartin">
                                    <div class="card-body">
                                        <h6 class="card-title fw-bold">PT Tesco Indomartin</h6>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="card h-100">
                                    <img src="https://smkpgriwlingi.sch.id/gambar/dropzone/juara%203%20futsal%20(1)_1776819566.png" class="card-img-top" alt="Tim Futsal">
                                    <div class="card-body">
                                        <h6 class="card-title fw-bold">Tim Futsal SMKS PGRI WLINGI</h6>
                                        <p class="card-text small text-muted">Apresiasi Kepada tim Futsal Juara 3 Pesma Championship 2026 SMA/SMK Sederajat Se-Karesidenan Kediri</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="card h-100">
                                    <img src="https://smkpgriwlingi.sch.id/gambar/dropzone/whatsapp-image-2026-10-22-at-125021_1792648580_jMKrQo.jpg" class="card-img-top" alt="United Tractors">
                                    <div class="card-body">
                                        <h6 class="card-title fw-bold">Rekrutmen PT United Tractors Jakarta</h6>
                                        <p class="card-text small text-muted">Gelar Karya Aruna Asmara TKKR SMK PGRI Wlingi Open Sponsor, Collab Bareng Calon MUA Kece Yuk!</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="card h-100">
                                    <img src="https://smkpgriwlingi.sch.id/gambar/dropzone/WhatsApp%20Image%202025-12-09%20at%2015.14.29_1765412720.jpg" class="card-img-top" alt="SPMB">
                                    <div class="card-body">
                                        <h6 class="card-title fw-bold">Pendaftaran SPMB SMKS PGRI Wlingi</h6>
                                        <p class="card-text small text-muted">Pendaftaran Di buka! Waktunya Membangun Karir, Bukan Sekadar Sekolah, Wujudkan Masa Depan Cemerlangmu di Sini: SPMB SMKS PGRI Wlingi</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Footer -->
    <footer class="bg-light text-dark text-center py-4 mt-5 border-top">
        <div class="container">
            <p class="mb-0">&copy; 2026 SMK PGRI Wlingi</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>