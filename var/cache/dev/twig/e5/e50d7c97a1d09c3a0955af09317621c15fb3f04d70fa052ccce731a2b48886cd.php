<?php

/* registration/registration.html.twig */
class __TwigTemplate_ab569ff8c450dc75a2ad2f3206a5b75afdcfe7a366d51b78ad5127c3d152cce1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_251a948a78e4d9de6b5cb6c768ab8245cf199ad41bb87041e2ba87bc28e1f7b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_251a948a78e4d9de6b5cb6c768ab8245cf199ad41bb87041e2ba87bc28e1f7b4->enter($__internal_251a948a78e4d9de6b5cb6c768ab8245cf199ad41bb87041e2ba87bc28e1f7b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "registration/registration.html.twig"));

        // line 1
        $this->loadTemplate("::basic.html.twig", "registration/registration.html.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("::navigation.html.twig", "registration/registration.html.twig", 2)->display($context);
        // line 3
        echo "
";
        // line 4
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-group")));
        echo "

<div class=\"form-group\">

    <div class=\"form-group\">
    <label for=\"Username\">Username</label>
    ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'row');
        echo "
    ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget');
        echo "

    </div>

<div class=\"form-group\">
    <label for=\"exampleInputEmail1\">Email address</label>
    ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
    </div>
<div class=\"form-group\">
    <label for=\"exampleInputPassword1\">Password</label>
    ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row');
        echo "

    </div>

    ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row');
        echo "

<button onclick=\"validateForm()\" type=\"submit\" class=\"btn btn-primary\">Register!</button>

";
        // line 29
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>

    <script> function validateForm() {
            var x = document.forms[\"user\"][\"user[username]\"].value;
            if (x == null || x == \"\") {
                alert(\"Name must be filled out\");
                return false;
            }
            var y = document.forms[\"user\"][\"user[email]\"].value
            if (/^\\w+([\\.-]?\\w+)*@\\w+([\\.-]?\\w+)*(\\.\\w{2,3})+\$/.test(y)) {
                return (true)
            }
            alert(\"You have entered an invalid email address!\")
            return (false)

        }
    </script>";
        
        $__internal_251a948a78e4d9de6b5cb6c768ab8245cf199ad41bb87041e2ba87bc28e1f7b4->leave($__internal_251a948a78e4d9de6b5cb6c768ab8245cf199ad41bb87041e2ba87bc28e1f7b4_prof);

    }

    public function getTemplateName()
    {
        return "registration/registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 29,  65 => 25,  58 => 21,  51 => 17,  42 => 11,  38 => 10,  29 => 4,  26 => 3,  24 => 2,  22 => 1,);
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

{{ form_start(form, {'attr': {'class': 'form-group'}}) }}

<div class=\"form-group\">

    <div class=\"form-group\">
    <label for=\"Username\">Username</label>
    {{ form_row(form.username)  }}
    {{ form_widget(form.username) }}

    </div>

<div class=\"form-group\">
    <label for=\"exampleInputEmail1\">Email address</label>
    {{ form_row(form.email) }}
    </div>
<div class=\"form-group\">
    <label for=\"exampleInputPassword1\">Password</label>
    {{ form_row(form.plainPassword.first) }}

    </div>

    {{ form_row(form.plainPassword.second) }}

<button onclick=\"validateForm()\" type=\"submit\" class=\"btn btn-primary\">Register!</button>

{{ form_end(form) }}
    </div>

    <script> function validateForm() {
            var x = document.forms[\"user\"][\"user[username]\"].value;
            if (x == null || x == \"\") {
                alert(\"Name must be filled out\");
                return false;
            }
            var y = document.forms[\"user\"][\"user[email]\"].value
            if (/^\\w+([\\.-]?\\w+)*@\\w+([\\.-]?\\w+)*(\\.\\w{2,3})+\$/.test(y)) {
                return (true)
            }
            alert(\"You have entered an invalid email address!\")
            return (false)

        }
    </script>", "registration/registration.html.twig", "/var/www/public/my_project/app/Resources/views/registration/registration.html.twig");
    }
}
