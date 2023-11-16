<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Trang chủ</title>
   <link rel="stylesheet" href="public/bootstrap/css/bootstrap.min.css">
   <link rel="stylesheet" href="public/fontawesome/css/all.min.css">
   <link rel="stylesheet" href="public/css/frontend.css">
   <script src="public/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>

<body>
   <section class="hdl-header">
      <div class="container">
         <div class="row">
            <div class="col-6 col-sm-6 col-md-2 py-1">
               <a href="index.html">
                  <img src="public/images/logo.png" class="img-fluid" alt="Logo">
               </a>
            </div>
            <div class="col-12 col-sm-9 d-none d-md-block col-md-5 py-3">
               <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Nhập nội dung tìm kiếm"
                     aria-label="Recipient's username" aria-describedby="basic-addon2">
                  <span class="input-group-text bg-main" id="basic-addon2">
                     <i class="fa fa-search" aria-hidden="true"></i>
                  </span>
               </div>
            </div>
            <div class="col-12 col-sm-12 d-none d-md-block col-md-4 text-center py-2">
               <div class="call-login--register border-bottom">
                  <ul class="nav nav-fills py-0 my-0">
                     <li class="nav-item">
                        <a class="nav-link" href="login.html">
                           <i class="fa fa-phone-square" aria-hidden="true"></i>
                           0987654321
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="login.html">Đăng nhập</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="register.html">Đăng ký</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="profile.html">Hồ Diên Lợi</a>
                     </li>
                  </ul>
               </div>
               <div class="fs-6 py-2">
                  ĐỔI TRẢ HÀNG HOẶC HOÀN TIỀN <span class="text-main">TRONG 3 NGÀY</span>
               </div>
            </div>
            <div class="col-6 col-sm-6 col-md-1 text-end py-4 py-md-2">
               <a href="cart.html">
                  <div class="box-cart float-end">
                     <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                     <span>1</span>
                  </div>
               </a>
            </div>
         </div>
      </div>
   </section>
   <section class="hdl-mainmenu bg-main">
      <div class="container">
         <div class="row">
            <div class="col-12 d-none d-md-block col-md-2 d-none d-md-block">
               <div class="dropdown list-category">
                  <strong class="dropdown-toggle w-100" data-bs-toggle="dropdown" aria-expanded="false">
                     Danh mục sản phẩm
                  </strong>
                  <ul class="dropdown-menu w-100">
                     <li><a class="dropdown-item" href="product_category.html">Thời trang nam</a></li>
                     <li><a class="dropdown-item" href="product_category.html">Thời trang nữ</a></li>
                     <li><a class="dropdown-item" href="product_category.html">Thời trang trẻ em</a></li>
                  </ul>
               </div>
            </div>
            <div class="col-12 col-md-9">
               <nav class="navbar navbar-expand-lg bg-main">
                  <div class="container-fluid">
                     <a class="navbar-brand d-block d-sm-none text-white" href="index.html">DIENLOISHOP</a>
                     <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                     </button>
                     <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                           <li class="nav-item">
                              <a class="nav-link text-white" aria-current="page" href="index.html">Trang chủ</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link text-white" href="post_page.html">Giới thiệu</a>
                           </li>
                           <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                                 data-bs-toggle="dropdown" aria-expanded="false">
                                 Thời trang nam
                              </a>
                              <ul class="dropdown-menu">
                                 <li><a class="dropdown-item text-main" href="product_category.html">Quần jean nam</a>
                                 </li>
                                 <li><a class="dropdown-item text-main" href="product_category.html">Áo thun nam </a>
                                 </li>
                                 <li><a class="dropdown-item text-main" href="product_category.html">Sơ mi nam</a></li>
                              </ul>
                           </li>
                           <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                                 data-bs-toggle="dropdown" aria-expanded="false">
                                 Thời trang nữ
                              </a>
                              <ul class="dropdown-menu">
                                 <li><a class="dropdown-item text-main" href="product_category.html">Váy</a></li>
                                 <li><a class="dropdown-item text-main" href="product_category.html">Đầm</a>
                                 </li>
                                 <li><a class="dropdown-item text-main" href="product_category.html">Sơ mi nữ</a></li>
                              </ul>
                           </li>
                           <li class="nav-item">
                              <a href="post_topic.html" class="nav-link text-white">Bài viết</a>
                           </li>
                           <li class="nav-item">
                              <a href="contact.html" class="nav-link text-white">Liên hệ</a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </nav>
            </div>
         </div>
      </div>
   </section>