<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
      <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
      <link rel="stylesheet" href="css/styles.css">
    <title>Preguntas Frecuentes</title>
  </head>
  <body>
<header>
  <?php
require_once("includes/header-nav.php");
   ?>
</header>
<br><br>

<div class="contenedor">
  <br>

  <div class="titulo success">
    <h3> Preguntas Frecuentes </h3>
  </div>

<!-- <div class="container"> -->
	<div class="row">
	    <ul id="accordion" class="col-sm-6 col-md-12">

  <!-- Question one -->
	      <li>
	       <div id="choose" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" >
	        Necesito estar registrado para realizar una compra?
	        <span class="fa fa-chevron-up fa-1x text-info pull-right"></span>
	       </div>

         <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
          <div class="card-body">
           No, no es necesario crear una cuenta para poder comprar en Puppyshop. Pero tené en cuenta que al hacerlo podrás llevar un control de las compras y movimientos realizados en nuestra tienda online.
          </div>
         </div>
	      </li>

	 <!-- Question two -->
	      <li>
	       <div class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
	        Cómo se puede pagar?
	        <span class="fa fa-chevron-down fa-1x text-info pull-right"></span>
	       </div>

         <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
           <div class="card-body">
            Podes abonar los productos con tarjeta de crédito y débito, depósito bancario, y en efectivo si los pasas a buscar por nuestros locales.
            En cualquier caso esperaremos la acreditación del pago para enviarte el producto.
           </div>
         </div>
	      </li>

	  <!-- Question three -->
	      <li>
	       <div class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
	        Se realizan entregas a domicilio? Y al interior del país?
	        <span class="fa fa-chevron-down fa-1x text-info pull-right"></span>
	       </div>

         <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
          <div class="card-body">
           Realizamos envíos a todo el país. Si tu compra es superior a 2 mil pesos, el envío es sin costo.
          </div>
         </div>
	      </li>

	   <!-- Question Four -->
	        <li>
	         <div class="collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
	          Cuánto tiempo demora la entrega?
	          <span class="fa fa-chevron-down fa-1x text-info pull-right"></span>
	         </div>

           <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
            <div class="card-body">
             sciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
           </div>
	        </li>

	   <!-- Questiion Five -->
	        <li>
	         <div class="collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
	          How can I join the team?
	          <span class="fa fa-chevron-down fa-1x text-info pull-right"></span>
	         </div>

           <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
            <div class="card-body">
             Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
           </div>
	        </li>

	   <!-- Question Six-->
	        <li>
	         <div class="collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
	          In case I forgot my password, what do I do?
	          <span class="fa fa-chevron-down fa-1x text-info pull-right"></span>
	         </div>

           <div id="collapseSix" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
             Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
           </div>
	        </li>

	    </ul>
	</div>
</div>
</div>

<footer>


</footer>
    <!-- Jquery -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!--bootstrap  -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>
