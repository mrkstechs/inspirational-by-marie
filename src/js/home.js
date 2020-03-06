import { TimelineLite } from "gsap";

setTimeout(() => {
    //Animate homepage intro images.
    const doImgs = () =>{
        let tl = new TimelineLite();
        tl.to('#images img:nth-child(1)', .7, {opacity:1})
        .to('#images img:nth-child(2)', .7, {delay: 2, opacity:1})
        .to('#images img:nth-child(1)', .2, {opacity:0})
        .to('#images img:nth-child(3)', .7, {delay: 2, opacity:1})
        .to('#images img:nth-child(2)', .2, {opacity:0});
    };

    //Init homepage intro animation.
    var tl = new TimelineLite({
        onStart: doImgs
    });
    tl.to('#motto p:nth-child(1)', .4, {delay: 0.2 ,borderWidth: '0.05em'})
    .to('#be-1', .5, {delay: 0.2, height: '0.9em', ease: "none"})
    .to('#motto p:nth-child(1)', .4, {borderWidth: '0.05em'})
    .to('#in', 0.5, {delay: 0.2, height: '0.9em', ease: "none"})
    .to('#motto p:nth-child(1) span', 0.2, {overflow: 'visible'})
    .to('#motto p:nth-child(2)', .4, {borderWidth: '0.05em'})
    .to('#be-2', .5, {delay: 0.2, height: '0.9em', ease: "none"})
    .to('#motto p:nth-child(2)', .4, {borderWidth: '0.05em'})
    .to('#enc', 0.5, {delay: 0.2, height: '0.9em', ease: "none"})
    .to('#motto p:nth-child(2) span', 0.2, {overflow: 'visible'})
    .to('#motto p:nth-child(3)', .4, {borderWidth: '0.05em'})
    .to('#be-3', .5, {delay: 0.2, height: '0.9em', ease: "none"})
    .to('#motto p:nth-child(3)', .4, {borderWidth: '0.05em'})
    .to('#bless', 0.5, {delay: 0.2, height: '0.9em', ease: "none"})
    .to('#motto p:nth-child(3) span', 0.2, {overflow: 'visible'});

},100);