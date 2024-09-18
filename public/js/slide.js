 // Slide Show 
 let videoSlideIndex = 1;
 let photoSlideIndex = 1;
 showSlides(videoSlideIndex, 'video');
 showSlides(photoSlideIndex, 'photo');

 function plusSlides(n, type) {
     if (type === 'video') {
         showSlides(videoSlideIndex += n, 'video');
     } else if (type === 'photo') {
         showSlides(photoSlideIndex += n, 'photo');
     }
 }

 function showSlides(n, type) {
     let i;
     let slides;
     if (type === 'video') {
         slides = document.getElementsByClassName("myVideoSlides");
         if (n > slides.length) {videoSlideIndex = 1}    
         if (n < 1) {videoSlideIndex = slides.length}
     } else if (type === 'photo') {
         slides = document.getElementsByClassName("myPhotoSlides");
         if (n > slides.length) {photoSlideIndex = 1}    
         if (n < 1) {photoSlideIndex = slides.length}
     }
     for (i = 0; i < slides.length; i++) {
         slides[i].classList.remove('show');
         slides[i].style.display = "none";  
     }
     slides[type === 'video' ? videoSlideIndex-1 : photoSlideIndex-1].style.display = "block";  
     slides[type === 'video' ? videoSlideIndex-1 : photoSlideIndex-1].classList.add('show');
 }