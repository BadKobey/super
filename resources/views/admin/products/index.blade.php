@extends('layouts.admin')

@section('admin-index')




<div class="Container">
    <div class="button-wrap py-4">
        <a class="btn btn-custom-size btn-primary" href="{{route('products.create')}}">Добавить</a>
    </div>


    <div class="widgets-searchbox widgets-area py-6 mb-9">
        <form id="widgets-searchbox" method="GET" action="{{ route('products.index')}}" accept-charset="UTF-8" role="search">
            <input class="input-field" type="text" placeholder="Поиск" name="search" value="{{ request('search') }}">
            <button class="widgets-searchbox-btn" type="submit">
                <i class="pe-7s-search"></i>
            </button>
        </form>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th class="product_remove">фото</th>
                    <th class="product-thumbnail">Артикул</th>
                    <th class="product-thumbnail">Номенклатура</th>
                    <th class="product-thumbnail">Цена</th>
                    <th class="product-thumbnail">Каличество</th>
                    <th class="product-thumbnail">Склад</th>
                    <th class="product-thumbnail">Брэнд</th>

                    <th class="product-thumbnail">Действие</th>
                </tr>
            </thead>
            @if (count($products)>0)
            @foreach($products as $product)
            <tbody>
                <tr>
                    <th scope="row"><img src="#" alt="product"></th>
                    <td>>{{$product->article}}</td>
                    <td>{{$product->nomenclature}}</td>
                    <td>{{$product->price}} руб.</td>
                    <td>{{$product->count}}</td>
                    <td>{{$product->stock_id}}</td>
                    <td>{{$product->brand_id}}</td>
                    <td class="d-flex flex-row-reverse">
                        <a href="{{route('products.edit', $product->id)}}" class="btn btn-dark btn-primary-hover"><span>Изменить</span></a>
                        <form method="post" action="{{route('products.destroy', $product->id)}}">
                            @method('delete')
                            @csrf
                            <button class="btn "><i class="pe-7s-trash" data-tippy="Remove" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder"></i></button>
                        </form>
                    </td>


                </tr>
                @endforeach
                @else
                <p>Брэнд не найден</p>
                @endif

            </tbody>
        </table>

    </div>

    {{$products->Links('layouts.pagination')}}

</div>

@endsection
