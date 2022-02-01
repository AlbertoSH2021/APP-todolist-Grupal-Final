<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insertar datos</title>
    
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body >
<br>

<div class="wrapper" id="contact">
		<div class="wra">
			
			<center><h3>INICIAR SESION</h3></center>
				    <div class="contact_form">
						<!--  -->
						<form action="../scripts/iniciar-sesion.php" method="POST">
						  <span><input type="text"  placeholder="Usuario"  name="txtUsuario"  
							 onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'NAME';}"
							><label><img src="images/con1.png" alt="" /></label></span>									    
						  <span class="left" ><input type="password"   placeholder="Contraseña"  name="txtClave" 
						 onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'EMAIL';}"
							><label><img src="images/con2.png" alt="" /></label></span>
						  <div class="clear"></div>
										    	
						  <input type="submit" class="btn btn-primary " value="INICIAR SESION">
						</form>
						<!--  -->
					</div>
		</div>
	</div>


        <div id="wrapper" class="container">
  
                
                 <center>

                    <h2>REGISTRARTE</h2><hr>
                       <center><form  method="POST" name="form-work" action="logica/guardar.php">
                    
                                <fieldset>
                                
                                  <div class="form-group">
                                    <div class="col-md-6">
                                      <label class="control-label" for="nome">ID usuario</label>
                                      <input name="usuario" class="form-control" placeholder="Nombre usuario" type="text">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="col-md-6">
                                        <label class="control-label" for="nome">Contraseña</label>
                                        <input name="clave" class="form-control" placeholder="contraseña usuario" type="password">
                                        </div>
                                      </div>
                            
                          
                                    
                          
                                    <div class="form-group">
                                    
                                      <div class="col-md-6">
                                          
                                        <label class="control-label" for="email">Es Admin?</label>
                                        <input name="admin" class="form-control" placeholder="permisos de admin" type="text">
                                      </div>
                                      <p>(si=1/no=0)</p>
                                    </div>
                          
                                   
                                  
                                    <div class="form-group">
                                      <div class="col-md-6">
                                       <center><button type="submit" class="btn btn-primary wra">Registrarme</button></center> 
                                      </div>
                                    </div>     
                                </fieldset> 
                              </form></center>
                 </center>
              </div>
    


    <style>
                                            body {
                            font-family: 'Open Sans', sans-serif;
                        }
                        
                        h1, h2, h3, h4, h5, h6 {
                            font-weight: 300;
                        }
                        
                        p {
                            color: #999;
                        }
                        
                        strong {
                            color: #333;
                        }
                        
                        #wrapper {
                            width: 100%;
                            max-width: 600px;
                            margin: 0 auto;
                            text-align: center;
                            padding: 30px 0;
                        }
                        
                        .page-head-image {
                            
                        }
                        
                        .page-head-image img {
                            border-radius: 50%;
                        }
                        
                        #form-trabalhe {
                            margin-top: 30px;
                            text-align: left;
                        }
                        
                        label {
                            font-weight: normal;
                            margin-top: 15px;
                        }
                        
                        input {
                            border: 2px solid #CCC !important;
                            height: 35px;
                            border-radius: 3px;
                            max-width: 100%;
                        }
                        
                        .input-group-addon {
                            border: 2px solid #CCC !important;
                            border-right: 0px !important;
                        }
                        
                        .btn {
                            border: 0;
                            border-radius: 3px;
                            margin-top: 20px;
                        }
                        
                        .form-group {
                            margin-bottom: 0;
                            text-align: left;
                        }
    </style>
 <!-- butones ash -->
 <section id="figura">
                <div class="rectangulo"></div>
                </section>
                <style>
                                    body{
                                background: rgba(232, 235, 226, 0.568);
                                display: flex;
                                justify-content: center;
                                align-items: center;
                                min-height: 100vh;
                                flex-direction: column;
                                }
                                .button_atras{
                                    color: rgba(244, 241, 246, 0.808);
                                    text-decoration: none;
                                    font-size: 1.3rem;
                                    font-weight: bold;
                                    position: fixed;
                                    z-index: 10;
                                    top: 30px;
                                    right: 30px;
                                    background:rgb(236, 236, 236) ;
                                    height: 40px;
                                    width: 40px;
                                    cursor: pointer;
                                    border-radius: 10px;
                                    box-shadow: 0 0 6px rgba(0,0,0,1);
                                    
                                }
                                .button_refresh{
                                    color: rgba(241, 246, 241, 0.808);
                                    text-decoration: none;
                                    font-size: 1.3rem;
                                    font-weight: bold;
                                    position: fixed;
                                    z-index: 10;
                                    top: 30px;
                                    right: 90px;
                                    background:rgb(236, 236, 236) ;
                                    height: 40px;
                                    width: 40px;
                                    cursor: pointer;
                                    border-radius: 10px;
                                    box-shadow: 0 0 6px rgba(0,0,0,1);
                                    
                                }
                                .button_refresh0{
                                    color: rgba(241, 246, 241, 0.808);
                                    text-decoration: none;
                                    font-size: 1.3rem;
                                    font-weight: bold;
                                    position: fixed;
                                    z-index: 10;
                                    top: 30px;
                                    right: 150px;
                                    background:rgb(236, 236, 236) ;
                                    height: 40px;
                                    width: 40px;
                                    cursor: pointer;
                                    border-radius: 10px;
                                    box-shadow: 0 0 6px rgba(0,0,0,1);
                                    
                                }
                </style>
                
                    
                
                <button type="radius" class="button_refresh"><a href="insertarusuarios.php" class="back-button"><i class='bx bx-refresh'></i></i></a></button>
                <button type="radius" class="button_atras" pha><a href="../index.html" class="back-button"><i class='bx bx-arrow-back'></i></a></button>
                
            <!-- <li><a href="../scripts/cerrar-sesion.php">Cerrar sesión</a></li>  -->
            <!-- <li><a href="scripts/cerrar-sesion.php">Cerrar sesión</a></li> -->
                </nav>
        <!-- fin botones ash -->




        <style>
                        body{
                               
                                display: flex;
                                justify-content: center;
                                align-items: center;
                                min-height: 100vh;
                                flex-direction: column;
                    }
                    body{
                                    
                                    background-image: linear-gradient(to top, hsla(323, 82%, 15%, 0.603) 0%, rgba(19, 7, 73, 0.486) 100%),url(images/gift.gif);
                                    background-repeat: no-repeat;
                                    background-size: cover;
                                    background-attachment: fixed;
                                    background-position: center;
                                    color: White;
                                    
                                    font-weight: bold;
                                    }
                                    .sidebar{
                background-color:  rgba(255, 255, 255, 0.541);
                }
                .container-fluid{
                    background-color: rgba(0, 0, 0, 0.527);
                    border-radius: 20px;
                }
                .table-striped{
                    color: black;
                    background-color: rgba(95, 158, 160, 0.63);
                }
        </style>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</html>