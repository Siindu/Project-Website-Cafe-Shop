'use strict';

document.addEventListener("DOMContentLoaded", function () {

  // NAVBAR
  const navbar = document.querySelector("[data-navbar]");
  const navTogglers = document.querySelectorAll("[data-nav-toggler]");
  const overlay = document.querySelector("[data-overlay]");

  const toggleNavbar = function () {
    navbar?.classList.toggle("active");
    overlay?.classList.toggle("active");
    document.body.classList.toggle("nav-active");
  };

  navTogglers.forEach(btn => {
    btn.addEventListener("click", toggleNavbar);
  });


  // HEADER
  const header = document.querySelector("[data-header]");
  let lastScrollPos = 0;

  const hideHeader = function () {
    const isScrollBottom = lastScrollPos < window.scrollY;
    if (isScrollBottom) {
      header?.classList.add("hide");
    } else {
      header?.classList.remove("hide");
    }
    lastScrollPos = window.scrollY;
  };

  window.addEventListener("scroll", function () {
    if (window.scrollY >= 50) {
      header?.classList.add("active");
      hideHeader();
    } else {
      header?.classList.remove("active");
    }
  });


  // FILTER MENU
  const filterButtons = document.querySelectorAll('.filter-button .section-filter');
  const cardItems = document.querySelectorAll('.filterable-cards li');

  filterButtons.forEach(button => {
    button.addEventListener('click', () => {
      document.querySelector('.filter-button .active')?.classList.remove('active');
      button.classList.add('active');

      const filterValue = button.dataset.filter;

      cardItems.forEach(item => {
        const card = item.querySelector('.card');
        if (!card) return;

        if (filterValue === 'Semua' || card.classList.contains(filterValue)) {
          item.classList.remove('hide');
        } else {
          item.classList.add('hide');
        }
      });
    });
  });


  // HERO SLIDER
  const heroSlider = document.querySelector("[data-hero-slider]");
  const heroSliderItems = document.querySelectorAll("[data-hero-slider-item]");
  const heroSliderPrevBtn = document.querySelector("[data-prev-btn]");
  const heroSliderNextBtn = document.querySelector("[data-next-btn]");

  let currentSlidePos = 0;
  let lastActiveSliderItem = heroSliderItems[0];

  const updateSliderPos = function () {
    lastActiveSliderItem?.classList.remove("active");
    heroSliderItems[currentSlidePos]?.classList.add("active");
    lastActiveSliderItem = heroSliderItems[currentSlidePos];
  };

  const slideNext = function () {
    currentSlidePos = (currentSlidePos + 1) % heroSliderItems.length;
    updateSliderPos();
  };

  const slidePrev = function () {
    currentSlidePos = (currentSlidePos - 1 + heroSliderItems.length) % heroSliderItems.length;
    updateSliderPos();
  };

  if (heroSliderNextBtn && heroSliderPrevBtn) {
    heroSliderNextBtn.addEventListener("click", slideNext);
    heroSliderPrevBtn.addEventListener("click", slidePrev);
  }

  //auto slide
  let autoSlideInterval;
  const autoSlide = function () {
    autoSlideInterval = setInterval(slideNext, 7000);
  };

  if (heroSliderNextBtn && heroSliderPrevBtn) {
    [heroSliderNextBtn, heroSliderPrevBtn].forEach(btn => {
      btn.addEventListener("mouseover", () => clearInterval(autoSlideInterval));
      btn.addEventListener("mouseout", autoSlide);
    });
  }

  autoSlide();


  // ANIMASI BUTTON

  const buttons = document.querySelectorAll(".btn-slide");

  buttons.forEach((btn) => {
    let hoverInTimeout;
    let slideCompleted = false;

    btn.addEventListener("mouseenter", () => {
      clearTimeout(hoverInTimeout);
      slideCompleted = false;

      btn.classList.remove("hover-out-left", "hover-out-right");
      btn.classList.add("hover-in");

      hoverInTimeout = setTimeout(() => {
        slideCompleted = true;
      }, 400); // match transition time
    });

    btn.addEventListener("mouseleave", () => {
      btn.classList.remove("hover-in");

      if (slideCompleted) {
        btn.classList.add("hover-out-right");
      } else {
        btn.classList.add("hover-out-left");
      }

      setTimeout(() => {
        btn.classList.remove("hover-out-left", "hover-out-right");
      }, 400); // cleanup after transition
    });
  });

});


// SLIDE MENU & GALERI
new Swiper('.menu .card-wrapper', {
  loop: true,
    spaceBetween: 30,

  pagination: {
    el: '.swiper-pagination',
    clickable: true,
    dynamicBullets: true
  },

  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // Responsive brakpoints
  breakpoints:{
    640: {
        slidesPerView: 2
    }
  }
});

new Swiper('.galeri .card-wrapper', {
  loop: true,
    spaceBetween: 30,

  pagination: {
    el: '.swiper-pagination',
    clickable: true,
    dynamicBullets: true
  },

  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  breakpoints:{
    640: {
        slidesPerView: 2
    },
    922: {
      slidesPerView: 3
    }
  }
});


document.addEventListener("DOMContentLoaded", function () {
  // POPUP MENU
  const menuPopup = document.getElementById("menuPopup");
  const popupImg = document.getElementById("popupImage");
  const popupTitle = document.getElementById("popupTitle");
  const popupDesc = document.getElementById("popupDesc");
  const closeMenuPopup = document.getElementById("closeMenuPopup");

  if (menuPopup && popupImg && popupTitle && popupDesc && closeMenuPopup) {
    document.querySelectorAll(".menu-card").forEach((card) => {
      const img = card.querySelector("img");
      const title = card.querySelector(".card-title");
      const desc = card.querySelector(".card-text");

      function showMenuPopup() {
        popupImg.src = img.src;
        popupTitle.textContent = title.textContent;
        popupDesc.textContent = desc.textContent;
        menuPopup.classList.remove("hidden");
      }

      img.addEventListener("click", showMenuPopup);
      title.addEventListener("click", showMenuPopup);
    });

    closeMenuPopup.addEventListener("click", function () {
      menuPopup.classList.add("hidden");
    });
  }

  // POPUP PESAN MEJA
  const mejaPopup = document.getElementById("popup");
  const overlay = document.getElementById("popupOverlay");
  const pesanBtn = document.getElementById("pesanBtn");
  const closeMejaPopup = document.getElementById("closePopup");
  const phoneInput = document.getElementById("phone");

  phoneInput.addEventListener("input", function () {
  this.value = this.value.replace(/\D/g, "");
  });

  if (pesanBtn && mejaPopup && overlay && closeMejaPopup) {
    pesanBtn.addEventListener("click", function (e) {
      e.preventDefault();

      const name = document.getElementById("name").value.trim();
      const phone = document.getElementById("phone").value.trim();
      const person = document.getElementById("person").value;
      const date = document.getElementById("reservation-date").value;
      const time = document.getElementById("time").value;
      const message = document.getElementById("message").value.trim();

      if (!name || !phone || !person || !date || !time || !message) {
        alert("Mohon lengkapi semua kolom sebelum memesan meja.");
        return;
      }

      if (!/^\d+$/.test(phone)) {
      alert("Nomor telepon hanya boleh berisi angka.");
      return;
      }

      mejaPopup.classList.add("active");
      overlay.classList.add("active");
      document.body.classList.add("popup-open");

      document.getElementById("name").value = "";
      document.getElementById("phone").value = "";
      document.getElementById("person");
      document.getElementById("reservation-date").value = "";
      document.getElementById("time");
      document.getElementById("message").value = "";
    });

    closeMejaPopup.addEventListener("click", function () {
      mejaPopup.classList.remove("active");
      overlay.classList.remove("active");
      document.body.classList.remove("popup-open");
    });
  }
});
