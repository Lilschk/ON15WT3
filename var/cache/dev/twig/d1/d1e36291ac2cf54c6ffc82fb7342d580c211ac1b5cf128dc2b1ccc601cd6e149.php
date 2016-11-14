<?php

/* ::sidebar.html.twig */
class __TwigTemplate_8eb4865502ded416ed00f944b0e371e85a8b75a9c8d14e2828b023a987635589 extends Twig_Template
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
        $__internal_a8a9c51b84937479f8596093bf1c85fb1ce4446ed2cd695291d1ffa2474e0ed7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8a9c51b84937479f8596093bf1c85fb1ce4446ed2cd695291d1ffa2474e0ed7->enter($__internal_a8a9c51b84937479f8596093bf1c85fb1ce4446ed2cd695291d1ffa2474e0ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::sidebar.html.twig"));

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
        
        $__internal_a8a9c51b84937479f8596093bf1c85fb1ce4446ed2cd695291d1ffa2474e0ed7->leave($__internal_a8a9c51b84937479f8596093bf1c85fb1ce4446ed2cd695291d1ffa2474e0ed7_prof);

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
</div>", "::sidebar.html.twig", "/var/www/public/my_project/app/Resources/views/sidebar.html.twig");
    }
}
