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
        $__internal_fc2450c9630a589f513228fddfbaf7eeb03958e01a68d42dd0a0f0e1e40a6bd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc2450c9630a589f513228fddfbaf7eeb03958e01a68d42dd0a0f0e1e40a6bd1->enter($__internal_fc2450c9630a589f513228fddfbaf7eeb03958e01a68d42dd0a0f0e1e40a6bd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("guestbook_logged");
        echo "\" role=\"button\">Einloggen!</a>

            <!-- <div class=\"row\">
                <div class=\"col-sm-8 page-main\">
                    ";
        // line 25
        $this->displayBlock('body', $context, $blocks);
        // line 26
        echo "                </div>


            </div>
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
        
        $__internal_fc2450c9630a589f513228fddfbaf7eeb03958e01a68d42dd0a0f0e1e40a6bd1->leave($__internal_fc2450c9630a589f513228fddfbaf7eeb03958e01a68d42dd0a0f0e1e40a6bd1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_975c840adb6b17467fdfa92932ab81063cad6b9a98e66e5bf06b8290727e4526 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_975c840adb6b17467fdfa92932ab81063cad6b9a98e66e5bf06b8290727e4526->enter($__internal_975c840adb6b17467fdfa92932ab81063cad6b9a98e66e5bf06b8290727e4526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";
        
        $__internal_975c840adb6b17467fdfa92932ab81063cad6b9a98e66e5bf06b8290727e4526->leave($__internal_975c840adb6b17467fdfa92932ab81063cad6b9a98e66e5bf06b8290727e4526_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3d90435a162e854cd5eccc807f13598eca28e9f039a14bc36fbfe15d8a76ef16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d90435a162e854cd5eccc807f13598eca28e9f039a14bc36fbfe15d8a76ef16->enter($__internal_3d90435a162e854cd5eccc807f13598eca28e9f039a14bc36fbfe15d8a76ef16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_3d90435a162e854cd5eccc807f13598eca28e9f039a14bc36fbfe15d8a76ef16->leave($__internal_3d90435a162e854cd5eccc807f13598eca28e9f039a14bc36fbfe15d8a76ef16_prof);

    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6970e4cc10d2b0345e558d7b79ddd158e964d7933afaf5060596ff1dcae316e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6970e4cc10d2b0345e558d7b79ddd158e964d7933afaf5060596ff1dcae316e->enter($__internal_f6970e4cc10d2b0345e558d7b79ddd158e964d7933afaf5060596ff1dcae316e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_f6970e4cc10d2b0345e558d7b79ddd158e964d7933afaf5060596ff1dcae316e->leave($__internal_f6970e4cc10d2b0345e558d7b79ddd158e964d7933afaf5060596ff1dcae316e_prof);

    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_74f0d0cbc6e18a1373d2963ba6c4733bd109f4c7ffa2d9930422d50c1051c180 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74f0d0cbc6e18a1373d2963ba6c4733bd109f4c7ffa2d9930422d50c1051c180->enter($__internal_74f0d0cbc6e18a1373d2963ba6c4733bd109f4c7ffa2d9930422d50c1051c180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_74f0d0cbc6e18a1373d2963ba6c4733bd109f4c7ffa2d9930422d50c1051c180->leave($__internal_74f0d0cbc6e18a1373d2963ba6c4733bd109f4c7ffa2d9930422d50c1051c180_prof);

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
        return array (  137 => 39,  126 => 25,  115 => 6,  103 => 5,  94 => 40,  92 => 39,  77 => 26,  75 => 25,  68 => 21,  60 => 15,  58 => 14,  51 => 10,  47 => 9,  43 => 8,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
            <a class=\"btn btn-primary btn-lg btn-block\" href=\"{{ path('guestbook_logged') }}\" role=\"button\">Einloggen!</a>

            <!-- <div class=\"row\">
                <div class=\"col-sm-8 page-main\">
                    {% block body %}{% endblock %}
                </div>


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
