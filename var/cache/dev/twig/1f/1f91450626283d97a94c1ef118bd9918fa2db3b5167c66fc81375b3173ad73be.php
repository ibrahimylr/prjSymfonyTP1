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

/* admin/comment/index.html.twig */
class __TwigTemplate_b326edc686316d2a8aa1a80597200f8f5bbd7dc4be6539b2edc152c151737c58 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/comment/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/comment/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/comment/index.html.twig", 1);
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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        echo " - Commentaire";
        
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
        echo "    <div class=\"d-flex justify-content-between mb-3\">
        <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lesson");
        echo "\" class=\"btn btn-warning\">Retour</a>
        <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comment_add", ["slugLesson" => twig_get_attribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 8, $this->source); })()), "slug", [], "any", false, false, false, 8)]), "html", null, true);
        echo "\" class=\"btn btn-success\">Nouveau commentaire</a>
    </div>

    <div>
        <h4>Commentaires non validés</h4>
        <div class=\"list-group\">
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 15
            echo "                ";
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["comment"], "state", [], "any", false, false, false, 15), "published"))) {
                // line 16
                echo "                    <div class=\"list-group-item list-group-item-action\">
                        <div class=\"d-flex w-100 justify-content-between\">
                            <div class=\"d-flex align-items-center mb-3\">
                                <img src=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["comment"], "imageFile"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 19), "html", null, true);
                echo "\" class=\"img-thumbnail mr-2 avatarImg\"  />
                                <h5 class=\"mb-1\">";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 20), "html", null, true);
                echo "</h5>
                            </div>
                            <small>";
                // line 22
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->extensions['Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension']->diff(twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 22), "now")), "html", null, true);
                echo "</small>
                        </div>
                        <p class=\"mb-1\">";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 24), "html", null, true);
                echo "</p>
                        <div class=\"d-flex justify-content-between\">
                            <small>";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "email", [], "any", false, false, false, 26), "html", null, true);
                echo "</small>
                            <div>
                                ";
                // line 28
                if ($this->extensions['Symfony\Bridge\Twig\Extension\WorkflowExtension']->canTransition($context["comment"], "publish")) {
                    // line 29
                    echo "                                    <button onclick=\"window.location='";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comment_changeState", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 29), "transition" => "publish"]), "html", null, true);
                    echo "'\" class=\"btn btn-success\">Valider</button>
                                ";
                } else {
                    // line 31
                    echo "                                    <button onclick=\"window.location='";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comment_changeState", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 31), "transition" => "publish"]), "html", null, true);
                    echo "'\" class=\"btn btn-success\" disabled>Valider</button>
                                ";
                }
                // line 33
                echo "
                                ";
                // line 34
                if ($this->extensions['Symfony\Bridge\Twig\Extension\WorkflowExtension']->canTransition($context["comment"], "reject")) {
                    // line 35
                    echo "                                    <button onclick=\"window.location='";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comment_changeState", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 35), "transition" => "reject"]), "html", null, true);
                    echo "'\" class=\"btn btn-danger\">Rejeter</button>
                                ";
                } else {
                    // line 37
                    echo "                                    <button onclick=\"window.location='";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comment_changeState", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 37), "transition" => "reject"]), "html", null, true);
                    echo "'\" class=\"btn btn-danger\" disabled>Rejeter</button>
                                ";
                }
                // line 39
                echo "                            </div>
                        </div>
                    </div>
                ";
            }
            // line 43
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        </div>
    </div>

    <div class=\"mt-5\">
        <h4>Commentaires publiés</h4>
        <div class=\"list-group\">
            ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 50, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 51
            echo "                ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["comment"], "state", [], "any", false, false, false, 51), "published"))) {
                // line 52
                echo "                    <div class=\"list-group-item list-group-item-action\">
                        <div class=\"d-flex w-100 justify-content-between\">
                            <div class=\"d-flex align-items-center mb-3\">
                                <img src=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["comment"], "imageFile"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 55), "html", null, true);
                echo "\" class=\"img-thumbnail mr-2 avatarImg\"  />
                                <h5 class=\"mb-1\">";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 56), "html", null, true);
                echo "</h5>
                            </div>
                            <small>";
                // line 58
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->extensions['Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension']->diff(twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 58), "now")), "html", null, true);
                echo "</small>
                        </div>
                        <p class=\"mb-1\">";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 60), "html", null, true);
                echo "</p>
                        <div class=\"d-flex justify-content-between\">
                            <small>";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "email", [], "any", false, false, false, 62), "html", null, true);
                echo "</small>
                            <div>
                                ";
                // line 64
                if ($this->extensions['Symfony\Bridge\Twig\Extension\WorkflowExtension']->canTransition($context["comment"], "moderate")) {
                    // line 65
                    echo "                                    <button onclick=\"window.location='";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comment_changeState", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 65), "transition" => "moderate"]), "html", null, true);
                    echo "'\" class=\"btn btn-warning\">Désoumettre</button>
                                ";
                } else {
                    // line 67
                    echo "                                    <button onclick=\"window.location='";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comment_changeState", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 67), "transition" => "moderate"]), "html", null, true);
                    echo "'\" class=\"btn btn-warning\" disabled>Désoumettre</button>
                                ";
                }
                // line 69
                echo "                            </div>
                        </div>
                    </div>
                ";
            }
            // line 73
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/comment/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 74,  252 => 73,  246 => 69,  240 => 67,  234 => 65,  232 => 64,  227 => 62,  222 => 60,  217 => 58,  212 => 56,  206 => 55,  201 => 52,  198 => 51,  194 => 50,  186 => 44,  180 => 43,  174 => 39,  168 => 37,  162 => 35,  160 => 34,  157 => 33,  151 => 31,  145 => 29,  143 => 28,  138 => 26,  133 => 24,  128 => 22,  123 => 20,  117 => 19,  112 => 16,  109 => 15,  105 => 14,  96 => 8,  92 => 7,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ lesson.title }} - Commentaire{% endblock %}

{% block body %}
    <div class=\"d-flex justify-content-between mb-3\">
        <a href=\"{{ path('lesson') }}\" class=\"btn btn-warning\">Retour</a>
        <a href=\"{{ path('comment_add', {'slugLesson':lesson.slug}) }}\" class=\"btn btn-success\">Nouveau commentaire</a>
    </div>

    <div>
        <h4>Commentaires non validés</h4>
        <div class=\"list-group\">
            {% for comment in comments %}
                {% if comment.state != \"published\" %}
                    <div class=\"list-group-item list-group-item-action\">
                        <div class=\"d-flex w-100 justify-content-between\">
                            <div class=\"d-flex align-items-center mb-3\">
                                <img src=\"{{ vich_uploader_asset(comment, 'imageFile') }}\" alt=\"{{ comment.author }}\" class=\"img-thumbnail mr-2 avatarImg\"  />
                                <h5 class=\"mb-1\">{{ comment.author }}</h5>
                            </div>
                            <small>{{ comment.createdAt | ago('now') | capitalize }}</small>
                        </div>
                        <p class=\"mb-1\">{{ comment.content }}</p>
                        <div class=\"d-flex justify-content-between\">
                            <small>{{ comment.email }}</small>
                            <div>
                                {% if workflow_can(comment, 'publish') %}
                                    <button onclick=\"window.location='{{ path('comment_changeState', {'id': comment.id, 'transition': 'publish'}) }}'\" class=\"btn btn-success\">Valider</button>
                                {% else %}
                                    <button onclick=\"window.location='{{ path('comment_changeState', {'id': comment.id, 'transition': 'publish'}) }}'\" class=\"btn btn-success\" disabled>Valider</button>
                                {% endif %}

                                {% if workflow_can(comment, 'reject') %}
                                    <button onclick=\"window.location='{{ path('comment_changeState', {'id': comment.id, 'transition': 'reject'}) }}'\" class=\"btn btn-danger\">Rejeter</button>
                                {% else %}
                                    <button onclick=\"window.location='{{ path('comment_changeState', {'id': comment.id, 'transition': 'reject'}) }}'\" class=\"btn btn-danger\" disabled>Rejeter</button>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                {% endif %}
            {% endfor %}
        </div>
    </div>

    <div class=\"mt-5\">
        <h4>Commentaires publiés</h4>
        <div class=\"list-group\">
            {% for comment in comments %}
                {% if comment.state == \"published\" %}
                    <div class=\"list-group-item list-group-item-action\">
                        <div class=\"d-flex w-100 justify-content-between\">
                            <div class=\"d-flex align-items-center mb-3\">
                                <img src=\"{{ vich_uploader_asset(comment, 'imageFile') }}\" alt=\"{{ comment.author }}\" class=\"img-thumbnail mr-2 avatarImg\"  />
                                <h5 class=\"mb-1\">{{ comment.author }}</h5>
                            </div>
                            <small>{{ comment.createdAt | ago('now') | capitalize }}</small>
                        </div>
                        <p class=\"mb-1\">{{ comment.content }}</p>
                        <div class=\"d-flex justify-content-between\">
                            <small>{{ comment.email }}</small>
                            <div>
                                {% if workflow_can(comment, 'moderate') %}
                                    <button onclick=\"window.location='{{ path('comment_changeState', {'id': comment.id, 'transition': 'moderate'}) }}'\" class=\"btn btn-warning\">Désoumettre</button>
                                {% else %}
                                    <button onclick=\"window.location='{{ path('comment_changeState', {'id': comment.id, 'transition': 'moderate'}) }}'\" class=\"btn btn-warning\" disabled>Désoumettre</button>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                {% endif %}
            {% endfor %}
        </div>
    </div>

{% endblock %}
", "admin/comment/index.html.twig", "C:\\wamp64\\www\\symfony\\guestbook\\templates\\admin\\comment\\index.html.twig");
    }
}
