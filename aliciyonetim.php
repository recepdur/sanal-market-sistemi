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
<title>Al�c� Y�netim</title>
<link href="styles.css" rel="stylesheet" type="text/css" />

</head>
<body>
<div id="page">
	<div id="header">
		<div id="leftheader" onclick="location.href='aliciindex.php';" style="cursor:pointer;">
	        <div class="logo">Online Al��veri� <span>Merkezi</span></div>
		</div>
		<div id="rightheader">	
			<a href="aliciindex.php" style="text-decoration:none;"><span>Anasayfa </span></a>|
			<a href="aliciyonetim.php" style="text-decoration:none;"><span>Sepetim </span></a>|
			<a href="cikis.php" style="text-decoration:none;"><span> ��k�� </span></a>|
			<a href="iletisim.php" style="text-decoration:none;"><span> �leti�im</span></a>
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
		<li class='has-sub '><a href='giris.php'><span>Et-Bal�k</span></a>
			<ul>
				<li class=''><a href='giris.php'><span>K�rm�z� Et</span></a></li>
				<li class=''><a href='giris.php'><span>K�mes Hayvanlar�</span></a></li>
				<li class=''><a href='giris.php'><span>Bal�k</span></a></li>
				<li class=''><a href='giris.php'><span>Et �ark�teri</span></a></li>
			</ul>
		</li>
		<li class='has-sub '><a href='giris.php'><span>S�t-Kahvalt�l�k</span></a>
			<ul>
				<li class=''><a href='giris.php'><span>S�t</span></a></li>
				<li class=''><a href='giris.php'><span>Peynir</span></a></li>
				<li class=''><a href='giris.php'><span>Yo�urt</span></a></li>
				<li class=''><a href='giris.php'><span>Tereya�-Margarin</span></a></li>
				<li class=''><a href='giris.php'><span>Yumurta</span></a></li>
				<li class=''><a href='giris.php'><span>Zeytin</span></a></li>
				<li class=''><a href='giris.php'><span>Pastane �r�nleri</span></a></li>
				<li class=''><a href='giris.php'><span>Kahvalt�l�k</span></a></li>
			</ul>
		</li>
		<li class='has-sub '><a href='giris.php'><span>G�da-�ekerleme</span></a>
			<ul>
				<li class=''><a href='giris.php'><span>Bakliyat-Makarna</span></a></li>
				<li class=''><a href='giris.php'><span>Bisk�vi-�ikolata-�erez</span></a></li>
				<li class=''><a href='giris.php'><span>S�v� Ya�</span></a></li>
				<li class=''><a href='giris.php'><span>Tuz-Baharat</span></a></li>
				<li class=''><a href='giris.php'><span>Konserve-Sal�a</span></a></li>
				<li class=''><a href='giris.php'><span>�orba-Bulyon</span></a></li>
			</ul>
		</li>
		<li class='has-sub '><a href='giris.php'><span>��ecek</span></a>
			<ul>
				<li class=''><a href='giris.php'><span>Gazl� ��ecekler</span></a></li>
				<li class=''><a href='giris.php'><span>�ay-Kahve</span></a></li>
				<li class=''><a href='giris.php'><span>Gazs�z ��ecekler</span></a></li>
				<li class=''><a href='giris.php'><span>Su-Maden Suyu</span></a></li>
			</ul>
		</li>
		<li class='has-sub '><a href='giris.php'><span>Deterjan-Temizlik</span></a>
			<ul>
				<li class=''><a href='giris.php'><span>�ama��r Y�kama</span></a></li>
				<li class=''><a href='giris.php'><span>Bula��k Y�kama</span></a></li>
				<li class=''><a href='giris.php'><span>Temizlik Gere�leri</span></a></li>
			</ul>
		</li>
		<li class='has-sub '><a href='giris.php'><span>Ka��t-Kozmetik</span></a>
			<ul>
				<li class=''><a href='giris.php'><span>Ka��t �r�nleri</span></a></li>
				<li class=''><a href='giris.php'><span>V�cut Bak�m �r�nleri</span></a></li>
				<li class=''><a href='giris.php'><span>Makyaj-Aksesuar</span></a></li>
				<li class=''><a href='giris.php'><span>Parf�m-Deodorant</span></a></li>
			</ul>
		</li>
		<li class='has-sub '><a href='giris.php'><span>Gazete-Yay�n</span></a>
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
		 &copy; By <a href="http://dev.cs.hacettepe.edu.tr/~b20926305/cv/" style="text-decoration:none;"> <span>Recep Dur</span></a> - <a href="#" style="text-decoration:none;"><span>K�bra Turhan</span> </a>
     </p>
	</div>
	
</div>
</body>
</html>