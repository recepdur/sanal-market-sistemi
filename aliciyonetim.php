<?php
	session_start();
    header("Cache-control:private");
	
if(!isset($_SESSION["k_login"])) {
    header("location:index.php");
    die(); }
	ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/HTML; charset=ISO-8859-9" />
<title>Alıcı Yönetim</title>
<link href="styles.css" rel="stylesheet" type="text/css" />

</head>
<body>
<div id="page">
	<div id="header">
		<div id="leftheader" onclick="location.href='aliciindex.php';" style="cursor:pointer;">
	        <div class="logo">Online Alışveriş <span>Merkezi</span></div>
		</div>
		<div id="rightheader">	
			<a href="aliciindex.php" style="text-decoration:none;"><span>Anasayfa </span></a>|
			<a href="aliciyonetim.php" style="text-decoration:none;"><span>Sepetim </span></a>|
			<a href="cikis.php" style="text-decoration:none;"><span> Çıkış </span></a>|
			<a href="iletisim.php" style="text-decoration:none;"><span> İletişim</span></a>
		</div>
	</div>
	<div id="mainpage">
	
		<div class='cssmenu'>
		<ul>	
		<li class='has-sub '><a href='giris.php'><span>Meyve-Sebze</span></a>
			<ul>
				<li class=''><a href='giris.php'><span>Meyve</span></a></li>
				<li class=''><a href='giris.php'><span>Sebze</span></a></li>
			</ul>
		</li>
		<li class='has-sub '><a href='giris.php'><span>Et-Balık</span></a>
			<ul>
				<li class=''><a href='giris.php'><span>Kırmızı Et</span></a></li>
				<li class=''><a href='giris.php'><span>Kümes Hayvanları</span></a></li>
				<li class=''><a href='giris.php'><span>Balık</span></a></li>
				<li class=''><a href='giris.php'><span>Et Şarküteri</span></a></li>
			</ul>
		</li>
		<li class='has-sub '><a href='giris.php'><span>Süt-Kahvaltılık</span></a>
			<ul>
				<li class=''><a href='giris.php'><span>Süt</span></a></li>
				<li class=''><a href='giris.php'><span>Peynir</span></a></li>
				<li class=''><a href='giris.php'><span>Yoğurt</span></a></li>
				<li class=''><a href='giris.php'><span>Tereyağ-Margarin</span></a></li>
				<li class=''><a href='giris.php'><span>Yumurta</span></a></li>
				<li class=''><a href='giris.php'><span>Zeytin</span></a></li>
				<li class=''><a href='giris.php'><span>Pastane Ürünleri</span></a></li>
				<li class=''><a href='giris.php'><span>Kahvaltılık</span></a></li>
			</ul>
		</li>
		<li class='has-sub '><a href='giris.php'><span>Gıda-Şekerleme</span></a>
			<ul>
				<li class=''><a href='giris.php'><span>Bakliyat-Makarna</span></a></li>
				<li class=''><a href='giris.php'><span>Bisküvi-Çikolata-Çerez</span></a></li>
				<li class=''><a href='giris.php'><span>Sıvı Yağ</span></a></li>
				<li class=''><a href='giris.php'><span>Tuz-Baharat</span></a></li>
				<li class=''><a href='giris.php'><span>Konserve-Salça</span></a></li>
				<li class=''><a href='giris.php'><span>Çorba-Bulyon</span></a></li>
			</ul>
		</li>
		<li class='has-sub '><a href='giris.php'><span>İçecek</span></a>
			<ul>
				<li class=''><a href='giris.php'><span>Gazlı İçecekler</span></a></li>
				<li class=''><a href='giris.php'><span>Çay-Kahve</span></a></li>
				<li class=''><a href='giris.php'><span>Gazsız İçecekler</span></a></li>
				<li class=''><a href='giris.php'><span>Su-Maden Suyu</span></a></li>
			</ul>
		</li>
		<li class='has-sub '><a href='giris.php'><span>Deterjan-Temizlik</span></a>
			<ul>
				<li class=''><a href='giris.php'><span>Çamaşır Yıkama</span></a></li>
				<li class=''><a href='giris.php'><span>Bulaşık Yıkama</span></a></li>
				<li class=''><a href='giris.php'><span>Temizlik Gereçleri</span></a></li>
			</ul>
		</li>
		<li class='has-sub '><a href='giris.php'><span>Kağıt-Kozmetik</span></a>
			<ul>
				<li class=''><a href='giris.php'><span>Kağıt Ürünleri</span></a></li>
				<li class=''><a href='giris.php'><span>Vücut Bakım Ürünleri</span></a></li>
				<li class=''><a href='giris.php'><span>Makyaj-Aksesuar</span></a></li>
				<li class=''><a href='giris.php'><span>Parfüm-Deodorant</span></a></li>
			</ul>
		</li>
		<li class='has-sub '><a href='giris.php'><span>Gazete-Yayın</span></a>
			<ul>
				<li class=''><a href='giris.php'><span>Gazete</span></a></li>
				<li class=''><a href='giris.php'><span>Dergi</span></a></li>
				<li class=''><a href='giris.php'><span>Kitap</span></a></li>
			</ul>
		</li>
		</ul>
		</div>
		
		<div id="leftside"></div>
		<div id="content">	
		
		</div>	
		<div class="clearboth"></div> <!-- Float Temizleyici-->		
	</div>
	
	<div id="footer">
	 <p>
		 &copy; By <a href="http://dev.cs.hacettepe.edu.tr/~b20926305/cv/" style="text-decoration:none;"> <span>Recep Dur</span></a> - <a href="#" style="text-decoration:none;"><span>Kübra Turhan</span> </a>
     </p>
	</div>
	
</div>
</body>
</html>