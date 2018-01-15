var str = "The rain in SPAIN stays mainly in the plain";
var result = [];
var arrStr = str.split(' ');

var count  = arrStr.length;

console.log(count);

for (var i=0; i< count; i++)
{
    if (arrStr[i].match(/Ain/gi))
    {
        result.push(arrStr[i]);
    }
}
console.log(result);