<?php

/* security/login.html.twig */
class __TwigTemplate_702c09c7d590dc4e27633ea646c142a4cf97725692d157b511689f05c1b5d73c extends Twig_Template
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
        $__internal_dea90106b77465e8a78c7d27ddf7fc5f35bdf5e8d94435780200fc755c1bab8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dea90106b77465e8a78c7d27ddf7fc5f35bdf5e8d94435780200fc755c1bab8b->enter($__internal_dea90106b77465e8a78c7d27ddf7fc5f35bdf5e8d94435780200fc755c1bab8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        $this->loadTemplate("::basic.html.twig", "security/login.html.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("::navigation.html.twig", "security/login.html.twig", 2)->display($context);
        // line 3
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_dea90106b77465e8a78c7d27ddf7fc5f35bdf5e8d94435780200fc755c1bab8b->leave($__internal_dea90106b77465e8a78c7d27ddf7fc5f35bdf5e8d94435780200fc755c1bab8b_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_c45bc4a96443fa235c0680155decd435f5fdc34b4954cce4a343abc5dc98367c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c45bc4a96443fa235c0680155decd435f5fdc34b4954cce4a343abc5dc98367c->enter($__internal_c45bc4a96443fa235c0680155decd435f5fdc34b4954cce4a343abc5dc98367c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "security/login.html.twig"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <h1>Login!</h1>
                ";
        // line 8
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 9
            echo "                    <div class=\"alert alert-danger\">
                        ";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 13
        echo "                ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_username", array()), 'row');
        echo "
                ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_password", array()), 'row');
        echo "
                ";
        // line 16
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_c45bc4a96443fa235c0680155decd435f5fdc34b4954cce4a343abc5dc98367c->leave($__internal_c45bc4a96443fa235c0680155decd435f5fdc34b4954cce4a343abc5dc98367c_prof);

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
        return array (  69 => 16,  65 => 15,  61 => 14,  56 => 13,  50 => 10,  47 => 9,  45 => 8,  39 => 4,  27 => 3,  25 => 2,  23 => 1,);
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
{% endblock %}", "security/login.html.twig", "/var/www/public/my_project/app/Resources/views/security/login.html.twig");
    }
}
