@extends('layouts.app-admin')


@section('content')

    <div class="row">
        {!! Form::model($product, ['route' => ['products.update', $product->id], 'method' => 'PUT']) !!}
        <div class="col-md-8">
            {{ Form::label('pname_tr', 'Isim Turkce:') }}
            {{ Form::text('pname_tr', null, ["class" => 'form-control input-lg']) }}
            {{ Form::label('pname_en', 'Isim Ingilizce:') }}
            {{ Form::text('pname_en', null, ["class" => 'form-control input-lg']) }}
            {{ Form::label('pname_ar', 'Isim Arapca:') }}
            {{ Form::text('pname_ar', null, ["class" => 'form-control input-lg']) }}

            {{ Form::label('category_id', "Category:", ['class' => 'form-spacing-top']) }}
            {{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}

            {{ Form::label('pdesc_tr', "Turkce Aciklama:", ['class' => 'form-spacing-top']) }}
            {{ Form::textarea('pdesc_tr', null, ['class' => 'form-control']) }}
            {{ Form::label('pdesc_en', "Ingilizce Aciklama:", ['class' => 'form-spacing-top']) }}
            {{ Form::textarea('pdesc_en', null, ['class' => 'form-control']) }}
            {{ Form::label('pdesc_ar', "Arapca Aciklama:", ['class' => 'form-spacing-top']) }}
            {{ Form::textarea('pdesc_ar', null, ['class' => 'form-control']) }}
        </div>

        <div class="col-md-4">
            <div class="well">
                <dl class="dl-horizontal">
                    <dt>Created At:</dt>
                    <dd>{{ date('M j, Y h:ia', strtotime($product->created_at)) }}</dd>
                </dl>

                <dl class="dl-horizontal">
                    <dt>Last Updated:</dt>
                    <dd>{{ date('M j, Y h:ia', strtotime($product->updated_at)) }}</dd>
                </dl>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        {!! Html::linkRoute('products.show', 'Cancel', array($product->id), array('class' => 'btn btn-danger btn-block')) !!}
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