<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Akmal & Ratna Wedding</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Belanosima&display=swap" />
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Fira+Code&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/amartha.css') }}">
</head>

<body>
    <div class="overlay" id="overlay">
        <div class="container">
            <div class="position-absolute top-50 start-50 translate-middle">
                <div class="row justify-content-center">
                    <div class="col-10 col-md-3">
                        <img src="{{ asset('img/amartha/img/gallery3.jpeg') }}"
                            class="img-fluid rounded-4 border-warna-utama" alt="" />
                    </div>
                </div>
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
                    <button type="button" id="openContentBtn" class="btn bg-warna-utama text-white fw-bold">
                        <i class="fa-solid fa-envelope-open-text fa-xl pe-2" style="color: #ffffff"></i>
                        Buka Undangan
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div id="actualContent" class="hidden-content">
        @include('layouts.navbartemplate')
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
                <div class="container w-75 text-center pt-2 pb-5">
                    <div class="row row-cols-1 justify-content-center pt-5">
                        <div class="col-4">
                            <img src="{{ asset('img/amartha/assets/Bunga-1-1.png') }}" alt=""
                                class="w-25 img-fluid warna-bunga" />
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
        <div class="section3 mb-3">
            <div class="container pb-5">
                <div class="container w-75 pb-5">
                    <p class="display-5 text-center fw-bolder pt-5" style="font-family: 'Dancing Script', cursive">
                        Pasangan Pengantin
                    </p>
                    <p class="text-center">
                        Maha Suci Allah SWT, Yang telah menciptakan makhlukNya
                        berpasang-pasangan. Ya Allah, perkenankanlah dan Ridhoilah
                        Pernikahan kami.
                    </p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-5 col-md-3">
                        <div class="container">
                            <img src="{{ asset('img/amartha/img/card1.jpeg') }}"
                                class="w-100 shadow-lg rounded-4 border-warna-utama" alt="" data-aos="fade-down" />
                            <div class="text-header text-center py-5">
                                <p class="fw-bolder fs-1" style="font-family: 'Alex Brush', cursive">
                                    Akmal Bariq Yonanda
                                </p>
                                <div class="text-body fs-6" style="font-family: 'Belanosima', sans-serif">
                                    <div>Putra dari:</div>
                                    <div>Slamet Sayoga</div>
                                    <div>Ida Mulyati</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 col-md-2 d-flex justify-content-center align-items-center">
                        <p class="display-1 fw-bolder" style="font-family: 'Alex Brush', cursive">
                            &
                        </p>
                    </div>
                    <div class="col-5 col-md-3">
                        <div class="container">
                            <img src="{{ asset('img/amartha/img/card2.webp') }}"
                                class="w-100 shadow-lg rounded-4 border-warna-utama" alt="" data-aos="fade-up" />
                            <div class="text-header text-center py-5">
                                <p class="fw-bolder fs-1" style="font-family: 'Alex Brush', cursive">
                                    Ratna Syifa Nurcahyani
                                </p>
                                <div class="text-body fs-6" style="font-family: 'Belanosima', sans-serif">
                                    <div>Putri dari:</div>
                                    <div>Bapak Ratmanto</div>
                                    <div>...</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section5 bg-warna-utama" data-aos="fade-up">
            <div class="container py-5">
                <p></p>
                <div class="rounded-4 bg-gradient-4 text-white shadow p-5 text-center mb-5">
                    <p class="fw-semibold fs-1" style="font-family: 'Dancing Script', cursive" data-aos="fade-up">
                        Menuju Hari Bahagia
                    </p>
                    <p class="container w-75" data-aos="fade-up">
                        Siang dan malam berganti begitu cepat, di antara saat-saat
                        mendebarkan yang belum pernah kami rasakan sebelumnya. Kami
                        nantikan kehadiran para keluarga dan sahabat, untuk menjadi saksi
                        ikrar janji suci kami di hari yang bahagia.
                    </p>
                    <div class="countdown py-4" data-aos="fade-up">
                        <div class="row justify-content-center fs-3 fw-bold contdown">
                            <div class="col-6 col-md-2">
                                <div class="countdown-item">
                                    <span id="days" class="countdown-value"></span><br />
                                    <span class="countdown-label">Days</span>
                                </div>
                            </div>
                            <div class="col-6 col-md-2">
                                <div class="countdown-item">
                                    <span id="hours" class="countdown-value"></span><br />
                                    <span class="countdown-label">Hours</span>
                                </div>
                            </div>
                            <div class="col-6 col-md-2">
                                <div class="countdown-item">
                                    <span id="minutes" class="countdown-value"></span><br />
                                    <span class="countdown-label">Minutes</span>
                                </div>
                            </div>
                            <div class="col-6 col-md-2">
                                <div class="countdown-item">
                                    <span id="seconds" class="countdown-value"></span><br />
                                    <span class="countdown-label">Seconds</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section4 mb-3">
            <div class="container py-5">
                <div class="text-center py-5" data-aos="fade-up">
                    <p class="fs-4 fw-bolder text-warna-utama">Waktu & Tempat</p>
                    <p class="display-4 text1" style="font-family: 'Dancing Script', cursive">
                        Pernikahan
                    </p>
                    <p class="container w-75">
                        Pertemuan adalah permulaan, tetap bersama adalah perkembangan,
                        bekerja sama adalah keberhasilan.
                    </p>
                </div>
                <div class="row g-3 justify-content-center">
                    <div class="col-12 col-sm-6 col-md-6">
                        <div class="container border py-4 rounded-4 shadow-lg">
                            <div class="text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    fill="#0b666a" height="15%" width="15%" id="Layer_1" viewBox="0 0 512 512"
                                    xml:space="preserve">
                                    <g>
                                        <g>
                                            <path
                                                d="M378.238,66.909c-11.795-7.6-17.707-13.513-25.306-25.305c-1.443-2.239-3.925-3.592-6.588-3.592s-5.145,1.353-6.588,3.592   c-7.6,11.793-13.512,17.706-25.306,25.305c-2.239,1.443-3.592,3.924-3.592,6.588s1.353,5.145,3.592,6.588   c11.795,7.6,17.707,13.513,25.306,25.306c1.443,2.239,3.925,3.592,6.588,3.592c2.663,0,5.145-1.353,6.588-3.592   c7.599-11.794,13.512-17.706,25.306-25.306c2.239-1.443,3.592-3.924,3.592-6.588S380.478,68.352,378.238,66.909z M346.343,87.554   c-4.245-5.416-8.641-9.813-14.057-14.057c5.416-4.245,9.812-8.642,14.057-14.057c4.245,5.416,8.642,9.813,14.057,14.057   C354.984,77.742,350.587,82.139,346.343,87.554z">
                                            </path>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path
                                                d="M308.563,105.009L289.753,86.2c-3.059-3.062-8.022-3.06-11.082,0l-18.808,18.808c-1.469,1.47-2.295,3.463-2.295,5.541   c0,2.078,0.826,4.072,2.296,5.542l18.809,18.808c1.53,1.53,3.536,2.295,5.541,2.295s4.011-0.765,5.542-2.296l18.807-18.808   C311.624,113.03,311.624,108.068,308.563,105.009z M284.215,118.275l-7.728-7.726l7.725-7.725l7.727,7.726L284.215,118.275z">
                                            </path>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path
                                                d="M111.077,55.898L92.268,37.09c-3.059-3.062-8.022-3.061-11.082,0L62.377,55.898c-1.47,1.469-2.296,3.463-2.296,5.541   s0.825,4.072,2.296,5.542l18.81,18.808c1.53,1.53,3.536,2.295,5.541,2.295c2.005,0,4.011-0.765,5.542-2.296l18.807-18.808   C114.138,63.92,114.138,58.958,111.077,55.898z M86.729,69.164l-7.728-7.726l7.726-7.725l7.727,7.726L86.729,69.164z">
                                            </path>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path
                                                d="M487.112,253.666c-2.443-3.573-7.321-4.486-10.893-2.043c-3.571,2.444-4.487,7.321-2.042,10.893   c14.491,21.179,22.15,45.994,22.15,71.764c0,70.167-57.085,127.253-127.252,127.253c-70.166,0-127.251-57.086-127.251-127.253   c0-33.599,13.1-64.187,34.447-86.954c3.942,7.097,7.151,14.593,9.568,22.381c-13.88,17.851-22.162,40.261-22.162,64.574   c0,58.119,47.282,105.402,105.398,105.402c58.118,0,105.401-47.283,105.401-105.402c0-58.118-47.283-105.401-105.401-105.401   c-13.762,0-26.912,2.662-38.975,7.484c-2.94-6.735-6.31-13.241-10.054-19.498c7.876-3.301,16.154-5.827,24.736-7.493   l17.236,13.829c1.936,1.552,4.37,2.407,6.85,2.407h0.413c2.49,0,4.928-0.858,6.858-2.411l17.237-13.83   c23.083,4.467,44.562,15.259,62.104,31.489c3.176,2.939,8.132,2.747,11.075-0.429c2.939-3.177,2.747-8.135-0.429-11.075   c-16.513-15.281-36.133-26.273-57.316-32.388c6.936-5.848,10.895-14.313,10.895-23.437c0-16.92-13.765-30.686-30.685-30.686   c-7.378,0-14.388,2.602-19.941,7.361c-5.555-4.762-12.564-7.361-19.941-7.361c-16.92,0-30.686,13.766-30.686,30.686   c0,9.131,3.965,17.602,10.911,23.45c-6.223,1.802-12.268,4.023-18.113,6.618c-23.336-31.907-57.361-55.519-96.769-65.506   l3.627-2.91c8.723-6.778,13.724-16.992,13.724-28.034c0-19.571-15.922-35.494-35.494-35.494c-9.014,0-17.553,3.357-24.138,9.471   c-6.585-6.114-15.125-9.471-24.139-9.471c-19.571,0-35.494,15.922-35.494,35.494c0,11.042,5.001,21.255,13.725,28.035l3.626,2.909   C55.343,156.989,0,224.649,0,305.012c0,41.492,14.965,81.573,42.141,112.862c1.549,1.784,3.728,2.698,5.919,2.698   c1.822,0,3.652-0.631,5.136-1.919c3.267-2.838,3.616-7.789,0.777-11.056c-24.697-28.437-38.3-64.868-38.3-102.584   c0-77.27,56.283-141.638,130.006-154.271l18.998,15.244c2.054,1.649,4.635,2.556,7.267,2.556h0.502   c2.635,0,5.217-0.909,7.264-2.555l19.001-15.245c73.723,12.632,130.006,77,130.006,154.271c0,31.877-9.38,62.186-27.211,88.21   c-5.31-6.066-9.745-12.767-13.249-20.026c12.188-20.666,18.609-44.146,18.609-68.185c0-45.614-22.881-87.793-61.208-112.829   c-3.624-2.366-8.48-1.35-10.847,2.276c-2.367,3.624-1.348,8.479,2.276,10.847c11.939,7.798,22.173,17.483,30.433,28.512   c-25.559,25.836-41.369,61.334-41.369,100.462c0,24.018,5.975,46.66,16.485,66.55c-20.35,14.978-45.112,23.179-70.44,23.179   c-65.615,0-118.998-53.382-118.998-118.997s53.383-118.998,118.998-118.998c12.802,0,25.4,2.03,37.446,6.033   c4.103,1.365,8.543-0.858,9.908-4.964c1.366-4.108-0.858-8.543-4.965-9.909c-13.642-4.535-27.904-6.834-42.388-6.834   c-74.258,0-134.672,60.413-134.672,134.672c0,74.258,60.413,134.671,134.672,134.671c28.165,0,55.72-8.937,78.519-25.323   c4.106,6.059,8.67,11.795,13.651,17.157c-26.643,19.411-59.047,30.017-92.169,30.017c-34.825,0-67.787-11.191-95.322-32.363   c-3.431-2.639-8.352-1.995-10.989,1.436c-2.638,3.431-1.996,8.352,1.436,10.989c30.297,23.297,66.562,35.611,104.874,35.611   c37.376,0,73.918-12.281,103.65-34.698c25.046,21.606,57.632,34.698,93.229,34.698C447.884,477.207,512,413.091,512,334.28   C512,305.34,503.394,277.464,487.112,253.666z M349.135,158.516c3.928,0,7.641,1.507,10.459,4.245   c1.05,1.019,1.94,2.174,2.647,3.434c1.388,2.471,4.001,4.002,6.835,4.002c2.834,0,5.447-1.53,6.835-4.002   c0.706-1.26,1.597-2.415,2.649-3.437c2.816-2.737,6.53-4.243,10.457-4.243c8.278,0,15.012,6.734,15.012,15.012   c0,4.68-2.126,9.009-5.834,11.879c-0.036,0.028-0.071,0.056-0.108,0.086l-29.012,23.277l-29.013-23.277   c-0.036-0.029-0.071-0.057-0.108-0.086c-3.707-2.869-5.834-7.199-5.834-11.879C334.123,165.25,340.857,158.516,349.135,158.516z    M208.453,122.831c-0.037,0.028-0.072,0.056-0.109,0.086l-36.15,29.004l-36.148-29.004c-0.036-0.029-0.071-0.057-0.109-0.086   c-4.894-3.788-7.701-9.504-7.701-15.684c0-10.93,8.892-19.821,19.821-19.821c5.187,0,10.091,1.99,13.811,5.604   c1.382,1.343,2.558,2.869,3.495,4.537c1.388,2.47,4.001,3.999,6.834,3.999c2.834-0.001,5.446-1.53,6.833-4.001   c0.935-1.665,2.111-3.191,3.495-4.536c3.719-3.612,8.622-5.603,13.809-5.603c10.929,0,19.821,8.891,19.821,19.821   C216.154,113.327,213.347,119.044,208.453,122.831z M344.391,305.012c0-18.855-3.055-37.008-8.682-54   c10.318-4.158,21.575-6.46,33.366-6.46c49.476,0,89.727,40.252,89.727,89.727c0,49.477-40.252,89.729-89.727,89.729   c-21.228,0-40.739-7.432-56.117-19.807C333.546,375.094,344.391,340.958,344.391,305.012z M291.192,305.012   c0,16.443-3.417,32.585-9.951,47.513c-1.23-5.893-1.891-11.991-1.891-18.244c0-15.587,4.016-30.244,11.037-43.027   C290.912,295.788,291.192,300.378,291.192,305.012z">
                                            </path>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <p class="text-center fs-3 pt-2 mb-2" style="font-family: 'Belanosima', sans-serif">
                                Akad
                            </p>
                            <p class="judul text-center pb-3 mb-0 fs-1 text-warna-utama"
                                style="font-family: 'Dancing Script', cursive">
                                Pernikahan
                            </p>
                            <hr class="w-50 mx-auto" style="border-width: 3px" />
                            <p class="text-center fs-2 pt-2" style="font-family: 'Belanosima', sans-serif">
                                32 Desember 2023
                            </p>
                            <p class="text-center fs-6 text-warna-utama" style="font-family: 'Belanosima', sans-serif">
                                10.00 WIB s.d Selesai
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6">
                        <div class="container border py-4 rounded-4 shadow-lg">
                            <div class="text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    fill="#0b666a" height="15%" width="15%" id="Capa_1" viewBox="0 0 354.662 354.662"
                                    xml:space="preserve">
                                    <g>
                                        <g>
                                            <path
                                                d="M349.805,45.295c-2.924-1.098-6.221-0.273-8.279,2.074c-1.133,1.289-27.742,32.117-29.613,77.371   c-1.188,28.682-1.164,46.834,9.152,57.029c4.523,4.473,10.537,6.934,18.598,7.543v113.035c0,4.143,3.357,7.5,7.5,7.5   c4.142,0,7.5-3.357,7.5-7.5V181.935c0-0.039,0-0.076,0-0.115V52.314C354.662,49.191,352.729,46.396,349.805,45.295z    M339.662,174.246c-3.695-0.424-6.355-1.467-8.055-3.145c-5.875-5.809-5.635-23.377-4.709-45.742   c0.791-19.137,6.758-35.553,12.764-47.471V174.246z">
                                            </path>
                                            <path
                                                d="M180.502,58.058c-65.766,0-119.271,53.506-119.271,119.275c0,65.764,53.506,119.27,119.271,119.27   c65.768,0,119.272-53.506,119.272-119.27C299.774,111.564,246.27,58.058,180.502,58.058z M180.502,281.603   c-57.494,0-104.271-46.777-104.271-104.27c0-57.498,46.777-104.275,104.271-104.275c57.496,0,104.272,46.777,104.272,104.275   C284.774,234.826,237.998,281.603,180.502,281.603z">
                                            </path>
                                            <path
                                                d="M180.502,92.883c-46.563,0-84.445,37.883-84.445,84.447s37.883,84.447,84.445,84.447s84.445-37.883,84.445-84.447   S227.065,92.883,180.502,92.883z M180.502,246.777c-38.293,0-69.445-31.154-69.445-69.447s31.152-69.447,69.445-69.447   s69.445,31.154,69.445,69.447S218.795,246.777,180.502,246.777z">
                                            </path>
                                            <path
                                                d="M52.111,46.679c-4.143,0-7.5,3.357-7.5,7.5v35.482h-7.307V54.179c0-4.143-3.357-7.5-7.5-7.5c-4.142,0-7.5,3.357-7.5,7.5   v35.482H15V54.179c0-4.143-3.357-7.5-7.5-7.5c-4.142,0-7.5,3.357-7.5,7.5v42.982c0,26.16,9.182,46.871,22.305,52.615v150.705   c0,4.143,3.358,7.5,7.5,7.5c4.143,0,7.5-3.357,7.5-7.5V149.777c13.125-5.744,22.307-26.455,22.307-52.615V54.179   C59.611,50.037,56.254,46.679,52.111,46.679z M29.805,136.375c-5.244,0-12.877-12.381-14.496-31.713h28.992   C42.682,123.994,35.049,136.375,29.805,136.375z">
                                            </path>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <p class="text-center fs-3 pt-2 mb-2" style="font-family: 'Belanosima', sans-serif">
                                Resepsi
                            </p>
                            <p class="judul text-center pb-3 mb-0 fs-1 text-warna-utama"
                                style="font-family: 'Dancing Script', cursive">
                                Pernikahan
                            </p>
                            <hr class="w-50 mx-auto" style="border-width: 3px" />
                            <p class="text-center fs-2 pt-2" style="font-family: 'Belanosima', sans-serif">
                                32 Desember 2023
                            </p>
                            <p class="text-center fs-6 text-warna-utama" style="font-family: 'Belanosima', sans-serif">
                                10.00 WIB s.d Selesai
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section5 bg-warna-utama">
            <div class="container w-75 py-5">
                <div class="rounded-4 bg-white shadow p-5 text-center mb-5" data-aos="fade-up">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            fill="#000000" height="15%" width="15%" id="Layer_1" viewBox="0 0 512 512"
                            xml:space="preserve">
                            <g>
                                <g>
                                    <path
                                        d="M445.1,282.811v-68.703c0-44.711-15.889-88.097-44.741-122.167c-26.627-31.444-62.836-53.363-102.698-62.355   c0.152-1.128,0.256-2.321,0.256-3.622C297.915,11.647,286.376,0,272.19,0c-6.889,0-12.043,2.509-16.273,5.692   C251.57,2.395,246.579,0,239.68,0c-14.163,0-25.686,11.647-25.686,25.964c0,1.312,0.083,2.516,0.221,3.63   c-39.856,8.998-76.057,30.921-102.678,62.364c-28.842,34.067-44.726,77.448-44.726,122.15v32.919v35.379L44.462,485.522h22.349   v19.361h15.223v-19.361h47.394l-22.484-203.123v-23.757c76.959-53.225,115.291-104.145,133.935-137.687   c6.912-12.434,11.714-23.452,15.061-32.683c3.347,9.231,8.149,20.249,15.061,32.683c18.642,33.54,56.97,84.457,133.92,137.678   v23.774l-22.349,203.116h47.305v19.361H445.1v-19.361h22.438L445.1,282.811z M82.034,262.249h9.688v12.961h-9.688V262.249z    M112.427,470.299H61.451l19.791-179.867h11.275L112.427,470.299z M226.956,114.663c-18.025,32.044-55.205,80.909-130.001,132.364   H82.034v-32.919c0-82.785,57.866-153.58,138.319-170.268c6.245,8.211,18.322,19.088,25.589,25.351   C243.328,79.338,237.945,95.127,226.956,114.663z M255.939,57.116l-0.735-0.046c-10.118-8.79-21.985-20.09-24.256-24.688   l-0.075-0.152c-0.961-1.945-1.656-3.352-1.656-6.267c0.001-6.023,4.596-10.741,10.463-10.741c3.913,0,6.19,1.518,11.042,6.079   l5.272,4.955l5.216-5.014c4.242-4.079,6.967-6.02,10.98-6.02c5.889,0,10.503,4.718,10.503,10.741c0,2.69-0.783,4.34-1.692,6.25   l-0.132,0.278c-1.953,4.12-13.139,15.036-24.174,24.577L255.939,57.116z M284.922,114.663   c-10.986-19.53-16.368-35.312-18.983-45.461c7.296-6.263,19.403-17.134,25.616-25.363   c80.456,16.687,138.321,87.476,138.321,170.268v32.919h-14.954C340.129,195.572,302.948,146.707,284.922,114.663z    M429.831,262.249v12.961h-0.001h-9.687v-12.961H429.831z M399.56,470.299l19.791-179.867h11.275l19.91,179.867H399.56z">
                                    </path>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path
                                        d="M285.279,383.466v-2.939h63.957v-15.223h-63.957H226.63h-63.956v15.223h63.956v2.939c0,13.538,9.223,24.957,21.714,28.318   v67.054l-30.229,20.578L226.681,512l29.258-19.917L285.195,512l8.566-12.584l-30.197-20.557v-67.076   C276.055,408.422,285.279,397.003,285.279,383.466z M255.955,397.568c-7.777,0-14.102-6.326-14.102-14.102v-2.939h28.204v2.939   C270.057,391.241,263.732,397.568,255.955,397.568z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <p class="fw-semibold fs-5 pt-2" style="font-family: 'Belanosima', sans-serif">
                        Bertempat di
                    </p>
                    <p class="fw-semibold fs-1" style="font-family: 'Dancing Script', cursive">
                        Smesco Convention Hall
                    </p>
                    <p class="container w-100">
                        Sme Tower, Gedung Smeco, Jl. Gatot Subroto No.Kav. 94, Pancoran,
                        Kota Jakarta Selatan
                    </p>
                    <div class="container w-75 border border-4 border-dark rounded-4">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.165233126139!2d106.8330980747968!3d-6.241942661121125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3c14db1c53f%3A0x2dbee1b1c268c92a!2sBRP%20Smesco%20Convention%20Hall!5e0!3m2!1sen!2sid!4v1689143993472!5m2!1sen!2sid"
                            class="ratio ratio-21x9 object-fit-contain" style="border: 0" allowfullscreen=""
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="livestream py-5">
                        <p class="fw-semibold display-4" style="font-family: 'Dancing Script', cursive">
                            Live Streaming
                        </p>
                        <p class="container w-100">
                            Momen kebahagiaan Akad & Resepsi nikah akan kami tayangkan
                            secara virtual melalui Instagram.
                        </p>
                        <div class="row row-cols-1 justify-content-center">
                            <div class="col-12 col-md-4">
                                <img src="{{ asset('img/amartha/assets/ig-logo.png') }}" class="img-fluid" alt="" />
                            </div>
                        </div>
                        <div class="d-flex gap-3 justify-content-center">
                            <button type="button" class="btn bg-warna-utama text-warna-utama2">
                                @akmyons
                            </button>
                            <button type="button" class="btn bg-warna-utama text-warna-utama2">
                                @rtnsyf
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section6">
            <div class="container py-5">
                <p class="fw-semibold display-4 text-center" style="font-family: 'Dancing Script', cursive"
                    data-aos="fade-up">
                    Our Gallery
                </p>
                <!-- Gallery -->
                <div class="row" data-aos="fade-up">
                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                        <img src="{{ asset('img/amartha/img/galery1.jpeg') }}"
                            class="w-100 shadow-1-strong rounded mb-4" alt="Photo in LOTTE KOREA 360" />

                        <img src="{{ asset('img/amartha/img/galery2.jpeg') }}"
                            class="w-100 shadow-1-strong rounded mb-4" alt="Photo in LOTTE KOREA 360" />
                    </div>

                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <img src="{{ asset('img/amartha/img/gallery3.jpeg') }}"
                            class="w-100 shadow-1-strong rounded mb-4" alt="Photo in LOTTE KOREA 360" />
                    </div>

                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <img src="{{ asset('img/amartha/img/galery4.jpeg') }}" class=" w-100 shadow-1-strong rounded
                            mb-4" alt="Photo in LOTTE KOREA 360" />
                    </div>
                </div>
                <!-- Gallery -->
            </div>
        </div>
        <div class="section6">
            <div class="container py-5 w-75" data-aos="fade-up">
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
                    <p class="display-3" style="font-family: 'Alex Brush', cursive">
                        Konfirmasi Kehadiran
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
                            <button type="button" class="btn btn-primary mt-3" onclick="sendMessage()">
                                Kirim Pesan via Whatsapp
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="container pt-3 w-50">
                <p class="text-muted fs-6 text-center">
                    Copyright ©, 2023 Akmal Yonan, All Rights Reserved
                </p>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <script src="https://kit.fontawesome.com/899e85c9e1.js" crossorigin="anonymous"></script>

    <script src="{{ asset('js/amartha.js') }}"></script>

</body>

</html>