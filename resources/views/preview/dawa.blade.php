<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pesan->mPria->nama_pria }} & {{ $pesan->mWanita->nama_wanita }} Wedding</title>
    <link rel="stylesheet" href="{{ asset('css/dawa.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Alex+Brush&family=Merriweather:ital,wght@0,300;1,300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>

<body>
    <div class="wrapper" id="page1" style=" background-image: url('{{ asset('img/dawa/resource/images/bg.jpg') }}')">
        <section @if (in_array('Animasi',$fitur)) class="hidden" @endif>
            <div class="container" id="invitationContent">
                <h3>The Wedding of</h3>
                <h1 class="pengantin">{{ $pesan->mPria->nama_pria }} & {{ $pesan->mWanita->nama_wanita }}</h1>
                <div class="logo">
                    <img src="{{ asset('img/dawa/resource/images/logo.png') }}" alt="" alt="" width="175"
                        height="185.5">
                </div>
                <div class="details">
                    <p><span class="date">{{ $pesan->data->tgl_resepsi }}</span></p>
                </div>
                <div class="sambut">
                    <p>Kepada yth.</p>
                    <p>Bapa/Ibu/Saudara/I</p>
                </div>
                <div class="nama-tamu">
                    <p>Nama Tamu</p>
                </div>
                <div class="rsvp">
                    <button id="bukaUndanganButton" class="scrollButton btn btn-primary">Buka Undangan</button>
                </div>
            </div>
        </section>
    </div>
    @if (in_array('Countdown', $fitur))
    <div class="wrapper" id="page2" style=" background-image: url('{{ asset('img/dawa/resource/images/bg.jpg') }}')">
        <div class="container2">
            <section @if (in_array('Animasi',$fitur)) class="hidden" @endif>
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
                <button id="bukaUndanganButton" class="scrollButton">Next</button>
            </div>
        </div>
    </div>
    @endif
    <div class="wrapper" id="page3" style=" background-image: url('{{ asset('img/dawa/resource/images/bg.jpg') }}')">
        <section @if (in_array('Animasi',$fitur)) class="hidden" @endif>
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
                <button id="bukaUndanganButton" class="scrollButton">Next</button>
            </div>
        </section>
    </div>
    <div class="wrapper" id="page4" style=" background-image: url('{{ asset('img/dawa/resource/images/bg.jpg') }}')">
        <section @if (in_array('Animasi',$fitur)) class="hidden" @endif>
            <div class="container2">
                <p>Dengan Hormat <br>mengundang Bapak/Ibu/Saudara/i</p>
                <p>untuk menghadiri acara pernikahan kami</p>
                <h1>{{ $pesan->mPria->nama_pria_lengkap }}</h1>
                <p>Putra ke-{{$pesan->mPria->anak_ke }} dari Bapak {{ $pesan->mPria->nama_ayah }} & Ibu {{
                    $pesan->mPria->nama_ibu }}
                <h1 style="font-weight: bold; font-size: 55px; font-family: 'Alex Brush', cursive; color: CFB975;">&
                </h1>
                </p>
                <h1>{{ $pesan->mWanita->nama_wanita_lengkap }}</h1>
                <p>Putri ke-{{$pesan->mWanita->anak_ke}} dari Bapak {{ $pesan->mWanita->nama_ayah }} & Ibu {{
                    $pesan->mWanita->nama_ibu }}</p>
            </div>
            <div class="rsvp">
                <button id="bukaUndanganButton" class="scrollButton">Next</button>
            </div>
        </section>
    </div>
    <div class="wrapper" id="page5" style=" background-image: url('{{ asset('img/dawa/resource/images/bg.jpg') }}')">
        <div class="tgl-lokasi">
            <section @if (in_array('Animasi',$fitur)) class="hidden" @endif>
                <div class="container2">
                    <h2 class="judul">Akad Nikah</h2>
                    <div class="tgl-lokasi-content">
                        <div class="card">
                            <p class="date">{{ $pesan->data->tgl_akad }}</p>
                        </div>
                        <p>Pukul {{ $pesan->data->jam_akad }}</p>
                        <p class="bold">Lokasi Acara</p>
                        <p><span><b>{{ $pesan->data->lokasi_akad }}</b></span>
                        </p>
                    </div>
                </div>
                <div class="rsvp">
                    <button id="bukaUndanganButton" class="scrollButton">Next</button>
                </div>
            </section>
        </div>
    </div>
    <div class="wrapper" id="page6" style=" background-image: url('{{ asset('img/dawa/resource/images/bg.jpg') }}')">
        <div class="tgl-lokasi">
            <section @if (in_array('Animasi',$fitur)) class="hidden" @endif>
                <div class="container2">
                    <h2 class="judul">Resepsi</h2>
                    <div class="tgl-lokasi-content">
                        <div class="card">
                            <p class="date">{{ $pesan->data->tgl_resepsi }}</p>
                        </div>
                        <p>Pukul {{ $pesan->data->jam_resepsi }}</p>
                        <p class="bold">Lokasi Acara</p>
                        <p><span><b>{{ $pesan->data->lokasi_resepsi }}</b></span>
                        </p>
                    </div>
                </div>
                <div class="rsvp">
                    <button id="bukaUndanganButton" class="scrollButton">Next</button>
                </div>
            </section>
        </div>
    </div>
    @if (in_array('Lokasi Acara Maps', $fitur))
    <div class="wrapper" id="page7" style=" background-image: url('{{ asset('img/dawa/resource/images/bg.jpg') }}')">
        <div class="container2">
            <section @if (in_array('Animasi',$fitur)) class="hidden" @endif>
                <h3>Lokasi resepsi</h3>
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0"
                            marginwidth="0" src="{{$pesan->data->iframeMaps_resepsi}}"></iframe>
                        <a href="https://connectionsgame.org/">Connections Game</a>
                    </div>
                </div>
                <p><span><b>{{ $pesan->data->lokasi_resepsi }}</b></span></p>
                <div class="rsvp">
                    <button id="bukaUndanganButton" class="scrollButton">Next</button>
                </div>
            </section>
        </div>
    </div>
    @endif

    @if (in_array('Galeri', $fitur))
    <div class="wrapper" id="page8" style=" background-image: url('{{ asset('img/dawa/resource/images/bg.jpg') }}')">
        <div class="container2">
            <section @if (in_array('Animasi',$fitur)) class="hidden" @endif>
                <div class="slider-container">
                    <h1>Gallery</h1>
                    <div class="slider">
                        <div class="slide">
                            <img src="{{ asset('img/dawa/resource/images/hehe.jpg') }}" alt="img">
                        </div>
                        <div class="slide">
                            <img src="{{ asset('img/dawa/resource/images/hehe2.jpg') }}" alt="img">
                        </div>
                        <div class="slide">
                            <img src="{{ asset('img/dawa/resource/images/hehe.jpg') }}" alt="img">
                        </div>
                        <div class="slide">
                            <img src="{{ asset('img/dawa/resource/images/hehe2.jpg') }}" alt="img">
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
                    <button id="bukaUndanganButton" class="scrollButton">Next</button>
                </div>
            </section>
        </div>
    </div>
    @endif

    @if (in_array('Buku Tamu', $fitur))
    <div class="wrapper" id="page9" style=" background-image: url('{{ asset('img/dawa/resource/images/bg.jpg') }}')">
        <section @if (in_array('Animasi',$fitur)) class="hidden" @endif>
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
    @endif

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const scrollButtons = document.querySelectorAll(".scrollButton");

            scrollButtons.forEach(function(button) {
                button.addEventListener("click", function() {
                    const currentWrapper = this.closest(".wrapper");
                    const nextWrapper = currentWrapper.nextElementSibling;

                    if (nextWrapper) {
                        // Gulir ke wrapper berikutnya
                        window.scrollTo({
                            top: nextWrapper.offsetTop,
                            behavior: "smooth"
                        });
                    }
                });
            });
        });

        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                console.log(entry);
                if (entry.isIntersecting) {
                    entry.target.classList.add("show");
                } else {
                    entry.target.classList.remove("show");
                }
            });
        });

        const hiddenElement = document.querySelectorAll(".hidden");
        hiddenElement.forEach((el) => observer.observe(el));

        function countdown() {
            const weddingDate = new Date("{{ $pesan->data->tgl_resepsi }}"); // Tanggal pernikahan
            const now = new Date();

            const diff = weddingDate - now;

            const days = Math.floor(diff / (1000 * 60 * 60 * 24));
            const hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((diff % (1000 * 60)) / 1000);

            document.getElementById("days").textContent = days;
            document.getElementById("hours").textContent = hours;
            document.getElementById("minutes").textContent = minutes;
            document.getElementById("seconds").textContent = seconds;
        }

        setInterval(countdown, 1000);

        const slider = document.querySelector(".slider");
        const prevBtn = document.querySelector(".prev-btn");
        const nextBtn = document.querySelector(".next-btn");
        const slides = document.querySelectorAll(".slide");
        let currentIndex = 0;

        function goToSlide(index) {
            slider.style.transform = `translateX(-${
        index * 33.33
    }%)`; /* Move by 33.33% for each slide */
        }

        function goToNextSlide() {
            if (currentIndex < slides.length - 3) {
                currentIndex++;
                goToSlide(currentIndex);
            }
        }

        nextBtn.addEventListener("click", goToNextSlide);

        function goToPrevSlide() {
            if (currentIndex > 0) {
                currentIndex--;
                goToSlide(currentIndex);
            }
        }

        prevBtn.addEventListener("click", goToPrevSlide);

        const audio = new Audio("resource/music/music.mp3");
        audio.loop = true; // Set to true for continuous playback

        // Toggle Music Button
        const musicToggleBtn = document.createElement("button");
        musicToggleBtn.classList.add("music-toggle-btn");
        musicToggleBtn.innerHTML = '<i class="fas fa-music"></i>';
        document.body.appendChild(musicToggleBtn);

        document
            .getElementById("commentForm")
            .addEventListener("submit", function(event) {
                event.preventDefault();
                var name = document.getElementById("name").value;
                var attendance = document.getElementById("attendance").value;
                var greetings = document.getElementById("greetings").value;

                document.getElementById("commentTitle").textContent = "Komentar";

                var commentContainer = document.getElementById("commentContainer");
                var commentDiv = document.createElement("div");
                commentDiv.className = "comment";
                commentDiv.innerHTML = `
      <p><strong>Nama:</strong> ${name}</p>
      <p><strong>Kehadiran:</strong> ${attendance}</p>
      <p><strong>Kata Ucapan:</strong> ${greetings}</p>
    `;

                commentContainer.appendChild(commentDiv);

                document.getElementById("commentLayout").style.display = "block";
            });

        document.getElementById("closeButton").addEventListener("click", function() {
            document.getElementById("commentLayout").style.display = "none";
        });
    </script>
</body>

</html>