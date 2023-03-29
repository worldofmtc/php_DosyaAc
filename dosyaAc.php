<?
function Yeni($isim,$soyad,$adres) {//Yeni bir dosya açıp açmak
   $sayilar=rand(1000,9999);// yeni sayfa için random sayı üretme
   $dosya = fopen("$sayilar.txt","w");

   fwrite($dosya, "Adı: $isim\n");
   fwrite($dosya, "adres: $soyad\n");
   fwrite($dosya, "tel: $adres\n");

   fclose($dosya);//kapat
   $sonSayfa=$_SERVER['HTTP_REFERER'];//bir önceki sayfaya dön
   header("location:$sonSayfa");

}
function Mevcut($isim,$soyad,$adres) {//mevcut dosyanın içeriğine devam etmek

   $dosya = fopen("dosya.json","a");//dosya aç

   fwrite($dosya, "Adı: $isim\n"); //içine yaz
   fwrite($dosya, "adres: $soyad\n");
   fwrite($dosya, "tel: $adres\n");

   fclose($dosya); // kapat
   $sonSayfa=$_SERVER['HTTP_REFERER'];//bir önceki sayfaya dön
   header("location:$sonSayfa");

}

if ($_REQUEST['D']=='Ac') {
  Mevcut($_POST['ad'],$_POST['soyad'],$_POST['adres']);// mevcut bir dosyaya yazmaya devam eder
}
if ($_REQUEST['D']=='ac') {
   Yeni($_POST['ad'],$_POST['soyad'],$_POST['adres']);//sürekli yeni bir dosya açar ve içine yazar
}

 ?>
