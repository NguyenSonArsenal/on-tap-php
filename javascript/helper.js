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