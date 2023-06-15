import "./bootstrap";
import "./index";
// Initialization for ES Users
import {
    Modal,
    Tab,
    Input,
    Datepicker,
    Timepicker,
    Sidenav,
    Select,
    Ripple,
    initTE,
} from "tw-elements";
initTE({
    Input,
    Datepicker,
    Tab,
    Timepicker,
    Sidenav,
    Modal,
    Select,
    Ripple,
});

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
const datepickerDisablePast1 = document.getElementById(
    "datepicker-disable-past1"
);
new Datepicker(datepickerDisablePast1, {
    disablePast: true,
});

const picker = document.querySelector("#timepicker-format");
const tpFormat24 = new Timepicker(picker, { format24: true });


const sidenav = document.getElementById("full-screen-example");
const sidenavInstance = Sidenav.getInstance(sidenav);

let innerWidth = null;

const setMode = (e) => {
    // Check necessary for Android devices
    if (window.innerWidth === innerWidth) {
        return;
    }

    innerWidth = window.innerWidth;

    if (window.innerWidth < sidenavInstance.getBreakpoint("sm")) {
        sidenavInstance.changeMode("over");
        sidenavInstance.hide();
    } else {
        sidenavInstance.changeMode("side");
        sidenavInstance.show();
    }
};

if (window.innerWidth < sidenavInstance.getBreakpoint("sm")) {
    setMode();
}

// Event listeners
window.addEventListener("resize", setMode);
COPY;
