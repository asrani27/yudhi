@extends('layouts.app')
@push('css')

@endpush
@section('content')

<div class="row">
    <div class="col-md-12">
        <a href="/superadmin/tersangka" class="btn btn-danger"><i class="fa fa-arrow-left"></i> Kembali</a> <br /><br />
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="box box-success">
            <div class="box-header">
                <i class="ion ion-clipboard"></i>
                <h3 class="box-title">Edit Data</h3>
            </div>
            <!-- /.box-header -->
            <form class="form-horizontal" method="post" action="/superadmin/tersangka/edit/{{$data->id}}">
                @csrf

            <div class="box-body">
                <div class="form-group">
                    <label class="col-sm-2 control-label">NIK tersangka</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nik" value="{{$data->nik}}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Nama tersangka</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama" value="{{$data->nama}}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="tgl_lahir" value="{{$data->tgl_lahir}}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">umur</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="umur" value="{{$data->umur}}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <select class="form-control" required name="jkel">
                            <option value="">-pilih-</option>
                            <option value="L" {{ $data->jkel == 'L' ? 'selected':'' }}>L</option>
                            <option value="P" {{ $data->jkel == 'P' ? 'selected':'' }}>P</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="alamat"  value="{{$data->alamat}}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Agama</label>
                    <div class="col-sm-10">
                        <select class="form-control" required name="agama">
                            <option value="">-pilih-</option>
                            <option value="ISLAM" {{ $data->agama == 'ISLAM' ? 'selected':'' }}>ISLAM</option>
                            <option value="PROTESTAN" {{ $data->agama == 'PROTESTAN' ? 'selected':'' }}>PROTESTAN</option>
                            <option value="KATOLIK" {{ $data->agama == 'KATOLIK' ? 'selected':'' }}>KATOLIK</option>
                            <option value="HINDU" {{ $data->agama == 'HINDU' ? 'selected':'' }}>HINDU</option>
                            <option value="BUDDHA" {{ $data->agama == 'BUDDHA' ? 'selected':'' }}>BUDHA</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Pekerjaan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="pekerjaan"  value="{{$data->pekerjaan}}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Pendidikan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="pendidikan"  value="{{$data->pendidikan}}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-block btn-success pull-right"><i class="fa fa-save"></i> Update Data</button>
                    </div>
                </div>
            </div>
                
            </form>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>
@endsection
@push('js')

@endpush