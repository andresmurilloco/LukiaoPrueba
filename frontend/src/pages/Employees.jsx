import React from "react";
import "./css/employees.css";

const Employees = () => {
  return (
    <div className="employees-container">
      <table className="employees-table">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Razón Social</th>
            <th>Cédula</th>
            <th>Télefono</th>
            <th>Pais</th>
            <th>Ciudad</th>
            <th>Editar</th>
            <th>Eliminar</th>
          </tr>
        </thead>
        <tbody>
          <tr></tr>
        </tbody>
      </table>
    </div>
  );
};

export default Employees;
