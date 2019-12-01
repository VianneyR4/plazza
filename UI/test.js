'use strict'
window.onload = () => {
    console.log('Hello EveryBody!\n\n');
    let triangle = document.getElementById('triangle');

    let lenght = prompt();
    for (let i = lenght; i >= 1; i--) {
        console.log(i);
        for (let y = i; y >= 1; y--) {
            triangle.innerHTML = y;
        }
    }
};