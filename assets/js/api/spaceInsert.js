function Spaceinsert() {
    var dict = {};
    let ImgAuthorization = document.getElementById("ImgAuthorization");//.value;
    dict["ImgAuthorization"] = ImgAuthorization.options[ImgAuthorization.selectedIndex].text;
    let SpaceName = document.getElementById("SpaceName");
    dict["SpaceName"] = SpaceName.value;
    let SpaceClassOne = document.getElementById("SpaceClassOne");
    dict["SpaceClassOne"] = SpaceClassOne.options[SpaceClassOne.selectedIndex].text;
    let SpaceClassTwo = document.getElementById("SpaceClassTwo");
    dict["SpaceClassTwo"] = SpaceClassTwo.options[SpaceClassTwo.selectedIndex].text;
    let SpaceDescription = document.getElementById("SpaceDescription");
    dict["SpaceDescription"] = SpaceDescription.value;
    let Place_address = document.getElementById("Place_address");
    dict["Place_address"] = Place_address.value;
    let KeyWord = document.getElementById("KeyWord");
    dict["KeyWord"] = KeyWord.value;
    let Writer = document.getElementById("Writer");
    dict["Writer"] = Writer.value;
    dict["uid"] = document.getElementById("uid").value;
    $.post('http://127.0.0.1/penghumemory/api/spaceInsert.php',{data:dict},function(data, textStatus) {
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