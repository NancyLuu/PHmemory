function workinsert() {
    var dict = {};
    let ImgAuthorization = document.getElementById("ImgAuthorization");//.value;
    dict["ImgAuthorization"] = ImgAuthorization.options[ImgAuthorization.selectedIndex].text;
    let WorkName = document.getElementById("WorkName");
    dict["WorkName"] = WorkName.value;
    let WorkClassOne = document.getElementById("WorkClassOne");
    dict["WorkClassOne"] = WorkClassOne.options[WorkClassOne.selectedIndex].text;
    let WorkClassTwo = document.getElementById("WorkClassTwo");
    dict["WorkClassTwo"] = WorkClassTwo.options[WorkClassTwo.selectedIndex].text;
    let WorkDescription = document.getElementById("WorkDescription");
    dict["WorkDescription"] = WorkDescription.value;
    let DateClass = document.getElementById("DateClass");
    dict["DateClass"] = DateClass.options[DateClass.selectedIndex].text;
    let Datev = document.getElementById("Date");
    dict["Datev"] = Datev.value;
    let Place_address = document.getElementById("Place_address");
    dict["Place_address"] = Place_address.value;
    let Writer = document.getElementById("Writer");
    dict["Writer"] = Writer.value;
    let KeyWord = document.getElementById("KeyWord");
    dict["KeyWord"] = KeyWord.value;
    let MediaClass = document.getElementById("MediaClass");
    dict["MediaClass"] = MediaClass.options[MediaClass.selectedIndex].text;
    let Creator = document.getElementById("Creator");
    dict["Creator"] = Creator.value;
    let PlaceClass = document.getElementById("PlaceClass");
    dict["PlaceClass"] = PlaceClass.options[PlaceClass.selectedIndex].text;
    let OriginalCopyright = document.getElementById("OriginalCopyright");
    dict["OriginalCopyright"] = OriginalCopyright.options[OriginalCopyright.selectedIndex].text;
    dict["uid"] = document.getElementById("uid").value;
    //console.log(dict);
    $.post('http://127.0.0.1/penghumemory/api/workInsert.php',{data:dict},function(data, textStatus) {
        jdata = JSON.parse(data);
        if(jdata.success=="Y")
        {
            window.location.assign("list-works.php");
        }

        //worknum.text = "("+jdata.work+")";
        //videonum.text = "("+jdata.video+")";
        //orgnum.text = "("+jdata.organization+")";
        //spacenum.text = "("+jdata.space+")";
        //peoplenum.text = "("+jdata.people+")";
        //activitynum.text = "("+jdata.activity+")";
    });
}