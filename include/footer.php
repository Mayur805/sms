<!-- Footer -->

<footer class="footer" data-aos="fade-down">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex flex-column justify-content-end">
                <div class="footer-p">Contrary to popular belief, Lorem Ipsum is dmply random text. It has roots in a piece of classical Latin literature from 45 old.Contrary to popular belief Contrary to popular belief, Lorem Ipsum is.</div>
                <div class="mt-3">
                    <a href=""><img src="assets/img/facebook.svg" alt="" class="img-fluid soical-icon"></a>
                    <a href=""><img src="assets/img/insta.svg" alt="" class="img-fluid soical-icon"></a>
                    <a href=""><img src="assets/img/link.svg" alt="" class="img-fluid soical-icon"></a>
                    <a href=""><img src="assets/img/twiteer.svg" alt="" class="img-fluid soical-icon"></a>
                </div>
            </div>
            <div class="col-md-2 d-flex flex-column mt-md-0 mt-4">
                <div class="footer-t">OTHER</div>
                <a href="" class="footer-link">Terms of Service</a>
                <a href="" class="footer-link">Privacy Policy</a>
                <a href="" class="footer-link">Career</a>
                <a href="" class="footer-link">FAQs</a>
            </div>
            <div class="col-md-2 d-flex flex-column mt-md-0 mt-4">
                <div class="footer-t">OTHER</div>
                <a href="" class="footer-link">Terms of Service</a>
                <a href="" class="footer-link">Privacy Policy</a>
                <a href="" class="footer-link">Career</a>
                <a href="" class="footer-link">FAQs</a>
            </div>
            <div class="col-md-2 d-flex flex-column mt-md-0 mt-4">
                <div class="footer-t">OTHER</div>
                <a href="" class="footer-link">Terms of Service</a>
                <a href="" class="footer-link">Privacy Policy</a>
                <a href="" class="footer-link">Career</a>
                <a href="" class="footer-link">FAQs</a>
            </div>
        </div>

    </div>
    <hr class="footer-hr">
    <div class="container">
        <div class="row justify-content-between">
            <div class="footer-last">© 2021, Design & Developed by Atik Gohel </div>
            <div class="footer-last back-top ml-5"><img src="assets/img/coolicon.svg" alt="" class="img-fluid"> Back to top </div>
        </div>
    </div>
    <!-- <div class="d-md-flex justify-content-center">
        <div class="footer-last">© 2021, Design & Developed by Atik Gohel </div>
        <div class="footer-last back-top ml-5">Back to top</div>
    </div> -->
</footer>



<!-- Nav icon -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<!--  -->
<script src="assets/js/jquery.slim.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/aos.js"></script>
<!-- Type Libreary -->
<script src="assets/js/type.js"></script>
<!-- Anim js -->
<script src="assets/js/anime.js"></script>

<script>
    AOS.init({
        offset: 300,
        duration: 1000,
        mirror: true,
    });
</script>
<script>
    var typed = new Typed('#typed', {
        stringsElement: '#typed-strings',
        backSpeed: 60,
        typeSpeed: 60,
        showCursor: false,
        smartBackspace: false,
        loop: true,
        loopCount: Infinity,
    });
    // var typed = new Typed('#secure', {

    //     strings: ['', 'Secure and Robust APIs for SMS'],
    //     backSpeed: 60,
    //     typeSpeed: 60,
    //     showCursor: false,
    //     smartBackspace: false,
    //     loop: true,
    //     loopCount: Infinity,
    // });
</script>
<script>
    anime({
        targets: '.mobile-hero',
        loop: true,
        scale: {
            value: 0.8,
            duration: 1900,
            delay: 800,
            easing: 'easeInOutQuart',
        },
    });
    anime({
        targets: '.hero-sms',
        loop: true,
        direction: 'alternate',
        duration: 400,
        translateY: -20,
        easing: 'cubicBezier(.5, .05, .1, .3)'
    });
    anime({
        targets: '.hero-sms-two',
        scale: {
            value: 0.7,
            duration: 1900,
            delay: 800,
            easing: 'easeInOutQuart',
        },
        loop: true,
        direction: 'alternate',
        duration: 900,
        translateY: -70,
        translateX: 40,
        easing: 'cubicBezier(.5, .05, .1, .3)',
    });
    anime({
        targets: '.hero-cartoon-1',
        translateX: -22,
        direction: 'alternate',
        loop: true,
        easing: 'cubicBezier(.5, .05, .1, .3)'
    });
    anime({
        targets: '.hero-cartoon-2',
        translateY: 30,
        direction: 'alternate',
        duration: 1000,
        loop: true,
        easing: 'cubicBezier(.5, .05, .1, .3)'
    });
    anime({
        targets: '.hero-cartoon-3',
        translateX: -40,
        // translateY: 30,
        direction: 'alternate',
        duration: 1300,
        loop: true,
        easing: 'cubicBezier(.5, .05, .1, .3)'
    });
    anime({
        targets: '.hero-cartoon-4',
        translateX: 30,
        translateY: 40,
        direction: 'alternate',
        duration: 1300,
        loop: true,
        easing: 'cubicBezier(.5, .05, .1, .3)'
    });
</script>
</body>

</html>