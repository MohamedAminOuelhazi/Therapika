<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="css/css.css" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
 
<script>
            jQuery(function(){
                $(function () {
                    $(window).scroll(function () {
                        if ($(this).scrollTop() > 200 ) { 
                            $('#scrollUp').css('right','10px');
                        } else { 
                            $('#scrollUp').removeAttr( 'style' );
                        }
 
                    });
                });
            });
</script>

</head>
<body>
<nav class="navbar navbar-expand-md justify-content-center" style="background-color: #e3f2fd; ">
<div class="container-fluid ">
    <a class="navbar-brand " href="#">Therapika</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup" >

    
    <div class="navbar-nav  " >
        <a class="nav-link active" aria-current="page" href="#" style="text-align: center;">Accueil</a>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" style="text-align: center;" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Services
        </a>
        <ul class="dropdown-menu" style="text-align: center;" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" style="text-align: center;"style="background-color: #e3f2fd;" href="#">Présentielle</a></li>
            <li><a class="dropdown-item" style="text-align: center;"style="background-color: #e3f2fd;" href="#">En ligne</a></li>
        </ul>
        </li>
        <a class="nav-link" style="text-align: center;" href="#">Formation</a>
        <a class="nav-link" style="text-align: center;" href="#">Blog</a>
        <a class="nav-link" style="text-align: center;" href="#">Témoignages</a>
        <a class="nav-link" style="text-align: center;" href="#">Galeries De Ressources</a>
        <a class="nav-link" style="text-align: center;" href="#faq">FAQ</a>
        <a class="nav-link" style="text-align: center;" href="#contact">Contact</a>
        <a class="nav-link" style="text-align: center;" href="/doctor/show">Médecin</a>
    </div>
    
    </div>
    

    <div class="d-flex justify-content-end" style="align: center;" > 
        <button type="button" class="btn btn-info justify-content-end " data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: #e3f2fd; margin-right: 10px; ">Sign Up</button>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sign Up</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            
            <form>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="form-outline">
                    <label class="form-label" for="form3Example1m">First name</label>
                    <input type="text" id="form3Example1m" class="form-control form-control-lg" required />
                    
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="form-outline">
                    <label class="form-label" for="form3Example1n">Last name</label>
                    <input type="text" id="form3Example1n" class="form-control form-control-lg" required />
                    
                    </div>
                </div>
                </div>

                <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="form-outline">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                <div class="col-auto">
                <label for="inputPassword6" class="col-form-label">Password</label>
                </div>
                <div class="col-auto">
                    <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" required >
                </div>
                <div class="col-auto">
                    <span id="passwordHelpInline" class="form-text">
                    Must be 8-20 characters long.
                    </span>
                </div>
                </div>
                </div>

                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example8">Address</label>
                <input type="text" id="form3Example8" class="form-control form-control-lg" required />
                
                </div>
                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example9">Téléphone</label>
                <input type="tel" id="form3Example9" class="form-control form-control-lg" required />
                </div>

                <div class="d-md-flex justify-content-start align-items-center mb-4 py-2" required >

                <h6 class="mb-0 me-4">Gender: </h6>

                <div class="form-check form-check-inline mb-0 me-4">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender"
                    value="option1"  />
                    <label class="form-check-label" for="femaleGender">Female</label>
                </div>

                <div class="form-check form-check-inline mb-0 me-4">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender"
                    value="option2" />
                    <label class="form-check-label" for="maleGender">Male</label>
                </div>

                </div>

                <div class="row">
                <div class="col-md-6 mb-4 ">
                    
                    <label for="pays" ><H6 class=""> Pays :</H6></label>
                    <select class="select"  id="pays" name="pays" required>
                    <option value="2">Tunisie</option>
                    <option value="3">Émirats arabes unis</option>
                    <option value="4">swisra</option>
                    </select>

                </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </div>
            </form>
        </div>
        </div>
        <button type="button" class="btn btn-outline-info justify-content-end" style="" >Login</button>
    </div>
    

    
</div>

</nav>

<section class=" justify-content-center justify-content-lg-between p-4 border-bottom">
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
<div class="carousel-inner">
    <div class="carousel-item active">
    <img src="img/img1.jpg" class="d-block w-100" alt="1">
    </div>
    <div class="carousel-item">
    <img src="img/img2.jpg" class="d-block w-100" alt="2">
    </div>
    <div class="carousel-item">
    <img src="img/img3.jpg" class="d-block w-100" alt="3">
    </div>
</div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
</button>
</div>
</section>


<div class="accordion-item">
    <div>
        <h1>hii</h1>
    </div>
</div>




<div class="card justify-content-center justify-content-lg-between p-4 border-bottom">
  <div class="card-header test font-weight-bold" style="text-align: center; ">
    A B O U T 
  </div>
  <div class="card-body">
    <h5 class="card-title">Therapika</h5>
    <p class="card-text">Plongez dans un univers de guérison et de bien-être intégral, où les frontières de la médecine traditionnelle et des approches alternatives se rejoignent harmonieusement. Bienvenue chez Therapika, la première plateforme internationale de médecine intégrative en Tunisie et en Afrique, où l'on cultive une vision multidimensionnelle du patient et de la maladie.</p>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#about">
    Pour En Savoir Plus
    </button>
    <!-- Modal -->
    <div class="modal fade  modal-xl" id="about" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">About : Therapika</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <div class="card">
            <div class="card-body">
            Nos fondements reposent sur les avancées scientifiques en neurosciences et la physique quantique, explorant les mystères du cerveau et du système nerveux jusqu'aux phénomènes subatomiques. Cette fusion unique nous permet de comprendre l'impact profond des processus mentaux, des émotions et des croyances sur la santé physique et émotionnelle de chaque individu.
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-body">
            Imaginez des thérapeutes et des conférenciers de renommée internationale, venus des quatre coins du monde, partageant leur sagesse et leur expertise lors de conférences, formations, stages, et même des retraites en présentiel ou en visioconférence. Découvrez des approches variées, allant de l'ostéopathie et la fasciathérapie à l'acupuncture,  la micro-kinésithérapie, en passant par les techniques psycho-cognitivo-comportementales, tel que: la psycho-pédagogie-perceptive, l’hypnose, la diététique clinique avancé .
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-body">
            Chez Therapika, nous croyons que l'être humain est une union entre le corps, l'esprit et son environnement. Notre approche intégrative comble le fossé entre la médecine conventionnelle et les alternatives, car nous savons que chaque individu est unique, méritant une attention spécifique pour atteindre un bien-être global.
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-body">
            Explorez la partie physique de nos thérapies, où nous mettons l'accent sur des traitements adaptés à vos besoins :  thérapie manuelle,exercices physiques ciblés, acupuncture et bien plus encore. Notre objectif est de vous aider à retrouver l'équilibre physique optimal, réduire la douleur, améliorer la mobilité et favoriser la guérison.
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-body">
            Plongez ensuite dans notre partie psycho-cognitive, où nos experts vous accompagnent dans la gestion du stress, de l'anxiété et de la dépression, avec des approches basées sur la thérapie cognitive-comportementale. Vous découvrirez comment identifier et modifier les schémas de pensée négatifs pour renforcer votre résilience émotionnelle, confiance en soi et estime de soi.
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-body">
            Enfin, explorez la dimension spirituelle de nos thérapies, où nous vous offrons un espace sécurisé pour explorer la méditation, la pleine conscience, le développement personnel et la quête de sens. Car nous savons que la connexion intérieure, la paix intérieure et l'épanouissement spirituel jouent un rôle crucial dans votre processus de guérison et de croissance personnelle.
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-body">
            Therapika, c'est bien plus qu'une entreprise innovante, c'est une communauté mondiale unie par la quête du bien-être global. Car comme le disait le médecin persan Avicenne, "Dans sa diversité, la terre est une et les hommes sont frères et voisins". Alors, rejoignez-nous sur les côtes de Carthage, riche de 13 siècles d'histoire entre Orient et Occident, où l'hospitalité et la culture nous guident depuis notre fondation en 2008.
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-body">
            Préparez-vous à vivre une expérience inoubliable avec Therapika, où la médecine intégrative et les thérapeutes venant des quatre coins du monde se rejoignent pour vous offrir le meilleur de la guérison et du bien-être global !
        </div>
        </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-info" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
    </div>
</div>
</div>
<!--Section: FAQ-->
<div class="card justify-content-center justify-content-lg-between p-4 border-bottom" id="faq" >
  <div class="">
  <h1 style="text-align: center; color :#e3f2fd ; ">FAQ</h1>
  <h2 style="text-align: center;">Frequently asked questions</h2>
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
    <section class=" accordion-item justify-content-center justify-content-lg-between p-4 border-bottom">

<div class="accordion" id="accordionPanelsStayOpenExample">
<div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
        Accordion Item #1
    </button>
    </h2>
    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
    <div class="accordion-body">
        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
    </div>
    </div>
</div>

<div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
        Accordion Item #2
    </button>
    </h2>
    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
    <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
    </div>
    </div>
</div>
<div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
        Accordion Item #3
    </button>
    </h2>
    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
    <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
    </div>
    </div>
</div>
</div>
</section>      

    </blockquote>
</div>
</div>


<!--end section -->






<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
<!-- Section: Social media -->
<section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
    <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
    <a href="" class="me-4 text-reset">
        <i class="bi bi-facebook">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
<path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
</svg>
        </i> 
        
    </a>
    <a href="" class="me-4 text-reset">
        <i class="bi bi-instagram">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
<path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
</svg>
        </i>
    </a>
    <a href="" class="me-4 text-reset">
        <i class="bi bi-linkedin">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
<path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
</svg>
        </i>
    </a>

    </div>
    <!-- Right -->
</section>
<!-- Section: Social media -->

<!-- Section: Links  -->
<section class="">
    <div class="container text-center text-md-start mt-5">
    <!-- Grid row -->
    <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
        <!-- Content -->
        <h6 class="text-uppercase fw-bold mb-4">
        <i class="fas fa-gem me-3"></i>Therapika
        </h6>
        <p>
        Plongez dans un univers de guérison et de bien-être intégral, où les frontières de la médecine traditionnelle et des approches alternatives se rejoignent harmonieusement. Bienvenue chez Therapika, la première plateforme internationale de médecine intégrative en Tunisie et en Afrique, où l'on cultive une vision multidimensionnelle du patient et de la maladie.
        </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
        <!-- Links -->
        <h6 class="text-uppercase fw-bold mb-4">
            Services
        </h6>
        <p>
            <a href="#!" class="text-reset">Présentielle</a>
        </p>
        <p>
            <a href="#!" class="text-reset">En Ligne</a>
        </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
        <!-- Links -->
        <h6 class="text-uppercase fw-bold mb-4">
            Barre de navigation
        </h6>
        <p>
            <a href="#!" class="text-reset">Formation</a>
        </p>
        <p>
            <a href="#!" class="text-reset">Blog</a>
        </p>
        <p>
            <a href="#!" class="text-reset">Témoignages</a>
        </p>
        <p>
            <a href="#!" class="text-reset">Galeries De Ressources</a>
        </p>
        <p>
            <a href="#!" class="text-reset">FAQ</a>
        </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
        <!-- Links -->
        <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
        <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
        <p>
        <i class="fas fa-envelope me-3"></i>
            contact@Therapika.com
        </p>
        <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
        <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
    </div>
    <!-- Grid row -->
    </div>
</section>
<!-- Section: Links  -->

<!-- Copyright -->
<div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="">Therapika.com</a>
</div>
<!-- Copyright -->
</footer>
<!-- Footer -->



<div id="scrollUp">
<a href="#top"><img src="img/DoubleUp.png" alt="image"></a>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>

