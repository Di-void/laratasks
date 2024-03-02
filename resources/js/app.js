import "./bootstrap";

import Alpine from "alpinejs";
import modal from "./create-task-modal";
// import flatpickr from "flatpickr";

window.Alpine = Alpine;

Alpine.data("modal", modal);

// const fp = flatpickr(".datetimepickr", {
//     minDate: "today",
// });

Alpine.start();

// import.meta.glob(["../images/**"]);
