<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
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
			    			<td class="text-center col-md-1"><b>Resume</b></td>
			    			<td class="text-center col-md-1"><b>Tugas 1</b></td>
			    			<td class="text-center col-md-1"><b>Tugas 2</b></td>
			    			<td class="col-md-2"><b>EMail</b></td>
			    			<td class="col-md-1"><b>Phone</b></td>			    			
			    		</tr>
			    	</thead>
			    	<tbody>
			    		<?php foreach($result as $r): ?>
			    		<?php if(($r->resume != NULL) & ($r->tugas1 != NULL) & ($r->tugas2 != NULL)): ?>
			    		<tr class="success">		    			
			    		<?php else: ?>
			    		<tr class="danger">		
			    		<?php endif; ?>
			    			<td><?= $r->timestamp ?></td>
			    			<td><?= $r->nama ?></td>
			    			<td class="text-center"><?= $r->pilihan1 ?></td>
			    			<td class="text-center"><?= $r->pilihan2 ?></td>
			    			<td class="text-center">
			    				<?php if ($r->resume != NULL):?>
			    				<a href="<?= $r->resume ?>"><span class="glyphicon glyphicon-save"></span></a>
			    				<?php endif; ?>
			    			</td>
			    			<td class="text-center">
			    				<?php if ($r->tugas1 != NULL):?>
			    				<a href="<?= $r->tugas1 ?>"><span class="glyphicon glyphicon-save"></span></a>
			    				<?php endif; ?>
			    			</td>
			    			<td class="text-center">
			    				<?php if ($r->tugas2 != NULL):?>
			    				<a href="<?= $r->tugas2 ?>"><span class="glyphicon glyphicon-save"></span></a>
			    				<?php endif; ?>
			    			</td>
			    			<td><?= $r->email ?></td>
			    			<td><?= $r->phone ?></td>			    			
			    		</tr>
			    		<?php endforeach; ?>			    		
			    	</tbody>
			  	</table>
			  </div>
		</div>
	</div>
</div>