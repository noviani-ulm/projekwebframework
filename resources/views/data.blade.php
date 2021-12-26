@extends('layouts.app')

@section('content')
<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Data Orang Hilang Yang Terdata</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">

			<table id="data" class="table table-bordered table-striped">
				<thead>
					<tr style="text-align: center;">
					<th>NO</th>
                    <th>NAMA</th>
                    <th>RINCIAN PENEMUAN</th>
					<th>CIRI-CIRI</th>
					</tr>
				</thead>
			</table>
        </div>
    </div>
@endsection
