<?php

/* gaestebuch/formdone.html.twig */
class __TwigTemplate_6dcb348e242f12413587ff8469281092533061ca8921b57e55771bf66d2a7845 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_120bf6a314865e247f35b47e3ee6b10d3d4a9c0c9167713eba7706fe5d559447 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_120bf6a314865e247f35b47e3ee6b10d3d4a9c0c9167713eba7706fe5d559447->enter($__internal_120bf6a314865e247f35b47e3ee6b10d3d4a9c0c9167713eba7706fe5d559447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gaestebuch/formdone.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    ";
        $this->loadTemplate("::basic.html.twig", "gaestebuch/formdone.html.twig", 7)->display($context);
        // line 8
        echo "
<body>
";
        // line 10
        $this->loadTemplate("::navigation-loggedin.html.twig", "gaestebuch/formdone.html.twig", 10)->display($context);
        // line 11
        echo "

<div class=\"container\">
    <div class=\"page-header\">
        <h1 class=\"display-1\">Gästebuch</h1>
        <p class=\"lead page-description\">Sie haben eine Nachricht geschrieben.</p>
        <p> ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "Name", array()), "html", null, true);
        echo " hat eine Nachricht geschrieben:</p>
        <p>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "Mail", array()), "html", null, true);
        echo "</p>
        <p>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "Nachricht", array()), "html", null, true);
        echo "</p>
        <p>Dankeschön für Ihren Beitrag!</p>
    </div>
</div>";
        
        $__internal_120bf6a314865e247f35b47e3ee6b10d3d4a9c0c9167713eba7706fe5d559447->leave($__internal_120bf6a314865e247f35b47e3ee6b10d3d4a9c0c9167713eba7706fe5d559447_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_192779f689baaac919d386e3927858d79f2497498e05edde9f0d22030eba8c7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_192779f689baaac919d386e3927858d79f2497498e05edde9f0d22030eba8c7f->enter($__internal_192779f689baaac919d386e3927858d79f2497498e05edde9f0d22030eba8c7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "gaestebuch/formdone.html.twig"));

        echo "You're logged in!";
        
        $__internal_192779f689baaac919d386e3927858d79f2497498e05edde9f0d22030eba8c7f->leave($__internal_192779f689baaac919d386e3927858d79f2497498e05edde9f0d22030eba8c7f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f01f5685f7579104bfc97ed38d35b2dcb4b215aab6fc0d038fc541a307afdcfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f01f5685f7579104bfc97ed38d35b2dcb4b215aab6fc0d038fc541a307afdcfd->enter($__internal_f01f5685f7579104bfc97ed38d35b2dcb4b215aab6fc0d038fc541a307afdcfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "gaestebuch/formdone.html.twig"));

        
        $__internal_f01f5685f7579104bfc97ed38d35b2dcb4b215aab6fc0d038fc541a307afdcfd->leave($__internal_f01f5685f7579104bfc97ed38d35b2dcb4b215aab6fc0d038fc541a307afdcfd_prof);

    }

    public function getTemplateName()
    {
        return "gaestebuch/formdone.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 6,  72 => 5,  61 => 19,  57 => 18,  53 => 17,  45 => 11,  43 => 10,  39 => 8,  36 => 7,  34 => 6,  30 => 5,  24 => 1,);
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
    <title>{% block title %}You're logged in!{% endblock %}</title>
    {% block stylesheets %}{% endblock %}
    {% include '::basic.html.twig' %}

<body>
{% include '::navigation-loggedin.html.twig' %}


<div class=\"container\">
    <div class=\"page-header\">
        <h1 class=\"display-1\">Gästebuch</h1>
        <p class=\"lead page-description\">Sie haben eine Nachricht geschrieben.</p>
        <p> {{  post.Name }} hat eine Nachricht geschrieben:</p>
        <p>{{ post.Mail }}</p>
        <p>{{ post.Nachricht }}</p>
        <p>Dankeschön für Ihren Beitrag!</p>
    </div>
</div>", "gaestebuch/formdone.html.twig", "/Users/lilikovac/Documents/WT3_App/my_project/app/Resources/views/gaestebuch/formdone.html.twig");
    }
}
