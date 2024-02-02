import React from "react";

export default function ButtonPurple({ href, children }) {
    return (
        <div className="d-inline-block">
            <a href={href} className="button-purple">
                {children}
            </a>
        </div>
    );
}
