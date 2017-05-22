<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bitacora_terreno;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class Bitacora_terrenoController.
 *
 * @author  The scaffold-interface created at 2017-05-15 03:02:51am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Bitacora_terrenoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - bitacora_terreno';
        $bitacora_terrenos = Bitacora_terreno::paginate(6);
        return view('bitacora_terreno.index',compact('bitacora_terrenos','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - bitacora_terreno';
        
        return view('bitacora_terreno.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bitacora_terreno = new Bitacora_terreno();

        
        $bitacora_terreno->fecha_inico_terreno = $request->fecha_inico_terreno;

        
        $bitacora_terreno->fecha_termino_terreno = $request->fecha_termino_terreno;

        
        $bitacora_terreno->duracion_terreno = $request->duracion_terreno;

        
        
        $bitacora_terreno->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new bitacora_terreno has been created !!']);

        return redirect('bitacora_terreno');
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
        $title = 'Show - bitacora_terreno';

        if($request->ajax())
        {
            return URL::to('bitacora_terreno/'.$id);
        }

        $bitacora_terreno = Bitacora_terreno::findOrfail($id);
        return view('bitacora_terreno.show',compact('title','bitacora_terreno'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - bitacora_terreno';
        if($request->ajax())
        {
            return URL::to('bitacora_terreno/'. $id . '/edit');
        }

        
        $bitacora_terreno = Bitacora_terreno::findOrfail($id);
        return view('bitacora_terreno.edit',compact('title','bitacora_terreno'  ));
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
        $bitacora_terreno = Bitacora_terreno::findOrfail($id);
    	
        $bitacora_terreno->fecha_inico_terreno = $request->fecha_inico_terreno;
        
        $bitacora_terreno->fecha_termino_terreno = $request->fecha_termino_terreno;
        
        $bitacora_terreno->duracion_terreno = $request->duracion_terreno;
        
        
        $bitacora_terreno->save();

        return redirect('bitacora_terreno');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/bitacora_terreno/'. $id . '/delete');

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
     	$bitacora_terreno = Bitacora_terreno::findOrfail($id);
     	$bitacora_terreno->delete();
        return URL::to('bitacora_terreno');
    }
}
