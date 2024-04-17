import "./bootstrap";

import PhotoSwipeLightbox from "photoswipe/lightbox";

import "photoswipe/style.css";

window.PhotoSwipeLightbox = PhotoSwipeLightbox;
window.photoswipe = () => import("photoswipe");
