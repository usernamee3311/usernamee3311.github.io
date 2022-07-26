<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initical-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
	<!-- <link rel="stylesheet" href="styles_form.css"> -->

	<script src="https://kit.fontawesome.com/60f57f767c.js" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<style type="text/css">
	*{

}

body {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	background-image: url('pipes.webp');
	font-size: 16px;
	
}

main {
	display: flex;
	margin: 0 auto;
	justify-content: center;
	align-items: center;
	
}

header {
	display: flex;
	color: white;
	box-shadow: 0px 1px 15px 2px rgba(0, 0, 0, 0.8);
	font-family: 'Monospace';
	text-align: center;
	justify-content: center;
	min-width: 280px;
	text-align: center;
	background-color: hsla(200.7, 80%, 40%,0.7);
}

/*ALINEACION*/
/*CONTENEDOR PRINCIPAL DEL FORMULARIO*/
.contenedor-form {
	border-radius: 6px;
	margin-top: 4rem;
	position: relative;
	width: 95vw;
	max-width: 700px;
	min-width: 290px;
	background-color: hsla(213.7, 77%, 47.6%, 0.75);
	box-shadow: 1px 2px 10px 4px hsla(0, 0%, 0%,0.7);

}
legend::after {
	position: absolute;
	content: '';
	width: 100%;
	height: 4px;
	display: block;
	background-color: hsla(0, 0%, 0%, 1.0);
}
legend {
	color: hsl(0, 100%, 100%);
	position: relative;
	margin-top: 12px;
	font-size: 1.7rem;
	font-family: 'Arial black';
}

fieldset {
	border-style: none;
	padding: 10px;
	min-width: 240px;

	
}

.dpersonales {

	padding: ;
	margin-bottom: 2rem;	
}

.dpersonales fieldset div,
.direccion fieldset div {
	display: flex;
	flex-direction: column-reverse;
	position: relative;
	
	

}

.dpersonales fieldset {
	display: flex;
	flex-direction: column;
	
}


.direccion fieldset, .dpersonales fieldset {

	gap: 19px;
}

.telefono {
	width: 50%;
	min-width: 140px;
	
}

.telefono input {
	
}




label {
	width: fit-content;
	position: relative;
	font-size: 1.3rem;
	margin-top: 1rem;
	font-weight: 700;
	font-family: 'Lato Heavy','Arial Black';

}



input {
	font-size: 1.2rem;
	border-style: none;
	border-radius: 4px;
	padding: 12px;
}


input:focus{

	outline: none;
	background-color: hsl(210, 40%, 70%);
	
}
input:focus ~ label {
	
 	color: hsl(0, 0%, 100%); /* focused red */
	transition: color 0.2s ease-out;

}


input:focus ~ label::after{

	/*display: flex;*/
	width: 100%;
	transition: width 1s ease-out;
}


label::after{

	position: absolute;
	bottom: 1px;
	content: '';
	width: 0%;
	background-color: hsla(0, 0%, 0%, 1.0);
	height: 2px;
	left: 0px;
	transition: background 0.5s linear;
}

footer {
	box-shadow: 0px 4px 8px 6px black;
	display: block;
	margin-top: 50px;
	height: 120px;
	background-color: hsl(200, 70%, 20%);
	
}


.curp {
	position: relative;
}

.curp a {
	font-family: "Arial";
	font-style: italic;
	position: absolute;
	left: 70px;
	top: 20px;
	font-size: 16px;
	text-decoration: none;
}

#curp::after {

}

.btn-enviar {
	display: flex;
	justify-content: center;
	align-items: center;
	padding: 24px;
	margin: 12px;

}

button:hover {

	color: white;
	background-color: hsl(210, 50%, 55%);
	border-style: solid;
	border-color: white;
	border-width: 1px;
	transition: background-color .3s linear;
}

button {
	width: 13rem;
	padding: 19px 40px;
	min-height: 78px;
	font-family: 'Verdana';
	font-weight: bold;
	font-size: 1.7rem;
	border-radius: 6px;
	border-style: none;
	color: hsl(200, 70%, 50%);

}

#error-form {
	background-color: wwhite;
	font-family: 'Ubuntu';
	font-weight: bold;
	color: hsl(0, 40%, 50%);
	line-height: 1;
	height: 1rem;
	display: flex;
	justify-content: center;
	align-items: center;
}

.fa-user-tie,
.fa-id-card,
.fa-envelope,
.fa-phone{
	position:absolute;
	right: 12px;
	bottom: 15px;

}





@media screen and (min-width: 569px) {
	.direccion fieldset, .dpersonales fieldset  {
		display: grid;
		grid-template-columns: minmax(0, 1fr) minmax(0, 1fr) ;
	}

	.estado-container, .telefono {
		grid-column: 1/3;
		margin: 0 auto;
		width: 50%;

	}



}

/*
.nombre:hover label::before {
	position: absolute;
	content: '';
	width: 300px;
	height: 2px;
	display: block;
	background-color: red;
}
*/



</style>

</head>
<body>
	<header id="header" class="">
		<h1>Formulario De Registro</h1>
		<div>
				
		</div>	
	</header>
	<!-- /header -->


	<main>

			<div class="contenedor-form">
				<form id="form" action="control_data.php" enctype="multipart/form-data" method="POST" accept-charset="utf-8">

				<div class="dpersonales">
				
				<fieldset>

					<legend>Datos Personales</legend>



								<div class="nombre">
									
									<input type="text" placeholder="Juan" name="nombre" name="">
									<i class="fa-solid fa-user-tie"></i>

									<label for="nombre">Nombre's<span>:</span></label>
									
								</div>

								<div class="apellido">
									<input type="text" placeholder="Perez" name="apellido">
									<i class="fa-solid fa-user-tie"></i>
									<label for="nombre">Apellido's<span>:</span></label>
								</div>

								<div class="correo">
									<input type="email" placeholder="Juan.Perez@gmail.com" name="correo">
									<i class="fa-regular fa-envelope"></i>
									<label for="nombre">Correo Electronico<span>:</span></label>
								</div>

								<div class="curp">
									<input type="text" placeholder="" name="curp" >
									<i class="fa-regular fa-id-card"></i>
									<label id="curp" for="nombre">CURP<span>:</span></label>
									<a href="https://www.gob.mx/curp/" target="blank_" title="">Obtener!</a>
								</div>

								<div class="telefono">
									<input type="text" placeholder="5555 55 55 55" name="telefono" maxlength="10">
									<i class="fa-solid fa-phone"></i>
									<label for="nombre">Telefono (10 digitos)<span>:</span></label>
								</div>
							</div>
				</fieldset>

					
				<div class="direccion">
				<fieldset>
					<legend>Direccion</legend>	
							<div id="calle">
								<input type="text" name="calle">		
								<label for="nombre" >Calle<span>:</span></label>
							</div>

							<div>
								<input type="text" name="colonia">	
								<label for="nombre">Colonia<span>:</span></label>
							</div>

							<div>
								<input type="text" name="municipio">
								<label for="nombre">Municipio o Alcaldia<span>:</span></label>
							</div>

							<div>
								<input type="text" name="num_interior">
								<label for="nombre">Numero Interior<span>:</span></label>
							</div>

							<div>
								<input type="text" name="num_exterior" id="num_ext">
								<label for="nombre">Numero Exterior<span>:</span></label>
							</div>

							<div>
								<input type="text" name="cp" id="cp">
								<label for="nombre">Codigo Postal<span>:</span></label>
							</div>
							<div>
								<input type="text" value="Mexican(o/a)" name="nacionalidad">
								<label for="nombre">Nacionalidad<span>:</span></label>
							</div>

							<div>
								<input type="text" value="Mexico" name="pais">
								<label for="nombre">Pais<span>:</span></label>
							</div>

							<div class="estado-container">
								<input type="text" name="estado">
								<label for="nombre">Estado<span>:</span></label>
							</div>
						</div>
				</fieldset>


					</form>
						<span id="error-form"></span>
						<div class="btn-enviar">
							<button type="submit" form="form">ENVIAR</button>
						</div>
			</div>




	</main>

	<footer>
		
		
		
	</footer>

</body>

<!-- <script type="text/javascript">

	function ValidateData(result){
		for (var [key,value] of result.entries()) {
			console.log(key,value)
			if (value.trim() == ""){
				document.getElementById("error-form").textContent = "Formulario Incompleto"
				return false
			}
		};

	};


	     $('#form').on('submit',function(e){
             e.preventDefault();
         
         var formData = new FormData(this);
            $.ajax({
                type:'POST',
                url: $('#form').attr('action'),
                data:formData,
                cache:false,
                contentType: false,
                processData: false,
                success:function(result){
         if(result){
         	
         	if (ValidateData(formData) != false) {

         	}
         	else{
         		return false
         	}
         	/*console.log(result.split('<br>').slice(2,-1))*/

         }
         else{}
    }
    })
   })
</script> -->
</html>

