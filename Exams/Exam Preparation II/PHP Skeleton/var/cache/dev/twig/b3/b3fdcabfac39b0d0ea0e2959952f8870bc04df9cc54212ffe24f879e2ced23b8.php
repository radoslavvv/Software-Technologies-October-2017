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
        $__internal_b3995a9571cd3f8254b36a59b6867d52d096fd82d0fda7627820a72da894de70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3995a9571cd3f8254b36a59b6867d52d096fd82d0fda7627820a72da894de70->enter($__internal_b3995a9571cd3f8254b36a59b6867d52d096fd82d0fda7627820a72da894de70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_388c369611237178ea077e8208317af6c97c6782df62a8328b5da328193c4d07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_388c369611237178ea077e8208317af6c97c6782df62a8328b5da328193c4d07->enter($__internal_388c369611237178ea077e8208317af6c97c6782df62a8328b5da328193c4d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_b3995a9571cd3f8254b36a59b6867d52d096fd82d0fda7627820a72da894de70->leave($__internal_b3995a9571cd3f8254b36a59b6867d52d096fd82d0fda7627820a72da894de70_prof);

        
        $__internal_388c369611237178ea077e8208317af6c97c6782df62a8328b5da328193c4d07->leave($__internal_388c369611237178ea077e8208317af6c97c6782df62a8328b5da328193c4d07_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5debb3164ca129a5de7e115678b74be056ba1e8db173dacdfe7d25a0305f7969 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5debb3164ca129a5de7e115678b74be056ba1e8db173dacdfe7d25a0305f7969->enter($__internal_5debb3164ca129a5de7e115678b74be056ba1e8db173dacdfe7d25a0305f7969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2d5634ba0898816de6c08233447aa9a4a09e49694d85b2da891933fa6d4fa3b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d5634ba0898816de6c08233447aa9a4a09e49694d85b2da891933fa6d4fa3b5->enter($__internal_2d5634ba0898816de6c08233447aa9a4a09e49694d85b2da891933fa6d4fa3b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_2d5634ba0898816de6c08233447aa9a4a09e49694d85b2da891933fa6d4fa3b5->leave($__internal_2d5634ba0898816de6c08233447aa9a4a09e49694d85b2da891933fa6d4fa3b5_prof);

        
        $__internal_5debb3164ca129a5de7e115678b74be056ba1e8db173dacdfe7d25a0305f7969->leave($__internal_5debb3164ca129a5de7e115678b74be056ba1e8db173dacdfe7d25a0305f7969_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_fb5c9b90c929cc94333e7e61f663a2b153573d445a7920ad516220f167ac042e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb5c9b90c929cc94333e7e61f663a2b153573d445a7920ad516220f167ac042e->enter($__internal_fb5c9b90c929cc94333e7e61f663a2b153573d445a7920ad516220f167ac042e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6577427025b58971d2a3d74ae106767c55efa0492c41aebde82f6927ddab7081 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6577427025b58971d2a3d74ae106767c55efa0492c41aebde82f6927ddab7081->enter($__internal_6577427025b58971d2a3d74ae106767c55efa0492c41aebde82f6927ddab7081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_6577427025b58971d2a3d74ae106767c55efa0492c41aebde82f6927ddab7081->leave($__internal_6577427025b58971d2a3d74ae106767c55efa0492c41aebde82f6927ddab7081_prof);

        
        $__internal_fb5c9b90c929cc94333e7e61f663a2b153573d445a7920ad516220f167ac042e->leave($__internal_fb5c9b90c929cc94333e7e61f663a2b153573d445a7920ad516220f167ac042e_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b6fdf5fb3c68ecef4b27bd2f3bc41cece1fe68c2409ab83ed3b494d9fe6a69f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b6fdf5fb3c68ecef4b27bd2f3bc41cece1fe68c2409ab83ed3b494d9fe6a69f->enter($__internal_5b6fdf5fb3c68ecef4b27bd2f3bc41cece1fe68c2409ab83ed3b494d9fe6a69f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1e60c3ead056c424e0cdb7af6ea1d12847a32d4d420225e37ec8e4cf27f7792f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e60c3ead056c424e0cdb7af6ea1d12847a32d4d420225e37ec8e4cf27f7792f->enter($__internal_1e60c3ead056c424e0cdb7af6ea1d12847a32d4d420225e37ec8e4cf27f7792f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1e60c3ead056c424e0cdb7af6ea1d12847a32d4d420225e37ec8e4cf27f7792f->leave($__internal_1e60c3ead056c424e0cdb7af6ea1d12847a32d4d420225e37ec8e4cf27f7792f_prof);

        
        $__internal_5b6fdf5fb3c68ecef4b27bd2f3bc41cece1fe68c2409ab83ed3b494d9fe6a69f->leave($__internal_5b6fdf5fb3c68ecef4b27bd2f3bc41cece1fe68c2409ab83ed3b494d9fe6a69f_prof);

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
", "@Twig/layout.html.twig", "E:\\PHP-EXAM\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
