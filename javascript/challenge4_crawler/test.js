var results = [
    {   "id":1,
        "name": "Nhà Hàng 1",
        "district":"Hôm nay là thứ mấy",
        "city":"Yên bái",
        "full": "Đường Không Tên, Huyện Yên Bình, Yên Bái",
        "phoneNumber":"0293885228",
        "website": 'xxx.com'
    },
    {   "id":2,
        "name": "Nhà Hàng 2",
        "district":"Chắc chắn là thứ 2",
        "city":"Yên bái",
        "full": "Đường Không Tên, Huyện Yên Bình, Yên Bái",
        "phoneNumber":"0293885228",
        "website": 'xxx.com'
    },
    {   "id":3,
        "name": "Nhà Hàng 3",
        "district":"Dạo này thật mệt mỏi",
        "city":"Yên bái",
        "full": "Đường Không Tên, Huyện Yên Bình, Yên Bái",
        "phoneNumber":"0293885228",
        "website": ''
    }
];


function objToString (obj) {
    var str = '';
    for (var key in obj)
    {
        str += '{'
            + '\"id\"'         +':'    + '\"'+  obj[key].id +       '\"'+ ','
            + '\"name\"'       +':'    + '\"'+  obj[key].name       + '\"'+ ','
            + '\"city\"'       +':'    + '\"'+  obj[key].city       + '\"'+ ','
            + '\"district\"'   +':'    + '\"'+  obj[key].district   + '\"'+ ','
            + '\"full\"'       +':'    + '\"'+  obj[key].full       + '\"'+ ','
            + '\"phoneNumber\"'+':'    + '\"'+  obj[key].phoneNumber+ '\"'+ ','
            + '\"website\"'    +':'    + '\"'+  obj[key].website    + '\"'
        +'},';
    }

    str = str.substring(0, str.length - 2);

    return (str);
}

objToString(results);


