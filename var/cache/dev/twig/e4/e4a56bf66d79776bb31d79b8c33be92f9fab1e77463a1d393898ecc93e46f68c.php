<?php

/* ::navigation-loggedin.html.twig */
class __TwigTemplate_53620aeb546282555e6ac68230b41ae59129c0d2c0415586973c8c50919a12e7 extends Twig_Template
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
        $__internal_f876f574fbd463b48034ba5b41d86603019d85b1b2ea566a4280394eeffcd915 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f876f574fbd463b48034ba5b41d86603019d85b1b2ea566a4280394eeffcd915->enter($__internal_f876f574fbd463b48034ba5b41d86603019d85b1b2ea566a4280394eeffcd915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::navigation-loggedin.html.twig"));

        // line 1
        echo "
<nav class=\"navbar navbar-light bg-faded\">
        <nav class=\"page-nav\">
            <ul class=\"nav navbar-nav\">
                <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
        echo "\">Logout</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("guestbook_einträgezeigen");
        echo "\">Einträge anzeigen</a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("guestbook_logged");
        echo "\">Eintrag schreiben</a></li>
                </ul>
        </nav>
</nav>
";
        
        $__internal_f876f574fbd463b48034ba5b41d86603019d85b1b2ea566a4280394eeffcd915->leave($__internal_f876f574fbd463b48034ba5b41d86603019d85b1b2ea566a4280394eeffcd915_prof);

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
        return array (  37 => 8,  33 => 7,  29 => 6,  22 => 1,);
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
<nav class=\"navbar navbar-light bg-faded\">
        <nav class=\"page-nav\">
            <ul class=\"nav navbar-nav\">
                <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"{{ path('logout') }}\">Logout</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('guestbook_einträgezeigen') }}\">Einträge anzeigen</a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('guestbook_logged') }}\">Eintrag schreiben</a></li>
                </ul>
        </nav>
</nav>
", "::navigation-loggedin.html.twig", "/Users/lilikovac/Documents/WT3_App/my_project/app/Resources/views/navigation-loggedin.html.twig");
    }
}
