/**
 * Created by dimas.filho on 30/04/15.
 */
/**
 * Montando Diretiva que monta o carregando (loader na tela), como um atributo no html
 * @event click()
 * @attr carregando
 * @see <a class="btn btn-success" carregando href=""> </a>
 */
var modulo = angular.module('relatorio', ['ui.bootstrap', 'angular-loading-bar', 'ngAnimate'])
modulo.directive('carregando', function (cfpLoadingBar) {
    return {
        restrict: 'A',
        link    : function (scope, element, attrs) {
            element.bind('click', function () {
                scope.$eval(attrs.carregando);
                cfpLoadingBar.start();
                cfpLoadingBar.inc();
                cfpLoadingBar.set(0.33);
            });
        }
    }
});

