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
        $__internal_d6a42115ab58f8c4c34158e29709c8fc684232ddb4c9c3fde68d11d863422242 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6a42115ab58f8c4c34158e29709c8fc684232ddb4c9c3fde68d11d863422242->enter($__internal_d6a42115ab58f8c4c34158e29709c8fc684232ddb4c9c3fde68d11d863422242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_e23af50af3229188427f3c545661789c35d4fde3de49148bc1b12201862f0119 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e23af50af3229188427f3c545661789c35d4fde3de49148bc1b12201862f0119->enter($__internal_e23af50af3229188427f3c545661789c35d4fde3de49148bc1b12201862f0119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 19
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>

<body id=\"";
        // line 22
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">
";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 26
        echo "</body>
</html>
";
        
        $__internal_d6a42115ab58f8c4c34158e29709c8fc684232ddb4c9c3fde68d11d863422242->leave($__internal_d6a42115ab58f8c4c34158e29709c8fc684232ddb4c9c3fde68d11d863422242_prof);

        
        $__internal_e23af50af3229188427f3c545661789c35d4fde3de49148bc1b12201862f0119->leave($__internal_e23af50af3229188427f3c545661789c35d4fde3de49148bc1b12201862f0119_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_39ea7661513468f7351382f9599a70cc19cc8af99c8e4462e95e9aca3ae03e9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39ea7661513468f7351382f9599a70cc19cc8af99c8e4462e95e9aca3ae03e9a->enter($__internal_39ea7661513468f7351382f9599a70cc19cc8af99c8e4462e95e9aca3ae03e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_af3c4b427c5b4ddb4b13f205b419c4ed74cc1a9903c7f3666e9cf9abed5402f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af3c4b427c5b4ddb4b13f205b419c4ed74cc1a9903c7f3666e9cf9abed5402f4->enter($__internal_af3c4b427c5b4ddb4b13f205b419c4ed74cc1a9903c7f3666e9cf9abed5402f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "TODO List";
        
        $__internal_af3c4b427c5b4ddb4b13f205b419c4ed74cc1a9903c7f3666e9cf9abed5402f4->leave($__internal_af3c4b427c5b4ddb4b13f205b419c4ed74cc1a9903c7f3666e9cf9abed5402f4_prof);

        
        $__internal_39ea7661513468f7351382f9599a70cc19cc8af99c8e4462e95e9aca3ae03e9a->leave($__internal_39ea7661513468f7351382f9599a70cc19cc8af99c8e4462e95e9aca3ae03e9a_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4262c13ddf4c794895a98a9ae374386f3f8dfc9975674e4d7dcf721d9cca753e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4262c13ddf4c794895a98a9ae374386f3f8dfc9975674e4d7dcf721d9cca753e->enter($__internal_4262c13ddf4c794895a98a9ae374386f3f8dfc9975674e4d7dcf721d9cca753e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e375be70084128d3d7cdc941e730fd8f8865b1cda2c7290453b366b8551885f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e375be70084128d3d7cdc941e730fd8f8865b1cda2c7290453b366b8551885f7->enter($__internal_e375be70084128d3d7cdc941e730fd8f8865b1cda2c7290453b366b8551885f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/create-style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/delete-style.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_e375be70084128d3d7cdc941e730fd8f8865b1cda2c7290453b366b8551885f7->leave($__internal_e375be70084128d3d7cdc941e730fd8f8865b1cda2c7290453b366b8551885f7_prof);

        
        $__internal_4262c13ddf4c794895a98a9ae374386f3f8dfc9975674e4d7dcf721d9cca753e->leave($__internal_4262c13ddf4c794895a98a9ae374386f3f8dfc9975674e4d7dcf721d9cca753e_prof);

    }

    // line 22
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_568ad8152506982348a322af16615db795bd7fbf4eebe586173a939d2a610d8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_568ad8152506982348a322af16615db795bd7fbf4eebe586173a939d2a610d8c->enter($__internal_568ad8152506982348a322af16615db795bd7fbf4eebe586173a939d2a610d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_18fe4bddc662ed2dc7e95eac1ac04cc99f2c6cbe846bec96672764db0c1392ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18fe4bddc662ed2dc7e95eac1ac04cc99f2c6cbe846bec96672764db0c1392ac->enter($__internal_18fe4bddc662ed2dc7e95eac1ac04cc99f2c6cbe846bec96672764db0c1392ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_18fe4bddc662ed2dc7e95eac1ac04cc99f2c6cbe846bec96672764db0c1392ac->leave($__internal_18fe4bddc662ed2dc7e95eac1ac04cc99f2c6cbe846bec96672764db0c1392ac_prof);

        
        $__internal_568ad8152506982348a322af16615db795bd7fbf4eebe586173a939d2a610d8c->leave($__internal_568ad8152506982348a322af16615db795bd7fbf4eebe586173a939d2a610d8c_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3071744430ac5488b4b91a78c11fc4523d914aca876250bf1c871d2a1dad079 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3071744430ac5488b4b91a78c11fc4523d914aca876250bf1c871d2a1dad079->enter($__internal_b3071744430ac5488b4b91a78c11fc4523d914aca876250bf1c871d2a1dad079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_63695e5798e30801b19968ae929ac4b7bc1f4e68dfe243126bc6df2b20ad44f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63695e5798e30801b19968ae929ac4b7bc1f4e68dfe243126bc6df2b20ad44f2->enter($__internal_63695e5798e30801b19968ae929ac4b7bc1f4e68dfe243126bc6df2b20ad44f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 24
        echo "    ";
        $this->displayBlock('main', $context, $blocks);
        
        $__internal_63695e5798e30801b19968ae929ac4b7bc1f4e68dfe243126bc6df2b20ad44f2->leave($__internal_63695e5798e30801b19968ae929ac4b7bc1f4e68dfe243126bc6df2b20ad44f2_prof);

        
        $__internal_b3071744430ac5488b4b91a78c11fc4523d914aca876250bf1c871d2a1dad079->leave($__internal_b3071744430ac5488b4b91a78c11fc4523d914aca876250bf1c871d2a1dad079_prof);

    }

    public function block_main($context, array $blocks = array())
    {
        $__internal_ad877971a7304d7eb434dbfefe742720a8652b0aca2204d0030a7afb5fa84e19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad877971a7304d7eb434dbfefe742720a8652b0aca2204d0030a7afb5fa84e19->enter($__internal_ad877971a7304d7eb434dbfefe742720a8652b0aca2204d0030a7afb5fa84e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_f2e294cd2727f211b4f4bf6e03d775aa250355199d95c7fc126457325c1c7f8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2e294cd2727f211b4f4bf6e03d775aa250355199d95c7fc126457325c1c7f8b->enter($__internal_f2e294cd2727f211b4f4bf6e03d775aa250355199d95c7fc126457325c1c7f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_f2e294cd2727f211b4f4bf6e03d775aa250355199d95c7fc126457325c1c7f8b->leave($__internal_f2e294cd2727f211b4f4bf6e03d775aa250355199d95c7fc126457325c1c7f8b_prof);

        
        $__internal_ad877971a7304d7eb434dbfefe742720a8652b0aca2204d0030a7afb5fa84e19->leave($__internal_ad877971a7304d7eb434dbfefe742720a8652b0aca2204d0030a7afb5fa84e19_prof);

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
        return array (  146 => 24,  137 => 23,  120 => 22,  108 => 17,  104 => 16,  99 => 15,  97 => 14,  95 => 13,  86 => 12,  68 => 11,  56 => 26,  54 => 23,  50 => 22,  43 => 19,  41 => 12,  37 => 11,  30 => 6,);
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
        <link rel=\"stylesheet\" href=\"{{ asset('css/create-style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/delete-style.css') }}\">
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>

<body id=\"{% block body_id %}{% endblock %}\">
{% block body %}
    {% block main %}{% endblock %}
{% endblock %}
</body>
</html>
", "base.html.twig", "E:\\PHP-EXAM\\app\\Resources\\views\\base.html.twig");
    }
}
