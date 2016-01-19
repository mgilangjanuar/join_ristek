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
			    			<td>20-01-2015 18:00:00</td>
			    			<td>Jundi Ahmad</td>
			    			<td class="text-center">WebDev</td>
			    			<td class="text-center">MobApps</td>
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
			    			<td>jundi.alwan@gmail.com</td>
			    			<td>+6281399274252</td>			    			
			    		</tr>
			    		<?php endforeach; ?>

			    		<tr class="success">		    			
			    			<td>20-01-2015 18:00:00</td>
			    			<td>Jundi Ahmad Alwaaaaaannnnnnnn</td>
			    			<td class="text-center">CP</td>
			    			<td class="text-center">Netsos</td>
			    			<td class="text-center"><a href=""><span class="glyphicon glyphicon-save"></span></a></td>
			    			<td class="text-center"><a href=""><span class="glyphicon glyphicon-save"></span></a></td>
			    			<td class="text-center"><a href=""><span class="glyphicon glyphicon-save"></span></a></td>
			    			<td>jundi.alwan@gmail.com</td>
			    			<td>+6281399274252</td>
			    			
			    		</tr>
			    		<tr class="success">		    			
			    			<td>20-01-2015 18:00:00</td>
			    			<td>Jundi Alwannnnnnnnnnnnnnnn</td>
			    			<td class="text-center">Embed</td>
			    			<td class="text-center">DatSci</td>
			    			<td class="text-center"><a href=""><span class="glyphicon glyphicon-save"></span></a></td>
			    			<td class="text-center"><a href=""><span class="glyphicon glyphicon-save"></span></a></td>
			    			<td class="text-center"><a href=""><span class="glyphicon glyphicon-save"></span></a></td>
			    			<td>jundi.alwan@gmail.com</td>
			    			<td>+6281399274252</td>
			    			
			    		</tr>
			    		<tr class="success">		    			
			    			<td>20-01-2015 18:00:00</td>
			    			<td>Jundi Alwannnnnnnnnnnnnnnn</td>
			    			<td class="text-center">UI/UX</td>
			    			<td class="text-center">GameDev</td>
			    			<td class="text-center"><a href=""><span class="glyphicon glyphicon-save"></span></a></td>
			    			<td class="text-center"><a href=""><span class="glyphicon glyphicon-save"></span></a></td>
			    			<td class="text-center"><a href=""><span class="glyphicon glyphicon-save"></span></a></td>
			    			<td>jundi.alwan@gmail.com</td>
			    			<td>+6281399274252</td>
			    			
			    		</tr>
			    		<tr class="danger">		    			
			    			<td>20-01-2015 18:00:00</td>
			    			<td>Jundi Alwannnnnnnnnnnnnnnn</td>
			    			<td class="text-center">Embed</td>
			    			<td class="text-center">GameDev</td>
			    			<td class="text-center"><a href=""><span class="glyphicon glyphicon-save"></span></a></td>
			    			<td class="text-center"><a href=""></a></td>
			    			<td class="text-center"><a href=""><span class="glyphicon glyphicon-save"></span></a></td>
			    			<td>jundi.alwan@gmail.com</td>
			    			<td>+6281399274252</td>
			    			
			    		</tr>
			    		<tr class="success">		    			
			    			<td>20-01-2015 18:00:00</td>
			    			<td>Jundi Alwannnnnnnnnnnnnnnn</td>
			    			<td class="text-center">Embed</td>
			    			<td class="text-center">GameDev</td>
			    			<td class="text-center"><a href=""><span class="glyphicon glyphicon-save"></span></a></td>
			    			<td class="text-center"><a href=""><span class="glyphicon glyphicon-save"></span></a></td>
			    			<td class="text-center"><a href=""><span class="glyphicon glyphicon-save"></span></a></td>
			    			<td>jundi.alwan@gmail.com</td>
			    			<td>+6281399274252</td>
			    			
			    		</tr>
			    		<tr class="danger">		    			
			    			<td>20-01-2015 18:00:00</td>
			    			<td>Jundi Alwannnnnnnnnnnnnnnn</td>
			    			<td class="text-center">Embed</td>
			    			<td class="text-center">GameDev</td>
			    			<td class="text-center"><a href=""><span class="glyphicon glyphicon-save"></span></a></td>
			    			<td class="text-center"><a href=""><span class="glyphicon glyphicon-save"></span></a></td>
			    			<td class="text-center"><a href=""></a></td>
			    			<td>jundi.alwan@gmail.com</td>
			    			<td>+6281399274252</td>
			    			
			    		</tr>
			    		<tr class="danger">		    			
			    			<td>20-01-2015 18:00:00</td>
			    			<td>Jundi Alwannnnnnnnnnnnnnnn</td>
			    			<td class="text-center">Embed</td>
			    			<td class="text-center">GameDev</td>
			    			<td class="text-center"><a href=""></a></td>
			    			<td class="text-center"><a href=""><span class="glyphicon glyphicon-save"></span></a></td>
			    			<td class="text-center"><a href=""><span class="glyphicon glyphicon-save"></span></a></td>
			    			<td>jundi.alwan@gmail.com</td>
			    			<td>+6281399274252</td>
			    			
			    		</tr>
			    		<tr class="success">		    			
			    			<td>20-01-2015 18:00:00</td>
			    			<td>Jundi Alwannnnnnnnnnnnnnnn</td>
			    			<td class="text-center">Embed</td>
			    			<td class="text-center">GameDev</td>
			    			<td class="text-center"><a href=""><span class="glyphicon glyphicon-save"></span></a></td>
			    			<td class="text-center"><a href=""><span class="glyphicon glyphicon-save"></span></a></td>
			    			<td class="text-center"><a href=""><span class="glyphicon glyphicon-save"></span></a></td>
			    			<td>jundi.alwan@gmail.com</td>
			    			<td>+6281399274252</td>
			    			
			    		</tr>
			    		<tr class="danger">		    			
			    			<td>20-01-2015 18:00:00</td>
			    			<td>Jundi Alwannnnnnnnnnnnnnnn</td>
			    			<td class="text-center">Embed</td>
			    			<td class="text-center">GameDev</td>
			    			<td class="text-center"><a href=""></a></td>
			    			<td class="text-center"><a href=""><span class="glyphicon glyphicon-save"></span></a></td>
			    			<td class="text-center"><a href=""><span class="glyphicon glyphicon-save"></span></a></td>
			    			<td>jundi.alwan@gmail.com</td>
			    			<td>+6281399274252</td>
			    			
			    		</tr>
			    	</tbody>
			  	</table>
			  </div>
		</div>
	</div>
</div>