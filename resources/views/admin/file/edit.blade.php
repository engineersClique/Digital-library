@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            file
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($file, ['route' => ['admin.file.update', $file->id], 'method' => 'patch']) !!}

                        @include('admin.file.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection