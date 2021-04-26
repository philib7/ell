'use strict'

window.addEventListener("DOMContentLoaded", (event) => {
    toggle_stock()
});

function toggle_stock () {
    const trigger = document.getElementById('trigger-stock')

    if (trigger) {
        trigger.addEventListener('click', function(event) {
            console.log('test');

            // Don't follow the link
            //event.preventDefault();
        });
    }

    //var togglers = document.querySelectorAll('.labelMain')

    // if (togglers) {
    //     for (var i = 0; i < togglers.length; i++) {
    //         togglers[i].addEventListener('click', function(event) {
    //             form.submit()

    //             // Don't follow the link
    //             //event.preventDefault();
    //         });
    //     }
    // }
}