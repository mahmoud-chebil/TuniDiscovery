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

/* accueil/reste.front.html.twig */
class __TwigTemplate_3d7c1f3bcb1b587f28ae93419f2b08034f0c9f3734633f547eda809ca07dd9f3 extends Template
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
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/reste.front.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/reste.front.html.twig"));

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
<header id=\"header\">
    <div class=\"container d-flex align-items-center justify-content-between\">

        <div class=\"logo\">
            <h1 class=\"text-light\"><a href=\"index.html\"> <span>TunisDiscovery</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href=\"index.html\"><img src=\"assets/img/logo.png\" alt=\"\" class=\"img-fluid\"></a>-->
        </div>

        <nav id=\"navbar\" class=\"navbar \">
            <ul>
                <li><a class=\"nav-link scrollto active\" href=\"#Accueil\">Accueil</a></li> ";
        // line 54
        echo "                <li><a class=\"nav-link scrollto\" href=\"#Equipement\">Equipement</a></li> ";
        // line 55
        echo "                <li><a class=\"nav-link scrollto\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenchoisi");
        echo "\">Evenements</a></li> ";
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

";
        // line 87
        $this->displayBlock('body', $context, $blocks);
        // line 89
        echo "<main id=\"main\">




<!-- ======= Footer ======= -->
<footer id=\"footer\">
    <div class=\"footer-top\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-6\">
                    <div>
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
        // line 171
        $this->displayBlock('js', $context, $blocks);
        // line 183
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
        echo "        <link href=\"";
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

    // line 87
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 171
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 172
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/vendor/purecounter/purecounter.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/vendor/aos/aos.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/vendor/glightbox/js/glightbox.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/vendor/isotope-layout/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/vendor/swiper/swiper-bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>

    <!-- Template Main JS File -->
    <script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/assets/js/main.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "accueil/reste.front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 181,  351 => 178,  347 => 177,  343 => 176,  339 => 175,  335 => 174,  331 => 173,  326 => 172,  316 => 171,  298 => 87,  286 => 29,  280 => 26,  276 => 25,  272 => 24,  268 => 23,  264 => 22,  259 => 21,  249 => 20,  230 => 8,  218 => 183,  216 => 171,  132 => 89,  130 => 87,  117 => 76,  114 => 58,  112 => 57,  109 => 56,  105 => 55,  103 => 54,  79 => 31,  77 => 20,  68 => 14,  64 => 13,  56 => 8,  47 => 1,);
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
<header id=\"header\">
    <div class=\"container d-flex align-items-center justify-content-between\">

        <div class=\"logo\">
            <h1 class=\"text-light\"><a href=\"index.html\"> <span>TunisDiscovery</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href=\"index.html\"><img src=\"assets/img/logo.png\" alt=\"\" class=\"img-fluid\"></a>-->
        </div>

        <nav id=\"navbar\" class=\"navbar \">
            <ul>
                <li><a class=\"nav-link scrollto active\" href=\"#Accueil\">Accueil</a></li> {# ahla biik #}
                <li><a class=\"nav-link scrollto\" href=\"#Equipement\">Equipement</a></li> {# des catégories equipelments / infos produits /  #}
                <li><a class=\"nav-link scrollto\" href=\"{{ path('evenchoisi') }}\">Evenements</a></li> {# liste events / back-end crud event  #}
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

{% block body %}
{% endblock %}
<main id=\"main\">




<!-- ======= Footer ======= -->
<footer id=\"footer\">
    <div class=\"footer-top\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-6\">
                    <div>
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

</html>", "accueil/reste.front.html.twig", "C:\\xampp\\htdocs\\ProjetReservation\\templates\\accueil\\reste.front.html.twig");
    }
}
