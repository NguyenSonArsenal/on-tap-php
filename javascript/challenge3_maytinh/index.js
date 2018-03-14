var number = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
var pheptinh = ['+', '-', '*', '/'];
var advance = ['x2', '√'];


var result = false;
var count = 0;

var test = '5*8<sup>2</sup>*5*6%+9-3/100';
chuanHoaChuoi(test);
getOperatior(test);


function btnClear() {
    document.getElementById('result').innerHTML = '';
}


function getItem(theSelector)
{
    var textValueScreen = document.getElementById('result').innerHTML;

    var textContentBtn = theSelector.textContent;

    var lastValueScreen = textValueScreen.slice(-1); // string

    console.log('last value: '+lastValueScreen);
    console.log('screen value: '+textValueScreen);
    console.log('btn value: '+textContentBtn);

    if (textValueScreen == '')
    {
        if (textContentBtn === '√')
        {
            document.getElementById('result').innerHTML += (textContentBtn + '(');
        }
        if (inArray(textContentBtn, number))
        {
            document.getElementById('result').innerHTML += textContentBtn;
        }
    }
    else if (textContentBtn === 'x2')
    {
        document.getElementById('result').innerHTML += ('<sup>2</sup>');
    }
    else if (inArray(textContentBtn, number) &&
        lastValueScreen === '%' || textContentBtn === '(' || textContentBtn === '√' )
    {
        document.getElementById('result').innerHTML += ('*'+textContentBtn);
    }
    else if (inArray(lastValueScreen, pheptinh) && textContentBtn === '(')
    {
        document.getElementById('result').innerHTML += textContentBtn;
    }
    else if (lastValueScreen === '√' && textContentBtn ==='(')
    {
        document.getElementById('result').innerHTML += textContentBtn;
    }

    else if (!result)
    {
        if (textContentBtn === '√')
        {
            document.getElementById('result').innerHTML += (textContentBtn+'(');
        }
        else if (inArray(lastValueScreen, pheptinh) && inArray(textContentBtn, pheptinh))
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
        if (inArray(textContentBtn, pheptinh) || textContentBtn === '%')
        {
            document.getElementById('result').innerHTML += textContentBtn;
            count++;
        }
        else if (inArray(textContentBtn, number) || textContentBtn === '√')
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

caculate = () =>
{
    var textValueScreen = document.getElementById('result').innerHTML;

    var arrChuanHoa = chuanHoaChuoi(textValueScreen) ? chuanHoaChuoi(textValueScreen) : [];
    var listOperator = getOperatior(textValueScreen) ? getOperatior(textValueScreen) : [];

    //console.log(arrChuanHoa);
    //console.log(listOperator);

    var expression = '';

    var lengthArrChuanHoa = arrChuanHoa.length;
    var lengthListOperator = listOperator.length;

    if (lengthArrChuanHoa != lengthListOperator)
    {
        for (var i=0; i<lengthArrChuanHoa; i++)
        {
            if (i<lengthArrChuanHoa-1)
            {
                expression += (arrChuanHoa[i]+listOperator[i]);
            }
            else
            {
                expression += arrChuanHoa[i];
            }
        }
    }
    else
    {
        for (var i=0; i<lengthArrChuanHoa; i++)
        {
             expression += (arrChuanHoa[i]+listOperator[i]);
        }
    }

    result = eval(expression);

    document.getElementById('result').innerHTML = result;

    count = 0;
};

removeLastValueScreen = () =>
{
    var textValueScreen = document.getElementById('result').innerHTML;

    var aPartValueScreen = textValueScreen.substring(0, textValueScreen.length-1); // string

    document.getElementById('result').innerHTML = aPartValueScreen;
};