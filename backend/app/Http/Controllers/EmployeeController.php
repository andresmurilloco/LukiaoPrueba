<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Empleado;

class EmployeeController extends Controller{
    /**
     * Devuelve una lista de todos los empleados en la base de datos.
     * 
     * Este metodo se usa para traer toda la información de los empleados en la base de datos.
     * 
     * @access public
     * @params ninguno
     * @return $empleados
     */
    public function index(){
        $empleados = Empleado::all();
        return $empleados;
    }

    /**
     * Guarda un nuevo empleado en la base de datos.
     * 
     * Este metodo se usa para registrar un nuevo empleado en la base de datos.
     * 
     * @access public
     * @params $request
     * @return ninguno
     */
    public function store(Request $request){
        $request->validate([
            'nombre'=>'required|min:3',
            'apellido'=>'required|min:3',
            'razon'=>'required|min:3',
            'cedula'=>'required|min:3',
            'telefono'=>'required|min:3',
            'pais'=>'required|min:3',
            'ciudad'=>'required|min:3'
        ]);

        $empleado = new Empleado;
        $empleado->nombre = $request->nombre;
        $empleado->apellido = $request->apellido;
        $empleado->razon = $request->razon;
        $empleado->cedula = $request->cedula;
        $empleado->telefono = $request->telefono;
        $empleado->pais = $request->pais;
        $empleado->ciudad = $request->ciudad;
        $empleado->save();
    }

    /**
     * Devuelve el empleado que cumpla con el criterio de busqueda.
     * 
     * Este metodo se usa para encontrar un o unos empleados con mombre, apellido, cedula, razón social, pais o ciudad.
     * 
     * @access public
     * @params $id
     * @return $empleado
     */
    public function show($id){
        $empleado = Empleado::find($id);
        return $empleado;
    }

    /**
     * Actualiza la información de un empleado.
     * 
     * Este metodo se usa para actualizar la información de un empleado usando su ID en la base de datos como referencia.
     * 
     * @access public
     * @params $request, $id
     * @return $empleado
     */
    public function update(Request $request, $id){
        $empleado = Empleado::findOrFail($request->$id);
        $empleado->nombre = $request->nombre;
        $empleado->apellido = $request->apellido;
        $empleado->razon = $request->razon;
        $empleado->cedula = $request->cedula;
        $empleado->telefono = $request->telefono;
        $empleado->pais = $request->pais;
        $empleado->ciudad = $request->ciudad;

        $empleado->save();

        return $empleado;
    }

    /**
     * Elimina un empleado.
     * 
     * Este metodo destruye un registro de la base de datos y elimina el empleado.
     * 
     * @access public
     * @params $id
     * @return $empleado
     */
    public function destroy($id){
        $empleado = Empleado::destroy($id);
        return $empleado;
    }
}
