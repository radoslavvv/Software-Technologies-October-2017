<?php

/* :task:create.html.twig */
class __TwigTemplate_c517018ef399f95051010888a14e5980d898b696f6e7aa2f05f5a4a39fa0338c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":task:create.html.twig", 1);
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
        $__internal_337a1c0138f19c5d193764f65f5f6b85e197f48c2d97ce1afc5386e3094febe2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_337a1c0138f19c5d193764f65f5f6b85e197f48c2d97ce1afc5386e3094febe2->enter($__internal_337a1c0138f19c5d193764f65f5f6b85e197f48c2d97ce1afc5386e3094febe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":task:create.html.twig"));

        $__internal_e38245694ac661e9232fc6fb9262aee5956b919aeef00b9ba67960396d936b32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e38245694ac661e9232fc6fb9262aee5956b919aeef00b9ba67960396d936b32->enter($__internal_e38245694ac661e9232fc6fb9262aee5956b919aeef00b9ba67960396d936b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":task:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_337a1c0138f19c5d193764f65f5f6b85e197f48c2d97ce1afc5386e3094febe2->leave($__internal_337a1c0138f19c5d193764f65f5f6b85e197f48c2d97ce1afc5386e3094febe2_prof);

        
        $__internal_e38245694ac661e9232fc6fb9262aee5956b919aeef00b9ba67960396d936b32->leave($__internal_e38245694ac661e9232fc6fb9262aee5956b919aeef00b9ba67960396d936b32_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_57c36f88496bd4d78f3be341d9dd8ccac6ca0f7b45d48dafe3fd80d2e5ff0284 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57c36f88496bd4d78f3be341d9dd8ccac6ca0f7b45d48dafe3fd80d2e5ff0284->enter($__internal_57c36f88496bd4d78f3be341d9dd8ccac6ca0f7b45d48dafe3fd80d2e5ff0284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_8c6a9287270e7a2df3dcfd0921d03171e326e513aea0b5e8a12dfaf97c883704 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c6a9287270e7a2df3dcfd0921d03171e326e513aea0b5e8a12dfaf97c883704->enter($__internal_8c6a9287270e7a2df3dcfd0921d03171e326e513aea0b5e8a12dfaf97c883704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <header>
        <h3>Create New Task</h3>
    </header>

    <form method=\"post\">
        <div>
            <label class=\"desc\" for=\"title\">Title</label>
            <div>
                <input id=\"title\" name=\"task[title]\" type=\"text\" class=\"field text fn\" value=\"\" size=\"8\" tabindex=\"1\"
                       autofocus>
            </div>
        </div>

        <div>
            <fieldset>
                <legend class=\"desc\">
                    Status
                </legend>

                <div>
                    <div>
                        <input id=\"status1\" name=\"task[status]\" type=\"radio\" value=\"Open\" tabindex=\"2\" checked>
                        <label class=\"choice\" for=\"status1\">Open</label>
                    </div>
                    <div>
                        <input id=\"status2\" name=\"task[status]\" type=\"radio\" value=\"In Progress\" tabindex=\"3\">
                        <label class=\"choice\" for=\"status2\">In Progress</label>
                    </div>
                    <div>
                        <input id=\"status3\" name=\"task[status]\" type=\"radio\" value=\"Finished\" tabindex=\"4\">
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
        // line 47
        if (array_key_exists("errorMsg", $context)) {
            // line 48
            echo "            <div class=\"errorMessage\">";
            echo twig_escape_filter($this->env, ($context["errorMsg"] ?? $this->getContext($context, "errorMsg")), "html", null, true);
            echo "</div>
        ";
        }
        // line 50
        echo "
        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
    </form>
";
        
        $__internal_8c6a9287270e7a2df3dcfd0921d03171e326e513aea0b5e8a12dfaf97c883704->leave($__internal_8c6a9287270e7a2df3dcfd0921d03171e326e513aea0b5e8a12dfaf97c883704_prof);

        
        $__internal_57c36f88496bd4d78f3be341d9dd8ccac6ca0f7b45d48dafe3fd80d2e5ff0284->leave($__internal_57c36f88496bd4d78f3be341d9dd8ccac6ca0f7b45d48dafe3fd80d2e5ff0284_prof);

    }

    public function getTemplateName()
    {
        return ":task:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 51,  102 => 50,  96 => 48,  94 => 47,  49 => 4,  40 => 3,  11 => 1,);
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
        <h3>Create New Task</h3>
    </header>

    <form method=\"post\">
        <div>
            <label class=\"desc\" for=\"title\">Title</label>
            <div>
                <input id=\"title\" name=\"task[title]\" type=\"text\" class=\"field text fn\" value=\"\" size=\"8\" tabindex=\"1\"
                       autofocus>
            </div>
        </div>

        <div>
            <fieldset>
                <legend class=\"desc\">
                    Status
                </legend>

                <div>
                    <div>
                        <input id=\"status1\" name=\"task[status]\" type=\"radio\" value=\"Open\" tabindex=\"2\" checked>
                        <label class=\"choice\" for=\"status1\">Open</label>
                    </div>
                    <div>
                        <input id=\"status2\" name=\"task[status]\" type=\"radio\" value=\"In Progress\" tabindex=\"3\">
                        <label class=\"choice\" for=\"status2\">In Progress</label>
                    </div>
                    <div>
                        <input id=\"status3\" name=\"task[status]\" type=\"radio\" value=\"Finished\" tabindex=\"4\">
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
{% endblock %}", ":task:create.html.twig", "E:\\ExamPrepIII\\PHP Skeleton\\app/Resources\\views/task/create.html.twig");
    }
}
