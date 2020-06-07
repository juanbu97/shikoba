<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_af68a12714dd2a10f0abd7665088135c0798ba0ae1f5321ca7b8a8bd9bf79c20 extends Twig_Template
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
        $__internal_6536c13dd066acc0cb71b820901c38932797bf7d0e774f2a7e61d9e1d767b945 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6536c13dd066acc0cb71b820901c38932797bf7d0e774f2a7e61d9e1d767b945->enter($__internal_6536c13dd066acc0cb71b820901c38932797bf7d0e774f2a7e61d9e1d767b945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_9a83bd3ceac9a8cc088ab67bab1622c602c83547237bed68b739207fc9b08f52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a83bd3ceac9a8cc088ab67bab1622c602c83547237bed68b739207fc9b08f52->enter($__internal_9a83bd3ceac9a8cc088ab67bab1622c602c83547237bed68b739207fc9b08f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6536c13dd066acc0cb71b820901c38932797bf7d0e774f2a7e61d9e1d767b945->leave($__internal_6536c13dd066acc0cb71b820901c38932797bf7d0e774f2a7e61d9e1d767b945_prof);

        
        $__internal_9a83bd3ceac9a8cc088ab67bab1622c602c83547237bed68b739207fc9b08f52->leave($__internal_9a83bd3ceac9a8cc088ab67bab1622c602c83547237bed68b739207fc9b08f52_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d9f4abafab3f48691e794dfe53440374ef6fb3398f1eb5019df629b649779416 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9f4abafab3f48691e794dfe53440374ef6fb3398f1eb5019df629b649779416->enter($__internal_d9f4abafab3f48691e794dfe53440374ef6fb3398f1eb5019df629b649779416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_dd86103b904cf158670a96dd1f503fd1ba8657fc3a6037ead16b792fc8e35de6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd86103b904cf158670a96dd1f503fd1ba8657fc3a6037ead16b792fc8e35de6->enter($__internal_dd86103b904cf158670a96dd1f503fd1ba8657fc3a6037ead16b792fc8e35de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_dd86103b904cf158670a96dd1f503fd1ba8657fc3a6037ead16b792fc8e35de6->leave($__internal_dd86103b904cf158670a96dd1f503fd1ba8657fc3a6037ead16b792fc8e35de6_prof);

        
        $__internal_d9f4abafab3f48691e794dfe53440374ef6fb3398f1eb5019df629b649779416->leave($__internal_d9f4abafab3f48691e794dfe53440374ef6fb3398f1eb5019df629b649779416_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_fb6e9f93edb56c96e2fb8175ecbdba430c303e3b818b25afe0377ef2bc5a654f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb6e9f93edb56c96e2fb8175ecbdba430c303e3b818b25afe0377ef2bc5a654f->enter($__internal_fb6e9f93edb56c96e2fb8175ecbdba430c303e3b818b25afe0377ef2bc5a654f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4baba5b025b5356138e97b43039f73f915956307de870599a18e0452886d710e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4baba5b025b5356138e97b43039f73f915956307de870599a18e0452886d710e->enter($__internal_4baba5b025b5356138e97b43039f73f915956307de870599a18e0452886d710e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4baba5b025b5356138e97b43039f73f915956307de870599a18e0452886d710e->leave($__internal_4baba5b025b5356138e97b43039f73f915956307de870599a18e0452886d710e_prof);

        
        $__internal_fb6e9f93edb56c96e2fb8175ecbdba430c303e3b818b25afe0377ef2bc5a654f->leave($__internal_fb6e9f93edb56c96e2fb8175ecbdba430c303e3b818b25afe0377ef2bc5a654f_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_b502e7b8615ac77d77ec7d1929c548799f05665228952e81e6df8e3c9100afd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b502e7b8615ac77d77ec7d1929c548799f05665228952e81e6df8e3c9100afd0->enter($__internal_b502e7b8615ac77d77ec7d1929c548799f05665228952e81e6df8e3c9100afd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f32c2a62af3e4958e8f4dfbe8d5d8327a100a40af61e732c1c27268dcd52362d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f32c2a62af3e4958e8f4dfbe8d5d8327a100a40af61e732c1c27268dcd52362d->enter($__internal_f32c2a62af3e4958e8f4dfbe8d5d8327a100a40af61e732c1c27268dcd52362d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_f32c2a62af3e4958e8f4dfbe8d5d8327a100a40af61e732c1c27268dcd52362d->leave($__internal_f32c2a62af3e4958e8f4dfbe8d5d8327a100a40af61e732c1c27268dcd52362d_prof);

        
        $__internal_b502e7b8615ac77d77ec7d1929c548799f05665228952e81e6df8e3c9100afd0->leave($__internal_b502e7b8615ac77d77ec7d1929c548799f05665228952e81e6df8e3c9100afd0_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/opt/lampp/htdocs/shikoba/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
