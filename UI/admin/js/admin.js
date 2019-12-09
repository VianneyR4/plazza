'use strict'
window.onload = () => {
    let leftContent = document.getElementById('left_content');
    let rightContent = document.getElementById('right_content');
    let leftBtn = document.getElementById('height_btn_default');
    let rightBtn = document.getElementById('height_btn_default_right');
    leftBtn.addEventListener('click', () => {
        leftContent.style.display = "none";
        rightContent.style.display = "inline-block";
    });
    rightBtn.addEventListener('click', () => {
        rightContent.style.display = "none";
        leftContent.style.display = "inline-block";
    });
}