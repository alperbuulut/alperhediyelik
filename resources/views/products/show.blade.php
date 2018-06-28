@extends('layouts.app-admin')

@section('content')

    <div class="row">
        <div class="col-md-8">
            <h1>{{ $product->pname_tr }}</h1>

            <p class="lead">{!! $product->pdesc_tr !!}</p>

            <hr>
        </div>

        <div class="col-md-4">
            <div class="well">
                <dl>
                    <label>Fotoğraf</label><br>
                    <img src="{{ $product->img_path }}" alt="" width="300px" height="300px">
                </dl>
                <dl>
                    <label>Durum:</label>
                    {{ $product->status == 'A' ? 'Aktif' : 'Pasif' }}
                </dl>
                <dl class="dl-horizontal">
                    <label>Kategori:</label>
                    {{ $catname[0]->tr }}
                </dl>

                <dl class="dl-horizontal">
                    <label>Oluşturulma Tarihi:</label>
                    <p>{{ date('M j, Y h:ia', strtotime($product->created_at)) }}</p>
                </dl>

                <dl class="dl-horizontal">
                    <label>Son Değişiklik:</label>
                    <p>{{ date('M j, Y h:ia', strtotime($product->updated_at)) }}</p>
                </dl>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        {!! Html::linkRoute('products.edit', 'Düzenle', array($product->id), array('class' => 'btn btn-primary btn-block')) !!}
                    </div>
                    <div class="col-sm-6">
                        {!! Form::open(['route' => ['products.destroy', $product->id], 'method' => 'DELETE']) !!}

                        {!! Form::submit('Sil', ['class' => 'btn btn-danger btn-block']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        {{ Html::linkRoute('products.index', '<< Tüm Ürünler', array(), ['class' => 'btn btn-default btn-block btn-h1-spacing']) }}
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection