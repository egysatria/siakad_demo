<section class="content">
    <div class="container-fluid">
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header bg-red">
                        <h2>
                            TABEL Tahun Ajaran
                        </h2>
                    </div>
                    <div class="body">
                       <div class="table-responsive">
						    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
						        <thead>
						            <tr align="center">
						                <th>No</th>
						                <th>ID</th>
						                <th>Tahun Ajaran</th>
						                <th>Kelas</th>
						                <th>Siswa</th>
						            </tr>
						        </thead>
						        <tbody>
						        <?php
						         
						                $no=0;
						                $sql = $k->query("SELECT * FROM thn_ajaran;");
						                while ($t = $sql->fetch_assoc()) 
						            {
						                $no++;
						     
						           
						        ?>
						            <tr>
						                <td> <?php echo $no; ?></td>
						                <td> <?php echo $t['id']; ?></td>
						                <td> <?php echo $t['ta']; ?></td>
						                <td> <?php echo $t['kelas']; ?></td>
						                <td> <?php echo $t['siswa']; ?></td>
						            </tr>
						            <?php } ?>
						        </tbody>
						    </table>
						</div>
                    </div>
                </div>
                <a href="laporan/pdf/pdf_mapel.php" target="_blank"><button onclick="button" type="button" class="btn btn-danger waves-effect" style="margin-left:10px;">
                <i class="material-icons">picture_as_pdf</i>
                <span>PDF</span></button></a>
            </div>
        </div>
        <!-- #END# Basic Examples -->
    </div>
</section>
