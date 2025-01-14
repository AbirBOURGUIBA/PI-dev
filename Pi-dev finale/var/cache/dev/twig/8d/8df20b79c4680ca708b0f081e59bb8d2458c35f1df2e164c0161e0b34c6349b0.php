<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* baseFront.html.twig */
class __TwigTemplate_144e92e59854d6d557f2ea686ddb4b7b51b54cce72cc0752184df880c0919370 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseFront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseFront.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <title>InstaPark</title>
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
  <meta content=\"\" name=\"keywords\">
  <meta content=\"\" name=\"description\">

  <!-- Favicons -->
 <link rel=\"icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon.png"), "html", null, true);
        echo "\" type=\"image/x-icon\">

  <!-- Google Fonts -->
  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800\" rel=\"stylesheet\">

  <!-- Bootstrap CSS File -->
  <link href=\"../assets/lib/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

  <!-- Libraries CSS Files -->
  <link href=\"../assets/lib/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\">
  <link href=\"../assets/lib/animate/animate.min.css\" rel=\"stylesheet\">
  <link href=\"../assets/lib/venobox/venobox.css\" rel=\"stylesheet\">
  <link href=\"../assets/lib/owlcarousel/assets/owl.carousel.min.css\" rel=\"stylesheet\">

  <!-- Main Stylesheet File -->
  <link href=\"../assets/css/style.css\" rel=\"stylesheet\">

 
</head>

<body class=\"light\">


  <!--==========================
    Header
  ============================-->
  <header id=\"header\">
    <div class=\"container\">

      <div id=\"logo\" class=\"pull-left\">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href=\"#main\">C<span>o</span>nf</a></h1>-->
        <a href=\"#intro\" class=\"scrollto\"><img src=\"../assets/img/logo.png\" alt=\"\" title=\"\"></a>
      </div>

      <nav id=\"nav-menu-container\">
        <ul class=\"nav-menu\">
          <li class=\"menu-active\"><a href=\"#intro\">Acceuil</a></li>
          <li><a href=\"#about\">A propos</a></li>
          <li><a href=\"#speakers\">Parking</a></li>
         
          <li><a href=\"#venue\">Localisation</a></li>
          <li><a href=\"#inscrition\">Inscription</a></li>
        
          <li><a href=\"#sponsors\">Sponsors</a></li>
          <li><a href=\"#contact\">Contact</a></li>
          <li><a href=\"/equipe\">Notre équipe</a></li>
          <li class=\"buy-tickets\"><a href=\"#buy-tickets\">Paiement</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id=\"intro\">
    <div class=\"intro-container wow fadeIn\">
      <h1 class=\"mb-4 pb-0\"><span>InstaPark</span><br>Pour un parking instantanné</h1>
      <p class=\"mb-4 pb-0\"> un special remerciement pour notre sponsoring </p>
      <a href=\"https://www.youtube.com/watch?v=fJ9rUzIMcZQ\" class=\"venobox play-btn mb-4\" data-vbtype=\"video\"
        data-autoplay=\"true\"></a>
      <a href=\"/equipe\" class=\"about-btn scrollto\">A propos notre equipe</a>
    </div>
  </section>

  <main id=\"main\">

    <!--==========================
      About Section
    ============================-->
   <section id=\"about\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-6\">
            <h2>A propos InstaPark</h2>
            <p>Avec INSTAPARK vous pouvez payer pour un stationnement en rue et dans les parking couverts . Plus besoin de chercher de l’argent et de courir à l’horodateur. Payer sans argent ou ticket. Et si jamais par malheur votre voiture se fait enlever par la fourrière, pas de d'inquiétude avec l'app INSTAPARK vous pourrez savoir dans quelle fourrière elle a été emmener et même payer l'amande seulement en vous connectant a notre application en ligne . 
            </p>
          </div>
        
         
        </div>
      </div>
       <!--==========================
     DARK MODE
    ============================-->
        <div class=\"btn-toggle\">Go Dark</div>
    </section> 

    <!--==========================
      Speakers Section
    ============================-->
    <section id=\"speakers\" class=\"wow fadeInUp\">
      <div class=\"container\">
        <div class=\"section-header\">
          <h2> Les Parking</h2>
          <p>Nos parking disponibles</p>
        </div>

        <div class=\"row\">
          <div class=\"col-lg-4 col-md-6\">
            <div class=\"speaker\">
              <img src=\"../assets/img/speakers/1.jpg\" alt=\"Speaker 1\" class=\"img-fluid\">
              <div class=\"details\">
                <h3><a href=\"/speakers-details\">Tunis,Centre ville</a></h3>
                <p>Fondé le 29-03-2020</p>
                
              </div>
            </div>
          </div>
          <div class=\"col-lg-4 col-md-6\">
            <div class=\"speaker\">
              <img src=\"../assets/img/speakers/2.jpg\" alt=\"Speaker 2\" class=\"img-fluid\">
              <div class=\"details\">
                <h3><a href=\"/speakers-details\">Tunis,Lac2</a></h3>
                <p>Fondé le 21-05-2020</p>
               
              </div>
            </div>
          </div>
          <div class=\"col-lg-4 col-md-6\">
            <div class=\"speaker\">
              <img src=\"../assets/img/speakers/3.jpg\" alt=\"Speaker 3\" class=\"img-fluid\">
              <div class=\"details\">
                <h3><a href=\"/speakers-details\">La Manouba</a></h3>
                <p>Fondé le 19-10-2020</p>
              
              </div>
            </div>
          </div>
          <div class=\"col-lg-4 col-md-6\">
            <div class=\"speaker\">
              <img src=\"../assets/img/speakers/4.jpg\" alt=\"Speaker 4\" class=\"img-fluid\">
              <div class=\"details\">
                <h3><a href=\"/speakers-details\">Ben Arous</a></h3>
                <p>Fondé le 01-09-2020</p>
              
              </div>
            </div>
          </div>
          <div class=\"col-lg-4 col-md-6\">
            <div class=\"speaker\">
              <img src=\"../assets/img/speakers/5.jpg\" alt=\"Speaker 5\" class=\"img-fluid\">
              <div class=\"details\">
                <h3><a href=\"/speakers-details\">Ariana,Manzah 5</a></h3>
                <p>Fondé le 17-12-2020</p>
           
              </div>
            </div>
          </div>
          <div class=\"col-lg-4 col-md-6\">
            <div class=\"speaker\">
              <img src=\"../assets/img/speakers/6.jpg\" alt=\"Speaker 6\" class=\"img-fluid\">
              <div class=\"details\">
                <h3><a href=\"/speakers-details\">L'aouina</a></h3>
                <p>Fondé le 14-02-2022</p>
               
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>

    
        </div>

      </div>

    </section>

    <!--==========================
      Venue Section
    ============================-->
    <section id=\"venue\" class=\"wow fadeInUp\">

      <div class=\"container-fluid\">

        <div class=\"section-header\">
          <h2>localisation</h2>
          <p>Bienvenue chez nous !</p>
        </div>

        <div class=\"row no-gutters\">
          <div class=\"col-lg-6 venue-map\">
            <iframe src=\"https://maps.google.com/maps?q=Esprit+Prépa&t=&z=13&ie=UTF8&iwloc=&output=embed\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
          </div>

          <div class=\"col-lg-6 venue-info\">
            <div class=\"row justify-content-center\">
              <div class=\"col-11 col-lg-8\">
                <h3>Esprit, Tunis</h3>
                <p>Se former autrement .</p>
              </div>
            </div>
          </div>
        </div>

      </div>

      

    </section>

    
    <!--==========================
      Gallery Section
    ============================-->
    <section id=\"gallery\" class=\"wow fadeInUp\">

      <div class=\"container\">
        <div class=\"section-header\">
          <h2>Equipe</h2>
          <p>Notre équipe</p>
        </div>
      </div>

      <div class=\"owl-carousel gallery-carousel\">
        <a href=\"img/gallery/1.jpg\" class=\"venobox\" data-gall=\"gallery-carousel\"><img src=\"../assets/img/gallery/1.jpg\" alt=\"\"></a>
        <a href=\"img/gallery/2.jpg\" class=\"venobox\" data-gall=\"gallery-carousel\"><img src=\"../assets/img/gallery/2.jpg\" alt=\"\"></a>
        <a href=\"img/gallery/3.jpg\" class=\"venobox\" data-gall=\"gallery-carousel\"><img src=\"../assets/img/gallery/3.jpg\" alt=\"\"></a>
        <a href=\"img/gallery/4.jpg\" class=\"venobox\" data-gall=\"gallery-carousel\"><img src=\"../assets/img/gallery/4.jpg\" alt=\"\"></a>
        <a href=\"img/gallery/5.jpg\" class=\"venobox\" data-gall=\"gallery-carousel\"><img src=\"../assets/img/gallery/5.jpg\" alt=\"\"></a>
        <a href=\"img/gallery/6.jpg\" class=\"venobox\" data-gall=\"gallery-carousel\"><img src=\"../assets/img/gallery/6.jpg\" alt=\"\"></a>
        <!--========================== <a href=\"img/gallery/7.jpg\" class=\"venobox\" data-gall=\"gallery-carousel\"><img src=\"img/gallery/7.jpg\" alt=\"\"></a>
        <a href=\"img/gallery/8.jpg\" class=\"venobox\" data-gall=\"gallery-carousel\"><img src=\"img/gallery/8.jpg\" alt=\"\"></a> ============================-->
      </div>

    </section>

    <!--==========================
      Sponsors Section
    ============================-->
    <section id=\"sponsors\" class=\"section-with-bg wow fadeInUp\">

      <div class=\"container\">
        <div class=\"section-header\">
          <h2>Sponsors</h2>
        </div>

        <div class=\"row no-gutters sponsors-wrap clearfix\">

          <div class=\"col-lg-3 col-md-4 col-xs-6\">
            <div class=\"sponsor\">
              <img src=\"../assets/img/sponsors/1.png\" class=\"img-fluid\" alt=\"\">
            </div>
          </div>
          
          <div class=\"col-lg-3 col-md-4 col-xs-6\">
            <div class=\"sponsor\">
              <img src=\"../assets/img/sponsors/2.png\" class=\"img-fluid\" alt=\"\">
            </div>
          </div>
        
          <div class=\"col-lg-3 col-md-4 col-xs-6\">
            <div class=\"sponsor\">
              <img src=\"../assets/img/sponsors/3.png\" class=\"img-fluid\" alt=\"\">
            </div>
          </div>
          
          <div class=\"col-lg-3 col-md-4 col-xs-6\">
            <div class=\"sponsor\">
              <img src=\"../assets/img/sponsors/4.png\" class=\"img-fluid\" alt=\"\">
            </div>
          </div>
          
          <div class=\"col-lg-3 col-md-4 col-xs-6\">
            <div class=\"sponsor\">
              <img src=\"../assets/img/sponsors/5.png\" class=\"img-fluid\" alt=\"\">
            </div>
          </div>
        
          <div class=\"col-lg-3 col-md-4 col-xs-6\">
            <div class=\"sponsor\">
              <img src=\"../assets/img/sponsors/6.png\" class=\"img-fluid\" alt=\"\">
            </div>
          </div>
          
          <div class=\"col-lg-3 col-md-4 col-xs-6\">
            <div class=\"sponsor\">
              <img src=\"../assets/img/sponsors/7.png\" class=\"img-fluid\" alt=\"\">
            </div>
          </div>
          
          <div class=\"col-lg-3 col-md-4 col-xs-6\">
            <div class=\"sponsor\">
              <img src=\"../assets/img/sponsors/8.png\" class=\"img-fluid\" alt=\"\">
            </div>
          </div>

        </div>
        </div>

      </div>

    </section>

    <!--==========================
      F.A.Q Section
    ============================-->
    <section id=\"faq\" class=\"wow fadeInUp\">

      <div class=\"container\">

        <div class=\"section-header\">
          <h2>Questions&Réponses </h2>
        </div>

        <div class=\"row justify-content-center\">
          <div class=\"col-lg-9\">
              <ul id=\"faq-list\">

                <li>
                  <a data-toggle=\"collapse\" class=\"collapsed\" href=\"#faq1\">D’où on a inspiré  l’idée ?
                    <i class=\"fa fa-minus-circle\"></i></a>
                  <div id=\"faq1\" class=\"collapse\" data-parent=\"#faq-list\">
                    <p>
                      Manque d’organisation des voitures 
                    </p>
                    <br>
                    <p>
                      Difficulté d’identifier le parc de la voiture 
                    </p>
                    <br>
                    <p>
                      Problèmes de stationnement

                    </p>
                    <br>
                    <p>
                      Pas de communication entre les chauffeurs des camions-grues et le propriétaire de la voiture 


                    </p>
                    <br>
                    <p>
                      Manque d’information sur la  localisation de la voiture 


                    </p>
                  </div>
                </li>
      
                <li>
                  <a data-toggle=\"collapse\" href=\"#faq2\" class=\"collapsed\">Solution ?
                    <i class=\"fa fa-minus-circle\"></i></a>
                  <div id=\"faq2\" class=\"collapse\" data-parent=\"#faq-list\">
                    <p>
                      Assurance que le véhicule est enlevée par la police municipale .

                    </p>
                    <br>
                    <p>
                      Savoir la localisation du véhicule.

                    </p>
                    <br>
                    <p>
                      Prise de connaissance de l’amande exigée et le moyen de son paiement éléctronique .


                    </p>
                  </div>
                </li>
      
                <li>
                  <a data-toggle=\"collapse\" href=\"#faq3\" class=\"collapsed\"> Où ? <i class=\"fa fa-minus-circle\"></i></a>
                  <div id=\"faq3\" class=\"collapse\" data-parent=\"#faq-list\">
                    <p>
le Grand Tunis .                    </p>
                  </div>
                </li>
      
                <li>
                  <a data-toggle=\"collapse\" href=\"#faq4\" class=\"collapsed\">Payante ? <i class=\"fa fa-minus-circle\"></i></a>
                  <div id=\"faq4\" class=\"collapse\" data-parent=\"#faq-list\">
                    <p>
Non , c'est gratuit . Mais il y'a des achat dans l'application .                    </p>
                  </div>
                </li>
      
               
              </ul>
          </div>
        </div>

      </div>

    </section>

    <!--==========================
      Subscribe Section
    ============================-->
    <section id=\"subscribe\">
      <div class=\"container wow fadeInUp\">
        <div class=\"section-header\">
          <h2>Newsletter</h2>
          <p>Enregistrer vous ! .</p>
        </div>

        <form method=\"POST\" action=\"#\">
          <div class=\"form-row justify-content-center\">
            <div class=\"col-auto\">
              <input type=\"text\" class=\"form-control\" placeholder=\"Enter your Email\">
            </div>
            <div class=\"col-auto\">
              <button type=\"submit\">S'inscrire</button>
            </div>
          </div>
        </form>

      </div>
    </section>

    <!--==========================
      Buy Ticket Section
    ============================-->
    <section id=\"buy-tickets\" class=\"section-with-bg wow fadeInUp\">
      <div class=\"container\">

        <div class=\"section-header\">
          <h2>Paiement</h2>
          <p>choisissez un offre </p>
        </div>

        <div class=\"row\">
          <div class=\"col-lg-4\">
            <div class=\"card mb-5 mb-lg-0\">
              <div class=\"card-body\">
                <h5 class=\"card-title text-muted text-uppercase text-center\">Parking</h5>
                <h6 class=\"card-price text-center\">2 DNT/H</h6>
                <hr>
                <ul class=\"fa-ul\">
                  <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Suivi de voiture</li>
                  <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Sécurité à 100%</li>
                  <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Caméra de surveillance</li>
                 
                </ul>
                <hr>
                <div class=\"text-center\">
                  <a href =\"/facture/new\"><button type=\"button\" class=\"btn\"> Entrer</button></a>
                </div>
              </div>
            </div>
          </div>
          <div class=\"col-lg-4\">
            <div class=\"card mb-5 mb-lg-0\">
              
            </div>
          </div>
          <!-- Pro Tier 
          <div class=\"col-lg-4\">
            <div class=\"card\">
              <div class=\"card-body\">
                <h5 class=\"card-title text-muted text-uppercase text-center\">Premium Access</h5>
                <h6 class=\"card-price text-center\">\$350</h6>
                <hr>
                <ul class=\"fa-ul\">
                  <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Regular Seating</li>
                  <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Coffee Break</li>
                  <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Custom Badge</li>
                  <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Community Access</li>
                  <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Workshop Access</li>
                  <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>After Party</li>
                </ul>
                <hr>
                <div class=\"text-center\">
                  <button type=\"button\" class=\"btn\" data-toggle=\"modal\" data-target=\"#buy-ticket-modal\" data-ticket-type=\"premium-access\">Buy Now</button>
                </div>

              </div>
            </div>
          </div>
-->
          <div class=\"col-lg-4\">
            <div class=\"card mb-5 mb-lg-0\">
              <div class=\"card-body\">
                <h5 class=\"card-title text-muted text-uppercase text-center\">Amande</h5>
                <h6 class=\"card-price text-center\">50DNT</h6>
                <hr>
                <ul class=\"fa-ul\">
                  <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Sécurité à 100%</li>
                  <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Caméra de surveillance</li>
                  <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Assurance  
                  </li>
                  <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Savoir la localisation du véhicule
                  </li>
                 
                </ul>
                <hr>
                <div class=\"text-center\">
                  <a href =\"/amande/new\"><button type=\"button\" class=\"btn\"> Entrer</button></a>
                </div>
              </div>
            </div>
          </div>




        </div>

      </div>

      <!-- Modal Order Form -->
      <div id=\"buy-ticket-modal\" class=\"modal fade\">
        <div class=\"modal-dialog\" role=\"document\">
          <div class=\"modal-content\">
            <div class=\"modal-header\">
              <h4 class=\"modal-title\">Acheter Tickets</h4>
              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
              </button>
            </div>
            <div class=\"modal-body\">
              <form method=\"POST\" action=\"#\">
                <div class=\"form-group\">
                  <input type=\"text\" class=\"form-control\" name=\"your-name\" placeholder=\"Your Name\">
                </div>
                <div class=\"form-group\">
                  <input type=\"text\" class=\"form-control\" name=\"your-email\" placeholder=\"Your Email\">
                </div>
                <div class=\"form-group\">
                  <select id=\"ticket-type\" name=\"ticket-type\" class=\"form-control\" >
                    <option value=\"\">-- choisissez votre type de ticket --</option>
                    <option value=\"standard-access\">Acces Standard </option>
                    <option value=\"pro-access\">Acces Pro </option>
                    <option value=\"premium-access\"> Accces Premium</option>
                  </select>
                </div>
                <div class=\"text-center\">
                  <button type=\"submit\" class=\"btn\">Acheter Maintenant</button>
                </div>
              </form>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->

    </section>

    <!--==========================
      Contact Section
    ============================-->
    <section id=\"contact\" class=\"section-bg wow fadeInUp\">

      <div class=\"container\">

        <div class=\"section-header\">
          <h2>Contact </h2>
          <p>24/24H  7/7J à votre service .</p>
          <br>
          <div class=\"col-auto\">
          <div class=\"text-center\">
            <a href =\"/reclamation/new\"><button type=\"button\" class=\"btn\"> Réclamation </button></a>
          </div>
        </div>
        </div>


        <div class=\"row contact-info\">

          <div class=\"col-md-4\">
            <div class=\"contact-address\">
              <i class=\"ion-ios-location-outline\"></i>
              <h3>Address</h3>
              <address>Esprit,La Gazelle, Tunis</address>
            </div>
          </div>

          <div class=\"col-md-4\">
            <div class=\"contact-phone\">
              <i class=\"ion-ios-telephone-outline\"></i>
              <h3>Num Tel</h3>
              <p><a href=\"tel:(+216)26101992\">(+216) 26101992</a></p>
            </div>
          </div>

          <div class=\"col-md-4\">
            <div class=\"contact-email\">
              <i class=\"ion-ios-email-outline\"></i>
              <h3>Email</h3>
              <p><a href=\"instapark@esprit.tn\">instapark@esprit.tn</a></p>
            </div>
          </div>

        </div>

        <div class=\"form\">
          <div id=\"sendmessage\">Votre Message a étè envoyé ! Merci /div>
          <div id=\"errormessage\"></div>
          <form action=\"\" method=\"post\" role=\"form\" class=\"contactForm\">
            <div class=\"form-row\">
              <div class=\"form-group col-md-6\">
                <input type=\"text\" name=\"name\" class=\"form-control\" id=\"name\" placeholder=\"Your Name\" data-rule=\"minlen:4\" data-msg=\"Please enter at least 4 chars\" />
                <div class=\"validation\"></div>
              </div>
              <div class=\"form-group col-md-6\">
                <input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\" placeholder=\"Your Email\" data-rule=\"email\" data-msg=\"Please enter a valid email\" />
                <div class=\"validation\"></div>
              </div>
            </div>
            <div class=\"form-group\">
              <input type=\"text\" class=\"form-control\" name=\"subject\" id=\"subject\" placeholder=\"Subject\" data-rule=\"minlen:4\" data-msg=\"Please enter at least 8 chars of subject\" />
              <div class=\"validation\"></div>
            </div>
            <div class=\"form-group\">
              <textarea class=\"form-control\" name=\"message\" rows=\"5\" data-rule=\"required\" data-msg=\"Please write something for us\" placeholder=\"Message\"></textarea>
              <div class=\"validation\"></div>
            </div>
            <div class=\"text-center\"><button type=\"submit\">Envoyer Message</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->

  </main>


  <!--==========================
    Footer
  ============================-->
  <footer id=\"footer\">
    <div class=\"footer-top\">
      <div class=\"container\">
        <div class=\"row\">

          <div class=\"col-lg-3 col-md-6 footer-info\">
            <img src=\"../assets/img/logo.png\" alt=\"TheEvenet\">
            <p>Avec INSTAPARK vous pouvez payer pour un stationnement en rue et dans les parking couverts . Plus besoin de chercher de l’argent et de courir à l’horodateur. Payer sans argent ou ticket. Et si jamais par malheur votre voiture se fait enlever par la fourrière, pas de d'inquiétude avec l'app INSTAPARK vous pourrez savoir dans quelle fourrière elle a été emmener et même payer l'amande seulement en vous connectant a notre application en ligne .
            </p></div>

          <div class=\"col-lg-3 col-md-6 footer-links\">
            <h4>Useful Links</h4>
            <ul>
              <li><i class=\"fa fa-angle-right\"></i> <a href=\"#\">Home</a></li>
              <li><i class=\"fa fa-angle-right\"></i> <a href=\"#\">About us</a></li>
              <li><i class=\"fa fa-angle-right\"></i> <a href=\"#\">Services</a></li>
              <li><i class=\"fa fa-angle-right\"></i> <a href=\"#\">Terms of service</a></li>
              <li><i class=\"fa fa-angle-right\"></i> <a href=\"#\">Privacy policy</a></li>
            </ul>
          </div>

         
          <div class=\"col-lg-3 col-md-6 footer-contact\">
            <h4>Contact Us</h4>
            <p>
              Esprit,La Gazelle <br>
              <br>
              Tunis <br>
              <strong>Phone:</strong> +216 26101992<br>
              <strong>Email:</strong> instapark@esprit.tn<br>
            </p>

               
          </div>

        </div>
      </div>
    </div>

  
  </footer><!-- #footer -->

  <a href=\"#\" class=\"back-to-top\"><i class=\"fa fa-angle-up\"></i></a>

  <!-- JavaScript Libraries -->
  <script src=\"../assets/lib/jquery/jquery.min.js\"></script>
  <script src=\"../assets/lib/jquery/jquery-migrate.min.js\"></script>
  <script src=\"../assets/lib/bootstrap/js/bootstrap.bundle.min.js\"></script>
  <script src=\"../assets/lib/easing/easing.min.js\"></script>
  <script src=\"../assets/lib/superfish/hoverIntent.js\"></script>
  <script src=\"../assets/lib/superfish/superfish.min.js\"></script>
  <script src=\"../assets/lib/wow/wow.min.js\"></script>
  <script src=\"../assets/lib/venobox/venobox.min.js\"></script>
  <script src=\"../assets/lib/owlcarousel/owl.carousel.min.js\"></script>

  <!-- Contact Form JavaScript File -->
  <script src=\"../assets/contactform/contactform.js\"></script>

  <!-- Template Main Javascript File -->
  <script src=\"../assets/js/main.js\"></script>
  
</body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "baseFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <title>InstaPark</title>
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
  <meta content=\"\" name=\"keywords\">
  <meta content=\"\" name=\"description\">

  <!-- Favicons -->
 <link rel=\"icon\" href=\"{{ asset('assets/images/favicon.png') }}\" type=\"image/x-icon\">

  <!-- Google Fonts -->
  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800\" rel=\"stylesheet\">

  <!-- Bootstrap CSS File -->
  <link href=\"../assets/lib/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

  <!-- Libraries CSS Files -->
  <link href=\"../assets/lib/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\">
  <link href=\"../assets/lib/animate/animate.min.css\" rel=\"stylesheet\">
  <link href=\"../assets/lib/venobox/venobox.css\" rel=\"stylesheet\">
  <link href=\"../assets/lib/owlcarousel/assets/owl.carousel.min.css\" rel=\"stylesheet\">

  <!-- Main Stylesheet File -->
  <link href=\"../assets/css/style.css\" rel=\"stylesheet\">

 
</head>

<body class=\"light\">


  <!--==========================
    Header
  ============================-->
  <header id=\"header\">
    <div class=\"container\">

      <div id=\"logo\" class=\"pull-left\">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href=\"#main\">C<span>o</span>nf</a></h1>-->
        <a href=\"#intro\" class=\"scrollto\"><img src=\"../assets/img/logo.png\" alt=\"\" title=\"\"></a>
      </div>

      <nav id=\"nav-menu-container\">
        <ul class=\"nav-menu\">
          <li class=\"menu-active\"><a href=\"#intro\">Acceuil</a></li>
          <li><a href=\"#about\">A propos</a></li>
          <li><a href=\"#speakers\">Parking</a></li>
         
          <li><a href=\"#venue\">Localisation</a></li>
          <li><a href=\"#inscrition\">Inscription</a></li>
        
          <li><a href=\"#sponsors\">Sponsors</a></li>
          <li><a href=\"#contact\">Contact</a></li>
          <li><a href=\"/equipe\">Notre équipe</a></li>
          <li class=\"buy-tickets\"><a href=\"#buy-tickets\">Paiement</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id=\"intro\">
    <div class=\"intro-container wow fadeIn\">
      <h1 class=\"mb-4 pb-0\"><span>InstaPark</span><br>Pour un parking instantanné</h1>
      <p class=\"mb-4 pb-0\"> un special remerciement pour notre sponsoring </p>
      <a href=\"https://www.youtube.com/watch?v=fJ9rUzIMcZQ\" class=\"venobox play-btn mb-4\" data-vbtype=\"video\"
        data-autoplay=\"true\"></a>
      <a href=\"/equipe\" class=\"about-btn scrollto\">A propos notre equipe</a>
    </div>
  </section>

  <main id=\"main\">

    <!--==========================
      About Section
    ============================-->
   <section id=\"about\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-6\">
            <h2>A propos InstaPark</h2>
            <p>Avec INSTAPARK vous pouvez payer pour un stationnement en rue et dans les parking couverts . Plus besoin de chercher de l’argent et de courir à l’horodateur. Payer sans argent ou ticket. Et si jamais par malheur votre voiture se fait enlever par la fourrière, pas de d'inquiétude avec l'app INSTAPARK vous pourrez savoir dans quelle fourrière elle a été emmener et même payer l'amande seulement en vous connectant a notre application en ligne . 
            </p>
          </div>
        
         
        </div>
      </div>
       <!--==========================
     DARK MODE
    ============================-->
        <div class=\"btn-toggle\">Go Dark</div>
    </section> 

    <!--==========================
      Speakers Section
    ============================-->
    <section id=\"speakers\" class=\"wow fadeInUp\">
      <div class=\"container\">
        <div class=\"section-header\">
          <h2> Les Parking</h2>
          <p>Nos parking disponibles</p>
        </div>

        <div class=\"row\">
          <div class=\"col-lg-4 col-md-6\">
            <div class=\"speaker\">
              <img src=\"../assets/img/speakers/1.jpg\" alt=\"Speaker 1\" class=\"img-fluid\">
              <div class=\"details\">
                <h3><a href=\"/speakers-details\">Tunis,Centre ville</a></h3>
                <p>Fondé le 29-03-2020</p>
                
              </div>
            </div>
          </div>
          <div class=\"col-lg-4 col-md-6\">
            <div class=\"speaker\">
              <img src=\"../assets/img/speakers/2.jpg\" alt=\"Speaker 2\" class=\"img-fluid\">
              <div class=\"details\">
                <h3><a href=\"/speakers-details\">Tunis,Lac2</a></h3>
                <p>Fondé le 21-05-2020</p>
               
              </div>
            </div>
          </div>
          <div class=\"col-lg-4 col-md-6\">
            <div class=\"speaker\">
              <img src=\"../assets/img/speakers/3.jpg\" alt=\"Speaker 3\" class=\"img-fluid\">
              <div class=\"details\">
                <h3><a href=\"/speakers-details\">La Manouba</a></h3>
                <p>Fondé le 19-10-2020</p>
              
              </div>
            </div>
          </div>
          <div class=\"col-lg-4 col-md-6\">
            <div class=\"speaker\">
              <img src=\"../assets/img/speakers/4.jpg\" alt=\"Speaker 4\" class=\"img-fluid\">
              <div class=\"details\">
                <h3><a href=\"/speakers-details\">Ben Arous</a></h3>
                <p>Fondé le 01-09-2020</p>
              
              </div>
            </div>
          </div>
          <div class=\"col-lg-4 col-md-6\">
            <div class=\"speaker\">
              <img src=\"../assets/img/speakers/5.jpg\" alt=\"Speaker 5\" class=\"img-fluid\">
              <div class=\"details\">
                <h3><a href=\"/speakers-details\">Ariana,Manzah 5</a></h3>
                <p>Fondé le 17-12-2020</p>
           
              </div>
            </div>
          </div>
          <div class=\"col-lg-4 col-md-6\">
            <div class=\"speaker\">
              <img src=\"../assets/img/speakers/6.jpg\" alt=\"Speaker 6\" class=\"img-fluid\">
              <div class=\"details\">
                <h3><a href=\"/speakers-details\">L'aouina</a></h3>
                <p>Fondé le 14-02-2022</p>
               
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>

    
        </div>

      </div>

    </section>

    <!--==========================
      Venue Section
    ============================-->
    <section id=\"venue\" class=\"wow fadeInUp\">

      <div class=\"container-fluid\">

        <div class=\"section-header\">
          <h2>localisation</h2>
          <p>Bienvenue chez nous !</p>
        </div>

        <div class=\"row no-gutters\">
          <div class=\"col-lg-6 venue-map\">
            <iframe src=\"https://maps.google.com/maps?q=Esprit+Prépa&t=&z=13&ie=UTF8&iwloc=&output=embed\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
          </div>

          <div class=\"col-lg-6 venue-info\">
            <div class=\"row justify-content-center\">
              <div class=\"col-11 col-lg-8\">
                <h3>Esprit, Tunis</h3>
                <p>Se former autrement .</p>
              </div>
            </div>
          </div>
        </div>

      </div>

      

    </section>

    
    <!--==========================
      Gallery Section
    ============================-->
    <section id=\"gallery\" class=\"wow fadeInUp\">

      <div class=\"container\">
        <div class=\"section-header\">
          <h2>Equipe</h2>
          <p>Notre équipe</p>
        </div>
      </div>

      <div class=\"owl-carousel gallery-carousel\">
        <a href=\"img/gallery/1.jpg\" class=\"venobox\" data-gall=\"gallery-carousel\"><img src=\"../assets/img/gallery/1.jpg\" alt=\"\"></a>
        <a href=\"img/gallery/2.jpg\" class=\"venobox\" data-gall=\"gallery-carousel\"><img src=\"../assets/img/gallery/2.jpg\" alt=\"\"></a>
        <a href=\"img/gallery/3.jpg\" class=\"venobox\" data-gall=\"gallery-carousel\"><img src=\"../assets/img/gallery/3.jpg\" alt=\"\"></a>
        <a href=\"img/gallery/4.jpg\" class=\"venobox\" data-gall=\"gallery-carousel\"><img src=\"../assets/img/gallery/4.jpg\" alt=\"\"></a>
        <a href=\"img/gallery/5.jpg\" class=\"venobox\" data-gall=\"gallery-carousel\"><img src=\"../assets/img/gallery/5.jpg\" alt=\"\"></a>
        <a href=\"img/gallery/6.jpg\" class=\"venobox\" data-gall=\"gallery-carousel\"><img src=\"../assets/img/gallery/6.jpg\" alt=\"\"></a>
        <!--========================== <a href=\"img/gallery/7.jpg\" class=\"venobox\" data-gall=\"gallery-carousel\"><img src=\"img/gallery/7.jpg\" alt=\"\"></a>
        <a href=\"img/gallery/8.jpg\" class=\"venobox\" data-gall=\"gallery-carousel\"><img src=\"img/gallery/8.jpg\" alt=\"\"></a> ============================-->
      </div>

    </section>

    <!--==========================
      Sponsors Section
    ============================-->
    <section id=\"sponsors\" class=\"section-with-bg wow fadeInUp\">

      <div class=\"container\">
        <div class=\"section-header\">
          <h2>Sponsors</h2>
        </div>

        <div class=\"row no-gutters sponsors-wrap clearfix\">

          <div class=\"col-lg-3 col-md-4 col-xs-6\">
            <div class=\"sponsor\">
              <img src=\"../assets/img/sponsors/1.png\" class=\"img-fluid\" alt=\"\">
            </div>
          </div>
          
          <div class=\"col-lg-3 col-md-4 col-xs-6\">
            <div class=\"sponsor\">
              <img src=\"../assets/img/sponsors/2.png\" class=\"img-fluid\" alt=\"\">
            </div>
          </div>
        
          <div class=\"col-lg-3 col-md-4 col-xs-6\">
            <div class=\"sponsor\">
              <img src=\"../assets/img/sponsors/3.png\" class=\"img-fluid\" alt=\"\">
            </div>
          </div>
          
          <div class=\"col-lg-3 col-md-4 col-xs-6\">
            <div class=\"sponsor\">
              <img src=\"../assets/img/sponsors/4.png\" class=\"img-fluid\" alt=\"\">
            </div>
          </div>
          
          <div class=\"col-lg-3 col-md-4 col-xs-6\">
            <div class=\"sponsor\">
              <img src=\"../assets/img/sponsors/5.png\" class=\"img-fluid\" alt=\"\">
            </div>
          </div>
        
          <div class=\"col-lg-3 col-md-4 col-xs-6\">
            <div class=\"sponsor\">
              <img src=\"../assets/img/sponsors/6.png\" class=\"img-fluid\" alt=\"\">
            </div>
          </div>
          
          <div class=\"col-lg-3 col-md-4 col-xs-6\">
            <div class=\"sponsor\">
              <img src=\"../assets/img/sponsors/7.png\" class=\"img-fluid\" alt=\"\">
            </div>
          </div>
          
          <div class=\"col-lg-3 col-md-4 col-xs-6\">
            <div class=\"sponsor\">
              <img src=\"../assets/img/sponsors/8.png\" class=\"img-fluid\" alt=\"\">
            </div>
          </div>

        </div>
        </div>

      </div>

    </section>

    <!--==========================
      F.A.Q Section
    ============================-->
    <section id=\"faq\" class=\"wow fadeInUp\">

      <div class=\"container\">

        <div class=\"section-header\">
          <h2>Questions&Réponses </h2>
        </div>

        <div class=\"row justify-content-center\">
          <div class=\"col-lg-9\">
              <ul id=\"faq-list\">

                <li>
                  <a data-toggle=\"collapse\" class=\"collapsed\" href=\"#faq1\">D’où on a inspiré  l’idée ?
                    <i class=\"fa fa-minus-circle\"></i></a>
                  <div id=\"faq1\" class=\"collapse\" data-parent=\"#faq-list\">
                    <p>
                      Manque d’organisation des voitures 
                    </p>
                    <br>
                    <p>
                      Difficulté d’identifier le parc de la voiture 
                    </p>
                    <br>
                    <p>
                      Problèmes de stationnement

                    </p>
                    <br>
                    <p>
                      Pas de communication entre les chauffeurs des camions-grues et le propriétaire de la voiture 


                    </p>
                    <br>
                    <p>
                      Manque d’information sur la  localisation de la voiture 


                    </p>
                  </div>
                </li>
      
                <li>
                  <a data-toggle=\"collapse\" href=\"#faq2\" class=\"collapsed\">Solution ?
                    <i class=\"fa fa-minus-circle\"></i></a>
                  <div id=\"faq2\" class=\"collapse\" data-parent=\"#faq-list\">
                    <p>
                      Assurance que le véhicule est enlevée par la police municipale .

                    </p>
                    <br>
                    <p>
                      Savoir la localisation du véhicule.

                    </p>
                    <br>
                    <p>
                      Prise de connaissance de l’amande exigée et le moyen de son paiement éléctronique .


                    </p>
                  </div>
                </li>
      
                <li>
                  <a data-toggle=\"collapse\" href=\"#faq3\" class=\"collapsed\"> Où ? <i class=\"fa fa-minus-circle\"></i></a>
                  <div id=\"faq3\" class=\"collapse\" data-parent=\"#faq-list\">
                    <p>
le Grand Tunis .                    </p>
                  </div>
                </li>
      
                <li>
                  <a data-toggle=\"collapse\" href=\"#faq4\" class=\"collapsed\">Payante ? <i class=\"fa fa-minus-circle\"></i></a>
                  <div id=\"faq4\" class=\"collapse\" data-parent=\"#faq-list\">
                    <p>
Non , c'est gratuit . Mais il y'a des achat dans l'application .                    </p>
                  </div>
                </li>
      
               
              </ul>
          </div>
        </div>

      </div>

    </section>

    <!--==========================
      Subscribe Section
    ============================-->
    <section id=\"subscribe\">
      <div class=\"container wow fadeInUp\">
        <div class=\"section-header\">
          <h2>Newsletter</h2>
          <p>Enregistrer vous ! .</p>
        </div>

        <form method=\"POST\" action=\"#\">
          <div class=\"form-row justify-content-center\">
            <div class=\"col-auto\">
              <input type=\"text\" class=\"form-control\" placeholder=\"Enter your Email\">
            </div>
            <div class=\"col-auto\">
              <button type=\"submit\">S'inscrire</button>
            </div>
          </div>
        </form>

      </div>
    </section>

    <!--==========================
      Buy Ticket Section
    ============================-->
    <section id=\"buy-tickets\" class=\"section-with-bg wow fadeInUp\">
      <div class=\"container\">

        <div class=\"section-header\">
          <h2>Paiement</h2>
          <p>choisissez un offre </p>
        </div>

        <div class=\"row\">
          <div class=\"col-lg-4\">
            <div class=\"card mb-5 mb-lg-0\">
              <div class=\"card-body\">
                <h5 class=\"card-title text-muted text-uppercase text-center\">Parking</h5>
                <h6 class=\"card-price text-center\">2 DNT/H</h6>
                <hr>
                <ul class=\"fa-ul\">
                  <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Suivi de voiture</li>
                  <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Sécurité à 100%</li>
                  <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Caméra de surveillance</li>
                 
                </ul>
                <hr>
                <div class=\"text-center\">
                  <a href =\"/facture/new\"><button type=\"button\" class=\"btn\"> Entrer</button></a>
                </div>
              </div>
            </div>
          </div>
          <div class=\"col-lg-4\">
            <div class=\"card mb-5 mb-lg-0\">
              
            </div>
          </div>
          <!-- Pro Tier 
          <div class=\"col-lg-4\">
            <div class=\"card\">
              <div class=\"card-body\">
                <h5 class=\"card-title text-muted text-uppercase text-center\">Premium Access</h5>
                <h6 class=\"card-price text-center\">\$350</h6>
                <hr>
                <ul class=\"fa-ul\">
                  <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Regular Seating</li>
                  <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Coffee Break</li>
                  <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Custom Badge</li>
                  <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Community Access</li>
                  <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Workshop Access</li>
                  <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>After Party</li>
                </ul>
                <hr>
                <div class=\"text-center\">
                  <button type=\"button\" class=\"btn\" data-toggle=\"modal\" data-target=\"#buy-ticket-modal\" data-ticket-type=\"premium-access\">Buy Now</button>
                </div>

              </div>
            </div>
          </div>
-->
          <div class=\"col-lg-4\">
            <div class=\"card mb-5 mb-lg-0\">
              <div class=\"card-body\">
                <h5 class=\"card-title text-muted text-uppercase text-center\">Amande</h5>
                <h6 class=\"card-price text-center\">50DNT</h6>
                <hr>
                <ul class=\"fa-ul\">
                  <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Sécurité à 100%</li>
                  <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Caméra de surveillance</li>
                  <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Assurance  
                  </li>
                  <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Savoir la localisation du véhicule
                  </li>
                 
                </ul>
                <hr>
                <div class=\"text-center\">
                  <a href =\"/amande/new\"><button type=\"button\" class=\"btn\"> Entrer</button></a>
                </div>
              </div>
            </div>
          </div>




        </div>

      </div>

      <!-- Modal Order Form -->
      <div id=\"buy-ticket-modal\" class=\"modal fade\">
        <div class=\"modal-dialog\" role=\"document\">
          <div class=\"modal-content\">
            <div class=\"modal-header\">
              <h4 class=\"modal-title\">Acheter Tickets</h4>
              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
              </button>
            </div>
            <div class=\"modal-body\">
              <form method=\"POST\" action=\"#\">
                <div class=\"form-group\">
                  <input type=\"text\" class=\"form-control\" name=\"your-name\" placeholder=\"Your Name\">
                </div>
                <div class=\"form-group\">
                  <input type=\"text\" class=\"form-control\" name=\"your-email\" placeholder=\"Your Email\">
                </div>
                <div class=\"form-group\">
                  <select id=\"ticket-type\" name=\"ticket-type\" class=\"form-control\" >
                    <option value=\"\">-- choisissez votre type de ticket --</option>
                    <option value=\"standard-access\">Acces Standard </option>
                    <option value=\"pro-access\">Acces Pro </option>
                    <option value=\"premium-access\"> Accces Premium</option>
                  </select>
                </div>
                <div class=\"text-center\">
                  <button type=\"submit\" class=\"btn\">Acheter Maintenant</button>
                </div>
              </form>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->

    </section>

    <!--==========================
      Contact Section
    ============================-->
    <section id=\"contact\" class=\"section-bg wow fadeInUp\">

      <div class=\"container\">

        <div class=\"section-header\">
          <h2>Contact </h2>
          <p>24/24H  7/7J à votre service .</p>
          <br>
          <div class=\"col-auto\">
          <div class=\"text-center\">
            <a href =\"/reclamation/new\"><button type=\"button\" class=\"btn\"> Réclamation </button></a>
          </div>
        </div>
        </div>


        <div class=\"row contact-info\">

          <div class=\"col-md-4\">
            <div class=\"contact-address\">
              <i class=\"ion-ios-location-outline\"></i>
              <h3>Address</h3>
              <address>Esprit,La Gazelle, Tunis</address>
            </div>
          </div>

          <div class=\"col-md-4\">
            <div class=\"contact-phone\">
              <i class=\"ion-ios-telephone-outline\"></i>
              <h3>Num Tel</h3>
              <p><a href=\"tel:(+216)26101992\">(+216) 26101992</a></p>
            </div>
          </div>

          <div class=\"col-md-4\">
            <div class=\"contact-email\">
              <i class=\"ion-ios-email-outline\"></i>
              <h3>Email</h3>
              <p><a href=\"instapark@esprit.tn\">instapark@esprit.tn</a></p>
            </div>
          </div>

        </div>

        <div class=\"form\">
          <div id=\"sendmessage\">Votre Message a étè envoyé ! Merci /div>
          <div id=\"errormessage\"></div>
          <form action=\"\" method=\"post\" role=\"form\" class=\"contactForm\">
            <div class=\"form-row\">
              <div class=\"form-group col-md-6\">
                <input type=\"text\" name=\"name\" class=\"form-control\" id=\"name\" placeholder=\"Your Name\" data-rule=\"minlen:4\" data-msg=\"Please enter at least 4 chars\" />
                <div class=\"validation\"></div>
              </div>
              <div class=\"form-group col-md-6\">
                <input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\" placeholder=\"Your Email\" data-rule=\"email\" data-msg=\"Please enter a valid email\" />
                <div class=\"validation\"></div>
              </div>
            </div>
            <div class=\"form-group\">
              <input type=\"text\" class=\"form-control\" name=\"subject\" id=\"subject\" placeholder=\"Subject\" data-rule=\"minlen:4\" data-msg=\"Please enter at least 8 chars of subject\" />
              <div class=\"validation\"></div>
            </div>
            <div class=\"form-group\">
              <textarea class=\"form-control\" name=\"message\" rows=\"5\" data-rule=\"required\" data-msg=\"Please write something for us\" placeholder=\"Message\"></textarea>
              <div class=\"validation\"></div>
            </div>
            <div class=\"text-center\"><button type=\"submit\">Envoyer Message</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->

  </main>


  <!--==========================
    Footer
  ============================-->
  <footer id=\"footer\">
    <div class=\"footer-top\">
      <div class=\"container\">
        <div class=\"row\">

          <div class=\"col-lg-3 col-md-6 footer-info\">
            <img src=\"../assets/img/logo.png\" alt=\"TheEvenet\">
            <p>Avec INSTAPARK vous pouvez payer pour un stationnement en rue et dans les parking couverts . Plus besoin de chercher de l’argent et de courir à l’horodateur. Payer sans argent ou ticket. Et si jamais par malheur votre voiture se fait enlever par la fourrière, pas de d'inquiétude avec l'app INSTAPARK vous pourrez savoir dans quelle fourrière elle a été emmener et même payer l'amande seulement en vous connectant a notre application en ligne .
            </p></div>

          <div class=\"col-lg-3 col-md-6 footer-links\">
            <h4>Useful Links</h4>
            <ul>
              <li><i class=\"fa fa-angle-right\"></i> <a href=\"#\">Home</a></li>
              <li><i class=\"fa fa-angle-right\"></i> <a href=\"#\">About us</a></li>
              <li><i class=\"fa fa-angle-right\"></i> <a href=\"#\">Services</a></li>
              <li><i class=\"fa fa-angle-right\"></i> <a href=\"#\">Terms of service</a></li>
              <li><i class=\"fa fa-angle-right\"></i> <a href=\"#\">Privacy policy</a></li>
            </ul>
          </div>

         
          <div class=\"col-lg-3 col-md-6 footer-contact\">
            <h4>Contact Us</h4>
            <p>
              Esprit,La Gazelle <br>
              <br>
              Tunis <br>
              <strong>Phone:</strong> +216 26101992<br>
              <strong>Email:</strong> instapark@esprit.tn<br>
            </p>

               
          </div>

        </div>
      </div>
    </div>

  
  </footer><!-- #footer -->

  <a href=\"#\" class=\"back-to-top\"><i class=\"fa fa-angle-up\"></i></a>

  <!-- JavaScript Libraries -->
  <script src=\"../assets/lib/jquery/jquery.min.js\"></script>
  <script src=\"../assets/lib/jquery/jquery-migrate.min.js\"></script>
  <script src=\"../assets/lib/bootstrap/js/bootstrap.bundle.min.js\"></script>
  <script src=\"../assets/lib/easing/easing.min.js\"></script>
  <script src=\"../assets/lib/superfish/hoverIntent.js\"></script>
  <script src=\"../assets/lib/superfish/superfish.min.js\"></script>
  <script src=\"../assets/lib/wow/wow.min.js\"></script>
  <script src=\"../assets/lib/venobox/venobox.min.js\"></script>
  <script src=\"../assets/lib/owlcarousel/owl.carousel.min.js\"></script>

  <!-- Contact Form JavaScript File -->
  <script src=\"../assets/contactform/contactform.js\"></script>

  <!-- Template Main Javascript File -->
  <script src=\"../assets/js/main.js\"></script>
  
</body>

</html>
", "baseFront.html.twig", "C:\\xampp\\htdocs\\PI 2.2\\templates\\baseFront.html.twig");
    }
}
