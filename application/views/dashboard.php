<div class="row">
	<p>Logged in as <?= $user['username'] ?></p>
	<ul class="nav nav-tabs">
	  <li class="active"><a class="ristek-color" data-toggle="tab" href="#info">INFO</a></li>
	  <li><a class="ristek-color" data-toggle="tab" href="#tugas">TUGAS</a></li>
	  <li><a class="ristek-color" data-toggle="tab" href="#wawancara">WAWANCARA</a></li>
	  <li><a class="ristek-color" data-toggle="tab" href="#kontak">KONTAK</a></li>
	</ul>

	<div class="tab-content">
		<div id="info" class="tab-pane in active">	 
	  		<br>
	  		<div class="col-md-12">
	  			<div class="row">
	  				<div class="col-md-12">
	  					<h4>Petunjuk</h4>
	  					<p class="content-font">
	  						Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. 
	  						Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. 
	  						Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. 
	  						Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. 	  						
	  					</p>	
	  				</div>	  				
	  			</div>
	  		</div>	    	
	  	</div>
	  	<div id="tugas" class="tab-pane">
		  	<br>	 
		  	<div class="col-md-12">
		  		<div class="row">
		    		<div class="col-md-8">
		    			<h4>Petunjuk</h4>
			    		<p class="content-font">
			    			Deadline pengumpulan link tugas adalah x Januari 2016 pukul 23:55.
			    			Submisi link file tugas dan Resume dapat dilakukan lebih dari satu kali dan hanya file dari link terakhir yang dinilai.		    			
			    			Template Resume dan file tugas tersedia pada link dibawah. Resume yang Anda buat harus sesuai dengan template yang kami berikan.
							<br><br>
			    			Pastikan bahwa link yang Anda share adalah public link, bisa diakses oleh orang lain. 
			    			Jangan lupa untuk selalu menyematkan 'http://' pada setiap link yang akan Anda submit.		    			
							<br><br>
							Selamat mengerjakan tugas :)
			    		</p>
		    			<br>
		    			<div class="panel panel-default">
					  		<div class="panel-heading">
					    		<h5 class="panel-title">Download File Template Resume dan Tugas</h5>
					  		</div>
					  		<div class="panel-body">				    
					    		<ul>
					    			<li>
					    				<a href="<?= base_url() ?>">Template Resume</a>
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
					<div class="col-md-4">
			    		<h4>Submisi</h4>
			    		<div class="panel panel-default">
							<div class="panel-heading">
						    	<h5 class="panel-title">Submisi Link Resume dan Tugas</h5>
						  	</div>
						  	<div class="panel-body">						  	
	
							  	<?php if ($tugas->resume != NULL):?>
							  	<div class="form-group well-sm list-group-item-success">
							  	<?php else:?>
							  	<div class="form-group well-sm list-group-item-danger">
							  	<?php endif; ?>

							  		<label for="Resume_link_input">Link Resume</label>	
						  			<p class="content-font"><?= form_error('resume_link_input') ?></p>
						  			<form id="resume_link_form" action="<?= site_url('dashboard') ?>" method="post" class="form-inline">				  							   
									    <input class="form-control" type="text" id="resume_link_input" name="resume_link_input">
									    <input type="hidden" name="which_form" value="resume">
								  		<button type="submit" class="btn btn-primary">save</button>
							  		</form>	
							  		<?php if($tugas->resume != NULL): ?>
							  		<span>Last submitted: <a href="<?= $tugas->resume ?>" target="_blank">link</a></span>
							  		<?php else: ?>
						  			<span>Last submitted:</span>
						  			<?php endif; ?>
							  	</div>					    

							  	<?php if ($tugas->tugas1 != NULL):?>
							  	<div class="form-group well-sm list-group-item-success">
							  	<?php else:?>
							  	<div class="form-group well-sm list-group-item-danger">
							  	<?php endif; ?>	
	
							  		<label for="tugas1_link_input">Link Tugas SIG Pilihan 1</label>
							  		<p class="content-font"><?= form_error('tugas1_link_input') ?></p>					    
							  		<form id="tugas1_link_form" action="<?= site_url('dashboard') ?>" method="post" class="form-inline">				  							   
									    <input class="form-control" type="text" id="tugas1_link_input" name="tugas1_link_input">
									    <input type="hidden" name="which_form" value="tugas1">
								  		<button type="submit" class="btn btn-primary">save</button>
						  			</form>	
						  			<?php if($tugas->tugas1 != NULL): ?>
							  		<span>Last submitted: <a href="<?= $tugas->tugas1 ?>" target="_blank">link</a></span>
							  		<?php else: ?>
							  		<span>Last submitted:</span>
							  		<?php endif; ?>
							  	</div>
	
							  	<?php if (strcmp((string)$pilihan->sig2, (string)$pilihan->sig1) != 0) : ?>

							  	<?php if ($tugas->tugas2 != NULL):?>
							  	<div class="form-group well-sm list-group-item-success">
							  	<?php else:?>
							  	<div class="form-group well-sm list-group-item-danger">
							  	<?php endif; ?>	

							  		<label for="tugas2_link_input">Link Tugas SIG Pilihan 2</label>					    
							  		<p class="content-font"><?= form_error('tugas2_link_input') ?></p>
							  		<form id="tugas2_link_form" action="<?= site_url('dashboard') ?>" method="post" class="form-inline">				  							   
									    <input class="form-control" type="text" id="tugas2_link_input" name="tugas2_link_input">
									    <input type="hidden" name="which_form" value="tugas2">
								  		<button type="submit" class="btn btn-primary">save</button>
							  		</form>
						  			<?php if($tugas->tugas2 != NULL): ?>
						  			<span>Last submitted: <a href="<?= $tugas->tugas2 ?>" target="_blank">link</a></span>
							  		<?php else: ?>
							  		<span>Last submitted:</span>
							  		<?php endif; ?>
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
		  					<?php if(strcmp((string)$pilihan->sig1, 'cp') == 0): ?>
				    		<li class="active"><a class="ristek-color" data-toggle="tab" href="#ycbm-sig1">Youcanbook.me Competitive Programming SIG</a></li>
				    		<?php elseif(strcmp((string)$pilihan->sig1, 'ds') == 0): ?>					    		
				    		<li class="active"><a class="ristek-color" data-toggle="tab" href="#ycbm-sig1">Youcanbook.me Data Science SIG</a></li>
				    		<?php elseif(strcmp((string)$pilihan->sig1, 'es') == 0): ?>
				    		<li class="active"><a class="ristek-color" data-toggle="tab" href="#ycbm-sig1">Youcanbook.me Embedded System SIG</a></li>
				    		<?php elseif(strcmp((string)$pilihan->sig1, 'ns') == 0): ?>
				    		<li class="active"><a class="ristek-color" data-toggle="tab" href="#ycbm-sig1">Youcanbook.me Network Security and Operating System SIG</a></li>
				    		<?php elseif(strcmp((string)$pilihan->sig1, 'gd') == 0): ?>
				    		<li class="active"><a class="ristek-color" data-toggle="tab" href="#ycbm-sig1">Youcanbook.me Game Development SIG</a></li>
				    		<?php elseif(strcmp((string)$pilihan->sig1, 'md') == 0): ?>
				    		<li class="active"><a class="ristek-color" data-toggle="tab" href="#ycbm-sig1">Youcanbook.me Mobile Application Development SIG</a></li>
				    		<?php elseif(strcmp((string)$pilihan->sig1, 'ux') == 0): ?>
				    		<li class="active"><a class="ristek-color" data-toggle="tab" href="#ycbm-sig1">Youcanbook.me UI/UX SIG</a></li>
				    		<?php elseif(strcmp((string)$pilihan->sig1, 'wb') == 0): ?>
				    		<li class="active"><a class="ristek-color" data-toggle="tab" href="#ycbm-sig1">Youcanbook.me Web Development SIG</a></li>
				    		<?php elseif(strcmp((string)$pilihan->sig1, 'hr') == 0): ?>
				    		<li class="active"><a class="ristek-color" data-toggle="tab" href="#ycbm-sig1">Youcanbook.me Human Resource Management Division</a></li>
				    		<?php elseif(strcmp((string)$pilihan->sig1, 'pr') == 0): ?>
				    		<li class="active"><a class="ristek-color" data-toggle="tab" href="#ycbm-sig1">Youcanbook.me Public Relation Division</a></li>
				    		<?php endif;?>			    	
				    		
				    		<?php if (strcmp((string)$pilihan->sig2, (string)$pilihan->sig1) != 0) : ?>
				    		<?php if(strcmp((string)$pilihan->sig2, 'cp') == 0): ?>
				    		<li><a class="ristek-color" data-toggle="tab" href="#ycbm-sig1">Youcanbook.me Competitive Programming SIG</a></li>
				    		<?php elseif(strcmp((string)$pilihan->sig2, 'ds') == 0): ?>					    		
				    		<li><a class="ristek-color" data-toggle="tab" href="#ycbm-sig1">Youcanbook.me Data Science SIG</a></li>
				    		<?php elseif(strcmp((string)$pilihan->sig2, 'es') == 0): ?>
				    		<li><a class="ristek-color" data-toggle="tab" href="#ycbm-sig1">Youcanbook.me Embedded System SIG</a></li>
				    		<?php elseif(strcmp((string)$pilihan->sig2, 'ns') == 0): ?>
				    		<li><a class="ristek-color" data-toggle="tab" href="#ycbm-sig1">Youcanbook.me Network Security and Operating System SIG</a></li>
				    		<?php elseif(strcmp((string)$pilihan->sig2, 'gd') == 0): ?>
				    		<li><a class="ristek-color" data-toggle="tab" href="#ycbm-sig1">Youcanbook.me Game Development SIG</a></li>
				    		<?php elseif(strcmp((string)$pilihan->sig2, 'md') == 0): ?>
				    		<li><a class="ristek-color" data-toggle="tab" href="#ycbm-sig1">Youcanbook.me Mobile Application Development SIG</a></li>
				    		<?php elseif(strcmp((string)$pilihan->sig2, 'ux') == 0): ?>
				    		<li><a class="ristek-color" data-toggle="tab" href="#ycbm-sig1">Youcanbook.me UI/UX SIG</a></li>
				    		<?php elseif(strcmp((string)$pilihan->sig2, 'wb') == 0): ?>
				    		<li><a class="ristek-color" data-toggle="tab" href="#ycbm-sig1">Youcanbook.me Web Development SIG</a></li>
				    		<?php elseif(strcmp((string)$pilihan->sig2, 'hr') == 0): ?>
				    		<li><a class="ristek-color" data-toggle="tab" href="#ycbm-sig1">Youcanbook.me Human Resource Management Division</a></li>
				    		<?php elseif(strcmp((string)$pilihan->sig2, 'pr') == 0): ?>
				    		<li><a class="ristek-color" data-toggle="tab" href="#ycbm-sig1">Youcanbook.me Public Relation Division</a></li>
				    		<?php endif;?>
				    		<?php endif; ?>				    		
				 		</ul>
				 		<div class="tab-content">
				 			<div id="ycbm-sig1" class="tab-pane in active">
				 				<?php if(strcmp((string)$pilihan->sig1, 'cp') == 0): ?>
					    		<iframe src="https://ristek2016-cp.youcanbook.me/?noframe=true&skipHeaderFooter=true" style="width:100%;height:400px;border:0px;background-color:transparent;" frameborder="0" allowtransparency="true" onload="keepInView(this);"></iframe>
					    		<?php elseif(strcmp((string)$pilihan->sig1, 'ds') == 0): ?>					    		
					    		<iframe src="https://ristek2016-ds.youcanbook.me/?noframe=true&skipHeaderFooter=true" style="width:100%;height:400px;border:0px;background-color:transparent;" frameborder="0" allowtransparency="true" onload="keepInView(this);"></iframe>
					    		<?php elseif(strcmp((string)$pilihan->sig1, 'es') == 0): ?>
					    		<iframe src="https://ristek2016-embed.youcanbook.me/?noframe=true&skipHeaderFooter=true" style="width:100%;height:400px;border:0px;background-color:transparent;" frameborder="0" allowtransparency="true" onload="keepInView(this);"></iframe>
					    		<?php elseif(strcmp((string)$pilihan->sig1, 'ns') == 0): ?>
					    		<iframe src="https://ristek2016-netsos.youcanbook.me/?noframe=true&skipHeaderFooter=true" style="width:100%;height:400px;border:0px;background-color:transparent;" frameborder="0" allowtransparency="true" onload="keepInView(this);"></iframe>
					    		<?php elseif(strcmp((string)$pilihan->sig1, 'gd') == 0): ?>
					    		<iframe src="https://ristek2016-game.youcanbook.me/?noframe=true&skipHeaderFooter=true" style="width:100%;height:400px;border:0px;background-color:transparent;" frameborder="0" allowtransparency="true" onload="keepInView(this);"></iframe>
					    		<?php elseif(strcmp((string)$pilihan->sig1, 'md') == 0): ?>
					    		<iframe src="https://ristek2016-mobapp.youcanbook.me/?noframe=true&skipHeaderFooter=true" style="width:100%;height:400px;border:0px;background-color:transparent;" frameborder="0" allowtransparency="true" onload="keepInView(this);"></iframe>
					    		<?php elseif(strcmp((string)$pilihan->sig1, 'ux') == 0): ?>
					    		<iframe src="https://ristek2016-uiux.youcanbook.me/?noframe=true&skipHeaderFooter=true" style="width:100%;height:400px;border:0px;background-color:transparent;" frameborder="0" allowtransparency="true" onload="keepInView(this);"></iframe>
					    		<?php elseif(strcmp((string)$pilihan->sig1, 'wb') == 0): ?>
					    		<iframe src="https://ristek2016-web.youcanbook.me/?noframe=true&skipHeaderFooter=true" style="width:100%;height:400px;border:0px;background-color:transparent;" frameborder="0" allowtransparency="true" onload="keepInView(this);"></iframe>
					    		<?php elseif(strcmp((string)$pilihan->sig1, 'hr') == 0): ?>
					    		<iframe src="https://ristek2016-hrd.youcanbook.me/?noframe=true&skipHeaderFooter=true" style="width:100%;height:400px;border:0px;background-color:transparent;" frameborder="0" allowtransparency="true" onload="keepInView(this);"></iframe>
					    		<?php elseif(strcmp((string)$pilihan->sig1, 'pr') == 0): ?>
					    		<iframe src="https://ristek2016-pr.youcanbook.me/?noframe=true&skipHeaderFooter=true" style="width:100%;height:400px;border:0px;background-color:transparent;" frameborder="0" allowtransparency="true" onload="keepInView(this);"></iframe>
					    		<?php endif;?>									
								<script>function keepInView(item) {if((document.documentElement&&document.documentElement.scrollTop)||document.body.scrollTop>item.offsetTop)item.scrollIntoView();}</script>
				 			</div>
				 			<?php if (strcmp((string)$pilihan->sig2, (string)$pilihan->sig1) != 0) : ?>
				 			<div id="ycbm-sig2" class="tab-pane">
				 				<?php if(strcmp((string)$pilihan->sig2, 'cp') == 0): ?>
					    		<iframe src="https://ristek2016-cp.youcanbook.me/?noframe=true&skipHeaderFooter=true" style="width:100%;height:400px;border:0px;background-color:transparent;" frameborder="0" allowtransparency="true" onload="keepInView(this);"></iframe>
					    		<?php elseif(strcmp((string)$pilihan->sig2, 'ds') == 0): ?>					    		
					    		<iframe src="https://ristek2016-ds.youcanbook.me/?noframe=true&skipHeaderFooter=true" style="width:100%;height:400px;border:0px;background-color:transparent;" frameborder="0" allowtransparency="true" onload="keepInView(this);"></iframe>
					    		<?php elseif(strcmp((string)$pilihan->sig2, 'es') == 0): ?>
					    		<iframe src="https://ristek2016-embed.youcanbook.me/?noframe=true&skipHeaderFooter=true" style="width:100%;height:400px;border:0px;background-color:transparent;" frameborder="0" allowtransparency="true" onload="keepInView(this);"></iframe>
					    		<?php elseif(strcmp((string)$pilihan->sig2, 'ns') == 0): ?>
					    		<iframe src="https://ristek2016-netsos.youcanbook.me/?noframe=true&skipHeaderFooter=true" style="width:100%;height:400px;border:0px;background-color:transparent;" frameborder="0" allowtransparency="true" onload="keepInView(this);"></iframe>
					    		<?php elseif(strcmp((string)$pilihan->sig2, 'gd') == 0): ?>
					    		<iframe src="https://ristek2016-game.youcanbook.me/?noframe=true&skipHeaderFooter=true" style="width:100%;height:400px;border:0px;background-color:transparent;" frameborder="0" allowtransparency="true" onload="keepInView(this);"></iframe>
					    		<?php elseif(strcmp((string)$pilihan->sig2, 'md') == 0): ?>
					    		<iframe src="https://ristek2016-mobapp.youcanbook.me/?noframe=true&skipHeaderFooter=true" style="width:100%;height:400px;border:0px;background-color:transparent;" frameborder="0" allowtransparency="true" onload="keepInView(this);"></iframe>
					    		<?php elseif(strcmp((string)$pilihan->sig2, 'ux') == 0): ?>
					    		<iframe src="https://ristek2016-uiux.youcanbook.me/?noframe=true&skipHeaderFooter=true" style="width:100%;height:400px;border:0px;background-color:transparent;" frameborder="0" allowtransparency="true" onload="keepInView(this);"></iframe>
					    		<?php elseif(strcmp((string)$pilihan->sig2, 'wb') == 0): ?>
					    		<iframe src="https://ristek2016-web.youcanbook.me/?noframe=true&skipHeaderFooter=true" style="width:100%;height:400px;border:0px;background-color:transparent;" frameborder="0" allowtransparency="true" onload="keepInView(this);"></iframe>
					    		<?php elseif(strcmp((string)$pilihan->sig2, 'hr') == 0): ?>
					    		<iframe src="https://ristek2016-hrd.youcanbook.me/?noframe=true&skipHeaderFooter=true" style="width:100%;height:400px;border:0px;background-color:transparent;" frameborder="0" allowtransparency="true" onload="keepInView(this);"></iframe>
					    		<?php elseif(strcmp((string)$pilihan->sig2, 'pr') == 0): ?>
					    		<iframe src="https://ristek2016-pr.youcanbook.me/?noframe=true&skipHeaderFooter=true" style="width:100%;height:400px;border:0px;background-color:transparent;" frameborder="0" allowtransparency="true" onload="keepInView(this);"></iframe>
					    		<?php endif;?>	
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
		  			<div class="col-md-12">
				  		<div class="panel panel-default">
					  		<div class="panel-heading">Head of Human Resource Management</div>
					  		<div class="panel-body">Ifa Nasution: +6287887241010</div>
						</div>
			  		</div>
		  			<div class="col-md-6">
				  		<div class="panel panel-default">
							<!-- Default panel contents -->
							<div class="panel-heading">Computer Science & Computational Intelligence Group</div>			
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
							    		<td>+6281399274252</td>
							    	</tr>
							    	<tr>
							    		<td>Head of <br>Data Science SIG</td>
							    		<td>Jatmiko Budi</td>
							    		<td>+6281288746324</td>
							    	</tr>
							    	<tr>
							    		<td>Head of <br>Embedded System SIG</td>
							    		<td>Kustiawanto Halim</td>
							    		<td>+6281399274252</td>
							    	</tr>
							    	<tr>
							    		<td>Head of <br>NetSos SIG</td>
							    		<td>Rizki Mubarok</td>
							    		<td>+6281399274252</td>
							    	</tr>			    	
							    </tbody>
							</table>
						</div>	  		    	    	
			  		</div>
			  		<div class="col-md-6">
				  		<div class="panel panel-default">
							<!-- Default panel contents -->
							<div class="panel-heading">Development Group</div>			
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
							    		<td>+6281399274252</td>
							    	</tr>
							    	<tr>
							    		<td>Head of <br>Mobile Application Development SIG</td>
							    		<td>Teresa Pranyoto</td>
							    		<td>+6281399274252</td>
							    	</tr>
							    	<tr>
							    		<td>Head of <br>UI/UX SIG</td>
							    		<td>Shylla Estee</td>
							    		<td>+6281399274252</td>
							    	</tr>
							    	<tr>
							    		<td>Head of <br>Web Development SIG</td>
							    		<td>Rahma Khairunissa</td>
							    		<td>+6281399274252</td>
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