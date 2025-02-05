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
                    <th width=300><h3 data-tr="Dummies">Dummies</h3></th>
                    <th width=300><h3 data-tr="Borrar todo">Borrar todo</h3></th>
                </tr>
                <tr>
                    <div class="buttonsactions">
                        <th><p><a href="index.php?page=controller_product&op=create"><img src="view/img/anadir.png"></a></p></th>
                    </div>
                    <div class="buttonsactions">
                        <th><p><a href="index.php?page=controller_product&op=dummies"><img src="view/img/anadir.png"></a></p></th>
                    </div>
                    <div class="buttonsactions">
                        <th><p><a href="index.php?page=controller_product&op=delete_all"><img src="view/img/eliminar.png"></a></p></th>
                    </div>
                </tr>
            </table>
            <?php
                echo'<form autocomplete="on" method="post" name="filters" id="filters">';
            ?>
                <a><b id="filter">Filtros:</b>
                   <tr>
                        <td>Idioma: </td>
                        <td>
                            <select id="fidioma" name="fidioma" placeholder="idioma">
                                <option value="Inglés">Inglés</option>
                                <option value="Español">Español</option>
                                <option value="Portugues">Portugues</option>
                                <option value="Frances">Frances</option>
                                <option value="Italiano">Italiano</option>
                                <option value="Aleman">Aleman</option>
                            </select>
                        </td>
                    </tr>
                 </a>
                <input type="button" name="confirm" id="confirm" onclick="return selang()" value="Buscar..."/>
            <table>
                <tr>
                    <td width=125><b>NOMBRE</b></th>
                    <td width=250><b>DESCRIPCIÓN</b></th>
                    <td width=125><b>FECHA INICIO</b></th>
                    <td width=125><b>FECHA FIN</b></th>
                    <td width=125><b>PRECIO</b></th>
                    <th width=380><b>ACCION</b></th>
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
                    	   	echo '<td width=380>';

                            print ("<div class='product' id='".$row['id']."'>Read</div>");  // READ ONE
                            echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                            // die('<script>console.log('.json_encode( $row['id'] ) .');</script>');
                    	   	// echo '<a class="Button_blue" href="index.php?page=controller_product&op=read&id_producto='.$row['id_producto'].'">Read</a>';
                    	   	echo '&nbsp;';
                    	   	echo '<a class="Button_green" href="index.php?page=controller_product&op=update&id_producto='.$row['id_producto'].'">Update</a>';
                    	   	echo '&nbsp;';
                    	   	echo '<a class="Button_red" href="index.php?page=controller_product&op=delete&id_producto='.$row['id_producto'].'&nom_product='.$row['nom_product'].'&categoria='.$row['categoria'].'">Delete</a>';
                    	   	echo '</td>';
                    	   	echo '</tr>';
                        }
                    }
                ?>
            </table>
            <button><a href="index.php?page=controller_product&op=list"><b>VOLVER A TODOS LOS PRODUCTOS</b></a></button>
    	</div>
    </div>
</div>

<!-- modal window -->
<section id="modal_product">
    
</section>