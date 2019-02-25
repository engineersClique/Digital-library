@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Book
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($book, ['route' => ['admin.books.update', $book->id], 'method' => 'patch']) !!}

                        @include('admin.books.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection