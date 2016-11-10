<?php

/* base.html.twig */
class __TwigTemplate_e2c74115363e2dba7850ff361f5322cce7191f69ff02e5bda94fe54db0047d6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_840c235fa77beb150f433294a0d1620524479bb2436e3c1a21b87384ad20c2da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_840c235fa77beb150f433294a0d1620524479bb2436e3c1a21b87384ad20c2da->enter($__internal_840c235fa77beb150f433294a0d1620524479bb2436e3c1a21b87384ad20c2da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo "        <!--<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/application.css"), "html", null, true);
        echo "\">
        <!--<link rel=\"stylesheet\" tyoe=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/normalize.css"), "html", null, true);
        echo "\">-->
    </head>

    <body>
        ";
        // line 14
        $this->loadTemplate("::navigation.html.twig", "base.html.twig", 14)->display($context);
        // line 15
        echo "
        <div class=\"container\">
            <div class=\"page-header\">
                <h1 class=\"display-1\">Gästebuch</h1>
                <p class=\"lead page-description\">Schreibe einen Beitrag.</p>
            </div>
            <a class=\"btn btn-primary btn-lg btn-block\" href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("guestbook_logged");
        echo "\" role=\"button\">Einloggen!</a>

            <!-- <div class=\"row\">
                <div class=\"col-sm-8 page-main\">
                    ";
        // line 25
        $this->displayBlock('body', $context, $blocks);
        // line 26
        echo "                </div>

                ";
        // line 28
        $this->loadTemplate("::sidebar.html.twig", "base.html.twig", 28)->display($context);
        // line 29
        echo "            </div>
        </div>-->

        <footer class=\"page-footer\">

            <p>
                <a href=\"#\">Back to top</a>
            </p>
        </footer>

        ";
        // line 39
        $this->displayBlock('javascripts', $context, $blocks);
        // line 40
        echo "    </body>
</html>
";
        
        $__internal_840c235fa77beb150f433294a0d1620524479bb2436e3c1a21b87384ad20c2da->leave($__internal_840c235fa77beb150f433294a0d1620524479bb2436e3c1a21b87384ad20c2da_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_df86bebf1ec39d1b156713476ccd4873ca7437c041f31aeb6c4ee31b31016ce8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df86bebf1ec39d1b156713476ccd4873ca7437c041f31aeb6c4ee31b31016ce8->enter($__internal_df86bebf1ec39d1b156713476ccd4873ca7437c041f31aeb6c4ee31b31016ce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";
        
        $__internal_df86bebf1ec39d1b156713476ccd4873ca7437c041f31aeb6c4ee31b31016ce8->leave($__internal_df86bebf1ec39d1b156713476ccd4873ca7437c041f31aeb6c4ee31b31016ce8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_abac5f39b752b8ae9c7db9e2d273a941e1c9885ccf87a89511c4fbe331bc3b0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abac5f39b752b8ae9c7db9e2d273a941e1c9885ccf87a89511c4fbe331bc3b0e->enter($__internal_abac5f39b752b8ae9c7db9e2d273a941e1c9885ccf87a89511c4fbe331bc3b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_abac5f39b752b8ae9c7db9e2d273a941e1c9885ccf87a89511c4fbe331bc3b0e->leave($__internal_abac5f39b752b8ae9c7db9e2d273a941e1c9885ccf87a89511c4fbe331bc3b0e_prof);

    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        $__internal_f05d60cdf7cec27512484fb865281c5ded06c22224605e7c1dc84e07c6f1b750 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f05d60cdf7cec27512484fb865281c5ded06c22224605e7c1dc84e07c6f1b750->enter($__internal_f05d60cdf7cec27512484fb865281c5ded06c22224605e7c1dc84e07c6f1b750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_f05d60cdf7cec27512484fb865281c5ded06c22224605e7c1dc84e07c6f1b750->leave($__internal_f05d60cdf7cec27512484fb865281c5ded06c22224605e7c1dc84e07c6f1b750_prof);

    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_57f2dea60387070c3786d47b675c52c0a4e80e6f73f26bff0fd71f87e5f9852a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57f2dea60387070c3786d47b675c52c0a4e80e6f73f26bff0fd71f87e5f9852a->enter($__internal_57f2dea60387070c3786d47b675c52c0a4e80e6f73f26bff0fd71f87e5f9852a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_57f2dea60387070c3786d47b675c52c0a4e80e6f73f26bff0fd71f87e5f9852a->leave($__internal_57f2dea60387070c3786d47b675c52c0a4e80e6f73f26bff0fd71f87e5f9852a_prof);

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
        return array (  140 => 39,  129 => 25,  118 => 6,  106 => 5,  97 => 40,  95 => 39,  83 => 29,  81 => 28,  77 => 26,  75 => 25,  68 => 21,  60 => 15,  58 => 14,  51 => 10,  47 => 9,  43 => 8,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <!--<link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('lib/bootstrap/css/bootstrap.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/application.css') }}\">
        <!--<link rel=\"stylesheet\" tyoe=\"text/css\" href=\"{{ asset('lib/normalize.css') }}\">-->
    </head>

    <body>
        {% include '::navigation.html.twig' %}

        <div class=\"container\">
            <div class=\"page-header\">
                <h1 class=\"display-1\">Gästebuch</h1>
                <p class=\"lead page-description\">Schreibe einen Beitrag.</p>
            </div>
            <a class=\"btn btn-primary btn-lg btn-block\" href=\"{{ path('guestbook_logged') }}\" role=\"button\">Einloggen!</a>

            <!-- <div class=\"row\">
                <div class=\"col-sm-8 page-main\">
                    {% block body %}{% endblock %}
                </div>

                {% include '::sidebar.html.twig' %}
            </div>
        </div>-->

        <footer class=\"page-footer\">

            <p>
                <a href=\"#\">Back to top</a>
            </p>
        </footer>

        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/lilikovac/Documents/WT3_App/my_project/app/Resources/views/base.html.twig");
    }
}
