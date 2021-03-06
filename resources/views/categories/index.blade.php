@extends('layouts.app-admin')

@section('content')

    <div class="row">
        <div class="col-md-10">
            <h1>Tüm Ürünler</h1>
        </div>

        <div class="col-md-2">
            <a href="{{ route('categories.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Yeni Kategori</a>
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
                <th>Durum</th>
                <th>Kategori Adı</th>
                <th>Slug</th>
                <th>Oluşturulma Tarihi</th>
                </thead>

                <tbody>


                @foreach ($categories as $category)

                    <tr>
                        <th>{{ $category->id }}</th>
                        <td>{{ $category->status == 'A' ? 'Aktif' : 'Pasif' }}</td>
                        <td>{{ $category->tr }}</td>
                        <td>{{ $category->slug }}</td>
                        <td>{{ date('M j, Y', strtotime($category->created_at)) }}</td>
                        <td><a href="{{ url('categories/show/'.$category->id) }}" class="btn btn-default btn-sm">Goster</a> <a href="{{ url('categories/'.$category->id.'/edit') }}" class="btn btn-default btn-sm">Duzenle</a></td>
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