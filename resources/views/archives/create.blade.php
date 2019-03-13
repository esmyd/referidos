@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Archive
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'archives.store','enctype' => 'multipart/form-data']) !!}
                    {{csrf_field()}}
                        @include('archives.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
