import flatpickr from "flatpickr";
import "flatpickr/dist/flatpickr.min.css";

document.addEventListener("DOMContentLoaded", function () {
    flatpickr(".datepicker", {
        dateFormat: "d-m-Y",
        allowInput: true,
    });
});
