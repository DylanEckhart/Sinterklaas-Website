let navLinks = document.getElementById("navLinks");

function showMenu() {
    navLinks.style.display = "block";
    navLinks.style.right = "0";
}

function hideMenu() {
    navLinks.style.display = "none";
}

function onSignIn(googleUser) {
    var profile = googleUser.getBasicProfile();
    $("#name").text(profile.getName());
    $("#email").text(profile.getEmail());
    $("#image").attr('src', profile.getImageUrl());
    $(".data").css("display", "block");
    $(".g-signin2").css("display", "none");
}

function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
        alert("You have been signed out successfully");
        $(".data").css("display", "none");
        $(".g-signin2").css("display", "block");
    });
}

function onSignIn(googleUser) {
    var id_token = googleUser.getAuthResponse().id_token;
}

var xhr = new XMLHttpRequest();
xhr.open('POST', 'https://almeresintevents.nl/Admin/login.php');
xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
xhr.onload = function() {
    console.log('Signed in as: ' + xhr.responseText);
};
xhr.send('idtoken=' + id_token);


