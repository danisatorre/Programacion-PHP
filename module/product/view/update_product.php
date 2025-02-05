<div id="contenido">
    <form autocomplete="on" method="post" name="add_product" id="add_product"> 
        <h1>Producto nuevo</h1>
        <table border='0'>
            <tr>
                <td>Nombre del producto: </td>
                <td><input type="text" id="nom_prod" name="nom_prod" placeholder="nombre" value="<?php echo $course['nom_prod'];?>"/></td>
                <td><font color="red">
                    <span id="error_nom_prod" class="error">
                        <?php
                            echo "$error_nom_prod";
                        ?>
                    </span>
                </font></font></td>
            </tr>

            <tr>
                <td>Marca: </td>
                <td><input type="text" id="marca" name="marca" placeholder="marca" value="<?php echo $course['marca'];?>"/></td>
                <td><font color="red">
                    <span id="error_marca" class="error">
                        <?php
                            echo "$error_marca";
                        ?>
                    </span>
                </font></font></td>
            </tr>
        
            <tr>
                <td>Descripcion: </td>
                <td><textarea rows="7" cols="57" id="descripcion" name="descripcion" placeholder="descripción" value="<?php echo $course['descripcion'];?>"></textarea></td>
                <td><font color="red">
                    <span id="error_descripcion" class="error">
                        <?php
                            echo "$error_descripcion";
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Categoria: </td>
                        <td>
                            <input type="radio" id="categoria" name="categoria" placeholder="categoria" value="accesorio"/>Accesorio
                            <input type="radio" id="categoria" name="categoria" placeholder="categoria" value="ropa"/>Ropa
                        </td>
                        <td><font color="red">
                            <span id="error_categoria" class="error">
                                <?php
                                    echo "$error_categoria";
                                ?>
                            </span>
                </font></font></td>
            </tr>

            <tr>
                <td>Condicion: </td>
                        <td>
                            <input type="radio" id="condicion" name="condicion" placeholder="condicion" value="Bueno"/>Bueno
                            <input type="radio" id="condicion" name="condicion" placeholder="condicion" value="Aceptable"/>Aceptable
                            <input type="radio" id="condicion" name="condicion" placeholder="condicion" value="Roto"/>Roto
                        </td>
                        <td><font color="red">
                            <span id="error_condicion" class="error">
                                <?php
                                    echo "$error_condicion";
                                ?>
                            </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Entrega: </td>
                    <td>
                        <input type="radio" id="entrega" name="entrega" placeholder="entrega" value="domicilio"/>A domicilio
                        <input type="radio" id="entrega" name="entrega" placeholder="entrega" value="persona"/>En persona
                    </td>
                    <td><font color="red">
                        <span id="error_entrega" class="error">
                            <?php
                                echo "$error_entrega";
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
                <td>Talla: </td>
                <td><select id="talla" name="talla" placeholder="talla">
                    <option value="M">M</option>
                    <option value="S">S</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option>
                    </select></td>
                <td><font color="red">
                    <span id="error_talla" class="error">
                        <?php
                            echo "$error_talla";
                        ?>
                    </span>
                </font></font></td>
            </tr>

            <tr>
                <td>Sexo del producto: </td>
                <td>
                    <input type="checkbox" id= "sexo[]" name="sexo[]" placeholder= "sexo" value="masculino"/>Masculino
                    <input type="checkbox" id= "sexo[]" name="sexo[]" placeholder= "sexo" value="femenino"/>Femenino
                </td>
                <td><font color="red">
                    <span id="error_sexo" class="error">
                        <?php
                            echo "$error_sexo";
                        ?>
                    </span>
                </font></font></td>
            </tr>

            <tr>
                <td>Tipo: </td>
                    <td>
                        <input type="radio" id="tipo" name="tipo" placeholder="tipo" value="exterior"/>Exterior
                        <input type="radio" id="tipo" name="tipo" placeholder="tipo" value="interior"/>Interior
                    </td>
                    <td><font color="red">
                        <span id="error_tipo" class="error">
                            <?php
                                echo "$error_tipo";
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
                <td>Stock: </td>
                <td><input type="text" id="stock" name="stock" placeholder="stock" value=""/></td>
                <td><font color="red">
                    <span id="error_stock" class="error">
                        <?php
                            echo "$error_stock";
                        ?>
                    </span>
                </font></font></td>
            </tr>
            <tr>
                <td><input type="button" name="create" id="create" onclick="validate_product('create')" value="Enviar producto"/></td>
                <td align="right"><a href="index.php?page=controller_product&op=list">Volver</a></td>
            </tr>
        </table>
    </form>
</div>