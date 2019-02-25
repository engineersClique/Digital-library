@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Identifier
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($identifier, ['route' => ['admin.identifiers.update', $identifier->id], 'method' => 'patch']) !!}

                        @include('admin.identifiers.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection