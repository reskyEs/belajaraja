<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Data Laundry</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
        a {
            text-align: center;
            margin-top: 50px;
            margin-left: 44%;
        }
    </style>
</head>

<body>
<?php
include('koneksi.php');

// Mengambil data user dari tabel akun
$query = "SELECT nama,jenis_cucian,berat,status FROM data_laundry";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Query Error: " . mysqli_error($conn));
}
?>


    <h1>Data Laundry</h1>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pelanggan</th>
                <th>Jenis Cucian</th>
                <th>Berat (kg)</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
        <?php
    $no = 1; // Counter for serial number
    while ($row = mysqli_fetch_assoc($result)) { ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo htmlspecialchars($row['nama']); ?></td>
        <td><?php echo htmlspecialchars($row['jenis_cucian']); ?></td>
        <td><?php echo intval($row['berat']); ?></td>
        
        <td><?php echo htmlspecialchars($row['status']); ?></td>
      </tr>
    <?php } ?>

            
        </tbody>
    </table>
</body>


        <a href="index.php" class="btn btn-primary">Kembali ke halaman awal</a>


</html>