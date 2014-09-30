<?php

class MywishController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return Response::json(Wish::get());
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        Wish::create(array(
            'from' => Input::get('from'),
            'to' => Input::get('to'),
            'message' => Input::get('message')
        ));

        return Response::json(array('success' => true));
    }

    /**
     * Return the specified resource using JSON
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {

        //return Response::json(Wish::find($id));
        return Response::json(Wish::where('from', '=', $id)->orderBy('created_at', 'desc')->get());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Wish::destroy($id);

        return Response::json(array('success' => true));
    }


}
