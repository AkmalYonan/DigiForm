<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/prima/prima.css') }}">


    <title>Arya&Salamah</title>
</head>

<body>
    @include('layouts.navbartemplate')
    <div id="overlay">
        <div class="overlay-content" data-aos="fade-up">
            <img src="{{ asset('img/prima/foto1.jpg') }}" class="border-warna" height="200px" width="300px">
            <p class="display-1 m-3" style="font-family: 'Great Vibes', cursive; color: #886F6F;">Arya & Salamah</p>
            <h1 class="display-5 tulis" style="font-family: 'IM Fell Great Primer', serif; color: #886F6F;">Special
                Invitation
            </h1>
            <p class="fs-5 tulis" style="font-family: 'IM Fell Great Primer', serif; color: #886F6F;">Tanpa Mengurangi
                Rasa
                Hormat Apapun, Kami
                Mengundang Anda Kepernikahan Kami</p>
            <button id="enterButton" class="btn btn-primary mt-4 rounded shadow">OPEN INVITATION</button>
        </div>
    </div>

    <main>
        <div class="banner text-center p-5">
            <h1 class="display-5 m-2" style="font-family: 'Merriweather', serif;
        font-family: 'Parisienne', cursive; color: #ffffff;"><b>The Wedding</b></h1>
            <p class="display-3 m-5" style="font-family: 'IM Fell Great Primer', serif; color: #ffffff;">Arya & Salamah
            </p>
            <img src="{{ asset('img/prima/foto4.jpg') }}" width="400px" class="mb-3 img-thumbnail text-center">
        </div>

        <div class="countdown text-center">
            <p class="fs-2 mt-5" style="font-family: 'IM Fell Great Primer'; color: #C1A3A3;" data-aos="fade-up">
                Countdown
                Pernikahan</p>
            <p id="countdown" class="fs-1 m-2" style="font-family: 'IM Fell Great Primer'; color: #C1A3A3;"
                data-aos="fade-up"></p>
        </div>

        <div class="quote text-center mb-5 p-5">
            <img src="{{ asset('img/prima/daun.png') }}" width="80px" height="80px" data-aos="zoom-in">
            <p class="fs-5 m-3" style="font-family: 'IM Fell Great Primer';color: #C1A3A3;" data-aos="zoom-up">"Dan di
                antara tanda-tanda kekuasaan-Nya ialah
                Dia menciptakan
                untukmu istri-istri dari
                jenismu sendiri,
                supaya kamu cenderung dan merasa tenteram kepadanya, dan dijadikan-Nya di antaramu rasa kasih dan
                sayang.
                Sesungguhnya pada yang demikian itu benar-benar terdapat tanda-tanda bagi Kaum yang berpikir,"<br> - QS.
                Ar-Rum: 21.</p>
        </div>

        <div class="mempelai text-center m-4">
            <div class="row">
                <div class="col">
                    <img src="{{ asset('img/prima/foto3.jpg') }}" width="250px" height="500px" class="border-warna mb-4"
                        data-aos="zoom-in-down">
                </div>
                <div class="col">
                    <h1 class="display-5" style="font-family: 'Great Vibes', cursive; color: #886F6F;"
                        data-aos="fade-down">
                        Arya</h1>
                    <h1 class="fs-3" style="font-family: 'Merriweather', serif;
                font-family: 'Parisienne', cursive;color: #C1A3A3;" data-aos="fade-down">Muhammad Tauriq Arya
                        Pradita</h1>
                    <p class="fs-6 m-3" style="font-family: 'IM Fell Great Primer', serif;color: #C1A3A3;"
                        data-aos="fade-down">Putra Pertama Dari
                        Pasangan
                        <br>Bapak Aris Siswanto & Ibu Sinta Dewi
                    </p>
                    <br>
                    <br>
                    <h1 class="display-5" style="font-family: 'Great Vibes', cursive; color: #886F6F;"
                        data-aos="fade-down">
                        Salamah</h1>
                    <h1 class="fs-3" style="font-family: 'Merriweather', serif;
                font-family: 'Parisienne', cursive;color: #C1A3A3;" data-aos="fade-down">Salamah</h1>
                    <p class="fs-6 m-3" style="font-family: 'IM Fell Great Primer', serif;color: #C1A3A3;"
                        data-aos="fade-down">Putri Kedua Dari
                        Pasangan<br>
                        Bapak Asep Nandang N.S.
                        & Ibu Yuli
                        yulianti
                    </p>
                </div>
            </div>
        </div>

        <div class="detail-acara text-center m-3">
            <h2 class="display-4 mb-5" style="font-family: 'Parisienne', cursive; color: #886F6F"
                data-aos="zoom-in-down">
                Detail
                Acara
            </h2>
            <div class="row">
                <div class="col-sm-6 mb-5" data-aos="fade-up">
                    <h5 class="fs-3" style="font-family: 'IM Fell Great Primer', serif;color: #886F6F;">Akad</h5>
                    <p class="fs-5" style="font-family: 'IM Fell Great Primer', serif;color: #C1A3A3;">Sabtu,16 Desember
                        2023<br>08.00 WIB - Selesai
                    </p>
                    <p class="fs-6" style="font-family: 'IM Fell Great Primer', serif;color: #C1A3A3;">Cileungsi,Jawa
                        Barat<br>Jln.Pahlawan Kp.Tengah No.78 Rt02/005</p>
                    <div class="ratio ratio-21x9">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4261.603558627242!2d107.03903174290105!3d-6.426194211744445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6996454b474c75%3A0x1591b8de6b47851d!2sJl.%20Kp.%20Tengah%20No.78%2C%20Cipeucang%2C%20Kec.%20Cileungsi%2C%20Kabupaten%20Bogor%2C%20Jawa%20Barat%2016820!5e0!3m2!1sid!2sid!4v1689219496412!5m2!1sid!2sid"
                            style="border:0; background: rgb(255,230,230);
                        background: linear-gradient(198deg, rgba(255,230,230,1) 0%, rgba(232,191,191,1) 100%);"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                            class="shadow p-2 mb-5 rounded"></iframe>
                    </div>
                </div>
                <!-- <div class="garis_verikal"></div> -->
                <div class="col-sm-6 mb-5" data-aos="fade-down">
                    <h5 class="fs-3" style="font-family: 'IM Fell Great Primer', serif;color: #886F6F;">Resepsi</h5>
                    <p class="fs-5" style="font-family: 'IM Fell Great Primer', serif;color: #C1A3A3;">Minggu,17
                        Desember
                        2023<br>08.00 WIB - Selesai
                    </p>
                    <p class="fs-6" style="font-family: 'IM Fell Great Primer', serif;color: #C1A3A3;">Sasono Adiguno
                        TMII,Kota Jakarta Timur<br>Taman Mini,
                        Kota Jakarta Timur</p>
                    <div class="ratio ratio-21x9">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15862.836143860097!2d106.87298148248746!3d-6.301909547142641!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed5e7fb7ab01%3A0xb11aa6aaa3800434!2sSasono%20Adiguno%20TMII!5e0!3m2!1sid!2sid!4v1689219714379!5m2!1sid!2sid"
                            style="border:0; background: rgb(255,230,230);
                        background: linear-gradient(198deg, rgba(255,230,230,1) 0%, rgba(232,191,191,1) 100%);"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                            class="shadow p-2 mb-5 rounded"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="galeri shadow p-3 m-4 rounded" style="background: rgb(255,230,230);
    background: linear-gradient(198deg, rgba(255,230,230,1) 0%, rgba(232,191,191,1) 100%);">
            <h2 class="text-center display-4  mb-4" style="font-family: 'Parisienne', cursive; color: #886F6F"
                data-aos="fade-up">
                Galeri
                Foto</h2>
            <div class="row m-3">
                <div class="col-lg-4 col-md-12 mb-2 mb-lg-0">
                    <img src="{{ asset('img/prima/foto2.jpg') }}" class="w-100 shadow-1-strong rounded mb-4"
                        alt="Boat on Calm Water" data-aos="fade-down" />

                    <img src="{{ asset('img/prima/foto9.jpg') }}" class="w-100 shadow-1-strong rounded mb-4"
                        alt="Wintry Mountain Landscape" data-aos="fade-up" />
                </div>

                <div class="col-lg-4 mb-2 mb-lg-0">
                    <img src="{{ asset('img/prima/foto8.jpg') }}" class="w-100 shadow-1-strong rounded mb-4"
                        alt="Mountains in the Clouds" data-aos="zoom-in-down" />

                    <img src="{{ asset('img/prima/foto10.jpg') }}" class="w-100 shadow-1-strong rounded mb-4"
                        alt="Boat on Calm Water" data-aos="zoom-in-up" />
                </div>

                <div class="col-lg-4 mb-2 mb-lg-0">
                    <img src="{{ asset('img/prima/foto7.jpg') }}" class="w-100 shadow-1-strong rounded mb-4"
                        alt="Waves at Sea" data-aos="fade-down" />

                    <img src="{{ asset('img/prima/foto12.jpg') }}" class="w-100 shadow-1-strong rounded mb-4"
                        alt="Yosemite National Park" data-aos="fade-up" />
                </div>
            </div>
        </div>

        <div class="quote text-center mb-1 p-5">
            <p class="fs-5 m-3" style="font-family: 'IM Fell Great Primer';color: #C1A3A3;" data-aos="zoom-up">
                "Tiada hubungan terindah seorang laki-laki dan wanita kecuali hubungan dalam pernikahan."</p>
            <img src="{{ asset('img/prima/daun.png') }}" width="80px" height="80px" data-aos="zoom-in">
        </div>

        <div class="text-center ucapan m-3">
            <div class="row">
                <div class="col-sm-6">
                    <form id="greetingForm">
                        <h2 class="text-center fs-2  mb-4" style="font-family: 'Parisienne', cursive; color: #886F6F"
                            data-aos="zoom-in">Kartu Ucapan</h2>
                        <div class="form-group" data-aos="zoom-in-down">
                            <label class="fs-5 m-3" style="font-family: 'IM Fell Great Primer';color: #C1A3A3;"
                                for="name">Nama Anda:</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="form-group" data-aos="zoom-in-down">
                            <label class="fs-5 m-3" style="font-family: 'IM Fell Great Primer';color: #C1A3A3;"
                                for="message">Kata Ucapan:</label>
                            <textarea class="form-control" id="message" required></textarea>
                        </div>
                        <div class="form-group" data-aos="zoom-in-up">
                            <label class="fs-5 m-3" style="font-family: 'IM Fell Great Primer';color: #C1A3A3;"
                                for="attendance">Keterangan Hadir:</label>
                            <select class="form-control" id="attendance" required>
                                <option class="fs-6 m-3" style="font-family: 'IM Fell Great Primer';color: #C1A3A3;"
                                    value="Hadir">Hadir</option>
                                <option class="fs-6 m-3" style="font-family: 'IM Fell Great Primer';color: #C1A3A3;"
                                    value="Tidak Hadir">Tidak Hadir</option>
                            </select>
                        </div>
                        <button data-aos="zoom-in-up" type="submit" class="btn btn-primary m-5">Kirim Kartu
                            Ucapan</button>
                    </form>
                </div>
                <div class="col-sm-6">
                    <div id="senderInfo" class="sender-info" data-aos="fade-up"></div>

                    <nav id="pagination" class="pagination"></nav>
                </div>
            </div>
        </div>
    </main>

    <footer class="text-center p-5" style="color: #ffffff;" data-aos="fade-up">

        <h1 class="display-5 mt-3" data-aos="zoom-in-up" style="font-family: 'IM Fell Great Primer'">Terimakasih</h1>
        <img src="{{ asset('img/prima/pngegg (3).png') }}" width="200px" height="200px" class="m-3">
        <p data-aos="zoom-in-up" class="fs-4" style="font-family: 'IM Fell Great Primer'">Merupakan Suatu Kebahagian dan
            Kehormatan bagi kami. Apabila
            Bapak/Ibu/Saudara/I berkenan hadir
            untuk
            memberikan doa restu kepada kami</p>
        <p class="fs-4" data-aos="zoom-in-up" style="font-family: 'IM Fell Great Primer'">Atas kehadiran dan doa retunya
            kami ucapkan terima kasih</p>
        <button id="playPauseButton" class="play mt-4">
            <i class="fas fa-music"></i>
        </button>
    </footer>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="{{ asset('js/prima.js') }}"></script>

</body>

</html>