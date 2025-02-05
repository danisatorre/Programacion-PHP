<?php
    // include("model/connect.php");
    
	$path = $_SERVER['DOCUMENT_ROOT'] . '/0_intro/8_MVC_CRUD/Programacion-PHP/';
    include($path . "model/connect.php");

	class DAOproduct{
		function insert_product($datos){
			// die('<script>console.log('.json_encode( $datos ) .');</script>');
			$sexo_prod="";

        	$marca=$datos['marca'];
        	$categoria=$datos['categoria'];
        	$tipo=$datos['tipo'];
        	$nom_prod=$datos['nom_prod'];
        	$entrega=$datos['entrega'];
        	$talla=$datos['talla'];
			foreach ($datos['sexo_prod'] as $indice) {
        	    $sexo_prod=$sexo_prod."$indice:";
        	}
        	$descripcion=$datos['descripcion'];
			$condicion=$datos['condicion'];
            $stock=$datos['stock'];
            $precio=$datos['precio'];
            $fini=$datos['fini'];
            $ffin=$datos['ffin'];

        	$sql = "INSERT INTO productos (marca, categoria, tipo, nom_prod, sexo_prod, talla, entrega, descripcion, condicion, stock, precio, fini, ffin)"
        		. "VALUES ('$marca', '$categoria', '$tipo', '$nom_prod', '$sexo_prod', '$talla', '$entrega', '$descripcion', '$condicion', '$stock', '$precio', '$fini', '$ffin')";
            
			// die('<script>console.log('.json_encode( $sql ) .');</script>');
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}
		
		function select_all_product(){
			// $data = 'hola DAO select_all_product';
            // die('<script>console.log('.json_encode( $data ) .');</script>');
			$sql = "SELECT * FROM productos ORDER BY id_producto ASC";
			// die('<script>console.log('.json_encode( $sql ) .');</script>');
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
			connect::close($conexion);
            return $res;
		}
		
		function select_product($id){
			// $data = 'hola DAO select_product';
            // die('<script>console.log('.json_encode( $data ) .');</script>');
			$sql = "SELECT * FROM productos WHERE id_producto='$id_producto'";
			// die('<script>console.log('.json_encode( $sql ) .');</script>');
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql)->fetch_object();
            connect::close($conexion);
            return $res;
		}

        function update_product($datos){
			// die('<script>console.log('.json_encode( $datos ) .');</script>');
			$state="";

			$id_producto=$datos['id_producto'];
        	$marca=$datos['marca'];
        	$categoria=$datos['categoria'];
        	$tipo=$datos['tipo'];
        	$nom_prod=$datos['nom_prod'];
        	$entrega=$datos['entrega'];
        	$talla=$datos['talla'];
			foreach ($datos['sexo_prod'] as $indice) {
        	    $sexo_prod=$sexo_prod."$indice:";
        	}
        	$descripcion=$datos['price'];
			$condicion=$datos['hours'];
            $stock=$datos['hours'];
            $precio=$datos['hours'];
            $fini=$datos['hours'];
            $ffin=$datos['hours'];
        	
        	$sql = " UPDATE productos SET name='$name', description='$description', category='$category', lvl='$lvl', fini='$fini', ffin='$ffin', price='$price', hours='$hours', idioma='$idioma', state='$state' "
        		. "WHERE id='$id';";
			// die('<script>console.log('.json_encode( $sql ) .');</script>');
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}
    }