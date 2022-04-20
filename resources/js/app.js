require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// Start jQuery
window.onload = function() {
    if (!window.$) {
        // jQuery is not loaded!
        alert("jQuery is not loaded!");
    }

    // Start Modal
    // DOM Elements
    const modalBackdrop = $('#modal-backdrop');
    // Modal vars
    let lastActivatedModal;

    $("#create-module").click(function() {
        toggleModal("#create-module-modal");
        console.log("I am Working");
    });

    modalBackdrop.click(function(e) {
        if (e.target === this) {
            toggleModal(lastActivatedModal);
        }
    });

    function toggleModal(modalID){
        if (lastActivatedModal) {
            $(lastActivatedModal).toggleClass("hidden");
            $("#modal-backdrop").toggleClass("hidden");
            unset(lastActivatedModal);
            return;
        }

        $(modalID).toggleClass("hidden");
        modalBackdrop.toggleClass("hidden");
        lastActivatedModal = modalID;
    }
    // End Modal

    // Start App
    function unset(variable) {
        variable = null

        return variable;
    }
    // End App
}
// End jQuery
