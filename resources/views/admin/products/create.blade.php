@extends('layouts.admin')

@section('admin-index')

<div class="row">
<div class="container create-zone">
    <h3 class="pb-4">Добавить продукт</h3>
    <form method="post" action="{{route('products.store')}}" enctype="multipart/form-data">
        @csrf

            <div class="py-2 "><input type="text" class="form-control" name="article" placeholder="артикул" ></div>
            <div class="py-2 "><input type="text" class="form-control" name="nomenclature" placeholder="номенклатура"></div>


            <div class="py-2 "><input type="text" class="form-control" name="price" placeholder="цена" ></div>
            <div class="py-2 "><input type="text" class="form-control" name="count" placeholder="каличество"></div>


            <div class="py-2 "><input type="text" class="form-control" name="stock_id" placeholder="склады" ></div>
            <div class="py-2 ">
                <label>Добавить изображение</label>.
                <img src="" alt="" class="img-product" id="file-preview">
                <input type="file" name="image" accept="image/*" onchange="showFile(event)">
            </div>


            <div class="py-2 "><input type="text" class="form-control" name="brand_id" placeholder="брэнд" ></div>


        <div class="py-4">
            <button class="btn btn-outline-success " type="submit">
            {{ __('Добавить') }}
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
