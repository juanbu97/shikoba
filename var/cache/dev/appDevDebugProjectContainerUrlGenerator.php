<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_open_file' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:openAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/open',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'alumno' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AlumnoController::alumnoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/alumno',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'verAlumno' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AlumnoController::showAlumnoAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/alumno',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'show_alumnosgrupo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AlumnoController::showAlumnosGrupoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/tutoria',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'registrarAlumno' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AlumnoController::registrarAlumnoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/registrarAlumno',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'show_carnets' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AlumnoController::showCarnets',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/carnets',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'show_partesAlumno' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AlumnoController::mostrarTodosPartes',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/partes',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'show_partesSanciones' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AlumnoController::mostrarTodasSanciones',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/sanciones',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'change_image' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AlumnoController::changeProfileImage',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/alumnoImage',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'show_alumnos' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AlumnoController::indexAlumnos',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/alumnos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'editarAlumno' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AlumnoController::editAlumno',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/alumnos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ConvivenciaController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ConvivenciaController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'convivencia_registro' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ConvivenciaController::registroAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/registro',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ConvivenciaController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_security' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ConvivenciaController::securityAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/copias',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ConvivenciaController::adminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_diario_aula' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ConvivenciaController::gestionDiarioAula',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/diario',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ConvivenciaController::changePassword',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/changePassword',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_import' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ConvivenciaController::importAlumnoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/importAlumno',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_import_profesor' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ConvivenciaController::importProfesorAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/importProfesor',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_tutores' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ConvivenciaController::tutoresAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/tutores',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'borrarTutor' => array (  0 =>   array (    0 => 'grupo',  ),  1 =>   array (    'grupo' => NULL,    '_controller' => 'AppBundle\\Controller\\ConvivenciaController::borrarTutorAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => ',',      2 => '[^/]++',      3 => 'grupo',    ),    1 =>     array (      0 => 'text',      1 => '/admin/tutores/borrarTutor',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_import_profesorGrupo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ConvivenciaController::importProfesorGrupoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/importProfesorGrupo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'recuperarPassword' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ConvivenciaController::recuperarPassword',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/recuperarPassword',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'reset_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ConvivenciaController::resetPassword',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetPassword',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'show_diario' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DiarioAulaController::showDiario',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/diarioAula',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'edit_diario' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DiarioAulaController::editDiario',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/modificarDiarioAula',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'eventos' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\EventosController::listarEventos',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/eventos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'borrarEvento' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\EventosController::borrarEventos',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/borrarEvento',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nuevoEvento' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\EventosController::crearEvento',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/nuevoEvento',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'editEvento' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\EventosController::editEvento',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/editEvento',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'noticias' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\NoticiasController::showNoticias',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/noticias',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nuevaNoticia' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\NoticiasController::nuevaNoticia',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/noticiasForm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'borrar_noticia' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\NoticiasController::deleteNoticias',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/noticias/borrarNoticia',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'editNoticia' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\NoticiasController::editNoticia',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/noticias/editNoticia',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'asociarEvento' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\Noticias_eventos_controllerController::crearEvento',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/eventosForm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gestion_partes' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PartesController::showGestionPartes',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/partes',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nuevoParte' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PartesController::crearParteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/nuevoParte',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'printParte' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PartesController::printParteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/imprimirParte',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'borrar_parte' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PartesController::removeParte',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/borrarParte',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'partes_alumno_informe' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PartesController::partesAlumnoInforme',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/informePartesAlumno',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'partes_profesor_informe' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PartesController::partesProfesorInforme',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/informePartesProfesor',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'partes_grupos_informe' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PartesController::partesGruposInforme',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/informePartesGrupo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'perfil_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PerfilController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/perfil/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'perfil_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PerfilController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/perfil',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'publicacion' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PublicacionesController::publicarNoticia',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/publicarNoticia',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'publicaciones_borrar' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PublicacionesController::deletePublicacion',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/publicaciones/borrarPublicacion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nueva_sancion' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\SancionController::crearSancionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/nuevaSancion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gestion_sanciones' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\SancionController::showGestionSanciones',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/sanciones',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'borrar_sancion' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\SancionController::removeSancion',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/borrarSancion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sanciones_alumnosgrupos_informe' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\SancionController::informeSancionesAlumnosGrupo',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/informeSancionesAlumnosGrupo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tutor' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\TutorController::tutorAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/tutor',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
