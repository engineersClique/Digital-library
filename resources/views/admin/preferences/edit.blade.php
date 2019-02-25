@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Preference
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($preference, ['route' => ['admin.preferences.update', $preference->id], 'method' => 'patch']) !!}

                        @include('admin.preferences.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection