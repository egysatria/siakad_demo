<table border="1" style="background: #EEEEEE;">
    <thead>
        <tr>
            <th>No</th>
            <th>NIP</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Jabatan</th>
            <th>Golongan</th>
            <th>Status</th>
            <th>Pendidikan</th>
        </tr>
    </thead>
    <tbody>
    <?php
        include '../../../lib/koneksi.php';
        $no=0;
        $sql = $k->query("SELECT * FROM tb_guru ORDER BY nip DESC");
        while ($t = $sql->fetch_assoc()) 
        {
            $no++;
    ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $t['nip'];?></td>
            <td><?php echo $t['nm_guru'];?></td>
            <td><?php echo $t['tp_lahir'];?></td>
            <td><?php echo $t['tgl_lahir'];?></td>
            <td><?php echo $t['jk'];?></td>
            <td><?php echo $t['agama'];?></td>
            <td><?php echo $t['jabatan'];?></td>
            <td><?php echo $t['golongan'];?></td>
            <td><?php echo $t['status'];?></td>
            <td><?php echo $t['pendidikan'];?></td>
            
        </tr>
        <?php } ?>
    </tbody>
</table>