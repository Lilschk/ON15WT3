<?php

/* security/login.html.twig */
class __TwigTemplate_f243961f0d1795e1f607144d33fe216470f2ab2022cb7c6751d218a2f97e14cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b19ea4188622037a41351556d2180749713cc000356cefb189d9f7ef6a71aae2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b19ea4188622037a41351556d2180749713cc000356cefb189d9f7ef6a71aae2->enter($__internal_b19ea4188622037a41351556d2180749713cc000356cefb189d9f7ef6a71aae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 23
        echo "
";
        // line 24
        $this->loadTemplate("::basic.html.twig", "security/login.html.twig", 24)->display($context);
        // line 25
        $this->loadTemplate("::navigation.html.twig", "security/login.html.twig", 25)->display($context);
        // line 26
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_b19ea4188622037a41351556d2180749713cc000356cefb189d9f7ef6a71aae2->leave($__internal_b19ea4188622037a41351556d2180749713cc000356cefb189d9f7ef6a71aae2_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_0dc6f489ed8b4a0b578a2036c177eb729482305d72a277b529c3868874cff8e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dc6f489ed8b4a0b578a2036c177eb729482305d72a277b529c3868874cff8e6->enter($__internal_0dc6f489ed8b4a0b578a2036c177eb729482305d72a277b529c3868874cff8e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "security/login.html.twig"));

        // line 27
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <h1>Login!</h1>
                ";
        // line 31
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 32
            echo "                    <div class=\"alert alert-danger\">
                        ";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 36
        echo "                ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_username", array()), 'row');
        echo "
                ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_password", array()), 'row');
        echo "
                ";
        // line 39
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_0dc6f489ed8b4a0b578a2036c177eb729482305d72a277b529c3868874cff8e6->leave($__internal_0dc6f489ed8b4a0b578a2036c177eb729482305d72a277b529c3868874cff8e6_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 39,  68 => 38,  64 => 37,  59 => 36,  53 => 33,  50 => 32,  48 => 31,  42 => 27,  30 => 26,  28 => 25,  26 => 24,  23 => 23,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<form action=\"{{ path('login') }}\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />

    #}
{#
        If you want to control the URL the user
        is redirected to on success (more details below)
        <input type=\"hidden\" name=\"_target_path\" value=\"/account\" />
    #}{#


    <button type=\"submit\">login</button>
</form>#}

{% include '::basic.html.twig' %}
{% include '::navigation.html.twig' %}
{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <h1>Login!</h1>
                {% if error %}
                    <div class=\"alert alert-danger\">
                        {{ error.messageKey|trans(error.messageData, 'security') }}
                    </div>
                {% endif %}
                {{ form_start(form) }}
                {{ form_row(form._username) }}
                {{ form_row(form._password) }}
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "security/login.html.twig", "/Users/lilikovac/Documents/WT3_App/my_project/app/Resources/views/security/login.html.twig");
    }
}
