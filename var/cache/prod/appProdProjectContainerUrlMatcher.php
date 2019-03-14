<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/json')) {
            // planodeuso_json_default_index
            if ('/json' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'Planodeuso\\JsonBundle\\Controller\\DefaultController::indexAction',  '_route' => 'planodeuso_json_default_index',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'planodeuso_json_default_index'));
                }

                return $ret;
            }

            // json_municipio
            if (0 === strpos($pathinfo, '/json/municipio') && preg_match('#^/json/municipio/(?P<coUfIbge>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'json_municipio')), array (  '_controller' => 'Planodeuso\\JsonBundle\\Controller\\DefaultController::municipioAction',));
            }

        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_fos_js_routing_js;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }
        not_fos_js_routing_js:

        if (0 === strpos($pathinfo, '/relatorio')) {
            // planodeuso_relatorio
            if ('/relatorio' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'Planodeuso\\RelatorioBundle\\Controller\\DefaultController::indexAction',  '_route' => 'planodeuso_relatorio',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'planodeuso_relatorio'));
                }

                return $ret;
            }

            // planodeuso_relatorio_gerar
            if ('/relatorio/gerar' === $pathinfo) {
                return array (  '_controller' => 'Planodeuso\\RelatorioBundle\\Controller\\DefaultController::gerarAction',  '_route' => 'planodeuso_relatorio_gerar',);
            }

        }

        // recoverpassword
        if (0 === strpos($pathinfo, '/recoverpassword') && preg_match('#^/recoverpassword/(?P<usuario>[^/]++)/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'recoverpassword')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::recoverpasswordAction',));
        }

        if (0 === strpos($pathinfo, '/atividade')) {
            // planodeuso_atividade
            if (preg_match('#^/atividade(?:/(?P<nuAno>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'planodeuso_atividade')), array (  'nuAno' => NULL,  '_controller' => 'Planodeuso\\AtividadeBundle\\Controller\\DefaultController::indexAction',));
            }

            // planodeuso_acao
            if (0 === strpos($pathinfo, '/atividade/acao') && preg_match('#^/atividade/acao/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'planodeuso_acao')), array (  '_controller' => 'Planodeuso\\AtividadeBundle\\Controller\\DefaultController::acaoorcamentariaAction',));
            }

            // planodeuso_atividade_add
            if (0 === strpos($pathinfo, '/atividade/add') && preg_match('#^/atividade/add/(?P<idAcao>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'planodeuso_atividade_add')), array (  '_controller' => 'Planodeuso\\AtividadeBundle\\Controller\\DefaultController::addAction',));
            }

            // planodeuso_atividade_edit
            if (0 === strpos($pathinfo, '/atividade/edit') && preg_match('#^/atividade/edit/(?P<idAcao>[^/]++)/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'planodeuso_atividade_edit')), array (  '_controller' => 'Planodeuso\\AtividadeBundle\\Controller\\DefaultController::editAction',));
            }

            // planodeuso_atividade_excluir
            if (0 === strpos($pathinfo, '/atividade/excluir') && preg_match('#^/atividade/excluir(?:/(?P<idAcao>[^/]++)(?:/(?P<id>[^/]++))?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'planodeuso_atividade_excluir')), array (  'idAcao' => NULL,  'id' => NULL,  '_controller' => 'Planodeuso\\AtividadeBundle\\Controller\\DefaultController::excluirAction',));
            }

            if (0 === strpos($pathinfo, '/atividade/notaempenho')) {
                // planodeuso_nota_empenho
                if (preg_match('#^/atividade/notaempenho/(?P<idAcao>[^/]++)/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'planodeuso_nota_empenho')), array (  '_controller' => 'Planodeuso\\AtividadeBundle\\Controller\\DefaultController::notaempenhoAction',));
                }

                // planodeuso_nota_empenho_vincular
                if (0 === strpos($pathinfo, '/atividade/notaempenho/vincular') && preg_match('#^/atividade/notaempenho/vincular(?:/(?P<idAtividade>[^/]++)(?:/(?P<idNotaEmpenho>[^/]++))?)?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'planodeuso_nota_empenho_vincular')), array (  'idAtividade' => NULL,  'idNotaEmpenho' => NULL,  '_controller' => 'Planodeuso\\AtividadeBundle\\Controller\\DefaultController::notaempenhoVincularAction',));
                }

                // planodeuso_nota_empenho_desvincular
                if (0 === strpos($pathinfo, '/atividade/notaempenho/desvincular') && preg_match('#^/atividade/notaempenho/desvincular(?:/(?P<idAtividade>[^/]++)(?:/(?P<idNotaEmpenho>[^/]++))?)?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'planodeuso_nota_empenho_desvincular')), array (  'idAtividade' => NULL,  'idNotaEmpenho' => NULL,  '_controller' => 'Planodeuso\\AtividadeBundle\\Controller\\DefaultController::notaempenhoDesincularAction',));
                }

            }

            // json_plano_lista_acao
            if (0 === strpos($pathinfo, '/atividade/jsonlistaacao') && preg_match('#^/atividade/jsonlistaacao/(?P<anoExercicio>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'json_plano_lista_acao')), array (  '_controller' => 'Planodeuso\\AtividadeBundle\\Controller\\DefaultController::jsonlistaacaoAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/atividade')) {
                // atividade
                if ('/admin/atividade' === $pathinfo) {
                    return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\AtividadeController::indexAction',  '_route' => 'atividade',);
                }

                // atividade_add
                if ('/admin/atividade/add' === $pathinfo) {
                    return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\AtividadeController::addAction',  '_route' => 'atividade_add',);
                }

                // atividade_edit
                if (0 === strpos($pathinfo, '/admin/atividade/edit') && preg_match('#^/admin/atividade/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'atividade_edit')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\AtividadeController::editAction',));
                }

                // atividade_disable
                if (0 === strpos($pathinfo, '/admin/atividade/disable') && preg_match('#^/admin/atividade/disable(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'atividade_disable')), array (  'id' => NULL,  '_controller' => 'Admin\\AdminBundle\\Controller\\AtividadeController::disableAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/componente')) {
                // componente
                if ('/admin/componente' === $pathinfo) {
                    return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\ComponenteController::indexAction',  '_route' => 'componente',);
                }

                // componente_add
                if ('/admin/componente/add' === $pathinfo) {
                    return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\ComponenteController::addAction',  '_route' => 'componente_add',);
                }

                // componente_edit
                if (0 === strpos($pathinfo, '/admin/componente/edit') && preg_match('#^/admin/componente/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'componente_edit')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\ComponenteController::editAction',));
                }

                // componente_disable
                if (0 === strpos($pathinfo, '/admin/componente/disable') && preg_match('#^/admin/componente/disable(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'componente_disable')), array (  'id' => NULL,  '_controller' => 'Admin\\AdminBundle\\Controller\\ComponenteController::disableAction',));
                }

            }

            // admin
            if ('/admin' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'admin',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin'));
                }

                return $ret;
            }

            if (0 === strpos($pathinfo, '/admin/departamento')) {
                // departamento
                if ('/admin/departamento' === $pathinfo) {
                    return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DepartamentoController::indexAction',  '_route' => 'departamento',);
                }

                // departamento_add
                if ('/admin/departamento/add' === $pathinfo) {
                    return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DepartamentoController::addAction',  '_route' => 'departamento_add',);
                }

                // departamento_edit
                if (0 === strpos($pathinfo, '/admin/departamento/edit') && preg_match('#^/admin/departamento/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'departamento_edit')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DepartamentoController::editAction',));
                }

                // departamento_disable
                if (0 === strpos($pathinfo, '/admin/departamento/disable') && preg_match('#^/admin/departamento/disable(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'departamento_disable')), array (  'id' => NULL,  '_controller' => 'Admin\\AdminBundle\\Controller\\DepartamentoController::disableAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/despesa')) {
                // despesa
                if ('/admin/despesa' === $pathinfo) {
                    return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DespesaController::indexAction',  '_route' => 'despesa',);
                }

                // despesa_add
                if ('/admin/despesa/add' === $pathinfo) {
                    return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DespesaController::addAction',  '_route' => 'despesa_add',);
                }

                // despesa_edit
                if (0 === strpos($pathinfo, '/admin/despesa/edit') && preg_match('#^/admin/despesa/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'despesa_edit')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DespesaController::editAction',));
                }

                // despesa_disable
                if (0 === strpos($pathinfo, '/admin/despesa/disable') && preg_match('#^/admin/despesa/disable(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'despesa_disable')), array (  'id' => NULL,  '_controller' => 'Admin\\AdminBundle\\Controller\\DespesaController::disableAction',));
                }

            }

            // importacao
            if ('/admin/importacao' === $pathinfo) {
                return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\ImportacaoController::indexAction',  '_route' => 'importacao',);
            }

            if (0 === strpos($pathinfo, '/admin/instrumento')) {
                // instrumento
                if ('/admin/instrumento' === $pathinfo) {
                    return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\InstrumentoController::indexAction',  '_route' => 'instrumento',);
                }

                // instrumento_add
                if ('/admin/instrumento/add' === $pathinfo) {
                    return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\InstrumentoController::addAction',  '_route' => 'instrumento_add',);
                }

                // instrumento_edit
                if (0 === strpos($pathinfo, '/admin/instrumento/edit') && preg_match('#^/admin/instrumento/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'instrumento_edit')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\InstrumentoController::editAction',));
                }

                // instrumento_disable
                if (0 === strpos($pathinfo, '/admin/instrumento/disable') && preg_match('#^/admin/instrumento/disable(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'instrumento_disable')), array (  'id' => NULL,  '_controller' => 'Admin\\AdminBundle\\Controller\\InstrumentoController::disableAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/processamento')) {
                // processamento_index
                if (preg_match('#^/admin/processamento(?:/(?P<nuAno>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'processamento_index')), array (  'nuAno' => NULL,  '_controller' => 'Admin\\AdminBundle\\Controller\\ProcessamentoController::indexAction',));
                }

                // processamento_acao
                if (0 === strpos($pathinfo, '/admin/processamento/acao') && preg_match('#^/admin/processamento/acao/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'processamento_acao')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\ProcessamentoController::processamentoacaoAction',));
                }

                // json_lista_processamento
                if (0 === strpos($pathinfo, '/admin/processamento/jsonlistaacao') && preg_match('#^/admin/processamento/jsonlistaacao/(?P<anoExercicio>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'json_lista_processamento')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\ProcessamentoController::jsonlistaacaoAction',));
                }

            }

            // processamento_edit
            if (0 === strpos($pathinfo, '/admin/edit') && preg_match('#^/admin/edit/(?P<idAcao>[^/]++)/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'processamento_edit')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\ProcessamentoController::editAction',));
            }

            if (0 === strpos($pathinfo, '/admin/redeprograma')) {
                // redeprograma
                if ('/admin/redeprograma' === $pathinfo) {
                    return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\RedeProgramaController::indexAction',  '_route' => 'redeprograma',);
                }

                // redeprograma_add
                if ('/admin/redeprograma/add' === $pathinfo) {
                    return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\RedeProgramaController::addAction',  '_route' => 'redeprograma_add',);
                }

                // redeprograma_edit
                if (0 === strpos($pathinfo, '/admin/redeprograma/edit') && preg_match('#^/admin/redeprograma/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'redeprograma_edit')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\RedeProgramaController::editAction',));
                }

                // redeprograma_disable
                if (0 === strpos($pathinfo, '/admin/redeprograma/disable') && preg_match('#^/admin/redeprograma/disable(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'redeprograma_disable')), array (  'id' => NULL,  '_controller' => 'Admin\\AdminBundle\\Controller\\RedeProgramaController::disableAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/tipoatividade')) {
                // tipoatividade
                if ('/admin/tipoatividade' === $pathinfo) {
                    return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\TipoAtividadeController::indexAction',  '_route' => 'tipoatividade',);
                }

                // tipoatividade_add
                if ('/admin/tipoatividade/add' === $pathinfo) {
                    return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\TipoAtividadeController::addAction',  '_route' => 'tipoatividade_add',);
                }

                // tipoatividade_edit
                if (0 === strpos($pathinfo, '/admin/tipoatividade/edit') && preg_match('#^/admin/tipoatividade/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipoatividade_edit')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\TipoAtividadeController::editAction',));
                }

                // tipoatividade_disable
                if (0 === strpos($pathinfo, '/admin/tipoatividade/disable') && preg_match('#^/admin/tipoatividade/disable(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipoatividade_disable')), array (  'id' => NULL,  '_controller' => 'Admin\\AdminBundle\\Controller\\TipoAtividadeController::disableAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/usuario')) {
                // usuario
                if ('/admin/usuario' === $pathinfo) {
                    return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\UsuarioController::indexAction',  '_route' => 'usuario',);
                }

                // usuario_add
                if (0 === strpos($pathinfo, '/admin/usuario/add') && preg_match('#^/admin/usuario/add/(?P<cpf>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_add')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\UsuarioController::addAction',));
                }

                // usuario_edit
                if (0 === strpos($pathinfo, '/admin/usuario/edit') && preg_match('#^/admin/usuario/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_edit')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\UsuarioController::editAction',));
                }

                // usuario_disable
                if (0 === strpos($pathinfo, '/admin/usuario/disable') && preg_match('#^/admin/usuario/disable(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_disable')), array (  'id' => NULL,  '_controller' => 'Admin\\AdminBundle\\Controller\\UsuarioController::disableAction',));
                }

                // json_lista_usuario
                if ('/admin/usuario/jsonlistausuario' === $pathinfo) {
                    return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\UsuarioController::jsonlistausuarioAction',  '_route' => 'json_lista_usuario',);
                }

                // json_localiza_cpf
                if (0 === strpos($pathinfo, '/admin/usuario/jsonlocalizacpf') && preg_match('#^/admin/usuario/jsonlocalizacpf/(?P<cpf>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'json_localiza_cpf')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\UsuarioController::jsonlocalizacpfAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/vincularacao')) {
                // vincularacao_index
                if (preg_match('#^/admin/vincularacao(?:/(?P<nuAno>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'vincularacao_index')), array (  'nuAno' => NULL,  '_controller' => 'Admin\\AdminBundle\\Controller\\VincularAcaoDepartamentoController::indexAction',));
                }

                // vincularacao_vincular
                if (0 === strpos($pathinfo, '/admin/vincularacao/vincular') && preg_match('#^/admin/vincularacao/vincular/(?P<idAcao>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'vincularacao_vincular')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\VincularAcaoDepartamentoController::vincularAction',));
                }

                // json_lista_acao
                if (0 === strpos($pathinfo, '/admin/vincularacao/jsonlistaacao') && preg_match('#^/admin/vincularacao/jsonlistaacao/(?P<anoExercicio>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'json_lista_acao')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\VincularAcaoDepartamentoController::jsonlistaacaoAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/vinculoplanejamento')) {
                // vinculo_planejamento
                if ('/admin/vinculoplanejamento' === $pathinfo) {
                    return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\VinculoPlanejamentoController::indexAction',  '_route' => 'vinculo_planejamento',);
                }

                // vinculoplanejamento_add
                if ('/admin/vinculoplanejamento/add' === $pathinfo) {
                    return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\VinculoPlanejamentoController::addAction',  '_route' => 'vinculoplanejamento_add',);
                }

                // vinculoplanejamento_edit
                if (0 === strpos($pathinfo, '/admin/vinculoplanejamento/edit') && preg_match('#^/admin/vinculoplanejamento/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'vinculoplanejamento_edit')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\VinculoPlanejamentoController::editAction',));
                }

                // vinculoplanejamento_disable
                if (0 === strpos($pathinfo, '/admin/vinculoplanejamento/disable') && preg_match('#^/admin/vinculoplanejamento/disable(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'vinculoplanejamento_disable')), array (  'id' => NULL,  '_controller' => 'Admin\\AdminBundle\\Controller\\VinculoPlanejamentoController::disableAction',));
                }

            }

        }

        // index
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'index',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'index'));
            }

            return $ret;
        }

        // perfil
        if ('/perfil' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::perfilAction',  '_route' => 'perfil',);
        }

        if (0 === strpos($pathinfo, '/changepasswd')) {
            // changepasswd
            if ('/changepasswd' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::changePasswdAction',  '_route' => 'changepasswd',);
            }

            // changepasswd_success
            if ('/changepasswd/success' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::changePasswdSucessAction',  '_route' => 'changepasswd_success',);
            }

        }

        // error
        if (0 === strpos($pathinfo, '/error') && preg_match('#^/error/(?P<error>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'error')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::errorAction',));
        }

        // forgot
        if ('/forgot' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::forgotAction',  '_route' => 'forgot',);
        }

        // logout
        if ('/logout' === $pathinfo) {
            return array('_route' => 'logout');
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
