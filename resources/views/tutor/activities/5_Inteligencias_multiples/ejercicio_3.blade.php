@extends('layouts.sideBarAlumno')

@section('content')

    <h2>INTELIGENCIAS MULTIPLES</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">EJERCICIO
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">


                <p style="text-align: center;">
                    <strong>Aptitud Lógica</strong><br>
                </p>

                <p>
                    <strong>3. Aptitud Lógica: </strong> Se practica el razonamiento en cuanto a su validez o
                    invalidez, y se ejercitan los métodos inductivos e investigación operativa.
                </p><br>

                <strong>EJERCICIOS PARA DESARROLLAR LA LÓGICA</strong><br>

                <p>
                    I. EN BÚSQUEDA DE EVIDENCIAS
                    Te presentan cuatro tarjetas diciéndote que las de dorso gris claro tienen
                    círculos en la otra cara, y las de dorso negro no. Dos de las tarjetas están con
                    el dorso hacia arriba, y las otras dos hacia abajo. ¿Cuál es el mínimo de
                    tarjetas que deberás dar vuelta para probar la verdad o falsedad de la
                    afirmación acerca de que hay un círculo en la otra cara de las tarjetas de
                    dorso gris claro?
                </p>

                <div style="margin-left: 23%">
                    <img width="400" height=200" src="images/5_Inteligencias_multiples/log1.png">
                </div>

                @if($edit==0)


                {!! Form::open(['method'=>'POST', 'action'=>'TutorInteligenciasController@store_int_mult_ej_3']) !!}

                    @if($log1 != NULL)

                    <table>
                    <tr>
                        <div class="form-group">
                            <td>{!! Form::label('r1.1', 'R=') !!}</td>
                            <td class="col-sm-12">{!! Form::label('num_1_e', $log1, ['class'=>'form-control']) !!}</td>
                        </div>
                    </tr>
                </table><br>

                    @else

                        <div class="alert alert-danger" style="margin-left: 15%;margin-right: 15%; margin-top: 3%; text-align: center;">
                            <strong>Aviso!</strong><br>
                            El alumno no ha entregado esta parte de la actividad.
                        </div><br>

                    @endif

                <table class="col-lg-12">
                    <tr>
                        <td><strong>Retroalimentación:</strong></td>
                    </tr>

                    <tr>
                        <td>
                            <br>
                            <textarea rows="5" name ="retro3" class="form-control"></textarea>
                            <br>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <br>
                            <strong>Calificación:</strong>
                            <br><br>
                            <input type="text" name="cal3" class="form-control name_list center-block">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <br><br>
                            <input type="submit" name="submit" id="submit" class="btn btn-primary form-control" value="Guardar" />
                        </td>
                    </tr>
                </table>

                {!! Form::close() !!}

             @else

                    {!! Form::open(['method'=>'POST', 'action'=>'TutorInteligenciasController@edit_int_mult_ej_3']) !!}

                    @if($log1 != NULL)

                    <table>
                        <tr>
                            <div class="form-group">
                                <td>{!! Form::label('r1.1', 'R=') !!}</td>
                                <td class="col-sm-12">{!! Form::label('num_1_e', $log1, ['class'=>'form-control']) !!}</td>
                            </div>
                        </tr>
                    </table><br>

                    @else

                        <div class="alert alert-danger" style="margin-left: 15%;margin-right: 15%; margin-top: 3%; text-align: center;">
                            <strong>Aviso!</strong><br>
                            El alumno no ha entregado esta parte de la actividad.
                        </div><br>

                    @endif

                    <table class="col-lg-12">
                        <tr>
                            <td><strong>Retroalimentación:</strong></td>
                        </tr>

                        <tr>
                            <td>
                                <br>
                                <textarea rows="5" name ="retro_e" class="form-control">{{$retro}}</textarea>
                                <br>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br>
                                <strong>Calificación:</strong>
                                <br><br>
                                <input type="text" name="cal_e" class="form-control name_list center-block" value="{{$cal}}">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br><br>
                                <input type="submit" name="submit" id="submit" class="btn btn-primary form-control" value="Editar" />
                            </td>
                        </tr>
                    </table>

                    {!! Form::close() !!}

            @endif

            </div>







        </div>
    </div>

  <div class="center-block" style="margin-left:35%">
    <nav aria-label="Page navigation">
        <ul class="pagination center-block">
            <li>
                <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li>
                <a href="#" aria-label="Next">
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
            $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove center-block">X</button></td></tr>');
        });

        $(document).on('click', '.btn_remove', function(){
            var button_id = $(this).attr("id");
            $('#row'+button_id+'').fadeOut();
        });

    });

</script>
@stop
