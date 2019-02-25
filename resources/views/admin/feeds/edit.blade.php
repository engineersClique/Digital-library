@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Feed
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($feed, ['route' => ['admin.feeds.update', $feed->id], 'method' => 'patch']) !!}

                        @include('admin.feeds.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection