// Optional: Add scroll reveal or section highlight
document.addEventListener("DOMContentLoaded", () => {
  const cards = document.querySelectorAll(".service-card");
  cards.forEach(card => {
    card.style.opacity = 0;
    card.style.transform = "translateY(20px)";
  });

  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.style.transition = "all 0.6s ease-out";
        entry.target.style.opacity = 1;
        entry.target.style.transform = "translateY(0)";
      }
    });
  }, { threshold: 0.1 });

  cards.forEach(card => observer.observe(card));
});


document.addEventListener("DOMContentLoaded", () => {
  const buttons = document.querySelectorAll(".toggle-btn");

  buttons.forEach(btn => {
    btn.addEventListener("click", () => {
      const list = btn.nextElementSibling;
      list.classList.toggle("hidden");
      btn.textContent = list.classList.contains("hidden") ? "See More" : "Hide";
    });
  });
});
