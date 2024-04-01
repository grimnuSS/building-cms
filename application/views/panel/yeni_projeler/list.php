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
					<h6 class="m-0 font-weight-bold text-primary">Yeni Projeler Sayfası</h6>
				</div>
				<div class="card-body">
					<div class="content">
						<table>
							<thead>
							<tr>
								<th>Başlık</th>
								<th>İçerik</th>
								<th>Görsel</th>
								<th>İşlemler</th>
							</tr>
							</thead>
							<tbody>

							<?php
							$hizmetlerimiz_result = $this->Yeni_Projeler->getYeniProjeler();
							foreach ($hizmetlerimiz_result->result() as $hizmet): ?>
								<tr>
									<td><?php echo $hizmet->header; ?></td>
									<td><?php echo $hizmet->body; ?></td>
									<td>
										<img src="<?php echo base_url("/")?><?php echo $hizmet->image; ?>" alt="Görsel">
									</td>
									<td class="action-buttons">
										<a href="<?php echo base_url("Yeniprojeler/delete/".$hizmet->id); ?>">Sil</a>
										<a href="<?php echo base_url("Yeniprojeler/edit/".$hizmet->id); ?>">Düzenle</a>
									</td>
								</tr>
							<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
				<div class="card-footer">
					<?php if (isset($success)): ?>
						<div class="alert alert-success"><?php echo $success; ?></div>
					<?php endif; ?>
					<?php if (isset($error)): ?>
						<div class="alert alert-danger"><?php echo $error; ?></div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	<!--Row-->
	<?php $this->load->view('panel/footer'); ?>
