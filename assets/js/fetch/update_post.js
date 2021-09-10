window.addEventListener('load', () => {

    let button = document.getElementById('formulario_update');
    let id_up = document.getElementById('id_up');
    let nombre_up = document.getElementById('nombre_up');
    let correo_up = document.getElementById('correo_up');
    let passwork_up = document.getElementById('passwork_up');
    let rol_fk_up = document.getElementById('rol_fk_up');
    let alert = document.getElementById('deletealert');
  
    function data() {
        let datos = new FormData();
        datos.append("id_up", id_up.value);
        datos.append("nombre_up", nombre_up.value);
        datos.append("correo_up", correo_up.value);
        datos.append("passwork_up", passwork_up.value);
        datos.append("rol_fk_up", rol_fk_up.value);
        fetch('../../model/crud/update.php', {
            method: 'POST',
            body: datos
        }).then(Response => Response.json())
        .then(({ success }) => {
            if (success === 1) {
                alerta_success();
                cargarTablaAsync();
            } else {
                alerta_fail();
            }
        });

    }

    function alerta_success() {
        alert.innerHTML = `
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
        </symbol>
        </svg>
        <div class="alert alert-success d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
        <div>
            Actualizado Correctamente!
        </div>
        </div>
        `;
    } 

    function alerta_fail() {
        alert.innerHTML = `
        <div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </svg>
        <div>
            No se hizo la actualizacion!
        </div>
        </div>
        `;
    } 

    button.addEventListener('submit', (e) => {
        e.preventDefault();
        data();
    });

});
