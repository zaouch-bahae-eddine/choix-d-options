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

/* etudiant/index.html.twig */
class __TwigTemplate_809918229de8c4f25f75de2294e66f98 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "etudiant/index.html.twig", 1);
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
        echo "    <main id=\"main\" class=\"main\" style=\"position: relative\">

        ";
        // line 15
        if ((isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 15, $this->source); })())) {
            // line 16
            echo "            <div class=\"pagetitle\">
                <h1>Choix d'options</h1>
                <h1>Master-";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 18, $this->source); })()), "promotion", [], "any", false, false, false, 18), "anneeMaster", [], "any", false, false, false, 18), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 18, $this->source); })()), "promotion", [], "any", false, false, false, 18), "parcour", [], "any", false, false, false, 18), "name", [], "any", false, false, false, 18), "html", null, true);
            echo "</h1>
            </div>
            <div class=\"limit-date\">
                <h1>Date limite pour faire votre choix</h1>
                <h1>";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 22, $this->source); })()), "promotion", [], "any", false, false, false, 22), "dateLimiteChoixOptions", [], "any", false, false, false, 22), "d/m/Y h:i"), "html", null, true);
            echo "</h1>
            </div>
            <section class=\"section-content\">
                <div class=\"row\">

                    <form id=\"choice-form\" action=\"";
            // line 27
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("save_choice");
            echo "\" method=\"post\">
                        <div id=\"popup-error\" style=\"display: none; width: 100%\">
                            <div class=\"alert alert-danger\" role=\"alert\">
                                Choix d'options incomplet
                            </div>
                        </div>
                        ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 33, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 34
                echo "                            <div id=\"popup-error\" style=\"width: 100%\">
                                <div class=\"alert alert-danger\" role=\"alert\">
                                    ";
                // line 36
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "
                                </div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 40, $this->source); })()), "promotion", [], "any", false, false, false, 40), "parcour", [], "any", false, false, false, 40), "blocs", [], "any", false, false, false, 40));
            foreach ($context['_seq'] as $context["_key"] => $context["bloc"]) {
                // line 41
                echo "                            <div class=\"bloc-container\">
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
                    echo "                                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bloc"], "ueOptionalToChose", [], "any", false, false, false, 47), "html", null, true);
                    echo "
                                            ";
                } else {
                    // line 49
                    echo "                                                0
                                            ";
                }
                // line 51
                echo "                                        </span>/
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
                    echo "                                        <div class=\"bloc bloc-ue\">
                                            <span>";
                    // line 58
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ue"], "name", [], "any", false, false, false, 58), "html", null, true);
                    echo "</span>
                                            ";
                    // line 59
                    if ((twig_get_attribute($this->env, $this->source, $context["ue"], "status", [], "any", false, false, false, 59) == 1)) {
                        // line 60
                        echo "                                                <input type=\"checkbox\" value=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ue"], "id", [], "any", false, false, false, 60), "html", null, true);
                        echo "\" class=\"input-ue\" name=\"choices[]\" ";
                        if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["ue"], "id", [], "any", false, false, false, 60), (isset($context["currentChoice"]) || array_key_exists("currentChoice", $context) ? $context["currentChoice"] : (function () { throw new RuntimeError('Variable "currentChoice" does not exist.', 60, $this->source); })()))) {
                            echo "checked";
                        }
                        echo ">
                                            ";
                    }
                    // line 62
                    echo "                                        </div>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 64
                echo "                                </div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bloc'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "
                        <button class=\"btn btn-primary btn-save-choice\" id=\"btn-choice\" type=\"submit\">Enregistrer</button>
                    </form>
                </div>
            </section>
        ";
        } else {
            // line 73
            echo "            <div class=\"pagetitle\">
                <h1>Choix d'options</h1>
            </div>
            <div> Vous n'êtes toujours pas enregistrer dans un parcour, Demandez de l'aide auprès de votre responsable du master</div>
        ";
        }
        // line 78
        echo "    </main>
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
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 112, $this->source); })()), "promotion", [], "any", false, false, false, 112), "parcour", [], "any", false, false, false, 112), "blocs", [], "any", false, false, false, 112)), "html", null, true);
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
        return "etudiant/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 112,  296 => 80,  286 => 79,  273 => 11,  263 => 10,  253 => 79,  250 => 78,  243 => 73,  235 => 67,  227 => 64,  220 => 62,  210 => 60,  208 => 59,  204 => 58,  201 => 57,  197 => 56,  190 => 52,  187 => 51,  183 => 49,  177 => 47,  175 => 46,  169 => 43,  163 => 42,  160 => 41,  155 => 40,  145 => 36,  141 => 34,  137 => 33,  128 => 27,  120 => 22,  111 => 18,  107 => 16,  105 => 15,  101 => 13,  98 => 10,  88 => 9,  76 => 5,  71 => 4,  61 => 3,  38 => 1,);
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
    <main id=\"main\" class=\"main\" style=\"position: relative\">

        {% if student %}
            <div class=\"pagetitle\">
                <h1>Choix d'options</h1>
                <h1>Master-{{ student.promotion.anneeMaster }} {{ student.promotion.parcour.name }}</h1>
            </div>
            <div class=\"limit-date\">
                <h1>Date limite pour faire votre choix</h1>
                <h1>{{ student.promotion.dateLimiteChoixOptions|date('d/m/Y h:i') }}</h1>
            </div>
            <section class=\"section-content\">
                <div class=\"row\">

                    <form id=\"choice-form\" action=\"{{ path('save_choice') }}\" method=\"post\">
                        <div id=\"popup-error\" style=\"display: none; width: 100%\">
                            <div class=\"alert alert-danger\" role=\"alert\">
                                Choix d'options incomplet
                            </div>
                        </div>
                        {% for error in errors %}
                            <div id=\"popup-error\" style=\"width: 100%\">
                                <div class=\"alert alert-danger\" role=\"alert\">
                                    {{ error }}
                                </div>
                            </div>
                        {% endfor %}
                        {% for bloc in student.promotion.parcour.blocs %}
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
                                            {% if ue.status == 1 %}
                                                <input type=\"checkbox\" value=\"{{ ue.id }}\" class=\"input-ue\" name=\"choices[]\" {% if ue.id in currentChoice %}checked{% endif %}>
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
        {% else %}
            <div class=\"pagetitle\">
                <h1>Choix d'options</h1>
            </div>
            <div> Vous n'êtes toujours pas enregistrer dans un parcour, Demandez de l'aide auprès de votre responsable du master</div>
        {% endif %}
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
                if(completeChoiceBloc != parseInt(\"{{ student.promotion.parcour.blocs|length }}\")){
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
", "etudiant/index.html.twig", "/Users/etudiant/Desktop/prjthematique/choix-d-options/choix_options_project/templates/etudiant/index.html.twig");
    }
}
