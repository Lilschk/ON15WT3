<?php

/* ::navigation.html.twig */
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
        $__internal_a5539315715a8824c607ccdf03aa1041b23346b02f529e97e0f8c4e7310c0329 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5539315715a8824c607ccdf03aa1041b23346b02f529e97e0f8c4e7310c0329->enter($__internal_a5539315715a8824c607ccdf03aa1041b23346b02f529e97e0f8c4e7310c0329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::navigation.html.twig"));

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
            echo "\">Eintrag schreiben</a></li>s
                ";
        } else {
            // line 13
            echo "                    <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\">Login</a></li>
                ";
        }
        // line 15
        echo "



                </ul>
        </nav>
</nav>
";
        
        $__internal_a5539315715a8824c607ccdf03aa1041b23346b02f529e97e0f8c4e7310c0329->leave($__internal_a5539315715a8824c607ccdf03aa1041b23346b02f529e97e0f8c4e7310c0329_prof);

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
        return array (  54 => 15,  48 => 13,  43 => 11,  39 => 10,  35 => 9,  32 => 8,  30 => 7,  22 => 1,);
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
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('guestbook_logged') }}\">Eintrag schreiben</a></li>s
                {% else %}
                    <li><a href=\"{{ path('login') }}\">Login</a></li>
                {% endif %}




                </ul>
        </nav>
</nav>
", "::navigation.html.twig", "/Users/lilikovac/Documents/WT3_App/my_project/app/Resources/views/navigation.html.twig");
    }
}
