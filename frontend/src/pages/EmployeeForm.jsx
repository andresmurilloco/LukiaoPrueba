import React from "react";
import "./css/employeeForm.css";

const EmployeeForm = () => {
  return (
    <div className="employeesform-container">
      <h1>Añadir un nuevo empleado</h1>
      <form className="employees-form">
        <input type="text" placeholder="Nombre" name="nombre" />
        <input type="text" placeholder="Apellido" name="apellido" />
        <input type="text" placeholder="Razón Social" name="razon" />
        <input type="number" placeholder="Cédula" name="cedula" />
        <input type="number" placeholder="Télefono" name="telefono" />
        <input type="text" placeholder="Pais" name="pais" />
        <input type="text" placeholder="Ciudad" name="ciudad" />
        <button type="submit" className="new-employee-button">
          Añadir Empleado
        </button>
      </form>
    </div>
  );
};

export default EmployeeForm;
