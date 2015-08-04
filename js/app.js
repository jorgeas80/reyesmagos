/*********************
 * App reyes magos
 *********************/

function validateForm() {
    var name = document.forms["mainForm"]["name"].value;
    var email = document.forms["mainForm"]["email"].value;
    var letter = document.forms["mainForm"]["letter"].value;

    var formIsValid = true;

    if (name == null || name == "") {
        $("#alert1").removeClass("inactive").addClass("active");
        formIsValid = false;
    }

    else {
        $("#alert1").removeClass("active").addClass("inactive");
        formIsValid = true;
    }

    if (email == null || email == "") {
        $("#alert2").removeClass("inactive").addClass("active");
        formIsValid = false;
    }

    else {
        $("#alert2").removeClass("active").addClass("inactive");
        formIsValid = true;
    }

    if (letter == null || letter == "") {
        $("#alert3").removeClass("inactive").addClass("active");
        formIsValid = false;
    }

    else {
        $("#alert3").removeClass("active").addClass("inactive");
        formIsValid = true;
    }

    if (!formIsValid)
        return false;
}

