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

    if (email == null || email == "") {
        $("#alert2").removeClass("inactive").addClass("active");
        formIsValid = false;
    }

    if (letter == null || letter == "") {
        $("#alert3").removeClass("inactive").addClass("active");
        formIsValid = false;
    }

    if (!formIsValid)
        return false;
}
