<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_2902b67de28514e5091ea5cf3b800e8e9c2f2733575b3b108dec597993f47737 extends Twig_Template
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
        $__internal_6d45cb3b6ff4121217c59690dc0126b4ac98ed75e2a9fddac49d74bec90a1352 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d45cb3b6ff4121217c59690dc0126b4ac98ed75e2a9fddac49d74bec90a1352->enter($__internal_6d45cb3b6ff4121217c59690dc0126b4ac98ed75e2a9fddac49d74bec90a1352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d45cb3b6ff4121217c59690dc0126b4ac98ed75e2a9fddac49d74bec90a1352->leave($__internal_6d45cb3b6ff4121217c59690dc0126b4ac98ed75e2a9fddac49d74bec90a1352_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4d1a2a18ca75908ef2a69367c4a37a122ce1c48015cfb4849abe20f0bdabe4b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d1a2a18ca75908ef2a69367c4a37a122ce1c48015cfb4849abe20f0bdabe4b7->enter($__internal_4d1a2a18ca75908ef2a69367c4a37a122ce1c48015cfb4849abe20f0bdabe4b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4d1a2a18ca75908ef2a69367c4a37a122ce1c48015cfb4849abe20f0bdabe4b7->leave($__internal_4d1a2a18ca75908ef2a69367c4a37a122ce1c48015cfb4849abe20f0bdabe4b7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_aee9ccab804c54731fdcb1d41be8b5e3c71f25c83a1fcdc920d11cb17a33e261 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aee9ccab804c54731fdcb1d41be8b5e3c71f25c83a1fcdc920d11cb17a33e261->enter($__internal_aee9ccab804c54731fdcb1d41be8b5e3c71f25c83a1fcdc920d11cb17a33e261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_aee9ccab804c54731fdcb1d41be8b5e3c71f25c83a1fcdc920d11cb17a33e261->leave($__internal_aee9ccab804c54731fdcb1d41be8b5e3c71f25c83a1fcdc920d11cb17a33e261_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6931800a2a66be3ada5825ea5169fcb8a51cd43b814c2d953c9468b24798bb87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6931800a2a66be3ada5825ea5169fcb8a51cd43b814c2d953c9468b24798bb87->enter($__internal_6931800a2a66be3ada5825ea5169fcb8a51cd43b814c2d953c9468b24798bb87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_6931800a2a66be3ada5825ea5169fcb8a51cd43b814c2d953c9468b24798bb87->leave($__internal_6931800a2a66be3ada5825ea5169fcb8a51cd43b814c2d953c9468b24798bb87_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/var/www/public/my_project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
