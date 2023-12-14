<?php

class Employee
{
    private $db;

    public function __construct()
    {
        // Koneksi ke basis data
        $this->db = new PDO("mysql:host=localhost;dbname=karyawan", "root", "");
    }

    public function getAllEmployees()
    {
        $query = "SELECT personalia.NIP, personalia.Nama, personalia.Alamat, kodejabatan.NamaJabatan FROM personalia, kodejabatan WHERE personalia.jabatan=kodejabatan.kode";
        $stmt = $this->db->query($query);
        $employees = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $employees;
    }
    public function addEmployee($nip, $nama, $alamat, $jabatan)
    {
        // Query untuk memasukkan data karyawan baru
        $query = "INSERT INTO personalia (NIP, Nama, Alamat, jabatan) VALUES (:nip, :nama, :alamat, :jabatan)";
        $stmt = $this->db->prepare($query);

        // Bind parameter ke query
        $stmt->bindParam(':nip', $nip);
        $stmt->bindParam(':nama', $nama);
        $stmt->bindParam(':alamat', $alamat);
        $stmt->bindParam(':jabatan', $jabatan);

        // Eksekusi query
        $stmt->execute();
    }
    public function editEmployee($nip, $nama, $alamat, $jabatan)
    {
        // Query untuk mengedit data karyawan 
        $query = "INSERT INTO personalia (NIP, Nama, Alamat, jabatan) VALUES (:nip, :nama, :alamat, :jabatan)";
        $stmt = $this->db->prepare($query);

        // Bind parameter ke query
        $stmt->bindParam(':nip', $nip);
        $stmt->bindParam(':nama', $nama);
        $stmt->bindParam(':alamat', $alamat);
        $stmt->bindParam(':jabatan', $jabatan);

        // Eksekusi query
        $stmt->execute();

    }    
}
?>