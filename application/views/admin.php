<div class="row">
	<div class="col-md-12">
		<p>Logged in as <?= $admindata->username ?></p>
		<div class="panel panel-primary info-panel">
		 	<!-- Default panel contents -->
		 	<div class="panel-heading info-panel-heading">Pendaftar</div>
		 	<div class="panel-body">
		 		<p>
		 			<span class="text-success"><b>HIJAU</b></span>: Pendaftar sudah memenuhi <br>
		 			<span class="text-danger"><b>MERAH</b></span>: Pendaftar belum memenuhi <br>
		 			<p><b>Q</b>: Status lolos, <b>E</b>: Status Essay, <b>R:</b> Status Resume, <B>T1</b>: Status Tugas 1, <b>T2</b>: Status Tugas 2</p> 
		 		</p>
		 	</div>
				<div class="row">
			 		<div class="col-md-12">
					  	<div class="panel-group" id="accordion">
							
							<?php foreach($pendaftar as $p): ?>

					  		<div class="panel panel-default">
					  			<div class="panel-heading">
					      			<h4 class="panel-title">					      								      							
										<a data-toggle="collapse" data-parent="#accordion" href="<?php echo '#'.md5($p->username); ?>"><?= $p->name ?></a>
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

										<?php if ($p->sig2 != $p->sig1):?>
										<?php if (($p->tugas2 != NULL)):?>
										<span class="text-success pull-right"><b>T2 &nbsp;</b></span>
										<?php else: ?>
										<span class="glyphicon glyphicon-remove text-danger pull-right"><b>T2 &nbsp;</b></span>
										<?php endif; ?>	
										<?php endif; ?>	
										

										<?php if (($p->tugas1 != NULL)):?>
										<span class="text-success pull-right"><b>T1 &nbsp;</b></span>
										<?php else: ?>
										<span class="text-danger pull-right"><b>T1 &nbsp;</b></span>
										<?php endif; ?>

										<?php if (($p->resume != NULL)):?>
										<span class="text-success pull-right"><b>R &nbsp;</b></span>
										<?php else: ?>
										<span class="text-danger pull-right"><b>R &nbsp;</b></span>
										<?php endif; ?>

										<?php if (($p->essay != NULL)):?>
										<span class="text-success pull-right"><b>E &nbsp;</b></span>
										<?php else: ?>										
										<span class="text-danger pull-right"><b>E &nbsp;</b></span>
										<?php endif; ?>

										<?php if ($p->isQualified != 0): ?>
										<span class="text-success pull-right"><b>Q &nbsp;</b></span>
										<?php else: ?>
										<span class="text-danger pull-right"><b>Q &nbsp;</b></span>
										<?php endif; ?>

										
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
						      						<?= $p->sig1 ?>
						      					</p>
						      					<span class="content-font"><b>Alasan Pilihan 1:</b></span><br>
						      					<p>
						      						<?= $p->alasan1 ?>					      						
						      					</p>
						      					<span class="content-font"><b>SIG/Divisi Pilhan 2:</b></span><br>
						      					<p>
						      						<?= $p->sig2 ?>
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
													<a href="#" class="btn btn-primary disabled" role="button" target="_blank">Download&nbsp;<span class="glyphicon glyphicon-save"></span></a>
													<?php endif; ?>
												</p>

					      						<span class="content-font"><b>Link Resume:</b></span><br>
						      					<p>
													<?php if (($p->resume != NULL)):?>
							      					<a href="<?= $p->resume ?>" class="btn btn-primary" target="_blank">Download&nbsp;<span class="glyphicon glyphicon-save"></span></a>
													<?php else: ?>
													<a href="#" class="btn btn-primary disabled" role="button" target="_blank">Download&nbsp;<span class="glyphicon glyphicon-save"></span></a>
													<?php endif; ?>
												</p>

					      						<span class="content-font"><b>Link Tugas SIG/Divisi Pilihan 1:</b></span><br>
												<p>
													<?php if (($p->tugas1 != NULL)):?>
							      					<a href="<?= $p->tugas1 ?>" class="btn btn-primary" target="_blank">Download&nbsp;<span class="glyphicon glyphicon-save"></span></a>
													<?php else: ?>
													<a href="#" class="btn btn-primary disabled" role="button" target="_blank">Download&nbsp;<span class="glyphicon glyphicon-save"></span></a>
													<?php endif; ?>
												</p>
												
												<?php if ($p->sig2 != $p->sig1):?>
						      					<span class="content-font"><b>Link Tugas SIG/Divisi Pilihan 2:</b></span><br>
												<p>
													<?php if (($p->tugas2 != NULL)):?>
							      					<a href="<?= $p->tugas2 ?>" class="btn btn-primary" target="_blank">Download&nbsp;<span class="glyphicon glyphicon-save"></span></a>
													<?php else: ?>
													<a href="#" class="btn btn-primary disabled" role="button" target="_blank">Download&nbsp;<span class="glyphicon glyphicon-save"></span></a>
													<?php endif; ?>
												</p>
												<?php endif; ?>

					      					</div>
					      				</div>
					      				<form action="<?= site_url() ?>" method="POST">
					      					<?php if ($p->isQualified == 0):?>
					      					<button type="submit" class="btn btn-primary pull-right">Qualify</button>
					      					<?php else: ?>	
					      					<button type="submit" class="btn btn-primary pull-right">Undo Qualify</button>
					      					<?php endif; ?>	
					      				</form>					      				
					  				</div>
					    		</div>
					  		</div>	

							<?php endforeach; ?>
					  	</div>										
					</div>					
				</div>

			<!-- Table -->
			<!-- <div class="table-responsive"> -->
			  	<!-- <table class="table table-condensed">
			    	<thead>
			    		<tr>
			    			<td class="col-md-1 col-xs-1"><b>Waktu Daftar</b></td>		    			
			    			<td class="col-md-2"><b>Nama</b></td>
			    			<td class="text-center col-md-1"><b>Pilihan 1</b></td>
			    			<td class="text-center col-md-1"><b>Pilihan 2</b></td>
			    			<td class="text-center col-md-1"><b>Essay</b></td>
			    			<td class="text-center col-md-1"><b>Resume</b></td>
			    			<td class="text-center col-md-1"><b>Tugas 1</b></td>
			    			<td class="text-center col-md-1"><b>Tugas 2</b></td>
			    			<td class="col-md-1"><b>EMail</b></td>
			    			<td class="col-md-1"><b>Phone</b></td>
			    			<td class="col-md-1"><b>Status</b></td>
			    		</tr>
			    	</thead>
			    	<tbody>
			    		<?php foreach($pendaftar as $p): ?>
			    		<?php if(($p->resume != NULL) & ($p->tugas1 != NULL) & ($p->tugas2 != NULL) & ($p->essay != NULL)): ?>
			    		<tr class="success">		    			
			    		<?php else: ?>
			    		<tr class="danger">		
			    		<?php endif; ?>
			    			<td><?= date("j M Y G:i:s", strtotime($p->timestamp)) ?></td>
			    			<td><?= $p->name ?></td>
			    			<td class="text-center">
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

			    					echo $sig1;
			    				?>
			    			</td>
			    			<td class="text-center">
								<?php 
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

			    					echo $sig2;
			    				?>
			    			</td>
			    			<td class="text-center">
			    				<?php if ($p->essay != NULL):?>
			    				<a href="<?= $p->essay ?>" target="_blank"><span class="glyphicon glyphicon-save"></span></a>
			    				<?php endif; ?>
			    			</td>
			    			<td class="text-center">
			    				<?php if ($p->resume != NULL):?>
			    				<a href="<?= $p->resume ?>" target="_blank"><span class="glyphicon glyphicon-save"></span></a>
			    				<?php endif; ?>
			    			</td>
			    			<td class="text-center">
			    				<?php if ($p->tugas1 != NULL):?>
			    				<a href="<?= $p->tugas1 ?>" target="_blank"><span class="glyphicon glyphicon-save"></span></a>
			    				<?php endif; ?>
			    			</td>
			    			<td class="text-center">
			    				<?php if ($p->tugas2 != NULL):?>
			    				<a href="<?= $p->tugas2 ?>" target="_blank"><span class="glyphicon glyphicon-save"></span></a>
			    				<?php endif; ?>
			    			</td>
			    			<td><?= $p->email ?></td>
			    			<td><?= $p->phone ?></td>	
			    			<td class="text-center">
			    				<form action="" method="POST">
			    					<button type="submit" class="btn btn-primary">v</button>
			    				</form>
			    			</td>

			    		</tr>
			    		<?php endforeach; ?>			    		
			    	</tbody>
			  	</table> -->

			<!-- </div> -->
		</div>
	</div>
</div>