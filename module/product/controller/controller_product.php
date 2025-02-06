<?php
    //$data = 'hola crtl products';
    //die('<script>console.log('.json_encode( $data ) .');</script>');

    // include ("module/product/model/DAOproduct.php");
    $path = $_SERVER['DOCUMENT_ROOT'] . '/0_intro/8_MVC_CRUD/Programacion-PHP/';
    include($path . "module/product/model/DAOproduct.php");
    //session_start();

    switch($_GET['op']){
        case 'list';
            // $data = 'hola crtl products list (branch main)';
            // die('<script>console.log('.json_encode( $data ) .');</script>');
            // $data = 'hola crtl products list (branch mejoras)';
            // die('<script>console.log('.json_encode( $data ) .');</script>');
              
            try{
                $daoproduct = new DAOproduct();
            	$rdo = $daoproduct->select_all_product();
                // die('<script>console.log('.json_encode( $rdo ) .');</script>');
                //die('<script>console.log('.json_encode( $rdo->num_rows ) .');</script>');
            }catch (Exception $e){
                $callback = 'index.php?page=503';
			    die('<script>window.location.href="'.$callback .'";</script>');
            }
            
            if(!$rdo){
    			$callback = 'index.php?page=503';
			    die('<script>window.location.href="'.$callback .'";</script>');
    		}else{
                include("module/product/view/list_product.php");
    		}
            break;
            
        case 'create';
            // definir variables para evitar el error de variable no inicializada
            $error_marca="";
            $error_categoria="";
            $error_tipo="";
            $error_nom_prod="";
            $error_sexo="";
            $error_talla="";
            $error_entrega="";
            $error_descripcion="";
            $error_condicion="";
            $error_stock="";
            $error_price="";
            $error_fini="";
            $error_ffin="";

            // $data = 'hola crtl products create';
            // die('<script>console.log('.json_encode( $data ) .');</script>');
            // die('<script>console.log('.json_encode( $_POST ) .');</script>');

            include("module/product/model/validate.php");
            
            // $check = true;
            
            if ($_POST){
                // $data = 'hola create post product';
                // die('<script>console.log('.json_encode( $data ) .');</script>');
                // die('<script>console.log('.json_encode( $_POST ) .');</script>');

                $check=validate();
                // die('<script>console.log('.json_encode( $check ) .');</script>');

                if ($check){
                    // die('<script>console.log('.json_encode( $_POST ) .');</script>');
                    try{
                        $daoproduct = new DAOproduct();
    		            $rdo = $daoproduct->insert_product($_POST);
                        // die('<script>console.log('.json_encode( $rdo ) .');</script>');
                        $name = $_POST['nom_prod'];
                        // die('<script>console.log('.json_encode( $name ) .');</script>');
                    }catch (Exception $e){
                        $callback = 'index.php?page=503';
        			    die('<script>window.location.href="'.$callback .'";</script>');
                    }
                    
		            if($rdo){
                        echo '<script>
                        Swal.fire({
                            title: "Curso creado!",
                            text: "El producto ' . $name . ' ha sido creado correctamente",
                            icon: "success",
                            willClose: () => {
                                window.location.href = "index.php?page=controller_product&op=list";
                            }
                        });
                        </script>';
            		}else{
            			$callback = 'index.php?page=503';
    			        die('<script>window.location.href="'.$callback .'";</script>');
            		}
                }
            }
            include("module/product/view/create_product.php");
            break;
            
        case 'update';  
            // definir variables para evitar el error de variable no inicializada
            $error_marca="";
            $error_categoria="";
            $error_tipo="";
            $error_nom_prod="";
            $error_sexo="";
            $error_talla="";
            $error_entrega="";
            $error_descripcion="";
            $error_condicion="";
            $error_stock="";
            $error_price="";
            $error_fini="";
            $error_ffin="";

            // $data = 'hola crtl product update';
            // die('<script>console.log('.json_encode( $data ) .');</script>');

            include("module/product/model/validate.php");
            $check = true;
            // die('<script>console.log('.json_encode( $check ) .');</script>');
            
            if ($_POST){
                // $data = 'hola update post product';
                // die('<script>console.log('.json_encode( $data ) .');</script>');
                // die('<script>console.log('.json_encode( $_POST ) .');</script>');

                $check=validate_update();
                // $check=true;
                // die('<script>console.log('.json_encode( $check ) .');</script>');
                
                if ($check){
                    // $data = 'hola update check true product';
                    // die('<script>console.log('.json_encode( $data ) .');</script>');
                    // die('<script>console.log('.json_encode( $_POST ) .');</script>');
                    try{
                        // $data = 'hola update valid validate_product.js product';
                        // die('<script>console.log('.json_encode( $data ) .');</script>');
                        $daoproduct = new DAOproduct();
    		            $rdo = $daoproduct->update_product($_POST);
                        $nom_prod = $_POST['nom_prod'];
                        // die('<script>console.log('.json_encode( $name ) .');</script>');
                        // die('<script>console.log('.json_encode( $rdo ) .');</script>');
                        // die('<script>console.log('.json_encode( $_POST ) .');</script>');
                        // $data = 'hola update valid (final) validate_product.js product';
                        // die('<script>console.log('.json_encode( $data ) .');</script>');
                    }catch (Exception $e){
                        // $data = 'hola update error validate_product.js product';
                        // die('<script>console.log('.json_encode( $data ) .');</script>');
                        $callback = 'index.php?page=503';
        			    die('<script>window.location.href="'.$callback .'";</script>');
                    }
                    
		            if($rdo){
                        // die('<script>console.log('.json_encode( $rdo ) .');</script>');
            			echo '<script>
                        Swal.fire({
                            title: "Curso actualizado!",
                            text: "El producto ' . $nom_prod . ' ha sido actualizado correctamente",
                            icon: "success",
                            willClose: () => {
                                window.location.href = "index.php?page=controller_product&op=list";
                            }
                        });
                        </script>';
            		}else{
                        // $data = 'hola update error validate_product.js product';
                        // die('<script>console.log('.json_encode( $data ) .');</script>');
                        echo '<script language="javascript">setTimeout(() => {
                            toastr.error("Error al modificar el curso");
                        }, 1000);</script>';
            			$callback = 'index.php?page=503';
    			        die('<script>window.location.href="'.$callback .'";</script>');
            		}
                }
            }
            
            // die('<script>console.log('.json_encode( $_GET['id'] ) .');</script>');
            try{
                // die('<script>console.log('.json_encode( $_GET['id'] ) .');</script>');
                $daoproduct = new DAOproduct();
                // die('<script>console.log('.json_encode( $daoproduct ) .');</script>');
                $id=$_GET['id_producto'];
                // die('<script>console.log('.json_encode( $id ) .');</script>');
                if(isset($id)){
                    // $data = 'hola update $ID product';
                    // die('<script>console.log('.json_encode( $data. ' ' .  $id ) .');</script>');
                    // die('<script>console.log('.json_encode( $id ) .');</script>');
                    $rdo = $daoproduct->select_product($id);
                    // die('<script>console.log('.json_encode( $rdo ) .');</script>');
                }
            	$product=get_object_vars($rdo);
                // die('<script>console.log('.json_encode( $product ) .');</script>');
            }catch (Exception $e){
                $callback = 'index.php?page=503';
			    die('<script>window.location.href="'.$callback .'";</script>');
            }
            
            if(!$rdo){
    			$callback = 'index.php?page=503';
    			die('<script>window.location.href="'.$callback .'";</script>');
    		}else{
        	    include("module/product/view/update_product.php");
    		}
            break;

        case 'read_modal':
            
                // $data = 'hola crtl product read_modal';
                // die('<script>console.log('.json_encode( $data ) .');</script>');
    
                // echo $_GET['id_producto'];
                // exit;
                
                try{
                    $daoproduct = new DAOproduct();
                    $rdo = $daoproduct->select_product($_POST['id_producto']);
                }catch (Exception $e){
                    echo json_encode("error");
                    exit;
                }
    
                if(!$rdo){
                    echo json_encode("error");
                    exit;
                }else{
                    $product = get_object_vars($rdo);
                    echo json_encode($product);
                    // echo json_encode("error");
                    exit;
                }
    
            break;
    }
?>