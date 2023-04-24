@extends('layouts.admin')

@section('admin-index')




<div class="Container">
    <div class="button-wrap py-4">
        <a class="btn btn-custom-size btn-primary" href="{{route('brands.create')}}">Добавить</a>
    </div>


    <div class="widgets-searchbox widgets-area py-6 mb-9">
        <form id="widgets-searchbox" method="GET" action="{{ route('brands.index')}}" accept-charset="UTF-8" role="search">
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
                    <th class="product_remove">Название</th>
                    <th class="product-thumbnail">Описание</th>
                    <th class="product-thumbnail">Действие</th>
                </tr>
            </thead>
            @if (count($brands)>0)
            @foreach($brands as $brand)
            <tbody>
                <tr>
                    <td class="product-name"><a href="#">{{$brand->name}}</a></td>
                    <td class="product-price"><span class="amount">{{$brand->description}}</span></td>
                    <td class="d-flex flex-row-reverse">

                        <a href="{{route('brands.edit', $brand->id)}}" class="btn btn-dark btn-primary-hover"><span>Изменить</span></a>
                        <form method="post" action="{{route('brands.destroy', $brand->id)}}">
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

    {{$brands->Links('layouts.pagination')}}

</div>

@endsection
