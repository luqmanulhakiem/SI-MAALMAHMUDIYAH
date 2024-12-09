@extends('dashboard.index')

@section('db-content')
<main class="app-main"> <!--begin::App Content Header-->
    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Data Galeri</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <a href="{{route('db.galeri.create')}}" class="btn btn-sm btn-primary">Tambah Data</a>
                     
                    </ol>
                </div>
            </div> <!--end::Row-->
        </div> <!--end::Container-->
    </div> <!--end::App Content Header--> <!--begin::App Content-->
    <div class="app-content"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h3 class="card-title">Data Galeri</h3>
                        </div> <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Foto</th>
                                        <th>Deskripsi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($data) > 0)
                                        <?php $number = 1; ?>
                                        @foreach ($data as $item)
                                            <tr class="align-middle">
                                                <td>{{$number++}}</td>
                                                <td>
                                                    <div class="ratio ratio-1x1">
                                                        <img src="{{asset('storage/galeri/'. $item->foto)}}" alt="Foto" class="img-fluid rounded">
                                                      </div>
                                                </td>
                                                <td>{{$item->nama}}</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a href="{{route('db.galeri.edit', ['id' => $item->id])}}" class="btn btn-sm btn-warning"><i class="bi-icon bi-pen"></i> Edit</a>
                                                        <a href="{{route('db.galeri.destroy', ['id' => $item->id])}}" class="btn btn-sm btn-danger"><i class="bi-icon bi-trash"></i> Hapus</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                    <tr>
                                        <td colspan="9" class="text-center">Tidak ada data</td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-end mt-4 me-2">
                                {{ $data->links() }}
                            </div>
                        </div> <!-- /.card-body -->
                    </div> <!-- /.card -->
                </div> <!-- /.col -->
            </div> <!--end::Row-->
        </div> <!--end::Container-->
    </div> <!--end::App Content-->
</main> 
@endsection