// show all users form local storage
function fetchListTodos()
{
    var users = JSON.parse(getItemInLocalStorage('module_user')) || [];

    var length = users.length;

    if (length > 0)
    {
        for (var i=0; i<length; i++)
        {
            makeHtmlUser(users[i]);
        }
    }
}


function makeHtmlUser(user) {
    var gender = user.gender == 0 ? 'girl' : 'boy';

    var str =
        '<td><div><label>'+user.id+'</div></label></td>' +
        '<td>' +
        '<div class="content">' +
        '<label><span>'+user.name+'</span></label>' +
        '</div>' +
        '</td>' +
        '<td>' +
        '<div class="content">' +
        '<label><span>'+user.email+'</span></label>' +
        '</div>' +
        '</td>' +
        '<td>' +
        '<div class="content">' +
        '<label><span>'+user.hobbies+'</span></label>' +
        '</div>' +
        '</td>' +
        '<td>' +
        '<div class="content">' +
        '<label><span>'+gender+'</span></label>' +
        '</div>' +
        '</td>' +
        '<td>' +
        '<a class="btn btn-primary btn-xs" onclick="editUser(this)">' +
        '<i class="fa fa-edit"></i>' +
        'Edit</a>'+
        '<a class="btn btn-danger btn-xs" onclick="removeUser(this)">' +
        '<i class="fa fa-trash"></i>' +
        'Delete</a>'+
        '</td>';

    //console.log(str);

    var nodeTrUser = document.createElement('tr');
    nodeTrUser.setAttribute("id", user.id);
    nodeTrUser.innerHTML = str;

    var parentNodeuser = document.getElementById('tbodyUser');
    parentNodeuser.appendChild(nodeTrUser);
}

// show a user to edit
function fetchAUser() {
    var userId = getIdFromUrl(location.href);

    var users = JSON.parse(getItemInLocalStorage('module_user')) || [];
    var length = users.length;

    var arrUserId = [];

    if (length > 0)
    {

        for (var i=0; i<length; i++)
        {
            arrUserId.push(users[i].id);
        }

        if (arrUserId.indexOf(userId) >=0 )
        {
            for (var i=0; i<length; i++)
            {
                var user = users[i];
                if (userId == user.id)
                {
                    var nameElement = document.getElementById('name');
                    nameElement.setAttribute('value', user.name);

                    var emailElement = document.getElementById('email');
                    emailElement.setAttribute('value', user.email);

                    var passwordElement = document.getElementById('password');
                    passwordElement.setAttribute('value', user.password);

                    var confirmPasswordElement = document.getElementById('confirm_password');
                    confirmPasswordElement.setAttribute('value', user.password);

                    var genderElement = document.getElementsByName('gender');
                    var lengthGenderElement = genderElement.length;
                    for (var i=0; i<lengthGenderElement; i++)
                    {
                        if (genderElement[i].value == user.gender)
                        {
                            genderElement[i].setAttribute('checked', true);
                        }
                    }

                    var hobbieElement = document.getElementsByName('hobbie[]');
                    var lengthHobbieElement = hobbieElement.length;
                    for(var i=0; i<lengthHobbieElement; i++)
                    {
                        var hobbies = (user.hobbies).split(',');
                        console.log();

                        if (hobbies.indexOf(hobbieElement[i].value) >= 0)
                        {
                            hobbieElement[i].setAttribute('checked', true);
                        }
                    }
                }
            }
        }
        else
        {
            document.getElementById("wrapper").innerHTML = "Id is not exits";
        }
    }
}


if (typeof(Storage) !== 'undefined') {
    onloadListUser = () => {
        fetchListTodos();
    };

    onloadEditUser = () => {
        fetchAUser();
    }
}

// delete a user from list user
function removeUser(user)
{
    var result = confirm("Want to delete?");
    if (result) {
        var nodeToRemove = user.parentNode.parentNode;

        // remove html
        var tbodyElement = document.getElementById('tbodyUser');
        tbodyElement.removeChild(nodeToRemove);

        // remove from local storage
        var userId = nodeToRemove.id;
        var userOlds = JSON.parse(getItemInLocalStorage('module_user')) || [];
        var length = userOlds.length;

        if (length > 0)
        {
            var newUsers = removeElementFromArray(userOlds, userId);
            setItemInLocalStorage('module_user', JSON.stringify(newUsers));
        }
    }
}


function editUser(user) {
    var nodeEdit = user.parentNode.parentNode;
    var id = nodeEdit.id;

    location.href = 'http://ce.php/javascript/module_user/edit.php?id='+id;
}

function eventHandleEditUser()
{
    var userId = getIdFromUrl(location.href);

    var namePattern = /^[a-zA-Záàảạãăắằẳẵặâấầẩẫậéèẻẽẹêếềểễệiíìỉĩịóòỏõọôốồổỗộơớờởỡợúùủũụưứừửữựýỳỷỹỵđ\s+]{6,30}/; // ok // dung cho ca password va confirm password
    var emailPattern = /[A-Za-z_0-9]{3,20}@[[A-Za-z]+?\.[A-Za-z]{2,4}(.[\w]{2,4}){0,1}$/; // ok
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
        var oldUsers =  JSON.parse(getItemInLocalStorage('module_user')) || []; // obj

        var length = oldUsers.length;

        for (var i=0; i< length; i++)
        {
            var user = oldUsers[i];
            if (user.id == userId)
            {
                user.name = name;
                user.email = email;
                user.password = password;
                user.gender = gender;
                user.hobbies = standardHobbie(hobbiesValue);
            }
        }

        setItemInLocalStorage('module_user', JSON.stringify(oldUsers));

        alert('A new user edited successfully');

        location.href = "http://ce.php/javascript/module_user/";
    }
};