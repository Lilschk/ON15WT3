<?php

/* index.html.twig */
class __TwigTemplate_634697d26bf6ecca4b77c3863711bb3d694a85ca7cf2c6a48bb023dd49b58eaa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_abb41c15e6fb37fd68f7ff66b4cd5c689e5eef9400c3033793adfdcda43669ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abb41c15e6fb37fd68f7ff66b4cd5c689e5eef9400c3033793adfdcda43669ea->enter($__internal_abb41c15e6fb37fd68f7ff66b4cd5c689e5eef9400c3033793adfdcda43669ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abb41c15e6fb37fd68f7ff66b4cd5c689e5eef9400c3033793adfdcda43669ea->leave($__internal_abb41c15e6fb37fd68f7ff66b4cd5c689e5eef9400c3033793adfdcda43669ea_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b6e2dec3a28e4fe8d3906acc758f7e766fcca90e38b6f9ee6adb1ad719402a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b6e2dec3a28e4fe8d3906acc758f7e766fcca90e38b6f9ee6adb1ad719402a0->enter($__internal_7b6e2dec3a28e4fe8d3906acc758f7e766fcca90e38b6f9ee6adb1ad719402a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "index.html.twig"));

        // line 4
        echo "    Hello World
";
        
        $__internal_7b6e2dec3a28e4fe8d3906acc758f7e766fcca90e38b6f9ee6adb1ad719402a0->leave($__internal_7b6e2dec3a28e4fe8d3906acc758f7e766fcca90e38b6f9ee6adb1ad719402a0_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    Hello World
{% endblock %}", "index.html.twig", "/Users/lilikovac/Documents/WT3_App/my_project/app/Resources/views/index.html.twig");
    }
}
