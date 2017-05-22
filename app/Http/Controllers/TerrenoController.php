<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Terreno;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class TerrenoController.
 *
 * @author  The scaffold-interface created at 2017-05-15 03:01:24am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class TerrenoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - terreno';
        $terrenos = Terreno::paginate(6);
        return view('terreno.index',compact('terrenos','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - terreno';
        
        return view('terreno.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $terreno = new Terreno();

        
        
        $terreno->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new terreno has been created !!']);

        return redirect('terreno');
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
        $title = 'Show - terreno';

        if($request->ajax())
        {
            return URL::to('terreno/'.$id);
        }

        $terreno = Terreno::findOrfail($id);
        return view('terreno.show',compact('title','terreno'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - terreno';
        if($request->ajax())
        {
            return URL::to('terreno/'. $id . '/edit');
        }

        
        $terreno = Terreno::findOrfail($id);
        return view('terreno.edit',compact('title','terreno'  ));
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
        $terreno = Terreno::findOrfail($id);
    	
        
        $terreno->save();

        return redirect('terreno');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/terreno/'. $id . '/delete');

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
     	$terreno = Terreno::findOrfail($id);
     	$terreno->delete();
        return URL::to('terreno');
    }
}
