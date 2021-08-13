function showHide(box, background) {
    document.getElementById(box).classList.toggle('transform');
    document.getElementById(background).classList.toggle('display-block');
}

function focusOn(input) {
    document.getElementById(input).focus();
}


function toggleBodyScrollability() {
    document.getElementsByTagName('body')[0].classList.toggle('avoid-scroll');
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


    if (window.screen.width < 720) {
        toggleBodyScrollability();
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

let posts = document.getElementsByClassName('posts')[0];
if (typeof(posts) != 'undefined' && posts != null) {

    function resizeMasonryItem(item) {
        let rowGap = parseInt(window.getComputedStyle(posts).getPropertyValue('grid-row-gap')),
            itemHeightInt = Math.ceil(item.getBoundingClientRect().height / 8) * 8,
            rowSpan = Math.floor((itemHeightInt + rowGap) / rowGap);

        item.style.gridRowEnd = 'span ' + rowSpan;
    }

    let gridItems = document.getElementsByTagName('article');

    function setMasonry() {
        for (let i = 0; i < gridItems.length; i++) {
            resizeMasonryItem(gridItems[i]);
        }
    }

    function unsetMasonry() {
        for (let i = 0; i < gridItems.length; i++) {
            gridItems[i].style.gridRowEnd = 'unset';
        }
        posts.style.gridAutoRows = 'unset';
    }

    function changeView() {
        if (window.innerWidth >= 600) {
            setMasonry();
        } else {
            unsetMasonry();
        }
    }

    window.onresize = changeView;
    window.onload = changeView;
}


let expandableMenuItems = document.querySelectorAll('.menu-item-has-children > a, .page_item_has_children > a');

for (let i = 0; i < expandableMenuItems.length; i++) {
    expandableMenuItems[i].addEventListener('click', function(event) {

        event.preventDefault();

        let subMenu = this.nextElementSibling;

        function toggleSubMenu() {
            subMenu.classList.toggle('display-block');
        }

        function toggleDropdownIcon() {
            expandableMenuItems[i].classList.toggle('add-collapse-icon');
        }

        this.firstChild.onclick = function() {
            toggleSubMenu();
            toggleDropdownIcon();
        };
        toggleSubMenu();
        toggleDropdownIcon();

    });
}


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