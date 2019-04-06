function Videoinsert() {
    var dict = {};
    let VideoAuthorization = document.getElementById("VideoAuthorization");//.value;
    dict["VideoAuthorization"] = VideoAuthorization.options[VideoAuthorization.selectedIndex].text;
    let VideoName = document.getElementById("VideoName");
    dict["VideoName"] = VideoName.value;
    let VideoClassOne = document.getElementById("VideoClassOne");
    dict["VideoClassOne"] = VideoClassOne.options[VideoClassOne.selectedIndex].text;
    let VideoClassTwo = document.getElementById("VideoClassTwo");
    dict["VideoClassTwo"] = VideoClassTwo.options[VideoClassTwo.selectedIndex].text;
    let VideoDescription = document.getElementById("VideoDescription");
    dict["VideoDescription"] = VideoDescription.value;
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
    $.post('http://127.0.0.1/penghumemory/api/videoInsert.php',{data:dict},function(data, textStatus) {
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