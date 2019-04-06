function Activityinsert() {
    var dict = {};
    let ImgAuthorization = document.getElementById("ImgAuthorization");//.value;
    dict["ImgAuthorization"] = ImgAuthorization.options[ImgAuthorization.selectedIndex].text;
    let ActivityName = document.getElementById("ActivityName");
    dict["ActivityName"] = ActivityName.value;
    let ActivityClassOne = document.getElementById("ActivityClassOne");
    dict["ActivityClassOne"] = ActivityClassOne.options[ActivityClassOne.selectedIndex].text;
    let ActivityClassTwo = document.getElementById("ActivityClassTwo");
    dict["ActivityClassTwo"] = ActivityClassTwo.options[ActivityClassTwo.selectedIndex].text;
    let ActivityDescription = document.getElementById("ActivityDescription");
    dict["ActivityDescription"] = ActivityDescription.value;
    let Place_address = document.getElementById("Place_address");
    dict["Place_address"] = Place_address.value;
    let KeyWord = document.getElementById("KeyWord");
    dict["KeyWord"] = KeyWord.value;
    let Writer = document.getElementById("Writer");
    dict["Writer"] = Writer.value;
    let StartTime = document.getElementById("StartTime");
    dict["StartTime"] = StartTime.value;
    let FinishTime = document.getElementById("FinishTime");
    dict["FinishTime"] = FinishTime.value;
    dict["uid"] = document.getElementById("uid").value;
    $.post('http://127.0.0.1/penghumemory/api/activityInsert.php',{data:dict},function(data, textStatus) {
        console.log(data)
        jdata = JSON.parse(data);
        if(jdata.success=="Y")
        {
            window.location.assign("list-works.php");
        }

        //Videonum.text = "("+jdata.Video+")";
        //videonum.text = "("+jdata.video+")";
        //orgnum.text = "("+jdata.organization+")";
        //spacenum.text = "("+jdata.space+")";
        //peoplenum.text = "("+jdata.people+")";
        //activitynum.text = "("+jdata.activity+")";
    });
}