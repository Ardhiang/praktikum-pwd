<?php
    session_start();
    if(isset($_SESSION['username'])){
        echo "Selamat Datang " . $_SESSION['username'];
        echo "<a href='logout.php'> logout</a";
        }
        
    ?>
<!DOCTYPE html>
<html>

<head>
    <title>Belajar PHP - Tampilkan Data Identitas</title>
</head>

<body>

    <a href="tambah.php">+ TAMBAH IDENTITAS</a>
    <a href="login.php"> login</a>
    <br />
    <br />
    <table border="1">
        <tr>
            <th>NO</th>
            <th>Id_Mahasiswa</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Telp</th>
            <th>Prodi</th>
           
        </tr>
        <?php
        include 'connect.php';
        $no = 1;
        $data = mysqli_query($db, "SELECT * FROM Mahasiswa");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['Id_Mahasiswa']; ?></td>
                <td><?php echo $d['Nama']; ?></td>
                <td><?php echo $d['Alamat']; ?></td>
                <td><?php echo $d['Telp']; ?></td>
                <td><?php echo $d['Prodi']; ?></td>
                <td>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>