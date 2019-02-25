@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Author
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($author, ['route' => ['admin.authors.update', $author->id], 'method' => 'patch']) !!}

                        @include('admin.authors.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection