<?php $this->load->view('panel/header'); ?>
<!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="row mb-3">
            <!-- Invoice Example -->
            <div class="col-xl-12 col-lg-12 mb-4">
              <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Azizoğulları İnşaat Yönetim Paneli</h6>
                </div>
				<div class="card-body">
					<h6>Hoşgelniz, Ne Yapmak İstersiniz?</h6>
					<div class="row">
						<div class="col-md-3">
							<a href="<?php echo base_url('Hakkimizda/index')?>" class="btn btn-primary btn-block">Hakkımızda</a>
						</div>
						<div class="col-md-3">
							<a href="<?php echo base_url('Panel/contact')?>" class="btn btn-primary btn-block">Hizmetler</a>
						</div>
						<div class="col-md-3">
							<a href="<?php echo base_url('Panel/projects')?>" class="btn btn-primary btn-block">Projeler</a>
						</div>
						<div class="col-md-3">
							<a href="<?php echo base_url('Panel/contact')?>" class="btn btn-primary btn-block">İletişim</a>
						</div>
					</div>
				</div>
                <div class="card-footer"></div>
              </div>
            </div>
          </div>
          <!--Row-->
<?php $this->load->view('panel/footer'); ?>
