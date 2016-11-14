<?php

/* ::navigation-loggedin.html.twig */
class __TwigTemplate_d997c44845d8914ab8c44f9c6b9ee9c92b31a7a79abbe99f62055eaa0938f40b extends Twig_Template
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
        echo "<div class=\"page-masthead\">
    <div class=\"container\">
        <nav class=\"page-nav\">
            <a class=\"page-nav-item active\" href=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Home</a>
            <a class=\"page-nav-item\" href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("luckynumer");
        echo "\">login</a>
            <a class=\"page-nav-item\" href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("twigtest", array("name" => "Dave"));
        echo "\">luckynumber</a>
            <a class=\"page-nav-item\" href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("name", array("name" => "Dave"));
        echo "\">etwas anderes</a>
        </nav>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "::navigation-loggedin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 7,  32 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::navigation-loggedin.html.twig", "/Users/lilikovac/Documents/WT3_App/my_project/app/Resources/views/navigation-loggedin.html.twig");
    }
}
