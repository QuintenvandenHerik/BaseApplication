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
        $("body").toggleClass("overflow-hidden");
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

    // Start Form Submit
    $("form").submit(function(e) {
        // TODO: fix only allowed forms
        if($(this).attr('action').includes('login') || $(this).attr('action').includes('register') || $(this).attr('action').includes('logout')) {
            return;
        }
        e.preventDefault();
        let formData = $(this).serializeArray();
        $.ajax({
            url: $(this).attr('action'),
            type:'POST',
            data: formData,
            success: function(msg)
            {
                console.log(msg);
            },
            error: function(error)
            {
                console.log(error)
            }
        });
    });
    // End Form Submit

    // Start App
    function unset(variable) {
        variable = null

        return variable;
    }
    // End App
}
// End jQuery
