/*----- Services page -----*/
document.documentElement.classList.add("js-enabled");
const body = document.querySelector('body');

function initTabs() {
    const tabLinks = document.querySelectorAll('.tablinks');
    const tabContent = document.querySelectorAll('.tabcontent');
    const htmlElement = window.document.documentElement;

    enableJavaScript(htmlElement);
    setupTabs(tabLinks, tabContent);
}

function enableJavaScript(element) {
    element.classList.add('js-enabled');
}

function setupTabs(links, tabs) {
    links.forEach(link => {
        link.addEventListener('click', el => {
            openTabs(el, links, tabs);
        });
    });
}

function openTabs(event, links, tabs) {
    const btnTarget = event.currentTarget;
    const {service} = btnTarget.dataset;

    links.forEach(link => {
        link.classList.remove('active');
    });

    tabs.forEach(tab => {
        tab.classList.remove('active');
    });

    document.querySelector(`#${service}`).classList.add('active');
    btnTarget.classList.add('active');
}

initTabs();

