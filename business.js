document.querySelector('.login1').addEventListener('click', function () {
    window.location.href = 'login.html';
});

//   import { gsap } from "gsap";
// import { ScrollTrigger } from "gsap/ScrollTrigger";

// // Register ScrollTrigger plugin
// gsap.registerPlugin(ScrollTrigger);

//   gsap.to(".fleftelm", {
//     scrollTrigger: {
//       trigger: "#fimages",
//       pin: true,
//       start: "top top",
//       end: "bottom bottom",
//       endTrigger: ".last",
//       scrub: 1,
//     },
//     y: "-300%",
//     ease: Power1,
//   });

//   let sections = document.querySelectorAll(".fleftelm");

  
//   gsap.set('#svg', {autoAlpha:1})

// var action = gsap.timeline({
//   scrollTrigger: {
//     trigger: "section",
//     pin: true,   
//     start: 'top top', 
//     end:'bottom bottom',
//     endTrigger: ".last",
//     scrub: 1,
   
//   },
//   defaults:{duration:4, ease:'none'}
// })
// // .from('#poly0', {attr:{points:"0,200 400,200 400,200 0,200 0,0"} },'1')
// .from('#poly01', {attr:{points:"0,200 400,200 400,200 0,200 0,0"} },'1')
// .from('#poly02', {attr:{points:"0,200 400,200 400,200 0,200 0,0"} }, '+=1')
// .from('#poly03', {attr:{points:"0,200 400,200 400,200 0,200 0,0"} }, '+=1')
// .from('#poly04', {attr:{points:"0,200 400,200 400,200 0,200 0,0"} }, '+=1')



// Import GSAP ScrollTrigger
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

// Register ScrollTrigger plugin
gsap.registerPlugin(ScrollTrigger);

// Define GSAP animation
gsap.to(".fleftelm", {
  scrollTrigger: {
    trigger: "#fimages", // Assuming this is your intended trigger element
    pin: true,
    start: "top top",
    end: "bottom bottom",
    endTrigger: ".last",
    scrub: 1,
  },
  y: "-300%",
  ease: "power1",
});

// Define GSAP timeline animation
let sections = document.querySelectorAll(".fleftelm");

var action = gsap.timeline({
  scrollTrigger: {
    trigger: "section", // Assuming this is your intended trigger element
    pin: true,
    start: "top top",
    end: "bottom bottom",
    endTrigger: ".last",
    scrub: 1,
  },
  defaults: { duration: 4, ease: "none" },
});

action
  .from("#poly01", { attr: { points: "0,200 400,200 400,200 0,200 0,0" } }, "1")
  .from("#poly02", { attr: { points: "0,200 400,200 400,200 0,200 0,0" } }, "+=1")
  .from("#poly03", { attr: { points: "0,200 400,200 400,200 0,200 0,0" } }, "+=1")
  .from("#poly04", { attr: { points: "0,200 400,200 400,200 0,200 0,0" } }, "+=1");
