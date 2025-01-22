<?php

    function validate_name($name){
        // $data = 'hola validate name (inicio) php';
        // die ('<script>console.log('.json_encode( $data ) .');</script>');
        $conexion = connect::con();
        if (!$conexion) {
            die('<script>console.log("Error al conectar a la base de datos.");</script>');
        }
        $sql = "SELECT * FROM course WHERE name='$name'";
        // $data = 'Consulta SQL generada: ' . $sql;
        // die ('<script>console.log('.json_encode( $data ) .');</script>');
        $res = mysqli_query($conexion, $sql);
        // if (!$res) {
        //     die('<script>console.log("Error en la consulta SQL: ' . mysqli_error($conexion) . '");</script>');
        // }
        // $data = 'hola validate name (mysqli_query) php';
        // die ('<script>console.log('.json_encode( $data ) .');</script>');
        $res = $res->num_rows;
        // $data = "Número de filas encontradas: $res";
        // die ('<script>console.log('.json_encode( $data ) .');</script>');
        connect::close($conexion);
        // $data = 'hola validate name (close_connection) php';
        // die ('<script>console.log('.json_encode( $data ) .');</script>');
        return $res;
        // $data = 'hola validate name (final) php';
        // die ('<script>console.log('.json_encode( $data ) .');</script>');
    }

    function validate_name_update($name){
        $sql = "SELECT * FROM course WHERE name='$name'";
        
        $conexion = connect::con();
        $res = mysqli_query($conexion, $sql)->fetch_row();
        connect::close($conexion);
        return $res;
    }
    
    function validate() {
        // $data = 'hola validate php';
        // die('<script>console.log('.json_encode( $data ) .');</script>');

        $check = true;

        $name = $_POST['name'];
        $name_exists = validate_name($name);
        // $data = 'hola name php';
        // die ('<script>console.log('.json_encode( $data ) .');</script>');


        if($name_exists > 0){;
            // $data = 'hola name_exists php';
            // die ('<script>console.log('.json_encode( $data ) .');</script>');
            echo '<script language="javascript">setTimeout(() => {
                toastr.error("El nombre no puede estar repetido");
            }, 1000);</script>';
            $check = false;
        }else{
            return $check;   
        }
    }

    function validate_update() {
        $check = true;

        $name = $_POST['name'];
        $name = validate_name_update($name);

        if($name !== null){
            if($name[1] !== $_POST['old_name']){
                echo '<script language="javascript">setTimeout(() => {
                    toastr.error("El nombre introducido esta en úso por otro curso");
                }, 1000);</script>';
                $check = false;
            }
        }
        return $check;
    }
?>