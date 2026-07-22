/* ==========================================================================
   S.CATERS - INTERACTIVE JAVASCRIPT LOGIC
   Silver, Gold, Royal & Custom Packages + Live Juice, Mixology Bar & Chocolate Add-Ons
   ========================================================================== */

document.addEventListener('DOMContentLoaded', () => {
  initNavbar();
  initCategoryFilters();
  initModals();
});

/* 1. Navbar Scroll Effect */
function initNavbar() {
  const navbar = document.querySelector('.navbar');
  if (!navbar) return;
  window.addEventListener('scroll', () => {
    if (window.scrollY > 40) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  });
}

/* 2. Services Category Filtering (Silver, Gold, Royal, Custom, All) */
function initCategoryFilters() {
  const tabBtns = document.querySelectorAll('.tab-btn');
  const serviceCards = document.querySelectorAll('.service-card');

  tabBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      tabBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const filter = btn.dataset.filter;

      serviceCards.forEach(card => {
        if (filter === 'all' || card.dataset.category === filter) {
          card.style.display = 'flex';
          setTimeout(() => card.style.opacity = '1', 50);
        } else {
          card.style.opacity = '0';
          card.style.display = 'none';
        }
      });
    });
  });
}

/* 3. Modal Handlers & Inquiry Trigger */
function initModals() {
  const modalOverlay = document.getElementById('inquiryModal');
  const modalCloseBtn = document.querySelector('.modal-close');
  const modalTriggers = document.querySelectorAll('.open-inquiry');
  const inquiryForm = document.getElementById('inquiryForm');

  if (!modalOverlay) return;

  modalTriggers.forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      const serviceName = btn.dataset.service || 'Catering Package & Add-on Inquiry';
      const serviceField = document.getElementById('modalServiceField');
      if (serviceField) serviceField.value = serviceName;

      modalOverlay.classList.add('active');
    });
  });

  if (modalCloseBtn) {
    modalCloseBtn.addEventListener('click', () => {
      modalOverlay.classList.remove('active');
    });
  }

  modalOverlay.addEventListener('click', (e) => {
    if (e.target === modalOverlay) {
      modalOverlay.classList.remove('active');
    }
  });

  if (inquiryForm) {
    inquiryForm.addEventListener('submit', (e) => {
      e.preventDefault();
      modalOverlay.classList.remove('active');
      showToast('✨ Thank you! Your catering inquiry has been submitted to S.Caters. We will reach out within 2 hours.');
      inquiryForm.reset();
    });
  }
}

/* 4. Toast Notifications */
function showToast(message) {
  let container = document.querySelector('.toast-container');
  if (!container) {
    container = document.createElement('div');
    container.className = 'toast-container';
    document.body.appendChild(container);
  }

  const toast = document.createElement('div');
  toast.className = 'toast';
  toast.innerHTML = `
    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
      <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
      <polyline points="22 4 12 14.01 9 11.01"></polyline>
    </svg>
    <span>${message}</span>
  `;

  container.appendChild(toast);

  setTimeout(() => {
    toast.style.opacity = '0';
    toast.style.transform = 'translateY(20px)';
    setTimeout(() => toast.remove(), 300);
  }, 4000);
}
