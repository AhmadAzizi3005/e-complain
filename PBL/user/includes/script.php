<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="js/script.js"></script>
    <script>
      const navbar = document.getElementById("navbar");
      const hamburger = document.getElementById("hamburger");
      const mobileMenu = document.getElementById("mobileMenu");

      if (hamburger) {
        hamburger.addEventListener("click", () => {
          mobileMenu.classList.toggle("hidden");
        });
      }

      // Tambahkan event listener untuk menanggapi scroll
      window.addEventListener("scroll", () => {
        const scrollHeight = window.scrollY;
        const scrollThreshold = 100;

        if (scrollHeight > scrollThreshold) {
          navbar.classList.add("navbar-fixed");
        } else {
          navbar.classList.remove("navbar-fixed");
        }
      });
    </script>