<?php if ($cantidad == 0): ?>
<?php else: ?>  
    <script>
        $('#tabla_usuarios').DataTable();
    </script>
    <table id="tabla_usuarios" class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>USUARIO</th>
                <th>NOMBRE</th>
                <th>APELLIDO</th>
                <th>TIPO</th>
                <th>CARGAR</th>
                <th>ELIMINAR</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($usuarios as $fila):
                if ($fila->estado_user == 0):
                    ?>
                    <tr>
                        <td><?= $fila->id_user ?></td>
                        <td><?= $fila->user ?></td>
                        <td><?= $fila->nombre_user ?></td>
                        <td><?= $fila->apellido_user ?></td>
                        <?php
                        if ($fila->tipo_user == 0):
                            ?>
                            <td>ADMINISTRADOR</td>
                            <?php
                        else:
                            ?>
                            <td>USUARIO</td>
                        <?php
                        endif;
                        ?>
                        <td class="text-center"><input type="image" src="css/images/arrow-up.png" style="width:20px;" onclick="seleccionar_usuario('<?= $fila->id_user ?>')"/></td>
                        <td class="text-center"><input type="image" src="css/images/eliminar.png" style="width:20px;" onclick="delete_usuario('<?= $fila->id_user ?>')"/></td>
                    </tr>
                    <?php
                endif;
            endforeach;
        endif;
        ?>
    </tbody>
</table>
<?php ?>