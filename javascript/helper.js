validNumber = (aNumber) => {
    if (!this.isExist(aNumber) || Number.isNaN(aNumber)) {
        return null;
    }

    const validNum = Number(aNumber);
    if (Number.isNaN(validNum)) {
        return null;
    }

    return validNum;
};

isNumber = (n) => {
    if (typeof n == 'number')
    {
        return true;
    }
    return false;
};

function lcfirst(str) {
    var str = str.toString().trim();

    var result = str.charAt(0).toLowerCase() + str.slice(1);

    return result;
}

function ucfirst(str) {
    var str = str.toString().trim();

    var result = str.charAt(0).toUpperCase() + str.slice(1);

    return result;
}

// check nam nhuan
function isLeapYear(year) {
    if ((year % 100 == 0 && year % 400 == 0) || (year % 4 ==0 && year % 100 !=0 && year % 400 !=0 ))
    {
        return true;
    }
    return false;
}


// remove element from array and recreate array
function removeElement(arr, needle) {
    var length = arr.length;

    var result = [];

    for (var i=0; i< length; i++)
    {
        if (arr[i] != needle)
        {
            result.push (arr[i]);
        }
    }

    return result;
}

// create unique arr
function removeDuplicates(arr)
{
    var result = [];

    var total = arr.length;

    for (var i=0; i<total; i++)
    {
        if (result.indexOf(arr[i]) == -1)
        {
            result.push(arr[i]);
        }
    }
    return result;
}