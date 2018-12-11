<?php
$id = $_SESSION['username'];
$s = $k->query("SELECT * FROM tb_siswa WHERE nis = '$id'");
$t = $s->fetch_assoc();
?>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DATA PROFIL SISWA</h2>
        </div>
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
                        <div class="header">
                            <h2>
                                DATA SISWA
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#profile_with_icon_title" data-toggle="tab">
                                        <i class="material-icons">face</i> PROFILE
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#settings_with_icon_title" data-toggle="tab">
                                        <i class="material-icons">settings</i> SETTINGS
                                    </a>
                                </li>
                            </ul>

                            <!-- Tab panes -->

                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="profile_with_icon_title">
                                     <div class="row clearfix">
							            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			                                <div class="form-group form-float">
			                                    <div class="form-line">
			                                        <input type="text" class="form-control" name="name" value="<?= $t['nis'];?>" disabled>
			                                        <label class="form-label">NIS</label>
			                                    </div>
			                                </div>
			                                <div class="form-group form-float">
			                                    <div class="form-line">
			                                        <input type="text" class="form-control" name="surname" value="<?= $t['nm_siswa'];?>" disabled>
			                                        <label class="form-label">Nama</label>
			                                    </div>
			                                </div>
			                                <div class="form-group form-float">
			                                    <div class="form-line">
			                                        <input type="text" class="form-control" name="email" value="<?= $t['tp_lahir'];?>" disabled>
			                                        <label class="form-label">Tempat Lahir</label>
			                                    </div>
			                                </div>
			                                <div class="form-group form-float">
			                                    <div class="form-line">
			                                        <input type="text" class="form-control" name="email" value="<?= $t['tgl_lahir'];?>" disabled>
			                                        <label class="form-label">Tanggal Lahir</label>
			                                    </div>
			                                </div>
			                                <div class="form-group">
			                                     <div class="form-line">
                                                    <input type="text" class="form-control" name="email" value="<?= $t['agama'];?>" disabled>
                                                    <label class="form-label">Agama</label>
                                                </div>
			                                </div>
			                                <div class="form-group form-float">
			                                    <div class="form-line">
			                                        <input type="text" class="form-control" name="email" value="<?= $t['ta'];?>" disabled>
			                                        <label class="form-label">Tahun Ajaran</label>
			                                    </div>
			                                </div>
			                                <div class="form-group form-float">
			                                    <div class="form-line">
			                                        <textarea name="description" cols="30" rows="5" class="form-control no-resize" disabled><?= $t['alamat'];?></textarea>
                                                    <label class="form-label">Alamat</label>
			                                    </div>
			                                </div>
			                                <div class="form-group form-float">
			                                    <div class="form-line">
			                                        <div class="form-line">
                                                    <input type="text" class="form-control" name="email" value="<?= $t['status'];?>" disabled>
                                                    <label class="form-label">Status</label>
                                                </div>
			                                    </div>
			                                </div>
			                                <div class="form-group form-float">
			                                    <div class="form-line">
			                                        <input type="text" class="form-control" name="email" value="<?= $t['nm_ayah'];?>" disabled>
			                                        <label class="form-label">Nama Ayah</label>
			                                    </div>
			                                </div>
			                                <div class="form-group form-float">
			                                    <div class="form-line">
			                                        <input type="text" class="form-control" name="email" value="<?= $t['nm_ibu'];?>" disabled>
			                                        <label class="form-label">Nama Ibu</label>
			                                    </div>
			                                </div>
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <textarea name="description" cols="30" rows="5" class="form-control no-resize" disabled><?= $t['alamat_ortu'];?></textarea>
                                                    <label class="form-label">Alamat Ortu</label>
                                                </div>
                                            </div>
			                                <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="email" value="<?= $t['pk_ayah'];?>" disabled>
                                                    <label class="form-label">Pekerjaan Ayah</label>
                                                </div>
                                            </div>
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="email" value="<?= $t['pk_ibu'];?>" disabled>
                                                    <label class="form-label">Pekerjaan Ibu</label>
                                                </div>
                                            </div>
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="password" class="form-control" name="email" value="<?= $t['password'];?>" disabled>
                                                    <label class="form-label">Password</label>
                                                </div>
                                            </div>
			                                <div class="form-group form-float">
			                                    <div class="form-line">
			                                        <input type="text" class="form-control" name="email" value="<?= $t['pk_ibu'];?>" disabled>
			                                        <label class="form-label">Telepon Orangtua</label>
			                                    </div>
			                                    <div style="margin-top:20px">
			                                        <img name="pict" width="150px" src="../assets/images/siswa/<?= $t['foto']?>">
			                                    </div>
			                                </div>
							            </div>
							        </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="settings_with_icon_title">
                                    <form action="akademik/siswa/p_u_siswa.php" method="POST" enctype="multipart/form-data">
                            <div class="row clearfix">
                                 <input type="hidden" class="form-control date" name="nis" value="<?= $t['nis'];?>">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            Nama
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date" name="nm_siswa" value="<?= $t['nm_siswa'];?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            Tempat Lahir
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date" name="tp_lahir" value="<?= $t['tp_lahir'];?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                       <div class="form-group">
                                            <div class="form-line">
                                                <input type="date" class="form-control date" name="tgl_lahir" value="<?= $t['tgl_lahir'];?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                       <div class="input-group">
                                        <span class="input-group-addon">
                                            Agama
                                        </span>
                                        <select class="form-control show-tick" name="agama">
                                            <option <?php if ($t['agama'] == "Islam") { echo "selected";}?> value="Islam">Islam</option>
                                            <option <?php if ($t['agama'] == "Kristen") { echo "selected";}?> value="Kristen">Kristen</option>
                                            <option <?php if ($t['agama'] == "Katholik") { echo "selected";}?> value="Katholik">Katholik</option>
                                            <option <?php if ($t['agama'] == "Hindu") { echo "selected";}?> value="Hindu">Hindu</option>
                                            <option <?php if ($t['agama'] == "Budha") { echo "selected";}?> value="Budha">Budha</option>
                                        </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="row clearfix">
                                <div class="col-md-4">
                                    <div class="input-group">
                                    	<span class="input-group-addon">
                                            Tahun ajaran
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date" name="ta" value="<?= $t['ta'];?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="form-group">
                                    	<span class="input-group-addon">
                                            Alamat
                                        </span>
                                        <div class="form-line">
                                            <textarea rows="4" class="form-control date" name="alamat" placeholder="Alamat"><?= $t['alamat'];?></textarea>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                             <div class="row clearfix">
                                <div class="col-md-6">
                                    <div class="input-group">
                                    	<span class="input-group-addon">
                                            Nama Ayah
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date" name="nm_ayah" value="<?= $t['nm_ayah'];?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            Nama Ibu
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date" name="nm_ibu" value="<?= $t['nm_ibu'];?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                    	<span class="input-group-addon">
                                            Alamat Orangtua
                                        </span>
                                        <div class="form-line">
                                            <textarea rows="4" class="form-control date" name="alamat_ortu"><?= $t['alamat_ortu'];?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            Pekerjaan Ayah
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date" name="pk_ayah" value="<?= $t['pk_ayah'];?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            Pekerjaan Ibu
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date" name="pk_ibu" value="<?= $t['pk_ibu'];?>">
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            Password
                                        </span>
                                        <div class="form-line">
                                            <input type="password" class="form-control date" name="password" value="<?= $t['password'];?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="row clearfix">
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            Telepon
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date" name="tlp_ortu" value="<?= $t['tlp_ortu'];?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="file" class="form-control date" name="foto" value="<?= $t['foto'];?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <div class="form-inline">
                                            <div style="margin-top:20px" align="left">
                                                <img name="pict" width="150px" src="../assets/images/siswa/<?= $t['foto']?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
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
            </div>
    </div>
</section>