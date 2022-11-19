// document.addEventListener("DOMContentLoaded", function () {
//     const toggle = document.getElementById("scheme-toggle");
//
//     let scheme = "light";
//     const savedScheme = localStorage.getItem("scheme");
//
//     const container = document.getElementsByTagName("html")[0];
//     const prefersDark = window.matchMedia("(prefers-color-scheme: dark)").matches;
//
//     if (prefersDark) {
//         scheme = "dark";
//     }
//
//     if (savedScheme) {
//         scheme = savedScheme;
//     }
//
//     if (scheme === "dark") {
//         darkScheme(toggle, container);
//     } else {
//         lightScheme(toggle, container);
//     }
//
//     toggle.addEventListener("click", () => {
//         if (toggle.className === "light") {
//             darkScheme(toggle, container);
//         } else if (toggle.className === "dark") {
//             lightScheme(toggle, container);
//         }
//     });
// });
//
// function darkScheme(toggle, container) {
//     localStorage.setItem("scheme", "dark");
//     // toggle.innerHTML = feather.icons.sun.toSvg();
//     // toggle.className = "dark";
//     container.className = "dark";
// }
//
// function lightScheme(toggle, container) {
//     localStorage.setItem("scheme", "light");
//     // toggle.innerHTML = feather.icons.moon.toSvg();
//     // toggle.className = "light";
//     // /container.className = "";
// }
