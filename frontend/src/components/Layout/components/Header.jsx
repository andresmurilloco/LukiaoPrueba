import React from "react";
import "./css/header.css";

const Header = () => {
  return (
    <div className="header-container">
      <h1 className="header-title">Prueba tecnica Lukiao</h1>
      <nav className="navigation-header">
        <a href="/" className="">
          Home
        </a>
        <a href="/employees" className="">
          Lista de empleados
        </a>
        <a href="/employee" className="">
          Buscar un empleado
        </a>
        <a href="/employeeForm" className="">
          Añadir un empleado
        </a>
      </nav>
    </div>
  );
};

export default Header;
