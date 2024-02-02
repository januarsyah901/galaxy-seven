import React from "react";
import { Link } from "react-router-dom";
import Navbar from "../components/navbar";
import TextTitle from "../components/textTitle";
import Cuplikan from "../components/cuplikan";
import ButtonPurple from "../components/buttonpurple";
import Competition from "../components/competition.jsx";
import Timeline from "../components/timeline.jsx";
import Faq from "../components/faq.jsx";
import Ads from "../components/ads.jsx";
import Footer from "../components/Footer.jsx";

export default function Landing() {
    return (
        <>
            <LandingContainer>
                <Navbar />
                <InnerLanding />
                <Competition />
                <Timeline />
                <Faq />
                <Ads />
                <Footer />
            </LandingContainer>
        </>
    );
}

function LandingContainer({ children }) {
    return <div className="landing">{children}</div>;
}

function InnerLanding() {
    return (
        <div className="container">
            <TextTop />
            <ImageCenter />
            <Link to="/aboutus" className="text-decoration-none">
                <Cuplikan />
            </Link>
            <JoinUs />
        </div>
    );
}

function TextTop() {
    return (
        <div className="landing-text row">
            <div className="col-lg-6">
                <div className="landing-text-1">
                    <h1 className="landing-brand">
                        Galaxy <span>7.0</span>
                        <img
                            className="tagline-brand-img"
                            src={window.url + "landing/landing1.png"}
                            alt="planet"
                        />
                    </h1>
                    <div className="landing-tagline">
                        Cyberspace the world’s reflection
                    </div>
                </div>
            </div>
            <div className="col-lg-6">
                <div className="landing-text-2 d-flex mx-1 row mt-lg-0 mt-5">
                    <div className="col-lg-8">
                        <div className="text pe-1">
                            <div className="landing-est d-flex">
                                <span>//</span>
                                <span>About Us</span>
                                <span>Est 2017</span>
                            </div>
                            <div className="landing-detail-text mt-3">
                                GALAXY merupakan sebuah event tahunan yang
                                diselenggarakan oleh MA istimewa Amanatul Ummah
                                layanan sks.
                            </div>
                        </div>
                    </div>
                    <div className="col-lg-4 mt-5 mt-lg-0">
                        <Link to="/aboutus" className="text-decoration-none">
                            <ButtonPurple>
                                Selengkapnya <IconArrow />
                            </ButtonPurple>
                        </Link>
                    </div>
                </div>
            </div>
        </div>
    );
}

function ImageCenter() {
    return (
        <div className="d-flex justify-content-center mt-5">
            <img
                className="landing-img"
                src={window.url + "landing/landing.png"}
                alt="landing"
            />
        </div>
    );
}

function JoinUs() {
    return (
        <div className="row joinUs">
            <JoinUs1 />
            <JoinUs2 />
        </div>
    );
}

function JoinUs1() {
    return (
        <div className="col-lg-6 d-flex justify-content-center align-items-start mt-3">
            <img
                src={window.url + "landing/tropy.png"}
                alt="Tropy"
                className="landing-tropy"
            />
        </div>
    );
}

function JoinUs2() {
    return (
        <div className="col-lg-6 d-flex justify-content-center align-items-center mt-3">
            <div className="d-block">
                <TextTitle
                    text2="Bergabunglah bersama kami!"
                    desc="Ayo, jangan lewatkan kesempatan emas ini untuk menunjukkan kemampuanmu, mengeksplorasi bakatmu, dan berpetualang di dunia ilmu dan kreativitas dengan lomba Galaxy!"
                >
                    Tunggu Apa Lagi{" "}
                    <img
                        src={window.url + "landing/bintangtropy.png"}
                        alt="Tropy"
                        className="bintangTropy"
                    />
                </TextTitle>
                <Link to="/aboutus" className="text-decoration-none">
                    <ButtonPurple>Lihat</ButtonPurple>
                </Link>
            </div>
        </div>
    );
}

function IconArrow() {
    return (
        <svg
            xmlns="http://www.w3.org/2000/svg"
            width="16"
            height="16"
            viewBox="0 0 16 16"
            fill="none"
        >
            <path
                d="M1 7C0.447715 7 0 7.44772 0 8C0 8.55228 0.447715 9 1 9V7ZM15.7071 8.70711C16.0976 8.31658 16.0976 7.68342 15.7071 7.29289L9.34315 0.928932C8.95262 0.538408 8.31946 0.538408 7.92893 0.928932C7.53841 1.31946 7.53841 1.95262 7.92893 2.34315L13.5858 8L7.92893 13.6569C7.53841 14.0474 7.53841 14.6805 7.92893 15.0711C8.31946 15.4616 8.95262 15.4616 9.34315 15.0711L15.7071 8.70711ZM1 9H15V7H1V9Z"
                fill="white"
            />
        </svg>
    );
}
