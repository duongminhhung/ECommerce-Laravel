<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use Illuminate\Http\Request;
use \Illuminate\Foundation\Auth\AuthenticatesUsers;
use PhpParser\Node\Stmt\TryCatch;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('contact');
    }
    public function login()
    {
        return view('.login');
    }
    public function register()
    {
        return view('.register');
    }

    public function logout()
    {
        session()->flush();
        return redirect()->route('index');  
    }
    public function blog(){
        return view('blog');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store_login(Request $request)
    {
        try{
            $cus = Customer::query()
            ->where('email',$request->get('email'))
            ->where('password',$request->get('password'))
            ->firstOrFail();
            // dd($cus->id);
            session()->put('id',$cus->id);  
            session()->put('name',$cus->name);  
            session()->put('id',$cus->id);  
            session()->put('id',$cus->id);  
            session()->put('id',$cus->id);
            return redirect()->route('index');  
            
        }catch (\Throwable $e) {
            return redirect()->route('login');
        }
        // dd(1);
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCustomerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustomerRequest $request)
    {
        $user = Customer::create(request(['name', 'email', 'password']));
        
        return redirect()->route('index');

    }
    public function about(){
        return view('about');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCustomerRequest  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
