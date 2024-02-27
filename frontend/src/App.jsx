import React from "react";
import "./app.css";

const App = () => {
  return (
    <div className="home-container">
      <h1>Bienvenidos</h1>
      <p>Por favor seleccione una opción</p>
      <div className="home-buttons-container">
        <a href="/employees" className="home-employees home-button">
          Lista de empleados
        </a>
        <a href="/employee" className="home-single-employee home-button">
          Buscar un empleado
        </a>
        <a href="/employeeForm" className="home-new-employee home-button">
          Añadir un empleado
        </a>
      </div>
    </div>
  );
};

export default App;
