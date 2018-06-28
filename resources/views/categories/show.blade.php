@extends('layouts.app-admin')

@section('content')

    <div class="row">
        <div class="col-md-8">
            <h1><strong>Kategori: </strong>{{ $category->tr }}</h1>

            <hr>
        </div>

        <div class="col-md-4">
            <div class="well">
                <dl>
                    <label>Durum:</label>
                    {{ $category->status == 'A' ? 'Aktif' : 'Pasif' }}
                </dl>

                <dl class="dl-horizontal">
                    <label>Oluşturulma Tarihi:</label>
                    <p>{{ date('M j, Y h:ia', strtotime($category->created_at)) }}</p>
                </dl>

                <dl class="dl-horizontal">
                    <label>Son Değişiklik:</label>
                    <p>{{ date('M j, Y h:ia', strtotime($category->updated_at)) }}</p>
                </dl>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        {!! Html::linkRoute('categories.edit', 'Düzenle', array($category->id), array('class' => 'btn btn-primary btn-block')) !!}
                    </div>
                    <div class="col-sm-6">
                        {!! Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'DELETE']) !!}

                        {!! Form::submit('Sil', ['class' => 'btn btn-danger btn-block']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        {{ Html::linkRoute('categories.index', '<< Tüm Kategoriler', array(), ['class' => 'btn btn-default btn-block btn-h1-spacing']) }}
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection