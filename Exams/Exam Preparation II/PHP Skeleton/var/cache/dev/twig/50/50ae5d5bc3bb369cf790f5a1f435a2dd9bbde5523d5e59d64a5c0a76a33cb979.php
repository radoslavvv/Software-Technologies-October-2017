<?php

/* task/create.html.twig */
class __TwigTemplate_6e5eea0179c0e14d539c7b4381c84bf8b9ace588f2b99ef32d8733d57eb34b9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "task/create.html.twig", 1);
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
        $__internal_c1634f45cadde64731174b48bcad33249ce20dff7023833006d603a9d7c9de88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1634f45cadde64731174b48bcad33249ce20dff7023833006d603a9d7c9de88->enter($__internal_c1634f45cadde64731174b48bcad33249ce20dff7023833006d603a9d7c9de88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/create.html.twig"));

        $__internal_0070266af01652b8f7fec60fe8cff058da6cc5168b9221c516bf4cc4f43cb4e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0070266af01652b8f7fec60fe8cff058da6cc5168b9221c516bf4cc4f43cb4e3->enter($__internal_0070266af01652b8f7fec60fe8cff058da6cc5168b9221c516bf4cc4f43cb4e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1634f45cadde64731174b48bcad33249ce20dff7023833006d603a9d7c9de88->leave($__internal_c1634f45cadde64731174b48bcad33249ce20dff7023833006d603a9d7c9de88_prof);

        
        $__internal_0070266af01652b8f7fec60fe8cff058da6cc5168b9221c516bf4cc4f43cb4e3->leave($__internal_0070266af01652b8f7fec60fe8cff058da6cc5168b9221c516bf4cc4f43cb4e3_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_16c56618dfae3b44c5c5a12861e72adb60a56f059cc9cbf43f65c52c39c40602 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16c56618dfae3b44c5c5a12861e72adb60a56f059cc9cbf43f65c52c39c40602->enter($__internal_16c56618dfae3b44c5c5a12861e72adb60a56f059cc9cbf43f65c52c39c40602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_c955addd434fce9e7209471df9f140299f41769d14df285e4ca39b474b80b1ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c955addd434fce9e7209471df9f140299f41769d14df285e4ca39b474b80b1ce->enter($__internal_c955addd434fce9e7209471df9f140299f41769d14df285e4ca39b474b80b1ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <div id=\"create-wrapper\">
        <section class=\"create\">
            <article>
                <form action=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("create");
        echo "\" method=\"POST\">
                    <div class=\"row\">
                        <label for=\"task\">Task:</label>
                        <input type=\"text\" id=\"task\" name=\"task[title]\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "title", array()), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"row\">
                        <label for=\"comments\">Comments:</label>
                        <textarea id=\"comments\" name=\"task[comments]\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "comments", array()), "html", null, true);
        echo "</textarea>
                    </div>

                    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'row');
        echo "

                    <button type=\"submit\">Create</button>
                </form>
                ";
        // line 21
        if (array_key_exists("errorMessage", $context)) {
            // line 22
            echo "                    <div class=\"errorMessage\">";
            echo twig_escape_filter($this->env, ($context["errorMessage"] ?? $this->getContext($context, "errorMessage")), "html", null, true);
            echo "</div>
                ";
        }
        // line 24
        echo "            </article>
        </section>
    </div>
";
        
        $__internal_c955addd434fce9e7209471df9f140299f41769d14df285e4ca39b474b80b1ce->leave($__internal_c955addd434fce9e7209471df9f140299f41769d14df285e4ca39b474b80b1ce_prof);

        
        $__internal_16c56618dfae3b44c5c5a12861e72adb60a56f059cc9cbf43f65c52c39c40602->leave($__internal_16c56618dfae3b44c5c5a12861e72adb60a56f059cc9cbf43f65c52c39c40602_prof);

    }

    public function getTemplateName()
    {
        return "task/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 24,  82 => 22,  80 => 21,  73 => 17,  67 => 14,  60 => 10,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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
    <div id=\"create-wrapper\">
        <section class=\"create\">
            <article>
                <form action=\"{{ path('create') }}\" method=\"POST\">
                    <div class=\"row\">
                        <label for=\"task\">Task:</label>
                        <input type=\"text\" id=\"task\" name=\"task[title]\" value=\"{{ task.title }}\">
                    </div>
                    <div class=\"row\">
                        <label for=\"comments\">Comments:</label>
                        <textarea id=\"comments\" name=\"task[comments]\">{{ task.comments }}</textarea>
                    </div>

                    {{ form_row(form._token) }}

                    <button type=\"submit\">Create</button>
                </form>
                {%  if errorMessage is defined %}
                    <div class=\"errorMessage\">{{ errorMessage }}</div>
                {% endif %}
            </article>
        </section>
    </div>
{% endblock %}", "task/create.html.twig", "E:\\PHP-EXAM\\app\\Resources\\views\\task\\create.html.twig");
    }
}
