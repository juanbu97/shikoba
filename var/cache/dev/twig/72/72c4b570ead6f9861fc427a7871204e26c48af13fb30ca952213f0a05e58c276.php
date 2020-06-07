<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d29c1fe4cc9503bdd927e6b599a9e83d62534ec5269ffab66d1abd1ee93b42aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_d6ac8dad68c8481fc0fb7249fd1931281618566409c86eed748c109bd030ff73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6ac8dad68c8481fc0fb7249fd1931281618566409c86eed748c109bd030ff73->enter($__internal_d6ac8dad68c8481fc0fb7249fd1931281618566409c86eed748c109bd030ff73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_207568fd44856ba6b7432914297a07a778bf477631059d5f048918702263fb58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_207568fd44856ba6b7432914297a07a778bf477631059d5f048918702263fb58->enter($__internal_207568fd44856ba6b7432914297a07a778bf477631059d5f048918702263fb58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6ac8dad68c8481fc0fb7249fd1931281618566409c86eed748c109bd030ff73->leave($__internal_d6ac8dad68c8481fc0fb7249fd1931281618566409c86eed748c109bd030ff73_prof);

        
        $__internal_207568fd44856ba6b7432914297a07a778bf477631059d5f048918702263fb58->leave($__internal_207568fd44856ba6b7432914297a07a778bf477631059d5f048918702263fb58_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cf3531c6867873b9855225de2474029e08ea7c9a35d1da103bd1eac96ba06f94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf3531c6867873b9855225de2474029e08ea7c9a35d1da103bd1eac96ba06f94->enter($__internal_cf3531c6867873b9855225de2474029e08ea7c9a35d1da103bd1eac96ba06f94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8a3d6789415f0f3062262ab282e5444057765eedf7414752a811fba77b3a5614 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a3d6789415f0f3062262ab282e5444057765eedf7414752a811fba77b3a5614->enter($__internal_8a3d6789415f0f3062262ab282e5444057765eedf7414752a811fba77b3a5614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_8a3d6789415f0f3062262ab282e5444057765eedf7414752a811fba77b3a5614->leave($__internal_8a3d6789415f0f3062262ab282e5444057765eedf7414752a811fba77b3a5614_prof);

        
        $__internal_cf3531c6867873b9855225de2474029e08ea7c9a35d1da103bd1eac96ba06f94->leave($__internal_cf3531c6867873b9855225de2474029e08ea7c9a35d1da103bd1eac96ba06f94_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fde7e8db51e3efd4e78f19b280e8ec31a79e768e4ac0cb15eb5e80d2266e8a97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fde7e8db51e3efd4e78f19b280e8ec31a79e768e4ac0cb15eb5e80d2266e8a97->enter($__internal_fde7e8db51e3efd4e78f19b280e8ec31a79e768e4ac0cb15eb5e80d2266e8a97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2f0de3c236cfe421417e467a5293303787a61cc2947cdf9f46784c6010577cbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f0de3c236cfe421417e467a5293303787a61cc2947cdf9f46784c6010577cbe->enter($__internal_2f0de3c236cfe421417e467a5293303787a61cc2947cdf9f46784c6010577cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_2f0de3c236cfe421417e467a5293303787a61cc2947cdf9f46784c6010577cbe->leave($__internal_2f0de3c236cfe421417e467a5293303787a61cc2947cdf9f46784c6010577cbe_prof);

        
        $__internal_fde7e8db51e3efd4e78f19b280e8ec31a79e768e4ac0cb15eb5e80d2266e8a97->leave($__internal_fde7e8db51e3efd4e78f19b280e8ec31a79e768e4ac0cb15eb5e80d2266e8a97_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fb3f39eac9d0ed396575402517af507d2e83ebe6896db3218423f0c8932a03a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb3f39eac9d0ed396575402517af507d2e83ebe6896db3218423f0c8932a03a9->enter($__internal_fb3f39eac9d0ed396575402517af507d2e83ebe6896db3218423f0c8932a03a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6e20b856a250a3516821b574e8ed7436750356fd4627616721e26d0bb153e497 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e20b856a250a3516821b574e8ed7436750356fd4627616721e26d0bb153e497->enter($__internal_6e20b856a250a3516821b574e8ed7436750356fd4627616721e26d0bb153e497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_6e20b856a250a3516821b574e8ed7436750356fd4627616721e26d0bb153e497->leave($__internal_6e20b856a250a3516821b574e8ed7436750356fd4627616721e26d0bb153e497_prof);

        
        $__internal_fb3f39eac9d0ed396575402517af507d2e83ebe6896db3218423f0c8932a03a9->leave($__internal_fb3f39eac9d0ed396575402517af507d2e83ebe6896db3218423f0c8932a03a9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/opt/lampp/htdocs/shikoba/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
