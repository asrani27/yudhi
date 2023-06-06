@extends('layouts.app')
@push('css')
    
@endpush
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="box box-success">
          <div class="box-header">
            <i class="ion ion-clipboard"></i><h3 class="box-title">Data Kekerasan Pada Anak</h3>

            <div class="box-tools">
              <a href="/superadmin/kpa/create" class="btn btn-sm btn-success"><i class="fa fa-user"></i> Tambah Data</a>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
              <tbody><tr>
                <th>No</th>
                <th>Tanggal Kasus</th>
                <th>Penyidik</th>
                <th>Tersangka</th>
                <th>Korban</th>
                <th>Unit Reskrim</th>
                <th>Kejadian</th>
                <th>Pasal</th>
                <th>JPU 1</th>
                <th>JPU 2</th>
                <th>Aksi</th>
              </tr>
              @foreach ($data as $key => $item)
              <tr>
                <td>{{$data->firstItem() + $key}}</td>
                <td>{{\Carbon\Carbon::parse($item->tanggal)->format('d M Y')}}</td>
                <td>NIP : {{$item->penyidik == null ? '': $item->penyidik->nip}} <br/>Nama : {{$item->penyidik == null ? '': $item->penyidik->nama}}</td>
                <td>NIK : {{$item->tersangka == null ? '': $item->tersangka->nik}} <br/>Nama : {{$item->tersangka == null ? '': $item->tersangka->nama}}</td>
                <td>NIK : {{$item->korban == null ? '': $item->korban->nik}} <br/>Nama : {{$item->korban == null ? '': $item->korban->nama}}</td>
                <td>{{$item->unit}}</td>
                <td>{{$item->kejadian}}</td>
                <td>{{$item->pasal}}</td>
                <td>NIP : {{$item->nip_jpu1}} <br/> Nama : {{$item->nama_jpu1}}</td>
                <td>NIP : {{$item->nip_jpu2}} <br/> Nama : {{$item->nama_jpu2}}</td>
                <td>
                  <a href="/superadmin/kpa/edit/{{$item->id}}" class="btn btn-sm btn-success"><i class="fa fa-edit"></i> Edit</a>
                  <a href="/superadmin/kpa/delete/{{$item->id}}" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin dihapus?');"><i class="fa fa-trash"></i> Delete</a>
                </td>
              </tr>
              @endforeach
            </tbody></table>
          </div>
          <!-- /.box-body -->
        </div>
        {{$data->links()}}
        <!-- /.box -->
      </div>
</div>

@endsection
@push('js')

@endpush
