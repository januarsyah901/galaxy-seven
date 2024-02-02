// resources/js/App.jsx
import React from "react";
import { createRoot } from "react-dom/client";
import { useState } from "react";
import Landing from "./pages/landing";
import "../css/app.css";
import AboutUs from "./pages/aboutus";
import Login from "./pages/login";

import { BrowserRouter as Router, Routes, Route } from "react-router-dom";
import Lomba from "./pages/lomba";

// import "app.css"

export default function App() {
    return (
        <Router>
            <Routes>
                <Route path="/" element={<Landing />} />
                <Route path="/home" element={<Landing />} />
                <Route path="/aboutus" element={<AboutUs />} />
                <Route path="/competition/:id" element={<Lomba />} />
                <Route path="/login" element={<Login />} />
            </Routes>
        </Router>
    );
}

if (document.getElementById("root")) {
    createRoot(document.getElementById("root")).render(<App />);
}
