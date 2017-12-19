<?php

/* :task:index.html.twig */
class __TwigTemplate_55bb81b8f612bf6310534ef2ae5c7dcebf0bea8ab8457b22cb7a7086283544cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":task:index.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bbaa240e01fd50b2f3a7d017ba7d7497e4410e1448dc030800f6f78a11686f61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbaa240e01fd50b2f3a7d017ba7d7497e4410e1448dc030800f6f78a11686f61->enter($__internal_bbaa240e01fd50b2f3a7d017ba7d7497e4410e1448dc030800f6f78a11686f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":task:index.html.twig"));

        $__internal_bcd9b246f8c70f0b53785aab5828fbdd0e667fc651490e52a6471ff4972f5e15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcd9b246f8c70f0b53785aab5828fbdd0e667fc651490e52a6471ff4972f5e15->enter($__internal_bcd9b246f8c70f0b53785aab5828fbdd0e667fc651490e52a6471ff4972f5e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":task:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbaa240e01fd50b2f3a7d017ba7d7497e4410e1448dc030800f6f78a11686f61->leave($__internal_bbaa240e01fd50b2f3a7d017ba7d7497e4410e1448dc030800f6f78a11686f61_prof);

        
        $__internal_bcd9b246f8c70f0b53785aab5828fbdd0e667fc651490e52a6471ff4972f5e15->leave($__internal_bcd9b246f8c70f0b53785aab5828fbdd0e667fc651490e52a6471ff4972f5e15_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_aad20bd2ec027668842e21019aa9dc2b300e412bbecc448a53f0d700978343f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aad20bd2ec027668842e21019aa9dc2b300e412bbecc448a53f0d700978343f5->enter($__internal_aad20bd2ec027668842e21019aa9dc2b300e412bbecc448a53f0d700978343f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_dd479ab46d5ee932a4f17ce7ea17dfc896c177297784b6e5250f5c840419af8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd479ab46d5ee932a4f17ce7ea17dfc896c177297784b6e5250f5c840419af8b->enter($__internal_dd479ab46d5ee932a4f17ce7ea17dfc896c177297784b6e5250f5c840419af8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "<section class=\"home\">
    <h2>Tasks:</h2>
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tasks"] ?? $this->getContext($context, "tasks")));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 7
            echo "    <article>
        <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete", array("id" => $this->getAttribute($context["task"], "id", array()))), "html", null, true);
            echo "\" class=\"fa fa-window-close\">X</a>
        <h3>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "title", array()), "html", null, true);
            echo "</h3>
        <p>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "comments", array()), "html", null, true);
            echo "</p>
    </article>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    <a id=\"create-button\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("create");
        echo "\">Create New</a>
    ";
        // line 15
        echo "</section>
";
        
        $__internal_dd479ab46d5ee932a4f17ce7ea17dfc896c177297784b6e5250f5c840419af8b->leave($__internal_dd479ab46d5ee932a4f17ce7ea17dfc896c177297784b6e5250f5c840419af8b_prof);

        
        $__internal_aad20bd2ec027668842e21019aa9dc2b300e412bbecc448a53f0d700978343f5->leave($__internal_aad20bd2ec027668842e21019aa9dc2b300e412bbecc448a53f0d700978343f5_prof);

    }

    public function getTemplateName()
    {
        return ":task:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 15,  77 => 13,  68 => 10,  64 => 9,  60 => 8,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block main %}
<section class=\"home\">
    <h2>Tasks:</h2>
    {% for task in tasks %}
    <article>
        <a href=\"{{ path('delete', {id: task.id}) }}\" class=\"fa fa-window-close\">X</a>
        <h3>{{ task.title }}</h3>
        <p>{{ task.comments }}</p>
    </article>
    {% endfor  %}
    <a id=\"create-button\" href=\"{{ path('create') }}\">Create New</a>
    {#<button>Create New</button>#}
</section>
{% endblock %}", ":task:index.html.twig", "E:\\PHP-EXAM\\app/Resources\\views/task/index.html.twig");
    }
}
