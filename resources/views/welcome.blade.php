<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite([
            "resources/css/app.css",
            "resources/scss/app.scss",
            "resources/js/app.js",
        ])

        <style>

    </style>
    </head>
    <body>
        {{-- Bagian Header --}}
        <header>
            <nav class="navbar">
                <div class="navbar-img">
                    <img src='/assets/logo.png' alt=''>
                </div>
                <div class="navbar-link">
                    <ul>
                        <li><a href="#">Homepage</a></li>
                        <li><a href="#">Tentang</a></li>
                        <li><a href="#">Daftar Hotel</a></li>
                        <li><a href="#">Bantuan</a></li>
                    </ul>
                </div>
            </nav>
            <div class="container">
                <div class="container-title">
                        <div class="container-title-operator">
                            <img src='/assets/iconHeader.png' alt=''>
                            <h3>Hotel Operator</h3>
                        </div>
                    <h1>Membantu Menjalankan Operasi Bisnis Pariwisata Anda</h1>
                    <h5>GWA membantu mengoperasikan keseluruhan layanan hotel, menajadikan mitra lebih percaya diri dalam menjalankan bisnis.</h5>
                    <button>Konsultasikan Bisnis Saya</button>
                    <p>Scroll →</p>
                </div>
                <div class="container-img">
                    <img src='/assets/hero_Image.jpg' alt=''>
                </div>
            </div>
            <div class="header-indo">
                <img class="icon-indo" src='/assets/indo.png' alt=''>
                <p>Indonesia (ID)</p>
                <img src='/assets/arrow-down.png' alt=''>
            </div>
            <img class="line-header" src='/assets/lineHeader.png' alt=''>
        </header>
        {{-- Header End --}}


        {{-- Our Workflow --}}
        <main class="main-workflow">
            <img class="line-main" src='/assets/lineMain.png' alt=''>
            <img class="line-circle" src='/assets/circle.png' alt=''>
            <div class="main-title">
                <img src='/assets/iconHeader.png' alt=''>
                <h3>Our Workflow</h3>
            </div>
            <h1 class="main-heroText">Proses Kerja Kami dalam Meningkatkan Kualitas Properti</h1>

            <div class="main-card">
                <div class="main-card-item1">
                    <img src='/assets/icon1.png' alt=''>
                    <h1>Tantangan</h1>
                    <p>Setiap property memiliki tantangan tersendiri dan GWA sangat memahami hal tersebut.</p>
                </div>
                <div class="main-card-item2">
                    <img src='/assets/icon2.png' alt=''>
                    <h1>Rumusan</h1>
                    <p>Setiap tantangan akan dirumuskan menjadi sebuah hal yang harus dicari jalan keluarnya oleh kami.</p>
                </div>
                <div class="main-card-item3">
                    <img src='/assets/icon3.png' alt=''>
                    <h1>Goals</h1>
                    <p>Dari rumusan masalah, kami memberikan respon cepat dan jalan keluar jangka pendek - menengah - panjang.</p>
                </div>
                <div class="main-card-item4">
                    <img src='/assets/icon4.png' alt=''>
                    <h1>Ideas</h1>
                    <p>Setiap rumusan menjadikan ide-ide kreatif bagi kami untuk meningkatkan kualitas property mitra.</p>
                </div>
            </div>
        </main>
        {{-- Our Workflow End --}}


        {{-- Our service --}}
        <main class="main-service">
            <img class="main-lineRight" src='/assets/rounded-Right.png' alt=''>
            <div class="service-title">
                <img src='/assets/iconHeader.png' alt=''>
                <h3>our services</h3>
            </div>
            <h1 class="service-heroText">Apa Saja yang Bisa Kami Bantu ?</h1>
            <div class="service-card">
                <div class="service-card-item">
                    <div class="card-item-img">
                        <img src='/assets/icon5.png' alt=''>
                        <h1>01</h1>
                    </div>
                        <h2>Revenue Management Service</h2>
                        <button>Saya Tertarik <img src='assets/arrowService-right.png' alt=''></button>
                </div>
                <div class="service-card-item">
                    <div class="card-item-img">
                        <img src='/assets/icon6.png' alt=''>
                        <h1>02</h1>
                    </div>
                        <h2 class="text2">Full Manage Service</h2>
                        <button>Saya Tertarik <img src='assets/arrowService-right.png' alt=''></button>
                </div>
                <div class="service-card-item">
                    <div class="card-item-img">
                        <img src='/assets/icon7.png' alt=''>
                        <h1>03</h1>
                    </div>
                        <h2>Asset Monetize Service</h2>
                        <button>Saya Tertarik <img src='assets/arrowService-right.png' alt=''></button>
                </div>
            </div>
        </main>
        {{-- Our service End --}}


        {{-- Lates Project --}}
        <main class="main-project">
            <div class="project-title">
                <img src='/assets/iconHeader.png' alt=''>
                <h3>our latest Projects</h3>
                <img src='/assets/iconHeader.png' alt=''>
            </div>
            <h1 class="project-heroText">Project Terbaru Kami</h1>

            <div class="project-image">
                <img class="image-left" src='/assets/arrowProject.png' alt=''>
                    <div class="image-card">
                        <img src='/assets/project-image.jpg' alt='project-image'>
                        <div class="image-card-text">
                            <div class="image-card-text-title">
                                <h1>1/4 OPERATIONAL PROJECT</h1>
                                <h2>Townhouse Oak</h2>
                                <h3>Brand tertinggi di OYO</h3>
                            </div>
                            <div class="image-card-text-button">
                                <img src='/assets/arrowDetail.png' alt=''>
                                <p>Lihat Detail</p>
                            </div>
                        </div>
                    </div>
                <img class="image-right" src='/assets/arrowProject.png' alt=''>
            </div>
        </main>

        {{-- Lates Project End --}}

        {{-- Testimoni --}}
        <main class="main-testimoni">
            <div class="arrow-testimoni">
                <img class="arrow-left" src='/assets/arrowDetail.png' alt=''>
                <img class="arrow-right" src='/assets/arrowDetail.png' alt=''>
            </div>
            <div class="main-testimoni-text">
                <div class="testimoni-title">
                    <img src='/assets/iconHeader.png' alt=''>
                    <h3>our testimonials</h3>
                </div>
                <h1>Yang Klien Kami Katakan</h1>
                <div class="testimoni-quote">
                    <img src='/assets/quote.png' alt=''>
                        <p> 
                            Group membantu hotel saya untuk menjangkau lebih banyak client dan memberikan saran monetisasi yang tidak pernah saya bayangkan sebelumnya
                        </p>
                </div>
                <div class="testimoni-person">
                    <img src='/assets/logo-testimoni.png' alt=''>
                    <div class="testimoni-person-text">
                        <h1>Chaim Desmond</h1>
                        <p>CEO of Yellow Hotel</p>
                    </div>
                </div>
            </div>
            <div class="main-testimoni-img">
                <img src='/assets/review.jpg' alt=''>
            </div>
        </main>
        {{-- Testimoni End --}}


        {{-- contact  --}}
        <main class="main-contact">
            <img class="main-contact-img" src='/assets/rounded-Right.png' alt=''>
            <div class="main-contact-text">
                <div class="contact-title">
                    <img src='/assets/iconHeader.png' alt=''>
                    <h3>hubungi kami</h3>
                </div>
                <h1>Ingin Mendiskusikan Bisnis Pariwisata Anda ?</h1>
                <img src='/assets/line.png' alt=''>
                <p>
                    Ada kepentingan bisnismu yang ingin didikusikan dengan kami, yuk segera isi form disamping, konsultasinya gratis kok !
                </p>
            </div>
            <form class="main-contact-form">
                <div class="form-nama">
                    <label for="name">Nama Lengkap</label>
                    <input id="name" type="text" placeholder="Masukkan Nama Lengkap">
                </div>
                <div class="form-nama">
                    <label for="perusahaan">Nama Perusahaan</label>
                    <input id="perusahaan" type="text" placeholder="Masukkan Nama Perusahaan">
                </div>
                <div class="form-nama">
                    <label for="name">Nonor Watsapp Aktif</label>
                    <input id="name" type="text" placeholder="Masukkan Nomor Whatsapp">
                </div>

                <button>Jadwalkan Konsultasi <img src='assets/arrowService-right.png' alt=''></button>
            </form>
        </main>
        {{-- contact end --}}

        {{-- Footer --}}
        <footer>
            <img class="backdrop-img" src='/assets/lineFooter.png' alt=''>
            <div class="footer-img">
                <img src='/assets/logo.png' alt=''>
            </div>
            <div class="footer-text">
                <div class="footer-text-title">
                    <h1>Halaman Utama</h1>
                    <a href="">Homepage</a>
                </div>
                <div class="footer-text-title">
                    <h1>Halaman Utama</h1>
                    <a href="">Tentang Kami</a>
                    <a href="">Daftar Hotel</a>
                </div>
                <div class="footer-text-title">
                    <h1>Halaman Utama</h1>
                    <a href="">Bantuan</a>
                    <a href="">Hubungi Kami</a>
                </div>
                <div class="footer-text-title">
                    <h1>Halaman Utama</h1>
                    <div>
                        <img src='' alt=''>
                        <img src='' alt=''>
                        <img src='' alt=''>
                    </div>
                </div>
            </div>

            <div class="footer-copyright">
                <div class="copyright-text">
                    <a href="#">Pemberitahuan Privasi</a>
                    <a href="#">Syarat dan Ketentuan</a>
                </div>
                <div class="copyright-bahasa">
                    <img src='/assets/icon-language.png' alt=''>
                    <div class="copyright-bahasa-text">
                        <p>Bahasa Indonesia</p>
                        <img src='/assets/arrow-down.png' alt=''>
                    </div>
                </div>
            </div>
            <p class="footer-copyright-text">&copy; 2023 Graha Wisata Kita | PT Graha Wisata Kita Tbk. </p>
        </footer>
        {{-- Footer end --}}
    </body>
</html>
