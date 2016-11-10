<?php

/* ::gaestebuch/gaestebuch.html.twig */
class __TwigTemplate_7637c48deda6bf76a68b37bf80fb121dccbbae231ac6b3552e957631ba28abeb extends Twig_Template
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
        $__internal_59a3d9a0601cd20bdbaec1242847f499dfe98ce5a16f62a9870c8cd58e2564a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59a3d9a0601cd20bdbaec1242847f499dfe98ce5a16f62a9870c8cd58e2564a1->enter($__internal_59a3d9a0601cd20bdbaec1242847f499dfe98ce5a16f62a9870c8cd58e2564a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::gaestebuch/gaestebuch.html.twig"));

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
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/application.css"), "html", null, true);
        echo "\">

<body>
";
        // line 12
        $this->loadTemplate("::navigation.html.twig", "::gaestebuch/gaestebuch.html.twig", 12)->display($context);
        // line 13
        echo "

<div class=\"container\">
    <div class=\"page-header\">
        <h1 class=\"display-1\">Gästebuch</h1>
        <p class=\"lead page-description\">Sie sind eingeloggt.</p>
    </div>
</div>

";
        
        $__internal_59a3d9a0601cd20bdbaec1242847f499dfe98ce5a16f62a9870c8cd58e2564a1->leave($__internal_59a3d9a0601cd20bdbaec1242847f499dfe98ce5a16f62a9870c8cd58e2564a1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1748995932e2e448be0d1c0892945e53843f2540e31a02e75d12ada94d9c4b1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1748995932e2e448be0d1c0892945e53843f2540e31a02e75d12ada94d9c4b1c->enter($__internal_1748995932e2e448be0d1c0892945e53843f2540e31a02e75d12ada94d9c4b1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::gaestebuch/gaestebuch.html.twig"));

        echo "You're logged in!";
        
        $__internal_1748995932e2e448be0d1c0892945e53843f2540e31a02e75d12ada94d9c4b1c->leave($__internal_1748995932e2e448be0d1c0892945e53843f2540e31a02e75d12ada94d9c4b1c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cf79188b5488913195683321c92eec3fa0aab4aff4df48cba8f5784331c8fb5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf79188b5488913195683321c92eec3fa0aab4aff4df48cba8f5784331c8fb5e->enter($__internal_cf79188b5488913195683321c92eec3fa0aab4aff4df48cba8f5784331c8fb5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::gaestebuch/gaestebuch.html.twig"));

        
        $__internal_cf79188b5488913195683321c92eec3fa0aab4aff4df48cba8f5784331c8fb5e->leave($__internal_cf79188b5488913195683321c92eec3fa0aab4aff4df48cba8f5784331c8fb5e_prof);

    }

    public function getTemplateName()
    {
        return "::gaestebuch/gaestebuch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 6,  69 => 5,  53 => 13,  51 => 12,  45 => 9,  41 => 8,  36 => 7,  34 => 6,  30 => 5,  24 => 1,);
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
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('lib/bootstrap/css/bootstrap.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/application.css') }}\">

<body>
{% include '::navigation.html.twig' %}


<div class=\"container\">
    <div class=\"page-header\">
        <h1 class=\"display-1\">Gästebuch</h1>
        <p class=\"lead page-description\">Sie sind eingeloggt.</p>
    </div>
</div>

{#
<form action=\"gb.php\" method=\"get\">

    <table class=\"table\">
        <tr>
            <td>Name:<input name=\"name\" type=\"text\" size=\"20\" maxlength=\"30\">
            </td>
        </tr><!--Erstellen der Textfelder-->
        <tr>
            <td colspan=\"2\">Mail:<input name=\"mail\" type=\"text\" size=\"60\" maxlength=\"30\"></td></tr>



        <tr><td><p>Ihr Text:<br>
                    <textarea name=\"beitrag\" cols=\"50\" rows=\"10\"></textarea></p><td><!--Erstellen der Textarea-->
                <b>
                    <?php
\t\t\$database =\"Gaestebuch\";
\t\t\$host =\"localhost\";
\t\t\$user = \"Christoph\";
\t\t\$user_Beitrag = \"root\";
\t\t\$dbID = mysql_connect(\$host,\$user_Beitrag) or die(mysql_error());//Einloggen in mysql
\tmysql_select_db(\$database);

\t\$result = mysql_query(\"select * from beitrag\");

\t?>
                    <textarea readonly name=\"fertig\" cols=\"90\" rows= \"20\" >
\t\t<?php
\t\techo \"\\n\";

\t\tfor(\$i=0; \$i < mysql_num_rows(\$result);\$i++)//Ausgabe
\t\t{
\t\t\techo \"Nutzer: \";
\t\t\t\$row= mysql_fetch_row(\$result);
\t\t\tfor(\$j=0; \$j < mysql_num_fields(\$result);\$j++){
\t\t\t\techo \" \".\$row[\$j].\" \";

\t\t\t}
\t\t\techo \"\\n\";
\t\t}
\t\t?>

                    </textarea><td><tr>

        <tr><td><input type=\"submit\"><!--Button zum Daten �bermitteln-->
                <input type=\"reset\" name=\"loeschen\" value=\"L�schen\"></td></tr><!--Resetbutton -->

    </table>#}
", "::gaestebuch/gaestebuch.html.twig", "/Users/lilikovac/Documents/WT3_App/my_project/app/Resources/views/gaestebuch/gaestebuch.html.twig");
    }
}
