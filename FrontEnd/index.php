<html lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	    <!--GENERA TODO EL CSS PARA QUE TOME FORMA Y NO SOLO SEA HTML-->
		<link rel="stylesheet" type="text/css" href="./Sinaloense_files/style.css">
		<!-- GENERA UN BOTON CUANDO LA PANTALLA SE HACE MAS PEQUEÑA Y MUESTRA LA BARRA PRINCIPAL-->
		<link href="./Sinaloense_files/css" rel="stylesheet" type="text/css">
		<script src="./Sinaloense_files/jquery-latest.js.descarga"></script>
	    <script src="./Sinaloense_files/main.js.descarga"></script>
<!-------------------------------------------------------------------------------------------------------->

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #e26e02;
    color: white;
    padding: 14px 20px;
    margin: 2px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 10%;
    border-radius: 80%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.1s;
    animation: animatezoom 0.1s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>




<!-------------------------------------------------------------------------------------------------------->
</head>
	<body>
	




<div id="id01" class="modal">
  
  <form class="modal-content animate" method="POST" action="../BackEnd/login.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="login123.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Usuario</b></label>
      <input type="text" placeholder="Introduce Usuario" name="uname" required>

      <label for="psw"><b>Contraseña</b></label>
      <input type="password" placeholder="Introduce Contraseña" name="psw" required>
        
      <!--<button type="submit">Entrar Como Administrador</button>-->
	   <button type="submit">Entrar Como Administrador</button>
     
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>
	
	
	<header class="h-body_bajo">
		<div class="logo"><img src="./Sinaloense_files/logo.png"></div>
		
		<div class="menu_bar">
				<a class="bt-menu"><img src="./Sinaloense_files/circular-menu-button.png"></a>
				
	</div>
	</header>
	<nav>
		<ul>
		<div id="navbar">
	        <li><a href="index.php"><span class="icon-earth"></span>Inicio</a></li>   <!-- pagina del index-->
			<li><a href="catalogo.php"><span class="icon-mail"></span>Catalogo</a></li>   <!--catalogo desde la BD papa -->
	        <li><a href="nosotros.html"><span class="icon-mail"></span>Sobre Nosotros</a></li>  <!-- politicas "nosotros" :v-->
	        <li><a href="contacto"><span class="icon-mail"></span>Contacto/Sucursales</a></li>  <!--sucursales si es que existen :,v y contacto -->  	
			<li><a href="javascript:void(0);" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Iniciar Sesion</a></li> 
			</div>
	    </ul>
	</nav>
	
	<script>
		// Get the modal
		var modal = document.getElementById('id01');
		
		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}
		</script>	
	
	
	
	
	
	
	
	
	
	<div class="fondo_azul">
		<div class="container">
			<a href="pagina sobre la promocion"><img class="item-full" src="./Sinaloense_files/bg-amortiguadores.jpg"></a> 	  <!--cuando cliente darl click pum promo papa :v-->
		</div>
	</div>
	<div class="fondo123">
		<div class="container"> 
			<ul class="two-rows">
				<li class="r-75 pa-10"><img style="width: 100%;" src="./Sinaloense_files/slider_img_6.jpg"></li>
				<li class="r-25">
					<form action="pagina sobre el catalogo :v" class="form-art">  <!-- aqui va la pagina donde se mostrara los resultados de la buscqueda en la BD :V-->
					  	<p style="font-weight: bold;">Busqueda de refacciones</p>
					    <p><label>Linea:</label></p>
						<p><select class="select-r" name="lineaRefaccion">
		 				    <option value="1">Alerones de Defensa</option>
						    <option value="2">Amortiguadores Suspension</option>
		  				    <option value="3">Anticongelantes</option>
		  				    <option value="4">Bases de Faro</option>
		  				    <option value="5">aceite </option>
		  				    <option value="6">facias</option>
		  				    <option value="7">Cofre</option>
		  				    <option value="8">Biseles</option>
		  				    <option value="9">y ponemos mas y mas...</option>
						   <!-- <option value="10">describe producto </option>  y a si para mas cositas chidoris :,v--> 
						</select></p>
						<p><label>Marca:</label></p>
						<p>
							<select class="select-r" name="marcaRefaccion">
   			        			<option value="1">Acura</option>
				    			<option value="2">Audi</option>
	                			<option value="3">BMW</option>
						      	<option value="4">Cadillac</option>
						      	<option value="5">Chevrolet</option>
						      	<option value="6">Dodge </option>
						      	<option value="7">Fiat</option>
						      	<option value="8">Ford</option>
						      	<option value="9">Honda</option>
						      	<option value="10">Hyundai</option>
						      	<option value="11">Isuzu</option>
						      	<option value="12">Jeep</option>
						      	<option value="13">Kia</option>
						      	<option value="14">Lincoln</option>
						      	<option value="15">Mazda</option>
						      	<option value="16">Mercedez Benz</option>
								<option value="17">Mini</option>
								<option value="18">Mitsubishi</option>
								<option value="19">Nissan</option>
								<option value="20">Peugeot</option>
								<option value="21">Renault</option>
								<option value="22">Satum</option>
								<option value="23">Seat</option>
								<option value="24">Suzuki</option>
								<option value="25">Toyota</option>
								<option value="26">Volkswagen</option>
								<option value="27">Volvo</option>
						     </select>
						</p>
						<p class="or-right">
							<input type="submit" class="button-black" value="Buscar">
						</p>
					</form>
				</li>
			</ul>
	  		<h2>Lo mas nuevo en refacciones y Articulos </h2>
			<hr>
		  	<ul class="four-rows">
	          	<li class="mar-10">
	        		<a href="pagina del producto con el id :v">  <!-- desde este vamos a poner el link que redirreccione a la promo compa :,v--> 
	          			<div class="item-content">
	            			<img src="./Sinaloense_files/12B.png">
	            		</div>
	          			<div style="color: #FFF; background-color: #000; text-align: center; font-weight: bold;"></div>
	          		</a>
	      	   	</li>
	            <li class="mar-10">
	        		<a href="link del producto de enemedio :v">   <!-- desde este vamos a poner el link que redirreccione a la promo compa :,v--> 
	          			<div class="item-content">
	            			<img src="./Sinaloense_files/11B.png">
	            		</div>
	          			<div style="color: #FFF; background-color: #000; text-align: center; font-weight: bold;"></div>
	          		</a>
	      		</li>
	            <li class="mar-10">
	        		<a href="link del tercer producto :v">  <!-- desde este vamos a poner el link que redirreccione a la promo compa :,v--> 
	          			<div class="item-content">
	            			<img src="./Sinaloense_files/10B.png">
	            		</div>
	          			<div style="color: #FFF; background-color: #000; text-align: center; font-weight: bold;"></div>
	          		</a>
	      		</li>
		        <li class="mar-10">
		    	    <a href="Link del cuarto producto alv compa :v">   <!-- desde este vamos a poner el link que redirreccione a la promo compa :,v--> 
		        	  	<div class="item-content">
		            		<img src="./Sinaloense_files/9B.png">
		            	</div>
		          		<div style="color: #FFF; background-color: #000; text-align: center; font-weight: bold;"></div>
		          	</a>
		      	</li>
		    </ul>
			<ul class="four-rows">
				<li class="h-200">
					<a href="https://www.upq.mx">
						<div class="t-left">
							<h3>Sobre nosotros</h3>
							<p><img src="./Sinaloense_files/logofooter.png"></p>
							<p class="font-12 font-gray">Somos un grupo de estudiantes esperanzados en Pasar esta materia bien chida  Nos encontramos en la UPQ  dentro del sexto cuatrimestre haciendo plantillas de prueba  Contamos con productos como:  faros, cuartos, calaveras, defensas, parrillas, cofres, radiadores, condensadores, etc, mayoreo y menudeo.</p>
						</div>	
					</a>
				</li>
				
				<li class="h-200">
					<a href="https://www.upq.mx">
						<h3>Horarios</h3>
						<ul class="schedule font-12">
							<li>
								<strong>Lunes</strong>
								<span>2:00 apm - 6:00 pm</span>
							</li>
							<li>
								<strong>Martes</strong>
								<span>2:00 pm - 8:40 pm</span>
							</li>
							<li>
								<strong>Miercoles</strong>
								<span>2:00 pm - 7:00 pm</span>
							</li>
							<li>
								<strong>Jueves</strong>
								<span>2:00 pm - 8:40 pm</span>
							</li>
							<li>
								<strong>Viernes</strong>
								<span>2:00 am - 7:50 pm</span>
							</li>
							<li>
								<strong>Sabado</strong>
								<span>7:50 am - 12:50 pm</span>
								<span>por recursamiento de redes</span>
							</li>
							<li>
								<strong>Domingo</strong>
								<span>Cerrado</span>
							</li>
						</ul>	
					</a>		
				</li>
				
				<h3>Visitanos</h3>
				<div class="f_contact f_contact_1"><strong>Domicilio:<br></strong> Carretera Estatal 420, El Marqués, 76240 Santiago de Querétaro, Qro</div>
				<div class="f_contact f_contact_2"><strong>Telefono:</strong> 01 442 101 9000<br><strong>	Telefono 2:</strong> (442) 210 1616</div>
				<div class="f_contact f_contact_2"><strong>Email:</strong> contacto@SinaloaUPQ.com <br><strong></strong></div>
			</ul>
		</div> 
	</div>
	<footer class="h-body_bajo">
		<div class="container">
			<ul class="horizontal">
				<li style="font-size:22px">Síguenos a través de las redes sociales:&nbsp;&nbsp;&nbsp; </li>
				<li><a href="https://www.facebook.com/CAJC3"><img src="./Sinaloense_files/fb_icon.png" alt=""></a></li>
				<li><a href="https://twitter.com/"><img src="./Sinaloense_files/twitter_icon.png" alt=""></a></li>
			</ul>
			<br>
			<br>
		</div>
	<a href="ftp://127.0.0.1/" target="_blank"><img src="./Sinaloense_files/ftp.png" alt="" width="60px" height="70px"></a>
	</footer>
	
	<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
	
	
	
	
	
	</body>
</html>