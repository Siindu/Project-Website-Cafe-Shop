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
      }, 400);
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
      }, 400);
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
  breakpoints: {
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

  breakpoints: {
    640: {
      slidesPerView: 2
    },
    922: {
      slidesPerView: 3
    }
  }
});

// POP-UP
document.addEventListener("DOMContentLoaded", function () {

  // MENU
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
        document.body.classList.add("popup-open-menu");
      }

      img.addEventListener("click", showMenuPopup);
      title.addEventListener("click", showMenuPopup);
    });

    closeMenuPopup.addEventListener("click", function () {
      menuPopup.classList.add("hidden");
      document.body.classList.remove("popup-open-menu");
    });
  }

  // RESERVASI
  const tableSelect = document.getElementById("table");
  const dateInput = document.getElementById("reservation-date");
  const timeSelect = document.getElementById("time");
  const phoneInput = document.getElementById("phone");

  // Validasi input angka saja untuk telepon
  if (phoneInput) {
    phoneInput.addEventListener("input", function () {
      this.value = this.value.replace(/\D/g, "");
    });
  }

  // Fungsi untuk mengambil data jam dari server
  function updateAvailableTimes() {
    const meja = tableSelect.value;
    const tanggal = dateInput.value;

    if (meja && tanggal) {
      // Memberi indikasi loading (opsional namun elegan)
      timeSelect.innerHTML = '<option value="">Memuat jam...</option>';

      const formData = new FormData();
      formData.append('nomor_meja', meja);
      formData.append('tanggal_reservasi', tanggal);

      fetch('meja-kosong.php', {
        method: 'POST',
        body: formData
      })
        .then(response => response.text())
        .then(html => {
          timeSelect.innerHTML = html;
        })
        .catch(error => {
          console.error('Error:', error);
          timeSelect.innerHTML = '<option value="">Gagal memuat data</option>';
        });
    }
  }

  // Menempelkan event listener pada input meja dan tanggal
  if (tableSelect && dateInput) {
    tableSelect.addEventListener("change", updateAvailableTimes);
    dateInput.addEventListener("change", updateAvailableTimes);

    // Jalankan sekali saat load jika input sudah terisi (misal setelah refresh)
    if (dateInput.value !== "") {
      updateAvailableTimes();
    }
  }

});
