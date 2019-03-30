function Peopleinsert() {
    var dict = {};
    let ImgAuthorization = document.getElementById("ImgAuthorization");//.value;
    dict["ImgAuthorization"] = ImgAuthorization.options[ImgAuthorization.selectedIndex].text;
    let PeopleName = document.getElementById("PeopleName");
    dict["PeopleName"] = PeopleName.value;
    let PeopleClassOne = document.getElementById("PeopleClassOne");
    dict["PeopleClassOne"] = PeopleClassOne.options[PeopleClassOne.selectedIndex].text;
    let PeopleClassTwo = document.getElementById("PeopleClassTwo");
    dict["PeopleClassTwo"] = PeopleClassTwo.options[PeopleClassTwo.selectedIndex].text;
    let PeopleDescription = document.getElementById("PeopleDescription");
    dict["PeopleDescription"] = PeopleDescription.value;
    let Place_address = document.getElementById("Place_address");
    dict["Place_address"] = Place_address.value;
    let KeyWord = document.getElementById("KeyWord");
    dict["KeyWord"] = KeyWord.value;
    let Writer = document.getElementById("Writer");
    dict["Writer"] = Writer.value;
    let Birthday = document.getElementById("Birthday");
    dict["Birthday"] = Birthday.value;
    let Sex = document.getElementById("Sex");
    dict["Sex"] =  Sex.options[Sex.selectedIndex].text;
    let Country = document.getElementById("Country");
    dict["Country"] = Country.value;
    dict["uid"] = document.getElementById("uid").value;
    $.post('http://127.0.0.1/penghumemory/api/peopleInsert.php',{data:dict},function(data, textStatus) {
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