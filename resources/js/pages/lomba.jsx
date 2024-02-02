import React from "react";
import Navbar from "../components/navbar";
import Footer from "../components/Footer";
import TextTitle from "../components/textTitle";
import ButtonPurple from "../components/buttonpurple";
import { useParams } from "react-router-dom";
import contents from "../components/Contents";

const Lomba = () => {
    const { id } = useParams();

    return (
        <>
            <Navbar />
            <Title id={id} />
            <Info price={contents()[id - 1].price} />
            <Pengumuman />
            <Footer />
        </>
    );
};

function Title({ id }) {
    return (
        <div className="container mapel my-5">
            <div className="row">
                <div className="col-lg-6">
                    <TextTitle text2={contents()[id - 1].title}>
                        Lomba Galaxy
                        <img
                            src={window.url + "icon/Sparkles.png"}
                            alt="Tropy"
                            className="bintangTropy"
                        />
                        <img
                            src={window.url + "icon/microscope.png"}
                            alt="Tropy"
                            className="bintangTropy"
                        />
                    </TextTitle>
                </div>
                <div className="col-lg-6">
                    <p className="mapel-text">{contents()[id - 1].desc}</p>
                </div>
            </div>
        </div>
    );
}

function Info({ price }) {
    return (
        <div className="container">
            <h1 className="judul-info">Informasi :</h1>
            <InfoList
                icon="book.svg"
                title="Buku Panduan"
                desc="Untuk lebih lengkapnya kalian bisa download buku panduan ini ya!"
                link="intip.in/kebutuhanpesertagalaxy"
            />
            <InfoList
                icon="money.svg"
                title="Biaya pendaftaran"
                desc={`Nominal biaya untuk mengikuti lomba yang ada di event Galaxy ini adalah ${price}`}
                link={window.link + "/register"}
            />
        </div>
    );
}

function InfoList({ icon, title, desc, link }) {
    return (
        <div className="row my-1">
            <div className="col-lg-6 py-3">
                <div className="d-flex">
                    <div className="d-inline-block pe-3">
                        <img
                            src={window.url + "icon/" + icon}
                            alt="icon book"
                            className="icon-info"
                        />
                    </div>
                    <div className="d-inline-block text-info my-auto">
                        <h1>{title}</h1>
                        <h2>{desc}</h2>
                    </div>
                </div>
            </div>
            <div className="col-lg-6 py-3">
                <div className="d-flex justify-content-end">
                    <div className="d-inline-block">
                        <ButtonPurple href={link}>Download</ButtonPurple>
                    </div>
                </div>
            </div>
        </div>
    );
}

function Pengumuman() {
    return (
        <div className="container">
            <div className="pengumuman">
                <h1>Pengumuman</h1>
                <p>
                    Pengumuman akan diumumkan pada tanggal 3 Februari 2024 di
                    website dan di grup WA, Stay tune ya!
                </p>
            </div>
        </div>
    );
}

export default Lomba;
