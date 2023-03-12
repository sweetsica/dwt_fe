/*---------------------------------------------
Template name :  DWT
Version       :  1.0
Author        :  Duc Minh Vu
Author url    :  https://publicsite.pro

** Custom JS
----------------------------------------------*/

document.addEventListener('DOMContentLoaded', () => {
    'use strict';

    // Preloader
    const preloader = document.querySelector('#loader');
    if (preloader) {
        window.addEventListener('load', () => {
            preloader.remove();
        });
    }

    // CHANGE TITLE
    const docTitle = document.title;
    window.addEventListener('blur', () => {
        document.title = 'Hãy tập trung làm việc 🤟';
    });

    window.addEventListener('focus', () => {
        document.title = docTitle;
    });

    // SELECT MULTIPLE LEFT SIDEBAR
    const select = document.getElementById('select');
    const elems = document.querySelectorAll('.data_chart-items');
    const obj = {};

    const filtered = [...elems].filter((el) => {
        if (!obj[el.id]) {
            obj[el.id] = true;
            return true;
        } else {
            return false;
        }
    });

    const selectOpt = filtered.map((el) => {
        el.style.display = 'block';
        return `<option> ${el.id} </option>`;
    });

    select.innerHTML = selectOpt.join('');

    select.addEventListener('change', function () {
        for (let i = 0, iLen = select.options.length; i < iLen; i++) {
            const opt = select.options[i];

            const val = opt.value || opt.text;
            if (opt.selected) {
                // if (opt.innerText === 'Xem tất cả') {
                //     var items = document.getElementsByClassName('data_chart-items');
                //     for (i = 0; i < items.length; i++) {
                //         items[i].style.display = 'block';
                //     }
                //     return;
                // }
                document.getElementById(val).style.display = 'block';
            } else {
                document.getElementById(val).style.display = 'none';
            }
        }
    });

    // const selectPicker = document.getElementById('mySelect');
    // const labelPicker = document.getElementById('label');
    // const valuePicker = document.getElementById('value');

    // selectPicker.addEventListener('change', function () {
    //     labelPicker.textContent = selectPicker.options[selectPicker.selectedIndex].parentNode.label;
    //     valuePicker.textContent = selectPicker.value;
    // });

    // BTN SHOW/HIDE LEFT RIGHT
    const mainWrap = document.getElementById('mainWrap');
    const asideLeft = document.getElementById('aside-left');
    const asideRight = document.getElementById('aside-right');
    const btnCloseLeft = document.getElementById('btn-left');
    const btnCloseRight = document.getElementById('btn-right');

    // btnCloseLeft.onclick = function () {
    //     const isClosed = asideLeft.style.left === '-250px';
    //     asideLeft.style.left = isClosed ? '0' : '-250px';
    //     mainWrap.style.marginLeft = isClosed ? '250px' : '0';
    // };

    // btnCloseRight.onclick = function () {
    //     const isClosed = asideRight.style.right === '-250px';
    //     asideRight.style.right = isClosed ? '0' : '-250px';
    //     mainWrap.style.marginRight = isClosed ? '250px' : '0';
    // };

    function updateVariables() {
        const root = document.documentElement;
        const width = getComputedStyle(root).getPropertyValue('--width-sidebar').trim();
        asideLeft.style.width = width;
        asideRight.style.width = width;
        // asideRight.style.right = `${width}`;
        // mainWrap.style.marginLeft = width;
        // mainWrap.style.marginRight = '0';
    }

    updateVariables();

    btnCloseLeft.onclick = function () {
        const isClosed = asideLeft.style.left === `-${getComputedStyle(asideLeft).getPropertyValue('width').trim()}`;
        asideLeft.style.left = isClosed ? '0' : `-${getComputedStyle(asideLeft).getPropertyValue('width').trim()}`;
        mainWrap.style.marginLeft = isClosed ? getComputedStyle(asideLeft).getPropertyValue('width').trim() : '0';
    };

    btnCloseRight.onclick = function () {
        const isClosed = asideRight.style.right === `-${getComputedStyle(asideRight).getPropertyValue('width').trim()}`;
        asideRight.style.right = isClosed ? '0' : `-${getComputedStyle(asideRight).getPropertyValue('width').trim()}`;
        mainWrap.style.marginRight = isClosed ? getComputedStyle(asideRight).getPropertyValue('width').trim() : '0';
    };

    window.addEventListener('resize', function () {
        updateVariables();
    });

    function handleChangeIconLeft(icon) {
        if (icon.classList.contains('bi-arrow-bar-left')) {
            icon.classList.remove('bi-arrow-bar-left');
            icon.classList.add('bi-arrow-bar-right');
        } else {
            icon.classList.remove('bi-arrow-bar-right');
            icon.classList.add('bi-arrow-bar-left');
        }
    }
    function handleChangeIconRight(icon) {
        if (icon.classList.contains('bi-arrow-bar-right')) {
            icon.classList.remove('bi-arrow-bar-right');
            icon.classList.add('bi-arrow-bar-left');
        } else {
            icon.classList.remove('bi-arrow-bar-left');
            icon.classList.add('bi-arrow-bar-right');
        }
    }
    document.getElementById('btn-left').addEventListener('click', function () {
        handleChangeIconLeft(document.querySelector('#btn-left i'));
    });
    document.getElementById('btn-right').addEventListener('click', function () {
        handleChangeIconRight(document.querySelector('#btn-right i'));
    });

    // BTN SETTINGS
    document.getElementById('sidebarBody_settings-body').addEventListener('click', handleClickSettings, false);
    function handleClickSettings() {
        const sidebarBodySelectWrapper = document.getElementById('sidebarBody_select-wrapper');
        if (sidebarBodySelectWrapper.style.display === 'none') {
            sidebarBodySelectWrapper.style.display = 'block';
            document.addEventListener('click', handleClickOutside);
        } else {
            sidebarBodySelectWrapper.style.display = 'none';
            document.removeEventListener('click', handleClickOutside);
        }
    }

    function handleClickOutside(event) {
        const sidebarBodySettings = document.getElementsByClassName('sidebarBody_settings-body')[0];
        const sidebarBodySelectWrapper = document.getElementById('sidebarBody_select-wrapper');
        if (!sidebarBodySettings.contains(event.target) && !sidebarBodySelectWrapper.contains(event.target)) {
            sidebarBodySelectWrapper.style.display = 'none';
            document.removeEventListener('click', handleClickOutside);
        }
    }

    // THIS MONTH
    const today = new Date();
    const month = (today.getMonth() + 1).toString().padStart(2, '0');
    const year = today.getFullYear();
    const currentDate = `${month}/${year}`;
    document.getElementById('thismonth').textContent = currentDate;
});
