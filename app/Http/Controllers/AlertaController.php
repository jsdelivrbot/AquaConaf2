<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Alerta;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class AlertaController.
 *
 * @author  The scaffold-interface created at 2017-05-15 03:00:42am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class AlertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - alerta';
        $alertas = Alerta::paginate(6);
        return view('alerta.index',compact('alertas','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - alerta';
        
        return view('alerta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $alerta = new Alerta();

        
        $alerta->Fecha_alerta = $request->Fecha_alerta;

        
        $alerta->latitud = $request->latitud;

        
        $alerta->longitud = $request->longitud;

        
        
        $alerta->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new alerta has been created !!']);

        return redirect('alerta');
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
        $title = 'Show - alerta';

        if($request->ajax())
        {
            return URL::to('alerta/'.$id);
        }

        $alerta = Alerta::findOrfail($id);
        return view('alerta.show',compact('title','alerta'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - alerta';
        if($request->ajax())
        {
            return URL::to('alerta/'. $id . '/edit');
        }

        
        $alerta = Alerta::findOrfail($id);
        return view('alerta.edit',compact('title','alerta'  ));
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
        $alerta = Alerta::findOrfail($id);
    	
        $alerta->Fecha_alerta = $request->Fecha_alerta;
        
        $alerta->latitud = $request->latitud;
        
        $alerta->longitud = $request->longitud;
        
        
        $alerta->save();

        return redirect('alerta');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/alerta/'. $id . '/delete');

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
     	$alerta = Alerta::findOrfail($id);
     	$alerta->delete();
        return URL::to('alerta');
    }
}
