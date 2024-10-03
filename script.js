// scripts.js
// document.addEventListener('DOMContentLoaded', function() {
//   const spinButton = document.querySelector('.spin-wheel');
//   const arrow = document.querySelector('.arrow');

//   spinButton.addEventListener('click', function() {
//       let rotateDeg = Math.floor(Math.random() * 3600);
//       spinButton.style.transform = `rotate(${rotateDeg}deg)`;
//   });
// });




const wheel = document.getElementById('wheel');
const lion = document.getElementById('lion');
const elephant = document.getElementById('elephant');
const snake = document.getElementById('snake');
const butterfly = document.getElementById('butterfly');
const springbok = document.getElementById('springbok');
const hyenas = document.getElementById('hyenas');
const bird = document.getElementById('bird');
const zebra = document.getElementById('zebra');

//to Get the number of images
const items = document.querySelectorAll('.wheel-item');
const numItems = items.length;

// Function to calculate rotation angle 
function getRotationAngleForItem(index) {
    
    const anglePerItem = 3600 / numItems;
    return anglePerItem * index;
}

function spin() {
    
    const randomIndex = Math.floor(Math.random() * numItems);

    
    const totalRotation = 3600 * 8 + getRotationAngleForItem(randomIndex);

    // Apply rotation and spin the wheel
    wheel.style.transform = `rotate(${totalRotation}deg)`;
}
// calling function
lion.addEventListener('click', spin);
elephant.addEventListener('click', spin);
snake.addEventListener('click', spin);
butterfly.addEventListener('click', spin);
springbok.addEventListener('click', spin);
hyenas.addEventListener('click', spin);
bird.addEventListener('click', spin);
zebra.addEventListener('click', spin);


