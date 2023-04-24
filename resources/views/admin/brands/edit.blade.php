@extends('layouts.admin')

@section('admin-index')
<div class="row">
    <div class="container col-lg-4 create-zone">
        <h3 class="pb-4">Редактировать брэнд</h3>
        <form method="post" action="{{route('brands.update', $brand->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div><input type="text" class="form-control" name="name" placeholder="Название брэнда" value="{{$brand->name}}"></div>



            <div class="col-lg-12 pt-2">
                <textarea id="checkout-mess" name="description" cols="30" rows="10" value="{{$brand->description}}">{{ $brand->description }}</textarea>
            </div>



            <div class="py-4">
                <input type="hidden" name="hidden_id" value="{{$brand->id}}">
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

    <div class="col-lg-6 col-12">
        <div class="your-order">
            <h3>Информация</h3>
            <H5>Здес ты можешь редактировать брэнд и создать к нему описание.</H5>

        </div>
    </div>
</div>

@endsection
