// go to top button start from here 


let mybutton = document.getElementById("mybtn");

window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}


function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;   
}


// modal starts from here 


document.addEventListener('DOMContentLoaded', (event) => {
  if (document.querySelector('#carouselExampleRide2')) {
      var myCarousel = new bootstrap.Carousel('#carouselExampleRide2');
  }
});

































// const modal = document.getElementById("myModal");


// const btn = document.getElementById("myBtn");


// const span = document.getElementsByClassName("close")[0];

// const nextBtn = document.getElementById("nextBtn");


// let contentIndex = 0;
// const contents = [
    
//     "One Burton We also use some repeated line breaks to quickly extend the height of the content, thereby triggering the scrolling. When content becomes longer than the predefined max-height of modal, content will be cropped and scrollable within the modal.",
//     "South Salt Lake City, UT",
//      "We also use some repeated line breaks to quickly extend the height of the content, thereby triggering the scrolling. When content becomes longer than the predefined max-height of modal, content will be cropped and scrollable within the modal."
// ];


// btn.onclick = function () {
//     modal.style.display = "block";
//     document.getElementById("modalText").textContent = contents[contentIndex];
// };


// span.onclick = function () {
//     modal.style.display = "none";
// };



// window.onclick = function (event) {
//     if (event.target === modal) {
//         modal.style.display = "none";
//     }
// };


// nextBtn.onclick = function () {
//     contentIndex = (contentIndex + 1) % contents.length;
//     document.getElementById("modalText").textContent = contents[contentIndex];
// };



// // modal 2

// var currentStep = 1; 

// function openModal() {
//     document.getElementById("myModa").style.display = "block";
// }

// function closeModal() {
//     document.getElementById("myModa").style.display = "none";
// }

// function nextStep() {
//     if (currentStep === 1) {
//         // Hide content for step 1
//         document.getElementById("modal-content-1").style.display = "none";

//         // Show content for step 2
//         document.getElementById("modal-content-2").style.display = "block";
//         document.getElementById("modal-content-3").style.display = "block";
//         currentStep = 2; // Update step tracker
//     } else {
//         // Handle reaching the end or add more steps if needed
//         closeModal(); // Example: close the modal on last step
//     }
// }





