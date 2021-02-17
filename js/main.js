"use strict"

const swiper = new Swiper('.swiper-container', {
    slidesPerView: 'auto',
    centeredSlides: true,
    spaceBetween: 30,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
});
const panels = document.querySelector(".cards");

const photoPanel = panels.querySelector(".cards__content--photos");
const sitePanel = panels.querySelector(".cards__content--sites");
const iconPanel = panels.querySelector(".cards__content--s-icons");

const photoButton = document.querySelector(".cards__button--photo");
const siteButton = document.querySelector(".cards__button--sites");
const iconsButton = document.querySelector(".cards__button--icons");
const illustButton = document.querySelector(".cards__button--illust");

const photoHButton = document.querySelector(".head__link--photo");
const siteHButton = document.querySelector(".head__link--sites");
const iconsHButton = document.querySelector(".head__link--icons");
const illustHButton = document.querySelector(".head__link--illust");

const photoPeople = document.querySelector(".cards__peoples");

const photoWild = document.querySelector(".cards__wild");
const photoAnimals = document.querySelector(".cards__animals");
const photoMok = document.querySelector(".cards__mok");


const photoModal = document.querySelector(".modal-photo");

const overlay = document.querySelector(".overlay");

const clearActiveButtons = () => {
    photoButton.classList.remove("button-active");
    siteButton.classList.remove("button-active");
    iconsButton.classList.remove("button-active");
    illustButton.classList.remove("button-active");
}

const clearPanels = () => {
    const arr = [photoPanel, sitePanel, iconPanel];
    arr.forEach(element => {
        if (!element.classList.contains("visually-hidden")) {
            element.classList.add("visually-hidden");
        }
    });
}
const switchPanel = (panel) => {
    clearActiveButtons();
    clearPanels();
    if (panel === photoPanel) {
        photoButton.classList.add("button-active");
        photoPanel.classList.remove("visually-hidden");
    }
    if (panel === sitePanel) {
        siteButton.classList.add("button-active");
        sitePanel.classList.remove("visually-hidden");
    }
    if (panel === iconPanel) {
        iconsButton.classList.add("button-active");
        iconPanel.classList.remove("visually-hidden");
    }
}

photoButton.addEventListener('click', (e) => {
    e.preventDefault();
    switchPanel(photoPanel);
});
iconsButton.addEventListener('click', (e) => {
    e.preventDefault();
    switchPanel(iconPanel);
});
siteButton.addEventListener('click', (e) => {
    e.preventDefault();
    switchPanel(sitePanel);
});

photoHButton.addEventListener('click', (e) => {
    switchPanel(photoPanel);
});
iconsHButton.addEventListener('click', (e) => {
    switchPanel(iconPanel);
});
siteHButton.addEventListener('click', (e) => {
    switchPanel(sitePanel);
});



photoPeople.addEventListener('click', (e) => {
    console.log("1");
    e.preventDefault();
    console.log(photoPeople);
    disableBodyScroll(document);
    photoModal.parentNode.classList.remove("visually-hidden");
    overlay.addEventListener('click', (e) => {
        overlay.classList.add("visually-hidden");
        enableBodyScroll(document);
    });
});



clearPanels();
clearActiveButtons();
photoButton.classList.add("button-active");
photoPanel.classList.remove("visually-hidden");