<?php

/* gaestebuch/eintraege.html.twig */
class __TwigTemplate_540a0905fcdfea87b7e70272f7fbd0b3d54296068f4044096b603fbc03198cc9 extends Twig_Template
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
        $__internal_4e25f782e510fb08fd677c3ce205def87c54819ccd34494a3bc4aaeec470d686 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e25f782e510fb08fd677c3ce205def87c54819ccd34494a3bc4aaeec470d686->enter($__internal_4e25f782e510fb08fd677c3ce205def87c54819ccd34494a3bc4aaeec470d686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gaestebuch/eintraege.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->loadTemplate("::basic.html.twig", "gaestebuch/eintraege.html.twig", 2)->display($context);
        // line 3
        echo "
";
        // line 4
        $this->loadTemplate("::navigation.html.twig", "gaestebuch/eintraege.html.twig", 4)->display($context);
        // line 5
        echo "
<table class=\"table\">
    <thead>
    <tr>
        <th>Name</th>
        <th>E-Mail</th>
        <th>Nachricht</th>
    </tr>
    </thead>
    <tbody>

    ";
        // line 16
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
            // line 17
            echo "

        <tr>
            <td class=\"hidden-xl-down\">";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getId", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getName", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getMail", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getNachricht", array()), "html", null, true);
            echo "</td>
            <td><a class=\"btn btn-danger red btn-xs\" data-toggle=\"modal\" data-target=\"#confirm-modal";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\">Löschen</a>
            </td>
            <td><a class=\"btn btn-success green btn-xs\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_edit", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">Ändern</a>
            </td>


            <div class=\"modal fade confirm-modal\" id=\"confirm-modal";
            // line 30
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
            // line 38
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock($this->getAttribute((isset($context["deleteForms"]) ? $context["deleteForms"] : $this->getContext($context, "deleteForms")), ($this->getAttribute($context["loop"], "index", array()) - 1), array(), "array"), 'form_start');
            echo "
                            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Nein</button>
                            <input type=\"submit\" class=\"btn btn-primary\" value=\"Ja\">
                            ";
            // line 41
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock($this->getAttribute((isset($context["deleteForms"]) ? $context["deleteForms"] : $this->getContext($context, "deleteForms")), ($this->getAttribute($context["loop"], "index", array()) - 1), array(), "array"), 'form_end');
            echo "
                        </div>
                    </div>
                </div>
            </div>

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
        // line 48
        echo "    </tbody>
    </table>



}
";
        
        $__internal_4e25f782e510fb08fd677c3ce205def87c54819ccd34494a3bc4aaeec470d686->leave($__internal_4e25f782e510fb08fd677c3ce205def87c54819ccd34494a3bc4aaeec470d686_prof);

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
        return array (  133 => 48,  112 => 41,  106 => 38,  95 => 30,  88 => 26,  83 => 24,  79 => 23,  75 => 22,  71 => 21,  67 => 20,  62 => 17,  45 => 16,  32 => 5,  30 => 4,  27 => 3,  25 => 2,  22 => 1,);
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
{% include '::basic.html.twig' %}

{% include '::navigation.html.twig' %}

<table class=\"table\">
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

    {% endfor %}
    </tbody>
    </table>



}
", "gaestebuch/eintraege.html.twig", "/Users/lilikovac/Documents/WT3_App/my_project/app/Resources/views/gaestebuch/eintraege.html.twig");
    }
}
