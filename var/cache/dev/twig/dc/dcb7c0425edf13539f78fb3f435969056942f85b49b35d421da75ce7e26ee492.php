<?php

/* gaestebuch/form.html.twig */
class __TwigTemplate_8b2355c40f5f82471b834c6a218688e25a5d8a5587743b54279bc4e69891885c extends Twig_Template
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
        $__internal_4e428c9a62160d2e16de1d67f5c9eabfbe380d54014ba8f9d05a309cac564a0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e428c9a62160d2e16de1d67f5c9eabfbe380d54014ba8f9d05a309cac564a0a->enter($__internal_4e428c9a62160d2e16de1d67f5c9eabfbe380d54014ba8f9d05a309cac564a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gaestebuch/form.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
</head>
<body>

";
        // line 8
        $this->loadTemplate("::gaestebuch/gaestebuch.html.twig", "gaestebuch/form.html.twig", 8)->display($context);
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</body>
</html>";
        
        $__internal_4e428c9a62160d2e16de1d67f5c9eabfbe380d54014ba8f9d05a309cac564a0a->leave($__internal_4e428c9a62160d2e16de1d67f5c9eabfbe380d54014ba8f9d05a309cac564a0a_prof);

    }

    public function getTemplateName()
    {
        return "gaestebuch/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 11,  37 => 10,  33 => 9,  31 => 8,  22 => 1,);
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
</head>
<body>

{% include '::gaestebuch/gaestebuch.html.twig' %}
{{ form_start(form) }}
{{ form_widget(form) }}
{{ form_end(form) }}
</body>
</html>", "gaestebuch/form.html.twig", "/var/www/public/my_project/app/Resources/views/gaestebuch/form.html.twig");
    }
}
