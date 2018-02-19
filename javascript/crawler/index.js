var cities = {
    1: 'Ha noi', 20: 'Quang binh/ hai phong', 32: 'Da Nang', 50: 'Ho Chi Minh', 59: 'Can Tho', 27: 'Nghe An',
    57: 'An Giang', 49: 'Ba Ria Vung Tau', 15: 'Bac Giang', 4: 'Bac Can', 62: 'Bac Lieu',
    18: 'Bac Ninh', 53: 'Ben Tre', 35: 'Binh Dinh', 47: 'Binh Duong', 45: 'Binh Phuoc', 39: 'Binh Thuan',
    63: 'Ca Mau', 3: 'Cao Bang', 42: 'Dac Lac', 43: 'Dac Nong', 7: 'Dien Bien', 48: 'Dong Nai',
    56: 'Dong Thap', 41: 'Gia Lai', 2: 'Ha Giang', 23: 'Ha Nam', 28: 'Ha Tinh', 19: 'Hai Duong',
    60: 'Hau Giang', 11: 'Hoa Binh', 21: 'Hung Yen', 37: 'Khanh Hoa', 58: 'Kien Giang',
    40: 'Kon Tum', 8: 'Lai Chau', 44: 'Lam Dong', 13: 'Lang Son', 6: 'Lao Cai', 51: 'Long An',
    24: 'Nam Dinh', 25: 'Ninh Binh', 38: 'Ninh Thuan', 16: 'Phu Tho', 36: 'Phu Yen', 29: 'Quang Binh',
    33: 'Quang Nam', 34: 'Quang Ngai', 14: 'Quang Ninh', 30: 'Quang Tri', 61: 'Soc Trang',
    9: 'Son La', 46: 'Tay Ninh', 22: 'Thai Binh', 26: 'Thanh Hoa', 31: 'Thua Thien Hue', 52: 'Tien Giang',
    54: 'Tra Vinh', 5: 'Tuyen Quang', 55: 'Vinh Long', 17: 'Vinh Phuc', 10: 'Yen Bai'
};

var results = [];

function inArray(arr, needle) {
    for (key in arr)
    {
        if (arr[key].id === needle)
        {
            return true;
        }
    }
    return false;
}
var restaurants =(response) => {
    var restaurant = {};

    var id, name, full, district, city, website, phoneNumber;

    var length = response.data.length;

    if (length > 0)
    {
        for (key in response.data)
        {
            var tmp = response.data[key];

            if (tmp)
            {
                city = (tmp.address.city);
                district = tmp.address.district;
                full = tmp.address.full;
                name = tmp.name;
                website = tmp.website;
                phoneNumber = tmp.phoneNumber;
                id = tmp.id;

                // console.log(inArray(results, id));

                if (!inArray(results, id))
                {
                    restaurant = {id, city, district, full, name, website, phoneNumber};
                    results.push(restaurant); // arr of objects
                }
                else
                {
                    break;
                }
            }
        }
        console.log(results);
    }
};

function loadDoc(url, callback) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var respon = JSON.parse(this.response);
            callback(respon);
            var nextUrl = respon.pagination.nextUrl;
            if (nextUrl)
            {
                setTimeout(myFunction, 1000);
                function myFunction() {
                    loadDoc(nextUrl, restaurants);
                }
            }
        }
    };
    xhttp.open("GET", 'https://latte.lozi.vn/v1.2/'+url, true);
    xhttp.send();
}

for (key in cities)
{
    loadDoc("/newsfeed/merchants?t=popular&cityId="+key+"&districtId=-1&cats=35", restaurants);
}

loadDoc("/newsfeed/merchants?t=popular&cityId=10&districtId=-1&cats=35", restaurants);


function objToString (obj) {
    var str = [];
    for (var key in obj)
    {
        str += '{'
            + '\"id\"'         +':'    + '\"'+  obj[key].id + '\"'+ ','
            + '\"name\"'       +':'    + '\"'+  obj[key].name + '\"'+ ','
            + '\"city\"'       +':'    + '\"'+  obj[key].city + '\"'+ ','
            + '\"district\"'       +':'    + '\"'+  obj[key].district + '\"'+ ','
            + '\"full\"'       +':'    + '\"'+  obj[key].full + '\"'+ ','
            + '\"phoneNumber\"'       +':'    + '\"'+  obj[key].phoneNumber + '\"'+ ','
            + '\"website\"'       +':'    + '\"'+  obj[key].website + '\"'
            +'},';
    }

    str = str.substring(0, str.length - 2);

    return str;
}

objToString(results);

function openNewTab(results)
{
    //console.log(typeof results);
    var aFileParts = [results];
    var oMyBlob = new Blob(aFileParts, {type : 'text/html'}); // the blob
    window.open(URL.createObjectURL(oMyBlob), '_blank');
}

openNewTab(results);