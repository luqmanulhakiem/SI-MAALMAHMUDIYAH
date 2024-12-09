@extends('dashboard.index')
@section('db-content')
<main class="app-main"> <!--begin::App Content Header-->
    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Edit Data</h3>
                </div>
                {{-- <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            General Form
                        </li>
                    </ol>
                </div> --}}
            </div> <!--end::Row-->
        </div> <!--end::Container-->
    </div> <!--end::App Content Header--> <!--begin::App Content-->
    <div class="app-content"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row g-4"> <!--begin::Col-->
                {{-- Error Message --}}
                {{-- <div class="col-12">
                    <div class="callout callout-info">
                        For detailed documentation of Form visit <a href="https://getbootstrap.com/docs/5.3/forms/overview/" target="_blank" rel="noopener noreferrer" class="callout-link">
                            Bootstrap Form
                        </a> </div>
                </div> <!--end::Col--> <!--begin::Col--> --}}
                <div class="col-md-6"> <!--begin::Quick Example-->
                    <div class="card card-primary card-outline mb-4"> <!--begin::Header-->
                        <div class="card-header">
                            <div class="card-title">Edit Data</div>
                        </div> <!--end::Header--> <!--begin::Form-->
                        <form method="POST" action="{{route('db.siswa.update', ['id' => $data->id])}}"> <!--begin::Body-->
                            @csrf
                            <div class="card-body">
                                @if ($errors->any())
                                <div class="alert alert-danger mt-3">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                                <div class="mb-3"> 
                                    <label class="form-label">NIS*</label> 
                                    <input type="number" value="{{$data->nis}}" name="nis" class="form-control" placeholder="NIS" required>
                                </div>
                                <div class="mb-3"> 
                                    <label class="form-label">NIK*</label> 
                                    <input type="number" value="{{$data->nik}}" name="nik" class="form-control" placeholder="NIK" required>
                                </div>
                                <div class="mb-3"> 
                                    <label class="form-label">Nama*</label> 
                                    <input type="text" value="{{$data->nama}}" name="nama" class="form-control" placeholder="Nama Siswa" required>
                                </div>
                                <div class="mb-3"> 
                                    <label class="form-label">Tempat, Tanggal Lahir*</label> 
                                    <input type="text" value="{{$data->ttl}}" name="ttl" class="form-control" placeholder="Contoh: Sampang, 2 September 2006" required>
                                </div>
                                <div class="mb-3"> 
                                    <label class="form-label">Gender*</label> 
                                    <select class="form-control"  name="jenis_kelamin" id="" required>
                                        <option value="">Pilih Gender</option>
                                        <option value="L" {{$data->jenis_kelamin == "L" ? 'selected' : ''}}>Laki Laki</option>
                                        <option value="P" {{$data->jenis_kelamin == "P" ? 'selected' : ''}}>Perempuan</option>
                                    </select>
                                </div>
                                <div class="mb-3"> 
                                    <label class="form-label">Alamat</label> 
                                    <textarea type="text" name="alamat" class="form-control" placeholder="Alamat Siswa">{{$data->alamat}}</textarea>
                                </div>
                            </div> <!--end::Body--> <!--begin::Footer-->
                            <div class="card-footer"> <button type="submit" class="btn btn-primary">Submit</button> </div> <!--end::Footer-->
                        </form> <!--end::Form-->
                    </div> <!--end::Quick Example--> <!--begin::Input Group-->
                </div> <!--end::Col--> <!--begin::Col-->
           
            </div> <!--end::Row-->
        </div> <!--end::Container-->
    </div> <!--end::App Content-->
</main>
@endsection