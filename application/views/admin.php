<div class="row">
	<div class="col-md-12">
		<p>Logged in as <?= $admindata->username ?></p>
		<div class="panel panel-primary">
		 	<!-- Default panel contents -->
		 	<div class="panel-heading">Pendaftar</div>
		 	<div class="panel-body">
		 		<p>
		 			<span class="text-success"><b>HIJAU</b></span>: Pendaftar telah submit semua link tugas <br>
		 			<span class="text-danger"><b>MERAH</b></span>: Pendaftar belum submit semua link tugas
		 		</p>
		 	</div>

			<!-- Table -->
			<div class="table-responsive">
			  	<table class="table table-condensed">
			    	<thead>
			    		<tr>
			    			<td class="col-md-1 col-xs-1"><b>Waktu Daftar</b></td>		    			
			    			<td class="col-md-3"><b>Nama</b></td>
			    			<td class="text-center col-md-1"><b>Pilihan 1</b></td>
			    			<td class="text-center col-md-1"><b>Pilihan 2</b></td>
			    			<td class="text-center col-md-1"><b>Essay</b></td>
			    			<td class="text-center col-md-1"><b>Resume</b></td>
			    			<td class="text-center col-md-1"><b>Tugas 1</b></td>
			    			<td class="text-center col-md-1"><b>Tugas 2</b></td>
			    			<td class="col-md-2"><b>EMail</b></td>
			    			<td class="col-md-1"><b>Phone</b></td>			    			
			    		</tr>
			    	</thead>
			    	<tbody>
			    		<?php foreach($pendaftar as $p): ?>
			    		<?php if(($p->resume != NULL) & ($p->tugas1 != NULL) & ($p->tugas2 != NULL) $($p->essay != NULL)): ?>
			    		<tr class="success">		    			
			    		<?php else: ?>
			    		<tr class="danger">		
			    		<?php endif; ?>
			    			<td><?= $p->timestamp ?></td>
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
			    		</tr>
			    		<?php endforeach; ?>			    		
			    	</tbody>
			  	</table>
			  </div>
		</div>
	</div>
</div>