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
        $__internal_135002128d9d5e22e8353bbcb041e91d6578e8105d31bdd4fcec9733db117dab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_135002128d9d5e22e8353bbcb041e91d6578e8105d31bdd4fcec9733db117dab->enter($__internal_135002128d9d5e22e8353bbcb041e91d6578e8105d31bdd4fcec9733db117dab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_135002128d9d5e22e8353bbcb041e91d6578e8105d31bdd4fcec9733db117dab->leave($__internal_135002128d9d5e22e8353bbcb041e91d6578e8105d31bdd4fcec9733db117dab_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6cf121f5d5f035a290d1c4af37054e2322906499e378f5969657de272ed44896 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cf121f5d5f035a290d1c4af37054e2322906499e378f5969657de272ed44896->enter($__internal_6cf121f5d5f035a290d1c4af37054e2322906499e378f5969657de272ed44896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_6cf121f5d5f035a290d1c4af37054e2322906499e378f5969657de272ed44896->leave($__internal_6cf121f5d5f035a290d1c4af37054e2322906499e378f5969657de272ed44896_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2187c74df2f8767174afa3004d2380af0e1691a7b698ab9478ae255cdc7e735e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2187c74df2f8767174afa3004d2380af0e1691a7b698ab9478ae255cdc7e735e->enter($__internal_2187c74df2f8767174afa3004d2380af0e1691a7b698ab9478ae255cdc7e735e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2187c74df2f8767174afa3004d2380af0e1691a7b698ab9478ae255cdc7e735e->leave($__internal_2187c74df2f8767174afa3004d2380af0e1691a7b698ab9478ae255cdc7e735e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_85f014811afedec01295ce78c32828981aec47266e6ae3349ce29423357e274f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85f014811afedec01295ce78c32828981aec47266e6ae3349ce29423357e274f->enter($__internal_85f014811afedec01295ce78c32828981aec47266e6ae3349ce29423357e274f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_85f014811afedec01295ce78c32828981aec47266e6ae3349ce29423357e274f->leave($__internal_85f014811afedec01295ce78c32828981aec47266e6ae3349ce29423357e274f_prof);

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
