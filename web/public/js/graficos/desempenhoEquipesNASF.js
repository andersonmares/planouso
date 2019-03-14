$(function () {
    $.get("../pmaq_relatorio/relatorionasf/graficoadesaopmaq/ibge:" + $('#ibge').val(),
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
					max  : 100, 
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
                        name: '2º Ciclo NASF',
                        data: [parseFloat(data.CICLO2.NASF_PERCENTUAL_MUITOACIMAMED), parseFloat(data.CICLO2.NASF_PERCENTUAL_ACIMAMEDIA), parseFloat(data.CICLO2.NASF_PERCENTUAL_MEDIANA), parseFloat(data.CICLO2.NASF_PERCENTUAL_INSATISFATORIA), parseFloat(data.CICLO2.NASF_PERCENTUAL_DESCLASSIFICA)]

                    },

                ]
            });
        }, "json");

});