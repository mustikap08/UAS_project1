<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Catalog;
use Carbon\Carbon;
Use PDF;
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::with('catalog')->get();
        return view('customers.index',['customer'=>$customers]);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $catalog = Catalog::all();
        return view('customers.create',['catalog'=>$catalog]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //add data
        $customer = new Customer;
        if($request->file('photo')){
            $image_name = $request->file('photo')->store('images','public');
            }
        Customer::create($request->all());
        $customer->name = $request->name;
        $customer->address = $request->address;
        $customer->number_tlp = $request->number_tlp;
        $customer->order_date = $request->order_date;
        $customer->catalog_theme = $request->catalog_theme;
        $customer->package = $request->package;
        $customer->total_product = $request->total_product;
        $customer->photo = $image_name;


        $catalog = new Catalog;
        $catalog->id = $request->Catalog;

        $customer->catalog()->associate($catalog);
        $customer->save();


        // if true, redirect to index

        return redirect()->route('customers.index')
        ->with('success', 'Add data success!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customers = Customer::find($id);
        return view('customers.view', ['customer' => $customers]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customers = Customer::find($id);
            return view('customers.edit',['customer'=>$customers]);

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
        $customer = Customer::find($id);
        $customer->name = $request->name;
        $customer->address = $request->address;
        $customer->number_tlp = $request->number_tlp;
        $customer->order_date = $request->order_date;
        $customer->catalog_theme = $request->catalog_theme;
        $customer->package = $request->package;
        $customer->total_product = $request->total_product;
        $customer->save();

        if($customer->photo && file_exists(storage_path('app/public/' . $customer->photo))) {
            \Storage::delete('public/'.$customer->photo); } $image_name = $request->file('photo')->store('images', 'public'); $customer->photo = $image_name;
            
        return redirect()->route('customers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        return redirect()->route('customers.index');
       
    }
    public function search(Request $request)
    {
        $keyword = $request->search;
        $customer = customer::where('name', 'like', "%" . $keyword . "%")->paginate(5);
        return view('customers.index', compact('customer'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function report($id){ 
        $customer = Customer::find($id); 
        $pdf = PDF::loadview('customers.report',['customer'=>$customer]); 
        return $pdf->stream(); 
        }        
}
