@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Tasks</div>

                    <div class="panel-body">
                      our form
                        {!! Form::open(array('route' => 'task.store' )) !!}
                            <div class="from-group">
                                {!! Form::label('title','Enter Title') !!}
                                {!! Form::text('title',null,['class' => 'form-control']) !!}
                            </div>

                        <div class="from-group">
                            {!! Form::label('body','Enter Body') !!}
                            {!! Form::textarea('body',null,['class' => 'form-control']) !!}
                        </div>

                        <div class="from-group">
                                {!! Form::button('Create',['type' => 'submit', 'class' => 'btn btn-primary']) !!}
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>

                @if($errors->has())
                    <ul class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            {{ $error }}
                        @endforeach
                    </ul>
                @endif

            </div>
        </div>
    </div>
@endsection
