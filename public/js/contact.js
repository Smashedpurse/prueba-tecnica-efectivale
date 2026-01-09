document
    .getElementById("contactForm")
    .addEventListener("submit", async function (e) {
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

        try {
            const response = await fetch("/message", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": document.querySelector(
                        'meta[name="csrf-token"]'
                    ).content,
                },
                body: JSON.stringify({ name, email, message }),
            });

            const data = await response.json();

            alert.innerHTML = `<div class="alert alert-success">${data.message}</div>`;

            document.getElementById("contactForm").reset();
        } catch (error) {
            alert.innerHTML = `<div class="alert alert-danger">Error al enviar el mensaje</div>`;
        }
    });
