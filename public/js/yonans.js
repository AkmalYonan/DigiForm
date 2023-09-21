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
    const weddingDate = new Date("2032-03-03T08:00:00Z"); // Tanggal pernikahan
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
    .addEventListener("submit", function (event) {
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

document.getElementById("closeButton").addEventListener("click", function () {
    document.getElementById("commentLayout").style.display = "none";
});
