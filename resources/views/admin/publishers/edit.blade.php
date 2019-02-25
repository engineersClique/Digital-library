@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Publisher
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($publisher, ['route' => ['admin.publishers.update', $publisher->id], 'method' => 'patch']) !!}

                        @include('admin.publishers.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection