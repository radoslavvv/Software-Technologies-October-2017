<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_09886c37796d81d574b2448cf2a22ea32da8dad546b69f22c376ce19a869ce97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_424bbf02a2c2a7a3b5e94755a27a3390af7dbb2364abddc83fd5e944ca0d9423 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_424bbf02a2c2a7a3b5e94755a27a3390af7dbb2364abddc83fd5e944ca0d9423->enter($__internal_424bbf02a2c2a7a3b5e94755a27a3390af7dbb2364abddc83fd5e944ca0d9423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_74a7c58458f0e0d19d1461d245b921fd2bb1cf61b0ab23cd54be6ab170d32450 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74a7c58458f0e0d19d1461d245b921fd2bb1cf61b0ab23cd54be6ab170d32450->enter($__internal_74a7c58458f0e0d19d1461d245b921fd2bb1cf61b0ab23cd54be6ab170d32450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_424bbf02a2c2a7a3b5e94755a27a3390af7dbb2364abddc83fd5e944ca0d9423->leave($__internal_424bbf02a2c2a7a3b5e94755a27a3390af7dbb2364abddc83fd5e944ca0d9423_prof);

        
        $__internal_74a7c58458f0e0d19d1461d245b921fd2bb1cf61b0ab23cd54be6ab170d32450->leave($__internal_74a7c58458f0e0d19d1461d245b921fd2bb1cf61b0ab23cd54be6ab170d32450_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5a2135f191f6ee07c415132183917080c921258258407c1d7e157cdfd16ba7ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a2135f191f6ee07c415132183917080c921258258407c1d7e157cdfd16ba7ff->enter($__internal_5a2135f191f6ee07c415132183917080c921258258407c1d7e157cdfd16ba7ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_24b8305a917bf7821eee344d2e0acaeafdeac932d911a0f9084e5820e1af01e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24b8305a917bf7821eee344d2e0acaeafdeac932d911a0f9084e5820e1af01e4->enter($__internal_24b8305a917bf7821eee344d2e0acaeafdeac932d911a0f9084e5820e1af01e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_24b8305a917bf7821eee344d2e0acaeafdeac932d911a0f9084e5820e1af01e4->leave($__internal_24b8305a917bf7821eee344d2e0acaeafdeac932d911a0f9084e5820e1af01e4_prof);

        
        $__internal_5a2135f191f6ee07c415132183917080c921258258407c1d7e157cdfd16ba7ff->leave($__internal_5a2135f191f6ee07c415132183917080c921258258407c1d7e157cdfd16ba7ff_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b8ca9f21b70ff898dc600fda1f3c117de9c25a5e94388a9a3f23a5d3ee76e15a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8ca9f21b70ff898dc600fda1f3c117de9c25a5e94388a9a3f23a5d3ee76e15a->enter($__internal_b8ca9f21b70ff898dc600fda1f3c117de9c25a5e94388a9a3f23a5d3ee76e15a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_97fc4dfd76c9bf1927523b13c38d8f185b7bcd0cdef5d39a5bfd4045196f07d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97fc4dfd76c9bf1927523b13c38d8f185b7bcd0cdef5d39a5bfd4045196f07d1->enter($__internal_97fc4dfd76c9bf1927523b13c38d8f185b7bcd0cdef5d39a5bfd4045196f07d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_97fc4dfd76c9bf1927523b13c38d8f185b7bcd0cdef5d39a5bfd4045196f07d1->leave($__internal_97fc4dfd76c9bf1927523b13c38d8f185b7bcd0cdef5d39a5bfd4045196f07d1_prof);

        
        $__internal_b8ca9f21b70ff898dc600fda1f3c117de9c25a5e94388a9a3f23a5d3ee76e15a->leave($__internal_b8ca9f21b70ff898dc600fda1f3c117de9c25a5e94388a9a3f23a5d3ee76e15a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_68c3656d83af06f10bf60fe697bdd8be5f1e853ed92389f22d8135cc74d670d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68c3656d83af06f10bf60fe697bdd8be5f1e853ed92389f22d8135cc74d670d4->enter($__internal_68c3656d83af06f10bf60fe697bdd8be5f1e853ed92389f22d8135cc74d670d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6367e40abcc2a8d5a567870a7ae597bcf42a07b0abbed9a7107e1fff27eeeffa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6367e40abcc2a8d5a567870a7ae597bcf42a07b0abbed9a7107e1fff27eeeffa->enter($__internal_6367e40abcc2a8d5a567870a7ae597bcf42a07b0abbed9a7107e1fff27eeeffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6367e40abcc2a8d5a567870a7ae597bcf42a07b0abbed9a7107e1fff27eeeffa->leave($__internal_6367e40abcc2a8d5a567870a7ae597bcf42a07b0abbed9a7107e1fff27eeeffa_prof);

        
        $__internal_68c3656d83af06f10bf60fe697bdd8be5f1e853ed92389f22d8135cc74d670d4->leave($__internal_68c3656d83af06f10bf60fe697bdd8be5f1e853ed92389f22d8135cc74d670d4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "E:\\ExamPrepIII\\PHP Skeleton\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
