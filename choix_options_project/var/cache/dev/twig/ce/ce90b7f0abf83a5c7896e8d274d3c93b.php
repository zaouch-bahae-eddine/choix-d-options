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

/* student/index.html.twig */
class __TwigTemplate_a7df35a09debbe94e4e0bffee48841fb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "student/index.html.twig", 1);
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

        echo "User index";
        
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/float-button-style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/select-element-style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->displayBlock('header', $context, $blocks);
        // line 15
        echo "
    ";
        // line 16
        $this->displayBlock('sidebar', $context, $blocks);
        // line 19
        echo "    <main id=\"main\" class=\"main\" style=\"position: relative\">
        <div class=\"pagetitle\">
            <h1>Gestion des étudiants</h1>
            <form style=\"text-align: center;\">
                <select id=\"promotion-selected\" class=\"text-select\">
                    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["promotions"]) || array_key_exists("promotions", $context) ? $context["promotions"] : (function () { throw new RuntimeError('Variable "promotions" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
            // line 25
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo "\" ";
            if (((isset($context["promotionId"]) || array_key_exists("promotionId", $context) ? $context["promotionId"] : (function () { throw new RuntimeError('Variable "promotionId" does not exist.', 25, $this->source); })()) == twig_get_attribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 25))) {
                echo " selected ";
            }
            echo ">
                            M-";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promotion"], "anneeMaster", [], "any", false, false, false, 26), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["promotion"], "parcour", [], "any", false, false, false, 26), "name", [], "any", false, false, false, 26), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promotion"], "datePromotion", [], "any", false, false, false, 26), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["promotion"], "datePromotion", [], "any", false, false, false, 26) + 1), "html", null, true);
            echo "
                        </option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promotion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                </select>
            </form>
        </div>
        <section class=\"section-content\">
            <div class=\"row\">
                <table class=\"table\">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Email</th>
                            <th style=\"text-align: center\">
                                <button class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#AddStudentModal\" style=\"background-color: #00345f;\">
                                    <i class=\"bi bi-plus-square\"></i> Ajouter Etudiant
                                </button>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 48, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 49
            echo "                        <tr  id=\"student-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "user", [], "any", false, false, false, 49), "id", [], "any", false, false, false, 49), "html", null, true);
            echo "\">
                            <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "user", [], "any", false, false, false, 50), "lastName", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                            <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "user", [], "any", false, false, false, 51), "firstName", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                            <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "user", [], "any", false, false, false, 52), "email", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                            <td style=\"display: flex; align-items: center; justify-content: center\">
                                <a href=\"#\" class=\"link-text edit-student edit-student-";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "user", [], "any", false, false, false, 54), "id", [], "any", false, false, false, 54), "html", null, true);
            echo "\" data-bs-toggle=\"modal\" data-bs-target=\"#edit-student-modal\">
                                    <i class=\"bi bi-pencil-square\"></i>
                                </a>
                                <form method=\"post\" action=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_student_delete", ["promotion" => (isset($context["promotionId"]) || array_key_exists("promotionId", $context) ? $context["promotionId"] : (function () { throw new RuntimeError('Variable "promotionId" does not exist.', 57, $this->source); })()), "student" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "user", [], "any", false, false, false, 57), "id", [], "any", false, false, false, 57)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('La suppression d\\'un parcour engendra la suppression de toutes les promotions liées à ce parcour! Voulez vous vraiment supprimer ce parcour ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "user", [], "any", false, false, false, 58), "id", [], "any", false, false, false, 58))), "html", null, true);
            echo "\">
                                    <button class=\"link-text btn\" style=\"color: #dc2323\"><i class=\"bi bi-trash3-fill\"></i></button>
                                </form>
                                <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_app_student_choice", ["promotion" => (isset($context["promotionId"]) || array_key_exists("promotionId", $context) ? $context["promotionId"] : (function () { throw new RuntimeError('Variable "promotionId" does not exist.', 61, $this->source); })()), "student" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 61)]), "html", null, true);
            echo "\">Options</a>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 65
            echo "                        <tr>
                            <td colspan=\"7\">no records found</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                    </tbody>
                </table>
            </div>
        </section>
        <form action=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_student_send", ["promotion" => (isset($context["promotionId"]) || array_key_exists("promotionId", $context) ? $context["promotionId"] : (function () { throw new RuntimeError('Variable "promotionId" does not exist.', 73, $this->source); })())]), "html", null, true);
        echo "\" method=\"post\">
            <button class=\"btn btn-primary float-button\" style=\"left: calc(50% + 210px); min-width: fit-content;\">Envoyer <i class=\"bi bi-send\" style=\"margin-left: 5px;\"></i></button>
        </form>
        <button class=\"btn btn-primary float-button\" data-bs-toggle=\"modal\" data-bs-target=\"#importFromCsv\" >Importer les étudiants d'un fichier Excel</button>
        <div class=\"modal fade\" id=\"importFromCsv\" tabindex=\"-1\" aria-labelledby=\"importFromCsv\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">

                ";
        // line 80
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formUpload"]) || array_key_exists("formUpload", $context) ? $context["formUpload"] : (function () { throw new RuntimeError('Variable "formUpload" does not exist.', 80, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_student_upload", ["promotion" => (isset($context["promotionId"]) || array_key_exists("promotionId", $context) ? $context["promotionId"] : (function () { throw new RuntimeError('Variable "promotionId" does not exist.', 80, $this->source); })())]), "method" => "POST", "attr" => ["id" => "form-upload"]]);
        echo "

                <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h1 class=\"modal-title fs-5\" id=\"exampleModalLabel\"> <i class=\"bi bi-file-plus\"></i>Importer</h1>
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                        </div>
                        <div class=\"modal-body row\">
                            <div class=\"my-custom-class-for-errors\">
                                ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formUpload"]) || array_key_exists("formUpload", $context) ? $context["formUpload"] : (function () { throw new RuntimeError('Variable "formUpload" does not exist.', 89, $this->source); })()), 'errors');
        echo "
                            </div>
                            <div class=\"col-12\">
                                ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUpload"]) || array_key_exists("formUpload", $context) ? $context["formUpload"] : (function () { throw new RuntimeError('Variable "formUpload" does not exist.', 92, $this->source); })()), "submitFile", [], "any", false, false, false, 92), 'label', ["label_attr" => ["class" => "col-form-label"], "label" => "Fichier Excel à importer"]);
        echo "
                                ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUpload"]) || array_key_exists("formUpload", $context) ? $context["formUpload"] : (function () { throw new RuntimeError('Variable "formUpload" does not exist.', 93, $this->source); })()), "submitFile", [], "any", false, false, false, 93), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                            <button class=\"btn btn-primary\">";
        // line 98
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 98, $this->source); })()), "Ajouter")) : ("Ajouter")), "html", null, true);
        echo "</button>
                        </div>
                    </div>
                ";
        // line 101
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formUpload"]) || array_key_exists("formUpload", $context) ? $context["formUpload"] : (function () { throw new RuntimeError('Variable "formUpload" does not exist.', 101, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>
        <!-- Modal Add -->
        <div class=\"modal fade\" id=\"AddStudentModal\" tabindex=\"-1\" aria-labelledby=\"AddStudentModal\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">

                ";
        // line 108
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), 'form_start');
        echo "
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h1 class=\"modal-title fs-5\" id=\"exampleModalLabel\"> <i class=\"bi bi-file-plus\"></i> Ajouter étudiant</h1>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body row\">
                        <div class=\"my-custom-class-for-errors\">
                            ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), 'errors');
        echo "
                        </div>
                        <div class=\"col-12\">
                            ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "lastName", [], "any", false, false, false, 119), 'label', ["label_attr" => ["class" => "col-form-label"], "label" => "Nom"]);
        echo "
                            ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "lastName", [], "any", false, false, false, 120), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                        <div class=\"col-12\">
                            ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), "firstName", [], "any", false, false, false, 123), 'label', ["label_attr" => ["class" => "col-form-label"], "label" => "Prénom"]);
        echo "
                            ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "firstName", [], "any", false, false, false, 124), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                        <div class=\"col-12\">
                            ";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "email", [], "any", false, false, false, 127), 'label', ["label_attr" => ["class" => "col-form-label"], "label" => "Email"]);
        echo "
                            ";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), "email", [], "any", false, false, false, 128), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                        <button class=\"btn btn-primary\">";
        // line 133
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 133, $this->source); })()), "Ajouter")) : ("Ajouter")), "html", null, true);
        echo "</button>
                    </div>
                </div>
                ";
        // line 136
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>
        <!-- End Modal Add -->
        <!-- Modal Edit -->
        <div class=\"modal fade\" id=\"edit-student-modal\" tabindex=\"-1\" aria-labelledby=\"edit-student-modal\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">

                ";
        // line 144
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formEdit"]) || array_key_exists("formEdit", $context) ? $context["formEdit"] : (function () { throw new RuntimeError('Variable "formEdit" does not exist.', 144, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_student_edit", ["promotion" => (isset($context["promotionId"]) || array_key_exists("promotionId", $context) ? $context["promotionId"] : (function () { throw new RuntimeError('Variable "promotionId" does not exist.', 144, $this->source); })()), "student" => 0]), "method" => "POST", "attr" => ["id" => "form-edit"]]);
        echo "
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h1 class=\"modal-title fs-5\" id=\"exampleModalLabel\"> <i class=\"bi bi-pen\"></i> Modifier un étudiant</h1>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body row\">

                        <div class=\"my-custom-class-for-errors\">
                            ";
        // line 153
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formEdit"]) || array_key_exists("formEdit", $context) ? $context["formEdit"] : (function () { throw new RuntimeError('Variable "formEdit" does not exist.', 153, $this->source); })()), 'errors');
        echo "
                        </div>
                        <div class=\"col-12\">
                            ";
        // line 156
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEdit"]) || array_key_exists("formEdit", $context) ? $context["formEdit"] : (function () { throw new RuntimeError('Variable "formEdit" does not exist.', 156, $this->source); })()), "lastName", [], "any", false, false, false, 156), 'label', ["label_attr" => ["class" => "col-form-label"], "label" => "Nom"]);
        echo "
                            ";
        // line 157
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEdit"]) || array_key_exists("formEdit", $context) ? $context["formEdit"] : (function () { throw new RuntimeError('Variable "formEdit" does not exist.', 157, $this->source); })()), "lastName", [], "any", false, false, false, 157), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                        <div class=\"col-12\">
                            ";
        // line 160
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEdit"]) || array_key_exists("formEdit", $context) ? $context["formEdit"] : (function () { throw new RuntimeError('Variable "formEdit" does not exist.', 160, $this->source); })()), "firstName", [], "any", false, false, false, 160), 'label', ["label_attr" => ["class" => "col-form-label"], "label" => "Prénom"]);
        echo "
                            ";
        // line 161
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEdit"]) || array_key_exists("formEdit", $context) ? $context["formEdit"] : (function () { throw new RuntimeError('Variable "formEdit" does not exist.', 161, $this->source); })()), "firstName", [], "any", false, false, false, 161), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                        <div class=\"col-12\">
                            ";
        // line 164
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEdit"]) || array_key_exists("formEdit", $context) ? $context["formEdit"] : (function () { throw new RuntimeError('Variable "formEdit" does not exist.', 164, $this->source); })()), "email", [], "any", false, false, false, 164), 'label', ["label_attr" => ["class" => "col-form-label"], "label" => "Email"]);
        echo "
                            ";
        // line 165
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEdit"]) || array_key_exists("formEdit", $context) ? $context["formEdit"] : (function () { throw new RuntimeError('Variable "formEdit" does not exist.', 165, $this->source); })()), "email", [], "any", false, false, false, 165), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                        <div class=\"col-12\" id=\"change-promotion\">
                            <label class=\"col-form-label required\" for=\"change-promotion-select\">Promotion</label>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                        <button class=\"btn btn-primary\">";
        // line 173
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 173, $this->source); })()), "Modifier")) : ("Modifier")), "html", null, true);
        echo "</button>
                    </div>
                </div>
                ";
        // line 176
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formEdit"]) || array_key_exists("formEdit", $context) ? $context["formEdit"] : (function () { throw new RuntimeError('Variable "formEdit" does not exist.', 176, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>
        <!-- End Modal Edit -->
    </main>
    ";
        // line 181
        $this->displayBlock('script', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 13
        echo "        ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 17
        echo "        ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 181
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 182
        echo "        ";
        $this->displayParentBlock("script", $context, $blocks);
        echo "
        <script>
            const promotionSelected = document.getElementById('promotion-selected');
            var clonePromotionSelect = promotionSelected.cloneNode(true);
            clonePromotionSelect.id = 'change-promotion-select';
            clonePromotionSelect.name = 'change-promotion-select';
            clonePromotionSelect.classList.remove('text-select');
            clonePromotionSelect.classList.add('form-control');
            document.getElementById('change-promotion').appendChild(clonePromotionSelect);
            promotionSelected.addEventListener('change', event => {
                let currentUrl = window.location.href.split('/');
                if(currentUrl[currentUrl.length - 2] == 'student'){
                    currentUrl.pop();
                }
                currentUrl[currentUrl.length - 2] = event.currentTarget.value;
                location.href = currentUrl.join('/');
            });
            const students = Object.values(document.getElementsByClassName('edit-student'));
            students.forEach(link => {
                link.addEventListener('click', event => {
                    event.preventDefault();
                    const id = event.currentTarget.className.split(' ').pop().split('-').pop();
                    const studentRow = document.getElementById('student-' + id);
                    const studentLastName = studentRow.children[0].textContent;
                    const studentFirstName = studentRow.children[1].textContent;
                    const studentEmail = studentRow.children[2].textContent;
                    const form = document.getElementById('form-edit');
                    //Form Values
                    form.getElementsByTagName('input')[0].value = studentLastName;
                    form.getElementsByTagName('input')[1].value = studentFirstName;
                    form.getElementsByTagName('input')[2].value = studentEmail;
                    let formAction = form.action.split('/');
                    formAction[formAction.length - 2] = id;
                    form.action = formAction.join('/');
                });
            });
        </script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "student/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  505 => 182,  495 => 181,  482 => 17,  472 => 16,  459 => 13,  449 => 12,  439 => 181,  431 => 176,  425 => 173,  414 => 165,  410 => 164,  404 => 161,  400 => 160,  394 => 157,  390 => 156,  384 => 153,  372 => 144,  361 => 136,  355 => 133,  347 => 128,  343 => 127,  337 => 124,  333 => 123,  327 => 120,  323 => 119,  317 => 116,  306 => 108,  296 => 101,  290 => 98,  282 => 93,  278 => 92,  272 => 89,  260 => 80,  250 => 73,  244 => 69,  235 => 65,  226 => 61,  220 => 58,  216 => 57,  210 => 54,  205 => 52,  201 => 51,  197 => 50,  192 => 49,  187 => 48,  166 => 29,  151 => 26,  142 => 25,  138 => 24,  131 => 19,  129 => 16,  126 => 15,  123 => 12,  113 => 11,  101 => 8,  97 => 7,  92 => 6,  82 => 5,  63 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}User index{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"{{ asset('css/float-button-style.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('css/select-element-style.css') }}\" rel=\"stylesheet\">
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
            <h1>Gestion des étudiants</h1>
            <form style=\"text-align: center;\">
                <select id=\"promotion-selected\" class=\"text-select\">
                    {% for promotion in promotions %}
                        <option value=\"{{ promotion.id }}\" {% if promotionId == promotion.id %} selected {% endif %}>
                            M-{{ promotion.anneeMaster }} {{ promotion.parcour.name }} {{ promotion.datePromotion }} - {{ promotion.datePromotion + 1 }}
                        </option>
                    {% endfor %}
                </select>
            </form>
        </div>
        <section class=\"section-content\">
            <div class=\"row\">
                <table class=\"table\">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Email</th>
                            <th style=\"text-align: center\">
                                <button class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#AddStudentModal\" style=\"background-color: #00345f;\">
                                    <i class=\"bi bi-plus-square\"></i> Ajouter Etudiant
                                </button>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    {% for user in users %}
                        <tr  id=\"student-{{ user.user.id }}\">
                            <td>{{ user.user.lastName }}</td>
                            <td>{{ user.user.firstName }}</td>
                            <td>{{ user.user.email }}</td>
                            <td style=\"display: flex; align-items: center; justify-content: center\">
                                <a href=\"#\" class=\"link-text edit-student edit-student-{{ user.user.id }}\" data-bs-toggle=\"modal\" data-bs-target=\"#edit-student-modal\">
                                    <i class=\"bi bi-pencil-square\"></i>
                                </a>
                                <form method=\"post\" action=\"{{ path('app_student_delete', {'promotion': promotionId, 'student': user.user.id}) }}\" onsubmit=\"return confirm('La suppression d\\'un parcour engendra la suppression de toutes les promotions liées à ce parcour! Voulez vous vraiment supprimer ce parcour ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ user.user.id) }}\">
                                    <button class=\"link-text btn\" style=\"color: #dc2323\"><i class=\"bi bi-trash3-fill\"></i></button>
                                </form>
                                <a href=\"{{ path('admin_app_student_choice', {'promotion': promotionId, 'student': user.id}) }}\">Options</a>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"7\">no records found</td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </section>
        <form action=\"{{ path('app_student_send', { 'promotion': promotionId }) }}\" method=\"post\">
            <button class=\"btn btn-primary float-button\" style=\"left: calc(50% + 210px); min-width: fit-content;\">Envoyer <i class=\"bi bi-send\" style=\"margin-left: 5px;\"></i></button>
        </form>
        <button class=\"btn btn-primary float-button\" data-bs-toggle=\"modal\" data-bs-target=\"#importFromCsv\" >Importer les étudiants d'un fichier Excel</button>
        <div class=\"modal fade\" id=\"importFromCsv\" tabindex=\"-1\" aria-labelledby=\"importFromCsv\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">

                {{ form_start(formUpload, {'action': path('app_student_upload', { 'promotion': promotionId }), 'method': 'POST', 'attr': {'id': 'form-upload'}}) }}

                <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h1 class=\"modal-title fs-5\" id=\"exampleModalLabel\"> <i class=\"bi bi-file-plus\"></i>Importer</h1>
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                        </div>
                        <div class=\"modal-body row\">
                            <div class=\"my-custom-class-for-errors\">
                                {{ form_errors(formUpload) }}
                            </div>
                            <div class=\"col-12\">
                                {{ form_label(formUpload.submitFile,'Fichier Excel à importer',  {'label_attr': {'class': 'col-form-label'}}) }}
                                {{ form_widget(formUpload.submitFile, {'attr': {'class': 'form-control'}}) }}
                            </div>
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                            <button class=\"btn btn-primary\">{{ button_label|default('Ajouter') }}</button>
                        </div>
                    </div>
                {{ form_end(formUpload) }}
            </div>
        </div>
        <!-- Modal Add -->
        <div class=\"modal fade\" id=\"AddStudentModal\" tabindex=\"-1\" aria-labelledby=\"AddStudentModal\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">

                {{ form_start(form) }}
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h1 class=\"modal-title fs-5\" id=\"exampleModalLabel\"> <i class=\"bi bi-file-plus\"></i> Ajouter étudiant</h1>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body row\">
                        <div class=\"my-custom-class-for-errors\">
                            {{ form_errors(form) }}
                        </div>
                        <div class=\"col-12\">
                            {{ form_label(form.lastName,'Nom',  {'label_attr': {'class': 'col-form-label'}}) }}
                            {{ form_widget(form.lastName, {'attr': {'class': 'form-control'}}) }}
                        </div>
                        <div class=\"col-12\">
                            {{ form_label(form.firstName,'Prénom',  {'label_attr': {'class': 'col-form-label'}}) }}
                            {{ form_widget(form.firstName, {'attr': {'class': 'form-control'}}) }}
                        </div>
                        <div class=\"col-12\">
                            {{ form_label(form.email,'Email',  {'label_attr': {'class': 'col-form-label'}}) }}
                            {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}
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
        <!-- End Modal Add -->
        <!-- Modal Edit -->
        <div class=\"modal fade\" id=\"edit-student-modal\" tabindex=\"-1\" aria-labelledby=\"edit-student-modal\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">

                {{ form_start(formEdit, {'action': path('app_student_edit', { 'promotion': promotionId, 'student': 0 }), 'method': 'POST', 'attr': {'id': 'form-edit'}}) }}
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h1 class=\"modal-title fs-5\" id=\"exampleModalLabel\"> <i class=\"bi bi-pen\"></i> Modifier un étudiant</h1>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body row\">

                        <div class=\"my-custom-class-for-errors\">
                            {{ form_errors(formEdit) }}
                        </div>
                        <div class=\"col-12\">
                            {{ form_label(formEdit.lastName,'Nom',  {'label_attr': {'class': 'col-form-label'}}) }}
                            {{ form_widget(formEdit.lastName, {'attr': {'class': 'form-control'}}) }}
                        </div>
                        <div class=\"col-12\">
                            {{ form_label(formEdit.firstName,'Prénom',  {'label_attr': {'class': 'col-form-label'}}) }}
                            {{ form_widget(formEdit.firstName, {'attr': {'class': 'form-control'}}) }}
                        </div>
                        <div class=\"col-12\">
                            {{ form_label(formEdit.email,'Email',  {'label_attr': {'class': 'col-form-label'}}) }}
                            {{ form_widget(formEdit.email, {'attr': {'class': 'form-control'}}) }}
                        </div>
                        <div class=\"col-12\" id=\"change-promotion\">
                            <label class=\"col-form-label required\" for=\"change-promotion-select\">Promotion</label>
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
        <!-- End Modal Edit -->
    </main>
    {% block script %}
        {{ parent() }}
        <script>
            const promotionSelected = document.getElementById('promotion-selected');
            var clonePromotionSelect = promotionSelected.cloneNode(true);
            clonePromotionSelect.id = 'change-promotion-select';
            clonePromotionSelect.name = 'change-promotion-select';
            clonePromotionSelect.classList.remove('text-select');
            clonePromotionSelect.classList.add('form-control');
            document.getElementById('change-promotion').appendChild(clonePromotionSelect);
            promotionSelected.addEventListener('change', event => {
                let currentUrl = window.location.href.split('/');
                if(currentUrl[currentUrl.length - 2] == 'student'){
                    currentUrl.pop();
                }
                currentUrl[currentUrl.length - 2] = event.currentTarget.value;
                location.href = currentUrl.join('/');
            });
            const students = Object.values(document.getElementsByClassName('edit-student'));
            students.forEach(link => {
                link.addEventListener('click', event => {
                    event.preventDefault();
                    const id = event.currentTarget.className.split(' ').pop().split('-').pop();
                    const studentRow = document.getElementById('student-' + id);
                    const studentLastName = studentRow.children[0].textContent;
                    const studentFirstName = studentRow.children[1].textContent;
                    const studentEmail = studentRow.children[2].textContent;
                    const form = document.getElementById('form-edit');
                    //Form Values
                    form.getElementsByTagName('input')[0].value = studentLastName;
                    form.getElementsByTagName('input')[1].value = studentFirstName;
                    form.getElementsByTagName('input')[2].value = studentEmail;
                    let formAction = form.action.split('/');
                    formAction[formAction.length - 2] = id;
                    form.action = formAction.join('/');
                });
            });
        </script>
    {% endblock %}
{% endblock %}
", "student/index.html.twig", "/Users/etudiant/Desktop/prjthematique/choix-d-options/choix_options_project/templates/student/index.html.twig");
    }
}
