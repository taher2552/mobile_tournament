//footer tab click

function tabClick(tabName) {
  // Remove 'home_fix_active' class from all tabs
  const tabs = document.querySelectorAll(".mobile_home_display");
  tabs.forEach((tab) => tab.classList.remove("home_fix_active"));

  // Add 'home_fix_active' class to the clicked tab

  let value = 0;

  // Add 'home_fix_active' class to the clicked tab
  const clickedTab = document.querySelector(`.${tabName}-tab`);
  if (clickedTab) {
    clickedTab.classList.add("home_fix_active");
    value = `${tabName}-tab`;
  }

  const sportsTab = document.querySelector(".sports-tab");
  const sportsModal = document.querySelector(".sports_modal");

  if (value === "home-tab") {
    document.querySelector(".home_red").style.display = "block";
    document.querySelector(".home_black").style.display = "none";

    document.querySelector(".sports_black").style.display = "block";
    document.querySelector(".sports_red").style.display = "none";

    document.querySelector(".about_black").style.display = "block";
    document.querySelector(".about_red").style.display = "none";

    document.querySelector(".user_black").style.display = "block";
    document.querySelector(".user_red").style.display = "none";

    document.querySelector(".contact_black").style.display = "block";
    document.querySelector(".contact_red").style.display = "none";

    footerCrossClick();
  } else if (value === "sports-tab") {
    document.querySelector(".home_red").style.display = "none";
    document.querySelector(".home_black").style.display = "block";

    document.querySelector(".sports_black").style.display = "none";
    document.querySelector(".sports_red").style.display = "block";

    document.querySelector(".about_black").style.display = "block";
    document.querySelector(".about_red").style.display = "none";

    document.querySelector(".user_black").style.display = "block";
    document.querySelector(".user_red").style.display = "none";

    document.querySelector(".contact_black").style.display = "block";
    document.querySelector(".contact_red").style.display = "none";

    document.querySelector(".sports_modal").style.display = "block";
    document.querySelector(".sports_wrapper").style.display = "flex";
    document.querySelector(".mob_blog_top_icon").style.display = "none";
    document.body.classList.add("modal-scroll");

    document.querySelector(".mob_blog_fixed").style.display = "none";
  } else if (value === "about-tab") {
    document.querySelector(".home_red").style.display = "none";
    document.querySelector(".home_black").style.display = "block";

    document.querySelector(".sports_black").style.display = "block";
    document.querySelector(".sports_red").style.display = "none";

    document.querySelector(".about_black").style.display = "none";
    document.querySelector(".about_red").style.display = "block";

    document.querySelector(".user_black").style.display = "block";
    document.querySelector(".user_red").style.display = "none";

    document.querySelector(".contact_black").style.display = "block";
    document.querySelector(".contact_red").style.display = "none";

    footerCrossClick();
  } else if (value === "profile-tab") {
    document.querySelector(".home_red").style.display = "none";
    document.querySelector(".home_black").style.display = "block";

    document.querySelector(".sports_black").style.display = "block";
    document.querySelector(".sports_red").style.display = "none";

    document.querySelector(".about_black").style.display = "block";
    document.querySelector(".about_red").style.display = "none";

    document.querySelector(".user_black").style.display = "none";
    document.querySelector(".user_red").style.display = "block";

    document.querySelector(".contact_black").style.display = "block";
    document.querySelector(".contact_red").style.display = "none";

    footerCrossClick();
  } else if (value === "contact-tab") {
    document.querySelector(".home_red").style.display = "none";
    document.querySelector(".home_black").style.display = "block";

    document.querySelector(".sports_black").style.display = "block";
    document.querySelector(".sports_red").style.display = "none";

    document.querySelector(".about_black").style.display = "block";
    document.querySelector(".about_red").style.display = "none";

    document.querySelector(".user_black").style.display = "block";
    document.querySelector(".user_red").style.display = "none";

    document.querySelector(".contact_black").style.display = "none";
    document.querySelector(".contact_red").style.display = "block";

    footerCrossClick();
  }
}

function footerCrossClick() {
  // Reset modal height to 50%
  document.querySelector(".sports_modal").style.height = "50%";
  document.querySelector(".footer_sport_list").style.height = "30vh";

  // Remove 'active_sport' class from all spans
  document.querySelectorAll(".footer_sport_list li .sport_name").forEach(function (span) {
    span.classList.remove("active_sport");
  });

  // Reset image sources without '-black'
  document.querySelectorAll(".footer_sport_list li img").forEach(function (img) {
    img.src = img.src.replace('-black', '');
  });

  // Restoring other styles or elements to their default states
  document.querySelector(".sports_modal").style.display = "none";
  document.querySelector(".sports_wrapper").style.display = "none";
  document.querySelector(".mob_blog_top_icon").style.display = "block";
  document.body.classList.remove("modal-scroll");
  document.querySelector(".mob_blog_fixed").style.display = "flex";
}


//footer tab clickends

// sport list click

var listItems = document.querySelectorAll(".footer_sport_list li");

// Loop through each list item and add a click event listener to the span inside
listItems.forEach(function (item) {
  var span = item.querySelector(".sport_name"); // Select the span with the class 'sport_name' inside the li
  var img = item.querySelector("img"); // Select the img inside the li

  span.addEventListener("click", function () {
    // Remove 'active' class from all spans and images
    listItems.forEach(function (li) {
      li.querySelector(".sport_name").classList.remove("active_sport");
      li.querySelector("img").src = li
        .querySelector("img")
        .src.replace("-black", ""); // Reset image source
    });

    // Add 'active' class to the clicked span
    span.classList.add("active_sport");

    // Change the color of the clicked image to black
    img.src = img.src.replace(".png", "-black.png");

    // Set the height of sports_modal to 100%
    document.getElementById("sportsModal").style.height = "100%";
    document.querySelector(".footer_sport_list").style.height = "47.5vh";

  });
});

// sport click end
