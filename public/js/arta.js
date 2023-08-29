// Tambahkan kode berikut ini di dalam file script.js

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
    var targetDate = new Date("2023-12-16T08:00:00"); // Contoh: 31 Desember 2023, pukul 10:30
    var now = new Date();
    var timeLeft = targetDate - now;

    if (timeLeft < 0) {
        document.getElementById("countdown").innerHTML = "Selamat menikah!";
    } else {
        var days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
        var hours = Math.floor(
            (timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
        );
        var minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

        document.getElementById("countdown").innerHTML =
            days +
            " hari, " +
            hours +
            " jam, " +
            minutes +
            " menit, " +
            seconds +
            " detik";
        setTimeout(countdown, 1000);
    }
}
