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
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">  
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
        <!--! header section start -->
        <?php $this->load->view("shared_files/_navbar")?>
        <!--! header section end -->
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
			<?php if(isset($succes)) { ?>
				<div class="succes">
					<?php echo $succes; ?>
				</div>
			<?php } ?>
        </div>
     </section>
     <!--! Bizeulaşın section end -->
