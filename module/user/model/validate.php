<?php
    // function validate_id($id){
    //     $sql = "SELECT * FROM course WHERE id='$id'";

    //     $conexion = connect::con();
    //     $res = mysqli_query($conexion, $sql)->fetch_object();
    //     connect::close($conexion);
    //     return $res;
    // }

    function validate_name($name){
        $sql = "SELECT * FROM course WHERE name='$name'";

        $conexion = connect::con();
        $res = mysqli_query($conexion, $sql)->fetch_object();
        $res = $res->num_rows;
        connect::close($conexion);
        return $res;
    }
    
    function validate() {
        // $data = 'hola validate php';
        // die('<script>console.log('.json_encode( $data ) .');</script>');

        $check = true;

        // $id = $_POST['id'];
        $name = $_POST['name'];
        // $id = validate_id($id);
        $name = validate_name($name);

        // if($id !== null){
        //     echo '<script language="javascript">setTimeout(() => {
        //         toastr.error("El id no puede estar repetido");
        //     }, 1000);</script>';
        //     $check = false;
        // }

        if($name !== null){;
            echo '<script language="javascript">setTimeout(() => {
                toastr.error("El nombre no puede estar repetido");
            }, 1000);</script>';
            $check = false;
        }

        return $check;
    }
?>