<div class="row">
	<div class="col-md-12">	
		<br>	
		<div class="well well-sm text-center" role="alert">			
			<b>Logged in as <?= $user['username'] ?></b>
		</div>	
		<div class="panel panel-primary info-panel">					 
		 	<div class="panel-heading info-panel-heading">Pendaftar</div>
		 	<div class="panel-body">
		 		<p>
		 			<span class="text-success"><b>HIJAU</b></span>: Pendaftar sudah memenuhi <br>
		 			<span class="text-danger"><b>MERAH</b></span>: Pendaftar belum memenuhi <br>
		 			<span class="text-muted"><b>ABU</b></span>: Pendaftar tidak perlu submit <br>
		 			<p><b>Q1</b>: Status lolos Pilihan 1, <b>Q2</b>: Status lolos Pilihan 2, <b>E</b>: Status Essay, <b>R:</b> Status Resume, <B>T1</b>: Status Tugas 1, <b>T2</b>: Status Tugas 2</p> 
		 		</p>
		 	</div>
			<div class="row">
		 		<div class="col-md-12">
				  	<div class="panel-group" id="accordion">
						
						<?php foreach($pendaftar as $p): ?>
						<?php if($p->timestamp != NULL): ?>

				  		<div class="panel panel-default">
				  			<div class="panel-heading">
				  				<div class="pull-left">				      				
									<?php if ($p->sig2 == $p->sig1): ?>
									<span class="text-muted pull-right"><b>T2 &nbsp;</b></span>
									<?php elseif (($p->tugas2 != NULL)): ?>
									<span class="text-success pull-right"><b>T2 &nbsp;</b></span>
									<?php else: ?>
									<span class="text-danger pull-right"><b>T2 &nbsp;</b></span>
									<?php endif; ?>																			

									<?php if (($p->tugas1 != NULL)): ?>
									<span class="text-success pull-right"><b>T1 &nbsp;</b></span>
									<?php else: ?>
									<span class="text-danger pull-right"><b>T1 &nbsp;</b></span>
									<?php endif; ?>

									<?php if (($p->resume != NULL)): ?>
									<span class="text-success pull-right"><b>R &nbsp;</b></span>
									<?php else: ?>
									<span class="text-danger pull-right"><b>R &nbsp;</b></span>
									<?php endif; ?>

									<?php if (($p->essay != NULL)): ?>
									<span class="text-success pull-right"><b>E &nbsp;</b></span>
									<?php else: ?>										
									<span class="text-danger pull-right"><b>E &nbsp;</b></span>
									<?php endif; ?>
									
									<!-- nope -->
									<?php if ($p->sig2 == $p->sig1): ?>
									<span class="text-muted pull-right"><b>Q2 &nbsp;</b></span>
									<?php elseif (($p->isPil2Qualified != 0)): ?>
									<span class="text-success pull-right"><b>Q2 &nbsp;</b></span>
									<?php else: ?>
									<span class="text-danger pull-right"><b>Q2 &nbsp;</b></span>
									<?php endif; ?>		

									<?php if ($p->isPil1Qualified != 0): ?>
									<span class="text-success pull-right"><b>Q1 &nbsp;</b></span>
									<?php else: ?>
									<span class="text-danger pull-right"><b>Q1 &nbsp;</b></span>
									<?php endif; ?>
				      			</div>	

				      			<h4 class="panel-title">				      								      								      						
									<a data-toggle="collapse" data-parent="#accordion" href="<?php echo '#'.md5($p->username); ?>"><b><?= $p->name ?></b></a>
									<span>
										<?php 
					    					$sig1 = $p->sig1; 

					    					if ($sig1 == 'cp') $sig1 = 'CP';
					    					else if ($sig1 == 'ds') $sig1 = 'DatSci';
					    					else if ($sig1 == 'es') $sig1 = 'Embed';
					    					else if ($sig1 == 'ns') $sig1 = 'Netsos';
					    					else if ($sig1 == 'gd') $sig1 = 'GameDev';
					    					else if ($sig1 == 'md') $sig1 = 'MobDev';
					    					else if ($sig1 == 'ux') $sig1 = 'UI/UX';
					    					else if ($sig1 == 'wb') $sig1 = 'WebDev';
					    					else if ($sig1 == 'hr') $sig1 = 'HRM';
					    					else if ($sig1 == 'pr') $sig1 = 'PR';

					    					$sig2 = $p->sig2; 

					    					if ($sig2 == 'cp') $sig2 = 'CP';
					    					else if ($sig2 == 'ds') $sig2 = 'DatSci';
					    					else if ($sig2 == 'es') $sig2 = 'Embed';
					    					else if ($sig2 == 'ns') $sig2 = 'Netsos';
					    					else if ($sig2 == 'gd') $sig2 = 'GameDev';
					    					else if ($sig2 == 'md') $sig2 = 'MobDev';
					    					else if ($sig2 == 'ux') $sig2 = 'UI/UX';
					    					else if ($sig2 == 'wb') $sig2 = 'WebDev';
					    					else if ($sig2 == 'hr') $sig2 = 'HRM';
					    					else if ($sig2 == 'pr') $sig2 = 'PR';

					    					echo '('.$sig1.','.$sig2.')';
					    				?>
									</span>
				      			</h4>				      											
				    		</div>
				    		<div id="<?php echo md5($p->username); ?>" class="panel-collapse collapse">
				      			<div class="panel-body">
				      				<div class="row">
				      					<div class="col-md-3">	
				      						<span class="content-font"><b>Waktu Daftar:</b></span><br>
					      					<p>
					      						<?= $p->timestamp ?>
					      					</p>
					      					<span class="content-font"><b>Nama:</b></span><br>
					      					<p>
					      						<?= $p->name ?>
					      					</p>
					      					<span class="content-font"><b>Jurusan:</b></span><br>
					      					<p>
					      						<?= $p->jurusan ?>
					      					</p>
					      					<span class="content-font"><b>Angkatan:</b></span><br>
					      					<p>
					      						<?= $p->angkatan ?>
					      					</p>
					      					<span class="content-font"><b>EMail:</b></span><br>
					      					<p>
					      						<?= $p->email ?>
					      					</p>
					      					<span class="content-font"><b>Phone:</b></span><br>
					      					<p>
					      						<?= $p->phone ?>
					      					</p>
				      					</div>
				      					<div class="col-md-6">	
					      					<span class="content-font"><b>SIG/Divisi Pilhan 1:</b></span><br>
					      					<p>
					      						<?= $sig1 ?>
					      					</p>
					      					<span class="content-font"><b>Alasan Pilihan 1:</b></span><br>
					      					<p>
					      						<?= $p->alasan1 ?>					      						
					      					</p>
					      					<span class="content-font"><b>SIG/Divisi Pilhan 2:</b></span><br>
					      					<p>
					      						<?= $sig2 ?>
					      					</p>
					      					<span class="content-font"><b>Alasan Plihan 2:</b></span><br>
					      					<p>
												<?= $p->alasan2 ?>
					      					</p>						      					
				      					</div>
				      					<div class="col-md-3">	
				      						<span class="content-font"><b>Link Essay Motivasi:</b></span><br>
			      							<p>
												<?php if (($p->essay != NULL)):?>
						      					<a href="<?= $p->essay ?>" class="btn btn-primary" target="_blank">Download&nbsp;<span class="glyphicon glyphicon-save"></span></a>
												<?php else: ?>
												<span class="glyphicon glyphicon-remove"></span>
												<?php endif; ?>
											</p>

				      						<span class="content-font"><b>Link Resume:</b></span><br>
					      					<p>
												<?php if (($p->resume != NULL)):?>
						      					<a href="<?= $p->resume ?>" class="btn btn-primary" target="_blank">Download&nbsp;<span class="glyphicon glyphicon-save"></span></a>
												<?php else: ?>
												<span class="glyphicon glyphicon-remove"></span>
												<?php endif; ?>
											</p>

				      						<span class="content-font"><b>Link Tugas SIG/Divisi Pilihan 1:</b></span><br>
											<p>
												<?php if (($p->tugas1 != NULL)):?>
						      					<a href="<?= $p->tugas1 ?>" class="btn btn-primary" target="_blank">Download&nbsp;<span class="glyphicon glyphicon-save"></span></a>
												<?php else: ?>
												<span class="glyphicon glyphicon-remove"></span>
												<?php endif; ?>
											</p>
											
											<?php if ($p->sig2 != $p->sig1):?>
					      					<span class="content-font"><b>Link Tugas SIG/Divisi Pilihan 2:</b></span><br>
											<p>
												<?php if (($p->tugas2 != NULL)):?>
						      					<a href="<?= $p->tugas2 ?>" class="btn btn-primary" target="_blank">Download&nbsp;<span class="glyphicon glyphicon-save"></span></a>
												<?php else: ?>
												<span class="glyphicon glyphicon-remove"></span>
												<?php endif; ?>
											</p>
											<?php endif; ?>

				      					</div>
				      				</div>

				      				<?php if ($p->sig2 != $p->sig1): ?>		
				      				<form action="<?= site_url('admin747835') ?>" method="POST">
				      					<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
				      					<input type="hidden" name="biohash" value="<?= $p->biohash ?>">
										<input type="hidden" name="qualifyWhat" value="2">

				      					<?php if ($p->isPil2Qualified == 0):?>				      					
				      					<button type="submit" class="btn btn-primary pull-right">Qualify Pil. 2</button>
				      					<?php else: ?>				      					
				      					<button type="submit" class="btn btn-primary pull-right">Undo Qualify Pil. 2</button>
				      					<?php endif; ?>	
				      				</form>
									<?php endif; ?>
				      							      				
									<p class="pull-right">&nbsp;&nbsp;</p>
									<form action="<?= site_url('admin747835') ?>" method="POST">
										<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
										<input type="hidden" name="biohash" value="<?= $p->biohash ?>">
										<input type="hidden" name="qualifyWhat" value="1">

				      					<?php if ($p->isPil1Qualified == 0):?>				      				
				      					<button type="submit" class="btn btn-primary pull-right">Qualify Pil. 1</button>
				      					<?php else: ?>				      					
				      					<button type="submit" class="btn btn-primary pull-right">Undo Qualify Pil. 1</button>
				      					<?php endif; ?>
				      				</form>				      				
				      				
				  				</div>
				    		</div>
				  		</div>

						<?php endif; ?>
						<?php endforeach; ?>
				  	</div>										
				</div>					
			</div>			
		</div>
	</div>
</div>