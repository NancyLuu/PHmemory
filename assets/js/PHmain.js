var map;
function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        center: { lat: -34.397, lng: 150.644 },
        zoom: 8
    });
}


$(document).ready(function () {

    $("#btn_item_video").click(function () {
        var lable = $("#btn_item_video").text().trim();
        if (lable == "▼") {
            $("#btn_item_video").text("◄");
            $(".item_video").hide();
        }
        else {
            $("#btn_item_video").text("▼");
            $(".item_video").show();
        }
    });

    $("#btn_item_oranization").click(function () {
        var lable = $("#btn_item_oranization").text().trim();
        if (lable == "▼") {
            $("#btn_item_oranization").text("◄");
            $(".item_oranization").hide();
        }
        else {
            $("#btn_item_oranization").text("▼");
            $(".item_oranization").show();
        }
    });

    $("#btn_item_space").click(function () {
        var lable = $("#btn_item_space").text().trim();
        if (lable == "▼") {
            $("#btn_item_space").text("◄");
            $(".item_space").hide();
        }
        else {
            $("#btn_item_space").text("▼");
            $(".item_space").show();
        }
    });

    $("#btn_item_works").click(function () {
        var lable = $("#btn_item_works").text().trim();
        if (lable == "▼") {
            $("#btn_item_works").text("◄");
            $(".item_works").hide();
        }
        else {
            $("#btn_item_works").text("▼");
            $(".item_works").show();
        }
    });

    $("#btn_item_people").click(function () {
        var lable = $("#btn_item_people").text().trim();
        if (lable == "▼") {
            $("#btn_item_people").text("◄");
            $(".item_people").hide();
        }
        else {
            $("#btn_item_people").text("▼");
            $(".item_people").show();
        }
    });

    $("#btn_item_activity").click(function () {
        var lable = $("#btn_item_activity").text().trim();
        if (lable == "▼") {
            $("#btn_item_activity").text("◄");
            $(".item_activity").hide();
        }
        else {
            $("#btn_item_activity").text("▼");
            $(".item_activity").show();
        }
    });
    

});