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
        <!--! Projeler section start -->
        <section class="Projeler">
            <h1 class="heading"><span>Biten Projeler</span></h1>
            <div class="box-container">
                <?php
                    foreach ($data->result() as $proje) {
                        echo "\n";
                        echo "\t\t\t\t<div class='box'>\n";
                        echo "\t\t\t\t\t<div class='box-head'>\n";
                        echo "\t\t\t\t\t\t<img src='../".($proje->image)."' alt='Projeler'>\n";
                        echo "\t\t\t\t\t\t<h3>".($proje->header)."</h3>\n";
                        echo "\t\t\t\t\t</div>\n";
                        echo "\t\t\t\t</div>\n";
                    }
                ?>
            </div>
        </section>
        <!--! Projeler section end -->
    </body>
</html>
