
window.addEventListener('scroll', function() {
  var scrollBtn = document.getElementById('scrollBtn');
  var y = window.scrollY;

  if (y < 500) {
    scrollBtn.innerHTML = '↓';
    scrollBtn.href = "#bottomsite";
  } else {
    scrollBtn.innerHTML = '↑';
    scrollBtn.href = "#topsite";
    
  }
});

