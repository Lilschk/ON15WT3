<?php

/* ::navigation.html.twig */
class __TwigTemplate_bd190785deb358e21c89110065bb3ded9fd0cd5f25f88b5eb4ba196b483c9969 extends Twig_Template
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
        $__internal_4e4f3e808e2ded7a25128818cafe1ee23f29ab02ff8c7e4bccac1d1546851ba7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e4f3e808e2ded7a25128818cafe1ee23f29ab02ff8c7e4bccac1d1546851ba7->enter($__internal_4e4f3e808e2ded7a25128818cafe1ee23f29ab02ff8c7e4bccac1d1546851ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::navigation.html.twig"));

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
        
        $__internal_4e4f3e808e2ded7a25128818cafe1ee23f29ab02ff8c7e4bccac1d1546851ba7->leave($__internal_4e4f3e808e2ded7a25128818cafe1ee23f29ab02ff8c7e4bccac1d1546851ba7_prof);

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
", "::navigation.html.twig", "/var/www/public/my_project/app/Resources/views/navigation.html.twig");
    }
}
