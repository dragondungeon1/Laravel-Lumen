<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});
//retrieving data
$router->get('/dogs', function(){
    $dogs = DB::table('dogs')->get()->all();
    return response()->json($dogs);
});
//insert
$router->post('/dogs', function(Request $request){
    $dog = DB::table('dogs')->insert([

        'name' => $request->input('name'),
        'owner_id'=>$request->input('owner_id'),
        'description'=>$request->input('description'),
        'owner'=>$request->input('owner'),
        'age'=>$request->input('age'),
        'race'=>$request->input('race'),
        'allergies'=>$request->input('allergies'),
        'created_at'=>$request->input('created_at')

    ]);
    return response()->json($dog);
});

//delete data
$router->delete('/dogs', function (Request $request){
    $dog = DB::table('dogs')->delete([
        'name'=>$request->input('name'),
        'owner_id'=>$request->input('owner_id'),
        'description'=>$request->input('description'),
        'owner'=>$request->input('owner'),
        'age'=>$request->input('age'),
        'race'=>$request->input('race'),
        'allergies'=>$request->input('allergies'),
        'created_at'=>$request->input('created_at')
    ]);
    return response()->json($dog);
});

//retrieving data
$router->get('/dogs/{id}', function($id){
    $dog = DB::table('dogs')->where('id' ,$id)->get()->first();
    return response()->json($dog);
});

//update data

//doe overal een if statement
// whatsapp gesprek tycho.
$router->put('/dogs/{id}', function(Request $request, $id){
    $data=[$id, 'name'];
    if ($request->has('name')){
        $data['name'] = $request->input('name');
    }

    $dog = DB::table('dogs')
        ->where('id', $id)
        ->update(['name' => $request->input('name')]);
return response()->json($dog);
});





