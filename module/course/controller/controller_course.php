<?php
    //$data = 'hola crtl courses';
    //die('<script>console.log('.json_encode( $data ) .');</script>');

    include ("module/course/model/DAOcourse.php");
    //session_start();

    switch($_GET['op']){
        case 'list';
            //$data = 'hola crtl courses list';
            //die('<script>console.log('.json_encode( $data ) .');</script>');
              
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
            
            if (isset($_POST['create'])){
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
                    }catch (Exception $e){
                        $callback = 'index.php?page=503';
        			    die('<script>window.location.href="'.$callback .'";</script>');
                    }
                    
		            if($rdo){
                        echo '<script language="javascript">setTimeout(() => {
                            toastr.success("Curso creado exitosamente");
                        }, 1000);</script>';
                        echo '<script language="javascript">setTimeout(() => {
                            window.location.href="index.php?page=controller_course&op=list";
                        }, 2000);</script>';
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
            // $check = true;
            // die('<script>console.log('.json_encode( $check ) .');</script>');
            
            if (isset($_POST['update'])){
                // $data = 'hola update post course';
                // die('<script>console.log('.json_encode( $data ) .');</script>');
                // die('<script>console.log('.json_encode( $_POST ) .');</script>');

                $check=validate();
                $check=true;
                // die('<script>console.log('.json_encode( $check ) .');</script>');
                
                if ($check){
                    // $data = 'hola update check true course';
                    // die('<script>console.log('.json_encode( $data ) .');</script>');
                    // die('<script>console.log('.json_encode( $_POST ) .');</script>');
                    try{
                        $daocourse = new DAOcourse();
    		            $rdo = $daocourse->update_course($_POST);
                        // die('<script>console.log('.json_encode( $rdo ) .');</script>'); 
                        die('<script>console.log('.json_encode( $_POST ) .');</script>');
                    }catch (Exception $e){
                        $data = 'hola update error validate_course.js course';
                        die('<script>console.log('.json_encode( $data ) .');</script>');
                        $callback = 'index.php?page=503';
        			    die('<script>window.location.href="'.$callback .'";</script>');
                    }
                    
		            if($rdo){
                        // die('<script>console.log('.json_encode( $rdo ) .');</script>');
            			echo '<script language="javascript">setTimeout(() => {
                            toastr.success("Curso modificado correctamente");
                        }, 1000);</script>';
                        echo '<script language="javascript">setTimeout(() => {
                            window.location.href="index.php?page=controller_course&op=list";
                        }, 2000);</script>';
            		}else{
                        // $data = 'hola update error validate_course.js course';
                        // die('<script>console.log('.json_encode( $data ) .');</script>');
                        echo '<script language="javascript">setTimeout(() => {
                            toastr.error("Error al modificar el curso");
                        }, 1000);</script>';
            			$callback = 'index.php?page=503';
    			        die('<script>window.location.href="'.$callback .'";</script>');
            		}
                }else{
                    // $data = 'hola update check false course';
                    // die('<script>console.log('.json_encode( $data ) .');</script>');
                    echo '<script language="javascript">setTimeout(() => {
                        window.location.href="index.php?page=controller_course&op=list";
                    }, 2000);</script>';
                }
            }
            
            // die('<script>console.log('.json_encode( $_GET['id'] ) .');</script>');
            try{
                $daocourse = new DAOcourse();
            	$rdo = $daocourse->select_course($_GET['id']);
                // die('<script>console.log('.json_encode( $rdo ) .');</script>');
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

            if (isset($_POST['delete'])){
                // die('<script>console.log('.json_encode( $_GET['id'] ) .');</script>');
                try{
                    $daocourse = new DAOcourse();
                	$rdo = $daocourse->delete_course($_GET['id']);
                }catch (Exception $e){
                    $callback = 'index.php?page=503';
    			    die('<script>window.location.href="'.$callback .'";</script>');
                }
            	if($rdo){
                    echo '<script language="javascript">setTimeout(() => {
                        toastr.success("Curso eliminado correctamente");
                    }, 1000);</script>';
                    echo '<script language="javascript">setTimeout(() => {
                        window.location.href="index.php?page=controller_course&op=list";
                    }, 2000);</script>';
        		}else{
        			$callback = 'index.php?page=503';
			        die('<script>window.location.href="'.$callback .'";</script>');
        		}
            }
            
            include("module/course/view/delete_course.php");
            break;
        case 'sidioma';
            // $data = 'hola crtl course select idioma';
            // die('<script>console.log('.json_encode( $data ) .');</script>');
                try{
                    $daocourse = new DAOcourse();
                    // die('<script>console.log('.json_encode( $daocourse ) .');</script>');
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
        default;
            include("view/inc/error404.php");
            break;
    }