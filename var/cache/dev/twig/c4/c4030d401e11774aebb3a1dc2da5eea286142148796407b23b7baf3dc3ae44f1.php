<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_897b51b129b23368de8fe58a6fe96aadf5466c4eb2c7fa9147c55dc0773c8b65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4eca4d966b5620a968fbcdb0bc72ea8863f625464979512055ed0058c5e2833a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4eca4d966b5620a968fbcdb0bc72ea8863f625464979512055ed0058c5e2833a->enter($__internal_4eca4d966b5620a968fbcdb0bc72ea8863f625464979512055ed0058c5e2833a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4eca4d966b5620a968fbcdb0bc72ea8863f625464979512055ed0058c5e2833a->leave($__internal_4eca4d966b5620a968fbcdb0bc72ea8863f625464979512055ed0058c5e2833a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3b174c50d98a74613208570d2a7fea9a71dbdb7128ae653e5a5b3456085c0cce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b174c50d98a74613208570d2a7fea9a71dbdb7128ae653e5a5b3456085c0cce->enter($__internal_3b174c50d98a74613208570d2a7fea9a71dbdb7128ae653e5a5b3456085c0cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_3b174c50d98a74613208570d2a7fea9a71dbdb7128ae653e5a5b3456085c0cce->leave($__internal_3b174c50d98a74613208570d2a7fea9a71dbdb7128ae653e5a5b3456085c0cce_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8bfa585a1c7289c3714312d02697a4b668825ae28e387a21ccdef2dde5f84ae1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bfa585a1c7289c3714312d02697a4b668825ae28e387a21ccdef2dde5f84ae1->enter($__internal_8bfa585a1c7289c3714312d02697a4b668825ae28e387a21ccdef2dde5f84ae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8bfa585a1c7289c3714312d02697a4b668825ae28e387a21ccdef2dde5f84ae1->leave($__internal_8bfa585a1c7289c3714312d02697a4b668825ae28e387a21ccdef2dde5f84ae1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_430b359fe75e43cd3549ccccf5aca44d77a1a5cd9619571c36d7faf88b31f8d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_430b359fe75e43cd3549ccccf5aca44d77a1a5cd9619571c36d7faf88b31f8d8->enter($__internal_430b359fe75e43cd3549ccccf5aca44d77a1a5cd9619571c36d7faf88b31f8d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_430b359fe75e43cd3549ccccf5aca44d77a1a5cd9619571c36d7faf88b31f8d8->leave($__internal_430b359fe75e43cd3549ccccf5aca44d77a1a5cd9619571c36d7faf88b31f8d8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/lilikovac/Documents/WT3_App/my_project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
