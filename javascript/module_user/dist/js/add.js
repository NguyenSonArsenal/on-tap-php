function eventHandleAddUser()
{
    var namePattern = /^[a-zA-Záàảạãăắằẳẵặâấầẩẫậéèẻẽẹêếềểễệiíìỉĩịóòỏõọôốồổỗộơớờởỡợúùủũụưứừửữựýỳỷỹỵđ\s+]{6,30}/; // ok // dung cho ca password va confirm password
    var emailPattern = /^[A-Za-z_0-9]{1,20}@[[A-Za-z]+?\.[A-Za-z]{2,4}(.[\w]{2,4}){0,1}$/; // ok
    var passwordPattern = /[A-Za-z]{6,24}/;

    var errors = {
        'name': 'Username must be 6 to 24 characters string',
        'email': 'Email not is invalid',
        'password': 'Password must be 6 to 24 characters string',
        'confirm_password': 'Conform password is not match password',
        'gender': 'Please choose a gender',
    };

    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var confirm_password = document.getElementById("confirm_password").value;
    var radiosGender = document.getElementsByName('gender');
    var hobbiesCheckboxes = document.getElementsByName('hobbie[]');

    var testName = namePattern.test(name);
    var testEmail = namePattern.test(email);
    var testPassword = passwordPattern.test(password);
    var testConfirmPassword = namePattern.test(confirm_password);

    if (!testName)
        (document.getElementsByClassName('error_for_name'))[0].innerHTML = errors.name;
    else
        (document.getElementsByClassName('error_for_name'))[0].innerHTML = '';

    if (!testEmail)
        (document.getElementsByClassName('error_for_email'))[0].innerHTML = errors.email;
    else
        (document.getElementsByClassName('error_for_email'))[0].innerHTML = '';

    if (!testPassword)
        (document.getElementsByClassName('error_for_password'))[0].innerHTML = errors.password;
    else
        (document.getElementsByClassName('error_for_password'))[0].innerHTML = '';

    if (!testConfirmPassword || (password !== confirm_password))
        (document.getElementsByClassName('error_for_confirm_password'))[0].innerHTML = errors.confirm_password;
    else
        (document.getElementsByClassName('error_for_confirm_password'))[0].innerHTML = '';

    // get value gender
    var gender = '';
    for (var i = 0, length = radiosGender.length; i < length; i++)
    {
        if (radiosGender[i].checked)
        {
            gender = radiosGender[i].value;
        }
    }

    if (!gender)
        (document.getElementsByClassName('error_for_gender'))[0].innerHTML = errors.gender;
    else
        (document.getElementsByClassName('error_for_gender'))[0].innerHTML = '';

    // get value hobbies
    var hobbiesValue = '';
    var lengthHobbiesCheckboxes = hobbiesCheckboxes.length;

    for (var i=0; i< lengthHobbiesCheckboxes; i++)
    {
        if (hobbiesCheckboxes[i].checked)
        {
            hobbiesValue+=","+hobbiesCheckboxes[i].value;
        }
    }

    if (testName && testEmail && testPassword
        && testConfirmPassword && (password === confirm_password)
        && gender
    )
    {
        var user = {
            id:createUniqueTime(),
            name,
            email,
            password,
            gender,
            hobbies: standardHobbie(hobbiesValue)
        };

        var oldUsers =  JSON.parse(getItemInLocalStorage('module_user')) || []; // obj

        oldUsers.push(user);

        // Put the object into storage
        setItemInLocalStorage('module_user', JSON.stringify(oldUsers));

        alert('A new user added successfully');

        if (redirect)
        {
            location.href = "http://ce.php/javascript/module_user/";
        }
    }
}
