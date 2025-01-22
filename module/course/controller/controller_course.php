<?php
    //$data = 'hola crtl courses';
    //die('<script>console.log('.json_encode( $data ) .');</script>');

    // include ("module/course/model/DAOcourse.php");
    $path = $_SERVER['DOCUMENT_ROOT'] . '/0_intro/8_MVC_CRUD/Programacion-PHP/';
    include($path . "module/course/model/DAOcourse.php");
    //session_start();

    switch($_GET['op']){
        case 'list';
            $data = 'hola crtl courses list (branch main)';
            die('<script>console.log('.json_encode( $data ) .');</script>');
            // $data = 'hola crtl courses list (branch mejoras)';
            // die('<script>console.log('.json_encode( $data ) .');</script>');
              
            try{
                $daocourse = new DAOcourse();
            	$rdo = $daocourse->select_all_course();
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
                include("module/course/view/list_course.php");
    		}
            break;
            
        case 'create';
            // definir variables para evitar el error de variable no inicializada
            $error_name="";
            $error_description="";
            $error_category="";
            $error_lvl="";
            $error_fini="";
            $error_ffin="";
            $error_idioma="";
            $error_state="";
            $error_price="";
            $error_hours="";

            // $data = 'hola crtl courses create';
            // die('<script>console.log('.json_encode( $data ) .');</script>');
            // die('<script>console.log('.json_encode( $_POST ) .');</script>');

            include("module/course/model/validate.php");
            
            // $check = true;
            
            if ($_POST){
                // $data = 'hola create post course';
                // die('<script>console.log('.json_encode( $data ) .');</script>');
                // die('<script>console.log('.json_encode( $_POST ) .');</script>');

                $check=validate();
                // die('<script>console.log('.json_encode( $check ) .');</script>');

                if ($check){
                    // die('<script>console.log('.json_encode( $_POST ) .');</script>');
                    try{
                        $daocourse = new DAOcourse();
    		            $rdo = $daocourse->insert_course($_POST);
                        // die('<script>console.log('.json_encode( $rdo ) .');</script>');
                        $name = $_POST['name'];
                        // die('<script>console.log('.json_encode( $name ) .');</script>');
                    }catch (Exception $e){
                        $callback = 'index.php?page=503';
        			    die('<script>window.location.href="'.$callback .'";</script>');
                    }
                    
		            if($rdo){
                        echo '<script>
                        Swal.fire({
                            title: "Curso eliminado!",
                            text: "El curso de ' . $name . ' ha sido creado correctamente",
                            icon: "success",
                            willClose: () => {
                                window.location.href = "index.php?page=controller_course&op=list";
                            }
                        });
                        </script>';
            		}else{
            			$callback = 'index.php?page=503';
    			        die('<script>window.location.href="'.$callback .'";</script>');
            		}
                }
            }
            include("module/course/view/create_course.php");
            break;
            
        case 'update';  
            // definir variables para evitar el error de variable no inicializada
            $error_name="";
            $error_description="";
            $error_category="";
            $error_lvl="";
            $error_fini="";
            $error_ffin="";
            $error_idioma="";
            $error_state="";
            $error_price="";
            $error_hours="";

            // $data = 'hola crtl course update';
            // die('<script>console.log('.json_encode( $data ) .');</script>');

            include("module/course/model/validate.php");
            $check = true;
            // die('<script>console.log('.json_encode( $check ) .');</script>');
            
            if ($_POST){
                // $data = 'hola update post course';
                // die('<script>console.log('.json_encode( $data ) .');</script>');
                // die('<script>console.log('.json_encode( $_POST ) .');</script>');

                $check=validate_update();
                // $check=true;
                // die('<script>console.log('.json_encode( $check ) .');</script>');
                
                if ($check){
                    // $data = 'hola update check true course';
                    // die('<script>console.log('.json_encode( $data ) .');</script>');
                    // die('<script>console.log('.json_encode( $_POST ) .');</script>');
                    try{
                        // $data = 'hola update valid validate_course.js course';
                        // die('<script>console.log('.json_encode( $data ) .');</script>');
                        $daocourse = new DAOcourse();
    		            $rdo = $daocourse->update_course($_POST);
                        $name = $_POST['name'];
                        // die('<script>console.log('.json_encode( $name ) .');</script>');
                        // die('<script>console.log('.json_encode( $rdo ) .');</script>');
                        // die('<script>console.log('.json_encode( $_POST ) .');</script>');
                        // $data = 'hola update valid (final) validate_course.js course';
                        // die('<script>console.log('.json_encode( $data ) .');</script>');
                    }catch (Exception $e){
                        // $data = 'hola update error validate_course.js course';
                        // die('<script>console.log('.json_encode( $data ) .');</script>');
                        $callback = 'index.php?page=503';
        			    die('<script>window.location.href="'.$callback .'";</script>');
                    }
                    
		            if($rdo){
                        // die('<script>console.log('.json_encode( $rdo ) .');</script>');
            			echo '<script>
                        Swal.fire({
                            title: "Curso eliminado!",
                            text: "El curso de ' . $name . ' ha sido actualizado correctamente",
                            icon: "success",
                            willClose: () => {
                                window.location.href = "index.php?page=controller_course&op=list";
                            }
                        });
                        </script>';
            		}else{
                        // $data = 'hola update error validate_course.js course';
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
                $daocourse = new DAOcourse();
                // die('<script>console.log('.json_encode( $daocourse ) .');</script>');
                $id=$_GET['id'];
                // die('<script>console.log('.json_encode( $id ) .');</script>');
                if(isset($id)){
                    // $data = 'hola update $ID course';
                    // die('<script>console.log('.json_encode( $data. ' ' .  $id ) .');</script>');
                    // die('<script>console.log('.json_encode( $id ) .');</script>');
                    $rdo = $daocourse->select_course($id);
                    // die('<script>console.log('.json_encode( $rdo ) .');</script>');
                }
            	$course=get_object_vars($rdo);
                // die('<script>console.log('.json_encode( $course ) .');</script>');
            }catch (Exception $e){
                $callback = 'index.php?page=503';
			    die('<script>window.location.href="'.$callback .'";</script>');
            }
            
            if(!$rdo){
    			$callback = 'index.php?page=503';
    			die('<script>window.location.href="'.$callback .'";</script>');
    		}else{
        	    include("module/course/view/update_course.php");
    		}
            break;
            
        case 'read';
            // $data = 'hola crtl course read';
            // die('<script>console.log('.json_encode( $data ) .');</script>');
            // die('<script>console.log('.json_encode( $_GET['id'] ) .');</script>');

            try{
                $daocourse = new DAOcourse();
                // die('<script>console.log('.json_encode( $daocourse ) .');</script>');
            	$rdo = $daocourse->select_course($_GET['id']);
                // die('<script>console.log('.json_encode( $rdo ) .');</script>');
            	$id=get_object_vars($rdo);
                //die('<script>console.log('.json_encode( $id ) .');</script>');
            }catch (Exception $e){
                $callback = 'index.php?page=503';
			    die('<script>window.location.href="'.$callback .'";</script>');
            }
            if(!$rdo){
    			$callback = 'index.php?page=503';
    			die('<script>window.location.href="'.$callback .'";</script>');
    		}else{
                include("module/course/view/read_course.php");
    		}
            break;
            
        case 'delete';
            // $data = 'hola crtl course delete';
            // die('<script>console.log('.json_encode( $data ) .');</script>');
            // die('<script>console.log('.json_encode( $_GET['id'] ) .');</script>');
            // die('<script>console.log('.json_encode( $_GET['name'] ) .');</script>');

            if ($_POST){
                // die('<script>console.log('.json_encode( $_GET['id'] ) .');</script>');
                try{
                    $daocourse = new DAOcourse();
                	$rdo = $daocourse->delete_course($_GET['id']);
                    $name = $_GET['name'];
                    // die('<script>console.log('.json_encode( $name ) .');</script>');
                }catch (Exception $e){
                    $callback = 'index.php?page=503';
    			    die('<script>window.location.href="'.$callback .'";</script>');
                }
            	if($rdo){
                    echo '<script>
                    Swal.fire({
                        title: "Curso eliminado!",
                        text: "El curso de ' . $name . ' ha sido eliminado correctamente",
                        icon: "success",
                        willClose: () => {
                            window.location.href = "index.php?page=controller_course&op=list";
                        }
                    });
                    </script>';
        		}else{
        			$callback = 'index.php?page=503';
			        die('<script>window.location.href="'.$callback .'";</script>');
        		}
            }
            
            try{
                $daocourse = new DAOcourse();
                $rdo = $daocourse->select_course($_GET['id']);
                $course=get_object_vars($rdo);
            }catch (Exception $e){
                $callback = 'index.php?page=controller_course&op=503';
                die('<script>window.location.href="'.$callback .'";</script>');
            }
                    
            if(!$rdo){
                $callback = 'index.php?page=controller_course&op=503';
                die('<script>window.location.href="'.$callback .'";</script>');
            }else{
                include("module/course/view/delete_course.php");
            }
            break;
        
        case 'delete_all';
            // $data = 'hola crtl course delete all';
            // die('<script>console.log('.json_encode( $data ) .');</script>');
            if($_POST){
                try{
                    // $data = 'hola crtl course delete all try';
                    // die('<script>console.log('.json_encode( $data ) .');</script>');
                    $daocourse = new DAOcourse();
                    $rdo = $daocourse -> delete_all_course();
                }catch (Exception $e){
                    $callback = 'index.php?page=controller_course&op=503';
                    die('<script>window.location.href="'.$callback .'";</script>');
                }
                
                if($rdo){
                    // $data = 'hola crtl course delete all rdo';
                    // die('<script>console.log('.json_encode( $data ) .');</script>');
                    echo '<script>
                            Swal.fire({
                                title: "Cursos eliminados!",
                                text: "Cursos eliminados correctamente",
                                icon: "success",
                                willClose: () => {
                                    window.location.href = "index.php?page=controller_course&op=list";
                                }
                            });
                          </script>';
                    echo '<script language="javascript">setTimeout(() => {
                        window.location.href="index.php?page=controller_course&op=list";
                    }, 2000);</script>';     
                }else{
                    echo '<script language="javascript">setTimeout(() => {
                        toastr.error("Error al eliminar los cursos");
                    }, 1000);</script>';
                    echo '<script language="javascript">setTimeout(() => {
                        window.location.href="index.php?page=503";
                    }, 2000);</script>';
                }
            }else{
                include("module/course/view/delete_all_course.php");
            }
            break;

        case 'sidioma';
            // $data = 'hola crtl course select idioma';
            // die('<script>console.log('.json_encode( $data ) .');</script>');
                try{
                    $daocourse = new DAOcourse();
                    // die('<script>console.log('.json_encode( $daocourse ) .');</script>');
                    $lang=$_GET['idioma'];
                    // die('<script>console.log("Idioma: " + '.json_encode( $lang ) .');</script>');
                    $rdo = $daocourse->select_lang($_GET['idioma']);
                    // die('<script>console.log('.json_encode( $rdo ) .');</script>');
                    // die('<script>console.log('.json_encode( $rdo->num_rows ) .');</script>');
                    // die('<script>console.log('.json_encode( $idioma ) .');</script>');
                }catch (Exception $e){
                    $callback = 'index.php?page=503';
                    die('<script>window.location.href="'.$callback .'";</script>');
                }
                if(!$rdo){
                    $callback = 'index.php?page=503';
                    die('<script>window.location.href="'.$callback .'";</script>');
                }else{
                    include("module/course/view/list_course.php");
                }
            break;
        case 'dummies';
            // $data = 'hola crtl course dummies';
            // die('<script>console.log('.json_encode( $data ) .');</script>');
            if ($_POST){
                try{
                    $daocourse = new DAOcourse();
                    $rdo = $daocourse -> insert_dummies();
                }catch (Exception $e){
                    $callback = 'index.php?page=controller_course&op=503';
                    die('<script>window.location.href="'.$callback .'";</script>');
                }
    
                if($rdo){
                    echo '<script language="javascript">setTimeout(() => {
                        toastr.success("Cursos creados correctamente");
                    }, 1000);</script>';
                    $callback = 'index.php?page=controller_course&op=list';
			        die('<script>window.location.href="'.$callback .'";</script>');
                }else{
                    $callback = 'index.php?page=controller_course&op=503';
                    die('<script>window.location.href="'.$callback .'";</script>');
                }
            }else{
                include("module/course/view/dummies_course.php");
            }
            break;

        case 'read_modal':
            
            // echo $_GET['modal'];
            // exit;
            
            try{
                $daocourse = new DAOcourse();
                $rdo = $daocourse->select_course($_GET['modal']);
            }catch (Exception $e){
                echo json_encode("error");
                exit;
            }

            if(!$rdo){
                echo json_encode("error");
                exit;
            }else{
                $course = get_object_vars($rdo);
                echo json_encode($course);
                // echo json_encode("error");
                exit;
            }

            break;
        default;
            include("view/inc/error404.php");
            break;
    }