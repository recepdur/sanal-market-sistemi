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
<title>Alıcı Sayfası</title>
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
			<a href="aliciyonetim.php" style="text-decoration:none;"><span> Sepetim </span></a>|
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
		
		<div id="leftside"> </div>
		<div id="content">	
		<?php
		include("ayar.php");
		$alici_id = $_SESSION["alici_id"];		
		$market_id = adreskarsilastir($alici_id);
		
		if(isset($market_id) and $market_id != "" )
		{
			$dt_urunler = mysql_query("SELECT * FROM urunler where market_id=$market_id"); 
			while( $row_urun = mysql_fetch_array($dt_urunler) )
			{		
				echo '
				<div class="urun">
					<div class="urun_baslik">'.$row_urun['urun_ad'].'</div>
					<div class="urun_resim"> <img src="urunler/elma.png" height="80" width="80"  /> </div>
					<div class="urun_aciklama">'.$row_urun['urun_fiyat'].'</div>
					<div class="urun_ekle">				
					<form id="form_urun" name="form_urun" method="post" action="aliciindex.php">
						<input type="text" name="urun_miktar"  style="width:50px; height:20px;" >
						<input type="submit" name="form_ekle" value="EKLE" style="width:40px; height:30px;">
					</form>
					';
					
					echo 'Adet-Kilo							
					</div>
				</div>
				';
			}
		}else{
			print '<script>alert("Adresinize uygun bir market bulunamadi!")</script>';			
		}
			
		?>
			
			
		<div class="clearboth"></div> <!-- Float Temizleyici-->	
		
		</div>	
		<div id="leftside"> </div>
		
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

<?php


function adreskarsilastir($alici_id) {

$dt_alici = mysql_query("SELECT * FROM alicilar where alici_id=$alici_id"); 
$row_alici = mysql_fetch_array($dt_alici);

$dt_market = mysql_query("SELECT * FROM marketler"); 
	while($row_market = mysql_fetch_array($dt_market))
	{
		if( $row_alici['alici_il'] == $row_market['market_il'] 
			and $row_alici['alici_ilce'] == $row_market['market_ilce']
			and $row_alici['alici_semt'] == $row_market['market_semt']
			and $row_alici['alici_mahalle'] == $row_market['market_mahalle']			)
		return $row_market['market_id'];
	}	
}			
mysql_close($link);		

?>