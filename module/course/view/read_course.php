<div id="contenido">
    <h1>Informacion del curso</h1>
    <p>
    <table border='2'>
        <tr>
            <td>ID: </td>
            <td>
                <?php
                    echo $id['id'];
                ?>
            </td>
        </tr>
    
        <tr>
            <td>Nombre: </td>
            <td>
                <?php
                    echo $id['name'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Descripcion: </td>
            <td>
                <?php
                    echo $id['description'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Categoria: </td>
            <td>
                <?php
                    echo $id['category'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Nivel: </td>
            <td>
                <?php
                    echo $id['lvl'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Fecha de inicio: </td>
            <td>
                <?php
                    echo $id['fini'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Fecha de fin: </td>
            <td>
                <?php
                    echo $id['ffin'];
                ?>
            </td>
            
        </tr>
        
        <tr>
            <td>Precio: </td>
            <td>
                <?php
                    echo $id['price'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Horas: </td>
            <td>
                <?php
                    echo $id['hours'];
                ?>
            </td>
        </tr>
    </table>
    </p>
    <p><a href="index.php?page=controller_course&op=list">Volver</a></p>
</div>