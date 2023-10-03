<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return view('pages.customer.index', [
            'search' => $request->search,
            'num_page' => $request->num_page,
            'data' => Customer::render(
                $request->search,
                $request->num_page
            ),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.customer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCustomerRequest $request)
    {
        try {
            Customer::create($request->validated());
            return redirect()
                ->route('customer.index')
                ->with('success', 'Success!');
        } catch (\Throwable $th) {
            return back()->with('error', 'Error!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        return view('pages.customer.edit', [
            'data' => $customer,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        try {
            $customer->update($request->validated());
            return back()->with('success', 'Success!');
        } catch (\Throwable $th) {
            return back()->with('error', 'Error!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        try {
            $customer->delete();
            return back()->with('success', 'Success!');
        } catch (\Throwable $th) {
            return back()->with('error', 'Error!');
        }
    }
}
