@extends('admin.master')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="card-title" style="padding-left: 15px;">Dashboard</h4>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Projetos no mês</h3>
                        </div>
                        <div class="box-body">
                            <div class="chart">
                                <canvas id="areaChart" style="height:250px"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                <div class="col-md-8">
                    <div class="box box-danger">
                        <div class="box-header with-border">
                            <h3 class="box-title">Produtos</h3>
                        </div>
                        <div class="box-body">
                            <canvas id="pieChart" style="height:100px"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box box-danger">
                        <div class="box-header with-border">
                            <h3 class="box-title">Tipos de clientes</h3>
                        </div>
                        <div class="box-body">
                            <canvas id="pieChart2" style="height:250px"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box box-danger">
                        <div class="box-header with-border">
                            <h3 class="box-title">Regiões</h3>
                        </div>
                        <div class="box-body">
                            <canvas id="pieChart3" style="height:250px"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('scripts')
    <script>
        $(document).ready( function (){
            var areaChartCanvas = $("#areaChart").get(0).getContext("2d");
            var areaChart = new Chart(areaChartCanvas);

            var areaChartData = {
                labels: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15", "16", "17", "18", "19", "20", "21", "22", "23", "24", "25", "26", "27", "28", "29", "30", "31"],
                datasets: [
                    {
                        label: "Digital Goods",
                        fillColor: "rgba(60,141,188,0.9)",
                        strokeColor: "rgba(60,141,188,0.8)",
                        pointColor: "#3b8bba",
                        pointStrokeColor: "rgba(60,141,188,1)",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(60,141,188,1)",
                        data: [{{ implode(',', $chart_moth) }}]
                    }
                ]
            };

            var areaChartOptions = {
                //Boolean - If we should show the scale at all
                showScale: true,
                //Boolean - Whether grid lines are shown across the chart
                scaleShowGridLines: false,
                //String - Colour of the grid lines
                scaleGridLineColor: "rgba(0,0,0,.05)",
                //Number - Width of the grid lines
                scaleGridLineWidth: 1,
                //Boolean - Whether to show horizontal lines (except X axis)
                scaleShowHorizontalLines: true,
                //Boolean - Whether to show vertical lines (except Y axis)
                scaleShowVerticalLines: true,
                //Boolean - Whether the line is curved between points
                bezierCurve: true,
                //Number - Tension of the bezier curve between points
                bezierCurveTension: 0.3,
                //Boolean - Whether to show a dot for each point
                pointDot: false,
                //Number - Radius of each point dot in pixels
                pointDotRadius: 4,
                //Number - Pixel width of point dot stroke
                pointDotStrokeWidth: 1,
                //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
                pointHitDetectionRadius: 20,
                //Boolean - Whether to show a stroke for datasets
                datasetStroke: true,
                //Number - Pixel width of dataset stroke
                datasetStrokeWidth: 2,
                //Boolean - Whether to fill the dataset with a color
                datasetFill: true,
                //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
                maintainAspectRatio: true,
                //Boolean - whether to make the chart responsive to window resizing
                responsive: true
            };

        //Create the line chart
        areaChart.Line(areaChartData, areaChartOptions);
            });

        var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
        var pieChart = new Chart(pieChartCanvas);
        var PieData = [{!! $chart_product_item !!}] ;
        var pieOptions = {
            //Boolean - Whether we should show a stroke on each segment
            segmentShowStroke: true,
            //String - The colour of each segment stroke
            segmentStrokeColor: "#fff",
            //Number - The width of each segment stroke
            segmentStrokeWidth: 2,
            //Number - The percentage of the chart that we cut out of the middle
            percentageInnerCutout: 50, // This is 0 for Pie charts
            //Number - Amount of animation steps
            animationSteps: 100,
            //String - Animation easing effect
            animationEasing: "easeOutBounce",
            //Boolean - Whether we animate the rotation of the Doughnut
            animateRotate: true,
            //Boolean - Whether we animate scaling the Doughnut from the centre
            animateScale: false,
            //Boolean - whether to make the chart responsive to window resizing
            responsive: true,
            // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
            maintainAspectRatio: true,
            //String - A legend template
            {{--legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"--}}
        };

        pieChart.Doughnut(PieData, pieOptions);

        var pieChartCanvas2 = $("#pieChart2").get(0).getContext("2d");
        var pieChart2 = new Chart(pieChartCanvas2);
        var PieData2 = [{!! $chart_type_user_item !!}] ;

        pieChart2.Doughnut(PieData2, pieOptions);

        var pieChartCanvas3 = $("#pieChart3").get(0).getContext("2d");
        var pieChart3 = new Chart(pieChartCanvas3);
        var PieData3 = [{!! $chart_region_item !!}] ;

        pieChart3.Doughnut(PieData3, pieOptions);

    </script>

@stop