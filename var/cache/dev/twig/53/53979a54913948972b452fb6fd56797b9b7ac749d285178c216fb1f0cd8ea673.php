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
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c4423c38733c889b382f83dc0aaffd9a6859b677007ee7e77fa47aefc3b2a128 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4423c38733c889b382f83dc0aaffd9a6859b677007ee7e77fa47aefc3b2a128->enter($__internal_c4423c38733c889b382f83dc0aaffd9a6859b677007ee7e77fa47aefc3b2a128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        $this->loadTemplate("::basic.html.twig", "base.html.twig", 6)->display($context);
        // line 7
        echo "    </head>

    <body>
        ";
        // line 10
        $this->loadTemplate("::navigation.html.twig", "base.html.twig", 10)->display($context);
        // line 11
        echo "
        <div class=\"container\">
            <div class=\"page-header\">
                <h1 class=\"display-1\">Gästebuch</h1>
                <p class=\"lead page-description\">Schreibe einen Beitrag.</p>
            </div>
            <a class=\"btn btn-primary btn-lg btn-block\" href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" role=\"button\">Einloggen!</a>


                    ";
        // line 20
        $this->displayBlock('body', $context, $blocks);
        // line 21
        echo "

        <footer class=\"page-footer\">

            <p>
                <a href=\"#\">Back to top</a>
            </p>
        </footer>

        ";
        // line 30
        $this->displayBlock('javascripts', $context, $blocks);
        // line 31
        echo "    </body>
</html>
";
        
        $__internal_c4423c38733c889b382f83dc0aaffd9a6859b677007ee7e77fa47aefc3b2a128->leave($__internal_c4423c38733c889b382f83dc0aaffd9a6859b677007ee7e77fa47aefc3b2a128_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3349e4c9b591eb5ab5313779704857ee4bdea090add9676d6bd51a6fc060cead = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3349e4c9b591eb5ab5313779704857ee4bdea090add9676d6bd51a6fc060cead->enter($__internal_3349e4c9b591eb5ab5313779704857ee4bdea090add9676d6bd51a6fc060cead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";
        
        $__internal_3349e4c9b591eb5ab5313779704857ee4bdea090add9676d6bd51a6fc060cead->leave($__internal_3349e4c9b591eb5ab5313779704857ee4bdea090add9676d6bd51a6fc060cead_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d56c845fd294c2130077fc0ad3a39581d0aa7a3dc502993df80235ace4eda56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d56c845fd294c2130077fc0ad3a39581d0aa7a3dc502993df80235ace4eda56->enter($__internal_6d56c845fd294c2130077fc0ad3a39581d0aa7a3dc502993df80235ace4eda56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_6d56c845fd294c2130077fc0ad3a39581d0aa7a3dc502993df80235ace4eda56->leave($__internal_6d56c845fd294c2130077fc0ad3a39581d0aa7a3dc502993df80235ace4eda56_prof);

    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_785d2424831f586f8c498584a346c759972c70f00895c5349bebef52fd6618f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_785d2424831f586f8c498584a346c759972c70f00895c5349bebef52fd6618f3->enter($__internal_785d2424831f586f8c498584a346c759972c70f00895c5349bebef52fd6618f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_785d2424831f586f8c498584a346c759972c70f00895c5349bebef52fd6618f3->leave($__internal_785d2424831f586f8c498584a346c759972c70f00895c5349bebef52fd6618f3_prof);

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
        return array (  105 => 30,  94 => 20,  82 => 5,  73 => 31,  71 => 30,  60 => 21,  58 => 20,  52 => 17,  44 => 11,  42 => 10,  37 => 7,  35 => 6,  31 => 5,  25 => 1,);
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
        {%  include '::basic.html.twig' %}
    </head>

    <body>
        {% include '::navigation.html.twig' %}

        <div class=\"container\">
            <div class=\"page-header\">
                <h1 class=\"display-1\">Gästebuch</h1>
                <p class=\"lead page-description\">Schreibe einen Beitrag.</p>
            </div>
            <a class=\"btn btn-primary btn-lg btn-block\" href=\"{{ path('login') }}\" role=\"button\">Einloggen!</a>


                    {% block body %}{% endblock %}


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
