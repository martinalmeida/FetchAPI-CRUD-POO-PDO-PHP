const tabla = document.querySelector("#tabla");

async function cargarTablaAsync(){
    let info;
    const data = await fetch("../../model/crud/table.php");
    const resulatdo = await data.json();
    info = resulatdo.map(e => {
        return `<tr>
                    <td>${e.id}</td>
                    <td>${e.nombre}</td>
                    <td>${e.correo}</td>
                    <td>${e.passwork}</td>
                    <td>${e.rol_fk}</td>
                    <td class="text-center">
                        <button type="button" class="btnEditar btn btn-success" data-bs-toggle="modal" data-bs-target="#update_modal" onclick="updateForm('${e.id}');">Edit <i class="far fa-edit text-white"></i></button> 
                        <button class="btn btn-danger" onclick="eliminaregistro('${e.id}');" >Delete <i class="far fa-minus-square text-white"></i></button>
                    </td>
                </tr>`;        
    }).join('');
    tabla.innerHTML = info;
}

cargarTablaAsync();
