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
        $__internal_821bfca02761835d0df40405d75c43dc982e48921130c37c0d4df3046cfce94e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_821bfca02761835d0df40405d75c43dc982e48921130c37c0d4df3046cfce94e->enter($__internal_821bfca02761835d0df40405d75c43dc982e48921130c37c0d4df3046cfce94e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":task:index.html.twig"));

        $__internal_351b06d129e4bf120e5ffac1c3c9c1ea68c874eb68949021f1dcd80c33298090 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_351b06d129e4bf120e5ffac1c3c9c1ea68c874eb68949021f1dcd80c33298090->enter($__internal_351b06d129e4bf120e5ffac1c3c9c1ea68c874eb68949021f1dcd80c33298090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":task:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_821bfca02761835d0df40405d75c43dc982e48921130c37c0d4df3046cfce94e->leave($__internal_821bfca02761835d0df40405d75c43dc982e48921130c37c0d4df3046cfce94e_prof);

        
        $__internal_351b06d129e4bf120e5ffac1c3c9c1ea68c874eb68949021f1dcd80c33298090->leave($__internal_351b06d129e4bf120e5ffac1c3c9c1ea68c874eb68949021f1dcd80c33298090_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_73dabb6e8d0de32ff07c1226d1ba4a0fb1f220d4cd4ac20da5060cf402c63205 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73dabb6e8d0de32ff07c1226d1ba4a0fb1f220d4cd4ac20da5060cf402c63205->enter($__internal_73dabb6e8d0de32ff07c1226d1ba4a0fb1f220d4cd4ac20da5060cf402c63205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_16ae7e287fd4fb6aed59f3ceee6d1f30a12cc7456e7da3344ada8c351abfdbef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16ae7e287fd4fb6aed59f3ceee6d1f30a12cc7456e7da3344ada8c351abfdbef->enter($__internal_16ae7e287fd4fb6aed59f3ceee6d1f30a12cc7456e7da3344ada8c351abfdbef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <div class=\"container\">
        <a class=\"button\" href=\"/create\">Create New Task</a>
    </div>

    <div class=\"tasks container\">
        <header>
            <div class=\"column header open\">Open</div>
            <div class=\"column header inProgress\">In progress</div>
            <div class=\"column header finished\">Finished</div>
        </header>
        <ul class=\"column open\">
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["openTasks"] ?? $this->getContext($context, "openTasks")));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 16
            echo "                <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "title", array()), "html", null, true);
            echo "
                    <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit", array("id" => $this->getAttribute($context["task"], "id", array()))), "html", null, true);
            echo "\" class=\"icon edit\"></a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        </ul>
        <ul class=\"column inProgress\">
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["inProgressTasks"] ?? $this->getContext($context, "inProgressTasks")));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 23
            echo "                <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "title", array()), "html", null, true);
            echo "
                    <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit", array("id" => $this->getAttribute($context["task"], "id", array()))), "html", null, true);
            echo "\" class=\"icon edit\"></a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </ul>
        <ul class=\"column finished\">
            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["finishedTasks"] ?? $this->getContext($context, "finishedTasks")));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 30
            echo "                <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "title", array()), "html", null, true);
            echo "
                    <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit", array("id" => $this->getAttribute($context["task"], "id", array()))), "html", null, true);
            echo "\" class=\"icon edit\"></a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </ul>
    </div>
";
        
        $__internal_16ae7e287fd4fb6aed59f3ceee6d1f30a12cc7456e7da3344ada8c351abfdbef->leave($__internal_16ae7e287fd4fb6aed59f3ceee6d1f30a12cc7456e7da3344ada8c351abfdbef_prof);

        
        $__internal_73dabb6e8d0de32ff07c1226d1ba4a0fb1f220d4cd4ac20da5060cf402c63205->leave($__internal_73dabb6e8d0de32ff07c1226d1ba4a0fb1f220d4cd4ac20da5060cf402c63205_prof);

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
        return array (  124 => 34,  115 => 31,  110 => 30,  106 => 29,  102 => 27,  93 => 24,  88 => 23,  84 => 22,  80 => 20,  71 => 17,  66 => 16,  62 => 15,  49 => 4,  40 => 3,  11 => 1,);
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
    <div class=\"container\">
        <a class=\"button\" href=\"/create\">Create New Task</a>
    </div>

    <div class=\"tasks container\">
        <header>
            <div class=\"column header open\">Open</div>
            <div class=\"column header inProgress\">In progress</div>
            <div class=\"column header finished\">Finished</div>
        </header>
        <ul class=\"column open\">
            {% for task in openTasks %}
                <li>{{ task.title }}
                    <a href=\"{{ path('edit', {id: task.id}) }}\" class=\"icon edit\"></a>
                </li>
            {% endfor %}
        </ul>
        <ul class=\"column inProgress\">
            {% for task in inProgressTasks %}
                <li>{{ task.title }}
                    <a href=\"{{ path('edit', {id: task.id}) }}\" class=\"icon edit\"></a>
                </li>
            {% endfor %}
        </ul>
        <ul class=\"column finished\">
            {% for task in finishedTasks %}
                <li>{{ task.title }}
                    <a href=\"{{ path('edit', {id: task.id}) }}\" class=\"icon edit\"></a>
                </li>
            {% endfor %}
        </ul>
    </div>
{% endblock %}", ":task:index.html.twig", "E:\\ExamPrepIII\\PHP Skeleton\\app/Resources\\views/task/index.html.twig");
    }
}
