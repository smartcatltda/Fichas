<?php if ($cantidad == 0): ?>
<?php else: ?>  
    <script>
        $('#tabla_usuarios').DataTable();
    </script>
    <table id="tabla_usuarios" class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>APELLIDO</th>
                <th>USUARIO</th>
                <th>TIPO</th>
                <th>CARGAR</th>
                <th>ELIMINAR</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($usuarios as $fila):
                ?>
                <tr>
                    <td><?= $fila->id_user ?></td>
                    <td><?= $fila->nombre_user ?></td>
                    <td><?= $fila->apellido_user ?></td>
                    <td><?= $fila->user ?></td>
                    <?php
                    if ($fila->tipo_user == 0):
                        ?>
                        <td width="100">ADMINISTRADOR</td>
                        <?php
                    else:
                        ?>
                        <td width="100">USUARIO</td>
                    <?php
                    endif;
                    ?>
                    <td width="60" class="text-center"><input type="image" src="css/images/arrow-up.png" style="width:20px;" onclick=""/></td>
                    <td width="60" class="text-center"><input type="image" src="css/images/eliminar.png" style="width:20px;" onclick=""/></td>
                </tr>
                <?php
            endforeach;
        endif;
        ?>
    </tbody>
</table>
<?php ?>