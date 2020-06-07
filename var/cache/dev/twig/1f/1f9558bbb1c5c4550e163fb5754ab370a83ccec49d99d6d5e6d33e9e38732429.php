<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_e54fefe601dcc355bc186a71a7a08a3ac4c85eb58c786d8d67536c9bff91b595 extends Twig_Template
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
        $__internal_f693fc53cc6db29941d2e73a4b616c8177d7b55c2980c613bf745a6941004694 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f693fc53cc6db29941d2e73a4b616c8177d7b55c2980c613bf745a6941004694->enter($__internal_f693fc53cc6db29941d2e73a4b616c8177d7b55c2980c613bf745a6941004694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_332c331c72fc9a37905370ac5263c372fca5d5f2d58f8390f50a6c03f4fb70db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_332c331c72fc9a37905370ac5263c372fca5d5f2d58f8390f50a6c03f4fb70db->enter($__internal_332c331c72fc9a37905370ac5263c372fca5d5f2d58f8390f50a6c03f4fb70db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_f693fc53cc6db29941d2e73a4b616c8177d7b55c2980c613bf745a6941004694->leave($__internal_f693fc53cc6db29941d2e73a4b616c8177d7b55c2980c613bf745a6941004694_prof);

        
        $__internal_332c331c72fc9a37905370ac5263c372fca5d5f2d58f8390f50a6c03f4fb70db->leave($__internal_332c331c72fc9a37905370ac5263c372fca5d5f2d58f8390f50a6c03f4fb70db_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_544cc7f41c93282f7086cf7832b9f60ec2caff6468ae3aab3e3c0b82df1b8d2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_544cc7f41c93282f7086cf7832b9f60ec2caff6468ae3aab3e3c0b82df1b8d2f->enter($__internal_544cc7f41c93282f7086cf7832b9f60ec2caff6468ae3aab3e3c0b82df1b8d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_eb3a45107ba503b050209e9ab48fabe635cbb398093945a3db65676a2da1fecc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb3a45107ba503b050209e9ab48fabe635cbb398093945a3db65676a2da1fecc->enter($__internal_eb3a45107ba503b050209e9ab48fabe635cbb398093945a3db65676a2da1fecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_eb3a45107ba503b050209e9ab48fabe635cbb398093945a3db65676a2da1fecc->leave($__internal_eb3a45107ba503b050209e9ab48fabe635cbb398093945a3db65676a2da1fecc_prof);

        
        $__internal_544cc7f41c93282f7086cf7832b9f60ec2caff6468ae3aab3e3c0b82df1b8d2f->leave($__internal_544cc7f41c93282f7086cf7832b9f60ec2caff6468ae3aab3e3c0b82df1b8d2f_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_a2d2ad54965182947b9ffd94471e5c414013f3008238eea0586fabe83ffa1a72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2d2ad54965182947b9ffd94471e5c414013f3008238eea0586fabe83ffa1a72->enter($__internal_a2d2ad54965182947b9ffd94471e5c414013f3008238eea0586fabe83ffa1a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8be6fa1065ba0aa32efde399b65e726af775b2eee77ce80b41ac8739497fa6a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8be6fa1065ba0aa32efde399b65e726af775b2eee77ce80b41ac8739497fa6a5->enter($__internal_8be6fa1065ba0aa32efde399b65e726af775b2eee77ce80b41ac8739497fa6a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_8be6fa1065ba0aa32efde399b65e726af775b2eee77ce80b41ac8739497fa6a5->leave($__internal_8be6fa1065ba0aa32efde399b65e726af775b2eee77ce80b41ac8739497fa6a5_prof);

        
        $__internal_a2d2ad54965182947b9ffd94471e5c414013f3008238eea0586fabe83ffa1a72->leave($__internal_a2d2ad54965182947b9ffd94471e5c414013f3008238eea0586fabe83ffa1a72_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_40f3474f0196f9ea09d6e41d3366145aeb77886051c1a95de83c45142cb7c20a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40f3474f0196f9ea09d6e41d3366145aeb77886051c1a95de83c45142cb7c20a->enter($__internal_40f3474f0196f9ea09d6e41d3366145aeb77886051c1a95de83c45142cb7c20a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ff129a3fe679adc294f67a86a996160d41217da8eef8e409603a21fa0f8d6f90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff129a3fe679adc294f67a86a996160d41217da8eef8e409603a21fa0f8d6f90->enter($__internal_ff129a3fe679adc294f67a86a996160d41217da8eef8e409603a21fa0f8d6f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ff129a3fe679adc294f67a86a996160d41217da8eef8e409603a21fa0f8d6f90->leave($__internal_ff129a3fe679adc294f67a86a996160d41217da8eef8e409603a21fa0f8d6f90_prof);

        
        $__internal_40f3474f0196f9ea09d6e41d3366145aeb77886051c1a95de83c45142cb7c20a->leave($__internal_40f3474f0196f9ea09d6e41d3366145aeb77886051c1a95de83c45142cb7c20a_prof);

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
", "@Twig/layout.html.twig", "/opt/lampp/htdocs/shikoba/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
