<?php

/* convivencia/informes/partesAlumnoInforme.html.twig */
class __TwigTemplate_42f048f4e20a80cfe0cb29c8a662c05dcd2d4900a8ae6cf4b60ef6e775a99547 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("base2.html.twig", "convivencia/informes/partesAlumnoInforme.html.twig", 5);
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
        $__internal_65cfa0f695cd4801416eda6543e7134af34db155fb96dc22c65367ea80bcdd5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65cfa0f695cd4801416eda6543e7134af34db155fb96dc22c65367ea80bcdd5f->enter($__internal_65cfa0f695cd4801416eda6543e7134af34db155fb96dc22c65367ea80bcdd5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/informes/partesAlumnoInforme.html.twig"));

        $__internal_6501ee4971e513b716a0deb25492c8f136fc16019f0fecd3abfc5cfdf5e2b358 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6501ee4971e513b716a0deb25492c8f136fc16019f0fecd3abfc5cfdf5e2b358->enter($__internal_6501ee4971e513b716a0deb25492c8f136fc16019f0fecd3abfc5cfdf5e2b358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/informes/partesAlumnoInforme.html.twig"));

        // line 6
        $context["modify"] = "1";
        // line 7
        $context["fecha"] = twig_date_format_filter($this->env, "now", "m/d/Y");
        // line 5
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65cfa0f695cd4801416eda6543e7134af34db155fb96dc22c65367ea80bcdd5f->leave($__internal_65cfa0f695cd4801416eda6543e7134af34db155fb96dc22c65367ea80bcdd5f_prof);

        
        $__internal_6501ee4971e513b716a0deb25492c8f136fc16019f0fecd3abfc5cfdf5e2b358->leave($__internal_6501ee4971e513b716a0deb25492c8f136fc16019f0fecd3abfc5cfdf5e2b358_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_80fedd00bedb81183dea5cbbd1e569d1c747c6f2a62ef5c7fa92a6ebd3be6fd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80fedd00bedb81183dea5cbbd1e569d1c747c6f2a62ef5c7fa92a6ebd3be6fd5->enter($__internal_80fedd00bedb81183dea5cbbd1e569d1c747c6f2a62ef5c7fa92a6ebd3be6fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7092f46c1390fbd4c8824dede7c7eed149264eccc327a026c3adec0aa03e0698 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7092f46c1390fbd4c8824dede7c7eed149264eccc327a026c3adec0aa03e0698->enter($__internal_7092f46c1390fbd4c8824dede7c7eed149264eccc327a026c3adec0aa03e0698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    ";
        $this->loadTemplate("convivencia/navegacion.html.twig", "convivencia/informes/partesAlumnoInforme.html.twig", 9)->display($context);
        // line 10
        echo "    <div class=\"\">
        <h3 class=\"center azul-prof fuente\" style=\"margin-bottom: 50px\">Informe partes alumnado</h3>
        ";
        // line 12
        if ((($context["data"] ?? $this->getContext($context, "data")) == null)) {
            // line 13
            echo "            <div class=\"row\" style=\"margin-left: 23%; margin-bottom: 0\">
                <div class=\"col s12 16 \">
                    <div class=\"row\">
                        <form action=\"";
            // line 16
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("partes_alumno_informe");
            echo "\" method=\"post\">
                            <div class=\"col s4 m4\">
                                <label for=\"fechaI\">Fecha inicial</label>
                                <input id=\"fechaI\" type=\"text\" name=\"fechaI\"
                                       value=\"";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, ($context["fecha"] ?? $this->getContext($context, "fecha")), (("-" . ($context["modify"] ?? $this->getContext($context, "modify"))) . " month")), "d/m/Y"), "html", null, true);
            echo "\"
                                       class=\"datepicker\"/>
                            </div>
                            <div class=\"col s4 m4\">
                                <label for=\"fechaF\">Fecha final</label>
                                <input id=\"fechaF\" type=\"text\" name=\"fechaF\" value=\"";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["fecha"] ?? $this->getContext($context, "fecha")), "d/m/Y"), "html", null, true);
            echo "\"
                                       class=\"datepicker\"/>
                            </div>
                            <div class=\"col s4 m4\">
                                <div class=\"i-checks col s12 left-align\" style=\"margin-top: 8%;padding-left: 0;\">
                                    <div class=\"\" id=\"botonbus\">
                                        <button
                                                class=\" z-depth-3 btn btn-floating blue darken-3 waves-effect waves-light\"
                                                type=\"submit\" value=\"Buscar\" title=\"Buscar\">
                                            <i class=\"material-icons right\">search</i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        ";
        }
        // line 44
        echo "        ";
        if ((($context["data"] ?? $this->getContext($context, "data")) != null)) {
            // line 45
            echo "            <table class=\"responsive-table highlight tableData z-depth-1\" data-order='[[ 2, \"desc\" ]]'
                   data-page-length='10'
                   style=\"margin-bottom: 2%; margin-top: 0\">
                <thead>
                <tr class=\"blue darken-3 white-text\">
                    <th>Grupo</th>
                    <th>Nombre</th>
                    <th>Partes</th>
                </tr>
                </thead>
                <tbody>
                ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? $this->getContext($context, "data")));
            foreach ($context['_seq'] as $context["key"] => $context["values"]) {
                // line 57
                echo "                    <tr>
                        <td>";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["values"], "Grupo", array(), "array"), "html", null, true);
                echo "</td>
                        <td>";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["values"], "Nombre", array(), "array"), "html", null, true);
                echo "</td>
                        <td id=\"partes\">";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["values"], "Partes", array(), "array"), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['values'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "                </tbody>
            </table>
        ";
        }
        // line 66
        echo "    </div>
";
        
        $__internal_7092f46c1390fbd4c8824dede7c7eed149264eccc327a026c3adec0aa03e0698->leave($__internal_7092f46c1390fbd4c8824dede7c7eed149264eccc327a026c3adec0aa03e0698_prof);

        
        $__internal_80fedd00bedb81183dea5cbbd1e569d1c747c6f2a62ef5c7fa92a6ebd3be6fd5->leave($__internal_80fedd00bedb81183dea5cbbd1e569d1c747c6f2a62ef5c7fa92a6ebd3be6fd5_prof);

    }

    public function getTemplateName()
    {
        return "convivencia/informes/partesAlumnoInforme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 66,  145 => 63,  136 => 60,  132 => 59,  128 => 58,  125 => 57,  121 => 56,  108 => 45,  105 => 44,  83 => 25,  75 => 20,  68 => 16,  63 => 13,  61 => 12,  57 => 10,  54 => 9,  45 => 8,  35 => 5,  33 => 7,  31 => 6,  11 => 5,);
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
Vista de informes de partes de alumnado.
Creado por GUBS, RAGZ, 2019
#}
{% extends 'base2.html.twig' %}
{% set modify = '1' %}
{% set fecha = \"now\"|date(\"m/d/Y\") %}
{% block body %}
    {% include 'convivencia/navegacion.html.twig' %}
    <div class=\"\">
        <h3 class=\"center azul-prof fuente\" style=\"margin-bottom: 50px\">Informe partes alumnado</h3>
        {% if data == null %}
            <div class=\"row\" style=\"margin-left: 23%; margin-bottom: 0\">
                <div class=\"col s12 16 \">
                    <div class=\"row\">
                        <form action=\"{{ path('partes_alumno_informe') }}\" method=\"post\">
                            <div class=\"col s4 m4\">
                                <label for=\"fechaI\">Fecha inicial</label>
                                <input id=\"fechaI\" type=\"text\" name=\"fechaI\"
                                       value=\"{{ fecha|date_modify(\"-\" ~ modify ~ \" month\")|date(\"d/m/Y\") }}\"
                                       class=\"datepicker\"/>
                            </div>
                            <div class=\"col s4 m4\">
                                <label for=\"fechaF\">Fecha final</label>
                                <input id=\"fechaF\" type=\"text\" name=\"fechaF\" value=\"{{ fecha|date(\"d/m/Y\") }}\"
                                       class=\"datepicker\"/>
                            </div>
                            <div class=\"col s4 m4\">
                                <div class=\"i-checks col s12 left-align\" style=\"margin-top: 8%;padding-left: 0;\">
                                    <div class=\"\" id=\"botonbus\">
                                        <button
                                                class=\" z-depth-3 btn btn-floating blue darken-3 waves-effect waves-light\"
                                                type=\"submit\" value=\"Buscar\" title=\"Buscar\">
                                            <i class=\"material-icons right\">search</i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        {% endif %}
        {% if data != null %}
            <table class=\"responsive-table highlight tableData z-depth-1\" data-order='[[ 2, \"desc\" ]]'
                   data-page-length='10'
                   style=\"margin-bottom: 2%; margin-top: 0\">
                <thead>
                <tr class=\"blue darken-3 white-text\">
                    <th>Grupo</th>
                    <th>Nombre</th>
                    <th>Partes</th>
                </tr>
                </thead>
                <tbody>
                {% for key, values in data %}
                    <tr>
                        <td>{{ values[\"Grupo\"] }}</td>
                        <td>{{ values[\"Nombre\"] }}</td>
                        <td id=\"partes\">{{ values[\"Partes\"] }}</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        {% endif %}
    </div>
{% endblock %}", "convivencia/informes/partesAlumnoInforme.html.twig", "/opt/lampp/htdocs/shikoba/app/Resources/views/convivencia/informes/partesAlumnoInforme.html.twig");
    }
}
