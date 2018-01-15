var size = Object.keys(keyWords).length;


var result = [];
var arrTmp = [];


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

// trim () các phần tử trong mảng vaf delete &nbsp
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
}

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

    //result.push(getElementLikely(arrTmp, tmp[0]));
}

console.log(result);

var length = result.length;

for (var i=0; i<length; i++)
{
    //console.log(result[i]);
}

function getElementLikely(arr, needle) {
    var lengthArr = arr.length;

    var result = [];

    for (var i=0; i<lengthArr; i++)
    {
        var item = arr[i].content;

        var lengthItem = item.length;

        for (var j=0; j<lengthItem; j++)
        {
            if (item[j].match(needle))
            {
                var node = {
                    id: arr[i].id,
                    key: item
                };
                result.push(node);
            }
        }
    }

    return result;
}



