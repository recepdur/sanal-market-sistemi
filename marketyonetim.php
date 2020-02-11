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
<title>Market Yönetim</title>
<link href="styles.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="javascript.js"></script>
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
		
			<div id="kucukkutu">
				<a href="marketurunekle.php">Market Ürün Ekle</a><br></br>
			</div>			
			<div id="kucukkutu">.</div>	
			<div id="kucukkutu">.</div>	
			<div class="clearboth"></div> <!-- Float Temizleyici-->		
		
			<div id="buyukkutu">
				<form id="form1" name="form1" method="post" action="marketyonetim.php">
					<h4 align="center" >Ürün Bilgileriniz </h4><br>
					<table border="0">
						<tr>
							<td width="100"><h4>Adi</h4></td> 		
							<td width="100"><h4>Fiyat</h4></td>
							<td width="100"><h4>Stok</h4></td> 
							<td width="100"><h4>Kategori</h4></td>
							<td width="100"><h4>Detay</h4></td> 
							<td width="100"><h4>Düzenle</h4></td>
							<td width="100"><h4>Sil</h4></td> 
						</tr>
						
					<?php
						include('ayar.php');						
						$market_id =  $_SESSION['market_id'];						
						$dt = mysql_query("select * from urunler");
						
						$sorgu=false;						
						while($row = mysql_fetch_array($dt))
						{					
							if($market_id == $row['market_id'] )
							{				
								echo '<tr>
										<td>'.$row['urun_ad'].'</td>									
										<td>'.$row['urun_fiyat'].'</td>									
										<td>'.$row['urun_stok'].'</td>								
										<td>'.$row['urun_kategori'].'</td>									
										<td>'.$row['urun_detay'].'</td>		
										<td><a href="marketurunduzenle.php?urun_id='.$row['urun_id'].'">Duzenle</a></td>
										<td><a href="marketyonetim.php?urun_id='.$row['urun_id'].'">Sil</a></td>										
									</tr>';		
									
								$sorgu=true;									
							}
						}
						if($sorgu == false)
						{
							echo '<script>alert("Ürün listeniz boş. Lütfen ürün ekleyin!");</script>';
						}							
													
					?>
						
					</table>
				</form>						
			</div>
					<p id="input1"></p>
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

if( isset($_GET['urun_id']) )
{
	$urun_id = $_GET['urun_id'];
	echo $urun_id ;	
	mysql_query("DELETE FROM urunler WHERE urun_id='$urun_id'");
	header("Location: marketyonetim.php");
	
	mysql_close($link);	
}

?>
