<div id="contenido">
    <?php 
    // die('<script>console.log('.json_encode( $_GET['id'] ) .');</script>'); 
    // die('<script>console.log('.json_encode( $_GET['name'] ) .');</script>');
    ?>
    <form autocomplete="on" method="post" name="delete_course" id="delete_course" action="index.php?page=controller_course&op=delete&id=<?php echo $_GET['id']; ?>">
        <table border='0'>
            <tr>
                <td align="center"  colspan="2"><h3>¿Estas seguro de eliminar el curso de <?php echo $_GET['name']; ?> con el id <?php echo $_GET['id']; ?>?</h3></td>
            </tr>
            <tr>
                <td align="center"><button type="submit" class="Button_green"name="delete" id="delete">Aceptar</button></td>
                <td align="center"><a class="Button_red" href="index.php?page=controller_course&op=list">Cancelar</a></td>
            </tr>
        </table>
    </form>
</div>