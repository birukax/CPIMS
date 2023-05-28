import "./bootstrap";
import "./index";
// Initialization for ES Users
import { Modal, Ripple, initTE } from "tw-elements";
import { Datepicker, Timepicker, Input } from "tw-elements";
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

const picker = document.querySelector("#timepicker-format");
const tpFormat24 = new Timepicker(picker, { format24: true });

const picker1 = document.querySelector("#timepicker-format1");
const tpFormat241 = new Timepicker(picker1, { format24: true });
