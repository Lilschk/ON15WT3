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
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5525477ff0822c89d69c31cc8f6caf6764878d755a5ac3b6df4e4972a511f3b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5525477ff0822c89d69c31cc8f6caf6764878d755a5ac3b6df4e4972a511f3b1->enter($__internal_5525477ff0822c89d69c31cc8f6caf6764878d755a5ac3b6df4e4972a511f3b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gaestebuch/eintraege.html.twig"));

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
        // line 6
        $this->loadTemplate("::basic.html.twig", "gaestebuch/eintraege.html.twig", 6)->display($context);
        // line 7
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/Javascript/Sort.js"), "html", null, true);
        echo "\"></script>
</head>
";
        // line 9
        $this->loadTemplate("::navigation-loggedin.html.twig", "gaestebuch/eintraege.html.twig", 9)->display($context);
        // line 10
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
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 22
            echo "

        <tr>
            <td class=\"hidden-xl-down\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getId", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getName", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getMail", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getNachricht", array()), "html", null, true);
            echo "</td>
            <td><a class=\"btn btn-danger red btn-xs\" data-toggle=\"modal\" data-target=\"#confirm-modal";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\">Löschen</a>
            </td>
            <td><a class=\"btn btn-success green btn-xs\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_edit", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">Ändern</a>
            </td>


            <div class=\"modal fade confirm-modal\" id=\"confirm-modal";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\"
                 aria-labelledby=\"mySmallModalLabel\">
                <div class=\"modal-dialog modal-sm\">
                    <div class=\"modal-content\">
                        <div class=\"modal-body\">
                            Sind Sie sicher, <br>dass Sie diesen Eintrag löschen wollen?
                        </div>
                        <div class=\"modal-footer\">
                            ";
            // line 43
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock($this->getAttribute((isset($context["deleteForms"]) ? $context["deleteForms"] : $this->getContext($context, "deleteForms")), ($this->getAttribute($context["loop"], "index", array()) - 1), array(), "array"), 'form_start');
            echo "
                            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Nein</button>
                            <input type=\"submit\" class=\"btn btn-primary\" value=\"Ja\">
                            ";
            // line 46
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock($this->getAttribute((isset($context["deleteForms"]) ? $context["deleteForms"] : $this->getContext($context, "deleteForms")), ($this->getAttribute($context["loop"], "index", array()) - 1), array(), "array"), 'form_end');
            echo "
                        </div>
                    </div>
                </div>
            </div>

            ";
            // line 53
            echo "                ";
            // line 54
            echo "                    ";
            // line 55
            echo "                        ";
            // line 56
            echo "                            ";
            // line 57
            echo "                            ";
            // line 58
            echo "                        ";
            // line 59
            echo "                        ";
            // line 60
            echo "                            ";
            // line 61
            echo "                                ";
            // line 62
            echo "                                    ";
            // line 63
            echo "                                    ";
            // line 64
            echo "                                ";
            // line 65
            echo "                                ";
            // line 66
            echo "                                    ";
            // line 67
            echo "                                    ";
            // line 68
            echo "                                ";
            // line 69
            echo "                                ";
            // line 70
            echo "                                    ";
            // line 71
            echo "                                    ";
            // line 72
            echo "                                ";
            // line 73
            echo "                            ";
            // line 74
            echo "                        ";
            // line 75
            echo "                        ";
            // line 76
            echo "                            ";
            // line 77
            echo "                        ";
            // line 78
            echo "                    ";
            // line 79
            echo "                ";
            // line 80
            echo "            ";
            // line 81
            echo "        ";
            // line 82
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "    </tbody>
    </table>


";
        
        $__internal_5525477ff0822c89d69c31cc8f6caf6764878d755a5ac3b6df4e4972a511f3b1->leave($__internal_5525477ff0822c89d69c31cc8f6caf6764878d755a5ac3b6df4e4972a511f3b1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f1375fe3f55fe38411486d81b8b63e03080040e5ba4d9e0704267a9867b63cef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1375fe3f55fe38411486d81b8b63e03080040e5ba4d9e0704267a9867b63cef->enter($__internal_f1375fe3f55fe38411486d81b8b63e03080040e5ba4d9e0704267a9867b63cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "gaestebuch/eintraege.html.twig"));

        echo "Welcome!";
        
        $__internal_f1375fe3f55fe38411486d81b8b63e03080040e5ba4d9e0704267a9867b63cef->leave($__internal_f1375fe3f55fe38411486d81b8b63e03080040e5ba4d9e0704267a9867b63cef_prof);

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
        return array (  217 => 5,  206 => 85,  190 => 82,  188 => 81,  186 => 80,  184 => 79,  182 => 78,  180 => 77,  178 => 76,  176 => 75,  174 => 74,  172 => 73,  170 => 72,  168 => 71,  166 => 70,  164 => 69,  162 => 68,  160 => 67,  158 => 66,  156 => 65,  154 => 64,  152 => 63,  150 => 62,  148 => 61,  146 => 60,  144 => 59,  142 => 58,  140 => 57,  138 => 56,  136 => 55,  134 => 54,  132 => 53,  123 => 46,  117 => 43,  106 => 35,  99 => 31,  94 => 29,  90 => 28,  86 => 27,  82 => 26,  78 => 25,  73 => 22,  56 => 21,  43 => 10,  41 => 9,  35 => 7,  33 => 6,  29 => 5,  23 => 1,);
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
    {% include '::basic.html.twig' %}
    <script type=\"text/javascript\" src=\"{{ asset('lib/Javascript/Sort.js') }}\"></script>
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

    {% for post in posts %}


        <tr>
            <td class=\"hidden-xl-down\">{{ post.getId }}</td>
            <td>{{ post.getName }}</td>
            <td>{{ post.getMail }}</td>
            <td>{{ post.getNachricht }}</td>
            <td><a class=\"btn btn-danger red btn-xs\" data-toggle=\"modal\" data-target=\"#confirm-modal{{ post.id }}\">Löschen</a>
            </td>
            <td><a class=\"btn btn-success green btn-xs\" href=\"{{path('post_edit', {'id' : post.id})}}\">Ändern</a>
            </td>


            <div class=\"modal fade confirm-modal\" id=\"confirm-modal{{ post.id }}\" tabindex=\"-1\" role=\"dialog\"
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
    </table>


", "gaestebuch/eintraege.html.twig", "/Users/lilikovac/Documents/WT3_App/my_project/app/Resources/views/gaestebuch/eintraege.html.twig");
    }
}
