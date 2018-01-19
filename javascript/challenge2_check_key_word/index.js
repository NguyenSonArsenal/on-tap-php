var size = Object.keys(keyWords).length;

// obj json
var objChuanHoa = {
  'CNTT' : 'công nghệ thông tin',
  'CN' : 'công nghiệp',
  'VT' : 'viễn thông',
  'cơ' : 'cơ khí'
};

function chuanHoa(objChuanHoa, needle) {
    needle = needle.trim();

    for (key in objChuanHoa) {

        var check = (needle.toUpperCase()).includes(key.toUpperCase()) ||
                    (needle.toUpperCase()).includes(objChuanHoa[key].toUpperCase());

        if (check)
        {
            return objChuanHoa[key];
        }
    }
    return needle;
}

//var x = chuanHoa(objChuanHoa, 'CNTT');
//console.log(x + '1234567890');


var result = [];
var arrTmp = []; // chua cac gia tri duoc loc tu mang key word


Object.keys(keyWords).forEach(key => {
    keyWords[key] = keyWords[key].trim();

    if (keyWords[key].includes('/'))
    {
        var tmp = {
            id: key,
            content: keyWords[key].split('/')
        };
    }
    else
    {
        var tmp = {
            id: key,
            content: keyWords[key].split('-')
        };
    }
    arrTmp.push(tmp);
});

var lengthArrTmp = arrTmp.length;

// Nếu phần tử trong mảng con là khoảng trắng thì xóa nó đi
for (var i=0; i<lengthArrTmp; i++)
{
    var total = arrTmp[i].length;

    for (var j=0; j<total; j++)
    {
        if (arrTmp[i][j] == '')
        {
            arrTmp[i] = removeElement(arrTmp[i], arrTmp[i][j]);
        }
    }
}

// trim () các phần tử trong mảng va delete &nbsp
for (var i=0; i< lengthArrTmp; i++)
{
    var tmp = arrTmp[i].content;
    var total = tmp.length;

    for (var j=0; j<total; j++)
    {
        tmp[j] = tmp[j].trim();

        if (tmp[j].slice(-6) == '&nbsp;')
        {
            tmp[j] = tmp[j].substring(0, tmp[j].length - 6);
        }
    }
    //console.log(arrTmp[i].id + ': ' +tmp);
    //console.log(tmp);
}

//console.log(arrTmp);

var result;

for (var i=0; i<lengthArrTmp; i++)
{
    var tmp = arrTmp[i].content;
    var total = tmp.length;

    var node = {
        key: tmp[0],
        word: getElementLikely(arrTmp, tmp[0])
    };

    result.push(node);
}

var resultUnique = [];

var total = result.length;

// result.splice(1,1); // Xoa element of array by id
for (var i=0; i<total; i++)
{
    for (var j=i+1; j<total; j++)
    {
        if (result[i].key == result[j].key ||
            (result[i].key).includes(result[j].key) ||
            (result[j].key).includes(result[i].key)
            )
        {
            result.splice(j, 1);
            total--;
        }
    }

}
console.log(result);

function getElementLikely(arr, needle) {
    var result = [];
    var lengthArr = arr.length;

    var itemChuanHoa = chuanHoa(objChuanHoa, needle);
    //console.log(itemChuanHoa);

    for (var i=0; i<lengthArr; i++)
    {
        var item = arr[i].content;

        var lengthItem = item.length;

        for (var j=0; j<lengthItem; j++)
        {
            item[j] = chuanHoa(objChuanHoa, item[j]);
            if (item[j].match(itemChuanHoa) || item[j].includes(itemChuanHoa))
            {
                var node = {
                    id: arr[i].id,
                    key: item
                };
                result.push(node);
                removeElement(arr, item[j]);
            }
        }
    }

    return result;
}



