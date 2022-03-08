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

/* reponse/index.html.twig */
class __TwigTemplate_d3964a741117da1c947f97b43ff0cb93144908a7d2bad9c4245fffc591c51d4b extends Template
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
        return "baseBack.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reponse/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reponse/index.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "reponse/index.html.twig", 1);
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
        echo "    <div class=\"content-wrapper\">
        <div class=\"container-fluid\">

        <form method=\"post\" action=\"";
        // line 6
        echo "reponse_tri";
        echo "\">
             <label>
\t\t            <select class=\"form-control\" name=\"type\">
\t\t\t            <option>Croissant</option>
\t\t\t            <option>Décroissant</option>
\t\t\t        </select>
\t\t        </label>
\t\t        <input type=\"submit\" class=\"btn btn-success\" value=\"Trier!\" >

  </form>


    <tr>
            <form method=\"\" action=\"";
        // line 19
        echo "reponse_search";
        echo "\" >
                <label>
                    <input PLACEHOLDER=\"Search\" type=\"text\" name=\"data\" class=\"form-control\">
                </label>
                        <input type=\"submit\" class=\"btn btn-success\" value=\"FIND\" >
            </form>
        </tr>


            <div class=\"row mt-3\">
                <div class=\"col-lg-9\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Liste des réponses</h5>
                            <div class=\"table-responsive\">
                                <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Id réclamation</th>
                <th>Réponse</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reponses"]) || array_key_exists("reponses", $context) ? $context["reponses"] : (function () { throw new RuntimeError('Variable "reponses" does not exist.', 43, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
            // line 44
            echo "            <tr>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "rps", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reponse_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\">show <br></a>
                    <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reponse_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 53
            echo "            <tr>
                <td colspan=\"3\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reponse'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        </tbody>
    </table>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reponse/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 57,  146 => 53,  137 => 49,  133 => 48,  128 => 46,  124 => 45,  121 => 44,  116 => 43,  89 => 19,  73 => 6,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends'baseBack.html.twig' %}
{% block body %}
    <div class=\"content-wrapper\">
        <div class=\"container-fluid\">

        <form method=\"post\" action=\"{{\"reponse_tri\"}}\">
             <label>
\t\t            <select class=\"form-control\" name=\"type\">
\t\t\t            <option>Croissant</option>
\t\t\t            <option>Décroissant</option>
\t\t\t        </select>
\t\t        </label>
\t\t        <input type=\"submit\" class=\"btn btn-success\" value=\"Trier!\" >

  </form>


    <tr>
            <form method=\"\" action=\"{{\"reponse_search\"}}\" >
                <label>
                    <input PLACEHOLDER=\"Search\" type=\"text\" name=\"data\" class=\"form-control\">
                </label>
                        <input type=\"submit\" class=\"btn btn-success\" value=\"FIND\" >
            </form>
        </tr>


            <div class=\"row mt-3\">
                <div class=\"col-lg-9\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Liste des réponses</h5>
                            <div class=\"table-responsive\">
                                <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Id réclamation</th>
                <th>Réponse</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for reponse in reponses %}
            <tr>
                <td>{{ reponse.id }}</td>
                <td>{{ reponse.rps }}</td>
                <td>
                    <a href=\"{{ path('reponse_show', {'id': reponse.id}) }}\">show <br></a>
                    <a href=\"{{ path('reponse_edit', {'id': reponse.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"3\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


{% endblock %}








", "reponse/index.html.twig", "C:\\xampp\\htdocs\\PI 2.2 - ena+aziz+eya+malek\\templates\\reponse\\index.html.twig");
    }
}
