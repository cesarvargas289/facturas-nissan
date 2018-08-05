<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use App\Http\Requests;
use App\Factura;
use Yajra\Datatables\Datatables;

class FacturaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles('admin');
        $facturas = Factura::all();
        $datatables =Datatables::of(Factura::query())->make(true);

        return view('factura.index', compact('facturas', 'datatables'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->user()->authorizeRoles('admin');
        $facturas = Factura::all();
        return view('factura.create', compact('facturas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->user()->authorizeRoles('admin');

        $this->validate($request, [
            'marca' => 'required',
            'modelo' => 'required',

        ]);

        Factura::create($request->all());

        //Redireccionar

        Return redirect()->route('factura.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $factura = Factura::findOrFail($id);

        return view('factura.show', compact('factura'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        $request->user()->authorizeRoles('admin');
        $factura = Factura::findOrFail($id);
        return view('factura.edit', compact('factura'));
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
        $request->user()->authorizeRoles('admin');
        Factura::findOrFail($id)->update($request->all());

        //Redireccionamos
        return redirect()->route('factura.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $request->user()->authorizeRoles('admin');

        Factura::findOrFail($id)->delete();

        //Redireccionar
        return redirect()->route('factura.index');
    }
}
