<h4 class="mb2">Input Data User</h4>
  <form action="<?= base_url('user/simpan')?>" method="post">
    <div class="mb-3">
      <label class="form-label" for="basic-default-fullname">Username</label>
      <input type="text" class="form-control" id="basic-default-fullname" name="username" required>
    </div>
    <div class="mb-3">
      <label class="form-label">Nama</label>
      <input type="text" class="form-control" name="nama" required>
    </div>
    <div class="mb-3">
      <label class="form-label" >Password</label>
      <input type="password" class="form-control" name="password" required>
    </div>
    <div class="mb-3">
      <label class="form-label" >Level</label>
      <select name="level" class="form-control" >
        <option value="User">User</option>
        <option value="Admin">Admin</option>
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
  </form>
</div>
