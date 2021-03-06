@extends('layouts.app')

@section('content')
<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Berikut daftar panti dan lembaga sosial yang bekerjasama dengan temukeluarga.id</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">

			<table id="data" class="table table-bordered table-striped">
				<thead>
					<tr style="text-align: center;">
					<th>NO</th>
                    <th>NAMA PANTI/LEMBAGA</th>
                    <th>ALAMAT</th>
					<th>JUMLAH ORANG YANG PERLU REUNIFIKASI</th>
					</tr>
				</thead>
			</table>
        </div>
    </div>
@endsection
