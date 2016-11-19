<?php

/* base.html.twig */
class __TwigTemplate_e2c74115363e2dba7850ff361f5322cce7191f69ff02e5bda94fe54db0047d6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_706b60e5433411c349b306435f538ffdfbedc77ae91ff611850686eb6d7a8044 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_706b60e5433411c349b306435f538ffdfbedc77ae91ff611850686eb6d7a8044->enter($__internal_706b60e5433411c349b306435f538ffdfbedc77ae91ff611850686eb6d7a8044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "
        ";
        // line 2
        $this->loadTemplate("::basic.html.twig", "base.html.twig", 2)->display($context);
        // line 3
        echo "

    <body>
        ";
        // line 6
        $this->loadTemplate("::navigation.html.twig", "base.html.twig", 6)->display($context);
        // line 7
        echo "
        <div class=\"container\">
            <div class=\"page-header\">
                <h1 class=\"display-1\">Gästebuch</h1>
                <p class=\"lead page-description\">Schreibe einen Beitrag.</p>
            </div>
            <a class=\"btn btn-primary btn-lg btn-block\" href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" role=\"button\">Einloggen!</a>


                    ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "

";
        
        $__internal_706b60e5433411c349b306435f538ffdfbedc77ae91ff611850686eb6d7a8044->leave($__internal_706b60e5433411c349b306435f538ffdfbedc77ae91ff611850686eb6d7a8044_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f85fba39972aa30efc567fabf84a41ab07ce6a567973339d0a4586424c15c0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f85fba39972aa30efc567fabf84a41ab07ce6a567973339d0a4586424c15c0a->enter($__internal_0f85fba39972aa30efc567fabf84a41ab07ce6a567973339d0a4586424c15c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_0f85fba39972aa30efc567fabf84a41ab07ce6a567973339d0a4586424c15c0a->leave($__internal_0f85fba39972aa30efc567fabf84a41ab07ce6a567973339d0a4586424c15c0a_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 16,  51 => 17,  49 => 16,  43 => 13,  35 => 7,  33 => 6,  28 => 3,  26 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
        {%  include '::basic.html.twig' %}


    <body>
        {% include '::navigation.html.twig' %}

        <div class=\"container\">
            <div class=\"page-header\">
                <h1 class=\"display-1\">Gästebuch</h1>
                <p class=\"lead page-description\">Schreibe einen Beitrag.</p>
            </div>
            <a class=\"btn btn-primary btn-lg btn-block\" href=\"{{ path('login') }}\" role=\"button\">Einloggen!</a>


                    {% block body %}{% endblock %}


", "base.html.twig", "/Users/lilikovac/Documents/WT3_App/my_project/app/Resources/views/base.html.twig");
    }
}
