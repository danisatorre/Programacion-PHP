<div id="contenido">
    <div class="container">
    	<div class="row">
    			<h3>LISTA DE CURSOS</h3>
    	</div>
    	<div class="row">
    		<p><a href="index.php?page=controller_user&op=create"><img src="view/img/anadir.png"></a></p>
    		
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
                    	   	echo '<a class="Button_blue" href="index.php?page=controller_user&op=read&id='.$row['id'].'">Read</a>';
                    	   	echo '&nbsp;';
                    	   	echo '<a class="Button_green" href="index.php?page=controller_user&op=update&id='.$row['id'].'">Update</a>';
                    	   	echo '&nbsp;';
                    	   	echo '<a class="Button_red" href="index.php?page=controller_user&op=delete&id='.$row['id'].'">Delete</a>';
                    	   	echo '</td>';
                    	   	echo '</tr>';
                        }
                    }
                ?>
            </table>
    	</div>
    </div>
</div>