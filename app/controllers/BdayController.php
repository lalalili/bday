<?php

use Carbon\Carbon;

class BdayController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //return Response::json(Bday::get());
        $startdate = Carbon::now()->addDays(-1);
        $enddate = Carbon::now()->addDays(6);
        return Response::json(Bday::select('to')->where('birthday', '>=',$startdate)->where('birthday', '<=',$enddate)->get());
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        Wish::create(array(
            'name' => Input::get('to'),
            'birthday' => Input::get('birthday')
        ));

        return Response::json(array('success' => true));
    }

    /**
     * Return the specified resource using JSON
     *
     * @param int $id
     * @return Response
     */
    public function show($birthday)
    {

        //return Response::json(Wish::find($id));
        $startdate = Carbon::now();
        $enddate = Carbon::now()->addDays(6);
        return Response::json(Bday::select('to')->where('birthday', '>=',$startdate)->where('birthday', '<=',$enddate)->get());
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
