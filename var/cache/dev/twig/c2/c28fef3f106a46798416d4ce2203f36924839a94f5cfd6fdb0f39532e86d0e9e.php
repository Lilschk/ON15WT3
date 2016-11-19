<?php

/* ::gaestebuch/gaestebuch.html.twig */
class __TwigTemplate_7637c48deda6bf76a68b37bf80fb121dccbbae231ac6b3552e957631ba28abeb extends Twig_Template
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
        $__internal_b80085d67b0e01be0cfe180d8130d00f265e61b45ff2370f073c834f1f304520 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b80085d67b0e01be0cfe180d8130d00f265e61b45ff2370f073c834f1f304520->enter($__internal_b80085d67b0e01be0cfe180d8130d00f265e61b45ff2370f073c834f1f304520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::gaestebuch/gaestebuch.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->loadTemplate("::basic.html.twig", "::gaestebuch/gaestebuch.html.twig", 2)->display($context);
        // line 3
        echo "
<body>
";
        // line 5
        $this->loadTemplate("::navigation.html.twig", "::gaestebuch/gaestebuch.html.twig", 5)->display($context);
        // line 6
        echo "

<div class=\"container\">
    <div class=\"page-header\">
        <h1 class=\"display-1\">Gästebuch</h1>
        <p class=\"lead page-description\">Sie sind eingeloggt.</p>
    </div>
</div>
";
        
        $__internal_b80085d67b0e01be0cfe180d8130d00f265e61b45ff2370f073c834f1f304520->leave($__internal_b80085d67b0e01be0cfe180d8130d00f265e61b45ff2370f073c834f1f304520_prof);

    }

    public function getTemplateName()
    {
        return "::gaestebuch/gaestebuch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 6,  31 => 5,  27 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% include '::basic.html.twig' %}

<body>
{% include '::navigation.html.twig' %}


<div class=\"container\">
    <div class=\"page-header\">
        <h1 class=\"display-1\">Gästebuch</h1>
        <p class=\"lead page-description\">Sie sind eingeloggt.</p>
    </div>
</div>
", "::gaestebuch/gaestebuch.html.twig", "/Users/lilikovac/Documents/WT3_App/my_project/app/Resources/views/gaestebuch/gaestebuch.html.twig");
    }
}
