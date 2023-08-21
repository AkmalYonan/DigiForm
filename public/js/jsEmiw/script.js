window.onload = scrollMati;

var lingkaran = document.getElementById("lingkaran");
var tombol_undangan = document.getElementById("tombol-buka-undangan");
var tombol_kembali = document.getElementById("kembali");
var hitung_hari = document.getElementById("hitung-hari");
tombol_undangan.addEventListener("click", function () {
  lingkaran.style.width = "100%";
  lingkaran.style.height = "100%";
  lingkaran.style.borderRadius = "0";
  lingkaran.style.border = "1px solid transparent";
  tombol_undangan.style.display = "none";
  tombol_kembali.style.left = "5%";
  hitung_hari.style.opacity = "100%";
  scrollHidup();
});

tombol_kembali.addEventListener("click", function () {
  lingkaran.style.width = "300px";
  lingkaran.style.height = "300px";
  lingkaran.style.border = "3px solid rgb(206, 178, 23)";
  lingkaran.style.borderRadius = "50%";
  tombol_undangan.style.display = "block";
  tombol_kembali.style.left = "-50%";
  hitung_hari.style.opacity = "0%";
  window.scrollTo({
    top: 0,
  });
  scrollMati();
});

var audio = document.getElementById("background-music");
var playPauseButton = document.getElementById("play-pause-button");
var playIcon = document.getElementById("play-icon");
var pauseIcon = document.getElementById("pause-icon");

playPauseButton.addEventListener("click", function() {
  if (audio.paused) {
    audio.play();
    playIcon.style.display = "none";
    pauseIcon.style.display = "inline";
  } else {
    audio.pause();
    pauseIcon.style.display = "none";
    playIcon.style.display = "inline";
  }
});

function scrollMati() {
  // Get the current scroll position
  //   const scrollY = window.scrollY;
  window.scrollTo({
    top: 0,
  });
  document.body.style.overflow = "hidden";

  // Prevent scrolling by setting the current scroll position as fixed
  //   document.body.style.position = "fixed";
  //   document.body.style.top = `-${scrollY}px`;
}

function scrollHidup() {
  // Retrieve the previous scroll position
  //   const scrollY = parseInt(document.body.style.top || "0", 10);
  document.body.style.overflow = "auto";
  // Reset the body position and scroll to the previous position
  //   document.body.style.position = "";
  //   document.body.style.top = "";
  //   window.scrollTo(0, Math.abs(scrollY));
}

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

const hiddenElements = document.querySelectorAll('.hidden');
hiddenElements.forEach((el) => observer.observe(el));

const itungWaktu = new Date(tanggal).getTime();

const pengitungWaktu = setInterval(() => {
  // Get the current date and time
  const sekarang = new Date().getTime();

  // Calculate the time remaining
  const sisaWaktu = itungWaktu - sekarang;

  // Calculate the hari, hours, minutes, and seconds
  const hari = Math.floor(sisaWaktu / (1000 * 60 * 60 * 24));
  const jam = Math.floor(
    (sisaWaktu % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
  );
  const menit = Math.floor((sisaWaktu % (1000 * 60 * 60)) / (1000 * 60));
  const detik = Math.floor((sisaWaktu % (1000 * 60)) / 1000);

  // Display the countdown
  document.getElementById(
    "countdown"
  ).innerHTML = `<div class="waktu">${hari}<span>Hari</span></div><div class="waktu">${jam}<span>Jam</span></div><div class="waktu">${menit}<span>Menit</span></div><div class="waktu">${detik}<span>Detik</span></div>`;

  // If the countdown is finished, display a message
  if (sisaWaktu < 0) {
    clearInterval(pengitungWaktu);
    document.getElementById("countdown").innerHTML = "Sudah Selesai";
  }
}, 1000);


// Call the functions to enable/disable scroll based on your requirements
// For example, call scrollMati() to disable scroll and scrollHidup() to enable it.
