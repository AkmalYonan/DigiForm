<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" integrity="sha384-PJsj/BTMqILvmcej7ulplguok8ag4xFTPryRq8xevL7eBYSmpXKcbNVuy+P0RMgq" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet" />
    <title>{{ $pesan->mPria->nama_pria }} & {{ $pesan->mWanita->nama_wanita }}</title>
    <link rel="stylesheet" type="text/css" href="{{asset ('css/cssEmiw/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset ('css/cssEmiw/lightbox.min.css')}}" />
</head>

<body>
    <button class="tombol kembali" id="kembali">
        <i class="fa-solid fa-circle-arrow-left"></i>
    </button>

    @if (in_array('Backsound(No Request)', $fitur) || in_array('Backsound(Request)', $fitur))
    <button id="play-pause-button" class="tombol lagu">
        <i id="play-icon" class="fa-solid fa-circle-play"></i>
        <i class="fa-solid fa-circle-pause" id="pause-icon"></i>
        <h4>song</h4>
    </button>
    @endif

    <section class="opening">
        <div class="luar">
            <div class="lingkaran @if (in_array('Animasi', $fitur)) hidden @endif" id="lingkaran">
                <div class="fullscreen-bg">
                    <img src="{{asset('img/assetsEmiw/img/home.jpg')}}" alt="Background Image" class="fullscreen-bg-image" />
                    @if (in_array('Countdown', $fitur))
                    <div class="welcome-text @if (in_array('Animasi', $fitur)) hidden @endif" id="hitung-hari">
                        <div class="judul">Menghitung Waktu</div>
                        <div class="countdown m-3" id="countdown"></div>
                    </div>
                    @endif
                </div>
            </div>
            <div class="nama-mempelai text-center @if (in_array('Animasi', $fitur)) hidden @endif">
                <span>{{ $pesan->mPria->nama_pria }}</span> & <span>{{ $pesan->mWanita->nama_wanita }}</span>
            </div>
            <div class="tanggal">{{ $pesan->data->tgl_resepsi }}</div>
            <div class="buka-undangan">
                <button href="" class="tombol-buka-undangan @if (in_array('Animasi', $fitur)) hidden @endif" id="tombol-buka-undangan">
                    Buka Undangan
                </button>
            </div>
        </div>
    </section>
    <section class="opening">
        <div class="luar">
            <div class="row">
                <div class="col text-center">
                    <h1 class="main-text @if (in_array('Animasi', $fitur)) hidden @endif">{{ $pesan->data->salam_pembuka }}</h1>
                </div>
            </div>
            <div class="row container">
                <div class="teks-kata2 col text-center @if (in_array('Animasi', $fitur)) hidden @endif">
                    <p>
                        "Bagaimana kamu akan mengambilnya kembali, padahal sebagian kamu
                        telah bergaul (bercampur) dengan yang lain sebagai suami-isteri.
                        Dan mereka (isteri-isterimu) telah mengambil dari kamu perjanjian
                        yang kuat." (QS An-Nisa: 21).
                    </p>
                    <p>
                        Maha suci Allah SWT yang telah menciptakan makhluk-makhluk
                        ciptaan-Nya berpasang-pasangan. Ya Allah, izinkanlah kami untuk
                        merangkai jalinan kasih di bawah ridho-Mu, berikanlah kami
                        kesempatan untuk menjalin kasih sayang yang kau ciptakan di antara
                        putra-putri kami.
                    </p>
                </div>
            </div>
            <div class="konten-mempelai @if (in_array('Animasi', $fitur)) hidden @endif">
                <div class="mempelai laki">
                    <img src="{{asset('img/assetsEmiw/img/cowo.jpg')}}" width="100px" class="rounded-circle pic-mempelai" alt="..." />
                    <h1 class="nama pt-3" id="nama">{{ $pesan->mPria->nama_pria}}</h1>
                    <h4 class="ortu" id="ortu">Putra dari bapak {{ $pesan->mPria->nama_ayah }} & ibu {{ $pesan->mPria->nama_ibu }}</h4>
                </div>
                <div class="mempelai perempuan">
                    <img src="{{asset('img/assetsEmiw/img/cewe.jpg')}}" width="100px" class="rounded-circle pic-mempelai" alt="..." />
                    <h1 class="nama pt-3" id="nama">{{ $pesan->mWanita->nama_wanita }}</h1>
                    <h4 class="ortu" id="ortu">Putra dari bapak {{ $pesan->mWanita->nama_ayah }} & ibu {{ $pesan->mWanita->nama_ibu }}</h4>
                </div>
            </div>
        </div>
    </section>
    <section class="opening">
        <div class="luar">
            <div class="text-center">
                <div class="pembuka-acara @if (in_array('Animasi', $fitur)) hidden @endif">
                    <p>
                        <span id="dnyaaja">D</span>engan rahmat dan rida Allah SWT, kami
                        bermaksud mengundang Bapak/Ibu/Saudara ke acara pernikahan kami.
                        InsyaAllah acara pernikahan ini akan berlangsung pada:
                    </p>
                </div>
            </div>
            <div class="konten-acara @if (in_array('Animasi', $fitur)) hidden @endif">
                <div class="acara akad-nikah">
                    <div class="row title-acara text-center">
                        <h1>Akad Nikah</h1>
                    </div>
                    <p class="m-0">{{ $pesan->data->tgl_akad }}</p>
                    <p class="m-0">{{ $pesan->data->jam_acara }}</p>
                    <p class="mt-0">{{ $pesan->data->lokasi_acara }}</p>
                    @if (in_array('Lokasi Acara (Maps)', $fitur))
                    <p>
                        <a href="https://goo.gl/maps/11yEbKVqVgUjuo4d7" class="btn" target="_blank"><i class="fa-solid fa-location-dot"></i> Lihat lokasi</a>
                    </p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.29489953519!2d-74.0149408381984!3d40.7115241712744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a191cac2c15%3A0x7f33d7e5a45131b9!2sWorld%20Trade%20Center!5e0!3m2!1sen!2sid!4v1692094010742!5m2!1sen!2sid" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    @endif
                </div>
                <div class="acara resepsi">
                    <div class="row title-acara text-center">
                        <h1>Resepsi</h1>
                    </div>
                    <p class="m-0">{{ $pesan->data->tgl_resepsi }}</p>
                    <p class="m-0">{{ $pesan->data->jam_acara }}</p>
                    <p class="mt-0">{{ $pesan->data->lokasi_acara }}</p>
                    @if (in_array('Lokasi Acara (Maps)', $fitur))
                    <p>
                        <a href="https://goo.gl/maps/Hny8ArjwjdzyRyTv7" class="btn" target="_blank"><i class="fa-solid fa-location-dot"></i> Lihat lokasi</a>
                    </p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.29489953519!2d-74.0149408381984!3d40.7115241712744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a191cac2c15%3A0x7f33d7e5a45131b9!2sWorld%20Trade%20Center!5e0!3m2!1sen!2sid!4v1692094010742!5m2!1sen!2sid" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    @endif
                </div>
            </div>
        </div>
    </section>
    @if (in_array('Galeri', $fitur))
    <section class="galeri">
        <div class="title-galeri text-center @if(in_array('Animasi', $fitur)) hidden @endif">
            <h1>Gallery</h1>
        </div>
        <div class="d-flex justify-content-center">
            <img src="{{asset('img/assetsEmiw/img/gallery/galeri.png')}}" class="pinggiran @if (in_array('Animasi', $fitur)) hidden @endif" alt="" />
        </div>
        <div class="konten-galeri p-3">
            <div class="isi-galeri">
                <a href="{{asset ('img/assetsEmiw/img/gallery/1.jpg')}}" data-lightbox="galeri" class="@if (in_array('Animasi', $fitur)) hidden @endif"><img src="{{asset ('img/assetsEmiw/img/gallery/1.jpg')}}" alt="" /></a>
                <a href="{{asset ('img/assetsEmiw/img/gallery/2.jpg')}}" data-lightbox="galeri" class="@if (in_array('Animasi', $fitur)) hidden @endif"><img src="{{asset ('img/assetsEmiw/img/gallery/2.jpg')}}" alt="" /></a>
            </div>
            <div class="isi-galeri">
                <a href="{{asset ('img/assetsEmiw/img/gallery/3.jpg')}}" data-lightbox="galeri" class="@if (in_array('Animasi', $fitur)) hidden @endif"><img src="{{asset ('img/assetsEmiw/img/gallery/3.jpg')}}" alt="" /></a>
                <a href="{{asset ('img/assetsEmiw/img/gallery/4.jpg')}}" data-lightbox="galeri" class="@if (in_array('Animasi', $fitur)) hidden @endif"><img src="{{asset ('img/assetsEmiw/img/gallery/4.jpg')}}" alt="" /></a>
            </div>
            <div class="isi-galeri">
                <a href="{{asset ('img/assetsEmiw/img/gallery/5.jpg')}}" data-lightbox="galeri" class="@if (in_array('Animasi', $fitur)) hidden @endif"><img src="{{asset ('img/assetsEmiw/img/gallery/5.jpg')}}" alt="" /></a>
                <a href="{{asset ('img/assetsEmiw/img/gallery/6.jpg')}}" data-lightbox="galeri" class="@if (in_array('Animasi', $fitur)) hidden @endif"><img src="{{asset ('img/assetsEmiw/img/gallery/6.jpg')}}" alt="" /></a>
            </div>
        </div>
        <div class="d-flex justify-content-center @if (in_array('Animasi', $fitur)) hidden @endif">
            <img src="{{asset('img/assetsEmiw/img/gallery/galeri.png') }}" class="pinggiran bawah @if (in_array('Animasi', $fitur)) hidden @endif" alt="" />
        </div>
    </section>
    @endif
    @if (in_array('Buku Tamu', $fitur))
    <section class="opening rsvp @if (in_array('Animasi', $fitur)) hidden @endif">
        <h1 class="title-form">RSVP</h1>
        <form action="">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Tamu</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama" />
            </div>
            <div class="mb-3">
                <label for="juml" class="form-label">Jumlah Tamu</label>
                <input type="number" class="form-control" id="juml" name="juml" placeholder="Banyak tamu" />
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="kehadiran" id="hadir" value="y" />
                        <label class="form-check-label" for="hadir"> Hadir </label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" name="kehadiran" id="tidak_hadir" value="n" />
                        <label class="form-check-label" for="tidak_hadir">
                            Tidak hadir
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Ucapan Do'a</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="d-flex justify-content-end">
                <button class="btn-submit" type="submit" name="submit">Kirim</button>
            </div>
        </form>
    </section>
    @endif

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous">
    </script>
    -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/ebc309096d.js" crossorigin="anonymous"></script>

    <script>
        var tanggal = $pesan->data->tgl_resepsi ?? new Date(new Date()).setDate(new Date().getDate() + 7);
    </script>
    <script src="{{asset('js/jsEmiw/script.js')}}"></script>
    <script src="{{asset('jsEmiw/lightbox-plus-jquery.min.js')}}"></script>
</body>

</html>