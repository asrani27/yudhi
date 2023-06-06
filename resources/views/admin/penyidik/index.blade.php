@extends('layouts.app')
@push('css')
    
@endpush
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="box box-success">
          <div class="box-header">
            <i class="ion ion-clipboard"></i><h3 class="box-title">Data Penyidik</h3>

            <div class="box-tools">
              <a href="/superadmin/penyidik/create" class="btn btn-sm btn-success"><i class="fa fa-user"></i> Tambah Data</a>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
              <tbody><tr>
                <th>No</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>tanggal Lahir</th>
                <th>umur</th>
                <th>jkel</th>
                <th>Alamat</th>
                <th>unit</th>
                <th>Aksi</th>
              </tr>
              @foreach ($data as $key => $item)
              <tr>
                <td>{{$data->firstItem() + $key}}</td>
                <td>{{$item->nip}}</td>
                <td>{{$item->nama}}</td>
                <td>{{$item->tgl_lahir}}</td>
                <td>{{$item->umur}}</td>
                <td>{{$item->jkel}}</td>
                <td>{{$item->alamat}}</td>
                <td>{{$item->unit}}</td>
                <td>
                  <a href="/superadmin/penyidik/edit/{{$item->id}}" class="btn btn-sm btn-success"><i class="fa fa-edit"></i> Edit</a>
                  <a href="/superadmin/penyidik/delete/{{$item->id}}" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin dihapus?');"><i class="fa fa-trash"></i> Delete</a>
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
