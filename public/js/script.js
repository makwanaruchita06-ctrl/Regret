 const menuBtn = document.getElementById("menuBtn");
    const closeBtn = document.getElementById("closeBtn");
    const mobileMenu = document.getElementById("mobileMenu");

    const openMenu = () => { mobileMenu.classList.add("active"); mobileMenu.setAttribute("aria-hidden", "false"); }
    const closeMenu = () => { mobileMenu.classList.remove("active"); mobileMenu.setAttribute("aria-hidden", "true"); }

    menuBtn.addEventListener("click", openMenu);
    closeBtn.addEventListener("click", closeMenu);

    document.querySelectorAll(".mobile-link").forEach(link =>
      link.addEventListener("click", closeMenu)
    );

    window.addEventListener("resize", () => {
      if (window.innerWidth >= 1024) closeMenu();
    });
      function scrollToTop() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            }
            // Show/hide button on scroll
            window.addEventListener('scroll', function () {
                const btn = document.querySelector('.scroll-top-btn');
                if (window.innerWidth < 768 ? window.scrollY > 100 : window.scrollY > 300) {
                    btn.style.opacity = '1';
                    btn.style.visibility = 'visible';
                } else {
                    btn.style.opacity = '0';
                    btn.style.visibility = 'hidden';
                }
            });