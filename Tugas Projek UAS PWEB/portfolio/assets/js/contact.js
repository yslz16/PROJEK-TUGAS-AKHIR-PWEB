document.getElementById("contactForm").addEventListener("submit", function(event) {
    event.preventDefault();
    
    const formData = new FormData(event.target);
    const data = Object.fromEntries(formData.entries());
    const jsonData = JSON.stringify(data);

    fetch("save_contact.php", {
        method: "POST",
        body: jsonData,
        headers: {
            "Content-Type": "application/json"
        }
    })
    .then(response => response.text())
    .then(result => {
        alert("Pesan Anda berhasil dikirim.");
        window.location.href = "index.php";
    })
    .catch(error => console.error("Error:", error));
});