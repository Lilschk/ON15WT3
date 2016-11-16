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
        $__internal_7cac697fd4c440a32f51e4e21850c836b5f234c8ac3fc3a0ceb6d808f27665ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cac697fd4c440a32f51e4e21850c836b5f234c8ac3fc3a0ceb6d808f27665ef->enter($__internal_7cac697fd4c440a32f51e4e21850c836b5f234c8ac3fc3a0ceb6d808f27665ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::gaestebuch/gaestebuch.html.twig"));

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
        $this->loadTemplate("::navigation-loggedin.html.twig", "::gaestebuch/gaestebuch.html.twig", 12)->display($context);
        // line 13
        echo "

<div class=\"container\">
    <div class=\"page-header\">
        <h1 class=\"display-1\">Gästebuch</h1>
        <p class=\"lead page-description\">Sie sind eingeloggt.</p>
    </div>
</div>

";
        
        $__internal_7cac697fd4c440a32f51e4e21850c836b5f234c8ac3fc3a0ceb6d808f27665ef->leave($__internal_7cac697fd4c440a32f51e4e21850c836b5f234c8ac3fc3a0ceb6d808f27665ef_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_26c64ba71c3ad3727837d7874a4d6e648fa31e0fd1714f90446faa7fa5075462 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26c64ba71c3ad3727837d7874a4d6e648fa31e0fd1714f90446faa7fa5075462->enter($__internal_26c64ba71c3ad3727837d7874a4d6e648fa31e0fd1714f90446faa7fa5075462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::gaestebuch/gaestebuch.html.twig"));

        echo "You're logged in!";
        
        $__internal_26c64ba71c3ad3727837d7874a4d6e648fa31e0fd1714f90446faa7fa5075462->leave($__internal_26c64ba71c3ad3727837d7874a4d6e648fa31e0fd1714f90446faa7fa5075462_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_91b81ea78b50fa6c2286cc8578f57f0ad2f093f4fb01affed8bbc72d53244341 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91b81ea78b50fa6c2286cc8578f57f0ad2f093f4fb01affed8bbc72d53244341->enter($__internal_91b81ea78b50fa6c2286cc8578f57f0ad2f093f4fb01affed8bbc72d53244341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::gaestebuch/gaestebuch.html.twig"));

        
        $__internal_91b81ea78b50fa6c2286cc8578f57f0ad2f093f4fb01affed8bbc72d53244341->leave($__internal_91b81ea78b50fa6c2286cc8578f57f0ad2f093f4fb01affed8bbc72d53244341_prof);

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
{% include '::navigation-loggedin.html.twig' %}


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
