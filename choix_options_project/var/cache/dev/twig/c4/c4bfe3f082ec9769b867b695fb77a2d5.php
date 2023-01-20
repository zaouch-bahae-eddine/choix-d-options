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

/* student/studentChoices.html.twig */
class __TwigTemplate_3255b6fd03f10c7a73517afb746df4e8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/studentChoices.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/studentChoices.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "student/studentChoices.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/student-interface.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    ";
        $this->displayBlock('header', $context, $blocks);
        // line 13
        echo "    ";
        $this->displayBlock('sidebar', $context, $blocks);
        // line 16
        echo "    <main id=\"main\" class=\"main\" style=\"position: relative\">
        <div class=\"pagetitle\">
            <h1>Gestion des Choix d'options</h1>
            <h1>Master-";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 19, $this->source); })()), "anneeMaster", [], "any", false, false, false, 19), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 19, $this->source); })()), "parcour", [], "any", false, false, false, 19), "name", [], "any", false, false, false, 19), "html", null, true);
        echo "</h1>
        </div>
        <div class=\"limit-date\">
            <h1>Etudiant: ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22), "firstName", [], "any", false, false, false, 22), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22), "lastName", [], "any", false, false, false, 22), "html", null, true);
        echo "</h1>
        </div>
        <section class=\"section-content\">
            <div class=\"row\">

                <form id=\"choice-form\" action=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_app_student_choice_save", ["promotion" => twig_get_attribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27), "student" => twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27)]), "html", null, true);
        echo "\" method=\"post\">
                    <div id=\"popup-error\" style=\"display: none; width: 100%\">
                        <div class=\"alert alert-danger\" role=\"alert\">
                            Choix d'options incomplet
                        </div>
                        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 33
            echo "                            <div id=\"popup-error\" style=\"width: 100%\">
                                <div class=\"alert alert-danger\" role=\"alert\">
                                    ";
            // line 35
            echo twig_escape_filter($this->env, $context["error"], "html", null, true);
            echo "
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                    </div>
                    ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 40, $this->source); })()), "parcour", [], "any", false, false, false, 40), "blocs", [], "any", false, false, false, 40));
        foreach ($context['_seq'] as $context["_key"] => $context["bloc"]) {
            // line 41
            echo "                        <div class=\"bloc-container\">
                            <div class=\"bloc bloc-head ";
            // line 42
            if ((isset($context["currentChoice"]) || array_key_exists("currentChoice", $context) ? $context["currentChoice"] : (function () { throw new RuntimeError('Variable "currentChoice" does not exist.', 42, $this->source); })())) {
                echo " complet-bloc ";
            }
            echo "\">
                                ";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bloc"], "name", [], "any", false, false, false, 43), "html", null, true);
            echo "
                                <div>
                                    <span class=\"choice-made\">
                                        ";
            // line 46
            if ((isset($context["currentChoice"]) || array_key_exists("currentChoice", $context) ? $context["currentChoice"] : (function () { throw new RuntimeError('Variable "currentChoice" does not exist.', 46, $this->source); })())) {
                // line 47
                echo "                                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bloc"], "ueOptionalToChose", [], "any", false, false, false, 47), "html", null, true);
                echo "
                                        ";
            } else {
                // line 49
                echo "                                            0
                                        ";
            }
            // line 51
            echo "                                    </span>/
                                    <span class=\"choice-max\">";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bloc"], "ueOptionalToChose", [], "any", false, false, false, 52), "html", null, true);
            echo "</span>
                                </div>
                            </div>
                            <div class=\"bloc-content\">
                                ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["bloc"], "ues", [], "any", false, false, false, 56));
            foreach ($context['_seq'] as $context["_key"] => $context["ue"]) {
                // line 57
                echo "                                    <div class=\"bloc bloc-ue\">
                                        <span>";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ue"], "name", [], "any", false, false, false, 58), "html", null, true);
                echo "</span>
                                        <select name=\"select-ue-";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ue"], "id", [], "any", false, false, false, 59), "html", null, true);
                echo "\" class=\"form-control\" style=\"width: 100px\">
                                            ";
                // line 60
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, $context["ue"], "nbGroup", [], "any", false, false, false, 60)));
                foreach ($context['_seq'] as $context["_key"] => $context["grpOption"]) {
                    // line 61
                    echo "                                                <option value=\"";
                    echo twig_escape_filter($this->env, $context["grpOption"], "html", null, true);
                    echo "\" ";
                    if (((twig_length_filter($this->env, (isset($context["grp"]) || array_key_exists("grp", $context) ? $context["grp"] : (function () { throw new RuntimeError('Variable "grp" does not exist.', 61, $this->source); })())) != 0) && ($context["grpOption"] == twig_get_attribute($this->env, $this->source, (isset($context["grp"]) || array_key_exists("grp", $context) ? $context["grp"] : (function () { throw new RuntimeError('Variable "grp" does not exist.', 61, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["ue"], "id", [], "any", false, false, false, 61), [], "array", false, false, false, 61)))) {
                        echo " selected";
                    }
                    echo ">groupe-";
                    echo twig_escape_filter($this->env, $context["grpOption"], "html", null, true);
                    echo "</option>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grpOption'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "                                        </select>
                                        ";
                // line 64
                if ((twig_get_attribute($this->env, $this->source, $context["ue"], "status", [], "any", false, false, false, 64) == 1)) {
                    // line 65
                    echo "                                            <input type=\"checkbox\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ue"], "id", [], "any", false, false, false, 65), "html", null, true);
                    echo "\" class=\"input-ue\" name=\"choices[]\" ";
                    if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["ue"], "id", [], "any", false, false, false, 65), (isset($context["currentChoice"]) || array_key_exists("currentChoice", $context) ? $context["currentChoice"] : (function () { throw new RuntimeError('Variable "currentChoice" does not exist.', 65, $this->source); })()))) {
                        echo "checked";
                    }
                    echo ">
                                        ";
                } else {
                    // line 67
                    echo "                                            <div style=\"width: 25px;\"></div>
                                        ";
                }
                // line 69
                echo "                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bloc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                    <button class=\"btn btn-primary btn-save-choice\" id=\"btn-choice\" type=\"submit\">Enregistrer</button>
                </form>
            </div>
        </section>
    </main>
    ";
        // line 79
        $this->displayBlock('script', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 11
        echo "        ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 13
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 14
        echo "        ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 79
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 80
        echo "        ";
        $this->displayParentBlock("script", $context, $blocks);
        echo "
        <script>
            const inputUES = Object.values(document.getElementsByClassName('input-ue'));
            const btnChoice = document.getElementById('btn-choice');
            let completeBloc = 0;
            inputUES.forEach(ue => {
                ue.addEventListener('change', event => {
                    console.log(event.currentTarget.parentNode.parentNode.parentNode.firstElementChild);
                    let blocHeader = event.currentTarget.parentNode.parentNode.parentNode.firstElementChild;
                    let choiceMadeSpan = event.currentTarget.parentNode.parentNode.parentNode.firstElementChild.lastElementChild.firstElementChild;
                    let choiceMaxSpan = event.currentTarget.parentNode.parentNode.parentNode.firstElementChild.lastElementChild.lastElementChild;
                    console.log(blocHeader.classList);
                    blocHeader.classList.remove('complet-bloc');
                    if(event.currentTarget.checked){
                        if(parseInt(choiceMadeSpan.innerHTML) < parseInt(choiceMaxSpan.innerHTML)){
                            choiceMadeSpan.innerHTML = parseInt(choiceMadeSpan.innerHTML) + 1;
                        }else {
                            event.currentTarget.checked = false;
                        }

                    } else {
                        choiceMadeSpan.innerHTML = parseInt(choiceMadeSpan.innerHTML) - 1;
                    }
                    if(parseInt(choiceMadeSpan.innerHTML) == parseInt(choiceMaxSpan.innerHTML)){
                        blocHeader.classList.add('complet-bloc');
                    }
                })
            });

            btnChoice.addEventListener('click', event => {
                event.preventDefault();
                let completeChoiceBloc = document.getElementsByClassName('complet-bloc').length;
                if(completeChoiceBloc != parseInt(\"";
        // line 112
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 112, $this->source); })()), "parcour", [], "any", false, false, false, 112), "blocs", [], "any", false, false, false, 112)), "html", null, true);
        echo "\")){
                    document.getElementById('popup-error').style.display = 'block';
                }else{
                    document.getElementById('popup-error').style.display = 'none';
                    document.getElementById('choice-form').submit();
                }
            });

            currentUrl = window.location.href.split('/')
            if(currentUrl[currentUrl.length - 1] == 'save'){
                currentUrl.pop();
                window.location.href = currentUrl.join('/');
            }
        </script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "student/studentChoices.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  375 => 112,  339 => 80,  329 => 79,  316 => 14,  306 => 13,  293 => 11,  283 => 10,  273 => 79,  266 => 74,  258 => 71,  251 => 69,  247 => 67,  237 => 65,  235 => 64,  232 => 63,  217 => 61,  213 => 60,  209 => 59,  205 => 58,  202 => 57,  198 => 56,  191 => 52,  188 => 51,  184 => 49,  178 => 47,  176 => 46,  170 => 43,  164 => 42,  161 => 41,  157 => 40,  154 => 39,  144 => 35,  140 => 33,  136 => 32,  128 => 27,  118 => 22,  110 => 19,  105 => 16,  102 => 13,  99 => 10,  89 => 9,  77 => 5,  72 => 4,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"{{ asset('css/student-interface.css') }}\" rel=\"stylesheet\">
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
            <h1>Gestion des Choix d'options</h1>
            <h1>Master-{{ promotion.anneeMaster }} {{ promotion.parcour.name }}</h1>
        </div>
        <div class=\"limit-date\">
            <h1>Etudiant: {{ currentUser.user.firstName }} {{ currentUser.user.lastName }}</h1>
        </div>
        <section class=\"section-content\">
            <div class=\"row\">

                <form id=\"choice-form\" action=\"{{ path('admin_app_student_choice_save', {'promotion': promotion.id, 'student': student.id}) }}\" method=\"post\">
                    <div id=\"popup-error\" style=\"display: none; width: 100%\">
                        <div class=\"alert alert-danger\" role=\"alert\">
                            Choix d'options incomplet
                        </div>
                        {% for error in errors %}
                            <div id=\"popup-error\" style=\"width: 100%\">
                                <div class=\"alert alert-danger\" role=\"alert\">
                                    {{ error }}
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                    {% for bloc in promotion.parcour.blocs %}
                        <div class=\"bloc-container\">
                            <div class=\"bloc bloc-head {% if currentChoice %} complet-bloc {% endif %}\">
                                {{ bloc.name }}
                                <div>
                                    <span class=\"choice-made\">
                                        {% if currentChoice %}
                                            {{ bloc.ueOptionalToChose }}
                                        {% else %}
                                            0
                                        {% endif %}
                                    </span>/
                                    <span class=\"choice-max\">{{ bloc.ueOptionalToChose }}</span>
                                </div>
                            </div>
                            <div class=\"bloc-content\">
                                {% for ue in bloc.ues %}
                                    <div class=\"bloc bloc-ue\">
                                        <span>{{ ue.name }}</span>
                                        <select name=\"select-ue-{{ ue.id }}\" class=\"form-control\" style=\"width: 100px\">
                                            {% for grpOption in range(1, ue.nbGroup) %}
                                                <option value=\"{{ grpOption }}\" {% if grp|length != 0 and grpOption == grp[ue.id] %} selected{% endif %}>groupe-{{ grpOption }}</option>
                                            {% endfor %}
                                        </select>
                                        {% if ue.status == 1 %}
                                            <input type=\"checkbox\" value=\"{{ ue.id }}\" class=\"input-ue\" name=\"choices[]\" {% if ue.id in currentChoice %}checked{% endif %}>
                                        {% else %}
                                            <div style=\"width: 25px;\"></div>
                                        {% endif %}
                                    </div>
                                {% endfor %}
                            </div>
                        </div>
                    {% endfor %}
                    <button class=\"btn btn-primary btn-save-choice\" id=\"btn-choice\" type=\"submit\">Enregistrer</button>
                </form>
            </div>
        </section>
    </main>
    {% block script %}
        {{ parent() }}
        <script>
            const inputUES = Object.values(document.getElementsByClassName('input-ue'));
            const btnChoice = document.getElementById('btn-choice');
            let completeBloc = 0;
            inputUES.forEach(ue => {
                ue.addEventListener('change', event => {
                    console.log(event.currentTarget.parentNode.parentNode.parentNode.firstElementChild);
                    let blocHeader = event.currentTarget.parentNode.parentNode.parentNode.firstElementChild;
                    let choiceMadeSpan = event.currentTarget.parentNode.parentNode.parentNode.firstElementChild.lastElementChild.firstElementChild;
                    let choiceMaxSpan = event.currentTarget.parentNode.parentNode.parentNode.firstElementChild.lastElementChild.lastElementChild;
                    console.log(blocHeader.classList);
                    blocHeader.classList.remove('complet-bloc');
                    if(event.currentTarget.checked){
                        if(parseInt(choiceMadeSpan.innerHTML) < parseInt(choiceMaxSpan.innerHTML)){
                            choiceMadeSpan.innerHTML = parseInt(choiceMadeSpan.innerHTML) + 1;
                        }else {
                            event.currentTarget.checked = false;
                        }

                    } else {
                        choiceMadeSpan.innerHTML = parseInt(choiceMadeSpan.innerHTML) - 1;
                    }
                    if(parseInt(choiceMadeSpan.innerHTML) == parseInt(choiceMaxSpan.innerHTML)){
                        blocHeader.classList.add('complet-bloc');
                    }
                })
            });

            btnChoice.addEventListener('click', event => {
                event.preventDefault();
                let completeChoiceBloc = document.getElementsByClassName('complet-bloc').length;
                if(completeChoiceBloc != parseInt(\"{{ promotion.parcour.blocs|length }}\")){
                    document.getElementById('popup-error').style.display = 'block';
                }else{
                    document.getElementById('popup-error').style.display = 'none';
                    document.getElementById('choice-form').submit();
                }
            });

            currentUrl = window.location.href.split('/')
            if(currentUrl[currentUrl.length - 1] == 'save'){
                currentUrl.pop();
                window.location.href = currentUrl.join('/');
            }
        </script>
    {% endblock %}
{% endblock %}
", "student/studentChoices.html.twig", "/Users/etudiant/Desktop/prjthematique/choix-d-options/choix_options_project/templates/student/studentChoices.html.twig");
    }
}
