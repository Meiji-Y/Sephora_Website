<?php

// Database configuration
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "sephoradb";

// Connect to database
$db_conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// Check for connection errors
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit;
}

// Query for getting product data
$id = $_GET['urun'];

$query = "SELECT * FROM products WHERE id = $id";

// Execute query
$result = mysqli_query($db_conn, $query);
$data = mysqli_fetch_assoc($result)
// Check for query errors
// if (!$result) {
//     echo "Error: Query failed";
//     exit;
// }

// Loop through query result and output product data
// while ($data = mysqli_fetch_assoc($result)) {
//      echo "Product ID: " . $data['id'];
// //     echo "Product Name: " . $data['name'];
// //     echo "Product Price: $" . $data['price'];
// //     echo "Photo: " . $data['filename'];
// }
?>




<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tutorial</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
    <!-- CSS -->
    <link href="/product-page/style.css" rel="stylesheet">
    <meta name="robots" content="noindex,follow" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta property="og:url" content="https://www.sephora.com.tr/" />
    <meta property="og:title" content="Sephora &equiv; Kozmetik Markaları ve
            Kozmetik &Uuml;r&uuml;nleri" />
    <meta property="og:description" content="D&uuml;nyaca &uuml;nl&uuml;
            kozmetik markalarının Makyaj, Cilt Bakım &Uuml;r&uuml;nleri ve
            Parf&uuml;mlerine Sephora kalitesiyle ve indirimli fiyatlarla sahip
            olabilirsin! Sephora ile G&uuml;zelliğin Sınır Tanımayan
            G&uuml;c&uuml;n&uuml; Keşfet!" />
    <meta property="og:image"
        content="https://www.sephora.com.tr/on/demandware.static/Sites-Sephora_TR-Site/-/default/dw4d6bacae/images/default-shop.jpg" />
    <meta property="og:type" content="website" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta property="og:site_name" content="SEPHORA" />
    <meta charset=UTF-8>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,
            maximum-scale=1.0, user-scalable=0, viewport-fit=cover">
    <meta name="format-detection" content="telephone=no">
    <title>Sephora ≡ Kozmetik Markaları ve Kozmetik Ürünleri</title>
    <link href="/on/demandware.static/Sites-Sephora_TR-Site/-/default/dw0de15d8e/images/favicon.ico"
        rel="shortcut icon" />
    <link rel="stylesheet" href="style_hw.css">
    <meta name="description" content="Dünyaca ünlü kozmetik markalarının
            Makyaj, Cilt Bakım Ürünleri ve Parfümlerine Sephora kalitesiyle ve
            indirimli fiyatlarla sahip olabilirsin! Sephora ile Güzelliğin Sınır
            Tanımayan Gücünü Keşfet!" />
    <meta name="keywords" content="Sephora" />
    <link href="/on/demandware.static/Sites-Sephora_TR-Site/-/tr_TR/v1670326862014/../fonts/itc_avant_garde_bold.woff2"
        as="font" type="font/woff2" />
    <link
        href="/on/demandware.static/Sites-Sephora_TR-Site/-/tr_TR/v1670326862014/../fonts/itc_avant_garde_medium.woff2"
        as="font" type="font/woff2" />
  </head>

  <body>
  <!-- Header starts -->
  <script src="https://kit.fontawesome.com/cf729451b1.js" crossorigin="anonymous"></script>
    <header>
        <div class="global-notification">
            <div class="container">
                <div class="row">
                    <p style="background-color: #120A8f;">
                        SEPHORA COLLECTION YENİ YIL KOLEKSİYONUNU KEŞFET!!
                    </p>
                </div>
            </div>
        </div>

        <div class="header-row">
            <div class="container">
                <div class="header-wrapper">
                    <div class="header-left">
                        <a href="anasayfa.php" > <img src="https://logos-world.net/wp-content/uploads/2022/02/Sephora-Logo.png" class="logo"> </a>
                    </div>

                    <div class="header-right">
                        <form action="" method="get" class="search">
                            <input type="text" placeholder="Ürün, marka, kategori ara..">
                        </form>
                    </div>

                    <img class="header-right-links">
                    <img href="#" class="header-services"><span class="fa-solid fa-location-dot"></span> Mağazalar
                    ve Servisler
                    <i class="fa-regular fa-user"></i>
                    <a href="login.php" class="header-account">Hesabım</a>


                    <a href="#">
                        <i class="fa-regular fa-heart"></i>
                    </a>
                    <div class="header-cart">
                        <a href="cart.php" class="header-cart-link">
                            <i class="fa-solid fa-bag-shopping"></i>
                        
                    </div>
                </div>
            </div>
        </div>

    <div class="header-center" id="sidebar">
        <nav class="navigation">
            <ul class="menu-list"> 
                        

                <li class="menu-list-item">
                    <a href="outlet.php" class="menu-link"><b>Outlet</b></a>
                    <div class="menu-dropdown-content"></div>
                </li>

                <li class="menu-list-item">
                    <a href="makyaj.php" class="menu-link">Makyaj</a>
                    <div class="menu-dropdown-content">
                        <a href="makyaj.php"><b>EN YENİ MAKYAJ</b></a><br>
                        <a href="makyaj.php"><b>ÇOK SATANLAR</b></a><br>
                        <a href="makyaj.php"><b>YÜZ</b></a>
                        <a href="makyaj.php">Fondöten</a>
                        <a href="makyaj.php">Concealer ve Kapatıcı</a>
                        <a href="makyaj.php">Makyaj Bazı ve Sabitleyici</a><br>
                        <a href="makyaj.php"><b>SETLER</b></a>
                        <a href="makyaj.php">Makyaj Seti</a>
                        <a href="makyaj.php">Ruj Seti</a>
                        <a href="makyaj.php">Göz Makyajı Seti</a>
                    </div>
                </li>

                <li class="menu-list-item">
                    <a href="parfum.php" class="menu-link">Parfüm</a>
                    <div class="menu-dropdown-content">
                        <ul>
                        <li><a href="parfum.php"><b>EN YENİ PARFÜM</b></a></li><br>
                        <li><a href="parfum.php"><b>ÇOK SATANLAR</b></a></li><br>
                        <li><a href="parfum.php"><b>PARFÜM SETLERİ</b></a></li>
                        <li><a href="parfum.php">Kadın Parfüm Seti</a></li>
                        <li><a href="parfum.php">Erkek Parfüm Seti</a></li><br>
                        <li><a href="parfum.php"><b>NOTALARINA GÖRE PARFÜMLER</b></a></li>
                        <li><a href="parfum.php">Çiçeksi Parfüm</a></li>
                        <li><a href="parfum.php">Baharatlı Parfüm</a></li>
                        <li><a href="parfum.php">Odunsu Parfüm</a><br></li>
                        <li><a href="parfum.php"><b>GOD FOR PARFUM</b></a></li>
                        <li><a href="parfum.php">Çevreye Duyarlı Parfüm</a></li>
                        </ul>
                    </div>
                </li>

                <li class="menu-list-item">
                    <a href="cilt.php" class="menu-link">Cilt Bakımı</a>
                    <div class="menu-dropdown-content">
                        <a href="cilt.php"><b>EN YENİ CİLT BAKIMI</b></a><br>
                        <a href="cilt.php"><b>ÇOK SATANLAR</b></a><br>
                        <a href="cilt.php"><b>BAKIM TÜRÜ</b></a>
                        <a href="cilt.php">Gündüz Kremi</a>
                        <a href="cilt.php">Gece Kremi</a>
                        <a href="cilt.php">Serum</a><br>
                        <a href="cilt.php"><b>YÜZ BAKIM SETLERİ</b></a><br>
                        <a href="cilt.php"><b>GOD FOR CİLT BAKIMI</b></a>
                        <a href="cilt.php">Doğal İçerikli Cilt Bakımı</a>
                        <a href="cilt.php">Çevreye Duyarlı Cilt Bakımı</a>
                    </div>
                </li>
               
                <li class="menu-list-item">
                    <a href="banyo.php" class="menu-link">Vücut ve Banyo</a>
                    <div class="menu-dropdown-content">
                        <a href="banyo.php"><b>EN YENİ VÜCUT VE BANYO</b></a><br>
                        <a href="banyo.php"><b>ÇOK SATANLAR</b></a><br>
                        <a href="banyo.php"><b>BANYO VE DUŞ SETLERİ</b></a><br>
                        <a href="banyo.php"><b>VÜCUT BAKIMI</b></a>
                        <a href="banyo.php">Nemlendirici Krem</a>
                        <a href="banyo.php">Scrub ve Peeling</a>
                        <a href="banyo.php">El Bakımı</a><br>
                        <a href="banyo.php"><b>BANYO VE DUŞ</b></a>
                        <a href="banyo.php">Vücut Sabunu ve Duş Jeli </a>
                        <a href="banyo.php">Banyo Köpükleri</a><br>
                        <a href="banyo.php"><b>AĞIZ BAKIMI</b></a>
                    </div>
                </li>

                <li class="menu-list-item">
                    <a href="sac.php" class="menu-link">Saç</a>
                    <div class="menu-dropdown-content">
                        <a href="sac.php"><b>ÇOK SATANLAR</b></a><br>
                        <a href="sac.php"><b>SAÇ BAKIMI</b></a>
                        <a href="sac.php">Şampuan</a>
                        <a href="sac.php">Saç Kremi</a>
                        <a href="sac.php">Saç Maskesi</a>
                        <a href="sac.php">El Bakımı</a><br>
                        <a href="sac.php"><b>iHTİYACA GÖRE</b></a>
                        <a href="sac.php">Dökülme Karşıtı</a>
                        <a href="sac.php">Güneş Kremi</a><br>
                        <a href="sac.php"><b>SAÇ TİPİNE GÖRE</b></a>
                        <a href="sac.php">Kıvırcık Saç Bakımı</a>
                        <a href="sac.php">Yıpranmış Saç Bakımı</a>
                        <a href="sac.php">Boyalı Saç Bakımı</a>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
   
</header>
<!-- Header finishes -->

  
    <main class="container"> 
      <!-- Left Column / Headphones Image -->
      <div class="left-column">
      <img src="./products/<?php echo $data['filename']; ?>"  alt="">
        <!-- <img data-image="blue" src="/product-page/images/blue.png" alt="">
        <img data-image="red" class="active" src="/product-page/images/red.png" alt=""> -->
      </div>


      <!-- Right Column -->
      <div class="right-column">

        <!-- Product Description -->
        <div class="product-description">
          <span><?php echo $data['category'] ?></span>
          <h1><?php echo $data['name'] ?></h1>
          
        </div>

        <!-- Product Configuration -->
        <div class="product-configuration">

          <!-- Product Color
          <div class="product-color">
            <span>Color</span>

            <div class="color-choose">
              <div>
                <input data-image="red" type="radio" id="red" name="color" value="red" checked>
                <label for="red"><span></span></label>
              </div>
              <div>
                <input data-image="blue" type="radio" id="blue" name="color" value="blue">
                <label for="blue"><span></span></label>
              </div>
              <div>
                <input data-image="black" type="radio" id="black" name="color" value="black">
                <label for="black"><span></span></label>
              </div>
            </div>

          </div> -->



          <div class="product-price">
            <span> <?php echo $data['price']?>TL</span>
            <a target= "_blank" href="cart.php?urun=<?php echo $data['id']; ?>" class="cart-btn">Sepete Ekle</a>
          </div>

          
         
         <br>
        <div class="Opportunities">
                    <div class="delivery-availability" id="delivery-availability-section">
            <p>
            <span class="pdp-reinsurance-picto lower-picto">
            <img src="https://www.sephora.com.tr/dw/image/v2/BCZG_PRD/on/demandware.static/-/Sites/default/dw5e9d5d75/reassurance/Picto free delivery.png?q=75" alt="eve teslimat görüntüsü" title="eve teslimat" id="photo-scale">
            </span>
            <span class="pdp-reinsurance-wording">
            <span class="delivery-availability-block home-delivery">
            <span class="availability-message-title">
            <strong>Eve Teslimat</strong>
            </span>
            <span class="availability-message">
            <br><strong>21 Aralık</strong> en erken teslimat tarihi <br>
            </span>
            <span class="availability-status instock">
            Stok Mevcut
            </span>
            </span>
            </span>
            </p>
            <p>
            <span class="pdp-reinsurance-picto">
            <img src="https://www.sephora.com.tr/dw/image/v2/BCZG_PRD/on/demandware.static/-/Sites/default/dw4c4956d4/reassurance/reass-return.png?q=75" alt="ücretsiz iade görüntüsü" title="ücretsiz iade">
            </span>
            <span class="pdp-reinsurance-wording">
            14 gün içinde kolay iade
            </span>
            </p>
            <p>
            <span class="pdp-reinsurance-picto">
            <img src="https://www.sephora.com.tr/dw/image/v2/BCZG_PRD/on/demandware.static/-/Sites/default/dw21c31a63/reassurance/reass-payment.png?q=75" alt="güvenli ödeme görüntüsü" title="güvenli ödeme">
            </span>
            <span class="pdp-reinsurance-wording">
            Güvenli Ödeme
            </span>
            </p>
            </div>
          
      
        </div>

        <!-- Product Pricing -->
       
        
      </div> 
    
    </main>
    

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
    <script src="/product-page/script.js" charset="utf-8"></script>

    <section class="footer_up">
    <img src="img/footer_up.png" style="height: 200px; margin-left: 420px; margin-bottom:0"><br><br>


     <!--! footer start  -->
     <footer class="footer">
        <div class="subscribe-row">
            <div class="container">
                <div class="footer-row-wrapper">
                    <div class="footer-subscribe-wrapper">
                        <div class="footer-subscribe">
                            <div class="footer-subscribe-top">
                                <h3 class="subscribe-title">Get our emails for info on new items, sales and more.</h3>
                                <p class="subscribe-desc">We'll email you a voucher worth $10 off your first order over
                                    $50.</p>
                            </div>
                            <div class="footer-subscribe-bottom">
                                <form>
                                    <input type="text" class="email" placeholder="  Enter your email address.">
                                    <button class="btn" style="border-radius: 15px">Subscribe</button>
                                </form><br>
                                <p class="privacy-text">
                                    By subscribing you agree to our <a href="#">Terms & Conditions and Privacy & Cookies
                                        Policy.</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="footer-contact-wrapper">
                        <div class="footer-contact-top">
                            <h3 class="contact-title">
                                Need help? <br>
                                (+90) 123 456 78 90
                            </h3>
                            <p class="contact-desc">We are available 8:00am – 7:00pm</p>
                        </div>
                        <div class="footer-contact-bottom">
                            
                            <p class="privacy-text">
                                <strong style="color: black;">Shopping App:</strong> Try our View in Your Room feature, manage registries and
                                save payment
                                info.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!--! footer end  -->


    <!-- CopyRight Starts -->
    <div class="container">
        <div class="copyright-row">
            <div class="container">
                <div class="footer-copyright">
                    <div class="site-copyright">
                        <p>
                            Copyright 2022 :copyright: E-Commerce Theme. All right reserved. Powered by Ibek.
                        </p>
                    </div>
                    <div class="footer-menu">
                        <ul class="footer-menu-list">
                            <li class="list-item">
                                <a href="#">Privacy Policy</a>
                            </li>
                            <li class="list-item">
                                <a href="#">Terms and Conditions</a>
                            </li>
                            <li class="list-item">
                                <a href="#">Returns Policy</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CopyRights Ends -->

  </body>
</html>
