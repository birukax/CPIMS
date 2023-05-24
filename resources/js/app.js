import "./bootstrap";
import "./index";
// Initialization for ES Users
import {
    Modal,
    Ripple,
    Datepicker,
    Timepicker,
    Input,
    initTE,
} from "tw-elements";

initTE({ Datepicker, Timepicker, Input, Modal, Ripple });

import Alpine from "alpinejs";
import focus from "@alpinejs/focus";
window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();

const datepickerDisablePast = document.getElementById(
    "datepicker-disable-past"
);
new Datepicker(datepickerDisablePast, {
    disablePast: true,
});
