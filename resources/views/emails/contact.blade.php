{{--MOSTRAMOS LA INFORMACION QUE ESTAMOS ENVIANDO A TRAVES DEL REQUEST--}}
{{--HACEMOS REFERENCIA A LO QUE ESTAMOS RECIBIENDO DEL FORMULARIO NAME, EMAIL Y MENSAJE--}}
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<p><stron>Nombre: </stron>{!!$name!!}</p>
	<p><stron>Correo: </stron>{!!$email!!}</p>
	<p><stron>Mensaje: </stron>{!!$mensaje!!}</p>
</body>
</html>
