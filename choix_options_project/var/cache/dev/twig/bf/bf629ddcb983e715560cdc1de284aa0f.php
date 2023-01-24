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

/* parcour/index.html.twig */
class __TwigTemplate_7f302704c08bf2961c6fb443e8716f8d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parcour/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parcour/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "parcour/index.html.twig", 1);
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

        echo "Parcours";
        
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
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $this->displayBlock('header', $context, $blocks);
        // line 14
        echo "
    ";
        // line 15
        $this->displayBlock('sidebar', $context, $blocks);
        // line 18
        echo "    <main id=\"main\" class=\"main\" style=\"position: relative\">
        <div class=\"pagetitle\">
            <h1>Gestion des parcours</h1>
        </div>

        <section class=\"section-content\">
            <div class=\"row\">

            <table class=\"table\">
                <thead>
                    <tr>
                        <th>Parcour</th>
                        <th>Année</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["parcours"]) || array_key_exists("parcours", $context) ? $context["parcours"] : (function () { throw new RuntimeError('Variable "parcours" does not exist.', 35, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["parcour"]) {
            // line 36
            echo "                    <tr id=\"parcour-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parcour"], "id", [], "any", false, false, false, 36), "html", null, true);
            echo "\">
                        <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parcour"], "name", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["parcour"], "year", [], "any", false, false, false, 38), "name", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                        <td style=\"display: flex; align-items: center;\">
                            <a href=\"#\" class=\"link-text edit-parcour edit-parcour-";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parcour"], "id", [], "any", false, false, false, 40), "html", null, true);
            echo "\" data-bs-toggle=\"modal\" data-bs-target=\"#edit-parcour-modal\">
                                <i class=\"bi bi-pencil-square\"></i>
                            </a>
                            <form method=\"post\" action=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_parcour_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["parcour"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('La suppression d\\'un parcour engendra la suppression de toutes les promotions liées à ce parcour! Voulez vous vraiment supprimer ce parcour ?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["parcour"], "id", [], "any", false, false, false, 44))), "html", null, true);
            echo "\">
                                <button class=\"link-text btn\" style=\"color: #dc2323\"><i class=\"bi bi-trash3-fill\"></i></button>
                            </form>
                            <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bloc_index", ["id" => twig_get_attribute($this->env, $this->source, $context["parcour"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\">Bloc des compétence</a>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 51
            echo "                    <tr>
                        <td colspan=\"3\">no records found</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parcour'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                </tbody>
            </table>
            </div>
        </section>
        <button class=\"btn btn-primary float-button\" data-bs-toggle=\"modal\" data-bs-target=\"#staticBackdrop\" >Ajouter Parcour</button>
        <div class=\"modal fade\" id=\"staticBackdrop\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">

                ";
        // line 63
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), 'form_start');
        echo "
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h1 class=\"modal-title fs-5\" id=\"exampleModalLabel\"> <i class=\"bi bi-file-plus\"></i> Ajouter un parcour</h1>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body row\">
                        <div class=\"my-custom-class-for-errors\">
                            ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), 'errors');
        echo "
                        </div>
                        <div class=\"col-12\">
                            ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "name", [], "any", false, false, false, 74), 'label', ["label_attr" => ["class" => "col-form-label"], "label" => "Parcour"]);
        echo "
                            ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "name", [], "any", false, false, false, 75), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                        <div class=\"col-12\">
                            ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "year", [], "any", false, false, false, 78), 'label', ["label_attr" => ["class" => "col-form-label"], "label" => "Année du master"]);
        echo "
                            ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "year", [], "any", false, false, false, 79), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                        <button class=\"btn btn-primary\">";
        // line 84
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 84, $this->source); })()), "Ajouter")) : ("Ajouter")), "html", null, true);
        echo "</button>
                    </div>
                </div>
                ";
        // line 87
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>
<!-- Madal Edit -->
        <div class=\"modal fade\" id=\"edit-parcour-modal\" tabindex=\"-1\" aria-labelledby=\"ModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">

                ";
        // line 94
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formEdit"]) || array_key_exists("formEdit", $context) ? $context["formEdit"] : (function () { throw new RuntimeError('Variable "formEdit" does not exist.', 94, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_parcour_edit", ["id" => 0]), "method" => "POST", "attr" => ["id" => "form-edit"]]);
        echo "
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h1 class=\"modal-title fs-5\" id=\"exampleModalLabel\"> <i class=\"bi bi-pen\"></i> Modifier un parcour</h1>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body row\">
                        <div class=\"my-custom-class-for-errors\">
                            ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formEdit"]) || array_key_exists("formEdit", $context) ? $context["formEdit"] : (function () { throw new RuntimeError('Variable "formEdit" does not exist.', 102, $this->source); })()), 'errors');
        echo "
                        </div>
                        <div class=\"col-12\">
                            ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEdit"]) || array_key_exists("formEdit", $context) ? $context["formEdit"] : (function () { throw new RuntimeError('Variable "formEdit" does not exist.', 105, $this->source); })()), "name", [], "any", false, false, false, 105), 'label', ["label_attr" => ["class" => "col-form-label"], "label" => "Parcour"]);
        echo "
                            ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEdit"]) || array_key_exists("formEdit", $context) ? $context["formEdit"] : (function () { throw new RuntimeError('Variable "formEdit" does not exist.', 106, $this->source); })()), "name", [], "any", false, false, false, 106), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                        <div class=\"col-12\">
                            ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEdit"]) || array_key_exists("formEdit", $context) ? $context["formEdit"] : (function () { throw new RuntimeError('Variable "formEdit" does not exist.', 109, $this->source); })()), "year", [], "any", false, false, false, 109), 'label', ["label_attr" => ["class" => "col-form-label"], "label" => "Année du master"]);
        echo "
                            ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEdit"]) || array_key_exists("formEdit", $context) ? $context["formEdit"] : (function () { throw new RuntimeError('Variable "formEdit" does not exist.', 110, $this->source); })()), "year", [], "any", false, false, false, 110), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                        <button class=\"btn btn-primary\">";
        // line 115
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 115, $this->source); })()), "Modifier")) : ("Modifier")), "html", null, true);
        echo "</button>
                    </div>
                </div>
                ";
        // line 118
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formEdit"]) || array_key_exists("formEdit", $context) ? $context["formEdit"] : (function () { throw new RuntimeError('Variable "formEdit" does not exist.', 118, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>

<!-- End Madal Edit -->
    </main>
    ";
        // line 124
        $this->displayBlock('script', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 11
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 12
        echo "        ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 15
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 16
        echo "        ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 124
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 125
        echo "        ";
        $this->displayParentBlock("script", $context, $blocks);
        echo "
        <script>
            const parcours = Object.values(document.getElementsByClassName('edit-parcour'));
            parcours.forEach(link => {
                link.addEventListener('click', event => {
                    event.preventDefault();
                    const id = event.currentTarget.className.split(' ').pop().split('-').pop();
                    const parcourRow = document.getElementById('parcour-' + id);
                    const parcourName = parcourRow.children[0].textContent;
                    const form = document.getElementById('form-edit');
                    //Form Values
                    form.getElementsByTagName('input')[0].value = parcourName;
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
        return "parcour/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  384 => 125,  374 => 124,  361 => 16,  351 => 15,  338 => 12,  328 => 11,  318 => 124,  309 => 118,  303 => 115,  295 => 110,  291 => 109,  285 => 106,  281 => 105,  275 => 102,  264 => 94,  254 => 87,  248 => 84,  240 => 79,  236 => 78,  230 => 75,  226 => 74,  220 => 71,  209 => 63,  199 => 55,  190 => 51,  181 => 47,  175 => 44,  171 => 43,  165 => 40,  160 => 38,  156 => 37,  151 => 36,  146 => 35,  127 => 18,  125 => 15,  122 => 14,  119 => 11,  109 => 10,  97 => 7,  92 => 6,  82 => 5,  63 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Parcours{% endblock %}

{% block stylesheets %}
    {{ parent() }}
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
            <h1>Gestion des parcours</h1>
        </div>

        <section class=\"section-content\">
            <div class=\"row\">

            <table class=\"table\">
                <thead>
                    <tr>
                        <th>Parcour</th>
                        <th>Année</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                {% for parcour in parcours %}
                    <tr id=\"parcour-{{ parcour.id }}\">
                        <td>{{ parcour.name }}</td>
                        <td>{{ parcour.year.name }}</td>
                        <td style=\"display: flex; align-items: center;\">
                            <a href=\"#\" class=\"link-text edit-parcour edit-parcour-{{ parcour.id }}\" data-bs-toggle=\"modal\" data-bs-target=\"#edit-parcour-modal\">
                                <i class=\"bi bi-pencil-square\"></i>
                            </a>
                            <form method=\"post\" action=\"{{ path('app_parcour_delete', {'id': parcour.id}) }}\" onsubmit=\"return confirm('La suppression d\\'un parcour engendra la suppression de toutes les promotions liées à ce parcour! Voulez vous vraiment supprimer ce parcour ?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ parcour.id) }}\">
                                <button class=\"link-text btn\" style=\"color: #dc2323\"><i class=\"bi bi-trash3-fill\"></i></button>
                            </form>
                            <a href=\"{{ path('app_bloc_index', {'id': parcour.id}) }}\">Bloc des compétence</a>
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
        </section>
        <button class=\"btn btn-primary float-button\" data-bs-toggle=\"modal\" data-bs-target=\"#staticBackdrop\" >Ajouter Parcour</button>
        <div class=\"modal fade\" id=\"staticBackdrop\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">

                {{ form_start(form) }}
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h1 class=\"modal-title fs-5\" id=\"exampleModalLabel\"> <i class=\"bi bi-file-plus\"></i> Ajouter un parcour</h1>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body row\">
                        <div class=\"my-custom-class-for-errors\">
                            {{ form_errors(form) }}
                        </div>
                        <div class=\"col-12\">
                            {{ form_label(form.name,'Parcour',  {'label_attr': {'class': 'col-form-label'}}) }}
                            {{ form_widget(form.name, {'attr': {'class': 'form-control'}}) }}
                        </div>
                        <div class=\"col-12\">
                            {{ form_label(form.year,'Année du master',  {'label_attr': {'class': 'col-form-label'}}) }}
                            {{ form_widget(form.year, {'attr': {'class': 'form-control'}}) }}
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
<!-- Madal Edit -->
        <div class=\"modal fade\" id=\"edit-parcour-modal\" tabindex=\"-1\" aria-labelledby=\"ModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">

                {{ form_start(formEdit, {'action': path('app_parcour_edit', { 'id': 0 }), 'method': 'POST', 'attr': {'id': 'form-edit'}}) }}
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h1 class=\"modal-title fs-5\" id=\"exampleModalLabel\"> <i class=\"bi bi-pen\"></i> Modifier un parcour</h1>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body row\">
                        <div class=\"my-custom-class-for-errors\">
                            {{ form_errors(formEdit) }}
                        </div>
                        <div class=\"col-12\">
                            {{ form_label(formEdit.name,'Parcour',  {'label_attr': {'class': 'col-form-label'}}) }}
                            {{ form_widget(formEdit.name, {'attr': {'class': 'form-control'}}) }}
                        </div>
                        <div class=\"col-12\">
                            {{ form_label(formEdit.year,'Année du master',  {'label_attr': {'class': 'col-form-label'}}) }}
                            {{ form_widget(formEdit.year, {'attr': {'class': 'form-control'}}) }}
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

<!-- End Madal Edit -->
    </main>
    {% block script %}
        {{ parent() }}
        <script>
            const parcours = Object.values(document.getElementsByClassName('edit-parcour'));
            parcours.forEach(link => {
                link.addEventListener('click', event => {
                    event.preventDefault();
                    const id = event.currentTarget.className.split(' ').pop().split('-').pop();
                    const parcourRow = document.getElementById('parcour-' + id);
                    const parcourName = parcourRow.children[0].textContent;
                    const form = document.getElementById('form-edit');
                    //Form Values
                    form.getElementsByTagName('input')[0].value = parcourName;
                    let formAction = form.action.split('/');
                    formAction[formAction.length - 2] = id;
                    form.action = formAction.join('/');
                });
            });
        </script>
    {% endblock %}
{% endblock %}
", "parcour/index.html.twig", "/Users/etudiant/Desktop/prjthematique/choix-d-options/choix_options_project/templates/parcour/index.html.twig");
    }
}
