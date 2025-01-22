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
                    <div class="buttonsactions">
                        <th><p><a href="index.php?page=controller_course&op=create"><img src="view/img/anadir.png"></a></p></th>
                    </div>
                    <div class="buttonsactions">
                        <th><p><a href="index.php?page=controller_course&op=dummies"><img src="view/img/anadir.png"></a></p></th>
                    </div>
                    <div class="buttonsactions">
                        <th><p><a href="index.php?page=controller_course&op=delete_all"><img src="view/img/eliminar.png"></a></p></th>
                    </div>
                </tr>
            </table>
            <?php
                echo'<form autocomplete="on" method="post" name="filters" id="filters" onsubmit="return selang();">';
            ?>
                <a><b id="filter">Filtros:</b>
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
                    <th width=380><b>ACCION</b></th>
                </tr>
                <?php
                    if ($rdo->num_rows === 0){
                        echo '<tr>';
                        echo '<td align="center"  colspan="3">NO SE HA ENCONTRADO NINGÚN CURSO</td>';
                        echo '</tr>';
                    }else{
                        foreach ($rdo as $row) {
                       		echo '<tr id="summary_course">';
                    	   	echo '<td width=125>'. $row['name'] . '</td>';
                            echo '<td width=250>'. $row['description'] . '</td>';
                    	   	echo '<td width=125>'. $row['fini'] . '</td>';
                    	   	echo '<td width=125>'. $row['ffin'] . '</td>';
                            echo '<td width=125>'. $row['price'] . '</td>';
                    	   	echo '<td width=380>';

                            print ("<div class='course' id='".$row['id']."'>Read</div>");  // READ ONE
                            echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                            // die('<script>console.log('.json_encode( $row['id'] ) .');</script>');
                    	   	// echo '<a class="Button_blue" href="index.php?page=controller_course&op=read&id='.$row['id'].'">Read</a>';
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

<!-- modal window -->
<section id="modal_course">
    <div id="details_course" hidden>
        <div id="details">
            <div id="container">
                Nombre: <div id="name_modal"></div></br>
                Descripción: <div id="desc_modal"></div></br>
                Categoria: <div id="category_modal"></div></br>
                Nivel: <div id="lvl_modal"></div></br>
                Fecha de inicio: <div id="fini_modal"></div></br>
                Fecha de fin: <div id="ffin_modal"></div></br>
                Idioma: <div id="lang_modal"></div></br>
                Estado: <div id="state_modal"></div></br>
                Precio: <div id="price_modal"></div></br>
                Horas: <div id="hours_modal"></div></br>
            </div>
        </div>
    </div>
</section>