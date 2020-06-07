<?php

/* convivencia/noticias/noticiasForm.html.twig */
class __TwigTemplate_87c849addc78a8adff7696e04779c579e32743b63ec0c690ffe072eb466406f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("base2.html.twig", "convivencia/noticias/noticiasForm.html.twig", 5);
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
        $__internal_7b2758cd355cf21a4e90c9575642db3aa93f248bfdbc3233138f4d4d3df790bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b2758cd355cf21a4e90c9575642db3aa93f248bfdbc3233138f4d4d3df790bf->enter($__internal_7b2758cd355cf21a4e90c9575642db3aa93f248bfdbc3233138f4d4d3df790bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/noticias/noticiasForm.html.twig"));

        $__internal_7d1e799d0e6b0f1c73737185f7739fe2e0d1c77a481aee8baa9044a64ef5cda0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d1e799d0e6b0f1c73737185f7739fe2e0d1c77a481aee8baa9044a64ef5cda0->enter($__internal_7d1e799d0e6b0f1c73737185f7739fe2e0d1c77a481aee8baa9044a64ef5cda0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/noticias/noticiasForm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b2758cd355cf21a4e90c9575642db3aa93f248bfdbc3233138f4d4d3df790bf->leave($__internal_7b2758cd355cf21a4e90c9575642db3aa93f248bfdbc3233138f4d4d3df790bf_prof);

        
        $__internal_7d1e799d0e6b0f1c73737185f7739fe2e0d1c77a481aee8baa9044a64ef5cda0->leave($__internal_7d1e799d0e6b0f1c73737185f7739fe2e0d1c77a481aee8baa9044a64ef5cda0_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_06286b1078754de671614d825a0de10c0d8904f42945234cf28b6f378ec7531a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06286b1078754de671614d825a0de10c0d8904f42945234cf28b6f378ec7531a->enter($__internal_06286b1078754de671614d825a0de10c0d8904f42945234cf28b6f378ec7531a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9505eb4111e581d70f8986e511381d1c9546e91bdd7856d209959553aa76efe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9505eb4111e581d70f8986e511381d1c9546e91bdd7856d209959553aa76efe8->enter($__internal_9505eb4111e581d70f8986e511381d1c9546e91bdd7856d209959553aa76efe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ckeditor/ckeditor.js"), "html", null, true);
        echo "\"></script>
\t";
        // line 9
        $this->loadTemplate("convivencia/navegacion.html.twig", "convivencia/noticias/noticiasForm.html.twig", 9)->display($context);
        // line 10
        echo "\t<div class=\"\">
\t\t<h3 class=\"center azul-prof fuente\">Editar noticia</h3>

\t\t";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
\t\t<div class=\"input-field col s6 m4 offset-m2\" id=\"tituloNoticia\">
\t\t\t";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "titulo", array()), 'row');
        echo "
\t\t</div>


\t\t<div class=\"input-field col s6 m4\" id=\"descripcionNoticia\">
\t\t\t";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "descripcion", array()), 'row');
        echo "
\t\t</div>

\t\t<div class=\"input-field col s6 m4 offset-m2\" id=\"tagParametrizacionCursos\">
\t\t\t";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tagParametrizacionCursos", array()), 'row');
        echo "
\t\t</div>

\t\t<div class=\"input-field col s6 m4 \" id=\"tagParametrizacionValores\">
\t\t\t";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tagParametrizacionValores", array()), 'row');
        echo "
\t\t</div>

\t\t<div class=\"input-field col s6 m4 offset-m2\" id=\"tagParametrizacionCategorias\">
\t\t\t";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tagParametrizacionCategorias", array()), 'row');
        echo "
\t\t</div>

\t\t<div class=\"input-field col s6 m4\" id=\"tagParametrizacionPuntos\">
\t\t\t";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tagParametrizacionPuntos", array()), 'row');
        echo "
\t\t</div>

\t\t<div class=\"input-field col s6 m4 offset-m4\" id=\"tagParametrizacionGrupos\">
\t\t\t";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tagParametrizacionGrupos", array()), 'row');
        echo "
\t\t</div>

\t\t";
        // line 49
        echo "
\t\t";
        // line 51
        echo "
\t\t<div class=\"col s6 m4 offset-m4\" id=\"eventos\">
\t\t\t";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "evento", array()), 'label', array("label" => "Seleccione el evento asociado a la noticia"));
        echo "
\t\t\t";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "evento", array()), 'widget');
        echo "
\t\t</div>


\t\t";
        // line 61
        echo "
\t\t<div class=\"col s12 m8 offset-m2\">
\t\t\t";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "codigoEmbebido", array()), 'row');
        echo "
\t\t\t<script>
\t\t\t\t// Replace the <textarea id=\"editor1\"> with a CKEditor
// instance, using default configuration.
CKEDITOR.replace('appbundle_noticiasv2_codigoEmbebido');
\t\t\t</script>
\t\t</div>

\t\t<div style=\"margin-top: 3%\" class=\"col s12 center\">
\t\t\t<a href=\"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("noticias");
        echo "\" data-title=\"Cancelar\" data-content=\"¿Desea regresar a noticias?\" class=\"z-depth-3 btn blue darken-3 waves-effect waves-light botonSubmit confirm\" style=\"margin-bottom: 1%\">Cancelar
\t\t\t\t<i class=\"material-icons left\">undo</i>
\t\t\t</a>
\t\t\t<button class=\"btn z-depth-3 blue darken-4 waves-effect waves-light\" type=\"submit\" style=\"margin-bottom: 1%\" value=\"Enviar\">Enviar
\t\t\t\t<i class=\"material-icons right\">send</i>
\t\t\t</button>
\t\t</div>
\t\t";
        // line 79
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
\t</div>
</div>";
        
        $__internal_9505eb4111e581d70f8986e511381d1c9546e91bdd7856d209959553aa76efe8->leave($__internal_9505eb4111e581d70f8986e511381d1c9546e91bdd7856d209959553aa76efe8_prof);

        
        $__internal_06286b1078754de671614d825a0de10c0d8904f42945234cf28b6f378ec7531a->leave($__internal_06286b1078754de671614d825a0de10c0d8904f42945234cf28b6f378ec7531a_prof);

    }

    public function getTemplateName()
    {
        return "convivencia/noticias/noticiasForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 79,  149 => 72,  137 => 63,  133 => 61,  126 => 54,  122 => 53,  118 => 51,  115 => 49,  109 => 40,  102 => 36,  95 => 32,  88 => 28,  81 => 24,  74 => 20,  66 => 15,  61 => 13,  56 => 10,  54 => 9,  49 => 8,  40 => 7,  11 => 5,);
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
Actualizado por Bujalance García Juan Antonio // 2020 
#}
{% extends 'base2.html.twig' %}

{% block body %}
\t<script type=\"text/javascript\" src=\"{{ asset('js/ckeditor/ckeditor.js') }}\"></script>
\t{% include 'convivencia/navegacion.html.twig' %}
\t<div class=\"\">
\t\t<h3 class=\"center azul-prof fuente\">Editar noticia</h3>

\t\t{{ form_start(form)}}
\t\t<div class=\"input-field col s6 m4 offset-m2\" id=\"tituloNoticia\">
\t\t\t{{form_row(form.titulo)}}
\t\t</div>


\t\t<div class=\"input-field col s6 m4\" id=\"descripcionNoticia\">
\t\t\t{{form_row(form.descripcion)}}
\t\t</div>

\t\t<div class=\"input-field col s6 m4 offset-m2\" id=\"tagParametrizacionCursos\">
\t\t\t{{form_row(form.tagParametrizacionCursos)}}
\t\t</div>

\t\t<div class=\"input-field col s6 m4 \" id=\"tagParametrizacionValores\">
\t\t\t{{form_row(form.tagParametrizacionValores)}}
\t\t</div>

\t\t<div class=\"input-field col s6 m4 offset-m2\" id=\"tagParametrizacionCategorias\">
\t\t\t{{form_row(form.tagParametrizacionCategorias)}}
\t\t</div>

\t\t<div class=\"input-field col s6 m4\" id=\"tagParametrizacionPuntos\">
\t\t\t{{form_row(form.tagParametrizacionPuntos)}}
\t\t</div>

\t\t<div class=\"input-field col s6 m4 offset-m4\" id=\"tagParametrizacionGrupos\">
\t\t\t{{form_row(form.tagParametrizacionGrupos)}}
\t\t</div>

\t\t{# <h3>Tags</h3>
\t\t    <ul class=\"tags\">
\t\t        {% for tag in form.tags %}
\t\t            <li>{{ form_row(tag.name) }}</li>
\t\t        {% endfor %}
\t\t    </ul> #}

\t\t{# {{ dump(form) }}#}

\t\t<div class=\"col s6 m4 offset-m4\" id=\"eventos\">
\t\t\t{{form_label(form.evento, 'Seleccione el evento asociado a la noticia')}}
\t\t\t{{form_widget(form.evento)}}
\t\t</div>


\t\t{#  <div class=\"col s6 offset-m3\" id=\"profesor\">
\t\t\t\t\t                   {{form_row(form.idProfesor)}}
\t\t\t\t\t            </div>#}

\t\t<div class=\"col s12 m8 offset-m2\">
\t\t\t{{form_row(form.codigoEmbebido)}}
\t\t\t<script>
\t\t\t\t// Replace the <textarea id=\"editor1\"> with a CKEditor
// instance, using default configuration.
CKEDITOR.replace('appbundle_noticiasv2_codigoEmbebido');
\t\t\t</script>
\t\t</div>

\t\t<div style=\"margin-top: 3%\" class=\"col s12 center\">
\t\t\t<a href=\"{{ path('noticias') }}\" data-title=\"Cancelar\" data-content=\"¿Desea regresar a noticias?\" class=\"z-depth-3 btn blue darken-3 waves-effect waves-light botonSubmit confirm\" style=\"margin-bottom: 1%\">Cancelar
\t\t\t\t<i class=\"material-icons left\">undo</i>
\t\t\t</a>
\t\t\t<button class=\"btn z-depth-3 blue darken-4 waves-effect waves-light\" type=\"submit\" style=\"margin-bottom: 1%\" value=\"Enviar\">Enviar
\t\t\t\t<i class=\"material-icons right\">send</i>
\t\t\t</button>
\t\t</div>
\t\t{{ form_end(form) }}
\t</div>
</div>{% endblock %}
", "convivencia/noticias/noticiasForm.html.twig", "/opt/lampp/htdocs/shikoba/app/Resources/views/convivencia/noticias/noticiasForm.html.twig");
    }
}
