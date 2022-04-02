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

/* reservation_cd/_form.html.twig */
class __TwigTemplate_8c7e062f6e75b5b94195e88d49aacc92340b80a728c5d5d704f37bb3ac2e9497 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation_cd/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation_cd/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
";
        // line 2
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    <table width=\"2000\">
        <tr>
            <td><h4 align=\"left\">";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["User"]) || array_key_exists("User", $context) ? $context["User"] : (function () { throw new RuntimeError('Variable "User" does not exist.', 6, $this->source); })()), "userName", [], "any", false, false, false, 6), "html", null, true);
        echo "<br>
                    ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["User"]) || array_key_exists("User", $context) ? $context["User"] : (function () { throw new RuntimeError('Variable "User" does not exist.', 7, $this->source); })()), "email", [], "any", false, false, false, 7), "html", null, true);
        echo "</h4>
            </td>

<td>
   <p align=\"right\"> <a class=\"btn btn-primary\" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_cd_index");
        echo "\">Consulter</a></p>
</td>

            <td>
                <p align=\"right\"> <a class=\"btn btn-primary\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("devis_index");
        echo "\">Devis</a></p>
            </td></tr>
    </table>
            <table align=\"center\" width=\"500\">
                <tr>
                    <td colspan=\"2\">
                        <h1 align=\"center\" class=\"alert alert-primary\">Réservation</h1>
                    </td>
                </tr>

                <tr>

                    <td>
                        <h4>";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "nbPersonne", [], "any", false, false, false, 28), 'label', ["label" => "Nombre de personne: "]);
        echo "</h4>

                    </td>
                    <td>
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "nbPersonne", [], "any", false, false, false, 32), 'widget');
        echo "
                    </td>
                </tr>
                <tr><td><p align=\"left\"> ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "nbPersonne", [], "any", false, false, false, 35), 'errors', ["attr" => ["style" => "display:none"]]);
        echo "</p></td></tr>
                <tr>
                        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37), 'errors');
        echo "

                        <td>
                            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40), 'widget', ["attr" => ["style" => "display:none"]]);
        echo "
                        </td>
                    </tr>

                    <tr>
                        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "even", [], "any", false, false, false, 45), 'errors');
        echo "
                        <td>
                         <h4>   ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "even", [], "any", false, false, false, 47), 'label', ["label" => "Evènement : "]);
        echo "</h4>
                        </td>
                        <td>
                            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "even", [], "any", false, false, false, 50), 'widget');
        echo "
                        </td>
                    </tr>

                <tr>

                        <td colspan=\"2\" align=\"center\">
                            <button class=\"btn-outline-primary\">";
        // line 57
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 57, $this->source); })()), "Réserver")) : ("Réserver")), "html", null, true);
        echo "</button>
                        </td>

                </tr>
            </table>
            ";
        // line 62
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), 'form_end');
        echo "



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reservation_cd/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 62,  159 => 57,  149 => 50,  143 => 47,  138 => 45,  130 => 40,  124 => 37,  119 => 35,  113 => 32,  106 => 28,  90 => 15,  83 => 11,  76 => 7,  72 => 6,  67 => 3,  48 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form,{'attr': {'novalidate': 'novalidate'}} ) }}
{% block body %}

    <table width=\"2000\">
        <tr>
            <td><h4 align=\"left\">{{ User.userName }}<br>
                    {{ User.email }}</h4>
            </td>

<td>
   <p align=\"right\"> <a class=\"btn btn-primary\" href=\"{{ path('reservation_cd_index') }}\">Consulter</a></p>
</td>

            <td>
                <p align=\"right\"> <a class=\"btn btn-primary\" href=\"{{ path('devis_index') }}\">Devis</a></p>
            </td></tr>
    </table>
            <table align=\"center\" width=\"500\">
                <tr>
                    <td colspan=\"2\">
                        <h1 align=\"center\" class=\"alert alert-primary\">Réservation</h1>
                    </td>
                </tr>

                <tr>

                    <td>
                        <h4>{{ form_label(form.nbPersonne,\"Nombre de personne: \")  }}</h4>

                    </td>
                    <td>
                        {{ form_widget(form.nbPersonne) }}
                    </td>
                </tr>
                <tr><td><p align=\"left\"> {{ form_errors(form.nbPersonne,{ 'attr' : { 'style':'display:none'} }) }}</p></td></tr>
                <tr>
                        {{ form_errors(form.user) }}

                        <td>
                            {{ form_widget(form.user ,{ 'attr' : { 'style':'display:none'}} ) }}
                        </td>
                    </tr>

                    <tr>
                        {{ form_errors(form.even) }}
                        <td>
                         <h4>   {{ form_label(form.even,\"Evènement : \")  }}</h4>
                        </td>
                        <td>
                            {{ form_widget(form.even) }}
                        </td>
                    </tr>

                <tr>

                        <td colspan=\"2\" align=\"center\">
                            <button class=\"btn-outline-primary\">{{ button_label|default('Réserver') }}</button>
                        </td>

                </tr>
            </table>
            {{ form_end(form) }}



{% endblock %}", "reservation_cd/_form.html.twig", "C:\\xampp\\htdocs\\ProjetReservation\\templates\\reservation_cd\\_form.html.twig");
    }
}
