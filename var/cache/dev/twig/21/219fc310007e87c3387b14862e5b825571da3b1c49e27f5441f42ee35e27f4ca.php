<?php

/* base.html.twig */
class __TwigTemplate_daced8f14d59ebde326da0cc3bbf8dcec724dcd2c82beee269194d8cb4b81d3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0664abe72af63fcb6361fb6380015bce337f032fc5a4d09cedb3429d33811701 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0664abe72af63fcb6361fb6380015bce337f032fc5a4d09cedb3429d33811701->enter($__internal_0664abe72af63fcb6361fb6380015bce337f032fc5a4d09cedb3429d33811701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <!--<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/application.css"), "html", null, true);
        echo "\">
        <!--<link rel=\"stylesheet\" tyoe=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/normalize.css"), "html", null, true);
        echo "\">-->
    </head>

    <body>
        ";
        // line 14
        $this->loadTemplate("::navigation.html.twig", "base.html.twig", 14)->display($context);
        // line 15
        echo "
        <div class=\"container\">
            <div class=\"page-header\">
                <h1 class=\"display-1\">Gästebuch</h1>
                <p class=\"lead page-description\">Schreibe einen Beitrag.</p>
            </div>
            <a class=\"btn btn-primary btn-lg btn-block\" href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("guestbook_logged");
        echo "\" role=\"button\">Einloggen!</a>

            <!-- <div class=\"row\">
                <div class=\"col-sm-8 page-main\">
                    ";
        // line 25
        $this->displayBlock('body', $context, $blocks);
        // line 26
        echo "                </div>


            </div>
        </div>-->

        <footer class=\"page-footer\">

            <p>
                <a href=\"#\">Back to top</a>
            </p>
        </footer>

        ";
        // line 39
        $this->displayBlock('javascripts', $context, $blocks);
        // line 40
        echo "    </body>
</html>
";
        
        $__internal_0664abe72af63fcb6361fb6380015bce337f032fc5a4d09cedb3429d33811701->leave($__internal_0664abe72af63fcb6361fb6380015bce337f032fc5a4d09cedb3429d33811701_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a7c7ce1f5cec7f36a57bc9a7fcf016ad19b60ad93ef8cca58401f7c110341576 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7c7ce1f5cec7f36a57bc9a7fcf016ad19b60ad93ef8cca58401f7c110341576->enter($__internal_a7c7ce1f5cec7f36a57bc9a7fcf016ad19b60ad93ef8cca58401f7c110341576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";
        
        $__internal_a7c7ce1f5cec7f36a57bc9a7fcf016ad19b60ad93ef8cca58401f7c110341576->leave($__internal_a7c7ce1f5cec7f36a57bc9a7fcf016ad19b60ad93ef8cca58401f7c110341576_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8016630a990f5854b8c5742c889a609242f58bb7230fb821381c6b13f1d4f941 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8016630a990f5854b8c5742c889a609242f58bb7230fb821381c6b13f1d4f941->enter($__internal_8016630a990f5854b8c5742c889a609242f58bb7230fb821381c6b13f1d4f941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_8016630a990f5854b8c5742c889a609242f58bb7230fb821381c6b13f1d4f941->leave($__internal_8016630a990f5854b8c5742c889a609242f58bb7230fb821381c6b13f1d4f941_prof);

    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b974c8aa3ac99993769b5a2af8be0677c6a24f37b513865f256cd51d6542e56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b974c8aa3ac99993769b5a2af8be0677c6a24f37b513865f256cd51d6542e56->enter($__internal_8b974c8aa3ac99993769b5a2af8be0677c6a24f37b513865f256cd51d6542e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_8b974c8aa3ac99993769b5a2af8be0677c6a24f37b513865f256cd51d6542e56->leave($__internal_8b974c8aa3ac99993769b5a2af8be0677c6a24f37b513865f256cd51d6542e56_prof);

    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c8ff9239cec4c330618b7f4ee9222d16daad180b4965341c71c2a260cdf87735 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8ff9239cec4c330618b7f4ee9222d16daad180b4965341c71c2a260cdf87735->enter($__internal_c8ff9239cec4c330618b7f4ee9222d16daad180b4965341c71c2a260cdf87735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_c8ff9239cec4c330618b7f4ee9222d16daad180b4965341c71c2a260cdf87735->leave($__internal_c8ff9239cec4c330618b7f4ee9222d16daad180b4965341c71c2a260cdf87735_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 39,  126 => 25,  115 => 6,  103 => 5,  94 => 40,  92 => 39,  77 => 26,  75 => 25,  68 => 21,  60 => 15,  58 => 14,  51 => 10,  47 => 9,  43 => 8,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <!--<link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('lib/bootstrap/css/bootstrap.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/application.css') }}\">
        <!--<link rel=\"stylesheet\" tyoe=\"text/css\" href=\"{{ asset('lib/normalize.css') }}\">-->
    </head>

    <body>
        {% include '::navigation.html.twig' %}

        <div class=\"container\">
            <div class=\"page-header\">
                <h1 class=\"display-1\">Gästebuch</h1>
                <p class=\"lead page-description\">Schreibe einen Beitrag.</p>
            </div>
            <a class=\"btn btn-primary btn-lg btn-block\" href=\"{{ path('guestbook_logged') }}\" role=\"button\">Einloggen!</a>

            <!-- <div class=\"row\">
                <div class=\"col-sm-8 page-main\">
                    {% block body %}{% endblock %}
                </div>


            </div>
        </div>-->

        <footer class=\"page-footer\">

            <p>
                <a href=\"#\">Back to top</a>
            </p>
        </footer>

        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/public/my_project/app/Resources/views/base.html.twig");
    }
}
