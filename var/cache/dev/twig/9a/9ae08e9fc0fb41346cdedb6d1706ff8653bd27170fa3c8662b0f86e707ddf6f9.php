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
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a66d902af544527351d40a3d16c92763b925ed7ab0843e578d34a3ce5aee05ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a66d902af544527351d40a3d16c92763b925ed7ab0843e578d34a3ce5aee05ba->enter($__internal_a66d902af544527351d40a3d16c92763b925ed7ab0843e578d34a3ce5aee05ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::basic.html.twig"));

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
        // line 10
        echo "
    ";
        // line 11
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "</head>";
        
        $__internal_a66d902af544527351d40a3d16c92763b925ed7ab0843e578d34a3ce5aee05ba->leave($__internal_a66d902af544527351d40a3d16c92763b925ed7ab0843e578d34a3ce5aee05ba_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f1c20322d7c5cbdd5784d7212e1465d41add20a9d0f83c44a34f4197c4640b04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1c20322d7c5cbdd5784d7212e1465d41add20a9d0f83c44a34f4197c4640b04->enter($__internal_f1c20322d7c5cbdd5784d7212e1465d41add20a9d0f83c44a34f4197c4640b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::basic.html.twig"));

        echo "Welcome!";
        
        $__internal_f1c20322d7c5cbdd5784d7212e1465d41add20a9d0f83c44a34f4197c4640b04->leave($__internal_f1c20322d7c5cbdd5784d7212e1465d41add20a9d0f83c44a34f4197c4640b04_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_66bf7e830a3c14fa7727992ea842a05a2b01c85720d036a69ee3aa26f69a1b51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66bf7e830a3c14fa7727992ea842a05a2b01c85720d036a69ee3aa26f69a1b51->enter($__internal_66bf7e830a3c14fa7727992ea842a05a2b01c85720d036a69ee3aa26f69a1b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::basic.html.twig"));

        // line 7
        echo "
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_66bf7e830a3c14fa7727992ea842a05a2b01c85720d036a69ee3aa26f69a1b51->leave($__internal_66bf7e830a3c14fa7727992ea842a05a2b01c85720d036a69ee3aa26f69a1b51_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_159475a83f695b5a82471c6803fbaeb9debbb84c709d9b7f24a88d111f011909 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_159475a83f695b5a82471c6803fbaeb9debbb84c709d9b7f24a88d111f011909->enter($__internal_159475a83f695b5a82471c6803fbaeb9debbb84c709d9b7f24a88d111f011909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::basic.html.twig"));

        // line 12
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/bootstrap/JQuery/JQuery.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>

    ";
        
        $__internal_159475a83f695b5a82471c6803fbaeb9debbb84c709d9b7f24a88d111f011909->leave($__internal_159475a83f695b5a82471c6803fbaeb9debbb84c709d9b7f24a88d111f011909_prof);

    }

    public function getTemplateName()
    {
        return "::basic.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  90 => 13,  85 => 12,  79 => 11,  70 => 8,  67 => 7,  61 => 6,  49 => 5,  42 => 16,  40 => 11,  37 => 10,  35 => 6,  31 => 5,  25 => 1,);
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
    {% block stylesheets %}

    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('lib/bootstrap/css/bootstrap.css') }}\">
    {% endblock %}

    {% block javascripts %}
        <script type=\"text/javascript\" src=\"{{ asset('lib/bootstrap/JQuery/JQuery.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('lib/bootstrap/js/bootstrap.js') }}\"></script>

    {% endblock %}
</head>", "::basic.html.twig", "/Users/lilikovac/Documents/WT3_App/my_project/app/Resources/views/basic.html.twig");
    }
}
