@extends('website.template.base')
@section('content')

<div class="container">
		<div class="row">
		 <div class="col-lg-6 col-md-6 col-sm-12 mt-5">
          <div class="table-responsive">
              <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                      <thead class="bg-secondary text-white">
                          <tr>
                              <th>No</th>
                              <th>Range Umur</th>
                              <th>Golongan</th>
                              <th>Jumlah Penduduk</th>
                          </tr>
                      </thead>
                      <tbody>
                 
                      <tr>
                          <td>1</td>
                          <td>0 - 12 Tahun</td>
                          <td>Anak-Anak</td>
                          <td>{{$anak}}</td>
                      </tr>
                      <tr>
                          <td>2</td>
                          <td>13 - 19 Tahun</td>
                          <td>Remaja</td>
                          <td>{{$remaja}}</td>
                      </tr>
                      <tr>
                          <td>3</td>
                          <td>20 - 39 Tahun</td>
                          <td>Dewasa</td>
                          <td>{{$dewasa}}</td>
                      </tr>
                      <tr>
                          <td>4</td>
                          <td>40 - 59 Tahun</td>
                          <td>Dewasa Atas</td>
                          <td>{{$dewasa_atas}}</td>
                      </tr>
                      <tr>
                          <td>5</td>
                          <td>60 Tahun Keatas</td>
                          <td>Manula</td>
                          <td>{{$manula}}</td>
                      </tr>
                  </tbody>
                
                 
              </table>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
        	<center>x
              <div class="d-flex flex-row-reverse">
                  <div class="page_action">

                    <div>
                        <canvas id="myDoughnutChart" width="400" height="400"></canvas>
                    </div>
                </div>
            </div>
           </center>
        </div>
	</div>
</div>
</div>



  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <script>

    const $anak = {{$anak}};
    const $remaja = {{$remaja}};
    const $dewasa = {{$dewasa}};
    const $dewasa_atas = {{$dewasa_atas}};
    const $manula = {{$manula}};

    // Sample data for the chart
    const data = {
      labels: ['Anak-anak', 'Remaja', 'Dewasa', 'Dewasa Atas', 'Manula'],
      datasets: [{
        data: [ $anak, $remaja , $dewasa , $dewasa_atas, $manula], // Replace these values with your data
        backgroundColor: ['#ff6384', '#36a2eb', '#4bc0c0', '#eb8036', '#ebda36'], // Define colors for segments
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