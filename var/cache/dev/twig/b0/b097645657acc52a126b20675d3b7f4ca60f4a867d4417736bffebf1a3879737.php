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

/* admin/lesson/index.html.twig */
class __TwigTemplate_cef4d2cffc9c032447c6404a52e289bb280850579407b77ef9f241c81a10d1d2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/lesson/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/lesson/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/lesson/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Leçon";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lesson_add");
        echo "\" type=\"button\" class=\"btn btn-success\">Ajouter une leçon</a>
    <table class=\"table table-striped table-bordered table-hover text-center mt-2\">
        <caption>Mes leçons</caption>
        <thead>
        <tr>
            <th scope=\"col\">Titre</th>
            <th scope=\"col\">Professeur</th>
            <th scope=\"col\">Début</th>
            <th scope=\"col\">Fin</th>
            <th scope=\"col\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Nombre de commentaire\">Nb. Commentaire</th>
            <th scope=\"col\">Action</th>
        </tr>
        </thead>
        <tbody>
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lessons"]) || array_key_exists("lessons", $context) ? $context["lessons"] : (function () { throw new RuntimeError('Variable "lessons" does not exist.', 20, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["lesson"]) {
            // line 21
            echo "                <tr onclick=\"window.location='";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comment", ["slugLesson" => twig_get_attribute($this->env, $this->source, $context["lesson"], "slug", [], "any", false, false, false, 21)]), "html", null, true);
            echo "'\">
                    <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lesson"], "title", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
                    <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lesson"], "teacher", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lesson"], "startAt", [], "any", false, false, false, 24), "d/m/Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lesson"], "endAt", [], "any", false, false, false, 25), "d/m/Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lesson"], "comments", [], "any", false, false, false, 26)), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lesson_edit", ["slug" => twig_get_attribute($this->env, $this->source, $context["lesson"], "slug", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\" type=\"button\" class=\"btn btn-sm btn-warning\">Editer</a>
                        <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lesson_delete", ["slug" => twig_get_attribute($this->env, $this->source, $context["lesson"], "slug", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\" type=\"button\" class=\"btn btn-sm btn-danger\">Supprimer</a>
                        <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comment_add", ["slugLesson" => twig_get_attribute($this->env, $this->source, $context["lesson"], "slug", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\" type=\"button\" class=\"btn btn-sm btn-secondary\">Ajouter un commentaire</a>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 34
            echo "                <tr>
                    <td colspan=\"6\">Aucune donnée disponible</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lesson'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </tbody>
    </table>
    <a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\" type=\"button\" class=\"btn btn-secondary\">Revenir à l'accueil</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/lesson/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 40,  163 => 38,  154 => 34,  145 => 30,  141 => 29,  137 => 28,  132 => 26,  128 => 25,  124 => 24,  120 => 23,  116 => 22,  111 => 21,  106 => 20,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Leçon{% endblock %}

{% block body %}
    <a href=\"{{ path('lesson_add') }}\" type=\"button\" class=\"btn btn-success\">Ajouter une leçon</a>
    <table class=\"table table-striped table-bordered table-hover text-center mt-2\">
        <caption>Mes leçons</caption>
        <thead>
        <tr>
            <th scope=\"col\">Titre</th>
            <th scope=\"col\">Professeur</th>
            <th scope=\"col\">Début</th>
            <th scope=\"col\">Fin</th>
            <th scope=\"col\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Nombre de commentaire\">Nb. Commentaire</th>
            <th scope=\"col\">Action</th>
        </tr>
        </thead>
        <tbody>
            {% for lesson in lessons %}
                <tr onclick=\"window.location='{{ path('comment', {'slugLesson':lesson.slug}) }}'\">
                    <td>{{ lesson.title }}</td>
                    <td>{{ lesson.teacher }}</td>
                    <td>{{ lesson.startAt | date('d/m/Y') }}</td>
                    <td>{{ lesson.endAt | date('d/m/Y') }}</td>
                    <td>{{ lesson.comments|length }}</td>
                    <td>
                        <a href=\"{{ path('lesson_edit', {'slug': lesson.slug}) }}\" type=\"button\" class=\"btn btn-sm btn-warning\">Editer</a>
                        <a href=\"{{ path('lesson_delete', {'slug': lesson.slug}) }}\" type=\"button\" class=\"btn btn-sm btn-danger\">Supprimer</a>
                        <a href=\"{{ path('comment_add', {'slugLesson': lesson.slug}) }}\" type=\"button\" class=\"btn btn-sm btn-secondary\">Ajouter un commentaire</a>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"6\">Aucune donnée disponible</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
    <a href=\"{{ path('index') }}\" type=\"button\" class=\"btn btn-secondary\">Revenir à l'accueil</a>
{% endblock %}
", "admin/lesson/index.html.twig", "C:\\wamp64\\www\\symfony\\guestbook\\templates\\admin\\lesson\\index.html.twig");
    }
}
