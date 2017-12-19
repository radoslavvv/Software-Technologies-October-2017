<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_f32ad73c9bc804e7d7685ce925e27ce9c7daa98efc0b9a8c89227d7076a75563 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4cdbd042769af08ba819f06da17d7eb066bf85c951eaf6ab4b08110926d82a99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cdbd042769af08ba819f06da17d7eb066bf85c951eaf6ab4b08110926d82a99->enter($__internal_4cdbd042769af08ba819f06da17d7eb066bf85c951eaf6ab4b08110926d82a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_7f3de0e72240cfab7a567d70d069bbb2fb93fa47139bf73b51671ce9251bb851 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f3de0e72240cfab7a567d70d069bbb2fb93fa47139bf73b51671ce9251bb851->enter($__internal_7f3de0e72240cfab7a567d70d069bbb2fb93fa47139bf73b51671ce9251bb851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cdbd042769af08ba819f06da17d7eb066bf85c951eaf6ab4b08110926d82a99->leave($__internal_4cdbd042769af08ba819f06da17d7eb066bf85c951eaf6ab4b08110926d82a99_prof);

        
        $__internal_7f3de0e72240cfab7a567d70d069bbb2fb93fa47139bf73b51671ce9251bb851->leave($__internal_7f3de0e72240cfab7a567d70d069bbb2fb93fa47139bf73b51671ce9251bb851_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_138e2b9fc8cb35c6087860bd8bd864bca6beb3a1e092c22fc7c4e14ffde61afa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_138e2b9fc8cb35c6087860bd8bd864bca6beb3a1e092c22fc7c4e14ffde61afa->enter($__internal_138e2b9fc8cb35c6087860bd8bd864bca6beb3a1e092c22fc7c4e14ffde61afa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a9db89c7e42610b88582f7bbfb5cf54eaee54052622087f20919de586d8b189e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9db89c7e42610b88582f7bbfb5cf54eaee54052622087f20919de586d8b189e->enter($__internal_a9db89c7e42610b88582f7bbfb5cf54eaee54052622087f20919de586d8b189e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_a9db89c7e42610b88582f7bbfb5cf54eaee54052622087f20919de586d8b189e->leave($__internal_a9db89c7e42610b88582f7bbfb5cf54eaee54052622087f20919de586d8b189e_prof);

        
        $__internal_138e2b9fc8cb35c6087860bd8bd864bca6beb3a1e092c22fc7c4e14ffde61afa->leave($__internal_138e2b9fc8cb35c6087860bd8bd864bca6beb3a1e092c22fc7c4e14ffde61afa_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3251b7f00f90fa1173050d6ee7e4112e138940528db58cfde35330a970b87a2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3251b7f00f90fa1173050d6ee7e4112e138940528db58cfde35330a970b87a2d->enter($__internal_3251b7f00f90fa1173050d6ee7e4112e138940528db58cfde35330a970b87a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_db71963a9c6665a54072f52b0328cf30bdcdad3847ed67165404c3e7a31f806a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db71963a9c6665a54072f52b0328cf30bdcdad3847ed67165404c3e7a31f806a->enter($__internal_db71963a9c6665a54072f52b0328cf30bdcdad3847ed67165404c3e7a31f806a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_db71963a9c6665a54072f52b0328cf30bdcdad3847ed67165404c3e7a31f806a->leave($__internal_db71963a9c6665a54072f52b0328cf30bdcdad3847ed67165404c3e7a31f806a_prof);

        
        $__internal_3251b7f00f90fa1173050d6ee7e4112e138940528db58cfde35330a970b87a2d->leave($__internal_3251b7f00f90fa1173050d6ee7e4112e138940528db58cfde35330a970b87a2d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0566e9d5c56dda957731861cebd185738bc919c791f0f1d82dc192c652cf60db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0566e9d5c56dda957731861cebd185738bc919c791f0f1d82dc192c652cf60db->enter($__internal_0566e9d5c56dda957731861cebd185738bc919c791f0f1d82dc192c652cf60db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_001f1e4e4ef8f480417b2b8a90f2f83e4fb2b3c48d184ffe26edc8ab1b707381 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_001f1e4e4ef8f480417b2b8a90f2f83e4fb2b3c48d184ffe26edc8ab1b707381->enter($__internal_001f1e4e4ef8f480417b2b8a90f2f83e4fb2b3c48d184ffe26edc8ab1b707381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_001f1e4e4ef8f480417b2b8a90f2f83e4fb2b3c48d184ffe26edc8ab1b707381->leave($__internal_001f1e4e4ef8f480417b2b8a90f2f83e4fb2b3c48d184ffe26edc8ab1b707381_prof);

        
        $__internal_0566e9d5c56dda957731861cebd185738bc919c791f0f1d82dc192c652cf60db->leave($__internal_0566e9d5c56dda957731861cebd185738bc919c791f0f1d82dc192c652cf60db_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "E:\\PHP-EXAM\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
