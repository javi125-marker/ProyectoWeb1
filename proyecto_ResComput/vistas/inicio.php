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
<body>


	<div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
      <div class="col d-flex justify-content-center">
      <div class="card" style="width: 379px;">
      <img src="../img/Teclado-1.png" class="card-img-top" alt="Teclado gamer Redragon Shiva blanco">
      <div class="card-body">
      <h5 class="card-title">Teclado Redragon Membrana Shiva K512w</h5>
      <p class="card-text">Low Pro</p>
      <i class="fas fa-map-marker-alt"></i> <span class="card-location">Lo Barnechea, RM, Santiago</span>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item"> <del>$45.990</del> <strong class="strong"> $29.900 </strong> </li>
    </ul>
    </div>
      </div>


      <div class="col d-flex justify-content-center">
    <div class="card" style="width: 379px;">
     <img src="../img/Teclado-2.jpg" class="card-img-top" alt="Teclado gamer Redragon Kumara blanco">
        <div class="card-body">
          <h5 class="card-title">Teclado gamer Redragon Kumara K552 Blanco RGB</h5>
          <p class="card-text">Digitalchoice</p>
         <i class="fas fa-map-marker-alt"></i> <span class="card-location"> Huechuraba, RM, Santiago </span>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"> <del>$43.990</del> <strong class="strong"> $33.990 </strong> </li>
        </ul>
    </div>
      </div>


      <div class="col d-flex justify-content-center">
    <div class="card" style="width: 379px;">
     <img src="../img/Teclado-3.jpg" class="card-img-top" alt="Teclado gamer Snake Vipera blanco">
      <div class="card-body">
      <h5 class="card-title">Teclado Snake Gamer Vipera SN690</h5>
      <p class="card-text">Todoclick</p>
        <i class="fas fa-map-marker-alt"></i> <span class="card-location"> Providencia, RM, Santiago</span>
      </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item"> <del>$35.990</del> <strong class="strong"> $34.190 </strong> </li>
    </ul>
    </div>
      </div>


      <div class="col d-flex justify-content-center">
    <div class="card" style="width: 379px;">
     <img src="../img/Teclado-4.jpg" class="card-img-top" alt="Teclado gamer HP GK400F blanco">
        <div class="card-body">
          <h5 class="card-title">Teclado gamer HP GK400F color blanco</h5>
          <p class="card-text">Revolution Games</p>
         <i class="fas fa-map-marker-alt"></i>  <span class="card-location">Maipú, RM, Santiago</span>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"> <del>$49.990</del> <strong class="strong"> $28.990 </strong> </li>
    </ul>
    </div>
      </div>


      <div class="col d-flex justify-content-center">
    <div class="card" style="width: 379px;">
        <img src="../img/Teclado-5.jpg" class="card-img-top" alt="Teclado gamer Redragon Fizz Pro blanco">
           <div class="card-body">
             <h5 class="card-title">Teclado Redragon Fizz Pro K616-RGB</h5>
             <p class="card-text">Inversiones Lym Spa</p>
             <i class="fas fa-map-marker-alt"> </i> <span class="card-location">La Dehesa, RM, Santiago</span> 
           </div>
           <ul class="list-group list-group-flush">
             <li class="list-group-item"> <del>$69.990</del> <strong class="strong"> $48.990 </strong> </li>
       </ul>
    </div>
      </div>
    


      <div class="col d-flex justify-content-center">
    <div class="card" style="width: 379px;">
        <img src="../img/Teclado-6.jpg" class="card-img-top" alt="Teclado gamer Razer Huntsman Mini blanco">
           <div class="card-body">
             <h5 class="card-title">Teclado gamer Razer Huntsman Mini</h5>
             <p class="card-text">Adata</p>
             <i class="fas fa-map-marker-alt"></i> <span class="card-location">Colina, RM, Santiago</span>
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
