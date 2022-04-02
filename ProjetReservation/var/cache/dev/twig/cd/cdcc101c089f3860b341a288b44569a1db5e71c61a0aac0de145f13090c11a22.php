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

/* reservation/Ajout.html.twig */
class __TwigTemplate_c40f21ad341ae7fd6c890fceea4c814666983732a62167b4b09b42fd0ed14f59 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "accueil/reste.front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/Ajout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/Ajout.html.twig"));

        $this->parent = $this->loadTemplate("accueil/reste.front.html.twig", "reservation/Ajout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"row\">
 <div class=\"col-lg-6\">
 ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "php-email-form"]]);
        echo "

  <table align=\"center\">
   <h1 align=\"center\" class=\"alert alert-primary\">Réservation</h1>

   <tr>
          ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "nbPersonne", [], "any", false, false, false, 11), 'errors');
        echo "
    <td>
      <h3 >";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "nbPersonne", [], "any", false, false, false, 13), 'label', ["label" => "Nombre de personne: "]);
        echo "</h3>
    </td>
    <td>
     ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "nbPersonne", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nombre de Personnes"]]);
        echo "
    </td>
   </tr>

 <div class=\"col-md-6 form-group\">
  <tr>
  ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22), 'errors');
        echo "
   <td>
  ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), 'label', ["label" => "CIN : "]);
        echo "
   </td>
   <td>
  ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "btn btn-info dropdown-toggle"]]);
        echo "
   </td>
  </tr>
 </div>
   <div class=\"col-md-6 form-group\">
    <tr>
     ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "even", [], "any", false, false, false, 33), 'errors');
        echo "
     <td>
      ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "even", [], "any", false, false, false, 35), 'label', ["label" => "CIN : "]);
        echo "
     </td>
     <td>
      ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "even", [], "any", false, false, false, 38), 'widget');
        echo "
     </td>
    </tr>
   </div>
 <tr>
  <div class=\"col-md-6 form-group\">
   <td>
   ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "submit", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "btn btn-link"]]);
        echo "
   </td>
  </div>
 </tr>
</table>
";
        // line 50
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), 'form_end');
        echo "
</div>
</div>
 ";
        // line 53
        echo twig_include($this->env, $context, "reservation_cd/_form.html.twig");
        echo "
 <a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_cd_index");
        echo "\">back to list</a>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reservation/Ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 54,  156 => 53,  150 => 50,  142 => 45,  132 => 38,  126 => 35,  121 => 33,  112 => 27,  106 => 24,  101 => 22,  92 => 16,  86 => 13,  81 => 11,  72 => 5,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'accueil/reste.front.html.twig' %}
{% block body %}
<div class=\"row\">
 <div class=\"col-lg-6\">
 {{ form_start(form,{'attr': {'novalidate': 'novalidate','class' : 'php-email-form'}} ) }}

  <table align=\"center\">
   <h1 align=\"center\" class=\"alert alert-primary\">Réservation</h1>

   <tr>
          {{ form_errors(form.nbPersonne) }}
    <td>
      <h3 >{{ form_label(form.nbPersonne,\"Nombre de personne: \")  }}</h3>
    </td>
    <td>
     {{ form_widget(form.nbPersonne,{'attr':{'class':'form-control','placeholder':'Nombre de Personnes'}} ) }}
    </td>
   </tr>

 <div class=\"col-md-6 form-group\">
  <tr>
  {{ form_errors(form.user) }}
   <td>
  {{ form_label(form.user,\"CIN : \")  }}
   </td>
   <td>
  {{ form_widget(form.user,{'attr':{'class':'btn btn-info dropdown-toggle'}} ) }}
   </td>
  </tr>
 </div>
   <div class=\"col-md-6 form-group\">
    <tr>
     {{ form_errors(form.even) }}
     <td>
      {{ form_label(form.even,\"CIN : \")  }}
     </td>
     <td>
      {{ form_widget(form.even) }}
     </td>
    </tr>
   </div>
 <tr>
  <div class=\"col-md-6 form-group\">
   <td>
   {{ form_widget(form.submit,{'attr':{'class':'btn btn-link'}} ) }}
   </td>
  </div>
 </tr>
</table>
{{ form_end(form) }}
</div>
</div>
 {{ include('reservation_cd/_form.html.twig') }}
 <a href=\"{{ path('reservation_cd_index') }}\">back to list</a>

{% endblock %}






", "reservation/Ajout.html.twig", "C:\\xampp\\htdocs\\ProjetReservation\\templates\\reservation\\Ajout.html.twig");
    }
}
