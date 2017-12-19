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
        $__internal_75481a033a5ad3364f356be89cc56f3050e9316dc5d1e0d0e6e6687cb8126eb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75481a033a5ad3364f356be89cc56f3050e9316dc5d1e0d0e6e6687cb8126eb9->enter($__internal_75481a033a5ad3364f356be89cc56f3050e9316dc5d1e0d0e6e6687cb8126eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_0456256ab53e9f9a10b28e0607852442ba55586751bb6033f97af085f44500ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0456256ab53e9f9a10b28e0607852442ba55586751bb6033f97af085f44500ec->enter($__internal_0456256ab53e9f9a10b28e0607852442ba55586751bb6033f97af085f44500ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75481a033a5ad3364f356be89cc56f3050e9316dc5d1e0d0e6e6687cb8126eb9->leave($__internal_75481a033a5ad3364f356be89cc56f3050e9316dc5d1e0d0e6e6687cb8126eb9_prof);

        
        $__internal_0456256ab53e9f9a10b28e0607852442ba55586751bb6033f97af085f44500ec->leave($__internal_0456256ab53e9f9a10b28e0607852442ba55586751bb6033f97af085f44500ec_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_db21708e8674893982dbfbd65a84fc38510c97a0605910a0efaee3f27c00afe2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db21708e8674893982dbfbd65a84fc38510c97a0605910a0efaee3f27c00afe2->enter($__internal_db21708e8674893982dbfbd65a84fc38510c97a0605910a0efaee3f27c00afe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e18084cb55a5f0d0d0860d8cd5d619daa964a1cefac0efebc2aa9b769dc0fa59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e18084cb55a5f0d0d0860d8cd5d619daa964a1cefac0efebc2aa9b769dc0fa59->enter($__internal_e18084cb55a5f0d0d0860d8cd5d619daa964a1cefac0efebc2aa9b769dc0fa59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e18084cb55a5f0d0d0860d8cd5d619daa964a1cefac0efebc2aa9b769dc0fa59->leave($__internal_e18084cb55a5f0d0d0860d8cd5d619daa964a1cefac0efebc2aa9b769dc0fa59_prof);

        
        $__internal_db21708e8674893982dbfbd65a84fc38510c97a0605910a0efaee3f27c00afe2->leave($__internal_db21708e8674893982dbfbd65a84fc38510c97a0605910a0efaee3f27c00afe2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b4bc34f435dd8913fdecd261cae04078c0cde36df59b7e0939864c8c46769a54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4bc34f435dd8913fdecd261cae04078c0cde36df59b7e0939864c8c46769a54->enter($__internal_b4bc34f435dd8913fdecd261cae04078c0cde36df59b7e0939864c8c46769a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ec19d2a6b852a3f3c1728a89897b65e10846d3b7542bf6ccac255fbca2c69bf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec19d2a6b852a3f3c1728a89897b65e10846d3b7542bf6ccac255fbca2c69bf2->enter($__internal_ec19d2a6b852a3f3c1728a89897b65e10846d3b7542bf6ccac255fbca2c69bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ec19d2a6b852a3f3c1728a89897b65e10846d3b7542bf6ccac255fbca2c69bf2->leave($__internal_ec19d2a6b852a3f3c1728a89897b65e10846d3b7542bf6ccac255fbca2c69bf2_prof);

        
        $__internal_b4bc34f435dd8913fdecd261cae04078c0cde36df59b7e0939864c8c46769a54->leave($__internal_b4bc34f435dd8913fdecd261cae04078c0cde36df59b7e0939864c8c46769a54_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_72c49cc045b0245683cbfede1715c3566988eddc3855ebe31b9ff77095dc8aec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72c49cc045b0245683cbfede1715c3566988eddc3855ebe31b9ff77095dc8aec->enter($__internal_72c49cc045b0245683cbfede1715c3566988eddc3855ebe31b9ff77095dc8aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cfd1da4ffbda8f686cf42758cc03882b842326d1a3cb82ada01489ab4e3fb583 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfd1da4ffbda8f686cf42758cc03882b842326d1a3cb82ada01489ab4e3fb583->enter($__internal_cfd1da4ffbda8f686cf42758cc03882b842326d1a3cb82ada01489ab4e3fb583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_cfd1da4ffbda8f686cf42758cc03882b842326d1a3cb82ada01489ab4e3fb583->leave($__internal_cfd1da4ffbda8f686cf42758cc03882b842326d1a3cb82ada01489ab4e3fb583_prof);

        
        $__internal_72c49cc045b0245683cbfede1715c3566988eddc3855ebe31b9ff77095dc8aec->leave($__internal_72c49cc045b0245683cbfede1715c3566988eddc3855ebe31b9ff77095dc8aec_prof);

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
", "@WebProfiler/Collector/router.html.twig", "E:\\PHP-EXAM\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
