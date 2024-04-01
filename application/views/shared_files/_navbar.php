<header class="header">
        <a href="<?php echo base_url('')?>" class="logo">
            <img src="../images/logo.png" alt="logo">
        </a>
        <nav class="navbar">
            <a href="<?php echo base_url("main")?>" class="active">Anasayfa</a>
            <a href="<?php echo base_url("main/hakkimizda")?>">Hakkımızda</a>
            <a href="<?php echo base_url("main/yeni_projeler")?>">Yeni Projeler</a>
            <a href="<?php echo base_url("main/devam_eden_projeler")?>">Devam Eden Projeler</a>
            <a href="<?php echo base_url("main/biten_projeler")?>">Biten Projeler</a>
            <a href="<?php echo base_url("main/pvc_marangoz")?>">PVC / Marangoz</a>
            <a href="<?php echo base_url("main/iletisim")?>">İletişim</a>
            <?php
			$signed_in = ($this->session->userdata("logged_in") == '' ? false : true);
			if ($signed_in) {
                    echo "<a href='".base_url("/panel")."'>Admin paneli</a>";
                } else {
                    echo "<a href='".base_url("/admin/login")."'>Admin girişi</a>";
                }
            ?>
        </nav>

        <div class="buttons">
            <button>
                <i class="fas fa-bars"></i>
            </button>
        </div>
</header>
