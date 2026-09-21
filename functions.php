<?php

function hitungTotalNilaiStok($harga, $stok)
{
    return $harga * $stok;
}

function stokKritis($stok)
{
    return $stok < 3;
}

?>