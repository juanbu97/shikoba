<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_728662cbd805e8566541b05a11817b9a1f7f918a21396142861ac60b682f8d70 extends Twig_Template
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
        $__internal_0b228648061fe8c84abf1f6914b3f740448ca04f7dfd1173d1d6323e7d064240 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b228648061fe8c84abf1f6914b3f740448ca04f7dfd1173d1d6323e7d064240->enter($__internal_0b228648061fe8c84abf1f6914b3f740448ca04f7dfd1173d1d6323e7d064240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_deb99d789c197cd868844e5a8673c7066c7b33ba25b3fdf95a013f4d600f7d9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deb99d789c197cd868844e5a8673c7066c7b33ba25b3fdf95a013f4d600f7d9d->enter($__internal_deb99d789c197cd868844e5a8673c7066c7b33ba25b3fdf95a013f4d600f7d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b228648061fe8c84abf1f6914b3f740448ca04f7dfd1173d1d6323e7d064240->leave($__internal_0b228648061fe8c84abf1f6914b3f740448ca04f7dfd1173d1d6323e7d064240_prof);

        
        $__internal_deb99d789c197cd868844e5a8673c7066c7b33ba25b3fdf95a013f4d600f7d9d->leave($__internal_deb99d789c197cd868844e5a8673c7066c7b33ba25b3fdf95a013f4d600f7d9d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_69cb077fb67e6d893b20ffe0209be14b0312e13cb4f3469147cd15f3d8fc0c5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69cb077fb67e6d893b20ffe0209be14b0312e13cb4f3469147cd15f3d8fc0c5c->enter($__internal_69cb077fb67e6d893b20ffe0209be14b0312e13cb4f3469147cd15f3d8fc0c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e102c16eb95706a2e6ba7f4d1bcece17c74f7a922ce7045fd6b8ab834dadd7f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e102c16eb95706a2e6ba7f4d1bcece17c74f7a922ce7045fd6b8ab834dadd7f6->enter($__internal_e102c16eb95706a2e6ba7f4d1bcece17c74f7a922ce7045fd6b8ab834dadd7f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e102c16eb95706a2e6ba7f4d1bcece17c74f7a922ce7045fd6b8ab834dadd7f6->leave($__internal_e102c16eb95706a2e6ba7f4d1bcece17c74f7a922ce7045fd6b8ab834dadd7f6_prof);

        
        $__internal_69cb077fb67e6d893b20ffe0209be14b0312e13cb4f3469147cd15f3d8fc0c5c->leave($__internal_69cb077fb67e6d893b20ffe0209be14b0312e13cb4f3469147cd15f3d8fc0c5c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_60b5d7172946b2307efb6ba3821660ff6a8d6001712e0ca5ee99c700b13b2a42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60b5d7172946b2307efb6ba3821660ff6a8d6001712e0ca5ee99c700b13b2a42->enter($__internal_60b5d7172946b2307efb6ba3821660ff6a8d6001712e0ca5ee99c700b13b2a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8edd3cd473f02c32e53c67ac47258e9e2f69398eafd7c2e4a6c567c721bb24fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8edd3cd473f02c32e53c67ac47258e9e2f69398eafd7c2e4a6c567c721bb24fe->enter($__internal_8edd3cd473f02c32e53c67ac47258e9e2f69398eafd7c2e4a6c567c721bb24fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8edd3cd473f02c32e53c67ac47258e9e2f69398eafd7c2e4a6c567c721bb24fe->leave($__internal_8edd3cd473f02c32e53c67ac47258e9e2f69398eafd7c2e4a6c567c721bb24fe_prof);

        
        $__internal_60b5d7172946b2307efb6ba3821660ff6a8d6001712e0ca5ee99c700b13b2a42->leave($__internal_60b5d7172946b2307efb6ba3821660ff6a8d6001712e0ca5ee99c700b13b2a42_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8481b5cbc6cbdeef15a861d6211cdf27fe6cefaecbc9a521a61e4a20c1bd18b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8481b5cbc6cbdeef15a861d6211cdf27fe6cefaecbc9a521a61e4a20c1bd18b9->enter($__internal_8481b5cbc6cbdeef15a861d6211cdf27fe6cefaecbc9a521a61e4a20c1bd18b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b0852fc7ba2f4c1c00cc046d30c8611f3c4beec19b0206e0c26f09ecd763cb8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0852fc7ba2f4c1c00cc046d30c8611f3c4beec19b0206e0c26f09ecd763cb8f->enter($__internal_b0852fc7ba2f4c1c00cc046d30c8611f3c4beec19b0206e0c26f09ecd763cb8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b0852fc7ba2f4c1c00cc046d30c8611f3c4beec19b0206e0c26f09ecd763cb8f->leave($__internal_b0852fc7ba2f4c1c00cc046d30c8611f3c4beec19b0206e0c26f09ecd763cb8f_prof);

        
        $__internal_8481b5cbc6cbdeef15a861d6211cdf27fe6cefaecbc9a521a61e4a20c1bd18b9->leave($__internal_8481b5cbc6cbdeef15a861d6211cdf27fe6cefaecbc9a521a61e4a20c1bd18b9_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/opt/lampp/htdocs/shikoba/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
