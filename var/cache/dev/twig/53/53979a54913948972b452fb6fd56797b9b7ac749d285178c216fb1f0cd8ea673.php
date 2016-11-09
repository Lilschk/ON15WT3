<?php

/* base.html.twig */
class __TwigTemplate_e2c74115363e2dba7850ff361f5322cce7191f69ff02e5bda94fe54db0047d6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7f5e755c899fe7c0ed81e9f325707a5b982da6e20b8c73cad7afc4fddcf0b33a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f5e755c899fe7c0ed81e9f325707a5b982da6e20b8c73cad7afc4fddcf0b33a->enter($__internal_7f5e755c899fe7c0ed81e9f325707a5b982da6e20b8c73cad7afc4fddcf0b33a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <!--<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/application.css"), "html", null, true);
        echo "\">
        <!--<link rel=\"stylesheet\" tyoe=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/normalize.css"), "html", null, true);
        echo "\">-->
    </head>

    <body>
        ";
        // line 14
        $this->loadTemplate("::navigation.html.twig", "base.html.twig", 14)->display($context);
        // line 15
        echo "
        <div class=\"container\">
            <div class=\"page-header\">
                <h1 class=\"display-1\">Gästebuch</h1>
                <p class=\"lead page-description\">Schreibe einen Beitrag.</p>
            </div>
            <a class=\"btn btn-primary btn-lg btn-block\" href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" role=\"button\">Einloggen!</a>

            <!-- <div class=\"row\">
                <div class=\"col-sm-8 page-main\">
                    ";
        // line 25
        $this->displayBlock('body', $context, $blocks);
        // line 26
        echo "                </div>

                ";
        // line 28
        $this->loadTemplate("::sidebar.html.twig", "base.html.twig", 28)->display($context);
        // line 29
        echo "            </div>
        </div>-->

        <footer class=\"page-footer\">

            <p>
                <a href=\"#\">Back to top</a>
            </p>
        </footer>

        ";
        // line 39
        $this->displayBlock('javascripts', $context, $blocks);
        // line 40
        echo "    </body>
</html>
";
        
        $__internal_7f5e755c899fe7c0ed81e9f325707a5b982da6e20b8c73cad7afc4fddcf0b33a->leave($__internal_7f5e755c899fe7c0ed81e9f325707a5b982da6e20b8c73cad7afc4fddcf0b33a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_baad8d4ddf82fb535069a7a999b63a2eb8db5c999d5c73db3f24e3626b829c2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baad8d4ddf82fb535069a7a999b63a2eb8db5c999d5c73db3f24e3626b829c2e->enter($__internal_baad8d4ddf82fb535069a7a999b63a2eb8db5c999d5c73db3f24e3626b829c2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";
        
        $__internal_baad8d4ddf82fb535069a7a999b63a2eb8db5c999d5c73db3f24e3626b829c2e->leave($__internal_baad8d4ddf82fb535069a7a999b63a2eb8db5c999d5c73db3f24e3626b829c2e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b172bce7cabe80064f3d296585350df35da4bd99ed49bd020de3da0f3e37b1da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b172bce7cabe80064f3d296585350df35da4bd99ed49bd020de3da0f3e37b1da->enter($__internal_b172bce7cabe80064f3d296585350df35da4bd99ed49bd020de3da0f3e37b1da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_b172bce7cabe80064f3d296585350df35da4bd99ed49bd020de3da0f3e37b1da->leave($__internal_b172bce7cabe80064f3d296585350df35da4bd99ed49bd020de3da0f3e37b1da_prof);

    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d3308b23d27ca2acebeaed5b78b7043d053b7ebe808ec0c35c813a923b64119 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d3308b23d27ca2acebeaed5b78b7043d053b7ebe808ec0c35c813a923b64119->enter($__internal_0d3308b23d27ca2acebeaed5b78b7043d053b7ebe808ec0c35c813a923b64119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_0d3308b23d27ca2acebeaed5b78b7043d053b7ebe808ec0c35c813a923b64119->leave($__internal_0d3308b23d27ca2acebeaed5b78b7043d053b7ebe808ec0c35c813a923b64119_prof);

    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7972f9e1316f27e4170221b7c254d7e0bc1d5f040ef92ff92234b84a46e661ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7972f9e1316f27e4170221b7c254d7e0bc1d5f040ef92ff92234b84a46e661ad->enter($__internal_7972f9e1316f27e4170221b7c254d7e0bc1d5f040ef92ff92234b84a46e661ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_7972f9e1316f27e4170221b7c254d7e0bc1d5f040ef92ff92234b84a46e661ad->leave($__internal_7972f9e1316f27e4170221b7c254d7e0bc1d5f040ef92ff92234b84a46e661ad_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 39,  129 => 25,  118 => 6,  106 => 5,  97 => 40,  95 => 39,  83 => 29,  81 => 28,  77 => 26,  75 => 25,  68 => 21,  60 => 15,  58 => 14,  51 => 10,  47 => 9,  43 => 8,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <!--<link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('lib/bootstrap/css/bootstrap.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/application.css') }}\">
        <!--<link rel=\"stylesheet\" tyoe=\"text/css\" href=\"{{ asset('lib/normalize.css') }}\">-->
    </head>

    <body>
        {% include '::navigation.html.twig' %}

        <div class=\"container\">
            <div class=\"page-header\">
                <h1 class=\"display-1\">Gästebuch</h1>
                <p class=\"lead page-description\">Schreibe einen Beitrag.</p>
            </div>
            <a class=\"btn btn-primary btn-lg btn-block\" href=\"{{ path('login') }}\" role=\"button\">Einloggen!</a>

            <!-- <div class=\"row\">
                <div class=\"col-sm-8 page-main\">
                    {% block body %}{% endblock %}
                </div>

                {% include '::sidebar.html.twig' %}
            </div>
        </div>-->

        <footer class=\"page-footer\">

            <p>
                <a href=\"#\">Back to top</a>
            </p>
        </footer>

        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/lilikovac/Documents/WT3_App/my_project/app/Resources/views/base.html.twig");
    }
}
