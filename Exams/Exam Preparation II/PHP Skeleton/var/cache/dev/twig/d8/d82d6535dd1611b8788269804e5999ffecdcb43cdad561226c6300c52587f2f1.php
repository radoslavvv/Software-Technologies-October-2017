<?php

/* task/delete.html.twig */
class __TwigTemplate_51e994fb33b2a018c8423b8fdeaaaca1f9f17a26636ed524b479f58726972f2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "task/delete.html.twig", 1);
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
        $__internal_7306b31f2a44d163d261b2c0c98f0caddf79f9d63c12f445b15006a0309605e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7306b31f2a44d163d261b2c0c98f0caddf79f9d63c12f445b15006a0309605e4->enter($__internal_7306b31f2a44d163d261b2c0c98f0caddf79f9d63c12f445b15006a0309605e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/delete.html.twig"));

        $__internal_b16f4e08614c4c0d9ab4c62ff67a68a3669e74b64fd20002ee7c45c7ee21e4fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b16f4e08614c4c0d9ab4c62ff67a68a3669e74b64fd20002ee7c45c7ee21e4fd->enter($__internal_b16f4e08614c4c0d9ab4c62ff67a68a3669e74b64fd20002ee7c45c7ee21e4fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7306b31f2a44d163d261b2c0c98f0caddf79f9d63c12f445b15006a0309605e4->leave($__internal_7306b31f2a44d163d261b2c0c98f0caddf79f9d63c12f445b15006a0309605e4_prof);

        
        $__internal_b16f4e08614c4c0d9ab4c62ff67a68a3669e74b64fd20002ee7c45c7ee21e4fd->leave($__internal_b16f4e08614c4c0d9ab4c62ff67a68a3669e74b64fd20002ee7c45c7ee21e4fd_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_b6703acab4d8bb9f5e80dcddb74b13544b87790b2fe0da197928a536b20a0ad2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6703acab4d8bb9f5e80dcddb74b13544b87790b2fe0da197928a536b20a0ad2->enter($__internal_b6703acab4d8bb9f5e80dcddb74b13544b87790b2fe0da197928a536b20a0ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_27c6566f452a22a69d38d4d5aa5e2f5fbe59744fda8cf2cb2a93a282258b2518 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27c6566f452a22a69d38d4d5aa5e2f5fbe59744fda8cf2cb2a93a282258b2518->enter($__internal_27c6566f452a22a69d38d4d5aa5e2f5fbe59744fda8cf2cb2a93a282258b2518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <div id=\"delete-wrapper\">
        <section class=\"delete\">
            <article>
                <form action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete", array("id" => $this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\">
                    <h4>Do you want to delete this item?</h4>
                    <div class=\"box\">
                        <p>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "title", array()), "html", null, true);
        echo "</p>
                    </div>
                    <div class=\"box\">
                        <p class=\"description\">";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "comments", array()), "html", null, true);
        echo "</p>
                    </div>

                    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'row');
        echo "

                    <button type=\"submit\">Delete</button>
                    <a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\">Cancel</a>
                </form>
            </article>
        </section>
    </div>
";
        
        $__internal_27c6566f452a22a69d38d4d5aa5e2f5fbe59744fda8cf2cb2a93a282258b2518->leave($__internal_27c6566f452a22a69d38d4d5aa5e2f5fbe59744fda8cf2cb2a93a282258b2518_prof);

        
        $__internal_b6703acab4d8bb9f5e80dcddb74b13544b87790b2fe0da197928a536b20a0ad2->leave($__internal_b6703acab4d8bb9f5e80dcddb74b13544b87790b2fe0da197928a536b20a0ad2_prof);

    }

    public function getTemplateName()
    {
        return "task/delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 19,  72 => 16,  66 => 13,  60 => 10,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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
    <div id=\"delete-wrapper\">
        <section class=\"delete\">
            <article>
                <form action=\"{{ path('delete', {'id': task.id}) }}\" method=\"POST\">
                    <h4>Do you want to delete this item?</h4>
                    <div class=\"box\">
                        <p>{{ task.title }}</p>
                    </div>
                    <div class=\"box\">
                        <p class=\"description\">{{ task.comments }}</p>
                    </div>

                    {{ form_row(form._token) }}

                    <button type=\"submit\">Delete</button>
                    <a href=\"{{ path('index') }}\">Cancel</a>
                </form>
            </article>
        </section>
    </div>
{% endblock %}", "task/delete.html.twig", "E:\\PHP-EXAM\\app\\Resources\\views\\task\\delete.html.twig");
    }
}
