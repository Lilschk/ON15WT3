<?php

/* gaestebuch/eintraege.html.twig */
class __TwigTemplate_540a0905fcdfea87b7e70272f7fbd0b3d54296068f4044096b603fbc03198cc9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'javascripts' => array($this, 'block_javascripts'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a0ebf29c0ecf42f5e43054e1a9b9b71692b8e1901f5159f82446bc154cb796a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0ebf29c0ecf42f5e43054e1a9b9b71692b8e1901f5159f82446bc154cb796a7->enter($__internal_a0ebf29c0ecf42f5e43054e1a9b9b71692b8e1901f5159f82446bc154cb796a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gaestebuch/eintraege.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 7
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "
    ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "</head>
";
        // line 20
        $this->loadTemplate("::navigation-loggedin.html.twig", "gaestebuch/eintraege.html.twig", 20)->display($context);
        // line 21
        echo "
<table class=\"table sortierbar\">
    <thead>
    <tr>
        <th>Name</th>
        <th>E-Mail</th>
        <th>Nachricht</th>
    </tr>
    </thead>
    <tbody>

    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 33
            echo "
        <tr>
            <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "getName", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "getMail", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "getNachricht", array()), "html", null, true);
            echo "</td>
            <td><a class=\"btn btn-danger red btn-xs\" data-toggle=\"modal\" data-target=\"#confirm-modal";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", array()), "html", null, true);
            echo "\">Löschen</a>
            </td>
            <td><a class=\"btn btn-success green btn-xs\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_edit", array("id" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
            echo "\">Ändern</a>
            </td>


            <div class=\"modal fade confirm-modal\" id=\"confirm-modal";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", array()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\"
                 aria-labelledby=\"mySmallModalLabel\">
                <div class=\"modal-dialog modal-sm\">
                    <div class=\"modal-content\">
                        <div class=\"modal-body\">
                            Sind Sie sicher, <br>dass Sie diesen Eintrag löschen wollen?
                        </div>
                        <div class=\"modal-footer\">
                            ";
            // line 52
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock($this->getAttribute((isset($context["deleteForms"]) ? $context["deleteForms"] : $this->getContext($context, "deleteForms")), ($this->getAttribute($context["loop"], "index", array()) - 1), array(), "array"), 'form_start');
            echo "
                            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Nein</button>
                            <input type=\"submit\" class=\"btn btn-primary\" value=\"Ja\">
                            ";
            // line 55
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock($this->getAttribute((isset($context["deleteForms"]) ? $context["deleteForms"] : $this->getContext($context, "deleteForms")), ($this->getAttribute($context["loop"], "index", array()) - 1), array(), "array"), 'form_end');
            echo "
                        </div>
                    </div>
                </div>
            </div>

            ";
            // line 62
            echo "                ";
            // line 63
            echo "                    ";
            // line 64
            echo "                        ";
            // line 65
            echo "                            ";
            // line 66
            echo "                            ";
            // line 67
            echo "                        ";
            // line 68
            echo "                        ";
            // line 69
            echo "                            ";
            // line 70
            echo "                                ";
            // line 71
            echo "                                    ";
            // line 72
            echo "                                    ";
            // line 73
            echo "                                ";
            // line 74
            echo "                                ";
            // line 75
            echo "                                    ";
            // line 76
            echo "                                    ";
            // line 77
            echo "                                ";
            // line 78
            echo "                                ";
            // line 79
            echo "                                    ";
            // line 80
            echo "                                    ";
            // line 81
            echo "                                ";
            // line 82
            echo "                            ";
            // line 83
            echo "                        ";
            // line 84
            echo "                        ";
            // line 85
            echo "                            ";
            // line 86
            echo "                        ";
            // line 87
            echo "                    ";
            // line 88
            echo "                ";
            // line 89
            echo "            ";
            // line 90
            echo "        ";
            // line 91
            echo "

    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "    </tbody>
    <script>
        ( function () {

            \"use strict\";

            var tableSort = function (tab) {
                var titel = tab.getElementsByTagName(\"thead\")[0].getElementsByTagName(\"tr\")[0].getElementsByTagName(\"th\");
                // in titel werden alle Elemente in th gespeichert
                var tbdy = tab.getElementsByTagName(\"tbody\")[0];

                var tz = tbdy.rows;
                var nzeilen = tz.length;

                if (nzeilen == 0)
                    return;
                var nspalten = tz[0].cells.length;

                var arr = new Array(nzeilen);

                var sortiert = -1;

                //erstellt Buttons mit onclick in var b
                var initTableHead = function (sp) {
                    var b = document.createElement(\"button\");
                    b.type = \"button\";
                    b.className = \"btn btn-secondary\";
                    b.innerHTML = titel[sp].innerHTML;

                    b.addEventListener(\"click\", function () { tsort(sp); },false);
                    titel[sp].innerHTML = \"\";
                    titel[sp].appendChild(b);
                }

                //auslesen Tabellenfelder
                var getData = function (ele) {
                    return ele.innerHTML;
                }


                var vglFkt_s = function (a, b) {
                    var as = a[sortiert], bs = b[sortiert];
                    if (as > bs) return 1;
                    else return -1;
                }

                var tsort = function (sp) {
                    if (sp == sortiert) arr.reverse(); // Tabelle ist schon nach dieser Spalte sortiert, also nur Reihenfolge umdrehen
                    else { // Sortieren
                        sortiert = sp;
                        arr.sort(vglFkt_s);
                    }
                    for (var z = 0; z < nzeilen; z++) tbdy.appendChild(arr[z][nspalten]); // Sortierte Daten zurückschreiben
                } // tsort

                // Kopfzeile vorbereiten, iteriert über jede th und erstellt dabei einen Button, methodenaufruf initTableHead
                for (var i = 0; i < titel.length; i++) initTableHead(i) ;


                // Tabelleninhalt in ein Array kopieren
                for (var z = 0; z < nzeilen; z++) {

                    var zelle = tz[z].getElementsByTagName(\"td\"); // inhalteinerzelle
                    arr[z] = new Array(nspalten +1);

                    arr[z][nspalten] = tz[z];

                    for (var s = 0; s < nspalten; s++) {
                        //aufruf von Funktion getData, gibt werit der spalte eas
                        var zi = getData(zelle[s]);
                        arr[z][s] = zi ;
                    }
                }

            } // tableSort


            var initTableSort = function () {
                //Listet komplette tabelle in sort_Table
                var sort_Table = document.querySelectorAll(\"table.sortierbar\");
                //object wird erstellt
                for (var i = 0; i < sort_Table.length;i++) {
                    new tableSort(sort_Table[i]);
                    document.write(tableSort(sort_Table(i)))


                }
            }

            window.addEventListener(\"DOMContentLoaded\", initTableSort, false);

        })();
        </Script>


    ";
        
        $__internal_a0ebf29c0ecf42f5e43054e1a9b9b71692b8e1901f5159f82446bc154cb796a7->leave($__internal_a0ebf29c0ecf42f5e43054e1a9b9b71692b8e1901f5159f82446bc154cb796a7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bdd69394881d888cca8471cfa20a1739f2a130052bcea066ee4b038f15663d1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdd69394881d888cca8471cfa20a1739f2a130052bcea066ee4b038f15663d1c->enter($__internal_bdd69394881d888cca8471cfa20a1739f2a130052bcea066ee4b038f15663d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "gaestebuch/eintraege.html.twig"));

        echo "Welcome!";
        
        $__internal_bdd69394881d888cca8471cfa20a1739f2a130052bcea066ee4b038f15663d1c->leave($__internal_bdd69394881d888cca8471cfa20a1739f2a130052bcea066ee4b038f15663d1c_prof);

    }

    // line 7
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6c7f627c41cc6768cb1f9c5794d3e9214be88f88118ac2302ba0a643371b2b32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c7f627c41cc6768cb1f9c5794d3e9214be88f88118ac2302ba0a643371b2b32->enter($__internal_6c7f627c41cc6768cb1f9c5794d3e9214be88f88118ac2302ba0a643371b2b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "gaestebuch/eintraege.html.twig"));

        // line 8
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/bootstrap/JQuery/JQuery.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>

    ";
        
        $__internal_6c7f627c41cc6768cb1f9c5794d3e9214be88f88118ac2302ba0a643371b2b32->leave($__internal_6c7f627c41cc6768cb1f9c5794d3e9214be88f88118ac2302ba0a643371b2b32_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_116b4b86d0bb5fbe7cf12ec66986dc128d256aac3c933722f491a8b0a7ad88eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_116b4b86d0bb5fbe7cf12ec66986dc128d256aac3c933722f491a8b0a7ad88eb->enter($__internal_116b4b86d0bb5fbe7cf12ec66986dc128d256aac3c933722f491a8b0a7ad88eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "gaestebuch/eintraege.html.twig"));

        // line 14
        echo "        <!--<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\">
        <!--<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/application.css"), "html", null, true);
        echo "\">
    <!--<link rel=\"stylesheet\" tyoe=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/normalize.css"), "html", null, true);
        echo "\">-->
    ";
        
        $__internal_116b4b86d0bb5fbe7cf12ec66986dc128d256aac3c933722f491a8b0a7ad88eb->leave($__internal_116b4b86d0bb5fbe7cf12ec66986dc128d256aac3c933722f491a8b0a7ad88eb_prof);

    }

    public function getTemplateName()
    {
        return "gaestebuch/eintraege.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  360 => 17,  356 => 16,  352 => 15,  347 => 14,  341 => 13,  331 => 9,  326 => 8,  320 => 7,  308 => 5,  206 => 94,  190 => 91,  188 => 90,  186 => 89,  184 => 88,  182 => 87,  180 => 86,  178 => 85,  176 => 84,  174 => 83,  172 => 82,  170 => 81,  168 => 80,  166 => 79,  164 => 78,  162 => 77,  160 => 76,  158 => 75,  156 => 74,  154 => 73,  152 => 72,  150 => 71,  148 => 70,  146 => 69,  144 => 68,  142 => 67,  140 => 66,  138 => 65,  136 => 64,  134 => 63,  132 => 62,  123 => 55,  117 => 52,  106 => 44,  99 => 40,  94 => 38,  90 => 37,  86 => 36,  82 => 35,  78 => 33,  61 => 32,  48 => 21,  46 => 20,  43 => 19,  41 => 13,  38 => 12,  36 => 7,  31 => 5,  25 => 1,);
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
    <meta charset=\"UTF-8\"/>
    <title>{% block title %}Welcome!{% endblock %}</title>

    {% block javascripts %}
        <script type=\"text/javascript\" src=\"{{ asset('lib/bootstrap/JQuery/JQuery.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('lib/bootstrap/js/bootstrap.js') }}\"></script>

    {% endblock %}

    {% block stylesheets %}
        <!--<link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('lib/bootstrap/css/bootstrap.css') }}\">
        <!--<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/application.css') }}\">
    <!--<link rel=\"stylesheet\" tyoe=\"text/css\" href=\"{{ asset('lib/normalize.css') }}\">-->
    {% endblock %}
</head>
{% include '::navigation-loggedin.html.twig' %}

<table class=\"table sortierbar\">
    <thead>
    <tr>
        <th>Name</th>
        <th>E-Mail</th>
        <th>Nachricht</th>
    </tr>
    </thead>
    <tbody>

    {% for event in events %}

        <tr>
            <td>{{ event.getName }}</td>
            <td>{{ event.getMail }}</td>
            <td>{{ event.getNachricht }}</td>
            <td><a class=\"btn btn-danger red btn-xs\" data-toggle=\"modal\" data-target=\"#confirm-modal{{ event.id }}\">Löschen</a>
            </td>
            <td><a class=\"btn btn-success green btn-xs\" href=\"{{path('post_edit', {'id' : event.id})}}\">Ändern</a>
            </td>


            <div class=\"modal fade confirm-modal\" id=\"confirm-modal{{ event.id }}\" tabindex=\"-1\" role=\"dialog\"
                 aria-labelledby=\"mySmallModalLabel\">
                <div class=\"modal-dialog modal-sm\">
                    <div class=\"modal-content\">
                        <div class=\"modal-body\">
                            Sind Sie sicher, <br>dass Sie diesen Eintrag löschen wollen?
                        </div>
                        <div class=\"modal-footer\">
                            {{ form_start(deleteForms[loop.index-1]) }}
                            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Nein</button>
                            <input type=\"submit\" class=\"btn btn-primary\" value=\"Ja\">
                            {{ form_end(deleteForms[loop.index-1]) }}
                        </div>
                    </div>
                </div>
            </div>

            {#<div class=\"modal fade\" id=\"exampleModal{{ event.id }}\" tabindex=\"-1\" role=\"dialog\">#}
                {#<div class=\"modal-dialog\" role=\"document\">#}
                    {#<div class=\"modal-content\">#}
                        {#<div class=\"modal-header\">#}
                            {#<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>#}
                            {#<h4 class=\"modal-title\" id=\"exampleModalLabel\">Nachricht bearbeiten</h4>#}
                        {#</div>#}
                        {#<div class=\"modal-body\">#}
                            {#<form>#}
                                {#<div class=\"form-group\">#}
                                    {#<label for=\"recipient-name\" class=\"control-label\">Name</label>#}
                                    {#<input type=\"text\" class=\"form-control\" id=\"recipient-name\" value=\"{{ event.name }}\">#}
                                {#</div>#}
                                {#<div class=\"form-group\">#}
                                    {#<label for=\"message-text\" class=\"control-label\">E-Mail</label>#}
                                    {#<textarea class=\"form-control\" id=\"message-text\">{{ event.Mail }}</textarea>#}
                                {#</div>#}
                                {#<div class=\"form-group\">#}
                                    {#<label for=\"message-text\" class=\"control-label\">Nachricht</label>#}
                                    {#<textarea class=\"form-control\" id=\"message-text\">{{ event.Nachricht }}</textarea>#}
                                {#</div>#}
                            {#</form>#}
                        {#</div>#}
                        {#<div class=\"modal-footer\">#}
                            {#<button type=\"submit\" class=\"btn btn-primary\">Update</button>#}
                        {#</div>#}
                    {#</div>#}
                {#</div>#}
            {#</div>#}
        {#</tr>#}


    {% endfor %}
    </tbody>
    <script>
        ( function () {

            \"use strict\";

            var tableSort = function (tab) {
                var titel = tab.getElementsByTagName(\"thead\")[0].getElementsByTagName(\"tr\")[0].getElementsByTagName(\"th\");
                // in titel werden alle Elemente in th gespeichert
                var tbdy = tab.getElementsByTagName(\"tbody\")[0];

                var tz = tbdy.rows;
                var nzeilen = tz.length;

                if (nzeilen == 0)
                    return;
                var nspalten = tz[0].cells.length;

                var arr = new Array(nzeilen);

                var sortiert = -1;

                //erstellt Buttons mit onclick in var b
                var initTableHead = function (sp) {
                    var b = document.createElement(\"button\");
                    b.type = \"button\";
                    b.className = \"btn btn-secondary\";
                    b.innerHTML = titel[sp].innerHTML;

                    b.addEventListener(\"click\", function () { tsort(sp); },false);
                    titel[sp].innerHTML = \"\";
                    titel[sp].appendChild(b);
                }

                //auslesen Tabellenfelder
                var getData = function (ele) {
                    return ele.innerHTML;
                }


                var vglFkt_s = function (a, b) {
                    var as = a[sortiert], bs = b[sortiert];
                    if (as > bs) return 1;
                    else return -1;
                }

                var tsort = function (sp) {
                    if (sp == sortiert) arr.reverse(); // Tabelle ist schon nach dieser Spalte sortiert, also nur Reihenfolge umdrehen
                    else { // Sortieren
                        sortiert = sp;
                        arr.sort(vglFkt_s);
                    }
                    for (var z = 0; z < nzeilen; z++) tbdy.appendChild(arr[z][nspalten]); // Sortierte Daten zurückschreiben
                } // tsort

                // Kopfzeile vorbereiten, iteriert über jede th und erstellt dabei einen Button, methodenaufruf initTableHead
                for (var i = 0; i < titel.length; i++) initTableHead(i) ;


                // Tabelleninhalt in ein Array kopieren
                for (var z = 0; z < nzeilen; z++) {

                    var zelle = tz[z].getElementsByTagName(\"td\"); // inhalteinerzelle
                    arr[z] = new Array(nspalten +1);

                    arr[z][nspalten] = tz[z];

                    for (var s = 0; s < nspalten; s++) {
                        //aufruf von Funktion getData, gibt werit der spalte eas
                        var zi = getData(zelle[s]);
                        arr[z][s] = zi ;
                    }
                }

            } // tableSort


            var initTableSort = function () {
                //Listet komplette tabelle in sort_Table
                var sort_Table = document.querySelectorAll(\"table.sortierbar\");
                //object wird erstellt
                for (var i = 0; i < sort_Table.length;i++) {
                    new tableSort(sort_Table[i]);
                    document.write(tableSort(sort_Table(i)))


                }
            }

            window.addEventListener(\"DOMContentLoaded\", initTableSort, false);

        })();
        </Script>


    {#
        <tr>
            <th scope=\"row\">E-Mail</th>
    {% for event in events %}

       <td> {{ event.getMail }} </td>
    {% endfor %}
            </tr>
        <tr>
            <th scope=\"row\">Nachricht</th>
    {% for event in events %}

       <td>  </td>
    {% endfor %}
        </tr>>
        </tbody>
        </table>#}
", "gaestebuch/eintraege.html.twig", "/Users/lilikovac/Documents/WT3_App/my_project/app/Resources/views/gaestebuch/eintraege.html.twig");
    }
}
