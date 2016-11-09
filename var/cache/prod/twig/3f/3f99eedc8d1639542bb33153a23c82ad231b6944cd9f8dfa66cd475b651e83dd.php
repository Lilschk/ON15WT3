<?php

/* ::sidebar.html.twig */
class __TwigTemplate_4eec0c7a7c58d1f1b38d9eb9ea96db2a11ead547faec4b94ad7b2a7b212e93f7 extends Twig_Template
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
        return array (  33 => 10,  29 => 9,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::sidebar.html.twig", "/Users/lilikovac/Documents/WT3_App/my_project/app/Resources/views/sidebar.html.twig");
    }
}
