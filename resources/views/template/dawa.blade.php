<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Undangan Pernikahan</title>
    <link rel="stylesheet" href="{{ asset('css/dawa.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Alex+Brush&family=Merriweather:ital,wght@0,300;1,300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>

<body>
    <div class="wrapper" id="page1" style=" background-image: url('{{ asset('img/dawa/resource/images/bg.jpg')}}')">
        <section class="hidden">
            <div class="container" id="invitationContent">
                <h3>The Wedding of</h3>
                <h1 class="pengantin">Dafa & Azizi</h1>
                <div class="logo">
                    <img src="{{ asset('img/dawa/resource/images/logo.png')}}" alt="" alt="" width="175" height="185.5">
                </div>
                <div class="details">
                    <p><span class="date">03.03.32</span></p>
                </div>
                <div class="sambut">
                    <p>Kepada yth.</p>
                    <p>Bapa/Ibu/Saudara/I</p>
                </div>
                <div class="nama-tamu">
                    <p>Nama Tamu</p>
                </div>
                <div class="rsvp">
                    <a id="bukaUndanganButton" href="#page2">Buka Undangan</a>
                </div>
            </div>
        </section>
    </div>
    <div class="wrapper" id="page2" style=" background-image: url('{{ asset('img/dawa/resource/images/bg.jpg')}}')">
        <div class="container2">
            <section class="hidden">
                <h4>Menghitung hari</h4>
                <div class="countdown">
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
            </section>
            <div class="rsvp">
                <a id="bukaUndanganButton" href="#page4">Next</a>
            </div>
        </div>
    </div>
    <div class="wrapper" id="page3" style=" background-image: url('{{ asset('img/dawa/resource/images/bg.jpg')}}')">
        <section class="hidden">
            <div class="container2">
                <div class="logo">
                    <img src="{{ asset('img/dawa/resource/images/logo.png') }}" alt="" alt="" width="105"
                        height="115.5">
                </div>
                <p>"Dan diantara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari
                    jenismu sendiri, agar kamu cenderung merasa tentram kepadanya, dan Dia menjadikan diantaramu rasa
                    kasih dan sayang." <br><br><span>
                        <p>Ar-Rum 21</p>
                    </span></p>
            </div>
            <div class="rsvp">
                <a id="bukaUndanganButton" href="#page4">Next</a>
            </div>
        </section>
    </div>
    <div class="wrapper" id="page4" style=" background-image: url('{{ asset('img/dawa/resource/images/bg.jpg')}}')">
        <section class="hidden">
            <div class="container2">
                <p>Dengan Hormat <br>mengundang Bapak/Ibu/Saudara/i</p>
                <p>untuk menghadiri acara pernikahan kami</p>
                <h1>Dafa Jibran</h1>
                <p>Putra dari Bapak Wihartono & Ibu Prihani
                <h1 style="font-weight: bold; font-size: 55px; font-family: 'Alex Brush', cursive; color: CFB975;">&
                </h1>
                </p>
                <h1>Azizi Asadel</h1>
                <p>Putra dari Bapak Fadli Akhmad & Ibu Nur Ayu</p>
            </div>
            <div class="rsvp">
                <a id="bukaUndanganButton" href="#page5">Next</a>
            </div>
        </section>
    </div>
    <div class="wrapper" id="page5" style=" background-image: url('{{ asset('img/dawa/resource/images/bg.jpg')}}')">
        <div class="tgl-lokasi">
            <section class="hidden">
                <div class="container2">
                    <h2 class="judul">Akad Nikah</h2>
                    <div class="tgl-lokasi-content">
                        <div class="card">
                            <p class="date">Rabu, 03 May 2032</p>
                        </div>
                        <p>Pukul 08.00 - 10.00 WIB</p>
                        <p class="bold">Lokasi Acara</p>
                        <p><span><b>Masjid Istiqlal</b></span> <br>Jl. Taman Wijaya Kusuma, Ps. Baru, Kecamatan Sawah
                            Besar, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10710</p>
                    </div>
                    <div class="rsvp">
                        <a id="bukaUndanganButton"
                            href="https://www.google.com/maps/place/Masjid+Istiqlal/@-6.17017,106.8292013,17z/data=!3m1!4b1!4m6!3m5!1s0x2e69f5ce68b5e01d:0xcafaf042d5840c6c!8m2!3d-6.17017!4d106.83139!16zL20vMDRzam1q?entry=ttu">Buka
                            Lokasi</a>
                    </div>
                </div>
                <div class="rsvp">
                    <a id="bukaUndanganButton" href="#page6">Next</a>
                </div>
            </section>
        </div>
    </div>
    <div class="wrapper" id="page6" style=" background-image: url('{{ asset('img/dawa/resource/images/bg.jpg')}}')">
        <div class="tgl-lokasi">
            <section class="hidden">
                <div class="container2">
                    <h2 class="judul">Resepsi</h2>
                    <div class="tgl-lokasi-content">
                        <div class="card">
                            <p class="date">Selasa, 09 May 2032</p>
                        </div>
                        <p>Pukul 10.00 WIB - Selesai</p>
                        <p class="bold">Lokasi Acara</p>
                        <p><span><b>Sankeien Garden, Yokohama</b></span> <br>58-1 Honmokusannotani, Naka Ward, Yokohama,
                            Kanagawa 231-0824, Jepang</p>
                    </div>
                    <div class="rsvp">
                        <a id="bukaUndanganButton" href="https://livejapan.com/en/spot-list/cate-cs0101005/">Buka
                            Lokasi</a>
                    </div>
                </div>
                <div class="rsvp">
                    <a id="bukaUndanganButton" href="#page7">Next</a>
                </div>
            </section>
        </div>
    </div>
    <div class="wrapper" id="page7" style=" background-image: url('{{ asset('img/dawa/resource/images/bg.jpg')}}')">
        <div class="container2">
            <section class="hidden">
                <h3>Lokasi</h3>
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0"
                            marginwidth="0"
                            src="https://maps.google.com/maps?width=200&amp;height=200&amp;hl=en&amp;q=Taman senkein&amp;t=&amp;z=18&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                        <a href="https://connectionsgame.org/">Connections Game</a>
                    </div>
                </div>
                <p><span><b>Sankeien Garden, Yokohama</b></span> <br>58-1 Honmokusannotani, Naka Ward, Yokohama,
                    Kanagawa 231-0824, Jepang</p>
                <div class="rsvp">
                    <a id="bukaUndanganButton" href="https://livejapan.com/en/spot-list/cate-cs0101005/">Buka Lokasi</a>
                </div>
                <div class="rsvp">
                    <a id="bukaUndanganButton" href="#page8">Next</a>
                </div>
            </section>
        </div>
    </div>
    <div class="wrapper" id="page8" style=" background-image: url('{{ asset('img/dawa/resource/images/bg.jpg')}}')">
        <div class="container2">
            <section class="hidden">
                <div class="slider-container">
                    <h1>Galerry</h1>
                    <div class="slider">
                        <div class="slide">
                            <img src="{{ asset('img/dawa/resource/images/hehe.jpg')}}" alt="img">
                        </div>
                        <div class="slide">
                            <img src="{{ asset('img/dawa/resource/images/hehe2.jpg')}}" alt="img">
                        </div>
                        <div class="slide">
                            <img src="{{ asset('img/dawa/resource/images/hehe.jpg')}}" alt="img">
                        </div>
                        <div class="slide">
                            <img src="{{ asset('img/dawa/resource/images/hehe2.jpg')}}" alt="img">
                        </div>
                        <div class="slide">
                            <img src="" alt="img">
                        </div>
                        <div class="slide">
                            <img src="" alt="img">
                        </div>
                    </div>
                    <div class="prev-btn">
                        <i class="fa-solid fa-angle-left"></i>
                    </div>
                    <div class="next-btn">
                        <i class="fa-solid fa-angle-right"></i>
                    </div>
                </div>
                <div class="rsvp">
                    <a id="bukaUndanganButton" href="#page9">Next</a>
                </div>

            </section>
        </div>
    </div>
    <div class="wrapper" id="page9" style=" background-image: url('{{ asset('img/dawa/resource/images/bg.jpg')}}')">
        <section class="hidden">
            <h1>Form Kehadiran</h1>

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
        </section>
    </div>
    <script src="{{ asset('js/dawa.js')}}"></script>
</body>

</html>