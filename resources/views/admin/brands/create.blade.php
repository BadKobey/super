@extends('layouts.admin')

@section('admin-index')

<div class="row">
    <div class="container col-lg-4 create-zone">
        <h3 class="pb-4">Добавить брэнд</h3>
        <form method="post" action="{{route('brands.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="">
                <input type="text" class="form-control" name="name" placeholder="Брэнд">
            </div>

            <div class="col-lg-12 pt-2">
                <textarea id="checkout-mess" name="description" cols="30" rows="10" placeholder="Описание."></textarea>
            </div>

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

    <div class="col-lg-6 col-12">
        <div class="your-order">
            <h3>Информация</h3>
            <H5>Здес ты можешь завести в систему брэнд и создать к нему описание.</H5>

        </div>
    </div>
</div>







@endsection
