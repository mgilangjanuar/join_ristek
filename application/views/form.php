<div class="row">	
	<form action="<?= site_url('register') ?>" class="" method="post">
		<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
		<div class="col-md-6">
			<div class="panel panel-primary info-panel">
				<div class="panel-heading info-panel-heading">Biodata</div>
				<div class="panel-body">
					<div class="form-group">
						<label for="namalengkap_input">Nama Lengkap</label>
						<input id="namalengkap_input" name="namalengkap_input" class="form-control" type="text" placeholder="Nama Lengkap" value="<?= $user['name'] ?>" maxlength="100" readOnly="true">
						<?= form_error('namalengkap_input') ?>
					</div>
					<div class="form-group">
						<label for="npm_input">NPM</label>
						<input id="npm_input" name="npm_input" class="form-control" type="text" placeholder="NPM" value="<?= $user['npm'] ?>" maxlength="10" readOnly="true">
						<?= form_error('npm_input') ?>
					</div>
					<div class="form-group">
						<label for="angkatan_input">Angkatan</label>
						<input id="angkatan_input" name="angkatan_input" class="form-control" type="text" placeholder="Angkatan" value="<?= $user['angkatan'] ?>" maxlength="4" readOnly="true">
						<?= form_error('angkatan_input') ?>
					</div>
					<div class="form-group">
						<label for="jurusan_input">Jurusan</label>
						<input id="jurusan_input" name="jurusan_input" class="form-control" type="text" placeholder="Jurusan" value="<?= $user['jurusan'] ?>" maxlength="50" readOnly="true">
						<?= form_error('jurusan_input') ?>
					</div>
					<div class="form-group">
						<label for="email_input">Email</label>
						<input id="email_input" name="email_input" class="form-control" type="email" placeholder="user@domain.com" value="<?php echo set_value('email_input'); ?>" maxlength="50">
						<?= form_error('email_input') ?>
					</div>
					<div class="form-group">
						<label for="phone_input">Phone</label>
						<input id="phone_input" name="phone_input" class="form-control" type="text" placeholder="+628xxxxxxxxx" value="<?php echo set_value('phone_input'); ?>" maxlength="20">
						<?= form_error('phone_input') ?>
					</div>
				</div>
			</div>				
		</div>
		<div class="col-md-6">			
			<div class="panel panel-primary info-panel">
		  		<div class="panel-heading info-panel-heading">SIG &amp; Divisi</div>
		  		<div class="panel-body">				    
		  			<p>Jika Anda hanya ingin memliih satu SIG/Divisi saja maka isi pilihan 2 dengan SIG/Divisi yang sama begitu juga dengan kolom alasan</p>
		    		<div class="form-group">
						<label for="sig1_input">Pilihan 1</label>
						<select name="sig1_input" id="sig1_input" class="form-control">
							<option disabled>Computer System &amp; Computational Intellegence Group</option>
							<option value="cp">&nbsp;&nbsp;&nbsp;&nbsp;Competitive Programming SIG</option>
							<option value="ds">&nbsp;&nbsp;&nbsp;&nbsp;Data Science SIG</option>
							<option value="es">&nbsp;&nbsp;&nbsp;&nbsp;Embedded System SIG</option>
							<option value="ns">&nbsp;&nbsp;&nbsp;&nbsp;Network Security and Operating System SIG</option>
							<option disabled>Development Group</option>
							<option value="gd">&nbsp;&nbsp;&nbsp;&nbsp;Game Development SIG</option>
							<option value="md">&nbsp;&nbsp;&nbsp;&nbsp;Mobile Application Development SIG</option>
							<option value="ux">&nbsp;&nbsp;&nbsp;&nbsp;UI/UX SIG</option>
							<option value="wb">&nbsp;&nbsp;&nbsp;&nbsp;Web Development SIG</option>
							<option disabled>Supporting Division</option>
							<option value="hr">&nbsp;&nbsp;&nbsp;&nbsp;Human Resources Management Division</option>
							<option value="pr">&nbsp;&nbsp;&nbsp;&nbsp;Public Relation Division</option>
						</select>
					</div>
					<div class="form-group">
						<label for="alasan1_input">Alasan memilih SIG/Divisi diatas</label>
						<textarea name="alasan1_input" id="alasan1_input" cols="30" rows="2" value="<?php echo set_value('alasan1_input'); ?>" class="form-control"></textarea>
						<?= form_error('alasan1_input') ?>
					</div>
					<div class="form-group">
						<label for="sig2_input">Pilihan 2</label>
						<select name="sig2_input" id="sig2_input" class="form-control">
							<option disabled>Computer System &amp; Computational Intellegence Group</option>
							<option value="cp">&nbsp;&nbsp;&nbsp;&nbsp;Competitive Programming SIG</option>
							<option value="ds">&nbsp;&nbsp;&nbsp;&nbsp;Data Science SIG</option>
							<option value="es">&nbsp;&nbsp;&nbsp;&nbsp;Embedded System SIG</option>
							<option value="ns">&nbsp;&nbsp;&nbsp;&nbsp;Network Security and Operating System SIG</option>
							<option disabled>Development Group</option>
							<option value="gd">&nbsp;&nbsp;&nbsp;&nbsp;Game Development SIG</option>
							<option value="md">&nbsp;&nbsp;&nbsp;&nbsp;Mobile Application Development SIG</option>
							<option value="ux">&nbsp;&nbsp;&nbsp;&nbsp;UI/UX SIG</option>
							<option value="wb">&nbsp;&nbsp;&nbsp;&nbsp;Web Development SIG</option>
							<option disabled>Supporting Division</option>
							<option value="hr">&nbsp;&nbsp;&nbsp;&nbsp;Human Resources Management Division</option>
							<option value="pr">&nbsp;&nbsp;&nbsp;&nbsp;Public Relation Division</option>
						</select>
					</div>
					<div class="form-group">
						<label for="alasan2_input">Alasan memilih SIG/Divisi diatas</label>
						<textarea name="alasan2_input" id="alasan2_input" cols="30" rows="2" value="<?php echo set_value('alasan2_input'); ?>" class="form-control"></textarea>
						<?= form_error('alasan2_input') ?>
					</div>
		  		</div>
			</div>		
			<button type="submit" class="btn btn-primary btn-sm pull-right">Submit</button>						
		</div>	
	</form>
</div>