<?php

/* ::basic.html.twig */
class __TwigTemplate_b82cc37e84284e40e1715f4e71626d2f0bfa9fca4f08394289bed88de81097d8 extends Twig_Template
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
        $__internal_6777a465c1176960b6a2b89f08a35e92e74b2534cb7894edcd4440ac25fd278c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6777a465c1176960b6a2b89f08a35e92e74b2534cb7894edcd4440ac25fd278c->enter($__internal_6777a465c1176960b6a2b89f08a35e92e74b2534cb7894edcd4440ac25fd278c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::basic.html.twig"));

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
        
        $__internal_6777a465c1176960b6a2b89f08a35e92e74b2534cb7894edcd4440ac25fd278c->leave($__internal_6777a465c1176960b6a2b89f08a35e92e74b2534cb7894edcd4440ac25fd278c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9262423e81cb4c1d5a11b9843fcfa04cf9c175957308bf28ba0eb9d41dab0b08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9262423e81cb4c1d5a11b9843fcfa04cf9c175957308bf28ba0eb9d41dab0b08->enter($__internal_9262423e81cb4c1d5a11b9843fcfa04cf9c175957308bf28ba0eb9d41dab0b08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::basic.html.twig"));

        echo "Welcome!";
        
        $__internal_9262423e81cb4c1d5a11b9843fcfa04cf9c175957308bf28ba0eb9d41dab0b08->leave($__internal_9262423e81cb4c1d5a11b9843fcfa04cf9c175957308bf28ba0eb9d41dab0b08_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3ad67ae40a94a93194f6dd7789e9bacc8c40e6419f6a0826b985c12d45f7b6b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ad67ae40a94a93194f6dd7789e9bacc8c40e6419f6a0826b985c12d45f7b6b8->enter($__internal_3ad67ae40a94a93194f6dd7789e9bacc8c40e6419f6a0826b985c12d45f7b6b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::basic.html.twig"));

        
        $__internal_3ad67ae40a94a93194f6dd7789e9bacc8c40e6419f6a0826b985c12d45f7b6b8->leave($__internal_3ad67ae40a94a93194f6dd7789e9bacc8c40e6419f6a0826b985c12d45f7b6b8_prof);

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
</head>", "::basic.html.twig", "/var/www/public/my_project/app/Resources/views/basic.html.twig");
    }
}
