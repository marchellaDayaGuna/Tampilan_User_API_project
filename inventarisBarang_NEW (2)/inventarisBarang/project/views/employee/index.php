<?php
// koneksi ke database

$conn = mysqli_connect("localhost", "root", "", 
"karyawan");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM personalia WHERE NIP = $NIP");

    return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;
  
    $nip = $data["NIP"];
    $nama = htmlspecialchars($data["Nama"]);
    $alamat = htmlspecialchars($data["Alamat"]);
    $kode = htmlspecialchars($data["NamaJabatan"]);

    $query = "UPDATE personalia SET 
                Nama = '$nama',
                Alamat = '$alamat',
                NamaJabatan = '$kode',
                WHERE NIP = $nip
                ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword) {
    $query = "SELECT * FROM personalia WHERE
                NIP LIKE '%$keyword%' OR
                Nama LIKE '%$keyword%' OR
                Alamat LIKE '%$keyword%' OR
                NamaJabatan LIKE '%$keyword%'
                
            ";
    return query($query);
}

function tambah($data) {
    global $conn;

    $nip = strtolower(stripslashes($data["NIP"]));
    $nama = strtolower(stripslashes($data["Nama"]));
    $alamat = strtolower(stripslashes($data["Alamat"]));
    $kode = strtolower(stripslashes($data["NamaJabatan"]));

    // cek Nama sudah ada atau belum
    $result = mysqli_query($conn, "SELECT Nama FROM personalia
    WHERE Nama = '$nama'");

    if( mysqli_fetch_assoc($result) ) {
        echo "<script>
                alert('Nama sudah terdaftar!')
              </script>";
        return false;
    }

    // cek NIP sudah ada atau belum
    $result = mysqli_query($conn, "SELECT NIP FROM personalia
    WHERE NIP = '$nip'");

    if( mysqli_fetch_assoc($result) ) {
        echo "<script>
                alert('NIP sudah terdaftar!')
              </script>";
        return false;
    }

    // tambahkan karyawan baru ke database
    $query = "INSERT INTO personalia (NIP, Nama, Alamat, NamaJabatan )  VALUES('$nip', '$nama', $alamat, $kode)";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}
?>