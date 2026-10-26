<?php
$kecamatan = array("Moyudan", "Minggir", "Seyegan", "Godean", "Gamping");
$luas = array(27.62, 27.27, 26.63, 26.84, 29.25);
$jumlah_penduduk = array(31497, 29886, 47129, 72028, 108675);
?>
<table border="2", cellpadding="5">
    <thead>
        <tr>
            <th>Kecamatan</th>
            <th>Luas</th>
            <th>Jumlah Penduduk</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $total_kec = count($kecamatan);
        for ($i = 0; $i < $total_kec; $i++):
        ?>
        <tr>
            <td><?php echo $kecamatan[$i]; ?></td>
            <td><?php echo $luas[$i]; ?></td> 
            <td><?php echo $jumlah_penduduk[$i]; ?></td>
        </tr>
        <?php
        endfor;
        ?>
    </tbody>
</table>