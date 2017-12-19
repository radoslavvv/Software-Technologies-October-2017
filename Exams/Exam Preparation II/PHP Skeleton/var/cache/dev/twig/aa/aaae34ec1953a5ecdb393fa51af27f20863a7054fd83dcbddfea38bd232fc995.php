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
        $__internal_fea11a4c273af51112f37c5e347383f5311ed659b13d944e8a65e7493e5752a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fea11a4c273af51112f37c5e347383f5311ed659b13d944e8a65e7493e5752a7->enter($__internal_fea11a4c273af51112f37c5e347383f5311ed659b13d944e8a65e7493e5752a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_ee6b411490bdcf017fec4a433a6106bc74f2446adc2f832606808b7b83587d43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee6b411490bdcf017fec4a433a6106bc74f2446adc2f832606808b7b83587d43->enter($__internal_ee6b411490bdcf017fec4a433a6106bc74f2446adc2f832606808b7b83587d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fea11a4c273af51112f37c5e347383f5311ed659b13d944e8a65e7493e5752a7->leave($__internal_fea11a4c273af51112f37c5e347383f5311ed659b13d944e8a65e7493e5752a7_prof);

        
        $__internal_ee6b411490bdcf017fec4a433a6106bc74f2446adc2f832606808b7b83587d43->leave($__internal_ee6b411490bdcf017fec4a433a6106bc74f2446adc2f832606808b7b83587d43_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9309d4eeff8c20e7f12cd125559949e11a9f8bfd888cb245345b2b5e9b237bdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9309d4eeff8c20e7f12cd125559949e11a9f8bfd888cb245345b2b5e9b237bdc->enter($__internal_9309d4eeff8c20e7f12cd125559949e11a9f8bfd888cb245345b2b5e9b237bdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_edef26663a0dddeb59a9feb1842389dd5bfc1f44872f2d65dbfc69b23461e13a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edef26663a0dddeb59a9feb1842389dd5bfc1f44872f2d65dbfc69b23461e13a->enter($__internal_edef26663a0dddeb59a9feb1842389dd5bfc1f44872f2d65dbfc69b23461e13a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_edef26663a0dddeb59a9feb1842389dd5bfc1f44872f2d65dbfc69b23461e13a->leave($__internal_edef26663a0dddeb59a9feb1842389dd5bfc1f44872f2d65dbfc69b23461e13a_prof);

        
        $__internal_9309d4eeff8c20e7f12cd125559949e11a9f8bfd888cb245345b2b5e9b237bdc->leave($__internal_9309d4eeff8c20e7f12cd125559949e11a9f8bfd888cb245345b2b5e9b237bdc_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_8e9de07f4f5f90508ab09efe76aebe134d272a3ae96f144f426e48402dd4644c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e9de07f4f5f90508ab09efe76aebe134d272a3ae96f144f426e48402dd4644c->enter($__internal_8e9de07f4f5f90508ab09efe76aebe134d272a3ae96f144f426e48402dd4644c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0af005a57ac59f235c4198fa5af641c7d6f997d3d20f4f7996e62dc95bbede14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0af005a57ac59f235c4198fa5af641c7d6f997d3d20f4f7996e62dc95bbede14->enter($__internal_0af005a57ac59f235c4198fa5af641c7d6f997d3d20f4f7996e62dc95bbede14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0af005a57ac59f235c4198fa5af641c7d6f997d3d20f4f7996e62dc95bbede14->leave($__internal_0af005a57ac59f235c4198fa5af641c7d6f997d3d20f4f7996e62dc95bbede14_prof);

        
        $__internal_8e9de07f4f5f90508ab09efe76aebe134d272a3ae96f144f426e48402dd4644c->leave($__internal_8e9de07f4f5f90508ab09efe76aebe134d272a3ae96f144f426e48402dd4644c_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_c156d3f90d370c002585c7f8d6cf8d659816d129f7f659baca4cede3c78111e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c156d3f90d370c002585c7f8d6cf8d659816d129f7f659baca4cede3c78111e0->enter($__internal_c156d3f90d370c002585c7f8d6cf8d659816d129f7f659baca4cede3c78111e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5a1b07a3e9a4d85b6e4feeb5903f4a05c6dc59861332a22deb1e7565a6ad7b64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a1b07a3e9a4d85b6e4feeb5903f4a05c6dc59861332a22deb1e7565a6ad7b64->enter($__internal_5a1b07a3e9a4d85b6e4feeb5903f4a05c6dc59861332a22deb1e7565a6ad7b64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_5a1b07a3e9a4d85b6e4feeb5903f4a05c6dc59861332a22deb1e7565a6ad7b64->leave($__internal_5a1b07a3e9a4d85b6e4feeb5903f4a05c6dc59861332a22deb1e7565a6ad7b64_prof);

        
        $__internal_c156d3f90d370c002585c7f8d6cf8d659816d129f7f659baca4cede3c78111e0->leave($__internal_c156d3f90d370c002585c7f8d6cf8d659816d129f7f659baca4cede3c78111e0_prof);

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
", "@Twig/Exception/exception_full.html.twig", "E:\\PHP-EXAM\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
