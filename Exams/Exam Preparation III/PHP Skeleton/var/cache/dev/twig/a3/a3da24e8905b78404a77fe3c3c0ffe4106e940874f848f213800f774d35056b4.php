<?php

/* base.html.twig */
class __TwigTemplate_93e2499d03c6402ea1e3906495568257ed0120721f7f5badb0e11600e82927c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f30a193ba0bdf07d921b58e855ce9697b49600d90cd58d5a71fbb9462269413 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f30a193ba0bdf07d921b58e855ce9697b49600d90cd58d5a71fbb9462269413->enter($__internal_6f30a193ba0bdf07d921b58e855ce9697b49600d90cd58d5a71fbb9462269413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_16930c236f2eb9c6eede653f9f990553e7d1b6645a79d6808a483825cabc011c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16930c236f2eb9c6eede653f9f990553e7d1b6645a79d6808a483825cabc011c->enter($__internal_16930c236f2eb9c6eede653f9f990553e7d1b6645a79d6808a483825cabc011c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>

<body id=\"";
        // line 21
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">
";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 25
        echo "</body>
</html>
";
        
        $__internal_6f30a193ba0bdf07d921b58e855ce9697b49600d90cd58d5a71fbb9462269413->leave($__internal_6f30a193ba0bdf07d921b58e855ce9697b49600d90cd58d5a71fbb9462269413_prof);

        
        $__internal_16930c236f2eb9c6eede653f9f990553e7d1b6645a79d6808a483825cabc011c->leave($__internal_16930c236f2eb9c6eede653f9f990553e7d1b6645a79d6808a483825cabc011c_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_644d387aac3432c294706f4178556e32f22fe683703808755b9004715c71be88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_644d387aac3432c294706f4178556e32f22fe683703808755b9004715c71be88->enter($__internal_644d387aac3432c294706f4178556e32f22fe683703808755b9004715c71be88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_061feabf40b31920cafa5a8a228a335cd8cd9b321761f7424b9ce6901e0dc3bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_061feabf40b31920cafa5a8a228a335cd8cd9b321761f7424b9ce6901e0dc3bc->enter($__internal_061feabf40b31920cafa5a8a228a335cd8cd9b321761f7424b9ce6901e0dc3bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "TODO List";
        
        $__internal_061feabf40b31920cafa5a8a228a335cd8cd9b321761f7424b9ce6901e0dc3bc->leave($__internal_061feabf40b31920cafa5a8a228a335cd8cd9b321761f7424b9ce6901e0dc3bc_prof);

        
        $__internal_644d387aac3432c294706f4178556e32f22fe683703808755b9004715c71be88->leave($__internal_644d387aac3432c294706f4178556e32f22fe683703808755b9004715c71be88_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_713e6bb98998e251b4f8b12438e774e89419d746d429102798b61c012aa9ab62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_713e6bb98998e251b4f8b12438e774e89419d746d429102798b61c012aa9ab62->enter($__internal_713e6bb98998e251b4f8b12438e774e89419d746d429102798b61c012aa9ab62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_64e4751715ca5ee1f1c219f964acb415f2c9ea641fbae23381a092adb03ab92f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64e4751715ca5ee1f1c219f964acb415f2c9ea641fbae23381a092adb03ab92f->enter($__internal_64e4751715ca5ee1f1c219f964acb415f2c9ea641fbae23381a092adb03ab92f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        ";
        // line 14
        echo "        ";
        // line 15
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index-style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/form-style.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_64e4751715ca5ee1f1c219f964acb415f2c9ea641fbae23381a092adb03ab92f->leave($__internal_64e4751715ca5ee1f1c219f964acb415f2c9ea641fbae23381a092adb03ab92f_prof);

        
        $__internal_713e6bb98998e251b4f8b12438e774e89419d746d429102798b61c012aa9ab62->leave($__internal_713e6bb98998e251b4f8b12438e774e89419d746d429102798b61c012aa9ab62_prof);

    }

    // line 21
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_d7b705af33cd1d59599e22900da09f3ef83f5be4c056f873b17a570732141224 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7b705af33cd1d59599e22900da09f3ef83f5be4c056f873b17a570732141224->enter($__internal_d7b705af33cd1d59599e22900da09f3ef83f5be4c056f873b17a570732141224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_049cfd1e2b952151261ac547a2969b7fc9d4a8a884fb224ceacf33dd9e12b29e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_049cfd1e2b952151261ac547a2969b7fc9d4a8a884fb224ceacf33dd9e12b29e->enter($__internal_049cfd1e2b952151261ac547a2969b7fc9d4a8a884fb224ceacf33dd9e12b29e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_049cfd1e2b952151261ac547a2969b7fc9d4a8a884fb224ceacf33dd9e12b29e->leave($__internal_049cfd1e2b952151261ac547a2969b7fc9d4a8a884fb224ceacf33dd9e12b29e_prof);

        
        $__internal_d7b705af33cd1d59599e22900da09f3ef83f5be4c056f873b17a570732141224->leave($__internal_d7b705af33cd1d59599e22900da09f3ef83f5be4c056f873b17a570732141224_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_85c8a378d195d8de43258d6c1cab2ea3499fbafc00f43bd5afd42f7d5a3cdb89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85c8a378d195d8de43258d6c1cab2ea3499fbafc00f43bd5afd42f7d5a3cdb89->enter($__internal_85c8a378d195d8de43258d6c1cab2ea3499fbafc00f43bd5afd42f7d5a3cdb89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e64edbf7e59dcb619d556b45ac3a039c3fe9ac486b7526a5a714c05ca3d9a0cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e64edbf7e59dcb619d556b45ac3a039c3fe9ac486b7526a5a714c05ca3d9a0cd->enter($__internal_e64edbf7e59dcb619d556b45ac3a039c3fe9ac486b7526a5a714c05ca3d9a0cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 23
        echo "    ";
        $this->displayBlock('main', $context, $blocks);
        
        $__internal_e64edbf7e59dcb619d556b45ac3a039c3fe9ac486b7526a5a714c05ca3d9a0cd->leave($__internal_e64edbf7e59dcb619d556b45ac3a039c3fe9ac486b7526a5a714c05ca3d9a0cd_prof);

        
        $__internal_85c8a378d195d8de43258d6c1cab2ea3499fbafc00f43bd5afd42f7d5a3cdb89->leave($__internal_85c8a378d195d8de43258d6c1cab2ea3499fbafc00f43bd5afd42f7d5a3cdb89_prof);

    }

    public function block_main($context, array $blocks = array())
    {
        $__internal_889206824f76432e3b01d8a6ec0dd106b651cd173f55f8ef633565242943d79c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_889206824f76432e3b01d8a6ec0dd106b651cd173f55f8ef633565242943d79c->enter($__internal_889206824f76432e3b01d8a6ec0dd106b651cd173f55f8ef633565242943d79c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_15e2cdd28ec3248e8d9554ea273a33f940b1018abbbbc93fe63b0ca15cdcd9ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15e2cdd28ec3248e8d9554ea273a33f940b1018abbbbc93fe63b0ca15cdcd9ac->enter($__internal_15e2cdd28ec3248e8d9554ea273a33f940b1018abbbbc93fe63b0ca15cdcd9ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_15e2cdd28ec3248e8d9554ea273a33f940b1018abbbbc93fe63b0ca15cdcd9ac->leave($__internal_15e2cdd28ec3248e8d9554ea273a33f940b1018abbbbc93fe63b0ca15cdcd9ac_prof);

        
        $__internal_889206824f76432e3b01d8a6ec0dd106b651cd173f55f8ef633565242943d79c->leave($__internal_889206824f76432e3b01d8a6ec0dd106b651cd173f55f8ef633565242943d79c_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 23,  133 => 22,  116 => 21,  104 => 16,  99 => 15,  97 => 14,  95 => 13,  86 => 12,  68 => 11,  56 => 25,  54 => 22,  50 => 21,  43 => 18,  41 => 12,  37 => 11,  30 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
   This is the base template used as the application layout which contains the
   common elements and decorates all the other templates.
   See http://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts
#}
<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>{% block title %}TODO List{% endblock %}</title>
    {% block stylesheets %}
        {#<link rel=\"stylesheet\" href=\"{{ asset('css/reset-style.css') }}\">;#}
        {#<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">#}
        <link rel=\"stylesheet\" href=\"{{ asset('css/index-style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/form-style.css') }}\">
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>

<body id=\"{% block body_id %}{% endblock %}\">
{% block body %}
    {% block main %}{% endblock %}
{% endblock %}
</body>
</html>
", "base.html.twig", "E:\\ExamPrepIII\\PHP Skeleton\\app\\Resources\\views\\base.html.twig");
    }
}
