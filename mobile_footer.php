

<footer class="mobile_home_footer">

<div class="mob_footer_fix">

    <div class="mob_blog_top_icon" id="scrollToTop">
        <div class="mob_blog_top_btn">
            <img src="<?=base_url(); ?>asset_mobile/images/blog_angle_up.svg" alt="">
        </div>
    </div>

    <div class="mobile_home_fix mob_blog_fixed">

        <div class="home_fix_active mobile_home_display home-tab" onclick="tabClick('home')">
            <img src="<?=base_url(); ?>asset_mobile/images/mobile_home_red.svg" alt="" class="home_red">
            <img src="<?=base_url(); ?>asset_mobile/images/mobile_home.svg" alt="" class="home_black hide_img">
            <span>Home</span>
        </div>
        <div class="mobile_home_display sports-tab" onclick="tabClick('sports')">
            <img src="<?=base_url(); ?>asset_mobile/images/mobile_ball.svg" alt="" class="sports_black">
            <img src="<?=base_url(); ?>asset_mobile/images/mobile_ball_red.svg" alt="" class="sports_red hide_img">
            <span>Sports</span>
        </div>
        <div class="mobile_home_display about-tab" onclick="tabClick('about')">
            <img src="<?=base_url(); ?>asset_mobile/images/mobile_run.svg" alt="" class="about_black">
            <img src="<?=base_url(); ?>asset_mobile/images/mobile_run_red.svg" alt="" class="about_red hide_img">
            <span>About</span>
        </div>
        <div class="mobile_home_display contact-tab" onclick="tabClick('contact')">
            <img src="<?=base_url(); ?>asset_mobile/images/mobile_contact.svg" alt="" class="contact_black">
            <img src="<?=base_url(); ?>asset_mobile/images/mobile_contact_red.svg" alt="" class="contact_red hide_img">
            <span>Contact</span>
        </div>
        <div class="mobile_home_display profile-tab" onclick="tabClick('profile')">
            <img src="<?=base_url(); ?>asset_mobile/images/mobile_user.svg" alt="" class="user_black">
            <img src="<?=base_url(); ?>asset_mobile/images/mobile_user_red.svg" alt="" class="user_red hide_img">
            <span>Profile</span>
        </div>
    </div>



</div>






<div>
    <img src="<?=base_url(); ?>asset_mobile/images/logo.svg" alt="" class="mobile_home_logo">
</div>

<div class="mobile_home_para mobile_home_footer_para">
    <p class="mobile_home_description">Unlock your potential and connect with your dream clubs today! Join
        and
        showcase your talent to a world of opportunities. Empower your athletic journey and take the first
        step towards realizing your dreams. Start creating your profile now!"</p>
</div>

<div class="mobile_home_media">
    <img src="<?=base_url(); ?>asset_mobile/images/instagram.png" alt="">
    <img src="<?=base_url(); ?>asset_mobile/images/linkedin.png" alt="" class="mobile_home_insta">
</div>


<div class="mobile_home_links">
    <p class="mobile_home_touch">Get In Touch</p>
    <p class="mobile_home_address">BookMyPlayer Pvt Ltd
        1204, Palm Square. Golf Course Ext Road, Gurgaon. Haryana. India 122018</p>
</div>

<div>
    <div class="mobile_home_contact">
        <img src="<?=base_url(); ?>asset_mobile/images/phone.svg" alt="">
        <p class="mobile_home_contact_no">+91 9811155939</p>
    </div>
    <div class="mobile_home_contact">
        <img src="<?=base_url(); ?>asset_mobile/images/sms.svg" alt="">
        <p class="mobile_home_contact_no">care@bookmyplayer.com</p>
    </div>
</div>

<div class="mobile_home_bottom mob_blog_copy">
    <p class="mobile_home_copyright">Copyright © 2023 <span>BookMyPlayer</span>. All rights reserved.</p>

</div>

<!-- sports tab click modal  -->

<div class="sports_wrapper">
    <div class="sports_modal"  id="sportsModal">
        <div class="footer_filter_box">

            <div></div>

            <div>
                <p class="footer_filter_by">Select Sports</p>
            </div>

            <div class="footer_filter_cross" onclick="footerCrossClick()">
                <span>X</span>
            </div>

        </div>

        <div>
            <p class="footer_select_sports">Sports</p>
        </div>

        <div class="footer_sport_list">
            <ul>
                <li>
                    <div class="footer_sports_desc">
                        <img src="<?=base_url(); ?>asset_mobile/images/play1.png" alt="">
                        <span class="sport_name">Football</span>
                    </div>
                </li>
                <li>
                    <div class="footer_sports_desc">
                        <img src="<?=base_url(); ?>asset_mobile/images/play2.png" alt="">
                        <span class="sport_name">Basketball</span>
                    </div>
                </li>
                <li>
                    <div class="footer_sports_desc">
                        <img src="<?=base_url(); ?>asset_mobile/images/play3.png" alt="">
                        <span class="sport_name">Cricket</span>
                    </div>
                </li>
                <li>
                    <div class="footer_sports_desc">
                        <img src="<?=base_url(); ?>asset_mobile/images/play4.png" alt="">
                        <span class="sport_name">Tennis</span>
                    </div>
                </li>
                <li>
                    <div class="footer_sports_desc">
                        <img src="<?=base_url(); ?>asset_mobile/images/play5.png" alt="">
                        <span class="sport_name">Badminton</span>
                    </div>
                </li>
                <li>
                    <div class="footer_sports_desc">
                        <img src="<?=base_url(); ?>asset_mobile/images/play6.png" alt="">
                        <span class="sport_name">Golf</span>
                    </div>
                </li>
                <li>
                    <div class="footer_sports_desc">
                        <img src="<?=base_url(); ?>asset_mobile/images/play3.png" alt="">
                        <span class="sport_name">Hockey</span>
                    </div>
                </li>
            </ul>
        </div>

        <div class="footer_sport_wrapper">
            <div class="footer_sport_box">

                <div class="footer_sport_academy">
                    <span>Academies</span>
                    <div>
                        <img src="<?=base_url(); ?>asset_mobile/images/white-arrow.svg" alt="">
                    </div>   
                </div>
                <div class="footer_sport_academy">
                    <span>Coaches</span>
                    <div>
                        <img src="<?=base_url(); ?>asset_mobile/images/white-arrow.svg" alt="">
                    </div>   
                </div>
                <div class="footer_sport_academy">
                    <span>Leagues</span>
                    <div>
                        <img src="<?=base_url(); ?>asset_mobile/images/white-arrow.svg" alt="">
                    </div>   
                </div>
                <div class="footer_sport_academy">
                    <span>Players</span>
                    <div>
                        <img src="<?=base_url(); ?>asset_mobile/images/white-arrow.svg" alt="">
                    </div>   
                </div>
                <div class="footer_sport_academy">
                    <span>Agents</span>
                    <div>
                        <img src="<?=base_url(); ?>asset_mobile/images/white-arrow.svg" alt="">
                    </div>   
                </div>
                <div class="footer_sport_academy">
                    <span>Clubs</span>
                    <div>
                        <img src="<?=base_url(); ?>asset_mobile/images/white-arrow.svg" alt="">
                    </div>   
                </div>

            </div>
        </div>


    </div>
</div>

<!-- sports tab click modal ends -->




</footer>


<script src="<?=base_url(); ?><?=base_url(); ?>asset_mobile/js/mobile_home.js"></script>



<script src="<?=base_url(); ?><?=base_url('search/assets/js/modernizr-2.6.2.min.js')?>"></script>
        
        <script src="<?=base_url(); ?><?=base_url('search/assets/js/jquery-1.10.2.min.js')?>"></script> 
        <script type="text/javascript" src="<?=base_url(); ?><?=base_url('search/assets/js/jquery-ui-1.8.2.custom.min.js')?>"></script> 
        <link href="<?=base_url('search/assets/css/css_mobile.css')?>" rel="stylesheet" type="text/css" />
        
        <script type="text/javascript"> 
            $(function() {
        
                $("#dd_user_input").autocomplete({
                    source: "front/search_test",
                    minLength: 2,
                    select: function(event, ui) {
                    var getUrl = ui.item.id;
                
                    if(getUrl != '#') {
                        location.href = getUrl;
                    }
                },
        
                html: true, 
        
                open: function(event, ui) {
                $(".ui-autocomplete").css("z-index", 1000);
                }
                });
        
                });
                </script>

                <script>
                    //footer tab click

                    
// sscroll to top js

document.getElementById("scrollToTop").onclick = function () {
  window.scrollTo({ top: 0, behavior: "smooth" });
};

// scroll to top js ends

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
  document.querySelector(".footer_sport_list").style.height = "40vh";

  // Remove 'active_sport' class from all spans
  document.querySelectorAll(".footer_sport_list li .sport_name").forEach(function (span) {
    span.classList.remove("active_sport");
  });

  // Reset image sources without 'black'
  document.querySelectorAll(".footer_sport_list li img").forEach(function (img) {
    img.src = img.src.replace('black', '');
  });

  // Restoring other styles or elements to their default states
  document.querySelector(".sports_modal").style.display = "none";
  document.querySelector(".sports_wrapper").style.display = "none";
  document.querySelector(".mob_blog_top_icon").style.display = "block";
  document.body.classList.remove("modal-scroll");
  document.querySelector(".mob_blog_fixed").style.display = "flex";
  document.querySelector(".footer_sport_box").style.display = "none";
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
        .src.replace("black", ""); // Reset image source
    });

    // Add 'active' class to the clicked span
    span.classList.add("active_sport");

    // Change the color of the clicked image to black
    img.src = img.src.replace(".png", "black.png");

    // Set the height of sports_modal to 100%
    document.getElementById("sportsModal").style.height = "100%";
    document.querySelector(".footer_sport_list").style.height = "47.5vh";
    document.querySelector(".footer_sport_box").style.display = "flex";

  });
});

// sport click end

                </script>
</body>

</html>
