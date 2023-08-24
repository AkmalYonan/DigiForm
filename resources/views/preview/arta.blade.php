<!DOCTYPE html>
<html lang="en">

<head class="center">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<<<<<<< HEAD
    <title>{{ $pesan->data->nama_pasangan}} Wedding</title>
=======
    <title>{{ $pesan->mPria->nama_pria }} & {{ $pesan->mWanita->nama_wanita }} Wedding</title>
>>>>>>> 84df7f9 (Change Layout Account User page & Fix Some Bug)
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/arta/arta.css') }}">
</head>

<body class="background-utama">
    <div id="overlay">
        <div class="overlay-content" @if (in_array('Animasi',$fitur)) data-aos="fade-up @endif">
            <p class="display-1" id="Nama">{{ $pesan->mPria->nama_pria }} & {{ $pesan->mWanita->nama_wanita }}</p>
            <h1 class="display-5 tulis">Special Invitation</h1>
            <p class="fs-5 tulis">Tanpa Mengurangi Rasa Hormat Apapun, Kami Mengundang Anda Kepernikahan Kami</p>
            <button id="enterButton" class="btn btn-primary mt-4 rounded shadow">OPEN INVITATION</button>
        </div>
    </div>

    <div class="banner center p-5">
        <p class="display-6 mb-2">{{ $pesan->data->salam_pembuka }}</p>
        <p class="fs-5 mb-2">We Invite You To Celebrate Our Wedding</p>
        <p class="display-3 m-5" id="Nama1">{{ $pesan->mPria->nama_pria }} & {{ $pesan->mWanita->nama_wanita }}</p>
        <img src="{{ asset('img/arta/pngegg (1).png') }}" width="50px" height="70px" class="m-5">
        @if (in_array('Countdown', $fitur))
        <p class="fs-3 m-3">Countdown Pernikahan</p>
        <p id="countdown" class="fs-1 m-2 "></p>
        @endif
    </div>
    @if (in_array('Pembukaan', $fitur))
    <header class="m-4">
        <div class="shadow p-3 mb-5 bg-body rounded" @if (in_array('Animasi',$fitur)) data-aos="fade-up" @endif>
            <p class="fs-5" style="color: #A4907C;"> "Maka nikahilah wanita-wanita lain yang halal bagi kalian untuk
                dinikahi;
                (apakah) dua, tiga, atau
                empat.
                Namun, apabila kalian khawatir tidak bisa berlaku adil (di antara para istri bila sampai kalian
                memiliki
                iebih dari satu istri), nikahilah satu istri saja atau mencukupkan dengan budak perempuan yang
                kalian
                miliki. Hal itu lebih dekat kepada tidak berbuat aniaya."<br> - QS. An-Nisaa’: 3.</p>
            <img src="{{ asset('img/arta/daun.png') }}" alt="" width="100px" height="80px">
        </div>
    </header>
    @endif
    @if (in_array('Nama Pengantin', $fitur))
    <div class="shadow p-4 m-4 bg-body rounded" id="mempelai">
<<<<<<< HEAD
        <h3 class="text-mempelai display-5 mb-4" style="font-family: 'Parisienne', cursive;" alt="mempelai"
            @if(in_array('Animasi',$fitur)) data-aos="fade-up" @endif>Sang
            Mempelai
        </h3>
        <div class="row align-items-center center rounded m-2" style="background-color: #A4907C;" alt="mempelai"
            @if(in_array('Animasi',$fitur)) data-aos="zoom-in-down" @endif>
            <div class="col-12 col-md-4">
                <h1 class="fs-3" style="color: #eaeaea;" @if (in_array('Animasi',$fitur)) data-aos="zoom-in-down"
                    @endif>{{ $pesan->mPria->nama_pria_lengkap }}</h1>
=======
        <h3 class="text-mempelai display-5 mb-4" style="font-family: 'Parisienne', cursive;" @if
            (in_array('Animasi',$fitur)) data-aos="fade-up" @endif>Sang
            Mempelai
        </h3>
        <div class="row align-items-center center rounded m-2" style="background-color: #A4907C;" @if
            (in_array('Animasi',$fitur)) data-aos="zoom-in-down" @endif>
            <div class="col-12 col-md-4">
                <h1 class="fs-3" style="color: #eaeaea;" @if (in_array('Animasi',$fitur)) data-aos="zoom-in-down"
                    @endif>{{ $pesan->mPria->nama_pria }}</h1>
>>>>>>> 84df7f9 (Change Layout Account User page & Fix Some Bug)
                <br>
                <p style="color: #eaeaea;" @if (in_array('Animasi',$fitur)) data-aos="zoom-in-down" @endif>Anak Ke-{{
                    $pesan->mPria->anak_ke }} Dari Pasangan
                    <br>Bpk. {{ $pesan->mPria->nama_ayah }}
                    <br>&<br>Ibu {{ $pesan->mPria->nama_ibu }}
                </p>
            </div>
            <div class="col-12 col-md-4">
                <img src="{{ asset('img/arta/BOX11440.JPG') }}" width="100%" height="100%"
                    class="rounded mx-auto d-block shadow-lg" alt="">
            </div>
            <div class="col-12 col-md-4">
                <h1 class="fs-3" style="color: #eaeaea;" @if (in_array('Animasi',$fitur)) data-aos="zoom-in-up" @endif>
<<<<<<< HEAD
                    {{ $pesan->mWanita->nama_wanita_lengkap }}
=======
                    {{ $pesan->mWanita->nama_wanita }}
>>>>>>> 84df7f9 (Change Layout Account User page & Fix Some Bug)
                </h1><br>
                <p style="color: #eaeaea;" @if (in_array('Animasi',$fitur)) data-aos="zoom-in-up" @endif>Anak Ke-{{
                    $pesan->mWanita->anak_ke }} Dari Pasangan
                    <br>Bpk. {{ $pesan->mWanita->nama_ayah }}
                    <br>&<br>Ibu {{ $pesan->mWanita->nama_ibu }}
            </div>
        </div>
    </div>
    @endif
    <main class="m-4 ">
        <section id="gallery" class="center">
            @if (in_array('Galeri', $fitur))
<<<<<<< HEAD
            <h2 class="text-foto display-4  mb-4" style="font-family: 'Parisienne', cursive;"
                @if(in_array('Animasi',$fitur)) data-aos="fade-down" @endif>
=======
            <h2 class="text-foto display-4  mb-4" style="font-family: 'Parisienne', cursive;" @if
                (in_array('Animasi',$fitur)) data-aos="fade-down" @endif>
>>>>>>> 84df7f9 (Change Layout Account User page & Fix Some Bug)
                Galeri
                Foto</h2>
            <div class="row">
                <div class="col">
                    <img src="{{ asset('img/arta/BOX11442.JPG') }}" class="shadow-lg p-2 mb-5 bg-body rounded"
                        width="200px" height="320px" @if (in_array('Animasi',$fitur)) data-aos="fade-up" @endif>
                </div>
                <div class="col">
                    <img src="{{ asset('img/arta/BOX11444.JPG') }}" class="shadow-lg p-2 mb-5 bg-body rounded"
                        width="200px" height="320px" @if (in_array('Animasi',$fitur)) data-aos="fade-down" @endif>
                </div>
                <div class="col">
                    <img src="{{ asset('img/arta/BOX11445.JPG') }}" class="shadow-lg p-2 mb-5 bg-body rounded"
                        width="200px" height="320px" @if (in_array('Animasi',$fitur)) data-aos="fade-up" @endif>
                </div>
                <div class="col">
                    <img src="{{ asset('img/arta/BOX11447.JPG') }}" class="shadow-lg p-2 mb-5 bg-body rounded"
                        width="200px" height="320px" @if (in_array('Animasi',$fitur)) data-aos="fade-down" @endif>
                </div>
                <div class="col">
                    <img src="{{ asset('img/arta/BOX11440.JPG') }}" class="shadow-lg p-2 mb-5 bg-body rounded"
                        width="200px" height="320px" @if (in_array('Animasi',$fitur)) data-aos="fade-up" @endif>
                </div>
            </div>
            @endif
            <div class="shadow p-3 mb-5 bg-body rounded" @if (in_array('Animasi',$fitur)) data-aos="fade-up" @endif>
                <p class="fs-5" style="color: #A4907C;"> "Ketahuilah, setiap kalian adalah pemimpin, dan setiap dari
                    kalian
                    bertanggung jawab atas yang la pimpin… seorang lelaki adalah pemimpin bagi keluarganya, dan la
                    bertanggung jawab atas keluarganya..Ketahuilah setiap dari kalian adalah pemimpin dan
                    bertanggung
                    jawab atas apa yang ia pimpin." - HR. Bukhari dan Muslim.</p>
                <img src="{{ asset('img/arta/daun.png') }}" alt="" width="100px" height="80px">
            </div>
        </section>

        <section id="details" class="center shadow p-3 mb-5 bg-body rounded">
<<<<<<< HEAD
            <h2 class="text-acara display-4" style="font-family: 'Parisienne', cursive;" @if(in_array('Animasi',$fitur))
                data-aos="zoom-in" @endif>Detail
=======
            <h2 class="text-acara display-4" style="font-family: 'Parisienne', cursive;" @if
                (in_array('Animasi',$fitur)) data-aos="zoom-in" @endif>Detail
>>>>>>> 84df7f9 (Change Layout Account User page & Fix Some Bug)
                Acara
            </h2>
            <div class="row">
                @if (in_array('Hari/Tgl Akad', $fitur))
                <div class="col-sm-6">
                    <div class="card" @if (in_array('Animasi',$fitur)) data-aos="zoom-in-up" @endif>
                        <div class="card-body">
                            <h5 class="card-title">Akad</h5>
                            <p class="card-text">{{ $pesan->data->tgl_akad }}<br>{{ $pesan->data->jam_akad }}
                            </p>
                            <p class="card-text">{{ $pesan->data->lokasi_akad }}
                            </p>
                            @if (in_array('Lokasi Acara Maps', $fitur))
<<<<<<< HEAD
                            <iframe src="{{ $pesan->data->iframeMaps_akad}}" width="400" height="300" style="border:0;"
                                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
=======
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4261.603558627242!2d107.03903174290105!3d-6.426194211744445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6996454b474c75%3A0x1591b8de6b47851d!2sJl.%20Kp.%20Tengah%20No.78%2C%20Cipeucang%2C%20Kec.%20Cileungsi%2C%20Kabupaten%20Bogor%2C%20Jawa%20Barat%2016820!5e0!3m2!1sid!2sid!4v1689219496412!5m2!1sid!2sid"
                                width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
>>>>>>> 84df7f9 (Change Layout Account User page & Fix Some Bug)
                            @endif
                        </div>
                    </div>
                </div>
                @endif
                @if (in_array('Hari/Tgl Resepsi', $fitur))
                <div class="col-sm-6">
                    <div class="card" @if (in_array('Animasi',$fitur)) data-aos="zoom-in-down" @endif>
                        <div class="card-body">
                            <h5 class="card-title">Resepsi</h5>
                            <p class="card-text">{{ $pesan->data->tgl_resepsi }}<br>{{ $pesan->data->jam_resepsi }}
                            </p>
                            <p class="card-text">{{ $pesan->data->lokasi_resepsi }}
                            </p>
                            @if (in_array('Lokasi Acara Maps', $fitur))
<<<<<<< HEAD
                            <iframe src="{{ $pesan->data->iframeMaps_resepsi}}" width="400" height="300"
                                style="border:0;" allowfullscreen="" loading="lazy"
=======
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15862.836143860097!2d106.87298148248746!3d-6.301909547142641!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed5e7fb7ab01%3A0xb11aa6aaa3800434!2sSasono%20Adiguno%20TMII!5e0!3m2!1sid!2sid!4v1689219714379!5m2!1sid!2sid"
                                width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
>>>>>>> 84df7f9 (Change Layout Account User page & Fix Some Bug)
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                            @endif
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </section>
        @if (in_array('Buku Tamu', $fitur))
        <section id="rsvp">
            <div class="card text-center">
                <div class="card-header">
                    <p @if (in_array('Animasi',$fitur)) data-aos="fade-up" @endif class="fs-1 text-acara"
                        style="font-family: 'Parisienne', cursive;">
                        Konfirmasi
                        Kehadiran</p>
                </div>
                <div class="card-body">
                    <form id="greetingForm">
                        <h2 class="card-text" @if (in_array('Animasi',$fitur)) data-aos="zoom-in" @endif>Kartu Ucapan
                        </h2>
                        <div class="form-group" @if (in_array('Animasi',$fitur)) data-aos="zoom-in-down" @endif>
                            <label class="card-text" for="name">Nama Anda:</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="form-group" @if (in_array('Animasi',$fitur)) data-aos="zoom-in-down" @endif>
                            <label class="card-text" for="message">Kata Ucapan:</label>
                            <textarea class="form-control" id="message" required></textarea>
                        </div>
                        <div class="form-group" @if (in_array('Animasi',$fitur)) data-aos="zoom-in-up" @endif>
                            <label class="card-text" for="attendance">Keterangan Hadir:</label>
                            <select class="form-control" id="attendance" required>
                                <option class="card-text" value="Hadir">Hadir</option>
                                <option class="card-text" value="Tidak Hadir">Tidak Hadir</option>
                            </select>
                        </div>
                        <button @if (in_array('Animasi',$fitur)) data-aos="zoom-in-up" @endif type="submit"
                            id="btn-coklat" class="btn btn-primary mt-3">Kirim Kartu
                            Ucapan</button>
                    </form>
                </div>
                <div class="card-footer text-muted">
                    <div id="senderInfo" class="sender-info" @if (in_array('Animasi',$fitur)) data-aos="fade-up" @endif>
                    </div>

                    <nav id="pagination" class="pagination"></nav>
                </div>
            </div>
        </section>
        @endif
    </main>

    <footer class="center shadow p-3 m-4 bg-body rounded" style="font-family: 'Parisienne', cursive; color: #A4907C;"
        @if (in_array('Animasi',$fitur)) data-aos="fade-up" @endif>
        <button id="playPauseButton" class="play">
            <i class="fas fa-music"></i>
        </button>
        <h1 @if (in_array('Animasi',$fitur)) data-aos="zoom-in-up" @endif>Terimakasih</h1>
        <p @if (in_array('Animasi',$fitur)) data-aos="zoom-in-up" @endif class="fs-5">Merupakan Suatu Kebahagian dan
            Kehormatan bagi kami. Apabila
            Bapak/Ibu/Saudara/I berkenan hadir
            untuk
            memberikan doa restu kepada kami</p>
        <p class="fs-5">Atas kehadiran dan doa retunya kami ucapkan terima kasih</p>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script>
        // Tambahkan kode berikut ini di dalam file script.js

        // Mengambil elemen overlay dan tombol masuk
        const overlay = document.getElementById("overlay");
        const enterButton = document.getElementById("enterButton");

        enterButton.addEventListener("click", () => {
            // Memulai pemutaran musik saat tombol masuk diklik
            // Memanggil fungsi hideOverlay() untuk menghilangkan overlay
            hideOverlay();
        });

        // Fungsi untuk menghilangkan overlay
        function hideOverlay() {
            overlay.style.transform = "translateY(-100%)";
        }

        function countdown() {
            var targetDate = new Date("{{ $pesan->data->tgl_resepsi }}"); // Contoh: 31 Desember 2023, pukul 10:30
            var now = new Date();
            var timeLeft = targetDate - now;

            if (timeLeft < 0) {
                document.getElementById("countdown").innerHTML = "Selamat menikah!";
            } else {
                var days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
                var hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

                document.getElementById("countdown").innerHTML = days + " hari, " + hours + " jam, " + minutes + " menit, " + seconds + " detik";
                setTimeout(countdown, 1000);
            }
        }

        window.onload = function() {
            countdown();
        };
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>