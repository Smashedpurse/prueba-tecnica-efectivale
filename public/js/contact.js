document.getElementById("contactForm").addEventListener("submit", function (e) {
    e.preventDefault();

    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const message = document.getElementById("message").value.trim();
    const alert = document.getElementById("alert");

    alert.innerHTML = "";

    if (!name || !email || !message) {
        alert.innerHTML = `<div class="alert alert-danger">Todos los campos son obligatorios</div>`;
        return;
    }

    fetch("/message", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]')
                .content,
        },
        body: JSON.stringify({ name, email, message }),
    })
        .then((res) => res.json())
        .then((data) => {
            alert.innerHTML = `<div class="alert alert-success">${data.message}</div>`;
            document.getElementById("contactForm").reset();
        })
        .catch(() => {
            alert.innerHTML = `<div class="alert alert-danger">Error al enviar el message</div>`;
        });
});
