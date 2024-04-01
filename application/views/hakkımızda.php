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
           <!--! Hkkımızda section start -->
           <section class="about">
            <h1 class="heading"> <span>Hakkımızda</span></h1>
            <div class="row">
                <div class="content">
                    <h3><?php echo $header?></h3>
                    <p><?php echo $body?></p>
                </div>
            </div>
          </section>

          <!--! Hakkımızda section end -->
    </body>
</html>
