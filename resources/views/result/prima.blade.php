<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/prima/prima2.css') }}">
    <style>
        body,
        .banner {
            background-image: url(../../storage/{{$pesan->data->imgBanner}});
            background-attachment: fixed;
            background-size: cover;
            background-blend-mode: darken;
            background-color: rgba(0, 0, 0, 0.5);
            height: 100%;
            color: #eaeaea;
        }
    </style>
    <title>{{ $pesan->data->nama_pasangan }} Wedding</title>
</head>

<body>
    <div id="overlay">
        <div class="overlay-content" @if (in_array('Animasi',$fitur)) data-aos="fade-up" @endif>
            <img src="{{ url('storage/'. $pesan->data->imgThumbnail) }}" class="border-warna" height="200px"
                width="300px">
            <p class="display-1 m-3" style="font-family: 'Great Vibes', cursive; color: #886F6F;">
                {{ $pesan->mPria->nama_pria }} & {{ $pesan->mWanita->nama_wanita }}
            </p>
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
        font-family: 'Parisienne', cursive; color: #ffffff;">
                <b>The Wedding</b>
            </h1>
            <p class="display-3 m-5" style="font-family: 'IM Fell Great Primer', serif; color: #ffffff;">
                {{ $pesan->mPria->nama_pria }} & {{ $pesan->mWanita->nama_wanita }}
            </p>
            <img src="{{ url('storage/'. $pesan->data->imgBanner) }}" width="400px"
                class="mb-3 img-thumbnail text-center">
        </div>

        @if (in_array('Countdown', $fitur))
        <div class="countdown text-center">
            <p class="fs-2 mt-5" style="font-family: 'IM Fell Great Primer'; color: #886F6F;"
                @if(in_array('Animasi',$fitur)) data-aos="fade-up" @endif>
                Countdown
                Pernikahan</p>
            <p id="countdown" class="fs-1 m-2" style="font-family: 'IM Fell Great Primer'; color: #886F6F;"
                @if(in_array('Animasi',$fitur)) data-aos="fade-up" @endif></p>
        </div>
        @endif

        <div class="quote text-center mb-5 p-5">
            <img src="{{ asset('img/prima/daun.png') }}" width="80px" height="80px" @if (in_array('Animasi',$fitur))
                data-aos="zoom-in" @endif>
            <p class="fs-5 m-3" style="font-family: 'IM Fell Great Primer';color: #886F6F;"
                @if(in_array('Animasi',$fitur)) data-aos="zoom-up" @endif>"Dan di
                antara tanda-tanda kekuasaan-Nya ialah
                Dia menciptakan
                untukmu istri-istri dari
                jenismu sendiri,
                supaya kamu cenderung dan merasa tenteram kepadanya, dan dijadikan-Nya di antaramu rasa kasih dan
                sayang.
                Sesungguhnya pada yang demikian itu benar-benar terdapat tanda-tanda bagi Kaum yang berpikir,"<br> - QS.
                Ar-Rum: 21.</p>
        </div>

        <div class="mempelai text-center m-5">
            <div class="row justify-content-md-center align-items-center">
                <div class="col col-lg-2">
                    <h1 class="display-3" style="font-family: 'Great Vibes', cursive; color: #886F6F;"
                        @if(in_array('Animasi',$fitur)) data-aos="fade-down" @endif>
                        {{ $pesan->mPria->nama_pria_lengkap }}
                    </h1>
                    <p class="fs-4 m-3" style="font-family: 'IM Fell Great Primer', serif;color: #C1A3A3;"
                        @if(in_array('Animasi',$fitur)) data-aos="fade-down" @endif>Putra Ke-{{ $pesan->mPria->anak_ke
                        }}
                        Dari
                        Pasangan
                        <br>Bapak {{ $pesan->mPria->nama_ayah }} & Ibu {{ $pesan->mPria->nama_ibu }}
                    </p>
                </div>
                <div class="col-md-auto">
                    <img src="{{ url('storage/'. $pesan->data->imgCouple) }}" width="250px" height="500px"
                        class="border-warna mb-4 " @if (in_array('Animasi',$fitur)) data-aos="zoom-in-down" @endif>
                </div>
                <div class="col col-lg-2">
                    <h1 class="display-3" style="font-family: 'Great Vibes', cursive; color: #886F6F;"
                        @if(in_array('Animasi',$fitur)) data-aos="fade-down" @endif>
                        {{ $pesan->mWanita->nama_wanita_lengkap }}
                    </h1>
                    <p class="fs-4 m-3" style="font-family: 'IM Fell Great Primer', serif;color: #C1A3A3;"
                        @if(in_array('Animasi',$fitur)) data-aos="fade-down" @endif>Putri Ke-{{ $pesan->mWanita->anak_ke
                        }}
                        Dari
                        Pasangan<br>
                        Bapak {{ $pesan->mWanita->nama_ayah }}
                        & Ibu {{ $pesan->mWanita->nama_ibu }}
                    </p>
                </div>
            </div>
        </div>

        <div class="detail-acara text-center m-4 p-4 rounded" style="background: rgb(255,230,230);
    background: linear-gradient(198deg, rgba(255,230,230,1) 0%, rgba(232,191,191,1) 100%);">
            <h2 class="display-4 mb-5" style="font-family: 'Parisienne', cursive; color: #886F6F"
                @if(in_array('Animasi',$fitur)) data-aos="zoom-in-down" @endif>
                Detail
                Acara
            </h2>
            <div class="row">
                <div class="col-sm-6 mb-4" @if (in_array('Animasi',$fitur)) data-aos="fade-up" @endif>
                    <h5 class="fs-3" style="font-family: 'IM Fell Great Primer', serif;color: #886F6F;">Akad</h5>
                    <p class="fs-5" style="font-family: 'IM Fell Great Primer', serif;color: #886F6F;">
                        {{ $tgl_akad }}<br>{{ $pesan->data->jam_akad }}<br>{{$pesan->data->lokasi_akad}}
                    </p>
                    @if (in_array('Lokasi Acara Maps', $fitur))
                    <div class="ratio ratio-21x9">
                        <iframe src="{{ $pesan->data->iframeMaps_akad }}" style="border:0; background: rgb(255,230,230);
                        background: linear-gradient(198deg, rgba(255,230,230,1) 0%, rgba(232,191,191,1) 100%);"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                            class="shadow p-2 mb-5 rounded"></iframe>
                    </div>
                    @endif
                </div>
                <!-- <div class="garis_verikal"></div> -->
                <div class="col-sm-6 mb-4" @if (in_array('Animasi',$fitur)) data-aos="fade-down" @endif>
                    <h5 class="fs-3" style="font-family: 'IM Fell Great Primer', serif;color: #886F6F;">Resepsi</h5>
                    <p class="fs-5" style="font-family: 'IM Fell Great Primer', serif;color: #886F6F;">
                        {{ $tgl_resepsi }}<br>{{ $pesan->data->jam_acara
                        }}<br>{{$pesan->data->lokasi_resepsi}}
                    </p>
                    @if (in_array('Lokasi Acara Maps', $fitur))
                    <div class="ratio ratio-21x9">
                        <iframe src="{{ $pesan->data->iframeMaps_resepsi }}" style="border:0; background: rgb(255,230,230);
                        background: linear-gradient(198deg, rgba(255,230,230,1) 0%, rgba(232,191,191,1) 100%);"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                            class="shadow p-2 mb-5 rounded"></iframe>
                    </div>
                    @endif
                </div>
            </div>
        </div>

        @if (in_array('Galeri', $fitur))
        <div class="galeri shadow p-3 m-4 rounded" style="background: rgb(255,230,230);
    background: linear-gradient(198deg, rgba(255,230,230,1) 0%, rgba(232,191,191,1) 100%);">
            <h2 class="text-center display-4  mb-4" style="font-family: 'Parisienne', cursive; color: #886F6F"
                @if(in_array('Animasi',$fitur)) data-aos="fade-up" @endif>
                Galeri
                Foto</h2>
            <div class="row m-3">
                <div class="col-lg-4 col-md-12 mb-2 mb-lg-0">
                    <img src="{{ asset('img/prima/foto2.jpg') }}" class="w-100 shadow-1-strong rounded mb-4"
                        alt="Boat on Calm Water" @if (in_array('Animasi',$fitur)) data-aos="fade-down" @endif />

                    <img src="{{ asset('img/prima/foto9.jpg') }}" class="w-100 shadow-1-strong rounded mb-4"
                        alt="Wintry Mountain Landscape" @if (in_array('Animasi',$fitur)) data-aos="fade-up" @endif />
                </div>

                <div class="col-lg-4 mb-2 mb-lg-0">
                    <img src="{{ asset('img/prima/foto8.jpg') }}" class="w-100 shadow-1-strong rounded mb-4"
                        alt="Mountains in the Clouds" @if (in_array('Animasi',$fitur)) data-aos="zoom-in-down" @endif />

                    <img src="{{ asset('img/prima/foto10.jpg') }}" class="w-100 shadow-1-strong rounded mb-4"
                        alt="Boat on Calm Water" @if (in_array('Animasi',$fitur)) data-aos="zoom-in-up" @endif />
                </div>

                <div class="col-lg-4 mb-2 mb-lg-0">
                    <img src="{{ asset('img/prima/foto7.jpg') }}" class="w-100 shadow-1-strong rounded mb-4"
                        alt="Waves at Sea" @if (in_array('Animasi',$fitur)) data-aos="fade-down" @endif />

                    <img src="{{ asset('img/prima/foto12.jpg') }}" class="w-100 shadow-1-strong rounded mb-4"
                        alt="Yosemite National Park" @if (in_array('Animasi',$fitur)) data-aos="fade-up" @endif />
                </div>
            </div>
        </div>
        @endif

        <div class="quote text-center mb-1 p-5">
            <p class="fs-5 m-3" style="font-family: 'IM Fell Great Primer';color: #886F6F;"
                @if(in_array('Animasi',$fitur)) data-aos="zoom-up" @endif>
                "Tiada hubungan terindah seorang laki-laki dan wanita kecuali hubungan dalam pernikahan."</p>
            <img src="{{ asset('img/prima/daun.png') }}" width="80px" height="80px" @if (in_array('Animasi',$fitur))
                data-aos="zoom-in" @endif>
        </div>

        @if (in_array('Buka Tamu', $fitur))
        <div class="text-center ucapan m-3">
            <div class="row">
                <div class="col-sm-6">
                    <form id="greetingForm">
                        <h2 class="text-center fs-2  mb-4" style="font-family: 'Parisienne', cursive; color: #886F6F"
                            @if (in_array('Animasi',$fitur)) data-aos="zoom-in" @endif>Kartu Ucapan</h2>
                        <div class="form-group" @if (in_array('Animasi',$fitur)) data-aos="zoom-in-down" @endif>
                            <label class="fs-5 m-3" style="font-family: 'IM Fell Great Primer';color: #C1A3A3;"
                                for="name">Nama Anda:</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="form-group" @if (in_array('Animasi',$fitur)) data-aos="zoom-in-down" @endif>
                            <label class="fs-5 m-3" style="font-family: 'IM Fell Great Primer';color: #C1A3A3;"
                                for="message">Kata Ucapan:</label>
                            <textarea class="form-control" id="message" required></textarea>
                        </div>
                        <div class="form-group" @if (in_array('Animasi',$fitur)) data-aos="zoom-in-up" @endif>
                            <label class="fs-5 m-3" style="font-family: 'IM Fell Great Primer';color: #C1A3A3;"
                                for="attendance">Keterangan Hadir:</label>
                            <select class="form-control" id="attendance" required>
                                <option class="fs-6 m-3" style="font-family: 'IM Fell Great Primer';color: #C1A3A3;"
                                    value="Hadir">Hadir</option>
                                <option class="fs-6 m-3" style="font-family: 'IM Fell Great Primer';color: #C1A3A3;"
                                    value="Tidak Hadir">Tidak Hadir</option>
                            </select>
                        </div>
                        <button @if (in_array('Animasi',$fitur)) data-aos="zoom-in-up" @endif id="btn-pink"
                            type="submit" class="btn btn-primary m-5">Kirim Kartu
                            Ucapan</button>
                    </form>
                </div>
                <div class="col-sm-6">
                    <div id="senderInfo" class="sender-info" @if (in_array('Animasi',$fitur)) data-aos="fade-up" @endif>
                    </div>

                    <nav id="pagination" class="pagination"></nav>
                </div>
            </div>
        </div>
        @endif
    </main>

    <footer class="text-center p-5" style="color: #ffffff;" @if (in_array('Animasi',$fitur)) data-aos="fade-up" @endif>

        <h1 class="display-5 mt-3" @if (in_array('Animasi',$fitur)) data-aos="zoom-in-up" @endif
            style="font-family: 'IM Fell Great Primer'">Terimakasih</h1>
        <img src="{{ asset('img/prima/pngegg (3).png') }}" width="200px" height="200px" class="m-3">
        <p @if (in_array('Animasi',$fitur)) data-aos="zoom-in-up" @endif class="fs-4"
            style="font-family: 'IM Fell Great Primer'">Merupakan Suatu
            Kebahagian dan
            Kehormatan bagi kami. Apabila
            Bapak/Ibu/Saudara/I berkenan hadir
            untuk
            memberikan doa restu kepada kami</p>
        <p class="fs-4" @if (in_array('Animasi',$fitur)) data-aos="zoom-in-up" @endif
            style="font-family: 'IM Fell Great Primer'">Atas kehadiran dan doa
            restunya
            kami ucapkan terima kasih</p>
        <button id="playPauseButton" class="play mt-4">
            <i class="fas fa-music"></i>
        </button>
    </footer>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script>
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