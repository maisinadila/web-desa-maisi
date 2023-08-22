@extends('website.template.base')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-12 mt-5">
			<div class="table-responsive">
				<table class="table table-bordered table-hover js-basic-example dataTable table-custom">
					<thead class="bg-secondary text-white">
						<tr>
							<th>Agama</th>
							<th>Jumlah</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Islam</td>
							<td>{{$islam}} Penduduk</td>
						</tr>

						<tr>
							<td>Kristen</td>
							<td>{{$kristen}} Penduduk</td>
						</tr>

						<tr>
							<td>Hindu</td>
							<td>{{$hindu}} Penduduk</td>
						</tr>

						<tr>
							<td>Budha</td>
							<td>{{$budha}} Penduduk</td>
						</tr>
						<tr>
							<td>Konghuchu</td>
							<td>{{$konghuchu}} Penduduk</td>
						</tr>
					</tbody>
					<tfood>
						<tr>
							<th>Agama</th>
							<th>Jumlah</th>
						</tr>
					</tfood>
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
		labels: ['Islam', 'Kristen', 'Hindu', 'Budha', 'konghuchu'],
		datasets: [{
        data: [{{$islam}}, {{$kristen}}, {{$hindu}}, {{$budha}}, {{$konghuchu}}], // Replace these values with your data
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