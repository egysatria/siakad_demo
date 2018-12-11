<?php
$id = $_GET['id'];
$s = $k->query("SELECT * FROM tb_kelas WHERE kd_kelas='$id'");
$t = $s->fetch_assoc();
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
                            UBAH DATA KELAS
                        </h2>
                    </div>
                    <div class="body">
                        <form action="akademik/kelas/p_u_kelas.php" method="POST" enctype="multipart/form-data">
                            <div class="row clearfix">
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control date" name="kd_kelas" value="<?= $t['kd_kelas']; ?>">
                                        </div>
                                        <span class="input-group-addon">
                                            Kode Kelas
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control date" name="kelas" value="<?= $t['kelas']; ?>">
                                        </div>
                                        <span class="input-group-addon">
                                            Kelas
                                        </span>
                                    </div>
                                </div>
                            </div>                     
                            <div class="row clearfix">
                                <div class="col-md-5">
                                    <div class="input-group">
                                        <select class="form-control show-tick" name="nip">
                                            <option value="">-- Guru --</option>
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
                                        <span class="input-group-addon">
                                            Nama Guru
                                        </span>
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
