@extends('layouts.sideBarAlumno')

@section('content')

    <h2>HABILIDADES BÁSICAS DE PENSAMIENTO</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Ejercicio
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">

                <strong><p style="text-align: center;">Búsqueda de relaciones de correspondencia</p></strong><br>

                <strong>INSTRUCCIONES:</strong> Seleccione de las propuestas que se enuncian, la que
                establezca una relación de semejanza con la interrogante. Posteriormente, deberá
                fundamentar la elección por escrito.<br><br>

                @if($edit==0)

                {!! Form::open(['method'=>'POST', 'action'=>'TutorPensamientosController@store_pens_4']) !!}

                    @if($t1_1 != NULL && $t1_2 != NULL && $t1_3 != NULL && $t1_4 != NULL && $t1_5 != NULL && $t2_1 != NULL && $t2_2 != NULL && $t2_3 != NULL && $t2_4 != NULL && $t2_5 != NULL && $t3_1 != NULL && $t3_2 != NULL && $t3_3 != NULL && $t3_4 != NULL && $t3_5 != NULL && $t4_1 != NULL && $t4_2 != NULL && $t4_3 != NULL && $t4_4 != NULL && $t4_5 != NULL)

                    <ol>

                    <li>AZTECA es a MEXICANO como BALBUCEO es a:</li>
                    <ol type="a">
                        <li>{!! Form::radio('o1',1, $t1_1) !!}&nbsp palabra</li>
                        <li>{!! Form::radio('o1',2, $t1_2) !!}&nbsp lenguaje</li>
                        <li>{!! Form::radio('o1',3, $t1_3) !!}&nbsp sonido</li>
                        <li>{!! Form::radio('o1',4, $t1_4) !!}&nbsp alfabeto</li>
                        <li>{!! Form::radio('o1',5, $t1_5) !!}&nbsp sílaba</li>
                    </ol>

                    <li>CÓDICE es a HISTORIA como LIBRO es a:</li>
                    <ol type="a">
                        <li>{!! Form::radio('o2',1, $t2_1) !!}&nbsp investigación</li>
                        <li>{!! Form::radio('o2',2, $t2_2) !!}&nbsp librería</li>
                        <li>{!! Form::radio('o2',3, $t2_3) !!}&nbsp biblioteca</li>
                        <li>{!! Form::radio('o2',4, $t2_4) !!}&nbsp escuela</li>
                        <li>{!! Form::radio('o2',5, $t2_5) !!}&nbsp bibliografía</li>
                    </ol>

                    <li>QUETZALCÓALTL es a TEOLOGÍA como PREHISPÁNICO es a:</li>
                    <ol type="a">
                        <li>{!! Form::radio('o3',1, $t3_1) !!}&nbsp nahuátl</li>
                        <li>{!! Form::radio('o3',2, $t3_2) !!}&nbsp historia</li>
                        <li>{!! Form::radio('o3',3, $t3_3) !!}&nbsp mexica</li>
                        <li>{!! Form::radio('o3',4, $t3_4) !!}&nbsp antiguo</li>
                        <li>{!! Form::radio('o3',5, $t3_5) !!}&nbsp maya</li>
                    </ol>

                    <li>CORAZÓN es a SANGRE como SATÉLITE es a:</li>
                    <ol type="a">
                        <li>{!! Form::radio('o4',1, $t4_1) !!}&nbsp tecnología</li>
                        <li>{!! Form::radio('o4',2, $t4_2) !!}&nbsp comunicación</li>
                        <li>{!! Form::radio('o4',3, $t4_3) !!}&nbsp información</li>
                        <li>{!! Form::radio('o4',4, $t4_4) !!}&nbsp imágenes</li>
                        <li>{!! Form::radio('o4',5, $t4_5) !!}&nbsp planeta</li>
                    </ol>

                </ol>

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
                            <textarea rows="5" name ="retro4" class="form-control"></textarea>
                            <br>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <br>
                            <strong>Calificación:</strong>
                            <br><br>
                            <input type="text" name="cal4" class="form-control name_list center-block">
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

                    {!! Form::open(['method'=>'POST', 'action'=>'TutorPensamientosController@edit_pens_4']) !!}

                    @if($t1_1 != NULL && $t1_2 != NULL && $t1_3 != NULL && $t1_4 != NULL && $t1_5 != NULL && $t2_1 != NULL && $t2_2 != NULL && $t2_3 != NULL && $t2_4 != NULL && $t2_5 != NULL && $t3_1 != NULL && $t3_2 != NULL && $t3_3 != NULL && $t3_4 != NULL && $t3_5 != NULL && $t4_1 != NULL && $t4_2 != NULL && $t4_3 != NULL && $t4_4 != NULL && $t4_5 != NULL)

                    <ol>

                        <li>AZTECA es a MEXICANO como BALBUCEO es a:</li>
                        <ol type="a">
                            <li>{!! Form::radio('o1',1, $t1_1) !!}&nbsp palabra</li>
                            <li>{!! Form::radio('o1',2, $t1_2) !!}&nbsp lenguaje</li>
                            <li>{!! Form::radio('o1',3, $t1_3) !!}&nbsp sonido</li>
                            <li>{!! Form::radio('o1',4, $t1_4) !!}&nbsp alfabeto</li>
                            <li>{!! Form::radio('o1',5, $t1_5) !!}&nbsp sílaba</li>
                        </ol>

                        <li>CÓDICE es a HISTORIA como LIBRO es a:</li>
                        <ol type="a">
                            <li>{!! Form::radio('o2',1, $t2_1) !!}&nbsp investigación</li>
                            <li>{!! Form::radio('o2',2, $t2_2) !!}&nbsp librería</li>
                            <li>{!! Form::radio('o2',3, $t2_3) !!}&nbsp biblioteca</li>
                            <li>{!! Form::radio('o2',4, $t2_4) !!}&nbsp escuela</li>
                            <li>{!! Form::radio('o2',5, $t2_5) !!}&nbsp bibliografía</li>
                        </ol>

                        <li>QUETZALCÓALTL es a TEOLOGÍA como PREHISPÁNICO es a:</li>
                        <ol type="a">
                            <li>{!! Form::radio('o3',1, $t3_1) !!}&nbsp nahuátl</li>
                            <li>{!! Form::radio('o3',2, $t3_2) !!}&nbsp historia</li>
                            <li>{!! Form::radio('o3',3, $t3_3) !!}&nbsp mexica</li>
                            <li>{!! Form::radio('o3',4, $t3_4) !!}&nbsp antiguo</li>
                            <li>{!! Form::radio('o3',5, $t3_5) !!}&nbsp maya</li>
                        </ol>

                        <li>CORAZÓN es a SANGRE como SATÉLITE es a:</li>
                        <ol type="a">
                            <li>{!! Form::radio('o4',1, $t4_1) !!}&nbsp tecnología</li>
                            <li>{!! Form::radio('o4',2, $t4_2) !!}&nbsp comunicación</li>
                            <li>{!! Form::radio('o4',3, $t4_3) !!}&nbsp información</li>
                            <li>{!! Form::radio('o4',4, $t4_4) !!}&nbsp imágenes</li>
                            <li>{!! Form::radio('o4',5, $t4_5) !!}&nbsp planeta</li>
                        </ol>

                    </ol>

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
