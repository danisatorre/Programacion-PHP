<div id="contenido">
    <form autocomplete="on" method="post" name="update_product" id="update_product"> 
        <h1>Actualizar producto</h1>
        <table border='0'>

            <tr>
                <!-- <td>ID: </td> -->
                <td><input type="hidden" id="id_producto" name="id_producto" placeholder="id_producto" value="<?php echo $product['id_producto'];?>" readonly/></td>
                <!-- nombre antiguo -->
                <input type="hidden" id="old_name_prod" name="old_name_prod" value="<?php echo $product['nom_prod'];?>"/>
            </tr>

            <tr>
                <td>Nombre del producto: </td>
                <td><input type="text" id="nom_prod" name="nom_prod" placeholder="nombre" value="<?php echo $product['nom_prod'];?>"/></td>
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
                <td><input type="text" id="marca" name="marca" placeholder="marca" value="<?php echo $product['marca'];?>"/></td>
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
                <td><input type="text" id="descripcion" name="descripcion" placeholder="descripcion" value="<?php echo $product['descripcion'];?>"/></td>
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
                    <?php
                        if ($product['categoria']==="ropa"){
                    ?>
                        <input type="radio" id="categoria" name="categoria" placeholder="categoria" value="ropa" checked/>Ropa
                        <input type="radio" id="categoria" name="categoria" placeholder="categoria" value="accesorio"/>Accesorio
                    <?php    
                        }else if($product['categoria']==="accesorio"){
                    ?>
                        <input type="radio" id="categoria" name="categoria" placeholder="categoria" value="ropa"/>Ropa
                        <input type="radio" id="categoria" name="categoria" placeholder="categoria" value="accesorio" checked/>Accesorio
                    <?php   
                        }
                    ?>
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
                    <?php
                        if ($product['condicion']==="Bueno"){
                    ?>
                        <input type="radio" id="condicion" name="condicion" placeholder="condicion" value="Bueno" checked/>Bueno
                        <input type="radio" id="condicion" name="condicion" placeholder="condicion" value="Aceptable"/>Aceptable
                        <input type="radio" id="condicion" name="condicion" placeholder="condicion" value="Roto"/>Roto
                    <?php    
                        }else if($product['condicion']==="Aceptable"){
                    ?>
                        <input type="radio" id="condicion" name="condicion" placeholder="condicion" value="Bueno"/>Bueno
                        <input type="radio" id="condicion" name="condicion" placeholder="condicion" value="Aceptable" checked/>Aceptable
                        <input type="radio" id="condicion" name="condicion" placeholder="condicion" value="Roto"/>Roto
                    <?php   
                        }else if($product['condicion']==="Roto"){
                    ?>
                        <input type="radio" id="condicion" name="condicion" placeholder="condicion" value="Bueno"/>Bueno
                        <input type="radio" id="condicion" name="condicion" placeholder="condicion" value="Aceptable"/>Aceptable
                        <input type="radio" id="condicion" name="condicion" placeholder="condicion" value="Roto" checked/>Roto
                    <?php    
                        }
                    ?>
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
                    <?php
                        if ($product['entrega']==="domicilio"){
                    ?>
                        <input type="radio" id="entrega" name="entrega" placeholder="entrega" value="domicilio" checked/>A domicilio
                        <input type="radio" id="entrega" name="entrega" placeholder="entrega" value="persona"/>En persona
                    <?php    
                        }else if($product['entrega']==="persona"){
                    ?>
                        <input type="radio" id="entrega" name="entrega" placeholder="entrega" value="domicilio"/>A domicilio
                        <input type="radio" id="entrega" name="entrega" placeholder="entrega" value="persona" checked/>En persona
                    <?php   
                        }
                    ?>
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
                <td><input type="text" id="fini" name="fini" placeholder="fecha de inicio" value="<?php echo $product['fini'];?>"/></td>
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
                <td><input type="text" id="ffin" name="ffin" placeholder="fecha de fin" value="<?php echo $product['ffin'];?>"/></td>
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
                    <?php
                        if($product['talla']==="M"){
                    ?>
                        <option value="M" selected>M</option>
                        <option value="S">S</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                        <option value="XXL">XXL</option>
                    <?php
                        }elseif($product['talla']==="S"){
                    ?>
                        <option value="M">M</option>
                        <option value="S" selected>S</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                        <option value="XXL">XXL</option>
                    <?php
                        }elseif($product['talla']==="L"){
                    ?>
                        <option value="M">M</option>
                        <option value="S">S</option>
                        <option value="L" selected>L</option>
                        <option value="XL">XL</option>
                        <option value="XXL">XXL</option>
                    <?php
                        }elseif($product['talla']==="XL"){
                    ?>
                        <option value="M">M</option>
                        <option value="S">S</option>
                        <option value="L">L</option>
                        <option value="XL" selected>XL</option>
                        <option value="XXL">XXL</option>
                    <?php 
                        }elseif($product['talla']==="XXL"){
                    ?>
                        <option value="M">M</option>
                        <option value="S">S</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                        <option value="XXL" selected>XXL</option>
                    <?php 
                        }
                    ?>
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
                <?php
                    $afi=explode(":", $product['sexo_prod']);
                ?>
                <td>
                    <?php
                        $busca_array=in_array("masculino", $afi);
                        if($busca_array){
                    ?>
                        <input type="checkbox" id= "sexo[]" name="sexo[]" value="masculino" checked/>Masculino
                    <?php
                        }else{
                    ?>
                        <input type="checkbox" id= "sexo[]" name="sexo[]" value="masculino"/>Masculino
                    <?php
                        }
                    ?>
                    <?php
                        $busca_array=in_array("femenino", $afi);
                        if($busca_array){
                    ?>
                        <input type="checkbox" id= "sexo[]" name="sexo[]" value="femenino" checked/>Femenino
                    <?php
                        }else{
                    ?>
                        <input type="checkbox" id= "sexo[]" name="sexo[]" value="femenino"/>Femenino
                    <?php
                        }
                    ?>
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
                    <?php
                        if ($product['tipo']==="exterior"){
                    ?> 
                        <input type="radio" id="tipo" name="tipo" placeholder="tipo" value="exterior" checked/>Exterior
                        <input type="radio" id="tipo" name="tipo" placeholder="tipo" value="interior"/>Interior
                    <?php    
                        }else if($product['tipo']==="interior"){
                    ?>
                        <input type="radio" id="tipo" name="tipo" placeholder="tipo" value="exterior"/>Exterior
                        <input type="radio" id="tipo" name="tipo" placeholder="tipo" value="interior" checked/>Interior
                    <?php   
                        }
                    ?>
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
                <td><input type="text" id="precio" name="precio" placeholder="precio" value="<?php echo $product['precio'];?>"/></td>
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
                <td><input type="text" id="stock" name="stock" placeholder="stock" value="<?php echo $product['stock'];?>"/></td>
                <td><font color="red">
                    <span id="error_stock" class="error">
                        <?php
                            echo "$error_stock";
                        ?>
                    </span>
                </font></font></td>
            </tr>
            <tr>
                <td><input type="button" name="update" id="update" onclick="validate_product('update')" value="Actualizar producto"/></td>
                <td align="right"><a href="index.php?page=controller_product&op=list">Volver</a></td>
            </tr>
        </table>
    </form>
</div>