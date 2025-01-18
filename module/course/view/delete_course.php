<div id="contenido">
    <?php 
    // die('<script>console.log('.json_encode( $_GET['id'] ) .');</script>'); 
    // die('<script>console.log('.json_encode( $_GET['name'] ) .');</script>');
    // die('<script>console.log('.json_encode( $_GET['category'] ) .');</script>');
    ?>
    <form autocomplete="on" method="post" name="delete_course" id="delete_course">
        <table border='0'>
            <tr>
                <td align="center"  colspan="2"><h3>¿Estas seguro de eliminar el curso de <?php echo $_GET['name']; ?> 
                de categoria <?php echo $_GET['category']; ?>?</h3></td>
                <input type="hidden" id="id" name="id" placeholder="id" value="<?php echo $_GET['id'];?>"/>
            </tr>
            <tr>
                <td align="center"><button type="button" class="Button_green"name="delete" id="delete" onclick="operations_course('delete')" value="Aceptar">Aceptar</button></td>
                <td align="center"><a class="Button_red" href="index.php?page=controller_course&op=list">Cancelar</a></td>
            </tr>
        </table>
    </form>
</div>