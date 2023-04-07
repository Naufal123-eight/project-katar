@extends('layouts.default')

@section('content')

<div class="page-inner mt--5">>
	<div class="row">
		<div class="col-md-12">
			<div class="card full-height">
				<div class="card-header">
					<div class="card-head-row">
						<div class="card-title">Data Kategori</div>
                        <a href="{{ route('kategori.create')}}" class="btn btn-primary btn-sm ml-auto">Tambah Kategori</a>
					</div>
				</div>
				<div class="card-body">
                    @if(Session::has('sucsses'))
                        <div class="alert alert-primary">
                            {{ Session('sucsses') }}
                        </div>
                    @endif
					<div class="table-responsive">
					<table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama Kategori</th>
                                <th>Slug</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($kategori as $row)
                            <tr>
                            <td>{{ $row->id }}</td>
                            <td>{{ $row->nama_kategori }}</td>
                            <td>{{ $row->slug }}</td>
                            <td>Aksi</td>
                        </tr>
                            @empty

                            @endforelse

                        </tbody>
                    </table>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
