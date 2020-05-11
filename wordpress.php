<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link href=" https://bootswatch.com/4/journal/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="app.css">
<div class="menu"> 
</head>
<body>

<div class="d-flex justify-content-between">
    <nav class="navbar navbar-expand-lg navbar-light " id="menu">
        <button id="btn_nav" class="navbar-toggler"  type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">        
        <div>
            <p class="bar_btn">&#8212;</p>
            <p class=" mot-menu ">menu</p>
            <p class="bar_btn">&#8212;</p>
            </div>
        </button>

        
        <div class="collapse navbar-collapse.show" id="navbarNav">
            <ul class="navbar-nav d-flex  flex-column">
                <a class="nav-item nav-link  " href="index.php #présentation">Présentation</a>
                <a class="nav-item nav-link " href="index.php #compétences">Compétences</a>
                <a class="nav-item nav-link " href="index.php #réalisations">Réalisations</a>
                <a class="nav-item nav-link " href="index.php #parcours">Parcours</a>
                <a class="nav-item nav-link " href="index.php #contact">contact</a>
            </ul>
        
        </div>        
    </nav>
</div>

<div class="container p-0">

<div class="container-nav">
        <nav class="d-flex justify-content-between">
            <div class="font-weight-bolder nav_contact"><a href="index.php #header">Marylène Mougeot</a></div>

            <div class="nav_contact_mail "><a href="index.php #contact">me contacter<img
                        src="https://img.icons8.com/carbon-copy/100/000000/important-mail.png" class="img-mail "></a>
            </div> 
        </nav>
    </diV>

    <div class="scrolling-box">    
 
    <div class="d-flex justify-content-center text-uppercase font-weight-bold fts3 mb-2 pt-5 title-partie">           
        <p><a href="index.php #bootstrap ">Retouner à la partie réalisations</a> <br> <span class="d-flex justify-content-center word-spacing-1"> &#47; &#47; &#47;</span></p>            
    </div>

        <div class=" d-flex justify-content-around pt-7">

            <div class="col- col-sm- col-md- col-lg- col-xl-2">
                <p class="fts5 mt-4 "><span class="border-bottom border-dark">Wordpress</span></p>

                <p class="fts5 pt-7 "><a href="projet_wordpress.php">Mes projets</a></p>
            </div>

            <div class="col- col-sm- col-md- col-lg- col-xl-6">
                <p class="fts6 mt-4 text-center">Quelques aperçus de mes projets</p>
                <div class="slider-wrapper">
                    <div class="slider-item blueasy">
                        <img src="image/lovehouse.jpg" class="img-slider  border border-dark">
                    </div>
                   
                </div>
                <nav class="slider-nav text-center m-0 p-0">
                    <button class="slider-previous">
                        Précédent
                    </button>
                    <button class="slider-next">
                        Suivant
                    </button>
                    <button class="slider-restart">
                        Reprendre
                    </button>
                </nav>
            </div>


            <div class="d-flex justify-content-end pt-7 pr-5">
                <div class="nav-competence">
                    <div class=" d-flex justify-content-end fts5 ">
                        <button class="button-bootstrap"><a href="index.php #bootstrap"><span>B</span></a></button>
                    </div>

                    <div class=" d-flex justify-content-end fts5">
                        <button class="button-javascript"><a href="javascript.php"><span>J</span></a></button>
                    </div>

                    <div class=" d-flex justify-content-end fts5">
                        <button class="button-php"><a href="php.php"><span>P</span></a></button>
                    </div>

                    <div class=" d-flex justify-content-end fts5">
                        <button class="button-symfony"><a href="symfony.php"><span>S</span></a></button>
                    </div>

                    <div class=" d-flex justify-content-end fts5">
                        <button class="button-wordpress"><a href="wordpress.php"><span>W</span></a></button>
                    </div>
                </div>
            </div>   
        </div>
    </div>    
</div>
 

<script>

    let prevBtn = document.querySelector('.slider-previous');
    let nextBtn = document.querySelector('.slider-next');
    let sliderWrapper = document.querySelector('.slider-wrapper')
    let restart = document.querySelector('.slider-restart')
    let slide = document.querySelectorAll('.slider-item');
    let sliderLength = slide.length;
    let counter = 0;
    let delay = setInterval(sliding, 1000)

    slide[counter].classList.add('active');

    //BTN SUIVANT
    nextBtn.addEventListener('click', () => {
        clearInterval(delay);
        slide[counter].classList.remove('active');
        counter++;
        if (counter >= sliderLength) {
            counter = 0;
        }
        slide[counter].classList.add('active');
    });

    //BTN PRECEDENT
    prevBtn.addEventListener('click', () => {
        clearInterval(delay);
        slide[counter].classList.remove('active');
        counter--;
        if (counter < 0) {
            counter = sliderLength - 1;
        }
        slide[counter].classList.add('active');
    });

    //FUNCTION AUTOSLIDE
    function sliding() {
        slide[counter].classList.remove('active');
        counter++;
        if (counter >= sliderLength) {
            counter = 0;
        }
        slide[counter].classList.add('active');
    }

    //SURVOL
    sliderWrapper.addEventListener('mouseenter', () => {
        clearInterval(delay);
    })

    //ON QUITTE LE SURVOL
    sliderWrapper.addEventListener('mouseleave', () => {
        delay = setInterval(sliding, 1000)
    })

    //BTN RESTART
    restart.addEventListener('click', () => {
        delay = setInterval(sliding, 1000)
    })
</script>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script type="text/javascript">$('select').formSelect();</script>

</body>
</html>