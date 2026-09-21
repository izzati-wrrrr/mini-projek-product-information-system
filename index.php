<?php

require_once 'products.php';
require_once 'functions.php';

$totalAset = 0;

foreach ($katalog as $produk) {
    $totalAset += hitungTotalNilaiStok(
        $produk["harga"],
        $produk["stok"]
    );
}

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Data Produk Bakery</title>

    <style>

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #faf7f2;
            color: #3f332b;
        }

        .header {
            padding: 30px 50px;
            border-bottom: 2px solid #d8c5b5;
            background-color: #fffdf9;
        }

        .header h1 {
            margin: 0;
            font-size: 28px;
        }

        .header p {
            margin-top: 8px;
            color: #806b5c;
        }

        .content {
            width: 90%;
            margin: 35px auto;
        }

        .info {
            border-left: 5px solid #a47758;
            background-color: #f2e7dc;
            padding: 18px 20px;
            margin-bottom: 30px;
        }

        .info h3 {
            margin: 0 0 8px;
        }

        .info p {
            margin: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
        }

        th {
            background-color: #6f5140;
            color: white;
            padding: 13px;
            text-align: left;
        }

        td {
            padding: 13px;
            border-bottom: 1px solid #ddd;
        }

        tr:nth-child(even) {
            background-color: #fcf8f4;
        }

        .kritis {
            color: #b3261e;
            font-weight: bold;
        }

        .aman {
            color: #47734a;
            font-weight: bold;
        }

        .footer {
            text-align: center;
            padding: 25px;
            color: #8b796c;
            font-size: 13px;
        }

    </style>

</head>

<body>

    <div class="header">

        <h1>🍰 Data Produk Bakery</h1>

        <p>
            Product Information System
        </p>

    </div>


    <div class="content">

        <div class="info">

            <h3>Total Nilai Aset Gudang</h3>

            <p>
                Rp <?= number_format($totalAset, 0, ',', '.') ?>
            </p>

        </div>


        <table>

            <thead>

                <tr>
                    <th>ID</th>
                    <th>Nama Produk</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Nilai Stok</th>
                    <th>Deskripsi</th>
                </tr>

            </thead>

            <tbody>

                <?php foreach ($katalog as $produk): ?>

                    <?php

                    $nilaiStok = hitungTotalNilaiStok(
                        $produk["harga"],
                        $produk["stok"]
                    );

                    ?>

                    <tr>

                        <td>
                            <?= $produk["id"] ?>
                        </td>

                        <td>
                            <?= $produk["nama"] ?>
                        </td>

                        <td>
                            <?= $produk["kategori"] ?>
                        </td>

                        <td>
                            Rp <?= number_format($produk["harga"], 0, ',', '.') ?>
                        </td>

                        <td>

                            <?php if (stokKritis($produk["stok"])): ?>

                                <span class="kritis">
                                    ⚠ <?= $produk["stok"] ?> (Menipis)
                                </span>

                            <?php else: ?>

                                <span class="aman">
                                    <?= $produk["stok"] ?> (Aman)
                                </span>

                            <?php endif; ?>

                        </td>

                        <td>
                            Rp <?= number_format($nilaiStok, 0, ',', '.') ?>
                        </td>

                        <td>
                            <?= $produk["deskripsi"] ?>
                        </td>

                    </tr>

                <?php endforeach; ?>

            </tbody>

        </table>

    </div>


    <div class="footer">

        Sistem Informasi Produk Bakery © 2026

    </div>

</body>

</html>