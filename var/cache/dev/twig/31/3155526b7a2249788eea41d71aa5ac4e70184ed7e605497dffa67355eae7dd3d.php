<?php

/* convivencia/publicaciones/publicacionesForm.html.twig */
class __TwigTemplate_19e2e3bb9f219740b3a504888817036e11fafebe5fcfc075cb3ddcc146968e60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("base2.html.twig", "convivencia/publicaciones/publicacionesForm.html.twig", 5);
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
        $__internal_0430d497e8afe84afbf54cd2aae71f37a12ffcb3fcd8102f705c9214422693ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0430d497e8afe84afbf54cd2aae71f37a12ffcb3fcd8102f705c9214422693ea->enter($__internal_0430d497e8afe84afbf54cd2aae71f37a12ffcb3fcd8102f705c9214422693ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/publicaciones/publicacionesForm.html.twig"));

        $__internal_c5fede4c8eac593c547f91bc2dbee3ff23cdae7e7b30f73611b521baaf9df133 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5fede4c8eac593c547f91bc2dbee3ff23cdae7e7b30f73611b521baaf9df133->enter($__internal_c5fede4c8eac593c547f91bc2dbee3ff23cdae7e7b30f73611b521baaf9df133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/publicaciones/publicacionesForm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0430d497e8afe84afbf54cd2aae71f37a12ffcb3fcd8102f705c9214422693ea->leave($__internal_0430d497e8afe84afbf54cd2aae71f37a12ffcb3fcd8102f705c9214422693ea_prof);

        
        $__internal_c5fede4c8eac593c547f91bc2dbee3ff23cdae7e7b30f73611b521baaf9df133->leave($__internal_c5fede4c8eac593c547f91bc2dbee3ff23cdae7e7b30f73611b521baaf9df133_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_afe61d5e424da1854ae48dd89c64f05fe52ac3533276f4a5f8b32f76c2625012 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afe61d5e424da1854ae48dd89c64f05fe52ac3533276f4a5f8b32f76c2625012->enter($__internal_afe61d5e424da1854ae48dd89c64f05fe52ac3533276f4a5f8b32f76c2625012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3eeffa16091e269303893ed8a94454cae1fbc3c9281ddbbc7f2556e4a98b5c01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eeffa16091e269303893ed8a94454cae1fbc3c9281ddbbc7f2556e4a98b5c01->enter($__internal_3eeffa16091e269303893ed8a94454cae1fbc3c9281ddbbc7f2556e4a98b5c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ckeditor/ckeditor.js"), "html", null, true);
        echo "\"></script>
\t";
        // line 9
        $this->loadTemplate("convivencia/navegacion.html.twig", "convivencia/publicaciones/publicacionesForm.html.twig", 9)->display($context);
        // line 10
        echo "\t<div class=\"\">
\t\t<h3 class=\"center azul-prof fuente\">Publicar noticia</h3>

\t\t";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

\t\t<div class=\"col s6 m4 offset-m2\" id=\"fechaInicio\">
\t\t\t";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechaInicio", array()), 'row');
        echo "
\t\t</div>

\t\t<div class=\"col s6 m4\" id=\"fechaFinal\">
\t\t\t";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechaFinal", array()), 'row');
        echo "
\t\t</div>

\t\t<div class=\"col s6 m4 offset-m4\" id=\"prioridad\">
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prioridad", array()), 'label', array("label" => "Seleccione la prioridad de la noticia"));
        echo "
\t\t\t";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prioridad", array()), 'widget');
        echo "
\t\t</div>

\t\t<div style=\"margin-top: 3%\" class=\"col s12 center\">
\t\t\t<a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("noticias");
        echo "\" data-title=\"Cancelar\" data-content=\"¿Desea regresar a noticias?\" class=\"z-depth-3 btn blue darken-3 waves-effect waves-light botonSubmit confirm\" style=\"margin-bottom: 1%\">Cancelar
\t\t\t\t<i class=\"material-icons left\">undo</i>
\t\t\t</a>
\t\t\t<button class=\"btn z-depth-3 blue darken-4 waves-effect waves-light\" type=\"submit\" style=\"margin-bottom: 1%\" value=\"Enviar\">Publicar
\t\t\t\t<i class=\"material-icons right\">send</i>
\t\t\t</button>
\t\t</div>
\t\t";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

\t</div>

";
        
        $__internal_3eeffa16091e269303893ed8a94454cae1fbc3c9281ddbbc7f2556e4a98b5c01->leave($__internal_3eeffa16091e269303893ed8a94454cae1fbc3c9281ddbbc7f2556e4a98b5c01_prof);

        
        $__internal_afe61d5e424da1854ae48dd89c64f05fe52ac3533276f4a5f8b32f76c2625012->leave($__internal_afe61d5e424da1854ae48dd89c64f05fe52ac3533276f4a5f8b32f76c2625012_prof);

    }

    public function getTemplateName()
    {
        return "convivencia/publicaciones/publicacionesForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 36,  92 => 29,  85 => 25,  81 => 24,  74 => 20,  67 => 16,  61 => 13,  56 => 10,  54 => 9,  49 => 8,  40 => 7,  11 => 5,);
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
Vista de edición de noticias.
Actualizado por GUBS, RAGZ, 2019
#}
{% extends 'base2.html.twig' %}

{% block body %}
\t<script type=\"text/javascript\" src=\"{{ asset('js/ckeditor/ckeditor.js') }}\"></script>
\t{% include 'convivencia/navegacion.html.twig' %}
\t<div class=\"\">
\t\t<h3 class=\"center azul-prof fuente\">Publicar noticia</h3>

\t\t{{form_start(form)}}

\t\t<div class=\"col s6 m4 offset-m2\" id=\"fechaInicio\">
\t\t\t{{form_row(form.fechaInicio )}}
\t\t</div>

\t\t<div class=\"col s6 m4\" id=\"fechaFinal\">
\t\t\t{{form_row(form.fechaFinal )}}
\t\t</div>

\t\t<div class=\"col s6 m4 offset-m4\" id=\"prioridad\">
            {{form_label(form.prioridad, 'Seleccione la prioridad de la noticia')}}
\t\t\t{{form_widget(form.prioridad)}}
\t\t</div>

\t\t<div style=\"margin-top: 3%\" class=\"col s12 center\">
\t\t\t<a href=\"{{ path('noticias') }}\" data-title=\"Cancelar\" data-content=\"¿Desea regresar a noticias?\" class=\"z-depth-3 btn blue darken-3 waves-effect waves-light botonSubmit confirm\" style=\"margin-bottom: 1%\">Cancelar
\t\t\t\t<i class=\"material-icons left\">undo</i>
\t\t\t</a>
\t\t\t<button class=\"btn z-depth-3 blue darken-4 waves-effect waves-light\" type=\"submit\" style=\"margin-bottom: 1%\" value=\"Enviar\">Publicar
\t\t\t\t<i class=\"material-icons right\">send</i>
\t\t\t</button>
\t\t</div>
\t\t{{ form_end(form) }}

\t</div>

{% endblock %}
", "convivencia/publicaciones/publicacionesForm.html.twig", "/opt/lampp/htdocs/shikoba/app/Resources/views/convivencia/publicaciones/publicacionesForm.html.twig");
    }
}
