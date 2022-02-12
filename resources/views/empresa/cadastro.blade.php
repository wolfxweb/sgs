@extends('layouts.app')


@section('content')

    @component('component.cardFormulario',['titulo'=>"Cadastro"])


    <form class="p-2" method="POST" action="{{ route('cadastrar') }}">
        @csrf
        <div class="row ">
            @php
                $inputs[0] =[ 'id'=>'nome','name'=>'nome','type'=>'text','placeholder'=>'Digite o seu nome','for'=>'nome','classDiv1'=>'col-md-12 pt-1 pb-1','classDiv2'=>'form-floating','classInput'=>'form-control','value'=>'','label'=>"Digite o seu nome"];
                $inputs[1] =[ 'id'=>'nome','name'=>'nome','type'=>'text','placeholder'=>'Digite o seu nome','for'=>'nome','classDiv1'=>'col-md-12 pt-1 pb-1 ','classDiv2'=>'form-floating','classInput'=>'form-control','value'=>'','label'=>"Digite o seu nome"];
                $inputs[2] =[ 'id'=>'nome','name'=>'nome','type'=>'text','placeholder'=>'Digite o seu nome','for'=>'nome','classDiv1'=>'col-md-12 pt-1 pb-1','classDiv2'=>'form-floating','classInput'=>'form-control','value'=>'','label'=>"Digite o seu nome"];
                $inputs[3] =[ 'id'=>'nome','name'=>'nome','type'=>'text','placeholder'=>'Digite o seu nome','for'=>'nome','classDiv1'=>'col-md-12 pt-1 pb-1','classDiv2'=>'form-floating','classInput'=>'form-control','value'=>'','label'=>"Digite o seu nome"];
                $inputs[4] =[ 'id'=>'nome','name'=>'nome','type'=>'text','placeholder'=>'Digite o seu nome','for'=>'nome','classDiv1'=>'col-md-12 pt-1 pb-1','classDiv2'=>'form-floating','classInput'=>'form-control','value'=>'','label'=>"Digite o seu nome"];
            @endphp
            @include('component.input', $inputs[0])
            @include('component.input', $inputs[1])
            @include('component.input', $inputs[2])
            @include('component.input', $inputs[3])
            @include('component.input', $inputs[4])
        </div>
        <div class="row mb-0 mt-2">
            <div class="col-md-12 ">
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
            </div>
        </div>
    </form>

    @endcomponent
@endsection

