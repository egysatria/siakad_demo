<?php
$id = $_GET['id'];
$q = $k->query("SELECT * FROM tb_mapel WHERE kd_mapel = '$id'");
$t = $q->fetch_assoc();
?>
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
             <?php
                if (isset($_SESSION['pesan'])) 
                {
                    echo $_SESSION['pesan'];
                    unset($_SESSION['pesan']);
                }

                ?>
                <div class="card">
                    <div class="header bg-red">
                        <h2>
                            UBAH DATA MAPEL
                        </h2>
                    </div>
                    <div class="body">
                        <form action="akademik/mapel/p_u_mapel.php" method="POST" enctype="multipart/form-data">
                            <input type="hidden" class="form-control date" name="kd_mapel" value="<?= $t['kd_mapel']?>">
                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control date" name="nm_mapel" value="<?= $t['nm_mapel']?>">
                                        </div>
                                        <span class="input-group-addon">
                                            Nama Mapel
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control date" name="kkm" value="<?= $t['kkm_mapel']?>">
                                        </div>
                                        <span class="input-group-addon">
                                            KKM Mapel
                                        </span>
                                    </div>
                                </div>
                            </div>                            
                            <div class="row clearfix">
                                <div class="col-md-5">
                                    <div class="input-group">
                                        <select class="form-control show-tick" name="nip">
                                            <option value="">-- NIP --</option>
                                            <option value="Guru Kelas">Guru Kelas</option>
                                            <?php
                                                $s = $k->query("SELECT * FROM `tb_guru`");
                                                if (mysqli_num_rows($s) != "") 
                                                {
                                                    while ($t = $s->fetch_assoc()) 
                                                    {
                                                        ?>
                                                            <option value="<?php echo $t['nip']; ?>"><?php echo $t['nm_guru']; ?></option>
                                                        <?php
                                                    }
                                                }

                                             ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div style="margin-left:20px;">
                                <button type="submit" name="simpan" class="btn btn-info waves-effect">
                                    <i class="material-icons">lock</i>
                                    <span>SIMPAN</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
