<div class="modal fade" id="ModalEdit" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
    <form action="{{route('profile.update',auth()->user()->id)}}" method="post" class="form-horizontal">
            @csrf
            @method('PUT')
      <div class="modal-header color-modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel2">Configura tu perfil</h5>
        <button type="button" class="btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!--Modal Edit-->
            <div class="mb-3">
                <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="name" value="{{auth()->user()->name}}" autofocus>
                    @if ($errors->has('name'))
                        <span class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                    @endif
                    </div>
                </div>
            <div class="mb-3">
                    <label for="lastname" class="col-sm-2 col-form-label">Apellido</label>
                    <div class="col-sm-7">
                    <input type="text" class="form-control" name="lastname" value="{{auth()->user()->lastname}}">
                    @if ($errors->has('lastname'))
                        <span class="error text-danger" for="input-lastname">{{ $errors->first('lastname') }}</span>
                    @endif
                    </div>
            </div>
            <div class="mb-3">
                    <label for="email" class="col-sm-2 col-form-label">Correo</label>
                    <div class="col-sm-7">
                    <input type="email" class="form-control" name="email" value="{{auth()->user()->email }}">
                    @if ($errors->has('email'))
                        <span class="error text-danger" for="input-email">{{ $errors->first('email') }}</span>
                    @endif
                    </div>
            </div>
            <div class="mb-3">
                    <label for="password" class="col-sm-2 col-form-label">Contraseña</label>
                    <div class="col-sm-7">
                    <input type="password" class="form-control" name="password"  placeholder="Ingrese la contraseña sólo en caso de modificarla">
                    @if ($errors->has('password'))
                        <span class="error text-danger" for="input-password">{{ $errors->first('password') }}</span>
                    @endif
                    </div>
            </div>
            {{-- <div class="mb-3">
                  <label for="name" class="col-sm-2 col-form-label">Roles</label>
                  <div class="col-sm-7">
                      <div class="form-group">
                          <div class="tab-content">
                              <div class="tab-pane active" id="profile">
                                  <table class="table">
                                      <tbody>
                                          @foreach ($roles as $id => $role)
                                          <tr>
                                              <td>
                                                  <div class="form-check">
                                                      <label class="form-check-label">
                                                          <input class="form-check-input" type="checkbox"
                                                              name="roles[]"
                                                              value="{{ $id }}" {{ $user->roles->contains($id) ? 'checked' : ''}}
                                                          >
                                                          <span class="form-check-sign">
                                                              <span class="check" value=""></span>
                                                          </span>
                                                      </label>
                                                  </div>
                                              </td>
                                              <td>
                                                  {{ $role }}
                                              </td>
                                          </tr>
                                          @endforeach
                                      </tbody>
                                  </table>
                              </div>
                          </div>
                      </div>
                  </div>
              </div> --}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info " data-bs-toggle="modal" data-bs-target="#ModalProfile"  data-bs-dismiss="modal">Ver tu perfil</button>
        <button class="btn btn-success"   type="submit"  >Actualizar</button>
      </div>
      <form>
    </div>
  </div>
</div>
