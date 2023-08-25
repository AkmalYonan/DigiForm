<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pesan->data->nama_pasangan }} Wedding</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/yonans/yonans.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Alex+Brush&family=Dancing+Script&family=Parisienne&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="konten">
        <div class="hiden">
            <section class="bg-img" id="page1">
                <img src="{{ asset('img/yonans/rose3.jpg') }}" alt="img">
                <div class="container mt-5 isian">
                    <div class="opening">
                        <h3 class="card-title text-center">The Wedding of</h3>
                        <h1 class="text-center mt-5">{{ $pesan->mPria->nama_pria }}</h1>
                        <h2 class="text-center">and</h2>
                        <h1 class="text-center">{{ $pesan->mWanita->nama_wanita }}</h1>
                        <hr>
                        <div class="text-center details mb-2">
                            <p><span class="date">{{ $pesan->data->tgl_resepsi }}</span></p>
                        </div>
                        <div class="text-center sambut">
                            <p>Kepada yth.</p>
                            <p>Bapa/Ibu/Saudara/I</p>
                        </div>
                        <div class="text-center nama-tamu">
                            <p>Dengan segala Hormat Kami Meminta Agar Membuka Undangan Dari Kami</p>
                        </div>
                        <a class="btn button-39 scrollButton">OPEN INVITATION</a>
                    </div>
                </div>
            </section>
        </div>
    </div>
    @if (in_array('Countdown', $fitur))
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
    @endif
    <div class="konten">
        <section class="bg-img">
            <div class="isi">
                <div class="isi2">
                    <h3 class="mari">Married</h3>
                    <p>Dengan Hormat <br>mengundang Bapak/Ibu/Saudara/i</p>
                    <p>untuk menghadiri acara pernikahan kami</p>
                    <h1>{{ $pesan->mPria->nama_pria_lengkap }}</h1>
                    <p>Putra Ke-{{$pesan->mPria->anak_ke}} dari Bapak {{ $pesan->mPria->nama_ayah }} & Ibu {{
                        $pesan->mPria->nama_ibu }}
                    <h1 style="font-weight: bold; font-size: 55px; font-family: 'Alex Brush', cursive; color: CFB975;">&
                    </h1>
                    </p>
                    <h1>{{ $pesan->mWanita->nama_wanita_lengkap }}</h1>
                    <p>Putri Ke-{{ $pesan->mWanita->anak_ke }}dari Bapak {{ $pesan->mWanita->nama_ayah }} & Ibu {{
                        $pesan->mWanita->nama_ibu }}</p>
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
                        <p class="date">{{ $pesan->data->tgl_akad }}</p>
                    </div>
                    <p>Pukul {{ $pesan->data->jam_akad }}</p>
                    <p class="bold">Lokasi Acara</p>
                    <p class="mb-5"><span><b>{{ $pesan->data->lokasi_akad }}</b></span></p>
                </div>
            </div>
        </section>
    </div>

    <div class="konten">
        <section class="bg-img">
            <div class="isi">
                <h2 class="judul">Resepsi</h2>
                <div class="tgl-lokasi-content">
                    <div class="card">
                        <p class="date">{{ $pesan->data->tgl_resepsi }}</p>
                    </div>
                    <p>Pukul {{ $pesan->data->jam_resepsi }}</p>
                    <p class="bold">Lokasi Acara</p>
                    <p class="mb-5"><span><b>{{ $pesan->data->resepsi }}</b></span>
                    </p>
                </div>
            </div>
        </section>
    </div>

    @if (in_array('Lokasi Acara Maps', $fitur))
    <div class="konten">
        <section class="bg-img">
            <div class="isi">
                <h3>Lokasi</h3>
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0"
                            marginwidth="0" src="{{ $pesan->data->iframeMaps_resepsi}}"></iframe>
                    </div>
                </div>
                <p><span><b>{{ $pesan->data->lokasi_resepsi }}</b></span></p>
            </div>
        </section>
    </div>
    @endif

    @if (in_array('Galeri', $fitur))
    <div class="container mt-5">
        <h3 class="text-center mb-3 mari">Gallery</h3>
        <div class="row">
            <div class="col-md-4 mb-3">
                <a href="{{ asset('img/yonans/zee.jpg') }}" data-lightbox="gallery">
                    <img src="{{ asset('img/yonans/zee.jpg') }}" alt="Gambar 1" class="img-fluid">
                </a>
            </div>
            <div class="col-md-4 mb-3">
                <a href="{{ asset('img/yonans/hehe.jpg') }}" data-lightbox="gallery">
                    <img src="{{ asset('img/yonans/hehe.jpg') }}" alt="Gambar 1" class="img-fluid">
                </a>
            </div>
            <div class="col-md-4 mb-3">
                <a href="{{ asset('img/yonans/eheh2.jpg') }}" data-lightbox=" gallery">
                    <img src="{{ asset('img/yonans/eheh2.jpg') }}" alt=" Gambar 1" class="img-fluid">
                </a>
            </div>
        </div>
    </div>
    @endif

    <div class="konten">
        <section class="bg-img">
            <div class="isi">
                <h3 class="mari">Terimakasih</h3>
                <p class="tnk">Puji syukur kehadirat Tuhan YME atas karunianya anda dapat menghadiri undangan ini,
                    saya
                    dan segenap seluruh anggota keluarga mengucapkan terima kasih atas kehadiran Bapak, Ibu dan Saudara
                    di acara pernikahan ini.</p>
            </div>
        </section>
    </div>

    @if (in_array('Buku Tamu', $fitur))
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
    @endif
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const scrollButtons = document.querySelectorAll(".scrollButton");

            scrollButtons.forEach(function(button) {
                button.addEventListener("click", function() {
                    const currentWrapper = this.closest(".konten");
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

        const hiddenElement = document.querySelectorAll(".bg-img");
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>