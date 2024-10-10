<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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

     // Método para eliminar un cliente
     public function destroy($id)
     {
        //Log::info('Deleting: ' . $id);

         $customer = Customer::find($id);
 
         if (!$customer) {
             return response()->json(['message' => 'Customer not found'], 400);
         }
 
         $customer->delete();
 
         return response()->json(['message' => 'Customer deleted successfully'], 200);
     }

       // Método para actualizar un cliente
    public function update(Request $request, $id)
    {
        // Buscar el cliente por ID
        $customer = Customer::find($id);

        // Verificar si el cliente existe
        if (!$customer) {
            return response()->json(['message' => 'Customer not found'], 404);
        }


         // Validar los datos entrantes
         $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:customers,email,' . $id, // Excluye el cliente actual para evitar conflicto de email
            'birth_date' => 'required|date_format:Y-m-d',
            'personal_phone' => 'required|digits:10',
            'contact_phone' => 'nullable|digits:10', // Ahora es opcional
            'zip_code' => 'required|digits:6',
        ]);

         // Actualizar los datos del cliente
         $customer->update($validatedData);

         // Retornar respuesta con datos actualizados
         return response()->json(['message' => 'Customer updated successfully', 'customer' => $customer], 200);
     }


    
}