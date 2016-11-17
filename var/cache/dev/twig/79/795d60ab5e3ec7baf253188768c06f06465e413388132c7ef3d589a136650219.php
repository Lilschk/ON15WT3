<?php

/* gaestebuch/form.html.twig */
class __TwigTemplate_b5a0500e7168ffb781f784850e7cbbdbbd40b685e7a0c523993cf10f5fce2495 extends Twig_Template
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
        $__internal_42ec98cb2e200586c26e58c630c4c010f500e55b54bcfcfc9fa401e56f07faa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42ec98cb2e200586c26e58c630c4c010f500e55b54bcfcfc9fa401e56f07faa4->enter($__internal_42ec98cb2e200586c26e58c630c4c010f500e55b54bcfcfc9fa401e56f07faa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gaestebuch/form.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    ";
        // line 5
        $this->loadTemplate("::basic.html.twig", "gaestebuch/form.html.twig", 5)->display($context);
        // line 6
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/Javascript/Validator.js"), "html", null, true);
        echo "\"></script>
</head>
<body>


";
        // line 11
        $this->loadTemplate("::gaestebuch/gaestebuch.html.twig", "gaestebuch/form.html.twig", 11)->display($context);
        // line 12
        echo "
";
        // line 13
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
";
        // line 15
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "


</body>
</html>";
        
        $__internal_42ec98cb2e200586c26e58c630c4c010f500e55b54bcfcfc9fa401e56f07faa4->leave($__internal_42ec98cb2e200586c26e58c630c4c010f500e55b54bcfcfc9fa401e56f07faa4_prof);

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
        return array (  52 => 15,  48 => 14,  44 => 13,  41 => 12,  39 => 11,  30 => 6,  28 => 5,  22 => 1,);
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
    {% include '::basic.html.twig' %}
    <script type=\"text/javascript\" src=\"{{ asset('lib/Javascript/Validator.js') }}\"></script>
</head>
<body>


{% include '::gaestebuch/gaestebuch.html.twig' %}

{{ form_start(form) }}
{{ form_widget(form) }}
{{ form_end(form) }}


</body>
</html>", "gaestebuch/form.html.twig", "/Users/lilikovac/Documents/WT3_App/my_project/app/Resources/views/gaestebuch/form.html.twig");
    }
}
