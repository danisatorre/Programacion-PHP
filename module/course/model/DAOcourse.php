<?php
    include("model/connect.php");
    
	class DAOcourse{
		function insert_course($datos){
			// die('<script>console.log('.json_encode( $datos ) .');</script>');

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
	}