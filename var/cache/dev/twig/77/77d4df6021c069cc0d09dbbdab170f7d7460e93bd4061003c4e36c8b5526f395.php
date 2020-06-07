<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_da8fc418165ddf240387f2927a5ad948fc64aaef9c0912c250723afb6ee5c683 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de0b703cb7adf35f88e8d4d3e015a7b6ef442382fd48b3c743991254d29add82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de0b703cb7adf35f88e8d4d3e015a7b6ef442382fd48b3c743991254d29add82->enter($__internal_de0b703cb7adf35f88e8d4d3e015a7b6ef442382fd48b3c743991254d29add82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_a782f7e268c0f1ebc154d1e647d1ca4c6f8a3c03c89d21a13b9ad3e06faefa18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a782f7e268c0f1ebc154d1e647d1ca4c6f8a3c03c89d21a13b9ad3e06faefa18->enter($__internal_a782f7e268c0f1ebc154d1e647d1ca4c6f8a3c03c89d21a13b9ad3e06faefa18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de0b703cb7adf35f88e8d4d3e015a7b6ef442382fd48b3c743991254d29add82->leave($__internal_de0b703cb7adf35f88e8d4d3e015a7b6ef442382fd48b3c743991254d29add82_prof);

        
        $__internal_a782f7e268c0f1ebc154d1e647d1ca4c6f8a3c03c89d21a13b9ad3e06faefa18->leave($__internal_a782f7e268c0f1ebc154d1e647d1ca4c6f8a3c03c89d21a13b9ad3e06faefa18_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2beb0808d0198e2920c2d58b83506e42c5b9f28c56007e33e1fae6e45198a147 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2beb0808d0198e2920c2d58b83506e42c5b9f28c56007e33e1fae6e45198a147->enter($__internal_2beb0808d0198e2920c2d58b83506e42c5b9f28c56007e33e1fae6e45198a147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0b6f4ed0954638252d52ded4e2264443e4ec95e89da2b9864525f386e19d6ce9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b6f4ed0954638252d52ded4e2264443e4ec95e89da2b9864525f386e19d6ce9->enter($__internal_0b6f4ed0954638252d52ded4e2264443e4ec95e89da2b9864525f386e19d6ce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_0b6f4ed0954638252d52ded4e2264443e4ec95e89da2b9864525f386e19d6ce9->leave($__internal_0b6f4ed0954638252d52ded4e2264443e4ec95e89da2b9864525f386e19d6ce9_prof);

        
        $__internal_2beb0808d0198e2920c2d58b83506e42c5b9f28c56007e33e1fae6e45198a147->leave($__internal_2beb0808d0198e2920c2d58b83506e42c5b9f28c56007e33e1fae6e45198a147_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/opt/lampp/htdocs/shikoba/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
