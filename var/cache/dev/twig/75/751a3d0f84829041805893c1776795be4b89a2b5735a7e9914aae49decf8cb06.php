<?php

/* gaestebuch/formdone.html.twig */
class __TwigTemplate_6dcb348e242f12413587ff8469281092533061ca8921b57e55771bf66d2a7845 extends Twig_Template
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
        $__internal_25ed0750d8a7c269992bfb243b45a05cef160a303236f14ccabd9a54d86a73c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25ed0750d8a7c269992bfb243b45a05cef160a303236f14ccabd9a54d86a73c5->enter($__internal_25ed0750d8a7c269992bfb243b45a05cef160a303236f14ccabd9a54d86a73c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gaestebuch/formdone.html.twig"));

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
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/application.css"), "html", null, true);
        echo "\">

<body>
";
        // line 12
        $this->loadTemplate("::navigation.html.twig", "gaestebuch/formdone.html.twig", 12)->display($context);
        // line 13
        echo "

<div class=\"container\">
    <div class=\"page-header\">
        <h1 class=\"display-1\">Gästebuch</h1>
        <p class=\"lead page-description\">Sie haben eine Nachricht geschrieben.</p>
        <p> ";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["Name"]) ? $context["Name"] : $this->getContext($context, "Name")), "html", null, true);
        echo " hat eine Nachricht geschrieben:</p>
        <p>";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["Mail"]) ? $context["Mail"] : $this->getContext($context, "Mail")), "html", null, true);
        echo "</p>
        <p>";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["Nachricht"]) ? $context["Nachricht"] : $this->getContext($context, "Nachricht")), "html", null, true);
        echo "</p>
        <p>Dankeschön für Ihren Beitrag!</p>
    </div>
</div>";
        
        $__internal_25ed0750d8a7c269992bfb243b45a05cef160a303236f14ccabd9a54d86a73c5->leave($__internal_25ed0750d8a7c269992bfb243b45a05cef160a303236f14ccabd9a54d86a73c5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1e7cf19900cfb2647c1561994b50e6a4d9bdaa2b5545a5efbb337897622a4bf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e7cf19900cfb2647c1561994b50e6a4d9bdaa2b5545a5efbb337897622a4bf2->enter($__internal_1e7cf19900cfb2647c1561994b50e6a4d9bdaa2b5545a5efbb337897622a4bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "gaestebuch/formdone.html.twig"));

        echo "You're logged in!";
        
        $__internal_1e7cf19900cfb2647c1561994b50e6a4d9bdaa2b5545a5efbb337897622a4bf2->leave($__internal_1e7cf19900cfb2647c1561994b50e6a4d9bdaa2b5545a5efbb337897622a4bf2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ca47158aa1f901ccd855f29fee2be8f21f26b928b075915a4864dcf7c01a4ecd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca47158aa1f901ccd855f29fee2be8f21f26b928b075915a4864dcf7c01a4ecd->enter($__internal_ca47158aa1f901ccd855f29fee2be8f21f26b928b075915a4864dcf7c01a4ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "gaestebuch/formdone.html.twig"));

        
        $__internal_ca47158aa1f901ccd855f29fee2be8f21f26b928b075915a4864dcf7c01a4ecd->leave($__internal_ca47158aa1f901ccd855f29fee2be8f21f26b928b075915a4864dcf7c01a4ecd_prof);

    }

    public function getTemplateName()
    {
        return "gaestebuch/formdone.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 6,  80 => 5,  69 => 21,  65 => 20,  61 => 19,  53 => 13,  51 => 12,  45 => 9,  41 => 8,  36 => 7,  34 => 6,  30 => 5,  24 => 1,);
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
    <title>{% block title %}You're logged in!{% endblock %}</title>
    {% block stylesheets %}{% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('lib/bootstrap/css/bootstrap.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/application.css') }}\">

<body>
{% include '::navigation.html.twig' %}


<div class=\"container\">
    <div class=\"page-header\">
        <h1 class=\"display-1\">Gästebuch</h1>
        <p class=\"lead page-description\">Sie haben eine Nachricht geschrieben.</p>
        <p> {{  Name }} hat eine Nachricht geschrieben:</p>
        <p>{{ Mail }}</p>
        <p>{{ Nachricht }}</p>
        <p>Dankeschön für Ihren Beitrag!</p>
    </div>
</div>", "gaestebuch/formdone.html.twig", "/Users/lilikovac/Documents/WT3_App/my_project/app/Resources/views/gaestebuch/formdone.html.twig");
    }
}
