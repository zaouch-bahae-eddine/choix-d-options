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

/* responsible/index.html.twig */
class __TwigTemplate_71ddb28fb2ce92b51d6b4a0f44f98bc4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "responsible/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "responsible/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "responsible/index.html.twig", 1);
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

        echo "Responsable";
        
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
            <h1>Gestion des responsables</h1>
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
                            Actions
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 37, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 38
            echo "                        <tr  id=\"responsible-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 38), "html", null, true);
            echo "\">
                            <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastName", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                            <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstName", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                            <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                            <td style=\"display: flex; align-items: center; justify-content: center\">
                                <a href=\"#\" class=\"link-text edit-responsible edit-responsible-";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 43), "html", null, true);
            echo "\" data-bs-toggle=\"modal\" data-bs-target=\"#edit-responsible-modal\">
                                    <i class=\"bi bi-pencil-square\"></i>
                                </a>
                                <form method=\"post\" action=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_responsible_delete", ["user" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('êtes vous sûr de vouloire supprimer ce responsable');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 47))), "html", null, true);
            echo "\">
                                    <button class=\"link-text btn\" style=\"color: #dc2323\"><i class=\"bi bi-trash3-fill\"></i></button>
                                </form>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 53
            echo "                        <tr>
                            <td colspan=\"7\">no records found</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                    </tbody>
                </table>
            </div>
        </section>
        <form action=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_responsible_send");
        echo "\" method=\"post\">
            <button class=\"btn btn-primary float-button\" style=\"left: calc(50% + 210px); min-width: fit-content;\">Envoyer <i class=\"bi bi-send\" style=\"margin-left: 5px;\"></i></button>
        </form>
        <button class=\"btn btn-primary float-button\" data-bs-toggle=\"modal\" data-bs-target=\"#addResponsable\" >Ajouter Responsable</button>

        <!-- Modal Add -->
        <div class=\"modal fade\" id=\"addResponsable\" tabindex=\"-1\" aria-labelledby=\"addResponsable\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">

                ";
        // line 70
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), 'form_start');
        echo "
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h1 class=\"modal-title fs-5\" id=\"exampleModalLabel\"> <i class=\"bi bi-file-plus\"></i> Ajouter responsable</h1>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body row\">
                        <div class=\"my-custom-class-for-errors\">
                            ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), 'errors');
        echo "
                        </div>
                        <div class=\"col-12\">
                            ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "lastName", [], "any", false, false, false, 81), 'label', ["label_attr" => ["class" => "col-form-label"], "label" => "Nom"]);
        echo "
                            ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "lastName", [], "any", false, false, false, 82), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                        <div class=\"col-12\">
                            ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "firstName", [], "any", false, false, false, 85), 'label', ["label_attr" => ["class" => "col-form-label"], "label" => "Prénom"]);
        echo "
                            ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "firstName", [], "any", false, false, false, 86), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                        <div class=\"col-12\">
                            ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "email", [], "any", false, false, false, 89), 'label', ["label_attr" => ["class" => "col-form-label"], "label" => "Email"]);
        echo "
                            ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "email", [], "any", false, false, false, 90), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                        <button class=\"btn btn-primary\">";
        // line 95
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 95, $this->source); })()), "Ajouter")) : ("Ajouter")), "html", null, true);
        echo "</button>
                    </div>
                </div>
                ";
        // line 98
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>
        <!-- End Modal Add -->
        <!-- Modal Edit -->
        <div class=\"modal fade\" id=\"edit-responsible-modal\" tabindex=\"-1\" aria-labelledby=\"edit-responsible-modal\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">

                ";
        // line 106
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formEdit"]) || array_key_exists("formEdit", $context) ? $context["formEdit"] : (function () { throw new RuntimeError('Variable "formEdit" does not exist.', 106, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_responsible_edit", ["user" => 0]), "method" => "POST", "attr" => ["id" => "form-edit"]]);
        echo "
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h1 class=\"modal-title fs-5\" id=\"exampleModalLabel\"> <i class=\"bi bi-pen\"></i> Modifier responsable</h1>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body row\">

                        <div class=\"my-custom-class-for-errors\">
                            ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formEdit"]) || array_key_exists("formEdit", $context) ? $context["formEdit"] : (function () { throw new RuntimeError('Variable "formEdit" does not exist.', 115, $this->source); })()), 'errors');
        echo "
                        </div>
                        <div class=\"col-12\">
                            ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEdit"]) || array_key_exists("formEdit", $context) ? $context["formEdit"] : (function () { throw new RuntimeError('Variable "formEdit" does not exist.', 118, $this->source); })()), "lastName", [], "any", false, false, false, 118), 'label', ["label_attr" => ["class" => "col-form-label"], "label" => "Nom"]);
        echo "
                            ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEdit"]) || array_key_exists("formEdit", $context) ? $context["formEdit"] : (function () { throw new RuntimeError('Variable "formEdit" does not exist.', 119, $this->source); })()), "lastName", [], "any", false, false, false, 119), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                        <div class=\"col-12\">
                            ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEdit"]) || array_key_exists("formEdit", $context) ? $context["formEdit"] : (function () { throw new RuntimeError('Variable "formEdit" does not exist.', 122, $this->source); })()), "firstName", [], "any", false, false, false, 122), 'label', ["label_attr" => ["class" => "col-form-label"], "label" => "Prénom"]);
        echo "
                            ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEdit"]) || array_key_exists("formEdit", $context) ? $context["formEdit"] : (function () { throw new RuntimeError('Variable "formEdit" does not exist.', 123, $this->source); })()), "firstName", [], "any", false, false, false, 123), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                        <div class=\"col-12\">
                            ";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEdit"]) || array_key_exists("formEdit", $context) ? $context["formEdit"] : (function () { throw new RuntimeError('Variable "formEdit" does not exist.', 126, $this->source); })()), "email", [], "any", false, false, false, 126), 'label', ["label_attr" => ["class" => "col-form-label"], "label" => "Email"]);
        echo "
                            ";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEdit"]) || array_key_exists("formEdit", $context) ? $context["formEdit"] : (function () { throw new RuntimeError('Variable "formEdit" does not exist.', 127, $this->source); })()), "email", [], "any", false, false, false, 127), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                        <button class=\"btn btn-primary\">";
        // line 132
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 132, $this->source); })()), "Modifier")) : ("Modifier")), "html", null, true);
        echo "</button>
                    </div>
                </div>
                ";
        // line 135
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formEdit"]) || array_key_exists("formEdit", $context) ? $context["formEdit"] : (function () { throw new RuntimeError('Variable "formEdit" does not exist.', 135, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>
        <!-- End Modal Edit -->
    </main>
    ";
        // line 140
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

    // line 140
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 141
        echo "        ";
        $this->displayParentBlock("script", $context, $blocks);
        echo "
        <script>

            const responsibles = Object.values(document.getElementsByClassName('edit-responsible'));
            responsibles.forEach(link => {
                link.addEventListener('click', event => {
                    event.preventDefault();
                    const id = event.currentTarget.className.split(' ').pop().split('-').pop();
                    const responsibleRow = document.getElementById('responsible-' + id);
                    const responsibleLastName = responsibleRow.children[0].textContent;
                    const responsibleFirstName = responsibleRow.children[1].textContent;
                    const responsibleEmail = responsibleRow.children[2].textContent;
                    const form = document.getElementById('form-edit');
                    //Form Values
                    form.getElementsByTagName('input')[0].value = responsibleLastName;
                    form.getElementsByTagName('input')[1].value = responsibleFirstName;
                    form.getElementsByTagName('input')[2].value = responsibleEmail;
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
        return "responsible/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  418 => 141,  408 => 140,  395 => 17,  385 => 16,  372 => 13,  362 => 12,  352 => 140,  344 => 135,  338 => 132,  330 => 127,  326 => 126,  320 => 123,  316 => 122,  310 => 119,  306 => 118,  300 => 115,  288 => 106,  277 => 98,  271 => 95,  263 => 90,  259 => 89,  253 => 86,  249 => 85,  243 => 82,  239 => 81,  233 => 78,  222 => 70,  210 => 61,  204 => 57,  195 => 53,  184 => 47,  180 => 46,  174 => 43,  169 => 41,  165 => 40,  161 => 39,  156 => 38,  151 => 37,  131 => 19,  129 => 16,  126 => 15,  123 => 12,  113 => 11,  101 => 8,  97 => 7,  92 => 6,  82 => 5,  63 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Responsable{% endblock %}

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
            <h1>Gestion des responsables</h1>
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
                            Actions
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for user in users %}
                        <tr  id=\"responsible-{{ user.id }}\">
                            <td>{{ user.lastName }}</td>
                            <td>{{ user.firstName }}</td>
                            <td>{{ user.email }}</td>
                            <td style=\"display: flex; align-items: center; justify-content: center\">
                                <a href=\"#\" class=\"link-text edit-responsible edit-responsible-{{ user.id }}\" data-bs-toggle=\"modal\" data-bs-target=\"#edit-responsible-modal\">
                                    <i class=\"bi bi-pencil-square\"></i>
                                </a>
                                <form method=\"post\" action=\"{{ path('app_responsible_delete', {'user': user.id}) }}\" onsubmit=\"return confirm('êtes vous sûr de vouloire supprimer ce responsable');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ user.id) }}\">
                                    <button class=\"link-text btn\" style=\"color: #dc2323\"><i class=\"bi bi-trash3-fill\"></i></button>
                                </form>
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
        <form action=\"{{ path('app_responsible_send') }}\" method=\"post\">
            <button class=\"btn btn-primary float-button\" style=\"left: calc(50% + 210px); min-width: fit-content;\">Envoyer <i class=\"bi bi-send\" style=\"margin-left: 5px;\"></i></button>
        </form>
        <button class=\"btn btn-primary float-button\" data-bs-toggle=\"modal\" data-bs-target=\"#addResponsable\" >Ajouter Responsable</button>

        <!-- Modal Add -->
        <div class=\"modal fade\" id=\"addResponsable\" tabindex=\"-1\" aria-labelledby=\"addResponsable\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">

                {{ form_start(form) }}
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h1 class=\"modal-title fs-5\" id=\"exampleModalLabel\"> <i class=\"bi bi-file-plus\"></i> Ajouter responsable</h1>
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
        <div class=\"modal fade\" id=\"edit-responsible-modal\" tabindex=\"-1\" aria-labelledby=\"edit-responsible-modal\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">

                {{ form_start(formEdit, {'action': path('app_responsible_edit', { 'user': 0 }), 'method': 'POST', 'attr': {'id': 'form-edit'}}) }}
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h1 class=\"modal-title fs-5\" id=\"exampleModalLabel\"> <i class=\"bi bi-pen\"></i> Modifier responsable</h1>
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

            const responsibles = Object.values(document.getElementsByClassName('edit-responsible'));
            responsibles.forEach(link => {
                link.addEventListener('click', event => {
                    event.preventDefault();
                    const id = event.currentTarget.className.split(' ').pop().split('-').pop();
                    const responsibleRow = document.getElementById('responsible-' + id);
                    const responsibleLastName = responsibleRow.children[0].textContent;
                    const responsibleFirstName = responsibleRow.children[1].textContent;
                    const responsibleEmail = responsibleRow.children[2].textContent;
                    const form = document.getElementById('form-edit');
                    //Form Values
                    form.getElementsByTagName('input')[0].value = responsibleLastName;
                    form.getElementsByTagName('input')[1].value = responsibleFirstName;
                    form.getElementsByTagName('input')[2].value = responsibleEmail;
                    let formAction = form.action.split('/');
                    formAction[formAction.length - 2] = id;
                    form.action = formAction.join('/');
                });
            });
        </script>
    {% endblock %}
{% endblock %}
", "responsible/index.html.twig", "/Users/etudiant/Desktop/prjthematique/choix-d-options/choix_options_project/templates/responsible/index.html.twig");
    }
}
