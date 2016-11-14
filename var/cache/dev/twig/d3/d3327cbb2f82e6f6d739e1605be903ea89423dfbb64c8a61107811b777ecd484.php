<?php

/* security/logout.html.twig */
class __TwigTemplate_ccee4213eee4a17bc67922129ad09805760e7234291132c6a8eb93579e789bdc extends Twig_Template
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
        $__internal_fc94be5b17934bddce3fcc973f21d0a3e0b5083cc312df66f42713803b5e932c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc94be5b17934bddce3fcc973f21d0a3e0b5083cc312df66f42713803b5e932c->enter($__internal_fc94be5b17934bddce3fcc973f21d0a3e0b5083cc312df66f42713803b5e932c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/logout.html.twig"));

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
        
        $__internal_fc94be5b17934bddce3fcc973f21d0a3e0b5083cc312df66f42713803b5e932c->leave($__internal_fc94be5b17934bddce3fcc973f21d0a3e0b5083cc312df66f42713803b5e932c_prof);

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
    </div>", "security/logout.html.twig", "/Users/lilikovac/Documents/WT3_App/my_project/app/Resources/views/security/logout.html.twig");
    }
}
