@extends('layouts.app-admin')

@section('content')

    <div class="row">
        {!! Form::model($category, ['route' => ['categories.update', $category->id], 'method' => 'PUT', 'files' => true]) !!}
        <div class="col-md-8 col-md-offset-2">
            <h1>Ürün Düzenleme</h1>
            <hr>
            {{ Form::label('tr', 'Isim Turkce:') }}
            {{ Form::text('tr', null, ["class" => 'form-control input-lg']) }}
            {{ Form::label('en', 'Isim Ingilizce:') }}
            {{ Form::text('en', null, ["class" => 'form-control input-lg']) }}
            {{ Form::label('ar', 'Isim Arapca:') }}
            {{ Form::text('ar', null, ["class" => 'form-control input-lg']) }}

            {{ Form::label('slug', 'Slug:') }}
            {{ Form::text('slug', null, ["class" => 'form-control input-lg']) }}

            {{ Form::label('featured_img', 'Fotoğraf Yükle') }}
            {{ Form::file('featured_img') }}

            {{ Form::label('status', 'Durum:') }}
            <select class="form-control" name="status">
                <option value='A' {{ $category->status == 'A' ? 'selected' : '' }}>Aktif</option>
                <option value='P' {{ $category->status != 'A' ? 'selected' : '' }}>Pasif</option>
            </select>
        </div>

        <div class="col-md-4 col-md-offset-4" style="margin-top: 25px;">
            <div class="well">
                <dl class="dl-horizontal">
                    <dt>Created At:</dt>
                    <dd>{{ date('M j, Y h:ia', strtotime($category->created_at)) }}</dd>
                </dl>

                <dl class="dl-horizontal">
                    <dt>Last Updated:</dt>
                    <dd>{{ date('M j, Y h:ia', strtotime($category->updated_at)) }}</dd>
                </dl>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        {!! Html::linkRoute('categories.show', 'Cancel', array($category->id), array('class' => 'btn btn-danger btn-block')) !!}
                    </div>
                    <div class="col-sm-6">
                        {{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) }}
                    </div>
                </div>

            </div>
        </div>
        {!! Form::close() !!}
    </div>	<!-- end of .row (form) -->
    
@endsection