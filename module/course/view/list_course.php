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
                echo'<input type="button" id="s_lang" value="Buscar">';
                echo '</a>';
            ?>
            <script>
                var button_select = document.getElementById('s_lang');
                var sel_lang=document.getElementById('fidioma');
                document.getElementById('fidioma').addEventListener('change', function() {
                var selectLang = sel_lang.value;
                var href = `index.php?page=controller_course&op=sidioma&idioma=${encodeURIComponent(selectLang)}`;
                console.log(selectLang);
                window.location.href = href;
                });
            </script>
            <table>
                <tr>
                    <td width=125><b>ID</b></th>
                    <td width=125><b>NOMBRE</b></th>
                    <td width=125><b>PRECIO</b></th>
                    <th width=350><b>ACCION</b></th>
                </tr>
                <?php
                    if ($rdo->num_rows === 0){
                        echo '<tr>';
                        echo '<td align="center"  colspan="3">NO HAY NINGUN CURSO</td>';
                        echo '</tr>';
                    }else{
                        foreach ($rdo as $row) {
                       		echo '<tr>';
                    	   	echo '<td width=125>'. $row['id'] . '</td>';
                    	   	echo '<td width=125>'. $row['name'] . '</td>';
                    	   	echo '<td width=125>'. $row['price'] . '</td>';
                    	   	echo '<td width=350>';
                            // die('<script>console.log('.json_encode( $row['id'] ) .');</script>');
                    	   	echo '<a class="Button_blue" href="index.php?page=controller_course&op=read&id='.$row['id'].'">Read</a>';
                    	   	echo '&nbsp;';
                    	   	echo '<a class="Button_green" href="index.php?page=controller_course&op=update&id='.$row['id'].'">Update</a>';
                    	   	echo '&nbsp;';
                    	   	echo '<a class="Button_red" href="index.php?page=controller_course&op=delete&id='.$row['id'].'">Delete</a>';
                    	   	echo '</td>';
                    	   	echo '</tr>';
                        }
                    }
                ?>
            </table>
    	</div>
    </div>
</div>