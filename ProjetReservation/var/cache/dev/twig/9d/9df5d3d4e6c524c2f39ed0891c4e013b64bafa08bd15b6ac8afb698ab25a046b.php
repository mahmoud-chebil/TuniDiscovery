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

/* base.front1.html.twig */
class __TwigTemplate_fb861764cc6b5319c1b07e44d3659138320c52eaf6fca565d85b327cb9361b2f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.front1.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.front1.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta content=\"\" name=\"description\">
    <meta content=\"\" name=\"keywords\">

    <!-- Favicons -->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/img/favicon.png"), "html", null, true);
        echo "\" rel=\"icon\">
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/img/apple-touch-icon.png"), "html", null, true);
        echo "\" rel=\"apple-touch-icon\">

    <!-- Google Fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

    <!-- Vendor CSS Files -->
    ";
        // line 20
        $this->displayBlock('css', $context, $blocks);
        // line 31
        echo "    <!-- =======================================================
    * Template Name: Squadfree - v4.7.0
    * Template URL: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<header id=\"header\" class=\"fixed-top header-transparent\">
    <div class=\"container d-flex align-items-center justify-content-between\">

        <div class=\"logo\">
            <h1 class=\"text-light\"><a href=\"index.html\"><span>Squadfree</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href=\"index.html\"><img src=\"assets/img/logo.png\" alt=\"\" class=\"img-fluid\"></a>-->
        </div>

        <nav id=\"navbar\" class=\"navbar \">
            <ul>
                <li><a class=\"nav-link scrollto active\" href=\"#Accueil\">Accueil</a></li> ";
        // line 54
        echo "                <li><a class=\"nav-link scrollto\" href=\"#Equipement\">Equipement</a></li> ";
        // line 55
        echo "                <li><a class=\"nav-link scrollto\" href=\"#Evenements\">Evenements</a></li> ";
        // line 56
        echo "                <li><a class=\"nav-link scrollto\" href=\"#About\">Qui somme-nous ?</a></li> ";
        echo " ";
        // line 57
        echo "                <li><a class=\"nav-link scrollto\" href=\"#Panier\">Panier</a></li> ";
        // line 58
        echo "
              ";
        // line 76
        echo "
            </ul>
            <i class=\"bi bi-list mobile-nav-toggle\"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
<br><br><br><br><br><br><br>
<!-- ======= Hero Section ======= -->
  <section id=\"hero\">
    <div class=\"hero-container\" data-aos=\"fade-up\">
        <h1>Welcome to Squad</h1>
        <h2>We are team of talented designers making websites with Bootstrap</h2>
        <a href=\"#about\" class=\"btn-get-started scrollto\"><i class=\"bx bx-chevrons-down\"></i></a>
    </div>
</section><!-- End Hero -->

<main id=\"main\">

    <!-- ======= About Section ======= -->
    <section id=\"about\" class=\"about\">
        <div class=\"container\">

            <div class=\"row no-gutters\">
                <div class=\"content col-xl-5 d-flex align-items-stretch\" data-aos=\"fade-up\">
                    <div class=\"content\">
                        <h3>TuniDiscovery</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                        </p>
                        <a href=\"#\" class=\"about-btn\">Qui Sommes-Nous ? <i class=\"bx bx-chevron-right\"></i></a>
                    </div>
                </div>
                <div class=\"col-xl-7 d-flex align-items-stretch\">
                    <div class=\"icon-boxes d-flex flex-column justify-content-center\">
                        <div class=\"row\">
                            <div class=\"col-md-6 icon-box\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                                <i class=\"bx bx-receipt\"></i>
                                <h4>Equipements</h4>
                                <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                            </div>
                            <div class=\"col-md-6 icon-box\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                                <i class=\"bx bx-cube-alt\"></i>
                                <h4>Réservation</h4>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                            </div>
                            <div class=\"col-md-6 icon-box\" data-aos=\"fade-up\" data-aos-delay=\"300\">
                                <i class=\"bx bx-images\"></i>
                                <h4>Evenements</h4>
                                <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                            </div>
                            <div class=\"col-md-6 icon-box\" data-aos=\"fade-up\" data-aos-delay=\"400\">
                                <i class=\"bx bx-shield\"></i>
                                <h4>Sécurité</h4>
                                <p>Soyez avec nous en toute sécurité !</p>
                            </div>
                        </div>
                    </div><!-- End .content-->
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    ";
        // line 186
        echo "
    <!-- ======= Counts Section ======= -->
    <section id=\"counts\" class=\"counts  section-bg\">
        <div class=\"container\">

            <div class=\"row no-gutters\">

                <div class=\"col-lg-3 col-md-6 d-md-flex align-items-md-stretch\">
                    <div class=\"count-box\">
                        <i class=\"bi bi-emoji-smile\"></i>
                        <span data-purecounter-start=\"0\" data-purecounter-end=\"500\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
                        <p><strong>Happy Clients</strong>  </p>
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-6 d-md-flex align-items-md-stretch\">
                    <div class=\"count-box\">
                        <i class=\"bi bi-journal-richtext\"></i>
                        <span data-purecounter-start=\"0\" data-purecounter-end=\"521\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
                        <p><strong>Projects</strong> </p>
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-6 d-md-flex align-items-md-stretch\">
                    <div class=\"count-box\">
                        <i class=\"bi bi-headset\"></i>
                        <span data-purecounter-start=\"0\" data-purecounter-end=\"2000\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
                        <p><strong>Heures de support</strong></p>
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-6 d-md-flex align-items-md-stretch\">
                    <div class=\"count-box\">
                        <i class=\"bi bi-people\"></i>
                        <span data-purecounter-start=\"0\" data-purecounter-end=\"15\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
                        <p><strong>Hard Workers</strong> rerum asperiores dolor</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Counts Section -->

    <!-- ======= Cta Section ======= -->
    ";
        // line 242
        echo "
    <!-- ======= Portfolio Section ======= -->
    <section id=\"portfolio\" class=\"portfolio\">
        <div class=\"container\">

            <div class=\"section-title\" data-aos=\"fade-in\" data-aos-delay=\"100\">
                <h2>Categorie or Event</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class=\"row\" data-aos=\"fade-in\">
                <div class=\"col-lg-12 d-flex justify-content-center\">
                    <ul id=\"portfolio-flters\">
                        <li data-filter=\"*\" class=\"filter-active\">All</li>
                        <li data-filter=\".filter-app\">App</li>
                        <li data-filter=\".filter-card\">Card</li>
                        <li data-filter=\".filter-web\">Web</li>
                    </ul>
                </div>
            </div>

            <div class=\"row portfolio-container\" data-aos=\"fade-up\">

                <div class=\"col-lg-4 col-md-6 portfolio-item filter-app\">
                    <div class=\"portfolio-wrap\">
                        <img src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/img/portfolio/portfolio-1.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                        <div class=\"portfolio-links\">
                            <a href=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/img/portfolio/portfolio-1.jpg"), "html", null, true);
        echo "\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"App 1\"><i class=\"bx bx-plus\"></i></a>
                            <a href=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/portfolio-details.html"), "html", null, true);
        echo "\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-4 col-md-6 portfolio-item filter-web\">
                    <div class=\"portfolio-wrap\">
                        <img src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/img/portfolio/portfolio-2.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                        <div class=\"portfolio-links\">
                            <a href=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/img/portfolio/portfolio-2.jpg"), "html", null, true);
        echo "\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"Web 3\"><i class=\"bx bx-plus\"></i></a>
                            <a href=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/portfolio-details.html"), "html", null, true);
        echo "\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-4 col-md-6 portfolio-item filter-app\">
                    <div class=\"portfolio-wrap\">
                        <img src=\"";
        // line 287
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/img/portfolio/portfolio-3.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                        <div class=\"portfolio-links\">
                            <a href=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/img/portfolio/portfolio-3.jpg"), "html", null, true);
        echo "\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"App 2\"><i class=\"bx bx-plus\"></i></a>
                            <a href=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/portfolio-details.html"), "html", null, true);
        echo "\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-4 col-md-6 portfolio-item filter-card\">
                    <div class=\"portfolio-wrap\">
                        <img src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/img/portfolio/portfolio-4.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                        <div class=\"portfolio-links\">
                            <a href=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/img/portfolio/portfolio-4.jpg"), "html", null, true);
        echo "\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"Card 2\"><i class=\"bx bx-plus\"></i></a>
                            <a href=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/portfolio-details.html"), "html", null, true);
        echo "\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-4 col-md-6 portfolio-item filter-web\">
                    <div class=\"portfolio-wrap\">
                        <img src=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/img/portfolio/portfolio-5.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                        <div class=\"portfolio-links\">
                            <a href=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/img/portfolio/portfolio-5.jpg"), "html", null, true);
        echo "\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"Web 2\"><i class=\"bx bx-plus\"></i></a>
                            <a href=";
        // line 310
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/portfolio-details.html"), "html", null, true);
        echo "\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-4 col-md-6 portfolio-item filter-app\">
                    <div class=\"portfolio-wrap\">
                        <img src=\"";
        // line 317
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/img/portfolio/portfolio-6.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                        <div class=\"portfolio-links\">
                            <a href=\"";
        // line 319
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/img/portfolio/portfolio-6.jpg"), "html", null, true);
        echo "\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"App 3\"><i class=\"bx bx-plus\"></i></a>
                            <a href=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/portfolio-details.html"), "html", null, true);
        echo "\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-4 col-md-6 portfolio-item filter-card\">
                    <div class=\"portfolio-wrap\">
                        <img src=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/img/portfolio/portfolio-7.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                        <div class=\"portfolio-links\">
                            <a href=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/img/portfolio/portfolio-7.jpg"), "html", null, true);
        echo "\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"Card 1\"><i class=\"bx bx-plus\"></i></a>
                            <a href=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/portfolio-details.html"), "html", null, true);
        echo "\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-4 col-md-6 portfolio-item filter-card\">
                    <div class=\"portfolio-wrap\">
                        <img src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/img/portfolio/portfolio-8.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                        <div class=\"portfolio-links\">
                            <a href=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/img/portfolio/portfolio-8.jpg"), "html", null, true);
        echo "\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"Card 3\"><i class=\"bx bx-plus\"></i></a>
                            <a href=\"";
        // line 340
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/portfolio-details.html"), "html", null, true);
        echo "\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-4 col-md-6 portfolio-item filter-web\">
                    <div class=\"portfolio-wrap\">
                        <img src=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/img/portfolio/portfolio-9.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                        <div class=\"portfolio-links\">
                            <a href=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/img/portfolio/portfolio-9.jpg"), "html", null, true);
        echo "\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"Web 3\"><i class=\"bx bx-plus\"></i></a>
                            <a href=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/portfolio-details.html"), "html", null, true);
        echo "\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id=\"testimonials\" class=\"testimonials section-bg\">
        <div class=\"container\">

            <div class=\"section-title\" data-aos=\"fade-in\" data-aos-delay=\"100\">
                <h2>Avis Clients</h2>
                <p></p>
            </div>

            <div class=\"testimonials-slider swiper\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                <div class=\"swiper-wrapper\">

                    <div class=\"swiper-slide\">
                        <div class=\"testimonial-item\">
                            <p>
                                <i class=\"bx bxs-quote-alt-left quote-icon-left\"></i>
                                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                                <i class=\"bx bxs-quote-alt-right quote-icon-right\"></i>
                            </p>
                            <img src=\"";
        // line 379
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/img/testimonials/testimonials-1.jpg"), "html", null, true);
        echo "\" class=\"testimonial-img\" alt=\"\">
                            <h3>Saul Goodman</h3>
                            <h4>Ceo &amp; Founder</h4>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class=\"swiper-slide\">
                        <div class=\"testimonial-item\">
                            <p>
                                <i class=\"bx bxs-quote-alt-left quote-icon-left\"></i>
                                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                                <i class=\"bx bxs-quote-alt-right quote-icon-right\"></i>
                            </p>
                            <img src=\"";
        // line 392
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/img/testimonials/testimonials-2.jpg"), "html", null, true);
        echo "\" class=\"testimonial-img\" alt=\"\">
                            <h3>Sara Wilsson</h3>
                            <h4>Designer</h4>
                        </div>
                    </div><!-- End testimonial item -->
                    <div class=\"swiper-slide\">
                        <div class=\"testimonial-item\">
                            <p>
                                <i class=\"bx bxs-quote-alt-left quote-icon-left\"></i>
                                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                                <i class=\"bx bxs-quote-alt-right quote-icon-right\"></i>
                            </p>
                            <img src=\"";
        // line 404
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/img/testimonials/testimonials-2.jpg"), "html", null, true);
        echo "\" class=\"testimonial-img\" alt=\"\">
                            <h3>Sara Wilsson</h3>
                            <h4>Designer</h4>
                        </div>
                    </div>
                    <div class=\"swiper-slide\">
                        <div class=\"testimonial-item\">
                            <p>
                                <i class=\"bx bxs-quote-alt-left quote-icon-left\"></i>
                                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                <i class=\"bx bxs-quote-alt-right quote-icon-right\"></i>
                            </p>
                            <img src=\"";
        // line 416
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/img/testimonials/testimonials-3.jpg"), "html", null, true);
        echo "\" class=\"testimonial-img\" alt=\"\">
                            <h3>Jena Karlis</h3>
                            <h4>Store Owner</h4>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class=\"swiper-slide\">
                        <div class=\"testimonial-item\">
                            <p>
                                <i class=\"bx bxs-quote-alt-left quote-icon-left\"></i>
                                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                                <i class=\"bx bxs-quote-alt-right quote-icon-right\"></i>
                            </p>
                            <img src=\"";
        // line 429
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/img/testimonials/testimonials-4.jpg"), "html", null, true);
        echo "\" class=\"testimonial-img\" alt=\"\">
                            <h3>Matt Brandon</h3>
                            <h4>Freelancer</h4>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class=\"swiper-slide\">
                        <div class=\"testimonial-item\">
                            <p>
                                <i class=\"bx bxs-quote-alt-left quote-icon-left\"></i>
                                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                                <i class=\"bx bxs-quote-alt-right quote-icon-right\"></i>
                            </p>
                            <img src=\"";
        // line 442
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/img/testimonials/testimonials-5.jpg"), "html", null, true);
        echo "\" class=\"testimonial-img\" alt=\"\">
                            <h3>John Larson</h3>
                            <h4>Entrepreneur</h4>
                        </div>
                    </div><!-- End testimonial item -->

                </div>
                <div class=\"swiper-pagination\"></div>
            </div>

        </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id=\"team\" class=\"team\">
        <div class=\"container\">

            <div class=\"section-title\" data-aos=\"fade-in\" data-aos-delay=\"100\">
                <h2>Team</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class=\"row\">

                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"member\" data-aos=\"fade-up\">
                        <div class=\"pic\"><img src=\"";
        // line 468
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/img/team/team-1.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></div>
                        <div class=\"member-info\">
                            <h4>Walter White</h4>
                            <span>Chief Executive Officer</span>
                            <div class=\"social\">
                                <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                                <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                                <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                                <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"member\" data-aos=\"fade-up\" data-aos-delay=\"150\">
                        <div class=\"pic\"><img src=\"";
        // line 484
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/img/team/team-2.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></div>
                        <div class=\"member-info\">
                            <h4>Sarah Jhonson</h4>
                            <span>Product Manager</span>
                            <div class=\"social\">
                                <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                                <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                                <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                                <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"member\" data-aos=\"fade-up\" data-aos-delay=\"300\">
                        <div class=\"pic\"><img src=\"";
        // line 500
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/img/team/team-3.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></div>
                        <div class=\"member-info\">
                            <h4>William Anderson</h4>
                            <span>CTO</span>
                            <div class=\"social\">
                                <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                                <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                                <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                                <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id=\"contact\" class=\"contact section-bg\">
        <div class=\"container\" data-aos=\"fade-up\">

            <div class=\"section-title\">
                <h2>Contact</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"info-box mb-4\">
                        <i class=\"bx bx-map\"></i>
                        <h3>Our Address</h3>
                        <p>A108 Adam Street, New York, NY 535022</p>
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"info-box  mb-4\">
                        <i class=\"bx bx-envelope\"></i>
                        <h3>Email Us</h3>
                        <p>contact@example.com</p>
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"info-box  mb-4\">
                        <i class=\"bx bx-phone-call\"></i>
                        <h3>Call Us</h3>
                        <p>+1 5589 55488 55</p>
                    </div>
                </div>

            </div>

            <div class=\"row\">

                <div class=\"col-lg-6 \">
                    <iframe class=\"mb-4 mb-lg-0\" src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621\" frameborder=\"0\" style=\"border:0; width: 100%; height: 384px;\" allowfullscreen></iframe>
                </div>

                <div class=\"col-lg-6\">
                    <form action=\"";
        // line 562
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/forms/contact.php"), "html", null, true);
        echo "\" method=\"post\" role=\"form\" class=\"php-email-form\">
                        <div class=\"row\">
                            <div class=\"col-md-6 form-group\">
                                <input type=\"text\" name=\"name\" class=\"form-control\" id=\"name\" placeholder=\"Your Name\" required>
                            </div>
                            <div class=\"col-md-6 form-group mt-3 mt-md-0\">
                                <input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\" placeholder=\"Your Email\" required>
                            </div>
                        </div>
                        <div class=\"form-group mt-3\">
                            <input type=\"text\" class=\"form-control\" name=\"subject\" id=\"subject\" placeholder=\"Subject\" required>
                        </div>
                        <div class=\"form-group mt-3\">
                            <textarea class=\"form-control\" name=\"message\" rows=\"5\" placeholder=\"Message\" required></textarea>
                        </div>
                        <div class=\"my-3\">
                            <div class=\"loading\">Loading</div>
                            <div class=\"error-message\"></div>
                            <div class=\"sent-message\">Your message has been sent. Thank you!</div>
                        </div>
                        <div class=\"text-center\"><button type=\"submit\">Send Message</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id=\"footer\">
    <div class=\"footer-top\">
        <div class=\"container\">
            <div class=\"row\">

                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"footer-info\">
                        <h3>TuniDiscovery</h3>
                        <p class=\"pb-3\"><em>Qui repudiandae et eum dolores alias sed ea. Qui suscipit veniam excepturi quod.</em></p>
                        <p>
                            Ariena soghra 2031 <br>
                            Ariena 535022, TUN<br><br>
                            <strong>Phone:</strong> +216 56 140 361<br>
                            <strong>Email:</strong> TuniDiscovery@esprit.tn<br>
                        </p>
                        <div class=\"social-links mt-3\">
                            <a href=\"#\" class=\"twitter\"><i class=\"bx bxl-twitter\"></i></a>
                            <a href=\"#\" class=\"facebook\"><i class=\"bx bxl-facebook\"></i></a>
                            <a href=\"#\" class=\"instagram\"><i class=\"bx bxl-instagram\"></i></a>
                            <a href=\"#\" class=\"google-plus\"><i class=\"bx bxl-skype\"></i></a>
                            <a href=\"#\" class=\"linkedin\"><i class=\"bx bxl-linkedin\"></i></a>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-2 col-md-6 footer-links\">
                    <h4>TuniDiscovery</h4>
                    <ul>
                        <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#Accueil\">Accueil</a></li>
                        <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#Equipement\">Equipement</a></li>
                        <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#Evenements\">Evenements</a></li>
                        <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Qui sommes-nous ?</a></li>
                        <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#Panier\">Panier</a></li>
                    </ul>
                </div>

                <div class=\"col-lg-2 col-md-6 footer-links\">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Web Design</a></li>
                        <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Web Development</a></li>
                        <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Product Management</a></li>
                        <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Marketing</a></li>
                        <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Graphic Design</a></li>
                    </ul>
                </div>

                <div class=\"col-lg-4 col-md-6 footer-newsletter\">
                    <h4>Our Newsletter</h4>
                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                    <form action=\"\" method=\"post\">
                        <input type=\"email\" name=\"email\"><input type=\"submit\" value=\"Subscribe\">
                    </form>

                </div>

            </div>
        </div>
    </div>

    <div class=\"container\">
        <div class=\"copyright\">
            &copy; Copyright <strong><span>Squadfree</span></strong>. All Rights Reserved
        </div>
        <div class=\"credits\">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/ -->
            Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
        </div>
    </div>
</footer><!-- End Footer -->

<a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

<!-- Vendor JS Files -->
";
        // line 671
        $this->displayBlock('js', $context, $blocks);
        // line 683
        echo "</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Squadfree Bootstrap Template - Index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 21
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/vendor/aos/aos.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/vendor/glightbox/css/glightbox.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/vendor/swiper/swiper-bundle.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Template Main CSS File -->
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 671
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 672
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/vendor/purecounter/purecounter.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 673
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/vendor/aos/aos.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 674
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 675
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/vendor/glightbox/js/glightbox.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 676
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/vendor/isotope-layout/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 677
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/vendor/swiper/swiper-bundle.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 678
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>

<!-- Template Main JS File -->
<script src=\"";
        // line 681
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/js/main.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.front1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  893 => 681,  887 => 678,  883 => 677,  879 => 676,  875 => 675,  871 => 674,  867 => 673,  862 => 672,  852 => 671,  840 => 29,  834 => 26,  830 => 25,  826 => 24,  822 => 23,  818 => 22,  813 => 21,  803 => 20,  784 => 8,  772 => 683,  770 => 671,  658 => 562,  593 => 500,  574 => 484,  555 => 468,  526 => 442,  510 => 429,  494 => 416,  479 => 404,  464 => 392,  448 => 379,  416 => 350,  412 => 349,  407 => 347,  397 => 340,  393 => 339,  388 => 337,  378 => 330,  374 => 329,  369 => 327,  359 => 320,  355 => 319,  350 => 317,  340 => 310,  336 => 309,  331 => 307,  321 => 300,  317 => 299,  312 => 297,  302 => 290,  298 => 289,  293 => 287,  283 => 280,  279 => 279,  274 => 277,  264 => 270,  260 => 269,  255 => 267,  228 => 242,  181 => 186,  114 => 76,  111 => 58,  109 => 57,  106 => 56,  104 => 55,  102 => 54,  78 => 31,  76 => 20,  67 => 14,  63 => 13,  55 => 8,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

    <title>{% block title %}Squadfree Bootstrap Template - Index{% endblock %}</title>
    <meta content=\"\" name=\"description\">
    <meta content=\"\" name=\"keywords\">

    <!-- Favicons -->
    <link href=\"{{asset(\"front-end/assets/img/favicon.png\")}}\" rel=\"icon\">
    <link href=\"{{asset(\"front-end/assets/img/apple-touch-icon.png\")}}\" rel=\"apple-touch-icon\">

    <!-- Google Fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

    <!-- Vendor CSS Files -->
    {% block css %}
    <link href=\"{{asset(\"front-end/assets/vendor/aos/aos.css\")}}\" rel=\"stylesheet\">
    <link href=\"{{asset(\"front-end/assets/vendor/bootstrap/css/bootstrap.min.css\")}}\" rel=\"stylesheet\">
    <link href=\"{{asset(\"front-end/assets/vendor/bootstrap-icons/bootstrap-icons.css\")}}\" rel=\"stylesheet\">
    <link href=\"{{asset(\"front-end/assets/vendor/boxicons/css/boxicons.min.css\")}}\" rel=\"stylesheet\">
    <link href=\"{{asset(\"front-end/assets/vendor/glightbox/css/glightbox.min.css\")}}\" rel=\"stylesheet\">
    <link href=\"{{asset(\"front-end/assets/vendor/swiper/swiper-bundle.min.css\")}}\" rel=\"stylesheet\">

    <!-- Template Main CSS File -->
    <link href=\"{{asset(\"front-end/assets/css/style.css\")}}\" rel=\"stylesheet\">
    {% endblock %}
    <!-- =======================================================
    * Template Name: Squadfree - v4.7.0
    * Template URL: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<header id=\"header\" class=\"fixed-top header-transparent\">
    <div class=\"container d-flex align-items-center justify-content-between\">

        <div class=\"logo\">
            <h1 class=\"text-light\"><a href=\"index.html\"><span>Squadfree</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href=\"index.html\"><img src=\"assets/img/logo.png\" alt=\"\" class=\"img-fluid\"></a>-->
        </div>

        <nav id=\"navbar\" class=\"navbar \">
            <ul>
                <li><a class=\"nav-link scrollto active\" href=\"#Accueil\">Accueil</a></li> {# ahla biik #}
                <li><a class=\"nav-link scrollto\" href=\"#Equipement\">Equipement</a></li> {# des catégories equipelments / infos produits /  #}
                <li><a class=\"nav-link scrollto\" href=\"#Evenements\">Evenements</a></li> {# liste events / back-end crud event  #}
                <li><a class=\"nav-link scrollto\" href=\"#About\">Qui somme-nous ?</a></li> {# Discriptions des services #} {# mariem: réclamation et sa validation => liste de réclamation / crud Reclamation#}
                <li><a class=\"nav-link scrollto\" href=\"#Panier\">Panier</a></li> {# listes produits dans le panier / passer commande avec le remplissage d'un formulaire à valider par l'admin #}

              {#   <li class=\"dropdown\"><a href=\"#\"><span>Drop Down</span> <i class=\"bi bi-chevron-down\"></i></a>
                    <ul>
                        <li><a href=\"#\">Drop Down 1</a></li>
                        <li class=\"dropdown\"><a href=\"#\"><span>Deep Drop Down</span> <i class=\"bi bi-chevron-right\"></i></a>
                            <ul>
                                <li><a href=\"#\">Deep Drop Down 1</a></li>
                                <li><a href=\"#\">Deep Drop Down 2</a></li>
                                <li><a href=\"#\">Deep Drop Down 3</a></li>
                                <li><a href=\"#\">Deep Drop Down 4</a></li>
                                <li><a href=\"#\">Deep Drop Down 5</a></li>
                            </ul>
                        </li>
                        <li><a href=\"#\">Drop Down 2</a></li>
                        <li><a href=\"#\">Drop Down 3</a></li>
                        <li><a href=\"#\">Drop Down 4</a></li>
                    </ul>
                </li>#}

            </ul>
            <i class=\"bi bi-list mobile-nav-toggle\"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
<br><br><br><br><br><br><br>
<!-- ======= Hero Section ======= -->
  <section id=\"hero\">
    <div class=\"hero-container\" data-aos=\"fade-up\">
        <h1>Welcome to Squad</h1>
        <h2>We are team of talented designers making websites with Bootstrap</h2>
        <a href=\"#about\" class=\"btn-get-started scrollto\"><i class=\"bx bx-chevrons-down\"></i></a>
    </div>
</section><!-- End Hero -->

<main id=\"main\">

    <!-- ======= About Section ======= -->
    <section id=\"about\" class=\"about\">
        <div class=\"container\">

            <div class=\"row no-gutters\">
                <div class=\"content col-xl-5 d-flex align-items-stretch\" data-aos=\"fade-up\">
                    <div class=\"content\">
                        <h3>TuniDiscovery</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                        </p>
                        <a href=\"#\" class=\"about-btn\">Qui Sommes-Nous ? <i class=\"bx bx-chevron-right\"></i></a>
                    </div>
                </div>
                <div class=\"col-xl-7 d-flex align-items-stretch\">
                    <div class=\"icon-boxes d-flex flex-column justify-content-center\">
                        <div class=\"row\">
                            <div class=\"col-md-6 icon-box\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                                <i class=\"bx bx-receipt\"></i>
                                <h4>Equipements</h4>
                                <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                            </div>
                            <div class=\"col-md-6 icon-box\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                                <i class=\"bx bx-cube-alt\"></i>
                                <h4>Réservation</h4>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                            </div>
                            <div class=\"col-md-6 icon-box\" data-aos=\"fade-up\" data-aos-delay=\"300\">
                                <i class=\"bx bx-images\"></i>
                                <h4>Evenements</h4>
                                <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                            </div>
                            <div class=\"col-md-6 icon-box\" data-aos=\"fade-up\" data-aos-delay=\"400\">
                                <i class=\"bx bx-shield\"></i>
                                <h4>Sécurité</h4>
                                <p>Soyez avec nous en toute sécurité !</p>
                            </div>
                        </div>
                    </div><!-- End .content-->
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    {#  <section id=\"services\" class=\"services\">
        <div class=\"container\">

            <div class=\"section-title\" data-aos=\"fade-in\" data-aos-delay=\"100\">
                <h2>Services</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class=\"row\">
                <div class=\"col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0\">
                    <div class=\"icon-box\" data-aos=\"fade-up\">
                        <div class=\"icon\"><i class=\"bx bxl-dribbble\"></i></div>
                        <h4 class=\"title\"><a href=\"\">Lorem Ipsum</a></h4>
                        <p class=\"description\">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                    </div>
                </div>

                <div class=\"col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0\">
                    <div class=\"icon-box\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                        <div class=\"icon\"><i class=\"bx bx-file\"></i></div>
                        <h4 class=\"title\"><a href=\"\">Sed ut perspiciatis</a></h4>
                        <p class=\"description\">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                    </div>
                </div>

                <div class=\"col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0\">
                    <div class=\"icon-box\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                        <div class=\"icon\"><i class=\"bx bx-tachometer\"></i></div>
                        <h4 class=\"title\"><a href=\"\">Magni Dolores</a></h4>
                        <p class=\"description\">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                    </div>
                </div>

                <div class=\"col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0\">
                    <div class=\"icon-box\" data-aos=\"fade-up\" data-aos-delay=\"300\">
                        <div class=\"icon\"><i class=\"bx bx-world\"></i></div>
                        <h4 class=\"title\"><a href=\"\">Nemo Enim</a></h4>
                        <p class=\"description\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Services Section --> #}

    <!-- ======= Counts Section ======= -->
    <section id=\"counts\" class=\"counts  section-bg\">
        <div class=\"container\">

            <div class=\"row no-gutters\">

                <div class=\"col-lg-3 col-md-6 d-md-flex align-items-md-stretch\">
                    <div class=\"count-box\">
                        <i class=\"bi bi-emoji-smile\"></i>
                        <span data-purecounter-start=\"0\" data-purecounter-end=\"500\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
                        <p><strong>Happy Clients</strong>  </p>
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-6 d-md-flex align-items-md-stretch\">
                    <div class=\"count-box\">
                        <i class=\"bi bi-journal-richtext\"></i>
                        <span data-purecounter-start=\"0\" data-purecounter-end=\"521\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
                        <p><strong>Projects</strong> </p>
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-6 d-md-flex align-items-md-stretch\">
                    <div class=\"count-box\">
                        <i class=\"bi bi-headset\"></i>
                        <span data-purecounter-start=\"0\" data-purecounter-end=\"2000\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
                        <p><strong>Heures de support</strong></p>
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-6 d-md-flex align-items-md-stretch\">
                    <div class=\"count-box\">
                        <i class=\"bi bi-people\"></i>
                        <span data-purecounter-start=\"0\" data-purecounter-end=\"15\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
                        <p><strong>Hard Workers</strong> rerum asperiores dolor</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Counts Section -->

    <!-- ======= Cta Section ======= -->
    {#  <section id=\"cta\" class=\"cta\">
        <div class=\"container\" data-aos=\"zoom-in\">

            <div class=\"text-center\">
                <h3>Call To Action</h3>
                <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a class=\"cta-btn\" href=\"#\">Call To Action</a>
            </div>

        </div>
    </section><!-- End Cta Section -->#}

    <!-- ======= Portfolio Section ======= -->
    <section id=\"portfolio\" class=\"portfolio\">
        <div class=\"container\">

            <div class=\"section-title\" data-aos=\"fade-in\" data-aos-delay=\"100\">
                <h2>Categorie or Event</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class=\"row\" data-aos=\"fade-in\">
                <div class=\"col-lg-12 d-flex justify-content-center\">
                    <ul id=\"portfolio-flters\">
                        <li data-filter=\"*\" class=\"filter-active\">All</li>
                        <li data-filter=\".filter-app\">App</li>
                        <li data-filter=\".filter-card\">Card</li>
                        <li data-filter=\".filter-web\">Web</li>
                    </ul>
                </div>
            </div>

            <div class=\"row portfolio-container\" data-aos=\"fade-up\">

                <div class=\"col-lg-4 col-md-6 portfolio-item filter-app\">
                    <div class=\"portfolio-wrap\">
                        <img src=\"{{asset(\"front-end/assets/img/portfolio/portfolio-1.jpg\")}}\" class=\"img-fluid\" alt=\"\">
                        <div class=\"portfolio-links\">
                            <a href=\"{{asset(\"front-end/assets/img/portfolio/portfolio-1.jpg\")}}\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"App 1\"><i class=\"bx bx-plus\"></i></a>
                            <a href=\"{{asset(\"front-end/portfolio-details.html\")}}\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-4 col-md-6 portfolio-item filter-web\">
                    <div class=\"portfolio-wrap\">
                        <img src=\"{{asset(\"front-end/assets/img/portfolio/portfolio-2.jpg\")}}\" class=\"img-fluid\" alt=\"\">
                        <div class=\"portfolio-links\">
                            <a href=\"{{asset(\"front-end/assets/img/portfolio/portfolio-2.jpg\")}}\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"Web 3\"><i class=\"bx bx-plus\"></i></a>
                            <a href=\"{{asset(\"front-end/portfolio-details.html\")}}\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-4 col-md-6 portfolio-item filter-app\">
                    <div class=\"portfolio-wrap\">
                        <img src=\"{{asset(\"front-end/assets/img/portfolio/portfolio-3.jpg\")}}\" class=\"img-fluid\" alt=\"\">
                        <div class=\"portfolio-links\">
                            <a href=\"{{asset(\"front-end/assets/img/portfolio/portfolio-3.jpg\")}}\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"App 2\"><i class=\"bx bx-plus\"></i></a>
                            <a href=\"{{asset(\"front-end/portfolio-details.html\")}}\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-4 col-md-6 portfolio-item filter-card\">
                    <div class=\"portfolio-wrap\">
                        <img src=\"{{asset(\"front-end/assets/img/portfolio/portfolio-4.jpg\")}}\" class=\"img-fluid\" alt=\"\">
                        <div class=\"portfolio-links\">
                            <a href=\"{{asset(\"front-end/assets/img/portfolio/portfolio-4.jpg\")}}\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"Card 2\"><i class=\"bx bx-plus\"></i></a>
                            <a href=\"{{asset(\"front-end/portfolio-details.html\")}}\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-4 col-md-6 portfolio-item filter-web\">
                    <div class=\"portfolio-wrap\">
                        <img src=\"{{asset(\"front-end/assets/img/portfolio/portfolio-5.jpg\")}}\" class=\"img-fluid\" alt=\"\">
                        <div class=\"portfolio-links\">
                            <a href=\"{{asset(\"front-end/assets/img/portfolio/portfolio-5.jpg\")}}\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"Web 2\"><i class=\"bx bx-plus\"></i></a>
                            <a href={{asset(\"front-end/portfolio-details.html\")}}\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-4 col-md-6 portfolio-item filter-app\">
                    <div class=\"portfolio-wrap\">
                        <img src=\"{{asset(\"front-end/assets/img/portfolio/portfolio-6.jpg\")}}\" class=\"img-fluid\" alt=\"\">
                        <div class=\"portfolio-links\">
                            <a href=\"{{asset(\"front-end/assets/img/portfolio/portfolio-6.jpg\")}}\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"App 3\"><i class=\"bx bx-plus\"></i></a>
                            <a href=\"{{asset(\"front-end/portfolio-details.html\")}}\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-4 col-md-6 portfolio-item filter-card\">
                    <div class=\"portfolio-wrap\">
                        <img src=\"{{asset(\"front-end/assets/img/portfolio/portfolio-7.jpg\")}}\" class=\"img-fluid\" alt=\"\">
                        <div class=\"portfolio-links\">
                            <a href=\"{{asset(\"front-end/assets/img/portfolio/portfolio-7.jpg\")}}\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"Card 1\"><i class=\"bx bx-plus\"></i></a>
                            <a href=\"{{asset(\"front-end/portfolio-details.html\")}}\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-4 col-md-6 portfolio-item filter-card\">
                    <div class=\"portfolio-wrap\">
                        <img src=\"{{asset(\"front-end/assets/img/portfolio/portfolio-8.jpg\")}}\" class=\"img-fluid\" alt=\"\">
                        <div class=\"portfolio-links\">
                            <a href=\"{{asset(\"front-end/assets/img/portfolio/portfolio-8.jpg\")}}\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"Card 3\"><i class=\"bx bx-plus\"></i></a>
                            <a href=\"{{asset(\"front-end/portfolio-details.html\")}}\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-4 col-md-6 portfolio-item filter-web\">
                    <div class=\"portfolio-wrap\">
                        <img src=\"{{asset(\"front-end/assets/img/portfolio/portfolio-9.jpg\")}}\" class=\"img-fluid\" alt=\"\">
                        <div class=\"portfolio-links\">
                            <a href=\"{{asset(\"front-end/assets/img/portfolio/portfolio-9.jpg\")}}\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"Web 3\"><i class=\"bx bx-plus\"></i></a>
                            <a href=\"{{asset(\"front-end/portfolio-details.html\")}}\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id=\"testimonials\" class=\"testimonials section-bg\">
        <div class=\"container\">

            <div class=\"section-title\" data-aos=\"fade-in\" data-aos-delay=\"100\">
                <h2>Avis Clients</h2>
                <p></p>
            </div>

            <div class=\"testimonials-slider swiper\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                <div class=\"swiper-wrapper\">

                    <div class=\"swiper-slide\">
                        <div class=\"testimonial-item\">
                            <p>
                                <i class=\"bx bxs-quote-alt-left quote-icon-left\"></i>
                                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                                <i class=\"bx bxs-quote-alt-right quote-icon-right\"></i>
                            </p>
                            <img src=\"{{asset(\"front-end/assets/img/testimonials/testimonials-1.jpg\")}}\" class=\"testimonial-img\" alt=\"\">
                            <h3>Saul Goodman</h3>
                            <h4>Ceo &amp; Founder</h4>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class=\"swiper-slide\">
                        <div class=\"testimonial-item\">
                            <p>
                                <i class=\"bx bxs-quote-alt-left quote-icon-left\"></i>
                                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                                <i class=\"bx bxs-quote-alt-right quote-icon-right\"></i>
                            </p>
                            <img src=\"{{asset(\"front-end/assets/img/testimonials/testimonials-2.jpg\")}}\" class=\"testimonial-img\" alt=\"\">
                            <h3>Sara Wilsson</h3>
                            <h4>Designer</h4>
                        </div>
                    </div><!-- End testimonial item -->
                    <div class=\"swiper-slide\">
                        <div class=\"testimonial-item\">
                            <p>
                                <i class=\"bx bxs-quote-alt-left quote-icon-left\"></i>
                                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                                <i class=\"bx bxs-quote-alt-right quote-icon-right\"></i>
                            </p>
                            <img src=\"{{asset(\"front-end/assets/img/testimonials/testimonials-2.jpg\")}}\" class=\"testimonial-img\" alt=\"\">
                            <h3>Sara Wilsson</h3>
                            <h4>Designer</h4>
                        </div>
                    </div>
                    <div class=\"swiper-slide\">
                        <div class=\"testimonial-item\">
                            <p>
                                <i class=\"bx bxs-quote-alt-left quote-icon-left\"></i>
                                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                <i class=\"bx bxs-quote-alt-right quote-icon-right\"></i>
                            </p>
                            <img src=\"{{asset(\"front-end/assets/img/testimonials/testimonials-3.jpg\")}}\" class=\"testimonial-img\" alt=\"\">
                            <h3>Jena Karlis</h3>
                            <h4>Store Owner</h4>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class=\"swiper-slide\">
                        <div class=\"testimonial-item\">
                            <p>
                                <i class=\"bx bxs-quote-alt-left quote-icon-left\"></i>
                                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                                <i class=\"bx bxs-quote-alt-right quote-icon-right\"></i>
                            </p>
                            <img src=\"{{asset(\"front-end/assets/img/testimonials/testimonials-4.jpg\")}}\" class=\"testimonial-img\" alt=\"\">
                            <h3>Matt Brandon</h3>
                            <h4>Freelancer</h4>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class=\"swiper-slide\">
                        <div class=\"testimonial-item\">
                            <p>
                                <i class=\"bx bxs-quote-alt-left quote-icon-left\"></i>
                                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                                <i class=\"bx bxs-quote-alt-right quote-icon-right\"></i>
                            </p>
                            <img src=\"{{asset(\"front-end/assets/img/testimonials/testimonials-5.jpg\")}}\" class=\"testimonial-img\" alt=\"\">
                            <h3>John Larson</h3>
                            <h4>Entrepreneur</h4>
                        </div>
                    </div><!-- End testimonial item -->

                </div>
                <div class=\"swiper-pagination\"></div>
            </div>

        </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id=\"team\" class=\"team\">
        <div class=\"container\">

            <div class=\"section-title\" data-aos=\"fade-in\" data-aos-delay=\"100\">
                <h2>Team</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class=\"row\">

                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"member\" data-aos=\"fade-up\">
                        <div class=\"pic\"><img src=\"{{asset(\"front-end/assets/img/team/team-1.jpg\")}}\" class=\"img-fluid\" alt=\"\"></div>
                        <div class=\"member-info\">
                            <h4>Walter White</h4>
                            <span>Chief Executive Officer</span>
                            <div class=\"social\">
                                <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                                <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                                <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                                <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"member\" data-aos=\"fade-up\" data-aos-delay=\"150\">
                        <div class=\"pic\"><img src=\"{{asset(\"front-end/assets/img/team/team-2.jpg\")}}\" class=\"img-fluid\" alt=\"\"></div>
                        <div class=\"member-info\">
                            <h4>Sarah Jhonson</h4>
                            <span>Product Manager</span>
                            <div class=\"social\">
                                <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                                <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                                <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                                <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"member\" data-aos=\"fade-up\" data-aos-delay=\"300\">
                        <div class=\"pic\"><img src=\"{{asset(\"front-end/assets/img/team/team-3.jpg\")}}\" class=\"img-fluid\" alt=\"\"></div>
                        <div class=\"member-info\">
                            <h4>William Anderson</h4>
                            <span>CTO</span>
                            <div class=\"social\">
                                <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                                <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                                <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                                <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id=\"contact\" class=\"contact section-bg\">
        <div class=\"container\" data-aos=\"fade-up\">

            <div class=\"section-title\">
                <h2>Contact</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"info-box mb-4\">
                        <i class=\"bx bx-map\"></i>
                        <h3>Our Address</h3>
                        <p>A108 Adam Street, New York, NY 535022</p>
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"info-box  mb-4\">
                        <i class=\"bx bx-envelope\"></i>
                        <h3>Email Us</h3>
                        <p>contact@example.com</p>
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"info-box  mb-4\">
                        <i class=\"bx bx-phone-call\"></i>
                        <h3>Call Us</h3>
                        <p>+1 5589 55488 55</p>
                    </div>
                </div>

            </div>

            <div class=\"row\">

                <div class=\"col-lg-6 \">
                    <iframe class=\"mb-4 mb-lg-0\" src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621\" frameborder=\"0\" style=\"border:0; width: 100%; height: 384px;\" allowfullscreen></iframe>
                </div>

                <div class=\"col-lg-6\">
                    <form action=\"{{asset(\"front-end/forms/contact.php\")}}\" method=\"post\" role=\"form\" class=\"php-email-form\">
                        <div class=\"row\">
                            <div class=\"col-md-6 form-group\">
                                <input type=\"text\" name=\"name\" class=\"form-control\" id=\"name\" placeholder=\"Your Name\" required>
                            </div>
                            <div class=\"col-md-6 form-group mt-3 mt-md-0\">
                                <input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\" placeholder=\"Your Email\" required>
                            </div>
                        </div>
                        <div class=\"form-group mt-3\">
                            <input type=\"text\" class=\"form-control\" name=\"subject\" id=\"subject\" placeholder=\"Subject\" required>
                        </div>
                        <div class=\"form-group mt-3\">
                            <textarea class=\"form-control\" name=\"message\" rows=\"5\" placeholder=\"Message\" required></textarea>
                        </div>
                        <div class=\"my-3\">
                            <div class=\"loading\">Loading</div>
                            <div class=\"error-message\"></div>
                            <div class=\"sent-message\">Your message has been sent. Thank you!</div>
                        </div>
                        <div class=\"text-center\"><button type=\"submit\">Send Message</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id=\"footer\">
    <div class=\"footer-top\">
        <div class=\"container\">
            <div class=\"row\">

                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"footer-info\">
                        <h3>TuniDiscovery</h3>
                        <p class=\"pb-3\"><em>Qui repudiandae et eum dolores alias sed ea. Qui suscipit veniam excepturi quod.</em></p>
                        <p>
                            Ariena soghra 2031 <br>
                            Ariena 535022, TUN<br><br>
                            <strong>Phone:</strong> +216 56 140 361<br>
                            <strong>Email:</strong> TuniDiscovery@esprit.tn<br>
                        </p>
                        <div class=\"social-links mt-3\">
                            <a href=\"#\" class=\"twitter\"><i class=\"bx bxl-twitter\"></i></a>
                            <a href=\"#\" class=\"facebook\"><i class=\"bx bxl-facebook\"></i></a>
                            <a href=\"#\" class=\"instagram\"><i class=\"bx bxl-instagram\"></i></a>
                            <a href=\"#\" class=\"google-plus\"><i class=\"bx bxl-skype\"></i></a>
                            <a href=\"#\" class=\"linkedin\"><i class=\"bx bxl-linkedin\"></i></a>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-2 col-md-6 footer-links\">
                    <h4>TuniDiscovery</h4>
                    <ul>
                        <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#Accueil\">Accueil</a></li>
                        <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#Equipement\">Equipement</a></li>
                        <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#Evenements\">Evenements</a></li>
                        <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Qui sommes-nous ?</a></li>
                        <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#Panier\">Panier</a></li>
                    </ul>
                </div>

                <div class=\"col-lg-2 col-md-6 footer-links\">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Web Design</a></li>
                        <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Web Development</a></li>
                        <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Product Management</a></li>
                        <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Marketing</a></li>
                        <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Graphic Design</a></li>
                    </ul>
                </div>

                <div class=\"col-lg-4 col-md-6 footer-newsletter\">
                    <h4>Our Newsletter</h4>
                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                    <form action=\"\" method=\"post\">
                        <input type=\"email\" name=\"email\"><input type=\"submit\" value=\"Subscribe\">
                    </form>

                </div>

            </div>
        </div>
    </div>

    <div class=\"container\">
        <div class=\"copyright\">
            &copy; Copyright <strong><span>Squadfree</span></strong>. All Rights Reserved
        </div>
        <div class=\"credits\">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/ -->
            Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
        </div>
    </div>
</footer><!-- End Footer -->

<a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

<!-- Vendor JS Files -->
{% block js %}
<script src=\"{{asset(\"front-end/assets/vendor/purecounter/purecounter.js\")}}\"></script>
<script src=\"{{asset(\"front-end/assets/vendor/aos/aos.js\")}}\"></script>
<script src=\"{{asset(\"front-end/assets/vendor/bootstrap/js/bootstrap.bundle.min.js\")}}\"></script>
<script src=\"{{asset(\"front-end/assets/vendor/glightbox/js/glightbox.min.js\")}}\"></script>
<script src=\"{{asset(\"front-end/assets/vendor/isotope-layout/isotope.pkgd.min.js\")}}\"></script>
<script src=\"{{asset(\"front-end/assets/vendor/swiper/swiper-bundle.min.js\")}}\"></script>
<script src=\"{{asset(\"front-end/assets/vendor/php-email-form/validate.js\")}}\"></script>

<!-- Template Main JS File -->
<script src=\"{{asset(\"front-end/assets/js/main.js\")}}\"></script>
{% endblock %}
</body>

</html>", "base.front1.html.twig", "C:\\xampp\\htdocs\\ProjetReservation\\templates\\base.front1.html.twig");
    }
}
