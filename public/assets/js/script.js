const menuToggle = document.getElementById('menu__toggle');
const menuBox = document.querySelector('.menu__box');
const menuCloseButton = document.querySelector('#toggle-btn');


document.addEventListener('DOMContentLoaded', function () {
  var menuToggle = document.getElementById('menu__btn');
  var menuItems = document.querySelectorAll('.menu__item');

  menuItems.forEach(function (item) {
    item.addEventListener('click', function () {
      menuToggle.checked = false;
    });
  });
});

$(document).ready(function () {
  $('.pop-out-image').click(function () {
    var imageSrc = $(this).attr('src');
    $('#modalImage').attr('src', imageSrc);
    $('#imageModal').modal('show');
  });

  $(document).on('click', '.close-image', function () {
    $('#imageModal').modal('hide');
  });
});


$(document).on("click", ".naccs .menu div", function () {
  var numberIndex = $(this).index();

  if (!$(this).is("active")) {
    $(".naccs .menu div").removeClass("active");
    $(".naccs ul li").removeClass("active");

    $(this).addClass("active");
    $(".naccs ul").find("li:eq(" + numberIndex + ")").addClass("active");

    var listItemHeight = $(".naccs ul")
      .find("li:eq(" + numberIndex + ")")
      .innerHeight();
    $(".naccs ul").height(listItemHeight + "px");
  }
});


document.addEventListener('click', function (event) {
  if (
    !menuBox.contains(event.target) &&
    event.target !== menuToggle &&
    event.target !== menuCloseButton
  ) {
    menuToggle.checked = false;
  }
});
var splashScreen = document.getElementById("splash-screen");
var closeButton = document.getElementById("close-button");
var mainContent = document.getElementById("main-content"); // Replace "main-content" with the actual ID of your main content element

function closeSplashScreen() {
  splashScreen.style.display = "none";

}

// Close the splash screen after 5 seconds
setTimeout(closeSplashScreen, 10000);

closeButton.addEventListener("click", closeSplashScreen);

// Check if the splash screen has been shown before
var splashScreenShown = localStorage.getItem("splashScreenShown");

if (!splashScreenShown) {
  splashScreen.style.display = "flex";

  // Set a flag in localStorage to indicate that the splash screen has been shown
  localStorage.setItem("splashScreenShown", true);
} else {
  // The splash screen has been shown before, hide it and show the main content immediately
  closeSplashScreen();
}



const commentIcon = document.querySelector(".fa.fa-comment");
    const submenu = document.querySelector(".menu .submenu");

    let submenuVisible = false;

    commentIcon.addEventListener("click", function () {
      if (submenuVisible) {
        submenu.style.display = "none";
      } else {
        submenu.style.display = "block";
        
      }
      
      submenuVisible = !submenuVisible;
    });

    