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
          <li class="breadcrumb-item align-items-center">Status Perkawinan</li>                            
      </ul>
    </div>
      
    <div class="col-lg-6 col-md-6 col-sm-12 mt-5">
          <div class="table-responsive">
              <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                      <thead class="bg-secondary text-white">
                          <tr>
                              <th>No</th>
                              <th>Status Perkawinan</th>
                              <th>Jumlah Penduduk</th>
                          </tr>
                      </thead>
                      <tbody>
                 
                      <tr>
                          <td>1</td>
                          <td>Belum Menikah</td>
                          <td>{{$belum_menikah}}</td>
                      </tr>
                      <tr>
                          <td>2</td>
                          <td>Menikah</td>
                          <td>{{$menikah}}</td>
                      </tr>
                      <tr>
                          <td>3</td>
                          <td>Duda</td>
                          <td>{{$duda}}</td>
                      </tr>
                      <tr>
                          <td>4</td>
                          <td>Janda</td>
                          <td>{{$janda}}</td>
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
      labels: ['menikah', 'belum menikah', 'janda', 'duda'],
      datasets: [{
        data: [{{$menikah}}, {{$belum_menikah}}, {{$janda}}, {{$duda}}], // Replace these values with your data
        backgroundColor: ['#ff6384', '#36a2eb', '#4bc0c0',  '#eb8036'], // Define colors for segments
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