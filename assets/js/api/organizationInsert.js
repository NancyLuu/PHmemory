function Organizationinsert() {
    var dict = {};
    let ImgAuthorization = document.getElementById("ImgAuthorization");//.value;
    dict["ImgAuthorization"] = ImgAuthorization.options[ImgAuthorization.selectedIndex].text;
    let OrganizationName = document.getElementById("OrganizationName");
    dict["OrganizationName"] = OrganizationName.value;
    let OrganizationClassOne = document.getElementById("OrganizationClassOne");
    dict["OrganizationClassOne"] = OrganizationClassOne.options[OrganizationClassOne.selectedIndex].text;
    let OrganizationClassTwo = document.getElementById("OrganizationClassTwo");
    dict["OrganizationClassTwo"] = OrganizationClassTwo.options[OrganizationClassTwo.selectedIndex].text;
    let OrganizationDescription = document.getElementById("OrganizationDescription");
    dict["OrganizationDescription"] = OrganizationDescription.value;
    let Datev = document.getElementById("CreateDate");
    dict["Datev"] = Datev.value;
    let Place_address = document.getElementById("Place_address");
    dict["Place_address"] = Place_address.value;
    let Writer = document.getElementById("Writer");
    dict["Writer"] = Writer.value;
    let KeyWord = document.getElementById("KeyWord");
    dict["KeyWord"] = KeyWord.value;
    dict["uid"] = document.getElementById("uid").value;
    $.post('http://127.0.0.1/penghumemory/api/organizationInsert.php',{data:dict},function(data, textStatus) {
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