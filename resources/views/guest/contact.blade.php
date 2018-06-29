@extends('layouts.app')

@section('content')

    <div class="page-content" style="margin-top: 100px;">

        <div class="container">
            <div class="row">
                {!! Form::open(['route'=>'contactus.store']) !!}

                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                    <label for="name">@lang('mail.name')</label>
                    {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Enter Name']) !!}
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                </div>

                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    <label for="name">@lang('mail.email')</label>
                    {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter Email']) !!}
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                </div>

                <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
                    <label for="name">@lang('mail.message')</label>
                    {!! Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Enter Message']) !!}
                    <span class="text-danger">{{ $errors->first('message') }}</span>
                </div>

                <div class="form-group">
                    <button class="btn btn-success">@lang('mail.submit')</button>
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection