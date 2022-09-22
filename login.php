<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">

    <title>Login</title>

</head>

<body>
    <section class="login d-flex align-items-center justify-content-center">
        <img src="assets/img/login-bg1.png" alt="" class="img-fluid login-one">
        <img src="assets/img/login-bg2.png" alt="" class="img-fluid login-two">

        <div class="container mt-5">

            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <div class="login-t">Create your account in <span> 2 Minutes</span></div>
                    <div class="login-t2">No credit card required, get 10 test SMS credits on activating your account</div>
                    <div class="mt-5">
                        <div class="d-flex align-items-start">
                            <img src="assets/img/check_all_big.svg" alt="">
                            <div class="login-p">Award-winning bulk SMS platform trusted by 225,000+ businesses</div>
                        </div>
                        <div class="d-flex align-items-start">
                            <img src="assets/img/check_all_big.svg" alt="">
                            <div class="login-p">Award-winning bulk SMS platform trusted by 225,000+ businesses</div>
                        </div>
                        <div class="d-flex align-items-start">
                            <img src="assets/img/check_all_big.svg" alt="">
                            <div class="login-p">Award-winning bulk SMS platform trusted by 225,000+ businesses</div>
                        </div>
                        <div class="d-flex align-items-start">
                            <img src="assets/img/check_all_big.svg" alt="">
                            <div class="login-p">Award-winning bulk SMS platform trusted by 225,000+ businesses</div>
                        </div>
                        <div class="d-flex align-items-start">
                            <img src="assets/img/check_all_big.svg" alt="">
                            <div class="login-p">Award-winning bulk SMS platform trusted by 225,000+ businesses</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-lg-0 my-5 ">
                    <div class="rk-card-login">
                        <div class="tab">
                            <div class="btn_tb">
                                <button class="tablinks" onclick="openCity(event, 'login')">Login</button>
                                <button class="tablinks" onclick="openCity(event, 'signup')" id="defaultOpen">Sign up</button>
                            </div>
                        </div>
                        <div id="login" class="tabcontent col-12">
                            <form class="d-flex flex-column align-items-center">
                                <div class="form-row">
                                    <div class="form-group col-12 mt-3">
                                        <input type="email" class="form-control  " placeholder="Email*" id="">
                                    </div>
                                    <div class="form-group col-12 mt-1">
                                        <input type="password" class="form-control " placeholder="Password*" id="">
                                        <div class="fopsw">
                                            <a href=""> Forget Password</a>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit " class="btn login-btn-rk ">Login</button>
                            </form>
                        </div>
                        <div id="signup" class="tabcontent col-12">
                            <form class="d-flex flex-column align-items-center">
                                <div class="form-row mt-1">
                                    <div class="form-group col-md-6 ">
                                        <input type="email" class="form-control bu-form-input " placeholder="Company name*" id="">
                                    </div>
                                    <div class="form-group col-md-6 ">
                                        <input type="password" class="form-control bu-form-input " placeholder="Contact person name*" id="">
                                    </div>
                                    <div class="form-group col-md-6 ">
                                        <input type="email" class="form-control bu-form-input " placeholder="City*" id="">
                                    </div>
                                    <div class="form-group col-md-6 ">
                                        <input type="password" class="form-control bu-form-input " placeholder="Mobile number*" id="">
                                    </div>
                                    <div class="form-group col-md-6 ">
                                        <input type="email" class="form-control bu-form-input " placeholder="Email*" id="">
                                    </div>
                                    <div class="form-group col-md-6 ">
                                        <input type="password" class="form-control bu-form-input " placeholder="Password*" id="">
                                    </div>
                                    <div class="form-group col-md-6 ">
                                        <input type="password" class="form-control bu-form-input " placeholder="Password*" id="">
                                    </div>
                                    <div class="form-group col-md-6 ">
                                        <input type="password" class="form-control bu-form-input " placeholder="Password*" id="">
                                    </div>
                                </div>
                                <a href="" class="btn login-btn-rk " data-toggle="modal" data-target="#addsmstemplatepop">Create Account</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Nav icon -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="assets/js/jquery.slim.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script>
        function openCity(evt, planName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(planName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>
</body>

</html>