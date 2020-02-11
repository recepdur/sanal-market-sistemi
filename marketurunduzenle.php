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
<title>Ürün Düzenle</title>
<link href="styles.css" rel="stylesheet" type="text/css" />

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
				<h1><br>Ürün Düzenle</h1>
				
				<?php
					include("ayar.php");
					
					if(isset($_GET['urun_id']) )
					{
						$urun_id = $_GET['urun_id'];
						$dt = mysql_query("select * from urunler");
						
						$sorgu=false;						
						while($row = mysql_fetch_array($dt))
						{					
							if($urun_id == $row['urun_id'] )
							{				
								echo '<form id="form1" name="form1" method="post" action="marketurunduzenle.php">
										<table align="center" border="0">
										<tr>
											<td> <input type="hidden" name="urun_id_gonderilen" value="'.$urun_id.'"> </td> 
										</tr>
										<tr>
											<td width="150">Kategori</td> <td>:</td> 
											<td width="150"><label for="male">'.$row['urun_kategori'].'</label></td>
										</tr>
										<tr>
											<td width="150">Ürün Adı</td> <td>:</td> 
											<td width="150"><label for="male">'.$row['urun_ad'].'</label></td>
										</tr>
										<tr >
											<td width="150">Ürün Fiyatı</td> <td>:</td> 
											<td width="150"> <input type="text" name="urun_fiyat" value="'.$row['urun_fiyat'].'"> </td>
										</tr>
										<tr >
											<td width="150">Ürün Stok</td> <td>:</td> 
											<td width="150"> <input type="text" name="urun_stok" value="'.$row['urun_stok'].'"> </td>
										</tr>
										<tr >
											<td width="150">Ürün Detay</td> <td>:</td> 
											<td width="150"> <input type="text" name="urun_detay" value="'.$row['urun_detay'].'"> </td>
										</tr>					
										<tr><td> <br> </td></tr>
										<tr> <td width="150"> <input type="submit" name="form_adi" value="Kaydet"></td> </tr>
										
										</table>
									</form>';
									
								$sorgu=true;									
							}
						}	
						
					}else
						header("Location:marketyonetim.php");
				
				?>
				
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


if(isset($_POST['urun_fiyat']) && isset($_POST['urun_stok']) && isset($_POST['urun_detay']) )
{	
	$urun_id_gonderilen = $_POST['urun_id_gonderilen'];
	$urun_fiyat = $_POST['urun_fiyat'];
	$urun_stok = $_POST['urun_stok'];
	$urun_detay = $_POST['urun_detay'];

	mysql_query("UPDATE urunler SET urun_fiyat='$urun_fiyat', urun_stok='$urun_stok', urun_detay='$urun_detay' WHERE urun_id='$urun_id_gonderilen'");
	
	mysql_close($link);
	ob_end_flush();	
}
?>