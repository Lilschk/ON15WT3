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
        $__internal_f4c24e4d56d0a7bae0437a4c81ee8af1ea003032d298fc3b8d12fedc29ed2bd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4c24e4d56d0a7bae0437a4c81ee8af1ea003032d298fc3b8d12fedc29ed2bd6->enter($__internal_f4c24e4d56d0a7bae0437a4c81ee8af1ea003032d298fc3b8d12fedc29ed2bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::gaestebuch/gaestebuch.html.twig"));

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

<body>
";
        // line 11
        $this->loadTemplate("::navigation-loggedin.html.twig", "::gaestebuch/gaestebuch.html.twig", 11)->display($context);
        // line 12
        echo "

<div class=\"container\">
    <div class=\"page-header\">
        <h1 class=\"display-1\">Gästebuch</h1>
        <p class=\"lead page-description\">Sie sind eingeloggt.</p>
    </div>
</div>

";
        
        $__internal_f4c24e4d56d0a7bae0437a4c81ee8af1ea003032d298fc3b8d12fedc29ed2bd6->leave($__internal_f4c24e4d56d0a7bae0437a4c81ee8af1ea003032d298fc3b8d12fedc29ed2bd6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bae44618c5c17de60135a6dd5cec206df3e4d387d3ee1e4b045a920f87823495 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bae44618c5c17de60135a6dd5cec206df3e4d387d3ee1e4b045a920f87823495->enter($__internal_bae44618c5c17de60135a6dd5cec206df3e4d387d3ee1e4b045a920f87823495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::gaestebuch/gaestebuch.html.twig"));

        echo "You're logged in!";
        
        $__internal_bae44618c5c17de60135a6dd5cec206df3e4d387d3ee1e4b045a920f87823495->leave($__internal_bae44618c5c17de60135a6dd5cec206df3e4d387d3ee1e4b045a920f87823495_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fb9bfce2c6c0adfb91101d43f4fdeedc9d8b6fb4714b927b2cfa28ddfa30f395 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb9bfce2c6c0adfb91101d43f4fdeedc9d8b6fb4714b927b2cfa28ddfa30f395->enter($__internal_fb9bfce2c6c0adfb91101d43f4fdeedc9d8b6fb4714b927b2cfa28ddfa30f395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::gaestebuch/gaestebuch.html.twig"));

        
        $__internal_fb9bfce2c6c0adfb91101d43f4fdeedc9d8b6fb4714b927b2cfa28ddfa30f395->leave($__internal_fb9bfce2c6c0adfb91101d43f4fdeedc9d8b6fb4714b927b2cfa28ddfa30f395_prof);

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
        return array (  77 => 6,  65 => 5,  49 => 12,  47 => 11,  41 => 8,  36 => 7,  34 => 6,  30 => 5,  24 => 1,);
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
