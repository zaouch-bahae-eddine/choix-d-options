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

/* promotion/index.html.twig */
class __TwigTemplate_f7c32c3888a63605caf46458f2b5d50b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'header' => [$this, 'block_header'],
            'sidebar' => [$this, 'block_sidebar'],
            'script' => [$this, 'block_script'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "promotion/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "promotion/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "promotion/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Promotions";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/card-style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/float-button-style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    ";
        $this->displayBlock('header', $context, $blocks);
        // line 16
        echo "
    ";
        // line 17
        $this->displayBlock('sidebar', $context, $blocks);
        // line 20
        echo "    <main id=\"main\" class=\"main\" style=\"position: relative\">
        <div class=\"pagetitle\">
            <h1>Gestion des promotions</h1>
        </div>

        <section class=\"section-content\">
            <div class=\"row\">

                ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["promotions"]) || array_key_exists("promotions", $context) ? $context["promotions"] : (function () { throw new RuntimeError('Variable "promotions" does not exist.', 28, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
            // line 29
            echo "                    <div class=\"col-lg-4\">
                        <div class=\"data-card\" id=\"card-";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 30), "html", null, true);
            echo "\">
                            <h3 class=\"parcour-";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["promotion"], "parcour", [], "any", false, false, false, 31), "id", [], "any", false, false, false, 31), "html", null, true);
            echo "\">Master-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promotion"], "anneeMaster", [], "any", false, false, false, 31), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["promotion"], "parcour", [], "any", false, false, false, 31), "name", [], "any", false, false, false, 31), "html", null, true);
            echo "</h3>
                            <h4>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promotion"], "datePromotion", [], "any", false, false, false, 32), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["promotion"], "datePromotion", [], "any", false, false, false, 32) + 1), "html", null, true);
            echo "</h4>
                            <p>Date du choix</p>
                            <p>";
            // line 34
            ((twig_get_attribute($this->env, $this->source, $context["promotion"], "dateLimiteChoixOptions", [], "any", false, false, false, 34)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promotion"], "dateLimiteChoixOptions", [], "any", false, false, false, 34), "d-m-Y H:i"), "html", null, true))) : (print ("--")));
            echo "</p>
                            <div class=\"card-buttons\">
                                <div class=\"card-button\">
                                    <a href=\"#\" class=\"link-text edit-promotion edit-promotion-";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 37), "html", null, true);
            echo "\" data-bs-toggle=\"modal\" data-bs-target=\"#edit-promotion-modal\">
                                        <i class=\"bi bi-pencil-square\"></i>
                                    </a>
                                </div>
                                <div class=\"card-button\" style=\"flex: 1; text-align: center\">
                                    <form method=\"post\" action=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_promotion_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Voulez vous vraiment supprimer cet item?');\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 43))), "html", null, true);
            echo "\">
                                        <button class=\"btn link-text\" style=\"margin: 0 auto;\"><i class=\"bi bi-trash3-fill\"></i></button>
                                    </form>
                                </div>
                                <div class=\"card-button dropdown\" style=\"flex: 1; text-align: center\">
                                    <a href=\"\" class=\"link-text\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                        <i class=\"bi bi-three-dots\"></i>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a class=\"dropdown-item\" href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_student_index", ["promotion" => twig_get_attribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\">Gestion des étudiants</a></li>
                                        <li><a class=\"dropdown-item\" href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bloc_index", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["promotion"], "parcour", [], "any", false, false, false, 53), "id", [], "any", false, false, false, 53)]), "html", null, true);
            echo "\">Gestion des blocs</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">Télécharger en format Excel</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">Télécharger en format PDF</a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 63
            echo "                    <tr>
                        <td colspan=\"5\">no records found</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promotion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "            </div>
        </section>

        <button class=\"btn btn-primary float-button\" data-bs-toggle=\"modal\" data-bs-target=\"#staticBackdrop\" >Ajouter Promotion</button>
        <div class=\"modal fade\" id=\"staticBackdrop\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">

                ";
        // line 74
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), 'form_start');
        echo "
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h1 class=\"modal-title fs-5\" id=\"exampleModalLabel\"> <i class=\"bi bi-file-plus\"></i> Ajouter une promotion</h1>
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                        </div>
                        <div class=\"modal-body row\">
                            <div class=\"my-custom-class-for-errors\">
                                ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), 'errors');
        echo "
                            </div>
                            <div class=\"col-12\">
                                ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "anneeMaster", [], "any", false, false, false, 85), 'label', ["label_attr" => ["class" => "col-form-label"], "label" => "Année du master"]);
        echo "
                                ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "anneeMaster", [], "any", false, false, false, 86), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                            <div class=\"col-12\">
                                ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "parcour", [], "any", false, false, false, 89), 'label', ["label_attr" => ["class" => "col-form-label"], "label" => "Parcours"]);
        echo "
                                ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "parcour", [], "any", false, false, false, 90), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                            <div class=\"col-12\">
                                ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "datePromotion", [], "any", false, false, false, 93), 'label', ["label_attr" => ["class" => "col-form-label"], "label" => "Année de promotion"]);
        echo "
                                ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "datePromotion", [], "any", false, false, false, 94), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                            <div class=\"col-12\">
                                <label class=\"col-form-label\" for=\"promotion-student\">Etudiants</label>
                                <select class=\"form-control\" id=\"promotion-student\" name=\"promotion-student\">
                                    <option selected disabled>Choisir une promotion</option>
                                    ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["promotions"]) || array_key_exists("promotions", $context) ? $context["promotions"] : (function () { throw new RuntimeError('Variable "promotions" does not exist.', 100, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
            // line 101
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 101), "html", null, true);
            echo "\">M-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promotion"], "anneeMaster", [], "any", false, false, false, 101), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["promotion"], "parcour", [], "any", false, false, false, 101), "name", [], "any", false, false, false, 101), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promotion"], "datePromotion", [], "any", false, false, false, 101), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["promotion"], "datePromotion", [], "any", false, false, false, 101) + 1), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promotion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "                                </select>
                            </div>
                            <div class=\"col-12\">
                                ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "dateLimiteChoixOptions", [], "any", false, false, false, 106), 'label', ["label_attr" => ["class" => "col-form-label"], "label" => "Date limite de choix d'options"]);
        echo "
                                ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "dateLimiteChoixOptions", [], "any", false, false, false, 107), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                            <button class=\"btn btn-primary\">";
        // line 112
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 112, $this->source); })()), "Ajouter")) : ("Ajouter")), "html", null, true);
        echo "</button>
                        </div>
                    </div>
                ";
        // line 115
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>
        <div class=\"modal fade\" id=\"edit-promotion-modal\" tabindex=\"-1\" aria-labelledby=\"ModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">

                ";
        // line 121
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formEdit"]) || array_key_exists("formEdit", $context) ? $context["formEdit"] : (function () { throw new RuntimeError('Variable "formEdit" does not exist.', 121, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_promotion_edit", ["id" => 0]), "method" => "POST", "attr" => ["id" => "form-edit"]]);
        echo "
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h1 class=\"modal-title fs-5\" id=\"exampleModalLabel\"> <i class=\"bi bi-pen\"></i> Modifier une promotion</h1>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body row\">
                        <div class=\"my-custom-class-for-errors\">
                            ";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formEdit"]) || array_key_exists("formEdit", $context) ? $context["formEdit"] : (function () { throw new RuntimeError('Variable "formEdit" does not exist.', 129, $this->source); })()), 'errors');
        echo "
                        </div>
                        <div class=\"col-12\">
                            ";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEdit"]) || array_key_exists("formEdit", $context) ? $context["formEdit"] : (function () { throw new RuntimeError('Variable "formEdit" does not exist.', 132, $this->source); })()), "anneeMaster", [], "any", false, false, false, 132), 'label', ["label_attr" => ["class" => "col-form-label"], "label" => "Année du master"]);
        echo "
                            ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEdit"]) || array_key_exists("formEdit", $context) ? $context["formEdit"] : (function () { throw new RuntimeError('Variable "formEdit" does not exist.', 133, $this->source); })()), "anneeMaster", [], "any", false, false, false, 133), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                        <div class=\"col-12\">
                            ";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEdit"]) || array_key_exists("formEdit", $context) ? $context["formEdit"] : (function () { throw new RuntimeError('Variable "formEdit" does not exist.', 136, $this->source); })()), "parcour", [], "any", false, false, false, 136), 'label', ["label_attr" => ["class" => "col-form-label"], "label" => "Parcours"]);
        echo "
                            ";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEdit"]) || array_key_exists("formEdit", $context) ? $context["formEdit"] : (function () { throw new RuntimeError('Variable "formEdit" does not exist.', 137, $this->source); })()), "parcour", [], "any", false, false, false, 137), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                        <div class=\"col-12\">
                            ";
        // line 140
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEdit"]) || array_key_exists("formEdit", $context) ? $context["formEdit"] : (function () { throw new RuntimeError('Variable "formEdit" does not exist.', 140, $this->source); })()), "datePromotion", [], "any", false, false, false, 140), 'label', ["label_attr" => ["class" => "col-form-label"], "label" => "Année de promotion"]);
        echo "
                            ";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEdit"]) || array_key_exists("formEdit", $context) ? $context["formEdit"] : (function () { throw new RuntimeError('Variable "formEdit" does not exist.', 141, $this->source); })()), "datePromotion", [], "any", false, false, false, 141), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                        <div class=\"col-12\">
                            ";
        // line 144
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEdit"]) || array_key_exists("formEdit", $context) ? $context["formEdit"] : (function () { throw new RuntimeError('Variable "formEdit" does not exist.', 144, $this->source); })()), "dateLimiteChoixOptions", [], "any", false, false, false, 144), 'label', ["label_attr" => ["class" => "col-form-label"], "label" => "Date limite de choix d'options"]);
        echo "
                            ";
        // line 145
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEdit"]) || array_key_exists("formEdit", $context) ? $context["formEdit"] : (function () { throw new RuntimeError('Variable "formEdit" does not exist.', 145, $this->source); })()), "dateLimiteChoixOptions", [], "any", false, false, false, 145), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                        <button class=\"btn btn-primary\">";
        // line 150
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 150, $this->source); })()), "Modifier")) : ("Modifier")), "html", null, true);
        echo "</button>
                    </div>
                </div>
                ";
        // line 153
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formEdit"]) || array_key_exists("formEdit", $context) ? $context["formEdit"] : (function () { throw new RuntimeError('Variable "formEdit" does not exist.', 153, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>
    </main>
    ";
        // line 157
        $this->displayBlock('script', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 13
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 14
        echo "        ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 17
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 18
        echo "        ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 157
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 158
        echo "        ";
        $this->displayParentBlock("script", $context, $blocks);
        echo "
        <script>
            const promotions = Object.values(document.getElementsByClassName('edit-promotion'));
            promotions.forEach(link => {
                link.addEventListener('click', event => {
                    event.preventDefault();
                    const id = event.currentTarget.className.split(' ').pop().split('-').pop()
                    const card = document.getElementById('card-' + id);
                    const masterinfo = card.children[0].textContent.split(' ');
                    const masterYear = masterinfo[0].split(' ').pop().split('-')[1];
                    const parcour = card.children[0].className.split('-').pop();
                    const datePromo = card.children[1].textContent.split(' - ')[0];
                    const dateLimite = card.children[3].textContent;
                    const day = dateLimite.split('-')[0];
                    const month = dateLimite.split('-')[1];
                    const year = dateLimite.split('-')[2].split(' ')[0];
                    const hour = dateLimite.split('-')[2].split(' ')[1].split(':')[0];
                    const minute = dateLimite.split('-')[2].split(' ')[1].split(':')[1];
                    const form = document.getElementById('form-edit');
                    //Form Values
                    form.getElementsByTagName('select')[0].value = parseInt(masterYear);
                    form.getElementsByTagName('input')[0].value = datePromo;
                    form.getElementsByTagName('select')[1].value = parseInt(parcour);
                    form.getElementsByTagName('select')[2].value = parseInt(month);
                    form.getElementsByTagName('select')[3].value = parseInt(day);
                    form.getElementsByTagName('select')[4].value = parseInt(year);
                    form.getElementsByTagName('select')[5].value = parseInt(hour);
                    form.getElementsByTagName('select')[6].value = parseInt(minute);
                    let formAction = form.action.split('/');
                    formAction[formAction.length - 2] = id;
                    form.action = formAction.join('/');
                    console.log(form.action)


                });
            });
        </script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "promotion/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  477 => 158,  467 => 157,  454 => 18,  444 => 17,  431 => 14,  421 => 13,  411 => 157,  404 => 153,  398 => 150,  390 => 145,  386 => 144,  380 => 141,  376 => 140,  370 => 137,  366 => 136,  360 => 133,  356 => 132,  350 => 129,  339 => 121,  330 => 115,  324 => 112,  316 => 107,  312 => 106,  307 => 103,  290 => 101,  286 => 100,  277 => 94,  273 => 93,  267 => 90,  263 => 89,  257 => 86,  253 => 85,  247 => 82,  236 => 74,  227 => 67,  218 => 63,  203 => 53,  199 => 52,  187 => 43,  183 => 42,  175 => 37,  169 => 34,  162 => 32,  154 => 31,  150 => 30,  147 => 29,  142 => 28,  132 => 20,  130 => 17,  127 => 16,  124 => 13,  114 => 12,  101 => 8,  97 => 7,  92 => 6,  82 => 5,  63 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Promotions{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"{{ asset('css/card-style.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('css/float-button-style.css') }}\" rel=\"stylesheet\">

{% endblock %}

{% block body %}
    {% block header %}
        {{ parent() }}
    {% endblock %}

    {% block sidebar %}
        {{ parent() }}
    {% endblock%}
    <main id=\"main\" class=\"main\" style=\"position: relative\">
        <div class=\"pagetitle\">
            <h1>Gestion des promotions</h1>
        </div>

        <section class=\"section-content\">
            <div class=\"row\">

                {% for promotion in promotions %}
                    <div class=\"col-lg-4\">
                        <div class=\"data-card\" id=\"card-{{ promotion.id }}\">
                            <h3 class=\"parcour-{{ promotion.parcour.id }}\">Master-{{ promotion.anneeMaster }} {{ promotion.parcour.name }}</h3>
                            <h4>{{ promotion.datePromotion }} - {{ promotion.datePromotion + 1 }}</h4>
                            <p>Date du choix</p>
                            <p>{{ promotion.dateLimiteChoixOptions ? promotion.dateLimiteChoixOptions|date('d-m-Y H:i') : '--' }}</p>
                            <div class=\"card-buttons\">
                                <div class=\"card-button\">
                                    <a href=\"#\" class=\"link-text edit-promotion edit-promotion-{{ promotion.id }}\" data-bs-toggle=\"modal\" data-bs-target=\"#edit-promotion-modal\">
                                        <i class=\"bi bi-pencil-square\"></i>
                                    </a>
                                </div>
                                <div class=\"card-button\" style=\"flex: 1; text-align: center\">
                                    <form method=\"post\" action=\"{{ path('app_promotion_delete', {'id': promotion.id}) }}\" onsubmit=\"return confirm('Voulez vous vraiment supprimer cet item?');\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ promotion.id) }}\">
                                        <button class=\"btn link-text\" style=\"margin: 0 auto;\"><i class=\"bi bi-trash3-fill\"></i></button>
                                    </form>
                                </div>
                                <div class=\"card-button dropdown\" style=\"flex: 1; text-align: center\">
                                    <a href=\"\" class=\"link-text\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                        <i class=\"bi bi-three-dots\"></i>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a class=\"dropdown-item\" href=\"{{ path('app_student_index', {'promotion': promotion.id}) }}\">Gestion des étudiants</a></li>
                                        <li><a class=\"dropdown-item\" href=\"{{ path('app_bloc_index', {'id': promotion.parcour.id}) }}\">Gestion des blocs</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">Télécharger en format Excel</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">Télécharger en format PDF</a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                {% else %}
                    <tr>
                        <td colspan=\"5\">no records found</td>
                    </tr>
                {% endfor %}
            </div>
        </section>

        <button class=\"btn btn-primary float-button\" data-bs-toggle=\"modal\" data-bs-target=\"#staticBackdrop\" >Ajouter Promotion</button>
        <div class=\"modal fade\" id=\"staticBackdrop\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">

                {{ form_start(form) }}
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h1 class=\"modal-title fs-5\" id=\"exampleModalLabel\"> <i class=\"bi bi-file-plus\"></i> Ajouter une promotion</h1>
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                        </div>
                        <div class=\"modal-body row\">
                            <div class=\"my-custom-class-for-errors\">
                                {{ form_errors(form) }}
                            </div>
                            <div class=\"col-12\">
                                {{ form_label(form.anneeMaster,'Année du master',  {'label_attr': {'class': 'col-form-label'}}) }}
                                {{ form_widget(form.anneeMaster, {'attr': {'class': 'form-control'}}) }}
                            </div>
                            <div class=\"col-12\">
                                {{ form_label(form.parcour,'Parcours',  {'label_attr': {'class': 'col-form-label'}}) }}
                                {{ form_widget(form.parcour, {'attr': {'class': 'form-control'}}) }}
                            </div>
                            <div class=\"col-12\">
                                {{ form_label(form.datePromotion,'Année de promotion',  {'label_attr': {'class': 'col-form-label'}}) }}
                                {{ form_widget(form.datePromotion, {'attr': {'class': 'form-control'}}) }}
                            </div>
                            <div class=\"col-12\">
                                <label class=\"col-form-label\" for=\"promotion-student\">Etudiants</label>
                                <select class=\"form-control\" id=\"promotion-student\" name=\"promotion-student\">
                                    <option selected disabled>Choisir une promotion</option>
                                    {% for promotion in promotions %}
                                        <option value=\"{{ promotion.id }}\">M-{{ promotion.anneeMaster }} {{ promotion.parcour.name }} {{ promotion.datePromotion }}-{{ promotion.datePromotion + 1 }}</option>
                                    {% endfor %}
                                </select>
                            </div>
                            <div class=\"col-12\">
                                {{ form_label(form.dateLimiteChoixOptions,'Date limite de choix d\\'options',  {'label_attr': {'class': 'col-form-label'}}) }}
                                {{ form_widget(form.dateLimiteChoixOptions, {'attr': {'class': 'form-control'}}) }}
                            </div>
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                            <button class=\"btn btn-primary\">{{ button_label|default('Ajouter') }}</button>
                        </div>
                    </div>
                {{ form_end(form) }}
            </div>
        </div>
        <div class=\"modal fade\" id=\"edit-promotion-modal\" tabindex=\"-1\" aria-labelledby=\"ModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">

                {{ form_start(formEdit, {'action': path('app_promotion_edit', { 'id': 0 }), 'method': 'POST', 'attr': {'id': 'form-edit'}}) }}
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h1 class=\"modal-title fs-5\" id=\"exampleModalLabel\"> <i class=\"bi bi-pen\"></i> Modifier une promotion</h1>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body row\">
                        <div class=\"my-custom-class-for-errors\">
                            {{ form_errors(formEdit) }}
                        </div>
                        <div class=\"col-12\">
                            {{ form_label(formEdit.anneeMaster,'Année du master',  {'label_attr': {'class': 'col-form-label'}}) }}
                            {{ form_widget(formEdit.anneeMaster, {'attr': {'class': 'form-control'}}) }}
                        </div>
                        <div class=\"col-12\">
                            {{ form_label(formEdit.parcour,'Parcours',  {'label_attr': {'class': 'col-form-label'}}) }}
                            {{ form_widget(formEdit.parcour, {'attr': {'class': 'form-control'}}) }}
                        </div>
                        <div class=\"col-12\">
                            {{ form_label(formEdit.datePromotion,'Année de promotion',  {'label_attr': {'class': 'col-form-label'}}) }}
                            {{ form_widget(formEdit.datePromotion, {'attr': {'class': 'form-control'}}) }}
                        </div>
                        <div class=\"col-12\">
                            {{ form_label(formEdit.dateLimiteChoixOptions,'Date limite de choix d\\'options',  {'label_attr': {'class': 'col-form-label'}}) }}
                            {{ form_widget(formEdit.dateLimiteChoixOptions, {'attr': {'class': 'form-control'}}) }}
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                        <button class=\"btn btn-primary\">{{ button_label|default('Modifier') }}</button>
                    </div>
                </div>
                {{ form_end(formEdit) }}
            </div>
        </div>
    </main>
    {% block script %}
        {{ parent() }}
        <script>
            const promotions = Object.values(document.getElementsByClassName('edit-promotion'));
            promotions.forEach(link => {
                link.addEventListener('click', event => {
                    event.preventDefault();
                    const id = event.currentTarget.className.split(' ').pop().split('-').pop()
                    const card = document.getElementById('card-' + id);
                    const masterinfo = card.children[0].textContent.split(' ');
                    const masterYear = masterinfo[0].split(' ').pop().split('-')[1];
                    const parcour = card.children[0].className.split('-').pop();
                    const datePromo = card.children[1].textContent.split(' - ')[0];
                    const dateLimite = card.children[3].textContent;
                    const day = dateLimite.split('-')[0];
                    const month = dateLimite.split('-')[1];
                    const year = dateLimite.split('-')[2].split(' ')[0];
                    const hour = dateLimite.split('-')[2].split(' ')[1].split(':')[0];
                    const minute = dateLimite.split('-')[2].split(' ')[1].split(':')[1];
                    const form = document.getElementById('form-edit');
                    //Form Values
                    form.getElementsByTagName('select')[0].value = parseInt(masterYear);
                    form.getElementsByTagName('input')[0].value = datePromo;
                    form.getElementsByTagName('select')[1].value = parseInt(parcour);
                    form.getElementsByTagName('select')[2].value = parseInt(month);
                    form.getElementsByTagName('select')[3].value = parseInt(day);
                    form.getElementsByTagName('select')[4].value = parseInt(year);
                    form.getElementsByTagName('select')[5].value = parseInt(hour);
                    form.getElementsByTagName('select')[6].value = parseInt(minute);
                    let formAction = form.action.split('/');
                    formAction[formAction.length - 2] = id;
                    form.action = formAction.join('/');
                    console.log(form.action)


                });
            });
        </script>
    {% endblock %}
{% endblock %}
", "promotion/index.html.twig", "/Users/etudiant/Desktop/prjthematique/choix-d-options/choix_options_project/templates/promotion/index.html.twig");
    }
}
