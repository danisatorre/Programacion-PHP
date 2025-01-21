<?php
    // include("model/connect.php");
    
	$path = $_SERVER['DOCUMENT_ROOT'] . '/0_intro/8_MVC_CRUD/Programacion-PHP/';
    include($path . "model/connect.php");

	class DAOcourse{
		function insert_course($datos){
			// die('<script>console.log('.json_encode( $datos ) .');</script>');
			$state="";

        	$name=$datos['name'];
        	$description=$datos['description'];
        	$category=$datos['category'];
        	$lvl=$datos['lvl'];
        	$fini=$datos['fini'];
        	$ffin=$datos['ffin'];
			$idioma=$datos['idioma'];
			foreach ($datos['state'] as $indice) {
        	    $state=$state."$indice:";
        	}
        	$price=$datos['price'];
			$hours=$datos['hours'];

        	$sql = "INSERT INTO course (name, description, category, lvl, fini, ffin, price, hours, idioma, state)"
        		. "VALUES ('$name', '$description', '$category', '$lvl', '$fini', '$ffin', '$price', '$hours', '$idioma', '$state')";
            
			// die('<script>console.log('.json_encode( $sql ) .');</script>');
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}
		
		function select_all_course(){
			// $data = 'hola DAO select_all_course';
            // die('<script>console.log('.json_encode( $data ) .');</script>');
			$sql = "SELECT * FROM course ORDER BY id ASC";
			// die('<script>console.log('.json_encode( $sql ) .');</script>');
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
			connect::close($conexion);
            return $res;
		}
		
		function select_course($id){
			// $data = 'hola DAO select_course';
            // die('<script>console.log('.json_encode( $data ) .');</script>');
			$sql = "SELECT * FROM course WHERE id='$id'";
			// die('<script>console.log('.json_encode( $sql ) .');</script>');
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql)->fetch_object();
            connect::close($conexion);
            return $res;
		}
		
		function select_lang($idioma) {
			// $data = 'hola DAO select_lang';
            // die('<script>console.log('.json_encode( $data ) .');</script>');
			// die('<script>console.log('.json_encode( $idioma ) .');</script>');
			$sql = "SELECT * FROM course WHERE idioma = '$idioma'";
			// die('<script>console.log('.json_encode( $sql ) .');</script>');
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
		}

		function update_course($datos){
			// die('<script>console.log('.json_encode( $datos ) .');</script>');
			$state="";

			$id=$datos['id'];
        	$name=$datos['name'];
        	$description=$datos['description'];
        	$category=$datos['category'];
        	$lvl=$datos['lvl'];
        	$fini=$datos['fini'];
        	$ffin=$datos['ffin'];
			$idioma=$datos['idioma'];
			foreach ($datos['state'] as $indice) {
        	    $state=$state."$indice:";
        	}
        	$price=$datos['price'];
			$hours=$datos['hours'];
        	
        	$sql = " UPDATE course SET name='$name', description='$description', category='$category', lvl='$lvl', fini='$fini', ffin='$ffin', price='$price', hours='$hours', idioma='$idioma', state='$state' "
        		. "WHERE id='$id';";
			// die('<script>console.log('.json_encode( $sql ) .');</script>');
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}
		
		function delete_course($id){
			// die('<script>console.log('.json_encode( $_GET['id'] ) .');</script>');
			$sql = "DELETE FROM course WHERE id='$id'";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
		}

		function delete_all_course(){
			$sql = "DELETE FROM course";
			// die('<script>console.log('.json_encode( $sql ) .');</script>');
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);

            return $res;
		}

		function insert_dummies(){
			$sql = " DELETE FROM course;
			INSERT INTO `course` (`id`, `name`, `description`, `category`, `lvl`, `fini`, `ffin`, `price`, `hours`, `idioma`, `state`) VALUES
			(1, 'HTML', 'Curso de HTML web', 'Frontend', 'Principiante', '10/11/2025', '10/12/2025', 150, 40, 'Frances', 'Online:'),
			(2, 'Desarrollo', 'Curso de desarrollo web', 'Backend', 'Avanzado', '20/05/2024', '20/06/2024', 180, 50, 'Portugues', 'Presencial:'),
			(3, 'Desplegamiento', 'Curso de desplegamiento web', 'FullStack', 'Medio', '21/02/2024', '10/07/2024', 599, 120, 'Aleman', 'Online:Presencial:'),
			(4, 'IA', 'Curso de IA', 'Backend', 'Principiante', '10/03/2024', '10/04/2024', 150, 40, 'Italiano', 'Online:Presencial:'),
			(5, 'Python', 'Curso de python para gente con experiencia', 'Backend', 'Avanzado', '20/05/2024', '20/06/2024', 180, 50, 'Aleman', 'Presencial:'),
			(6, 'Java', 'Curso de java', 'FullStack', 'Medio', '21/02/2024', '10/07/2024', 599, 120, 'Portugues', 'Online:Presencial:'),
			(7, 'PHP', 'Curso de PHP web', 'Backend', 'Principiante', '10/03/2024', '10/04/2024', 150, 40, 'Frances', 'Online:');
			";
			// die('<script>console.log('.json_encode( $sql ) .');</script>');
			$conexion = connect::con();
			$res = mysqli_multi_query($conexion, $sql);
			connect::close($conexion);

			return $res;
		}
	}