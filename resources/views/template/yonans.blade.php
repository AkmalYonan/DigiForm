<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Undangan Pernikahan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/yonans/yonans.css' )}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Alex+Brush&family=Dancing+Script&family=Parisienne&display=swap"
        rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-md bg-navbar-template  py-4 fixed-top">
        <div class="container">
            {{-- <a class="navbar-brand fw-bold" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a> --}}
            <p class="navbar-brand fw-bold mt-3">Preview Template</p>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">

                    <button type="button" class="btn btn-primary btn-lg">
                        Buat Undangan
                    </button>

                </ul>
            </div>
        </div>
    </nav>
    <div class="konten">
        <section class="bg-img" id="page1">
            <img src="{{ asset('img/yonans/rose3.jpg')}}" alt="img">
            <div class="container mt-5 isian">
                <div class="opening">
                    <h3 class="card-title text-center">The Wedding of</h3>
                    <h1 class="text-center mt-5">Dafa Jibran</h1>
                    <h2 class="text-center">and</h2>
                    <h1 class="text-center">Bila Chaerunisa</h1>
                    <hr>
                    <div class="text-center details mb-2">
                        <p><span class="date">03.03.32</span></p>
                    </div>
                    <div class="text-center sambut">
                        <p>Kepada yth.</p>
                        <p>Bapa/Ibu/Saudara/I</p>
                    </div>
                    <div class="text-center nama-tamu">
                        <p>Nama Tamu</p>
                    </div>
                    <a href="#page2" class="btn button-39">OPEN INVITATION</a>
                </div>
            </div>
        </section>
    </div>
    <div class="konten">
        <section class="bg-img" id="page2">
            <div class="isi">
                <h3 class="card-title text-center">About to Start In</h3>
                <div class="countdown text-center">
                    <div class="countdown-item">
                        <span id="days" class="countdown-value"></span>
                        <span class="countdown-label">Days</span>
                    </div>
                    <div class="countdown-item">
                        <span id="hours" class="countdown-value"></span>
                        <span class="countdown-label">Hours</span>
                    </div>
                    <div class="countdown-item">
                        <span id="minutes" class="countdown-value"></span>
                        <span class="countdown-label">Minutes</span>
                    </div>
                    <div class="countdown-item">
                        <span id="seconds" class="countdown-value"></span>
                        <span class="countdown-label">Seconds</span>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="konten">
        <section class="bg-img">
            <div class="isi">
                <div class="isi2">
                    <h3 class="mari">Married</h3>
                    <p>Dengan Hormat <br>mengundang Bapak/Ibu/Saudara/i</p>
                    <p>untuk menghadiri acara pernikahan kami</p>
                    <h1>Dafa Jibran</h1>
                    <p>Putra dari Bapak Wihartono & Ibu Prihani
                    <h1 style="font-weight: bold; font-size: 55px; font-family: 'Alex Brush', cursive; color: CFB975;">&
                    </h1>
                    </p>
                    <h1>Bila Chaerunisa</h1>
                    <p>Putra dari Bapak Fadli Akhmad & Ibu Nur Ayu</p>
                </div>
            </div>
        </section>
    </div>

    <div class="konten">
        <section class="bg-img">
            <div class="isi">
                <h2 class="judul">Akad Nikah</h2>
                <div class="tgl-lokasi-content">
                    <div class="card">
                        <p class="date">Rabu, 03 May 2032</p>
                    </div>
                    <p>Pukul 08.00 - 10.00 WIB</p>
                    <p class="bold">Lokasi Acara</p>
                    <p class="mb-5"><span><b>Masjid Istiqlal</b></span> <br>Jl. Taman Wijaya Kusuma, Ps. Baru, Kecamatan
                        Sawah Besar, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10710</p>
                </div>
                <a class="button-39"
                    href="https://www.google.com/maps/place/Masjid+Istiqlal/@-6.17017,106.8292013,17z/data=!3m1!4b1!4m6!3m5!1s0x2e69f5ce68b5e01d:0xcafaf042d5840c6c!8m2!3d-6.17017!4d106.83139!16zL20vMDRzam1q?entry=ttu">BUKA
                    LOKASI</a>
            </div>
        </section>
    </div>

    <div class="konten">
        <section class="bg-img">
            <div class="isi">
                <h2 class="judul">Resepsi</h2>
                <div class="tgl-lokasi-content">
                    <div class="card">
                        <p class="date">Selasa, 09 May 2032</p>
                    </div>
                    <p>Pukul 10.00 WIB - Selesai</p>
                    <p class="bold">Lokasi Acara</p>
                    <p class="mb-5"><span><b>Sankeien Garden, Yokohama</b></span> <br>58-1 Honmokusannotani, Naka Ward,
                        Yokohama, Kanagawa 231-0824, Jepang</p>
                </div>
                <a class="button-39" href="https://livejapan.com/en/spot-list/cate-cs0101005/">BUKA LOKASI</a>
            </div>
        </section>
    </div>

    <div class="konten">
        <section class="bg-img">
            <div class="isi">
                <h3>Lokasi</h3>
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0"
                            marginwidth="0"
                            src="https://maps.google.com/maps?width=200&amp;height=200&amp;hl=en&amp;q=Taman senkein&amp;t=&amp;z=18&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                    </div>
                </div>
                <p><span><b>Sankeien Garden, Yokohama</b></span> <br>58-1 Honmokusannotani, Naka Ward, Yokohama,
                    Kanagawa 231-0824, Jepang</p>
                <a class="button-39" href="https://livejapan.com/en/spot-list/cate-cs0101005/">BUKA LOKASI</a>
            </div>
        </section>
    </div>

    <div class="container mt-5">
        <h3 class="text-center mb-3 mari">Gallery</h3>
        <div class="row">
            <div class="col-md-4 mb-3">
                <a href="{{ asset('img/yonans/zee.jpg' )}}" data-lightbox="gallery">
                    <img src="{{ asset('img/yonans/zee.jpg' )}}" alt="Gambar 1" class="img-fluid">
                </a>
            </div>
            <div class="col-md-4 mb-3">
                <a href="{{ asset('img/yonans/hehe.jpg' )}}" data-lightbox="gallery">
                    <img src="{{ asset('img/yonans/hehe.jpg' )}}" alt="Gambar 1" class="img-fluid">
                </a>
            </div>
            <div class="col-md-4 mb-3">
                <a href="{{ asset('img/yonans/eheh2.jpg' )}}" data-lightbox=" gallery">
                    <img src="{{ asset('img/yonans/eheh2.jpg' )}}" alt=" Gambar 1" class="img-fluid">
                </a>
            </div>
        </div>
    </div>

    <div class="konten">
        <section class="bg-img">
            <div class="isi">
                <h3 class="mari">Terimakasih</h3>
                <p class="tnk">Puji syukur kehadirat Tuhan YME atas karunianya anda dapat menghadiri undangan ini, saya
                    dan segenap seluruh anggota keluarga mengucapkan terima kasih atas kehadiran Bapak, Ibu dan Saudara
                    di acara pernikahan ini.</p>
            </div>
        </section>
    </div>

    <div class="konten">
        <section class="bg-img">
            <div class="isi">
                <form id="commentForm">
                    <label for="name" style="color: #CFB975;">Nama:</label>
                    <input type="text" id="name" name="name" required>

                    <label for="attendance" style="color: #CFB975;">Pilih Kehadiran:</label>
                    <select id="attendance" name="attendance" required>
                        <option value="">-- Pilih Kehadiran --</option>
                        <option value="hadir">Hadir</option>
                        <option value="tidak_hadir">Tidak Hadir</option>
                    </select>

                    <label for="greetings" style="color: #CFB975;">Kata Ucapan:</label>
                    <textarea id="greetings" name="greetings" required></textarea>

                    <input type="submit" value="Kirim Formulir">
                </form>

                <div id="commentLayout" class="comment-layout">
                    <h2 id="commentTitle" style="color: #CFB975;">Komentar</h2>
                    <div id="commentContainer" class="comment-container"></div>
                    <button id="closeButton">Tutup</button>
                </div>
            </div>
        </section>
    </div>
    <script src="{{ asset('js/yonans.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>