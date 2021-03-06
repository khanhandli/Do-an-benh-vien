<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hệ thống bệnh viện</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets.css/fonts/fontawesome-free-5.14.0-web/css/all.min.css ">
    <link rel="stylesheet" href="./assets.css/css/form.css">
    <link rel="stylesheet" href="./assets.css/css/main.css">
    <link rel="stylesheet" href="./assets.css/css/base.css">
</head>
<body style="overflow: hidden; margin: 0;">
    <div class="app">
        <div class="div1" style="color: white;">
                <span><img class="div1-img" src="data:image/png;base64,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" alt=""></span>
                
                <span style="--i:1;"> Phân </span>
                <span style="--i:2;"> Tích </span>
                <span style="--i:3;"> Thiết </span>
                <span style="--i:4;"> Kế </span>
                <span style="--i:5;"> Hệ </span>
                <span style="--i:6;"> Thống </span>
                <span style="--i:7;"> Quản </span>
                <span style="--i:8;"> Lý </span>
                <span style="--i:9;"> Quầy </span>
                <span style="--i:10;"> Thuốc </span>
                <span style="--i:11;"> Bệnh </span>
                <span style="--i:12;"> Viện </span>
        </div>
        <div class="nhom8">NGUYỄN NHƯ Ý</div>
        <div class="grid">
            <div class="picture">
                <div class="picture__selection">
                    
                     <div class="picture__selection-btn">
                        <div class="selection-btn">
                            <div class="btn btn-patient">
                                <a href="./patient.html">Đăng Nhập</a>
                            </div>
                            <div class="btn btn-doctor">
                                <a href="./doctor.html">Đăng Ký</a>
                            </div>
                        </div>
                    </div> 

                </div>
            </div>
        </div>
    <div class="modal1">
        <div class="modal__overlay"></div>
        <div class="modal__body">
    </div>
    <!-- Register form -->
        <!-- <div class="auth-form">
                <div class="auth-form__container">
                    <div class="auth-form__header">
                        <h3 class="auth-form__heading">Đăng Ký</h3>
                        <span class="auth-form__switch-btn">Đăng nhập</span>
                    </div>

                    <div class="auth-form_form">

                        <div class="auth-form_group">
                            <input type="text" class="auth-form__input" placeholder="Email của bạn">
                        </div>

                        <div class="auth-form_group">
                            <input type="password" class="auth-form__input" placeholder="Mật khẩu của bạn">
                        </div>

                        <div class="auth-form_group">
                            <input type="password" class="auth-form__input" placeholder="Nhập lại mật khẩu của bạn">
                        </div>

                    </div>

                    <div class="auth-form__aside">
                        <p class="auth-form__policy-text">
                            Bằng việc đăng kí, bạn đã đồng ý với Nhuy-shop về
                            <a href="" class="auth-form__text-link">Điều khoản dịch vụ</a> &
                            <a href="" class="auth-form__text-link">Chính sách bảo mật</a>
                        </p>
                    </div>

                    <div class="auth-form__controls">
                        <button class="btn btn--normal auth-form__controls-back">TRỞ LẠI</button>
                        <button class="btn btn--primary">ĐĂNG KÝ</button>
                    </div>
                </div>

                <div class="auth-form__socials">
                    <a href="" class="auth-form__socials--facebook btn btn--size-s btn--with-icon">
                        <i class="auth-form__socials-icon fab fa-facebook-square"></i>
                        <span class="auth-form__socials-title">
                            Kết nối với Facebook
                        </span>
                    </a>
                    <a href="" class="auth-form__socials--google btn btn--size-s btn--with-icon">
                        <i class="auth-form__socials-icon fab fa-google"></i>
                        <span class="auth-form__socials-title">
                            Kết nối với Google
                        </span>
                    </a>
                </div>

            </div> -->

    <!-- Login form -->
    <div class="app app_form">
            <div class="auth-form">
                <form class="auth-form__container" method="post" action="./test.php">
                    <div class="auth-form__header">
                        <h3 class="auth-form__heading">Đăng nhập</h3>
                        <span class="auth-form__switch-btn">Đăng Ký</span>
                    </div>

                    <div class="auth-form_form">

                        <div class="auth-form_group">
                            <input type="text" class="auth-form__input" placeholder="Email của bạn">
                        </div>

                        <div class="auth-form_group">
                            <input type="password" class="auth-form__input" placeholder="Mật khẩu của bạn">
                        </div>

                    </div>

                    <div class="auth-form__aside">
                        <div class="auth-form__help">
                            <a href="" class="auth-form__help-link auth-form__help-forgot">Quên mật khẩu</a>
                            <span class="auth-form__help-separate"></span>
                            <a href="" class="auth-form__help-link">Cần trợ giúp?</a>
                        </div>
                    </div>

                    <div class="auth-form__controls">
                        <button class="btn1 btn--normal auth-form__controls-back">TRỞ LẠI</button>
                        <button class="btn1 btn--primary">ĐĂNG NHẬP</button>
                    </div>
                </form>

                <div class="auth-form__socials">
                    <a href="" class="auth-form__socials--facebook btn1 btn--size-s btn--with-icon">
                        <i class="auth-form__socials-icon fab fa-facebook-square"></i>
                        <span class="auth-form__socials-title">
                            Kết nối với Facebook
                        </span>
                    </a>
                    <a href="" class="auth-form__socials--google btn1 btn--size-s btn--with-icon">
                        <i class="auth-form__socials-icon fab fa-google"></i>
                        <span class="auth-form__socials-title">
                            Kết nối với Google
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>