document.addEventListener("DOMContentLoaded", function() {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('animate');
            entry.target.classList.remove('animateout');
        } else {
            entry.target.classList.remove('animate');
            void entry.target.offsetWidth;
            entry.target.classList.add('animateout');
        }
        });
    });

  const loadingbar = document.querySelector('.garis');
  observer.observe(loadingbar);
});

document.addEventListener("DOMContentLoaded", function() {
  const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
      if (entry.isIntersecting) {
          entry.target.classList.add('animate2');
          entry.target.classList.remove('animateout2');
      } else {
          entry.target.classList.remove('animate2');
          void entry.target.offsetWidth;
          entry.target.classList.add('animateout2');
      }
      });
  });

const loadingbar = document.querySelector('.garis2');
observer.observe(loadingbar);
});

function togglePlayPause() {
    const playIcon = document.getElementById('playIcon');
    const pauseIcon = document.getElementById('pauseIcon');
    const animatedElements = document.querySelectorAll('.firstchapterheaderslide');
    const animatedPhoto = document.querySelectorAll('.firstmotiondocumentaryalbum');
  
    const isPaused = animatedElements[0].style.animationPlayState === 'paused';
    const isPhotoPaused = animatedPhoto[0].style.animationPlayState === 'paused';
    
    animatedElements.forEach((element) => {
      element.style.animationPlayState = isPaused ? 'running' : 'paused';
    });
    animatedPhoto.forEach((element) => {
        element.style.animationPlayState = isPhotoPaused ? 'running' : 'paused';
    });
  
    if (isPaused) {
      playIcon.style.display = 'none';
      pauseIcon.style.display = 'block';
    } else {
      playIcon.style.display = 'block';
      pauseIcon.style.display = 'none';
    }
  }
  

window.onload = function(){
    const container = document.querySelector('.firstyeareventimage');
    const images =  document.querySelectorAll('.firstyeareventimageswipe img');
    const containerwidth = container.offsetWidth;
    const imagewidth = images[0].offsetWidth + 20;
    const centerscrollposition = (imagewidth * 2) - (containerwidth / 2) + (imagewidth / 2.2);
    container.scrollLeft = centerscrollposition;
};

document.querySelector('.events-link').addEventListener('mouseenter', function() {
  const nav = document.querySelector('.events-link');
  const suggestion = document.querySelector('.navigationsuggestionourevent');
  
  // Mendapatkan posisi elemen nav secara dinamis
  const rect = nav.getBoundingClientRect();
  
  // Mengatur posisi top dropdown agar berada tepat di bawah Our Events
  suggestion.style.top = `${rect.bottom}px`;
});

document.querySelector('.events-link').addEventListener('mouseleave', function() {
  const suggestion = document.querySelector('.navigationsuggestionourevent');
  
  // Mengatur visibility dan opacity untuk transisi halus saat keluar
  suggestion.style.visibility = 'hidden';
  suggestion.style.opacity = '0';
});
