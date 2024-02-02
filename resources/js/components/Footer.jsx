import React from "react";
import { Link } from "react-router-dom";

export default function footer() {
    return (
        <footer className="">
            <div className="container mx-auto row py-5 mt-5 border-top">
                <LeftFooter />
                <RightFooter />

                <div className="col-12 order-3 border-footer px-0">
                    <p className="cp mt-3 text-start">
                        Copyright ©{new Date().getFullYear()}. All rights
                        <a href="https://www.instagram.com/fatihfwz/">Fatih</a>,
                        <a href="https://www.instagram.com/tmhhgg80/">
                            Januarsyah
                        </a>
                        ,
                        <a href="https://www.instagram.com/nasauramecca/">
                            Haqqan
                        </a>
                    </p>
                </div>
            </div>
        </footer>
    );
}

function LeftFooter() {
    return (
        <div className="col-lg-6 order-lg-1 order-1 mb-3">
            <div className="footer-qdayak d-block text-start">
                <h5>
                    Galaxy <span>7.0</span>
                </h5>

                <p className="text-start mt-3">
                    Di "Galaxy," kami percaya bahwa setiap siswa memiliki
                    potensi yang tak terbatas, dan kami ingin menjadi
                    katalisator bagi perkembangan mereka.
                </p>

                <div className="medsos">
                    <a
                        href="https://instagram.com"
                        className="icon-ig text-decoration-none"
                    >
                        <Instagram />
                    </a>
                </div>
            </div>
        </div>
    );
}

function RightFooter() {
    return (
        <div className="col-lg-6 mb-3 order-2">
            <ul className="nav footer-kiri text-start justify-content-end">
                <ul className="p-0">
                    <li className="nav-item mb-2 ">
                        <a
                            href="#aboutus"
                            className="nav-link p- text-start judul"
                        >
                            Event
                        </a>
                    </li>
                    <Link to="/competition/1" className="text-decoration-none">
                        <NavFoot name="Lomba MIPA" />
                    </Link>
                    <Link to="/competition/2" className="text-decoration-none">
                        <NavFoot name="Lomba IPS" />
                    </Link>
                    <Link to="/competition/3" className="text-decoration-none">
                        <NavFoot name="Lomba B.Inggris" />
                    </Link>
                    <Link to="/competition/4" className="text-decoration-none">
                        <NavFoot name="Lomba PAI" />
                    </Link>

                    <Link to="/competition/5" className="text-decoration-none">
                        <NavFoot name="Lomba Poster" />
                    </Link>
                    <Link to="/competition/6" className="text-decoration-none">
                        <NavFoot name="Lomba Fotografi" />
                    </Link>
                    <Link to="/competition/7" className="text-decoration-none">
                        <NavFoot name="Lomba Pidato" />
                    </Link>
                </ul>
                <ul className="p-0">
                    <li className="nav-item mb-2">
                        <a href="#" className="nav-link p- text-start judul">
                            Quick Link
                        </a>
                    </li>

                    <Link to="/aboutus" className="text-decoration-none">
                        <NavFoot name="About Us" />
                    </Link>
                    <NavFoot name="Lomba" link={window.link + "#lomba"} />
                    <NavFoot name="Timeline" link={window.link + "#timeline"} />
                    <Link to="/aboutus" className="text-decoration-none">
                        <NavFoot name="Galeri" />
                    </Link>
                </ul>
            </ul>
        </div>
    );
}

function NavFoot({ name, link }) {
    return (
        <li className="nav-item mb-2">
            <a href={link} className="nav-link p- text-start">
                {name}
            </a>
        </li>
    );
}

function Instagram() {
    return (
        <svg
            className=""
            xmlns="http://www.w3.org/2000/svg"
            width="30"
            height="30"
            viewBox="0 0 23 23"
            fill="white"
        >
            <path
                d="M8.48 5H13.52C15.44 5 17 6.56 17 8.48V13.52C17 14.443 16.6334 15.3281 15.9807 15.9807C15.3281 16.6334 14.443 17 13.52 17H8.48C6.56 17 5 15.44 5 13.52V8.48C5 7.55705 5.36664 6.6719 6.01927 6.01927C6.6719 5.36664 7.55705 5 8.48 5ZM8.36 6.2C7.78713 6.2 7.23773 6.42757 6.83265 6.83265C6.42757 7.23773 6.2 7.78713 6.2 8.36V13.64C6.2 14.834 7.166 15.8 8.36 15.8H13.64C14.2129 15.8 14.7623 15.5724 15.1674 15.1674C15.5724 14.7623 15.8 14.2129 15.8 13.64V8.36C15.8 7.166 14.834 6.2 13.64 6.2H8.36ZM14.15 7.1C14.3489 7.1 14.5397 7.17902 14.6803 7.31967C14.821 7.46032 14.9 7.65109 14.9 7.85C14.9 8.04891 14.821 8.23968 14.6803 8.38033C14.5397 8.52098 14.3489 8.6 14.15 8.6C13.9511 8.6 13.7603 8.52098 13.6197 8.38033C13.479 8.23968 13.4 8.04891 13.4 7.85C13.4 7.65109 13.479 7.46032 13.6197 7.31967C13.7603 7.17902 13.9511 7.1 14.15 7.1ZM11 8C11.7956 8 12.5587 8.31607 13.1213 8.87868C13.6839 9.44129 14 10.2044 14 11C14 11.7956 13.6839 12.5587 13.1213 13.1213C12.5587 13.6839 11.7956 14 11 14C10.2044 14 9.44129 13.6839 8.87868 13.1213C8.31607 12.5587 8 11.7956 8 11C8 10.2044 8.31607 9.44129 8.87868 8.87868C9.44129 8.31607 10.2044 8 11 8ZM11 9.2C10.5226 9.2 10.0648 9.38964 9.72721 9.72721C9.38964 10.0648 9.2 10.5226 9.2 11C9.2 11.4774 9.38964 11.9352 9.72721 12.2728C10.0648 12.6104 10.5226 12.8 11 12.8C11.4774 12.8 11.9352 12.6104 12.2728 12.2728C12.6104 11.9352 12.8 11.4774 12.8 11C12.8 10.5226 12.6104 10.0648 12.2728 9.72721C11.9352 9.38964 11.4774 9.2 11 9.2Z"
                fill="white"
            />
        </svg>
    );
}
