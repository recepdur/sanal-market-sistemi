<?php
	session_start();
header("Cache-control:private");

if(!isset($_SESSION["m_login"])) {
    header("location:index.php");
    die(); }
	ob_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/HTML; charset=ISO-8859-9" />
<title>Yeni Ürün Ekle</title>
<link href="styles.css" rel="stylesheet" type="text/css" />
<script language=JavaScript> 
function reloadPage()
  {
  window.location="marketyonetim.php"
  }
</script>
</head>
<body>
<div id="page">
	<div id="header">
		<div id="leftheader" onclick="location.href='#';" style="cursor:pointer;">
	        <div class="logo">Online Alışveriş <span>Merkezi</span></div>
		</div>
		<div id="rightheader">	
			<a href="marketyonetim.php" style="text-decoration:none;"><span>Yönetim </span></a>|
			<a href="cikis.php" style="text-decoration:none;"><span> Çıkış </span></a>|
			<a href="iletisim.php" style="text-decoration:none;"><span>İletişim</span></a>
		</div>
	</div>
	<div id="mainpage">
	
		<div class='cssmenu'>
		<ul>	
		<li class='has-sub '><a href='#'><span>Meyve-Sebze</span></a>
			<ul>
				<li class=''><a href='#'><span>Meyve</span></a></li>
				<li class=''><a href='#'><span>Sebze</span></a></li>
			</ul>
		</li>
		<li class='has-sub '><a href='#'><span>Et-Balık</span></a>
			<ul>
				<li class=''><a href='#'><span>Kırmızı Et</span></a></li>
				<li class=''><a href='#'><span>Kümes Hayvanları</span></a></li>
				<li class=''><a href='#'><span>Balık</span></a></li>
				<li class=''><a href='#'><span>Et Şarküteri</span></a></li>
			</ul>
		</li>
		<li class='has-sub '><a href='#'><span>Süt-Kahvaltılık</span></a>
			<ul>
				<li class=''><a href='#'><span>Süt</span></a></li>
				<li class=''><a href='#'><span>Peynir</span></a></li>
				<li class=''><a href='#'><span>Yoğurt</span></a></li>
				<li class=''><a href='#'><span>Tereyağ-Margarin</span></a></li>
				<li class=''><a href='#'><span>Yumurta</span></a></li>
				<li class=''><a href='#'><span>Zeytin</span></a></li>
				<li class=''><a href='#'><span>Pastane Ürünleri</span></a></li>
				<li class=''><a href='#'><span>Kahvaltılık</span></a></li>
			</ul>
		</li>
		<li class='has-sub '><a href='#'><span>Gıda-Şekerleme</span></a>
			<ul>
				<li class=''><a href='#'><span>Bakliyat-Makarna</span></a></li>
				<li class=''><a href='#'><span>Bisküvi-Çikolata-Çerez</span></a></li>
				<li class=''><a href='#'><span>Sıvı Yağ</span></a></li>
				<li class=''><a href='#'><span>Tuz-Baharat</span></a></li>
				<li class=''><a href='#'><span>Konserve-Salça</span></a></li>
				<li class=''><a href='#'><span>Çorba-Bulyon</span></a></li>
			</ul>
		</li>
		<li class='has-sub '><a href='#'><span>İçecek</span></a>
			<ul>
				<li class=''><a href='#'><span>Gazlı İçecekler</span></a></li>
				<li class=''><a href='#'><span>Çay-Kahve</span></a></li>
				<li class=''><a href='#'><span>Gazsız İçecekler</span></a></li>
				<li class=''><a href='#'><span>Su-Maden Suyu</span></a></li>
			</ul>
		</li>
		<li class='has-sub '><a href='#'><span>Deterjan-Temizlik</span></a>
			<ul>
				<li class=''><a href='#'><span>Çamaşır Yıkama</span></a></li>
				<li class=''><a href='#'><span>Bulaşık Yıkama</span></a></li>
				<li class=''><a href='#'><span>Temizlik Gereçleri</span></a></li>
			</ul>
		</li>
		<li class='has-sub '><a href='#'><span>Kağıt-Kozmetik</span></a>
			<ul>
				<li class=''><a href='#'><span>Kağıt Ürünleri</span></a></li>
				<li class=''><a href='#'><span>Vücut Bakım Ürünleri</span></a></li>
				<li class=''><a href='#'><span>Makyaj-Aksesuar</span></a></li>
				<li class=''><a href='#'><span>Parfüm-Deodorant</span></a></li>
			</ul>
		</li>
		<li class='has-sub '><a href='#'><span>Gazete-Yayın</span></a>
			<ul>
				<li class=''><a href='#'><span>Gazete</span></a></li>
				<li class=''><a href='#'><span>Dergi</span></a></li>
				<li class=''><a href='#'><span>Kitap</span></a></li>
			</ul>
		</li>
		</ul>
		</div>
		
		<div id="content">	
		
		<div id="yeniurunekle">
				<h1><br>Yeni Ürün Ekle</h1>
				
				<form id="form1" name="form1" method="post" action="marketurunekle.php">
					<table align="center" border="0">
					<tr>
						<td width="150">Kategori Seçiniz</td> <td>:</td> 
						<td width="150">  <select name="urun_kategori" id="urun_kategori">
							 </optgroup>
							  <optgroup label="Meyve-Sebze">
							   <option value="Meyve">Meyve</option>
							   <option value="Sebze">Sebze</option>
							  </optgroup>
							  <optgroup label="Et-Balık">
							   <option value="Kırmızı Et">Kırmızı Et</option>
							   <option value="Kümes Hayvanları">Kümes Hayvanları</option>
							   <option value="Balık">Balık</option>
							   <option value="Et Şarküteri">Et Şarküteri</option>
							  </optgroup>
							  <optgroup label="Süt-Kahvaltılık">
							   <option value="Süt">Süt</option>
							   <option value="Peynir">Peynir</option>
							   <option value="Yoğurt">Yoğurt</option>
							   <option value="Tereyağ-Margarin">Tereyağ-Margarin</option>
							   <option value="Yumurta">Yumurta</option>
							   <option value="Zeytin">Zeytin</option>
							   <option value="Pastane Ürünleri">Pastane Ürünleri</option>
							   <option value="Kahvaltılık">Kahvaltılık</option>
							  </optgroup>
							  </optgroup>
							  <optgroup label="Gıda-Şekerleme">
							   <option value="Bakliyat-Makarna">Bakliyat-Makarna</option>
							   <option value="Bisküvi-Çikolata-Çerez">Bisküvi-Çikolata-Çerez</option>
							   <option value="Sıvı Yağ">Sıvı Yağ</option>
							   <option value="Tuz-Baharat">Tuz-Baharat</option>
							   <option value="Konserve-Salça">Konserve-Salça</option>
							   <option value="Çorba-Bulyon">Çorba-Bulyon</option>
							  </optgroup>
							  <optgroup label="İçecek">
							   <option value="Gazlı İçecekler">Gazlı İçecekler</option>
							   <option value="Çay-Kahve">Çay-Kahve</option>
							   <option value="Gazsız İçecekler">Gazsız İçecekler</option>
							   <option value="Su-Maden Suyu">Su-Maden Suyu</option>
							  </optgroup>
							  <optgroup label="Deterjan-Temizlik">
							   <option value="Çamaşır Yıkama">Çamaşır Yıkama</option>
							   <option value="Bulaşık Yıkama">Bulaşık Yıkama</option>
							   <option value="Temizlik Gereçleri">Temizlik Gereçleri</option>
							  </optgroup>
							  <optgroup label="Kağıt-Kozmetik">
							   <option value="Kağıt Ürünleri">Kağıt Ürünleri</option>
							   <option value="Vücut Bakım Ürünleri">Vücut Bakım Ürünleri</option>
							   <option value="Makyaj-Aksesuar">Makyaj-Aksesuar</option>
							   <option value="Parfüm-Deodorant">Parfüm-Deodorant</option>
							  </optgroup>
							   <optgroup label="Gazete-Yayın">
							   <option value="Oyuncak">Gazete</option>
							   <option value="Bebek Bakım Ürünleri">Dergi</option>
							   <option value="Bebek Mama">Kitap</option>
							  </optgroup>
							  </select> </td>
					</tr>
					<tr>
						<td width="150">Ürün Adı</td> <td>:</td> 
						<td width="150"> <input type="text" name="urun_ad"> </td>
					</tr>
					<tr >
						<td width="150">Ürün Fiyatı</td> <td>:</td> 
						<td width="150"> <input type="text" name="urun_fiyat"> </td>
					</tr>
					<tr >
						<td width="150">Ürün Stok</td> <td>:</td> 
						<td width="150"> <input type="text" name="urun_stok"> </td>
					</tr>
					<tr >
						<td width="150">Ürün Detay</td> <td>:</td> 
						<td width="150"> <input type="text" name="urun_detay"> </td>
					</tr>
					<tr >
						<td width="150">Ürün Resim</td> <td>:</td> 
						<td width="150"> <input type="file" name="urun_resim"> </td>
					</tr>
					<tr>
						<td width="150"> <br> </td> 						
					</tr>
					<tr>
						<td width="150"> <input type="submit" name="form_adi" value="Kaydet"></td> 						
					</tr>
					</table>
				</form>
				
				</div>		
		
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

<?php
include("ayar.php");

if(isset($_POST['urun_ad']) && isset($_POST['urun_fiyat']) && isset($_POST['urun_stok']) && isset($_POST['urun_detay']) and isset($_POST['urun_kategori']))
{	
	$market_id =  $_SESSION['market_id'];	
	$urun_ad = $_POST['urun_ad'];
    $urun_fiyat = $_POST['urun_fiyat'];
    $urun_stok = $_POST['urun_stok'];
	$urun_resim_yolu = "urunler/resimyolu";
	$urun_kategori = $_POST['urun_kategori'];
    $urun_detay = $_POST['urun_detay'];
	
    
    if( $urun_ad!= "" and $urun_fiyat!="" and $urun_stok!= "" and $urun_detay!="" )        // check input
    {	
        mysql_query("INSERT INTO urunler ( market_id, urun_ad, urun_fiyat, urun_stok, urun_resim_yolu, urun_kategori, urun_detay) 
					VALUES ('".$market_id."','".$urun_ad."', '".$urun_fiyat."', '".$urun_stok."', '" . $urun_resim_yolu. "', '".$urun_kategori."', '".$urun_detay."')");
		header("Location: marketyonetim.php");
		
			
		
	}else	
		print '<script>alert("Tum alanlari doldurmaniz zorunludur. Lutfen tekrar deneyin!");history.back(-1);</script>';
	
}
	
	ob_end_flush();	
	mysql_close($link);	
?>