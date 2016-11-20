<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_9f2a4416fd7861750b18c4fafb2c2364f9b572492e6e2c965670f75d483e0441 extends Twig_Template
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
        $__internal_8036b7397f0978624c02e6023953840623bac53a3bbd838e0aafcdf40d01a5c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8036b7397f0978624c02e6023953840623bac53a3bbd838e0aafcdf40d01a5c1->enter($__internal_8036b7397f0978624c02e6023953840623bac53a3bbd838e0aafcdf40d01a5c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8036b7397f0978624c02e6023953840623bac53a3bbd838e0aafcdf40d01a5c1->leave($__internal_8036b7397f0978624c02e6023953840623bac53a3bbd838e0aafcdf40d01a5c1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0e4e1f932f400d71a7c5065148c7eb957d7fdc20ae2430f3b2553337c2e48a07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e4e1f932f400d71a7c5065148c7eb957d7fdc20ae2430f3b2553337c2e48a07->enter($__internal_0e4e1f932f400d71a7c5065148c7eb957d7fdc20ae2430f3b2553337c2e48a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_0e4e1f932f400d71a7c5065148c7eb957d7fdc20ae2430f3b2553337c2e48a07->leave($__internal_0e4e1f932f400d71a7c5065148c7eb957d7fdc20ae2430f3b2553337c2e48a07_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b42c330f762cf13f8ae7591a80b9cca08272bd5bd5891901ddab38fe36dd9866 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b42c330f762cf13f8ae7591a80b9cca08272bd5bd5891901ddab38fe36dd9866->enter($__internal_b42c330f762cf13f8ae7591a80b9cca08272bd5bd5891901ddab38fe36dd9866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b42c330f762cf13f8ae7591a80b9cca08272bd5bd5891901ddab38fe36dd9866->leave($__internal_b42c330f762cf13f8ae7591a80b9cca08272bd5bd5891901ddab38fe36dd9866_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_929bfc69be2278d157730587a1c51f0ffd59f49cc02552efc933edf474aa9aa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_929bfc69be2278d157730587a1c51f0ffd59f49cc02552efc933edf474aa9aa3->enter($__internal_929bfc69be2278d157730587a1c51f0ffd59f49cc02552efc933edf474aa9aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_929bfc69be2278d157730587a1c51f0ffd59f49cc02552efc933edf474aa9aa3->leave($__internal_929bfc69be2278d157730587a1c51f0ffd59f49cc02552efc933edf474aa9aa3_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/var/www/public/my_project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
