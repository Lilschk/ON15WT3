<?php

/* gaestebuch/UpdateEintraege.html.twig */
class __TwigTemplate_fd9ec8d747cd372e5020564df7dea508589fa92ff8ff35218d2f63ba8fe35878 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "gaestebuch/UpdateEintraege.html.twig", 3);
        // line 3
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9141bd7d93d2dc4fd289577413f26704e3d92ae4afed2c28c1f0e07cf73c78b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9141bd7d93d2dc4fd289577413f26704e3d92ae4afed2c28c1f0e07cf73c78b7->enter($__internal_9141bd7d93d2dc4fd289577413f26704e3d92ae4afed2c28c1f0e07cf73c78b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gaestebuch/UpdateEintraege.html.twig"));

        // line 1
        $this->loadTemplate("::basic.html.twig", "gaestebuch/UpdateEintraege.html.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("::navigation-loggedin.html.twig", "gaestebuch/UpdateEintraege.html.twig", 2)->display($context);
        // line 4
        echo "

";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Name", array()), 'label');
        echo "

";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Name", array()), 'widget', array("value" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "name", array())));
        echo "

";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Mail", array()), 'label');
        echo "
";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Mail", array()), 'widget', array("value" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "mail", array())));
        echo "


";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Nachricht", array()), 'label');
        echo "
";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Nachricht", array()), 'widget', array("value" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "nachricht", array())));
        echo "

";
        // line 19
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_9141bd7d93d2dc4fd289577413f26704e3d92ae4afed2c28c1f0e07cf73c78b7->leave($__internal_9141bd7d93d2dc4fd289577413f26704e3d92ae4afed2c28c1f0e07cf73c78b7_prof);

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
        return array (  76 => 19,  71 => 17,  67 => 16,  61 => 13,  57 => 12,  52 => 10,  47 => 8,  42 => 6,  38 => 4,  36 => 2,  34 => 1,  14 => 3,);
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
{% include '::navigation-loggedin.html.twig' %}
{% use \"form_div_layout.html.twig\" %}


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
