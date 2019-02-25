@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Series
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($series, ['route' => ['admin.series.update', $series->id], 'method' => 'patch']) !!}

                        @include('admin.series.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection