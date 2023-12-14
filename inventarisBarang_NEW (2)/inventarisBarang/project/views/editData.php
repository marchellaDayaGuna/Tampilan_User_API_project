<!-- views/editData.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Ubah Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<!-- HTML -->

    <!-- coba -->
    <!-- <div class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Ubah Data Karyawan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="POST" action="index.php?controller=employee&action=edit">
    <div class="form-floating mb-3">
    <label for="floatingInputDisabled">NIP : </label>
  <input type="text" class="form-control" name="nip" id="nip" placeholder="P.103" disabled>
    </div>
<div class="form-floating mb-3">
<label for="floatingInputDisabled">Nama : </label>
<input type="text" class="form-control" name="nama" id="nama" placeholder="Ivonny C P" required>
</div>
<div class="form-floating mb-3">
<label for="floatingInputDisabled">Alamat : </label>
<input type="text" class="form-control" name="alamat" id="alamat" placeholder="Jl. Kasihan Bantul" required>
</div>
<div class="form-floating">
<label for="jabatan">Jabatan : </label>
  <select class="form-select" name="jabatan" id="jabatan" aria-label="Owner" required>
  <option value="">Pilih Jabatan</option>
                <option value="001">Owner</option>
                <option value="002">Manager</option>
                <option value="003">Staff</option>
  </select>
</div>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" name="edit_employee">Save changes</button>
      </div>
    </div>
  </div>
</div> -->
    <!-- again -->
    <h2 class="mt-4">Ubah Data Karyawan</h2>
    <form method="POST" action="index.php?controller=employee&action=edit">
    <div class="form-floating mb-3">
    <label for="floatingInputDisabled">NIP : </label>
  <input type="text" class="form-control" name="nip" id="nip" placeholder="P.103" disabled>
    </div>
<div class="form-floating mb-3">
<label for="floatingInputDisabled">Nama : </label>
<input type="text" class="form-control" name="nama" id="nama" placeholder="Ivonny C P" required>
</div>
<div class="form-floating mb-3">
<label for="floatingInputDisabled">Alamat : </label>
<input type="text" class="form-control" name="alamat" id="alamat" placeholder="Jl. Kasihan Bantul" required>
</div>
<div class="form-floating">
<label for="jabatan">Jabatan : </label>
  <select class="form-select" name="jabatan" id="jabatan" aria-label="Owner" required>
  <option value="">Pilih Jabatan</option>
                <option value="001">Owner</option>
                <option value="002">Manager</option>
                <option value="003">Staff</option>
  </select>
</div>
        <button type="submit" class="btn btn-primary" name="edit_employee">Simpan</button>
    </form>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>