<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROJECT</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>


    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">PROJECT</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#tampil">Daftar Karyawan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tambah">Tambah Data</a>
                </li>
                <!-- Add more nav items if needed -->
            </ul>
        </div>
    </nav>

    <!-- Content -->
    <div class="container mt-5">
    <section class="jumbotron text-center">
      <h1 class="display-4">Ivonny Carmelita Putri</h1>
      <p class="lead">Portofolio | Project</p>
    </section>

    <!-- Daftar Karyawan -->
    <section id="tampil" class="bg-light">
      <div class="container py-5 text-center">
        <h2 id="info" class="text-center mb-4">Daftar Karyawan</h2>
        <?php
        $controller = isset($_GET['controller']) ? $_GET['controller'] : 'employee';

        switch ($controller) {
            case 'employee':
                require_once 'controllers/EmployeeController.php';
                $employeeController = new EmployeeController();

                $action = isset($_GET['action']) ? $_GET['action'] : 'index';

                switch ($action) {
                    case 'index':
                        $employeeController->index();
                        break;

                    // Implementasikan case untuk operasi CRUD lainnya
                }

                break;

            // Implementasikan case untuk controller lainnya jika diperlukan
        }
    ?>
    
        
    </form>
    
  
    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>

<!-- Tambah Data -->
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Karyawan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<!-- HTML -->

      <div class="container">
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/project">Home</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <br> </br>
<div class="container">
    <h1 class="mt-4">Tambah Karyawan</h1>
    <br> </br>
    <section id="tambah">
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