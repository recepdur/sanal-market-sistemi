<?php
ob_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/HTML; charset=ISO-8859-9" />
<title>Market Kayıt</title>
<link href="styles.css" rel="stylesheet" type="text/css" />
<script language=JavaScript> 
function reload(form)
{
var val=form.cat.options[form.cat.options.selectedIndex].value;
self.location='marketyenikayit.php?cat=' + val ;
}
function reload2(form)
{
var val1=form.cat.options[form.cat.options.selectedIndex].value;
var val2=form.subcat.options[form.subcat.options.selectedIndex].value;
self.location='marketyenikayit.php?cat='+val1 +'&subcat=' + val2 ;
}
function reload3(form)
{
var val1=form.cat.options[form.cat.options.selectedIndex].value;
var val2=form.subcat.options[form.subcat.options.selectedIndex].value;
var val3=form.subcat2.options[form.subcat2.options.selectedIndex].value;
self.location='marketyenikayit.php?cat='+val1 +'&subcat=' + val2 + '&subcat2=' + val3; 
}
</script>
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
		
		<div id="yenikayit">
			<h1><br> Market Yeni Kayıt Ekranı</h1>
			
			<?php
			include("ayar.php");
			@$cat=$_GET['cat'];
			@$subcat=$_GET['subcat'];
			@$subcat2=$_GET['subcat2'];
			@$subcat3=$_GET['subcat3'];
			if(strlen($cat) > 0 and !is_numeric($cat)){  
			echo "Data Error";
			exit;
			}
			if(strlen($subcat) > 0 and !is_numeric($subcat)){  
			echo "Data Error";
			exit;
			}
			if(strlen($subcat2) > 0 and !is_numeric($subcat2)){  
			echo "Data Error";
			exit;
			}
			if(strlen($subcat3) > 0 and !is_numeric($subcat3)){  
			echo "Data Error";
			exit;
			}
			// Getting the data from Mysql table for first list box
			$quer2=mysql_query("select * from tbl_il order by il_ad");
			
			if(isset($cat) and strlen($cat) > 0){
				$quer=mysql_query("SELECT * FROM tbl_ilce where il_id=$cat order by ilce_ad"); 
			}
			else{$quer=mysql_query("SELECT * FROM tbl_ilce order by tbl_ilce"); } 
			
			if(isset($subcat) and strlen($subcat) > 0){
				$quersemt=mysql_query("SELECT * FROM tbl_semt where ilce_id=$subcat order by semt_ad"); 
			}
			else{$quersemt=mysql_query("SELECT * FROM tbl_semt order by tbl_semt"); } 
			
			if(isset($subcat2) and strlen($subcat2) > 0){
				$quermahalle=mysql_query("SELECT * FROM tbl_mahalle where semt_id=$subcat2 order by mahalle_ad"); 
			}
			else{$quermahalle=mysql_query("SELECT * FROM tbl_mahalle order by tbl_mahalle"); } 
			
			
			echo "<form method=\"post\" name=f1 action='marketyenikayit.php'>";
			echo'<table border="0">';
			echo '<tr>';
			//////////        Starting of first drop downlist /////////
			echo "<td>İl Seçiniz</td><td>:</td> <td><select style='width:150px'  name='cat' onchange=\"reload(this.form)\"><option value=''>il seçiniz</option>";
			while($noticia2 = mysql_fetch_array($quer2)) { 
			if($noticia2['il_id']==@$cat){echo "<option selected value='$noticia2[il_id]'>$noticia2[il_ad]</option>"."<BR>";}
			else{echo  "<option value='$noticia2[il_id]'>$noticia2[il_ad]</option>";}
			}
			echo "</select> </td>";
			echo '</tr>';
			
			echo '<tr>';
			//////////        Starting of second drop downlist /////////
			echo "<td>İlçe Seçiniz</td><td>:</td><td><select style='width:150px'  name='subcat' onchange=\"reload2(this.form)\"><option value=''>ilçe seçiniz</option>";
			while($noticia = mysql_fetch_array($quer)) { 
			if($noticia['ilce_id']==@$subcat){echo "<option selected value='$noticia[ilce_id]'>$noticia[ilce_ad]</option>"."<BR>";}
			else{echo  "<option value='$noticia[ilce_id]'>$noticia[ilce_ad]</option>";}
			}
			echo "</select> </td>";
			echo '</tr>';
			echo '<tr>';
			
			//////////        Starting of third drop downlist /////////
			echo "<td>Semt Seçiniz</td><td>:</td><td><select style='width:150px'  name='subcat2' onchange=\"reload3(this.form)\"><option value=''>semt seçiniz</option>";
			while($noticiasemt = mysql_fetch_array($quersemt)) { 
			if($noticiasemt['semt_id']==@$subcat2){echo "<option selected value='$noticiasemt[semt_id]'>$noticiasemt[semt_ad]</option>"."<BR>";}
			else{echo  "<option value='$noticiasemt[semt_id]'>$noticiasemt[semt_ad]</option>";}
			}
			echo "</select> </td>";
			echo '</tr>';
			
			echo '<tr>';
			//////////        Starting of fourth drop downlist /////////
			echo "<td>Mahalle Seçiniz</td><td>:</td> <td><select style='width:150px' name='subcat3'><option value=''>mahalle seçiniz</option>";
			while($noticiamahalle = mysql_fetch_array($quermahalle)) { 
			if($noticiamahalle['mahalle_id']==@$subcat3){echo "<option selected value='$noticiamahalle[mahalle_id]'>$noticiamahalle[mahalle_ad]</option>"."<BR>";}
			else{echo  "<option value='$noticiamahalle[mahalle_id]'>$noticiamahalle[mahalle_ad]</option>";}
			}
			echo "</select> </td>";
			echo '</tr>';
			?>
			 <tr>
				<td>Market Adı</td><td>:</td> <td><input type="text" name="market_adi"></td>
			</tr>
			<tr>
				<td>Kullanıcı Şifre</td><td>:</td> <td><input type="text" name="market_sifre"></td>
			</tr>
			<tr>
				<td>E-mail</td><td>:</td> <td><input type="text" name="market_email"></td>
			</tr>
			<tr>
				<td>Telefon</td><td>:</td> <td><input type="text" name="market_tel"></td>
			</tr>
			<tr>
				<td><input type="submit" value="Üye Kaydet"></td>
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

	<?php  //YENI UYE MARKETI VERI TABANINA EKLEME//

if(isset($_POST['cat']) && isset($_POST['subcat']) && isset($_POST['subcat2']) && isset($_POST['subcat3'])&&isset($_POST['market_adi'])&&isset($_POST['market_sifre'])&&isset($_POST['market_tel'])&&isset($_POST['market_email'])) // check input
{
    $cat=$_POST['cat'];
    $subcat=$_POST['subcat'];
    $subcat2=$_POST['subcat2'];
    $subcat3=$_POST['subcat3'];
    $ad=$_POST['market_adi'];
	$tel=$_POST['market_tel'];
	$email=$_POST['market_email'];
	$sifre=$_POST['market_sifre'];

    if($cat!= "" && $subcat!= "" && $subcat2!= "" && $subcat3!= ""&& $ad!= "" && $sifre!= ""&& $email!= ""&& $tel!= "")        // check input
    {
        $quer1=mysql_query("SELECT * FROM tbl_il where il_id=$cat order by il_ad"); 
        $not1 = mysql_fetch_array($quer1);
		$quer2=mysql_query("SELECT * FROM tbl_ilce where ilce_id=$subcat order by ilce_ad"); 
        $not2 = mysql_fetch_array($quer2);
		$quer3=mysql_query("SELECT * FROM tbl_semt where semt_id=$subcat2 order by semt_ad"); 
        $not3 = mysql_fetch_array($quer3);
		$quer4=mysql_query("SELECT * FROM tbl_mahalle where mahalle_id=$subcat3 order by mahalle_ad"); 
        $not4 = mysql_fetch_array($quer4);

        mysql_query("INSERT INTO marketler (market_id, market_ad, market_sifre, market_il, market_ilce, market_semt, market_mahalle, market_telefon, market_email) 
					VALUES (NULL, '".$ad."','".$sifre."', '".$not1['il_ad']."', '".$not2['ilce_ad']."', '".$not3['semt_ad']."', '".$not4['mahalle_ad']."', '".$tel."', '".$email."')");
 
	header('Location:giris.php');
	}
	else{
	print '<script>alert("Tum alanlari doldurmaniz zorunludur. Lutfen tekrar deneyin!");history.back(-1);</script>';
				header("Refresh: 2; url=marketyenikayit.php");
	}

	ob_flush();
}

?>