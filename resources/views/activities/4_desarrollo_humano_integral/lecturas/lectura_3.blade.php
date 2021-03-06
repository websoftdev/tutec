@extends('layouts.sideBarAlumno')

@section('content')

    <h2>EL SER HUMANO INTEGRAL</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Lectura
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">

                <strong>CAPÍTULO 3. DESARROLLO DE HABILIDADES DE PENSAMIENTO</strong><br><br>
                El desarrolla de las habilidades del pensamiento es uno de los objetivos principales
                de la educación que se ofrece en las escuelas (Zarzar, 2011).<br>
                ¿Pero cuáles son estas habilidades del pensamiento?<br><br>
                Las primeras habilidades son las perceptivas, es decir, las que nos ayudan a captar
                los datos y la información que esta fuera de nosotros. Entre estas, podemos ubicar la
                atención, la observación, la percepción, la memoria, la concentración, la capacidad
                para buscar y encontrar información,. El objetivo de desarrollar estas habilidades es
                que lleguemos a ser atentos.<br><br>
                Luego están las habilidades que nos permiten entender y manejar los datos y la
                información que hemos captado. Entre estas se encuentran la comprensión, la
                clasificación, la organización, el ordenamiento, la transformación, la
                contextualización, el análisis, la síntesis, la inteligencia, la comparación, la relación,
                el manejo de analogías, el manejo de sinónimos, y antónimos, el pensamiento lógico
                deductivo, la capacidad para el análisis y solución de problemas, . . . El objetivo de
                desarrollar estas habilidades es que lleguemos a ser inteligentes.<br><br>
                Posteriormente entran en juego las habilidades para juzgar y evaluar los datos y la
                información que hemos captado y entendido. Entre estas habilidades se encuentran
                la formación de conceptos, la elaboración de juicios, de razonamiento, de
                argumentos, de hipótesis, de verdad o falsedad de estas, la discriminación, la
                capacidad de razonamiento tanto verbal como numérico,. El objetivo de desarrollar
                estas habilidades es que lleguemos a ser razonables.<br><br>
                Por último, existen otras habilidades que nos permitan organizar la totalidad de
                nuestro sistema de pensamiento, con el fin de llegar a tener un pensamiento
                sistémico (métodos), un pensamiento lógico, un pensamiento abstracto, un
                pensamiento lateral (creatividad e imaginación), un pensamiento crítico, un
                pensamiento procesual,. . . . . .<br><br>


            </div>

        </div>
    </div>

  <div class="center-block" style="margin-left:0%">
    <nav aria-label="Page navigation">
        <ul class="pagination center-block">
            <li>
                <a href="{{url('/des_hum_int_l_2')}}" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li><a href="{{url('/des_hum_int_l_1')}}">Lectura 1</a></li>
            <li><a href="{{url('/des_hum_int_l_2')}}">Lectura 2</a></li>
            <li><a href="{{url('/des_hum_int_l_3')}}"style="background-color: lightgray;">Lectura 3</a></li>
            <li><a href="{{url('/des_hum_int_l_4')}}">Lectura 4</a></li>
            <li><a href="{{url('/des_hum_int_l_5')}}">Lectura 5</a></li>
            <li><a href="{{url('/des_hum_int_l_6')}}">Lectura 6</a></li>
            <li><a href="{{url('/des_hum_int_l_7')}}">Lectura 7</a></li>
            <li><a href="{{url('/des_hum_int_l_8')}}">Lectura 8</a></li>
            <li><a href="{{url('/des_hum_int_l_9')}}">Lectura 9</a></li>
            <li><a href="{{url('/des_hum_int_l_10')}}">Lectura 10</a></li>
            <li><a href="{{url('/des_hum_int_l_11')}}">Lectura 11</a></li>
            <li><a href="{{url('/des_hum_int_l_12')}}">Lectura 12</a></li>
            <li><a href="{{url('/des_hum_int_l_13')}}">Lectura 13</a></li>
            <li><a href="{{url('/des_hum_int_l_14')}}">Lectura 14</a></li>
            <li>
                <a href="{{url('/des_hum_int_l_4')}}" aria-label="Next">
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
