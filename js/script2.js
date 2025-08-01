/*-- TOGGLE NAVIGATION BAR--*/
let navMenu = document.getElementById('navMenu');
let toggleBtn = document.getElementById('toggleBtn');

function myMenuFunction(){
    if (navMenu.className === 'nav-menu') {
        navMenu.className += ' responsive';
        toggleBtn.className = 'uil uil-multiply';
    } else{
        navMenu.className = 'nav-menu';
        toggleBtn.className = 'uil uil-bars';
    }
}

function closeMenu(){
    navMenu.className = 'nav-menu';
}

/*-- HIDE NAV BAR MENU WHEN SCROLLED TO SECTIONS --*/
let navLink = document.querySelectorAll('.nav-link');

function hideNav(){
    navMenu.className = 'nav-menu';
    toggleBtn.className = 'uil uil-bars';
}

navLink.forEach(link => {
    link.addEventListener('click', hideNav);
})

/*-- CHANGE HEADER ON SCROLL --*/
const navHeader = document.getElementById('header');


window.addEventListener('scroll', headerShadow);
window.onload = headerShadow();

function headerShadow() {
    const navHeader = document.getElementById('header');
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        navHeader.style.boxShadow = '0 4px 10px #000000BB';
        navHeader.style.height = '70px';
        navHeader.style.lineHeight = '70px';
        navHeader.style.background = '#00000078';
        navHeader.style.backdropFilter = 'blur(8px)'
    } else{
        navHeader.style.boxShadow = 'none';
        navHeader.style.height = '90px';
        navHeader.style.lineHeight = '90px';
        navHeader.style.background = '#000000';
        navHeader.style.backdropFilter = 'blur(0px)'
    }
}

/*-- SCROLL REVEAL TOP ANIMATION --*/
const sr = ScrollReveal({
    origin: 'top',
    distance: '75px',
    duration: 1650,
    reset: false
})
sr.reveal('.hero-content', {delay: 50, reset: false}) 

sr.reveal('.row', {delay: 70})
sr.reveal('.project-box', {delay: 70}) 
sr.reveal('.service-box', {delay: 70})
sr.reveal('.top-header', {delay: 70})

sr.reveal('footer', {}) 

/*-- SCROLL REVEAL LEFT_RIGHT ANIMATION --*/
const srLeft = ScrollReveal({
    origin: 'left',
    distance: '80px',
    duration: 1750,
    reset: false
})

srLeft.reveal('.about-info', {delay: 60}) 
srLeft.reveal('.contact-info', {delay: 60})

const srRight = ScrollReveal({
    origin: 'right',
    distance: '80px',
    duration: 1750,
    reset: false
})

srRight.reveal('.skills-title', {delay: 60})
srRight.reveal('.skills-section', {delay: 60})
srRight.reveal('.form', {delay: 60})
srRight.reveal('.Btn', {delay: 60})

/*-- CHENGE ACTIVE LINK --*/
const section = document.querySelectorAll('section[id], header');

function scrollActive(){
    const scrollY = window.scrollY;
    section.forEach(current => {
        const sectionHeight = current.offsetHeight,
        sectionTop = current.offsetTop - 100,
        sectionId = current.getAttribute('id') || 'header';
        if (scrollY > sectionTop && scrollY<= sectionTop + sectionHeight){
            document.querySelector('.' + sectionId).classList.add('active-link');
        } else {
            document.querySelector('.' + sectionId).classList.remove('active-link');
        }
    })
}

window.addEventListener('load', scrollActive);
window.addEventListener('scroll', scrollActive);

/*-- SCROLL TO FUNCTION --*/
const easingFunctions = {
    // Cubic easing
    easyInOutCubic: t => t < 0.5 ? 4 * t * t * t : (t - 1) * (2 * t - 2) * (2 * t - 2) + 1,
}

let currentEasingFunction = 'easeInOutCubic';

function scrollToTarget(target, offset = 0, duration = 2000, easingType = currentEasingFunction) {
    //If we are midway through a scroll animation, cancel it
    if (window.scrollAnimation) {
        cancelAnimationFrame(window.scrollAnimation);
        window.scrollAnimation = null;
    }

    //Determine target position
    const targetPosition = typeof target === 'number' ? target : target.getBoundingClientRect().top + window.scrollY;

    const startPosition = window.scrollY;
    const distance = targetPosition - startPosition - offset;

    //If distance is very small, just jump to position
    if (Math.abs(distance) < 3) {
        window.scrollTo(0, targetPosition - offset);
        return;
    }

    const startTime = performance.now();
    const easingFunction = easingFunctions[easingType] || easingFunctions.easyInOutCubic;

    //Animation Function
    function scrollAnimation(currentTime) {
        const elapsed = currentTime - startTime;
        const progress = Math.min(elapsed / duration, 1);

        //Apply easing function
        const easedProgress = easingFunction(progress);

        //Calculate new position
        const scrollAmount = startPosition + distance * easedProgress;

        //Perform scroll
        window.scrollTo(0, scrollAmount);

        //Continue animation if not complete
        if (progress < 1) {
            window.scrollAnimation = requestAnimationFrame(scrollAnimation);
        } else {
            window.scrollAnimation = null;
        }
    }

    //Start animation
    window.scrollAnimation = requestAnimationFrame(scrollAnimation);
}

/* SECTOPN SCROLL FUNCTION */
function scrollToHome() {
    scrollToTarget(0, 0, 2000);
}

function scrollToAbout() {
    const aboutSection = document.getElementById('about');
    scrollToTarget(aboutSection, 0, 2000);
}

function scrollToProjects() {
    const projectsSection = document.getElementById('projects');
    scrollToTarget(projectsSection, 0, 2000);
}

function scrollToContact() {
    const contactSection = document.getElementById('contact');
    scrollToTarget(contactSection, 0, 2000);
}

/* TODO PAGE */
let task = document.getElementById('task');
let allList = document.querySelector('li');
let checkBox = document.querySelector('.checkbox');
let date = document.getElementById('date');

let inputTask = document.getElementById('inputTask');
let inputDate = document.getElementById('task-date');
let listContainer = document.getElementById('task-list');

//Add task
function addTask() {
    if (inputTask.value === ''){
        alert('Please write something');
    } else{
        let li = document.createElement('li');
        let i = document.createElement('i');
        let p = document.createElement('p');
        let d = document.createElement('p');
        let b = document.createElement('b');

        i.classList.add('ri-checkbox-blank-circle-line', 'checkbox');

        p.innerHTML = inputTask.value;
        d.innerHTML = inputDate.value;
        b.innerHTML = '&#10005';
        b.classList.add('delete');

        listContainer.appendChild(li);
        li.appendChild(i);
        li.appendChild(p);
        li.appendChild(d);
        li.appendChild(b);
    }
    inputTask.value='';
    save();
}

//Check/Delete
listContainer.addEventListener('click', function(e) {
    if (e.target.tagName === 'I'){
        if (e.target.classList.contains('ri-checkbox-blank-circle-line')){
            e.target.classList.remove('ri-checkbox-blank-circle-line');
            e.target.classList.add('ri-checkbox-circle-fill');
        } else{
            e.target.classList.add('ri-checkbox-blank-circle-line');
            e.target.classList.remove('ri-checkbox-circle-fill');
        }
        save();
    } else if (e.target.tagName === 'B'){
        e.target.parentElement.remove();
        save();
    }
})

//Save user's data locally
function save() {
    localStorage.setItem('savedData', listContainer.innerHTML);
}
function restoreData() {
    listContainer.innerHTML = localStorage.getItem('savedData');
}
restoreData();

//Showing classes
fetch('https://raw.githubusercontent.com/OlgaPagina/OlgaPagina.github.io/main/js/classes.json')
  .then(response => response.json())
  .then(data => {
    data.forEach(cls => {
      const selector = `td[data-time="${cls.time}"][data-day="${cls.weekday}"]`;
      const cell = document.querySelector(selector);
      if (cell) {
        const link = document.createElement('a');
        link.href = `booking.html?id=${cls.class_id}`;
        link.innerHTML = `${cls.class}<br>${cls.level}<br>${cls.duration}`;
        cell.appendChild(link);
      }
    });
  })
  .catch(err => console.error('Error loading classes.json:', err));
