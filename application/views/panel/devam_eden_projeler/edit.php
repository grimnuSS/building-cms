<?php $this->load->view('panel/header'); ?>
<style>
	table {
		width: 100%;
		border-collapse: collapse;
		margin-top: 20px;
	}

	th, td {
		border: 1px solid #dddddd;
		text-align: left;
		padding: 8px;
	}

	img {
		max-width: 100px;
		height: auto;
		display: block;
		margin: 0 auto;
	}

	.action-buttons {
		display: flex;
		justify-content: space-between;
	}

	.action-buttons a {
		text-decoration: none;
		padding: 5px 10px;
		border: 1px solid #3498db;
		color: #3498db;
		border-radius: 4px;
		transition: background-color 0.3s;
	}

	.action-buttons a:hover {
		background-color: #3498db;
		color: white;
	}
</style>
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
	<div class="row mb-3">
		<!-- Invoice Example -->
		<div class="col-xl-12 col-lg-12 mb-4">
			<div class="card">
				<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
					<h6 class="m-0 font-weight-bold text-primary">Devam Eden Projeler Düzenleme Sayfası</h6>
				</div>
				<div class="card-body">
					<div class="content">
						<?php
						$id = $this->uri->segment(3);
						$hizmetlerimiz_result = $this->Devam_Eden_Projeler->getDevamEdenProjeler($id);?>
						<form action="<?php echo base_url("Devamedenprojeler/update")?>" method="post" enctype="multipart/form-data">
							<?php
							$hizmetlerimiz = (!empty($hizmetlerimiz_result)) ? $hizmetlerimiz_result->row() : (object)array(
								'header' => '',
								'body' => '',
								'image' => ''
							);
							?>
							<input type="hidden" name="id" value="<?php echo $id; ?>">
							<div class="form-group">
								<label for="header">Başlık</label>
								<input type="text" class="form-control" name="header" placeholder="Başlık" value="<?php echo $hizmetlerimiz->header; ?>">
							</div>
							<div class="form-group">
								<label for="body">İçerik</label>
								<input type="text" class="form-control" name="body" placeholder="İçerik" value="<?php echo $hizmetlerimiz->body; ?>">
							</div>
							<div class="form-group">
								<label for="image">Resim</label>
								<input type="file" class="form-control" name="image">
							</div>
							<input type="submit" class="btn btn-primary" value="Kaydet">
						</form>
					</div>
				</div>
				<div class="card-footer">
				</div>
			</div>
		</div>
	</div>
	<!--Row-->
	<?php $this->load->view('panel/footer'); ?>
