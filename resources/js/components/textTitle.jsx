import React from "react";

export default function TextTitle({ children, text2, desc }) {
    return (
        <div className="textTitle">
            <h1>{children}</h1>
            <h2>{text2}</h2>
            <p>{desc}</p>
        </div>
    );
}
