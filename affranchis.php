<?php require 'header.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.core.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.theme.min.css">
    <link rel="stylesheet" href="films.css">
</head>
<body>

    <div class="conatainer-fluid">
        <h1 style="text-align:center;">Les affranchis</h1>
        </div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <img src="./img/LES-AFFRANCHIS.jpg" alt="les affranchis" class="img-fluid" style="max-width:100%">
                        <img src="./img/LES-AFFRANCHIS.jpg" alt="les affranchis" class="img-fluid" style="max-width:100%">
                        <img src="./img/LES-AFFRANCHIS.jpg" alt="les affranchis" class="img-fluid" style="max-width:100%">
                        <img src="./img/LES-AFFRANCHIS.jpg" alt="les affranchis" class="img-fluid" style="max-width:100%">
                    </div>
                    <div class="col">
                    L'histoire d'Henry Hill et de sa vie dans la mafia, couvrant ses relations avec son épouse Karen Hill et ses partenaires de la mafia Jimmy Conway et Tommy DeVito dans le syndicat du crime italo-américain. 
                    <br>
                    <strong>Acteur principal : Robert De Niro. Joe Pesci. Ray Liotta</strong>
                    </div>
                </div>
            </div>
            <div class="glide" style="margin-top:450px;">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                    <li class="glide__slide" style="text-align:center;"><a href="./retourverslefuture.php"><img src="./img/retourverslefuture.jpg" width="200px;" height="300px;" style="border-radius: 10px"></a></li>
                <li class="glide__slide" style="text-align:center;"><a href="./halloween.php"><img src="./img/halloween.webp" width="200px;" height="300px;" style="border-radius: 10px"></a></li>
                <li class="glide__slide" style="text-align:center;"><a href="./affranchis.php"><img src="./img/LES-AFFRANCHIS.jpg" width="200px;" height="300px;" style="border-radius: 10px"></a></li>
                <li class="glide__slide" style="text-align:center;"><a href="./reservoir.php"><img src="./img/reservoirdogs.jpg" width="200px;" height="300px;" style="border-radius: 10px"></a></li>
                <li class="glide__slide" style="text-align:center;"><a href="./highlander.php"><img src="./img/highlander.jpg" width="200px;" height="300px;" style="border-radius: 10px"></a></li>
                <li class="glide__slide" style="text-align:center;"><a href="./spiderman.php"><img src="./img/spiderman3.jpg" width="200px;" height="300px;" style="border-radius: 10px"></a></li>
                <li class="glide__slide" style="text-align:center;"><a href="./scanners.php"><img src="./img/scanners.jpg" width="200px;" height="300px;" style="border-radius: 10px"></a></li>
                <li class="glide__slide" style="text-align:center;"><a href="./johnwick.php"><img src="./img/johnwick.webp" width="200px;" height="300px;" style="border-radius: 10px"></a></li>
                <li class="glide__slide" style="text-align:center;"><a href="./lotr.php"><img src="./img/LOTR.jpg" width="200px;" height="300px;" style="border-radius: 10px"></a></li>      
                    </ul>
                </div>
            <div class="glide__arrows" data-glide-el="controls">
                <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><i class="fa-solid fa-arrow-left"></i></button>
                <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
        </div>

     </div>
    
<script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
<script>
    const myVar = {

        type: 'carousel',
        perView: 4,
        breakpoints: {
            1100: {
            perView: 3
            },
            1000: {
            perView: 3
            },
            900: {
            perView: 3
            },
            800: {
            perView: 2
            },
            600: {
            perView: 1
            }

        }
    }
  new Glide('.glide',myVar).mount()
</script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>
</html>