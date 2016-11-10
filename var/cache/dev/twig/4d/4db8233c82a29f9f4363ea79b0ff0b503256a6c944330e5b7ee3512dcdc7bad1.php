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
        $__internal_eea9b96c78948dea7831bdd8c1c6e0a2306fe76d93738d2d73f72ca679a829db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eea9b96c78948dea7831bdd8c1c6e0a2306fe76d93738d2d73f72ca679a829db->enter($__internal_eea9b96c78948dea7831bdd8c1c6e0a2306fe76d93738d2d73f72ca679a829db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gaestebuch/eintraege.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 2
            echo "
    ";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "getName", array()), "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_eea9b96c78948dea7831bdd8c1c6e0a2306fe76d93738d2d73f72ca679a829db->leave($__internal_eea9b96c78948dea7831bdd8c1c6e0a2306fe76d93738d2d73f72ca679a829db_prof);

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
        return array (  29 => 3,  26 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for event in events %}

    {{ event.getName }}
{% endfor %}", "gaestebuch/eintraege.html.twig", "/Users/lilikovac/Documents/WT3_App/my_project/app/Resources/views/gaestebuch/eintraege.html.twig");
    }
}
