<?php

/* ::basic.html.twig */
class __TwigTemplate_b9e4713e82cbd8f81877dcce235144a0beaa68e81bffb570943acc5074f776bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_46532f63ff2ae09c1616808abc142ae04c79d556456ab00a69e1cd2b743348b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46532f63ff2ae09c1616808abc142ae04c79d556456ab00a69e1cd2b743348b9->enter($__internal_46532f63ff2ae09c1616808abc142ae04c79d556456ab00a69e1cd2b743348b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::basic.html.twig"));

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
        echo "    <!--<link rel=\"icon\" type=\"image/x-icon\" href=\"";
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
</head>";
        
        $__internal_46532f63ff2ae09c1616808abc142ae04c79d556456ab00a69e1cd2b743348b9->leave($__internal_46532f63ff2ae09c1616808abc142ae04c79d556456ab00a69e1cd2b743348b9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6d258959812bafecfa9b8cf75c21a6ed6b1df7aa9029659753d292b240e356ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d258959812bafecfa9b8cf75c21a6ed6b1df7aa9029659753d292b240e356ac->enter($__internal_6d258959812bafecfa9b8cf75c21a6ed6b1df7aa9029659753d292b240e356ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::basic.html.twig"));

        echo "Welcome!";
        
        $__internal_6d258959812bafecfa9b8cf75c21a6ed6b1df7aa9029659753d292b240e356ac->leave($__internal_6d258959812bafecfa9b8cf75c21a6ed6b1df7aa9029659753d292b240e356ac_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_24f6e4024c5e0342d2491cb30f44a9ad63332c4a65a35fc5eccaa1c91f97bf7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24f6e4024c5e0342d2491cb30f44a9ad63332c4a65a35fc5eccaa1c91f97bf7e->enter($__internal_24f6e4024c5e0342d2491cb30f44a9ad63332c4a65a35fc5eccaa1c91f97bf7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::basic.html.twig"));

        
        $__internal_24f6e4024c5e0342d2491cb30f44a9ad63332c4a65a35fc5eccaa1c91f97bf7e->leave($__internal_24f6e4024c5e0342d2491cb30f44a9ad63332c4a65a35fc5eccaa1c91f97bf7e_prof);

    }

    public function getTemplateName()
    {
        return "::basic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 6,  58 => 5,  49 => 10,  45 => 9,  41 => 8,  36 => 7,  34 => 6,  30 => 5,  24 => 1,);
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
</head>", "::basic.html.twig", "/Users/lilikovac/Documents/WT3_App/my_project/app/Resources/views/basic.html.twig");
    }
}
