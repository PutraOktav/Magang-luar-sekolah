
function toggleDetails(id, button) {
    var description = document.getElementById(id);
    if (description.style.display === 'none' || description.style.display === '') {
        description.style.display = 'block';
        button.textContent = 'Tutup';
    } else {
        description.style.display = 'none';
        button.textContent = 'Baca selengkapnya';
    }
}

document.getElementById('newsFilter').addEventListener('change', function() {
  var filterValue = this.value;
  var newsItems = document.querySelectorAll('.news-item');

  newsItems.forEach(function(item) {
      if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
          item.style.display = 'block';
      } else {
          item.style.display = 'none';
      }
  });
});

