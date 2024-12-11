document.addEventListener('DOMContentLoaded', () => {
  const sections = document.querySelectorAll('.section');
  sections.forEach((section, index) => {
    setTimeout(() => {
      section.classList.add('fade-in');
    }, index * 500); // Délai progressif entre les sections
  });
});


// test apparariton des titres 

const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add('show');
      }
    });
  });
  
  const titles = document.querySelectorAll('.title');
  titles.forEach((title) => observer.observe(title));
  