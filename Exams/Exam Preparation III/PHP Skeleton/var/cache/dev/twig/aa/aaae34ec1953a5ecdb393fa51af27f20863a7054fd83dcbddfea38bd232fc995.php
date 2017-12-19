<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e376c751e330419d3f9a1a4b0a70adfbd1d2211ad6355062ee234a1596327f48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c3b2aa698e02b16423cba8b4db43cf689d334ce25cc2c7021e823112628c2994 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3b2aa698e02b16423cba8b4db43cf689d334ce25cc2c7021e823112628c2994->enter($__internal_c3b2aa698e02b16423cba8b4db43cf689d334ce25cc2c7021e823112628c2994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_49bfacf5431ef09eeaa9eb323ce7d50d08b01c7327bf77819e4f30d855b2d87a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49bfacf5431ef09eeaa9eb323ce7d50d08b01c7327bf77819e4f30d855b2d87a->enter($__internal_49bfacf5431ef09eeaa9eb323ce7d50d08b01c7327bf77819e4f30d855b2d87a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3b2aa698e02b16423cba8b4db43cf689d334ce25cc2c7021e823112628c2994->leave($__internal_c3b2aa698e02b16423cba8b4db43cf689d334ce25cc2c7021e823112628c2994_prof);

        
        $__internal_49bfacf5431ef09eeaa9eb323ce7d50d08b01c7327bf77819e4f30d855b2d87a->leave($__internal_49bfacf5431ef09eeaa9eb323ce7d50d08b01c7327bf77819e4f30d855b2d87a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a092b7477464789915bb9fb3a89a10cec84e10490128e207379b8282d2517e15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a092b7477464789915bb9fb3a89a10cec84e10490128e207379b8282d2517e15->enter($__internal_a092b7477464789915bb9fb3a89a10cec84e10490128e207379b8282d2517e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_56dc2a2048a1f621b1a12eac65b4ca6bab795e289c05f0cc4535a3ca57bdd94f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56dc2a2048a1f621b1a12eac65b4ca6bab795e289c05f0cc4535a3ca57bdd94f->enter($__internal_56dc2a2048a1f621b1a12eac65b4ca6bab795e289c05f0cc4535a3ca57bdd94f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_56dc2a2048a1f621b1a12eac65b4ca6bab795e289c05f0cc4535a3ca57bdd94f->leave($__internal_56dc2a2048a1f621b1a12eac65b4ca6bab795e289c05f0cc4535a3ca57bdd94f_prof);

        
        $__internal_a092b7477464789915bb9fb3a89a10cec84e10490128e207379b8282d2517e15->leave($__internal_a092b7477464789915bb9fb3a89a10cec84e10490128e207379b8282d2517e15_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_8d2afe385b2a8d1e59dd6fd21ccbddc809fc716af3fbeae827472ea4d1ded1cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d2afe385b2a8d1e59dd6fd21ccbddc809fc716af3fbeae827472ea4d1ded1cd->enter($__internal_8d2afe385b2a8d1e59dd6fd21ccbddc809fc716af3fbeae827472ea4d1ded1cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9b45fe03823e0d9d49075143a68e00bb853e123f8b657592e9f705d2770aae8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b45fe03823e0d9d49075143a68e00bb853e123f8b657592e9f705d2770aae8a->enter($__internal_9b45fe03823e0d9d49075143a68e00bb853e123f8b657592e9f705d2770aae8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9b45fe03823e0d9d49075143a68e00bb853e123f8b657592e9f705d2770aae8a->leave($__internal_9b45fe03823e0d9d49075143a68e00bb853e123f8b657592e9f705d2770aae8a_prof);

        
        $__internal_8d2afe385b2a8d1e59dd6fd21ccbddc809fc716af3fbeae827472ea4d1ded1cd->leave($__internal_8d2afe385b2a8d1e59dd6fd21ccbddc809fc716af3fbeae827472ea4d1ded1cd_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_ce4f123703a07cf9b5bb3dd8cb85947e99c341d55a87b41b7b473e370ac800d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce4f123703a07cf9b5bb3dd8cb85947e99c341d55a87b41b7b473e370ac800d1->enter($__internal_ce4f123703a07cf9b5bb3dd8cb85947e99c341d55a87b41b7b473e370ac800d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f8da8454339373d49b2be07e2135fd86e888be7eee1af27c487157fcb02ec601 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8da8454339373d49b2be07e2135fd86e888be7eee1af27c487157fcb02ec601->enter($__internal_f8da8454339373d49b2be07e2135fd86e888be7eee1af27c487157fcb02ec601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_f8da8454339373d49b2be07e2135fd86e888be7eee1af27c487157fcb02ec601->leave($__internal_f8da8454339373d49b2be07e2135fd86e888be7eee1af27c487157fcb02ec601_prof);

        
        $__internal_ce4f123703a07cf9b5bb3dd8cb85947e99c341d55a87b41b7b473e370ac800d1->leave($__internal_ce4f123703a07cf9b5bb3dd8cb85947e99c341d55a87b41b7b473e370ac800d1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "E:\\ExamPrepIII\\PHP Skeleton\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
