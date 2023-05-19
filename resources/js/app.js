import * as FilePond from "filepond";
import FilePondPluginImagePreview from "filepond-plugin-image-preview";
import "filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css";
import "filepond/dist/filepond.min.css";
import "./bootstrap";

const inputElement = document.querySelector('input[type="file"].filepond');

const csrfToken = document
    .querySelector('meta[name="csrf-token"]')
    .getAttribute("content");

FilePond.registerPlugin(FilePondPluginImagePreview);

FilePond.create(inputElement).setOptions({
    server: {
        process: "./uploads/process",
        headers: {
            "X-CSRF-TOKEN": csrfToken,
        },
    },
    allowMultiple: true,
});
