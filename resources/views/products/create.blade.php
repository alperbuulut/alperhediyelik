@extends('layouts.app-admin')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Yeni Ürün Oluştur</h1>
            <hr>
            {!! Form::open(array('route' => 'products.store', 'data-parsley-validate' => '', 'files' => true)) !!}

            {{ Form::label('pname_tr', 'Isim Turkce:') }}
            {{ Form::text('pname_tr', null, array('class' => 'form-control')) }}
            {{ Form::label('pname_en', 'Isim Ingilizce:') }}
            {{ Form::text('pname_en', null, array('class' => 'form-control')) }}
            {{ Form::label('pname_ar', 'Isim Arapca:') }}
            {{ Form::text('pname_ar', null, array('class' => 'form-control')) }}

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

            {{ Form::label('pdesc_tr', "Aciklama Turkce:") }}
            {{ Form::textarea('pdesc_tr', null, array('class' => 'form-control')) }}
            {{ Form::label('pdesc_en', "Aciklama Ingilizce:") }}
            {{ Form::textarea('pdesc_en', null, array('class' => 'form-control')) }}
            {{ Form::label('pdesc_ar', "Aciklama Arapca:") }}
            {{ Form::textarea('pdesc_ar', null, array('class' => 'form-control')) }}

            {{ Form::submit('Tamamla', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
            {!! Form::close() !!}
        </div>
    </div>

@endsection