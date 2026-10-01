<?php
$daftar_produk = [
    [
        "nama"     => "Laptop Slim 14",
        "kategori" => "Komputer",
        "harga"    => 7500000,
        "stok"     => 4
    ],
    [
        "nama"     => "Monitor 24 Inch Full HD",
        "kategori" => "Display",
        "harga"    => 1650000,
        "stok"     => 2
    ],
    [
        "nama"     => "Keyboard Mechanical TKL",
        "kategori" => "Aksesoris",
        "harga"    => 450000,
        "stok"     => 7
    ],
    [
        "nama"     => "Wireless Optical Mouse",
        "kategori" => "Aksesoris",
        "harga"    => 185000,
        "stok"     => 0 
    ],
    [
        "nama"     => "Headphone Over-Ear",
        "kategori" => "Audio",
        "harga"    => 1100000,
        "stok"     => 3
    ],
    [
        "nama"     => "USB Type-C Adapter",
        "kategori" => "Aksesoris",
        "harga"    => 120000,
        "stok"     => 0
    ]
];


$total_produk = count($daftar_produk);

function format_rp($angka) {
    return "Rp " . number_format($angka, 0, ',', '.');
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cia Store</title>
    <style>
       
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #fafafa;
            color: #222222;
            line-height: 1.5;
        }

        .container {
            width: 88%;
            max-width: 960px;
            margin: 0 auto;
        }

       
        header {
            background-color: #ffffff;
            border-bottom: 1px solid #e5e5e5;
            padding: 18px 0;
        }

        .nav-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .brand {
            font-size: 18px;
            font-weight: bold;
            color: #222222;
            text-decoration: none;
        }

        .menu a {
            text-decoration: none;
            color: #666666;
            margin-left: 20px;
            font-size: 14px;
        }

        .menu a:hover {
            color: #000000;
        }

        
        .intro {
            padding: 35px 0 25px 0;
            border-bottom: 1px solid #eeeeee;
            margin-bottom: 25px;
        }

        .intro h1 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 8px;
        }

        .intro p {
            font-size: 14px;
            color: #666666;
        }

        
        .catalog-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .catalog-info h2 {
            font-size: 18px;
        }

        .total-text {
            font-size: 13px;
            color: #555555;
            background: #eeeeee;
            padding: 4px 10px;
            border-radius: 4px;
        }

       
        .product-list {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 18px;
            margin-bottom: 40px;
        }

        .card {
            background-color: #ffffff;
            border: 1px solid #e0e0e0;
            border-radius: 6px;
            padding: 16px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 12px;
            margin-bottom: 10px;
        }

        .category {
            color: #777777;
            text-transform: uppercase;
            font-size: 11px;
        }

        .status {
            font-size: 11px;
            font-weight: bold;
        }

        .status.available {
            color: #2e7d32;
        }

        .status.out-of-stock {
            color: #c62828;
        }

        .product-name {
            font-size: 15px;
            font-weight: bold;
            margin-bottom: 12px;
            color: #111111;
        }

        .pricing {
            margin-bottom: 8px;
        }

        .original-price {
            font-size: 12px;
            color: #888888;
            text-decoration: line-through;
        }

        .final-price {
            font-size: 16px;
            font-weight: bold;
            color: #111111;
        }

        .discount-label {
            font-size: 11px;
            color: #d32f2f;
            font-weight: bold;
            margin-left: 4px;
        }

        .stock-count {
            font-size: 12px;
            color: #666666;
            margin-bottom: 14px;
        }

       
        .btn-action {
            width: 100%;
            padding: 8px 12px;
            font-size: 13px;
            border-radius: 4px;
            border: 1px solid #333333;
            cursor: pointer;
        }

        .btn-buy {
            background-color: #333333;
            color: #ffffff;
        }

        .btn-buy:hover {
            background-color: #000000;
        }

        .btn-disabled {
            background-color: #f2f2f2;
            border: 1px solid #dddddd;
            color: #aaaaaa;
            cursor: not-allowed;
        }

        
        footer {
            border-top: 1px solid #e5e5e5;
            background-color: #ffffff;
            padding: 18px 0;
            text-align: center;
            font-size: 12px;
            color: #777777;
        }

       
        @media (max-width: 800px) {
            .product-list {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 500px) {
            .product-list {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

   
    <header>
        <div class="container nav-bar">
            <a href="#" class="brand">Cia Store</a>
            <nav class="menu">
                <a href="#">Beranda</a>
                <a href="#katalog">Katalog</a>
                <a href="#">Tentang</a>
            </nav>
        </div>
    </header>

    <main class="container">
        
        <section class="intro">
            <h1>Simple Tech Store</h1>
            <p>Koleksi perlengkapan komputer dan aksesoris harian yang tersedia di toko kami.</p>
        </section>

        
        <div class="catalog-info" id="katalog">
            <h2>Daftar Produk</h2>
            <span class="total-text">Total Produk: <?= $total_produk; ?></span>
        </div>


        <section class="product-list">
            <?php foreach ($daftar_produk as $item): ?>
                <?php

                    $dapat_diskon = false;
                    $harga_normal = $item['harga'];
                    $harga_akhir  = $harga_normal;

                    if ($harga_normal >= 1000000) {
                        $dapat_diskon = true;
                        $harga_akhir = $harga_normal - (0.10 * $harga_normal);
                    }
                ?>
                <article class="card">
                    <div>
                        <div class="card-header">
                            <span class="category"><?= htmlspecialchars($item['kategori']); ?></span>

                            <?php if ($item['stok'] > 0): ?>
                                <span class="status available">Tersedia</span>
                            <?php else: ?>
                                <span class="status out-of-stock">Habis</span>
                            <?php endif; ?>
                        </div>

                        <div class="product-name"><?= htmlspecialchars($item['nama']); ?></div>

                        <div class="pricing">
                            <?php if ($dapat_diskon): ?>
                                <span class="original-price"><?= format_rp($harga_normal); ?></span>
                                <span class="discount-label">(-10%)</span>
                            <?php endif; ?>
                            <div class="final-price"><?= format_rp($harga_akhir); ?></div>
                        </div>

                        <p class="stock-count">Stok tersisa: <?= $item['stok']; ?></p>
                    </div>

                    <div>
                        <?php if ($item['stok'] > 0): ?>
                            <button class="btn-action btn-buy">Beli Sekarang</button>
                        <?php else: ?>
                            <button class="btn-action btn-disabled" disabled>Stok Habis</button>
                        <?php endif; ?>
                    </div>
                </article>
            <?php endforeach; ?>
        </section>
    </main>


    <footer>
        <div class="container">
            <p>&copy; 2026 Cia Store. Praktikum Pengembangan Aplikasi Website.</p>
        </div>
    </footer>

</body>
</html>