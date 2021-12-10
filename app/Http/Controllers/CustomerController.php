<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $customer = Customer::all();
        return view('pages.customer.index', ['cust'=>$customer]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|unique:m_customer',
            'name' => 'required',
            'address' => 'required',
            'telp' => 'required|numeric',
        ]);

        $cust = new Customer;
        $cust->name = $request->name;
        $cust->email = $request->email;
        $cust->address = $request->address;
        $cust->telp = $request->telp;
        $cust->save();

        return redirect('/')->with('status', 'Data berhasil ditambahkan');
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
        $customer = Customer::find($id);
        return view('pages.customer.edit', ['cust'=>$customer]);
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
        $validated = $request->validate([
            'email' => 'required|unique:m_customer',
            'name' => 'required',
            'address' => 'required',
            'telp' => 'required|numeric',
        ]);

        $cust = Customer::find($id);
        $cust->name = $request->name;
        $cust->email = $request->email;
        $cust->address = $request->address;
        $cust->telp = $request->telp;
        $cust->save();

        return redirect('/')->with('status', 'Data berhasil diubah');
    }

    public function destroy($id)
    {
        $cust = Customer::find($id);

        $cust->delete();

        return redirect('/')->with('status', 'Data berhasil dihapus');
    }
}
