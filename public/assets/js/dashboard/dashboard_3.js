(function () {

    //  Traffic chart start
    var admissionRatioOption = {
        series: [
            {
                name: '',
                data: [30, 29.31, 29.7, 29.7, 31.32, 31.65, 31.13, 29.8, 31.79, 31.67, 32.39, 30.63, 32.89, 31.99, 31.23, 31.57, 30.84, 31.07, 31.41, 31.17, 34, 34.50, 34.50, 32.53, 31.37, 32.43, 32.44, 30.2,
                    30.14, 30.65, 30.4, 30.65, 31.43, 31.89, 31.38, 30.64, 31.02, 30.33, 32.95, 31.89, 30.01, 30.88, 30.69, 30.58, 32.02, 32.14, 30.37, 30.51, 32.65, 32.64, 32.27, 32.1, 32.91, 30.65, 30.8, 31.92
                ],
            },
        ],
        chart: {
            type: 'area',
            height: 90,
            offsetY: -10,
            offsetX: 0,
            toolbar: {
                show: false,
            },
        },
        stroke: {
            width: 2,
            curve: 'smooth'
        },
        grid: {
            show: false,
            borderColor: 'var(--light)',
            padding: {
                top: 5,
                right: 0,
                bottom: -30,
                left: 0,
            },
        },
        fill: {
            type: "gradient",
            gradient: {
                shadeIntensity: 1,
                opacityFrom: 0.5,
                opacityTo: 0.1,
                stops: [0, 90, 100]
            }
        },
        dataLabels: {
            enabled: false,
        },
        colors: [MofiAdminConfig.primary],
        xaxis: {
            labels: {
                show: false,
            },
            tooltip: {
                enabled: false,
            },
            labels: {
                show: false,
            },
            axisBorder: {
                show: false,
            },
            axisTicks: {
                show: false,
            },
        },
        yaxis: {
            opposite: false,
            min: 29,
            max: 35,
            logBase: 100,
            tickAmount: 4,
            forceNiceScale: false,
            floating: false,
            decimalsInFloat: undefined,
            labels: {
                show: false,
                offsetX: -12,
                offsetY: -15,
                rotate: 0,
            },
        },
        legend: {
            horizontalAlign: 'left',
        },
    };

    var admissionRatio = new ApexCharts(document.querySelector('#admissionRatio'), admissionRatioOption);
    admissionRatio.render();
    // ==============================
    var admissionRatioOption = {
        series: [
            {
                name: '',
                data: [30, 32.31, 31.47, 30.69, 29.32, 31.65, 31.13, 31.77, 31.79, 31.67, 32.39, 32.63, 32.89, 31.99, 31.23, 31.57, 30.84, 31.07, 31.41, 31.17, 32.37, 32.19, 32.51, 32.53, 31.37, 30.43, 30.44, 30.2,
                    30.14, 30.65, 30.4, 30.65, 31.43, 31.89, 31.38, 30.64, 30.02, 30.33, 30.95, 31.89, 31.01, 30.88, 30.69, 30.58, 32.02, 32.14, 32.37, 32.51, 32.65, 32.64, 32.27, 32.1, 32.91, 33.65, 33.8, 33.92
                ],
            },
        ],
        chart: {
            type: 'area',
            height: 90,
            offsetY: -10,
            offsetX: 0,
            toolbar: {
                show: false,
            },
        },
        stroke: {
            width: 2,
            curve: 'smooth'
        },
        grid: {
            show: false,
            borderColor: 'var(--light)',
            padding: {
                top: 5,
                right: 0,
                bottom: -30,
                left: 0,
            },
        },
        fill: {
            type: "gradient",
            gradient: {
                shadeIntensity: 1,
                opacityFrom: 0.5,
                opacityTo: 0.1,
                stops: [0, 80, 100]
            }
        },
        dataLabels: {
            enabled: false,
        },
        colors: [MofiAdminConfig.secondary],
        xaxis: {
            labels: {
                show: false,
            },
            tooltip: {
                enabled: false,
            },
            labels: {
                show: false,
            },
            axisBorder: {
                show: false,
            },
            axisTicks: {
                show: false,
            },
        },
        yaxis: {
            opposite: false,
            min: 29,
            max: 35,
            logBase: 100,
            tickAmount: 4,
            forceNiceScale: false,
            floating: false,
            decimalsInFloat: undefined,
            labels: {
                show: false,
                offsetX: -12,
                offsetY: -15,
                rotate: 0,
            },
        },
        legend: {
            horizontalAlign: 'left',
        },
        responsive: [

        ],
    };

    var admissionRatio = new ApexCharts(document.querySelector('#order-value'), admissionRatioOption);
    admissionRatio.render();
    // ======================================
    var admissionRatioOption = {
        series: [
            {
                name: '',
                data: [30, 29.31, 29.7, 29.7, 31.32, 31.65, 31.13, 29.8, 31.79, 31.67, 32.39, 30.63, 32.89, 31.99, 31.23, 31.57, 30.84, 31.07, 31.41, 31.17, 34, 34.50, 34.50, 32.53, 31.37, 32.43, 32.44, 30.2,
                    30.14, 30.65, 30.4, 30.65, 31.43, 31.89, 31.38, 30.64, 31.02, 30.33, 32.95, 31.89, 30.01, 30.88, 30.69, 30.58, 32.02, 32.14, 30.37, 30.51, 32.65, 32.64, 32.27, 32.1, 32.91, 30.65, 30.8, 31.92
                ],
            },
        ],
        chart: {
            type: 'area',
            height: 90,
            offsetY: -10,
            offsetX: 0,
            toolbar: {
                show: false,
            },
        },
        stroke: {
            width: 2,
            curve: 'smooth'
        },
        grid: {
            show: false,
            borderColor: 'var(--light)',
            padding: {
                top: 5,
                right: 0,
                bottom: -30,
                left: 0,
            },
        },
        fill: {
            type: "gradient",
            gradient: {
                shadeIntensity: 1,
                opacityFrom: 0.5,
                opacityTo: 0.1,
                stops: [0, 90, 100]
            }
        },
        dataLabels: {
            enabled: false,
        },
        colors: ['#D77748'],
        xaxis: {
            labels: {
                show: false,
            },
            tooltip: {
                enabled: false,
            },
            labels: {
                show: false,
            },
            axisBorder: {
                show: false,
            },
            axisTicks: {
                show: false,
            },
        },
        yaxis: {
            opposite: false,
            min: 29,
            max: 35,
            logBase: 100,
            tickAmount: 4,
            forceNiceScale: false,
            floating: false,
            decimalsInFloat: undefined,
            labels: {
                show: false,
                offsetX: -12,
                offsetY: -15,
                rotate: 0,
            },
        },
        legend: {
            horizontalAlign: 'left',
        },
        responsive: [

        ],
    };

    var admissionRatio = new ApexCharts(document.querySelector('#daily-value'), admissionRatioOption);
    admissionRatio.render();
    // ======================================
    var admissionRatioOption = {
        series: [
            {
                name: '',
                data: [29, 30.31, 30.7, 31.69, 31.32, 31.65, 31.13, 31.77, 31.79, 31.67, 32.39, 32.63, 32.89, 31.99, 31.23, 31.57, 30.84, 31.07, 31.41, 31.17, 32.37, 32.19, 32.51, 32.53, 31.37, 30.43, 30.44, 30.2,
                    30.14, 30.65, 30.4, 30.65, 31.43, 31.89, 31.38, 30.64, 30.02, 30.33, 30.95, 31.89, 31.01, 30.88, 30.69, 30.58, 32.02, 32.14, 32.37, 32.51, 32.65, 32.64, 32.27, 32.1, 32.91, 33.65, 33.8, 33.92
                ],
            },
        ],
        chart: {
            type: 'area',
            height: 90,
            offsetY: -10,
            offsetX: 0,
            toolbar: {
                show: false,
            },
        },
        stroke: {
            width: 2,
            curve: 'smooth'
        },
        grid: {
            show: false,
            borderColor: 'var(--light)',
            padding: {
                top: 5,
                right: 0,
                bottom: -30,
                left: 0,
            },
        },
        fill: {
            type: "gradient",
            gradient: {
                shadeIntensity: 1,
                opacityFrom: 0.5,
                opacityTo: 0.1,
                stops: [0, 90, 100]
            }
        },
        dataLabels: {
            enabled: false,
        },
        colors: ['#C95E9E'],
        xaxis: {
            labels: {
                show: false,
            },
            tooltip: {
                enabled: false,
            },
            labels: {
                show: false,
            },
            axisBorder: {
                show: false,
            },
            axisTicks: {
                show: false,
            },
        },
        yaxis: {
            opposite: false,
            min: 29,
            max: 35,
            logBase: 100,
            tickAmount: 4,
            forceNiceScale: false,
            floating: false,
            decimalsInFloat: undefined,
            labels: {
                show: false,
                offsetX: -12,
                offsetY: -15,
                rotate: 0,
            },
        },
        legend: {
            horizontalAlign: 'left',
        },
        responsive: [

        ],
    };

    var admissionRatio = new ApexCharts(document.querySelector('#daily-revenue'), admissionRatioOption);
    admissionRatio.render();

    //  ========  Morris chart  ========
    $(document).ready(function () {
        var color_array = [MofiAdminConfig.primary, MofiAdminConfig.secondary, '#C95E9E', '#D77748', '#7E6F6A', '#36AFB2', '#9c6db2', '#d24a67', '#89a958', '#00739a', '#BDBDBD'];
        var browsersChart = Morris.Donut({
            element: 'pie-chart',
            data: [{ "label": "Jeans", "value": 480 }, { "label": "Hoodie", "value": 110 }, { "label": "Outwear", "value": 100 }, { "label": "Other", "value": 50 }],
            colors: color_array
        });
        browsersChart.options.data.forEach(function (label, i) {
            var legendItem = $('<span></span>').text(label['label']).prepend('<i>&nbsp;</i>');
            legendItem.find('i').css('backgroundColor', browsersChart.options.colors[i]);
            $('#legend').append(legendItem)
        })
    });
    // ===================

    const Option = {
        series: [
            {
                data: [
                    {
                        x: 'Jan',
                        y: [140, 360],
                    },
                    {
                        x: '',
                        y: [180, 400],
                    },
                    {
                        x: 'Feb',
                        y: [160, 400],
                    },
                    {
                        x: '',
                        y: [180, 420],
                    },
                    {
                        x: 'Mar',
                        y: [160, 480],
                    },
                    {
                        x: '',
                        y: [160, 300],
                    },
                    {
                        x: 'Apr',
                        y: [190, 400],
                    },
                    {
                        x: '',
                        y: [140, 300],
                    },
                    {
                        x: 'May',
                        y: [200, 420],
                    },
                    {
                        x: '',
                        y: [180, 280],
                    },
                    {
                        x: 'Jun',
                        y: [170, 410],
                    },
                    {
                        x: '',
                        y: [160, 380],
                    },
                    {
                        x: 'Jul',
                        y: [200, 450],
                    },
                    {
                        x: '',
                        y: [170, 470],
                    },
                    {
                        x: 'Aug',
                        y: [180, 420],
                    },
                ],
            },
        ],
        chart: {
            type: 'rangeBar',
            height: 350,
            toolbar: {
                show: false,
            },
        },
        legend: {
            show: false,
        },
        grid: {
            show: true,
            borderColor: 'rgba(106, 113, 133, 0.30)',
            strokeDashArray: 3,
        },
        fill: {
            type: 'gradient',
            gradient: {
                shade: 'dark',
                type: 'vertical',
                shadeIntensity: 0.5,
                gradientToColors: [MofiAdminConfig.primary],
                inverseColors: true,
                opacityFrom: 1,
                opacityTo: 1,
                stops: [65, 35]
            }
        },
        tooltip: {
            enabled: false,
        },
        colors: ['#48A3D7'],
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '40%',
                borderRadius: 4,
            },
        },
        dataLabels: {
            enabled: false,
        },

        yaxis: {
            logBase: 100,
            tickAmount: 4,
            min: 100,
            max: 500,
            labels: {
                show: true,
                align: 'right',
                minWidth: 0,
                maxWidth: 34,

                formatter: (value) => {
                    return `${value}k`;
                },

                style: {
                    fontFamily: 'Outfit, sans-serif',
                    fontWeight: 500,
                    colors: '#3D434A',
                },
            },
        },
        xaxis: {
            categories: ['Jan', '', 'Feb', '', 'Mar', '', 'Apr', '', 'May', '', 'Jun', '', 'Jul', '', 'Aug'],
            labels: {
                minHeight: undefined,
                maxHeight: 24,
                offsetX: 0,
                offsetY: 0,

                style: {
                    fontFamily: 'Outfit, sans-serif',
                    fontWeight: 500,
                    colors: '#8D8D8D',
                },
            },
            axisTicks: {
                show: false
            },
            axisBorder: {
                show: false
            },
            tooltip: {
                enabled: false,
            },
        },
        responsive: [
            {
                breakpoint: 1401,
                options: {
                    series: [
                        {
                            data: [
                                {
                                    x: 'Jan',
                                    y: [140, 360],
                                },
                                {
                                    x: '',
                                    y: [180, 400],
                                },
                                {
                                    x: 'Feb',
                                    y: [160, 400],
                                },
                                {
                                    x: '',
                                    y: [180, 420],
                                },
                                {
                                    x: 'Mar',
                                    y: [160, 480],
                                },
                                {
                                    x: '',
                                    y: [160, 300],
                                },
                                {
                                    x: 'Apr',
                                    y: [190, 400],
                                },
                                {
                                    x: '',
                                    y: [140, 300],
                                }
                            ],
                        },
                    ],
                },
            },
            {
                breakpoint: 1199,
                options: {
                    series: [
                        {
                            data: [
                                {
                                    x: 'Jan',
                                    y: [140, 360],
                                },
                                {
                                    x: '',
                                    y: [180, 400],
                                },
                                {
                                    x: 'Feb',
                                    y: [160, 400],
                                },
                                {
                                    x: '',
                                    y: [180, 420],
                                },
                                {
                                    x: 'Mar',
                                    y: [160, 480],
                                },
                                {
                                    x: '',
                                    y: [160, 300],
                                },
                                {
                                    x: 'Apr',
                                    y: [190, 400],
                                },
                                {
                                    x: '',
                                    y: [140, 300],
                                },
                                {
                                    x: 'May',
                                    y: [200, 420],
                                },
                                {
                                    x: '',
                                    y: [180, 280],
                                },
                                {
                                    x: 'Jun',
                                    y: [170, 410],
                                },
                                {
                                    x: '',
                                    y: [160, 380],
                                },
                                {
                                    x: 'Jul',
                                    y: [200, 450],
                                },
                                {
                                    x: '',
                                    y: [170, 470],
                                },
                                {
                                    x: 'Aug',
                                    y: [180, 420],
                                },
                            ],
                        },
                    ],
                },
            },
            {
                breakpoint: 1199,
                options: {
                    chart: {
                        height: 275,
                    },
                },
            },
            {
                breakpoint: 500,
                options: {
                    series: [
                        {
                            data: [
                                {
                                    x: 'Jan',
                                    y: [140, 360],
                                },
                                {
                                    x: '',
                                    y: [180, 400],
                                },
                                {
                                    x: 'Feb',
                                    y: [160, 400],
                                },
                                {
                                    x: '',
                                    y: [180, 420],
                                },
                                {
                                    x: 'Mar',
                                    y: [160, 480],
                                },
                                {
                                    x: '',
                                    y: [160, 300],
                                },
                                {
                                    x: 'Apr',
                                    y: [190, 400],
                                },
                                {
                                    x: '',
                                    y: [140, 300],
                                },
                                {
                                    x: 'May',
                                    y: [200, 420],
                                }
                            ],
                        },
                    ],
                },
            },
        ],
    };

    const ChartEl = new ApexCharts(document.querySelector('#salse-overview'), Option);
    ChartEl.render();

})();
