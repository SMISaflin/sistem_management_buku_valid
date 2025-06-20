<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <nav class="sidebar">
            <h1>Sistem Management Buku</h1>
            <header>
                <ul>
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="management_buku.php">Management Buku</a></li>
                    <li><a href="management_pengguna.php">Management Pengguna</a></li>
                    <li><a href="logout.php">Log Out</a></li> 
                </ul>
            </header>
        </nav>
        <div class="tombol">
            <h3>Dashboard</h3>
            <nav class="cari">
                <button>Cari</button>
                <input type="Cari Buku" placeholder="Cari Buku"></input>
            </nav>
        <div class="card-container">
            <div class="cards">
                <div class="card biru">
                    <h2>Total Buku</h2>
                    <p>350 Buku</p>
                </div>
                <div class="card lilac">
                    <h2>Anggota</h2>
                    <p>300 Orang</p>
                </div>
                <div class="card lilac">
                    <h2>Kategori</h2>
                    <p>10 Kategori</p>
                </div>
                <div class="card biru">
                    <h2>Peminjam Aktif</h2>
                    <p>100 Orang</p>
                </div>
            </div>
        </div>
        </div>
    </div>

    <footer>
        <p>&copy;2025. Semua Hak Cipta Dilindungi Oleh Pihak Berwajib.</p>
    </footer>
</body>
</html>