<?php 
	session_start();
	if(isset($_SESSION['usuario'])){
		
 ?>



<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<?php require_once "menu.php"; ?>
	<link rel="stylesheet" href="css/estilo-fondoimg.css">	
	<link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
	
	
</head>
<body  style="background-color: gray;">


	<div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
      <div class="col d-flex justify-content-center">
      <div class="card" style="width: 379px;">
      <img src="../img/computadora4.jpg" class="card-img-top" alt="Teclado gamer Redragon Shiva blanco">
      <div class="card-body">
      <h5 class="card-title">LAPTOP/NOTEBOOK LENOVO LEGION5 R7 5800H 3.2GHZ-16GB-512GB SSD-TG RTX3060 6GB-PHANTOM B.-15.6 FHD-W11</h5>
      <p class="card-text">Low Pro</p>
      <i class="fas fa-map-marker-alt"></i> <span class="card-location">SKU: XT-L31-BLK</span>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item"> <del>$ 199999</del> <strong class="strong"> $789.99 </strong> </li>
    </ul>
    </div>
      </div>


      <div class="col d-flex justify-content-center">
    <div class="card" style="width: 379px;">
     <img src="../img/impresora.jpg" class="card-img-top" alt="Teclado gamer Redragon Kumara blanco">
        <div class="card-body">
          <h5 class="card-title">IMPRESORA MULTIFUNCION HP TINTA CONTINUA WL-515 22PPM NEGRO 16PP COLOR WIFI-BLUETOOTH</h5>
          <p class="card-text">Etiqueta: HP-COMPAQ</p>
         <i class="fas fa-map-marker-alt"></i> <span class="card-location"> SKU: WL-515 </span>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"> <del>$600.99</del> <strong class="strong"> $400.99 </strong> </li>
        </ul>
    </div>
      </div>


      <div class="col d-flex justify-content-center">
    <div class="card" style="width: 379px;">
     <img src="../img/portatil.jpg" class="card-img-top" alt="Teclado gamer Snake Vipera blanco">
      <div class="card-body">
      <h5 class="card-title">LAPTOP/NOTEBOOK DELL INSPIRON 3511 CI5-1135G7 2.4GHZ-8GB-256GB SSD-SILVER-15.6″FHD -T.NUM-W11</h5>
      <p class="card-text">Categorías: Computadoras, Laptops</p>
        <i class="fas fa-map-marker-alt"></i> <span class="card-location"> SKU: WL-515 </span>
      </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item"> <del>$800.99</del> <strong class="strong"> $ 700.99</strong> </li>
    </ul>
    </div>
      </div>


      <div class="col d-flex justify-content-center">
    <div class="card" style="width: 379px;">
     <img src="../img/portatil2.jpg" class="card-img-top" alt="Teclado gamer HP GK400F blanco">
        <div class="card-body">
          <h5 class="card-title">LAPTOP/NOTEBOOK DELL INSPIRON 3515 AMD R5 3450U 2.1GHZ-8GB-256GB SSD-SILVER-15.6″HD -T.NUM-W11</h5>
          <p class="card-text">Categorías: Computadoras, Laptops</p>
         <i class="fas fa-map-marker-alt"></i>  <span class="card-location">SKU: WL-515</span>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"> <del>$ 499</del> <strong class="strong"> $ 399 </strong> </li>
    </ul>
    </div>
      </div>


      <div class="col d-flex justify-content-center">
    <div class="card" style="width: 379px;">
        <img src="../img/portatil3.jpg" class="card-img-top" alt="Teclado gamer Redragon Fizz Pro blanco">
           <div class="card-body">
             <h5 class="card-title">LAPTOP/NOTEBOOK HP AMD R3 3250U 2.6GHZ-8GB-256GB SSD-NATURAL SILVER-15.6″HD-W11/h5>
             <p class="card-text">Categorías: Computadoras, Laptops</p>
             <i class="fas fa-map-marker-alt"> </i> <span class="card-location">SKU: WL-515</span> 
           </div>
           <ul class="list-group list-group-flush">
             <li class="list-group-item"> <del>$699.990</del> <strong class="strong"> $489.990 </strong> </li>
       </ul>
    </div>
      </div>
    


      <div class="col d-flex justify-content-center">
    <div class="card" style="width: 379px;">
        <img src="../img/computadora5.jpg" class="card-img-top" alt="Teclado gamer Razer Huntsman Mini blanco">
           <div class="card-body">
             <h5 class="card-title">LAPTOP/NOTEBOOK LENOVO G3 15IHU6 CI5 11300H 3.1GHZ-8GB-512GB SSD-TG GTX1650 4GB-SHADOW BLACK-15.6″FHD-W11</h5>
             <p class="card-text">Categorías: Computadoras, Laptops</p>
             <i class="fas fa-map-marker-alt"></i> <span class="card-location">SKU: WL-515</span>
           </div>
           <ul class="list-group list-group-flush">
             <li class="list-group-item"> <del>$169.990</del> <strong class="strong"> $148.990 </strong> </li>
       </ul>
    </div>
  </div>
</div>
</div>
</body>
</html>
<?php 
	}else{
		header("location:../index.php");
	}
 ?>
