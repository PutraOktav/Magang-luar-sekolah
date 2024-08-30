// Load header and footer dynamically
window.onload = function() {
    loadHeaderFooter();
    validateLogin();
};

function loadHeaderFooter() {
    fetch('../views/layouts/header.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('header').innerHTML = data;
        })
        .catch(error => console.error('Error loading header:', error));

    fetch('../views/layouts/footer.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('footer').innerHTML = data;
        })
        .catch(error => console.error('Error loading footer:', error));
}

// Validasi form login dengan username dan password yang telah ditentukan
// Function to handle form submission and validation
document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById('loginForm');
    
    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the form from submitting normally
        
        const username = document.getElementById('username').value;
        const password = document.getElementById('password').value;

        // Validate the credentials
        if (username === 'admin' && password === 'admin') {
            // Redirect to index page
            window.location.href = '/views/home.html';
        } else {
            // Show an alert for incorrect credentials
            alert('Username atau password salah.');
        }
    });
});

// Function to handle form submission and display identity card
document.addEventListener("DOMContentLoaded", function() {
    const registerForm = document.getElementById('registerForm');
    const identityCardSection = document.getElementById('identityCardSection');
    const cardContent = document.getElementById('cardContent');

    registerForm.addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the form from submitting normally
        
        // Get form values
        const fullName = document.getElementById('fullName').value;
        const email = document.getElementById('email').value;
        const phone = document.getElementById('phone').value;

        // Create card content
        cardContent.innerHTML = `
            <div class="mb-4">
                <strong>Nama Lengkap:</strong> <p>${fullName}</p>
            </div>
            <div class="mb-4">
                <strong>Email:</strong> <p>${email}</p>
            </div>
            <div class="mb-4">
                <strong>Telepon:</strong> <p>${phone}</p>
            </div>
        `;

        // Show the identity card section
        identityCardSection.classList.remove('hidden');
    });
});

// Fungsi untuk filter berita berdasarkan input
document.getElementById('newsFilter').addEventListener('keyup', function() {
    let filter = this.value.toLowerCase();
    let newsItems = document.getElementsByClassName('news-item');

    for (let i = 0; i < newsItems.length; i++) {
        let article = newsItems[i];
        let text = article.textContent || article.innerText;
        if (text.toLowerCase().includes(filter)) {
            article.style.display = "";
        } else {
            article.style.display = "none";
        }
    }
});

