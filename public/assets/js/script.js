//cek jaringan

// console.log("halo");
// window.addEventListener("load", () => {
//     const statusJaringan = document.querySelector("#jaringan");
//     statusJaringan.innerHTML = "";

//     const statusOnlineOffline = () => {
//         statusJaringan.classList.remove("offline");
//         statusJaringan.classList.remove("online");
//         const kondisi = navigator.onLine;
//         if (!kondisi) {
//             statusJaringan.innerHTML =
//                 "Kamu sedang offline, cek koneksi internet anda";
//             statusJaringan.classList.add("offline");
//             statusJaringan.style.display = "block";

//             return;
//         }
//         statusJaringan.innerHTML = "kamu online";
//         statusJaringan.classList.add("online");

//         setTimeout(() => {
//             statusJaringan.style.display = "none";
//         }, 3000);
//     };

//     window.addEventListener("online", statusOnlineOffline);
//     window.addEventListener("offline", statusOnlineOffline);
// });

// // Upload Gambar
// $("#success")
//     .fadeTo(2000, 500)
//     .slideUp(500, function () {
//         $("#success").slideUp(500);
//     });

// function readFile(input) {
//     if (input.files && input.files[0]) {
//         var reader = new FileReader();

//         reader.onload = function (e) {
//             var htmlPreview =
//                 '<img width="200" src="' +
//                 e.target.result +
//                 '" />' +
//                 "<p>" +
//                 input.files[0].name +
//                 "</p>";
//             var wrapperZone = $(input).parent();
//             var previewZone = $(input).parent().parent().find(".preview-zone");
//             var boxZone = $(input)
//                 .parent()
//                 .parent()
//                 .find(".preview-zone")
//                 .find(".box")
//                 .find(".box-body");

//             wrapperZone.removeClass("dragover");
//             previewZone.removeClass("hidden");
//             boxZone.empty();
//             boxZone.append(htmlPreview);
//         };

//         reader.readAsDataURL(input.files[0]);
//     }
// }

// function reset(e) {
//     e.wrap("<form>").closest("form").get(0).reset();
//     e.unwrap();
// }

// $(".dropzone").change(function () {
//     readFile(this);
// });

// $(".dropzone-wrapper").on("dragover", function (e) {
//     e.preventDefault();
//     e.stopPropagation();
//     $(this).addClass("dragover");
// });

// $(".dropzone-wrapper").on("dragleave", function (e) {
//     e.preventDefault();
//     e.stopPropagation();
//     $(this).removeClass("dragover");
// });

// $(".remove-preview").on("click", function () {
//     var boxZone = $(this).parents(".preview-zone").find(".box-body");
//     var previewZone = $(this).parents(".preview-zone");
//     var dropzone = $(this).parents(".form-group").find(".dropzone");
//     boxZone.empty();
//     previewZone.addClass("hidden");
//     reset(dropzone);
// });
// // Upload Gambar end

// (function ($) {
//     "use strict";

//     // Sticky Menu
//     $(window).scroll(function () {
//         if ($("header").offset().top > 1) {
//             $(".top-header").addClass("hide");
//             $(".navigation").addClass("nav-bg");
//         } else {
//             $(".top-header").removeClass("hide");
//             $(".navigation").removeClass("nav-bg");
//         }
//     });

//     // Background-images
//     $("[data-background]").each(function () {
//         $(this).css({
//             "background-image": "url(" + $(this).data("background") + ")",
//         });
//     });

//     //Hero Slider
//     $(".hero-slider").slick({
//         autoplay: true,
//         autoplaySpeed: 7500,
//         pauseOnFocus: false,
//         pauseOnHover: false,
//         infinite: true,
//         arrows: true,
//         fade: true,
//         prevArrow:
//             "<button type='button' class='prevArrow'><i class='ti-angle-left'></i></button>",
//         nextArrow:
//             "<button type='button' class='nextArrow'><i class='ti-angle-right'></i></button>",
//         dots: true,
//     });
//     $(".hero-slider").slickAnimation();

//     // venobox popup
//     $(document).ready(function () {
//         $(".venobox").venobox();
//     });

//     // mixitup filter
//     var containerEl = document.querySelector('[data-ref~="mixitup-container"]');
//     var mixer;
//     if (containerEl) {
//         mixer = mixitup(containerEl, {
//             selectors: {
//                 target: '[data-ref~="mixitup-target"]',
//             },
//         });
//     }

//     //  Count Up
//     function counter() {
//         var oTop;
//         if ($(".count").length !== 0) {
//             oTop = $(".count").offset().top - window.innerHeight;
//         }
//         if ($(window).scrollTop() > oTop) {
//             $(".count").each(function () {
//                 var $this = $(this),
//                     countTo = $this.attr("data-count");
//                 $({
//                     countNum: $this.text(),
//                 }).animate(
//                     {
//                         countNum: countTo,
//                     },
//                     {
//                         duration: 1000,
//                         easing: "swing",
//                         step: function () {
//                             $this.text(Math.floor(this.countNum));
//                         },
//                         complete: function () {
//                             $this.text(this.countNum);
//                         },
//                     }
//                 );
//             });
//         }
//     }
//     $(window).on("scroll", function () {
//         counter();
//     });
// })(jQuery);

// $(".owl-carousel").owlCarousel({
//     loop: true,
//     margin: 10,
//     nav: true,
//     responsive: {
//         0: {
//             items: 2,
//         },
//         600: {
//             items: 3,
//         },
//     },
// });

// /* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
// function openNav() {
//     document.getElementById("mySidenav").style.width = "250px";
//     document.getElementById("main").style.marginLeft = "250px";
//     setTimeout(() => {
//         document.getElementsByClassName("isi-sidenav")[0].style.display =
//             "block";
//         document.getElementsByClassName("isi-sidenav")[1].style.display =
//             "block";
//     }, 280);
// }

// /* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
// function closeNav() {
//     document.getElementById("mySidenav").style.width = "0";
//     document.getElementById("main").style.marginLeft = "0";
//     document.getElementsByClassName("isi-sidenav")[0].style.display = "none";
//     document.getElementsByClassName("isi-sidenav")[1].style.display = "none";
// }

// /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
// function myFunction() {
//     var x = document.getElementById("myTopnav");
//     if (x.className === "topnav") {
//         x.className += " responsive";
//     } else {
//         x.className = "topnav";
//     }
// }

// Get the elements
var uploadBox = document.getElementById("upload-box");
var imageInput = document.getElementById("image");
var previewArea = document.getElementById("preview-area");
var previewImage = document.getElementById("preview-image");
var removeButton = document.getElementById("remove-button");

// Add event listeners
uploadBox.addEventListener("click", function () {
    // Trigger the file input click
    imageInput.click();
});

imageInput.addEventListener("change", function () {
    // Get the selected file
    var file = this.files[0];

    // Check if it is an image
    if (file && file.type.startsWith("image/")) {
        // Create a file reader
        var reader = new FileReader();

        // Add a load event listener
        reader.addEventListener("load", function () {
            // Hide the upload box
            uploadBox.style.display = "none";

            // Show the preview area
            previewArea.style.display = "block";

            // Set the preview image source
            previewImage.src = this.result;
        });

        // Read the file as a data URL
        reader.readAsDataURL(file);
    } else {
        // Show an alert
        alert("Silakan pilih file gambar yang valid.");

        // Reset the input value
        imageInput.value = "";
    }
});

removeButton.addEventListener("click", function () {
    // Reset the input value
    imageInput.value = "";

    // Hide the preview area
    previewArea.style.display = "none";

    // Show the upload box
    uploadBox.style.display = "flex";
});

// Prevent the default behavior of drag and drop
document.addEventListener("dragover", function (e) {
    e.preventDefault();
});

document.addEventListener("drop", function (e) {
    e.preventDefault();

    // Get the dropped file
    var file = e.dataTransfer.files[0];

    // Check if it is an image
    if (file && file.type.startsWith("image/")) {
        // Create a file reader
        var reader = new FileReader();

        // Add a load event listener
        reader.addEventListener("load", function () {
            // Hide the upload box
            uploadBox.style.display = "none";

            // Show the preview area
            previewArea.style.display = "block";

            // Set the preview image source
            previewImage.src = this.result;
        });

        // Read the file as a data URL
        reader.readAsDataURL(file);
    } else {
        // Show an alert
        alert("Silakan pilih file gambar yang valid.");

        // Reset the input value
        imageInput.value = "";
    }
});
