<?php

/* convivencia/index.html.twig */
class __TwigTemplate_5838b00957be8bbcde23cc33c91f8c214bb1005c7ec96d0a063e03f82a7e521a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("base2.html.twig", "convivencia/index.html.twig", 5);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d99e42a80141eaf8541cbaeea9caf56c1ff12439280b9d43cc0a22cc96ed630 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d99e42a80141eaf8541cbaeea9caf56c1ff12439280b9d43cc0a22cc96ed630->enter($__internal_3d99e42a80141eaf8541cbaeea9caf56c1ff12439280b9d43cc0a22cc96ed630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/index.html.twig"));

        $__internal_1ca3943adfc1a0874ee09d111e368b9b61c8c692d300bcaf84d86b404895dd48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ca3943adfc1a0874ee09d111e368b9b61c8c692d300bcaf84d86b404895dd48->enter($__internal_1ca3943adfc1a0874ee09d111e368b9b61c8c692d300bcaf84d86b404895dd48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d99e42a80141eaf8541cbaeea9caf56c1ff12439280b9d43cc0a22cc96ed630->leave($__internal_3d99e42a80141eaf8541cbaeea9caf56c1ff12439280b9d43cc0a22cc96ed630_prof);

        
        $__internal_1ca3943adfc1a0874ee09d111e368b9b61c8c692d300bcaf84d86b404895dd48->leave($__internal_1ca3943adfc1a0874ee09d111e368b9b61c8c692d300bcaf84d86b404895dd48_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_579f31df4241849d5519384be06a55ea393951e2f6bddc7f800925d700b0aeca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_579f31df4241849d5519384be06a55ea393951e2f6bddc7f800925d700b0aeca->enter($__internal_579f31df4241849d5519384be06a55ea393951e2f6bddc7f800925d700b0aeca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b5f3ac64a20f95d96e5a86a22b1e429443f32e0c4df76739c2ab710850e80c20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5f3ac64a20f95d96e5a86a22b1e429443f32e0c4df76739c2ab710850e80c20->enter($__internal_b5f3ac64a20f95d96e5a86a22b1e429443f32e0c4df76739c2ab710850e80c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    ";
        $this->loadTemplate("convivencia/navegacion.html.twig", "convivencia/index.html.twig", 7)->display($context);
        // line 8
        echo "    <div class=\"center\" id=\"fondo\">
        <div class=\"back\">
            <div class=\"col s12 m6 l4 offset-l4 offset-m3 center \">
                <form action=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">

                    <div style=\"text-align: center; padding-top: 20px;\">
                        <img class=\"responsive-img\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo2.svg"), "html", null, true);
        echo "\" alt=\"logo\"/>
                    </div>

                    ";
        // line 18
        echo "                    ";
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 19
            echo "                        <div class=\"card-panel red white-text flash2\" style=\"position: relative;\">
                            <span class=\"spancaja\">Credenciales inválidos</span>
                            <i class=\"material-icons spanico\">clear</i>
                        </div>
                    ";
        }
        // line 24
        echo "
                    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "login"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 26
            echo "                        <div class=\"card-panel green white-text flash2\" style=\"position: relative;\">
                            <span class=\"spancaja\">";
            // line 27
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo " </span><i class=\"material-icons spanico\">done</i>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
                    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "loginError"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 32
            echo "                        <div class=\"card-panel red white-text flash2\" style=\"position: relative;\">
                            <span class=\"spancaja\">";
            // line 33
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</span>
                            <i class=\"material-icons spanico\">clear</i>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                    <div class=\"input-field col s12 center\">
                        <input name=\"_username\" id=\"username\" type=\"text\" class=\"validate white-text\">
                        <label for=\"username\">Usuario</label>
                    </div>
                    <div class=\"input-field col s12 center\">
                        <input name=\"_password\" id=\"password\" type=\"password\" class=\"validate white-text\">
                        <label for=\"password\">Contraseña</label>
                    </div>
                    <div class=\"col s6 left \">
                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\"/>
                        <label for=\"remember_me\">Recordar contraseña</label>
                    </div>
                    <div class=\"col s6 right\">
                        <a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recuperarPassword");
        echo "\">Recuperar contraseña</a>
                    </div>
                    ";
        // line 53
        echo "                    <input type=\"hidden\" name=\"_target_path\" value=\"/alumno\">
                    <div class=\"col s12 center mtop\">
                        <button class=\"btn blue darken-3 waves-effect waves-light\" type=\"submit\">
                            Entrar
                            <i class=\"material-icons right\">send</i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_b5f3ac64a20f95d96e5a86a22b1e429443f32e0c4df76739c2ab710850e80c20->leave($__internal_b5f3ac64a20f95d96e5a86a22b1e429443f32e0c4df76739c2ab710850e80c20_prof);

        
        $__internal_579f31df4241849d5519384be06a55ea393951e2f6bddc7f800925d700b0aeca->leave($__internal_579f31df4241849d5519384be06a55ea393951e2f6bddc7f800925d700b0aeca_prof);

    }

    public function getTemplateName()
    {
        return "convivencia/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 53,  133 => 50,  118 => 37,  108 => 33,  105 => 32,  101 => 31,  98 => 30,  89 => 27,  86 => 26,  82 => 25,  79 => 24,  72 => 19,  69 => 18,  63 => 14,  57 => 11,  52 => 8,  49 => 7,  40 => 6,  11 => 5,);
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
Vista index.
Actualizado por GUBS, RAGZ, 2019
#}
{% extends 'base2.html.twig' %}
{% block body %}
    {% include 'convivencia/navegacion.html.twig' %}
    <div class=\"center\" id=\"fondo\">
        <div class=\"back\">
            <div class=\"col s12 m6 l4 offset-l4 offset-m3 center \">
                <form action=\"{{ path('login') }}\" method=\"post\">

                    <div style=\"text-align: center; padding-top: 20px;\">
                        <img class=\"responsive-img\" src=\"{{ asset('img/logo2.svg') }}\" alt=\"logo\"/>
                    </div>

                    {# Muestra el error en caso de existir #}
                    {% if error %}
                        <div class=\"card-panel red white-text flash2\" style=\"position: relative;\">
                            <span class=\"spancaja\">Credenciales inválidos</span>
                            <i class=\"material-icons spanico\">clear</i>
                        </div>
                    {% endif %}

                    {% for flash_message in app.session.flashBag.get('login') %}
                        <div class=\"card-panel green white-text flash2\" style=\"position: relative;\">
                            <span class=\"spancaja\">{{ flash_message }} </span><i class=\"material-icons spanico\">done</i>
                        </div>
                    {% endfor %}

                    {% for flash_message in app.session.flashBag.get('loginError') %}
                        <div class=\"card-panel red white-text flash2\" style=\"position: relative;\">
                            <span class=\"spancaja\">{{ flash_message }}</span>
                            <i class=\"material-icons spanico\">clear</i>
                        </div>
                    {% endfor %}
                    <div class=\"input-field col s12 center\">
                        <input name=\"_username\" id=\"username\" type=\"text\" class=\"validate white-text\">
                        <label for=\"username\">Usuario</label>
                    </div>
                    <div class=\"input-field col s12 center\">
                        <input name=\"_password\" id=\"password\" type=\"password\" class=\"validate white-text\">
                        <label for=\"password\">Contraseña</label>
                    </div>
                    <div class=\"col s6 left \">
                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\"/>
                        <label for=\"remember_me\">Recordar contraseña</label>
                    </div>
                    <div class=\"col s6 right\">
                        <a href=\"{{ path('recuperarPassword') }}\">Recuperar contraseña</a>
                    </div>
                    {# Ruta a la que redirige si hay éxito #}
                    <input type=\"hidden\" name=\"_target_path\" value=\"/alumno\">
                    <div class=\"col s12 center mtop\">
                        <button class=\"btn blue darken-3 waves-effect waves-light\" type=\"submit\">
                            Entrar
                            <i class=\"material-icons right\">send</i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
{% endblock %}
", "convivencia/index.html.twig", "/opt/lampp/htdocs/shikoba/app/Resources/views/convivencia/index.html.twig");
    }
}
