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
        $__internal_e6a59db25ac6279d773857e621541edb4902213c1afed5458a088bd561f5f2b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6a59db25ac6279d773857e621541edb4902213c1afed5458a088bd561f5f2b8->enter($__internal_e6a59db25ac6279d773857e621541edb4902213c1afed5458a088bd561f5f2b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::navigation.html.twig"));

        // line 1
        echo "


<nav class=\"navbar navbar-light bg-faded\">
        <nav class=\"page-nav\">
            <ul class=\"nav navbar-nav\">

                    ";
        // line 8
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 9
            echo "                        <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"";
            // line 10
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Logout</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            // line 11
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("guestbook_einträgezeigen");
            echo "\">Einträge anzeigen</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            // line 12
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("guestbook_logged");
            echo "\">Eintrag schreiben</a></li>
                        <div class=\"col-lg-6\">
                            <div class=\"input-group\">
                                <input type=\"text\" class=\"form-control\" id=\"suchfeld\" placeholder=\"Search for...\">
                                <span class=\"input-group-btn\">
        <button class=\"btn btn-secondary\" type=\"button\">Go!</button>
      </span>
                            </div>
                        </div>
                        <div id=\"sucheinhalt\"></div>
                ";
        } else {
            // line 23
            echo "                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\">Login</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            // line 24
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_registration");
            echo "\">Registrieren</a></li>
                ";
        }
        // line 26
        echo "



                </ul>

        </nav>
</nav>

<div id=\"sucheinhalt\"></div>
<script type=\"text/javascript\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/Javascript/Ajax.js"), "html", null, true);
        echo "\"></script>




";
        
        $__internal_e6a59db25ac6279d773857e621541edb4902213c1afed5458a088bd561f5f2b8->leave($__internal_e6a59db25ac6279d773857e621541edb4902213c1afed5458a088bd561f5f2b8_prof);

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
        return array (  80 => 36,  68 => 26,  63 => 24,  58 => 23,  44 => 12,  40 => 11,  36 => 10,  33 => 9,  31 => 8,  22 => 1,);
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
                        <div class=\"col-lg-6\">
                            <div class=\"input-group\">
                                <input type=\"text\" class=\"form-control\" id=\"suchfeld\" placeholder=\"Search for...\">
                                <span class=\"input-group-btn\">
        <button class=\"btn btn-secondary\" type=\"button\">Go!</button>
      </span>
                            </div>
                        </div>
                        <div id=\"sucheinhalt\"></div>
                {% else %}
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('login') }}\">Login</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('user_registration') }}\">Registrieren</a></li>
                {% endif %}




                </ul>

        </nav>
</nav>

<div id=\"sucheinhalt\"></div>
<script type=\"text/javascript\" src=\"{{ asset('lib/Javascript/Ajax.js') }}\"></script>




", "::navigation.html.twig", "/Users/lilikovac/Documents/WT3_App/my_project/app/Resources/views/navigation.html.twig");
    }
}
