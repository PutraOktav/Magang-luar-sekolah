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
