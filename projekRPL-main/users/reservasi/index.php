<!DOCTYPE html>
<html>
<head>
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <script src="js/bootstrap.bundle.min.js" ></script>

    <title>Reservasi Meja Restoran WarongWarem</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    
    <link rel="icon" href="/loginPage/image/img.jpg">
</head>
<body>
    <h1>Reservasi Meja </h1>
    <form id="reservation-form">
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama" required>

        <label for="tanggal">Tanggal:</label>
        <input type="date" id="tanggal" name="tanggal" required><br>
        
        <label for="waktu">Waktu:</label>
        <input type="time" id="waktu" name="waktu" required><br>
        
        <label for="jumlah-orang">Jumlah Orang:</label>
        <input type="number" id="jumlah-orang" name="jumlah_orang" required><br>
        
        <label for="jenis-meja">Jenis Meja:</label>
        <select id="jenis-meja" name="jenis_meja" required>
            <option value="meja-kecil">Meja Kecil</option>
            <option value="meja-panjang">Meja Panjang</option>
            <option value="meja-VIP">Meja VIP</option>
        </select><br>
        
        <input type="submit" value="Reservasi">
    </form>
    <script src="script.js"></script>
</body>
</html>
