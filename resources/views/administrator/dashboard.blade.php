@extends('layouts.admin-layout.app')
@section('title', 'Dashboard')
@section('contents')
<div class="row">
    <!-- Students count -->
    <div class="col-xl-3 col-md-6 mb-4">
    <a class="text-decoration-none" href="{{ route('studentrecord') }}">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Total (Students)</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><p class="counter" data-target="{{ $totalstudents }}"></p></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </a>
    </div>

    <!-- Students count -->

    <div class="col-xl-3 col-md-6 mb-4">
    <a class="text-decoration-none" href="{{ route('facultyrecord') }}">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Total (Faculty)</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><p class="counter" data-target="{{ $totalfaculty }}"></p></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </a>
    </div>

    <!-- Students count -->
    <div class="col-xl-3 col-md-6 mb-4">
        <a class="text-decoration-none" href="{{ route('staffrecord') }}">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Total (Staff)</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><p class="counter" data-target="{{ $totalstaff }}"></p></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
        </a>
    </div>

    <!-- Students count -->
   
    <div class="col-xl-3 col-md-6 mb-4">
    <a class="text-decoration-none">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Pending Request (Students)</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><p class="counter" data-target="{{ $totalpending }}"></p></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
        </a>
    </div>
   


</div>

<div class="row">
    <!-- Pie Chart for total students by campus -->
    <div class="col-xl-4 col-lg-5">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Students by Campus</h6>
            </div>
            <div class="card-body">
                <div class="chart-pie pt-4 pb-2">
                    <canvas id="myPieChart"></canvas>
                </div>
                <div class="mt-4 text-center small">
                    <span class="mr-2"><i class="fas fa-circle text-primary"></i> Main</span>
                    <span class="mr-2"><i class="fas fa-circle text-success"></i> Sulop</span>
                    <span class="mr-2"><i class="fas fa-circle text-info"></i> Matanao</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Pie Chart for total gender by students -->
    <div class="col-xl-8 col-lg-5">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Examination Result Analysis</h6>
            </div>
            <div class="card-body">
                <div class="chart-pie pt-4 pb-2">
                    <canvas id="ExamResultAnalysis"></canvas>
                </div>
                <div class="mt-4 text-center small">
                    <span class="mr-2"><i class="fas fa-circle text-danger"></i> Fail</span>
                    <span class="mr-2"><i class="fas fa-circle text-primary"></i> Passed</span>
                </div>
            </div>
        </div>
    </div>

</div>
<script src="{{ asset('resource/vendor/chart.js/Chart.min.js') }}"></script>
<script>
// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart 
var ctx = document.getElementById("myPieChart");
var gbs = document.getElementById("ExamResultAnalysis");
// const student = 1;
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["Main", "Sulop", "Matanao"],
    datasets: [{
      data: [{{$totalmain}}, {{$totalsulop}}, {{$totalmatanao}}],
      backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
      hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf','#f6c23d'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});



var myPieChart = new Chart(gbs, {
  type: 'bar',
  data: {
    labels: ["Failed", "Passed"],
    datasets: [{
      data: [{{$totalfail}}, {{$totalpassed}}],
      backgroundColor: ['#e64233','#2e59d9'],
      hoverBackgroundColor: ['#e64233','#2e59d9'],
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: '#2e59d9',
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});
</script>
@endsection