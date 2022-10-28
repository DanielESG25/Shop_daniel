<div class="modal fade" id="modalFormRol" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="d-flex justify-content-center" id="exampleModalCenterTitle">Tienda ED&SOL</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="tile">
            <h3 class="d-flex justify-content-center">Registre Rol</h3>
            <div class="tile-body">
              <form id="formRol" name="formRol">
                <div class="form-group">
                  <label class="control-label">Nombre</label>
                  <input class="form-control" id="txtNombre" name="txtNombre" type="text" placeholder="Nombre del rol" require="">
                </div>
                
                <div class="form-group">
                  <label class="control-label">Descripcion</label>
                  <textarea class="form-control" id="txtdescripcion" name="txtdescripcion" rows="2" placeholder="Describir el rol" require=""></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleSelect1">Estado</label>
                    <select class="form-control" id="Liststatus" name="Liststatus" require="">
                      <option value="1">Activo</option>
                      <option values="2">Inactivo</option>
                    </select>
                  </div>
                  <div class="d-flex justify-content-center">
                      <button class="btn btn-info " type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Guardar</button>&nbsp;&nbsp;&nbsp;<a 
                      class="btn btn-info" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</a>
                  </div>
              </form>
            </div>
           
          </div>
      </div>
    </div>
  </div>
</div>