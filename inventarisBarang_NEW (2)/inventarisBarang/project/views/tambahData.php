<!-- views/tambahData.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Karyawan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<!-- HTML -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container">
        <a class="navbar-brand" href="/portofolio">PROJECT</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/project">Home</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<div class="container">
    <h1 class="mt-4">Tambah Karyawan</h1>

    <form method="POST" action="index.php?controller=employee&action=add">
        <div class="form-group">
            <label for="nip">NIP:</label>
            <input type="text" class="form-control" name="nip" id="nip" required>
        </div>

        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" name="nama" id="nama" required>
        </div>

        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <input type="text" class="form-control" name="alamat" id="alamat" required>
        </div>

        <div class="form-group">
            <label for="jabatan">Jabatan:</label>
            <select class="form-control" name="jabatan" id="jabatan" required>
                <option value="">Pilih Jabatan</option>
                <option value="001">Owner</option>
                <option value="002">Manager</option>
                <option value="003">Staff</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary" name="add_employee">Tambah</button>
    </form>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>