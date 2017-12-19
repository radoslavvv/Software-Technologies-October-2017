<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_0ef46ff3e00be850b375145c4de69a72941605b1b30816a42d1a36aa92bc080f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bcf68267a47fcfb1fac2d7c58ccee0f5598a1d8935355c41b3e6b78a3a5dd5a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcf68267a47fcfb1fac2d7c58ccee0f5598a1d8935355c41b3e6b78a3a5dd5a3->enter($__internal_bcf68267a47fcfb1fac2d7c58ccee0f5598a1d8935355c41b3e6b78a3a5dd5a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_929b806dcfd1a2a6b44390ff65290f8918a1d60ea85afb3baf09df62ef6b8dcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_929b806dcfd1a2a6b44390ff65290f8918a1d60ea85afb3baf09df62ef6b8dcd->enter($__internal_929b806dcfd1a2a6b44390ff65290f8918a1d60ea85afb3baf09df62ef6b8dcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_bcf68267a47fcfb1fac2d7c58ccee0f5598a1d8935355c41b3e6b78a3a5dd5a3->leave($__internal_bcf68267a47fcfb1fac2d7c58ccee0f5598a1d8935355c41b3e6b78a3a5dd5a3_prof);

        
        $__internal_929b806dcfd1a2a6b44390ff65290f8918a1d60ea85afb3baf09df62ef6b8dcd->leave($__internal_929b806dcfd1a2a6b44390ff65290f8918a1d60ea85afb3baf09df62ef6b8dcd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7014f8d79d3cb991ca8d571fa8891708c986f483d5c7c3540069a629b8105e21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7014f8d79d3cb991ca8d571fa8891708c986f483d5c7c3540069a629b8105e21->enter($__internal_7014f8d79d3cb991ca8d571fa8891708c986f483d5c7c3540069a629b8105e21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_31d00ffdd9a0044be058590529eab9d8bf5aee08d9ff5ea3f6906bf231c2c334 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31d00ffdd9a0044be058590529eab9d8bf5aee08d9ff5ea3f6906bf231c2c334->enter($__internal_31d00ffdd9a0044be058590529eab9d8bf5aee08d9ff5ea3f6906bf231c2c334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_31d00ffdd9a0044be058590529eab9d8bf5aee08d9ff5ea3f6906bf231c2c334->leave($__internal_31d00ffdd9a0044be058590529eab9d8bf5aee08d9ff5ea3f6906bf231c2c334_prof);

        
        $__internal_7014f8d79d3cb991ca8d571fa8891708c986f483d5c7c3540069a629b8105e21->leave($__internal_7014f8d79d3cb991ca8d571fa8891708c986f483d5c7c3540069a629b8105e21_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_6461e599415968c8ca89be57e1083cea069cf0c4c2f8e7fc921e059923f62cd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6461e599415968c8ca89be57e1083cea069cf0c4c2f8e7fc921e059923f62cd3->enter($__internal_6461e599415968c8ca89be57e1083cea069cf0c4c2f8e7fc921e059923f62cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e4845c72ac2c09814503ec52d7812ca49b4ee7570029475f77a739c959fa67f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4845c72ac2c09814503ec52d7812ca49b4ee7570029475f77a739c959fa67f7->enter($__internal_e4845c72ac2c09814503ec52d7812ca49b4ee7570029475f77a739c959fa67f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_e4845c72ac2c09814503ec52d7812ca49b4ee7570029475f77a739c959fa67f7->leave($__internal_e4845c72ac2c09814503ec52d7812ca49b4ee7570029475f77a739c959fa67f7_prof);

        
        $__internal_6461e599415968c8ca89be57e1083cea069cf0c4c2f8e7fc921e059923f62cd3->leave($__internal_6461e599415968c8ca89be57e1083cea069cf0c4c2f8e7fc921e059923f62cd3_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f4e71ff472eab05cbe6426837b5847a042ab996394c89b9a63149a79d4ac3a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f4e71ff472eab05cbe6426837b5847a042ab996394c89b9a63149a79d4ac3a7->enter($__internal_1f4e71ff472eab05cbe6426837b5847a042ab996394c89b9a63149a79d4ac3a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e86eddbc817523843f765cdf083178885eb8d7cca013978e05e130e68ab0812d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e86eddbc817523843f765cdf083178885eb8d7cca013978e05e130e68ab0812d->enter($__internal_e86eddbc817523843f765cdf083178885eb8d7cca013978e05e130e68ab0812d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e86eddbc817523843f765cdf083178885eb8d7cca013978e05e130e68ab0812d->leave($__internal_e86eddbc817523843f765cdf083178885eb8d7cca013978e05e130e68ab0812d_prof);

        
        $__internal_1f4e71ff472eab05cbe6426837b5847a042ab996394c89b9a63149a79d4ac3a7->leave($__internal_1f4e71ff472eab05cbe6426837b5847a042ab996394c89b9a63149a79d4ac3a7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "E:\\ExamPrepIII\\PHP Skeleton\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
