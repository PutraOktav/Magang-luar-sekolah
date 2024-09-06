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
window.onload = function() {
    loadHeaderFooter();
    validateLogin();
};

// Function to load header and footer dynamically
function loadHeaderFooter() {
    fetch('../views/layouts/header.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('header').innerHTML = data;
            updateHeaderBasedOnLoginStatus();  // Update header after loading it
        })
        .catch(error => console.error('Error loading header:', error));

    fetch('../views/layouts/footer.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('footer').innerHTML = data;
        })
        .catch(error => console.error('Error loading footer:', error));
}

// Function to validate login and set login status in localStorage
document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById('loginForm');
    
    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the form from submitting normally
        
        const username = document.getElementById('username').value;
        const password = document.getElementById('password').value;

        // Validate the credentials
        if (username === 'admin' && password === 'admin') {
            // Set login status
            localStorage.setItem('isLoggedIn', 'true');
            // Redirect to index page
            window.location.href = '/views/home.html';
        } else {
            // Show an alert for incorrect credentials
            alert('Username atau password salah.');
        }
    });
});

// Function to update the header based on login status
function updateHeaderBasedOnLoginStatus() {
    const isLoggedIn = localStorage.getItem('isLoggedIn') === 'true';
    const authLinks = document.getElementById('authLinks');

    if (isLoggedIn) {
        authLinks.innerHTML = `
            <span class="mr-2">Halo, Admin</span>
            <a href="#" id="logoutButton" class="bg-white text-blue-600 px-4 py-2 rounded-md hover:bg-gray-200">Logout</a>
        `;

        // Add event listener for logout button
        document.getElementById('logoutButton').addEventListener('click', function() {
            localStorage.removeItem('isLoggedIn');
            window.location.href = '/views/home.html';
        });
    }
}

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

