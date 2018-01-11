function  randomString(n) {

    if (n >= 1 )
    {
        var result = "";
        var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

        var lengthPossibe = possible.length;

        var position = [];

        for (var i=0; i<=n; i++)
        {
            result += possible[Math.floor(Math.random() * lengthPossibe)];
        }

        return result;
    }
    else
    {
        return false;
    }
}

// Kiem tra input co empty khong ?
function isEmpty(str) {
    return (!str || 0 === str.length || !str.trim());
}