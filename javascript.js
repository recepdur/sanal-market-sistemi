
function function1(){

	var name1=prompt("name","Recep","surname","Recep");
	if (name1!=null)
	{
		document.getElementById("input1").innerHTML=name1;
	}

}

function isimsoyad(){
  
  var isim, soyad, hepsi;
  isim = document.Form1.ilkisim.value;//formdan ve textbox �n name'ini al�r
  soyad  = document.Form1.sonisim.value;//formdan ve textbox �n name'ini al�r
  hepsi  = isim + " " + soyad; 
  document.Form1.birlestir.value = hepsi;//formdan ve textbox �n name'ini al�r
}