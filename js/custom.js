let mobileSliderNav = document.querySelector(".mobile-nav-wrapper")
const body = document.querySelector("body");
const dropdown = document.querySelector("[data-dropdown]");
const menuIcon = document.querySelector("[data-menu-btn]");

document.addEventListener("click", (e) => {
  const isSliderNav = e.target.matches("[data-slider-icon]");
  const isMenuIcon = e.target.matches("[data-menu-btn]");

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

  if(isMenuIcon) {
    dropdown.classList.toggle('dropdown-active');
    menuIcon.innerHTML = dropdown.classList.contains('dropdown-active') ? 'menu_open' : 'list';
  }
});

// Dark/Light theme
let toggleTheme = document.querySelector("[data-theme-toggler]");

const getCurrentTheme = () => {
  let theme = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
  window.localStorage.getItem('AllAgricGh.theme') ? 
    theme = window.localStorage.getItem('AllAgricGh.theme') : null;
  return theme;
}

const loadTheme = (theme) => {
  const root = document.querySelector(':root');
  if(theme === 'light') {
    toggleTheme.innerHTML = 'dark_mode';
  } else {
    toggleTheme.innerHTML = 'light_mode';
  }

  root.setAttribute('color-scheme', `${theme}`);
}

window.addEventListener('DOMContentLoaded', () => {
  loadTheme(getCurrentTheme());
})

toggleTheme.addEventListener('click', (e) => {
  let theme = getCurrentTheme();

  if(theme === 'light') {
    theme = 'dark';
  } else {
    theme = 'light';
  }
  loadTheme(theme);
  window.localStorage.setItem('AllAgricGh.theme', `${theme}`)
});
