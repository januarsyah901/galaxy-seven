import React, { useState } from "react";
import TextTitle from "./textTitle";

const questions = [
    {
        question: "BAGAIMANA CARA MENGUPLOAD HASIL KARYA?",
        answer: ` hasil karya kamu dapat kamu upload melalui link berikut
        ini <a href="https://intip.in/pengumpulanmultimediagalaxy">intip.in/pengumpulanmultimediagalaxy</a>
        Pastikan kamu mengupload hasil karya pada waktu yang telah ditentukan dan pastikan juga mengisi formular pengumpulan dengan baik dan benar`,
    },
    {
        question: "BAGAIMANA CARA KONFIRMASI BUKTI PEMBAYARAN TRANSFER",
        answer: `kamu bisa konfirmasi bukti pembayaran transfer melalui nomor berikut ini <a
        href="https://wa.me/6285157748815">085157748815</a>`,
    },
    {
        question: "BAGAIMANA CARA MENGIKUTI LOMBA GALAXY",
        answer: `kamu bisa mengikuti lomba galaxy akademik dnegan cara mengisi formular pada link <a href={window.urlRegister}>Berikut</a>
        Dan lomba galaxy Non-Akademik dengan cara mengisi formulir pada link berikut
        <a href="https://intip.in/daftargalaxy/">https://intip.in/daftargalaxy/</a>`,
    },
    {
        question: "NOMOR SIAPA YANG BISA SAYA HUBUNGI?",
        answer: `  kamu bisa menghubungi nomor WhatsApp dibawah ini <br>
        - <a href="https://wa.me/6282132352327">082132352327(admin galaxy)</a> <br>
        - <a href="https://wa.me/6281227177815">081227177815(admin galaxy 2)</a>`,
    },
];

export default function Faq() {
    return (
        <div className="container py-5 my-5" id="faq">
            <div className="row">
                <div className="col-lg-6 order-2 order-lg-1 my-3">
                    <TextTitle
                        text2="Kalian punya pertanyaan?"
                        desc="Semoga pertanyaan mu terjawab ya, jika belum kalian bisa langsung menghubungi panitia ya"
                    >
                        Frequently Asked Questions 🧐
                    </TextTitle>
                    {questions.map((question, i) => {
                        return (
                            <ItemFaq
                                key={i}
                                question={question.question}
                                answer={question.answer}
                            />
                        );
                    })}
                </div>

                <div className="col-lg-6 d-flex justify-content-center align-items-center order-1 order-lg-2 my-3">
                    <img
                        src={window.url + "icon/rocket.png"}
                        alt="rocket"
                        className="faq-img"
                    />
                </div>
            </div>
        </div>
    );
}

function ItemFaq({ answer, question }) {
    const [itemFaq, setItemFaq] = useState(false);
    function handleItemFaq() {
        setItemFaq(!itemFaq);
    }

    return (
        <div
            className="item-faq d-flex justify-content-between align-items-center pb-4 my-4"
            onClick={handleItemFaq}
        >
            <div className="d-inline-block pe-3">
                <h1>{question}</h1>
                <p
                    className={itemFaq ? "d-block" : "d-none"}
                    dangerouslySetInnerHTML={{ __html: answer }}
                ></p>
            </div>
            <div className="d-inline-block">
                {itemFaq ? <Plus /> : <Minus />}
            </div>
        </div>
    );
}

function Minus() {
    return (
        <svg
            xmlns="http://www.w3.org/2000/svg"
            width="16"
            height="3"
            viewBox="0 0 16 3"
            fill="none"
        >
            <path
                d="M1 1.5L15 1.5"
                stroke="#676767"
                strokeWidth="2"
                strokeLinecap="round"
            />
        </svg>
    );
}

function Plus() {
    return (
        <svg
            xmlns="http://www.w3.org/2000/svg"
            width="16"
            height="16"
            viewBox="0 0 16 16"
            fill="none"
        >
            <path
                d="M1 8L15 8"
                stroke="#676767"
                strokeWidth="2"
                strokeLinecap="round"
            />
            <path
                d="M8 15V1"
                stroke="#676767"
                strokeWidth="2"
                strokeLinecap="round"
            />
        </svg>
    );
}
