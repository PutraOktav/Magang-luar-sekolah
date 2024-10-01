/**
 * Toggle password visibility
 */
function togglePasswordVisibility() {
  const passwordInput = document.getElementById("password");
  const type = passwordInput.type === "password" ? "text" : "password";
  passwordInput.type = type;
  const togglePassword = document.getElementById("togglePassword");
  togglePassword.textContent =
    type === "password" ? "Lihat Password" : "Sembunyikan Password";
}

/**
 * Toggle details of a news item
 * @param {string} id ID of the news item
 * @param {HTMLElement} button Button to toggle the details
 */
function toggleDetails(id, button) {
  var description = document.getElementById(id);
  if (
    description.style.display === "none" ||
    description.style.display === ""
  ) {
    description.style.display = "block";
    button.textContent = "Tutup";
  } else {
    description.style.display = "none";
    button.textContent = "Baca selengkapnya";
  }
}

/**
 * Filter news items based on category
 */
document.getElementById("newsFilter").addEventListener("change", function () {
  var filterValue = this.value;
  var newsItems = document.querySelectorAll(".news-item");

  newsItems.forEach(function (item) {
    if (
      filterValue === "all" ||
      item.getAttribute("data-category") === filterValue
    ) {
      item.style.display = "block";
    } else {
      item.style.display = "none";
    }
  });
});
