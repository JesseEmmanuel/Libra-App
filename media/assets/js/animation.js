
/** SLIDE FROM LEFT ANIMATION SCRIPT */
const observer_sfle = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        console.log(entry)
        if (entry.isIntersecting)
        {
            entry.target.classList.add('end-slide-from-left');
        } /*else {
            entry.target.classList.remove('appear');
        }*/
    });
});

const slideFromLeftElements = document.querySelectorAll('.start-slide-from-left');
slideFromLeftElements.forEach((el) => observer_sfle.observe(el));

/** SLIDE FROM RIGHT ANIMATION SCRIPT */
const observer_sfre = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        console.log(entry)
        if (entry.isIntersecting)
        {
            entry.target.classList.add('end-slide-from-right');
        } /*else {
            entry.target.classList.remove('appear');
        }*/
    });
});

const slideFromRightElements = document.querySelectorAll('.start-slide-from-right');
slideFromRightElements.forEach((el) => observer_sfre.observe(el));

/** FADE ANIMATION SCRIPT */
const observer_fade = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        console.log(entry)
        if (entry.isIntersecting)
        {
            entry.target.classList.add('end-fade');
        } /*else {
            entry.target.classList.remove('appear');
        }*/
    });
});

const fadeElements = document.querySelectorAll('.start-fade');
fadeElements.forEach((el) => observer_fade.observe(el));

/** SLIDE FROM BOTTOM ANIMATION SCRIPT */

const observer_sfbe = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        console.log(entry)
        if (entry.isIntersecting)
        {
            entry.target.classList.add('end-slide-from-bottom');
        } /*else {
            entry.target.classList.remove('appear');
        }*/
    });
});

const slideFromBottomElements = document.querySelectorAll('.start-slide-from-bottom');
slideFromBottomElements.forEach((el) => observer_sfbe.observe(el));