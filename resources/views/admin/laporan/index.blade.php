@extends('layouts.app')
@push('css')
    
@endpush
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="box box-success">
          <div class="box-header">
            <i class="ion ion-clipboard"></i><h3 class="box-title">Data Laporan</h3>

            <div class="box-tools">
              
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body table-responsive">
            <a href="/superadmin/laporan/kpp" target="_blank" class="btn btn-sm btn-success">LAP. TINDAKAN KPP</a>
            <a href="/superadmin/laporan/kpa" target="_blank" class="btn btn-sm btn-success">LAP. TINDAKAN KPA</a>
          </div>
          <!-- /.box-body -->
        </div>
        
        <!-- /.box -->
      </div>
</div>

@endsection
@push('js')

@endpush
