<!-- Back-to-top button Start -->
<a href="javascript:void(0)" class="back-to-top bounce"><i class="ri-arrow-up-s-line"></i></a>
<!-- Back-to-top button End -->

<!-- Link of JS files -->
<script data-cfasync="false" src="js/email-decode.min.js"></script>
<script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>assets/js/form-validator.min.js"></script>
<script src="<?= base_url() ?>assets/js/contact-form-script.js"></script>
<script src="<?= base_url() ?>assets/js/aos.js"></script>
<script src="<?= base_url() ?>assets/js/owl.carousel.min.js"></script>
<script src="<?= base_url() ?>assets/js/odometer.min.js"></script>
<script src="<?= base_url() ?>assets/js/fancybox.js"></script>
<script src="<?= base_url() ?>assets/js/jquery.appear.js"></script>
<script src="<?= base_url() ?>assets/js/tweenmax.min.js"></script>
<script src="<?= base_url() ?>assets/js/main.js"></script>

<script>
    let menuLink = document.querySelectorAll('.nav-item');
    menuLink.forEach(links => {
        links.addEventListener('click', function() {
            let navBar = document.querySelector('#navbarSupportedContent');
            navBar.classList.remove('open');
        });
    });
</script>

</body>

</html>