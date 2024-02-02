import React from "react";
import Navbar from "../components/navbar";
import Footer from "../components/Footer";
import TextTitle from "../components/textTitle";
import Cuplikan from "../components/cuplikan";

export default function AboutUs() {
    return (
        <>
            <Navbar />
            <Us />
            <About />
            <Footer />
        </>
    );
}

function Us() {
    return (
        <div className="container my-5 py-5">
            <div className="text-center us">
                <div className="d-inline-block position-relative">
                    <TextTitle
                        text2="Ayo lebih mengenal Galaxy"
                        desc="GALAXY merupakan sebuah event tahunan yang diselenggarakan oleh MA istimewa Amanatul Ummah layanan sks.kegiatan galaxy ini sangat penting untuk dikembangkan upaya untuk meningkatkan kualitas generasi muda untuk menghadapi era milenial mengingat bangsa Indonesia saat ini semakin tertinggal karena tidak memiliki SDM yang mumpuni. Galaxy diharapkan menjadi wadah yang pas untuk menampung bakat dan kemampuan pelajar serta konstribusidalam menghadapi globalisasi yang semakin berkembang pesat."
                    >
                        <img
                            src={window.url + "icon/Emot Rocket.png"}
                            alt="Tropy"
                            className="bintangTropy"
                        />
                        About Us
                        <img
                            src={window.url + "icon/Sparkles.png"}
                            alt="Tropy"
                            className="bintangTropy"
                        />
                    </TextTitle>
                    <img
                        src={window.url + "icon/comet.png"}
                        alt="Comet"
                        className="us-image1 position-absolute"
                    />
                    <img
                        src={window.url + "icon/Planet-1.png"}
                        alt="Planet"
                        className="us-image2 position-absolute"
                    />
                    <img
                        src={window.url + "icon/Planet-13.png"}
                        alt="Planet"
                        className="us-image3 position-absolute"
                    />
                    <img
                        src={window.url + "icon/Star2.png"}
                        alt="Star"
                        className="us-image4 position-absolute"
                    />
                </div>
            </div>
        </div>
    );
}

function About() {
    return (
        <div className="overflow-hidden my-5 py-5">
            <div className="container my-5 py-5  ">
                <div className="row">
                    <div className="col-lg-6 d-flex justify-content-center align-items-start mt-3">
                        <img
                            src={window.url + "icon/image 10.png"}
                            alt="Tropy"
                            className="landing-tropy"
                        />
                    </div>
                    <div className="col-lg-6 d-flex justify-content-center align-items-center mt-3">
                        <div className="d-block">
                            <TextTitle
                                text2="Penyelenggaraan Event Sebelumnya"
                                desc="Greatest Academic in the Large Andromeda X-tion of Creativity (GALAXY), acara tahunan oleh MA Istimewa Amanatul Ummah Pacet, Mojokerto, menggelar perlombaan, seminar, pameran karya santri, dan malam puncak spektakuler. Olimpiade MIPA, IPS, PAI, dan Bahasa Inggris tingkat SMP/MTs menjadi salah satu bagian terbesar dalam acara ini. 

                            GALAXY telah sukses menyelenggarakan enam periode, dengan GALAXY 6.0 berlangsung selama 3 hari, diakhiri dengan Malam Puncak yang memukau. GALAXY telah menjadi ikon besar dan akan kembali dalam GALAXY 7.0 dengan keseruan yang tak terduga. Menariknya, rangkaian acaranya masih menjadi rahasia yang menarik minat para peserta. Kehadiran Anda sangat dinanti dalam GALAXY 7.0!"
                            >
                                <img
                                    src={window.url + "icon/Trophy.png"}
                                    alt="Tropy"
                                    className="bintangTropy"
                                />
                                Galaxy
                                <img
                                    src={window.url + "icon/Sparkles.png"}
                                    alt="Tropy"
                                    className="bintangTropy"
                                />
                            </TextTitle>
                        </div>
                    </div>
                </div>

                <div className="d-flex justify-content-center mt-5 pt-5x">
                    <img
                        className="landing-img"
                        src={window.url + "about/aboutus.png"}
                        alt="landing"
                    />
                </div>

                <Cuplikan btn={true} />
            </div>
        </div>
    );
}
