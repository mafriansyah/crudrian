<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Tambah Pengguna</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form action="db/dbpengguna.php?proses=insert" method="POST">
    <div class="card-body">
      <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Anda" required>
      </div>
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username"
          placeholder="Username Anda" required>
      </div>
      <div class="form-group">
        <label for="pasword">Password</label>
        <input type="password" class="form-control" id="password" name="password"
          placeholder="Password" required>
      </div>
      <di class="form-group">
        <label>Select</label>
        <select class="form-control" name="level" id="level">
          <option value="admin">Admin</option>
          <option value="user">User</option>
        </select>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary float-right ml-3"><i class="fa fa-save">

            </i>Simpan</button>
          <button type="reset" class="btn btn-warning float-right"><i class="fa fa-retweet">

            </i>Reset</button>
        </div>
  </form>
</div>