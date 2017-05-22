<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Estado_alerta;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class Estado_alertaController.
 *
 * @author  The scaffold-interface created at 2017-05-15 02:56:26am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Estado_alertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - estado_alerta';
        $estado_alertas = Estado_alerta::paginate(6);
        return view('estado_alerta.index',compact('estado_alertas','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - estado_alerta';
        
        return view('estado_alerta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $estado_alerta = new Estado_alerta();

        
        $estado_alerta->nombre_estado_alerta = $request->nombre_estado_alerta;

        
        
        $estado_alerta->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new estado_alerta has been created !!']);

        return redirect('estado_alerta');
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
        $title = 'Show - estado_alerta';

        if($request->ajax())
        {
            return URL::to('estado_alerta/'.$id);
        }

        $estado_alerta = Estado_alerta::findOrfail($id);
        return view('estado_alerta.show',compact('title','estado_alerta'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - estado_alerta';
        if($request->ajax())
        {
            return URL::to('estado_alerta/'. $id . '/edit');
        }

        
        $estado_alerta = Estado_alerta::findOrfail($id);
        return view('estado_alerta.edit',compact('title','estado_alerta'  ));
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
        $estado_alerta = Estado_alerta::findOrfail($id);
    	
        $estado_alerta->nombre_estado_alerta = $request->nombre_estado_alerta;
        
        
        $estado_alerta->save();

        return redirect('estado_alerta');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/estado_alerta/'. $id . '/delete');

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
     	$estado_alerta = Estado_alerta::findOrfail($id);
     	$estado_alerta->delete();
        return URL::to('estado_alerta');
    }
}
