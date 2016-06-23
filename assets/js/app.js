//angular

var app = angular.module('sisApp', ['ngRoute']);

// configurar rotas
app.config(function($routeProvider) {
  $routeProvider

  .when('/', {
    templateUrl : 'pages/home.html',
    controller  : 'HomeCtrl'
  })

  .when('/cidades', {
    templateUrl : 'pages/cidades.html',
    controller  : 'CidadesCtrl'
  })

  .when('/ministerios', {
    templateUrl : 'pages/ministerios.html',
    controller  : 'MinCtrl'
  })

  .when('/servos', {
    templateUrl : 'pages/servos.html',
    controller  : 'ServosCtrl'
  })

  .when('/atendimentos', {
    templateUrl : 'pages/atendimentos.html',
    controller  : 'AtendimentosCtrl'
  })

  .when('/relatorio-por-periodo', {
    templateUrl : 'pages/relperiodo.html',
    controller  : 'RelPeriodoCtrl'
  })

  .when('/relatorio-geral', {
    templateUrl : 'pages/relgeral.html',
    controller  : 'RelGeralCtrl'
  })

  .otherwise({redirectTo: '/'});
});

// configurando os controllers

app.controller('HomeCtrl', function($scope) {

});

app.controller('CidadesCtrl', function($scope) {

});

app.controller('MinCtrl', function($scope) {

    $scope.nomeMin = null;

    $scope.ministerios = [
      {
          codigo: '1',
          nome: 'Ancião'
      },
      {
          codigo: '2',
          nome: 'Cooperador do Ofício Ministerial'
      },
      {
          codigo: '3',
          nome: 'Diácono'
      },
      {
          codigo: '4',
          nome: 'Encarregado Reional'
      },
      {
          codigo: '5',
          nome: 'Encarregado Local'
      }
    ];

});

app.controller('ServosCtrl', function($scope) {

    $scope.nomeServ = null;

     $scope.servos = [
      {
          codigo: '1',
          nome: 'Dário Gonçalves',
          cargo: 'Ancião'
      },
      {
          codigo: '2',
          nome: 'Moacir',
          cargo: 'Ancião'
      },
      {
          codigo: '3',
          nome: 'Nivaldo',
          cargo: 'Encarregado Regional'
      },
    ];

});

app.controller('AtendimentosCtrl', function($scope) {

});

app.controller('RelPeriodoCtrl', function($scope) {

});

app.controller('RelGeralCtrl', function($scope) {

});