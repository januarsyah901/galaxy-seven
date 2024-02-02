import React from "react";
import { Link } from "react-router-dom";
import contents from "./Contents";

export default function Competition() {
    return (
        <div className="container competition p-4 mt-5" id="lomba">
            <Title />
            <Contents />
        </div>
    );
}

function Contents() {
    return (
        <div className="row p-4">
            {contents().map((content) => (
                <Content
                    key={content.title}
                    title={content.title}
                    icon={content.icon}
                    desc={content.desc}
                    id={content.id}
                />
            ))}
        </div>
    );
}

function Title() {
    return (
        <div className="row competition-title ">
            <div className="col-lg-6">
                <div className="ps-lg-4 pe-lg-2 py-4">
                    <h1>
                        Lomba{" "}
                        <img
                            src={window.url + "landing/bintangtropy2.png"}
                            alt="Tropy"
                            className="bintangTropy"
                        />
                    </h1>
                    <h2>Yang kami adakan</h2>
                </div>
            </div>
            <div className="col-lg-6">
                <div className="pe-lg-4 ps-lg-2 py-4">
                    <p>
                        Dengan bangga, kami mempersembahkan serangkaian lomba
                        yang menantang dan menginspirasi bagi para siswa SMP
                        untuk mengeksplorasi potensi mereka dalam berbagai
                        bidang. Lomba-lomba yang kami adakan mencakup:
                    </p>
                </div>
            </div>
        </div>
    );
}

function Content({ title, icon, desc, id }) {
    return (
        <div className="col-lg-4 col-md-6 ">
            <div className="p-4 my-3 content ">
                <div className="d-flex justify-content-between content-title">
                    <h1>
                        Lomba <br /> {title}
                    </h1>
                    <img
                        src={window.url + "icon/" + icon}
                        alt="mapel"
                        className="mapel-icon"
                    />
                </div>
                <p>{desc}</p>
                <div className="text-end">
                    <Link to={"competition/" + id}>
                        <button className="btn">
                            <IconButton />
                        </button>
                    </Link>
                </div>
            </div>
        </div>
    );
}
function IconButton() {
    return (
        <svg
            xmlns="http://www.w3.org/2000/svg"
            className="iconButton"
            viewBox="0 0 73 73"
            fill="none"
        >
            <circle cx="36.5" cy="36.5" r="36.5" fill="#6D27E0" />
            <path
                d="M29.3217 41.2652C28.9159 41.6398 28.8906 42.2725 29.2652 42.6783C29.6398 43.0841 30.2725 43.1094 30.6783 42.7348L29.3217 41.2652ZM43.9992 30.04C44.0213 29.4881 43.5918 29.0229 43.04 29.0008L34.0472 28.6411C33.4953 28.619 33.0301 29.0485 33.008 29.6003C32.9859 30.1522 33.4154 30.6174 33.9672 30.6395L41.9608 30.9592L41.6411 38.9528C41.619 39.5047 42.0485 39.9699 42.6003 39.992C43.1522 40.0141 43.6174 39.5846 43.6395 39.0328L43.9992 30.04ZM30.6783 42.7348L43.6783 30.7348L42.3217 29.2652L29.3217 41.2652L30.6783 42.7348Z"
                fill="white"
            />
        </svg>
    );
}
