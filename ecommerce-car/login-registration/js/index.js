$('#login-button').click(function(){
  $('#login-button').fadeOut("slow",function(){
    $("#container").fadeIn();
    TweenMax.from("#container", .4, { scale: 0, ease:Sine.easeInOut});
    TweenMax.to("#container", .4, { scale: 1, ease:Sine.easeInOut});
  });
});

$(".close-btn").click(function(){
  TweenMax.from("#container", .4, { scale: 1, ease:Sine.easeInOut});
  TweenMax.to("#container", .4, { left:"0px", scale: 0, ease:Sine.easeInOut});
  $("#container, #forgotten-container").fadeOut(800, function(){
    $("#login-button").fadeIn(800);
  });
});

/* Forgotten Password */
$('#forgotten').click(function(){
  $("#container").fadeOut(function(){
    $("#forgotten-container").fadeIn();
  });
});
/*##########################################################################*/
/*##########################################################################*/
/// Img Lading sliedr
backgroundOption = true;
let landingPage = document.querySelector(".cent");
let imgsArray = ["01.jpg", "02.jpg", "03.jpg"];
// Function To Randomize Imgs
function randomizeImgs() {

    if (backgroundOption === true) {
        backgroundInterval = setInterval(() => {
        // Get Random Number
        let randomNumber = Math.floor(Math.random() * imgsArray.length);
        // Change Background Image Url 
        landingPage.style.backgroundImage = 'url("img/' + imgsArray[randomNumber] + '")';
        },7000);
    }
}
randomizeImgs();