// Function to handle form submission and display identity card
document.addEventListener("DOMContentLoaded", function () {
  const registerForm = document.getElementById("registerForm");
  const identityCardSection = document.getElementById("identityCardSection");
  const cardContent = document.getElementById("cardContent");

  registerForm.addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent the form from submitting normally

    // Get form values
    const fullName = document.getElementById("fullName").value;
    const email = document.getElementById("email").value;
    const phone = document.getElementById("phone").value;

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
    identityCardSection.classList.remove("hidden");
  });
});

// Fungsi untuk filter berita berdasarkan input
document.getElementById("newsFilter").addEventListener("keyup", function () {
  let filter = this.value.toLowerCase();
  let newsItems = document.getElementsByClassName("news-item");

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

document.getElementById("newsFilter").addEventListener("change", function () {
  const selectedCategory = this.value;
  const newsItems = document.querySelectorAll(".news-item");

  newsItems.forEach(function (item) {
    if (
      selectedCategory === "all" ||
      item.getAttribute("data-category") === selectedCategory
    ) {
      item.style.display = "block";
    } else {
      item.style.display = "none";
    }
  });
});

function toggleDetails(detailsId) {
  const detailsElement = document.getElementById(detailsId);
  detailsElement.classList.toggle("hidden");
}

// Slide Show
let videoSlideIndex = 1;
let photoSlideIndex = 1;
showSlides(videoSlideIndex, "video");
showSlides(photoSlideIndex, "photo");

function plusSlides(n, type) {
  if (type === "video") {
    showSlides((videoSlideIndex += n), "video");
  } else if (type === "photo") {
    showSlides((photoSlideIndex += n), "photo");
  }
}

function showSlides(n, type) {
  let i;
  let slides;
  if (type === "video") {
    slides = document.getElementsByClassName("myVideoSlides");
    if (n > slides.length) {
      videoSlideIndex = 1;
    }
    if (n < 1) {
      videoSlideIndex = slides.length;
    }
  } else if (type === "photo") {
    slides = document.getElementsByClassName("myPhotoSlides");
    if (n > slides.length) {
      photoSlideIndex = 1;
    }
    if (n < 1) {
      photoSlideIndex = slides.length;
    }
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].classList.remove("show");
    slides[i].style.display = "none";
  }
  slides[
    type === "video" ? videoSlideIndex - 1 : photoSlideIndex - 1
  ].style.display = "block";
  slides[
    type === "video" ? videoSlideIndex - 1 : photoSlideIndex - 1
  ].classList.add("show");
}
