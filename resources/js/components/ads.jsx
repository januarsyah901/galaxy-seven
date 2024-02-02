import React from "react";
import TextTitle from "./textTitle";

export default function ads() {
    return (
        <section id="ads">
            <div class="container">
                <div className="text-center mx-5">
                    <TextTitle
                        text2="Yang berkolaborasi dengan galaxy"
                        desc="Kami merasa terhormat dan berterima kasih kepada mitra media dan sponsor kami yang mendukung dan turut berperan dalam kesuksesan acara ini. Kolaborasi kami dengan mereka tidak hanya memperkuat acara ini, tetapi juga menjadi sarana untuk menyebarkan inspirasi dan inovasi kepada lebih banyak orang."
                    >
                        Sponsor & Media Partner
                    </TextTitle>
                </div>
                <div class="sponsor text-start pt-4 mt-5">
                    <h2 class="mb-4">Sponsor</h2>

                    <div class="row">
                        <div class="col-lg-4 col-6"></div>
                    </div>
                </div>
                <div class="sponsor text-start pt-4 mt-5">
                    <h2 class="mb-4">Media Partner</h2>

                    <div class="row">
                        <div class="col-lg-4 col-6">
                            <div class="m-5">
                                <img
                                    src={window.urlAds + "mediapartner1.jpg"}
                                    alt=""
                                    class="ads-gambar"
                                />
                            </div>
                        </div>
                        <div class="col-lg-4 col-6">
                            <div class="m-5">
                                <img
                                    src={window.urlAds + "mediapartner2.png"}
                                    alt=""
                                    class="ads-gambar"
                                />
                            </div>
                        </div>
                        <div class="col-lg-4 col-6">
                            <div class="m-5">
                                <img
                                    src={window.urlAds + "mediapartner3.jpg"}
                                    alt=""
                                    class="ads-gambar"
                                />
                            </div>
                        </div>
                        <div class="col-lg-4 col-6">
                            <div class="m-5">
                                <img
                                    src={window.urlAds + "mediapartner4.png"}
                                    alt=""
                                    class="ads-gambar"
                                />
                            </div>
                        </div>
                        <div class="col-lg-4 col-6">
                            <div class="m-5">
                                <img
                                    src={window.urlAds + "mediapartner5.jpg"}
                                    alt=""
                                    class="ads-gambar"
                                />
                            </div>
                        </div>
                        <div class="col-lg-4 col-6">
                            <div class="m-5">
                                <img
                                    src={window.urlAds + "mediapartner6.jpg"}
                                    alt=""
                                    class="ads-gambar"
                                />
                            </div>
                        </div>
                        <div class="col-lg-4 col-6">
                            <div class="m-5">
                                <img
                                    src={window.urlAds + "mediapartner7.jpg"}
                                    alt=""
                                    class="ads-gambar"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    );
}
