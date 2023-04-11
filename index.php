<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</head>
<body style="background-color:pink;">
<?php require "functions/guvenlik.php"; ?>
<div class="alan" style="margin:25px">
<h1>PERSONEL KAYIT</h1>
<form action="hedef.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">KİŞİ ADI</label>
    <input type="text" name="kisi_adi" class="form-control" placeholder="Kişi Adı">
     </div>
     <label for="">UNVAN</label><br>
  <select name="unvan"> 
    <option value="Bay ">Bay</option>
    <option value="Bayan">Bayan</option>
  </select>
  <br>
    <div class="form-group">
        <label for="">DOĞUM TARİHİ: </label>
        <br>
        <input type="date" name="tarih" >
        
    </div><br>
    <div class="form-group">
    <small>FOTOĞRAF(".jpg, .jpeg, .png")</small>
    <input type="file" name="fotograf[]" class="form-control-file" multiple>
    <small>Profil ve Boy Resimlerini Yükleyiniz.</small>
  </div>

    <div class="form-group">
        <label for="">Renk Seçiniz</label><br>
        <input type="color" name="renk">
    </div>
 
  <label for="">Ehliyet</label>
  <br>
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="ehliyet" <?php if(isset($durum) && $text=="Var"){ echo "checked";} ?> value="Var">
  <label class="form-check-label" for="inlineRadio1">Var</label>
</div>
<br>
<div class="form-check form-check-inline">
  <input class="form-check-input"  type="radio" name="ehliyet" <?php if(isset($durum) && $text=="Yok"){ echo "checked";} ?> value="Yok">
  <label class="form-check-label" for="inlineRadio2">Yok</label>
</div>
<br>
<br>
  <label for="">Ehliyet Sınıfı</label>
  <br>
  <div class="form-check form-check-inline">
  <input class="form-check-input" name="sinif[]" type="checkbox"  value="A Sınıfı">
  <label class="form-check-label" for="inlineCheckbox1" >A Sınıfı</label>
</div>
<br>
<div class="form-check form-check-inline">
  <input class="form-check-input" name="sinif[]" type="checkbox"  value="B Sınıfı">
  <label class="form-check-label" for="inlineCheckbox2">B Sınıfı</label>
</div>
<br>
<div class="form-check form-check-inline">
  <input class="form-check-input" name="sinif[]" type="checkbox"  value="E Sınıfı" >
  <label class="form-check-label" for="inlineCheckbox3">E Sınıfı</label>
</div>
<br><br>
<div class="form-group">
    <label for="">Adli Sicil Kaydı(.png)</label>
    <input type="file" name="sicil" class="form-control-file" >
  </div><br>



<button type="submit" name="gonder" class="btn btn-primary">Kaydet</button>
</form>

</div>
</body>
</html>


        