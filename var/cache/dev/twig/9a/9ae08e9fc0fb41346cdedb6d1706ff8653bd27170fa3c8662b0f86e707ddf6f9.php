<?php

/* ::basic.html.twig */
class __TwigTemplate_b9e4713e82cbd8f81877dcce235144a0beaa68e81bffb570943acc5074f776bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d90c726b569b3cbe075cdfe04e6c984958e2f81a630c59d52f2e549859c1b10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d90c726b569b3cbe075cdfe04e6c984958e2f81a630c59d52f2e549859c1b10->enter($__internal_3d90c726b569b3cbe075cdfe04e6c984958e2f81a630c59d52f2e549859c1b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::basic.html.twig"));

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
        echo "    <!--<link rel=\"icon\" type=\"image/x-icon\" href=\"";
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
</head>";
        
        $__internal_3d90c726b569b3cbe075cdfe04e6c984958e2f81a630c59d52f2e549859c1b10->leave($__internal_3d90c726b569b3cbe075cdfe04e6c984958e2f81a630c59d52f2e549859c1b10_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9ee19c0378d2277f3266f7f8698a2cab45281fd4e17830bd0d0425c9c3d07190 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ee19c0378d2277f3266f7f8698a2cab45281fd4e17830bd0d0425c9c3d07190->enter($__internal_9ee19c0378d2277f3266f7f8698a2cab45281fd4e17830bd0d0425c9c3d07190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::basic.html.twig"));

        echo "Welcome!";
        
        $__internal_9ee19c0378d2277f3266f7f8698a2cab45281fd4e17830bd0d0425c9c3d07190->leave($__internal_9ee19c0378d2277f3266f7f8698a2cab45281fd4e17830bd0d0425c9c3d07190_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a5f2395d3ab055581a728374c6c3b265d51f3c3d0010a15911e53c469d3589db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5f2395d3ab055581a728374c6c3b265d51f3c3d0010a15911e53c469d3589db->enter($__internal_a5f2395d3ab055581a728374c6c3b265d51f3c3d0010a15911e53c469d3589db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::basic.html.twig"));

        
        $__internal_a5f2395d3ab055581a728374c6c3b265d51f3c3d0010a15911e53c469d3589db->leave($__internal_a5f2395d3ab055581a728374c6c3b265d51f3c3d0010a15911e53c469d3589db_prof);

    }

    public function getTemplateName()
    {
        return "::basic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 6,  58 => 5,  49 => 10,  45 => 9,  41 => 8,  36 => 7,  34 => 6,  30 => 5,  24 => 1,);
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
</head>", "::basic.html.twig", "/Users/lilikovac/Documents/WT3_App/my_project/app/Resources/views/basic.html.twig");
    }
}
