function showHide(box, background) {
    document.getElementById(box).classList.toggle('transform');
    document.getElementById(background).classList.toggle('display-block');
}


function focusOn(input) {
    document.getElementById(input).focus();
}


function toggleMenuIcon() {
    const menu_icon = document.getElementById('menu');
    const menu_graph = document.getElementById('menu-icon');
    const close_graph = document.getElementById('close-icon');

    menu_icon.classList.toggle('display-close-icon');
    if (menu_icon.classList.contains('display-close-icon')) {
        menu_graph.style.display = 'none';
        close_graph.style.display = 'block';
    } else {
        menu_graph.style.display = 'block';
        close_graph.style.display = 'none';
    }
}


function scrollToTop() {
    const scroll_distance = document.scrollingElement.scrollTop,
        duration = 200;
    let scrollY = scroll_distance,
        oldTimestamp = null;

    function step(newTimestamp) {
        if (oldTimestamp !== null) {
            scrollY -= scroll_distance * (newTimestamp - oldTimestamp) / duration;
            if (scrollY <= 0) return document.scrollingElement.scrollTop = 0;
            document.scrollingElement.scrollTop = scrollY;
        }
        oldTimestamp = newTimestamp;
        window.requestAnimationFrame(step);
    }
    window.requestAnimationFrame(step);
}


function fixStickyElementsForEdge() {
    let stickyElements = document.getElementsByClassName('sticky-element');
    let elementsCount = stickyElements.length;
    for (let i = 0; i < elementsCount; i++) {
        stickyElements[i].classList.add('relative');
    }
}
if (navigator.appVersion.indexOf('Edge') != -1) {
    fixStickyElementsForEdge();
}


function resizeMasonryItem(item) {
    let gridObject = document.getElementsByTagName('main')[0],
        rowGap = parseInt(window.getComputedStyle(gridObject).getPropertyValue('grid-row-gap')),
        rowHeight = parseInt(window.getComputedStyle(gridObject).getPropertyValue('grid-auto-rows'));

    let rowSpan = Math.ceil((item.getBoundingClientRect().height + rowGap) / (rowHeight + rowGap));

    item.style.gridRowEnd = 'span ' + rowSpan;
}

function resizeAllMasonryItems(items) {
    let allItems = document.getElementsByTagName(items);

    for (let i = 0; i < allItems.length; i++) {
        resizeMasonryItem(allItems[i]);
    }
}

let masonryEvents = ['load', 'resize'];
masonryEvents.forEach(function(event) {
    window.addEventListener(event, resizeAllMasonryItems('article'));
});


const InputFloatLabel = (() => {
    // add active class and placeholder
    const handleFocus = (e) => {
        const target = e.target;
        target.parentNode.classList.add('active');
    };

    // remove active class and placeholder
    const handleBlur = (e) => {
        const target = e.target;
        if (!target.value) {
            target.parentNode.classList.remove('active');
        }
    };

    // register events
    const bindEvents = (element) => {
        const floatField = element.querySelector('input');
        floatField.addEventListener('focus', handleFocus);
        floatField.addEventListener('blur', handleBlur);
    };

    // get DOM elements
    const init = () => {
        const floatContainers = document.querySelectorAll('.input');

        floatContainers.forEach((element) => {
            if (element.querySelector('input').value) {
                element.classList.add('active');
            }
            bindEvents(element);
        });
    };

    return {
        init: init
    };
})();

InputFloatLabel.init();