import './vendor/SplitText';
import './styles/app.scss';
import './imgs/inspirational.svg';
import './imgs/byMarie.svg';
import './imgs/facebook.svg';
import './imgs/insta.svg';
import './imgs/soundcloud.svg';
import './imgs/twitter.svg';
import './imgs/youtube.svg';
import './imgs/pic-1.png';
import './imgs/pic-2.png';
import './imgs/pic-3.png';
import './imgs/quotes.svg';
import './imgs/red_bg.svg';

//setTimeout while in development.
setTimeout(() => {
    //Remove inner text from link element (<a>).
    const socialLi = document.querySelectorAll('#menu-social-menu li a');
    socialLi.forEach(li => {
        li.innerText = "";
    });

    //Create link transition.
    const navLink = document.querySelectorAll('#secondary ul li a'); //NodeList
    const navLi = document.querySelectorAll('#secondary ul li'); //NodeList
    // Clone <a> element
    for (let index = 0; index < navLink.length; index++) {
        let clone = navLink[index].cloneNode(true);
        navLi[index].appendChild(clone);

    }
    //Trigger transition.
    const link = document.querySelectorAll('#secondary ul li a:nth-child(2)'); //Nodelist
    for(let key = 0; key < link.length; key++){
        navLink[key].onclick = (e) => {
            e.preventDefault();
            link[key].ontransitionend = () => window.location.href = navLink[key].href;
        };
        navLi[key].onmouseenter = () => link[key].classList.add('change');
        navLi[key].onmouseover = () => link[key].classList.add('change');
        navLi[key].ontouchstart = () => link[key].classList.add('change');

        navLi[key].onmouseleave = () => link[key].classList.remove('change');
        navLi[key].onmouseout = () => link[key].classList.add('change');
        navLi[key].ontouchcancel = () => link[key].classList.add('change');
        navLi[key].ontouchcend = () => link[key].classList.add('change');


    }

    //Trigger menu
    const menuBtn = document.querySelector('#hamburger');
    const nav = document.querySelector('#secondary');
    menuBtn.addEventListener('click', () => {
        nav.classList.toggle('show');
        menuBtn.classList.toggle('change');
    });



},100);