@extends('layouts.app-admin')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Yeni Kategori Oluştur</h1>
            <hr>
            {!! Form::open(array('route' => 'categories.store', 'data-parsley-validate' => '', 'files' => true)) !!}

            {{ Form::label('cname_tr', 'Isim Turkce:') }}
            {{ Form::text('cname_tr', null, array('class' => 'form-control')) }}
            {{ Form::label('cname_en', 'Isim Ingilizce:') }}
            {{ Form::text('cname_en', null, array('class' => 'form-control')) }}
            {{ Form::label('cname_ar', 'Isim Arapca:') }}
            {{ Form::text('cname_ar', null, array('class' => 'form-control')) }}

            {{ Form::label('slug', 'Slug:') }}
            {{ Form::text('slug', null, array('class' => 'form-control')) }}


            {{ Form::label('featured_img', 'Fotoğraf Yükle') }}
            {{ Form::file('featured_img') }}

            {{ Form::label('status', 'Durum:') }}
            <select class="form-control" name="status">
                <option value='A'>Aktif</option>
                <option value='P'>Pasif</option>
            </select>

            {{ Form::submit('Tamamla', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
            {!! Form::close() !!}
        </div>
    </div>

@endsection