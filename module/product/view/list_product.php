<?php 
// $data = 'hola mejoras branch';
// die('<script>console.log('.json_encode( $data ) .');</script>');
?>
<div id="contenido">
    <div class="container">
    	<div class="row">
    			<h3>LISTA DE PRODUCTOS</h3>
    	</div>
    	<div class="row">
            <table>
                <tr>
                    <th width=300><h3 data-tr="Añadir">Añadir Producto</h3></th>
                </tr>
                <tr>
                    <div class="buttonsactions">
                        <th><p><a href="index.php?page=controller_product&op=create"><img src="view/img/anadir.png"></a></p></th>
                    </div>
                </tr>
            </table>
            <table>
                <tr>
                    <td width=125><b>NOMBRE</b></th>
                    <td width=250><b>DESCRIPCIÓN</b></th>
                    <td width=125><b>FECHA INICIO</b></th>
                    <td width=125><b>FECHA FIN</b></th>
                    <td width=125><b>PRECIO</b></th>
                    <th width=250><b>ACCION</b></th>
                </tr>
                <?php
                    if ($rdo->num_rows === 0){
                        echo '<tr>';
                        echo '<td align="center"  colspan="3">NO SE HA ENCONTRADO NINGÚN PRODUCTO</td>';
                        echo '</tr>';
                    }else{
                        foreach ($rdo as $row) {
                       		echo '<tr id="summary_product">';
                    	   	echo '<td width=125>'. $row['nom_prod'] . '</td>';
                            echo '<td width=250>'. $row['descripcion'] . '</td>';
                    	   	echo '<td width=125>'. $row['fini'] . '</td>';
                    	   	echo '<td width=125>'. $row['ffin'] . '</td>';
                            echo '<td width=125>'. $row['precio'] . '</td>';
                    	   	echo '<td width=250>';

                            print ("<div class='product' id_producto='".$row['id_producto']."'>Read</div>");  // READ ONE
                            echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                            // die('<script>console.log('.json_encode( $row['id'] ) .');</script>');
                    	   	// echo '<a class="Button_blue" href="index.php?page=controller_product&op=read&id_producto='.$row['id_producto'].'">Read</a>';
                    	   	echo '&nbsp;';
                    	   	echo '<a class="Button_green" href="index.php?page=controller_product&op=update&id_producto='.$row['id_producto'].'">Update</a>';
                    	   	echo '</td>';
                    	   	echo '</tr>';
                        }
                    }
                ?>
            </table>
    	</div>
    </div>
</div>

<!-- modal window -->
<section id="modal_product">
    
</section>