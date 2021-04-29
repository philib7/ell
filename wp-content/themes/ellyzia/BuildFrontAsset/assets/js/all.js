'use strict'

window.addEventListener("DOMContentLoaded", (event) => {
    toggle_stock()
    move_cloud()
});

function toggle_stock () {
    const trigger = document.getElementById('trigger-stock')

    if (trigger) {
        trigger.addEventListener('click', function(event) {
            console.log('test');
        });
    }
}

function move_cloud () {
    const cloud1 = document.querySelector('.cloud1')
    const cloud2 = document.querySelector('.cloud2')
    const cloudCard = document.querySelector('.cloud-card')

    function handler(entries, observer) {
        entries.forEach(element => {
            if (element.isIntersecting) {
                element['target'].classList.add('active-cloud')
            } else {
                element['target'].classList.remove('active-cloud')
            }
        });
    }

    let observer = new IntersectionObserver(handler);

    if (cloud1) {
        observer.observe(cloud1);
        observer.observe(cloud2);
        observer.observe(cloudCard);
    }
}