var test = '5*8<sup>2</sup>*5*6%+9-3/100';
var re = /\*|\-|\+|\/(?!s)/g;

function chuanHoaChuoi(str) {
    var arrChuanHoa = str.split(re);

    arrChuanHoa = removeElement(arrChuanHoa, '');

    var length = arrChuanHoa.length;

    for (var i=0; i<length; i++)
    {
        if (arrChuanHoa[i].indexOf('<sup>2</sup>') != -1)
        {
            arrChuanHoa[i] = chuanHoaMuHai(arrChuanHoa[i]);
        }
        if (arrChuanHoa[i].indexOf('%') != -1)
        {
            arrChuanHoa[i] = chuanHoaPhanTram(arrChuanHoa[i]);
        }
    }
    return arrChuanHoa;
}

function getOperatior(str) {
   var listOperator = str.match(re);
   return listOperator;
}

function chuanHoaMuHai(str) {
    var x = str.split('<sup>2</sup>');
    var result = x[0] + '*' + x[0];

    return result;
}

function chuanHoaPhanTram(str) {
    return str.replace(/%/g, '/100');
}

function chuanHoaCanBacHai() {
    //return str.replace(/√(?=[0-9])/g, 'xxx');
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

// check a element is belong to array
function inArray(value, arr) {
    var total = arr.length;

    for (var i=0; i<total; i++)
    {
        if (value == arr[i])
        {
            return true;
        }
    }
    return false;
}