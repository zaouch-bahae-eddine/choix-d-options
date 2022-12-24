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

/* base.html.twig */
class __TwigTemplate_2e28938bc97b201051005636635acfba extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'header' => [$this, 'block_header'],
            'sidebar' => [$this, 'block_sidebar'],
            'content' => [$this, 'block_content'],
            'script' => [$this, 'block_script'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
        echo "</head>
<body>
    ";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        // line 159
        echo "</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "UPJV - Choix d'options";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        ";
        // line 8
        echo "        <!-- Favicons -->
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon.png"), "html", null, true);
        echo "\" rel=\"icon\">
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/apple-touch-icon.png"), "html", null, true);
        echo "\" rel=\"apple-touch-icon\">

        <!-- Google Fonts -->
        <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\">
        <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

        <!-- Vendor CSS Files -->
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/quill/quill.snow.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/quill/quill.bubble.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/remixicon/remixicon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/simple-datatables/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Template Main CSS File -->
        <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 30
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 31
        echo "        ";
        $this->displayBlock('header', $context, $blocks);
        // line 107
        echo "
        ";
        // line 108
        $this->displayBlock('sidebar', $context, $blocks);
        // line 139
        echo "
        <div id=\"content\">
            ";
        // line 141
        $this->displayBlock('content', $context, $blocks);
        // line 142
        echo "        </div>

        ";
        // line 144
        $this->displayBlock('script', $context, $blocks);
        // line 158
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 31
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 32
        echo "                <!-- ======= Header ======= -->
                <header id=\"header\" class=\"header fixed-top d-flex align-items-center\">

                    <div class=\"d-flex align-items-center justify-content-between\">
                        <a href=\"index.html\" class=\"logo d-flex align-items-center\">
                            <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"\">
                            <span class=\"d-none d-lg-block\">UPJV</span>
                        </a>
                        <i class=\"bi bi-list toggle-sidebar-btn\"></i>
                    </div><!-- End Logo -->

                    <nav class=\"header-nav ms-auto\">
                        <ul class=\"d-flex align-items-center\">

                        <li class=\"nav-item dropdown pe-3\">

                            <a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
                                <img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/profile-img.jpg"), "html", null, true);
        echo "\" alt=\"Profile\" class=\"rounded-circle\">
                                <span class=\"d-none d-md-block dropdown-toggle ps-2\">K. Anderson</span>
                            </a><!-- End Profile Iamge Icon -->

                            <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
                                <li class=\"dropdown-header\">
                                    <h6>Kevin Anderson</h6>
                                    <span>Web Designer</span>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li>
                                    <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
                                        <i class=\"bi bi-person\"></i>
                                        <span>My Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li>
                                    <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
                                        <i class=\"bi bi-gear\"></i>
                                        <span>Account Settings</span>
                                    </a>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li>
                                    <a class=\"dropdown-item d-flex align-items-center\" href=\"pages-faq.html\">
                                        <i class=\"bi bi-question-circle\"></i>
                                        <span>Need Help?</span>
                                    </a>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li>
                                    <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                        <i class=\"bi bi-box-arrow-right\"></i>
                                        <span>Sign Out</span>
                                    </a>
                                </li>

                            </ul><!-- End Profile Dropdown Items -->
                        </li><!-- End Profile Nav -->

                    </ul>
                </nav><!-- End Icons Navigation -->

            </header><!-- End Header -->
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 108
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 109
        echo "            <!-- ======= Sidebar ======= -->
            <aside id=\"sidebar\" class=\"sidebar\">

                <ul class=\"sidebar-nav\" id=\"sidebar-nav\">

                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" href=\"index.html\">
                            <i class=\"bi bi-bank\"></i>
                            <span>Responsables</span>
                        </a>
                    </li><!-- End responsables Nav -->

                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" href=\"#\">
                            <i class=\"bi bi-people-fill\"></i>
                            <span>Etudiants</span>
                        </a>
                    </li><!-- End Etudiants Nav -->
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 128
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_promotion_index");
        echo "\">
                            <i class=\"bi bi-bar-chart-steps\"></i>
                            <span>Promotions</span>
                        </a>
                    </li><!-- End responsables Nav -->


                </ul>

            </aside><!-- End Sidebar-->
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 141
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 144
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 145
        echo "            <!-- Vendor JS Files -->
            <script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/apexcharts/apexcharts.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/chart.js/chart.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/echarts/echarts.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/quill/quill.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/simple-datatables/simple-datatables.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>

            <!-- Template Main JS File -->
            <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  426 => 156,  420 => 153,  416 => 152,  412 => 151,  408 => 150,  404 => 149,  400 => 148,  396 => 147,  392 => 146,  389 => 145,  379 => 144,  361 => 141,  340 => 128,  319 => 109,  309 => 108,  241 => 49,  226 => 37,  219 => 32,  209 => 31,  199 => 158,  197 => 144,  193 => 142,  191 => 141,  187 => 139,  185 => 108,  182 => 107,  179 => 31,  169 => 30,  157 => 26,  151 => 23,  147 => 22,  143 => 21,  139 => 20,  135 => 19,  131 => 18,  127 => 17,  117 => 10,  113 => 9,  110 => 8,  108 => 7,  98 => 6,  79 => 5,  68 => 159,  66 => 30,  62 => 28,  60 => 6,  56 => 5,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}UPJV - Choix d'options{% endblock %}</title>
    {% block stylesheets %}
        {#<link rel=\"stylesheet\" type=\"text/css\" href=\"/css/base.css\"/>#}
        <!-- Favicons -->
        <link href=\"{{ asset('img/favicon.png') }}\" rel=\"icon\">
        <link href=\"{{ asset('img/apple-touch-icon.png') }}\" rel=\"apple-touch-icon\">

        <!-- Google Fonts -->
        <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\">
        <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

        <!-- Vendor CSS Files -->
        <link href=\"{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('vendor/boxicons/css/boxicons.min.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('vendor/quill/quill.snow.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('vendor/quill/quill.bubble.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('vendor/remixicon/remixicon.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('vendor/simple-datatables/style.css') }}\" rel=\"stylesheet\">

        <!-- Template Main CSS File -->
        <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\">
    {% endblock %}
</head>
<body>
    {% block body %}
        {% block header %}
                <!-- ======= Header ======= -->
                <header id=\"header\" class=\"header fixed-top d-flex align-items-center\">

                    <div class=\"d-flex align-items-center justify-content-between\">
                        <a href=\"index.html\" class=\"logo d-flex align-items-center\">
                            <img src=\"{{ asset('img/logo.png') }}\" alt=\"\">
                            <span class=\"d-none d-lg-block\">UPJV</span>
                        </a>
                        <i class=\"bi bi-list toggle-sidebar-btn\"></i>
                    </div><!-- End Logo -->

                    <nav class=\"header-nav ms-auto\">
                        <ul class=\"d-flex align-items-center\">

                        <li class=\"nav-item dropdown pe-3\">

                            <a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
                                <img src=\"{{ asset('img/profile-img.jpg') }}\" alt=\"Profile\" class=\"rounded-circle\">
                                <span class=\"d-none d-md-block dropdown-toggle ps-2\">K. Anderson</span>
                            </a><!-- End Profile Iamge Icon -->

                            <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
                                <li class=\"dropdown-header\">
                                    <h6>Kevin Anderson</h6>
                                    <span>Web Designer</span>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li>
                                    <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
                                        <i class=\"bi bi-person\"></i>
                                        <span>My Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li>
                                    <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
                                        <i class=\"bi bi-gear\"></i>
                                        <span>Account Settings</span>
                                    </a>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li>
                                    <a class=\"dropdown-item d-flex align-items-center\" href=\"pages-faq.html\">
                                        <i class=\"bi bi-question-circle\"></i>
                                        <span>Need Help?</span>
                                    </a>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li>
                                    <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                        <i class=\"bi bi-box-arrow-right\"></i>
                                        <span>Sign Out</span>
                                    </a>
                                </li>

                            </ul><!-- End Profile Dropdown Items -->
                        </li><!-- End Profile Nav -->

                    </ul>
                </nav><!-- End Icons Navigation -->

            </header><!-- End Header -->
        {% endblock %}

        {% block sidebar %}
            <!-- ======= Sidebar ======= -->
            <aside id=\"sidebar\" class=\"sidebar\">

                <ul class=\"sidebar-nav\" id=\"sidebar-nav\">

                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" href=\"index.html\">
                            <i class=\"bi bi-bank\"></i>
                            <span>Responsables</span>
                        </a>
                    </li><!-- End responsables Nav -->

                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" href=\"#\">
                            <i class=\"bi bi-people-fill\"></i>
                            <span>Etudiants</span>
                        </a>
                    </li><!-- End Etudiants Nav -->
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('app_promotion_index') }}\">
                            <i class=\"bi bi-bar-chart-steps\"></i>
                            <span>Promotions</span>
                        </a>
                    </li><!-- End responsables Nav -->


                </ul>

            </aside><!-- End Sidebar-->
        {% endblock %}

        <div id=\"content\">
            {% block content %}{% endblock %}
        </div>

        {% block script %}
            <!-- Vendor JS Files -->
            <script src=\"{{ asset('vendor/apexcharts/apexcharts.min.js') }}\"></script>
            <script src=\"{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
            <script src=\"{{ asset('vendor/chart.js/chart.min.js') }}\"></script>
            <script src=\"{{ asset('vendor/echarts/echarts.min.js') }}\"></script>
            <script src=\"{{ asset('vendor/quill/quill.min.js') }}\"></script>
            <script src=\"{{ asset('vendor/simple-datatables/simple-datatables.js') }}\"></script>
            <script src=\"{{ asset('vendor/tinymce/tinymce.min.js') }}\"></script>
            <script src=\"{{ asset('vendor/php-email-form/validate.js') }}\"></script>

            <!-- Template Main JS File -->
            <script src=\"{{ asset('js/main.js') }}\"></script>
        {% endblock %}
    {% endblock %}
</body>
</html>", "base.html.twig", "C:\\M3\\Choix_option\\choix_options_project\\templates\\base.html.twig");
    }
}
