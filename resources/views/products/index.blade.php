@extends('layouts.app-admin')

@section('content')

    <div class="row">
        <div class="col-md-10">
            <h1>Tüm Ürünler</h1>
        </div>

        <div class="col-md-2">
            <a href="{{ route('products.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Yeni Ürün Oluştur</a>
        </div>
        <div class="col-md-12">
            <hr>
        </div>
    </div> <!-- end of .row -->

    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <th>#</th>
                <th>Kategori ID</th>
                <th>Ürün Adı</th>
                <th>Açıklama</th>
                <th>Dosya Yolu</th>
                <th>Oluşturulma Tarihi</th>
                </thead>

                <tbody>


                @foreach ($products as $product)

                    <tr>
                        <th>{{ $product->id }}</th>
                        <td>{{ $product->category_id }}</td>
                        <td>{{ $product->pname_tr }}</td>
                        <td>{{ substr($product->pdesc_tr, 0, 40) }}{{ strlen(strip_tags($product->pdesc_tr)) > 40 ? "..." : "" }}</td>
                        <td>{{ $product->img_path }}</td>
                        <td>{{ date('M j, Y', strtotime($product->created_at)) }}</td>
                        <td><a href="{{ url('/products/show/'.$product->id) }}" class="btn btn-default btn-sm">Goster</a> <a href="{{ url('/products/'.$product->id.'/edit') }}" class="btn btn-default btn-sm">Duzenle</a></td>
                    </tr>

                @endforeach

                </tbody>
            </table>

            {{--<div class="text-center">--}}
                {{--{!! $posts->links(); !!}--}}
            {{--</div>--}}
        </div>
    </div>

@endsection
