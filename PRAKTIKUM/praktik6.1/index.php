    <?php
    include "koneksi.php";

    // show data
    $query = "SELECT * FROM mahasiswa";
    $result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>praktik 6</title>
</head>
<body>
    <h2>Data Mahasiswa</h2>
    <table border="1" style="width:100%">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Semester</th>
            <th>Aksi</th>
        </tr>

        <?php
            while($row = $result->fetch_assoc()) :
        ?>
        <tr>
            <td> <?= $row['id'] ?> </td>
            <td> <?= $row['nama'] ?> </td>
            <td> <?= $row['nim'] ?> </td>
            <td> <?= $row['jurusan'] ?> </td>
            <td> <?= $row['semester'] ?> </td>
            <td>
                <a href="edit.php?id=; ?>">Edit</a>/
                <a href="delete.php?id=; ?>">Delete</a>
            </td>
        </tr>
        <?php
            endwhile;
        ?>
    </table>

    <br>
    <h2>Tambah Mahasiswa</h2>
    <form action="insert.php" method="POST">
        Nama: <input type="text" name="nama" required><br>
        NIM: <input type="text" name="nim" required><br>
        Jurusan: <input type="text" name="jurusan" required><br>
        Semester: <input type="number" name="semester" required><br>
        <input type="submit" value="Tambah">
    </form>
</body>
</html>