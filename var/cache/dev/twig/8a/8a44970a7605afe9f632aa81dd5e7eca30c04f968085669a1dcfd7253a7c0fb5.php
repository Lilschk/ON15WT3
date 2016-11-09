<?php

/* ::sidebar.html.twig */
class __TwigTemplate_f6e921708ea1c6819b77918003527978ce1765f5f7771b1585e7413d4d6ed307 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_beeba03b8692d4811644d1503625c79e93c67095932818299f8cff58b2fe6db8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beeba03b8692d4811644d1503625c79e93c67095932818299f8cff58b2fe6db8->enter($__internal_beeba03b8692d4811644d1503625c79e93c67095932818299f8cff58b2fe6db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::sidebar.html.twig"));

        // line 1
        echo "<div class=\"col-sm-3 col-sm-offset-1 page-sidebar\">
    <div class=\"sidebar-module sidebar-module-inset\">
        <h4>Über diese Seite</h4>
        <p>Dies ist die offizielle Symfony WebTech3 Testseite.</p>
    </div>
    <div class=\"sidebar-module\">
        <h4>Beispiele</h4>
        <ol class=\"list-unstyled\">
            <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("beispiel");
        echo "\">Beispiel ohne Template</a></li>
            <li><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("beispiel_template");
        echo "\">Beispiel mit Template</a></li>
        </ol>
    </div>
    <div class=\"sidebar-module\">
        <h4>Social Media</h4>
        <ol class=\"list-unstyled\">
            <li><a href=\"#\">Google</a></li>
            <li><a href=\"#\">Twitter</a></li>
            <li><a href=\"#\">Facebook</a></li>
            <li><a href=\"#\">...</a></li>
        </ol>
    </div>
</div>";
        
        $__internal_beeba03b8692d4811644d1503625c79e93c67095932818299f8cff58b2fe6db8->leave($__internal_beeba03b8692d4811644d1503625c79e93c67095932818299f8cff58b2fe6db8_prof);

    }

    public function getTemplateName()
    {
        return "::sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 10,  32 => 9,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"col-sm-3 col-sm-offset-1 page-sidebar\">
    <div class=\"sidebar-module sidebar-module-inset\">
        <h4>Über diese Seite</h4>
        <p>Dies ist die offizielle Symfony WebTech3 Testseite.</p>
    </div>
    <div class=\"sidebar-module\">
        <h4>Beispiele</h4>
        <ol class=\"list-unstyled\">
            <li><a href=\"{{ path('beispiel') }}\">Beispiel ohne Template</a></li>
            <li><a href=\"{{ path('beispiel_template') }}\">Beispiel mit Template</a></li>
        </ol>
    </div>
    <div class=\"sidebar-module\">
        <h4>Social Media</h4>
        <ol class=\"list-unstyled\">
            <li><a href=\"#\">Google</a></li>
            <li><a href=\"#\">Twitter</a></li>
            <li><a href=\"#\">Facebook</a></li>
            <li><a href=\"#\">...</a></li>
        </ol>
    </div>
</div>", "::sidebar.html.twig", "/Users/lilikovac/Documents/WT3_App/my_project/app/Resources/views/sidebar.html.twig");
    }
}
