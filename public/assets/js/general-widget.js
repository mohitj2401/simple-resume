(function () {
  "use strict";

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



  // growth chart

  var growthoptions = {
    series: [{
      name: 'Growth',
      data: [22, 14, 23, 8, 14, 12, 2, 14, 18, 35, 18, 8, 24]
    }],
    chart: {
      height: 180,
      type: 'line',
      stacked: true,
      toolbar: {
        show: false
      },
      dropShadow: {
        enabled: true,
        enabledOnSeries: undefined,
        top: 5,
        left: 0,
        blur: 4,
        color: '#7A70BA',
        opacity: 0.22
      },
    },
    grid: {
      show: true,
      borderColor: '#000000',
      strokeDashArray: 0,
      position: 'back',
      xaxis: {
        lines: {
          show: true,
        },
      },
      yaxis: {
        lines: {
          show: false,
        },
      },
    },

    colors: ["#5527FF"],
    stroke: {
      width: 3,
      curve: 'smooth'
    },
    xaxis: {
      lines: {
        show: true
      },
      type: 'category',
      categories: ['0', '', '10k', '', '20k', '', '30k', '', '40k', '', '50k', '', '60k', ''],
      tickAmount: 10,
      labels: {
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
    fill: {
      type: 'gradient',
      gradient: {
        shade: 'dark',
        gradientToColors: ['#5527FF'],
        shadeIntensity: 1,
        type: 'horizontal',
        opacityFrom: 1,
        opacityTo: 1,
        colorStops: [
          {
            offset: 0,
            color: "#7A70BA",
            opacity: 1
          },
          {
            offset: 100,
            color: "#48A3D7",
            opacity: 1
          },
        ]
      },
    },
    yaxis: {
      min: -10,
      max: 40,
      labels: {
        show: false
      }
    },
    responsive: [
      {
        breakpoint: 1411,
        options: {
          chart: {
            height: 200,
          }
        },
      },
    ]
  };

  var growthchart = new ApexCharts(document.querySelector("#growthchart"), growthoptions);
  growthchart.render();

  // visitor chart
  var optionsvisitor = {
    series: [
      {
        name: "Active",
        data: [18, 50, 65, 18, 28, 70, 15, 35],
      },
      {
        name: "Bounce",
        data: [35, 70, 30, 60, 25, 45, 50, 50],
      },
    ],
    chart: {
      type: "bar",
      height: 220,
      toolbar: {
        show: false,
      },
    },
    plotOptions: {
      bar: {
        horizontal: false,
        columnWidth: "50%",
      },
    },
    dataLabels: {
      enabled: false,
    },
    stroke: {
      show: true,
      width: 6,
      colors: ["transparent"],
    },
    grid: {
      show: true,
      borderColor: "var(--chart-border)",
      xaxis: {
        lines: {
          show: true,
        },
      },
    },
    colors: ["#48A3D7", "var(--theme-deafult)"],
    xaxis: {
      categories: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun", "Mon"],
      tickAmount: 4,
      tickPlacement: "between",
      labels: {
        style: {
          fontFamily: "Rubik, sans-serif",
        },
      },
      axisBorder: {
        show: false,
      },
      axisTicks: {
        show: false,
      },
    },
    yaxis: {
      min: 0,
      max: 100,
      tickAmount: 5,
      tickPlacement: "between",
      labels: {
        style: {
          fontFamily: "Rubik, sans-serif",
        },
      },
    },
    fill: {
      opacity: 1,
    },
    legend: {
      position: "top",
      horizontalAlign: "left",
      fontFamily: "Rubik, sans-serif",
      fontSize: "14px",
      fontWeight: 500,
      labels: {
        colors: "var(--chart-text-color)",
      },
      markers: {
        width: 6,
        height: 6,
        radius: 12,
      },
      itemMargin: {
        horizontal: 10,
      },
    },
    responsive: [
      {
        breakpoint: 1366,
        options: {
          plotOptions: {
            bar: {
              columnWidth: "80%",
            },
          },
          grid: {
            padding: {
              right: 0,
            },
          },
        },
      },
      {
        breakpoint: 1200,
        options: {
          plotOptions: {
            bar: {
              columnWidth: "50%",
            },
          },
          grid: {
            padding: {
              right: 0,
            },
          },
        },
      },
      {
        breakpoint: 576,
        options: {
          plotOptions: {
            bar: {
              columnWidth: "60%",
            },
          },
          grid: {
            padding: {
              right: 5,
            },
          },
        },
      },
    ],
  };

  var chartvisitor = new ApexCharts(
    document.querySelector("#visitor-chart"),
    optionsvisitor
  );
  chartvisitor.render();

  // radial chart js
  function radialCommonOption(data) {
    return {
      series: data.radialYseries,
      chart: {
        height: 130,
        type: "radialBar",
        dropShadow: {
          enabled: true,
          top: 3,
          left: 0,
          blur: 10,
          color: data.dropshadowColor,
          opacity: 0.35,
        },
      },
      plotOptions: {
        radialBar: {
          hollow: {
            size: "60%",
          },
          track: {
            strokeWidth: "60%",
            opacity: 1,
            margin: 5,
          },
          dataLabels: {
            showOn: "always",
            value: {
              color: "var(--body-font-color)",
              fontSize: "14px",
              show: true,
              offsetY: -10,
            },
          },
        },
      },
      colors: data.color,
      stroke: {
        lineCap: "round",
      },
      responsive: [
        {
          breakpoint: 1500,
          options: {
            chart: {
              height: 130,
            },
          },
        },
      ],
    };
  }

  const radial1 = {
    color: ["var(--theme-deafult)"],
    dropshadowColor: "var(--theme-deafult)",
    radialYseries: [78],
  };

  const radialchart1 = document.querySelector("#radial-facebook");
  if (radialchart1) {
    var radialprogessChart1 = new ApexCharts(
      radialchart1,
      radialCommonOption(radial1)
    );
    radialprogessChart1.render();
  }

  // radial 2
  const radial2 = {
    color: ["#FFA941"],
    dropshadowColor: "#FFA941",
    radialYseries: [70],
  };

  const radialchart2 = document.querySelector("#radial-instagram");
  if (radialchart2) {
    var radialprogessChart2 = new ApexCharts(
      radialchart2,
      radialCommonOption(radial2)
    );
    radialprogessChart2.render();
  }

  // radial 3
  const radial3 = {
    color: ["#57B9F6"],
    dropshadowColor: "#57B9F6",
    radialYseries: [50],
  };

  const radialchart3 = document.querySelector("#radial-twitter");
  if (radialchart3) {
    var radialprogessChart3 = new ApexCharts(
      radialchart3,
      radialCommonOption(radial3)
    );
    radialprogessChart3.render();
  }

  // radial 4
  const radial4 = {
    color: ["#48A3D7"],
    dropshadowColor: "#48A3D7",
    radialYseries: [80],
  };

  const radialchart4 = document.querySelector("#radial-youtube");
  if (radialchart4) {
    var radialprogessChart4 = new ApexCharts(
      radialchart4,
      radialCommonOption(radial4)
    );
    radialprogessChart4.render();
  }


  // bitcoin widget charts
  function widgetCommonOption(data) {
    return {
      series: [
        {
          data: data.widgetYseries,
        },
      ],
      chart: {
        width: 120,
        height: 120,
        type: "line",
        toolbar: {
          show: false,
        },
        offsetY: -15,
        dropShadow: {
          enabled: true,
          enabledOnSeries: undefined,
          top: 6,
          left: 0,
          blur: 6,
          color: data.dropshadowColor,
          opacity: 0.3,
        },
      },
      grid: {
        show: false,
      },
      colors: data.color,
      stroke: {
        width: 2,
        curve: "smooth",
      },
      labels: data.label,
      markers: {
        size: 0,
      },
      xaxis: {
        // type: 'datetime',
        axisBorder: {
          show: false,
        },
        axisTicks: {
          show: false,
        },
        labels: {
          show: false,
        },
        tooltip: {
          enabled: false,
        },
      },
      yaxis: {
        axisBorder: {
          show: false,
        },
        axisTicks: {
          show: false,
        },
        labels: {
          show: false,
        },
      },
      legend: {
        show: false,
      },
      tooltip: {
        marker: {
          show: false,
        },
        x: {
          show: false,
        },
        y: {
          show: false,
          labels: {
            show: false,
          },
        },
      },
      responsive: [
        {
          breakpoint: 1790,
          options: {
            chart: {
              width: 100,
              height: 100,
            },
          },
        },
        {
          breakpoint: 1661,
          options: {
            chart: {
              width: "100%",
              height: 100,
            },
          },
        },
      ],
    };
  }

  const widget1 = {
    color: ["#FFA941"],
    dropshadowColor: "#FFA941",
    label: [
      "jan",
      "feb",
      "mar",
      "apr",
      "may",
      "jun",
      "jul",
      "aug",
      "sep",
      "oct",
      "nov",
    ],
    widgetYseries: [30, 25, 36, 30, 45, 35, 64, 52, 59, 36, 39],
  };

  const widgetchart1 = document.querySelector("#currency-chart");
  if (widgetchart1) {
    var bitcoinChart1 = new ApexCharts(
      widgetchart1,
      widgetCommonOption(widget1)
    );
    bitcoinChart1.render();
  }

  // widget 2
  const widget2 = {
    color: ["var(--theme-deafult)"],
    dropshadowColor: "var(--theme-deafult)",
    label: ["jan", "feb", "mar", "apr", "may", "jun", "jul", "aug", "sep"],
    widgetYseries: [30, 25, 30, 25, 64, 40, 59, 52, 64],
  };

  const widgetchart2 = document.querySelector("#currency-chart2");
  if (widgetchart2) {
    var bitcoinChart2 = new ApexCharts(
      widgetchart2,
      widgetCommonOption(widget2)
    );
    bitcoinChart2.render();
  }

  // widget 3
  const widget3 = {
    color: ["#0DA759"],
    dropshadowColor: "#0DA759",
    label: [
      "jan",
      "feb",
      "mar",
      "apr",
      "may",
      "jun",
      "jul",
      "aug",
      "sep",
      "oct",
    ],
    widgetYseries: [30, 25, 36, 30, 64, 50, 45, 62, 60, 64],
  };

  const widgetchart3 = document.querySelector("#currency-chart3");
  if (widgetchart3) {
    var bitcoinChart3 = new ApexCharts(
      widgetchart3,
      widgetCommonOption(widget3)
    );
    bitcoinChart3.render();
  }
})();
