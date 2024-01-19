// Function to show the modal

// Preloader Handling
document.addEventListener("DOMContentLoaded", function () {
    let loader = document.getElementById("preloader");
    if (loader)
    {
        loader.style.display = "none";
    }
});

// Show/hide the "Back to Top" button and adjust logo opacity based on scroll position
window.addEventListener("scroll", function () {
    scrollFunction();
});

function scrollFunction() {
    let btn = document.getElementById("to-top");
    let logo = document.getElementById("logo");
    let userIcon = document.getElementById("userIcon");

    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 300) {
        btn.style.display = "block";
        logo.style.opacity = "0";
        userIcon.style.opacity = "0";
    } else {
        btn.style.display = "none";
        logo.style.opacity = "1";
        userIcon.style.opacity = "1";
    }
}

function toggleDropdown() {
    var dropdown = document.getElementById("userDropdown");
    dropdown.classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function (event) {
    if (!event.target.matches('.user-avatar')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        for (var i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}

function logout() {
    document.cookie = "email=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
    window.location.href = "../views/login.php";
    console.log("Logout logic goes here");
}

function showModal(modal) {
    var modalElement = document.getElementById(modal);
    var myModal = new bootstrap.Modal(modalElement);
    myModal.show();
}
