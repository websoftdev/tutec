@extends('layouts.sideBarAlumno')

@section('content')

    <h2>LA MEMORIA</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">CASOS DE ESTUDIO
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">


            </div>

            @if($edit==0)

                <strong>INSTRUCCIONES:</strong> Lea y analice los siguientes casos de estudio a nivel
                individual. Cuando el resto de su grupo haya terminado de leerlo, discutiremos
                cada caso.<br><br>


                <strong>Caso1: Como vivir sin prender nueva información</strong><br>
                El paciente H. M., el caso que ha generado mayor curiosidad científica.
                H.M era un joven de 27 años de edad que padecía crisis epilépticas muy graves, por
                lo que en 1053 fue intervenido quirúrgicamente para intentar curar su enfermedad. El
                neurocirujano canadiense W. Scoville le extirpo las partes internas de los lóbulos
                temporales del cerebro, porque era la zona donde se originaban las crisis que
                padecía y en aquel tiempo se desconocía su papel en la memoria. Después de la
                intervención, H.M., fue casi incapaz de aprender información nueva. No aprendió
                nuevos nombres y no podía regresar a su nueva casa porque le era imposible
                memorizar el trayecto. H.M era consciente de su trastorno y afirmaba: Cada día es
                independiente de los demás, sean cuales sean las alegrías o las penas que haya
                tenido (…). Ahora mismo me pregunto ¿He hecho o dicho algo incorrecto? En este
                momento todo me parece claro, pero ¿Qué acaba de pasar hace un momento?<br>
                Esto es lo que me preocupa. Es como despertar de un sueño; no recuerdo nada. Su
                falta de memoria hacia que repitiese varias veces la misma pregunta o contestase
                la misma pregunta o contase la misma anécdota. Podía leer de forma repetitiva el
                mismo periódico o novela y para él siempre era nuevo. Se reía de un mismo chiste
                contado cien veces. No podía mantener podía mantener largas conversaciones
                porque había olvidado el contenido inicial. Aunque esta incapacidad para aprender
                nueva información era la característica más importante de su trastorno, también
                había perdido parte de la información previamente registrada. Recordaba
                perfectamente su infancia y adolescencia, pero había olvidado la muerte de su ser
                querido que había ocurrido tres años antes de la intervención. Reconocía todos los
                personajes famosos anteriores a 1950, pero no los que habían conseguido su fama
                durante los últimos tres años anteriores de la operación. Conservaba, sin embargo,
                a la memoria y la capacidad de aprendizaje algunas cosas. Así, por ejemplo, podía
                aprender a seguir el trayecto de un laberinto proyectado en un espejo de un modo
                que su habilidad en el seguimiento mejoraba progresivamente tras las repeticiones.
                Sin embargo, cuando se le presentaba el laberinto para realizar de nuevo la tarea
                preguntaba cada vez: ¿Y esto qué es? ¿Qué es lo que tengo que hacer? Lo cual
                no era obstáculo para luego consiguiera hacerlo bien, de acuerdo con el
                entrenamiento alcanzado las anteriores sesiones. Las habilidades conservadas por
                H.M. son denominadas memorias declarativas (procedimentales, hábitos,
                condicionamientos, etc...). Tampoco se modificaron sus hábitos de comportamiento
                social ni su manera habitual de responder. H.M. es el caso más estudiado de la
                literatura neuropsicología por su peculiaridad lesión. Aunque hoy día después de
                cuarenta años, su amnesia continua siendo objeto de estudio.

            <form name="add_fort" id="add_fort" method="post" action="{{url('/store/mem_2')}}">
                {{csrf_field()}}

            <table class="table table-bordered">
                <tr style="color:black; background-color: royalblue;">
                    <td>Proponga preguntas del caso a los compañeros de clase:</td>
                </tr>

                <tr>
                    <td>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dynamic_field">
                                <tr>
                                    <td ><input type="text" name="c1[]" class="form-control name_list center-block"></td>
                                    <td><button type="button" name="add" id="add" class="btn btn-success center-block">Agregar</button></td>
                                </tr>
                            </table>
                        </div>
                    </td>
                </tr>
                <tr style="color:black; background-color: royalblue;">
                    <td>Conclusión del caso:</td>
                </tr>
                <tr>
                    <td>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dynamic_field2">
                                <tr>
                                    <td><textarea name="con1" class="form-control name_list center-block"></textarea></td>
                                </tr>
                            </table>
                        </div>
                    </td>
                </tr>
            </table>

                <div class="row" style="margin-left: 22%;">
                    <input type="submit" name="submit" id="submit" class="btn btn-primary col-sm-8" value="Guardar" />
                </div>

            </form>

            @else

                <div class="alert alert-success">
                    <strong>Aviso!</strong><br>
                    Registro guardado. Es posible editar la actividad.<br>
                    Puede continuar con la siguiente parte.
                </div><br><br>

                <strong>INSTRUCCIONES:</strong> Lea y analice los siguientes casos de estudio a nivel
                individual. Cuando el resto de su grupo haya terminado de leerlo, discutiremos
                cada caso.<br><br>


                <strong>Caso1: Como vivir sin prender nueva información</strong><br>
                El paciente H. M., el caso que ha generado mayor curiosidad científica.
                H.M era un joven de 27 años de edad que padecía crisis epilépticas muy graves, por
                lo que en 1053 fue intervenido quirúrgicamente para intentar curar su enfermedad. El
                neurocirujano canadiense W. Scoville le extirpo las partes internas de los lóbulos
                temporales del cerebro, porque era la zona donde se originaban las crisis que
                padecía y en aquel tiempo se desconocía su papel en la memoria. Después de la
                intervención, H.M., fue casi incapaz de aprender información nueva. No aprendió
                nuevos nombres y no podía regresar a su nueva casa porque le era imposible
                memorizar el trayecto. H.M era consciente de su trastorno y afirmaba: Cada día es
                independiente de los demás, sean cuales sean las alegrías o las penas que haya
                tenido (…). Ahora mismo me pregunto ¿He hecho o dicho algo incorrecto? En este
                momento todo me parece claro, pero ¿Qué acaba de pasar hace un momento?<br>
                Esto es lo que me preocupa. Es como despertar de un sueño; no recuerdo nada. Su
                falta de memoria hacia que repitiese varias veces la misma pregunta o contestase
                la misma pregunta o contase la misma anécdota. Podía leer de forma repetitiva el
                mismo periódico o novela y para él siempre era nuevo. Se reía de un mismo chiste
                contado cien veces. No podía mantener podía mantener largas conversaciones
                porque había olvidado el contenido inicial. Aunque esta incapacidad para aprender
                nueva información era la característica más importante de su trastorno, también
                había perdido parte de la información previamente registrada. Recordaba
                perfectamente su infancia y adolescencia, pero había olvidado la muerte de su ser
                querido que había ocurrido tres años antes de la intervención. Reconocía todos los
                personajes famosos anteriores a 1950, pero no los que habían conseguido su fama
                durante los últimos tres años anteriores de la operación. Conservaba, sin embargo,
                a la memoria y la capacidad de aprendizaje algunas cosas. Así, por ejemplo, podía
                aprender a seguir el trayecto de un laberinto proyectado en un espejo de un modo
                que su habilidad en el seguimiento mejoraba progresivamente tras las repeticiones.
                Sin embargo, cuando se le presentaba el laberinto para realizar de nuevo la tarea
                preguntaba cada vez: ¿Y esto qué es? ¿Qué es lo que tengo que hacer? Lo cual
                no era obstáculo para luego consiguiera hacerlo bien, de acuerdo con el
                entrenamiento alcanzado las anteriores sesiones. Las habilidades conservadas por
                H.M. son denominadas memorias declarativas (procedimentales, hábitos,
                condicionamientos, etc...). Tampoco se modificaron sus hábitos de comportamiento
                social ni su manera habitual de responder. H.M. es el caso más estudiado de la
                literatura neuropsicología por su peculiaridad lesión. Aunque hoy día después de
                cuarenta años, su amnesia continua siendo objeto de estudio.

                <form name="add_fort" id="add_fort" method="post" action="{{url('/edit/mem_2')}}">
                    {{csrf_field()}}

                    <table class="table table-bordered">
                        <tr style="color:black; background-color: royalblue;">
                            <td>Proponga preguntas del caso a los compañeros de clase:</td>
                        </tr>

                        <tr>
                            <td>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dynamic_field_edit_1">
                                        @foreach($f_decode1 as $key=>$value)
                                            <tr id="row_e_1{{$key}}">
                                                <td ><input type="text" name="c1_e[]" class="form-control name_list center-block" value="{{$value}}"></td>
                                                @if($key==1) <td><button type="button" name="add_edit_1" id="add_edit_1" class="btn btn-success center-block">Agregar</button></td> @else <td><button type="button" name="remove_edit_1" id="{{$key}}" class="btn btn-danger btn_remove_edit_1 center-block">X</button></td> @endif
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </td>
                        </tr>
                        <tr style="color:black; background-color: royalblue;">
                            <td>Conclusión del caso:</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dynamic_field_edit_2">
                                        <tr>
                                            <td><textarea name="con1_e" class="form-control name_list center-block">{{$f_decode2}}</textarea></td>
                                        </tr>
                                    </table>
                                </div>
                            </td>
                        </tr>
                    </table>

                    <div class="row" style="margin-left: 22%;">
                        <input type="submit" name="submit" id="submit" class="btn btn-primary col-sm-8" value="Editar" />
                    </div>

                </form>


            @endif

        </div>
    </div>

  <div class="center-block" style="margin-left:23%">
    <nav aria-label="Page navigation">
        <ul class="pagination center-block">
            <li>
                <a href="{{url('/mem_1')}}" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li><a href="{{url('/mem_1')}}">Ejercicio 1</a></li>
            <li><a href="{{url('/mem_2')}}" style="background-color: lightgray;">Ejercicio 2</a></li>
            <li><a href="{{url('/mem_3')}}">Ejercicio 3</a></li>
            <li><a href="{{url('/mem_4')}}">Ejercicio 4</a></li>
            <li>
                <a href="{{url('/mem_3')}}" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
  </div>
@stop

@section('scripts')
<script>
    $(document).ready(function(){
        var i=1;

        $('#add').click(function(){
            i++;
            $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="c1[]" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove center-block">X</button></td></tr>');
        });

        $(document).on('click', '.btn_remove', function(){
            var button_id = $(this).attr("id");
            $('#row'+button_id+'').fadeOut();
        });

    });

</script>

<script>
    $(document).ready(function(){


        var i= $('#dynamic_field_edit_1').length;

        $('#add_edit_1').click(function(){
            i++;
            $('#dynamic_field_edit_1').append('<tr id="row_e_1'+i+'" class="dynamic-added"><td><input type="text" name="c1_e[]" class="form-control name_list" /></td><td><button type="button" name="remove_edit_1" id="'+i+'" class="btn btn-danger btn_remove_edit_1 center-block">X</button></td></tr>');
        });

        $(document).on('click', '.btn_remove_edit_1', function(){
            var button_id = $(this).attr("id");
            $('#row_e_1'+button_id+'').remove();
        });

    });
</script>
@stop
