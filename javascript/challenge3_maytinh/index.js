var number = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
var pheptinh = ['+', '-', '*', '/', '%', 'x2'];

var result = false;

var count = 0;

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

function btnClear() {
    document.getElementById('result').innerHTML = 0;
}


function getItem(theSelector)
{
    var textValueScreen = document.getElementById('result').innerHTML;

    var textContentBtn = theSelector.textContent;

    console.log(textContentBtn);
    console.log(typeof textContentBtn);

    var lastValueScreen = textValueScreen.slice(-1); // string

    if (textValueScreen == '0')
    {
        if (inArray(textContentBtn, number))
        {
            document.getElementById('result').innerHTML = '';
            document.getElementById('result').innerHTML += textContentBtn;
        }
        else if (inArray(textContentBtn, pheptinh))
        {
            document.getElementById('result').innerHTML += textContentBtn;
        }
        else if (textContentBtn == '.')
        {
            document.getElementById('result').innerHTML += textContentBtn;
        }
        else if (textContentBtn == '√')
        {
            pow2();
        }
        else if (textContentBtn === '%')
        {
            tinhPhanTram();
            console.log(12390);
        }
    }
    else
    {
        if (!result)
        {
            if (inArray(lastValueScreen, pheptinh) && inArray(textContentBtn, pheptinh))
            {
                var value = textValueScreen.substring(0, textValueScreen.length - 1) + textContentBtn;

                document.getElementById('result').innerHTML = value;
            }
            else
            {
                document.getElementById('result').innerHTML += textContentBtn;
            }
        }
        else
        {
            console.log('Count: ' +count);
            if (inArray(textContentBtn, pheptinh))
            {
                document.getElementById('result').innerHTML += textContentBtn;
                count++;
            }
            else if (inArray(textContentBtn, number))
            {
                if (count == 0)
                {
                    document.getElementById('result').innerHTML = '';
                    document.getElementById('result').innerHTML += textContentBtn;
                    count++;
                }
                else
                {
                    document.getElementById('result').innerHTML += textContentBtn;
                }

            }
        }
    }
}

caculate = () =>
{
    var textValueScreen = document.getElementById('result').innerHTML;

    result = eval(textValueScreen.toString());

    document.getElementById('result').innerHTML = result;

    count = 0;

};

pow2 = () =>
{
    var textValueScreen = document.getElementById('result').innerHTML;
    result = Math.pow(textValueScreen, 2);
    document.getElementById('result').innerHTML = result;
};

sqrt = (value) =>
{
    console.log(value);
};

tinhPhanTram = () =>
{
    console.log(123);
    result = firstnumber / 100;
    document.lcdform.lcdsu.value = firstnumber + operation + "100";
};

removeLastValueScreen = () =>
{
    var textValueScreen = document.getElementById('result').innerHTML;

    var aPartValueScreen = textValueScreen.substring(0, textValueScreen.length-1); // string

    document.getElementById('result').innerHTML = aPartValueScreen;
};