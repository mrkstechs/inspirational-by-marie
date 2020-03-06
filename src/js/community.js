setTimeout(() => {
  const fbVid = document.querySelectorAll('.fb-video');
  for (let index = 0; index < fbVid.length; index++) {
    vPortWidth = window.screen.width;
    iframeDefaultWidth = 640;
    iframeDefaultHeight = 1000;
    const calcAspectRatio = () => (iframeDefaultHeight / iframeDefaultWidth) * (vPortWidth - 32);
    console.log(calcAspectRatio());
    fbVid[index].style.width = (vPortWidth - 32) + 'px';
    fbVid[index].style.height = calcAspectRatio() + 'px';
  }
},100);