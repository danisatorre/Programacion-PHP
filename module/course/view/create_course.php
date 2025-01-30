<div id="contenido">
    <form autocomplete="on" method="post" name="add_course" id="add_course"> 
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
                <td><textarea rows="7" cols="57" id="description" name="description" placeholder="descripción" value=""></textarea></td>
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
                <td>Idioma: </td>
                <td><select id="idioma" name="idioma" placeholder="idioma">
                    <option value="Inglés">Inglés</option>
                    <option value="Español">Español</option>
                    <option value="Portugues">Portugues</option>
                    <option value="Frances">Frances</option>
                    <option value="Italiano">Italiano</option>
                    <option value="Aleman">Aleman</option>
                    </select></td>
                <td><font color="red">
                    <span id="error_idioma" class="error">
                        <?php
                            echo "$error_idioma";
                        ?>
                    </span>
                </font></font></td>
            </tr>

            <tr>
                <td>Estado: </td>
                <td>
                    <input type="checkbox" id= "state[]" name="state[]" placeholder= "estado" value="Online"/>Online
                    <input type="checkbox" id= "state[]" name="state[]" placeholder= "estado" value="Presencial"/>Presencial
                </td>
                <td><font color="red">
                    <span id="error_state" class="error">
                        <?php
                            echo "$error_state";
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
                <td><input type="button" name="create" id="create" onclick="validate('create')" value="Enviar curso"/></td>
                <td align="right"><a href="index.php?page=controller_course&op=list">Volver</a></td>
            </tr>
        </table>
    </form>
</div>