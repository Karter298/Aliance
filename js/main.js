const navbar = document.querySelector(".navbar");
const logoLight = document.querySelector(".logo-light");
const logo = document.querySelector(".logo");
const mMenuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");
const isFront = document.body.classList.contains("front-page");

const lightModeOn = (event) => {
  navbar.classList.add("navbar-light");
};

const lightModeOff = (event) => {
  navbar.classList.remove("navbar-light");
};

const changeNavHeight = (height) => {
  navbar.style.height = height;
};

const openMenu = (event) => {
  //функция открытия меню
  menu.classList.add("is-open"); //вешает класс is-open
  mMenuToggle.classList.add("close-menu");
  document.body.style.overflow = "hidden"; //запрещает прокрутку сайта под меню
  lightModeOn();
};

const closeMenu = (event) => {
  //функция закрытия меню
  menu.classList.remove("is-open"); //убирает класс is-open
  mMenuToggle.classList.remove("close-menu");
  document.body.style.overflow = ""; //возвращает прокрутку сайта под меню
  lightModeOff();
};

window.addEventListener("scroll", () => {
  this.scrollY > 1 ? changeNavHeight("4.5rem") : changeNavHeight("5.875rem");
  if (isFront) {
    this.scrollY > 1 ? lightModeOn() : lightModeOff();
  }
  if (window.matchMedia("(max-width: 992px)").matches) {
    this.scrollY > 1 ? changeNavHeight("5.7rem") : changeNavHeight("5.7rem");
  }
  if (window.matchMedia("(min-width: 993px)").matches) {
    this.scrollY > 1 ? changeNavHeight("4.5rem") : changeNavHeight("5.875rem");
  }
});

mMenuToggle.addEventListener("click", (event) => {
  event.preventDefault();
  menu.classList.contains("is-open") ? closeMenu() : openMenu();
});

const swiper = new Swiper(".header-swiper", {
  //инициализация свайпера
  speed: 400,
  slidesPerView: 1.4,
  navigation: {
    nextEl: ".slider-button-next",
    prevEl: ".slider-button-prev",
  },
  breakpoints: {
    // when window width is >= 576px
    576: {
      slidesPerView: 2,
    },
    // when window width is >= 768px
    768: {
      slidesPerView: 3,
    },
    // when window width is >= 1024px
    1024: {
      slidesPerView: 4,
    },
    // when window width is >= 1200px
    1200: {
      slidesPerView: 5,
    },
  },
});

const stepsSwiper = new Swiper(".steps-swiper", {
  //инициализация свайпера
  speed: 400,
  autoHeight: true,
  slidesPerView: 1.07,
  navigation: {
    nextEl: ".steps-slider-button-next",
    prevEl: ".steps-slider-button-prev",
  },
  breakpoints: {
    // when window width is >= 576px
    576: {
      slidesPerView: 2,
    },
    // when window width is >= 1024px
    1024: {
      slidesPerView: 3,
    },
    // when window width is >= 1200px
    1200: {
      slidesPerView: 4,
    },
  },
});

const blogSwiper = new Swiper(".blog-swiper", {
  speed: 400,
  autoHeight: true,
  slidesPerView: 1,
  spaceBetween: 30,
  navigation: {
    nextEl: ".blog-slider-button-next",
    prevEl: ".blog-slider-button-prev",
  },
  breakpoints: {
    775: {
      slidesPerView: 1,
    },
    776: {
      slidesPerView: 2,
    },
  },
});

const modal = document.querySelector(".modal");
const modalDialog = document.querySelector(".modal-dialog");
const body = document.body;

document.addEventListener("click", (event) => {
  if (
    event.target.dataset.toggle == "body" ||
    event.target.dataset.toggle == "modal" ||
    event.target.parentNode.dataset.toggle == "modal" ||
    (!event.composedPath().includes(modalDialog) &&
      modal.classList.contains("is-open"))
  ) {
    event.preventDefault();
    modal.classList.toggle("is-open");
    body.classList.toggle("locked");
  }
});
document.addEventListener("keyup", (event) => {
  if (event.key == "Escape" && modal.classList.contains("is-open")) {
    modal.classList.toggle("is-open");
    body.classList.toggle("locked");
  }
});
