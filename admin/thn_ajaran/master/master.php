<section class="content">
    <div class="container-fluid">
        <!-- Basic Examples -->
        <div class="row clearfix">
        <a href="?hal=master&act=tambah"><button type="button" class="btn btn-primary waves-effect" style="margin-bottom:20px;margin-left:15px;">
            <i class="material-icons">add</i>
            <span>TAMBAH</span>
        </button></a>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header bg-red">
                        <h2>
                            TABEL MASTER TAHUN AJARAN
                        </h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Tahun Ajaran</th>
                                        <th>Keterangan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                               <?php
                                    $no=0;
                                    $sql = $k->query("SELECT * FROM tb_master ORDER BY kd_master DESC");
                                    while ($t = $sql->fetch_assoc()) 
                                    {
                                        $no++;
                                ?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $t['kd_master'];?></td>
                                        <td><?php echo $t['thn_ajaran'];?></td>
                                        <td align="center">
                                        <?php 
                                            if ($t['status'] == 1) 
                                            {
                                                echo '<br /><p class="label label-success">Tahun Ajaran Aktif</p>';
                                            }
                                            else
                                            {
                                                echo '<br /><p class="label label-danger">Tahun Ajaran Tidak Aktif</p>';
                                            }
                                        ?>
                                        </td>
                                        <td align="center">
                                            <a href="?hal=master&act=ubah&id=<?php echo $t['kd_master'];?>"><button type="button" class="btn btn-primary waves-effect">
                                                <i class="material-icons">update</i>&nbsp;&nbsp;Aktifkan</button>
                                            </button>
                                            <a href="?hal=master&act=ubah_1&id=<?php echo $t['kd_master'];?>" onclick="return confirm('Apakah Anda yakin ingin Menonaktifkan Tahun Ajaran ini ?')"><button type="button" class="btn btn-danger waves-effect">
                                                <i class="material-icons">update</i>&nbsp;&nbsp;Non Aktifkan</button>
                                            </button>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <a href="laporan/pdf/pdf_arsip.php" target="_blank"><button onclick="button" type="button" class="btn btn-danger waves-effect" style="margin-left:10px;">
                <i class="material-icons">picture_as_pdf</i>
                <span>PDF</span></button></a>
            </div>
        </div>
        <!-- #END# Basic Examples -->
    </div>
</section>
