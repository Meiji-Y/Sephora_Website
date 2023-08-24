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

if (isset($_GET['urun'])){

// Query for getting product data
$id = $_GET['urun'];

$query = "SELECT * FROM products WHERE id = $id";

// Execute query
$result = mysqli_query($db_conn, $query);
$data = mysqli_fetch_assoc($result);
add_to_cart($data['id']);

}


function add_to_cart($product_id) {
    // Veritabanı bağlantısını yapın
    $conn = mysqli_connect("localhost","root","","sephoradb");
    if (!$conn) {
      die("Veritabanına bağlanırken bir hata oluştu: " . mysqli_connect_error());
    }
  
    // Ürün bilgilerini veritabanından alın
    $query = "SELECT * FROM products WHERE id = $product_id";
    $result = mysqli_query($conn, $query);
    if (!$result) {
      die("Ürün bilgilerini alırken bir hata oluştu: " . mysqli_error($conn));
    }
    $product = mysqli_fetch_assoc($result);
    if (!$product) {
      die("Ürün bulunamadı");
    }
  
    // Sepet tablosunda ürünün adedini arttırın veya ürünü ekleyin
    $query = "SELECT * FROM cart WHERE id = $product_id";
    $result = mysqli_query($conn, $query);
    if (!$result) {
      die("Ürün adedini arttırırken bir hata oluştu: " . mysqli_error($conn));
    }
    $cart_product = mysqli_fetch_assoc($result);
    if ($cart_product) {
      // Ürün sepete daha önce eklenmişse, adedini arttırın
      $query = "UPDATE cart SET quantity = quantity + 1 WHERE id = $product_id";
      $result = mysqli_query($conn, $query);
      if (!$result) {
        die("Ürün adedini arttırırken bir hata oluştu: " . mysqli_error($conn));
      }
    } else {
      // Ürün sepete daha önce eklenmemişse, ürünü ekleyin
      $query = "INSERT INTO cart (id, name,filename, price, quantity) VALUES ('{$product['id']}', '{$product['name']}','{$product['filename']}', {$product['price']}, 1)";
      $result = mysqli_query($conn, $query);
      if (!$result) {
        die("Ürün sepete eklenirken bir hata oluştu: " . mysqli_error($conn));
      }
    }
  
   
}


?>








<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Sepetim</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

	
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!--! Glide.js Css CDN  -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.6.0/css/glide.core.min.css">
		<!--! Boostrap Icons CDN  -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
		<link rel="stylesheet" href="css/main.css" />
        
   
		<!-- all css here -->
		<!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="css/shop/bootstrap.min.css">
		<!-- animate css -->
        <link rel="stylesheet" href="css/shop/animate.css">
		<!-- jquery-ui.min css -->
        <link rel="stylesheet" href="css/shop/jquery-ui.min.css">
		<!-- meanmenu css -->
        <link rel="stylesheet" href="css/shop/meanmenu.min.css">
		<!-- owl.carousel css -->
        <link rel="stylesheet" href="css/shop/owl.carousel.css">
		<!--linearicons css -->
        <link rel="stylesheet" href="css/shop/linearicons-icon-font.min.css">
		<!-- font-awesome css -->
        <link rel="stylesheet" href="css/shop/font-awesome.min.css">
		<!-- style css -->
		<link rel="stylesheet" href="css/shop/style.css">
		<!-- responsive css -->
        <link rel="stylesheet" href="css/shop/responsive.css" />
		<!-- modernizr css -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>

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



    <!--! cart start  -->
    <section class="cart-page">
        <div class="container">
            <div class="cart-page-wrapper">
                <form class="cart-form" method="POST" action="/update-product-count.php">
                    <div class="free-progress-bar" style="width: 680px;margin-right: 0px;margin-left: 60px;">
                        <p class="progress-bar-title" style="font-size: 22px">
                          <strong>SEPETİM</strong>
                        </p><br>
                        <div class="progress-bar-normal-text">
                            <p >
                             400 TL ve üzeri ücretsiz kargo
                          </p>
                          
                        </div>
                        
                        <table>
                            
                            <tbody>
                            <?php 

                            include("connection.php");
                            $query = " select * from cart ";

                            $result = mysqli_query($conn, $query);      
                            while ($in_cart = mysqli_fetch_assoc($result)) {
                                ?>
                                <tr>
                                <form  method="POST" action="/update-product-count.php">
                                    <td class="product-thumbnail"><a href="#"><img src="./products/<?php echo $in_cart['filename']; ?>" height=100px width=100 alt="" /></a></td>
                                    <td class="product-name"><a href="#"><?php echo $in_cart['name'] ?></a></td>
                                    <td class="product-price" style=" padding-left: 15px; padding-right: 15px;"><span class="amount"><?php echo $in_cart['price'] ?> TL </span></td>
                                    
                                    <td class="product-quantity">  
                                    
                                    <input type="number" name="quantity" value="<?php echo $in_cart['quantity']; ?>">
                                    <input type="hidden" name="id" value="<?php echo $in_cart['id']; ?>">
                                    <button type="submit">Adeti Güncelle</button></td>
                                    
                          
                                    
                                    <td class="product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                                </form>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                
                    </div>
                 
                </form>
                <div class="cart-collaterals" style= "margin-top: 40px;">
                    <div class="cart-totals" >
                        <h2>Sipariş Özeti
                        </h2>
                        <table style="margin-top: 0px;">
                            <tbody>
                                <tr class="cart-subtotal">
                                    <?php 
                                    include("connection.php");
                                    $query = "SELECT SUM(quantity * price) AS toplam_fiyat FROM cart";
                                    $result = mysqli_query($conn, $query);
                                    $toplam = mysqli_fetch_assoc($result);
                                    ?>
                                    <th>Ara Toplam</th>
                                    <td>
                                        <span id="subtotal"><?php echo $toplam['toplam_fiyat'] ?> TL </span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Teslimat</th>
                                    <td>
                                        <ul>
                                            <li>
                                                <label>
                                                    Hızlı Kargo: 15.00 TL
                                                    
                                                </label>
                                            </li>
                                            <li>
                                                <a href="#">Adres Değiştir</a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Toplam</th>
                                    <td>
                                        <strong id="cart-total"><?php echo $toplam['toplam_fiyat'] + 15 ?> TL</strong>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="checkout">
                            <button class="btn btn-lg"><strong>ALIŞVERİŞİ TAMAMLA</strong></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
                

    <!--! policy start  -->
    <section class="policy">
        <div class="container">
            <ul class="policy-list">
                <li class="policy-item">
                    <i class="bi bi-truck"></i>
                    <div class="policy-texts">
                        <strong>FREE DELIVERY</strong>
                        <span>From $59.89</span>
                    </div>
                </li>
                <li class="policy-item">
                    <i class="bi bi-headset"></i>
                    <div class="policy-texts">
                        <strong>SUPPORT 24/7</strong>
                        <span>Online 24 hours</span>
                    </div>
                </li>
                <li class="policy-item">
                    <i class="bi bi-arrow-clockwise"></i>
                    <div class="policy-texts">
                        <strong> 30 DAYS RETURN</strong>
                        <span>Simply return it within 30 days</span>
                    </div>
                </li>
                <li class="policy-item">
                    <i class="bi bi-credit-card"></i>
                    <div class="policy-texts">
                        <strong> PAYMENT METHOD</strong>
                        <span>Secure Payment</span>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!--! policy end  -->

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



    <script src="js/main.js" type="module"></script>
    <script src="js/cart.js" type="module"></script>
</body>

</html>


