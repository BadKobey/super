@extends('layouts.admin')

@section('admin-index')
<div class="row">
<div class="container create-zone">
    <h3 class="pb-4">Редактировать продукт</h3>
    <form method="post" action="{{route('products.update', $product->id)}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

            <div class="py-2 "><input type="text" class="form-control" name="article" placeholder="артикул" value="{{$product->article}}" ></div>
            <div class="py-2 "><input type="text" class="form-control" name="nomenclature" placeholder="номенклатура" value="{{$product->nomenclature}}"></div>


            <div class="py-2 "><input type="text" class="form-control" name="price" placeholder="цена" value="{{$product->price}}"></div>
            <div class="py-2 "><input type="text" class="form-control" name="count" placeholder="каличество" value="{{$product->count}}"></div>


            <div class="py-2 "><input type="text" class="form-control" name="stock_id" placeholder="склады"  value="{{$product->stock_id}}"></div>
            <div class="py-2 ">
                <label>Добавить изображение</label>
                <img src="{{asset('image/', $product->image) }}" alt="" class="img-product" id="file-preview">
                <input type="hidden" name="hidden_product_image" value="{{ $product->image }}">
                <input type="file" name="image" accept="image/*" onchange="showFile(event)">
            </div>

            <div class="py-2 "><input type="text" class="form-control" name="brand_id" placeholder="брэнд" value="{{$product->brand_id}}"></div>


        <div class="py-4">
        <input type="hidden" name="hidden_id" value="{{$product->id}}">
            <button class="btn btn-outline-success " type="submit">

            {{ __('Редактировать') }}
            </button>
        </div>
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>
</div>

</div>

@endsection
