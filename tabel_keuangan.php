<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Tabel Keuangan Laundry</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
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
    <h2>Tabel Keuangan Laundry</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Deskripsi</th>
                <th>Pemasukan</th>
                <th>Pengeluaran</th>
                <th>Saldo</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>2023-10-01</td>
                <td>Pendapatan Harian</td>
                <td>Rp 500,000</td>
                <td>Rp 0</td>
                <td>Rp 500,000</td>
            </tr>
            <tr>
                <td>2</td>
                <td>2023-10-02</td>
                <td>Pembelian Deterjen</td>
                <td>Rp 0</td>
                <td>Rp 100,000</td>
                <td>Rp 400,000</td>
            </tr>
            <!-- Tambahkan baris lainnya sesuai kebutuhan -->
        </tbody>
    </table>
</body>
<a href="index.php" class="btn btn-primary">Kembali ke halaman awal</a>
</html>