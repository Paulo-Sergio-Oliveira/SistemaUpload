<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <title>Imobiliária</title>
  </head>
  <body>
    <div class="container">
    <h1> <b>Imobiliária</b> </h1>
      <div class="row">
        <div class="col img1"></div>
        <div class="col img2"></div>
        <div class="col img3"></div>
      </div>
      <div class="row">
        <div class="col img4"></div>
        <div class="col img5"></div>
        <div class="col img6"></div>
      </div>
      <div class="row">
        <div class="col img7"></div>
        <div class="col img8"></div>
        <div class="col img9"></div>
      </div>
      <div class="row">
        <div class="col img10"></div>
        <div class="col img11"></div>
        <div class="col img12"></div>
      </div>
      <div class="row">
        <div class="col img13"></div>
        <div class="col img14"></div>
        <div class="col img15"></div>
      </div>
    </div>
  </body>
</html>
<?php
$dir1 = mkdir('Cômodos');
$dir2 = $_POST['diretorio'];
if(is_dir($dir1)){
}else{
    mkdir('Cômodos');
}
if(is_dir($dir2)){
}else{
    mkdir('Cômodos/'.$dir2);
}
$nomeFile1 = $_POST['diretorio'].'1';
$nomeTemp1 = $_FILES['imagem1']['tmp_name'];
$nomeF1 = $_FILES['imagem1']['name'];
$parInfo1 = pathinfo($nomeF1);
$ext1 = $parInfo1['extension'];
if($ext1 == "jpg"){
    $ctrl1 = move_uploaded_file($nomeTemp1, "$dir/$nomeFile1.$ext1");
}elseif($ext1 == "png"){
    $ctrl1 = move_uploaded_file($nomeTemp1, "$dir/$nomeFile1.$ext1");
}elseif($ext1 == "jpeg"){
    $ctrl1 = move_uploaded_file($nomeTemp1, "$dir/$nomeFile1.$ext1");
}else{
    $ctrl1 = FALSE;
}
if($ctrl1){
}else{
    echo "Tipo do Primeiro Arquivo Incompatível<br>";
    echo "Upload da Imagem 1 Não Realizado<br>";
}
$nomeFile2 = $_POST['diretorio'].'2';
$nomeTemp2 = $_FILES['imagem2']['tmp_name'];
$nomeF2 = $_FILES['imagem2']['name'];
$parInfo2 = pathinfo($nomeF2);
$ext2 = $parInfo2['extension'];
if($ext2 == "jpg"){
    $ctrl2 = move_uploaded_file($nomeTemp2, "$dir/$nomeFile2.$ext2");
}elseif($ext2 == "png"){
    $ctrl2 = move_uploaded_file($nomeTemp2, "$dir/$nomeFile2.$ext2");
}elseif($ext2 == "jpeg"){
    $ctrl2 = move_uploaded_file($nomeTemp2, "$dir/$nomeFile2.$ext2");
}else{
    $ctrl2 = FALSE;
}
if($ctrl2){
}else{
    echo "Tipo do Segundo Arquivo Incompatível<br>";
    echo "Upload da Imagem 2 Não Realizado<br>";
}
$nomeFile3 = $_POST['diretorio'].'3';
$nomeTemp3 = $_FILES['imagem3']['tmp_name'];
$nomeF3 = $_FILES['imagem3']['name'];
$parInfo3 = pathinfo($nomeF3);
$ext3 = $parInfo3['extension'];
if($ext3 == "jpg"){
    $ctrl3 = move_uploaded_file($nomeTemp3, "$dir/$nomeFile3.$ext3");
}elseif($ext3 == "png"){
    $ctrl3 = move_uploaded_file($nomeTemp3, "$dir/$nomeFile3.$ext3");
}elseif($ext3 == "jpeg"){
    $ctrl3 = move_uploaded_file($nomeTemp3, "$dir/$nomeFile3.$ext3");
}else{
    $ctrl3 = FALSE;
}
if($ctrl3){
}else{
    echo "Tipo do Terceiro Arquivo Incompatível<br>";
    echo "Upload da Imagem 3 Não Realizado<br>";
}
echo "<style>
.col{
border: 5px solid saddlebrown;
height: 200px;
margin: 5px;
position: relative;
background-size: cover;
}
.container{
text-align: center;
font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
h1{
font-size: 50px;
}
.img1{
background-image: url(Cozinha/Cozinha1.$ext1);
}
.img2{
background-image: url(Cozinha/Cozinha2.$ext2);
}
.img3{
background-image: url(Cozinha/Cozinha3.$ext3);
}
.img4{
background-image: url(Quarto/$nomeFile1.$ext1);
}
.img5{
    background-image: url(Quarto/$nomeFile2.$ext2);
}
.img6{
background-image: url(Quarto/$nomeFile3.$ext3);
}
.img7{
background-image: url(Garagem/$nomeFile1.$ext1);
}
.img8{
background-image: url(Garagem/$nomeFile2.$ext2);
}
.img9{
background-image: url(Garagem/$nomeFile3.$ext3);
}
.img10{
background-image: url(Sala/$nomeFile1.$ext1);
}
.img11{
background-image: url(Sala/$nomeFile2.$ext2);
}
.img12{
background-image: url(Sala/$nomeFile3.$ext3);
}
</style>";
?>