<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İlk PHP Sayfam</title>
</head>

<body>
    <!-- <?php
    echo phpinfo(); //todo phpinfo kodu çalıştırıldığında php nin tüm ayarlarını görebiliriz 
    ?> -->

<?php
$title = "php dersleri";
?>    
<h1>
    <?php
    
    //* ilk değişkenlerim
    $maasKamil = 20000; //! değişken tanımlanırken $ işareti kullanılır
    $maasOktay = 15000; 
    $vergi = 0.27;
    echo $maasKamil-($maasKamil * $vergi );
    echo  "<br>";
    echo $maasOktay-($maasOktay * $vergi);
    echo  "<br>";

    //! değişken tanımlama
    $ad = "kamil umut";
    $soyad = "araz";
    echo $ad." ".$soyad; //todo nokta operatörleri ile tanımladığımız değişkenler yan yana yazılabilir
    
    
                            //! DEĞİŞKEN TÜRLERİ
//! string veri türü
$ürünAdi = "Macbook Pro";
echo $ürünAdi;  // echo ile veriyi ekrana yazdırır
echo gettype($ürünAdi); //todo  burada da değeri ve tipini gösterir (string number vs..)
//todo sonuç string çıkacaktır önceden de biliyorsun zaten

echo "<br>"; //* bir alt satıra geçme. bunları biliyorsun zaten

//! integer veri türü
$ürünFiyati = 12000;
echo $ürünFiyati ." ".  gettype($ürünFiyati); //todo yine aynı == sonuç integer olarak çıkar
//? çift tırnağın içinde boşluk var nokta işretleri ile yapıldığında yan yana arada boşluk olavak şekilde yazdırır

echo "<br>";
//! double veri türü
$kdvOrani = 0.18;
echo $kdvOrani. " " .gettype($kdvOrani); //todo double olarak çıktır verir

echo "<br>";

//! boolean veri türü
$ürünSatiştami = true;
echo gettype($ürünSatiştami); //todo çıktı olarak boolean türü çıkacaktır
echo "<br>";
                        //!TÜR DÖNÜŞÜMLERİ
$a = (double)300; //? normalde integer veri türü - ama integer ın yanına hangi türde çalışılmak istenirse o belirtilirse veri türü dönüşmüş olur
echo gettype($a); //* double örnektir
echo "<br>";
            //!Sabitler
            define("MAAS", 5000);   //todo define olarak kullanılır

                //! Diziler(arrays)
            $renk1="kırmızı";
            $renk2 = "mavi";
            $renk3="sarı";
            //böyle yapmak yerine hepsi bi arada bulunan bir dizi tanımlayabiliriz
            $tümRenkler= array ("kırmızı","mavi","sarı");
            echo  $tümRenkler[0]; //todo bu sayede ilk elemanı verir yani = kırmızı
            echo"<br>";
            echo $tümRenkler[2];//todo burda da 2. elemanı yani sarıyı verir
           echo "<br>";
        //! associative arrays
        $plakabilgileri =array(
            "42" => "konya",
            "41" =>"kocaeli",
            "06" => "ankara");
           
            echo $plakabilgileri["42"]; //todo bu sayede anahtar değeri ile erişim yapabiliriz 
            //? yani 42 yazdığımızda konya olarak çıkacaktır
echo "<br>";
            //! cok boyutlu diziler
            $öğrenciİsmiveNotlarA = array ("Ahmet Yılmaz",array(50,80,20,30));
            $öğrenciİsmiveNotlarB =array ("Kamil Umut Araz",array(20,60,80,90));
            echo  $öğrenciİsmiveNotlarA[0] ;//todo
            echo "<br>" ;
            echo $öğrenciİsmiveNotlarA[1][0];
            echo  "<br>" ;
            echo $öğrenciİsmiveNotlarB[1][3];
            //todo böylelikle dizi içinde dizi tanımlanabilir
              echo "<br>";
           $ögrenciAortalama = ($öğrenciİsmiveNotlarA[1][0] + $öğrenciİsmiveNotlarA[1][2] + $öğrenciİsmiveNotlarA[1][2] / 3);
           echo $ögrenciAortalama;
            














        ?>
</h1>
</body>
</html>
