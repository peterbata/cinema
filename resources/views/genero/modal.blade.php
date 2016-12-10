{{--MODAL PARA ACTUALIZAR--}}
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="myModalLabel">Actualizar Género</h4>
    </div>
    <div class="modal-body">

      <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> {{--input de modo oculto para que laravel no piense que son mal intencionadas las peticiones--}}
      <input type="hidden" id="id"> {{--otro input de tipo oculto donde asignaremos el ID correspondiente al genero --}}

      @include('genero.form.genero') {{--subvista de formulario para actualizar el genero, que es el mismo del CREAR GENERO--}}

    </div>
    <div class="modal-footer">
      {{--TENEMOS NUESTRO link_to tenemos el id actualizar que desencaenara el evento, para que nosotros podamos enviar la informacion y para poderla procesar para actualizar este genero--}}
    {!!link_to('#', $title='Actualizar', $attributes = ['id'=>'actualizar', 'class'=>'btn btn-primary'], $secure = null)!!}
    </div>
  </div>
</div>
</div>
