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

/* bloc/index.html.twig */
class __TwigTemplate_75e727ae8a7501e9b1cc69e8e681c3b3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bloc/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bloc/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "bloc/index.html.twig", 1);
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

        echo "Blocs";
        
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
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/table-subcontent-style.css"), "html", null, true);
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
            <h1>Gestion des blocs et UEs</h1>
            <form style=\"text-align: center;\">
                <select id=\"parcour-selected\" class=\"text-select\">
                    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["parcours"]) || array_key_exists("parcours", $context) ? $context["parcours"] : (function () { throw new RuntimeError('Variable "parcours" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["parcour"]) {
            // line 26
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parcour"], "id", [], "any", false, false, false, 26), "html", null, true);
            echo "\" ";
            if (((isset($context["selectedParcourId"]) || array_key_exists("selectedParcourId", $context) ? $context["selectedParcourId"] : (function () { throw new RuntimeError('Variable "selectedParcourId" does not exist.', 26, $this->source); })()) == twig_get_attribute($this->env, $this->source, $context["parcour"], "id", [], "any", false, false, false, 26))) {
                echo " selected ";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parcour"], "name", [], "any", false, false, false, 26), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parcour'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                </select>
            </form>
        </div>

        <section class=\"section-content\">
            <div class=\"row\">
                ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["skillBlocs"]) || array_key_exists("skillBlocs", $context) ? $context["skillBlocs"] : (function () { throw new RuntimeError('Variable "skillBlocs" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["skillBloc"]) {
            // line 35
            echo "                    <div class=\"accordion\">
                        <div  class=\"accordion-item\">
                            <div class=\"accordion-header\" id=\"bloc-";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["skillBloc"], "id", [], "any", false, false, false, 37), "html", null, true);
            echo "\">
                                <div>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["skillBloc"], "name", [], "any", false, false, false, 38), "html", null, true);
            echo "</div>
                                <div style=\"display: flex; align-items: center; max-width: 210px;\">
                                    <button class=\"btn btn-primary small-btn-darck btn-ue-option-bloc-js\" data-bs-toggle=\"modal\" data-bs-target=\"#addUEModal\">
                                        <i class=\"bi bi-plus-square\"></i>
                                    </button>
                                    <a href=\"#\" class=\"edit-bloc edit-bloc-";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["skillBloc"], "id", [], "any", false, false, false, 43), "html", null, true);
            echo "\" data-bs-toggle=\"modal\" data-bs-target=\"#edit-bloc-modal\">
                                        <i class=\"bi bi-pencil-square\"></i>
                                    </a>
                                    <form method=\"post\" action=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bloc_delete", ["id" => (isset($context["selectedParcourId"]) || array_key_exists("selectedParcourId", $context) ? $context["selectedParcourId"] : (function () { throw new RuntimeError('Variable "selectedParcourId" does not exist.', 46, $this->source); })()), "bloc" => twig_get_attribute($this->env, $this->source, $context["skillBloc"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["skillBloc"], "id", [], "any", false, false, false, 47))), "html", null, true);
            echo "\">
                                        <button class=\"link-text btn\" style=\"color: #dc2323\"><i class=\"bi bi-trash3-fill\"></i></button>
                                    </form>
                                    <button class=\"accordion-button";
            // line 50
            if (((isset($context["selectedBloc"]) || array_key_exists("selectedBloc", $context) ? $context["selectedBloc"] : (function () { throw new RuntimeError('Variable "selectedBloc" does not exist.', 50, $this->source); })()) != twig_get_attribute($this->env, $this->source, $context["skillBloc"], "id", [], "any", false, false, false, 50))) {
                echo " collapsed ";
            }
            echo "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseOne-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["skillBloc"], "id", [], "any", false, false, false, 50), "html", null, true);
            echo "\" aria-expanded=\"";
            if (((isset($context["selectedBloc"]) || array_key_exists("selectedBloc", $context) ? $context["selectedBloc"] : (function () { throw new RuntimeError('Variable "selectedBloc" does not exist.', 50, $this->source); })()) == twig_get_attribute($this->env, $this->source, $context["skillBloc"], "id", [], "any", false, false, false, 50))) {
                echo "true";
            } else {
                echo "false";
            }
            echo "\" aria-controls=\"collapseOne\">
                                    </button>
                                </div>
                            </div>
                            <div id=\"collapseOne-";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["skillBloc"], "id", [], "any", false, false, false, 54), "html", null, true);
            echo "\" class=\"accordion-collapse collapse ";
            if (((isset($context["selectedBloc"]) || array_key_exists("selectedBloc", $context) ? $context["selectedBloc"] : (function () { throw new RuntimeError('Variable "selectedBloc" does not exist.', 54, $this->source); })()) == twig_get_attribute($this->env, $this->source, $context["skillBloc"], "id", [], "any", false, false, false, 54))) {
                echo " show ";
            }
            echo "\" aria-labelledby=\"bloc-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["skillBloc"], "id", [], "any", false, false, false, 54), "html", null, true);
            echo "\" data-bs-parent=\"#accordionExample\">
                                <div class=\"accordion-body\">
                                    <table class=\"table\">
                                        <thead>
                                            <tr>
                                                <th>Intitulé</th>
                                                <th>Status</th>
                                                <th>Capacité du groupe</th>
                                                <th>actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        ";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["skillBloc"], "ues", [], "any", false, false, false, 66));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["ue"]) {
                // line 67
                echo "                                            <tr>
                                                <td>";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ue"], "name", [], "any", false, false, false, 68), "html", null, true);
                echo "</td>
                                                <td>";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ue"], "status", [], "any", false, false, false, 69), "html", null, true);
                echo "</td>
                                                <td>";
                // line 70
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ue"], "capacityGroup", [], "any", false, false, false, 70), "html", null, true);
                echo "</td>
                                                <td>
                                                    <a href=\"\">show</a>
                                                    <a href=\"\">edit</a>
                                                </td>
                                            </tr>
                                        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 77
                echo "                                            <tr>
                                                <td colspan=\"6\">no records found</td>
                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skillBloc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "            </div>
        </section>

        <!-- Madal add Bloc de compétence -->
        <button class=\"btn btn-primary float-button\" data-bs-toggle=\"modal\" data-bs-target=\"#staticBackdrop\" >Ajouter le bloc de compétence</button>
        <div class=\"modal fade\" id=\"staticBackdrop\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">

                ";
        // line 96
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formSkillBloc"]) || array_key_exists("formSkillBloc", $context) ? $context["formSkillBloc"] : (function () { throw new RuntimeError('Variable "formSkillBloc" does not exist.', 96, $this->source); })()), 'form_start');
        echo "
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h1 class=\"modal-title fs-5\" id=\"exampleModalLabel\"> <i class=\"bi bi-file-plus\"></i> Ajouter un bloc de compétence</h1>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body row\">
                        <div class=\"my-custom-class-for-errors\">
                            ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formSkillBloc"]) || array_key_exists("formSkillBloc", $context) ? $context["formSkillBloc"] : (function () { throw new RuntimeError('Variable "formSkillBloc" does not exist.', 104, $this->source); })()), 'errors');
        echo "
                        </div>
                        <div class=\"col-12\">
                            ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formSkillBloc"]) || array_key_exists("formSkillBloc", $context) ? $context["formSkillBloc"] : (function () { throw new RuntimeError('Variable "formSkillBloc" does not exist.', 107, $this->source); })()), "name", [], "any", false, false, false, 107), 'label', ["label_attr" => ["class" => "col-form-label"], "label" => "Intitulé"]);
        echo "
                            ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formSkillBloc"]) || array_key_exists("formSkillBloc", $context) ? $context["formSkillBloc"] : (function () { throw new RuntimeError('Variable "formSkillBloc" does not exist.', 108, $this->source); })()), "name", [], "any", false, false, false, 108), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                        <button class=\"btn btn-primary\">";
        // line 113
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 113, $this->source); })()), "Ajouter")) : ("Ajouter")), "html", null, true);
        echo "</button>
                    </div>
                </div>
                ";
        // line 116
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formSkillBloc"]) || array_key_exists("formSkillBloc", $context) ? $context["formSkillBloc"] : (function () { throw new RuntimeError('Variable "formSkillBloc" does not exist.', 116, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>

        <!-- Madal Edit -->
        <div class=\"modal fade\" id=\"edit-bloc-modal\" tabindex=\"-1\" aria-labelledby=\"ModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">

                ";
        // line 124
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formEditSkillBloc"]) || array_key_exists("formEditSkillBloc", $context) ? $context["formEditSkillBloc"] : (function () { throw new RuntimeError('Variable "formEditSkillBloc" does not exist.', 124, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bloc_edit", ["id" => (isset($context["selectedParcourId"]) || array_key_exists("selectedParcourId", $context) ? $context["selectedParcourId"] : (function () { throw new RuntimeError('Variable "selectedParcourId" does not exist.', 124, $this->source); })()), "bloc" => 0]), "method" => "POST", "attr" => ["id" => "form-edit"]]);
        echo "

                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h1 class=\"modal-title fs-5\" id=\"exampleModalLabel\"> <i class=\"bi bi-pen\"></i> Modifier le bloc de compétence</h1>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body row\">
                        <div class=\"my-custom-class-for-errors\">
                            ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formEditSkillBloc"]) || array_key_exists("formEditSkillBloc", $context) ? $context["formEditSkillBloc"] : (function () { throw new RuntimeError('Variable "formEditSkillBloc" does not exist.', 133, $this->source); })()), 'errors');
        echo "
                        </div>
                        <div class=\"col-12\">
                            ";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEditSkillBloc"]) || array_key_exists("formEditSkillBloc", $context) ? $context["formEditSkillBloc"] : (function () { throw new RuntimeError('Variable "formEditSkillBloc" does not exist.', 136, $this->source); })()), "name", [], "any", false, false, false, 136), 'label', ["label_attr" => ["class" => "col-form-label"], "label" => "Intitulé"]);
        echo "
                            ";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEditSkillBloc"]) || array_key_exists("formEditSkillBloc", $context) ? $context["formEditSkillBloc"] : (function () { throw new RuntimeError('Variable "formEditSkillBloc" does not exist.', 137, $this->source); })()), "name", [], "any", false, false, false, 137), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                        <button class=\"btn btn-primary\">";
        // line 142
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 142, $this->source); })()), "Modifier")) : ("Modifier")), "html", null, true);
        echo "</button>
                    </div>
                </div>
                ";
        // line 145
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formEditSkillBloc"]) || array_key_exists("formEditSkillBloc", $context) ? $context["formEditSkillBloc"] : (function () { throw new RuntimeError('Variable "formEditSkillBloc" does not exist.', 145, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>
        <!-- End Madal Edit -->
        <!-- Madal ADD UE/Bloc d'option -->
        <div class=\"modal fade\" id=\"addUEModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">

                ";
        // line 153
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formSelectUe"]) || array_key_exists("formSelectUe", $context) ? $context["formSelectUe"] : (function () { throw new RuntimeError('Variable "formSelectUe" does not exist.', 153, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bloc_new_selected", ["id" => (isset($context["selectedParcourId"]) || array_key_exists("selectedParcourId", $context) ? $context["selectedParcourId"] : (function () { throw new RuntimeError('Variable "selectedParcourId" does not exist.', 153, $this->source); })()), "skillBloc" => 0]), "method" => "POST", "attr" => ["id" => "form-ue-add"]]);
        echo "
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h1 class=\"modal-title fs-5\" id=\"exampleModalLabel\"> <i class=\"bi bi-file-plus\"></i> Ajouter UE / Bloc d'options</h1>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body row\">
                        <div class=\"my-custom-class-for-errors\">
                            ";
        // line 161
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formSelectUe"]) || array_key_exists("formSelectUe", $context) ? $context["formSelectUe"] : (function () { throw new RuntimeError('Variable "formSelectUe" does not exist.', 161, $this->source); })()), 'errors');
        echo "
                        </div>
                        <div class=\"col-12\">
                            <label for=\"selecte-type-element\" class=\"col-form-label\">Selectionez le type d'élement</label>
                            <select name=\"\" id=\"selecte-type-element\" class=\"form-control\">
                                <option value=\"1\" selected>UE</option>
                                <option value=\"2\">Bloc d'option</option>
                            </select>
                        </div>
                        <div id=\"content-form-ue\">
                            <div class=\"col-12\">
                                ";
        // line 172
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formSelectUe"]) || array_key_exists("formSelectUe", $context) ? $context["formSelectUe"] : (function () { throw new RuntimeError('Variable "formSelectUe" does not exist.', 172, $this->source); })()), "name", [], "any", false, false, false, 172), 'label', ["label_attr" => ["class" => "col-form-label"], "label" => "Nom UE"]);
        echo "
                                <div style=\"display: flex; justify-content: space-between; align-items: center;\">
                                    <div style=\"display: flex; flex: 9;\">
                                        ";
        // line 175
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formSelectUe"]) || array_key_exists("formSelectUe", $context) ? $context["formSelectUe"] : (function () { throw new RuntimeError('Variable "formSelectUe" does not exist.', 175, $this->source); })()), "name", [], "any", false, false, false, 175), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                    </div>
                                    <div style=\"display: flex; flex: 1; justify-content: end\">
                                        <button id=\"add-new-ue\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#addNewUEModal\">
                                            <i class=\"bi bi-plus-square\"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                        <button class=\"btn btn-primary\">";
        // line 188
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 188, $this->source); })()), "Ajouter")) : ("Ajouter")), "html", null, true);
        echo "</button>
                    </div>
                </div>
                ";
        // line 191
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formSelectUe"]) || array_key_exists("formSelectUe", $context) ? $context["formSelectUe"] : (function () { throw new RuntimeError('Variable "formSelectUe" does not exist.', 191, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>
        <!-- END Madal ADD UE/Bloc d'option -->
        <!-- Madal ADD UE -->
        <div class=\"modal fade\" id=\"addNewUEModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">

                ";
        // line 199
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formUe"]) || array_key_exists("formUe", $context) ? $context["formUe"] : (function () { throw new RuntimeError('Variable "formUe" does not exist.', 199, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bloc_new_selected", ["id" => (isset($context["selectedParcourId"]) || array_key_exists("selectedParcourId", $context) ? $context["selectedParcourId"] : (function () { throw new RuntimeError('Variable "selectedParcourId" does not exist.', 199, $this->source); })()), "skillBloc" => 0]), "method" => "POST", "attr" => ["id" => "form-ue-add"]]);
        echo "
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h1 class=\"modal-title fs-5\" id=\"exampleModalLabel\"> <i class=\"bi bi-file-plus\"></i> Ajouter UE</h1>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body row\">
                        <div class=\"my-custom-class-for-errors\">
                            ";
        // line 207
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formUe"]) || array_key_exists("formUe", $context) ? $context["formUe"] : (function () { throw new RuntimeError('Variable "formUe" does not exist.', 207, $this->source); })()), 'errors');
        echo "
                        </div>
                        <div class=\"col-12\">
                            ";
        // line 210
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUe"]) || array_key_exists("formUe", $context) ? $context["formUe"] : (function () { throw new RuntimeError('Variable "formUe" does not exist.', 210, $this->source); })()), "name", [], "any", false, false, false, 210), 'label', ["label_attr" => ["class" => "col-form-label"], "label" => "Nom UE"]);
        echo "
                            ";
        // line 211
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUe"]) || array_key_exists("formUe", $context) ? $context["formUe"] : (function () { throw new RuntimeError('Variable "formUe" does not exist.', 211, $this->source); })()), "name", [], "any", false, false, false, 211), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                        <div class=\"col-12\">
                            ";
        // line 214
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUe"]) || array_key_exists("formUe", $context) ? $context["formUe"] : (function () { throw new RuntimeError('Variable "formUe" does not exist.', 214, $this->source); })()), "status", [], "any", false, false, false, 214), 'label', ["label_attr" => ["class" => "col-form-label"], "label" => "Statut"]);
        echo "
                            ";
        // line 215
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUe"]) || array_key_exists("formUe", $context) ? $context["formUe"] : (function () { throw new RuntimeError('Variable "formUe" does not exist.', 215, $this->source); })()), "status", [], "any", false, false, false, 215), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                        <div class=\"col-12\">
                            ";
        // line 218
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUe"]) || array_key_exists("formUe", $context) ? $context["formUe"] : (function () { throw new RuntimeError('Variable "formUe" does not exist.', 218, $this->source); })()), "nbGroup", [], "any", false, false, false, 218), 'label', ["label_attr" => ["class" => "col-form-label"], "label" => "nombre de groupe"]);
        echo "
                            ";
        // line 219
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUe"]) || array_key_exists("formUe", $context) ? $context["formUe"] : (function () { throw new RuntimeError('Variable "formUe" does not exist.', 219, $this->source); })()), "nbGroup", [], "any", false, false, false, 219), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                        <div class=\"col-12\">
                            ";
        // line 222
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUe"]) || array_key_exists("formUe", $context) ? $context["formUe"] : (function () { throw new RuntimeError('Variable "formUe" does not exist.', 222, $this->source); })()), "capacityGroup", [], "any", false, false, false, 222), 'label', ["label_attr" => ["class" => "col-form-label"], "label" => "Capacité du groupe"]);
        echo "
                            ";
        // line 223
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUe"]) || array_key_exists("formUe", $context) ? $context["formUe"] : (function () { throw new RuntimeError('Variable "formUe" does not exist.', 223, $this->source); })()), "capacityGroup", [], "any", false, false, false, 223), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                        <button class=\"btn btn-primary\">";
        // line 228
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 228, $this->source); })()), "Ajouter")) : ("Ajouter")), "html", null, true);
        echo "</button>
                    </div>
                </div>
                ";
        // line 231
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formUe"]) || array_key_exists("formUe", $context) ? $context["formUe"] : (function () { throw new RuntimeError('Variable "formUe" does not exist.', 231, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>
        <!-- END Madal ADD UE -->

        <!-- Madal EDIT UE -->
        <div class=\"modal fade\" id=\"edit-bloc-ue-modal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">

                ";
        // line 240
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formUeEdit"]) || array_key_exists("formUeEdit", $context) ? $context["formUeEdit"] : (function () { throw new RuntimeError('Variable "formUeEdit" does not exist.', 240, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bloc_ue_edit", ["id" => (isset($context["selectedParcourId"]) || array_key_exists("selectedParcourId", $context) ? $context["selectedParcourId"] : (function () { throw new RuntimeError('Variable "selectedParcourId" does not exist.', 240, $this->source); })()), "bloc" => 0, "ue" => 0]), "method" => "POST", "attr" => ["id" => "form-ue-edit"]]);
        echo "
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h1 class=\"modal-title fs-5\" id=\"exampleModalLabel\"> <i class=\"bi bi-pen\"></i> Modifier UE</h1>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body row\">
                        <div class=\"my-custom-class-for-errors\">
                            ";
        // line 248
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formUeEdit"]) || array_key_exists("formUeEdit", $context) ? $context["formUeEdit"] : (function () { throw new RuntimeError('Variable "formUeEdit" does not exist.', 248, $this->source); })()), 'errors');
        echo "
                        </div>
                        <div class=\"col-12\">
                            ";
        // line 251
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUeEdit"]) || array_key_exists("formUeEdit", $context) ? $context["formUeEdit"] : (function () { throw new RuntimeError('Variable "formUeEdit" does not exist.', 251, $this->source); })()), "name", [], "any", false, false, false, 251), 'label', ["label_attr" => ["class" => "col-form-label"], "label" => "Nom UE"]);
        echo "
                            ";
        // line 252
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUeEdit"]) || array_key_exists("formUeEdit", $context) ? $context["formUeEdit"] : (function () { throw new RuntimeError('Variable "formUeEdit" does not exist.', 252, $this->source); })()), "name", [], "any", false, false, false, 252), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                        <div class=\"col-12\">
                            ";
        // line 255
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUeEdit"]) || array_key_exists("formUeEdit", $context) ? $context["formUeEdit"] : (function () { throw new RuntimeError('Variable "formUeEdit" does not exist.', 255, $this->source); })()), "status", [], "any", false, false, false, 255), 'label', ["label_attr" => ["class" => "col-form-label"], "label" => "Statut"]);
        echo "
                            ";
        // line 256
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUeEdit"]) || array_key_exists("formUeEdit", $context) ? $context["formUeEdit"] : (function () { throw new RuntimeError('Variable "formUeEdit" does not exist.', 256, $this->source); })()), "status", [], "any", false, false, false, 256), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                        <div class=\"col-12\">
                            ";
        // line 259
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUeEdit"]) || array_key_exists("formUeEdit", $context) ? $context["formUeEdit"] : (function () { throw new RuntimeError('Variable "formUeEdit" does not exist.', 259, $this->source); })()), "nbGroup", [], "any", false, false, false, 259), 'label', ["label_attr" => ["class" => "col-form-label"], "label" => "nombre de groupe"]);
        echo "
                            ";
        // line 260
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUeEdit"]) || array_key_exists("formUeEdit", $context) ? $context["formUeEdit"] : (function () { throw new RuntimeError('Variable "formUeEdit" does not exist.', 260, $this->source); })()), "nbGroup", [], "any", false, false, false, 260), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                        <div class=\"col-12\">
                            ";
        // line 263
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUeEdit"]) || array_key_exists("formUeEdit", $context) ? $context["formUeEdit"] : (function () { throw new RuntimeError('Variable "formUeEdit" does not exist.', 263, $this->source); })()), "capacityGroup", [], "any", false, false, false, 263), 'label', ["label_attr" => ["class" => "col-form-label"], "label" => "Capacité du groupe"]);
        echo "
                            ";
        // line 264
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUeEdit"]) || array_key_exists("formUeEdit", $context) ? $context["formUeEdit"] : (function () { throw new RuntimeError('Variable "formUeEdit" does not exist.', 264, $this->source); })()), "capacityGroup", [], "any", false, false, false, 264), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                        <button class=\"btn btn-primary\">";
        // line 269
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 269, $this->source); })()), "Modifier")) : ("Modifier")), "html", null, true);
        echo "</button>
                    </div>
                </div>
                ";
        // line 272
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formUeEdit"]) || array_key_exists("formUeEdit", $context) ? $context["formUeEdit"] : (function () { throw new RuntimeError('Variable "formUeEdit" does not exist.', 272, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>
        <!-- END Madal EDIT UE -->
    </main>
    ";
        // line 277
        $this->displayBlock('script', $context, $blocks);
        // line 350
        echo "
";
        
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

    // line 277
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 278
        echo "        ";
        $this->displayParentBlock("script", $context, $blocks);
        echo "
        <script>
            \$(\".btn-ue-option-bloc-js\").click(function (){
                var idSkillBloc = \$(this).parent().parent().attr('id').split('-').pop();
                var pathArray = \$('#addUEModal form').first().attr('action').split('/');
                pathArray[pathArray.length - 3]  = idSkillBloc
                \$('#addUEModal form').first().attr('action', pathArray.join('/'));
                console.log(pathArray.join('/'));
            });
            const blocs = Object.values(document.getElementsByClassName('edit-bloc'));
            blocs.forEach(link => {
                link.addEventListener('click', event => {
                    event.preventDefault();
                    const id = event.currentTarget.className.split(' ').pop().split('-').pop();
                    const blocRow = document.getElementById('bloc-' + id);
                    const blocName = blocRow.children[0].textContent;
                    const form = document.getElementById('form-edit');
                    //Form Values
                    form.getElementsByTagName('input')[0].value = blocName;
                    let formAction = form.action.split('/');
                    formAction[formAction.length - 2] = id;
                    form.action = formAction.join('/');
                });
            });

            const parcourSelected = document.getElementById('parcour-selected');
            parcourSelected.addEventListener('change', event => {
                let currentUrl = window.location.href.split('/');
                if(currentUrl[currentUrl.length - 2] == 'bloc'){
                    currentUrl.pop();
                }
                currentUrl[currentUrl.length - 2] = event.currentTarget.value;
                location.href = currentUrl.join('/');
            });

            const buttonsNewUe = Object.values(document.getElementsByClassName('new-ue-button'));
            buttonsNewUe.forEach(button => {
                button.addEventListener('click', event => {
                    const id = event.currentTarget.className.split(' ').pop().split('-').pop();
                    const form = document.getElementById('form-ue-add');
                    console.log(form.action);
                    let formAction = form.action.split('/');
                    formAction[formAction.length - 3] = id;
                    form.action = formAction.join('/');
                })
            });

            const linksEditUe = Object.values(document.getElementsByClassName('edit-bloc-ue'));
            linksEditUe.forEach(link => {
                link.addEventListener('click', event => {
                    event.preventDefault();
                    const idUe = event.currentTarget.className.split(' ').pop().split('-').pop();
                    const idBloc = event.currentTarget.className.split(' ').pop().split('-').slice(-3)[0];
                    const ueRow = document.getElementById('ue-' + idUe);
                    const ueName = ueRow.children[0].textContent;
                    const ueStatus = ueRow.children[1].textContent;
                    const ueNbGroup = ueRow.children[2].textContent;
                    const ueCapacity = ueRow.children[3].textContent;
                    const form = document.getElementById('form-ue-edit');
                    //Form Values
                    form.getElementsByTagName('input')[0].value = ueName;
                    form.getElementsByTagName('input')[1].value = ueStatus;
                    form.getElementsByTagName('input')[2].value = ueNbGroup;
                    form.getElementsByTagName('input')[3].value = ueCapacity;
                    let formAction = form.action.split('/');
                    formAction[formAction.length - 2] = idUe;
                    formAction[formAction.length - 4] = idBloc;
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
        return "bloc/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  678 => 278,  668 => 277,  655 => 18,  645 => 17,  632 => 14,  622 => 13,  611 => 350,  609 => 277,  601 => 272,  595 => 269,  587 => 264,  583 => 263,  577 => 260,  573 => 259,  567 => 256,  563 => 255,  557 => 252,  553 => 251,  547 => 248,  536 => 240,  524 => 231,  518 => 228,  510 => 223,  506 => 222,  500 => 219,  496 => 218,  490 => 215,  486 => 214,  480 => 211,  476 => 210,  470 => 207,  459 => 199,  448 => 191,  442 => 188,  426 => 175,  420 => 172,  406 => 161,  395 => 153,  384 => 145,  378 => 142,  370 => 137,  366 => 136,  360 => 133,  348 => 124,  337 => 116,  331 => 113,  323 => 108,  319 => 107,  313 => 104,  302 => 96,  292 => 88,  280 => 81,  271 => 77,  259 => 70,  255 => 69,  251 => 68,  248 => 67,  243 => 66,  222 => 54,  205 => 50,  199 => 47,  195 => 46,  189 => 43,  181 => 38,  177 => 37,  173 => 35,  169 => 34,  161 => 28,  146 => 26,  142 => 25,  135 => 20,  133 => 17,  130 => 16,  127 => 13,  117 => 12,  105 => 9,  101 => 8,  97 => 7,  92 => 6,  82 => 5,  63 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Blocs{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"{{ asset('css/float-button-style.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('css/select-element-style.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('css/table-subcontent-style.css') }}\" rel=\"stylesheet\">
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
            <h1>Gestion des blocs et UEs</h1>
            <form style=\"text-align: center;\">
                <select id=\"parcour-selected\" class=\"text-select\">
                    {% for parcour in parcours %}
                        <option value=\"{{ parcour.id }}\" {% if selectedParcourId == parcour.id %} selected {% endif %}>{{ parcour.name }}</option>
                    {% endfor %}
                </select>
            </form>
        </div>

        <section class=\"section-content\">
            <div class=\"row\">
                {% for skillBloc in skillBlocs %}
                    <div class=\"accordion\">
                        <div  class=\"accordion-item\">
                            <div class=\"accordion-header\" id=\"bloc-{{ skillBloc.id }}\">
                                <div>{{ skillBloc.name }}</div>
                                <div style=\"display: flex; align-items: center; max-width: 210px;\">
                                    <button class=\"btn btn-primary small-btn-darck btn-ue-option-bloc-js\" data-bs-toggle=\"modal\" data-bs-target=\"#addUEModal\">
                                        <i class=\"bi bi-plus-square\"></i>
                                    </button>
                                    <a href=\"#\" class=\"edit-bloc edit-bloc-{{ skillBloc.id }}\" data-bs-toggle=\"modal\" data-bs-target=\"#edit-bloc-modal\">
                                        <i class=\"bi bi-pencil-square\"></i>
                                    </a>
                                    <form method=\"post\" action=\"{{ path('app_bloc_delete', {'id': selectedParcourId, 'bloc': skillBloc.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ skillBloc.id) }}\">
                                        <button class=\"link-text btn\" style=\"color: #dc2323\"><i class=\"bi bi-trash3-fill\"></i></button>
                                    </form>
                                    <button class=\"accordion-button{% if selectedBloc != skillBloc.id %} collapsed {% endif %}\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseOne-{{ skillBloc.id }}\" aria-expanded=\"{% if selectedBloc == skillBloc.id %}true{% else %}false{% endif %}\" aria-controls=\"collapseOne\">
                                    </button>
                                </div>
                            </div>
                            <div id=\"collapseOne-{{ skillBloc.id }}\" class=\"accordion-collapse collapse {% if selectedBloc == skillBloc.id %} show {% endif %}\" aria-labelledby=\"bloc-{{ skillBloc.id }}\" data-bs-parent=\"#accordionExample\">
                                <div class=\"accordion-body\">
                                    <table class=\"table\">
                                        <thead>
                                            <tr>
                                                <th>Intitulé</th>
                                                <th>Status</th>
                                                <th>Capacité du groupe</th>
                                                <th>actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        {% for ue in skillBloc.ues %}
                                            <tr>
                                                <td>{{ ue.name }}</td>
                                                <td>{{ ue.status }}</td>
                                                <td>{{ ue.capacityGroup }}</td>
                                                <td>
                                                    <a href=\"\">show</a>
                                                    <a href=\"\">edit</a>
                                                </td>
                                            </tr>
                                        {% else %}
                                            <tr>
                                                <td colspan=\"6\">no records found</td>
                                            </tr>
                                        {% endfor %}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </section>

        <!-- Madal add Bloc de compétence -->
        <button class=\"btn btn-primary float-button\" data-bs-toggle=\"modal\" data-bs-target=\"#staticBackdrop\" >Ajouter le bloc de compétence</button>
        <div class=\"modal fade\" id=\"staticBackdrop\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">

                {{ form_start(formSkillBloc) }}
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h1 class=\"modal-title fs-5\" id=\"exampleModalLabel\"> <i class=\"bi bi-file-plus\"></i> Ajouter un bloc de compétence</h1>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body row\">
                        <div class=\"my-custom-class-for-errors\">
                            {{ form_errors(formSkillBloc) }}
                        </div>
                        <div class=\"col-12\">
                            {{ form_label(formSkillBloc.name,'Intitulé',  {'label_attr': {'class': 'col-form-label'}}) }}
                            {{ form_widget(formSkillBloc.name, {'attr': {'class': 'form-control'}}) }}
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                        <button class=\"btn btn-primary\">{{ button_label|default('Ajouter') }}</button>
                    </div>
                </div>
                {{ form_end(formSkillBloc) }}
            </div>
        </div>

        <!-- Madal Edit -->
        <div class=\"modal fade\" id=\"edit-bloc-modal\" tabindex=\"-1\" aria-labelledby=\"ModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">

                {{ form_start(formEditSkillBloc, {'action': path('app_bloc_edit', { 'id': selectedParcourId, 'bloc': 0 }), 'method': 'POST', 'attr': {'id': 'form-edit'}}) }}

                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h1 class=\"modal-title fs-5\" id=\"exampleModalLabel\"> <i class=\"bi bi-pen\"></i> Modifier le bloc de compétence</h1>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body row\">
                        <div class=\"my-custom-class-for-errors\">
                            {{ form_errors(formEditSkillBloc) }}
                        </div>
                        <div class=\"col-12\">
                            {{ form_label(formEditSkillBloc.name,'Intitulé',  {'label_attr': {'class': 'col-form-label'}}) }}
                            {{ form_widget(formEditSkillBloc.name, {'attr': {'class': 'form-control'}}) }}
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                        <button class=\"btn btn-primary\">{{ button_label|default('Modifier') }}</button>
                    </div>
                </div>
                {{ form_end(formEditSkillBloc) }}
            </div>
        </div>
        <!-- End Madal Edit -->
        <!-- Madal ADD UE/Bloc d'option -->
        <div class=\"modal fade\" id=\"addUEModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">

                {{ form_start(formSelectUe, {'action': path('app_bloc_new_selected', { 'id': selectedParcourId, 'skillBloc': 0 }), 'method': 'POST', 'attr': {'id': 'form-ue-add'}}) }}
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h1 class=\"modal-title fs-5\" id=\"exampleModalLabel\"> <i class=\"bi bi-file-plus\"></i> Ajouter UE / Bloc d'options</h1>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body row\">
                        <div class=\"my-custom-class-for-errors\">
                            {{ form_errors(formSelectUe) }}
                        </div>
                        <div class=\"col-12\">
                            <label for=\"selecte-type-element\" class=\"col-form-label\">Selectionez le type d'élement</label>
                            <select name=\"\" id=\"selecte-type-element\" class=\"form-control\">
                                <option value=\"1\" selected>UE</option>
                                <option value=\"2\">Bloc d'option</option>
                            </select>
                        </div>
                        <div id=\"content-form-ue\">
                            <div class=\"col-12\">
                                {{ form_label(formSelectUe.name,'Nom UE',  {'label_attr': {'class': 'col-form-label'}}) }}
                                <div style=\"display: flex; justify-content: space-between; align-items: center;\">
                                    <div style=\"display: flex; flex: 9;\">
                                        {{ form_widget(formSelectUe.name, {'attr': {'class': 'form-control'}}) }}
                                    </div>
                                    <div style=\"display: flex; flex: 1; justify-content: end\">
                                        <button id=\"add-new-ue\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#addNewUEModal\">
                                            <i class=\"bi bi-plus-square\"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                        <button class=\"btn btn-primary\">{{ button_label|default('Ajouter') }}</button>
                    </div>
                </div>
                {{ form_end(formSelectUe) }}
            </div>
        </div>
        <!-- END Madal ADD UE/Bloc d'option -->
        <!-- Madal ADD UE -->
        <div class=\"modal fade\" id=\"addNewUEModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">

                {{ form_start(formUe, {'action': path('app_bloc_new_selected', { 'id': selectedParcourId, 'skillBloc': 0 }), 'method': 'POST', 'attr': {'id': 'form-ue-add'}}) }}
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h1 class=\"modal-title fs-5\" id=\"exampleModalLabel\"> <i class=\"bi bi-file-plus\"></i> Ajouter UE</h1>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body row\">
                        <div class=\"my-custom-class-for-errors\">
                            {{ form_errors(formUe) }}
                        </div>
                        <div class=\"col-12\">
                            {{ form_label(formUe.name,'Nom UE',  {'label_attr': {'class': 'col-form-label'}}) }}
                            {{ form_widget(formUe.name, {'attr': {'class': 'form-control'}}) }}
                        </div>
                        <div class=\"col-12\">
                            {{ form_label(formUe.status,'Statut',  {'label_attr': {'class': 'col-form-label'}}) }}
                            {{ form_widget(formUe.status, {'attr': {'class': 'form-control'}}) }}
                        </div>
                        <div class=\"col-12\">
                            {{ form_label(formUe.nbGroup,'nombre de groupe',  {'label_attr': {'class': 'col-form-label'}}) }}
                            {{ form_widget(formUe.nbGroup, {'attr': {'class': 'form-control'}}) }}
                        </div>
                        <div class=\"col-12\">
                            {{ form_label(formUe.capacityGroup,'Capacité du groupe',  {'label_attr': {'class': 'col-form-label'}}) }}
                            {{ form_widget(formUe.capacityGroup, {'attr': {'class': 'form-control'}}) }}
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                        <button class=\"btn btn-primary\">{{ button_label|default('Ajouter') }}</button>
                    </div>
                </div>
                {{ form_end(formUe) }}
            </div>
        </div>
        <!-- END Madal ADD UE -->

        <!-- Madal EDIT UE -->
        <div class=\"modal fade\" id=\"edit-bloc-ue-modal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">

                {{ form_start(formUeEdit, {'action': path('app_bloc_ue_edit', { 'id': selectedParcourId, 'bloc': 0, 'ue': 0 }), 'method': 'POST', 'attr': {'id': 'form-ue-edit'}}) }}
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h1 class=\"modal-title fs-5\" id=\"exampleModalLabel\"> <i class=\"bi bi-pen\"></i> Modifier UE</h1>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body row\">
                        <div class=\"my-custom-class-for-errors\">
                            {{ form_errors(formUeEdit) }}
                        </div>
                        <div class=\"col-12\">
                            {{ form_label(formUeEdit.name,'Nom UE',  {'label_attr': {'class': 'col-form-label'}}) }}
                            {{ form_widget(formUeEdit.name, {'attr': {'class': 'form-control'}}) }}
                        </div>
                        <div class=\"col-12\">
                            {{ form_label(formUeEdit.status,'Statut',  {'label_attr': {'class': 'col-form-label'}}) }}
                            {{ form_widget(formUeEdit.status, {'attr': {'class': 'form-control'}}) }}
                        </div>
                        <div class=\"col-12\">
                            {{ form_label(formUeEdit.nbGroup,'nombre de groupe',  {'label_attr': {'class': 'col-form-label'}}) }}
                            {{ form_widget(formUeEdit.nbGroup, {'attr': {'class': 'form-control'}}) }}
                        </div>
                        <div class=\"col-12\">
                            {{ form_label(formUeEdit.capacityGroup,'Capacité du groupe',  {'label_attr': {'class': 'col-form-label'}}) }}
                            {{ form_widget(formUeEdit.capacityGroup, {'attr': {'class': 'form-control'}}) }}
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                        <button class=\"btn btn-primary\">{{ button_label|default('Modifier') }}</button>
                    </div>
                </div>
                {{ form_end(formUeEdit) }}
            </div>
        </div>
        <!-- END Madal EDIT UE -->
    </main>
    {% block script %}
        {{ parent() }}
        <script>
            \$(\".btn-ue-option-bloc-js\").click(function (){
                var idSkillBloc = \$(this).parent().parent().attr('id').split('-').pop();
                var pathArray = \$('#addUEModal form').first().attr('action').split('/');
                pathArray[pathArray.length - 3]  = idSkillBloc
                \$('#addUEModal form').first().attr('action', pathArray.join('/'));
                console.log(pathArray.join('/'));
            });
            const blocs = Object.values(document.getElementsByClassName('edit-bloc'));
            blocs.forEach(link => {
                link.addEventListener('click', event => {
                    event.preventDefault();
                    const id = event.currentTarget.className.split(' ').pop().split('-').pop();
                    const blocRow = document.getElementById('bloc-' + id);
                    const blocName = blocRow.children[0].textContent;
                    const form = document.getElementById('form-edit');
                    //Form Values
                    form.getElementsByTagName('input')[0].value = blocName;
                    let formAction = form.action.split('/');
                    formAction[formAction.length - 2] = id;
                    form.action = formAction.join('/');
                });
            });

            const parcourSelected = document.getElementById('parcour-selected');
            parcourSelected.addEventListener('change', event => {
                let currentUrl = window.location.href.split('/');
                if(currentUrl[currentUrl.length - 2] == 'bloc'){
                    currentUrl.pop();
                }
                currentUrl[currentUrl.length - 2] = event.currentTarget.value;
                location.href = currentUrl.join('/');
            });

            const buttonsNewUe = Object.values(document.getElementsByClassName('new-ue-button'));
            buttonsNewUe.forEach(button => {
                button.addEventListener('click', event => {
                    const id = event.currentTarget.className.split(' ').pop().split('-').pop();
                    const form = document.getElementById('form-ue-add');
                    console.log(form.action);
                    let formAction = form.action.split('/');
                    formAction[formAction.length - 3] = id;
                    form.action = formAction.join('/');
                })
            });

            const linksEditUe = Object.values(document.getElementsByClassName('edit-bloc-ue'));
            linksEditUe.forEach(link => {
                link.addEventListener('click', event => {
                    event.preventDefault();
                    const idUe = event.currentTarget.className.split(' ').pop().split('-').pop();
                    const idBloc = event.currentTarget.className.split(' ').pop().split('-').slice(-3)[0];
                    const ueRow = document.getElementById('ue-' + idUe);
                    const ueName = ueRow.children[0].textContent;
                    const ueStatus = ueRow.children[1].textContent;
                    const ueNbGroup = ueRow.children[2].textContent;
                    const ueCapacity = ueRow.children[3].textContent;
                    const form = document.getElementById('form-ue-edit');
                    //Form Values
                    form.getElementsByTagName('input')[0].value = ueName;
                    form.getElementsByTagName('input')[1].value = ueStatus;
                    form.getElementsByTagName('input')[2].value = ueNbGroup;
                    form.getElementsByTagName('input')[3].value = ueCapacity;
                    let formAction = form.action.split('/');
                    formAction[formAction.length - 2] = idUe;
                    formAction[formAction.length - 4] = idBloc;
                    form.action = formAction.join('/');
                });
            });
        </script>
    {% endblock %}

{% endblock %}
", "bloc/index.html.twig", "/Users/etudiant/Desktop/prjthematique/choix-d-options/choix_options_project/templates/bloc/index.html.twig");
    }
}
