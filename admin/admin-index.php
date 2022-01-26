<?php
  require '../scripts/funciones.php';
  if(! haIniciadoSesion() || ! esAdmin() )
  {
    header('Location: index.html');
  }

  conectar();
  $usuarios = getUsuarios();
  desconectar();
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>administracion Tareas</title>
	
	<!-- Aumentado del chat bot -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<style>

		.image-icon-whatsapp{
			position: fixed;
			bottom: 50px;
			right: 50px;
			cursor: pointer;
			transition: all 0.2s;
		}
	
		.image-icon-whatsapp:hover{
			transform: scale(0.9);
		}
	
		.image-icon-whatsapp:active{
			transform: scale(0.8);
		}
	
		.formulariowtsp{
			width: 270px;
			height: 430px;
			z-index: 454;
			border-radius: 5px;
			position: absolute;
			bottom: 90px;
			right: 30px;
			box-shadow: 4px 4px 4px 0px rgba(78, 25, 52, 0.788);
			background: rgba(214, 216, 216, 0.336);
			padding: 5px 10px;
			display: none;
			font-size: 15px;
		}
	
		.inputwts{
			width: 100%;
			box-sizing: border-box;
			padding: 5px;
			font-size: 13px;
			border-radius: 5px;
			border:1px solid rgba(99, 250, 242, 0.973);
			color: rgb(175, 20, 20);
			font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
		}
	
		.inputwts:focus{
			outline: none;
		}
	
		.textareawts{
			width: 100%;
			min-width: 100%;
			box-sizing: border-box;
			height: 140px;
			max-height: 140px;
			min-height: 140px;
			font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
			font-size: 13px;
			border-radius: 5px;
			padding: 0px;
			border:1px solid rgb(54, 223, 235);
			color: rgb(7, 22, 99);
	
	
		}
	
		.textareawts:focus{
			outline: none;
		}
	
		.newmessagewts{
			font-family: arial;
			display: block;
			text-align: center;
			width: 100%;
			box-sizing: border-box;
			line-height: 10px;
		}
		.btnwtsp{
			margin-top: -10px;
			width: 100%;
			height: 12%;
			border: none;
			padding: 15px;
			background: #551a3a;
			border-radius: 10px;
			color: rgb(241, 240, 240);
			font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
			cursor: pointer;
		}
	
		label{
			font-family: 'Lucida Sans', 'Lucida Sans Regular';
			font-size: 10px;
			color: #250f1a;
		}
	
		.entrarysalir{
			display: block;
		}
		
		.closemodal{
			position: absolute;
			top: 20px;
			right: 35px;
			padding: 5px;
			background: #b1afaf;
			width: 68px;
			height: 48px;
			border-radius: 10%;
			display: flex;
			justify-content: center;
			align-items: center;
			margin: 10px;
			line-height: 15px;
			cursor: pointer;
			border: solid rgb(141, 81, 81);
			box-shadow:0 0 44px 1px rgba(0,0,0) ;
		}
		.closemodal:hover{
			background: #f5efef;
			border: solid rgb(156, 158, 7);
			box-shadow:0 0 48px 1px rgb(240, 175, 122) ;
		}
		
		.bxl-whatsapp{color: rgb(160, 92, 92);}
		/* HEADER */
	  .chatbox__header {
	  color: white;
	  background:#3b132f;
	  display: flex;
	  flex-direction: row;
	  align-items: flex-start;
	   justify-content: flex-start;
	   box-shadow: 0 0 1px 1px rgba(170, 51, 117, 0.651);
	  border-radius: 10px;
	
	
	
	   }
	  .image-icon-whatsapp{
	  top: 470px;
	  right: 50px;
	   z-index: 1555555;
	 }
	
	</style>

	
	<!-- Estilo para texto en movimiento -->
	<link rel="stylesheet" type="text/css" href="css/css texto movimiento/textoMovimiento.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css">
	<!-- fin -->
	<!-- LINK ICONOS EN MOVIMIENTO -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">



		
		<!-- Stylos para Menu-->
		<link href="css/main.css" rel="stylesheet">
		<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
		<!-- Stylos para Menu-->
		<!-- Fin aumentado Chat BOt -->

		<!-- Script para CSS de la pagina -->
		
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">


		<!-- ChatBot -->
		<link rel="stylesheet" type="text/css" href="css/jquery.convform.css">
		<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="js/jquery.convform.js"></script>
		<script type="text/javascript" src="js/custom.js"></script>

		<style>
			

			.wrap{
			max-width: 1100px;
			width:90%;
			height: 90px;
			box-shadow: 0 0 6px rgba(197, 197, 36, 0.466);
			border-radius: 10px;
			margin: auto;
			background-color: #00000021;
		  }

				#title-1 {
				text-align: center;
				color: rgb(250, 247, 246);
				font-family: 'Roboto', sans-serif;
				font-size: 100px; 
				top: 10px;
				letter-spacing: 10px;
				line-height: 50px;
				font-style: normal;
				font-weight: 100;
				}
				body{
											
				background-image: linear-gradient(to top, hsla(0, 0%, 0%, 0.816)20%, rgba(6, 1, 16, 0.844) 80%),url(images/universo.gif);
				background-repeat: no-repeat;
				background-size: cover;
				background-attachment: fixed;
				background-position: center;
				background-size: 100%;
				
		
				}
		</style>
		<!--extension para el uso de botones-->
	<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
	
<!-- Panel del chat bot-->
	<div class="formulario">
		<div >
			<form id="formulariowtsp" action="" class="formulariowtsp"> <span class="closemodal"> <img src="../images/developer.png" alt="image" ></span>
				<!-- header de mi chat bot -->
				 <div class="chatbox__header">
					<div class="chatbox__image--header">
						<img src="./images/iphone.png" alt="image">
					</div>
				<div class="chatbox__content--header">
						<h6 class="chatbox__heading--header">Alberto Sanchez</h4>  <center><img src="images/trabajador (2).png" alt=""></center>
					</div> 
				</div>
				<!--  -->
				<label for="">Asunto</label>
				<input id="inputname" class="inputwts" type="text" required="" placeholder="Escribir aqui.." autocomplete="off">
				<label for="">Mensaje</label>
				<textarea id="inputmensaje" name="" id="" cols="30" rows="15" class="textareawts" required="" placeholder="Hola soy Alberto,enviame un mensaje a mi whatsapp.   Escribe aqui...."></textarea>
				<button type="submit" id="sendbttn" class="btnwtsp">Enviar mensaje</button type="submit">
			</form>
		</div>
		<img id="icon-whatsapp" class="image-icon-whatsapp" src="images/whatsapp (1).png" alt="" width="55">
		</div>
		<script>
			var IconWhatsapp = document.querySelector('#icon-whatsapp');
			var formulariowtsp = document.getElementById('formulariowtsp');
			var closemodal = document.querySelector('.closemodal');
			var sendbttn = document.querySelector('#sendbttn');
			
			
			IconWhatsapp.addEventListener('click' , function(){
				formulariowtsp.classList.toggle('entrarysalir')
			})
			
			closemodal.addEventListener('click' , function(){
				formulariowtsp.classList.remove('entrarysalir')
			})
			
			sendbttn.addEventListener('click' , EnviarMensaje)
			
			function EnviarMensaje(){
			
			
				let name = document.querySelector('#inputname').value;
				let mensaje = document.querySelector('#inputmensaje').value;
			
				let url = "https://api.whatsapp.com/send?phone=51976357951&text=Nombre: %0A" + name + "%0A%0AMensaje: %0A" + mensaje + "%0A";
				window.open(url);
			
			}
			
	    </script>
		


<!-- ChatBot -->
<div class="chat_icon">
	<img src="../admin/images/robot.png" alt="" class="fa fa-comments" aria-hidden="true" width="75px">
	<!-- <i class="fa fa-comments" aria-hidden="true"></i> -->
</div>
<!-- Programacion del Chat BOT -->
<div class="chat_box">
	<div class="my-conv-form-wrapper">
		<form action="" method="GET" class="hidden">

      <select data-conv-question="Hola! Bienvenido a mi blog personal,en que puedo ayudarte? " name="category">
		
	<option value="WebDevelopment">Conozco a Alberto ?</option>
        <option value="DigitalMarketing">Soy Visitante ?</option>
      </select>

      <div data-conv-fork="category">
        <div data-conv-case="WebDevelopment">
          <input type="text" name="domainName" data-conv-question="Muy bien.Podrias iniciar sesion para realizar tus actividades.<ol>
			<li>Revisar la pagina principal e inicia secion</li>
			<li>Si no eres usuario aun Registrate</li>
			<li>Revisa mi proyecto TodoLIst inciando secion</li>
			<li>Ingresa una nueva tarea o revisa las tereas pendientes</li>
			<li>Al terminar no Olvides Cerrar secion</li>
		</ol>. <br> Dejame saber que estas ahi,estas ahi?">   
		<select data-conv-question="Muy bien.Elige la opcion"  name="category">
			<option value="WebDevelopment">1.</option>
			<option value="DigitalMarketing">2.</option>
			<option value="DigitalMarketing">3.</option>
			<option value="DigitalMarketing">4.</option>
			<option value="DigitalMarketing">5.</option>
		  </select> 
        </div>
        <div data-conv-case="DigitalMarketing" data-conv-fork="first-question2">
          <input type="text" name="companyName" data-conv-question="Porfavor, cuantame en que puedo ayudarte o mandame un whatsapp<ol>
			<li>Deseo visitar la pagina oficial.</li>
			<li>Quiero solicitar informacion.</li>
			<li>Deseo comunicarme con Alberto</li>
			
		     </ol>. <br> Dejame saber que estas ahi,estas ahi?" > 
		  <select data-conv-question="Muy bien.Elige la opcion"  name="category">
			<option value="WebDevelopment">1.</option>
			<option value="DigitalMarketing">2.</option>
			<option value="DigitalMarketing">3.</option>
		  </select>
        </div>
      </div>

      <input type="text" name="name" data-conv-question="Porfavor,antes de este paso brindame tu nombre. ">

      <input type="text" data-conv-question="Muy bien {name}, <br> ahora puedes elegir una opcion." data-no-answer="true">


      <input data-conv-question="Estoy para servirte." data-pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" type="email" name="email" required placeholder="What's your e-mail?">

      <select data-conv-question="Please Conform">
        <option value="Yes">ChatBot</option>
      </select>

  	</form>
	</div>
</div>
<!-- ChatBot end <img src="../images/descarga.png"  width="90px" > <img src="../images/img slider/utea.png" alt="" width="65px" class="">-->






<!-- Titulo En Movimiento -->
<h1 id="title-1">
	<div class="wrap icon" > 
	<p class="parrafo" id="title-1" style="font-size: 50px;padding:10px">
		<em><span></span><strong class="usuario" >
		<img src="../admin/images/usuario.png"  style="width: 60px;">
		 <?= $_SESSION['usuario'] ?>.</strong></em></div></h1></p>
	</div>
	<center><div  style="margin-top: 10%;width:100%;margin-left:00px">  
	<em><img src="../admin/images/planeta (1).png " width="35px" ><span></span>
	<img src="../admin/images/negro.png" class="fa-spin-reverse" width="30px">
	<img src="../images/img slider/dom.png" class="fa-spin-reverse" width="50px"></span>
	<img src="../images/img slider/dom.png" class="fa-spin-reverse" width="10px">
	<span><img src="../admin/images/negros.png" class="fa-spin-reverse" width="20px"></span>
	<img src="../admin/images/negros.png" width="70px" class="fa-spin-reverse"></span><img src="../images/img slider/dom.png" width="150px" class="fa-spin-reverse">
	  <span><img src="../admin/images/tierra.png" width="39px" class="fa-spin">	  
	  <img src="../admin/images/img.png " width="10px" class="fa-spin-reverse"></span>
	  <img src="../images/img slider/dom.png" class="fa-spin-reverse" width="10px">
	  <span><img src="../admin/images/venus.png" width="18px" class="fa-spin"></span>
	  <img src="../admin/images/hi.png" class="fa-spin-reverse" width="35px">
	  <span><img src="../admin/images/negro.png" class="fa-spin-reverse" width="30px"></span>
	 
	</em></div></center> 
  <img src="" alt="">
</h1>
<!--  -->


<div style="margin-top: -5%;"><center>
	<p  id="title-1" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;color: #f5efef;font-size: 15px">
	PANEL DE ADMINISTRADOR.<br> 
	Usuario <?= $_SESSION['usuario'] ?>.</p><br>
	
		<a href="adminPanelAdministrador.php"><input type="button" value="Iniciar Actividades" 
			style="width: 150px;border-radius: 10px;
				background-color: #551a3a;
				color: #f5efef;
				border: solid 2px;">
			</a>
	<!--button Cerrar secion -->
	<a href="../scripts/cerrar-sesion.php" aria-placeholder="Cerrar sesión">
	<input type="button" value="Cerrar Sesión" 
			style="width: 150px;border-radius: 10px;
				background-color: #551a3a;
				color: #f5efef;
				border: solid 2px;">
	</a> 
	<!--Fin Cerrar secion -->
</center></div>

<div class="da-slide" style="margin-left: 70%;margin-top: -30%;">
	
	<h3 class="title " id="title-1"><em><span>
		<div class="wrap icon"> 
		  <img src="../images/img slider/peruano (1).png" alt="" class="">
		  <img src="../images/img slider/montana (2).png" alt="" class="" >  
		  <img src="../images/img slider/peruano.png" alt="" class="" >  <p style="font-size: 10px;">Bienvenido</p>
	  </div> </i></span ></em></h3>
	  
	
</div>	
 
<style>
				

				em {
				
				/* font-size: 100px; */
				text-transform: uppercase;
				letter-spacing: 10px;
				display: block;
				font-style: normal;
				padding-top: 1px;
			
				-webkit-perspective: 1000;
				perspective: 1000;
				}

				em span {
				display: inline-block;
				-webkit-animation: flip 0.5s cubic-bezier(0.0, 0.0, 1, 1.0) infinite;
				animation: flip 34s cubic-bezier(0.0, 0.0, 0.58, 2) infinite;
				}
				/*_____________________________TITULO MOVIMIENTOs*/


				p
				{
				font-size: 150px;
				}
				/*___________________________________________ICONO_Proceso en movimiento*/
			

								
				.icon {
				
				color: #f8751da4;
			
				}

				.icon:hover {
				color: #ffcb20;
				box-shadow: 0 0 15px rgba(245, 188, 188, 0.658);}
							
					.wrap{
					max-width: 1100px;
					width:100%;
					height: 100px;
					box-shadow: 0 0 6px rgba(243, 243, 35, 0.466);
					border-radius: 10px;
					margin: auto;
					background-color: #00000021;
				}

</style>
	
	<!-- <em><span></span ></em>    class="fa-spin"   class="fa-spin-reverse" -->
		  
		



<script type="text/javascript">
	portfolioList = document.querySelectorAll('.portfolio-box');
	portfolioList.forEach(function(portfolioPic) {
		portfolioPic.addEventListener('click',function(){
			bg = this.style.backgroundImage;
			document.getElementById('port_pop_pic_bg').classList.add("active")
			document.getElementById('port_pop_pic').style.backgroundImage = bg
			document.getElementById('port_pop_pic').classList.add("active")
		});	
	})
	document.getElementById('port_pop_pic_bg').addEventListener('click',function(){
			document.getElementById('port_pop_pic_bg').classList.remove("active")
			document.getElementById('port_pop_pic').classList.remove("active")
	})
</script>




	<!-- Stylos para Menu-->
    <script src="js/main.js"></script>
</body>
</html>