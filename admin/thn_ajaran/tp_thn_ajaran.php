<div class="table-responsive">
    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Tahun Ajaran</th>
                <th>Tahun Ajaran</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php
            if (isset($_POST['cari'])) 
            {
                $ta = $_POST['ta'];
                $kls = $_POST['kelas'];
                $no=0;
                $sql = $k->query("SELECT * FROM tb_siswa WHERE ta ='$ta' OR kelas = '$kls'");
                while ($t = $sql->fetch_assoc()) 
            {
                $no++;
            }
           
        ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $t['nis'];?></td>
                <td><?php echo $t['nm_siswa'];?></td>
                <td><?php echo $t['kelas'];?></td>
                <td align="">
                    <a href="?hal=mapel&act=ubah&id=<?php echo $t['kd_mapel'];?>"><button type="button" class="btn btn-primary btn-circle waves-effect waves-circle waves-float">
                        <i class="material-icons">update</i></button>
                    </button>
                    <a href="?hal=mapel&act=hapus&id=<?php echo $t['kd_mapel'];?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini ?')"><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                        <i class="material-icons">delete</i></button>
                    </button>
                    <a href="?hal=mapel&act=hapus&id=<?php echo $t['kd_mapel'];?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini ?')"><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                        <i class="material-icons">delete</i></button>
                    </button>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>