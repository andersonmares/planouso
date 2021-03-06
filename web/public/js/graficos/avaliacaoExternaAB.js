$(function () {
    $.get("../pmaq_relatorio/relatorioab/graficoavaliacaoexterna/ibge:" + $('#ibge').val(),
        function (data) {
            $('#avaliacaoExterna').highcharts({
                chart      : {
                    type: 'column'
                },
                title      : {
                    text: 'Avaliação Externa das Equipes - 2º Ciclo AB'
                },
                subtitle   : {
                    text: 'Fonte: Ministério da Saúde'
                },
                xAxis      : {
                    categories: [
                        'Dimensão I',
                        'Dimensão II',
                        'Dimensão III',
                        'Dimensão IV',
                        'Dimensão V'
                    ],
                    crosshair : true
                },
                yAxis      : {
                    min  : 0,
                    max:100,
                    title: {
                        text: 'Desempenho (%)'
                    }
                },
                tooltip    : {
                    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                    pointFormat : '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                        '<td style="padding:0"><b>{point.y:.1f} %</b></td></tr>',
                    footerFormat: '</table>',
                    shared      : true,
                    useHTML     : true
                },
                plotOptions: {
                    column: {
                        pointPadding: 0.2,
                        borderWidth : 0
                    }
                },
                series     : [
                    {
                        name: 'Muito acima da média',
                        data: [parseFloat(data.CICLO2.AB.DIMENSAO1.PC_MUITOACIMAMEDIA), parseFloat(data.CICLO2.AB.DIMENSAO2.PC_MUITOACIMAMEDIA), parseFloat(data.CICLO2.AB.DIMENSAO3.PC_MUITOACIMAMEDIA), parseFloat(data.CICLO2.AB.DIMENSAO4.PC_MUITOACIMAMEDIA), parseFloat(data.CICLO2.AB.DIMENSAO5.PC_MUITOACIMAMEDIA)]

                    },
                    {
                        name: 'Acima da média',
                        data: [parseFloat(data.CICLO2.AB.DIMENSAO1.PC_ACIMAMEDIA), parseFloat(data.CICLO2.AB.DIMENSAO2.PC_ACIMAMEDIA), parseFloat(data.CICLO2.AB.DIMENSAO3.PC_ACIMAMEDIA), parseFloat(data.CICLO2.AB.DIMENSAO4.PC_ACIMAMEDIA), parseFloat(data.CICLO2.AB.DIMENSAO5.PC_ACIMAMEDIA)]

                    },
                    {
                        name: 'Mediano ou abaixo da média',
                        data: [parseFloat(data.CICLO2.AB.DIMENSAO1.PC_MEDIANO), parseFloat(data.CICLO2.AB.DIMENSAO2.PC_MEDIANO), parseFloat(data.CICLO2.AB.DIMENSAO3.PC_MEDIANO), parseFloat(data.CICLO2.AB.DIMENSAO4.PC_MEDIANO), parseFloat(data.CICLO2.AB.DIMENSAO5.PC_MEDIANO)]
                    }
                ]
            });
        }, "json");
});



