let id_form = document.getElementById('id_up');
let nombre_form = document.getElementById('nombre_up');
let correo_form = document.getElementById('correo_up');
let pass_form = document.getElementById('passwork_up');
let rol_form = document.getElementById('rol_fk_up');

function updateForm(id) {
    fetch("../../model/crud/select_update.php", {
        method: "POST",
        body: id
    }).then(response => response.json()).then(response => {
        id_form.value = response.id;
        nombre_form.value = response.nombre;
        correo_form.value = response.correo;
        pass_form.value = response.passwork;
        rol_form.value = response.rol_fk;
    })
}

