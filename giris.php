<?php
	session_start();
	ob_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/HTML; charset=ISO-8859-9" />
<title>Giriş</title>
<link href="styles.css" rel="stylesheet" type="text/css" />

</head>
<body>
<div id="page">
	<div id="header">
		<div id="leftheader" onclick="location.href='index.php';" style="cursor:pointer;">
	        <div class="logo">Online Alışveriş <span>Merkezi</span></div>
		</div>
		<div id="rightheader">	
			<a href="index.php" style="text-decoration:none;"><span>Anasayfa </span></a>|
			<a href="giris.php" style="text-decoration:none;"><span> Giriş </span></a>|
			<a href="iletisim.php" style="text-decoration:none;"><span>İletişim</span></a>
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
		<div id="giris">
			<h1> Alıcı Giriş</h1>
			<form id="form1" name="form1" method="post" action="giris.php">				
				<table>
					<tr>
						<td> E-mail</td>  <td>:</td>  <td><input type="text" name="kullanici_email">  </td>
					</tr>
					<tr>
						<td> Şifre</td>   <td>:</td>  <td><input type="password" name="kullanici_sifre">  </td>
					</tr>
					<tr>
						<td> <input type="submit" name="form_adi" value="Giriş"></td>  <td></td>  <td> <a href="aliciyenikayit.php" style="text-decoration:none;"><span>Yeni Kayıt</span></a> </td>
					</tr>				
				</table>				
			</form>
		
		</div>
		<div id="giris">
			<h1> Market Giriş</h1>
			<form id="form1" name="form1" method="post" action="giris.php">			
				<table>
					<tr>
						<td> E-mail</td>  <td>:</td>  <td><input type="text" name="market_email">  </td>
					</tr>
					<tr>
						<td> Şifre</td>   <td>:</td>  <td><input type="password" name="market_sifre">  </td>
					</tr>
					<tr>
						<td> <input type="submit" name="form_adi" value="Giriş"></td>  <td> </td>  <td> <a href="marketyenikayit.php" style="text-decoration:none;"><span>Yeni Kayıt</span></a> </td>
					</tr>				
				</table>
				
			</form>
		
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
	$isKullanici=isset($_POST['kullanici_sifre']) && isset($_POST['kullanici_email']);
	$isMarket=isset($_POST['market_sifre']) and isset($_POST['market_email']);
	
	
	/*** alıcı kontrolu ***/
	if( $isKullanici && !$isMarket ) // check input
	{
		$kullanici_email = $_POST['kullanici_email'];
		$kullanici_sifre = $_POST['kullanici_sifre'];
		
		if($kullanici_email != "" && $kullanici_sifre != "")		// check input
		{							
			$dt = mysql_query("select * from alicilar");
			$sorgu=false;
			
			while($row = mysql_fetch_array($dt))
			{					
				if($kullanici_email == $row['alici_email'] &&  $kullanici_sifre == $row['alici_sifre'] )
				{						
					$_SESSION["k_login"] = "true";
					$_SESSION["alici_id"] = $row['alici_id'];
					header("Location:aliciindex.php");					
					$sorgu=true;
				}
			}
			if($sorgu == false)
			{
				print '<script>alert("Kullanıcı bulunamadı. Lütfen tekrar deneyin!");history.back(-1);</script>';
				header("Refresh: 5; url=giris.php");
			}
			mysql_close($link);					
		}		
	}
	if($isKullanici&&!$isMarket&&$kullanici_sifre==""&&$kullanici_email!="")
	{
		print '<script>alert("Kullanıcı şifresi girmediniz.Lütfen şifrenizi girerek tekrar deneyin!");history.back(-1);</script>';
		header("Refresh: 2; url=giris.php");
	}
	if($isKullanici&&!$isMarket&&$kullanici_email==""&&$kullanici_sifre!="")
	{
		print '<script>alert("Kullanıcı email girmediniz.Lütfen emailinizi girerek tekrar deneyin!");history.back(-1);</script>';
		header("Refresh: 2; url=giris.php");
	}
	if($isKullanici&&!$isMarket&&$kullanici_email==""&&$kullanici_sifre=="")
	{
		print '<script>alert("Kullanıcı email ve şifrenizi girmediniz. Lütfen tüm alanları girerek tekrar deneyin!");history.back(-1);</script>';
		header("Refresh: 2; url=giris.php");
	}
	
	
	/*** Market kontrolu ***/
	if( !$isKullanici && $isMarket )
	{
		$market_sifre = $_POST['market_sifre'];
		$market_email = $_POST['market_email'];
		$sorgu=false;
		if($market_sifre!=""&&$market_email!="")
		{
			$quer=mysql_query("SELECT * FROM marketler");
			while($row = mysql_fetch_array($quer))
			{
				if($market_email == $row['market_email'] &&  $market_sifre == $row['market_sifre'] )
				{
					$_SESSION["m_login"] = "true";
					$_SESSION["market_id"] = $row['market_id'];
					$sorgu=true;	
					header("Location:marketyonetim.php");	
				}
			}	
			if($sorgu==false)
			{
				print '<script>alert("Kullanıcı bulunamadı. Lütfen tekrar deneyin!");history.back(-1);</script>';
				header("Refresh: 5; url=giris.php");
			}		
		}
	}
	
	if( !$isKullanici && $isMarket && $market_sifre=="" && $market_email!="")
	{
		print '<script>alert("Kullanıcı şifresi girmediniz. Lütfen şifrenizi girerek tekrar deneyin!");history.back(-1);</script>';
		header("Refresh: 2; url=giris.php");
	}
	if( !$isKullanici && $isMarket && $market_email=="" && $market_sifre!="")
	{
		print '<script>alert("Kullanıcı email girmediniz. Lütfen emailinizi girerek tekrar deneyin!");history.back(-1);</script>';
		header("Refresh: 2; url=giris.php");
	}
	if( !$isKullanici && $isMarket && $market_email=="" && $market_sifre=="")
	{
		print '<script>alert("Kullanıcı email ve şifrenizi girmediniz. Lütfen tüm alanları girerek tekrar deneyin!");history.back(-1);</script>';
		header("Refresh: 2; url=giris.php");
	}
	
	ob_end_flush();	
	?>
			