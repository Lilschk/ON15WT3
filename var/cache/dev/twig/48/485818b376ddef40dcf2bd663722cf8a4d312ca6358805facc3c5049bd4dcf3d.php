<?php

/* security/logout.html.twig */
class __TwigTemplate_f36b3829db6345c9f0732e58e472d658ec28f34955f7bcfa0bab69bb93787204 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_07578c195a4dc7f71842fcae8a359327d28086ce9dd1eb5014699c81b5c0c969 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07578c195a4dc7f71842fcae8a359327d28086ce9dd1eb5014699c81b5c0c969->enter($__internal_07578c195a4dc7f71842fcae8a359327d28086ce9dd1eb5014699c81b5c0c969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/logout.html.twig"));

        // line 1
        $this->loadTemplate("::basic.html.twig", "security/logout.html.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("::navigation.html.twig", "security/logout.html.twig", 2)->display($context);
        // line 3
        echo "<div class=\"container\">
    <div class=\"page-header\">
        <h1 class=\"display-1\">Gästebuch</h1>
        <p class=\"lead page-description\">Du bist Ausgeloggt.</p>
    </div>";
        
        $__internal_07578c195a4dc7f71842fcae8a359327d28086ce9dd1eb5014699c81b5c0c969->leave($__internal_07578c195a4dc7f71842fcae8a359327d28086ce9dd1eb5014699c81b5c0c969_prof);

    }

    public function getTemplateName()
    {
        return "security/logout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '::basic.html.twig' %}
{% include '::navigation.html.twig' %}
<div class=\"container\">
    <div class=\"page-header\">
        <h1 class=\"display-1\">Gästebuch</h1>
        <p class=\"lead page-description\">Du bist Ausgeloggt.</p>
    </div>", "security/logout.html.twig", "/var/www/public/my_project/app/Resources/views/security/logout.html.twig");
    }
}
