<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4e744601e946c0a821c91913a6083ad64a5b90878a95db38e1ae081645a46127 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5919ccb8e3cd8d569530d6c975625c0b3b2a29033116a1cff3c4672713e5f342 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5919ccb8e3cd8d569530d6c975625c0b3b2a29033116a1cff3c4672713e5f342->enter($__internal_5919ccb8e3cd8d569530d6c975625c0b3b2a29033116a1cff3c4672713e5f342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5919ccb8e3cd8d569530d6c975625c0b3b2a29033116a1cff3c4672713e5f342->leave($__internal_5919ccb8e3cd8d569530d6c975625c0b3b2a29033116a1cff3c4672713e5f342_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_75373e842389c0163b0d4a6a6ea7b19569aa7d231a6aafa3347552bc204ca2dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75373e842389c0163b0d4a6a6ea7b19569aa7d231a6aafa3347552bc204ca2dd->enter($__internal_75373e842389c0163b0d4a6a6ea7b19569aa7d231a6aafa3347552bc204ca2dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_75373e842389c0163b0d4a6a6ea7b19569aa7d231a6aafa3347552bc204ca2dd->leave($__internal_75373e842389c0163b0d4a6a6ea7b19569aa7d231a6aafa3347552bc204ca2dd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a874c7ae3a1b4a98873174064b93b57ef926cf4a04b3ec04a138a46b9238cf70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a874c7ae3a1b4a98873174064b93b57ef926cf4a04b3ec04a138a46b9238cf70->enter($__internal_a874c7ae3a1b4a98873174064b93b57ef926cf4a04b3ec04a138a46b9238cf70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a874c7ae3a1b4a98873174064b93b57ef926cf4a04b3ec04a138a46b9238cf70->leave($__internal_a874c7ae3a1b4a98873174064b93b57ef926cf4a04b3ec04a138a46b9238cf70_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_861801b8c345a0790f6121113be10f615b9a4444d553e81e3b7eac2a4d5db7b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_861801b8c345a0790f6121113be10f615b9a4444d553e81e3b7eac2a4d5db7b7->enter($__internal_861801b8c345a0790f6121113be10f615b9a4444d553e81e3b7eac2a4d5db7b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_861801b8c345a0790f6121113be10f615b9a4444d553e81e3b7eac2a4d5db7b7->leave($__internal_861801b8c345a0790f6121113be10f615b9a4444d553e81e3b7eac2a4d5db7b7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/lilikovac/Documents/WT3_App/my_project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
