<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Info_junta_vecino;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class Info_junta_vecinoController.
 *
 * @author  The scaffold-interface created at 2017-05-15 03:12:05am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Info_junta_vecinoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - info_junta_vecino';
        $info_junta_vecinos = Info_junta_vecino::paginate(6);
        return view('info_junta_vecino.index',compact('info_junta_vecinos','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - info_junta_vecino';
        
        return view('info_junta_vecino.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $info_junta_vecino = new Info_junta_vecino();

        
        $info_junta_vecino->nombre_encargado = $request->nombre_encargado;

        
        $info_junta_vecino->telefono_celular_encargado = $request->telefono_celular_encargado;

        
        $info_junta_vecino->correo_electronico_encargado = $request->correo_electronico_encargado;

        
        $info_junta_vecino->sector_encargado = $request->sector_encargado;

        
        $info_junta_vecino->calle_pasaje_encargado = $request->calle_pasaje_encargado;

        
        $info_junta_vecino->villa_poblacion_encargado = $request->villa_poblacion_encargado;

        
        $info_junta_vecino->numero_casa_encargado = $request->numero_casa_encargado;

        
        
        $info_junta_vecino->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new info_junta_vecino has been created !!']);

        return redirect('info_junta_vecino');
    }

    /**
     * Display the specified resource.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function show($id,Request $request)
    {
        $title = 'Show - info_junta_vecino';

        if($request->ajax())
        {
            return URL::to('info_junta_vecino/'.$id);
        }

        $info_junta_vecino = Info_junta_vecino::findOrfail($id);
        return view('info_junta_vecino.show',compact('title','info_junta_vecino'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - info_junta_vecino';
        if($request->ajax())
        {
            return URL::to('info_junta_vecino/'. $id . '/edit');
        }

        
        $info_junta_vecino = Info_junta_vecino::findOrfail($id);
        return view('info_junta_vecino.edit',compact('title','info_junta_vecino'  ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $info_junta_vecino = Info_junta_vecino::findOrfail($id);
    	
        $info_junta_vecino->nombre_encargado = $request->nombre_encargado;
        
        $info_junta_vecino->telefono_celular_encargado = $request->telefono_celular_encargado;
        
        $info_junta_vecino->correo_electronico_encargado = $request->correo_electronico_encargado;
        
        $info_junta_vecino->sector_encargado = $request->sector_encargado;
        
        $info_junta_vecino->calle_pasaje_encargado = $request->calle_pasaje_encargado;
        
        $info_junta_vecino->villa_poblacion_encargado = $request->villa_poblacion_encargado;
        
        $info_junta_vecino->numero_casa_encargado = $request->numero_casa_encargado;
        
        
        $info_junta_vecino->save();

        return redirect('info_junta_vecino');
    }

    /**
     * Delete confirmation message by Ajaxis.
     *
     * @link      https://github.com/amranidev/ajaxis
     * @param    \Illuminate\Http\Request  $request
     * @return  String
     */
    public function DeleteMsg($id,Request $request)
    {
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/info_junta_vecino/'. $id . '/delete');

        if($request->ajax())
        {
            return $msg;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param    int $id
     * @return  \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     	$info_junta_vecino = Info_junta_vecino::findOrfail($id);
     	$info_junta_vecino->delete();
        return URL::to('info_junta_vecino');
    }
}
