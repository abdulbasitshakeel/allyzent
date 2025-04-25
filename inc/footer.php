  <footer class="text-white" style="background-color: rgb(28, 29, 24) ;">
    <div class="container">
      <div class="footer-work">
          <div class="row gy-5 mb-2">
            <div class="col-md-4">
                <div class="logofooter">
                  <img src="assets/images/logo.png">
                  <p class="text-light-emphasis" style="max-width: 343px;">
                  At Allyzent, we design digital experiences that captivate and connect. Let’s create something extraordinary, together. Your vision, our innovation — perfectly aligned. Together, we turn ideas into impact.
                  </p>
                </div>
            </div>
            <div class="col-md-4">
              <h5 class="text-white mb-3">Services</h5>
              <ul class="list-unstyled " style="font-size: 15px;">
                <li><a href="<?= $BaseUrl; ?>" class="text-white text-decoration-none d-block mb-2">Home</a></li>
                <li><a href="<?= $BaseUrl; ?>auto.php" class="text-white text-decoration-none d-block mb-2">Auto</a></li>
                <li><a href="<?= $BaseUrl; ?>aesthetics.php" class="text-white text-decoration-none d-block mb-2">Aesthetics and Dental</a></li>
                <li><a href="<?= $BaseUrl; ?>homeservices.php" class="text-white text-decoration-none d-block mb-2">Home Services</a></li>
                <li><a href="<?= $BaseUrl; ?>retail.php" class="text-white text-decoration-none d-block mb-2">Retails</a></li>
                <li><a href="<?= $BaseUrl; ?>lawfirm.php" class="text-white text-decoration-none d-block mb-2">Law Firms</a></li>
              </ul>
            </div>
            <div class="col-md-4">
              <h5 class="text-white mb-3">Contact</h5>
              <p class="mb-1" style="font-size: 15px;">Email: <a href="mailto:info@yourdomain.com" class="text-white text-decoration-none">info@yourdomain.com</a></p>
              <p style="font-size: 15px;margin-bottom:8px;">Phone: +123-456-7890</p>
              <div class="d-flex gap-3 fs-5">
                <a href="#" class="text-white"><i class="bi bi-facebook"></i></a>
                <a href="#" class="text-white"><i class="bi bi-instagram"></i></a>
                <a href="#" class="text-white"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
      </div>
      <div class="footer-bottom">
          <div class="container">
              <div class="row align-items-center">
                  <div class="col-md-12 text-center text-md-start mb-3 mb-md-0">
                      <div class="copyright">
                          © 2025 Allyzent Plus. All Rights Reserved.
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </footer>
</div>
<script src="assets/js/main.js"></script>
<script>
    const timelineItems = document.querySelectorAll('.timeline-item');

  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('show');
      }
    });
  }, { threshold: 0.1 });

  timelineItems.forEach(item => observer.observe(item));
</script>
<script>
window.addEventListener("load", function () {
  document.querySelector(".loader-wrapper").style.display = "none";
});
</script>
</body>
</html>