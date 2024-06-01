<!-- Modal -->
<div class="modal fade" id="editarModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editarModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content ">
         <div class="modal-header">
            <div class="container text-center">
               <h1 class="modal-title fs-4" id="staticBackdropLabel">EDITAR REGISTRO</h1>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <form action="../controller/actualizar.php" method="post" enctype="multipart/form-data">
               <h6>Datos del Alumno</h6>
               <input type="hidden" id="id" name="id">
               <div class="row">
                  <div class="col-6 mb-3">
                     <label for="nombres" class="form-label">Nombres</label>
                     <input type="text" name="nombres" id="nombres" class="form-control" require />
                  </div>
                  <div class="col-6 mb-3">
                     <label for="apellidos" class="form-label">Apellidos</label>
                     <input type="text" name="apellidos" id="apellidos" class="form-control" require />
                  </div>
               </div>
               <div class="row">
                  <div class="col-3 mb-3">
                     <label for="tipoDocumento" class="form-label">Tipo de Documento</label>
                     <select name="tipoDocumento" id="tipoDocumento" class="form-select" require>
                        <option selected disabled>Selecciona ...</option>
                        <option value="dni">DNI</option>
                        <option value="pasaporte">Pasaporte</option>
                        <option value="otro">Otro</option>
                     </select>
                  </div>
                  <div class="col-3 mb-3">
                     <label for="documento" class="form-label">N° de Documento</label>
                     <input type="text" name="documento" id="documento" class="form-control" require />
                  </div>
                  <div class="col-6 mb-3">
                     <label for="correo" class="form-label">Correo</label>
                     <input type="email" name="correo" id="correo" class="form-control" require />
                  </div>
               </div>
               <hr>
               <h6>Datos del Certificado</h6>
               <div class="row">
                  <div class="col-3 mb-3">
                     <label for="codigo" class="form-label">Código</label>
                     <input type="text" name="codigo" id="codigo" class="form-control" require />
                  </div>
                  <div class="col-3 mb-3">
                     <label for="curso" class="form-label">Curso</label>
                     <input type="text" name="curso" id="curso" class="form-control" require />
                  </div>
                  <div class="col-6 mb-3">
                     <label for="descripcion" class="form-label">Descripción</label>
                     <textarea name="descripcion" id="descripcion" class="form-control" rows="1"></textarea>
                  </div>
               </div>
               <div class="row">
                  <div class="col-12 mb-3">
                     <label for="archivo" class="form-label">Subir Archivo</label>
                     <input type="file" name="archivo" id="archivo" class="form-control" accept="application/pdf" require />
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                  <button type="submit" class="btn btn-primary">Actualizar</button>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>