<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ukuranjasRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ukuranjas;
use Illuminate\Contracts\Auth\Guard;

class ukuranjasController extends Controller {

    public function __construct(Guard $auth) {
        $this->auth = $auth;
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        //
        $data['title'] = 'Menu ukuranjas';
        return view('backend.ukuranjas.index', $data);
    }

    public function apiukuranjas() {
        $data = ukuranjas::all();
        return response()->json($data);
    }

    public function apiCreateukuranjas() {
        $data = ukuranjas::Dropdownukuranjas();
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        //
        $data['title'] = 'Tambah ukuranjas';
        return View('backend.ukuranjas.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(ukuranjasRequest $request) {
        //
        $input = $request->all();
        $ukuranjas = new ukuranjas($input);
        if ($ukuranjas->save()) {
            return response()->json(array('success' => TRUE));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        //
        $data = ukuranjas::find($id);
        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        //
        $data['title'] = 'Edit ukuranjas';
        $data['data'] = ukuranjas::find($id);
        return view('backend.ukuranjas.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(ukuranjasRequest $request, $id) {
        //
        $input = $request->all();
        $ukuranjas = ukuranjas::find($id);
        if ($ukuranjas->update($input)) {
            return response()->json(array('success' => TRUE));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        //
        $ukuranjas = ukuranjas::find($id);
        if ($ukuranjas->delete()) {
            return response()->json(array('success' => TRUE));
        }
    }

}
