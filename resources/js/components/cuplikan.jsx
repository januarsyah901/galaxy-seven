import React from "react";
import ButtonPurple from "./buttonpurple";
export default function Cuplikan({ btn }) {
    return (
        <div className="d-flex">
            <div className="landing-bottom ">
                <h1>
                    Cuplikan
                    <img
                        src={window.url + "landing/camera.png"}
                        alt="Camera icon"
                    />
                </h1>
                <h2>
                    Foto-foto diatas merupakan beberapa cuplikan moment yang
                    telah diabadikan pada saat event galaxy tahun 2023.
                </h2>
                <div className="d-flex mt-3">
                    <div className="mx-auto">
                        {btn ? (
                            ""
                        ) : (
                            <ButtonPurple href={window.link + "/aboutus"}>
                                lihat
                            </ButtonPurple>
                        )}
                    </div>
                </div>
            </div>
        </div>
    );
}
