import React from "react";

export default function timeline() {
    return (
        <div class="container mt-5 my-5 py-5" id="timeline">
            <div class="row text-center justify-content-center mb-5">
                <div class="col-xl-6 col-lg-8 title-timeline">
                    <h2 class="">
                        Timeline{" "}
                        <img
                            src={window.url + "icon/jam.png"}
                            alt="Tropy"
                            className="bintangTropy"
                        />
                    </h2>
                    <p class="text-muted">Lomba Galaxy 7.0 </p>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div
                        class="timeline-steps aos-init aos-animate"
                        data-aos="fade-up"
                    >
                        {steps.map((step, i) => {
                            return (
                                <TimelineStep
                                    key={i}
                                    title={step.title}
                                    time={step.time}
                                    num={i + 1}
                                />
                            );
                        })}
                    </div>
                </div>
            </div>
        </div>
    );
}

function TimelineStep({ num, title, time }) {
    return (
        <div class="timeline-step">
            <div
                class="timeline-content"
                data-toggle="popover"
                data-trigger="hover"
                data-placement="top"
                title=""
                data-content="And here's some amazing content. It's very engaging. Right?"
                data-original-title="2003"
            >
                <div class="inner-circle">
                    <div className="position-absolute number-timeline">
                        {num}
                    </div>
                </div>
                <p class="h6 mt-3 mb-1 timeline-title">{title}</p>
                <p class="h6 text-muted mb-0 mb-lg-0 timeline-time">{time}</p>
            </div>
        </div>
    );
}

const steps = [
    {
        title: "Pendaftaran",
        time: "1 Desember 2023-29 Januari 2024",
    },
    {
        title: "Penyisihan",
        time: "3-4 Februari 2024",
    },
    {
        title: "Pengumpulan Karya Non Akademik",
        time: "7-13 Februari 2024",
    },
    {
        title: "Perempat Final",
        time: "17-18 Februari 2024",
    },
    {
        title: "Semifinal & final",
        time: "25 Februari 2024",
    },
];
