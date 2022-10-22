document.addEventListener("click", (e) => {
  const isSliderNav = e.target.matches("[data-slider-button]");
  if (!isSliderNav && e.target.closest("[data-slider]") != null) return;

  let currentSliderNav;
  if (isSliderNav) {
    currentSliderNav = e.target.closest("[data-slider]");
    currentSliderNav.classList.toggle("active");
  }

  // Close all other Slider Navigations that are not in use
  document.querySelectorAll("[data-slider].active").forEach((slider) => {
    if (slider == currentSliderNav) return;
    slider.classList.remove("active");
  });
});

// Dark theme
let icon = document.querySelector(".bg-toggle-btn");
icon.addEventListener("click", (e) => {
  document.body.classList.toggle("dark-theme")
});
