import React from "react";
import ReactDOM from "react-dom/client";
import "./index.css";
import App from "./App";
import Layout from "./components/Layout/Layout";
import { RouterProvider, createBrowserRouter } from "react-router-dom";
import Employee from "./pages/Employee";
import Employees from "./pages/Employees";
import EmployeeForm from "./pages/EmployeeForm";

const router = createBrowserRouter([
  { path: "/", element: <App /> },
  { path: "/employees", element: <Employees /> },
  { path: "/employee", element: <Employee /> },
  { path: "/employeeForm", element: <EmployeeForm /> },
]);

const root = ReactDOM.createRoot(document.getElementById("root"));
root.render(
  <React.StrictMode>
    <Layout>
      <RouterProvider router={router} />
    </Layout>
  </React.StrictMode>
);
