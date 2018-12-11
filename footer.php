<div id="footer">
	<div class="container">
	  <div class="row">
	    <div class="col-lg-4">
	      <h4>Lokasi</h4>
	      <p>
	        Watudalang, Bendungan<br>
	        Karangmojo, Gnungkidul, DIY<br>
	        kode Pos : 55891
	      </p>
	    </div><!-- /col-lg-4 -->
	    
	    <div class="col-lg-4">
	      <h4>Sosial Media</h4>
	      <p>
	        <a href="#">Dribbble</a><br/>
	        <a href="#">Twitter</a><br/>
	        <a href="#">Facebook</a>
	      </p>
	    </div><!-- /col-lg-4 -->
	    
	    <div class="col-lg-4">
	      <h4>Arsip</h4>
	      <?php
	      include 'lib/koneksi.php';
	      $q = $k->query("SELECT * FROM tb_arsip ORDER BY kd_arsip ASC");
	      while ($t = $q->fetch_assoc()) 
	      {
	      	?>
	      		<p><a href="download.php?id=<?php echo $t['kd_arsip']; ?>"><?php echo $t['judul']; ?></a></p>
	      	<?php
	      }
	      ?>
	    </div><!-- /col-lg-4 -->
	  
	  </div>

	</div>
</div>
<script src="assets/index/assets/js/bootstrap.min.js"></script>

  </body>
</html>