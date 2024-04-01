<?php $this->load->view('panel/header'); ?>
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
	<div class="row mb-3">
		<!-- Invoice Example -->
		<div class="col-xl-12 col-lg-12 mb-4">
			<div class="card">
				<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
					<h6 class="m-0 font-weight-bold text-primary">Hakkımızda Düzenleme Sayfası</h6>
				</div>
				<div class="card-body">
					<div class="content">
						<?php
						$hakkimizda_result = $this->Panel->getHakkimizda();

						// getHakkimizda sonucu boşsa veya null ise, varsayılan değerlerle bir dizi oluştur
						$hakkimizda = (!empty($hakkimizda_result)) ? $hakkimizda_result->row() : (object)array(
							'header' => '',
							'body' => ''
						);
						?>
						<form action="<?php echo base_url("Hakkimizda/edit"); ?>" method="post">
							<div class="form-group">
								<label for="header">Başlık</label>
								<input type="text" class="form-control" name="header"
									   value="<?php echo $hakkimizda->header; ?>">
							</div>
							<div class="form-group">
								<label for="body">İçerik</label>
								<textarea name="body" id="body" cols="30" rows="10"
										  class="form-control"><?php echo $hakkimizda->body; ?></textarea>
							</div>
							<input type="submit" class="btn btn-primary" value="Kaydet">
						</form>
					</div>
				</div>
				<div class="card-footer">
					<?php if (isset($success)): ?>
						<div class="alert alert-success"><?php echo $success; ?></div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	<!--Row-->
	<?php $this->load->view('panel/footer'); ?>
