$("#contactForm").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        // handle the invalid form...
        formError();
        submitMSG(false, "Did you fill in the form properly?");
    } else {
        // everything looks good!
        event.preventDefault();
        submitForm();
        //update();
    }
});


function submitForm(){
    // Initiate Variables With Form Content
    var name = $("#name").val();
    var from = $("#from").val();
    var message = $("#message").val();

    $.ajax({
        type: "POST",
        url: "php/saveToDb.php",
        data: "name=" + name + "&from=" + from + "&message=" + message,
        success : function(text){
            if (text == "success"){
                formSuccess();
                LoadData();
            } else {
                formError();
                submitMSG(false,text);
            }
        }
    });
}

function formSuccess(){
    $("#contactForm")[0].reset();
    submitMSG(true, "Thanks for your wishes")
}

function formError(){
    $("#contactForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        $(this).removeClass();
    });
}

function submitMSG(valid, msg){
    if(valid){
        var msgClasses = "h3 text-center tada animated text-success";
    } else {
        var msgClasses = "h3 text-center text-danger";
    }
    $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
}

//custom
function LoadData() {
    $.ajax({
        type: "POST",
        url: "php/showData.php",
        data: "",
        success : function(text) {
            var wishes = "<div class='wishes'>";
            wishes += "<div class='title'>";
            
            wishes += "</div>";
            console.log(text);
            $("#content").html(text);
        }
    });
}
//-----------------Load Data------------------//

/*$(document).ready(function() {
    selesai();
});
 
function selesai() {
	setTimeout(function() {
		update();
		selesai();
	}, 200);
}

function update() {
	$.getJSON("showData.php", function(data) {
		$("ul").empty();
		$.each(data.result, function() {
			$("ul").append("<li>"+this['SendingName']+"</li><li>"+this['FromColleague']+"</li><li>"+this['WhisesMessage']+"</li><br />");
		});
	});
}*/

//end custom