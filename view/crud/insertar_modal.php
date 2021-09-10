<?php
include_once '../../config/database.php';
include_once '../../model/objects/crud.php';

$database = new Database();
$db = $database->getConnection();
$crud = new crud($db);
?>
<div class="modal fade" id="insert" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Insert user</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formulario_insert" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Name</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="correo" name="correo" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="passwork" name="passwork">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Rol</label>
                        <select class="form-select" aria-label="Default select example" id="rol_fk" name="rol_fk" required>
                            <option selected>Open this select menu</option>
                            <?php
                            $result = $crud->select();
                            foreach ($result as $rol) :
                                echo "<option  value='$rol[id]'> $rol[rol]</option>";
                            endforeach
                            ?>
                        </select>
                    </div>
                    <div id="alerta"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>