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

