<div id="contenido">
    <form autocomplete="on" method="post" name="add_course" id="add_course" 
    onsubmit="return validate();" action="index.php?page=controller_user&op=create" > 
        <h1>Curso nuevo</h1>
        <table border='0'>
            <tr>
                <td>Nombre: </td>
                <td><input type="text" id="name" name="name" placeholder="nombre" value=""/></td>
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
                <td><input type="text" id="description" name="description" placeholder="descripcion" value=""/></td>
                <td><font color="red">
                    <span id="error_description" class="error">
                        <?php
                            echo "$error_description";
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Categoria: </td>
                        <td>
                            <input type="radio" id="category" name="category" placeholder="categoria" value="Frontend"/>Frontend
                            <input type="radio" id="category" name="category" placeholder="categoria" value="Backend"/>Backend
                            <input type="radio" id="category" name="category" placeholder="categoria" value="FullStack"/>FullStack
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
                        <input type="radio" id="lvl" name="lvl" placeholder="nivel" value="Principiante"/>Principiante
                        <input type="radio" id="lvl" name="lvl" placeholder="nivel" value="Medio"/>Medio
                        <input type="radio" id="lvl" name="lvl" placeholder="nivel" value="Avanzado"/>Avanzado
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
                <td><input type="text" id="fini" name="fini" placeholder="fecha de inicio" value=""/></td>
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
                <td><input type="text" id="ffin" name="ffin" placeholder="fecha de fin" value=""/></td>
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
                <td><input type="text" id="price" name="price" placeholder="precio" value=""/></td>
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
                <td><input type="text" id="hours" name="hours" placeholder="horas" value=""/></td>
                <td><font color="red">
                    <span id="error_hours" class="error">
                        <?php
                            echo "$error_hours";
                        ?>
                    </span>
                </font></font></td>
            </tr>
            <tr>
                <td><input type="submit" name="create" id="create"/></td>
                <td align="right"><a href="index.php?page=controller_user&op=list">Volver</a></td>
            </tr>
        </table>
    </form>
</div>