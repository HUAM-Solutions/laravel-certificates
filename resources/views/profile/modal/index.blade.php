<!-- Modal -->
<div class="modal modal-style fade" id="ModalProfile" tabindex="-1"  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header color-modal-header">
        <h5 class="modal-title" >Perfil del usuario</h5>
        <button type="button" class="btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" value="{{auth()->user()->name}}" class="form-control"  disabled readonly>
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Apellido</label>
                <input type="text" value="{{auth()->user()->lastname}}" class="form-control"  disabled readonly>
            </div>
            <div class="mb-3">
                <label for="dni" class="form-label">DNI</label>
                <input type="text" value="{{auth()->user()->dni}}" class="form-control"  disabled readonly>
            </div>
            <div class="mb-3">
                <label for="dni" class="form-label">Fecha de nacimiento</label>
                <input type="text" value="{{auth()->user()->birthdate}}" class="form-control"  disabled readonly>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" value="{{auth()->user()->email}}"  class="form-control" class="form-control"  disabled readonly>                                        
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="#" class="btn btn-warning" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#ModalEdit" >
            <i class="fa-sharp fa-regular fa-pen-to-square"></i> Configurar    
        </a>  
      </div>
    </div>
  </div>
</div>
@include('profile.modal.edit')
