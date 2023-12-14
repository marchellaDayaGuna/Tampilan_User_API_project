<?php

require_once 'models/Employee.php';

class EmployeeController
{
    private $employeeModel;

    public function __construct()
    {
        $this->employeeModel = new Employee();
    }

    public function index()
    {
        // Jika permintaan penambahan karyawan dikirimkan
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['action']) && $_GET['action'] === 'add') {
            $this->add();
        } else {
            $employees = $this->employeeModel->getAllEmployees();
            include 'views/tableEmployee.php';
        }
    }

    public function add()
    {
        // Ambil data yang dikirimkan melalui form
        $nip = $_POST['nip'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $jabatan = $_POST['jabatan'];

        // Panggil metode untuk menambahkan karyawan
        $this->employeeModel->addEmployee($nip, $nama, $alamat, $jabatan);

        // Redirect ke halaman utama setelah penambahan karyawan
        header('Location: index.php');
    }

    public function edit()
    {
        // Ambil data yang dikirimkan melalui form
        $nip = $_POST['nip'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $jabatan = $_POST['jabatan'];

        // Panggil metode untuk mengedit karyawan
        $this->employeeModel->editEmployee($nip, $nama, $alamat, $jabatan);

        // Redirect ke halaman utama setelah pengeditan karyawan
        header('Location: index.php');
    }
}
?>

