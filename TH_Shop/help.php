<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="./assets/css/base.css">
        <link rel="stylesheet" href="./assets/css/main.css">
        <link rel="stylesheet" href="./assets/css/help.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.1.1-web/fontawesome-free-6.1.1-web/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,100&display=swap" rel="stylesheet">
    <title>Future Shop</title>
        
    </head>
    <body>
        <div class="app">
            <header class="header">
                <div class="grid">
                    <nav class="header__navbar">
                    <ul class="header__navbar-list">
                        <li class="header__navbar-item header__navbar-item--separate">Vào cửa hàng trên ứng dụng Future shop </li>
                        <li class="header__navbar-item">
                             <span class="header__navbar-title--no-pointer">Kết nối</span>
                             <a href="https://www.facebook.com/tuan.hai.3532" target="_blank" class="header__navbar-icon-link">
                                <i class="fa-brands fa-facebook"></i>
                             </a>
                             <a href="https://www.facebook.com/tuan.hai.3532" target="_blank" class="header__navbar-icon-link">
                                <i class="fa-brands fa-instagram"></i>
                             </a>
                            </li>
                    </ul>
    
                    <ul class="header__navbar-list">
                        <li class="header__navbar-item header__navbar-item--has-notify">
                            <a href="" class="header__navbar-item-link">
                                <i class="fa-regular fa-bell"></i>
                                Thông báo
                            </a>
                            <div class="header__notify">
                                <header class="header__notify-header">
                                    <h3>Thông báo mới nhận</h3>
                                </header>
                                <ul class="header__notify-list">
                                    <li class="header__notify-item header__notify-item--viewed">
                                        <a href="" class="header__notify-link">
                                            <img src="./assets/img/centaphil.jpeg" alt="" class="header__notify-img">
                                            <div class="header__notify-info">
                                                <span class="header__notify-name">Mỹ phẩm centaphil chính hãng</span>
                                                <span class="header__notify-description">Mô tả mĩ phẩm centaphil chính hãng</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notify-item">
                                        <a href="" class="header__notify-link">
                                            <img src="./assets/img/laroche-posay.jpg" alt="" class="header__notify-img">
                                            <div class="header__notify-info">
                                                <span class="header__notify-name">Sữa rửa mặt LAROCHE-POSAY phù hợp với mọi loại da dầu, da khô, da hỗn hợp</span>
                                                <span class="header__notify-description">SALE 70% cho các khách hàng tham gia đặt hàng sản phẩm từ ngày 17/07-22/08/2022 (giá chỉ còn 500.000 vnd)</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notify-item">
                                        <a href="" class="header__notify-link">
                                            <img src="./assets/img/innisfree.jpg" alt="" class="header__notify-img">
                                            <div class="header__notify-info">
                                                <span class="header__notify-name">Kem chống nắng Innisfree Tone up no Sebum</span>
                                                <span class="header__notify-description">Sản phẩm được giới thiệu ngay trong tháng 8 này, nhanh tay đặt gạch ngay thôi!!!   </span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <div class="header__notify-footer">
                                    <a class="header__notify-footer--btn" href="">
                                        Xem tất cả
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="header__navbar-item">
                            <a href="/help.html" class="header__navbar-item-link">
                                <i class="fa-solid fa-circle-info"></i>Trợ giúp</a>
                        </li>
                        <!-- <li class="header__navbar-item header__navbar-item--strong header__navbar-item--separate">Đăng kí</li>
                        <li class="header__navbar-item header__navbar-item--strong">Đăng nhập</li> -->
                        <li class="header__navbar-item header__navbar-user">
                            <img src="./assets/img/admin.jpg" alt="" class="header__navbar-user-img">
                            <span class="header__navbar-user-name">Vũ Tuấn Hải</span>
                            <ul class="header__navbar-user-menu">
                                <li class="header__navbar-user-item">
                                    
                                    <a href=""><i class="header__navbar-user-item-icon fa-solid fa-circle-user"></i>Tài khoản của tôi</a>
                                </li>
                                <li class="header__navbar-user-item">
                                    <a href=""><i class="header__navbar-user-item-icon fa-solid fa-box"></i></i>Đơn mua</a>
                                </li>
                                <li class="header__navbar-user-item">
                                    <a href=""><i class="header__navbar-user-item-icon fa-solid fa-arrow-right-to-bracket"></i>Đăng xuất</a>
                                </li>
                            </ul>
                        </li>
                    
                    </ul>
                    </nav>
                
                    <div class="header__with-search">
                        <div class="header__logo">
                          <a href="index.php?quanly=danhmucsanpham&id=1" class="header__logo-link">
                            <img class="header__logo-img" src="./assets/img/logo4.png" alt="">
                          </a>
                         
                        </div>
                        <div class="header__search">
                            <div class="header__search-input-wrap">
                                <input type="text" class="header__search-input" placeholder="Tìm sản phẩm">
                                <!--search history-->
                                <div class="header__search-history">
                                    <span class="header__search-history-heading">Lịch sử tìm kiếm</span>
                                    <ul class="header__search-history-list">
                                        <li class="header__search-history-item">
                                         <a href="https://shopee.vn/" class="">kem dưỡng da</a>
                                        </li>
                                        <li class="header__search-history-item">
                                            <a href="" class="">kem dưỡng da</a>
                                        </li>
                                        <li class="header__search-history-item">
                                            <a href="" class="">kem dưỡng da</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="header__search-select">
                                <span class="header__search-select-label">Trong shop </span>
                                <i class="header__search-select-icon fa-solid fa-angle-down"></i>
                               
                                <ul class="header__search-option">
                                    <li class="header__search-option-item header__search-option-item--active">
                                        <span class="">Trong shop</span>
                                        <i class="header__search-select-icon fa-solid fa-check"></i>
                                    </li>
                                    <li class="header__search-option-item header__search-option-item--active">
                                        <span class="">Ngoài shop</span>
                                        <i class="header__search-select-icon fa-solid fa-check"></i>
                                    </li>
                                    <li class="header__search-option-item">
                                        <span class="">Future Mall</span>
                                        <i class="header__search-select-icon fa-solid fa-check"></i>
                                    </li>
                                    
                                </ul>
    
                            </div>
                            <button class="header__search-btn">
                                <i class="header__search-btn-icon fa-solid fa-magnifying-glass"></i>
                            </button>
                        </div>
                        <!-- cart layout -->
                        <div class="header__cart">
                            <div class="header__cart-wrap">
                                 <i class="header__cart-icon fa-solid fa-cart-shopping"></i> 
                                 <span class="header__cart-notice">3</span>
                                 <!-- header__cart-list--no-cart  -->
                            <div class="header__cart-list">
                                <img src="./assets/img/logocart-removebg-preview.png" alt="" class="header__cart-list--no-cart-img">
                                <div class="header__cart-list--no-cart-text">
                                    <span>Chưa có sản phẩm</span>
                                </div>
                                <div class="header__cart-heading">
                                 <span class="header__cart-heading-text">Sản phẩm đã thêm</span>   
                                </div>
                                <ul class="header__cart-list-item">
                                    <li class="header__cart-item">
                                        <img src="./assets/img/centaphil.jpeg" alt="" class="header__cart-img">
                                        <div class="header__cart-item-info">
                                            <div class="header__cart-item-head">
                                                <h3 class="header__cart-item-name">sữa rửa mặt centaphil</h3>
                                                <div class="header__cart-item-price-wrap">
                                                <span class="header__cart-item-price">123.000</span>
                                                <span class="header__cart-item-price-unit">đ</span>
                                                <span class="header__cart-item-multiply">x</span>
                                                <span class="header__cart-item-qnt">1</span>    
                                                </div>
                                                
                                            </div>
                                            <div class="header__cart-item-body">
                                                 <span class="header__cart-item-description">Phân loại bạc</span>
                                                 <span class="header__cart-item-remove">Xóa</span>
                                                
                                             </div>
                                        </div>
                                    </li>
                                    <li class="header__cart-item">
                                        <img src="./assets/img/laroche-posay.jpg" alt="" class="header__cart-img">
                                        <div class="header__cart-item-info">
                                            <div class="header__cart-item-head">
                                                <h3 class="header__cart-item-name">sữa rửa mặt centaphil</h3>
                                                <div class="header__cart-item-price-wrap">
                                                <span class="header__cart-item-price">123.000</span>
                                                <span class="header__cart-item-price-unit">đ</span>
                                                <span class="header__cart-item-multiply">x</span>
                                                <span class="header__cart-item-qnt">1</span>    
                                                </div>
                                                
                                            </div>
                                            <div class="header__cart-item-body">
                                                <span class="header__cart-item-description">Phân loại: bạc</span>
                                                <span class="header__cart-item-remove">Xóa</span>
                                           
                                            </div>
                                        </div>
                                    </li>
                                    <li class="header__cart-item">
                                        <img src="./assets/img/laroche-posay.jpg" alt="" class="header__cart-img">
                                        <div class="header__cart-item-info">
                                            <div class="header__cart-item-head">
                                                <h3 class="header__cart-item-name">sữa rửa mặt centaphil</h3>
                                                <div class="header__cart-item-price-wrap">
                                                <span class="header__cart-item-price">123.000</span>
                                                <span class="header__cart-item-price-unit">đ</span>
                                                <span class="header__cart-item-multiply">x</span>
                                                <span class="header__cart-item-qnt">1</span>    
                                                </div>
                                                
                                            </div>
                                            <div class="header__cart-item-body">
                                                <span class="header__cart-item-description">Phân loại: bạc</span>
                                                <span class="header__cart-item-remove">Xóa</span>
                                           
                                            </div>
                                        </div>
                                    </li>
                                    <li class="header__cart-item">
                                        <li class="header__cart-item">
                                            <img src="./assets/img/centaphil.jpeg" alt="" class="header__cart-img">
                                            <div class="header__cart-item-info">
                                                <div class="header__cart-item-head">
                                                    <h3 class="header__cart-item-name">sữa rửa mặt centaphil</h3>
                                                    <div class="header__cart-item-price-wrap">
                                                    <span class="header__cart-item-price">123.000</span>
                                                    <span class="header__cart-item-price-unit">đ</span>
                                                    <span class="header__cart-item-multiply">x</span>
                                                    <span class="header__cart-item-qnt">1</span>    
                                                    </div>
                                                    
                                                </div>
                                                <div class="header__cart-item-body">
                                                     <span class="header__cart-item-description">Phân loại bạc</span>
                                                     <span class="header__cart-item-remove">Xóa</span>
                                                    
                                                 </div>
                                            </div>
                                        </li>
                                        <li class="header__cart-item">
                                            <img src="./assets/img/laroche-posay.jpg" alt="" class="header__cart-img">
                                            <div class="header__cart-item-info">
                                                <div class="header__cart-item-head">
                                                    <h3 class="header__cart-item-name">sữa rửa mặt centaphil</h3>
                                                    <div class="header__cart-item-price-wrap">
                                                    <span class="header__cart-item-price">123.000</span>
                                                    <span class="header__cart-item-price-unit">đ</span>
                                                    <span class="header__cart-item-multiply">x</span>
                                                    <span class="header__cart-item-qnt">1</span>    
                                                    </div>
                                                    
                                                </div>
                                                <div class="header__cart-item-body">
                                                    <span class="header__cart-item-description">Phân loại: bạc</span>
                                                    <span class="header__cart-item-remove">Xóa</span>
                                               
                                                </div>
                                            </div>
                                        </li>
                                        <li class="header__cart-item">
                                            <img src="./assets/img/laroche-posay.jpg" alt="" class="header__cart-img">
                                            <div class="header__cart-item-info">
                                                <div class="header__cart-item-head">
                                                    <h3 class="header__cart-item-name">sữa rửa mặt centaphil sữa rửa mặt centaphilsữa rửa mặt centaphilsữa rửa mặt centaphilsữa rửa mặt cen</h3>
                                                    <div class="header__cart-item-price-wrap">
                                                    <span class="header__cart-item-price">123.000</span>
                                                    <span class="header__cart-item-price-unit">đ</span>
                                                    <span class="header__cart-item-multiply">x</span>
                                                    <span class="header__cart-item-qnt">1</span>    
                                                    </div>
                                                    
                                                </div>
                                                <div class="header__cart-item-body">
                                                    <span class="header__cart-item-description">Phân loại: bạc</span>
                                                    <span class="header__cart-item-remove">Xóa</span>
                                               
                                                </div>
                                            </div>
                                        </li>
                                        <li class="header__cart-item">
                                        <img src="./assets/img/laroche-posay.jpg" alt="" class="header__cart-img">
                                        <div class="header__cart-item-info">
                                            <div class="header__cart-item-head">
                                                <h3 class="header__cart-item-name">sữa rửa mặt centaphil</h3>
                                                <div class="header__cart-item-price-wrap">
                                                <span class="header__cart-item-price">123.000</span>
                                                <span class="header__cart-item-price-unit">đ</span>
                                                <span class="header__cart-item-multiply">x</span>
                                                <span class="header__cart-item-qnt">1</span>    
                                                </div>
                                                
                                            </div>
                                            <div class="header__cart-item-body">
                                                <span class="header__cart-item-description">Phân loại: bạc</span>
                                                <span class="header__cart-item-remove">Xóa</span>
                                           
                                            </div>
                                        </div>
                                    </li>
                                    
                                </ul>
                                <button class="header__cart-view-cart btn btn--primary">Xen giỏ hàng</button>
                            </div>
                            </div>
                            
    
                        </div>
                    </div>
                </div>
               
    
    
            </header>
            
            <div class="app__container">
                <div class="baner"  style="background-image: url(./assets/img/emoji2.jpg);">
                  <div class="baner-label"><h1>Chào bạn, Future có thể giúp gì cho bạn?</h1>
                 <div class="header__search">
                                            <div class="header__search-input-wrap">
                                                <input type="text" class="header__search-input" placeholder="Nhập từ khóa hoặc nội dung cần tìm">
                                                <!--search history-->
                                                <div class="header__search-history">
                                                    <span class="header__search-history-heading">Lịch sử tìm kiếm</span>
                                                    <ul class="header__search-history-list">
                                                        <li class="header__search-history-item">
                                                        <a href="https://shopee.vn/" class="">cách đổi mật khẩu</a>
                                                        </li>
                                                        <li class="header__search-history-item">
                                                            <a href="" class="">Đổi tên tài khoản</a>
                                                        </li>
                                                        <li class="header__search-history-item">
                                                            <a href="" class="">Chính sách bảo mật</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="header__search-select">
                                            </div>
                                            <button class="header__search-btn">
                                                <i class="header__search-btn-icon fa-solid fa-magnifying-glass"></i>
                                            </button>
                                        </div>
                </div>  
                   
                </div>
                <div class="content">
                    <div class="grid">
                       
                        <ul> <h1>Những câu hỏi thường gặp</h1>
                            <li class="question-item"><a class="question_item-link" href="#">[Thành viên mới] Quy trình trả hàng hoàn tiền của Future</a></li>
                            <li class="question-item"><a class="question_item-link" href="#">[Thành viên mới] Cách theo dõi tình trạng vận chuyển của đơn hàng?</a></li>
                            <li class="question-item"><a class="question_item-link" href="#">[Thành viên mới] Làm sao để mua hàng / đặt hàng trên ứng dụng Future?</a></li>
                            <li class="question-item"><a class="question_item-link" href="#">[Đơn hàng] Tôi phải làm gì nếu đơn hàng bị cập nhật sai trạng thái/chưa nhận được hàng?</a></li>
                            <li class="question-item"><a class="question_item-link" href="#">[Lỗi] Tại sao tài khoản Future của tôi bị khóa/bị giới hạn?</a></li>
                            <li class="question-item"><a class="question_item-link" href="#">[Tài khoản Future] Tại sao tôi không nhận được Mã xác thực OTP?</a></li>
                            <li class="question-item"><a class="question_item-link" href="#">[Thông tin vận chuyển] Làm sao để liên hệ Đơn vị vận chuyển/tra cứu thông tin vận chuyển/hối giao hàng?</a></li>
                            <li class="question-item"><a class="question_item-link" href="#">[Cảnh báo lừa đảo] Mua sắm an toàn cùng Future</a></li>
                            <li class="question-item"><a class="question_item-link" href="#">[Thành viên mới] Điều kiện Trả hàng/Hoàn tiền của Future</a></li>
                            <li class="question-item"><a class="question_item-link" href="#">[Cảnh báo lừa đảo] Nên và không nên làm để tránh nhận phải đơn hàng ảo/giả mạo</a></li>
                        </ul>

                        
                    </div>
                </div>
               <div class="contact">
                        <div class="comtact-item">
                            <h2>Liên hệ với Shop để được hỗ trợ</h2>
                            <div class="info-shop">
                               <div class="hotline">
                                <i class="iconhelp fa-solid fa-mobile-screen"></i>
                                <span>0387430555</span>
                               </div>
                               <div class="email">
                                <a href="#" class="email-active">
                                     <i class="iconhelp fa-regular fa-envelope"></i>
                               <div class="email-label">
                                        <h4>Email</h4>
                                        <span>Gửi câu hỏi của bạn cho shop</span>
                               </div>
                                </a>
                               
                               </div>
                            </div>
                        </div>
                </div>
            </div>
    
            <footer class="footer">
                <div class="grid">
                    <div class="grid__row">
                        <div class="gird__column-2-4">
                            <h3 class="footer__heading">CHĂM SÓC KHÁCH HÀNG</h3>
                            <ul class="footer-list">
                                <li class="footer-item">
                                    <a href="" class="footer-item-link">Trung tâm trợ giúp</a>
                                </li>
                                <li class="footer-item">
                                    <a href="" class="footer-item-link">TH shop Mall</a>
                                </li>
                                <li class="footer-item">
                                    <a href="" class="footer-item-link">Hướng dẫn mua hàng</a>
                                </li>
                                
                            </ul>
                        </div>
                        <div class="gird__column-2-4">
                            <h3 class="footer__heading">GIỚI THIỆU</h3>
                            <ul class="footer-list">
                                <li class="footer-item">
                                    <a href="" class="footer-item-link">Tuyển dụng</a>
                                </li>
                                <li class="footer-item">
                                    <a href="" class="footer-item-link">Điều khoản</a>
                                </li>
                                <li class="footer-item">
                                    <a href="" class="footer-item-link">Chính sách</a>
                                </li>
                                
                            </ul>
                        </div>
                        <div class="gird__column-2-4">
                            <h3 class="footer__heading">THEO DÕI CH-SHOP TẠI</h3>
                            <ul class="footer-list">
                                <li class="footer-item">
                                    <a href="" class="footer-item-link">
                                        <i class="footer-item-icon fa-brands fa-facebook"></i>
                                        Facebook</a>
                                </li>
                                <li class="footer-item">
                                    <a href="" class="footer-item-link">
                                        <i class="footer-item-icon fa-brands fa-tiktok"></i>
                                        Tik tok
                                    </a>
                                </li>
                                <li class="footer-item">
                                    <a href="" class="footer-item-link">
                                        <i class="footer-item-icon fa-brands fa-instagram"></i>
                                       instagram
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                        <div class="gird__column-2-4">
                            <h3 class="footer__heading">DANH MỤC</h3>
                            <ul class="footer-list">
                                <li class="footer-item">
                                    <a href="" class="footer-item-link">Thời trang</a>
                                </li>
                                <li class="footer-item">
                                    <a href="" class="footer-item-link">Mỹ phẩm</a>
                                </li>
                                <li class="footer-item">
                                    <a href="" class="footer-item-link">Chăm sóc sức khỏe</a>
                                </li>
                                <li class="footer-item">
                                    <a href="" class="footer-item-link">Công nghệ</a>
                                </li>
                                
                            </ul>
                        </div>
                        <div class="gird__column-2-4">
                            <h3 class="footer__heading">TẢI TH-SHOP TRÊN CỬA HÀNG ỨNG DỤNG</h3>
                            <div class="footer__download">
                                <a href="" class="footer__download-app-link"><img src="./assets/img/d91264e165ed6facc6178994d5afae79.png" alt="download QR" class="footer__dowloadr-QR"></a>
                                <div class="footer__download-apps">
                               <a href="" class="footer__download-app-link"><img src="./assets/img/dowloadapp.png" alt="Google play" class="footer__download-app-img"></a> 
                               <a href="" class="footer__download-app-link"><img src="./assets/img/dowloadchplay.png" alt="app store" class="footer__download-app-img"></a> 
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
                 <div class="footer-2">
                    <div class="grid">
                        <p class="footer__text-heading">Công ty TNHH TH-SHOP</p>
                        <p class="footer__text-address">Địa chỉ: Tầng 4-5-6, Tòa nhà Capital Place, số 29 đường Liễu Giai, Phường Ngọc Khánh, Quận Ba Đình, Thành phố Hà Nội, Việt Nam. Tổng đài hỗ trợ: 19001221 - Email: cskh@hotro.TH-SHOP.vn</p>
                        <p class="footer__text-hotline">Chịu Trách Nhiệm Quản Lý Nội Dung: Vũ Tuấn Hải - Điện thoại liên hệ: 024 73081221 (ext 4678)</p>
                        <p class="footer__text-end">© 2022 - Bản quyền thuộc về Công ty TNHH TH-SHOP</p>
                    </div>
                 </div>
            </footer>
            <div class="message">
                <div class="message-user">
                    <i class="message-icon fa-solid fa-message"></i>
                   <span class="message-label">Tin nhắn</span> 
                   <div class="message-number">100</div>
                </div> 
                <div class="message-page">
                   <div class="message-list">
                        <div class="message-list-heading">
                            <div class="message-list-heading-label">
                                <i class="message-icon fa-solid fa-message"></i>
                            Chat 
                         <div class="message-list-number">(15)</div>
                        </div> 
                            </div>
                            
                        <ul class="message-list-item">
                            <!-- message item -->
                            <li class="message-item">
                                <a href="" class="message-item-link">
                                <img src="./assets/img/Cetaphil_logo_logotype.png" alt="" class="message-item-img">
                                <div class="message-item-info">
                                    <div class="message-item-head">
                                        <div class="message-item-name">Centaphil</div>
                                        <div class="message-item-note">mall</div>
                                        <div class="message-item-date">16/07</div>
                                    </div>
                                    <div class="message-item-chat">
                                       <div class="message-item-chat-content">xin chào! hiện tại bên em đang có các chương trình giảm giá cho quý khách đăng kí vào ngày</div>      
                                        <div class="message-item-chat-remove">
                                            <i class="message-icon fa-solid fa-trash"></i>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </li>
                            <li class="message-item">
                                <a href="" class="message-item-link">
                                <img src="./assets/img/Cetaphil_logo_logotype.png" alt="" class="message-item-img">
                                <div class="message-item-info">
                                    <div class="message-item-head">
                                        <div class="message-item-name">Centaphil</div>
                                        <div class="message-item-note">mall</div>
                                        <div class="message-item-date">16/07</div>
                                    </div>
                                    <div class="message-item-chat">
                                       <div class="message-item-chat-content">xin chào! hiện tại bên em đang có các chương trình giảm giá cho quý khách đăng kí vào ngày</div>      
                                        <div class="message-item-chat-remove">
                                            <i class="message-icon fa-solid fa-trash"></i>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </li>
                            <li class="message-item">
                                <a href="" class="message-item-link">
                                <img src="./assets/img/Cetaphil_logo_logotype.png" alt="" class="message-item-img">
                                <div class="message-item-info">
                                    <div class="message-item-head">
                                        <div class="message-item-name">Centaphil</div>
                                        <div class="message-item-note">mall</div>
                                        <div class="message-item-date">16/07</div>
                                    </div>
                                    <div class="message-item-chat">
                                       <div class="message-item-chat-content">xin chào! hiện tại bên em đang có các chương trình giảm giá cho quý khách đăng kí vào ngày</div>      
                                        <div class="message-item-chat-remove">
                                            <i class="message-icon fa-solid fa-trash"></i>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </li>
                            <li class="message-item">
                                <a href="" class="message-item-link">
                                <img src="./assets/img/Cetaphil_logo_logotype.png" alt="" class="message-item-img">
                                <div class="message-item-info">
                                    <div class="message-item-head">
                                        <div class="message-item-name">Centaphil</div>
                                        <div class="message-item-note">mall</div>
                                        <div class="message-item-date">16/07</div>
                                    </div>
                                    <div class="message-item-chat">
                                       <div class="message-item-chat-content">xin chào! hiện tại bên em đang có các chương trình giảm giá cho quý khách đăng kí vào ngày</div>      
                                        <div class="message-item-chat-remove">
                                            <i class="message-icon fa-solid fa-trash"></i>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </li>
                            <li class="message-item">
                                <a href="" class="message-item-link">
                                <img src="./assets/img/Cetaphil_logo_logotype.png" alt="" class="message-item-img">
                                <div class="message-item-info">
                                    <div class="message-item-head">
                                        <div class="message-item-name">Centaphil</div>
                                        <div class="message-item-note">mall</div>
                                        <div class="message-item-date">16/07</div>
                                    </div>
                                    <div class="message-item-chat">
                                       <div class="message-item-chat-content">xin chào! hiện tại bên em đang có các chương trình giảm giá cho quý khách đăng kí vào ngày</div>      
                                        <div class="message-item-chat-remove">
                                            <i class="message-icon fa-solid fa-trash"></i>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </li>
                            <li class="message-item">
                                <a href="" class="message-item-link">
                                <img src="./assets/img/Cetaphil_logo_logotype.png" alt="" class="message-item-img">
                                <div class="message-item-info">
                                    <div class="message-item-head">
                                        <div class="message-item-name">Centaphil</div>
                                        <div class="message-item-note">mall</div>
                                        <div class="message-item-date">16/07</div>
                                    </div>
                                    <div class="message-item-chat">
                                       <div class="message-item-chat-content">xin chào! hiện tại bên em đang có các chương trình giảm giá cho quý khách đăng kí vào ngày</div>      
                                        <div class="message-item-chat-remove">
                                            <i class="message-icon fa-solid fa-trash"></i>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </li>
                            <li class="message-item">
                                <a href="" class="message-item-link">
                                <img src="./assets/img/Cetaphil_logo_logotype.png" alt="" class="message-item-img">
                                <div class="message-item-info">
                                    <div class="message-item-head">
                                        <div class="message-item-name">Centaphil</div>
                                        <div class="message-item-note">mall</div>
                                        <div class="message-item-date">16/07</div>
                                    </div>
                                    <div class="message-item-chat">
                                       <div class="message-item-chat-content">xin chào! hiện tại bên em đang có các chương trình giảm giá cho quý khách đăng kí vào ngày</div>      
                                        <div class="message-item-chat-remove">
                                            <i class="message-icon fa-solid fa-trash"></i>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </li>
                            <li class="message-item">
                                <a href="" class="message-item-link">
                                <img src="./assets/img/Cetaphil_logo_logotype.png" alt="" class="message-item-img">
                                <div class="message-item-info">
                                    <div class="message-item-head">
                                        <div class="message-item-name">Centaphil</div>
                                        <div class="message-item-note">mall</div>
                                        <div class="message-item-date">16/07</div>
                                    </div>
                                    <div class="message-item-chat">
                                       <div class="message-item-chat-content">xin chào! hiện tại bên em đang có các chương trình giảm giá cho quý khách đăng kí vào ngày</div>      
                                        <div class="message-item-chat-remove">
                                            <i class="message-icon fa-solid fa-trash"></i>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </li>
                            <li class="message-item">
                                <a href="" class="message-item-link">
                                <img src="./assets/img/Cetaphil_logo_logotype.png" alt="" class="message-item-img">
                                <div class="message-item-info">
                                    <div class="message-item-head">
                                        <div class="message-item-name">Centaphil</div>
                                        <div class="message-item-note">mall</div>
                                        <div class="message-item-date">16/07</div>
                                    </div>
                                    <div class="message-item-chat">
                                       <div class="message-item-chat-content">xin chào! hiện tại bên em đang có các chương trình giảm giá cho quý khách đăng kí vào ngày</div>      
                                        <div class="message-item-chat-remove">
                                            <i class="message-icon fa-solid fa-trash"></i>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </li>
                            <li class="message-item">
                                <a href="" class="message-item-link">
                                <img src="./assets/img/Cetaphil_logo_logotype.png" alt="" class="message-item-img">
                                <div class="message-item-info">
                                    <div class="message-item-head">
                                        <div class="message-item-name">Centaphil</div>
                                        <div class="message-item-note">mall</div>
                                        <div class="message-item-date">16/07</div>
                                    </div>
                                    <div class="message-item-chat">
                                       <div class="message-item-chat-content">xin chào! hiện tại bên em đang có các chương trình giảm giá cho quý khách đăng kí vào ngày</div>      
                                        <div class="message-item-chat-remove">
                                            <i class="message-icon fa-solid fa-trash"></i>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </li>
                            
                        
                            
                        </ul>
                        
                    </div>
                   <div class="message-box">
                     <div class="message-heading">
                       <div class="message-heading-name">Coolmate</div>
                       <a href="#" class="message-heading-remove"><i class="message-icon fa-solid fa-x"></i></a>
                    </div>
                    <div class="message-roomchat">
                        <div class="message-roomchat-header"></div>
                        <div class="message-sender">
                            <div class="message-sender-wrap">
                                <img src="./assets/img/Cetaphil_logo_logotype.png" alt="" class="message-avatar">
                                <div class="message-sender-content">Phia U20 Nhật Bản cũng đang chuẩn bị cho vòng loại U20 châu Á 2023 nên HLV Koichi Togashi đã triệu tập những cầu thủ gần như tốt nhất trong lứa tuổi để đối đầu U20 Việt Nam. Trong số 25 cầu thủ của U20 Nhật Bản được triệu tập có cả một số gương mặt đã ra sân ở J-League 1 mùa giải 2022.</div>
                            </div>
                        </div>
                        <div class="message-receiver">
                            <div class="message-receiver-wrap">
                                <div class="message-receiver-content">Phia U20 Nhật Bản cũng đang chuẩn bị cho vòng loại U20 châu Á 2023 nên HLV Koichi Togashi đã triệu tập những cầu thủ gần như tốt nhất trong lứa tuổi để đối đầu U20 Việt Nam. Trong số 25 cầu thủ của U20 Nhật Bản được triệu tập có cả một số gương mặt đã ra sân ở J-League 1 mùa giải 2022.</div>
                             <img src="./assets/img/avatar__user.jpg" alt="" class="message-avatar">
                            </div>
                        </div>
                        <div class="message-receiver">
                            <div class="message-receiver-wrap">
                                <div class="message-receiver-content">Nhiều khi chỉ có thể</div>
                             <img src="./assets/img/avatar__user.jpg" alt="" class="message-avatar">
                            </div>
                        </div>
                        <div class="message-receiver">
                            <div class="message-receiver-wrap">
                                <div class="message-receiver-content">Phia U20 Nhật Bản cũng</div>
                             <img src="./assets/img/avatar__user.jpg" alt="" class="message-avatar">
                            </div>
                        </div>
                        <div class="message-sender">
                            <div class="message-sender-wrap">
                                <img src="./assets/img/Cetaphil_logo_logotype.png" alt="" class="message-avatar">
                                <div class="message-sender-content">Phia U20 Nhật Bản </div>
                                
                            </div>
                        </div>
                        <div class="message-sender">
                            <div class="message-sender-wrap">
                                <img src="./assets/img/Cetaphil_logo_logotype.png" alt="" class="message-avatar">
                                <div class="message-sender-content">Phia U20 Nhật Bản </div>
                                
                            </div>
                        </div>
                        <div class="message-sender">
                            <div class="message-sender-wrap">
                                <img src="./assets/img/Cetaphil_logo_logotype.png" alt="" class="message-avatar">
                                <div class="message-sender-content">Phia U20 Nhật Bản </div>
                                
                            </div>
                        </div>
                        <div class="message-sender">
                            <div class="message-sender-wrap">
                                <img src="./assets/img/Cetaphil_logo_logotype.png" alt="" class="message-avatar">
                                <div class="message-sender-content">Phia U20 Nhật Bản </div>
                                
                            </div>
                        </div>
    
                         </div>  
                         <div class="message-chat">
                                <i class="message-icon-add fa-solid fa-plus"></i>
                                <div class="message-chat-content">
                                    <textarea name="message-fileds__autosize" class="message-chat-text" id="my-text" cols="30" rows="1"></textarea>
                                    <i class="message-icon-emoji fa-regular fa-face-grin-beam"></i>
                                </div>
                                <i class="message-icon-send fa-regular fa-paper-plane"></i>
                            
                         </div>
                         <script>
                            const myText = document.getElementById("my-text");
                            myText.style.cssText = `height: ${myText.scrollHeight}px; overflow-y: hidden`;
                            myText.addEventListener("input", function(){
                                this.style.height = "auto";
                                this.style.height = `${this.scrollHeight}px`;
                            })
                         </script>
                   
                </div>
            </div>
            
        </div>
        <!--Modal layout-------------------------------------------------->
        <!-- <div class="modal">
            <div class="modal__overlay"></div>
            <div class="modal__body">
                <div class="modal__inner"> -->
                    <!----register form-->   
                    <!-- <div class="auth-form">
                        <div class="auth-form__container">
                            
                            <div class="auth-form__header"> 
                                <h3 class="auth-from__heading">Đăng ký</h3>
                                <span class="auth-from__switch-btn">Đăng Nhập</span>
    
                            </div>
    
    
    
                            <div class="auth-form__form">
                                <div class="auth-form__group">
                                    <input type="text" class="auth-form__input" placeholder="Nhập email">
                                </div>
                                <div class="auth-form__group">
                                    <input type="password" class="auth-form__input" placeholder="Nhập mật khẩu">
                                </div>
                                <div class="auth-form__group">
                                    <input type="password" class="auth-form__input" placeholder="Nhập lại mật khẩu">
                                </div>
                            </div>
                            
                            <div class="auth-form__aside">
                                <span class="auth-form__policy-text">
                                    Bằng việc đăng kí, bạn đã đồng ý với Tao Bao về
                                </span>
                                <a href="" class="auth-form__policy-link"> Điều khoản dịch vụ</a>
                                <span>&</span>
                                <a href="" class="auth-form__policy-link">Chính sách bảo mật</a>
                            </div>
                        
                          <div class="auth-form__controls">
                            <button class="btn auth-form__control--back">TRỞ LẠI</button>
                            <button class="btn btn--primary">Đăng kí</button>
                          </div>
                        </div>
                        <div class="auth-form__socials">
                            <a href="" class="btn auth-form__socials--facebook btn--size-S btn--with-icon">
                                <i class="auth-form__socials-icon fa-brands fa-facebook-square"></i>
                              <span class="auth-form__socials--title">Kết nối với Facebook</span> 
                            </a>
                            <a href="" class="btn auth-form__socials--google btn--size-S btn--with-icon">
                                <i class="auth-form__socials-icon fa-brands fa-google"></i>
                                <span class="auth-form__socials--title">Kết nối với Google</span> 
                            </a>
                        </div>
                    </div> -->
                    
                    
                    <!----login form-->   
                    <!-- <div class="auth-form">
                        <div class="auth-form__container">
                            
                            <div class="auth-form__header"> 
                                <h3 class="auth-from__heading">Đăng nhập</h3>
                                <span class="auth-from__switch-btn">Đăng ký</span>
    
                            </div>
    
    
    
                            <div class="auth-form__form">
                                <div class="auth-form__group">
                                    <input type="text" class="auth-form__input" placeholder="Nhập email">
                                </div>
                                <div class="auth-form__group">
                                    <input type="password" class="auth-form__input" placeholder="Nhập mật khẩu">
                                </div>
                                
                            </div>
                            
                            <div class="auth-form__aside">
                                <div class="auth-form__help">
                                    <a href="" class="auth-form__help-link auth-form__help-link-forgot">Quên mật khẩu</a>
                                    <span class="auth-form__help-separate"></span>
                                    <a href="" class="auth-form__help-link auth-form__help-link-help"> Cần trợ giúp?</a>
                                </div>
                            </div>
                        
                          <div class="auth-form__controls">
                            <button class="btn auth-form__control--back">TRỞ LẠI</button>
                            <button class="btn btn--primary">Đăng nhập</button>
                          </div>
                        </div>
                        <div class="auth-form__socials">
                            <a href="" class="btn auth-form__socials--facebook btn--size-S btn--with-icon">
                                <i class="auth-form__socials-icon fa-brands fa-facebook-square"></i>
                              <span class="auth-form__socials--title">Kết nối với Facebook</span> 
                            </a>
                            <a href="" class="btn auth-form__socials--google btn--size-S btn--with-icon">
                                <i class="auth-form__socials-icon fa-brands fa-google"></i>
                                <span class="auth-form__socials--title">Kết nối với Google</span> 
                            </a>
                        </div>
                    </div>
                </div>
            </div> 
        </div> -->
    
    </body>
    </html>