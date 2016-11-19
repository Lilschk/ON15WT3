<?php

/* ::basic.html.twig */
class __TwigTemplate_b9e4713e82cbd8f81877dcce235144a0beaa68e81bffb570943acc5074f776bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7aac20a01c7647187db38a80d203485c1ce1970c69cd326b201c05e5a060f93c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aac20a01c7647187db38a80d203485c1ce1970c69cd326b201c05e5a060f93c->enter($__internal_7aac20a01c7647187db38a80d203485c1ce1970c69cd326b201c05e5a060f93c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::basic.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    ";
        // line 5
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 6
            echo "
        <title>Sie sind eingeloggt!</title>
    ";
        } else {
            // line 9
            echo "        <title>Welcome!</title>

    ";
        }
        // line 12
        echo "

    ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "
    ";
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        // line 24
        echo "</head>";
        
        $__internal_7aac20a01c7647187db38a80d203485c1ce1970c69cd326b201c05e5a060f93c->leave($__internal_7aac20a01c7647187db38a80d203485c1ce1970c69cd326b201c05e5a060f93c_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fbe5960859123cd0fff4deecb4af53e7556a7c2284a572ea8872f215eed68c11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbe5960859123cd0fff4deecb4af53e7556a7c2284a572ea8872f215eed68c11->enter($__internal_fbe5960859123cd0fff4deecb4af53e7556a7c2284a572ea8872f215eed68c11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::basic.html.twig"));

        // line 15
        echo "
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_fbe5960859123cd0fff4deecb4af53e7556a7c2284a572ea8872f215eed68c11->leave($__internal_fbe5960859123cd0fff4deecb4af53e7556a7c2284a572ea8872f215eed68c11_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dc986bfba285affd1f205b46494fdfa7283407a6f665c65f4d58825b74d7441b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc986bfba285affd1f205b46494fdfa7283407a6f665c65f4d58825b74d7441b->enter($__internal_dc986bfba285affd1f205b46494fdfa7283407a6f665c65f4d58825b74d7441b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::basic.html.twig"));

        // line 20
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/bootstrap/JQuery/JQuery.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>

    ";
        
        $__internal_dc986bfba285affd1f205b46494fdfa7283407a6f665c65f4d58825b74d7441b->leave($__internal_dc986bfba285affd1f205b46494fdfa7283407a6f665c65f4d58825b74d7441b_prof);

    }

    public function getTemplateName()
    {
        return "::basic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  78 => 19,  69 => 16,  66 => 15,  60 => 14,  53 => 24,  51 => 19,  48 => 18,  46 => 14,  42 => 12,  37 => 9,  32 => 6,  30 => 5,  24 => 1,);
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
    {% if is_granted('ROLE_USER') %}

        <title>Sie sind eingeloggt!</title>
    {% else %}
        <title>Welcome!</title>

    {% endif %}


    {% block stylesheets %}

    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('lib/bootstrap/css/bootstrap.css') }}\">
    {% endblock %}

    {% block javascripts %}
        <script type=\"text/javascript\" src=\"{{ asset('lib/bootstrap/JQuery/JQuery.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('lib/bootstrap/js/bootstrap.js') }}\"></script>

    {% endblock %}
</head>", "::basic.html.twig", "/Users/lilikovac/Documents/WT3_App/my_project/app/Resources/views/basic.html.twig");
    }
}
