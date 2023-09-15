<!-- Modal Tambah Peternak -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title font-weight-normal" id="exampleModalLabel">Edit Akun Peternak</h5>
            <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="/detailpeternak/{{$peternak -> id}}/update" method="POST" enctype="multipart/form-data">
              @method('put') 
              @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group input-group-outline my-3">
                            <label class="form-label">Nama Peternakan</label>
                            <input type="text" class="form-control" name="nama_peternakan" value={{$peternak -> nama_peternakan}} >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group-outline my-3">
                            <label class="form-label">No HP</label>
                            <input type="text" class="form-control" name="contact_phone" value={{$peternak -> contact_phone}}>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group input-group-outline my-3">
                            <label class="form-label">Alamat</label>
                            <input type="text" class="form-control" name="address" value={{$peternak -> address}}>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group-outline my-3">
                            <label for="formFile" class="form-label">Pilih Foto Profil</label>
                            <input class="form-control" type="file" id="formFile" name="profile_photo" value={{$peternak -> profile_photo}}>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group input-group-outline my-3">
                            <label class="form-label">Pemilik</label>
                            <input type="text" class="form-control" name="name" value={{$peternak -> name}}>
                        </div>
                    </div>
                    <div class="col-md-6" style="display: none">
                        <div class="input-group input-group-outline my-3">
                            <label class="form-label">Role</label>
                            <input type="text" class="form-control" name="role" value={{$peternak -> role}} >
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">email</label>
                        <input type="text" class="form-control" name="email" value={{$peternak -> email}}>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">username</label>
                        <input type="text" class="form-control" name="username" value= {{$peternak -> username}}>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">password</label>
                        <input type="text" class="form-control" name="password" value={{$peternak -> password}}>
                    </div>
                </div>

                {{-- footer modal --}}
                <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn bg-gradient-primary" value="saved">Save changes</button>
                </div>
                {{-- end footer modal --}}
            </form>
        </div>
    </div>
</div>
</div>
