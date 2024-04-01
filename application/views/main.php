<!DOCTYPE html>
<html lang="tr">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Azizoğulları İnşaat</title>
    <link rel="shortcut icon" href="<?php echo base_url('images/')?>logo.png" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo base_url('css/')?>style.css">
</head>

<body>
      <!--! header section start -->
    <header class="header">
        <a href="<?php echo base_url('')?>" class="logo">
            <img src="<?php echo base_url('images/')?>logo.png" alt="logo">
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
			if ($signed_in){
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
    <!--! header section end -->

    <!--! Anasayfa section start -->
<section class="Anasayfa">
    <div class="content">
        <h3>AZİZOĞULLARI İNŞAAT</h3>
    <p>
        Yapmış olduğu iş alanında en iyi firmalardan biri olan AZİZOĞULLARI İNŞAAT’ın ülke standartlarında en iyisini yapmak, yaşadığı bölge ve içinde bulunduğu topluluğa en iyi şekilde katkıda bulunmak, fayda sağlamaktır, bu doğrultuda, karlılığını çalışanları ve çalıştığı toplulukla birlikte paylaşmak, geliştirmek ve yükseltmektir. Taahhüt ettiği bütün işlerinde dürüstlük imajını koruyarak ilerlemektir.
    </p>
    </div>

</section>
    <!--! Anasayfa section end -->
    <!--! Projeler section start -->
    <section class="Projeler">
		<h1 class="heading"><span>Projeler</span></h1>
		<div class="box-container">
			<?php
			foreach ($projeler->result() as $proje) {
				echo "\n";
				echo "\t\t\t\t<div class='box'>\n";
				echo "\t\t\t\t\t<div class='box-head'>\n";
				echo "\t\t\t\t\t\t<img src='".($proje->image)."' alt='Projeler'>\n";
				echo "\t\t\t\t\t\t<h3>".($proje->header)."</h3>\n";
				echo "\t\t\t\t\t</div>\n";
				echo "\t\t\t\t</div>\n";
			}

			?>
		</div>
    </section>
    <!--! Projeler section end -->

    <!--! Marangoz section stat -->
    <section class="Projeler">
      <h1 class="heading"><span>Marangoz</span></h1>
      <div class="box-container">
		  <?php
		  foreach ($marangoz->result() as $marangoz_data) {
			  echo "\n";
			  echo "\t\t\t\t<div class='box'>\n";
			  echo "\t\t\t\t\t<div class='box-head'>\n";
			  echo "\t\t\t\t\t\t<img src='".($marangoz_data->image)."' alt='MARANGOZ'>\n";
			  echo "\t\t\t\t\t\t<h3>".($marangoz_data->header)."</h3>\n";
			  echo "\t\t\t\t\t</div>\n";
			  echo "\t\t\t\t</div>\n";
		  }

		  ?>
      </div>
    </section>
    <!--! Marangoz section end -->

    <!--! PVC section stat -->
    <section class="Projeler">
        <h1 class="heading"><span>PVC / Aliminyum / Cambalkon</span></h1>
        <div class="box-container">
			<?php
			foreach ($pvc->result() as $pvc_data) {
				echo "\n";
				echo "\t\t\t\t<div class='box'>\n";
				echo "\t\t\t\t\t<div class='box-head'>\n";
				echo "\t\t\t\t\t\t<img src='".($pvc_data->image)."' alt='PVC / ALEMİNYUM / CAMBALKON'>\n";
				echo "\t\t\t\t\t\t<h3>".($pvc_data->header)."</h3>\n";
				echo "\t\t\t\t\t</div>\n";
				echo "\t\t\t\t</div>\n";
			}

			?>
        </div>  
      </section>
      <!--! Marangoz section end -->

      <!--! Hkkımızda section start -->
      <section class="about">
        <h1 class="heading"> <span>Hakkımızda</span></h1>
        <div class="row">
            <div class="content">
				<?php
				foreach ($hakkimizda->result() as $hakkimizda_data) {
					echo "\n";
					echo "\t\t\t\t<div class='box'>\n";
					echo "\t\t\t\t\t<div class='box-head'>\n";
					echo "\t\t\t\t\t\t<h3>".($hakkimizda_data->header)."</h3>\n";
					echo "\t\t\t\t\t<p>$hakkimizda_data->body</p>\n";
					echo "\t\t\t\t\t</div>\n";
					echo "\t\t\t\t</div>\n";
				}
				?>
            </div>
        </div>
      </section>

      <!--! Hakkımızda section end -->

      <!--! Hizmetlerimiz section start -->
      <section class="Hizmetlerimiz">
		  <h1 class="heading"><span>Hizmetlerimiz</span></h1>
		  <div class="box-container">
			  <?php
			  foreach ($hizmetler->result() as $hizmetler_data) {
				  echo "\n";
				  echo "\t\t\t\t<div class='box'>\n";
				  echo "\t\t\t\t\t<div class='box-head'>\n";
				  echo "\t\t\t\t\t\t<h3>".($hizmetler_data->header)."</h3>\n";
				  echo "\t\t\t\t\t\t<div class='images'>\n";
				  echo "\t\t\t\t\t\t<img src='".($hizmetler_data->image)."' alt='Hizmetlerimiz'>\n";
				  echo "\t\t\t\t\t</div>\n";
				  echo "\t\t\t\t\t<p>$hizmetler_data->body</p>\n";
				  echo "\t\t\t\t\t</div>\n";
				  echo "\t\t\t\t</div>\n";
			  }
			  ?>
		  </div>
    </section>
      <!--! Hizmetlerimiz section end -->
     <!--! Bize Ulaşın section start -->
     <section class="Bizeulaşın">
        <h1 class="heading">Bize Ulaşın</h1>
        <div class="row">
            <iframe 
            class="map"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12602.995831145023!2d27.83072825261182!3d37.84276255148873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b92b6791880ac9%3A0x2478c5d1167a9ffd!2zS3VydHVsdcWfLCAyMDI2LiBTay4gTm86MTEsIDA5MDIwIEF5ZMSxbiBNZXJrZXovQXlkxLFu!5e0!3m2!1str!2str!4v1702544253207!5m2!1str!2str" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <form action="<?php echo base_url("Contacts/Save")?>" method="post">
                <h3>Bize Ulaşın</h3>
                <div class="inputBox">
                    <i class="fas fa-user"></i>
                    <input type="text" name="name" placeholder="İsim">
                </div>
                <div class="inputBox">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" placeholder="email">
                </div>
                <div class="inputBox">
                    <i class="fas fa-phone"></i>
                    <input type="number" name="phone" placeholder="Numara">
                </div>
                <input type="submit" class="btn" value="Gönder">
            </form>
        </div>
     </section>
     <!--! Bizeulaşın section end -->







</body>

</html>
