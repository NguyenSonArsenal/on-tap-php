function readTextFile(file)
{
    var rawFile = new XMLHttpRequest();
    rawFile.open("GET", file, false);
    rawFile.onreadystatechange = function ()
    {
        if(rawFile.readyState === 4)
        {
            if(rawFile.status === 200 || rawFile.status == 0)
            {
                var allText = rawFile.responseText;
                alert(allText);
        }
        }
    };
    rawFile.send(null);
}

document.write(1234);

var arr = [2,9,0,7,1,9,9,5];


// remove element from array follow value and recreate array
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