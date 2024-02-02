import React from "react";
import { Link } from "react-router-dom";

export default function Navbar() {
    return (
        <NavContainer>
            <Logo />
            <Toggler />
            <NavList />
            <Loginregis />
        </NavContainer>
    );
}

function NavContainer({ children }) {
    return (
        <nav
            className="navbar navbar-expand-lg fixed-top py-4 mx-3"
            style={{ padding: 0, height: "px" }}
        >
            <div className="container inner-navbar d-flex justify-content-between">
                {children}
            </div>
        </nav>
    );
}

function Logo() {
    return (
        <Link to={"/"} className="text-decoration-none">
            <div className="glx-logo d-block">Galaxy</div>
        </Link>
    );
}

function Loginregis() {
    return (
        <div className="d-lg-flex d-none loginregis ">
            <a href={window.link + "/login"} className="login">
                Login
            </a>
            <a href={window.link + "/register"} className="signin">
                Sign in
            </a>
        </div>
    );
}

function Toggler() {
    return (
        <button
            className="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                width="34"
                height="34"
                fill="black"
                className="bi bi-list"
                viewBox="0 0 16 16"
            >
                <path
                    fillRule="evenodd"
                    d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"
                />
            </svg>
        </button>
    );
}

function NavList() {
    return (
        <div
            className="collapse navbar-collapse menu rounded-2 justify-content-center"
            id="navbarNavDropdown"
        >
            <ul className="navbar-nav">
                <Link to="/aboutus" className="text-decoration-none">
                    <ListNav name="About Us" />
                </Link>

                <ListNav href={window.link + "#lomba"} name="Lomba" />

                <ListNav href={window.link + "#faq"} name="FAQ" />

                <ListNav href="#galeri" name="Galeri" />
                <li className="nav-item d-lg-none d-block pb-lg-0 pb-3">
                    <Loginregis />
                </li>
            </ul>
        </div>
    );

    function ListNav({ href, name }) {
        return (
            <li className="nav-item">
                <a
                    style={{ padding: "0px" }}
                    className="nav-link"
                    aria-current="page"
                    href={href}
                >
                    <p className="nav-color-1">{name}</p>
                </a>
            </li>
        );
    }
}
