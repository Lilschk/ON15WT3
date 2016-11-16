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
        $__internal_e138cfa09f3f43b1117625453ee8068d9e9f24158ab7f1ce6c67dbb8411fe11e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e138cfa09f3f43b1117625453ee8068d9e9f24158ab7f1ce6c67dbb8411fe11e->enter($__internal_e138cfa09f3f43b1117625453ee8068d9e9f24158ab7f1ce6c67dbb8411fe11e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e138cfa09f3f43b1117625453ee8068d9e9f24158ab7f1ce6c67dbb8411fe11e->leave($__internal_e138cfa09f3f43b1117625453ee8068d9e9f24158ab7f1ce6c67dbb8411fe11e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6abde7ae0583d590fba2f39f1ed192444553e365ac5bb77dd33eaf425cc86e5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6abde7ae0583d590fba2f39f1ed192444553e365ac5bb77dd33eaf425cc86e5e->enter($__internal_6abde7ae0583d590fba2f39f1ed192444553e365ac5bb77dd33eaf425cc86e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_6abde7ae0583d590fba2f39f1ed192444553e365ac5bb77dd33eaf425cc86e5e->leave($__internal_6abde7ae0583d590fba2f39f1ed192444553e365ac5bb77dd33eaf425cc86e5e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e59f592d014708ea295f22906f5069495b55b9ca8f220035009b196f1fc1b3cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e59f592d014708ea295f22906f5069495b55b9ca8f220035009b196f1fc1b3cc->enter($__internal_e59f592d014708ea295f22906f5069495b55b9ca8f220035009b196f1fc1b3cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e59f592d014708ea295f22906f5069495b55b9ca8f220035009b196f1fc1b3cc->leave($__internal_e59f592d014708ea295f22906f5069495b55b9ca8f220035009b196f1fc1b3cc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2311448a6e692088738c2c6b18cfdd6cb02ceb1f15a4b1483cd65e2fd79c050b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2311448a6e692088738c2c6b18cfdd6cb02ceb1f15a4b1483cd65e2fd79c050b->enter($__internal_2311448a6e692088738c2c6b18cfdd6cb02ceb1f15a4b1483cd65e2fd79c050b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2311448a6e692088738c2c6b18cfdd6cb02ceb1f15a4b1483cd65e2fd79c050b->leave($__internal_2311448a6e692088738c2c6b18cfdd6cb02ceb1f15a4b1483cd65e2fd79c050b_prof);

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
