<?php
include 'session.php';

// Jika form dikirim, simpan data dalam cookie dan redirect ke cv.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    setcookie("nama", $_POST['nama'], time() + (86400 * 30), "/");
    setcookie("pekerjaan", $_POST['pekerjaan'], time() + (86400 * 30), "/");
    setcookie("ttl", $_POST['ttl'], time() + (86400 * 30), "/");
    setcookie("no_hp", $_POST['no_hp'], time() + (86400 * 30), "/");
    setcookie("email", $_POST['email'], time() + (86400 * 30), "/");
    setcookie("sma", $_POST['sma'], time() + (86400 * 30), "/");
    setcookie("gpa_sma", $_POST['gpa_sma'], time() + (86400 * 30), "/");
    setcookie("tahun_sma", $_POST['tahun_sma'], time() + (86400 * 30), "/");
    setcookie("pt", $_POST['pt'], time() + (86400 * 30), "/");
    setcookie("gpa_pt", $_POST['gpa_pt'], time() + (86400 * 30), "/");
    setcookie("tahun_pt", $_POST['tahun_pt'], time() + (86400 * 30), "/");

    header("Location: cv.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form CV</title>
    <link rel="stylesheet" href="form.css">
</head>

<body>
    <div class="form-container">
        <div class="form-header">MAKE YOUR CV</div>

        <form method="POST">
            <div class="input-group">
                <label>Nama Lengkap</label>
                <input type="text" name="nama" required>
            </div>

            <div class="input-group">
                <label>Pekerjaan</label>
                <input type="text" name="pekerjaan" required>
            </div>

            <div class="input-group">
                <label>Tanggal Lahir</label>
                <input type="date" name="ttl" required>
            </div>

            <h3>Kontak</h3>
            <div class="input-group">
                <label>No HP</label>
                <input type="text" name="no_hp" required>
            </div>
            <div class="input-group">
                <label>Email</label>
                <input type="email" name="email" required>
            </div>

            <h3>Pendidikan</h3>
            <div class="input-group">
                <label>Sekolah Menengah Atas</label>
                <input type="text" name="sma" required>
            </div>
            <div class="input-group">
                <label>GPA SMA</label>
                <input type="text" name="gpa_sma" required>
            </div>
            <div class="input-group">
                <label>Tahun Lulus SMA/SMK/MA</label>
                <input type="text" name="tahun_sma" required>
            </div>

            <div class="input-group">
                <label>Perguruan Tinggi</label>
                <input type="text" name="pt">
            </div>
            <div class="input-group">
                <label>GPA ACADEMIC</label>
                <input type="text" name="gpa_pt">
            </div>
            <div class="input-group">
                <label>Tahun Lulus Perguruan Tinggi</label>
                <input type="text" name="tahun_pt">
            </div>

            <button type="submit">create CV</button>
        </form>
    </div>
</body>
</html>
