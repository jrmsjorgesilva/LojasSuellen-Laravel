<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class EventConnect extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return view('templates.eventconnect.home', ['events' => $events]);
    }

    public function contact()
    {
        return view('templates.eventconnect.contact');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('templates.eventconnect.events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $event = new Event;

        $event->title = $request->title;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;

        // upload images
        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            $request_image = $request->image;

            // pega extensão
            $extension = $request_image->extension();

            // cria hash para o nome da imagem
            $image_name = md5(
                $request_image->getClientOriginalName() . strtotime('now')
            ) . "." . $extension;

            // move a imagem para a pasta com nome de hash
            $request->image->move(public_path('assets/img_eventconnect'), $image_name);

            // salva no objeto que vai para o banco
            $event->image = $image_name;

        }

        $event->save();

        return redirect('/eventconnect')->with('msg', 'Evento Criado com Sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
