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
        $__internal_bf6d0f67a72f08c86e8f32371d11bb46eaec99b9be31c893fcb4bf4381d7b80a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf6d0f67a72f08c86e8f32371d11bb46eaec99b9be31c893fcb4bf4381d7b80a->enter($__internal_bf6d0f67a72f08c86e8f32371d11bb46eaec99b9be31c893fcb4bf4381d7b80a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf6d0f67a72f08c86e8f32371d11bb46eaec99b9be31c893fcb4bf4381d7b80a->leave($__internal_bf6d0f67a72f08c86e8f32371d11bb46eaec99b9be31c893fcb4bf4381d7b80a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9fc3d2f8c5454eec7a0c5e10766c095d2b79888a8cb2e4f879a32dcbf99f6415 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fc3d2f8c5454eec7a0c5e10766c095d2b79888a8cb2e4f879a32dcbf99f6415->enter($__internal_9fc3d2f8c5454eec7a0c5e10766c095d2b79888a8cb2e4f879a32dcbf99f6415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "index.html.twig"));

        // line 4
        echo "    Hello World
";
        
        $__internal_9fc3d2f8c5454eec7a0c5e10766c095d2b79888a8cb2e4f879a32dcbf99f6415->leave($__internal_9fc3d2f8c5454eec7a0c5e10766c095d2b79888a8cb2e4f879a32dcbf99f6415_prof);

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
