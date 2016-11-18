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
        $__internal_e500359dab193c905ada598bcc7217dae45f8ace05d793def0f36e92ef64c6f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e500359dab193c905ada598bcc7217dae45f8ace05d793def0f36e92ef64c6f3->enter($__internal_e500359dab193c905ada598bcc7217dae45f8ace05d793def0f36e92ef64c6f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::navigation.html.twig"));

        // line 1
        echo "

<nav class=\"navbar navbar-light bg-faded\">
        <nav class=\"page-nav\">
            <ul class=\"nav navbar-nav\">

                    ";
        // line 7
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 8
            echo "                        <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"";
            // line 9
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Logout</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            // line 10
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("guestbook_einträgezeigen");
            echo "\">Einträge anzeigen</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            // line 11
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("guestbook_logged");
            echo "\">Eintrag schreiben</a></li>
                ";
        } else {
            // line 13
            echo "                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\">Login</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            // line 14
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_registration");
            echo "\">Registrieren</a></li>
                ";
        }
        // line 16
        echo "



                </ul>
        </nav>
</nav>
";
        
        $__internal_e500359dab193c905ada598bcc7217dae45f8ace05d793def0f36e92ef64c6f3->leave($__internal_e500359dab193c905ada598bcc7217dae45f8ace05d793def0f36e92ef64c6f3_prof);

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
        return array (  58 => 16,  53 => 14,  48 => 13,  43 => 11,  39 => 10,  35 => 9,  32 => 8,  30 => 7,  22 => 1,);
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

                    {% if is_granted('ROLE_USER') %}
                        <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"{{ path('logout') }}\">Logout</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('guestbook_einträgezeigen') }}\">Einträge anzeigen</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('guestbook_logged') }}\">Eintrag schreiben</a></li>
                {% else %}
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('login') }}\">Login</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('user_registration') }}\">Registrieren</a></li>
                {% endif %}




                </ul>
        </nav>
</nav>
", "::navigation.html.twig", "/Users/lilikovac/Documents/WT3_App/my_project/app/Resources/views/navigation.html.twig");
    }
}
