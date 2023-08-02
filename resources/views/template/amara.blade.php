<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Judul Mempelai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Belanosima&display=swap" />
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Fira+Code&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/amara.css') }}">
</head>

<body>
    @include('layouts.navbartemplate')
    <div class="overlay" id="overlay">
        <div class="container">
            <div class="position-absolute top-50 start-50 translate-middle">
                <div class="header text-white text-center py-4">
                    <h1 style="font-family: 'Alex Brush', cursive" class="display-2">
                        Akmal & Ratna
                    </h1>
                </div>
                <div class="body text-white text-center fs-5">
                    <p class="lead fs-6">Kepada Bapak/Ibu/Saudara/i</p>
                    <p class="fs-3" style="font-family: 'Belanosima', sans-serif">
                        Huda & Partner
                    </p>
                    <p class="lead fs-6">
                        Mohon maaf bila ada kesalahan pada penulisan nama/gelar
                    </p>
                    <button type="button" id="openContentBtn" class="btn" style="background-color: #6c4702;">
                        Buka Undangan
                    </button>
                </div>
            </div>
        </div>
        <!-- Konten website Anda di sini -->
    </div>
    <div id="actualContent" class="hidden-content">
        <!-- Isi konten sebenarnya dari website -->
        <div class="section1 bgwedding1 py-5">
            <div class="py-5 text-white">
                <div class="header text-center">
                    <h1 style="font-family: 'Belanosima', sans-serif" class="fs-4">
                        The Wedding Of
                    </h1>
                </div>
                <div class="body text-center fs-5">
                    <p class="display-3" style="font-family: 'Alex Brush', cursive">
                        Akmal & Ratna
                    </p>
                    <p class="lead fs-6 fw-semibold">Sabtu, 32 Desember 2030</p>
                </div>
            </div>
        </div>

        <div class="section2">
            <div class="">
                <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path
              fill="#0099ff"
              fill-opacity="1"
              d="M0,288L120,250.7C240,213,480,139,720,138.7C960,139,1200,213,1320,250.7L1440,288L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"
            ></path>
          </svg> -->
                <div class="container w-75 text-center py-5">
                    <div class="row row-cols-1 justify-content-center py-5">
                        <div class="col-4">
                            <img src="{{ asset('img/amara/assets/Bunga-1-1.png') }}" alt="" class="w-25 img-fluid" />
                        </div>
                        <div class="col-12">
                            <p class="text-secondary mt-3">
                                Sesungguhnya hati ini telah terhimpun dalam cinta dan bertemu
                                dalam taat kepada Mu. Eratkanlah ikatannya, kekalkanlah kasih
                                sayangnya, berkahilah jalannya dan penuhilah hati ini dengan
                                cahaya Mu yang tak pernah pudar Rasa haru dan bahagia terukir
                                dihati kami atas limpahan Rahmat Allah SWT dan kami bersimpuh
                                memohon Ridho Nya untuk melangsungkan resepsi pernikahan putra
                                – putri kami
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section3 mb-3 bg-warna-utama">
            <div class="container py-5">
                <p class="display-5 text-center text-white fw-bolder py-5"
                    style="font-family: 'Dancing Script', cursive">
                    Sang Mempelai
                </p>
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-6 col-md-6">
                        <div class="container">
                            <img src="{{ asset('img/amara/assets/card1.jpeg') }}" class="w-100 shadow-lg rounded-4"
                                alt="" />
                            <div class="text-header text-center py-5 text-white">
                                <p class="fw-bolder fs-1" style="font-family: 'Alex Brush', cursive">
                                    Akmal Bariq Yonanda
                                </p>
                                <div class="text-body fs-5" style="font-family: 'Belanosima', sans-serif">
                                    <div class="text-white">Putra dari:</div>
                                    <div class="text-white">Slamet Sayoga</div>
                                    <div class="text-white">Ida Mulyati</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6">
                        <div class="container">
                            <img src="{{ asset('img/amara/assets/card2.webp') }}" class="w-100 shadow-lg rounded-4"
                                alt="" />
                            <div class="text-header text-center py-5 text-white">
                                <p class="fw-bolder fs-1" style="font-family: 'Alex Brush', cursive">
                                    Ratna Syifa nurcahyani
                                </p>
                                <div class="text-body fs-5" style="font-family: 'Belanosima', sans-serif">
                                    <div class="text-white">Putri dari:</div>
                                    <div class="text-white">Bapak Ratmanto</div>
                                    <div class="text-white">...</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section4 mb-3">
            <div class="container py-5">
                <div class="text-center py-5">
                    <p class="display-5 fw-bolder text-warna-utama">
                        السَّلاَمُ عَلَيْكُمْ وَرَحْمَةُ اللهِ وَبَرَكَاتُهُ
                    </p>
                    <p class="fs-6 text1">
                        Assalamu’alaikum Warahmatullahi Wabarakatuh
                    </p>
                    <p class="container w-75">
                        Dengan memohon Rahmat Allah SWT dan dengan segenap kerendahan
                        hati, perkenankanlah kami mengundang Bapak/Ibu/Saudara/i untuk
                        dapat menghadiri acara pernikahan kami yang dilaksanakan pada :
                    </p>
                </div>
                <div class="row g-3 justify-content-center">
                    <div class="col-12 col-sm-6 col-md-6">
                        <div class="container border py-4 rounded-4 shadow-lg">
                            <div class="judul text-center pb-5 fs-1" style="font-family: 'Dancing Script', cursive">
                                Akad Nikah
                            </div>
                            <p>
                                <i class="fa-solid fa-calendar-days fa-xl pe-2" style="color: #5e4820"></i>Sabtu, 32
                                Desember 2030
                            </p>
                            <p>
                                <i class="fa-regular fa-clock fa-xl pe-2" style="color: #5a4820"></i>09.00 WIB s.d
                                Selesai
                            </p>
                            <p class="fw-bold">
                                <i class="fa-solid fa-location-dot fa-xl pe-2" style="color: #5c4820"></i>Smesco
                                Convention Hall
                            </p>
                            <p>
                                Sme Tower, Gedung Smeco, Jl. Gatot Subroto No.Kav. 94,
                                Pancoran, Kota Jakarta Selatan
                            </p>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.165233126139!2d106.8330980747968!3d-6.241942661121125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3c14db1c53f%3A0x2dbee1b1c268c92a!2sBRP%20Smesco%20Convention%20Hall!5e0!3m2!1sen!2sid!4v1689143993472!5m2!1sen!2sid"
                                class="ratio ratio-21x9" style="border: 0" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <a href="https://www.google.com/maps/place/BRP+Smesco+Convention+Hall/@-6.2419427,106.8330981,17z/data=!3m1!4b1!4m6!3m5!1s0x2e69f3c14db1c53f:0x2dbee1b1c268c92a!8m2!3d-6.241948!4d106.835673!16s%2Fg%2F1yg58n63y?entry=ttu"
                                target="_blank">
                                <img src="{{ asset('img/amara/assets/bukagoogle.jpeg') }}"
                                    class="img-fluid py-5 cenatcenut" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6">
                        <div class="container border py-4 rounded-4 shadow-lg">
                            <div class="judul text-center pb-5 fs-1" style="font-family: 'Dancing Script', cursive">
                                Resepsi Pernikahan
                            </div>
                            <p>
                                <i class="fa-solid fa-calendar-days fa-xl pe-2" style="color: #5e4820"></i>Sabtu, 32
                                Desember 2030
                            </p>
                            <p>
                                <i class="fa-regular fa-clock fa-xl pe-2" style="color: #5a4820"></i>09.00 WIB s.d
                                Selesai
                            </p>
                            <p class="fw-bold">
                                <i class="fa-solid fa-location-dot fa-xl pe-2" style="color: #5c4820"></i>Smesco
                                Convention Hall
                            </p>
                            <p>
                                Sme Tower, Gedung Smeco, Jl. Gatot Subroto No.Kav. 94,
                                Pancoran, Kota Jakarta Selatan
                            </p>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.165233126139!2d106.8330980747968!3d-6.241942661121125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3c14db1c53f%3A0x2dbee1b1c268c92a!2sBRP%20Smesco%20Convention%20Hall!5e0!3m2!1sen!2sid!4v1689143993472!5m2!1sen!2sid"
                                class="ratio ratio-21x9" style="border: 0" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <a href="https://www.google.com/maps/place/BRP+Smesco+Convention+Hall/@-6.2419427,106.8330981,17z/data=!3m1!4b1!4m6!3m5!1s0x2e69f3c14db1c53f:0x2dbee1b1c268c92a!8m2!3d-6.241948!4d106.835673!16s%2Fg%2F1yg58n63y?entry=ttu"
                                target="_blank">
                                <img src="{{ asset('img/amara/assets/bukagoogle.jpeg') }}"
                                    class="img-fluid py-5 cenatcenut" alt="" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section5 bg-warna-utama">
            <div class="container py-5">
                <p></p>
                <div class="rounded-4 bg-gradient-4 text-white shadow p-5 text-center mb-5">
                    <p class="fw-semibold fs-1" style="font-family: 'Dancing Script', cursive">
                        Menuju Hari Bahagia
                    </p>
                    <p class="container w-100">
                        Siang dan malam berganti begitu cepat, di antara saat-saat
                        mendebarkan yang belum pernah kami rasakan sebelumnya. Kami
                        nantikan kehadiran para keluarga dan sahabat, untuk menjadi saksi
                        ikrar janji suci kami di hari yang bahagia.
                    </p>
                    <div class="countdown py-4">
                        <div class="row justify-content-center fs-3 fw-bold contdown">
                            <div class="col-auto">
                                <div class="countdown-item">
                                    <span id="days" class="countdown-value"></span>
                                    <span class="countdown-label">Days</span>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="countdown-item">
                                    <span id="hours" class="countdown-value"></span>
                                    <span class="countdown-label">Hours</span>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="countdown-item">
                                    <span id="minutes" class="countdown-value"></span>
                                    <span class="countdown-label">Minutes</span>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="countdown-item">
                                    <span id="seconds" class="countdown-value"></span>
                                    <span class="countdown-label">Seconds</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section6">
            <div class="container py-5">
                <p class="fw-semibold fs-1 text-center" style="font-family: 'Dancing Script', cursive"
                    data-aos="fade-up">
                    Our Gallery
                </p>
                <!-- Gallery -->
                <div class="row">
                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                        <img src="{{ asset('img/amara/assets/galery1.jpeg') }}" class=" w-100 shadow-1-strong rounded
                            mb-4" alt="Boat on Calm Water" />

                        <img src="{{ asset('img/amara/assets/galery2.jpeg') }}" class=" w-100 shadow-1-strong rounded
                            mb-4" alt="Boat on Calm Water" />
                    </div>

                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <img src="{{ asset('img/amara/assets/gallery3.jpeg') }}"
                            class="w-100 shadow-1-strong rounded mb-4" alt="Photo in LOTTE KOREA 360" />
                    </div>

                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <img src="{{ asset('img/amara/assets/galery4.jpeg') }}"
                            class="w-100 shadow-1-strong rounded mb-4" alt="Waves at Sea" />
                    </div>
                </div>
                <!-- Gallery -->
            </div>
        </div>
        <div class="section6">
            <div class="container py-5 w-75">
                <div class="text-center">
                    <p>
                        “Dan di antara ayat-ayat-Nya ialah Dia menciptakan untukmu
                        istri-istri dari jenismu sendiri, supaya kamu merasa nyaman
                        kepadanya, dan dijadikan-Nya di antaramu mawadah dan rahmah.
                        Sesungguhnya pada yang demikian itu benar-benar terdapat
                        tanda-tanda bagi kaum yang berpikir”
                    </p>
                    <p style="font-family: 'Belanosima', sans-serif" class="fs-5 pb-5">
                        – AR-RUM 21 –
                    </p>
                    <p>Konfirmasi Kehadiran anda di Acara pernikahan :</p>
                    <p class="display-4" style="font-family: 'Alex Brush', cursive">
                        Akmal & Ratna
                    </p>
                </div>
                <div class="bg-light shadow-lg rounded-4">
                    <div class="container py-4">
                        <form action="">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nama Tamu</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" required />
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput2" class="form-label">Jumlah Tamu</label>
                                <input type="text" class="form-control" id="exampleFormControlInput2" required />
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1" value="Ya, Saya akan Datang" />
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Ya, Saya akan Datang
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault2" value="Saya masih bingung" checked />
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Saya masih bingung
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault3" value="Maaf, Saya tidak bisa datang" />
                                <label class="form-check-label" for="flexRadioDefault3">
                                    Maaf, Saya tidak bisa datang
                                </label>
                            </div>
                            <button type="button" class="btn btn-primary mt-3">
                                Kirim Pesan via Whatsapp
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <script src="https://kit.fontawesome.com/899e85c9e1.js" crossorigin="anonymous"></script>

    <script src="{{ asset('js/amara.js') }}"></script>
</body>

</html>