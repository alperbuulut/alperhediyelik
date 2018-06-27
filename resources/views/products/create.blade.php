@extends('layouts.app-admin')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Yeni Ürün Oluştur</h1>
            <hr>
            {!! Form::open(array('route' => 'products.store', 'data-parsley-validate' => '', 'files' => true)) !!}

            {{ Form::label('isim_tr', 'Isim Turkce:') }}
            {{ Form::text('isim_tr', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
            {{ Form::label('isim_en', 'Isim Ingilizce:') }}
            {{ Form::text('isim_en', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
            {{ Form::label('isim_ar', 'Isim Arapca:') }}
            {{ Form::text('isim_ar', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

            {{ Form::label('category_id', 'Kategori:') }}
            <select class="form-control" name="category_id">
                @foreach($categories as $category)
                    <option value='{{ $category->id }}'>{{ $category->tr }}</option>
                @endforeach

            </select>

            {{ Form::label('status', 'Durum:') }}
            <select class="form-control" name="status">
                    <option value='A'>Aktif</option>
                    <option value='P'>Pasif</option>
            </select>

            {{ Form::label('featured_img', 'Fotoğraf Yükle') }}
            {{ Form::file('featured_img') }}

            {{ Form::label('body_tr', "Aciklama Turkce:") }}
            {{ Form::textarea('body_tr', null, array('class' => 'form-control')) }}
            {{ Form::label('body_en', "Aciklama Ingilizce:") }}
            {{ Form::textarea('body_en', null, array('class' => 'form-control')) }}
            {{ Form::label('body_ar', "Aciklama Arapca:") }}
            {{ Form::textarea('body_ar', null, array('class' => 'form-control')) }}

            {{ Form::submit('Tamamla', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
            {!! Form::close() !!}
        </div>
    </div>

@endsection