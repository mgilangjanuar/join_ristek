<div class="row">
	<p>Logged in as <?= $user['username'] ?></p>
	<ul class="nav nav-tabs">
	  <li class="active"><a class="ristek-color" data-toggle="tab" href="#home">HOME</a></li>
	  <li><a class="ristek-color" data-toggle="tab" href="#tugas">TUGAS</a></li>
	  <li><a class="ristek-color" data-toggle="tab" href="#wawancara">WAWANCARA</a></li>
	  <li><a class="ristek-color" data-toggle="tab" href="#kontak">KONTAK</a></li>
	</ul>

	<div class="tab-content">
		<div id="home" class="tab-pane in active">	 
	  		<br>
	  		<div class="col-md-12">
	  			<div class="row">	  									
	  				<div class="col-md-7">
	  					<h4>Informasi</h4>
	  					<p class="content-font">
	  						Halo <?= $user['username'] ?>, terima kasih telah mendaftar sebagai calon anggota Ristek Fasilkom UI!	
							<br><br>
							Proses Open Recruitment Anggota Ristek Fasilkom UI dilaksanakan dalam 2 tahap yaitu <B>Pengerjaan Tugas dan Wawancara.</b> <br><br>
							<b>Masa Pengerjaan Tugas adalah <u>26 Januari - 6 Februari 2016</u>.</b> <br><br>
							Pendaftar dapat melakukan tahap Wawancara <b>jika dan hanya jika lolos seleksi tugas</b> yang akan diumumkan pada 8 Februari 2016. <br>
							Pendaftar yang lolos ke tahap wawancara dipersilahkan memilih jadwal wawancara yang tersedia. <br><br>
							<b>Masa Wawancara adalah <u>9 - 14 Februari 2016</u></b>
							<br><br>
							Selamat mengerjakan tugas :)
							<br><br>
							Ristek Fasilkom UI <br>
							<b>#ExploringTechnology</b>
	  					</p>	  					
	  				</div>
  					<div class="col-md-5">			  			
		  				<div class="panel panel-primary info-panel">
		  					<div class="panel-heading info-panel-heading">
		  						<div class="panel-title">SIG/Divisi Plihan</div>
		  					</div>
		  					<div class="panel-body">
		  						<div class="col-md-6 text-center">
		  							<span class="content-font">Pilihan 1</span><br><br>
		  							<img class="img-responsive center-block" src="<?= base_url().($sigprop1->logolink) ?>" alt="CP" width="60" height="80">
									<span class="content-font headline"><b><?= $sigprop1->signame ?></b></span>
		  						</div>
		  						<div class="col-md-6 text-center">
		  							<span class="content-font">Pilihan 2</span><br><br>
		  							<img class="img-responsive center-block" src="<?= base_url().($sigprop2->logolink) ?>" alt="CP" width="60" height="80">
									<span class="content-font headline"><b><?= $sigprop2->signame ?></b></span>
		  						</div>
		  					</div>
		  				</div>
		  				<div class="panel panel-primary info-panel">
		  					<div class="panel-heading info-panel-heading">
		  						<div class="panel-title">STATUS SELEKSI TUGAS</div>
		  					</div>
		  					<div class="panel-body">
		  						<span class="content-font"><b>SIG/Divisi Pilihan 1:</b></span>
		  						<h4 class="text-danger text-center"><b>BELUM LOLOS SELEKSI TUGAS</b></h4>
		  						<span class="content-font"><b>SIG/Divisi Pilihan 2:</b></span>
		  						<h4 class="text-danger text-center"><b>BELUM LOLOS SELEKSI TUGAS</b></h4>
		  					</div>
		  				</div>			  			
			  		</div>		  						
	  			</div>
	  		</div>
	  		
	  	</div>
	  	<div id="tugas" class="tab-pane">
		  	<br>	 
		  	<div class="col-md-12">
		  		<div class="row">
		    		<div class="col-md-7">
		    			<h4>Petunjuk</h4>
			    		<p class="content-font">
			    			Deadline pengumpulan link tugas adalah <b><u>6 Februari 2016 pukul 23:55</u></b>.
			    			Submisi link file tugas dan Resume dapat dilakukan lebih dari satu kali dan hanya file dari link terakhir yang dinilai.		    			
			    			Template Resume dan file tugas tersedia pada link dibawah. Resume yang Anda buat harus sesuai dengan template yang kami berikan.
							<br><br>
			    			Pastikan bahwa link yang Anda share adalah public link, bisa diakses oleh orang lain. 			    			
							<br><br>
							<b>Format penamaan CV: CV_Nama.pdf. <br>Contoh: CV_Firza Pratama.pdf</b>
							<br><br>
							Selamat mengerjakan tugas :)
			    		</p>
		    			<br>
		    			<div class="panel panel-primary info-panel">
					  		<div class="panel-heading info-panel-heading">
					    		<h5 class="panel-title">Download File Template Resume dan Tugas</h5>
					  		</div>
					  		<div class="panel-body">
					  			<p class="content-font">Download file template resume dan file tugas SIG/Divisi pilihan Anda pada ink dibawah ini:</p>				    
					    		<ul>
					    			<li>
					    				<a href="<?= base_url().'files/template_resume_ristek.docx' ?>">Template Resume</a>
					    			</li>
							    	<li>
							    		<?php if(strcmp((string)$pilihan->sig1, 'cp') == 0): ?>
							    		<a href="<?= base_url() ?>">Tugas Competitive Programming SIG</a>
							    		<?php elseif(strcmp((string)$pilihan->sig1, 'ds') == 0): ?>					    		
							    		<a href="<?= base_url() ?>">Tugas Data Science SIG</a>
							    		<?php elseif(strcmp((string)$pilihan->sig1, 'es') == 0): ?>
							    		<a href="<?= base_url() ?>">Tugas Embedded System SIG</a>
							    		<?php elseif(strcmp((string)$pilihan->sig1, 'ns') == 0): ?>
							    		<a href="<?= base_url() ?>">Tugas Network Security and Operating System SIG</a>					    		
							    		<?php elseif(strcmp((string)$pilihan->sig1, 'gd') == 0): ?>
							    		<a href="<?= base_url() ?>">Tugas Game Development SIG</a>
							    		<?php elseif(strcmp((string)$pilihan->sig1, 'md') == 0): ?>
							    		<a href="<?= base_url() ?>">Tugas Mobile Application Development SIG</a>
							    		<?php elseif(strcmp((string)$pilihan->sig1, 'ux') == 0): ?>
							    		<a href="<?= base_url() ?>">Tugas UI/UX SIG</a>
							    		<?php elseif(strcmp((string)$pilihan->sig1, 'wb') == 0): ?>
							    		<a href="<?= base_url() ?>">Tugas Web Development SIG</a>
							    		<?php elseif(strcmp((string)$pilihan->sig1, 'hr') == 0): ?>
							    		<a href="<?= base_url() ?>">Tugas Human Resource Management Division</a>
							    		<?php elseif(strcmp((string)$pilihan->sig1, 'pr') == 0): ?>
							    		<a href="<?= base_url() ?>">Tugas Public Relation Division</a>
							    		<?php endif;?>
							    	</li>
					    	
							    	<?php if (strcmp((string)$pilihan->sig2, (string)$pilihan->sig1) != 0) : ?>
							    	<li>
							    		<?php if(strcmp((string)$pilihan->sig2, 'cp') == 0): ?>
							    		<a href="<?= base_url() ?>">Tugas Competitive Programming SIG</a>
							    		<?php elseif(strcmp((string)$pilihan->sig2, 'ds') == 0): ?>					    		
							    		<a href="<?= base_url() ?>">Tugas Data Science SIG</a>
							    		<?php elseif(strcmp((string)$pilihan->sig2, 'es') == 0): ?>
							    		<a href="<?= base_url() ?>">Tugas Embedded System SIG</a>
							    		<?php elseif(strcmp((string)$pilihan->sig2, 'ns') == 0): ?>
							    		<a href="<?= base_url() ?>">Tugas Network Security and Operating System SIG</a>					    		
							    		<?php elseif(strcmp((string)$pilihan->sig2, 'gd') == 0): ?>
							    		<a href="<?= base_url() ?>">Tugas Game Development SIG</a>
							    		<?php elseif(strcmp((string)$pilihan->sig2, 'md') == 0): ?>
							    		<a href="<?= base_url() ?>">Tugas Mobile Application Development SIG</a>
							    		<?php elseif(strcmp((string)$pilihan->sig2, 'ux') == 0): ?>
							    		<a href="<?= base_url() ?>">Tugas UI/UX SIG</a>
							    		<?php elseif(strcmp((string)$pilihan->sig2, 'wb') == 0): ?>
							    		<a href="<?= base_url() ?>">Tugas Web Development SIG</a>
							    		<?php elseif(strcmp((string)$pilihan->sig2, 'hr') == 0): ?>
							    		<a href="<?= base_url() ?>">Tugas Human Resource Management Division</a>
							    		<?php elseif(strcmp((string)$pilihan->sig2, 'pr') == 0): ?>
							    		<a href="<?= base_url() ?>">Tugas Public Relation Division</a>
							    		<?php endif;?>
							    	</li>
							    	<?php endif; ?>					    	
					    		</ul>
					  		</div>
						</div>				
					</div>
					<div class="col-md-5">			    		
			    		<div class="panel panel-primary info-panel">
							<div class="panel-heading info-panel-heading">
						    	<h5 class="panel-title">Submisi Link Resume dan Tugas</h5>
						  	</div>
						  	<div class="panel-body">
						  		<p class="content-font text-danger"><?php echo form_error('essay_link_input').form_error('resume_link_input').form_error('tugas1_link_input').form_error('tugas2_link_input'); ?></p>			
								<?php if ($tugas->essay != NULL):?>
							  	<div class="form-group well-sm list-group-item-success">
							  	<?php else:?>
							  	<div class="form-group well-sm list-group-item-danger">
							  	<?php endif; ?>

							  		<label for="essay_link_input">Link Essay Motivasi</label>	
						  			<!-- <p class="content-font"><?= form_error('essay_link_input') ?></p> -->
						  			<form id="essay_link_form" action="<?= site_url('dashboard') ?>" method="post" class="form-inline">
							  			<div class="form-group">
							  			   	<div class="input-group">						  			   		
								  				<div class="input-group-addon">http://</div>
											    <input class="form-control" type="text" id="essay_link_input" name="essay_link_input">
											    <input type="hidden" name="which_form" value="essay">
							  			   	</div>
									  		<button type="submit" class="btn btn-primary">Submit Link</button>
									  		<?php if ($tugas->essay != NULL):?>
						    				<a href="<?= $tugas->essay ?>" target="_blank" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span></a>		
						    				<?php else: ?>
						    				<a href="<?= $tugas->essay ?>" target="_blank" class="btn btn-primary disabled" role="button"><span class="glyphicon glyphicon-save"></span></a>				    				
						    				<?php endif; ?>
							  			</div>   
							  		</form>								  		
							  	</div>	

							  	<?php if ($tugas->resume != NULL):?>
							  	<div class="form-group well-sm list-group-item-success">
							  	<?php else:?>
							  	<div class="form-group well-sm list-group-item-danger">
							  	<?php endif; ?>

							  		<label for="resume_link_input">Link Resume</label>	
						  			<!-- <p class="content-font"><?= form_error('resume_link_input') ?></p> -->
						  			<form id="resume_link_form" action="<?= site_url('dashboard') ?>" method="post" class="form-inline">
						  				<div class="form-group">
						  					<div class="input-group">
						  						<div class="input-group-addon">http://</div>
											    <input class="form-control" type="text" id="resume_link_input" name="resume_link_input">
											    <input type="hidden" name="which_form" value="resume">
										  	</div>
										  	<button type="submit" class="btn btn-primary">Submit Link</button>
									  		<?php if ($tugas->resume != NULL):?>
						    				<a href="<?= $tugas->resume ?>" target="_blank" class="btn btn-primary text-center"><span class="glyphicon glyphicon-save"></span></a>		
						    				<?php else: ?>
						    				<a href="<?= $tugas->resume ?>" target="_blank" class="btn btn-primary disabled" role="button"><span class="glyphicon glyphicon-save"></span></a>				    				
						    				<?php endif; ?>
						    			</div>
							  		</form>								  		
							  	</div>					    

							  	<?php if ($tugas->tugas1 != NULL):?>
							  	<div class="form-group well-sm list-group-item-success">
							  	<?php else:?>
							  	<div class="form-group well-sm list-group-item-danger">
							  	<?php endif; ?>	
	
							  		<label for="tugas1_link_input">Link Tugas SIG Pilihan 1</label>
							  		<!-- <p class="content-font"><?= form_error('tugas1_link_input') ?></p>					     -->
							  		<form id="tugas1_link_form" action="<?= site_url('dashboard') ?>" method="post" class="form-inline">				  							   
							  			<div class="form-group">
							  				<div class="input-group">
							  					<div class="input-group-addon">http://</div>
											    <input class="form-control" type="text" id="tugas1_link_input" name="tugas1_link_input">
											    <input type="hidden" name="which_form" value="tugas1">
											</div>
									  		<button type="submit" class="btn btn-primary">Submit Link</button>
									  		<?php if ($tugas->tugas1 != NULL):?>
						    				<a href="<?= $tugas->tugas1 ?>" target="_blank" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span></a>					    				
						    				<?php else: ?>
						    				<a href="<?= $tugas->tugas1 ?>" target="_blank" class="btn btn-primary disabled" role="button"><span class="glyphicon glyphicon-save"></span></a>					    				
						    				<?php endif; ?>
							    		</div>
						  			</form>							  			
							  	</div>
	
							  	<?php if (strcmp((string)$pilihan->sig2, (string)$pilihan->sig1) != 0) : ?>

							  	<?php if ($tugas->tugas2 != NULL):?>
							  	<div class="form-group well-sm list-group-item-success">
							  	<?php else:?>
							  	<div class="form-group well-sm list-group-item-danger">
							  	<?php endif; ?>	

							  		<label for="tugas2_link_input">Link Tugas SIG Pilihan 2</label>					    
							  		<!-- <p class="content-font"><?= form_error('tugas2_link_input') ?></p> -->
							  		<form id="tugas2_link_form" action="<?= site_url('dashboard') ?>" method="post" class="form-inline">				  							   
							  			<div class="form-group">
							  				<div class="input-group">
												<div class="input-group-addon">http://</div>
											    <input class="form-control" type="text" id="tugas2_link_input" name="tugas2_link_input">
											    <input type="hidden" name="which_form" value="tugas2">
											</div>
									  		<button type="submit" class="btn btn-primary">Submit Link</button>
									  		<?php if ($tugas->tugas2 != NULL):?>
						    				<a href="<?= $tugas->tugas2 ?>" target="_blank" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span></a>					    				
						    				<?php else: ?>
						    				<a href="<?= $tugas->tugas2 ?>" target="_blank" class="btn btn-primary disabled" role="button"><span class="glyphicon glyphicon-save"></span></a>	
						    				<?php endif; ?>
						    			</div>
							  		</form>						  			
							  	</div>
								<?php endif; ?>						  	
						  	</div>
						</div>				
			    	</div>	    		    
	    		</div>
		  	</div>		    	
	  	</div>
	  	<div id="wawancara" class="tab-pane">
	  		<div class="col-md-12">
	  			<div class="row">
		  			<div class="col-md-12">
		  				<ul class="nav pagination nav-tabs">		  				
		  					<li class="active"><a class="ristek-color" data-toggle="tab" href="#ycbm-sig1"><?= $sigprop1->linkname ?></a></li>		  						    					    		
				    		<li><a class="ristek-color" data-toggle="tab" href="#ycbm-sig2"><?= $sigprop2->linkname ?></a></li>				    				    		
				 		</ul>
				 		<div class="tab-content">
				 			<div id="ycbm-sig1" class="tab-pane in active">
				 				<iframe src="<?= ($sigprop1->booklink).'/?noframe=true&skipHeaderFooter=true' ?>" style="width:100%;height:400px;border:0px;background-color:transparent;" frameborder="0" allowtransparency="true" onload="keepInView(this);"></iframe>				 													
								<script>function keepInView(item) {if((document.documentElement&&document.documentElement.scrollTop)||document.body.scrollTop>item.offsetTop)item.scrollIntoView();}</script>
				 			</div>
				 			<?php if (strcmp((string)$pilihan->sig2, (string)$pilihan->sig1) != 0) : ?>
				 			<div id="ycbm-sig2" class="tab-pane">
				 				<iframe src="<?= ($sigprop2->booklink).'/?noframe=true&skipHeaderFooter=true' ?>" style="width:100%;height:400px;border:0px;background-color:transparent;" frameborder="0" allowtransparency="true" onload="keepInView(this);"></iframe>				 				
								<script>function keepInView(item) {if((document.documentElement&&document.documentElement.scrollTop)||document.body.scrollTop>item.offsetTop)item.scrollIntoView();}</script>
				 			</div>
				 			<?php endif; ?>
				 		</div>	
		  			</div>
		  		</div>				  										 		  
	  		</div>		  		
	  	</div>
	  	<div id="kontak" class="tab-pane">
		  	<br>
		  	<div class="col-md-12">
		  		<div class="row">
		  			<div class="col-md-6">
				  		<div class="panel panel-primary info-panel">
					  		<div class="panel-heading info-panel-heading">Head of Human Resource Management Division</div>
					  		<div class="panel-body">Ifa Nasution: +6287887241010</div>
						</div>
			  		</div>
			  		<div class="col-md-6">
				  		<div class="panel panel-primary info-panel">
					  		<div class="panel-heading info-panel-heading">Head of Public Relation Division</div>
					  		<div class="panel-body">Made Nindyatama: +6282120500471</div>
						</div>
			  		</div>
			  	</div>
			  	<div class="row">
		  			<div class="col-md-6">
				  		<div class="panel panel-primary info-panel">
							<!-- Default panel contents -->
							<div class="panel-heading info-panel-heading">Computer System &amp; Computational Intelligence Group</div>			
							<!-- Table -->
							<table class="table">
							    <tbody>
							    	<tr>
							    		<td>Manager</td>
							    		<td>Ammar Fathin Sabili</td>
							    		<td>+6281368837070</td>
							    	</tr>
							    	<tr>
							    		<td>Head of <br>Competitive Programming SIG</td>
							    		<td>Anthony</td>
							    		<td>+6285215976795</td>
							    	</tr>
							    	<tr>
							    		<td>Head of <br>Data Science SIG</td>
							    		<td>Jatmiko Budi</td>
							    		<td>+6281288746324</td>
							    	</tr>
							    	<tr>
							    		<td>Head of <br>Embedded System SIG</td>
							    		<td>Kustiawanto Halim</td>
							    		<td>+6283180144455</td>
							    	</tr>
							    	<tr>
							    		<td>Head of <br>NetSos SIG</td>
							    		<td>Rizki Mubarok</td>
							    		<td>+6289660410425</td>
							    	</tr>			    	
							    </tbody>
							</table>
						</div>	  		    	    	
			  		</div>
			  		<div class="col-md-6">
				  		<div class="panel panel-primary info-panel">
							<!-- Default panel contents -->
							<div class="panel-heading info-panel-heading">Development Group</div>			
							<!-- Table -->
							<table class="table">			    
							    <tbody>
							    	<tr>
							    		<td>Manager</td>
							    		<td>Ilham Fathy</td>
							    		<td>+6287788306182</td>
							    	</tr>
							    	<tr>
							    		<td>Head of <br>Game Development SIG</td>
							    		<td>M. Azmi Malik</td>
							    		<td>+6285724166888</td>
							    	</tr>
							    	<tr>
							    		<td>Head of <br>Mobile Application Development SIG</td>
							    		<td>Teresa Pranyoto</td>
							    		<td>+628974215133</td>
							    	</tr>
							    	<tr>
							    		<td>Head of <br>UI/UX SIG</td>
							    		<td>Shylla Estee</td>
							    		<td>+6281213177791</td>
							    	</tr>
							    	<tr>
							    		<td>Head of <br>Web Development SIG</td>
							    		<td>Rahma Khairunissa</td>
							    		<td>+6281298109806</td>
							    	</tr>			    	
							    </tbody>
							</table>
						</div>	
			  		</div>  
		  		</div>
		  	</div>		  				  					  		    	
	  	</div>
	</div>
</div>