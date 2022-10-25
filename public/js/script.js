const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
      dynamicBullets: true,
    },

    autoplay: {
        delay: 5000,
      },
  
  });

  function click(){
    alert("Hey");
}