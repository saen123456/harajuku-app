<?php

require_once "config.php";
require_once "header.php";
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>menu-list</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="stylesheet" type="text/css" href="../css/msdropdown/dd.css" />
    <script src="../js/msdropdown/jquery.dd.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/msdropdown/flags.css" />


    <!--modernizr min js here-->
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>
    <style>
        .fb9 {
            border: 1px solid #3366FF;
            background-color: #B3C6FF;
            width: 150px;
            height: 30px;
        }
    </style>
</head>

<body>

    <!--header area start-->

    <!--offcanvas menu area start-->



    <!--header area end-->
    <div class="off_canvars_overlay">

    </div>
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area" style="height:200px;background: url(img-take/bg.jpg) no-repeat 0 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xs-12">
                    <div class="breadcrumb_content">
                        <h3 style="color: #fff;">สมัครบริการร้านอาหาร</h3>
                        <ul>
                            <li><a href="{{url('/index')}}" style="color: #fff;">home</a></li>
                            <li style="color: #fff;">สมัครบริการร้านอาหาร</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--breadcrumbs area end-->
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <!-- One of three columns -->
            </div>
            <div class="col-sm-8">
                <!-- <div class="col-lg-12 col-md-12"> -->
                <h3 class="text-center" style="text-align: center;font-size: 25px;font-weight: 700px">สมัครสมาชิก</h3>
                <div class="account_form register"> <br>
                    <div class="accordion" id="accordionExample">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-3">
                            <li class="text-center" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <input type="radio" id value="" checked name="payment_method" checked>
                                ผู้ชื้อ

                            </li>
                        </div>
                        <div class="col-lg-3">
                            <li class="text-center" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <input type="radio" id value="" name="payment_method">
                                สมัครร้านค้า
                            </li>
                        </div>
                        <div class="col-lg-3"></div>
<!-- 
                        <div class="col-lg-2">66</div>
                        <div class="col-lg-8"><hr></div>
                        <div class="col-lg-2">66</div> -->

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="account_form register">

                                <form action="#">
                                    <hr>
                                    <h4 class="text-center" style="color:#A9A9A9;">สมัครผ่านโซเชียล</h4><br>
                                    <div class="row">
                                        <div class=""></div>
                                        <div class="col-lg-1"></div>
                                        <div class="col-lg-10">

                                            <div class="col-lg-4">
                                                <a href="#" class="fb btn" style="width: 100%;height:40px;">
                                                    <i class="fab fa-facebook-f" style="font-size: 25px;"></i> <span>Facebook</span>
                                                </a>
                                            </div>
                                            <div class="col-lg-4">
                                                <a href="#" class="twitter btn" style="width: 100%;height:40px;">
                                                    <i class="fab fa-twitter" style="font-size: 25px;"></i> <span>Twitter</span>
                                                </a>
                                            </div>
                                            <div class="col-lg-4">
                                                <a href="#" class="google btn" style="width: 100%;height:40px;">
                                                    <i class="fab fa-google-plus-g" style="font-size: 25px;"></i> <span>Google+</span>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="col-lg-1"></div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <hr>
                                        </div>
                                        <div class="col-lg-2">
                                            <p style="text-align: center;">หรือ</p>
                                        </div>
                                        <div class="col-lg-5">
                                            <hr>
                                        </div>
                                    </div>
                                    <h4 class="text-center" style="font-weight: 700px">สมัครโดยการกรอกข้อมูล</h4><br>
                                    <p>
                                        <label>ชื่อผู้ใช้ <span style="color: red;">*</span></label>
                                        <input type="text">
                                    </p>

                                    <p>
                                        <label>อีเมลล์<span style="color: red;">*</span></label>
                                        <input type="text">
                                    </p>
                                    <p>
                                        <label>พาสเวริ์ด<span style="color: red;">*</span></label>
                                        <input type="text">
                                    </p>
                                    <p>
                                        <label>ยืนยันพาสเวริ์ด<span style="color: red;">*</span></label>
                                        <input type="text">
                                    </p>
                                    <div class="g-recaptcha" data-sitekey="6Ldbdg0TAAAAAI7KAf72Q6uagbWzWecTeBWmrCpJ"></div>

                                    <div class="row">
                                        <div class="checkout_btn" style="margin:0 auto;">
                                            <a href="{{url('/restaurent')}}" class="btn btn">สมัครบริการ</a>
                                        </div>


                                    </div>



                                </form>
                            </div>
                        </div>


                        <form action="#">
                            <hr>

                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample"><br>
                                <h4 class="text-center" style="font-weight: 700px">สมัครบัญชีขาย</h4>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label for="">ประเภทบัญชี<span style="color: red;">*</span></label>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="inlineCheckbox1" value="option1">
                                            <label class="form-check-label" for="inlineCheckbox1">บุคคล</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="inlineCheckbox2" value="option2">
                                            <label class="form-check-label" for="inlineCheckbox2">นิติบุคคล</label>
                                        </div>
                                        <br>
                                        <p>สำหรับการสมัครเปิดร้านค้าแบบบุคคลธรรมดาจะต้องมีสำเนาบัตรประชาชนและมีอายุไม่ต่ำกว่า 18 ปี</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <label for="">ร้านค้าใน<span style="color: red;">*</span></label>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="form-group">
                                            <select class="form-control form-control-lg" name="countries" id="countries" style="width:300px;">
                                                <option value='ad' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ad" data-title="Andorra">Andorra</option>
                                                <option value='ae' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ae" data-title="United Arab Emirates">United Arab Emirates</option>
                                                <option value='af' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag af" data-title="Afghanistan">Afghanistan</option>
                                                <option value='ag' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ag" data-title="Antigua and Barbuda">Antigua and Barbuda</option>
                                                <option value='ai' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ai" data-title="Anguilla">Anguilla</option>
                                                <option value='al' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag al" data-title="Albania">Albania</option>
                                                <option value='am' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag am" data-title="Armenia">Armenia</option>
                                                <option value='an' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag an" data-title="Netherlands Antilles">Netherlands Antilles</option>
                                            </select>
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <label for="">หมายเลขโทรศัพท์<span style="color: red;">*</span></label>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="form-group">
                                            <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
                                            <div class="input-group">
                                                <div class="input-group-addon">66</div>
                                                <input type="text" class="form-control" id="exampleInputAmount" placeholder="Amount">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label for="">ยืนยันเลข <span style="color: red;">*</span></label>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="form-group">
                                            <div id="status">

                                                <input id="confirm" onclick="show1();" class="form-control" type="range" placeholder="" value="0" min="0" max="100" />
                                                <span class="delete-notice"> <input type="text" placeholder="ยืนยันหมายเลข">
                                                    <label for="">รหัส 6 หลักจะถูกส่งไปยังโทรศัพท์ของคุณ</label>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p>

                                    <div id="money1">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label for="">รหัสผ่าน<span style="color: red;">*</span></label>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="exampleInputAmount" placeholder="รหัสผ่าน">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label for="">ยืนยันรหัสผ่าน<span style="color: red;">*</span></label>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="exampleInputAmount" placeholder="ยืนยันรหัสผ่าน">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label for="">อีเมล<span style="color: red;">*</span></label>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="exampleInputAmount" placeholder="อีเมล">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label for="">ชื่อร้านค้า<span style="color: red;">*</span></label>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="exampleInputAmount" placeholder="ชื่อร้านค้า">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>


                                        <div class="row">
                                            <div class="checkout_btn" style="margin:0 auto;">
                                                <a href="{{url('/index')}}" class="btn btn">สมัครบริการ</a>
                                            </div>


                                        </div>

                                    </div>

                        </form>
                    </div>


                </div>

            </div>
            <!-- </div> -->
        </div>
        <div class="col-sm-2">
            <!-- One of three columns -->
        </div>
    </div>
    </div>


    <!--footer area start-->
    <?php

    require_once "footer.php";
    ?>
    <!--footer area end-->

    <!-- modal area start-->

    <!-- modal area end-->


    <!--jquery min js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--popper min js-->
    <script src="assets/js/popper.js"></script>
    <!--bootstrap min js-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!--owl carousel min js-->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!--slick min js-->
    <script src="assets/js/slick.min.js"></script>
    <!--magnific popup min js-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!--counterup min js-->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!--jquery countdown min js-->
    <script src="assets/js/jquery.countdown.js"></script>
    <!--jquery ui min js-->
    <script src="assets/js/jquery.ui.js"></script>
    <!--jquery elevatezoom min js-->
    <script src="assets/js/jquery.elevatezoom.js"></script>
    <!--isotope packaged min js-->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!--slinky menu js-->
    <script src="assets/js/slinky.menu.js"></script>
    <!--instagramfeed menu js-->
    <script src="assets/js/jquery.instagramFeed.min.js"></script>
    <!-- Plugins JS -->

    <script src="assets/js/plugins.js"></script>


    <!-- <script src="js-front/jquery-2.2.4.min.js"></script> -->
    <script src="js-front/common_scripts_min.js"></script>
    <script src="js-front/functions.js"></script>
    <script src="assets/validate.js"></script>
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <script>
        $("#confirm").on('change', function() {
            var slidepos = $(this).val();
            if (slidepos > 99) {
                // User slided the slider
                $("#confirm").fadeOut();
                $(".delete-notice").fadeIn();
            }
        });
    </script>
    <script>
        function show1() {
            document.getElementById('money1').style.display = 'block';
        }
    </script>
</body>

</html>