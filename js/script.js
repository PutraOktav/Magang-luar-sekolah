  // Function to load HTML content from an external file
  function loadHTMLFile(filePath, elementId) {
    fetch(filePath)
        .then(response => response.text())
        .then(data => {
            document.getElementById(elementId).innerHTML = data;
        })
        .catch(error => console.error('Error loading file:', error));
}

// Load header, content, and footer
loadHTMLFile('header.html', 'header-placeholder');
loadHTMLFile('content.html', 'content-placeholder');
loadHTMLFile('footer.html', 'footer-placeholder');


