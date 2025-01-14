<div id="contenido">
    <div class="container">
    	<div class="row">
    			<h3>LISTA DE CURSOS</h3>
    	</div>
    	<div class="row">
    		<p><a href="index.php?page=controller_course&op=create"><img src="view/img/anadir.png"></a></p>
            <?php
                echo '<a><b>Filtros:</b>';
                echo '   <tr>';
                echo'        <td>Idioma: </td>';
                echo'        <td><select id="fidioma" name="fidioma" placeholder="idioma">';
                echo'            <option value=""></option>';
                echo'            <option value="Inglés">Inglés</option>';
                echo'            <option value="Español">Español</option>';
                echo'            <option value="Portugues">Portugues</option>';
                echo'            <option value="Frances">Frances</option>';
                echo'            <option value="Italiano">Italiano</option>';
                echo'            <option value="Aleman">Aleman</option>';
                echo'            </select>';
                echo'        </td>';
                echo'    </tr>';
                echo '</a>';
            ?>
            <script>
                var button_select = document.getElementById('s_lang');
                var sel_lang=document.getElementById('fidioma');
                document.getElementById('fidioma').addEventListener('change', function() {
                var selectLang = sel_lang.value;
                var href = `index.php?page=controller_course&op=sidioma&idioma=${encodeURIComponent(selectLang)}`;
                window.location.href = href;
                // console.log(selectLang);
                });
            </script>
            <table>
                <tr>
                    <td width=125><b>NOMBRE</b></th>
                    <td width=150><b>DESCRIPCIÓN</b></th>
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
                            echo '<td width=150>'. $row['description'] . '</td>';
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