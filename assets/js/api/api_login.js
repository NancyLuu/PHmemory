function login() {
    let id = document.getElementById("userId").value;
    let pw = md5(document.getElementById("userPw").value);
    $.post('http://127.0.0.1/penghumemory/api/member_Connect.php',  {id:id,pw:pw}, function(data, textStatus) {
        if(data == "login.php?error=帳號或密碼錯誤"){
            window.alert("帳號或密碼錯誤 :(");
            window.location.assign(data);
        }
        else{
            window.location.assign(data);
        }
    });
}

function parseURLParams(url) {
    var queryStart = url.indexOf("?") + 1,
        queryEnd   = url.indexOf("#") + 1 || url.length + 1,
        query = url.slice(queryStart, queryEnd - 1),
        pairs = query.replace(/\+/g, " ").split("&"),
        parms = {}, i, n, v, nv;

    if (query === url || query === "") return;

    for (i = 0; i < pairs.length; i++) {
        nv = pairs[i].split("=", 2);
        n = decodeURIComponent(nv[0]);
        v = decodeURIComponent(nv[1]);

        if (!parms.hasOwnProperty(n)) parms[n] = [];
        parms[n].push(nv.length === 2 ? v : null);
    }
    return parms;
}