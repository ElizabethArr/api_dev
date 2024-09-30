<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return response()->json(Customer::all());
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255', // Máximo de 255 caracteres
            'last_name' => 'required|string|max:255', // Mínimo de 4 caracteres
            'email' => 'required|email|unique:customers,email', // Valida formato de email
            'birth_date' => 'required|date_format:Y-m-d', // Valida formato YYYY-MM-DD
            'personal_phone' => 'required|digits:10', // Valida exactamente 10 dígitos
            'contact_phone' => 'required|digits:10', // Valida exactamente 10 dígitos
            'password' => 'required|string|min:10|max:255', // Mínimo de 10 caracteres
            'zip_code' => 'required|digits:6', // Valida exactamente 6 dígitos
        ]);
    
        $customer = Customer::create($validatedData);
    
        return response()->json($customer, 201);
    }
    
}