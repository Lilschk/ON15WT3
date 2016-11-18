<?php

/* gaestebuch/UpdateEintraege.html.twig */
class __TwigTemplate_fd9ec8d747cd372e5020564df7dea508589fa92ff8ff35218d2f63ba8fe35878 extends Twig_Template
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
        $__internal_5d339ffceafdc11bb9bbe3108f6cc64fe0619a96acd783cdc3bdf29befe48261 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d339ffceafdc11bb9bbe3108f6cc64fe0619a96acd783cdc3bdf29befe48261->enter($__internal_5d339ffceafdc11bb9bbe3108f6cc64fe0619a96acd783cdc3bdf29befe48261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gaestebuch/UpdateEintraege.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->loadTemplate("::navigation.html.twig", "gaestebuch/UpdateEintraege.html.twig", 2)->display($context);
        // line 3
        $this->loadTemplate("::basic.html.twig", "gaestebuch/UpdateEintraege.html.twig", 3)->display($context);
        // line 4
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/Javascript/Validator.js"), "html", null, true);
        echo "\"></script>


";
        // line 7
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Name", array()), 'label');
        echo "

";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Name", array()), 'widget', array("value" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "name", array())));
        echo "

";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Mail", array()), 'label');
        echo "
";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Mail", array()), 'widget', array("value" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "mail", array())));
        echo "


";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Nachricht", array()), 'label');
        echo "
";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Nachricht", array()), 'widget', array("value" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "nachricht", array())));
        echo "

";
        // line 20
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_5d339ffceafdc11bb9bbe3108f6cc64fe0619a96acd783cdc3bdf29befe48261->leave($__internal_5d339ffceafdc11bb9bbe3108f6cc64fe0619a96acd783cdc3bdf29befe48261_prof);

    }

    public function getTemplateName()
    {
        return "gaestebuch/UpdateEintraege.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 20,  65 => 18,  61 => 17,  55 => 14,  51 => 13,  46 => 11,  41 => 9,  36 => 7,  29 => 4,  27 => 3,  25 => 2,  22 => 1,);
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
{% include '::navigation.html.twig' %}
{% include '::basic.html.twig' %}
<script type=\"text/javascript\" src=\"{{ asset('lib/Javascript/Validator.js') }}\"></script>


{{ form_start(form) }}

{{ form_label(form.Name) }}

{{ form_widget(form.Name, {'value' : post.name}) }}

{{ form_label(form.Mail) }}
{{ form_widget(form.Mail, {'value' : post.mail}) }}


{{ form_label(form.Nachricht) }}
{{ form_widget(form.Nachricht, {'value' : post.nachricht}) }}

{{ form_end(form) }}", "gaestebuch/UpdateEintraege.html.twig", "/Users/lilikovac/Documents/WT3_App/my_project/app/Resources/views/gaestebuch/UpdateEintraege.html.twig");
    }
}
