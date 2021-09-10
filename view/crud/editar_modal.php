<div class="modal fade" id="update_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Insert user</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formulario_update" method="POST">
                    <div class="mb-3">
                        <input type="hidden" name="id_up" id="id_up" value="">
                        <label for="exampleInputEmail1" class="form-label">Name</label>
                        <input type="text" class="form-control" id="nombre_up" name="nombre_up" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="correo_up" name="correo_up" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="passwork_up" name="passwork_up">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Rol</label>
                        <select class="form-select" aria-label="Default select example" id="rol_fk_up" name="rol_fk_up" required>
                            <option selected>Open this select menu</option>
                            <?php
                            $result = $crud->select();
                            foreach ($result as $rol) :
                                echo "<option  value='$rol[id]'> $rol[rol]</option>";
                            endforeach
                            ?>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>