<section class="content">
    <div class="container-fluid">
        <!-- Basic Examples -->
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
                            INPUT DATA ALUMNI
                        </h2>
                    </div>
                    <div class="body">
                       <form action="alumni/p_t_alumni.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="kd_alumni" required>
                                    <label class="form-label">Kode Alumni</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="nm_alumni" required>
                                    <label class="form-label">Nama Alumni</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="tp_lahir" required>
                                    <label class="form-label">Tempat Lahir</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="date" class="form-control" name="tgl_lahir" required>
                                </div>
                            </div>
                            <div class="form-group">
                                 <select class="form-control show-tick" name="jk">
                                    <option value="">-- Jenis Kelamin --</option>
                                    <option value="Laki - Laki">Laki - Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <textarea name="alamat" cols="30" rows="5" class="form-control no-resize" required></textarea>
                                    <label class="form-label">Alamat</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="thn_masuk" required>
                                    <label class="form-label">Tahun Masuk</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="thn_keluar" required>
                                    <label class="form-label">Tahun Keluar</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="number" class="form-control" name="no_telp" required>
                                    <label class="form-label">No Telepon</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="file" class="form-control" name="foto" required>
                                </div>
                            </div>
                             <button type="submit" name="simpan" class="btn btn-info waves-effect">
                                <i class="material-icons">lock</i>
                                <span>SIMPAN</span>
                            </button>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- #END# Basic Examples -->
    </div>
</section>
