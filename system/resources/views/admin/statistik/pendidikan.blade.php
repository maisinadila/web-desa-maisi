@extends('admin.template.base')
@push('stylecustom')
<link rel="stylesheet" href="{{url('public')}}/assets-admin/css/blog.css">


@endpush
@section('content')

<!-- breadcrumb -->
<div class="block-header ">
    <div class="row">
        <div class="col-12">
            <h2>Statistik</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item align-items-center"><i class="fa fa-dashboard"></i></li>                            
                <li class="breadcrumb-item align-items-center">Pendidikan</li>                            
            </ul>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12 mt-5">
          <div class="table-responsive">
              <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                      <thead class="bg-secondary text-white">
                          <tr>
                              <th>No</th>
                              <th>Pendidikan</th>
                              <th>Jumlah Penduduk</th>
                          </tr>
                      </thead>
                      <tbody>
                 
                      <tr>
                          <td>1</td>
                          <td>S3</td>
                          <td>{{$s3}}</td>
                      </tr>
                      <tr>
                          <td>2</td>
                          <td>S2</td>
                          <td>{{$s2}}</td>
                      </tr>
                      <tr>
                          <td>3</td>
                          <td>S1</td>
                          <td>{{$s1}}</td>
                      </tr>
                      <tr>
                          <td>4</td>
                          <td>D3</td>
                          <td>{{$d3}}</td>
                      </tr>
                      <tr>
                          <td>5</td>
                          <td>SMA</td>
                          <td>{{$sma}}</td>
                      </tr>
                      <tr>
                          <td>6</td>
                          <td>SMP</td>
                          <td>{{$smp}}</td>
                      </tr>
                      <tr>
                          <td>7</td>
                          <td>SD</td>
                          <td>{{$sd}}</td>
                      </tr>
                      <tr>
                          <td>8</td>
                          <td>Tidak Sekolah</td>
                          <td>{{$tidak_sekolah}}</td>
                      </tr>
                      
                  </tbody>
                
                 
              </table>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="d-flex flex-row-reverse">
                <div class="page_action">

                    <div>
                      <canvas id="myDoughnutChart" width="400" height="400"></canvas>
                    </div>
                </div>
            </div>
        </div>
      </div>
  </div>
  <!-- akhir breadcrumb -->






  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <script>
    // Sample data for the chart
    const data = {
      labels: ['SD', 'SMP', 'SMA', 'D3', 'S1', 'S2', 'S3', 'tidak_sekolah'],
      datasets: [{
        data: [ {{$sd}}, {{$smp}}, {{$sma}}, {{$d3}}, {{$s1}}, {{$s2}}, {{$s3}}, {{$tidak_sekolah}} ], // Replace these values with your data
        backgroundColor: ['#ff6384', '#36a2eb', '#4bc0c0', '#eb8036', '#ebda36', '#009900', '#666699', '#cc99ff'], // Define colors for segments
      }],
    };

    // Configuration options for the chart
    const options = {
      cutoutPercentage: 70, // Adjust the size of the hole in the center (0 for a pie chart)
      // You can customize other options here, such as title, tooltips, etc.
    };

    // Get the canvas element
    const ctx = document.getElementById('myDoughnutChart').getContext('2d');

    // Create the doughnut chart
    const myDoughnutChart = new Chart(ctx, {
      type: 'doughnut',
      data: data,
      options: options,
    });
  </script>

@endsection