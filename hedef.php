<?php
require "functions/guvenlik.php";


if(isset($_POST["gonder"]) ){
    $kisi_adi=$_POST["kisi_adi"];
    //$kisi_adi=security($_POST["kisi_adi"]);
    $unvan=$_POST["unvan"];
    $tarih=$_POST["tarih"];
    $renk=$_POST["renk"];
    $durum=$_POST["ehliyet"];
    $sinif=$_POST["sinif"];

    $yazi="";
    foreach($sinif as $text){
     $yazi=$text;
    }
    $bugunun_tarihi = date('Y-m-d');
    if (strtotime($bugunun_tarihi) - strtotime($tarih)>18) {
        echo "<script> alert('18 Yaşından Küçüksünüz!!')</script>.";
        
    }

   

}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:<?php echo $renk; ?>;">
<?php
echo $kisi_adi."<br>";
    echo $unvan."<br>";
    echo $tarih."<br>";
    echo $durum."<br>";
    echo $yazi."<br>";?>


<p>Fotoğraflar:</p>
<?php


$dosya_sayisi = count($_FILES['fotograf']['name']);
if (2 <= $dosya_sayisi) {
    $dosyalar = $_FILES["fotograf"];
    foreach ($dosyalar["tmp_name"] as $myKey => $myValue) {
        $dosyalarName = $dosyalar["name"][$myKey];
        $dosyalarTempName = $dosyalar["tmp_name"][$myKey];
        $dosyalarPath = "dosyalar/" . $dosyalarName;
        $dosyalarType = strtolower(pathinfo($dosyalarPath, PATHINFO_EXTENSION));

        

        if ($dosyalarType != "jpg" && $dosyalarType != "jpeg" && $dosyalarType != "png") {
            
            echo "<br>Dosya uzantısı desteklenmiyor";

        } else {
            if (file_exists($dosyalarPath)) {
                echo "<br>Dosya zaten var";
            } else {
                if (move_uploaded_file($dosyalarTempName, $dosyalarPath)) {
                    echo "<br>Dosya yüklendi : " . $dosyalarName."<br>" ;
                    echo "<img src='$dosyalarPath'>";
                }
            }

        }
    }
} else {
    echo "<br>Minimum 2 dosya olmalı";
}

?>

<br>
<p>Adli Sicil Kaydı :</p>
<?php
$target_dir = "dosyalar/";

$target_file = $target_dir . basename($_FILES["sicil"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image

  $check =$_FILES["sicil"]["tmp_name"];



// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["sicil"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "pdf") {
  echo "Sorry, only PDF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["sicil"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["sicil"]["name"])). " has been uploaded.";
   


  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>
    
</body>
</html>