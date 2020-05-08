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

<div class="menu">   

    <nav class="navbar navbar-expand-lg navbar-light " id=menu>
        <button id="btn_nav" class="navbar-toggler"  type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse.show collapse show link_menu" id="navbarNavAltMarkup">
            <ul class="navbar-nav d-flex flex-column ">
                <a class="nav-item nav-link  " href="#présentation">Présentation</a>
                <a class="nav-item nav-link " href="#compétences">Compétences</a>
                <a class="nav-item nav-link " href="#réalisations">Réalisations</a>
                <a class="nav-item nav-link " href="#parcours">Parcours</a>
                <a class="nav-item nav-link " href="#contact">contact</a>
            </ul>
        </div>

        <div class="d-flex mot-menu">menu</div>
    </nav>
</div>

<div class="container p-0">
   
    <div class="scrolling-box">
    
        <div class=" d-flex justify-content-around pt-7">

            <div class="col- col-sm- col-md- col-lg- col-xl-2">
                <p class="fts5 mt-4 "><span class="border-bottom border-dark">Bootstrap</span></p>

                <p class="fts5 pt-7 "><a href="{{ path('projet_bootstrap') }}">Mes projets</a></p>
            </div>

            <div class="col- col-sm- col-md- col-lg- col-xl-6">
                <p class="fts6 mt-4 text-center">Quelques aperçus de mes projets</p>
                <div class="slider-wrapper">
                    <div class="slider-item blueasy">
                        <img src="image/blueasy.jpg" class="img-slider  border border-dark">
                    </div>
                    <div class="slider-item snow">
                        <img src="image/snow.jpg" class="img-slider  border border-dark">
                    </div>
                    <div class="slider-item burger">
                        <img src="image/burger.jpg" class="img-slider  border border-dark">
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
                        <button class="button-javascript"><a href="{{ path('javascript') }}"><span>J</span></a></button>
                    </div>

                    <div class=" d-flex justify-content-end fts5">
                        <button class="button-php"><a href="{{ path('php') }}"><span>P</span></a></button>
                    </div>

                    <div class=" d-flex justify-content-end fts5">
                        <button class="button-symfony"><a href="{{ path('symfony') }}"><span>S</span></a></button>
                    </div>

                    <div class=" d-flex justify-content-end fts5">
                        <button class="button-wordpress"><a href="{{ path('wordpress') }}"><span>W</span></a></button>
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