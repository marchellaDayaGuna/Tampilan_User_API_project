<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        padding: 8px;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: purple;
        color: white;
    }
</style>

<table>
    <tr>
        <th>NIP</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Jabatan</th>
        
    </tr>
    <?php foreach ($employees as $employee) : ?>
        <tr>
            <td><?= $employee['NIP']; ?></td>
            <td><?= $employee['Nama']; ?></td>
            <td><?= $employee['Alamat']; ?></td>
            <td><?= $employee['NamaJabatan']; ?></td>
            <!-- <td><a class="btn btn-secondary" href="views/editData.php" role="button" name="edit_employee">Edit</a></td> -->
            <td> <form method="POST" action="views/editData.php">
                    <input type="hidden" name="nip" value="<?= $employee['NIP']; ?>">
                    <input type="hidden" name="nama" value="<?= $employee['Nama']; ?>">
                    <input type="hidden" name="alamat" value="<?= $employee['Alamat']; ?>">
                    <input type="hidden" name="jabatan" value="<?= $employee['NamaJabatan']; ?>">
                    <button type="submit" class="btn btn-secondary" name="edit_employee">Edit</button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
