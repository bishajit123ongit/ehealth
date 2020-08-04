<?php
 $current_month=date('M');

 $current_last_one_month=date('M',strtotime('-1 month'));
 $current_last_two_month=date('M',strtotime('-2 month'));

 $current_last_three_month=date('M',strtotime('-3 month'));
 $current_last_four_month=date('M',strtotime('-4 month'));
 $current_last_five_month=date('M',strtotime('-5 month'));
 $current_last_six_month=date('M',strtotime('-6 month'));
 $current_last_seven_month=date('M',strtotime('-7 month'));
 $current_last_eight_month=date('M',strtotime('-8 month'));
 $current_last_nine_month=date('M',strtotime('-9 month'));
 $current_last_ten_month=date('M',strtotime('-10 month'));
 $current_last_eleven_month=date('M',strtotime('-11 month'));

 
$dataPoints = array(
	array("y" => $last_to_month_users, "label" => $current_last_two_month),
	array("y" => $last_month_users, "label" =>  $current_last_one_month),
	array("y" => $current_month_users, "label" => $current_month)
);
?>
@extends('layouts.admin')

@section('content')
<script>
window.onload = function () {
 
var chart1 = new CanvasJS.Chart("chartContainer1", {
  animationEnabled: true,
	title: {
		text: "User Reporting"
	},
	axisY: {
		title: "Number of users"
	},
	data: [{
		type: "line",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
var chart2 = new CanvasJS.Chart("chartContainer2", {
	animationEnabled: true,
	title: {
		text: "Total Dept, Live conversation and booking reporting"
	},
	data: [{
		type: "pie",
		startAngle: 240,
		yValueFormatString: "##0.00\"%\"",
		indexLabel: "{label} {y}",
		dataPoints: [
			{y: <?php echo (($types->count()*100)/($types->count()+$doctorRequest->count()+$bookings->count()));?>, label: "Types"},
			{y: <?php echo (($doctorRequest->count()*100)/($types->count()+$doctorRequest->count()+$bookings->count()));?>, label: "Live conversation"},
			{y: <?php echo (($bookings->count()*100)/($bookings->count()+$doctorRequest->count()+$bookings->count()));?>, label: "Booking"}
		]
	}]
});
chart1.render();
chart2.render();
}
</script>

    <section style="margin-top:10px;" class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$doctors->count()}}</h3>

                <p>Total doctors</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{route('doctors.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$users->count()}}</h3>

                <p>Total users</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{route('users.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$types->count()}}</h3>

                <p>Total Dept</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="{{route('types.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$bookings->count()}}</h3>

                <p>Total bookings</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <div class="row" style="margin-bottom:55px;">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  Users
                </h3>
              </div>

              <div class="card-body">
                <div class="tab-content p-0">
                	<div id="chartContainer1" style="height: 350px; "></div>
                </div>
              </div><!-- /.card-body -->
            </div>
          </section>

          <section class="col-lg-5 connectedSortable">

            <!-- Map card -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  Total Dept, Live conversation and booking reporting
                </h3>
            
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                	<div id="chartContainer2" style="height: 330px; "></div>
                </div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->

  
            <!-- /.card -->
          </section>
          </div>

        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

@section('scripts')
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
@endsection