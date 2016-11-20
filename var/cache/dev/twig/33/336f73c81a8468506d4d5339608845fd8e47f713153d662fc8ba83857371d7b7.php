<?php

/* ::basic.html.twig */
class __TwigTemplate_b82cc37e84284e40e1715f4e71626d2f0bfa9fca4f08394289bed88de81097d8 extends Twig_Template
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
        $__internal_c2756d32433413aa99697ba1639b6a576bb6b7db8389957e33fe6e0b0a01a76e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2756d32433413aa99697ba1639b6a576bb6b7db8389957e33fe6e0b0a01a76e->enter($__internal_c2756d32433413aa99697ba1639b6a576bb6b7db8389957e33fe6e0b0a01a76e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::basic.html.twig"));

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
        
        $__internal_c2756d32433413aa99697ba1639b6a576bb6b7db8389957e33fe6e0b0a01a76e->leave($__internal_c2756d32433413aa99697ba1639b6a576bb6b7db8389957e33fe6e0b0a01a76e_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dc7d667df86697e27f8a85e84c6ea297b9a1685e7ba64ba9780844388960ce39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc7d667df86697e27f8a85e84c6ea297b9a1685e7ba64ba9780844388960ce39->enter($__internal_dc7d667df86697e27f8a85e84c6ea297b9a1685e7ba64ba9780844388960ce39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::basic.html.twig"));

        // line 15
        echo "
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_dc7d667df86697e27f8a85e84c6ea297b9a1685e7ba64ba9780844388960ce39->leave($__internal_dc7d667df86697e27f8a85e84c6ea297b9a1685e7ba64ba9780844388960ce39_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9e835e6ff1df57ab86b879704e0090d44e42ac40a218bbee4bbd85225bb374ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e835e6ff1df57ab86b879704e0090d44e42ac40a218bbee4bbd85225bb374ca->enter($__internal_9e835e6ff1df57ab86b879704e0090d44e42ac40a218bbee4bbd85225bb374ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::basic.html.twig"));

        // line 20
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/bootstrap/JQuery/JQuery.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>

    ";
        
        $__internal_9e835e6ff1df57ab86b879704e0090d44e42ac40a218bbee4bbd85225bb374ca->leave($__internal_9e835e6ff1df57ab86b879704e0090d44e42ac40a218bbee4bbd85225bb374ca_prof);

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
</head>", "::basic.html.twig", "/var/www/public/my_project/app/Resources/views/basic.html.twig");
    }
}
