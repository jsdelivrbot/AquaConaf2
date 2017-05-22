<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Clase_incendio;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class Clase_incendioController.
 *
 * @author  The scaffold-interface created at 2017-05-15 02:55:54am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Clase_incendioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - clase_incendio';
        $clase_incendios = Clase_incendio::paginate(6);
        return view('clase_incendio.index',compact('clase_incendios','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - clase_incendio';
        
        return view('clase_incendio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clase_incendio = new Clase_incendio();

        
        $clase_incendio->nombre_clase_incendio = $request->nombre_clase_incendio;

        
        
        $clase_incendio->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new clase_incendio has been created !!']);

        return redirect('clase_incendio');
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
        $title = 'Show - clase_incendio';

        if($request->ajax())
        {
            return URL::to('clase_incendio/'.$id);
        }

        $clase_incendio = Clase_incendio::findOrfail($id);
        return view('clase_incendio.show',compact('title','clase_incendio'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - clase_incendio';
        if($request->ajax())
        {
            return URL::to('clase_incendio/'. $id . '/edit');
        }

        
        $clase_incendio = Clase_incendio::findOrfail($id);
        return view('clase_incendio.edit',compact('title','clase_incendio'  ));
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
        $clase_incendio = Clase_incendio::findOrfail($id);
    	
        $clase_incendio->nombre_clase_incendio = $request->nombre_clase_incendio;
        
        
        $clase_incendio->save();

        return redirect('clase_incendio');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/clase_incendio/'. $id . '/delete');

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
     	$clase_incendio = Clase_incendio::findOrfail($id);
     	$clase_incendio->delete();
        return URL::to('clase_incendio');
    }
}
