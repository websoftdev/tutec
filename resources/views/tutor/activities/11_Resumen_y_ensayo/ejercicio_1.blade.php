@extends('layouts.sideBarAlumno')

@section('content')

    <h2>Resumen y Ensayo</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Ejercicio
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">

                <strong><p style="text-align: center;"> Actividad a realizar:</p></strong><br>


                Determina uno de los 2 procedimientos expuestos en la sesión (resumen y
                ensayo académico), hacer la investigación necesaria para desarrollar el tema:<br>

                “El impacto de mi estudio de educación superior, en el desarrollo científico y
                tecnológico de México”.
                <br><br>

                <strong>Ensayo:</strong> <br><br>

                @if($f1_decode != NULL)

                    {{$f1_decode}}

                @else

                    <div class="alert alert-danger" style="margin-left: 15%;margin-right: 15%; margin-top: 3%; text-align: center;">
                        <strong>Aviso!</strong><br>
                        El alumno no ha entregado esta parte de la actividad.
                    </div><br>

                @endif

            </div>

            @if($edit==0)

            <form name="add_fort" id="add_fort" method="post" action="{{url('/store/tutor_ens_1')}}">
                {{csrf_field()}}

                <table class="col-lg-12">
                    <tr>
                        <td><strong>Retroalimentación:</strong></td>
                    </tr>

                    <tr>
                        <td>
                            <br>
                            <textarea rows="5" name ="retro1" class="form-control"></textarea>
                            <br>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <br>
                            <strong>Calificación:</strong>
                            <br><br>
                            <input type="text" name="cal1" class="form-control name_list center-block">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <br><br>
                            <input type="submit" name="submit" id="submit" class="btn btn-primary form-control" value="Guardar" />
                        </td>
                    </tr>
                </table>

            </form>

           @else

                <form name="add_fort" id="add_fort" method="post" action="{{url('/edit/tutor_ens_1')}}">
                    {{csrf_field()}}

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

                </form>

           @endif



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
