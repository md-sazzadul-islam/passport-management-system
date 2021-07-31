@extends('layouts.app')

@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item active">Dashboard</li>
</ol>
<div class="container-fluid">

    <div class="row">
        <!-- BAR CHART -->
        <div class="col-12 col-lg-12">

            <div class="card card-success">
                <div class="card-body">
                    <div class="chart">
                        <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>150</h3>

                    <p>New Orders</p>
                </div>
                <div class="icon">
                    <i class="nav-icon icon-user"></i>
                </div>
            </div>
        </div>

    </div>


</div>
@endsection

@push('scripts')
<script src="{{ URL::asset('js/Chart.min.js') }}"></script>
<script>
    //-------------
    //- BAR CHART -
    //-------------
    var areaChartData = {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December', ],
        datasets: [{
                label: 'Total Payment',
                fillColor: '#A9CCE3',
                strokeColor: 'rgba(210, 214, 222, 1)',
                pointColor: 'rgba(210, 214, 222, 1)',
                pointStrokeColor: '#c1c7d1',
                pointHighlightFill: '#fff',
                backgroundColor: "#B2DFDB",
                pointHighlightStroke: 'rgba(220,220,220,1)',
                data: [
                    <?php
                    for ($i = 1; $i <= 12; $i++) {
                        echo $dashboard->payment_sum($i) . ',';
                    }
                    ?>
                ]
            },
            {
                label: 'Total Passport',
                fillColor: 'rgba(60,141,188,0.9)',
                strokeColor: 'rgba(60,141,188,0.8)',
                pointColor: '#3b8bba',
                pointStrokeColor: 'rgba(60,141,188,1)',
                pointHighlightFill: '#fff',
                backgroundColor: "#A5D6A7",
                pointHighlightStroke: 'rgba(60,141,188,1)',
                data: [
                    <?php
                    for ($i = 1; $i <= 12; $i++) {
                        echo $dashboard->passport_count($i) . ',';
                    }
                    ?>
                ]
            }
        ]
    }


    var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChartData = $.extend(true, {}, areaChartData)
    var temp0 = areaChartData.datasets[0]
    var temp1 = areaChartData.datasets[1]
    barChartData.datasets[0] = temp1
    barChartData.datasets[1] = temp0

    var barChartOptions = {
        responsive: true,
        maintainAspectRatio: false,
        datasetFill: false
    }

    new Chart(barChartCanvas, {
        type: 'bar',
        data: barChartData,
        options: barChartOptions
    })
</script>
@endpush