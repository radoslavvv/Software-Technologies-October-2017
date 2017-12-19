<?php

/* :task:edit.html.twig */
class __TwigTemplate_15d8916e78eb1cbec3266efc0b6dd38c9e661c387928330071aa068da8837b16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":task:edit.html.twig", 1);
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
        $__internal_526668480cbff6b75579ef728c8d0a312faa87517fcd53379c93f20c1144499a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_526668480cbff6b75579ef728c8d0a312faa87517fcd53379c93f20c1144499a->enter($__internal_526668480cbff6b75579ef728c8d0a312faa87517fcd53379c93f20c1144499a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":task:edit.html.twig"));

        $__internal_860a6b40d53a7eda2ffb41fa4ae98a842fb8adab988d1f3aa05eff61df24afc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_860a6b40d53a7eda2ffb41fa4ae98a842fb8adab988d1f3aa05eff61df24afc2->enter($__internal_860a6b40d53a7eda2ffb41fa4ae98a842fb8adab988d1f3aa05eff61df24afc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":task:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_526668480cbff6b75579ef728c8d0a312faa87517fcd53379c93f20c1144499a->leave($__internal_526668480cbff6b75579ef728c8d0a312faa87517fcd53379c93f20c1144499a_prof);

        
        $__internal_860a6b40d53a7eda2ffb41fa4ae98a842fb8adab988d1f3aa05eff61df24afc2->leave($__internal_860a6b40d53a7eda2ffb41fa4ae98a842fb8adab988d1f3aa05eff61df24afc2_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_8bc4dfa4d3da68748591a35afe7b7145fb105645a2c729d91eee0f54ad0c2da2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bc4dfa4d3da68748591a35afe7b7145fb105645a2c729d91eee0f54ad0c2da2->enter($__internal_8bc4dfa4d3da68748591a35afe7b7145fb105645a2c729d91eee0f54ad0c2da2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_14e19c516b02ff51e39ed8feb5c8a8be8b06f8940c4861d1415479a191be0cb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14e19c516b02ff51e39ed8feb5c8a8be8b06f8940c4861d1415479a191be0cb5->enter($__internal_14e19c516b02ff51e39ed8feb5c8a8be8b06f8940c4861d1415479a191be0cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <header>
        <h3>Edit Task</h3>
    </header>

    <form method=\"post\">
        <div>
            <label class=\"desc\" for=\"title\">Title</label>
            <div>
                <input id=\"title\" name=\"task[title]\" type=\"text\" class=\"field text fn\" size=\"8\" tabindex=\"1\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "title", array()), "html", null, true);
        echo "\" autofocus>
            </div>
        </div>

        <div>
            <fieldset>
                <legend class=\"desc\">
                    Status
                </legend>

                <div>
                    <div>
                        <input id=\"status1\" name=\"task[status]\" type=\"radio\" value=\"Open\" tabindex=\"2\" ";
        // line 24
        echo ((($this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "status", array()) == "Open")) ? ("checked") : (""));
        echo ">
                        <label class=\"choice\" for=\"status1\">Open</label>
                    </div>
                    <div>
                        <input id=\"status2\" name=\"task[status]\" type=\"radio\" value=\"In Progress\" tabindex=\"3\" ";
        // line 28
        echo ((($this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "status", array()) == "In Progress")) ? ("checked") : (""));
        echo ">
                        <label class=\"choice\" for=\"status2\">In Progress</label>
                    </div>
                    <div>
                        <input id=\"status3\" name=\"task[status]\" type=\"radio\" value=\"Finished\" tabindex=\"4\" ";
        // line 32
        echo ((($this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "status", array()) == "Finished")) ? ("checked") : (""));
        echo ">
                        <label class=\"choice\" for=\"status3\">Finished</label>
                    </div>
                </div>
            </fieldset>
        </div>

        <div>
            <div>
                <input class=\"button\" type=\"submit\" value=\"Submit\">
                <a class=\"button cancel\" href=\"/\">Cancel</a>
            </div>
        </div>
        ";
        // line 45
        if (array_key_exists("errorMsg", $context)) {
            // line 46
            echo "            <div class=\"errorMessage\">";
            echo twig_escape_filter($this->env, ($context["errorMsg"] ?? $this->getContext($context, "errorMsg")), "html", null, true);
            echo "</div>
        ";
        }
        // line 48
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
    </form>
";
        
        $__internal_14e19c516b02ff51e39ed8feb5c8a8be8b06f8940c4861d1415479a191be0cb5->leave($__internal_14e19c516b02ff51e39ed8feb5c8a8be8b06f8940c4861d1415479a191be0cb5_prof);

        
        $__internal_8bc4dfa4d3da68748591a35afe7b7145fb105645a2c729d91eee0f54ad0c2da2->leave($__internal_8bc4dfa4d3da68748591a35afe7b7145fb105645a2c729d91eee0f54ad0c2da2_prof);

    }

    public function getTemplateName()
    {
        return ":task:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 48,  106 => 46,  104 => 45,  88 => 32,  81 => 28,  74 => 24,  59 => 12,  49 => 4,  40 => 3,  11 => 1,);
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
    <header>
        <h3>Edit Task</h3>
    </header>

    <form method=\"post\">
        <div>
            <label class=\"desc\" for=\"title\">Title</label>
            <div>
                <input id=\"title\" name=\"task[title]\" type=\"text\" class=\"field text fn\" size=\"8\" tabindex=\"1\" value=\"{{ task.title }}\" autofocus>
            </div>
        </div>

        <div>
            <fieldset>
                <legend class=\"desc\">
                    Status
                </legend>

                <div>
                    <div>
                        <input id=\"status1\" name=\"task[status]\" type=\"radio\" value=\"Open\" tabindex=\"2\" {{ task.status == 'Open' ? 'checked' : '' }}>
                        <label class=\"choice\" for=\"status1\">Open</label>
                    </div>
                    <div>
                        <input id=\"status2\" name=\"task[status]\" type=\"radio\" value=\"In Progress\" tabindex=\"3\" {{ task.status == 'In Progress' ? 'checked' : '' }}>
                        <label class=\"choice\" for=\"status2\">In Progress</label>
                    </div>
                    <div>
                        <input id=\"status3\" name=\"task[status]\" type=\"radio\" value=\"Finished\" tabindex=\"4\" {{ task.status == 'Finished' ? 'checked' : '' }}>
                        <label class=\"choice\" for=\"status3\">Finished</label>
                    </div>
                </div>
            </fieldset>
        </div>

        <div>
            <div>
                <input class=\"button\" type=\"submit\" value=\"Submit\">
                <a class=\"button cancel\" href=\"/\">Cancel</a>
            </div>
        </div>
        {%  if errorMsg is defined %}
            <div class=\"errorMessage\">{{ errorMsg }}</div>
        {% endif %}
        {{ form_row(form._token) }}
    </form>
{% endblock %}", ":task:edit.html.twig", "E:\\ExamPrepIII\\PHP Skeleton\\app/Resources\\views/task/edit.html.twig");
    }
}
