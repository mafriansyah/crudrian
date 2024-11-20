<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Pengguna</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama">nama</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div> 
                  <div class="form-group">
                    <label for="username">username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username Anda" required>
                  </div>
                  <div class="form-group">
                    <label for="pasword">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                  </div>
                  <div class="form-group">
                        <label>Select</label>
                        <select class="form-control">
                          <option value="admin">Admin</option>
                          <option value="user">User</option>
                         
                        </select>
                      </div>
                  <!--<div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>-->
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="resett" class="btn btn-warning">Reset</button>
                  <button type="submit" class="btn btn-primary">Simpat</button>
                </div>
              </form>
            </div>