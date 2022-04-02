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

/* admin/base.back.html.twig */
class __TwigTemplate_109a99bb2e23bea71edbf5b5186d13c940359f0de76fd9e3a65973c552345311 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/base.back.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/base.back.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>AdminLTE 3 | Dashboard 2</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback\">
    <!-- Font Awesome Icons -->
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/plugins/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\">
    <!-- overlayScrollbars -->
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/plugins/overlayScrollbars/css/OverlayScrollbars.min.css"), "html", null, true);
        echo "\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/dist/css/adminlte.min.css"), "html", null, true);
        echo "\">
</head>
<body class=\"hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed\">
";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 1712
        echo "</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 18
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "<div class=\"wrapper\">

    <!-- Preloader -->
    <div class=\"preloader flex-column justify-content-center align-items-center\">
        <img class=\"animation__wobble\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/dist/img/AdminLTELogo.png"), "html", null, true);
        echo "\" alt=\"AdminLTELogo\" height=\"60\" width=\"60\">
    </div>

    <!-- Navbar -->
    <nav class=\"main-header navbar navbar-expand navbar-dark\">
        <!-- Left navbar links -->
        <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\" role=\"button\"><i class=\"fas fa-bars\"></i></a>
            </li>
            <li class=\"nav-item d-none d-sm-inline-block\">
                <a href=\"index3.html\" class=\"nav-link\">Home</a>
            </li>
            <li class=\"nav-item d-none d-sm-inline-block\">
                <a href=\"#\" class=\"nav-link\">Contact</a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class=\"navbar-nav ml-auto\">
            <!-- Navbar Search -->
            <li class=\"nav-item\">
                <a class=\"nav-link\" data-widget=\"navbar-search\" href=\"#\" role=\"button\">
                    <i class=\"fas fa-search\"></i>
                </a>
                <div class=\"navbar-search-block\">
                    <form class=\"form-inline\">
                        <div class=\"input-group input-group-sm\">
                            <input class=\"form-control form-control-navbar\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                            <div class=\"input-group-append\">
                                <button class=\"btn btn-navbar\" type=\"submit\">
                                    <i class=\"fas fa-search\"></i>
                                </button>
                                <button class=\"btn btn-navbar\" type=\"button\" data-widget=\"navbar-search\">
                                    <i class=\"fas fa-times\"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>

            <!-- Messages Dropdown Menu -->
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
                    <i class=\"far fa-comments\"></i>
                    <span class=\"badge badge-danger navbar-badge\">3</span>
                </a>
                <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
                    <a href=\"#\" class=\"dropdown-item\">
                        <!-- Message Start -->
                        <div class=\"media\">
                            <img src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/dist/img/user1-128x128.jpg"), "html", null, true);
        echo "\" alt=\"User Avatar\" class=\"img-size-50 mr-3 img-circle\">
                            <div class=\"media-body\">
                                <h3 class=\"dropdown-item-title\">
                                    Brad Diesel
                                    <span class=\"float-right text-sm text-danger\"><i class=\"fas fa-star\"></i></span>
                                </h3>
                                <p class=\"text-sm\">Call me whenever you can...</p>
                                <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item\">
                        <!-- Message Start -->
                        <div class=\"media\">
                            <img src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/dist/img/user8-128x128.jpg"), "html", null, true);
        echo "\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
                            <div class=\"media-body\">
                                <h3 class=\"dropdown-item-title\">
                                    John Pierce
                                    <span class=\"float-right text-sm text-muted\"><i class=\"fas fa-star\"></i></span>
                                </h3>
                                <p class=\"text-sm\">I got your message bro</p>
                                <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item\">
                        <!-- Message Start -->
                        <div class=\"media\">
                            <img src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/dist/img/user3-128x128.jpg"), "html", null, true);
        echo "\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
                            <div class=\"media-body\">
                                <h3 class=\"dropdown-item-title\">
                                    Nora Silvester
                                    <span class=\"float-right text-sm text-warning\"><i class=\"fas fa-star\"></i></span>
                                </h3>
                                <p class=\"text-sm\">The subject goes here</p>
                                <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Messages</a>
                </div>
            </li>
            <!-- Notifications Dropdown Menu -->
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
                    <i class=\"far fa-bell\"></i>
                    <span class=\"badge badge-warning navbar-badge\">15</span>
                </a>
                <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
                    <span class=\"dropdown-item dropdown-header\">15 Notifications</span>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item\">
                        <i class=\"fas fa-envelope mr-2\"></i> 4 new messages
                        <span class=\"float-right text-muted text-sm\">3 mins</span>
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item\">
                        <i class=\"fas fa-users mr-2\"></i> 8 friend requests
                        <span class=\"float-right text-muted text-sm\">12 hours</span>
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item\">
                        <i class=\"fas fa-file mr-2\"></i> 3 new reports
                        <span class=\"float-right text-muted text-sm\">2 days</span>
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Notifications</a>
                </div>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" data-widget=\"fullscreen\" href=\"#\" role=\"button\">
                    <i class=\"fas fa-expand-arrows-alt\"></i>
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" data-widget=\"control-sidebar\" data-slide=\"true\" href=\"#\" role=\"button\">
                    <i class=\"fas fa-th-large\"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
        <!-- Brand Logo -->
        <a href=\"index3.html\" class=\"brand-link\">
            <img src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/dist/img/AdminLTELogo.png"), "html", null, true);
        echo "\" alt=\"AdminLTE Logo\" class=\"brand-image img-circle elevation-3\" style=\"opacity: .8\">
            <span class=\"brand-text font-weight-light\">AdminLTE 3</span>
        </a>

        <!-- Sidebar -->
        <div class=\"sidebar\">
            <!-- Sidebar user panel (optional) -->
            <div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
                <div class=\"image\">
                    <img src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/dist/img/FaresAdmin.jpg"), "html", null, true);
        echo "\" class=\"img-circle elevation-2\" alt=\"User Image\">
                </div>
                <div class=\"info\">
                    <a href=\"#\" class=\"d-block\">Fares Mekni</a>
                </div>
            </div>

            <!-- SidebarSearch Form -->
            <div class=\"form-inline\">
                <div class=\"input-group\" data-widget=\"sidebar-search\">
                    <input class=\"form-control form-control-sidebar\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                    <div class=\"input-group-append\">
                        <button class=\"btn btn-sidebar\">
                            <i class=\"fas fa-search fa-fw\"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class=\"mt-2\">
                <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class=\"nav-item menu-open\">
                        <a href=\"#\" class=\"nav-link active\">
                            <i class=\"nav-icon fas fa-tachometer-alt\"></i>
                            <p>
                                Dashboard
                                <i class=\"right fas fa-angle-left\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"./index.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Dashboard v1</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"./index2.html\" class=\"nav-link active\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Dashboard v2</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"./index3.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Dashboard v3</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/pages/widgets.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-th\"></i>
                            <p>
                                Widgets
                                <span class=\"right badge badge-danger\">New</span>
                            </p>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-copy\"></i>
                            <p>
                                Layout Options
                                <i class=\"fas fa-angle-left right\"></i>
                                <span class=\"badge badge-info right\">6</span>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/pages/layout/top-nav.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Top Navigation</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/pages/layout/top-nav-sidebar.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Top Navigation + Sidebar</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/pages/layout/boxed.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Boxed</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/pages/layout/fixed-sidebar.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Fixed Sidebar</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/pages/layout/fixed-sidebar-custom.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Fixed Sidebar <small>+ Custom Area</small></p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/pages/layout/fixed-topnav.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Fixed Navbar</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/pages/layout/fixed-footer.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Fixed Footer</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/pages/layout/collapsed-sidebar.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Collapsed Sidebar</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <ul class=\"nav-item\">
                        <a href=\"";
        // line 300
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("");
        echo "\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-chart-pie\"></i>

                                Devis

                        </a>
                    </ul>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-tree\"></i>
                            <p>
                                UI Elements
                                <i class=\"fas fa-angle-left right\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/pages/UI/general.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>General</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/pages/UI/icons.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Icons</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/pages/UI/buttons.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Buttons</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/pages/UI/sliders.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Sliders</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/pages/UI/modals.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Modals & Alerts</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/pages/UI/navbar.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Navbar & Tabs</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 354
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/pages/UI/timeline.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Timeline</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 360
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/pages/UI/ribbons.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Ribbons</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-edit\"></i>
                            <p>
                                Forms
                                <i class=\"fas fa-angle-left right\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 377
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/pages/forms/general.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>General Elements</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 383
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/pages/forms/advanced.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Advanced Elements</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 389
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/pages/forms/editors.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Editors</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 395
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/pages/forms/validation.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Validation</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-table\"></i>
                            <p>
                                Tables
                                <i class=\"fas fa-angle-left right\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 412
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/pages/tables/simple.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Simple Tables</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 418
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/pages/tables/data.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>DataTables</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 424
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/pages/tables/jsgrid.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>jsGrid</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-header\">EXAMPLES</li>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 433
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/pages/calendar.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-calendar-alt\"></i>
                            <p>
                                Calendar
                                <span class=\"badge badge-info right\">2</span>
                            </p>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 442
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/pages/gallery.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                            <i class=\"nav-icon far fa-image\"></i>
                            <p>
                                Gallery
                            </p>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 450
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/pages/kanban.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-columns\"></i>
                            <p>
                                Kanban Board
                            </p>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon far fa-envelope\"></i>
                            <p>
                                Mailbox
                                <i class=\"fas fa-angle-left right\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 467
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/pages/mailbox/mailbox.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Inbox</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 473
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/pages/mailbox/compose.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Compose</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 479
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/pages/mailbox/read-mail.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Read</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-book\"></i>
                            <p>
                                Pages
                                <i class=\"fas fa-angle-left right\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 496
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/pages/examples/invoice.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Invoice</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 502
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/pages/examples/profile.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Profile</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 508
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/pages/examples/e-commerce.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>E-commerce</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 514
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/pages/examples/projects.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Projects</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 520
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/pages/examples/project-add.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Project Add</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 526
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/pages/examples/project-edit.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Project Edit</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 532
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/pages/examples/project-detail.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Project Detail</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 538
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/pages/examples/contacts.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Contacts</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 544
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/pages/examples/faq.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>FAQ</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 550
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/pages/examples/contact-us.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Contact us</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon far fa-plus-square\"></i>
                            <p>
                                Extras
                                <i class=\"fas fa-angle-left right\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"#\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>
                                        Login & Register v1
                                        <i class=\"fas fa-angle-left right\"></i>
                                    </p>
                                </a>
                                <ul class=\"nav nav-treeview\">
                                    <li class=\"nav-item\">
                                        <a href=\"";
        // line 576
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/pages/examples/login.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                            <i class=\"far fa-circle nav-icon\"></i>
                                            <p>Login v1</p>
                                        </a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a href=\"";
        // line 582
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/pages/examples/register.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                            <i class=\"far fa-circle nav-icon\"></i>
                                            <p>Register v1</p>
                                        </a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a href=\"";
        // line 588
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/pages/examples/forgot-password.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                            <i class=\"far fa-circle nav-icon\"></i>
                                            <p>Forgot Password v1</p>
                                        </a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a href=\"";
        // line 594
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/pages/examples/recover-password.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                            <i class=\"far fa-circle nav-icon\"></i>
                                            <p>Recover Password v1</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"#\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>
                                        Login & Register v2
                                        <i class=\"fas fa-angle-left right\"></i>
                                    </p>
                                </a>
                                <ul class=\"nav nav-treeview\">
                                    <li class=\"nav-item\">
                                        <a href=\"";
        // line 611
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/pages/examples/login-v2.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                            <i class=\"far fa-circle nav-icon\"></i>
                                            <p>Login v2</p>
                                        </a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a href=\"";
        // line 617
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/pages/examples/register-v2.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                            <i class=\"far fa-circle nav-icon\"></i>
                                            <p>Register v2</p>
                                        </a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a href=\"";
        // line 623
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/pages/examples/forgot-password-v2.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                            <i class=\"far fa-circle nav-icon\"></i>
                                            <p>Forgot Password v2</p>
                                        </a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a href=\"";
        // line 629
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/pages/examples/recover-password-v2.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                            <i class=\"far fa-circle nav-icon\"></i>
                                            <p>Recover Password v2</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 637
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/pages/examples/lockscreen.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Lockscreen</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 643
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/pages/examples/legacy-user-menu.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Legacy User Menu</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 649
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/pages/examples/language-menu.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Language Menu</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 655
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/pages/examples/404.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Error 404</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 661
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/pages/examples/500.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Error 500</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 667
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/pages/examples/pace.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Pace</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 673
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/pages/examples/blank.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Blank Page</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"starter.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Starter Page</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-search\"></i>
                            <p>
                                Search
                                <i class=\"fas fa-angle-left right\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 696
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/pages/search/simple.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Simple Search</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 702
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/pages/search/enhanced.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Enhanced</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-header\">MISCELLANEOUS</li>
                    <li class=\"nav-item\">
                        <a href=\"iframe.html\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-ellipsis-h\"></i>
                            <p>Tabbed IFrame Plugin</p>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"https://adminlte.io/docs/3.1/\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-file\"></i>
                            <p>Documentation</p>
                        </a>
                    </li>
                    <li class=\"nav-header\">MULTI LEVEL EXAMPLE</li>
                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"fas fa-circle nav-icon\"></i>
                            <p>Level 1</p>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-circle\"></i>
                            <p>
                                Level 1
                                <i class=\"right fas fa-angle-left\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"#\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Level 2</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"#\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>
                                        Level 2
                                        <i class=\"right fas fa-angle-left\"></i>
                                    </p>
                                </a>
                                <ul class=\"nav nav-treeview\">
                                    <li class=\"nav-item\">
                                        <a href=\"#\" class=\"nav-link\">
                                            <i class=\"far fa-dot-circle nav-icon\"></i>
                                            <p>Level 3</p>
                                        </a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a href=\"#\" class=\"nav-link\">
                                            <i class=\"far fa-dot-circle nav-icon\"></i>
                                            <p>Level 3</p>
                                        </a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a href=\"#\" class=\"nav-link\">
                                            <i class=\"far fa-dot-circle nav-icon\"></i>
                                            <p>Level 3</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"#\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Level 2</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"fas fa-circle nav-icon\"></i>
                            <p>Level 1</p>
                        </a>
                    </li>
                    <li class=\"nav-header\">LABELS</li>
                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon far fa-circle text-danger\"></i>
                            <p class=\"text\">Important</p>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon far fa-circle text-warning\"></i>
                            <p>Warning</p>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon far fa-circle text-info\"></i>
                            <p>Informational</p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <div class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"row mb-2\">
                    <div class=\"col-sm-6\">
                        <h1 class=\"m-0\">Dashboard v2</h1>
                    </div><!-- /.col -->
                    <div class=\"col-sm-6\">
                        <ol class=\"breadcrumb float-sm-right\">
                            <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                            <li class=\"breadcrumb-item active\">Dashboard v2</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class=\"content\">
            <div class=\"container-fluid\">
                <!-- Info boxes -->
                <div class=\"row\">
                    <div class=\"col-12 col-sm-6 col-md-3\">
                        <div class=\"info-box\">
                            <span class=\"info-box-icon bg-info elevation-1\"><i class=\"fas fa-cog\"></i></span>

                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">CPU Traffic</span>
                                <span class=\"info-box-number\">
                  10
                  <small>%</small>
                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class=\"col-12 col-sm-6 col-md-3\">
                        <div class=\"info-box mb-3\">
                            <span class=\"info-box-icon bg-danger elevation-1\"><i class=\"fas fa-thumbs-up\"></i></span>

                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">Likes</span>
                                <span class=\"info-box-number\">41,410</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->

                    <!-- fix for small devices only -->
                    <div class=\"clearfix hidden-md-up\"></div>

                    <div class=\"col-12 col-sm-6 col-md-3\">
                        <div class=\"info-box mb-3\">
                            <span class=\"info-box-icon bg-success elevation-1\"><i class=\"fas fa-shopping-cart\"></i></span>

                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">Sales</span>
                                <span class=\"info-box-number\">760</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class=\"col-12 col-sm-6 col-md-3\">
                        <div class=\"info-box mb-3\">
                            <span class=\"info-box-icon bg-warning elevation-1\"><i class=\"fas fa-users\"></i></span>

                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">New Members</span>
                                <span class=\"info-box-number\">2,000</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h5 class=\"card-title\">Monthly Recap Report</h5>

                                <div class=\"card-tools\">
                                    <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
                                        <i class=\"fas fa-minus\"></i>
                                    </button>
                                    <div class=\"btn-group\">
                                        <button type=\"button\" class=\"btn btn-tool dropdown-toggle\" data-toggle=\"dropdown\">
                                            <i class=\"fas fa-wrench\"></i>
                                        </button>
                                        <div class=\"dropdown-menu dropdown-menu-right\" role=\"menu\">
                                            <a href=\"#\" class=\"dropdown-item\">Action</a>
                                            <a href=\"#\" class=\"dropdown-item\">Another action</a>
                                            <a href=\"#\" class=\"dropdown-item\">Something else here</a>
                                            <a class=\"dropdown-divider\"></a>
                                            <a href=\"#\" class=\"dropdown-item\">Separated link</a>
                                        </div>
                                    </div>
                                    <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
                                        <i class=\"fas fa-times\"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-md-8\">
                                        <p class=\"text-center\">
                                            <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
                                        </p>

                                        <div class=\"chart\">
                                            <!-- Sales Chart Canvas -->
                                            <canvas id=\"salesChart\" height=\"180\" style=\"height: 180px;\"></canvas>
                                        </div>
                                        <!-- /.chart-responsive -->
                                    </div>
                                    <!-- /.col -->
                                    <div class=\"col-md-4\">
                                        <p class=\"text-center\">
                                            <strong>Goal Completion</strong>
                                        </p>

                                        <div class=\"progress-group\">
                                            Add Products to Cart
                                            <span class=\"float-right\"><b>160</b>/200</span>
                                            <div class=\"progress progress-sm\">
                                                <div class=\"progress-bar bg-primary\" style=\"width: 80%\"></div>
                                            </div>
                                        </div>
                                        <!-- /.progress-group -->

                                        <div class=\"progress-group\">
                                            Complete Purchase
                                            <span class=\"float-right\"><b>310</b>/400</span>
                                            <div class=\"progress progress-sm\">
                                                <div class=\"progress-bar bg-danger\" style=\"width: 75%\"></div>
                                            </div>
                                        </div>

                                        <!-- /.progress-group -->
                                        <div class=\"progress-group\">
                                            <span class=\"progress-text\">Visit Premium Page</span>
                                            <span class=\"float-right\"><b>480</b>/800</span>
                                            <div class=\"progress progress-sm\">
                                                <div class=\"progress-bar bg-success\" style=\"width: 60%\"></div>
                                            </div>
                                        </div>

                                        <!-- /.progress-group -->
                                        <div class=\"progress-group\">
                                            Send Inquiries
                                            <span class=\"float-right\"><b>250</b>/500</span>
                                            <div class=\"progress progress-sm\">
                                                <div class=\"progress-bar bg-warning\" style=\"width: 50%\"></div>
                                            </div>
                                        </div>
                                        <!-- /.progress-group -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- ./card-body -->
                            <div class=\"card-footer\">
                                <div class=\"row\">
                                    <div class=\"col-sm-3 col-6\">
                                        <div class=\"description-block border-right\">
                                            <span class=\"description-percentage text-success\"><i class=\"fas fa-caret-up\"></i> 17%</span>
                                            <h5 class=\"description-header\">\$35,210.43</h5>
                                            <span class=\"description-text\">TOTAL REVENUE</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class=\"col-sm-3 col-6\">
                                        <div class=\"description-block border-right\">
                                            <span class=\"description-percentage text-warning\"><i class=\"fas fa-caret-left\"></i> 0%</span>
                                            <h5 class=\"description-header\">\$10,390.90</h5>
                                            <span class=\"description-text\">TOTAL COST</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class=\"col-sm-3 col-6\">
                                        <div class=\"description-block border-right\">
                                            <span class=\"description-percentage text-success\"><i class=\"fas fa-caret-up\"></i> 20%</span>
                                            <h5 class=\"description-header\">\$24,813.53</h5>
                                            <span class=\"description-text\">TOTAL PROFIT</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class=\"col-sm-3 col-6\">
                                        <div class=\"description-block\">
                                            <span class=\"description-percentage text-danger\"><i class=\"fas fa-caret-down\"></i> 18%</span>
                                            <h5 class=\"description-header\">1200</h5>
                                            <span class=\"description-text\">GOAL COMPLETIONS</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.card-footer -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <!-- Main row -->
                <div class=\"row\">
                    <!-- Left col -->
                    <div class=\"col-md-8\">
                        <!-- MAP & BOX PANE -->
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h3 class=\"card-title\">US-Visitors Report</h3>

                                <div class=\"card-tools\">
                                    <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
                                        <i class=\"fas fa-minus\"></i>
                                    </button>
                                    <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
                                        <i class=\"fas fa-times\"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class=\"card-body p-0\">
                                <div class=\"d-md-flex\">
                                    <div class=\"p-1 flex-fill\" style=\"overflow: hidden\">
                                        <!-- Map will be created here -->
                                        <div id=\"world-map-markers\" style=\"height: 325px; overflow: hidden\">
                                            <div class=\"map\"></div>
                                        </div>
                                    </div>
                                    <div class=\"card-pane-right bg-success pt-2 pb-2 pl-4 pr-4\">
                                        <div class=\"description-block mb-4\">
                                            <div class=\"sparkbar pad\" data-color=\"#fff\">90,70,90,70,75,80,70</div>
                                            <h5 class=\"description-header\">8390</h5>
                                            <span class=\"description-text\">Visits</span>
                                        </div>
                                        <!-- /.description-block -->
                                        <div class=\"description-block mb-4\">
                                            <div class=\"sparkbar pad\" data-color=\"#fff\">90,50,90,70,61,83,63</div>
                                            <h5 class=\"description-header\">30%</h5>
                                            <span class=\"description-text\">Referrals</span>
                                        </div>
                                        <!-- /.description-block -->
                                        <div class=\"description-block\">
                                            <div class=\"sparkbar pad\" data-color=\"#fff\">90,50,90,70,61,83,63</div>
                                            <h5 class=\"description-header\">70%</h5>
                                            <span class=\"description-text\">Organic</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div><!-- /.card-pane-right -->
                                </div><!-- /.d-md-flex -->
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <!-- DIRECT CHAT -->
                                <div class=\"card direct-chat direct-chat-warning\">
                                    <div class=\"card-header\">
                                        <h3 class=\"card-title\">Direct Chat</h3>

                                        <div class=\"card-tools\">
                                            <span title=\"3 New Messages\" class=\"badge badge-warning\">3</span>
                                            <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
                                                <i class=\"fas fa-minus\"></i>
                                            </button>
                                            <button type=\"button\" class=\"btn btn-tool\" title=\"Contacts\" data-widget=\"chat-pane-toggle\">
                                                <i class=\"fas fa-comments\"></i>
                                            </button>
                                            <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
                                                <i class=\"fas fa-times\"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class=\"card-body\">
                                        <!-- Conversations are loaded here -->
                                        <div class=\"direct-chat-messages\">
                                            <!-- Message. Default to the left -->
                                            <div class=\"direct-chat-msg\">
                                                <div class=\"direct-chat-infos clearfix\">
                                                    <span class=\"direct-chat-name float-left\">Alexander Pierce</span>
                                                    <span class=\"direct-chat-timestamp float-right\">23 Jan 2:00 pm</span>
                                                </div>
                                                <!-- /.direct-chat-infos -->
                                                <img class=\"direct-chat-img\" src=\"dist/img/user1-128x128.jpg\" alt=\"message user image\">
                                                <!-- /.direct-chat-img -->
                                                <div class=\"direct-chat-text\">
                                                    Is this template really for free? That's unbelievable!
                                                </div>
                                                <!-- /.direct-chat-text -->
                                            </div>
                                            <!-- /.direct-chat-msg -->

                                            <!-- Message to the right -->
                                            <div class=\"direct-chat-msg right\">
                                                <div class=\"direct-chat-infos clearfix\">
                                                    <span class=\"direct-chat-name float-right\">Sarah Bullock</span>
                                                    <span class=\"direct-chat-timestamp float-left\">23 Jan 2:05 pm</span>
                                                </div>
                                                <!-- /.direct-chat-infos -->
                                                <img class=\"direct-chat-img\" src=\"dist/img/user3-128x128.jpg\" alt=\"message user image\">
                                                <!-- /.direct-chat-img -->
                                                <div class=\"direct-chat-text\">
                                                    You better believe it!
                                                </div>
                                                <!-- /.direct-chat-text -->
                                            </div>
                                            <!-- /.direct-chat-msg -->

                                            <!-- Message. Default to the left -->
                                            <div class=\"direct-chat-msg\">
                                                <div class=\"direct-chat-infos clearfix\">
                                                    <span class=\"direct-chat-name float-left\">Alexander Pierce</span>
                                                    <span class=\"direct-chat-timestamp float-right\">23 Jan 5:37 pm</span>
                                                </div>
                                                <!-- /.direct-chat-infos -->
                                                <img class=\"direct-chat-img\" src=\"";
        // line 1151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/dist/img/user1-128x128.jpg"), "html", null, true);
        echo "\" alt=\"message user image\">
                                                <!-- /.direct-chat-img -->
                                                <div class=\"direct-chat-text\">
                                                    Working with AdminLTE on a great new app! Wanna join?
                                                </div>
                                                <!-- /.direct-chat-text -->
                                            </div>
                                            <!-- /.direct-chat-msg -->

                                            <!-- Message to the right -->
                                            <div class=\"direct-chat-msg right\">
                                                <div class=\"direct-chat-infos clearfix\">
                                                    <span class=\"direct-chat-name float-right\">Sarah Bullock</span>
                                                    <span class=\"direct-chat-timestamp float-left\">23 Jan 6:10 pm</span>
                                                </div>
                                                <!-- /.direct-chat-infos -->
                                                <img class=\"direct-chat-img\" src=\"";
        // line 1167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/dist/img/user3-128x128.jpg"), "html", null, true);
        echo "\" alt=\"message user image\">
                                                <!-- /.direct-chat-img -->
                                                <div class=\"direct-chat-text\">
                                                    I would love to.
                                                </div>
                                                <!-- /.direct-chat-text -->
                                            </div>
                                            <!-- /.direct-chat-msg -->

                                        </div>
                                        <!--/.direct-chat-messages-->

                                        <!-- Contacts are loaded here -->
                                        <div class=\"direct-chat-contacts\">
                                            <ul class=\"contacts-list\">
                                                <li>
                                                    <a href=\"#\">
                                                        <img class=\"contacts-list-img\" src=\"";
        // line 1184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/dist/img/user1-128x128.jpg"), "html", null, true);
        echo "\" alt=\"User Avatar\">

                                                        <div class=\"contacts-list-info\">
                              <span class=\"contacts-list-name\">
                                Count Dracula
                                <small class=\"contacts-list-date float-right\">2/28/2015</small>
                              </span>
                                                            <span class=\"contacts-list-msg\">How have you been? I was...</span>
                                                        </div>
                                                        <!-- /.contacts-list-info -->
                                                    </a>
                                                </li>
                                                <!-- End Contact Item -->
                                                <li>
                                                    <a href=\"#\">
                                                        <img class=\"contacts-list-img\" src=\"";
        // line 1199
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/dist/img/user7-128x128.jpg"), "html", null, true);
        echo "\" alt=\"User Avatar\">

                                                        <div class=\"contacts-list-info\">
                              <span class=\"contacts-list-name\">
                                Sarah Doe
                                <small class=\"contacts-list-date float-right\">2/23/2015</small>
                              </span>
                                                            <span class=\"contacts-list-msg\">I will be waiting for...</span>
                                                        </div>
                                                        <!-- /.contacts-list-info -->
                                                    </a>
                                                </li>
                                                <!-- End Contact Item -->
                                                <li>
                                                    <a href=\"#\">
                                                        <img class=\"contacts-list-img\" src=\"";
        // line 1214
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/dist/img/user3-128x128.jpg"), "html", null, true);
        echo "\" alt=\"User Avatar\">

                                                        <div class=\"contacts-list-info\">
                              <span class=\"contacts-list-name\">
                                Nadia Jolie
                                <small class=\"contacts-list-date float-right\">2/20/2015</small>
                              </span>
                                                            <span class=\"contacts-list-msg\">I'll call you back at...</span>
                                                        </div>
                                                        <!-- /.contacts-list-info -->
                                                    </a>
                                                </li>
                                                <!-- End Contact Item -->
                                                <li>
                                                    <a href=\"#\">
                                                        <img class=\"contacts-list-img\" src=\"";
        // line 1229
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/dist/img/user5-128x128.jpg"), "html", null, true);
        echo "\" alt=\"User Avatar\">

                                                        <div class=\"contacts-list-info\">
                              <span class=\"contacts-list-name\">
                                Nora S. Vans
                                <small class=\"contacts-list-date float-right\">2/10/2015</small>
                              </span>
                                                            <span class=\"contacts-list-msg\">Where is your new...</span>
                                                        </div>
                                                        <!-- /.contacts-list-info -->
                                                    </a>
                                                </li>
                                                <!-- End Contact Item -->
                                                <li>
                                                    <a href=\"#\">
                                                        <img class=\"contacts-list-img\" src=\"";
        // line 1244
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/dist/img/user6-128x128.jpg"), "html", null, true);
        echo "\" alt=\"User Avatar\">

                                                        <div class=\"contacts-list-info\">
                              <span class=\"contacts-list-name\">
                                John K.
                                <small class=\"contacts-list-date float-right\">1/27/2015</small>
                              </span>
                                                            <span class=\"contacts-list-msg\">Can I take a look at...</span>
                                                        </div>
                                                        <!-- /.contacts-list-info -->
                                                    </a>
                                                </li>
                                                <!-- End Contact Item -->
                                                <li>
                                                    <a href=\"#\">
                                                        <img class=\"contacts-list-img\" src=\"";
        // line 1259
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/dist/img/user8-128x128.jpg"), "html", null, true);
        echo "\" alt=\"User Avatar\">

                                                        <div class=\"contacts-list-info\">
                              <span class=\"contacts-list-name\">
                                Kenneth M.
                                <small class=\"contacts-list-date float-right\">1/4/2015</small>
                              </span>
                                                            <span class=\"contacts-list-msg\">Never mind I found...</span>
                                                        </div>
                                                        <!-- /.contacts-list-info -->
                                                    </a>
                                                </li>
                                                <!-- End Contact Item -->
                                            </ul>
                                            <!-- /.contacts-list -->
                                        </div>
                                        <!-- /.direct-chat-pane -->
                                    </div>
                                    <!-- /.card-body -->
                                    <div class=\"card-footer\">
                                        <form action=\"#\" method=\"post\">
                                            <div class=\"input-group\">
                                                <input type=\"text\" name=\"message\" placeholder=\"Type Message ...\" class=\"form-control\">
                                                <span class=\"input-group-append\">
                          <button type=\"button\" class=\"btn btn-warning\">Send</button>
                        </span>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /.card-footer-->
                                </div>
                                <!--/.direct-chat -->
                            </div>
                            <!-- /.col -->

                            <div class=\"col-md-6\">
                                <!-- USERS LIST -->
                                <div class=\"card\">
                                    <div class=\"card-header\">
                                        <h3 class=\"card-title\">Latest Members</h3>

                                        <div class=\"card-tools\">
                                            <span class=\"badge badge-danger\">8 New Members</span>
                                            <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
                                                <i class=\"fas fa-minus\"></i>
                                            </button>
                                            <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
                                                <i class=\"fas fa-times\"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class=\"card-body p-0\">
                                        <ul class=\"users-list clearfix\">
                                            <li>
                                                <img src=\"";
        // line 1314
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/dist/img/user1-128x128.jpg"), "html", null, true);
        echo "\" alt=\"User Image\">
                                                <a class=\"users-list-name\" href=\"#\">Alexander Pierce</a>
                                                <span class=\"users-list-date\">Today</span>
                                            </li>
                                            <li>
                                                <img src=\"";
        // line 1319
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/dist/img/user8-128x128.jpg"), "html", null, true);
        echo "\" alt=\"User Image\">
                                                <a class=\"users-list-name\" href=\"#\">Norman</a>
                                                <span class=\"users-list-date\">Yesterday</span>
                                            </li>
                                            <li>
                                                <img src=\"";
        // line 1324
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/dist/img/user7-128x128.jpg"), "html", null, true);
        echo "\" alt=\"User Image\">
                                                <a class=\"users-list-name\" href=\"#\">Jane</a>
                                                <span class=\"users-list-date\">12 Jan</span>
                                            </li>
                                            <li>
                                                <img src=\"";
        // line 1329
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/dist/img/user6-128x128.jpg"), "html", null, true);
        echo "\" alt=\"User Image\">
                                                <a class=\"users-list-name\" href=\"#\">John</a>
                                                <span class=\"users-list-date\">12 Jan</span>
                                            </li>
                                            <li>
                                                <img src=\"";
        // line 1334
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" alt=\"User Image\">
                                                <a class=\"users-list-name\" href=\"#\">Alexander</a>
                                                <span class=\"users-list-date\">13 Jan</span>
                                            </li>
                                            <li>
                                                <img src=\"";
        // line 1339
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/dist/img/user5-128x128.jpg"), "html", null, true);
        echo "\" alt=\"User Image\">
                                                <a class=\"users-list-name\" href=\"#\">Sarah</a>
                                                <span class=\"users-list-date\">14 Jan</span>
                                            </li>
                                            <li>
                                                <img src=\"";
        // line 1344
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/dist/img/user4-128x128.jpg"), "html", null, true);
        echo "\" alt=\"User Image\">
                                                <a class=\"users-list-name\" href=\"#\">Nora</a>
                                                <span class=\"users-list-date\">15 Jan</span>
                                            </li>
                                            <li>
                                                <img src=\"";
        // line 1349
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/dist/img/user3-128x128.jpg"), "html", null, true);
        echo "\" alt=\"User Image\">
                                                <a class=\"users-list-name\" href=\"#\">Nadia</a>
                                                <span class=\"users-list-date\">15 Jan</span>
                                            </li>
                                        </ul>
                                        <!-- /.users-list -->
                                    </div>
                                    <!-- /.card-body -->
                                    <div class=\"card-footer text-center\">
                                        <a href=\"javascript:\">View All Users</a>
                                    </div>
                                    <!-- /.card-footer -->
                                </div>
                                <!--/.card -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <!-- TABLE: LATEST ORDERS -->
                        <div class=\"card\">
                            <div class=\"card-header border-transparent\">
                                <h3 class=\"card-title\">Latest Orders</h3>

                                <div class=\"card-tools\">
                                    <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
                                        <i class=\"fas fa-minus\"></i>
                                    </button>
                                    <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
                                        <i class=\"fas fa-times\"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class=\"card-body p-0\">
                                <div class=\"table-responsive\">
                                    <table class=\"table m-0\">
                                        <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Item</th>
                                            <th>Status</th>
                                            <th>Popularity</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><a href=\"";
        // line 1396
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/pages/examples/invoice.html"), "html", null, true);
        echo "\">OR9842</a></td>
                                            <td>Call of Duty IV</td>
                                            <td><span class=\"badge badge-success\">Shipped</span></td>
                                            <td>
                                                <div class=\"sparkbar\" data-color=\"#00a65a\" data-height=\"20\">90,80,90,-70,61,-83,63</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href=\"";
        // line 1404
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/pages/examples/invoice.html"), "html", null, true);
        echo "\">OR1848</a></td>
                                            <td>Samsung Smart TV</td>
                                            <td><span class=\"badge badge-warning\">Pending</span></td>
                                            <td>
                                                <div class=\"sparkbar\" data-color=\"#f39c12\" data-height=\"20\">90,80,-90,70,61,-83,68</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href=\"";
        // line 1412
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/pages/examples/invoice.html"), "html", null, true);
        echo "\">OR7429</a></td>
                                            <td>iPhone 6 Plus</td>
                                            <td><span class=\"badge badge-danger\">Delivered</span></td>
                                            <td>
                                                <div class=\"sparkbar\" data-color=\"#f56954\" data-height=\"20\">90,-80,90,70,-61,83,63</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href=\"";
        // line 1420
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/pages/examples/invoice.html"), "html", null, true);
        echo "\">OR7429</a></td>
                                            <td>Samsung Smart TV</td>
                                            <td><span class=\"badge badge-info\">Processing</span></td>
                                            <td>
                                                <div class=\"sparkbar\" data-color=\"#00c0ef\" data-height=\"20\">90,80,-90,70,-61,83,63</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href=\"";
        // line 1428
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/pages/examples/invoice.html"), "html", null, true);
        echo "\">OR1848</a></td>
                                            <td>Samsung Smart TV</td>
                                            <td><span class=\"badge badge-warning\">Pending</span></td>
                                            <td>
                                                <div class=\"sparkbar\" data-color=\"#f39c12\" data-height=\"20\">90,80,-90,70,61,-83,68</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href=\"";
        // line 1436
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/pages/examples/invoice.html"), "html", null, true);
        echo "\">OR7429</a></td>
                                            <td>iPhone 6 Plus</td>
                                            <td><span class=\"badge badge-danger\">Delivered</span></td>
                                            <td>
                                                <div class=\"sparkbar\" data-color=\"#f56954\" data-height=\"20\">90,-80,90,70,-61,83,63</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href=\"";
        // line 1444
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/pages/examples/invoice.html"), "html", null, true);
        echo "\">OR9842</a></td>
                                            <td>Call of Duty IV</td>
                                            <td><span class=\"badge badge-success\">Shipped</span></td>
                                            <td>
                                                <div class=\"sparkbar\" data-color=\"#00a65a\" data-height=\"20\">90,80,90,-70,61,-83,63</div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.card-body -->
                            <div class=\"card-footer clearfix\">
                                <a href=\"javascript:void(0)\" class=\"btn btn-sm btn-info float-left\">Place New Order</a>
                                <a href=\"javascript:void(0)\" class=\"btn btn-sm btn-secondary float-right\">View All Orders</a>
                            </div>
                            <!-- /.card-footer -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->

                    <div class=\"col-md-4\">
                        <!-- Info Boxes Style 2 -->
                        <div class=\"info-box mb-3 bg-warning\">
                            <span class=\"info-box-icon\"><i class=\"fas fa-tag\"></i></span>

                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">Inventory</span>
                                <span class=\"info-box-number\">5,200</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                        <div class=\"info-box mb-3 bg-success\">
                            <span class=\"info-box-icon\"><i class=\"far fa-heart\"></i></span>

                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">Mentions</span>
                                <span class=\"info-box-number\">92,050</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                        <div class=\"info-box mb-3 bg-danger\">
                            <span class=\"info-box-icon\"><i class=\"fas fa-cloud-download-alt\"></i></span>

                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">Downloads</span>
                                <span class=\"info-box-number\">114,381</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                        <div class=\"info-box mb-3 bg-info\">
                            <span class=\"info-box-icon\"><i class=\"far fa-comment\"></i></span>

                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">Direct Messages</span>
                                <span class=\"info-box-number\">163,921</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->

                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h3 class=\"card-title\">Browser Usage</h3>

                                <div class=\"card-tools\">
                                    <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
                                        <i class=\"fas fa-minus\"></i>
                                    </button>
                                    <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
                                        <i class=\"fas fa-times\"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-md-8\">
                                        <div class=\"chart-responsive\">
                                            <canvas id=\"pieChart\" height=\"150\"></canvas>
                                        </div>
                                        <!-- ./chart-responsive -->
                                    </div>
                                    <!-- /.col -->
                                    <div class=\"col-md-4\">
                                        <ul class=\"chart-legend clearfix\">
                                            <li><i class=\"far fa-circle text-danger\"></i> Chrome</li>
                                            <li><i class=\"far fa-circle text-success\"></i> IE</li>
                                            <li><i class=\"far fa-circle text-warning\"></i> FireFox</li>
                                            <li><i class=\"far fa-circle text-info\"></i> Safari</li>
                                            <li><i class=\"far fa-circle text-primary\"></i> Opera</li>
                                            <li><i class=\"far fa-circle text-secondary\"></i> Navigator</li>
                                        </ul>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.card-body -->
                            <div class=\"card-footer bg-light p-0\">
                                <ul class=\"nav nav-pills flex-column\">
                                    <li class=\"nav-item\">
                                        <a href=\"#\" class=\"nav-link\">
                                            United States of America
                                            <span class=\"float-right text-danger\">
                        <i class=\"fas fa-arrow-down text-sm\"></i>
                        12%</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a href=\"#\" class=\"nav-link\">
                                            India
                                            <span class=\"float-right text-success\">
                        <i class=\"fas fa-arrow-up text-sm\"></i> 4%
                      </span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a href=\"#\" class=\"nav-link\">
                                            China
                                            <span class=\"float-right text-warning\">
                        <i class=\"fas fa-arrow-left text-sm\"></i> 0%
                      </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.footer -->
                        </div>
                        <!-- /.card -->

                        <!-- PRODUCT LIST -->
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h3 class=\"card-title\">Recently Added Products</h3>

                                <div class=\"card-tools\">
                                    <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
                                        <i class=\"fas fa-minus\"></i>
                                    </button>
                                    <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
                                        <i class=\"fas fa-times\"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class=\"card-body p-0\">
                                <ul class=\"products-list product-list-in-card pl-2 pr-2\">
                                    <li class=\"item\">
                                        <div class=\"product-img\">
                                            <img src=\"";
        // line 1599
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/dist/img/default-150x150.png"), "html", null, true);
        echo "\" alt=\"Product Image\" class=\"img-size-50\">
                                        </div>
                                        <div class=\"product-info\">
                                            <a href=\"javascript:void(0)\" class=\"product-title\">Samsung TV
                                                <span class=\"badge badge-warning float-right\">\$1800</span></a>
                                            <span class=\"product-description\">
                        Samsung 32\" 1080p 60Hz LED Smart HDTV.
                      </span>
                                        </div>
                                    </li>
                                    <!-- /.item -->
                                    <li class=\"item\">
                                        <div class=\"product-img\">
                                            <img src=\"";
        // line 1612
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/dist/img/default-150x150.png"), "html", null, true);
        echo "\" alt=\"Product Image\" class=\"img-size-50\">
                                        </div>
                                        <div class=\"product-info\">
                                            <a href=\"javascript:void(0)\" class=\"product-title\">Bicycle
                                                <span class=\"badge badge-info float-right\">\$700</span></a>
                                            <span class=\"product-description\">
                        26\" Mongoose Dolomite Men's 7-speed, Navy Blue.
                      </span>
                                        </div>
                                    </li>
                                    <!-- /.item -->
                                    <li class=\"item\">
                                        <div class=\"product-img\">
                                            <img src=\"";
        // line 1625
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/dist/img/default-150x150.png"), "html", null, true);
        echo "\" alt=\"Product Image\" class=\"img-size-50\">
                                        </div>
                                        <div class=\"product-info\">
                                            <a href=\"javascript:void(0)\" class=\"product-title\">
                                                Xbox One <span class=\"badge badge-danger float-right\">
                        \$350
                      </span>
                                            </a>
                                            <span class=\"product-description\">
                        Xbox One Console Bundle with Halo Master Chief Collection.
                      </span>
                                        </div>
                                    </li>
                                    <!-- /.item -->
                                    <li class=\"item\">
                                        <div class=\"product-img\">
                                            <img src=\"";
        // line 1641
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/dist/img/default-150x150.png"), "html", null, true);
        echo "\" alt=\"Product Image\" class=\"img-size-50\">
                                        </div>
                                        <div class=\"product-info\">
                                            <a href=\"javascript:void(0)\" class=\"product-title\">PlayStation 4
                                                <span class=\"badge badge-success float-right\">\$399</span></a>
                                            <span class=\"product-description\">
                        PlayStation 4 500GB Console (PS4)
                      </span>
                                        </div>
                                    </li>
                                    <!-- /.item -->
                                </ul>
                            </div>
                            <!-- /.card-body -->
                            <div class=\"card-footer text-center\">
                                <a href=\"javascript:void(0)\" class=\"uppercase\">View All Products</a>
                            </div>
                            <!-- /.card-footer -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class=\"control-sidebar control-sidebar-dark\">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class=\"main-footer\">
        <strong>Copyright &copy; 2014-2021 <a href=\"https://adminlte.io\">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class=\"float-right d-none d-sm-inline-block\">
            <b>Version</b> 3.1.0
        </div>
    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src=\"";
        // line 1690
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/plugins/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap -->
<script src=\"";
        // line 1692
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/plugins/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<!-- overlayScrollbars -->
<script src=\"";
        // line 1694
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"), "html", null, true);
        echo "\"></script>
<!-- AdminLTE App -->
<script src=\"";
        // line 1696
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/dist/js/adminlte.js"), "html", null, true);
        echo "\"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src=\"";
        // line 1700
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/plugins/jquery-mousewheel/jquery.mousewheel.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1701
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/plugins/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1702
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/plugins/jquery-mapael/jquery.mapael.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1703
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/plugins/jquery-mapael/maps/usa_states.min.js"), "html", null, true);
        echo "\"></script>
<!-- ChartJS -->
<script src=\"";
        // line 1705
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/plugins/chart.js/Chart.min.js"), "html", null, true);
        echo "\"></script>

<!-- AdminLTE for demo purposes -->
<script src=\"";
        // line 1708
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/dist/js/demo.js"), "html", null, true);
        echo "\"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src=\"";
        // line 1710
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/dist/js/pages/dashboard2.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/base.back.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2092 => 1710,  2087 => 1708,  2081 => 1705,  2076 => 1703,  2072 => 1702,  2068 => 1701,  2064 => 1700,  2057 => 1696,  2052 => 1694,  2047 => 1692,  2042 => 1690,  1990 => 1641,  1971 => 1625,  1955 => 1612,  1939 => 1599,  1781 => 1444,  1770 => 1436,  1759 => 1428,  1748 => 1420,  1737 => 1412,  1726 => 1404,  1715 => 1396,  1665 => 1349,  1657 => 1344,  1649 => 1339,  1641 => 1334,  1633 => 1329,  1625 => 1324,  1617 => 1319,  1609 => 1314,  1551 => 1259,  1533 => 1244,  1515 => 1229,  1497 => 1214,  1479 => 1199,  1461 => 1184,  1441 => 1167,  1422 => 1151,  970 => 702,  961 => 696,  935 => 673,  926 => 667,  917 => 661,  908 => 655,  899 => 649,  890 => 643,  881 => 637,  870 => 629,  861 => 623,  852 => 617,  843 => 611,  823 => 594,  814 => 588,  805 => 582,  796 => 576,  767 => 550,  758 => 544,  749 => 538,  740 => 532,  731 => 526,  722 => 520,  713 => 514,  704 => 508,  695 => 502,  686 => 496,  666 => 479,  657 => 473,  648 => 467,  628 => 450,  617 => 442,  605 => 433,  593 => 424,  584 => 418,  575 => 412,  555 => 395,  546 => 389,  537 => 383,  528 => 377,  508 => 360,  499 => 354,  490 => 348,  481 => 342,  472 => 336,  463 => 330,  454 => 324,  445 => 318,  424 => 300,  413 => 292,  404 => 286,  395 => 280,  386 => 274,  377 => 268,  368 => 262,  359 => 256,  350 => 250,  328 => 231,  271 => 177,  259 => 168,  195 => 107,  176 => 91,  157 => 75,  102 => 23,  96 => 19,  86 => 18,  74 => 1712,  72 => 18,  66 => 15,  61 => 13,  56 => 11,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>AdminLTE 3 | Dashboard 2</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback\">
    <!-- Font Awesome Icons -->
    <link rel=\"stylesheet\" href=\"{{ asset(\"back-end/plugins/fontawesome-free/css/all.min.css\")}}\">
    <!-- overlayScrollbars -->
    <link rel=\"stylesheet\" href=\"{{ asset(\"back-end/plugins/overlayScrollbars/css/OverlayScrollbars.min.css\")}}\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"{{ asset(\"back-end/dist/css/adminlte.min.css\")}}\">
</head>
<body class=\"hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed\">
{% block body%}
<div class=\"wrapper\">

    <!-- Preloader -->
    <div class=\"preloader flex-column justify-content-center align-items-center\">
        <img class=\"animation__wobble\" src=\"{{ asset(\"back-end/dist/img/AdminLTELogo.png\")}}\" alt=\"AdminLTELogo\" height=\"60\" width=\"60\">
    </div>

    <!-- Navbar -->
    <nav class=\"main-header navbar navbar-expand navbar-dark\">
        <!-- Left navbar links -->
        <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\" role=\"button\"><i class=\"fas fa-bars\"></i></a>
            </li>
            <li class=\"nav-item d-none d-sm-inline-block\">
                <a href=\"index3.html\" class=\"nav-link\">Home</a>
            </li>
            <li class=\"nav-item d-none d-sm-inline-block\">
                <a href=\"#\" class=\"nav-link\">Contact</a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class=\"navbar-nav ml-auto\">
            <!-- Navbar Search -->
            <li class=\"nav-item\">
                <a class=\"nav-link\" data-widget=\"navbar-search\" href=\"#\" role=\"button\">
                    <i class=\"fas fa-search\"></i>
                </a>
                <div class=\"navbar-search-block\">
                    <form class=\"form-inline\">
                        <div class=\"input-group input-group-sm\">
                            <input class=\"form-control form-control-navbar\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                            <div class=\"input-group-append\">
                                <button class=\"btn btn-navbar\" type=\"submit\">
                                    <i class=\"fas fa-search\"></i>
                                </button>
                                <button class=\"btn btn-navbar\" type=\"button\" data-widget=\"navbar-search\">
                                    <i class=\"fas fa-times\"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>

            <!-- Messages Dropdown Menu -->
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
                    <i class=\"far fa-comments\"></i>
                    <span class=\"badge badge-danger navbar-badge\">3</span>
                </a>
                <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
                    <a href=\"#\" class=\"dropdown-item\">
                        <!-- Message Start -->
                        <div class=\"media\">
                            <img src=\"{{ asset(\"back-end/dist/img/user1-128x128.jpg\")}}\" alt=\"User Avatar\" class=\"img-size-50 mr-3 img-circle\">
                            <div class=\"media-body\">
                                <h3 class=\"dropdown-item-title\">
                                    Brad Diesel
                                    <span class=\"float-right text-sm text-danger\"><i class=\"fas fa-star\"></i></span>
                                </h3>
                                <p class=\"text-sm\">Call me whenever you can...</p>
                                <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item\">
                        <!-- Message Start -->
                        <div class=\"media\">
                            <img src=\"{{ asset(\"back-end/dist/img/user8-128x128.jpg\")}}\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
                            <div class=\"media-body\">
                                <h3 class=\"dropdown-item-title\">
                                    John Pierce
                                    <span class=\"float-right text-sm text-muted\"><i class=\"fas fa-star\"></i></span>
                                </h3>
                                <p class=\"text-sm\">I got your message bro</p>
                                <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item\">
                        <!-- Message Start -->
                        <div class=\"media\">
                            <img src=\"{{ asset(\"back-end/dist/img/user3-128x128.jpg\")}}\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
                            <div class=\"media-body\">
                                <h3 class=\"dropdown-item-title\">
                                    Nora Silvester
                                    <span class=\"float-right text-sm text-warning\"><i class=\"fas fa-star\"></i></span>
                                </h3>
                                <p class=\"text-sm\">The subject goes here</p>
                                <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Messages</a>
                </div>
            </li>
            <!-- Notifications Dropdown Menu -->
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
                    <i class=\"far fa-bell\"></i>
                    <span class=\"badge badge-warning navbar-badge\">15</span>
                </a>
                <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
                    <span class=\"dropdown-item dropdown-header\">15 Notifications</span>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item\">
                        <i class=\"fas fa-envelope mr-2\"></i> 4 new messages
                        <span class=\"float-right text-muted text-sm\">3 mins</span>
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item\">
                        <i class=\"fas fa-users mr-2\"></i> 8 friend requests
                        <span class=\"float-right text-muted text-sm\">12 hours</span>
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item\">
                        <i class=\"fas fa-file mr-2\"></i> 3 new reports
                        <span class=\"float-right text-muted text-sm\">2 days</span>
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Notifications</a>
                </div>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" data-widget=\"fullscreen\" href=\"#\" role=\"button\">
                    <i class=\"fas fa-expand-arrows-alt\"></i>
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" data-widget=\"control-sidebar\" data-slide=\"true\" href=\"#\" role=\"button\">
                    <i class=\"fas fa-th-large\"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
        <!-- Brand Logo -->
        <a href=\"index3.html\" class=\"brand-link\">
            <img src=\"{{ asset(\"back-end/dist/img/AdminLTELogo.png\")}}\" alt=\"AdminLTE Logo\" class=\"brand-image img-circle elevation-3\" style=\"opacity: .8\">
            <span class=\"brand-text font-weight-light\">AdminLTE 3</span>
        </a>

        <!-- Sidebar -->
        <div class=\"sidebar\">
            <!-- Sidebar user panel (optional) -->
            <div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
                <div class=\"image\">
                    <img src=\"{{ asset(\"back-end/dist/img/FaresAdmin.jpg\")}}\" class=\"img-circle elevation-2\" alt=\"User Image\">
                </div>
                <div class=\"info\">
                    <a href=\"#\" class=\"d-block\">Fares Mekni</a>
                </div>
            </div>

            <!-- SidebarSearch Form -->
            <div class=\"form-inline\">
                <div class=\"input-group\" data-widget=\"sidebar-search\">
                    <input class=\"form-control form-control-sidebar\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                    <div class=\"input-group-append\">
                        <button class=\"btn btn-sidebar\">
                            <i class=\"fas fa-search fa-fw\"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class=\"mt-2\">
                <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class=\"nav-item menu-open\">
                        <a href=\"#\" class=\"nav-link active\">
                            <i class=\"nav-icon fas fa-tachometer-alt\"></i>
                            <p>
                                Dashboard
                                <i class=\"right fas fa-angle-left\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"./index.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Dashboard v1</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"./index2.html\" class=\"nav-link active\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Dashboard v2</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"./index3.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Dashboard v3</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"{{ asset(\"back-end/pages/widgets.html\")}}\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-th\"></i>
                            <p>
                                Widgets
                                <span class=\"right badge badge-danger\">New</span>
                            </p>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-copy\"></i>
                            <p>
                                Layout Options
                                <i class=\"fas fa-angle-left right\"></i>
                                <span class=\"badge badge-info right\">6</span>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"{{ asset(\"back-end/pages/layout/top-nav.html\")}}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Top Navigation</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ asset(\"back-end/pages/layout/top-nav-sidebar.html\")}}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Top Navigation + Sidebar</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ asset(\"back-end/pages/layout/boxed.html\")}}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Boxed</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ asset(\"back-end/pages/layout/fixed-sidebar.html\")}}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Fixed Sidebar</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ asset(\"back-end/pages/layout/fixed-sidebar-custom.html\")}}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Fixed Sidebar <small>+ Custom Area</small></p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ asset(\"back-end/pages/layout/fixed-topnav.html\")}}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Fixed Navbar</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ asset(\"back-end/pages/layout/fixed-footer.html\")}}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Fixed Footer</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ asset(\"back-end/pages/layout/collapsed-sidebar.html\")}}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Collapsed Sidebar</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <ul class=\"nav-item\">
                        <a href=\"{{ path('') }}\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-chart-pie\"></i>

                                Devis

                        </a>
                    </ul>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-tree\"></i>
                            <p>
                                UI Elements
                                <i class=\"fas fa-angle-left right\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"{{ asset(\"back-end/pages/UI/general.html\")}}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>General</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ asset(\"back-end/pages/UI/icons.html\")}}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Icons</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ asset(\"back-end/pages/UI/buttons.html\")}}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Buttons</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ asset(\"back-end/pages/UI/sliders.html\")}}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Sliders</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ asset(\"back-end/pages/UI/modals.html\")}}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Modals & Alerts</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ asset(\"back-end/pages/UI/navbar.html\")}}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Navbar & Tabs</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ asset(\"back-end/pages/UI/timeline.html\")}}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Timeline</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ asset(\"back-end/pages/UI/ribbons.html\")}}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Ribbons</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-edit\"></i>
                            <p>
                                Forms
                                <i class=\"fas fa-angle-left right\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"{{ asset(\"back-end/pages/forms/general.html\")}}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>General Elements</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ asset(\"back-end/pages/forms/advanced.html\")}}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Advanced Elements</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ asset(\"back-end/pages/forms/editors.html\")}}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Editors</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ asset(\"back-end/pages/forms/validation.html\")}}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Validation</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-table\"></i>
                            <p>
                                Tables
                                <i class=\"fas fa-angle-left right\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"{{ asset(\"back-end/pages/tables/simple.html\")}}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Simple Tables</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ asset(\"back-end/pages/tables/data.html\")}}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>DataTables</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ asset(\"back-end/pages/tables/jsgrid.html\")}}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>jsGrid</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-header\">EXAMPLES</li>
                    <li class=\"nav-item\">
                        <a href=\"{{ asset(\"back-end/pages/calendar.html\")}}\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-calendar-alt\"></i>
                            <p>
                                Calendar
                                <span class=\"badge badge-info right\">2</span>
                            </p>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"{{ asset(\"back-end/pages/gallery.html\")}}\" class=\"nav-link\">
                            <i class=\"nav-icon far fa-image\"></i>
                            <p>
                                Gallery
                            </p>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"{{ asset(\"back-end/pages/kanban.html\")}}\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-columns\"></i>
                            <p>
                                Kanban Board
                            </p>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon far fa-envelope\"></i>
                            <p>
                                Mailbox
                                <i class=\"fas fa-angle-left right\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"{{ asset(\"back-end/pages/mailbox/mailbox.html\")}}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Inbox</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ asset(\"back-end/pages/mailbox/compose.html\")}}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Compose</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ asset(\"back-end/pages/mailbox/read-mail.html\")}}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Read</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-book\"></i>
                            <p>
                                Pages
                                <i class=\"fas fa-angle-left right\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"{{ asset(\"back-end/pages/examples/invoice.html\")}}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Invoice</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ asset(\"back-end/pages/examples/profile.html\")}}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Profile</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ asset(\"back-end/pages/examples/e-commerce.html\")}}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>E-commerce</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ asset(\"back-end/pages/examples/projects.html\")}}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Projects</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ asset(\"back-end/pages/examples/project-add.html\")}}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Project Add</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ asset(\"back-end/pages/examples/project-edit.html\")}}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Project Edit</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ asset(\"back-end/pages/examples/project-detail.html\")}}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Project Detail</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ asset(\"back-end/pages/examples/contacts.html\")}}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Contacts</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ asset(\"back-end/pages/examples/faq.html\")}}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>FAQ</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ asset(\"back-end/pages/examples/contact-us.html\")}}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Contact us</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon far fa-plus-square\"></i>
                            <p>
                                Extras
                                <i class=\"fas fa-angle-left right\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"#\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>
                                        Login & Register v1
                                        <i class=\"fas fa-angle-left right\"></i>
                                    </p>
                                </a>
                                <ul class=\"nav nav-treeview\">
                                    <li class=\"nav-item\">
                                        <a href=\"{{ asset(\"back-end/pages/examples/login.html\")}}\" class=\"nav-link\">
                                            <i class=\"far fa-circle nav-icon\"></i>
                                            <p>Login v1</p>
                                        </a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a href=\"{{ asset(\"back-end/pages/examples/register.html\")}}\" class=\"nav-link\">
                                            <i class=\"far fa-circle nav-icon\"></i>
                                            <p>Register v1</p>
                                        </a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a href=\"{{ asset(\"back-end/pages/examples/forgot-password.html\")}}\" class=\"nav-link\">
                                            <i class=\"far fa-circle nav-icon\"></i>
                                            <p>Forgot Password v1</p>
                                        </a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a href=\"{{ asset(\"back-end/pages/examples/recover-password.html\")}}\" class=\"nav-link\">
                                            <i class=\"far fa-circle nav-icon\"></i>
                                            <p>Recover Password v1</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"#\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>
                                        Login & Register v2
                                        <i class=\"fas fa-angle-left right\"></i>
                                    </p>
                                </a>
                                <ul class=\"nav nav-treeview\">
                                    <li class=\"nav-item\">
                                        <a href=\"{{ asset(\"back-end/pages/examples/login-v2.html\")}}\" class=\"nav-link\">
                                            <i class=\"far fa-circle nav-icon\"></i>
                                            <p>Login v2</p>
                                        </a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a href=\"{{ asset(\"back-end/pages/examples/register-v2.html\")}}\" class=\"nav-link\">
                                            <i class=\"far fa-circle nav-icon\"></i>
                                            <p>Register v2</p>
                                        </a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a href=\"{{ asset(\"back-end/pages/examples/forgot-password-v2.html\")}}\" class=\"nav-link\">
                                            <i class=\"far fa-circle nav-icon\"></i>
                                            <p>Forgot Password v2</p>
                                        </a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a href=\"{{ asset(\"back-end/pages/examples/recover-password-v2.html\")}}\" class=\"nav-link\">
                                            <i class=\"far fa-circle nav-icon\"></i>
                                            <p>Recover Password v2</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ asset(\"back-end/pages/examples/lockscreen.html\")}}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Lockscreen</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ asset(\"back-end/pages/examples/legacy-user-menu.html\")}}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Legacy User Menu</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ asset(\"back-end/pages/examples/language-menu.html\")}}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Language Menu</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ asset(\"back-end/pages/examples/404.html\")}}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Error 404</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ asset(\"back-end/pages/examples/500.html\")}}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Error 500</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ asset(\"back-end/pages/examples/pace.html\")}}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Pace</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ asset(\"back-end/pages/examples/blank.html\")}}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Blank Page</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"starter.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Starter Page</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-search\"></i>
                            <p>
                                Search
                                <i class=\"fas fa-angle-left right\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"{{ asset(\"back-end/pages/search/simple.html\")}}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Simple Search</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ asset(\"back-end/pages/search/enhanced.html\")}}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Enhanced</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-header\">MISCELLANEOUS</li>
                    <li class=\"nav-item\">
                        <a href=\"iframe.html\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-ellipsis-h\"></i>
                            <p>Tabbed IFrame Plugin</p>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"https://adminlte.io/docs/3.1/\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-file\"></i>
                            <p>Documentation</p>
                        </a>
                    </li>
                    <li class=\"nav-header\">MULTI LEVEL EXAMPLE</li>
                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"fas fa-circle nav-icon\"></i>
                            <p>Level 1</p>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-circle\"></i>
                            <p>
                                Level 1
                                <i class=\"right fas fa-angle-left\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"#\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Level 2</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"#\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>
                                        Level 2
                                        <i class=\"right fas fa-angle-left\"></i>
                                    </p>
                                </a>
                                <ul class=\"nav nav-treeview\">
                                    <li class=\"nav-item\">
                                        <a href=\"#\" class=\"nav-link\">
                                            <i class=\"far fa-dot-circle nav-icon\"></i>
                                            <p>Level 3</p>
                                        </a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a href=\"#\" class=\"nav-link\">
                                            <i class=\"far fa-dot-circle nav-icon\"></i>
                                            <p>Level 3</p>
                                        </a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a href=\"#\" class=\"nav-link\">
                                            <i class=\"far fa-dot-circle nav-icon\"></i>
                                            <p>Level 3</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"#\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Level 2</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"fas fa-circle nav-icon\"></i>
                            <p>Level 1</p>
                        </a>
                    </li>
                    <li class=\"nav-header\">LABELS</li>
                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon far fa-circle text-danger\"></i>
                            <p class=\"text\">Important</p>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon far fa-circle text-warning\"></i>
                            <p>Warning</p>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon far fa-circle text-info\"></i>
                            <p>Informational</p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <div class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"row mb-2\">
                    <div class=\"col-sm-6\">
                        <h1 class=\"m-0\">Dashboard v2</h1>
                    </div><!-- /.col -->
                    <div class=\"col-sm-6\">
                        <ol class=\"breadcrumb float-sm-right\">
                            <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                            <li class=\"breadcrumb-item active\">Dashboard v2</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class=\"content\">
            <div class=\"container-fluid\">
                <!-- Info boxes -->
                <div class=\"row\">
                    <div class=\"col-12 col-sm-6 col-md-3\">
                        <div class=\"info-box\">
                            <span class=\"info-box-icon bg-info elevation-1\"><i class=\"fas fa-cog\"></i></span>

                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">CPU Traffic</span>
                                <span class=\"info-box-number\">
                  10
                  <small>%</small>
                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class=\"col-12 col-sm-6 col-md-3\">
                        <div class=\"info-box mb-3\">
                            <span class=\"info-box-icon bg-danger elevation-1\"><i class=\"fas fa-thumbs-up\"></i></span>

                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">Likes</span>
                                <span class=\"info-box-number\">41,410</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->

                    <!-- fix for small devices only -->
                    <div class=\"clearfix hidden-md-up\"></div>

                    <div class=\"col-12 col-sm-6 col-md-3\">
                        <div class=\"info-box mb-3\">
                            <span class=\"info-box-icon bg-success elevation-1\"><i class=\"fas fa-shopping-cart\"></i></span>

                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">Sales</span>
                                <span class=\"info-box-number\">760</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class=\"col-12 col-sm-6 col-md-3\">
                        <div class=\"info-box mb-3\">
                            <span class=\"info-box-icon bg-warning elevation-1\"><i class=\"fas fa-users\"></i></span>

                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">New Members</span>
                                <span class=\"info-box-number\">2,000</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h5 class=\"card-title\">Monthly Recap Report</h5>

                                <div class=\"card-tools\">
                                    <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
                                        <i class=\"fas fa-minus\"></i>
                                    </button>
                                    <div class=\"btn-group\">
                                        <button type=\"button\" class=\"btn btn-tool dropdown-toggle\" data-toggle=\"dropdown\">
                                            <i class=\"fas fa-wrench\"></i>
                                        </button>
                                        <div class=\"dropdown-menu dropdown-menu-right\" role=\"menu\">
                                            <a href=\"#\" class=\"dropdown-item\">Action</a>
                                            <a href=\"#\" class=\"dropdown-item\">Another action</a>
                                            <a href=\"#\" class=\"dropdown-item\">Something else here</a>
                                            <a class=\"dropdown-divider\"></a>
                                            <a href=\"#\" class=\"dropdown-item\">Separated link</a>
                                        </div>
                                    </div>
                                    <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
                                        <i class=\"fas fa-times\"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-md-8\">
                                        <p class=\"text-center\">
                                            <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
                                        </p>

                                        <div class=\"chart\">
                                            <!-- Sales Chart Canvas -->
                                            <canvas id=\"salesChart\" height=\"180\" style=\"height: 180px;\"></canvas>
                                        </div>
                                        <!-- /.chart-responsive -->
                                    </div>
                                    <!-- /.col -->
                                    <div class=\"col-md-4\">
                                        <p class=\"text-center\">
                                            <strong>Goal Completion</strong>
                                        </p>

                                        <div class=\"progress-group\">
                                            Add Products to Cart
                                            <span class=\"float-right\"><b>160</b>/200</span>
                                            <div class=\"progress progress-sm\">
                                                <div class=\"progress-bar bg-primary\" style=\"width: 80%\"></div>
                                            </div>
                                        </div>
                                        <!-- /.progress-group -->

                                        <div class=\"progress-group\">
                                            Complete Purchase
                                            <span class=\"float-right\"><b>310</b>/400</span>
                                            <div class=\"progress progress-sm\">
                                                <div class=\"progress-bar bg-danger\" style=\"width: 75%\"></div>
                                            </div>
                                        </div>

                                        <!-- /.progress-group -->
                                        <div class=\"progress-group\">
                                            <span class=\"progress-text\">Visit Premium Page</span>
                                            <span class=\"float-right\"><b>480</b>/800</span>
                                            <div class=\"progress progress-sm\">
                                                <div class=\"progress-bar bg-success\" style=\"width: 60%\"></div>
                                            </div>
                                        </div>

                                        <!-- /.progress-group -->
                                        <div class=\"progress-group\">
                                            Send Inquiries
                                            <span class=\"float-right\"><b>250</b>/500</span>
                                            <div class=\"progress progress-sm\">
                                                <div class=\"progress-bar bg-warning\" style=\"width: 50%\"></div>
                                            </div>
                                        </div>
                                        <!-- /.progress-group -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- ./card-body -->
                            <div class=\"card-footer\">
                                <div class=\"row\">
                                    <div class=\"col-sm-3 col-6\">
                                        <div class=\"description-block border-right\">
                                            <span class=\"description-percentage text-success\"><i class=\"fas fa-caret-up\"></i> 17%</span>
                                            <h5 class=\"description-header\">\$35,210.43</h5>
                                            <span class=\"description-text\">TOTAL REVENUE</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class=\"col-sm-3 col-6\">
                                        <div class=\"description-block border-right\">
                                            <span class=\"description-percentage text-warning\"><i class=\"fas fa-caret-left\"></i> 0%</span>
                                            <h5 class=\"description-header\">\$10,390.90</h5>
                                            <span class=\"description-text\">TOTAL COST</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class=\"col-sm-3 col-6\">
                                        <div class=\"description-block border-right\">
                                            <span class=\"description-percentage text-success\"><i class=\"fas fa-caret-up\"></i> 20%</span>
                                            <h5 class=\"description-header\">\$24,813.53</h5>
                                            <span class=\"description-text\">TOTAL PROFIT</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class=\"col-sm-3 col-6\">
                                        <div class=\"description-block\">
                                            <span class=\"description-percentage text-danger\"><i class=\"fas fa-caret-down\"></i> 18%</span>
                                            <h5 class=\"description-header\">1200</h5>
                                            <span class=\"description-text\">GOAL COMPLETIONS</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.card-footer -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <!-- Main row -->
                <div class=\"row\">
                    <!-- Left col -->
                    <div class=\"col-md-8\">
                        <!-- MAP & BOX PANE -->
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h3 class=\"card-title\">US-Visitors Report</h3>

                                <div class=\"card-tools\">
                                    <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
                                        <i class=\"fas fa-minus\"></i>
                                    </button>
                                    <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
                                        <i class=\"fas fa-times\"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class=\"card-body p-0\">
                                <div class=\"d-md-flex\">
                                    <div class=\"p-1 flex-fill\" style=\"overflow: hidden\">
                                        <!-- Map will be created here -->
                                        <div id=\"world-map-markers\" style=\"height: 325px; overflow: hidden\">
                                            <div class=\"map\"></div>
                                        </div>
                                    </div>
                                    <div class=\"card-pane-right bg-success pt-2 pb-2 pl-4 pr-4\">
                                        <div class=\"description-block mb-4\">
                                            <div class=\"sparkbar pad\" data-color=\"#fff\">90,70,90,70,75,80,70</div>
                                            <h5 class=\"description-header\">8390</h5>
                                            <span class=\"description-text\">Visits</span>
                                        </div>
                                        <!-- /.description-block -->
                                        <div class=\"description-block mb-4\">
                                            <div class=\"sparkbar pad\" data-color=\"#fff\">90,50,90,70,61,83,63</div>
                                            <h5 class=\"description-header\">30%</h5>
                                            <span class=\"description-text\">Referrals</span>
                                        </div>
                                        <!-- /.description-block -->
                                        <div class=\"description-block\">
                                            <div class=\"sparkbar pad\" data-color=\"#fff\">90,50,90,70,61,83,63</div>
                                            <h5 class=\"description-header\">70%</h5>
                                            <span class=\"description-text\">Organic</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div><!-- /.card-pane-right -->
                                </div><!-- /.d-md-flex -->
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <!-- DIRECT CHAT -->
                                <div class=\"card direct-chat direct-chat-warning\">
                                    <div class=\"card-header\">
                                        <h3 class=\"card-title\">Direct Chat</h3>

                                        <div class=\"card-tools\">
                                            <span title=\"3 New Messages\" class=\"badge badge-warning\">3</span>
                                            <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
                                                <i class=\"fas fa-minus\"></i>
                                            </button>
                                            <button type=\"button\" class=\"btn btn-tool\" title=\"Contacts\" data-widget=\"chat-pane-toggle\">
                                                <i class=\"fas fa-comments\"></i>
                                            </button>
                                            <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
                                                <i class=\"fas fa-times\"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class=\"card-body\">
                                        <!-- Conversations are loaded here -->
                                        <div class=\"direct-chat-messages\">
                                            <!-- Message. Default to the left -->
                                            <div class=\"direct-chat-msg\">
                                                <div class=\"direct-chat-infos clearfix\">
                                                    <span class=\"direct-chat-name float-left\">Alexander Pierce</span>
                                                    <span class=\"direct-chat-timestamp float-right\">23 Jan 2:00 pm</span>
                                                </div>
                                                <!-- /.direct-chat-infos -->
                                                <img class=\"direct-chat-img\" src=\"dist/img/user1-128x128.jpg\" alt=\"message user image\">
                                                <!-- /.direct-chat-img -->
                                                <div class=\"direct-chat-text\">
                                                    Is this template really for free? That's unbelievable!
                                                </div>
                                                <!-- /.direct-chat-text -->
                                            </div>
                                            <!-- /.direct-chat-msg -->

                                            <!-- Message to the right -->
                                            <div class=\"direct-chat-msg right\">
                                                <div class=\"direct-chat-infos clearfix\">
                                                    <span class=\"direct-chat-name float-right\">Sarah Bullock</span>
                                                    <span class=\"direct-chat-timestamp float-left\">23 Jan 2:05 pm</span>
                                                </div>
                                                <!-- /.direct-chat-infos -->
                                                <img class=\"direct-chat-img\" src=\"dist/img/user3-128x128.jpg\" alt=\"message user image\">
                                                <!-- /.direct-chat-img -->
                                                <div class=\"direct-chat-text\">
                                                    You better believe it!
                                                </div>
                                                <!-- /.direct-chat-text -->
                                            </div>
                                            <!-- /.direct-chat-msg -->

                                            <!-- Message. Default to the left -->
                                            <div class=\"direct-chat-msg\">
                                                <div class=\"direct-chat-infos clearfix\">
                                                    <span class=\"direct-chat-name float-left\">Alexander Pierce</span>
                                                    <span class=\"direct-chat-timestamp float-right\">23 Jan 5:37 pm</span>
                                                </div>
                                                <!-- /.direct-chat-infos -->
                                                <img class=\"direct-chat-img\" src=\"{{ asset(\"back-end/dist/img/user1-128x128.jpg\")}}\" alt=\"message user image\">
                                                <!-- /.direct-chat-img -->
                                                <div class=\"direct-chat-text\">
                                                    Working with AdminLTE on a great new app! Wanna join?
                                                </div>
                                                <!-- /.direct-chat-text -->
                                            </div>
                                            <!-- /.direct-chat-msg -->

                                            <!-- Message to the right -->
                                            <div class=\"direct-chat-msg right\">
                                                <div class=\"direct-chat-infos clearfix\">
                                                    <span class=\"direct-chat-name float-right\">Sarah Bullock</span>
                                                    <span class=\"direct-chat-timestamp float-left\">23 Jan 6:10 pm</span>
                                                </div>
                                                <!-- /.direct-chat-infos -->
                                                <img class=\"direct-chat-img\" src=\"{{ asset(\"back-end/dist/img/user3-128x128.jpg\")}}\" alt=\"message user image\">
                                                <!-- /.direct-chat-img -->
                                                <div class=\"direct-chat-text\">
                                                    I would love to.
                                                </div>
                                                <!-- /.direct-chat-text -->
                                            </div>
                                            <!-- /.direct-chat-msg -->

                                        </div>
                                        <!--/.direct-chat-messages-->

                                        <!-- Contacts are loaded here -->
                                        <div class=\"direct-chat-contacts\">
                                            <ul class=\"contacts-list\">
                                                <li>
                                                    <a href=\"#\">
                                                        <img class=\"contacts-list-img\" src=\"{{ asset(\"back-end/dist/img/user1-128x128.jpg\")}}\" alt=\"User Avatar\">

                                                        <div class=\"contacts-list-info\">
                              <span class=\"contacts-list-name\">
                                Count Dracula
                                <small class=\"contacts-list-date float-right\">2/28/2015</small>
                              </span>
                                                            <span class=\"contacts-list-msg\">How have you been? I was...</span>
                                                        </div>
                                                        <!-- /.contacts-list-info -->
                                                    </a>
                                                </li>
                                                <!-- End Contact Item -->
                                                <li>
                                                    <a href=\"#\">
                                                        <img class=\"contacts-list-img\" src=\"{{ asset(\"back-end/dist/img/user7-128x128.jpg\")}}\" alt=\"User Avatar\">

                                                        <div class=\"contacts-list-info\">
                              <span class=\"contacts-list-name\">
                                Sarah Doe
                                <small class=\"contacts-list-date float-right\">2/23/2015</small>
                              </span>
                                                            <span class=\"contacts-list-msg\">I will be waiting for...</span>
                                                        </div>
                                                        <!-- /.contacts-list-info -->
                                                    </a>
                                                </li>
                                                <!-- End Contact Item -->
                                                <li>
                                                    <a href=\"#\">
                                                        <img class=\"contacts-list-img\" src=\"{{ asset(\"back-end/dist/img/user3-128x128.jpg\")}}\" alt=\"User Avatar\">

                                                        <div class=\"contacts-list-info\">
                              <span class=\"contacts-list-name\">
                                Nadia Jolie
                                <small class=\"contacts-list-date float-right\">2/20/2015</small>
                              </span>
                                                            <span class=\"contacts-list-msg\">I'll call you back at...</span>
                                                        </div>
                                                        <!-- /.contacts-list-info -->
                                                    </a>
                                                </li>
                                                <!-- End Contact Item -->
                                                <li>
                                                    <a href=\"#\">
                                                        <img class=\"contacts-list-img\" src=\"{{ asset(\"back-end/dist/img/user5-128x128.jpg\")}}\" alt=\"User Avatar\">

                                                        <div class=\"contacts-list-info\">
                              <span class=\"contacts-list-name\">
                                Nora S. Vans
                                <small class=\"contacts-list-date float-right\">2/10/2015</small>
                              </span>
                                                            <span class=\"contacts-list-msg\">Where is your new...</span>
                                                        </div>
                                                        <!-- /.contacts-list-info -->
                                                    </a>
                                                </li>
                                                <!-- End Contact Item -->
                                                <li>
                                                    <a href=\"#\">
                                                        <img class=\"contacts-list-img\" src=\"{{ asset(\"back-end/dist/img/user6-128x128.jpg\")}}\" alt=\"User Avatar\">

                                                        <div class=\"contacts-list-info\">
                              <span class=\"contacts-list-name\">
                                John K.
                                <small class=\"contacts-list-date float-right\">1/27/2015</small>
                              </span>
                                                            <span class=\"contacts-list-msg\">Can I take a look at...</span>
                                                        </div>
                                                        <!-- /.contacts-list-info -->
                                                    </a>
                                                </li>
                                                <!-- End Contact Item -->
                                                <li>
                                                    <a href=\"#\">
                                                        <img class=\"contacts-list-img\" src=\"{{ asset(\"back-end/dist/img/user8-128x128.jpg\")}}\" alt=\"User Avatar\">

                                                        <div class=\"contacts-list-info\">
                              <span class=\"contacts-list-name\">
                                Kenneth M.
                                <small class=\"contacts-list-date float-right\">1/4/2015</small>
                              </span>
                                                            <span class=\"contacts-list-msg\">Never mind I found...</span>
                                                        </div>
                                                        <!-- /.contacts-list-info -->
                                                    </a>
                                                </li>
                                                <!-- End Contact Item -->
                                            </ul>
                                            <!-- /.contacts-list -->
                                        </div>
                                        <!-- /.direct-chat-pane -->
                                    </div>
                                    <!-- /.card-body -->
                                    <div class=\"card-footer\">
                                        <form action=\"#\" method=\"post\">
                                            <div class=\"input-group\">
                                                <input type=\"text\" name=\"message\" placeholder=\"Type Message ...\" class=\"form-control\">
                                                <span class=\"input-group-append\">
                          <button type=\"button\" class=\"btn btn-warning\">Send</button>
                        </span>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /.card-footer-->
                                </div>
                                <!--/.direct-chat -->
                            </div>
                            <!-- /.col -->

                            <div class=\"col-md-6\">
                                <!-- USERS LIST -->
                                <div class=\"card\">
                                    <div class=\"card-header\">
                                        <h3 class=\"card-title\">Latest Members</h3>

                                        <div class=\"card-tools\">
                                            <span class=\"badge badge-danger\">8 New Members</span>
                                            <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
                                                <i class=\"fas fa-minus\"></i>
                                            </button>
                                            <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
                                                <i class=\"fas fa-times\"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class=\"card-body p-0\">
                                        <ul class=\"users-list clearfix\">
                                            <li>
                                                <img src=\"{{ asset(\"back-end/dist/img/user1-128x128.jpg\")}}\" alt=\"User Image\">
                                                <a class=\"users-list-name\" href=\"#\">Alexander Pierce</a>
                                                <span class=\"users-list-date\">Today</span>
                                            </li>
                                            <li>
                                                <img src=\"{{ asset(\"back-end/dist/img/user8-128x128.jpg\")}}\" alt=\"User Image\">
                                                <a class=\"users-list-name\" href=\"#\">Norman</a>
                                                <span class=\"users-list-date\">Yesterday</span>
                                            </li>
                                            <li>
                                                <img src=\"{{ asset(\"back-end/dist/img/user7-128x128.jpg\")}}\" alt=\"User Image\">
                                                <a class=\"users-list-name\" href=\"#\">Jane</a>
                                                <span class=\"users-list-date\">12 Jan</span>
                                            </li>
                                            <li>
                                                <img src=\"{{ asset(\"back-end/dist/img/user6-128x128.jpg\")}}\" alt=\"User Image\">
                                                <a class=\"users-list-name\" href=\"#\">John</a>
                                                <span class=\"users-list-date\">12 Jan</span>
                                            </li>
                                            <li>
                                                <img src=\"{{ asset(\"back-end/dist/img/user2-160x160.jpg\")}}\" alt=\"User Image\">
                                                <a class=\"users-list-name\" href=\"#\">Alexander</a>
                                                <span class=\"users-list-date\">13 Jan</span>
                                            </li>
                                            <li>
                                                <img src=\"{{ asset(\"back-end/dist/img/user5-128x128.jpg\")}}\" alt=\"User Image\">
                                                <a class=\"users-list-name\" href=\"#\">Sarah</a>
                                                <span class=\"users-list-date\">14 Jan</span>
                                            </li>
                                            <li>
                                                <img src=\"{{ asset(\"back-end/dist/img/user4-128x128.jpg\")}}\" alt=\"User Image\">
                                                <a class=\"users-list-name\" href=\"#\">Nora</a>
                                                <span class=\"users-list-date\">15 Jan</span>
                                            </li>
                                            <li>
                                                <img src=\"{{ asset(\"back-end/dist/img/user3-128x128.jpg\")}}\" alt=\"User Image\">
                                                <a class=\"users-list-name\" href=\"#\">Nadia</a>
                                                <span class=\"users-list-date\">15 Jan</span>
                                            </li>
                                        </ul>
                                        <!-- /.users-list -->
                                    </div>
                                    <!-- /.card-body -->
                                    <div class=\"card-footer text-center\">
                                        <a href=\"javascript:\">View All Users</a>
                                    </div>
                                    <!-- /.card-footer -->
                                </div>
                                <!--/.card -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <!-- TABLE: LATEST ORDERS -->
                        <div class=\"card\">
                            <div class=\"card-header border-transparent\">
                                <h3 class=\"card-title\">Latest Orders</h3>

                                <div class=\"card-tools\">
                                    <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
                                        <i class=\"fas fa-minus\"></i>
                                    </button>
                                    <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
                                        <i class=\"fas fa-times\"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class=\"card-body p-0\">
                                <div class=\"table-responsive\">
                                    <table class=\"table m-0\">
                                        <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Item</th>
                                            <th>Status</th>
                                            <th>Popularity</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><a href=\"{{ asset(\"back-end/pages/examples/invoice.html\")}}\">OR9842</a></td>
                                            <td>Call of Duty IV</td>
                                            <td><span class=\"badge badge-success\">Shipped</span></td>
                                            <td>
                                                <div class=\"sparkbar\" data-color=\"#00a65a\" data-height=\"20\">90,80,90,-70,61,-83,63</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href=\"{{ asset(\"back-end/pages/examples/invoice.html\")}}\">OR1848</a></td>
                                            <td>Samsung Smart TV</td>
                                            <td><span class=\"badge badge-warning\">Pending</span></td>
                                            <td>
                                                <div class=\"sparkbar\" data-color=\"#f39c12\" data-height=\"20\">90,80,-90,70,61,-83,68</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href=\"{{ asset(\"back-end/pages/examples/invoice.html\")}}\">OR7429</a></td>
                                            <td>iPhone 6 Plus</td>
                                            <td><span class=\"badge badge-danger\">Delivered</span></td>
                                            <td>
                                                <div class=\"sparkbar\" data-color=\"#f56954\" data-height=\"20\">90,-80,90,70,-61,83,63</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href=\"{{ asset(\"back-end/pages/examples/invoice.html\")}}\">OR7429</a></td>
                                            <td>Samsung Smart TV</td>
                                            <td><span class=\"badge badge-info\">Processing</span></td>
                                            <td>
                                                <div class=\"sparkbar\" data-color=\"#00c0ef\" data-height=\"20\">90,80,-90,70,-61,83,63</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href=\"{{ asset(\"back-end/pages/examples/invoice.html\")}}\">OR1848</a></td>
                                            <td>Samsung Smart TV</td>
                                            <td><span class=\"badge badge-warning\">Pending</span></td>
                                            <td>
                                                <div class=\"sparkbar\" data-color=\"#f39c12\" data-height=\"20\">90,80,-90,70,61,-83,68</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href=\"{{ asset(\"back-end/pages/examples/invoice.html\")}}\">OR7429</a></td>
                                            <td>iPhone 6 Plus</td>
                                            <td><span class=\"badge badge-danger\">Delivered</span></td>
                                            <td>
                                                <div class=\"sparkbar\" data-color=\"#f56954\" data-height=\"20\">90,-80,90,70,-61,83,63</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href=\"{{ asset(\"back-end/pages/examples/invoice.html\")}}\">OR9842</a></td>
                                            <td>Call of Duty IV</td>
                                            <td><span class=\"badge badge-success\">Shipped</span></td>
                                            <td>
                                                <div class=\"sparkbar\" data-color=\"#00a65a\" data-height=\"20\">90,80,90,-70,61,-83,63</div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.card-body -->
                            <div class=\"card-footer clearfix\">
                                <a href=\"javascript:void(0)\" class=\"btn btn-sm btn-info float-left\">Place New Order</a>
                                <a href=\"javascript:void(0)\" class=\"btn btn-sm btn-secondary float-right\">View All Orders</a>
                            </div>
                            <!-- /.card-footer -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->

                    <div class=\"col-md-4\">
                        <!-- Info Boxes Style 2 -->
                        <div class=\"info-box mb-3 bg-warning\">
                            <span class=\"info-box-icon\"><i class=\"fas fa-tag\"></i></span>

                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">Inventory</span>
                                <span class=\"info-box-number\">5,200</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                        <div class=\"info-box mb-3 bg-success\">
                            <span class=\"info-box-icon\"><i class=\"far fa-heart\"></i></span>

                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">Mentions</span>
                                <span class=\"info-box-number\">92,050</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                        <div class=\"info-box mb-3 bg-danger\">
                            <span class=\"info-box-icon\"><i class=\"fas fa-cloud-download-alt\"></i></span>

                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">Downloads</span>
                                <span class=\"info-box-number\">114,381</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                        <div class=\"info-box mb-3 bg-info\">
                            <span class=\"info-box-icon\"><i class=\"far fa-comment\"></i></span>

                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">Direct Messages</span>
                                <span class=\"info-box-number\">163,921</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->

                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h3 class=\"card-title\">Browser Usage</h3>

                                <div class=\"card-tools\">
                                    <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
                                        <i class=\"fas fa-minus\"></i>
                                    </button>
                                    <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
                                        <i class=\"fas fa-times\"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-md-8\">
                                        <div class=\"chart-responsive\">
                                            <canvas id=\"pieChart\" height=\"150\"></canvas>
                                        </div>
                                        <!-- ./chart-responsive -->
                                    </div>
                                    <!-- /.col -->
                                    <div class=\"col-md-4\">
                                        <ul class=\"chart-legend clearfix\">
                                            <li><i class=\"far fa-circle text-danger\"></i> Chrome</li>
                                            <li><i class=\"far fa-circle text-success\"></i> IE</li>
                                            <li><i class=\"far fa-circle text-warning\"></i> FireFox</li>
                                            <li><i class=\"far fa-circle text-info\"></i> Safari</li>
                                            <li><i class=\"far fa-circle text-primary\"></i> Opera</li>
                                            <li><i class=\"far fa-circle text-secondary\"></i> Navigator</li>
                                        </ul>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.card-body -->
                            <div class=\"card-footer bg-light p-0\">
                                <ul class=\"nav nav-pills flex-column\">
                                    <li class=\"nav-item\">
                                        <a href=\"#\" class=\"nav-link\">
                                            United States of America
                                            <span class=\"float-right text-danger\">
                        <i class=\"fas fa-arrow-down text-sm\"></i>
                        12%</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a href=\"#\" class=\"nav-link\">
                                            India
                                            <span class=\"float-right text-success\">
                        <i class=\"fas fa-arrow-up text-sm\"></i> 4%
                      </span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a href=\"#\" class=\"nav-link\">
                                            China
                                            <span class=\"float-right text-warning\">
                        <i class=\"fas fa-arrow-left text-sm\"></i> 0%
                      </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.footer -->
                        </div>
                        <!-- /.card -->

                        <!-- PRODUCT LIST -->
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h3 class=\"card-title\">Recently Added Products</h3>

                                <div class=\"card-tools\">
                                    <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
                                        <i class=\"fas fa-minus\"></i>
                                    </button>
                                    <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
                                        <i class=\"fas fa-times\"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class=\"card-body p-0\">
                                <ul class=\"products-list product-list-in-card pl-2 pr-2\">
                                    <li class=\"item\">
                                        <div class=\"product-img\">
                                            <img src=\"{{ asset(\"back-end/dist/img/default-150x150.png\")}}\" alt=\"Product Image\" class=\"img-size-50\">
                                        </div>
                                        <div class=\"product-info\">
                                            <a href=\"javascript:void(0)\" class=\"product-title\">Samsung TV
                                                <span class=\"badge badge-warning float-right\">\$1800</span></a>
                                            <span class=\"product-description\">
                        Samsung 32\" 1080p 60Hz LED Smart HDTV.
                      </span>
                                        </div>
                                    </li>
                                    <!-- /.item -->
                                    <li class=\"item\">
                                        <div class=\"product-img\">
                                            <img src=\"{{ asset(\"back-end/dist/img/default-150x150.png\")}}\" alt=\"Product Image\" class=\"img-size-50\">
                                        </div>
                                        <div class=\"product-info\">
                                            <a href=\"javascript:void(0)\" class=\"product-title\">Bicycle
                                                <span class=\"badge badge-info float-right\">\$700</span></a>
                                            <span class=\"product-description\">
                        26\" Mongoose Dolomite Men's 7-speed, Navy Blue.
                      </span>
                                        </div>
                                    </li>
                                    <!-- /.item -->
                                    <li class=\"item\">
                                        <div class=\"product-img\">
                                            <img src=\"{{ asset(\"back-end/dist/img/default-150x150.png\")}}\" alt=\"Product Image\" class=\"img-size-50\">
                                        </div>
                                        <div class=\"product-info\">
                                            <a href=\"javascript:void(0)\" class=\"product-title\">
                                                Xbox One <span class=\"badge badge-danger float-right\">
                        \$350
                      </span>
                                            </a>
                                            <span class=\"product-description\">
                        Xbox One Console Bundle with Halo Master Chief Collection.
                      </span>
                                        </div>
                                    </li>
                                    <!-- /.item -->
                                    <li class=\"item\">
                                        <div class=\"product-img\">
                                            <img src=\"{{ asset(\"back-end/dist/img/default-150x150.png\")}}\" alt=\"Product Image\" class=\"img-size-50\">
                                        </div>
                                        <div class=\"product-info\">
                                            <a href=\"javascript:void(0)\" class=\"product-title\">PlayStation 4
                                                <span class=\"badge badge-success float-right\">\$399</span></a>
                                            <span class=\"product-description\">
                        PlayStation 4 500GB Console (PS4)
                      </span>
                                        </div>
                                    </li>
                                    <!-- /.item -->
                                </ul>
                            </div>
                            <!-- /.card-body -->
                            <div class=\"card-footer text-center\">
                                <a href=\"javascript:void(0)\" class=\"uppercase\">View All Products</a>
                            </div>
                            <!-- /.card-footer -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class=\"control-sidebar control-sidebar-dark\">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class=\"main-footer\">
        <strong>Copyright &copy; 2014-2021 <a href=\"https://adminlte.io\">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class=\"float-right d-none d-sm-inline-block\">
            <b>Version</b> 3.1.0
        </div>
    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src=\"{{ asset(\"back-end/plugins/jquery/jquery.min.js\")}}\"></script>
<!-- Bootstrap -->
<script src=\"{{ asset(\"back-end/plugins/bootstrap/js/bootstrap.bundle.min.js\")}}\"></script>
<!-- overlayScrollbars -->
<script src=\"{{ asset(\"back-end/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js\")}}\"></script>
<!-- AdminLTE App -->
<script src=\"{{ asset(\"back-end/dist/js/adminlte.js\")}}\"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src=\"{{ asset(\"back-end/plugins/jquery-mousewheel/jquery.mousewheel.js\")}}\"></script>
<script src=\"{{ asset(\"back-end/plugins/raphael/raphael.min.js\")}}\"></script>
<script src=\"{{ asset(\"back-end/plugins/jquery-mapael/jquery.mapael.min.js\")}}\"></script>
<script src=\"{{ asset(\"back-end/plugins/jquery-mapael/maps/usa_states.min.js\")}}\"></script>
<!-- ChartJS -->
<script src=\"{{ asset(\"back-end/plugins/chart.js/Chart.min.js\")}}\"></script>

<!-- AdminLTE for demo purposes -->
<script src=\"{{ asset(\"back-end/dist/js/demo.js\")}}\"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src=\"{{ asset(\"back-end/dist/js/pages/dashboard2.js\")}}\"></script>
{% endblock %}
</body>
</html>
", "admin/base.back.html.twig", "C:\\xampp\\htdocs\\ProjetReservation\\templates\\admin\\base.back.html.twig");
    }
}
