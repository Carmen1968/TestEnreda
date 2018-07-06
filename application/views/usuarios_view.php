<!DOCTYPE HTML>

?>
<html lang="es">

<?php

    header("location: http://localhost/ProyectoEnreda/application/controllers/usuarios_controller/"); 
    
?>
    <head>
        <meta charset="utf-8"/>
        <title>CRUD con CodeIgniter</title>
    </head>
    <body>
        <h2>Crud con CodeIgniter</h2>
        <?php
        //Si existen las sesiones flasdata que se muestren
            if($this->session->flashdata('correcto'))
                echo $this->session->flashdata('correcto');
             
            if($this->session->flashdata('incorrecto')) 
                echo $this->session->flashdata('incorrecto');
        ?>
<table border="1">
    <tr>
        <form action="<?=base_url("usuarios_controller/add");?>" method="post">
            <td></td>
            <td>
               <input type="email" name="email"/>
            </td>
            <td>
               <input type="text" name="password"/>
            </td>
            <td>
                <input type="text" name="nombre"/>
            </td>
            <td>
                <input type="text" name="apellido"/>
            </td>
            <td>
                <input type="submit" name="submit" value="Añadir" />
            </td>
        </form>
    </tr>
<?php
foreach($ver as $fila){
?>
    <tr>
        <td>
            <?=$fila->id_usuario;?>
        </td>
        <td>
            <?=$fila->email;?>
        </td>
        <td>
            <?=$fila->password;?>
        </td>
        <td>
            <?=$fila->nombre;?>
        </td>
        <td>
            <?=$fila->apellido;?>
        </td>
        <td>
            <a href="<?=base_url("usuarios_controller/mod/$fila->id_usuario")?>">Modificar</a>
            <a href="<?=base_url("usuarios_controller/eliminar/$fila->id_usuario")?>">Eliminar</a>
        </td>
    </tr>
<?php
    
}
?>
</table>
    </body>
</html>