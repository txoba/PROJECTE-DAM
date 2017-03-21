<?php
function selectcomentario(){
	$con = conectar("godmusic");
	$select = "select idconcierto, nombre, dia, hora, pago, genero, ciudad, sexo, nacimiento, nombre_artistico, genero from concierto;";
    // Ejecutamos la consulta y recogemos el resultado
    $resultado = mysqli_query($con, $select);
    $fila = mysqli_fetch_assoc($resultado);
    desconectar($con);
    // devolvemos el resultado
    return $fila;
} 
function selectConciertos(){
	$con = conectar("godmusic");
	$select = "SELECT concierto.nombre, concierto.dia, usuario.nombre_artistico, concierto.hora, concierto.pago, genero.nomestilo
FROM concierto
INNER JOIN usuario ON concierto.idlocal = usuario.idusuario
INNER JOIN genero ON concierto.genero = genero.idgenero
WHERE usuario.perfil =  'l'
LIMIT 0 , 9";
    // Ejecutamos la consulta y recogemos el resultado
    $resultado = mysqli_query($con, $select);
    desconectar($con);
    // devolvemos el resultado
    return $resultado;
} 
function search(){
        $con= conectar("godmusic");
        $select= "select name from concierto";
        $resultado= mysqli_query($con, $select);
			desconectar($con);
			return $resultado;
		}
// Función que modifica los datos de session en la bbdd.
function setDatosSession($username, $nombre, $apellidos, $newPass, $descripcion, $localizacion, $genero) {
    $con = conectar("godmusic");
    $update = "update usuario set nombre_usuario=$username, password=$newPass, nombre=$nombre, apellidos=$apellidos, email, telefono, ciudad, sexo=$genero, nacimiento, nombre_artistico, genero, componentes, direccion=$localizacion, perfil where nombre_usuario='$username';";
    	// Ejecutamos la consulta
    if (mysqli_query($con, $query)) {
        // Si ha ido bien
        
    } else {
        // Sino mostramos el error
        echo mysqli_error($con);
    }
    desconectar($con);
}
function insertarText($text, $id){
	$con = conectar("godmusic");
	$query = "insert into comentaris(`comentari`, `idusuarioqueescribe`) values('$text', '$id');";

	// Ejecutamos la consulta
    if (mysqli_query($con, $query)) {
        // Si ha ido bien

    } else {
        // Sino mostramos el error
        echo mysqli_error($con);
    }
    desconectar($con);
}
function sessionUsu($username){
	$con = conectar("godmusic");
	$select = "select idusuario, nombre_usuario, nombre, apellidos, email, telefono, ciudad, sexo, nacimiento, nombre_artistico, genero, componentes, direccion, perfil from usuario where nombre_usuario='$username';";
    // Ejecutamos la consulta y recogemos el resultado
    $resultado = mysqli_query($con, $select);
    $fila = mysqli_fetch_assoc($resultado);
    desconectar($con);
    // devolvemos el resultado
    return $fila;
} 
function loginUsu($username, $pass){
	$con = conectar("godmusic");
	$query = "select nombre_usuario, password from usuario where nombre_usuario='$username' and password='$pass';";
	// Ejecutamos la consulta
    if ($res = mysqli_query($con, $query)) {
        // Si ha ido bien
        if(mysqli_num_rows($res))
        {
            desconectar($con);
            return 1;
        }
    } else {
        // Sino mostramos el error
        echo mysqli_error($con);
    }
    desconectar($con);
    return 0;
}
function insertarUsu($username, $pass, $mail, $usu){
	$con = conectar("godmusic");
	$query = "insert into usuario(`nombre_usuario`, `password`, `email`, `perfil`) values('$username', '$pass', '$mail', '$usu');";
	// Ejecutamos la consulta
    if (mysqli_query($con, $query)) {
        // Si ha ido bien

    } else {
        // Sino mostramos el error
        echo mysqli_error($con);
    }
    desconectar($con);
}
function ultimcosConciertos() {
    $con = conectar("godmusic");
    $query = "select concierto.dia,u.nombre_artistico, us.nombre_artistico from usuario as u inner join concierto on idusuario=idlocal
inner join usuario as us on us.idusuario!=u.idusuario where us.perfil=('m') order by dia asc;";
    $resultado = mysqli_query($con, $query);
    desconectar($con);
    return $resultado;
}
function rankingHomepage() {
    $con = conectar("godmusic");
    $query = "select usuario.nombre_artistico, genero.nomestilo,sum(idmusico) as 'sumaVotos' from usuario inner join voto_musico as votos on idmusico=idusuario 
inner join genero on genero=idgenero where perfil='m' group by idmusico;";
    $resultado = mysqli_query($con, $query);
    desconectar($con);
    return $resultado;
}
function votarFan() {
    $con = conectar("godmusic");
    $query = "select usuario.nombre_artistico,count(idmusico) as 'sumaVotos' from usuario inner join voto_musico as votos on idmusico=idusuario 
where perfil='m' group by idmusico;";
    $resultado = mysqli_query($con, $query);
    desconectar($con);
    return $resultado;
}
function gruopsAssignadosLocal() {
    $con = conectar("godmusic");
    $query = "select concierto.dia,concierto.hora,u.nombre_artistico, us.nombre_artistico, ciudad.nomciudad, concierto.pago as 'valor economico' from usuario as u inner join concierto on idusuario=idlocal
inner join usuario as us on us.idusuario!=u.idusuario inner join ciudad on idciudad=idlocal  where us.perfil=('m');";
    $resultado = mysqli_query($con, $query);
    desconectar($con);
    return $resultado;
}

//function tablavotoconcierto(){
//        $con = conectar("godmusic");
//    $query = "select concierto.dia,concierto.hora,u.nombre_artistico, us.nombre_artistico, ciudad.nomciudad, count(voto_concierto.idconcierto) as 'votos' from usuario as u inner join concierto on idusuario=idlocal
//inner join usuario as us on us.idusuario!=u.idusuario inner join ciudad  inner join voto_concierto on voto_concierto.idconcierto=concierto.idconcierto where us.perfil=("m") group by voto_concierto.idconcierto;";
//    $resultado = mysqli_query($con, $query);
//    desconectar($con);
//    return $resultado;
//}

function conectar($database) {
    $conexion = mysqli_connect("127.0.0.1", "root", "", $database)
            or die("No se ha podido conectar a la BBDD");
    return $conexion;
}
function desconectar($conexion) {
    mysqli_close($conexion);
}
?>