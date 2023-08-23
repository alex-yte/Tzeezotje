const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });

document.addEventListener('DOMContentLoaded', ()=>{
    // Get references to the necessary elements
    const modal = document.querySelector('.modal');
    const overlay = document.querySelector('.overlay');
    const openButton = document.getElementById('open-modal');

    // Function to open the modal
    function openModal() {
        modal.classList.add('active');
    }

    // Function to close the modal
    function closeModal() {
        modal.classList.remove('active');
    }

    // Event listeners for opening and closing the modal
    openButton.addEventListener('click', openModal);
    overlay.addEventListener('click', closeModal);
})

