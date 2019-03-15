function stu_login() {
  var stu_id = $("#stu_id").val();
  var stu_passwd = $("#passwd").val();

  if(stu_id == "")
  {
    $("#login_status").html('<div class="info" id="sa-basic">Please enter your ID to proceed.</div>');
    $("#stu_id").focus();

    else if(stu_passwd == "")
    {
      $("#login_status").html('<div class="info" id="sa-basic">Please enter 
      your account password to go.</div>');
      $("#passwd").focus();
    }
    else
    {
      var dataString = 'stu_id=' + stu_id + '&passwd=' + stu_passwd + '&page=users_login';
      $.ajax({
        type: "POST",
        url: "login_check.php",
        data: dataString,
        cache: false,
        beforeSend: function() 
        {
          $("#login_status").html('<br clear="all"><br clear="all"><div 
          align="left"><font style="font-family:Verdana, Geneva, sans-serif; 
          font-size:15px; color:black;">Please wait</font> <img 
          src="images/loadings.gif" alt="Loading...." align="absmiddle" 
          title="Loading...."/></div><br clear="all">');
        },
        success: function(response)
        {
          var response_brought = response.indexOf('login_process_completed_successfully=yes');
          if (response_brought != -1) 
          {
            $("#login_status").html('');
            //window.location.replace(response);
            window.location ="home.php";
          }
          else
          {
            $("#login_status").fadeIn(1000).html(response);
          }
        }
      });
    }
  }