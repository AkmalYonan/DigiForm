<!DOCTYPE html>
<html lang="en">

<head class="center">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Undangan Pernikahan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/arta/arta.css') }}">
</head>

<body>
    @include('layouts.navbartemplate')
    <div id="overlay">
        <div class="overlay-content" data-aos="fade-up">
            <p class="display-1" id="Nama">Arya & Salamah</p>
            <h1 class="display-5 tulis">Special Invitation</h1>
            <p class="fs-5 tulis">Tanpa Mengurangi Rasa Hormat Apapun, Kami Mengundang Anda Kepernikahan Kami</p>
            <button id="enterButton" class="btn btn-primary mt-4 rounded shadow">OPEN INVITATION</button>
        </div>
    </div>

    <div class="banner center p-5">
        <p class="fs-5 mb-2">We Invite You To Celebrate Our Wedding</p>
        <p class="display-3 m-5" id="Nama1">Arya & Salamah</p>
        <img src="{{ asset('img/arta/pngegg (1).png') }}" width="50px" height="70px" class="m-5">
        <p class="fs-3 m-3">Countdown Pernikahan</p>
        <p id="countdown" class="fs-1 m-2 "></p>
    </div>

    <header class="m-4">
        <div class="shadow p-3 mb-5 bg-body rounded" data-aos="fade-up">
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

    <div class="shadow p-4 m-4 bg-body rounded" id="mempelai">
        <h3 class="text-mempelai display-5 mb-4" style="font-family: 'Parisienne', cursive;" data-aos="fade-up">Sang
            Mempelai
        </h3>
        <div class="row align-items-center center rounded m-2" style="background-color: #A4907C;"
            data-aos="zoom-in-down">
            <div class="col-12 col-md-4">
                <h1 class="fs-3" style="color: #eaeaea;" data-aos="zoom-in-down">Muhammad Tauriq Arya Pradita</h1>
                <br>
                <p style="color: #eaeaea;" data-aos="zoom-in-down">Anak Pertama Dari Pasangan <br>Bpk. Aris Siswanto
                    <br>&<br>Ibu Sinta Dewi
                </p>
            </div>
            <div class="col-12 col-md-4">
                <img src="{{ asset('img/arta/BOX11440.JPG') }}" width="100%" height="100%"
                    class="rounded mx-auto d-block shadow-lg" alt="">
            </div>
            <div class="col-12 col-md-4">
                <h1 class="fs-3" style="color: #eaeaea;" data-aos="zoom-in-up">Salamah</h1><br>
                <p style="color: #eaeaea;" data-aos="zoom-in-up">Anak Kedua Dari Pasangan <br>Bpk. Asep Nandang N.S.
                    <br>&<br>Ibu Yuli
                    yulianti
            </div>
        </div>
    </div>

    <main class="m-4 ">
        <section id="gallery" class="center">
            <h2 class="text-foto display-4  mb-4" style="font-family: 'Parisienne', cursive;" data-aos="fade-down">
                Galeri
                Foto</h2>
            <div class="row">
                <div class="col">
                    <img src="{{ asset('img/arta/BOX11442.JPG') }}" class="shadow-lg p-2 mb-5 bg-body rounded"
                        width="200px" height="320px" data-aos="fade-up">
                </div>
                <div class="col">
                    <img src="{{ asset('img/arta/BOX11444.JPG') }}" class="shadow-lg p-2 mb-5 bg-body rounded"
                        width="200px" height="320px" data-aos="fade-down">
                </div>
                <div class="col">
                    <img src="{{ asset('img/arta/BOX11445.JPG') }}" class="shadow-lg p-2 mb-5 bg-body rounded"
                        width="200px" height="320px" data-aos="fade-up">
                </div>
                <div class="col">
                    <img src="{{ asset('img/arta/BOX11447.JPG') }}" class="shadow-lg p-2 mb-5 bg-body rounded"
                        width="200px" height="320px" data-aos="fade-down">
                </div>
                <div class="col">
                    <img src="{{ asset('img/arta/BOX11440.JPG') }}" class="shadow-lg p-2 mb-5 bg-body rounded"
                        width="200px" height="320px" data-aos="fade-up">
                </div>
            </div>
            <div class="shadow p-3 mb-5 bg-body rounded" data-aos="fade-up">
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
            <h2 class="text-acara display-4" style="font-family: 'Parisienne', cursive;" data-aos="zoom-in">Detail
                Acara
            </h2>
            <div class="row">
                <div class="col-sm-6">
                    <div class="card" data-aos="zoom-in-up">
                        <div class="card-body">
                            <h5 class="card-title">Akad</h5>
                            <p class="card-text">Sabtu,16 Desember 2023<br>08.00 WIB - Selesai
                            </p>
                            <p class="card-text">Cileungsi,Jawa Barat<br>Jln.Pahlawan Kp.Tengah No.78 Rt02/005</p>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4261.603558627242!2d107.03903174290105!3d-6.426194211744445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6996454b474c75%3A0x1591b8de6b47851d!2sJl.%20Kp.%20Tengah%20No.78%2C%20Cipeucang%2C%20Kec.%20Cileungsi%2C%20Kabupaten%20Bogor%2C%20Jawa%20Barat%2016820!5e0!3m2!1sid!2sid!4v1689219496412!5m2!1sid!2sid"
                                width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card" data-aos="zoom-in-down">
                        <div class="card-body">
                            <h5 class="card-title">Resepsi</h5>
                            <p class="card-text">Minggu,17 Desember 2023<br>08.00 WIB - Selesai
                            </p>
                            <p class="card-text">Sasono Adiguno TMII,Kota Jakarta Timur<br>Taman Mini, Jl. Malaka,
                                Ceger, Kec. Cipayung,
                                Kota Jakarta Timur</p>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15862.836143860097!2d106.87298148248746!3d-6.301909547142641!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed5e7fb7ab01%3A0xb11aa6aaa3800434!2sSasono%20Adiguno%20TMII!5e0!3m2!1sid!2sid!4v1689219714379!5m2!1sid!2sid"
                                width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="rsvp">
            <div class="card text-center">
                <div class="card-header">
                    <p data-aos="fade-up" class="fs-1 text-acara" style="font-family: 'Parisienne', cursive;">
                        Konfirmasi
                        Kehadiran</p>
                </div>
                <div class="card-body">
                    <form id="greetingForm">
                        <h2 class="card-text" data-aos="zoom-in">Kartu Ucapan</h2>
                        <div class="form-group" data-aos="zoom-in-down">
                            <label class="card-text" for="name">Nama Anda:</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="form-group" data-aos="zoom-in-down">
                            <label class="card-text" for="message">Kata Ucapan:</label>
                            <textarea class="form-control" id="message" required></textarea>
                        </div>
                        <div class="form-group" data-aos="zoom-in-up">
                            <label class="card-text" for="attendance">Keterangan Hadir:</label>
                            <select class="form-control" id="attendance" required>
                                <option class="card-text" value="Hadir">Hadir</option>
                                <option class="card-text" value="Tidak Hadir">Tidak Hadir</option>
                            </select>
                        </div>
                        <button data-aos="zoom-in-up" type="submit" class="btn btn-primary mt-3">Kirim Kartu
                            Ucapan</button>
                    </form>
                </div>
                <div class="card-footer text-muted">
                    <div id="senderInfo" class="sender-info" data-aos="fade-up"></div>

                    <nav id="pagination" class="pagination"></nav>
                </div>
            </div>

    </main>

    <footer class="center shadow p-3 m-4 bg-body rounded" style="font-family: 'Parisienne', cursive; color: #A4907C;"
        data-aos="fade-up">
        <button id="playPauseButton" class="play">
            <i class="fas fa-music"></i>
        </button>
        <h1 data-aos="zoom-in-up">Terimakasih</h1>
        <p data-aos="zoom-in-up" class="fs-5">Merupakan Suatu Kebahagian dan Kehormatan bagi kami. Apabila
            Bapak/Ibu/Saudara/I berkenan hadir
            untuk
            memberikan doa restu kepada kami</p>
        <p class="fs-5">Atas kehadiran dan doa retunya kami ucapkan terima kasih</p>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/arta.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>