function fillnum() {
    let worknum = document.getElementById("worknum");//.value;
    let videonum = document.getElementById("videonum");
    let orgnum = document.getElementById("orgnum");
    let spacenum = document.getElementById("spacenum");
    let peoplenum = document.getElementById("peoplenum");
    let activitynum = document.getElementById("activitynum");
    let uid = document.getElementById("uid").value;
    $.post('http://127.0.0.1/penghumemory/api/getclassdatanumber.php',{id:uid},function(data, textStatus) {
        jdata = JSON.parse(data);
        worknum.text = "("+jdata.work+")";
        videonum.text = "("+jdata.video+")";
        orgnum.text = "("+jdata.organization+")";
        spacenum.text = "("+jdata.space+")";
        peoplenum.text = "("+jdata.people+")";
        activitynum.text = "("+jdata.activity+")";
        //console.log(jdata);
    });
}