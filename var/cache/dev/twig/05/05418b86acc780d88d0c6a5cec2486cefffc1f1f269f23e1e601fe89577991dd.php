<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4e744601e946c0a821c91913a6083ad64a5b90878a95db38e1ae081645a46127 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8ec6c733c609319930b58bcf42f166547261287b2eeac6de4fbe554bf8ce152e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ec6c733c609319930b58bcf42f166547261287b2eeac6de4fbe554bf8ce152e->enter($__internal_8ec6c733c609319930b58bcf42f166547261287b2eeac6de4fbe554bf8ce152e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ec6c733c609319930b58bcf42f166547261287b2eeac6de4fbe554bf8ce152e->leave($__internal_8ec6c733c609319930b58bcf42f166547261287b2eeac6de4fbe554bf8ce152e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6e7226e827285e1b78a76a020f9df5dcac75d31633e101471874d7a14846e6d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e7226e827285e1b78a76a020f9df5dcac75d31633e101471874d7a14846e6d5->enter($__internal_6e7226e827285e1b78a76a020f9df5dcac75d31633e101471874d7a14846e6d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6e7226e827285e1b78a76a020f9df5dcac75d31633e101471874d7a14846e6d5->leave($__internal_6e7226e827285e1b78a76a020f9df5dcac75d31633e101471874d7a14846e6d5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e2e99b881c7fa76bb94b6dcebec2a3f05a57e7461ce67313dd7efa9a2e0fa7ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2e99b881c7fa76bb94b6dcebec2a3f05a57e7461ce67313dd7efa9a2e0fa7ab->enter($__internal_e2e99b881c7fa76bb94b6dcebec2a3f05a57e7461ce67313dd7efa9a2e0fa7ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e2e99b881c7fa76bb94b6dcebec2a3f05a57e7461ce67313dd7efa9a2e0fa7ab->leave($__internal_e2e99b881c7fa76bb94b6dcebec2a3f05a57e7461ce67313dd7efa9a2e0fa7ab_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_73c8574ab80da1a85149ee29d6448ae711869ba03c7b0f7567396eeb706d115d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73c8574ab80da1a85149ee29d6448ae711869ba03c7b0f7567396eeb706d115d->enter($__internal_73c8574ab80da1a85149ee29d6448ae711869ba03c7b0f7567396eeb706d115d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_73c8574ab80da1a85149ee29d6448ae711869ba03c7b0f7567396eeb706d115d->leave($__internal_73c8574ab80da1a85149ee29d6448ae711869ba03c7b0f7567396eeb706d115d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/lilikovac/Documents/WT3_App/my_project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
