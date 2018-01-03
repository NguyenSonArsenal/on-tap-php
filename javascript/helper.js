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

function swap(&n1,; &n2;){
    var tmp;

    if(n1<n2) {
        tmp = n1;
        n1=n2;
        n2=tmp;
    }
}