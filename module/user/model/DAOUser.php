<?php
    include("model/connect.php");
    
	class DAOUser{
		function insert_user($datos){
			// die('<script>console.log('.json_encode( $datos ) .');</script>');

        	$name=$datos['name'];
        	$description=$datos['description'];
        	$category=$datos['category'];
        	$lvl=$datos['lvl'];
        	$fini=$datos['fini'];
        	$ffin=$datos['ffin'];
        	$price=$datos['price'];
			$hours=$datos['hours'];

        	$sql = "INSERT INTO course (name, description, category, lvl, fini, ffin, price, hours)"
        		. "VALUES ('$name', '$description', '$category', '$lvl', '$fini', '$ffin', '$price', '$hours')";
            
			// die('<script>console.log('.json_encode( $sql ) .');</script>');
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}
		
		function select_all_user(){
			// $data = 'hola DAO select_all_user';
            // die('<script>console.log('.json_encode( $data ) .');</script>');
			$sql = "SELECT * FROM course ORDER BY id ASC";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
			connect::close($conexion);
            return $res;
		}
		
		function select_user($id){
			// $data = 'hola DAO select_user';
            // die('<script>console.log('.json_encode( $data ) .');</script>');
			$sql = "SELECT * FROM course WHERE id='$id'";
			// die('<script>console.log('.json_encode( $sql ) .');</script>');
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql)->fetch_object();
            connect::close($conexion);
            return $res;
		}
		
		function update_user($datos){
			// die('<script>console.log('.json_encode( $datos ) .');</script>');
			$id=$datos['id'];
        	$name=$datos['name'];
        	$description=$datos['description'];
        	$category=$datos['category'];
        	$lvl=$datos['lvl'];
        	$fini=$datos['fini'];
        	$ffin=$datos['ffin'];
        	$price=$datos['price'];
			$hours=$datos['hours'];
        	
        	$sql = " UPDATE course SET name='$name', description='$description', category='$category', lvl='$lvl', fini='$fini', ffin='$ffin', price='$price', hours='$hours' "
        		. "WHERE id='$id';";
			// die('<script>console.log('.json_encode( $sql ) .');</script>');
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}
		
		function delete_user($id){
			$sql = "DELETE FROM course WHERE id='$id'";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
		}
	}