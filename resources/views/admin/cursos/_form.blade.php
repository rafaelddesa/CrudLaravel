<div class="input-field">
  <input type="text" placeholder="Título" name="titulo" value="{{isset($registro->titulo) ? $registro->titulo : ''}}">
    
  </div>
  
  <div class="input-field">
      <input type="text" placeholder="Descrição" name="descricao" value="{{isset($registro->descricao) ? $registro->descricao : ''}}">
  </div>
  
  <div class="input-field">
    <input type="text" placeholder="Valor" name="valor" value="{{isset($registro->valor) ? $registro->valor : ''}}">
  </div>
  
  <div class="file-fild  input-field">

    <div class="btn blue">
        <span>Imagem</span>
        <input type="file" name="imagem">
    </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
  </div>
    @if(isset($registro->imagem))
      <div class="input-field">
        <img width="60" src="{{asset($registro->imagem)}}" />
      </div>
    @endif
    
  
  <div class="">
    <p>
        <input type="checkbox" id="test5" name="publicado" {{isset($registro->publicado) && $registro->publicado == 'sim' ? 'checked' : '' }} value="true" />
        <label for="test5">Publicar?</label>
      </p>
      <br><br>
  </div>
      