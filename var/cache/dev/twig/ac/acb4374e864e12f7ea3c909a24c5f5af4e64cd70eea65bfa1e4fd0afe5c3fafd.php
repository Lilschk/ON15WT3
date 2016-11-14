<?php

/* registration/registration.html.twig */
class __TwigTemplate_90d45fc9b1c6ecca3a3407caf9a426ea7abb1ea5db4ca966e6a4711c0c50cabc extends Twig_Template
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
        $__internal_197cdd782fc24508e2f0ee0e1d60bdcef25749615a362560ca5f417ea21a94a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_197cdd782fc24508e2f0ee0e1d60bdcef25749615a362560ca5f417ea21a94a4->enter($__internal_197cdd782fc24508e2f0ee0e1d60bdcef25749615a362560ca5f417ea21a94a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "registration/registration.html.twig"));

        // line 1
        $this->loadTemplate("::basic.html.twig", "registration/registration.html.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("::navigation.html.twig", "registration/registration.html.twig", 2)->display($context);
        // line 3
        echo "
";
        // line 4
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'row');
        echo "
    ";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
    ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row');
        echo "
    ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row');
        echo "

<button type=\"button\" class=\"btn btn-primary\">Register!</button>

";
        // line 12
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_197cdd782fc24508e2f0ee0e1d60bdcef25749615a362560ca5f417ea21a94a4->leave($__internal_197cdd782fc24508e2f0ee0e1d60bdcef25749615a362560ca5f417ea21a94a4_prof);

    }

    public function getTemplateName()
    {
        return "registration/registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 12,  45 => 8,  41 => 7,  37 => 6,  33 => 5,  29 => 4,  26 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '::basic.html.twig' %}
{% include '::navigation.html.twig' %}

{{ form_start(form) }}
    {{ form_row(form.username) }}
    {{ form_row(form.email) }}
    {{ form_row(form.plainPassword.first) }}
    {{ form_row(form.plainPassword.second) }}

<button type=\"button\" class=\"btn btn-primary\">Register!</button>

{{ form_end(form) }}", "registration/registration.html.twig", "/Users/lilikovac/Documents/WT3_App/my_project/app/Resources/views/registration/registration.html.twig");
    }
}
