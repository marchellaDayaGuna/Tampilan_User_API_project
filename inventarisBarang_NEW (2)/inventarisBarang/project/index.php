<?php

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'employee';

switch ($controller) {
    case 'employee':
        require_once 'controllers/EmployeeController.php';
        $employeeController = new EmployeeController();

        $action = isset($_GET['action']) ? $_GET['action'] : 'index';

        switch ($action) {
            case 'index':
                // Memeriksa apakah tombol diklik dan mengarahkan ke halaman karyawan jika ya
                if (isset($_POST['show_employees'])) {
                    header('Location: index.php?controller=employee&action=showAll');
                    exit();
                }

                // Menampilkan halaman landing
                require_once 'views/halaman.php';
                break;

            case 'showAll':
                $employeeController->index();

                break;
            
            case 'tampiltambah':
                // Menampilkan halaman landing
                require_once 'views/tambahData.php';
                break;

            case 'tampiledit':
                // Menampilkan halaman landing
                require_once 'views/editData.php';
                break;
                
            case 'add':
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    // Memeriksa apakah tombol diklik dan memproses data pegawai jika ya
                    if (isset($_POST['add_employee'])) {
                        $employeeController->add();
                    }
                    // Redirect ke halaman daftar pegawai setelah menambahkan
                    header('Location: index.php?controller=employee&action=showAll');
                }
                break;

            case 'edit':
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    // Memeriksa apakah tombol diklik dan memproses data pegawai jika ya
                    if (isset($_POST['edit_employee'])) {
                            $employeeController->edit();
                    }
                    // Redirect ke halaman daftar pegawai setelah edit
                    header('Location: index.php?controller=employee&action=showAll');
                }
                break;
        }
        break;

    // Implementasikan case untuk controller lainnya jika diperlukan
}
?>

