const hamburgerBtn = document.querySelector('.hamburger');
const sidebarToggle = document.querySelector('.sidebar');

hamburgerBtn.addEventListener('click', function() {
  hamburgerBtn.classList.toggle('open');
  sidebarToggle.classList.toggle('open');
});