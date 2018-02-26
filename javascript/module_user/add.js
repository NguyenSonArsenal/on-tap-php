function eventHandleAddUser()
{

    var namePattern = /^[a-zA-Z]{6,30}/; // ok // dung cho ca password va confirm password
    var emailPattern = /[A-Za-z_0-9]{6,20}@[[A-Za-z]+?\.[A-Za-z]{2,4}(.[\w]{2,4}){0,1}$/; // ok

    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var confirm_password = document.getElementById("confirm_password").value;
    var redirect = document.getElementById("redirect").checked; // boolean

    // get value gender
    var radios = document.getElementsByName('gender');

    for (var i = 0, length = radios.length; i < length; i++)
    {
        if (radios[i].checked)
        {
            var gender = radios[i].value;
        }
    }

    console.log(gender);

    if (!gender)
    {
        (document.getElementsByClassName('error_for_gender'))[0].innerHTML =
            'Please choose a gender';
    }
    else
    {
        (document.getElementsByClassName('error_for_gender'))[0].innerHTML =
            '';
    }

    // get value hobbies
    var hobbiesCheckboxes = document.getElementsByName('hobbie[]');
    var hobbiesValue = '';
    var lengthHobbiesCheckboxes = hobbiesCheckboxes.length;

    for (var i=0; i< lengthHobbiesCheckboxes; i++)
    {
        if (hobbiesCheckboxes[0].checked)
        {
            hobbiesValue+=","+hobbiesCheckboxes[i].value;
        }
    }

    // get gender select a gender dropdown
    // var selectGender = document.getElementById('gender');
    // var gender = selectGender.options[selectGender.selectedIndex].value;


    var testName = namePattern.test(name);
    var testEmail = namePattern.test(email);
    var testPassword = namePattern.test(password);
    var testConfirmPassword = namePattern.test(confirm_password);

    if (!testName)
    {
        (document.getElementsByClassName('error_for_name'))[0].innerHTML =
            'Username must be 6 to 24 characters string';
    }
    else {
        (document.getElementsByClassName('error_for_name'))[0].innerHTML = '';
    }

    if (!testEmail)
    {
        (document.getElementsByClassName('error_for_email'))[0].innerHTML =
            'Email not is invalid';
    }
    else
    {
        (document.getElementsByClassName('error_for_email'))[0].innerHTML =
            '';
    }

    if (!testPassword)
    {
        (document.getElementsByClassName('error_for_password'))[0].innerHTML = 'Password must be 6 to 24 characters string';
    }
    else
    {
        (document.getElementsByClassName('error_for_password'))[0].innerHTML =
            '';
    }
    if (!testConfirmPassword || (password !== confirm_password))
    {
        (document.getElementsByClassName('error_for_confirm_password'))[0].innerHTML = 'Conform password is not match password';
    }
    else
    {
        (document.getElementsByClassName('error_for_confirm_password'))[0].innerHTML =
            '';
    }
}
