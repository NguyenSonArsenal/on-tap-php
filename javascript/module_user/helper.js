function setItemInLocalStorage(key, value) {
    localStorage.setItem(key, value);
}

function getItemInLocalStorage(key)
{
    return localStorage.getItem(key);
}

// remove element from array and recreate array
function removeElementFromArray(arr, needle) {
    var length = arr.length;

    var result = [];

    for (var i=0; i< length; i++)
    {
        if (arr[i].id != needle)
        {
            result.push (arr[i]);
        }
    }

    return result;
}

function createUniqueTime() {
    return new Date().valueOf();
}

function standardHobbie(hobbie) {
    var length = hobbie.length;
    return hobbie.substring(1, length);
}

function getIdFromUrl(url) {
    var tmp = url.trim().split('?');

    var tmp = tmp[1].split('=');

    var userId = tmp[1];

    return Number(userId);
}