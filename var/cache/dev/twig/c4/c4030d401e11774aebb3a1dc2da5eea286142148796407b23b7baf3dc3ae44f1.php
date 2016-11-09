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
        $__internal_26575dfa2369b443c781631bcff8d2b755013b3cbfa863eeffcfbb4c811ebb6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26575dfa2369b443c781631bcff8d2b755013b3cbfa863eeffcfbb4c811ebb6a->enter($__internal_26575dfa2369b443c781631bcff8d2b755013b3cbfa863eeffcfbb4c811ebb6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26575dfa2369b443c781631bcff8d2b755013b3cbfa863eeffcfbb4c811ebb6a->leave($__internal_26575dfa2369b443c781631bcff8d2b755013b3cbfa863eeffcfbb4c811ebb6a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_eac6079b7cbf7bfe8bf402f979941cbb65142bf0780d7df91e70e6f2ddf111a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eac6079b7cbf7bfe8bf402f979941cbb65142bf0780d7df91e70e6f2ddf111a6->enter($__internal_eac6079b7cbf7bfe8bf402f979941cbb65142bf0780d7df91e70e6f2ddf111a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_eac6079b7cbf7bfe8bf402f979941cbb65142bf0780d7df91e70e6f2ddf111a6->leave($__internal_eac6079b7cbf7bfe8bf402f979941cbb65142bf0780d7df91e70e6f2ddf111a6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fa08bca934848c3128c395a6a15cbd817d5aeed173200b0c6ed4ef1aa95eee8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa08bca934848c3128c395a6a15cbd817d5aeed173200b0c6ed4ef1aa95eee8a->enter($__internal_fa08bca934848c3128c395a6a15cbd817d5aeed173200b0c6ed4ef1aa95eee8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fa08bca934848c3128c395a6a15cbd817d5aeed173200b0c6ed4ef1aa95eee8a->leave($__internal_fa08bca934848c3128c395a6a15cbd817d5aeed173200b0c6ed4ef1aa95eee8a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_35cd082f8e73d9e42ce6b0889d00d40633730b56c4e5c687a04c29d91dbfb918 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35cd082f8e73d9e42ce6b0889d00d40633730b56c4e5c687a04c29d91dbfb918->enter($__internal_35cd082f8e73d9e42ce6b0889d00d40633730b56c4e5c687a04c29d91dbfb918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_35cd082f8e73d9e42ce6b0889d00d40633730b56c4e5c687a04c29d91dbfb918->leave($__internal_35cd082f8e73d9e42ce6b0889d00d40633730b56c4e5c687a04c29d91dbfb918_prof);

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
