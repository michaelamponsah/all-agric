let mobileSliderNav = document.querySelector(".mobile-nav-wrapper")
const body = document.querySelector("body");


document.addEventListener("click", (e) => {
  const isSliderNav = e.target.matches("[data-slider-icon]");
  if (!isSliderNav && e.target.closest("[data-slider]") != null) return;

  let currentSliderNav;
  if (isSliderNav) {
    currentSliderNav = e.target.closest("[data-slider]");
    mobileSliderNav.classList.toggle("mobile-nav-wrapper--active");
  }

  if (mobileSliderNav.classList.contains("mobile-nav-wrapper--active")) {
    body.style.overflow = "hidden"
  } else {
    body.style.overflow = "auto"
  }

  // Close all other Slider Navigations that are not in use
  // document.querySelectorAll("[data-slider].active").forEach((slider) => {
  //   if (slider == currentSliderNav) return;
  //   slider.classList.remove("active");
  // });
});

// Dark theme
let icon = document.querySelector(".bg-toggle-btn");
icon.addEventListener("click", (e) => {
  document.body.classList.toggle("dark-theme")
});
