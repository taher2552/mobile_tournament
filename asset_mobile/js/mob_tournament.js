
// sscroll to top js

document.getElementById("scrollToTop").onclick = function () {
  window.scrollTo({ top: 0, behavior: "smooth" });
};

// scroll to top js ends

// progress js

const mobile_academy_progressDone = document.querySelectorAll(
  ".mobile_academy_progress_done"
);

mobile_academy_progressDone.forEach((mobile_academy_progress) => {
  mobile_academy_progress.style.width =
    mobile_academy_progress.getAttribute("data-done") + "%";
});

// progress js ends



//tabs click js

window.onload = function () {
  profileTabClick();
  profilePhotoClick();
  photoTabPhotoClick();
};

function profileTabClick() {
  var fee = document.querySelector("#fee-tab");
  var profile = document.querySelector(".mob_academy_box_wrapper");
  var training = document.querySelector("#training-tab");
  var photo = document.querySelector("#photo-tab");
  var champion = document.querySelector("#champion-tab");

  fee.style.opacity = "0";
  profile.style.opacity = "1";
  training.style.opacity = "0";
  photo.style.opacity = "0";
  champion.style.opacity = "0";

  setTimeout(function () {
    fee.style.display = "none";
    profile.style.display = "block";
    training.style.display = "none";
    photo.style.display = "none";
    champion.style.display = "none";
  }, 500);
}

function feeTabClick() {
  var profile = document.querySelector(".mob_academy_box_wrapper");
  var fee = document.querySelector("#fee-tab");
  var training = document.querySelector("#training-tab");
  var photo = document.querySelector("#photo-tab");
  var champion = document.querySelector("#champion-tab");

  profile.style.opacity = "0";
  training.style.opacity = "0";
  fee.style.opacity = "1";
  photo.style.opacity = "0";
  champion.style.opacity = "0";

  setTimeout(function () {
    profile.style.display = "none";
    training.style.display = "none";
    photo.style.display = "none";
    champion.style.display = "none";
    fee.style.display = "block";
  }, 500);
}

function trainingTabClick() {
  var training = document.querySelector("#training-tab");
  var profile = document.querySelector(".mob_academy_box_wrapper");
  var fee = document.querySelector("#fee-tab");
  var photo = document.querySelector("#photo-tab");
  var champion = document.querySelector("#champion-tab");

  training.style.opacity = "1";
  profile.style.opacity = "0";
  fee.style.opacity = "0";
  photo.style.opacity = "0";
  champion.style.opacity = "0";

  setTimeout(function () {
    training.style.display = "block";
    profile.style.display = "none";
    fee.style.display = "none";
    champion.style.display = "none";
    photo.style.display = "none";
  }, 500);
}

function photoTabClick() {
  var training = document.querySelector("#training-tab");
  var profile = document.querySelector(".mob_academy_box_wrapper");
  var fee = document.querySelector("#fee-tab");
  var photo = document.querySelector("#photo-tab");
  var champion = document.querySelector("#champion-tab");

  training.style.opacity = "0";
  profile.style.opacity = "0";
  fee.style.opacity = "0";
  champion.style.opacity = "0";
  photo.style.opacity = "1";

  setTimeout(function () {
    training.style.display = "none";
    profile.style.display = "none";
    fee.style.display = "none";
    champion.style.display = "none";
    photo.style.display = "block";
  }, 500);
}

function championTabClick() {
  var training = document.querySelector("#training-tab");
  var profile = document.querySelector(".mob_academy_box_wrapper");
  var fee = document.querySelector("#fee-tab");
  var photo = document.querySelector("#photo-tab");
  var champion = document.querySelector("#champion-tab");

  training.style.opacity = "0";
  profile.style.opacity = "0";
  fee.style.opacity = "0";
  photo.style.opacity = "0";
  champion.style.opacity = "1";

  setTimeout(function () {
    training.style.display = "none";
    profile.style.display = "none";
    fee.style.display = "none";
    photo.style.display = "none";
    champion.style.display = "block";
  }, 500);
}

//tabs click js ends

//message button click academy page

var modal2 = document.querySelector(".message-modal");
var triggers2 = document.querySelectorAll(".trigger-msg");
var closeButton2 = document.querySelector(".close-button-2");

function toggleModal2() {
  modal2.classList.toggle("show-modal");

  if (modal2.classList.contains("show-modal")) {
    document.body.classList.add("modal-open");
  } else {
    document.body.classList.remove("modal-open");
  }
}

function windowOnClick2(event) {
  if (event.target === modal2) {
    toggleModal2();
  }
}

for (var i = 0, len = triggers2.length; i < len; i++) {
  triggers2[i].addEventListener("click", toggleModal2);
}
closeButton2.addEventListener("click", toggleModal2);

window.addEventListener("click", windowOnClick2);

//message button click academy page ends

//message button click academy page

var modal3 = document.querySelector(".review-modal");
var triggers3 = document.querySelectorAll(".trigger-review");
var closeButton3 = document.querySelector(".close-button-3");

function toggleModal3() {
  modal3.classList.toggle("show-modal");

  if (modal3.classList.contains("show-modal")) {
    document.body.classList.add("modal-open");
  } else {
    document.body.classList.remove("modal-open");
  }
}

function windowOnClick3(event) {
  if (event.target === modal3) {
    toggleModal3();
  }
}

for (var i = 0, len = triggers3.length; i < len; i++) {
  triggers3[i].addEventListener("click", toggleModal3);
}
closeButton3.addEventListener("click", toggleModal3);

window.addEventListener("click", windowOnClick3);

//review academy page ends

// academy banner slider js

document.addEventListener("DOMContentLoaded", function () {
  const imageSlider = document.querySelector(".image_slider");
  const leftArrow = document.querySelector(".left_arrow");
  const rightArrow = document.querySelector(".right_arrow");
  let currentImageIndex = 0;

  function showImage(index) {
    const images = imageSlider.querySelectorAll("img");
    for (let i = 0; i < images.length; i++) {
      images[i].style.display = "none";
    }
    images[index].style.display = "block";
  }

  leftArrow.addEventListener("click", function () {
    currentImageIndex =
      (currentImageIndex - 1 + imageSlider.children.length) %
      imageSlider.children.length;
    showImage(currentImageIndex);
  });

  rightArrow.addEventListener("click", function () {
    currentImageIndex = (currentImageIndex + 1) % imageSlider.children.length;
    showImage(currentImageIndex);
  });

  // Show the initial image
  showImage(currentImageIndex);
});

// academy banner slider js ends

//profile images tab js

function profilePhotoClick() {
  var photo = document.querySelector("#profile_photo_div");
  var video = document.querySelector("#profile_video_div");
  var training = document.querySelector("#profile_training_div");
  var tournament = document.querySelector("#profile_tournament_div");

  video.style.opacity = "0";
  tournament.style.opacity = "0";
  training.style.opacity = "0";
  photo.style.opacity = "1";

  setTimeout(function () {
    video.style.display = "none";
    tournament.style.display = "none";
    training.style.display = "none";
    photo.style.display = "block";
  }, 500);
}

function profileVideoClick() {
  var photo = document.querySelector("#profile_photo_div");
  var video = document.querySelector("#profile_video_div");
  var training = document.querySelector("#profile_training_div");
  var tournament = document.querySelector("#profile_tournament_div");

  video.style.opacity = "1";
  tournament.style.opacity = "0";
  training.style.opacity = "0";
  photo.style.opacity = "0";

  setTimeout(function () {
    video.style.display = "block";
    tournament.style.display = "none";
    training.style.display = "none";
    photo.style.display = "none";
  }, 500);
}

function profileTrainingClick() {
  var photo = document.querySelector("#profile_photo_div");
  var video = document.querySelector("#profile_video_div");
  var training = document.querySelector("#profile_training_div");
  var tournament = document.querySelector("#profile_tournament_div");

  video.style.opacity = "0";
  tournament.style.opacity = "0";
  training.style.opacity = "1";
  photo.style.opacity = "0";

  setTimeout(function () {
    video.style.display = "none";
    tournament.style.display = "none";
    training.style.display = "block";
    photo.style.display = "none";
  }, 500);
}

function profileTournamentClick() {
  var photo = document.querySelector("#profile_photo_div");
  var video = document.querySelector("#profile_video_div");
  var training = document.querySelector("#profile_training_div");
  var tournament = document.querySelector("#profile_tournament_div");

  video.style.opacity = "0";
  tournament.style.opacity = "1";
  training.style.opacity = "0";
  photo.style.opacity = "1";

  setTimeout(function () {
    video.style.display = "none";
    tournament.style.display = "block";
    training.style.display = "none";
    photo.style.display = "none";
  }, 500);
}
//profile images tab js ends

// photos tab images tab click js

function photoTabPhotoClick() {
  var photo = document.querySelector("#photo_photo_div");
  var video = document.querySelector("#photo_video_div");
  var training = document.querySelector("#photo_training_div");
  var tournament = document.querySelector("#photo_tournament_div");

  video.style.opacity = "0";
  tournament.style.opacity = "0";
  training.style.opacity = "0";
  photo.style.opacity = "1";

  setTimeout(function () {
    video.style.display = "none";
    tournament.style.display = "none";
    training.style.display = "none";
    photo.style.display = "block";
  }, 500);
}

function photoTabVideoClick() {
  var photo = document.querySelector("#photo_photo_div");
  var video = document.querySelector("#photo_video_div");
  var training = document.querySelector("#photo_training_div");
  var tournament = document.querySelector("#photo_tournament_div");

  video.style.opacity = "1";
  tournament.style.opacity = "0";
  training.style.opacity = "0";
  photo.style.opacity = "0";

  setTimeout(function () {
    video.style.display = "block";
    tournament.style.display = "none";
    training.style.display = "none";
    photo.style.display = "none";
  }, 500);
}

function photoTabTrainingClick() {
  var photo = document.querySelector("#photo_photo_div");
  var video = document.querySelector("#photo_video_div");
  var training = document.querySelector("#photo_training_div");
  var tournament = document.querySelector("#photo_tournament_div");

  video.style.opacity = "0";
  tournament.style.opacity = "0";
  training.style.opacity = "1";
  photo.style.opacity = "0";

  setTimeout(function () {
    video.style.display = "none";
    tournament.style.display = "none";
    training.style.display = "block";
    photo.style.display = "none";
  }, 500);
}

function photoTabTournamentClick() {
  var photo = document.querySelector("#photo_photo_div");
  var video = document.querySelector("#photo_video_div");
  var training = document.querySelector("#photo_training_div");
  var tournament = document.querySelector("#photo_tournament_div");

  video.style.opacity = "0";
  tournament.style.opacity = "1";
  training.style.opacity = "0";
  photo.style.opacity = "1";

  setTimeout(function () {
    video.style.display = "none";
    tournament.style.display = "block";
    training.style.display = "none";
    photo.style.display = "none";
  }, 500);
}

// photos tab images tab click js ends



//search side box js

function searchIconClick() {
  var body = document.querySelector("body");
  document.querySelector(".search_side_input").value='';
  document.querySelector(".popular_search_section").style.display="block";
  document.querySelector(".search_result_section").style.display="none";


  body.classList.toggle("menu-open");

  var width = document.getElementById("search-sidebox").style.width;
  if (width === "0px" || width == "") {
    document.getElementById("search-sidebox").style.width = "100%";
  } else {
    document.getElementById("search-sidebox").style.width = "0px";
  }
}

//search side box js ends

///search input type start js

function handleInput() {
  // Get the value from the input field
  const input = document.querySelector(".search_side_input");
  const popularSearch = document.querySelector(".popular_search_section");
  const searchResults = document.querySelector(".search_result_section");
  const inputValue = input.value.trim();

  if (inputValue !== "") {
    // Trigger an alert message when something is typed
    popularSearch.style.display = "none";
    searchResults.style.display = "block"
  }else{
    popularSearch.style.display = "block";
    searchResults.style.display = "none";
  }
}

///search input type start js ends




// Custom Modal JS Start

var modal = document.querySelector(".social-modal");
var triggers = document.querySelectorAll(".trigger");
var closeButton = document.querySelector(".close-button");

function toggleModal() {
  modal.classList.toggle("show-modal");

  if (modal.classList.contains("show-modal")) {
    document.body.classList.add("modal-open");
  } else {
    document.body.classList.remove("modal-open");
  }
}

function windowOnClick(event) {
  if (event.target === modal) {
    toggleModal();
  }
}

for (var i = 0, len = triggers.length; i < len; i++) {
  triggers[i].addEventListener("click", toggleModal);
}
closeButton.addEventListener("click", toggleModal);
window.addEventListener("click", windowOnClick);

// Custom Modal JS End


// time round js 



function setProgress(element, value, total) {
  const circumference = 2 * Math.PI * 30; // Assuming radius as 40

  // Calculate the percentage of completion
  const percentage = (value / total);

  // Calculate the dash offset based on the percentage of completion
  const dashOffset = circumference * (1 - percentage);

  // Set the stroke-dasharray and stroke-dashoffset properties for the progress bar
  element.style.strokeDasharray = `${circumference}px ${circumference}px`;
  element.style.strokeDashoffset = `${dashOffset}px`;
}
        
        function updateProgressBars() {
          const now = new Date();
          const targetDate = new Date("2024-08-01T00:00:00+05:30");
          const diff = targetDate - now;
        
          const totalDays = 1000 * 60 * 60 * 24;
          const totalHours = 1000 * 60 * 60;
          const totalMinutes = 1000 * 60;
          const totalSeconds = 1000;
        
          const days = Math.floor(diff / totalDays);
          const hours = Math.floor((diff % totalDays) / totalHours);
          const minutes = Math.floor((diff % totalHours) / totalMinutes);
          const seconds = Math.floor((diff % totalMinutes) / totalSeconds);
        
          setProgress(document.querySelector('.progress-day .progress-bar'), days, days);
          setProgress(document.querySelector('.progress-hour .progress-bar'), hours, 24);
          setProgress(document.querySelector('.progress-minute .progress-bar'), minutes, 60);
          setProgress(document.querySelector('.progress-second .progress-bar'), seconds, 60);
        
          document.querySelector('.progress-day .progress-text').textContent = days;
          document.querySelector('.progress-hour .progress-text').textContent = hours;
          document.querySelector('.progress-minute .progress-text').textContent = minutes;
          document.querySelector('.progress-second .progress-text').textContent = seconds;
        
          setTimeout(updateProgressBars, 1000);
        }
        
        // Call the function to start the countdown
        updateProgressBars();
        
        // Call the function to start the countdown
        updateProgressBars();
        


        



// time round js ends
