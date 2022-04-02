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

/* base.front.html.twig */
class __TwigTemplate_0ded6d1fdc4c1ad2e92da0ff679b2b8edd1a00861e68cd93468c087d4a414de1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.front.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.front.html.twig"));

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
    ";
        // line 18
        $this->displayBlock('css', $context, $blocks);
        // line 30
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

        <nav id=\"navbar\" class=\"navbar\">
            <ul>
                <li><a class=\"nav-link scrollto active\" href=\"#hero\">Home</a></li>
                <li><a class=\"nav-link scrollto\" href=\"#about\">About Us</a></li>
                <li><a class=\"nav-link scrollto\" href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("new");
        echo "\">Réservations</a></li>
                <li><a class=\"nav-link scrollto\" href=\"#portfolio\">Portfolio</a></li>
                <li><a class=\"nav-link scrollto\" href=\"#team\">Team</a></li>
                <li class=\"dropdown\"><a href=\"#\"><span>Drop Down</span> <i class=\"bi bi-chevron-down\"></i></a>
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
                </li>
                <li><a class=\"nav-link scrollto\" href=\"#contact\">Contact</a></li>
            </ul>
            <i class=\"bi bi-list mobile-nav-toggle\"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

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
                        <h3>Voluptatem dignissimos provident quasi</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                        </p>
                        <a href=\"#\" class=\"about-btn\">About us <i class=\"bx bx-chevron-right\"></i></a>
                    </div>
                </div>
                <div class=\"col-xl-7 d-flex align-items-stretch\">
                    <div class=\"icon-boxes d-flex flex-column justify-content-center\">
                        <div class=\"row\">
                            <div class=\"col-md-6 icon-box\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                                <i class=\"bx bx-receipt\"></i>
                                <h4>Corporis voluptates sit</h4>
                                <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                            </div>
                            <div class=\"col-md-6 icon-box\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                                <i class=\"bx bx-cube-alt\"></i>
                                <h4>Ullamco laboris nisi</h4>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                            </div>
                            <div class=\"col-md-6 icon-box\" data-aos=\"fade-up\" data-aos-delay=\"300\">
                                <i class=\"bx bx-images\"></i>
                                <h4>Labore consequatur</h4>
                                <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                            </div>
                            <div class=\"col-md-6 icon-box\" data-aos=\"fade-up\" data-aos-delay=\"400\">
                                <i class=\"bx bx-shield\"></i>
                                <h4>Beatae veritatis</h4>
                                <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
                            </div>
                        </div>
                    </div><!-- End .content-->
                </div>
            </div>

        </div>

    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id=\"services\" class=\"services\">

        <div class=\"container\">

            <div class=\"section-title\" data-aos=\"fade-in\" data-aos-delay=\"100\">
                <h2>Services</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>



        </div>

    </section><!-- End Services Section -->

    <!-- ======= Counts Section ======= -->
    <section id=\"counts\" class=\"counts  section-bg\">

        <div class=\"container\">

            <div class=\"row no-gutters\">

                <div class=\"col-lg-3 col-md-6 d-md-flex align-items-md-stretch\">
                    <div class=\"count-box\">
                        <i class=\"bi bi-emoji-smile\"></i>
                        <span data-purecounter-start=\"0\" data-purecounter-end=\"232\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
                        <p><strong>Happy Clients</strong> consequuntur quae</p>
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-6 d-md-flex align-items-md-stretch\">
                    <div class=\"count-box\">
                        <i class=\"bi bi-journal-richtext\"></i>
                        <span data-purecounter-start=\"0\" data-purecounter-end=\"521\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
                        <p><strong>Projects</strong> adipisci atque cum quia aut</p>
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-6 d-md-flex align-items-md-stretch\">
                    <div class=\"count-box\">
                        <i class=\"bi bi-headset\"></i>
                        <span data-purecounter-start=\"0\" data-purecounter-end=\"1463\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
                        <p><strong>Hours Of Support</strong> aut commodi quaerat</p>
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


</section>
    <!-- End Counts Section -->

    <!-- ======= Cta Section ======= -->
    <section id=\"cta\" class=\"cta\">

        <div class=\"container\" data-aos=\"zoom-in\">

            <div class=\"text-center\">
                <h3>Call To Action</h3>
                <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a class=\"cta-btn\" href=\"#\">Call To Action</a>
            </div>

        </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id=\"portfolio\" class=\"portfolio\">

        <div class=\"container\">

            <div class=\"section-title\" data-aos=\"fade-in\" data-aos-delay=\"100\">
                <h2>Portfolio</h2>
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
        // line 240
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/img/portfolio/portfolio-1.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                        <div class=\"portfolio-links\">
                            <a href=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/img/portfolio/portfolio-1.jpg"), "html", null, true);
        echo "\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"App 1\"><i class=\"bx bx-plus\"></i></a>
                            <a href=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/portfolio-details.html"), "html", null, true);
        echo "\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-4 col-md-6 portfolio-item filter-web\">
                    <div class=\"portfolio-wrap\">
                        <img src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/img/portfolio/portfolio-2.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                        <div class=\"portfolio-links\">
                            <a href=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/img/portfolio/portfolio-2.jpg"), "html", null, true);
        echo "\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"Web 3\"><i class=\"bx bx-plus\"></i></a>
                            <a href=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/portfolio-details.html"), "html", null, true);
        echo "\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-4 col-md-6 portfolio-item filter-app\">
                    <div class=\"portfolio-wrap\">
                        <img src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/img/portfolio/portfolio-3.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                        <div class=\"portfolio-links\">
                            <a href=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/img/portfolio/portfolio-3.jpg"), "html", null, true);
        echo "\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"App 2\"><i class=\"bx bx-plus\"></i></a>
                            <a href=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/portfolio-details.html"), "html", null, true);
        echo "\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-4 col-md-6 portfolio-item filter-card\">
                    <div class=\"portfolio-wrap\">
                        <img src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/img/portfolio/portfolio-4.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                        <div class=\"portfolio-links\">
                            <a href=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/img/portfolio/portfolio-4.jpg"), "html", null, true);
        echo "\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"Card 2\"><i class=\"bx bx-plus\"></i></a>
                            <a href=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/portfolio-details.html"), "html", null, true);
        echo "\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-4 col-md-6 portfolio-item filter-web\">
                    <div class=\"portfolio-wrap\">
                        <img src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/img/portfolio/portfolio-5.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                        <div class=\"portfolio-links\">
                            <a href=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/img/portfolio/portfolio-5.jpg"), "html", null, true);
        echo "\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"Web 2\"><i class=\"bx bx-plus\"></i></a>
                            <a href=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/portfolio-details.html"), "html", null, true);
        echo "\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-4 col-md-6 portfolio-item filter-app\">
                    <div class=\"portfolio-wrap\">
                        <img src=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/img/portfolio/portfolio-6.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                        <div class=\"portfolio-links\">
                            <a href=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/img/portfolio/portfolio-6.jpg"), "html", null, true);
        echo "\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"App 3\"><i class=\"bx bx-plus\"></i></a>
                            <a href=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/portfolio-details.html"), "html", null, true);
        echo "\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-4 col-md-6 portfolio-item filter-card\">
                    <div class=\"portfolio-wrap\">
                        <img src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/img/portfolio/portfolio-7.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                        <div class=\"portfolio-links\">
                            <a href=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/img/portfolio/portfolio-7.jpg"), "html", null, true);
        echo "\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"Card 1\"><i class=\"bx bx-plus\"></i></a>
                            <a href=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/portfolio-details.html"), "html", null, true);
        echo "\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-4 col-md-6 portfolio-item filter-card\">
                    <div class=\"portfolio-wrap\">
                        <img src=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/img/portfolio/portfolio-8.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                        <div class=\"portfolio-links\">
                            <a href=\"";
        // line 312
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/img/portfolio/portfolio-8.jpg"), "html", null, true);
        echo "\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"Card 3\"><i class=\"bx bx-plus\"></i></a>
                            <a href=\"";
        // line 313
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/portfolio-details.html"), "html", null, true);
        echo "\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-4 col-md-6 portfolio-item filter-web\">
                    <div class=\"portfolio-wrap\">
                        <img src=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/img/portfolio/portfolio-9.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                        <div class=\"portfolio-links\">
                            <a href=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/img/portfolio/portfolio-9.jpg"), "html", null, true);
        echo "\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"Web 3\"><i class=\"bx bx-plus\"></i></a>
                            <a href=\"";
        // line 323
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
                <h2>Testimonials</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
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
        // line 354
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
        // line 367
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
                                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                <i class=\"bx bxs-quote-alt-right quote-icon-right\"></i>
                            </p>
                            <img src=\"";
        // line 380
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
        // line 393
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
        // line 406
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
        // line 434
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
        // line 450
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
        // line 466
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
        // line 530
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
                        <h3>Squadfree</h3>
                        <p class=\"pb-3\"><em>Qui repudiandae et eum dolores alias sed ea. Qui suscipit veniam excepturi quod.</em></p>
                        <p>
                            A108 Adam Street <br>
                            NY 535022, USA<br><br>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@example.com<br>
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
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Home</a></li>
                        <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">About us</a></li>
                        <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Services</a></li>
                        <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Terms of service</a></li>
                        <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Privacy policy</a></li>
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
";
        // line 639
        $this->displayBlock('js', $context, $blocks);
        // line 652
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

        echo " Squadfree Bootstrap Template - Index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 19
        echo "    <!-- Vendor CSS Files -->
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/vendor/aos/aos.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/vendor/glightbox/css/glightbox.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/vendor/swiper/swiper-bundle.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Template Main CSS File -->
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 639
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 640
        echo "<!-- Vendor JS Files -->
<script src=\"";
        // line 641
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/vendor/purecounter/purecounter.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 642
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/vendor/aos/aos.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 643
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 644
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/vendor/glightbox/js/glightbox.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 645
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/vendor/isotope-layout/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 646
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/vendor/swiper/swiper-bundle.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 647
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>

<!-- Template Main JS File -->
<script src=\"";
        // line 650
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/js/main.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  925 => 650,  919 => 647,  915 => 646,  911 => 645,  907 => 644,  903 => 643,  899 => 642,  895 => 641,  892 => 640,  882 => 639,  870 => 28,  864 => 25,  860 => 24,  856 => 23,  852 => 22,  848 => 21,  844 => 20,  841 => 19,  831 => 18,  812 => 8,  800 => 652,  798 => 639,  686 => 530,  619 => 466,  600 => 450,  581 => 434,  550 => 406,  534 => 393,  518 => 380,  502 => 367,  486 => 354,  452 => 323,  448 => 322,  443 => 320,  433 => 313,  429 => 312,  424 => 310,  414 => 303,  410 => 302,  405 => 300,  395 => 293,  391 => 292,  386 => 290,  376 => 283,  372 => 282,  367 => 280,  357 => 273,  353 => 272,  348 => 270,  338 => 263,  334 => 262,  329 => 260,  319 => 253,  315 => 252,  310 => 250,  300 => 243,  296 => 242,  291 => 240,  102 => 54,  76 => 30,  74 => 18,  67 => 14,  63 => 13,  55 => 8,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

    <title>{%  block title %} Squadfree Bootstrap Template - Index{% endblock %}</title>
    <meta content=\"\" name=\"description\">
    <meta content=\"\" name=\"keywords\">

    <!-- Favicons -->
    <link href=\"{{asset(\"front-end/assets/img/favicon.png\")}}\" rel=\"icon\">
    <link href=\"{{asset(\"front-end/assets/img/apple-touch-icon.png\")}}\" rel=\"apple-touch-icon\">

    <!-- Google Fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">
    {% block css %}
    <!-- Vendor CSS Files -->
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

        <nav id=\"navbar\" class=\"navbar\">
            <ul>
                <li><a class=\"nav-link scrollto active\" href=\"#hero\">Home</a></li>
                <li><a class=\"nav-link scrollto\" href=\"#about\">About Us</a></li>
                <li><a class=\"nav-link scrollto\" href=\"{{ path('new') }}\">Réservations</a></li>
                <li><a class=\"nav-link scrollto\" href=\"#portfolio\">Portfolio</a></li>
                <li><a class=\"nav-link scrollto\" href=\"#team\">Team</a></li>
                <li class=\"dropdown\"><a href=\"#\"><span>Drop Down</span> <i class=\"bi bi-chevron-down\"></i></a>
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
                </li>
                <li><a class=\"nav-link scrollto\" href=\"#contact\">Contact</a></li>
            </ul>
            <i class=\"bi bi-list mobile-nav-toggle\"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

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
                        <h3>Voluptatem dignissimos provident quasi</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                        </p>
                        <a href=\"#\" class=\"about-btn\">About us <i class=\"bx bx-chevron-right\"></i></a>
                    </div>
                </div>
                <div class=\"col-xl-7 d-flex align-items-stretch\">
                    <div class=\"icon-boxes d-flex flex-column justify-content-center\">
                        <div class=\"row\">
                            <div class=\"col-md-6 icon-box\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                                <i class=\"bx bx-receipt\"></i>
                                <h4>Corporis voluptates sit</h4>
                                <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                            </div>
                            <div class=\"col-md-6 icon-box\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                                <i class=\"bx bx-cube-alt\"></i>
                                <h4>Ullamco laboris nisi</h4>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                            </div>
                            <div class=\"col-md-6 icon-box\" data-aos=\"fade-up\" data-aos-delay=\"300\">
                                <i class=\"bx bx-images\"></i>
                                <h4>Labore consequatur</h4>
                                <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                            </div>
                            <div class=\"col-md-6 icon-box\" data-aos=\"fade-up\" data-aos-delay=\"400\">
                                <i class=\"bx bx-shield\"></i>
                                <h4>Beatae veritatis</h4>
                                <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
                            </div>
                        </div>
                    </div><!-- End .content-->
                </div>
            </div>

        </div>

    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id=\"services\" class=\"services\">

        <div class=\"container\">

            <div class=\"section-title\" data-aos=\"fade-in\" data-aos-delay=\"100\">
                <h2>Services</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>



        </div>

    </section><!-- End Services Section -->

    <!-- ======= Counts Section ======= -->
    <section id=\"counts\" class=\"counts  section-bg\">

        <div class=\"container\">

            <div class=\"row no-gutters\">

                <div class=\"col-lg-3 col-md-6 d-md-flex align-items-md-stretch\">
                    <div class=\"count-box\">
                        <i class=\"bi bi-emoji-smile\"></i>
                        <span data-purecounter-start=\"0\" data-purecounter-end=\"232\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
                        <p><strong>Happy Clients</strong> consequuntur quae</p>
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-6 d-md-flex align-items-md-stretch\">
                    <div class=\"count-box\">
                        <i class=\"bi bi-journal-richtext\"></i>
                        <span data-purecounter-start=\"0\" data-purecounter-end=\"521\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
                        <p><strong>Projects</strong> adipisci atque cum quia aut</p>
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-6 d-md-flex align-items-md-stretch\">
                    <div class=\"count-box\">
                        <i class=\"bi bi-headset\"></i>
                        <span data-purecounter-start=\"0\" data-purecounter-end=\"1463\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
                        <p><strong>Hours Of Support</strong> aut commodi quaerat</p>
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


</section>
    <!-- End Counts Section -->

    <!-- ======= Cta Section ======= -->
    <section id=\"cta\" class=\"cta\">

        <div class=\"container\" data-aos=\"zoom-in\">

            <div class=\"text-center\">
                <h3>Call To Action</h3>
                <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a class=\"cta-btn\" href=\"#\">Call To Action</a>
            </div>

        </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id=\"portfolio\" class=\"portfolio\">

        <div class=\"container\">

            <div class=\"section-title\" data-aos=\"fade-in\" data-aos-delay=\"100\">
                <h2>Portfolio</h2>
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
                            <a href=\"{{asset(\"front-end/portfolio-details.html\")}}\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
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
                <h2>Testimonials</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
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
                        <h3>Squadfree</h3>
                        <p class=\"pb-3\"><em>Qui repudiandae et eum dolores alias sed ea. Qui suscipit veniam excepturi quod.</em></p>
                        <p>
                            A108 Adam Street <br>
                            NY 535022, USA<br><br>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@example.com<br>
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
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Home</a></li>
                        <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">About us</a></li>
                        <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Services</a></li>
                        <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Terms of service</a></li>
                        <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Privacy policy</a></li>
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
{% block  js %}
<!-- Vendor JS Files -->
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

</html>", "base.front.html.twig", "C:\\xampp\\htdocs\\ProjetReservation\\templates\\base.front.html.twig");
    }
}
