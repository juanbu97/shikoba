<?php

/* convivencia/noticias/noticias.html.twig */
class __TwigTemplate_8ba3cdb388f36bacf760541066d99674b11d844fb172fcda01af06cd2d3cde5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("base2.html.twig", "convivencia/noticias/noticias.html.twig", 5);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30d07353f8ef9d04e06e1e1fdf7b8ef16ca87ead0febd6d885d5708c5afa2f57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30d07353f8ef9d04e06e1e1fdf7b8ef16ca87ead0febd6d885d5708c5afa2f57->enter($__internal_30d07353f8ef9d04e06e1e1fdf7b8ef16ca87ead0febd6d885d5708c5afa2f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/noticias/noticias.html.twig"));

        $__internal_3f2e0f810ba5c642869860e412c1f0a8071e9cecdf8f3b0f43a6771e0b21d1cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f2e0f810ba5c642869860e412c1f0a8071e9cecdf8f3b0f43a6771e0b21d1cf->enter($__internal_3f2e0f810ba5c642869860e412c1f0a8071e9cecdf8f3b0f43a6771e0b21d1cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/noticias/noticias.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30d07353f8ef9d04e06e1e1fdf7b8ef16ca87ead0febd6d885d5708c5afa2f57->leave($__internal_30d07353f8ef9d04e06e1e1fdf7b8ef16ca87ead0febd6d885d5708c5afa2f57_prof);

        
        $__internal_3f2e0f810ba5c642869860e412c1f0a8071e9cecdf8f3b0f43a6771e0b21d1cf->leave($__internal_3f2e0f810ba5c642869860e412c1f0a8071e9cecdf8f3b0f43a6771e0b21d1cf_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9df1e73e0c721016391fd87dc5c9ab9ae7f64b8f978372e77f7f0ab5ddf9bb67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9df1e73e0c721016391fd87dc5c9ab9ae7f64b8f978372e77f7f0ab5ddf9bb67->enter($__internal_9df1e73e0c721016391fd87dc5c9ab9ae7f64b8f978372e77f7f0ab5ddf9bb67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_85378f25980386560b317f8774504e772d9f92aca1c4fca26bbfa0724232d824 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85378f25980386560b317f8774504e772d9f92aca1c4fca26bbfa0724232d824->enter($__internal_85378f25980386560b317f8774504e772d9f92aca1c4fca26bbfa0724232d824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<style>
\t\t#resultados-contenido {
\t\t\tborder: 1px solid black;
\t\t\tpadding: 30px;
\t\t\tborder-radius: 20px;
\t\t\tbox-shadow: 10px 11px 4px -6px rgba(0, 0, 0, 0.37);
\t\t\tmargin-bottom: 25px;
\t\t}
\t</style>
";
        
        $__internal_85378f25980386560b317f8774504e772d9f92aca1c4fca26bbfa0724232d824->leave($__internal_85378f25980386560b317f8774504e772d9f92aca1c4fca26bbfa0724232d824_prof);

        
        $__internal_9df1e73e0c721016391fd87dc5c9ab9ae7f64b8f978372e77f7f0ab5ddf9bb67->leave($__internal_9df1e73e0c721016391fd87dc5c9ab9ae7f64b8f978372e77f7f0ab5ddf9bb67_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_83d5724a1eac6dcc3e669191441aa1805e4013448e26eea2f4f5d3c4ffcf613d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83d5724a1eac6dcc3e669191441aa1805e4013448e26eea2f4f5d3c4ffcf613d->enter($__internal_83d5724a1eac6dcc3e669191441aa1805e4013448e26eea2f4f5d3c4ffcf613d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_185261ea1bf20cafe6e7f1fe90291565fa473b4c1b5a3c593ab741bb7f7480d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_185261ea1bf20cafe6e7f1fe90291565fa473b4c1b5a3c593ab741bb7f7480d1->enter($__internal_185261ea1bf20cafe6e7f1fe90291565fa473b4c1b5a3c593ab741bb7f7480d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "\t";
        $this->loadTemplate("convivencia/navegacion.html.twig", "convivencia/noticias/noticias.html.twig", 20)->display($context);
        // line 21
        echo "\t<div class=\"\">
\t\t<h3 class=\"center azul-prof fuente\">Noticias</h3>
\t\t<div class=\"row center\">
\t\t\t<a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevaNoticia");
        echo "\" class=\"btn z-depth-3 blue darken-3 waves-effect waves-light\" title=\"Nueva noticia\">Nueva<i class=\"material-icons right\" style=\"margin-top: -2%;\">add</i>
\t\t\t</a>
\t\t</div>
\t\t<div class=\"col s12 l5 offset-l5 center\">
\t\t\t";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "noticia"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 29
            echo "\t\t\t\t<div class=\"card-panel green white-text flash\">
\t\t\t\t\t<span class=\"spancaja\">";
            // line 30
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
\t\t\t\t\t</span>
\t\t\t\t\t<i class=\"material-icons spanico\">done</i>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
\t\t\t";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "noticiaError"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 37
            echo "\t\t\t\t<div class=\"card-panel red white-text flash\">
\t\t\t\t\t<span class=\"spancaja\">";
            // line 38
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</span>
\t\t\t\t\t<i class=\"material-icons spanico\">clear</i>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "
\t\t</div>
\t\t<div class=\"divider3\"></div>
\t\t<div class=\"row\" style=\"padding: 6%; margin-top: -40px\">
\t\t\t";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["noticias"] ?? $this->getContext($context, "noticias")));
        foreach ($context['_seq'] as $context["_key"] => $context["noticia"]) {
            // line 47
            echo "\t\t\t\t<div
\t\t\t\t\t id=\"resultados-contenido\">
                    ";
            // line 53
            echo "\t\t\t\t\t<div class=\"row center\">
\t\t\t\t\t\t<a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicacion", array("id" => $this->getAttribute($context["noticia"], "id", array()))), "html", null, true);
            echo "\" class=\"btn z-depth-3 blue darken-3 waves-effect waves-light\" title=\"Publicar\">Publicar<i class=\"material-icons right\" style=\"margin-top: -2%;\">send</i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"padding: 2%\">
\t\t\t\t\t\t<p id=\"noticiatd\" id=\"texto\">";
            // line 58
            echo $this->getAttribute($context["noticia"], "codigoEmbebido", array());
            echo "</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"display: flex; justify-content: flex-end\">
\t\t\t\t\t\t<p style=\"margin: 5px\" id=\"grupo\">
\t\t\t\t\t\t\t<b>Tirulo:
\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["noticia"], "titulo", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t<p style=\"margin: 5px\" id=\"puntos\">
\t\t\t\t\t\t\t<b>Descripcion:
\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["noticia"], "descripcion", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t";
            // line 69
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CONVIVENCIA")) {
                // line 70
                echo "\t\t\t\t\t\t\t<p style=\"margin: 5px\">
\t\t\t\t\t\t\t\t<a href=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editNoticia", array("id" => $this->getAttribute($context["noticia"], "id", array()))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">edit</i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p style=\"margin: 5px\">
\t\t\t\t\t\t\t\t<a class=\"confirm paddingRightLeft\" href=\"";
                // line 76
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("borrar_noticia", array("id" => $this->getAttribute($context["noticia"], "id", array()))), "html", null, true);
                echo "\" data-content=\"Se va a eliminar la noticia, ¿desea continuar?\" data-title=\"Eliminar noticia\">
\t\t\t\t\t\t\t\t\t<i class=\"material-icons \">delete</i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t";
            }
            // line 81
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['noticia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "\t\t</div>
\t</div>
";
        
        $__internal_185261ea1bf20cafe6e7f1fe90291565fa473b4c1b5a3c593ab741bb7f7480d1->leave($__internal_185261ea1bf20cafe6e7f1fe90291565fa473b4c1b5a3c593ab741bb7f7480d1_prof);

        
        $__internal_83d5724a1eac6dcc3e669191441aa1805e4013448e26eea2f4f5d3c4ffcf613d->leave($__internal_83d5724a1eac6dcc3e669191441aa1805e4013448e26eea2f4f5d3c4ffcf613d_prof);

    }

    public function getTemplateName()
    {
        return "convivencia/noticias/noticias.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 84,  199 => 81,  191 => 76,  183 => 71,  180 => 70,  178 => 69,  174 => 68,  167 => 64,  158 => 58,  151 => 54,  148 => 53,  144 => 47,  140 => 46,  134 => 42,  124 => 38,  121 => 37,  117 => 36,  114 => 35,  103 => 30,  100 => 29,  96 => 28,  89 => 24,  84 => 21,  81 => 20,  72 => 19,  50 => 8,  41 => 7,  11 => 5,);
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
Vista de noticias.
Actualizado por GUBS, RAGZ, 2019
#}
{% extends 'base2.html.twig' %}

{% block stylesheets %}
\t{{ parent() }}
\t<style>
\t\t#resultados-contenido {
\t\t\tborder: 1px solid black;
\t\t\tpadding: 30px;
\t\t\tborder-radius: 20px;
\t\t\tbox-shadow: 10px 11px 4px -6px rgba(0, 0, 0, 0.37);
\t\t\tmargin-bottom: 25px;
\t\t}
\t</style>
{% endblock %}
{% block body %}
\t{% include 'convivencia/navegacion.html.twig' %}
\t<div class=\"\">
\t\t<h3 class=\"center azul-prof fuente\">Noticias</h3>
\t\t<div class=\"row center\">
\t\t\t<a href=\"{{ path('nuevaNoticia') }}\" class=\"btn z-depth-3 blue darken-3 waves-effect waves-light\" title=\"Nueva noticia\">Nueva<i class=\"material-icons right\" style=\"margin-top: -2%;\">add</i>
\t\t\t</a>
\t\t</div>
\t\t<div class=\"col s12 l5 offset-l5 center\">
\t\t\t{% for flash_message in app.session.flashBag.get('noticia') %}
\t\t\t\t<div class=\"card-panel green white-text flash\">
\t\t\t\t\t<span class=\"spancaja\">{{ flash_message }}
\t\t\t\t\t</span>
\t\t\t\t\t<i class=\"material-icons spanico\">done</i>
\t\t\t\t</div>
\t\t\t{% endfor %}

\t\t\t{% for flash_message in app.session.flashBag.get('noticiaError') %}
\t\t\t\t<div class=\"card-panel red white-text flash\">
\t\t\t\t\t<span class=\"spancaja\">{{ flash_message }}</span>
\t\t\t\t\t<i class=\"material-icons spanico\">clear</i>
\t\t\t\t</div>
\t\t\t{% endfor %}

\t\t</div>
\t\t<div class=\"divider3\"></div>
\t\t<div class=\"row\" style=\"padding: 6%; margin-top: -40px\">
\t\t\t{% for noticia in noticias %}
\t\t\t\t<div
\t\t\t\t\t id=\"resultados-contenido\">
                    {# <div style=\"display: flex;justify-content: flex-end; \">
                        <p style=\"margin: 5px\" id=\"fechaI\"><b>Fecha inicio: </b>{{ noticia.fechaPrimeraPublicacion|date(\"d/m/Y\") }}</p>
                        <p style=\"margin: 5px\" id=\"fechaF\"><b>Fecha fin: </b>{{ noticia.fechaUltimaPublicacion|date(\"d/m/Y\") }}</p>
                    </div> #}
\t\t\t\t\t<div class=\"row center\">
\t\t\t\t\t\t<a href=\"{{ path('publicacion', {'id': noticia.id})}}\" class=\"btn z-depth-3 blue darken-3 waves-effect waves-light\" title=\"Publicar\">Publicar<i class=\"material-icons right\" style=\"margin-top: -2%;\">send</i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"padding: 2%\">
\t\t\t\t\t\t<p id=\"noticiatd\" id=\"texto\">{{ noticia.codigoEmbebido|raw }}</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"display: flex; justify-content: flex-end\">
\t\t\t\t\t\t<p style=\"margin: 5px\" id=\"grupo\">
\t\t\t\t\t\t\t<b>Tirulo:
\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t{{ noticia.titulo }}</p>
\t\t\t\t\t\t<p style=\"margin: 5px\" id=\"puntos\">
\t\t\t\t\t\t\t<b>Descripcion:
\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t{{ noticia.descripcion }}</p>
\t\t\t\t\t\t{% if is_granted('ROLE_CONVIVENCIA') %}
\t\t\t\t\t\t\t<p style=\"margin: 5px\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('editNoticia', {'id': noticia.id}) }}\">
\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">edit</i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p style=\"margin: 5px\">
\t\t\t\t\t\t\t\t<a class=\"confirm paddingRightLeft\" href=\"{{ path('borrar_noticia', {'id': noticia.id}) }}\" data-content=\"Se va a eliminar la noticia, ¿desea continuar?\" data-title=\"Eliminar noticia\">
\t\t\t\t\t\t\t\t\t<i class=\"material-icons \">delete</i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>
\t</div>
{% endblock %}
", "convivencia/noticias/noticias.html.twig", "/opt/lampp/htdocs/shikoba/app/Resources/views/convivencia/noticias/noticias.html.twig");
    }
}
