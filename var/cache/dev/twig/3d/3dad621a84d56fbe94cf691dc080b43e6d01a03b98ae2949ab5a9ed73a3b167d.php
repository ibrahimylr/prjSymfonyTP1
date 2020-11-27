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

/* index/comment.html.twig */
class __TwigTemplate_59e35ac2b3e39e5649b1aaf48d450e6f138c55b25aa3e492e5367a49d4acc3f0 extends Template
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
        return "index/header.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/comment.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/comment.html.twig"));

        $this->parent = $this->loadTemplate("index/header.html.twig", "index/comment.html.twig", 1);
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

        echo "Commentaire";
        
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
        echo "    <div class=\"card\">
        <div class=\"card-header d-flex justify-content-between\">
            <span>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 8, $this->source); })()), "title", [], "any", false, false, false, 8), "html", null, true);
        echo "</span>
            <span>Du <b>";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 9, $this->source); })()), "startAt", [], "any", false, false, false, 9), "d/m/Y"), "html", null, true);
        echo "</b> au <b>";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 9, $this->source); })()), "endAt", [], "any", false, false, false, 9), "d/m/Y"), "html", null, true);
        echo "</b></span>
        </div>
        <div class=\"card-body\">
            <div class=\"list-group\">
                ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 14
            echo "                    <div class=\"list-group-item list-group-item-action\">
                        <div class=\"d-flex w-100 justify-content-between\">
                            <div class=\"d-flex align-items-center mb-3\">
                                <img src=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["comment"], "imageFile"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 17), "html", null, true);
            echo "\" class=\"img-thumbnail mr-2 avatarImg\"  />
                                <h5 class=\"mb-1\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 18), "html", null, true);
            echo "</h5>
                            </div>
                            <small>";
            // line 20
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->extensions['Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension']->diff(twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 20), "now")), "html", null, true);
            echo "</small>
                        </div>
                        <p class=\"mb-1\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 22), "html", null, true);
            echo "</p>
                        <small>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "email", [], "any", false, false, false, 23), "html", null, true);
            echo "</small>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "            </div>

            <div class=\"d-flex justify-content-center mt-4\">
                ";
        // line 29
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 29, $this->source); })()));
        echo "
            </div>

            <blockquote class=\"blockquote mb-0\">
                <footer class=\"blockquote-footer mt-3\">Cours écrit par <cite title=\"Professeur\">";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 33, $this->source); })()), "teacher", [], "any", false, false, false, 33), "html", null, true);
        echo "</cite></footer>
            </blockquote>
        </div>
    </div>

    <div class=\"p-5 mt-5\">
        ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), 'form_start');
        echo "
            <div class=\"form-row\">
                <div class=\"col\">
                    ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "imageFile", [], "any", false, false, false, 42), 'row', ["label" => "Avatar"]);
        echo "
                </div>
                <div class=\"col\">
                    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "author", [], "any", false, false, false, 45), 'row', ["label" => "Auteur"]);
        echo "
                </div>
                <div class=\"col\">
                    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "email", [], "any", false, false, false, 48), 'row', ["label" => "Email"]);
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "content", [], "any", false, false, false, 52), 'row', ["label" => "Contenu"]);
        echo "
            </div>
            <div class=\"d-flex justify-content-center\">
                <button type=\"submit\" class=\"btn btn-success\">Confirmer</button>
            </div>
        ";
        // line 57
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), 'form_end');
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "index/comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 57,  189 => 52,  182 => 48,  176 => 45,  170 => 42,  164 => 39,  155 => 33,  148 => 29,  143 => 26,  134 => 23,  130 => 22,  125 => 20,  120 => 18,  114 => 17,  109 => 14,  105 => 13,  96 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'index/header.html.twig' %}

{% block title %}Commentaire{% endblock %}

{% block body %}
    <div class=\"card\">
        <div class=\"card-header d-flex justify-content-between\">
            <span>{{ lesson.title }}</span>
            <span>Du <b>{{ lesson.startAt | date('d/m/Y') }}</b> au <b>{{ lesson.endAt | date('d/m/Y') }}</b></span>
        </div>
        <div class=\"card-body\">
            <div class=\"list-group\">
                {% for comment in comments %}
                    <div class=\"list-group-item list-group-item-action\">
                        <div class=\"d-flex w-100 justify-content-between\">
                            <div class=\"d-flex align-items-center mb-3\">
                                <img src=\"{{ vich_uploader_asset(comment, 'imageFile') }}\" alt=\"{{ comment.author }}\" class=\"img-thumbnail mr-2 avatarImg\"  />
                                <h5 class=\"mb-1\">{{ comment.author }}</h5>
                            </div>
                            <small>{{ comment.createdAt | ago('now') | capitalize }}</small>
                        </div>
                        <p class=\"mb-1\">{{ comment.content }}</p>
                        <small>{{ comment.email }}</small>
                    </div>
                {% endfor %}
            </div>

            <div class=\"d-flex justify-content-center mt-4\">
                {{ knp_pagination_render(pagination) }}
            </div>

            <blockquote class=\"blockquote mb-0\">
                <footer class=\"blockquote-footer mt-3\">Cours écrit par <cite title=\"Professeur\">{{ lesson.teacher }}</cite></footer>
            </blockquote>
        </div>
    </div>

    <div class=\"p-5 mt-5\">
        {{ form_start(form) }}
            <div class=\"form-row\">
                <div class=\"col\">
                    {{ form_row(form.imageFile, { 'label': 'Avatar' }) }}
                </div>
                <div class=\"col\">
                    {{ form_row(form.author, { 'label': 'Auteur' }) }}
                </div>
                <div class=\"col\">
                    {{ form_row(form.email, { 'label': 'Email' }) }}
                </div>
            </div>
            <div class=\"form-group\">
                {{ form_row(form.content, { 'label': 'Contenu' }) }}
            </div>
            <div class=\"d-flex justify-content-center\">
                <button type=\"submit\" class=\"btn btn-success\">Confirmer</button>
            </div>
        {{ form_end(form) }}
    </div>
{% endblock %}", "index/comment.html.twig", "C:\\wamp64\\www\\symfony\\guestbook\\templates\\index\\comment.html.twig");
    }
}
