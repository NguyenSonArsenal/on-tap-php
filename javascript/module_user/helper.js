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

function changeToSlug(slug)
{
    //Đổi chữ hoa thành chữ thường
    slug = slug.toLowerCase();

    //Đổi ký tự có dấu thành không dấu
    slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
    slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
    slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
    slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
    slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
    slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
    slug = slug.replace(/đ/gi, 'd');

    return slug;
}