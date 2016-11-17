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
        $__internal_7056926d725f673734ac3823a8b7cde84c5a007f807fa31a8dbe1e21f3fbfb3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7056926d725f673734ac3823a8b7cde84c5a007f807fa31a8dbe1e21f3fbfb3b->enter($__internal_7056926d725f673734ac3823a8b7cde84c5a007f807fa31a8dbe1e21f3fbfb3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "registration/registration.html.twig"));

        // line 1
        echo "<head>
";
        // line 2
        $this->loadTemplate("::basic.html.twig", "registration/registration.html.twig", 2)->display($context);
        // line 3
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/Javascript/Validator.js"), "html", null, true);
        echo "\"></script>
</head>

";
        // line 6
        $this->loadTemplate("::navigation.html.twig", "registration/registration.html.twig", 6)->display($context);
        // line 7
        echo "
";
        // line 8
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-group")));
        echo "


    ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label');
        echo "
    ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget');
        echo "

    ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "

    ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'label');
        echo "
    ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget');
        echo "


    ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'label');
        echo "
    ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget');
        echo "



";
        // line 26
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_7056926d725f673734ac3823a8b7cde84c5a007f807fa31a8dbe1e21f3fbfb3b->leave($__internal_7056926d725f673734ac3823a8b7cde84c5a007f807fa31a8dbe1e21f3fbfb3b_prof);

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
        return array (  84 => 26,  77 => 22,  73 => 21,  67 => 18,  63 => 17,  58 => 15,  54 => 14,  49 => 12,  45 => 11,  39 => 8,  36 => 7,  34 => 6,  27 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<head>
{% include '::basic.html.twig' %}
<script type=\"text/javascript\" src=\"{{ asset('lib/Javascript/Validator.js') }}\"></script>
</head>

{% include '::navigation.html.twig' %}

{{ form_start(form, {'attr': {'class': 'form-group'}}) }}


    {{ form_label(form.username)  }}
    {{ form_widget(form.username) }}

    {{ form_label(form.email)  }}
    {{ form_widget(form.email) }}

    {{ form_label(form.plainPassword.first)  }}
    {{ form_widget(form.plainPassword.first) }}


    {{ form_label(form.plainPassword.second,null)}}
    {{ form_widget(form.plainPassword.second) }}



{{ form_end(form) }}

", "registration/registration.html.twig", "/Users/lilikovac/Documents/WT3_App/my_project/app/Resources/views/registration/registration.html.twig");
    }
}
