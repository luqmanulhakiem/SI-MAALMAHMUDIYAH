@extends('dashboard.index')

@section('db-content')
<main class="app-main"> <!--begin::App Content Header-->
    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Data Guru</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <a href="{{route('db.guru.create')}}" class="btn btn-sm btn-primary">Tambah Data</a>
                     
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
                            <h3 class="card-title">Data Guru</h3>
                        </div> <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Foto</th>
                                        <th>Nama</th>
                                        <th>NIP</th>
                                        <th>NIK</th>
                                        <th>TTL</th>
                                        <th>Gender</th>
                                        <th>Alamat</th>
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
                                                    @if ($item->foto == null)
                                                        <div class="ratio ratio-1x1">
                                                            <img src="{{asset('assets/images/user.png')}}" alt="a" class="img-fluid rounded">
                                                        </div>
                                                    @else
                                                        <div class="ratio ratio-1x1">
                                                            <img src="{{asset('storage/guru/'. $item->foto)}}" alt="Foto" class="img-fluid rounded">
                                                        </div>
                                                    @endif
                                                </td>
                                                <td>{{$item->nama}}</td>
                                                <td>{{$item->nip}}</td>
                                                <td>{{$item->nik}}</td>
                                                <td>{{$item->tempat_lahir}}, {{ \Carbon\Carbon::parse($item->tanggal_lahir)->translatedFormat('j F Y') }}</td>
                                                <td>{{$item->jenis_kelamin}}</td>
                                                <td>{{$item->alamat ?? '-'}}</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a href="{{route('db.guru.edit', ['id' => $item->id])}}" class="btn btn-sm btn-warning"><i class="bi-icon bi-pen"></i> Edit</a>
                                                        <a href="{{route('db.guru.destroy', ['id' => $item->id])}}" class="btn btn-sm btn-danger"><i class="bi-icon bi-trash"></i> Hapus</a>
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