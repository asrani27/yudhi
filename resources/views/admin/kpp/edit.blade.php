@extends('layouts.app')
@push('css')

@endpush
@section('content')

<div class="row">
    <div class="col-md-12">
        <a href="/superadmin/kpp" class="btn btn-danger"><i class="fa fa-arrow-left"></i> Kembali</a> <br /><br />
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
            <form class="form-horizontal" method="post" action="/superadmin/kpp/edit/{{$data->id}}">
                @csrf

            <div class="box-body">
                <div class="form-group">
                    <label class="col-sm-2 control-label">Tanggal Kasus</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="tanggal" value="{{$data->tanggal}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Penyidik</label>
                    <div class="col-sm-10">
                        <select class="form-control" required name="penyidik_id">
                            <option value="">-pilih-</option>
                            @foreach ($penyidik as $item)
                            <option value="{{$item->id}}" {{$data->penyidik_id == $item->id ? 'selected':''}}>{{$item->nip}} - {{$item->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Korban</label>
                    <div class="col-sm-10">
                        <select class="form-control" required name="korban_id">
                            <option value="">-pilih-</option>
                            @foreach ($korban as $item)
                            <option value="{{$item->id}}"{{$data->korban_id == $item->id ? 'selected':''}}>{{$item->nik}} - {{$item->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Tersangka</label>
                    <div class="col-sm-10">
                        <select class="form-control" required name="tersangka_id">
                            <option value="">-pilih-</option>
                            @foreach ($tersangka as $item)
                            <option value="{{$item->id}}"{{$data->tersangka_id == $item->id ? 'selected':''}}>{{$item->nik}} - {{$item->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Kejadian Singkat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="kejadian" value="{{$data->kejadian}}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Penahanan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="penahanan" value="{{$data->penahanan}}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Unit Reskrim</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="unit" value="{{$data->unit}}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Pasal yang di dakwa</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="pasal" value="{{$data->pasal}}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">NIP JPU 1</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nip_jpu1" value="{{$data->nip_jpu1}}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Nama JPU 1</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama_jpu1" value="{{$data->nama_jpu1}}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">NIP JPU 2</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nip_jpu2" value="{{$data->nip_jpu2}}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Nama JPU 2</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama_jpu2" value="{{$data->nama_jpu2}}" required>
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