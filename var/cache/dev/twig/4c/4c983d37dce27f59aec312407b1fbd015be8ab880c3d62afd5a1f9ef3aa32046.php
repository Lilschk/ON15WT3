<?php

/* gaestebuch/eintraege.html.twig */
class __TwigTemplate_d1cb06a2f5be328f9fb8fc49d7253793ff1c136247aa7151b507a8412645e60f extends Twig_Template
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
        $__internal_184df804793b90f75c2ee2868b572928f84297fc5ccebec157103ec754c8d672 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_184df804793b90f75c2ee2868b572928f84297fc5ccebec157103ec754c8d672->enter($__internal_184df804793b90f75c2ee2868b572928f84297fc5ccebec157103ec754c8d672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gaestebuch/eintraege.html.twig"));

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
        $this->loadTemplate("::navigation.html.twig", "gaestebuch/eintraege.html.twig", 20)->display($context);
        // line 21
        echo "
<table class=\"table\">
    <tbody>

    ";
        // line 25
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
            // line 26
            echo "
        <tr><td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "getName", array()), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "getMail", array()), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "getNachricht", array()), "html", null, true);
            echo "</td><td><a class=\"btn btn-danger red btn-xs\" data-toggle=\"modal\" data-target=\"#confirm-modal";
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", array()), "html", null, true);
            echo "\">Löschen</a></td>


                <div class=\"modal fade confirm-modal\" id=\"confirm-modal";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", array()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\">
                    <div class=\"modal-dialog modal-sm\">
                        <div class=\"modal-content\">
                            <div class=\"modal-body\">
                                Sind Sie sicher, <br>dass Sie diesen Eintrag löschen wollen?
                            </div>
                            <div class=\"modal-footer\">
                                ";
            // line 37
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock($this->getAttribute((isset($context["deleteForms"]) ? $context["deleteForms"] : $this->getContext($context, "deleteForms")), ($this->getAttribute($context["loop"], "index", array()) - 1), array(), "array"), 'form_start');
            echo "
                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Nein</button>
                                <input type=\"submit\" class=\"btn btn-primary\" value=\"Ja\">
                                ";
            // line 40
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock($this->getAttribute((isset($context["deleteForms"]) ? $context["deleteForms"] : $this->getContext($context, "deleteForms")), ($this->getAttribute($context["loop"], "index", array()) - 1), array(), "array"), 'form_end');
            echo "
                            </div>
                        </div>
                    </div>
                    </div>
        </tr>


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
        // line 49
        echo "</tbody>



";
        
        $__internal_184df804793b90f75c2ee2868b572928f84297fc5ccebec157103ec754c8d672->leave($__internal_184df804793b90f75c2ee2868b572928f84297fc5ccebec157103ec754c8d672_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_98614ed4acd975e7cb4784bd3628c05eec451687c083e3a0b8772ebc9e2da77c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98614ed4acd975e7cb4784bd3628c05eec451687c083e3a0b8772ebc9e2da77c->enter($__internal_98614ed4acd975e7cb4784bd3628c05eec451687c083e3a0b8772ebc9e2da77c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "gaestebuch/eintraege.html.twig"));

        echo "Welcome!";
        
        $__internal_98614ed4acd975e7cb4784bd3628c05eec451687c083e3a0b8772ebc9e2da77c->leave($__internal_98614ed4acd975e7cb4784bd3628c05eec451687c083e3a0b8772ebc9e2da77c_prof);

    }

    // line 7
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_723c72bc2c556c8d31a1b8ec5e35b537024b4c7b50a56069e046dcb3691b8d47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_723c72bc2c556c8d31a1b8ec5e35b537024b4c7b50a56069e046dcb3691b8d47->enter($__internal_723c72bc2c556c8d31a1b8ec5e35b537024b4c7b50a56069e046dcb3691b8d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "gaestebuch/eintraege.html.twig"));

        // line 8
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/bootstrap/JQuery/JQuery.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>

    ";
        
        $__internal_723c72bc2c556c8d31a1b8ec5e35b537024b4c7b50a56069e046dcb3691b8d47->leave($__internal_723c72bc2c556c8d31a1b8ec5e35b537024b4c7b50a56069e046dcb3691b8d47_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f97c2f9e32cd5a13871bdb3356349de71ce769d556f32f7f021bc930e6de9778 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f97c2f9e32cd5a13871bdb3356349de71ce769d556f32f7f021bc930e6de9778->enter($__internal_f97c2f9e32cd5a13871bdb3356349de71ce769d556f32f7f021bc930e6de9778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "gaestebuch/eintraege.html.twig"));

        // line 14
        echo "    <!--<link rel=\"icon\" type=\"image/x-icon\" href=\"";
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
        
        $__internal_f97c2f9e32cd5a13871bdb3356349de71ce769d556f32f7f021bc930e6de9778->leave($__internal_f97c2f9e32cd5a13871bdb3356349de71ce769d556f32f7f021bc930e6de9778_prof);

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
        return array (  188 => 17,  184 => 16,  180 => 15,  175 => 14,  169 => 13,  159 => 9,  154 => 8,  148 => 7,  136 => 5,  125 => 49,  102 => 40,  96 => 37,  86 => 30,  74 => 27,  71 => 26,  54 => 25,  48 => 21,  46 => 20,  43 => 19,  41 => 13,  38 => 12,  36 => 7,  31 => 5,  25 => 1,);
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

    {% block javascripts %}
        <script type=\"text/javascript\" src=\"{{ asset('lib/bootstrap/JQuery/JQuery.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('lib/bootstrap/js/bootstrap.js') }}\"></script>

    {%  endblock %}

    {% block stylesheets %}
    <!--<link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('lib/bootstrap/css/bootstrap.css') }}\">
    <!--<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/application.css') }}\">
    <!--<link rel=\"stylesheet\" tyoe=\"text/css\" href=\"{{ asset('lib/normalize.css') }}\">-->
    {% endblock %}
</head>
{% include '::navigation.html.twig' %}

<table class=\"table\">
    <tbody>

    {% for event in events %}

        <tr><td>{{ event.getName }}</td><td>{{ event.getMail }}</td><td>{{ event.getNachricht }}</td><td><a class=\"btn btn-danger red btn-xs\" data-toggle=\"modal\" data-target=\"#confirm-modal{{ event.id }}\">Löschen</a></td>


                <div class=\"modal fade confirm-modal\" id=\"confirm-modal{{ event.id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\">
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
        </tr>


{% endfor %}
</tbody>



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
", "gaestebuch/eintraege.html.twig", "/var/www/public/my_project/app/Resources/views/gaestebuch/eintraege.html.twig");
    }
}
