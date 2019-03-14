$(function () {
    $.get("../pmaq_relatorio/relatorioab/graficoadesaopmaq/ibge:" + $('#ibge').val(),
        function (data) {
            $('#desempenhoEquipes').highcharts({
                chart      : {
                    type: 'column'
                },
                title      : {
                    text: 'Desempenho das Equipes'
                },
                subtitle   : {
                    text: 'Fonte: Ministério da Saúde'
                },
                xAxis      : {
                    categories: [
                        'Muito Acima da Média',
                        'Acima da Média',
                        'Mediano',
                        'Insatisfatório',
                        'Desclassificado'
                    ],
                    crosshair : true
                },
                yAxis      : {
                    min  : 0,
					max : 100, 
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
                        name: '1 Ciclo AB',
                        data: [parseFloat(data.CICLO1.AB_PERCENTUAL_MUITOACIMAMEDIA), parseFloat(data.CICLO1.AB_PERCENTUAL_ACIMAMEDIA), parseFloat(data.CICLO1.AB_PERCENTUAL_MEDIANA), parseFloat(data.CICLO1.AB_PERCENTUAL_INSATISFATORIA), parseFloat(data.CICLO1.AB_PERCENTUAL_DESCLASSIFICADA)]

                    },
                    {
                        name: '2 Ciclo AB',
                        data: [parseFloat(data.CICLO2.AB_PERCENTUAL_MUITOACIMAMEDIA), parseFloat(data.CICLO2.AB_PERCENTUAL_ACIMAMEDIA), parseFloat(data.CICLO2.AB_PERCENTUAL_MEDIANA), parseFloat(data.CICLO2.AB_PERCENTUAL_INSATISFATORIA), parseFloat(data.CICLO2.AB_PERCENTUAL_DESCLASSIFICADA)]

                    },
                    {
                        name: '2 Ciclo SB',
                        data: [parseFloat(data.CICLO2SB.SB_PERCENTUAL_MUITOACIMAMEDIA), parseFloat(data.CICLO2SB.SB_PERCENTUAL_ACIMAMEDIA), parseFloat(data.CICLO2SB.SB_PERCENTUAL_MEDIANA), parseFloat(data.CICLO2SB.SB_PERCENTUAL_INSATISFATORIA), parseFloat(data.CICLO2SB.SB_PERCENTUAL_DESCLASSIFICADA)]

                    }

                ]
            });
        }, "json");

});