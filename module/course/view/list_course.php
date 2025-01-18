<?php 
// $data = 'hola mejoras branch';
// die('<script>console.log('.json_encode( $data ) .');</script>');
?>
<div id="contenido">
    <div class="container">
    	<div class="row">
    			<h3>LISTA DE CURSOS</h3>
    	</div>
    	<div class="row">
            <table>
                <tr>
                    <th width=100><h3 data-tr="Añadir">Añadir Curso</h3></th>
                    <th width=100><h3 data-tr="Dummies">Dummies</h3></th>
                    <th width=100><h3 data-tr="Borrar todo">Borrar todo</h3></th>
                </tr>
                <tr>
                    <th><p><a href="index.php?page=controller_course&op=create"><img src="view/img/anadir.png"></a></p></th>
                    <th><p><a href="index.php?page=controller_course&op=dummies"><img src="view/img/anadir.png"></a></p></th>
                    <th><p><a href="index.php?page=controller_course&op=delete_all"><img src="view/img/eliminar.png"></a></p></th>
                </tr>
            </table>
            <?php
                echo'<form autocomplete="on" method="post" name="filters" id="filters" onsubmit="return selang();">';
            ?>
                <a><b>Filtros:</b>
                   <tr>
                        <td>Idioma: </td>
                        <td><select id="fidioma" name="fidioma" placeholder="idioma">
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
                <input type="submit" name="confirm" id="confirm" value="Buscar..."/>
            <table>
                <tr>
                    <td width=125><b>NOMBRE</b></th>
                    <td width=250><b>DESCRIPCIÓN</b></th>
                    <td width=125><b>FECHA INICIO</b></th>
                    <td width=125><b>FECHA FIN</b></th>
                    <td width=125><b>PRECIO</b></th>
                    <th width=350><b>ACCION</b></th>
                </tr>
                <?php
                    if ($rdo->num_rows === 0){
                        echo '<tr>';
                        echo '<td align="center"  colspan="3">NO SE HA ENCONTRADO NINGÚN CURSO</td>';
                        echo '</tr>';
                    }else{
                        foreach ($rdo as $row) {
                       		echo '<tr>';
                    	   	echo '<td width=125>'. $row['name'] . '</td>';
                            echo '<td width=250>'. $row['description'] . '</td>';
                    	   	echo '<td width=125>'. $row['fini'] . '</td>';
                    	   	echo '<td width=125>'. $row['ffin'] . '</td>';
                            echo '<td width=125>'. $row['price'] . '</td>';
                    	   	echo '<td width=350>';
                            // die('<script>console.log('.json_encode( $row['id'] ) .');</script>');
                    	   	echo '<a class="Button_blue" href="index.php?page=controller_course&op=read&id='.$row['id'].'">Read</a>';
                    	   	echo '&nbsp;';
                    	   	echo '<a class="Button_green" href="index.php?page=controller_course&op=update&id='.$row['id'].'">Update</a>';
                    	   	echo '&nbsp;';
                    	   	echo '<a class="Button_red" href="index.php?page=controller_course&op=delete&id='.$row['id'].'&name='.$row['name'].'&category='.$row['category'].'">Delete</a>';
                    	   	echo '</td>';
                    	   	echo '</tr>';
                        }
                    }
                ?>
            </table>
            <button><a href="index.php?page=controller_course&op=list"><b>VOLVER A TODOS LOS CURSOS</b></a></button>
    	</div>
    </div>
</div>