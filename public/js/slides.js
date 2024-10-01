// Mengatur slide pertama yang akan ditampilkan
let slideIndex = 1;
showSlides(slideIndex);

// Fungsi untuk menggeser slide
function plusSlides(n) {
  showSlides((slideIndex += n));
}

// Fungsi untuk menampilkan slide
function showSlides(n) {
  // Mendapatkan semua slide gambar
  let slides = document.getElementsByClassName("myPhotoSlides");

  // Jika slide yang diinginkan melebihi jumlah slide yang ada, maka kembali ke slide pertama
  if (n > slides.length) {
    slideIndex = 1;
  }
  // Jika slide yang diinginkan kurang dari 1, maka kembali ke slide terakhir
  if (n < 1) {
    slideIndex = slides.length;
  }

  // Menyembunyikan semua slide
  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  // Menampilkan slide yang sesuai dengan indeks yang diinginkan
  slides[slideIndex - 1].style.display = "block";
}

// Mengatur slide pertama yang akan ditampilkan untuk video
let slideIndex2 = 1;
showSlides2(slideIndex2);

// Fungsi untuk menggeser slide video
function plusSlides2(n) {
  showSlides2((slideIndex2 += n));
}

// Fungsi untuk menampilkan slide video
function showSlides2(n) {
  // Mendapatkan semua slide video
  let slides2 = document.getElementsByClassName("myVideoSlides");

  // Jika slide yang diinginkan melebihi jumlah slide yang ada, maka kembali ke slide pertama
  if (n > slides2.length) {
    slideIndex2 = 1;
  }
  // Jika slide yang diinginkan kurang dari 1, maka kembali ke slide terakhir
  if (n < 1) {
    slideIndex2 = slides2.length;
  }

  // Menyembunyikan semua slide video
  for (let i = 0; i < slides2.length; i++) {
    slides2[i].style.display = "none";
  }

  // Menampilkan slide video yang sesuai dengan indeks yang diinginkan
  slides2[slideIndex2 - 1].style.display = "block";
}
