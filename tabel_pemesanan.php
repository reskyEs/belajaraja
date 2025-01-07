
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pemesanan Laundry</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Form Pemesanan Laundry</h2>
        <form action="proses_pemesanan.php" method="post">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <textarea class="form-control" id="alamat" name="alamat" required></textarea>
            </div>
            <div class="form-group">
                <label for="telepon">Telepon:</label>
                <input type="text" class="form-control" id="telepon" name="no_hp" required>
            </div>
            <div class="form-group">
                <label for="jenis_laundry">Jenis Laundry:</label>
                <select class="form-control" id="jenis_laundry" name="jenis_cucian" required>
                    <option value="cuci_kering">Cuci Kering</option>
                    <option value="cuci_setrika">Cuci Setrika</option>
                    <option value="setrika_saja">Setrika Saja</option>
                </select>
            </div>
            <div class="form-group">
                <label for="berat">Berat (kg):</label>
                <input type="number" class="form-control" id="berat" name="berat" required>
            </div>
            <button type="submit" class="btn btn-primary">Pesan</button>
            <a href="index.php" class="btn btn-primary">Kembali ke halaman awal</a>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>