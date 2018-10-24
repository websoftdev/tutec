<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Foda;

Route::get('/', function () {
    return view('welcome');
});


Route::get('actPanel', 'ActivitiesController@index');

Route::delete('/eliminarActividad/{id}','ActivitiesController@destroy')->name('destroyActivity');

Route::get('fodaj', function(){

//$forts = '{"0":"soy bueno hablandp", "1":"me gusta aprender", "2":"", "3":"soy chido"}';
//$decode =  json_decode($forts, true);
//
//echo $forts;

//$decode['1'] = 'soy seguro de mi mismo';

//$data = array('4'=>'SEEEE');

//$new_data = json_encode($data);
 //$y = array_push($decode, $data);

//echo json_encode($y);

//echo '<h2>Fortalezas</h2>';
//
//foreach($decode as $key=>$value){
//    if(!$value==""){
//        echo  $value.'<br>';
//    }
//}

});

Route::get('fodaArray', function(){


//    $forts = array('1'=>'mega', '2'=>'hiper', '3'=>'deportes');
//    $forts2 = array_push(json_encode($forts), array('4'=>'y lo demas'));
//    $forts_encode = json_encode($forts2);
//    Foda::create(['user_id'=>4, 'fortalezas'=>$forts_encode, 'oportunidades'=>'jajajaj']);
//
//
//
//    $user_forts = Foda::where('user_id', 3)->first();
//
//
//    $user_forts_decode = json_decode($user_forts->fortalezas);
//
//    foreach($user_forts_decode as $key=>$value){
//        echo $key.' '.$value.'<br>';
//    }
    $a=array();
    $i=1;

for(;;){
        $a[$i]='dsds';
        $i++;
        if($i==10){
            break;
        }
}
    echo json_encode($a);

});

////*********ACTIVIDAD 1 --FODA--**********////

////*********FORTALEZAS**********////
Route::get('/foda_1_1', 'FodaController@create_f1');
Route::get('/foda_1_2', 'FodaController@create_f2');
Route::get('/foda_1_3', 'FodaController@create_f3');
Route::get('/foda_1_4', 'FodaController@create_f4');


Route::post('/store/foda_1_1', 'FodaController@store_f1');
Route::post('/store/foda_1_2', 'FodaController@store_f2');
Route::post('/store/foda_1_3', 'FodaController@store_f3');
Route::post('/store/foda_1_4', 'FodaController@store_f4');

////*********DEBILIDADES**********////
Route::get('/foda_2_1', 'FodaController@create_d1');
Route::get('/foda_2_2', 'FodaController@create_d2');
Route::get('/foda_2_3', 'FodaController@create_d3');
Route::get('/foda_2_4', 'FodaController@create_d4');

Route::post('/store/foda_2_1', 'FodaController@store_d1');
Route::post('/store/foda_2_2', 'FodaController@store_d2');
Route::post('/store/foda_2_3', 'FodaController@store_d3');
Route::post('/store/foda_2_4', 'FodaController@store_d4');

////*********AMENAZAS**********////
Route::get('/foda_3_1', 'FodaController@create_a1');
Route::get('/foda_3_2', 'FodaController@create_a2');
Route::get('/foda_3_3', 'FodaController@create_a3');
Route::get('/foda_3_4', 'FodaController@create_a4');
Route::get('/foda_3_5', 'FodaController@create_a5');


Route::post('/store/foda_3_1', 'FodaController@store_a1');
Route::post('/store/foda_3_2', 'FodaController@store_a2');
Route::post('/store/foda_3_3', 'FodaController@store_a3');
Route::post('/store/foda_3_4', 'FodaController@store_a4');
Route::post('/store/foda_3_5', 'FodaController@store_a5');

////*********OPORTUNIDADES**********////
Route::get('/foda_4_1', 'FodaController@create_o1');
Route::get('/foda_4_2', 'FodaController@create_o2');
Route::get('/foda_4_3', 'FodaController@create_o3');
Route::get('/foda_4_4', 'FodaController@create_o4');


Route::post('/store/foda_4_1', 'FodaController@store_o1');
Route::post('/store/foda_4_2', 'FodaController@store_o2');
Route::post('/store/foda_4_3', 'FodaController@store_o3');
Route::post('/store/foda_4_4', 'FodaController@store_o4');

////*********RESUMEN**********////

Route::get('/foda_r', 'FodaController@create_r');

Route::post('/store/foda_r', 'FodaController@store_r');



////*********ACTIVIDAD 2 --TIEMPO--**********////
Route::get('/tiempo_ej_1', 'TiempoController@create_t1');
Route::get('/tiempo_ej_2', 'TiempoController@create_t2');
Route::get('/tiempo_ej_3', 'TiempoController@create_t3');
Route::get('/tiempo_ej_4', 'TiempoController@create_t4');
Route::get('/tiempo_ej_5', 'TiempoController@create_t5');
Route::get('/tiempo_ej_6', 'TiempoController@create_t6');
Route::get('/tiempo_ej_7', 'TiempoController@create_t7');
Route::get('/tiempo_ej_8', 'TiempoController@create_t8');
Route::get('/tiempo_ej_f', 'TiempoController@create_tf');


Route::post('/store/tiempo_ej_2', 'TiempoController@store_t1_2');
Route::post('/store/tiempo_ej_3', 'TiempoController@store_t1_3');
Route::post('/store/tiempo_ej_4', 'TiempoController@store_t1_4');
Route::post('/store/tiempo_ej_5', 'TiempoController@store_t1_5');
Route::post('/store/tiempo_ej_6', 'TiempoController@store_t1_6');
Route::post('/store/tiempo_ej_7', 'TiempoController@store_t1_7');
Route::post('/store/tiempo_ej_8', 'TiempoController@store_t1_8');


Route::get('/tiempo_ej_2_1', 'TiempoController@create_t2_1');
Route::get('/tiempo_ej_2_2', 'TiempoController@create_t2_2');
Route::get('/tiempo_ej_2_3', 'TiempoController@create_t2_3');
Route::get('/tiempo_ej_2_4', 'TiempoController@create_t2_4');
Route::get('/tiempo_ej_2_5', 'TiempoController@create_t2_5');
Route::get('/tiempo_ej_2_6', 'TiempoController@create_t2_6');
Route::get('/tiempo_ej_2_7', 'TiempoController@create_t2_7');
Route::get('/tiempo_ej_2_8', 'TiempoController@create_t2_8');

Route::post('/store/tiempo_ej_2_2', 'TiempoController@store_t2_2');
Route::post('/store/tiempo_ej_2_3', 'TiempoController@store_t2_3');
Route::post('/store/tiempo_ej_2_4', 'TiempoController@store_t2_4');
Route::post('/store/tiempo_ej_2_5', 'TiempoController@store_t2_5');
Route::post('/store/tiempo_ej_2_6', 'TiempoController@store_t2_6');
Route::post('/store/tiempo_ej_2_7', 'TiempoController@store_t2_7');
Route::post('/store/tiempo_ej_2_8', 'TiempoController@store_t2_8');

////*********ACTIVIDAD 3 --SER HUMANO INTEGRAL--**********////

Route::get('/hum_int_ej_1', 'HumanointegralController@create_hum_int_1');

Route::post('/store/hum_int_ej_1', 'HumanointegralController@store_hum_int_ej_1');

////*********ACTIVIDAD 4 --DESARROLLO HUMANO INTEGRAL--**********////

Route::get('/des_hum_int_ej_1', 'DesarrolloHumanoController@create_des_hum_int_1');
Route::get('/des_hum_int_ej_2', 'DesarrolloHumanoController@create_des_hum_int_2');
Route::get('/des_hum_int_ej_3', 'DesarrolloHumanoController@create_des_hum_int_3');
Route::get('/des_hum_int_ej_4', 'DesarrolloHumanoController@create_des_hum_int_4');
Route::get('/des_hum_int_ej_5', 'DesarrolloHumanoController@create_des_hum_int_5');
Route::get('/des_hum_int_ej_6', 'DesarrolloHumanoController@create_des_hum_int_6');



Route::post('/store/des_hum_int_ej_1', 'DesarrolloHumanoController@store_des_hum_int_1');
Route::post('/store/des_hum_int_ej_2', 'DesarrolloHumanoController@store_des_hum_int_2');
Route::post('/store/des_hum_int_ej_3', 'DesarrolloHumanoController@store_des_hum_int_3');
Route::post('/store/des_hum_int_ej_4', 'DesarrolloHumanoController@store_des_hum_int_4');
Route::post('/store/des_hum_int_ej_5', 'DesarrolloHumanoController@store_des_hum_int_5');
Route::post('/store/des_hum_int_ej_6', 'DesarrolloHumanoController@store_des_hum_int_6');

////*********ACTIVIDAD 5 --INTELIGENCIAS MULTIPLES--**********////
Route::get('/int_mult_ej_1', 'InteligenciaController@create_int_mult_ej_1');
Route::get('/int_mult_ej_2', 'InteligenciaController@create_int_mult_ej_2');
Route::get('/int_mult_ej_3', 'InteligenciaController@create_int_mult_ej_3');
Route::get('/int_mult_ej_4', 'InteligenciaController@create_int_mult_ej_4');
Route::get('/int_mult_ej_res', 'InteligenciaController@create_int_mult_res');

Route::post('/store/int_mult_ej_1', 'InteligenciaController@store_int_mult_ej_1');


////*********ACTIVIDAD 6 --HABILIDADES DE ESTUDIO--**********////
Route::get('/hab_est_1', 'HabilidadsController@create_hab_est_1');

Route::post('/store/hab_est_1', 'HabilidadsController@store_hab_est_1');







Route::get('lecs', function(){
    return view('activities.13_Inferencias_logicas.lecturas.lectura_1');


});

Route::get('ejs', function(){
    return view('activities.14_Relacion_y_simbolizacion.ejercicios.ejercicio_5');

});



