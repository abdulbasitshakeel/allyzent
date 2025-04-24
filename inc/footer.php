<footer class="footer">
    <div class="container">
        <div class="footer-work">
            <div class="row mb-4">
                <div class="col-md-3 col-sm-6 footer-col">
                    <h3 class="footer-section-title">AI EMPLOYEE</h3>
                    <ul class="footer-list">
                        <li><a href="#">AI Salesperson</a></li>
                        <li><a href="#">AI Scheduler</a></li>
                        <li><a href="#">AI Marketer</a></li>
                        <li><a href="#">AI Concierge</a></li>
                        <li><a href="#">AI Reputation Specialist</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 footer-col">
                    <h3 class="footer-section-title">BIURKES TYPES</h3>
                    <ul class="footer-list">
                        <li><a href="#">Automation OEM</a></li>
                        <li><a href="#">Auto Body Shop</a></li>
                        <li><a href="#">Medical Spa</a></li>
                        <li><a href="#">Dental</a></li>
                        <li><a href="#">HVAC</a></li>
                        <li><a href="#">Plumbing</a></li>
                        <li><a href="#">Jewelry</a></li>
                        <li><a href="#">Furniture</a></li>
                        <li><a href="#">Appliances</a></li>
                        <li><a href="#">Nutracea</a></li>
                        <li><a href="#">Large Business</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 footer-col">
                    <h3 class="footer-section-title">RESOURCES</h3>
                    <ul class="footer-list">
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">Blogs Guides</a></li>
                        <li><a href="#">Customer Stories</a></li>
                        <li><a href="#">Refers Business</a></li>
                        <li><a href="#">Contact Sales</a></li>
                        <li><a href="#">Download for iOS</a></li>
                        <li><a href="#">Download for Android</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 footer-col">
                    <h3 class="footer-section-title">COMPANY</h3>
                    <ul class="footer-list">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Cancers</a></li>
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">Press</a></li>
                        <li><a href="#">Legal</a></li>
                    </ul>
                    <h3 class="footer-section-title mt-4">PARTNERS</h3>
                    <ul class="footer-list">
                        <li><a href="#">Find a Solution Partner</a></li>
                        <li><a href="#">Integrations</a></li>
                        <li><a href="#">Moderations</a></li>
                        <li><a href="#">Developer Platform</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-social py-2">
                <div class="container">
                    <div class="row justify-content-end mt-2">
                        <div class="col-12 text-end">
                            <a href="#" class="social-icon mx-2"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social-icon mx-2"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="social-icon mx-2"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="social-icon mx-2"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-4 text-center text-md-start mb-3 mb-md-0">
                            <div class="copyright">
                                © Pavilion Corp Inc. 2025.
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="footer-bottom-links">
                                <a href="#" class="me-3 mb-2 mb-md-0">Siemep</a>
                                <a href="#" class="me-3 mb-2 mb-md-0">Terms & Conditions</a>
                                <a href="#" class="me-3 mb-2 mb-md-0">Privacy Policy</a>
                                <a href="#" class="me-3 mb-2 mb-md-0">Privacy Center</a>
                                <a href="#" class="mb-2 mb-md-0">Do Not Sell or Share My Personal Information</a>
                            </div>
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
</body>
</html>