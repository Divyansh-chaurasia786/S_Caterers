(function() {
  let logoClicks = 0;
  const csrfToken = document.currentScript.getAttribute('data-csrf') || '';

  // Listen on both standard footer logo class and potential custom logos
  const footerLogo = document.querySelector('.footer-logo');
  if (footerLogo) {
    footerLogo.style.cursor = 'pointer';
    footerLogo.addEventListener('click', function() {
      logoClicks++;
      if (logoClicks >= 3) {
        logoClicks = 0;
        showAdminPasswordModal();
      }
    });
  }

  function showAdminPasswordModal() {
    // Prevent duplicate modals
    if (document.getElementById('admin-password-overlay')) return;

    // Create modal elements
    const overlay = document.createElement('div');
    overlay.id = 'admin-password-overlay';
    overlay.style.position = 'fixed';
    overlay.style.inset = '0';
    overlay.style.backgroundColor = 'rgba(17, 14, 13, 0.85)';
    overlay.style.backdropFilter = 'blur(6px)';
    overlay.style.webkitBackdropFilter = 'blur(6px)';
    overlay.style.zIndex = '99999';
    overlay.style.display = 'flex';
    overlay.style.alignItems = 'center';
    overlay.style.justifyContent = 'center';
    overlay.style.opacity = '0';
    overlay.style.transition = 'opacity 0.3s ease';

    const modal = document.createElement('div');
    modal.style.background = '#FFFFFF';
    modal.style.border = '2px solid #C6A15B'; // var(--gold)
    modal.style.borderRadius = '16px';
    modal.style.padding = '2.5rem';
    modal.style.width = '90%';
    modal.style.maxWidth = '400px';
    modal.style.boxShadow = '0 20px 40px rgba(0,0,0,0.3)';
    modal.style.transform = 'scale(0.9)';
    modal.style.transition = 'transform 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.15)';
    modal.style.boxSizing = 'border-box';

    modal.innerHTML = `
      <h3 style="font-family: 'Playfair Display', serif; color: #7A1C2B; font-weight: 700; margin-top: 0; margin-bottom: 1.2rem; text-align: center; font-size: 1.5rem;">Admin Verification</h3>
      <p style="font-size: 0.9rem; color: #555555; margin-bottom: 1.5rem; text-align: center; line-height: 1.5;">Please enter the system access password to open the gallery management panel.</p>
      <div style="margin-bottom: 1.5rem;">
        <input type="password" id="admin-pass-input" placeholder="Password" style="width: 100%; padding: 12px; border: 1px solid #E6D8C3; border-radius: 8px; font-size: 1rem; outline: none; background: #FFFDF9; box-sizing: border-box;">
        <div id="modal-error-msg" style="color: #dc3545; font-size: 0.82rem; margin-top: 8px; display: none; text-align: center; font-weight: 600;"></div>
      </div>
      <div style="display: flex; gap: 12px;">
        <button id="modal-cancel-btn" style="flex: 1; padding: 11px; border: 1px solid #E6D8C3; border-radius: 8px; background: none; color: #2C1A11; font-weight: 600; cursor: pointer; transition: background 0.2s;">Cancel</button>
        <button id="modal-submit-btn" style="flex: 1; padding: 11px; border: none; border-radius: 8px; background: linear-gradient(135deg, #C6A15B 0%, #8A6B1B 100%); color: #FFFFFF; font-weight: 700; cursor: pointer; box-shadow: 0 4px 10px rgba(138, 107, 27, 0.3); transition: opacity 0.2s;">Submit</button>
      </div>
    `;

    overlay.appendChild(modal);
    document.body.appendChild(overlay);

    // Trigger transition
    setTimeout(() => {
      overlay.style.opacity = '1';
      modal.style.transform = 'scale(1)';
    }, 10);

    // Focus input
    const input = document.getElementById('admin-pass-input');
    if (input) input.focus();

    // Cancel handler
    const cancelBtn = document.getElementById('modal-cancel-btn');
    const close = () => {
      overlay.style.opacity = '0';
      modal.style.transform = 'scale(0.9)';
      setTimeout(() => overlay.remove(), 300);
    };
    
    cancelBtn.addEventListener('click', close);
    cancelBtn.addEventListener('mouseenter', () => cancelBtn.style.backgroundColor = '#F5F5F5');
    cancelBtn.addEventListener('mouseleave', () => cancelBtn.style.backgroundColor = 'transparent');
    
    overlay.addEventListener('click', function(e) {
      if (e.target === overlay) close();
    });

    // Submit handler
    const submitBtn = document.getElementById('modal-submit-btn');
    const errorMsg = document.getElementById('modal-error-msg');
    
    const submitPassword = () => {
      const pass = input.value;
      if (!pass) return;

      submitBtn.disabled = true;
      submitBtn.textContent = 'Verifying...';
      submitBtn.style.opacity = '0.7';
      errorMsg.style.display = 'none';

      fetch('/admin/gallery/login', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'X-CSRF-TOKEN': csrfToken
        },
        body: JSON.stringify({ password: pass })
      })
      .then(response => {
        if (!response.ok) {
          return response.json().then(data => { throw new Error(data.message || 'Login failed') });
        }
        return response.json();
      })
      .then(data => {
        window.location.href = '/admin/gallery';
      })
      .catch(err => {
        submitBtn.disabled = false;
        submitBtn.textContent = 'Submit';
        submitBtn.style.opacity = '1';
        errorMsg.textContent = err.message;
        errorMsg.style.display = 'block';
        input.value = '';
        input.focus();
      });
    };

    submitBtn.addEventListener('click', submitPassword);
    input.addEventListener('keydown', function(e) {
      if (e.key === 'Enter') submitPassword();
    });
  }
})();
