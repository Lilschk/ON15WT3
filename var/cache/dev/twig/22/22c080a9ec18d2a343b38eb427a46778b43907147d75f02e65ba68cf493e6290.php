<?php

/* ::navigation.html.twig */
class __TwigTemplate_b30e6bc3a68958fe960b5ea65bb320e120836409f9b892af649474ba24dc5ece extends Twig_Template
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
        $__internal_ec1505510dab55c419b348e27e37b91e7029b29d5c774b85be0b1878d2bb2bc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec1505510dab55c419b348e27e37b91e7029b29d5c774b85be0b1878d2bb2bc8->enter($__internal_ec1505510dab55c419b348e27e37b91e7029b29d5c774b85be0b1878d2bb2bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::navigation.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-light bg-faded\">
    <nav class=\"page-nav\">
        <ul class=\"nav navbar-nav\">
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Home</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_registration");
        echo "\">Registrieren</a></li>
        </ul>
    </nav>
</nav>";
        
        $__internal_ec1505510dab55c419b348e27e37b91e7029b29d5c774b85be0b1878d2bb2bc8->leave($__internal_ec1505510dab55c419b348e27e37b91e7029b29d5c774b85be0b1878d2bb2bc8_prof);

    }

    public function getTemplateName()
    {
        return "::navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 6,  28 => 5,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-light bg-faded\">
    <nav class=\"page-nav\">
        <ul class=\"nav navbar-nav\">
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"{{ path('homepage') }}\">Home</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('user_registration') }}\">Registrieren</a></li>
        </ul>
    </nav>
</nav>", "::navigation.html.twig", "/Users/lilikovac/Documents/WT3_App/my_project/app/Resources/views/navigation.html.twig");
    }
}
