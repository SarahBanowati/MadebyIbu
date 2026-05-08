<?php
$menu = [
    [
        "nama" => "Strawberry Cake",
        "harga" => "Rp 12.000",
        "gambar" => "strawbery.jpeg",
        "kategori" => "cake"
    ],
    [
        "nama" => "Tiramisu Cake",
        "harga" => "Rp 22.000",
        "gambar" => "tiramisu.jpeg",
        "kategori" => "cake"
    ],
    [
        "nama" => "Matcha Cake",
        "harga" => "Rp 15.000",
        "gambar" => "matcha.jpeg",
        "kategori" => "cake"
    ],
    [
        "nama" => "Red Velvet Cookies",
        "harga" => "Rp 8.000",
        "gambar" => "redvelvet.jpeg",
        "kategori" => "cookies"
    ],
    [
        "nama" => "Milk Choco Cookies",
        "harga" => "Rp 8.000",
        "gambar" => "milkchoco.jpeg",
        "kategori" => "cookies"
    ],
    [
        "nama" => "Lotus Biscoff Cookies",
        "harga" => "Rp 8.000",
        "gambar" => "biscoff.jpeg",
        "kategori" => "cookies"
    ]
];
?>

<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<style>
    :root { --maroon: #800000; --white: #ffffff; }
    body { font-family: 'Poppins', sans-serif; margin: 0; padding: 0; overflow-x: hidden; scroll-behavior: smooth; }
    section { min-height: 100vh; display: flex; flex-direction: column; justify-content: center; }
</style>

<header style="position: fixed; top: 20px; left: 0; right: 0; display: flex; justify-content: center; z-index: 9999;">
    <nav style="background: rgba(255, 255, 255, 0.98); width: 90%; max-width: 1100px; padding: 12px 30px; border-radius: 50px; display: flex; justify-content: space-between; align-items: center; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
        <a href="index.php" style="font-size: 26px; font-weight: bold; color: var(--maroon); text-decoration: none; font-family: 'Playfair Display', serif;">Made by Ibu</a>
        <ul style="list-style: none; display: flex; gap: 25px; margin: 0; padding: 0;">
            <li><a href="index.php" style="text-decoration: none; color: #333; font-weight: 500;">Home</a></li>
            <li><a href="#menu" style="text-decoration: none; color: #333; font-weight: 500;">Menu</a></li>
            <li><a href="#booking" style="text-decoration: none; color: #333; font-weight: 500;">Order</a></li>
        </ul>
        <div style="display: flex; align-items: center; gap: 15px;">
            <a href="#booking" style="background: var(--maroon); color: white !important; padding: 10px 22px; border-radius: 25px; text-decoration: none; font-weight: bold; font-size: 13px; display: flex; align-items: center; gap: 8px;">
                <i class="fas fa-shopping-cart"></i> Pesan
            </a>
            <img src="assets/logo.png" style="height: 40px; width: 40px; border-radius: 50%; object-fit: cover;" onerror="this.src='https://via.placeholder.com/40/800000/FFFFFF?text=MBI'">
        </div>
    </nav>
</header>

<section style="background: linear-gradient(rgba(128,0,0,0.8), rgba(128,0,0,0.8)), url('assets/bakery.jpeg') center/cover no-repeat; text-align: center; color: white;">
    <h1 style="font-size: 75px; font-family: 'Playfair Display', serif; margin-bottom: 15px;">Made by Ibu</h1>
    <p style="font-size: 22px; font-weight: 300; margin-bottom: 40px; letter-spacing: 1px;">Kehangatan rasa dari dapur Ibu untuk keluarga.</p>
    <div><a href="#menu" style="background: white; color: var(--maroon); padding: 16px 45px; border-radius: 50px; text-decoration: none; font-weight: 700; box-shadow: 0 10px 20px rgba(0,0,0,0.2);">Lihat Menu</a></div>
</section>

<section style="background: var(--white); padding: 100px 20px; text-align: center;">
    <h2 style="font-family: 'Playfair Display', serif; color: var(--maroon); font-size: 38px; margin-bottom: 50px;">Kategori Pilihan</h2>
    <div style="display: flex; justify-content: center; gap: 40px; flex-wrap: wrap;">
        <a href="index.php?type=cake#menu" style="text-decoration: none; color: inherit;">
            <div style="background: #fff5f5; padding: 45px; border-radius: 35px; width: 170px; border: 2px solid <?= (isset($_GET['type']) && $_GET['type'] == 'cake') ? 'var(--maroon)' : '#eee' ?>; transition: 0.3s;">
                <i class="fas fa-birthday-cake" style="font-size: 45px; color: var(--maroon); margin-bottom: 20px; display: block;"></i>
                <p style="font-weight: 700; color: var(--maroon); margin: 0; letter-spacing: 1px;">CAKES</p>
            </div>
        </a>
        <a href="index.php?type=cookies#menu" style="text-decoration: none; color: inherit;">
            <div style="background: #fff5f5; padding: 45px; border-radius: 35px; width: 170px; border: 2px solid <?= (isset($_GET['type']) && $_GET['type'] == 'cookies') ? 'var(--maroon)' : '#eee' ?>; transition: 0.3s;">
                <i class="fas fa-cookie" style="font-size: 45px; color: var(--maroon); margin-bottom: 20px; display: block;"></i>
                <p style="font-weight: 700; color: var(--maroon); margin: 0; letter-spacing: 1px;">COOKIES</p>
            </div>
        </a>
    </div>
</section>

<section id="menu" style="background: #fdfdfd; padding: 100px 50px;">
    <div style="text-align: center; margin-bottom: 60px;">
        <h2 style="font-family: 'Playfair Display', serif; color: var(--maroon); font-size: 45px; margin-bottom: 10px;">
            Daftar <?= isset($_GET['type']) ? ucfirst($_GET['type']) : 'Menu' ?>
        </h2>
        <div style="width: 80px; height: 5px; background: var(--maroon); margin: auto;"></div>
    </div>
    
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 35px; max-width: 1200px; margin: 0 auto;">
        <?php 
        foreach($menu as $m): 
            $kat = isset($m['kategori']) ? strtolower($m['kategori']) : '';
            if(isset($_GET['type']) && $kat !== strtolower($_GET['type'])) continue;
        ?>
        <div style="background: white; border-radius: 30px; padding: 25px; text-align: center; box-shadow: 0 15px 35px rgba(0,0,0,0.06); border: 1px solid #f2f2f2;">
            <div style="background: #eee; border-radius: 25px; overflow: hidden; margin-bottom: 20px;">
                <img src="assets/<?= $m['gambar']; ?>" style="width: 100%; height: 220px; object-fit: cover;" onerror="this.src='https://via.placeholder.com/300x220?text=Cek+File+Assets'">
            </div>
            <h3 style="font-size: 22px; color: #333; margin-bottom: 12px; font-weight: 600;"><?= $m['nama']; ?></h3>
            <p style="color: var(--maroon); font-weight: 800; font-size: 20px; margin: 0;"><?= $m['harga']; ?></p>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<section id="booking" style="background: var(--maroon); padding: 100px 20px;">
    <div style="max-width: 700px; margin: auto; background: white; padding: 60px; border-radius: 40px; box-shadow: 0 25px 60px rgba(0,0,0,0.3);">
        <h2 style="color: var(--maroon); text-align: center; font-family: 'Playfair Display', serif; font-size: 38px; margin-bottom: 40px;">Form Pemesanan</h2>
        
        <form action="#" method="POST" style="display: flex; flex-direction: column; gap: 20px;">
            <input type="text" placeholder="Nama Lengkap" required style="padding: 18px; border-radius: 15px; border: 1px solid #eee; outline: none; font-family: 'Poppins', sans-serif;">
            <input type="tel" placeholder="Nomor WhatsApp" required style="padding: 18px; border-radius: 15px; border: 1px solid #eee; outline: none; font-family: 'Poppins', sans-serif;">
            <textarea placeholder="Alamat Pengiriman Lengkap" required 
    style="padding: 18px; border-radius: 15px; border: 1px solid #eee; outline: none; min-height: 100px; resize: none; font-family: 'Poppins', sans-serif;">
</textarea>

            <div style="text-align: left; margin-top: 10px;">
                <p style="font-weight: 600; color: var(--maroon); margin-bottom: 15px;">Pilih Varian Menu:</p>
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px;">
                    <?php foreach($menu as $m): ?>
                    <label style="display: flex; align-items: center; gap: 10px; cursor: pointer; background: #fff5f5; padding: 12px; border-radius: 12px; border: 1px solid #eee; transition: 0.3s;">
                        <input type="checkbox" name="varian[]" value="<?= $m['nama']; ?>" style="accent-color: var(--maroon); width: 18px; height: 18px;">
                        <span style="font-size: 14px; color: #333; font-weight: 500;"><?= $m['nama']; ?></span>
                    </label>
                    <?php endforeach; ?>
                </div>
            </div>

            <input type="number" placeholder="Total Jumlah Pesanan" required style="padding: 18px; border-radius: 15px; border: 1px solid #eee; outline: none; font-family: 'Poppins', sans-serif; margin-top: 10px;">
            
            <button type="submit" style="padding: 22px; background: var(--maroon); color: white; border: none; border-radius: 50px; font-weight: 700; font-size: 17px; cursor: pointer; margin-top: 15px;">Kirim Pesanan</button>
        </form>
    </div>
</section>

<?php include 'footer.php'; ?>