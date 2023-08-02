var countDownDate = new Date("December 31, 2030 23:59:59").getTime();

// Update the countdown every 1 second
var countdown = setInterval(function () {
    // Get the current date and time
    var now = new Date().getTime();

    // Find the distance between now and the countdown date
    var distance = countDownDate - now;

    // Calculate days, hours, minutes, and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor(
        (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
    );
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Update the countdown values
    document.getElementById("days").innerText = days;
    document.getElementById("hours").innerText = hours;
    document.getElementById("minutes").innerText = minutes;
    document.getElementById("seconds").innerText = seconds;

    // If the countdown is finished, display a message
    if (distance < 0) {
        clearInterval(countdown);
        document.getElementById("countdown").innerHTML = "Countdown Finished";
    }
}, 1000);

function sendMessage() {
    // Mendapatkan nilai dari input dan radio button
    var nama = document.getElementById("exampleFormControlInput1").value;
    var jumlahtamu = document.getElementById("exampleFormControlInput2").value;
    var kondisi = "";

    var radioButtons = document.getElementsByName("flexRadioDefault");
    for (var i = 0; i < radioButtons.length; i++) {
        if (radioButtons[i].checked) {
            kondisi = radioButtons[i].value;
            break;
        }
    }

    // Mengirim pesan melalui API Whatsapp
    var phoneNumber = "0881025433363";
    var message =
        "Hai, Akmal & Ratna, saya " +
        nama +
        " ingin menginformasikan kehadiran di acara resepsi pernikahan pada Hari Minggu, 09 Juli 2023. " +
        kondisi +
        " bersama " +
        jumlahtamu +
        " orang. Terima kasih ya.";

    var url =
        "https://api.whatsapp.com/send?phone=" +
        phoneNumber +
        "&text=" +
        encodeURIComponent(message);

    // Mengarahkan ke link API Whatsapp
    window.open(url);
}

document
    .getElementById("openContentBtn")
    .addEventListener("click", function () {
        var overlay = document.getElementById("overlay");
        overlay.classList.add("hidden");
        setTimeout(function () {
            overlay.style.display = "none";
            document
                .getElementById("actualContent")
                .classList.remove("hidden-content");
        }, 500);
    });
