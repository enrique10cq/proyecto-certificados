let editarModal = document.getElementById('editarModal');
editarModal.addEventListener('shown.bs.modal', event => {
    let button = event.relatedTarget;
    let id = button.getAttribute('data-bs-id');

    let inputId = editarModal.querySelector('.modal-body #id');
    let inputNombres = editarModal.querySelector('.modal-body #nombres');
    let inputApellidos = editarModal.querySelector('.modal-body #apellidos');
    let inputTipoDocumento = editarModal.querySelector('.modal-body #tipoDocumento');
    let inputDocumento = editarModal.querySelector('.modal-body #documento');
    let inputCorreo = editarModal.querySelector('.modal-body #correo');

    let inputCodigo = editarModal.querySelector('.modal-body #codigo');
    let inputCurso = editarModal.querySelector('.modal-body #curso');
    let inputDescripcion = editarModal.querySelector('.modal-body #descripcion');
    
    let url = "../../controller/getCertificado.php";
    let formData = new FormData();
    formData.append('id', id);

    fetch(url, {
        method: "POST",
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        inputId.value = data.id_alumno;
        inputNombres.value = data.nombres;
        inputApellidos.value = data.apellidos;
        inputTipoDocumento.value = data.tipo_documento;
        inputDocumento.value = data.documento;
        inputCorreo.value = data.correo;
        inputCodigo.value = data.codigo;
        inputCurso.value = data.curso;
        inputDescripcion.value = data.descripcion;
    })
    .catch(e => console.log(e));
});
