@extends('layouts.admin')

@section('admin-index')
<div class="row">
    <div class="container col-lg-4 create-zone">
        <h3 class="pb-4">Редактировать транспорт</h3>
        <form method="post" action="{{route('transports.update', $transport->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="py-2"><input type="text" class="form-control" name="marka" placeholder="Название транспорта" value="{{$transport->marka}}"></div>

            <div><input type="text" class="form-control" name="gos_nomer" placeholder="ИНН транспорта" value="{{$transport->gos_nomer}}"></div>



            <div class="py-4">
                <input type="hidden" name="hidden_id" value="{{$transport->id}}">
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
            <H5>Здесь ты можешь редактировать транспорт.</H5>

        </div>
    </div>
</div>

@endsection
