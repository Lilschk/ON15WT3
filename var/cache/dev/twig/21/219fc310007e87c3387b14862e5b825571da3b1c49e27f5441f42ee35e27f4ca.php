<?php

/* base.html.twig */
class __TwigTemplate_daced8f14d59ebde326da0cc3bbf8dcec724dcd2c82beee269194d8cb4b81d3b extends Twig_Template
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
        $__internal_d5acd4447bef20ae87f6c9b823c3c18577ef1ecc3781f303710d98a49bfbc517 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5acd4447bef20ae87f6c9b823c3c18577ef1ecc3781f303710d98a49bfbc517->enter($__internal_d5acd4447bef20ae87f6c9b823c3c18577ef1ecc3781f303710d98a49bfbc517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "
        ";
        // line 2
        $this->loadTemplate("::basic.html.twig", "base.html.twig", 2)->display($context);
        // line 3
        echo "

    <body>
        ";
        // line 6
        $this->loadTemplate("::navigation.html.twig", "base.html.twig", 6)->display($context);
        // line 7
        echo "
        <div class=\"container\">
            <div class=\"page-header\">
                <h1 class=\"display-1\">Gästebuch</h1>
                <p class=\"lead page-description\">Schreibe einen Beitrag.</p>
            </div>
            <a class=\"btn btn-primary btn-lg btn-block\" href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" role=\"button\">Einloggen!</a>


                    ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "

";
        
        $__internal_d5acd4447bef20ae87f6c9b823c3c18577ef1ecc3781f303710d98a49bfbc517->leave($__internal_d5acd4447bef20ae87f6c9b823c3c18577ef1ecc3781f303710d98a49bfbc517_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_cccd75fc1fbd93ae018d9004c454ae1e431d1f208489dd76decd7971bda6831c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cccd75fc1fbd93ae018d9004c454ae1e431d1f208489dd76decd7971bda6831c->enter($__internal_cccd75fc1fbd93ae018d9004c454ae1e431d1f208489dd76decd7971bda6831c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_cccd75fc1fbd93ae018d9004c454ae1e431d1f208489dd76decd7971bda6831c->leave($__internal_cccd75fc1fbd93ae018d9004c454ae1e431d1f208489dd76decd7971bda6831c_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 16,  51 => 17,  49 => 16,  43 => 13,  35 => 7,  33 => 6,  28 => 3,  26 => 2,  23 => 1,);
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
        {%  include '::basic.html.twig' %}


    <body>
        {% include '::navigation.html.twig' %}

        <div class=\"container\">
            <div class=\"page-header\">
                <h1 class=\"display-1\">Gästebuch</h1>
                <p class=\"lead page-description\">Schreibe einen Beitrag.</p>
            </div>
            <a class=\"btn btn-primary btn-lg btn-block\" href=\"{{ path('login') }}\" role=\"button\">Einloggen!</a>


                    {% block body %}{% endblock %}


", "base.html.twig", "/var/www/public/my_project/app/Resources/views/base.html.twig");
    }
}
