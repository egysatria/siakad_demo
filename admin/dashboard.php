<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DASHBOARD</h2>
        </div>

        <!-- Widgets -->
        <div class="row clearfix">
            <a href="?hal=siswa">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box-3 bg-pink hover-zoom-effect">
                    <div class="icon">
                        <i class="material-icons">account_circle</i>
                    </div>
                    <?php
                        $q = $k->query("SELECT * FROM tb_siswa");
                        $h = mysqli_num_rows($q);
                    ?>
                    <div class="content">
                        <div class="text">SISWA</div>
                        <div class="number"><?php echo $h ?></div>
                    </div>
                </div>
            </div>
            </a>
            <a href="?hal=guru">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box-3 bg-blue hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">assignment_ind</i>
                        </div>
                        <?php
                            $q = $k->query("SELECT * FROM tb_guru");
                            $h = mysqli_num_rows($q);
                        ?>
                        <div class="content">
                            <div class="text">GURU</div>
                            <div class="number"><?php echo $h ?></div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="?hal=mapel">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box-3 bg-teal hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">assignment</i>
                        </div>
                        <?php
                            $q = $k->query("SELECT * FROM tb_mapel");
                            $h = mysqli_num_rows($q);
                        ?>
                        <div class="content">
                            <div class="text">MAPEL</div>
                            <div class="number"><?php echo $h ?></div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="?hal=kelas">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box-3 bg-green hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">account_balance</i>
                        </div>
                        <?php
                            $q = $k->query("SELECT * FROM tb_kelas");
                            $h = mysqli_num_rows($q);
                        ?>
                        <div class="content">
                            <div class="text">KELAS</div>
                            <div class="number"><?php echo $h ?></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <!-- #END# Widgets -->
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header">
                        <div class="row clearfix">
                            <div class="col-xs-12 col-sm-6">
                                <h2>GRAFIK SISWA</h2>
                            </div>
                        </div>
                    </div>
                    <div class="body">
                        <div id="g_siswa">
                        <?php

                            $thn = array();
                            $jml = array();
                            $q = $k->query("SELECT * FROM tb_siswa");
                            while ($tmp = $q->fetch_assoc()) 
                            {
                                $thn[] = $tmp['ta'];
                            }
                        ?>
                            <script type="text/javascript">
                                Highcharts.chart('g_siswa', {
                                    chart: {
                                        type: 'area'
                                    },
                                    title: {
                                        text: 'Grafik Peningkatan Siswa Per Tahun'
                                    },
                                    xAxis: {
                                        categories: <?= json_encode($thn); ?>,
                                        tickmarkPlacement: 'on',
                                        title: {
                                            enabled: false
                                        }
                                    },
                                    yAxis: {
                                        title: {
                                            text: 'Jumlah'
                                        },
                                        labels: {
                                            formatter: function () {
                                                return this.value/100;
                                            }
                                        }
                                    },
                                    tooltip: {
                                        split: true,
                                        valueSuffix: ' Siswa'
                                    },
                                    plotOptions: {
                                        area: {
                                            stacking: 'normal',
                                            lineColor: '#666666',
                                            lineWidth: 1,
                                            marker: {
                                                lineWidth: 1,
                                                lineColor: '#666666'
                                            }
                                        }
                                    },
                                    series: [{
                                        name: 'Tahun',
                                        data: [502, 635, 809, 947, 1402, 3634, 5268]
                                    }]
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header bg-deep-orange">
                        <div class="row clearfix">
                            <div class="col-xs-12 col-sm-6">
                                <h2>Tabel Admin</h2>
                            </div>
                        </div>
                    </div>
                    <div class="body">

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Admin</th>
                                        <th>Username</th>
                                        <th>Nama</th>
                                        <th>Akses</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                               <?php
                                    $no=0;
                                    $sql = $k->query("SELECT * FROM tb_admin ORDER BY kd_admin DESC");
                                    while ($t = $sql->fetch_assoc()) 
                                    {
                                        $no++;
                                ?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $t['kd_admin'];?></td>
                                        <td><?php echo $t['username'];?></td>
                                        <td><?php echo $t['nama'];?></td>
                                        <td><?php echo $t['akses'];?></td>
                                        <td align="center">
                                            <a href="?hal=admin&act=ubah&id=<?php echo $t['kd_admin'];?>"><button type="button" class="btn btn-primary btn-circle waves-effect waves-circle waves-float">
                                                <i class="material-icons">update</i></button></a>
                                            <a href="?hal=admin&act=hapus&id=<?php echo $t['kd_admin'];?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini ?')"><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                                <i class="material-icons">delete</i></button></a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <a href="?hal=admin&act=tambah"><button type="button" class="btn btn-success waves-effect" style="margin-bottom:20px;margin-left:15px;">
                    <i class="material-icons">add</i>
                    <span>TAMBAH</span>
                </div>
            </div>
        </div>

    </div>
</section>