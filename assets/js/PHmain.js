var map;
function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        center: { lat: -34.397, lng: 150.644 },
        zoom: 8
    });
}


$(document).ready(function () {

    $(document).ready(function () {

        function shown() {
            var lable = $(this).text().trim();
            var name = $(this).get(0).id;
            if (lable == "展開") {
                $(this).text("隱藏");
                $('.'+name).show();
            }
            else {
                $(this).text("展開");
                $('.'+name).hide();
            }
        };

        $("#groupList01").on('click', shown);
        $("#groupList02").on('click', shown);
        $("#groupList03").on('click', shown);
        $("#groupList04").on('click', shown);
        $("#groupList05").on('click', shown);
        $("#groupList06").on('click', shown);
        $("#groupList07").on('click', shown);
        $("#groupList08").on('click', shown);
        $("#groupList09").on('click', shown);
        $("#groupList10").on('click', shown);
    });
    

});