<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tipo_emergencia;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class Tipo_emergenciaController.
 *
 * @author  The scaffold-interface created at 2017-05-15 02:57:05am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Tipo_emergenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - tipo_emergencia';
        $tipo_emergencias = Tipo_emergencia::paginate(6);
        return view('tipo_emergencia.index',compact('tipo_emergencias','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - tipo_emergencia';
        
        return view('tipo_emergencia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipo_emergencia = new Tipo_emergencia();

        
        $tipo_emergencia->nombre_tipo_alerta = $request->nombre_tipo_alerta;

        
        
        $tipo_emergencia->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new tipo_emergencia has been created !!']);

        return redirect('tipo_emergencia');
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
        $title = 'Show - tipo_emergencia';

        if($request->ajax())
        {
            return URL::to('tipo_emergencia/'.$id);
        }

        $tipo_emergencia = Tipo_emergencia::findOrfail($id);
        return view('tipo_emergencia.show',compact('title','tipo_emergencia'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - tipo_emergencia';
        if($request->ajax())
        {
            return URL::to('tipo_emergencia/'. $id . '/edit');
        }

        
        $tipo_emergencia = Tipo_emergencia::findOrfail($id);
        return view('tipo_emergencia.edit',compact('title','tipo_emergencia'  ));
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
        $tipo_emergencia = Tipo_emergencia::findOrfail($id);
    	
        $tipo_emergencia->nombre_tipo_alerta = $request->nombre_tipo_alerta;
        
        
        $tipo_emergencia->save();

        return redirect('tipo_emergencia');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/tipo_emergencia/'. $id . '/delete');

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
     	$tipo_emergencia = Tipo_emergencia::findOrfail($id);
     	$tipo_emergencia->delete();
        return URL::to('tipo_emergencia');
    }
}
