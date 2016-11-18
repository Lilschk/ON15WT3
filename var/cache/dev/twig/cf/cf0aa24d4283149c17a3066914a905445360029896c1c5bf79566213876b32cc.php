<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_0bb4e127cc5a96ae5a607243c91f4c29ff4f87ac973cd738ceb7dd85a646b8cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_0072f6a57ed3b95f17c47b3c1bf1f4f2b880a7d17dc988ff50b131b590c79f35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0072f6a57ed3b95f17c47b3c1bf1f4f2b880a7d17dc988ff50b131b590c79f35->enter($__internal_0072f6a57ed3b95f17c47b3c1bf1f4f2b880a7d17dc988ff50b131b590c79f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0072f6a57ed3b95f17c47b3c1bf1f4f2b880a7d17dc988ff50b131b590c79f35->leave($__internal_0072f6a57ed3b95f17c47b3c1bf1f4f2b880a7d17dc988ff50b131b590c79f35_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee8ff42a566e00645cf19ba3a8d9ab1bf0a99d5cd9326253dcceb362275a6187 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee8ff42a566e00645cf19ba3a8d9ab1bf0a99d5cd9326253dcceb362275a6187->enter($__internal_ee8ff42a566e00645cf19ba3a8d9ab1bf0a99d5cd9326253dcceb362275a6187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        echo "Redirection Intercepted";
        
        $__internal_ee8ff42a566e00645cf19ba3a8d9ab1bf0a99d5cd9326253dcceb362275a6187->leave($__internal_ee8ff42a566e00645cf19ba3a8d9ab1bf0a99d5cd9326253dcceb362275a6187_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a26b1b34c1fc37a356a6362acf14539d4751671fe5880c6d4a2f4fe58d481926 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a26b1b34c1fc37a356a6362acf14539d4751671fe5880c6d4a2f4fe58d481926->enter($__internal_a26b1b34c1fc37a356a6362acf14539d4751671fe5880c6d4a2f4fe58d481926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_a26b1b34c1fc37a356a6362acf14539d4751671fe5880c6d4a2f4fe58d481926->leave($__internal_a26b1b34c1fc37a356a6362acf14539d4751671fe5880c6d4a2f4fe58d481926_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "/Users/lilikovac/Documents/WT3_App/my_project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
