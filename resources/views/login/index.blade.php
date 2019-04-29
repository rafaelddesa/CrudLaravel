@extends('layout.site')

@section('titulo','Cursos')

@section('conteudo')
  <div class="container">
    <h3 class="center">Entrar</h3>
    <div class="row">
      <form class="" action="{{route('site.login.entrar')}}" method="post">
        {{ csrf_field() }}

        <div class="input-field">
          <input type="text" placeholder="Email" name="email">

        </div>
        <div class="input-field">
          <input type="password" placeholder="Senha" name="senha">
        </div>

        <button class="btn deep-orange">Entrar</button>
      </form>
    </div>
  </div>




@endsection
