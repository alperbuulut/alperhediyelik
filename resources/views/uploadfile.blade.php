@extends('layouts.app')

@section('content')
    <html>
        <body>
            {{  Form::open(array('url' => '/uploadfile','files'=>'true'))  }}
            {{  Form::label('image', 'Select the File to Upload') }}
            {{  Form::file('image', ['class' => 'btn btn-lg btn-primary btn-block']) }}
            {{  Form::submit('Upload File', ['class' => 'btn btn-success btn-lg btn-block']) }}
            {{  Form::close()  }}
        </body>
    </html>
@endsection