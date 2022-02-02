require('./bootstrap');

const title = document.title

const links = document.getElementsByClassName('header-link')
for (const link of links) {
    if (title.toLowerCase() == link.innerHTML) {
        link.classList.add('active')
    }
    if (title.toLowerCase() == 'home page' && link.innerHTML == 'comics') {
        link.classList.add('active')
    }
}