<div id="contenido">
    <form autocomplete="on" method="post" name="aupdate_user" id="update_user" onsubmit="return validate();" action="index.php?page=controller_user&op=update">
        <h1>Modificar curso</h1>
        <table border='0'>
            <tr>
                <td>Nombre: </td>
                <td><input type="text" id="name" name="name" placeholder="nombre" value="<?php echo $course['name'];?>" readonly/></td>
                <td><font color="red">
                    <span id="error_name" class="error">
                        <?php
                            echo "$error_name";
                        ?>
                    </span>
                </font></font></td>
            </tr>
        
            <tr>
                <td>Descripcion: </td>
                <td><input type="text" id="description" name="description" placeholder="descripcion" value="<?php echo $course['description'];?>"/></td>
                <td><font color="red">
                    <span id="error_desc" class="error">
                        <?php
                            echo "$error_desc";
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Categoria: </td>
                <td>
                    <?php
                        if ($course['category']==="Frontend"){
                    ?>
                        <input type="radio" id="category" name="category" placeholder="categoria" value="Frontend" checked/>Frontend
                        <input type="radio" id="category" name="category" placeholder="categoria" value="Backend"/>Backend
                        <input type="radio" id="category" name="category" placeholder="categoria" value="FullStack"/>FullStack
                    <?php    
                        }else if($course['category']==="Backend"){
                    ?>
                        <input type="radio" id="category" name="category" placeholder="categoria" value="Frontend"/>Frontend
                        <input type="radio" id="category" name="category" placeholder="categoria" value="Backend" checked/>Backend
                        <input type="radio" id="category" name="category" placeholder="categoria" value="FullStack"/>FullStack
                    <?php   
                        }else if($course['category']==="FullStack"){
                    ?>
                        <input type="radio" id="category" name="category" placeholder="categoria" value="Frontend"/>Frontend
                        <input type="radio" id="category" name="category" placeholder="categoria" value="Backend"/>Backend
                        <input type="radio" id="category" name="category" placeholder="categoria" value="FullStack" checked/>FullStack
                    <?php    
                        }
                    ?>
                </td>
                <td><font color="red">
                    <span id="error_category" class="error">
                        <?php
                            echo "$error_category";
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Nivel: </td>
                <td>
                    <?php
                        if ($course['lvl']==="Principiante"){
                    ?>
                        <input type="radio" id="lvl" name="lvl" placeholder="nivel" value="Principiante" checked/>Principiante
                        <input type="radio" id="lvl" name="lvl" placeholder="nivel" value="Medio"/>Medio
                        <input type="radio" id="lvl" name="lvl" placeholder="nivel" value="Avanzado"/>Avanzado
                    <?php    
                        }else if($course['lvl']==="Medio"){
                    ?>
                        <input type="radio" id="lvl" name="lvl" placeholder="nivel" value="Principiante"/>Principiante
                        <input type="radio" id="lvl" name="lvl" placeholder="nivel" value="Medio" checked/>Medio
                        <input type="radio" id="lvl" name="lvl" placeholder="nivel" value="Avanzado"/>Avanzado
                    <?php   
                        }else if($course['lvl']==="Avanzado"){
                    ?>
                        <input type="radio" id="lvl" name="lvl" placeholder="nivel" value="Principiante"/>Principiante
                        <input type="radio" id="lvl" name="lvl" placeholder="nivel" value="Medio"/>Medio
                        <input type="radio" id="lvl" name="lvl" placeholder="nivel" value="Avanzado" checked/>Avanzado
                    <?php    
                        }
                    ?>
                </td>
                <td><font color="red">
                    <span id="error_lvl" class="error">
                        <?php
                            echo "$error_lvl";
                        ?>
                    </span>
                </font></font></td>
            </tr>

            <tr>
                <td>Fecha de inicio: </td>
                <td><input type="text" id="fini" name="fini" placeholder="fecha de inicio" value="<?php echo $course['fini'];?>"/></td>
                <td><font color="red">
                    <span id="error_fini" class="error">
                        <?php
                            echo "$error_fini";
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Fecha de fin: </td>
                <td><input type="text" id= "ffin" name="ffin" placeholder="fecha de fin" value="<?php echo $course['ffin'];?>"/></td>
                <td><font color="red">
                    <span id="error_ffin" class="error">
                        <?php
                            echo "$error_ffin";
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Precio: </td>
                <td><input type="text" id= "price" name="price" placeholder="precio" value="<?php echo $course['price'];?>"/></td>
                <td><font color="red">
                    <span id="error_price" class="error">
                        <?php
                            echo "$error_price";
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Horas: </td>
                <td><input type="text" id= "hours" name="hours" placeholder="hours" value="<?php echo $course['hours'];?>"/></td>
                <td><font color="red">
                    <span id="error_hours" class="error">
                        <?php
                            echo "$error_hours";
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td><input type="submit" name="update" id="update"/></td>
                <td align="right"><a href="index.php?page=controller_user&op=list">Volver</a></td>
            </tr>
        </table>
    </form>
</div>