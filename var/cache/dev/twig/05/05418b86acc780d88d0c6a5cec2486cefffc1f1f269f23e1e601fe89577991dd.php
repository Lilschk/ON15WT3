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
        $__internal_1f7ae7c6d94a120ca9441054b28e94ff183ca24785b3e2cb7b37efeff943afd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f7ae7c6d94a120ca9441054b28e94ff183ca24785b3e2cb7b37efeff943afd3->enter($__internal_1f7ae7c6d94a120ca9441054b28e94ff183ca24785b3e2cb7b37efeff943afd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f7ae7c6d94a120ca9441054b28e94ff183ca24785b3e2cb7b37efeff943afd3->leave($__internal_1f7ae7c6d94a120ca9441054b28e94ff183ca24785b3e2cb7b37efeff943afd3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fa8748f3afd8ab02bd9fd7ef2d9a667ff47748aa37edbea1d5182d5d5d446810 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa8748f3afd8ab02bd9fd7ef2d9a667ff47748aa37edbea1d5182d5d5d446810->enter($__internal_fa8748f3afd8ab02bd9fd7ef2d9a667ff47748aa37edbea1d5182d5d5d446810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fa8748f3afd8ab02bd9fd7ef2d9a667ff47748aa37edbea1d5182d5d5d446810->leave($__internal_fa8748f3afd8ab02bd9fd7ef2d9a667ff47748aa37edbea1d5182d5d5d446810_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_803b363f1fa950507e2af313028c01a1ee05bc3a78f3dfc3b39a4f3df4c03ce2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_803b363f1fa950507e2af313028c01a1ee05bc3a78f3dfc3b39a4f3df4c03ce2->enter($__internal_803b363f1fa950507e2af313028c01a1ee05bc3a78f3dfc3b39a4f3df4c03ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_803b363f1fa950507e2af313028c01a1ee05bc3a78f3dfc3b39a4f3df4c03ce2->leave($__internal_803b363f1fa950507e2af313028c01a1ee05bc3a78f3dfc3b39a4f3df4c03ce2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4cecf41cd8d49783002c710a6c216135e91f117d80a3e0731d5be099ee918faf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cecf41cd8d49783002c710a6c216135e91f117d80a3e0731d5be099ee918faf->enter($__internal_4cecf41cd8d49783002c710a6c216135e91f117d80a3e0731d5be099ee918faf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4cecf41cd8d49783002c710a6c216135e91f117d80a3e0731d5be099ee918faf->leave($__internal_4cecf41cd8d49783002c710a6c216135e91f117d80a3e0731d5be099ee918faf_prof);

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
