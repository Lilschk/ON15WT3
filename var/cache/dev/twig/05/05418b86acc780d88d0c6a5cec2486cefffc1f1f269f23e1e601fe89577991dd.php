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
        $__internal_9a0c9f44af808d295320c830b53dc85eb13a88958a0bbad719a276336de96e33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a0c9f44af808d295320c830b53dc85eb13a88958a0bbad719a276336de96e33->enter($__internal_9a0c9f44af808d295320c830b53dc85eb13a88958a0bbad719a276336de96e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a0c9f44af808d295320c830b53dc85eb13a88958a0bbad719a276336de96e33->leave($__internal_9a0c9f44af808d295320c830b53dc85eb13a88958a0bbad719a276336de96e33_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f42273e892c3cb959798515d50de8179b23a5d3900935a39fe5519fb6b1133ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f42273e892c3cb959798515d50de8179b23a5d3900935a39fe5519fb6b1133ef->enter($__internal_f42273e892c3cb959798515d50de8179b23a5d3900935a39fe5519fb6b1133ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f42273e892c3cb959798515d50de8179b23a5d3900935a39fe5519fb6b1133ef->leave($__internal_f42273e892c3cb959798515d50de8179b23a5d3900935a39fe5519fb6b1133ef_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c434b9439732629141950acfaf908af88c474e64b42f37dfc4a3106e6be95a95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c434b9439732629141950acfaf908af88c474e64b42f37dfc4a3106e6be95a95->enter($__internal_c434b9439732629141950acfaf908af88c474e64b42f37dfc4a3106e6be95a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c434b9439732629141950acfaf908af88c474e64b42f37dfc4a3106e6be95a95->leave($__internal_c434b9439732629141950acfaf908af88c474e64b42f37dfc4a3106e6be95a95_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb0d3965addf4c1e71ce77be439887c306262f486b2430dca9cddd56790938aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb0d3965addf4c1e71ce77be439887c306262f486b2430dca9cddd56790938aa->enter($__internal_cb0d3965addf4c1e71ce77be439887c306262f486b2430dca9cddd56790938aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_cb0d3965addf4c1e71ce77be439887c306262f486b2430dca9cddd56790938aa->leave($__internal_cb0d3965addf4c1e71ce77be439887c306262f486b2430dca9cddd56790938aa_prof);

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
