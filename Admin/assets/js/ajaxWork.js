
function showUni(){
    $.ajax({
        url:"./adminView/viewUniversites.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function showFields(){
    $.ajax({
        url:"./adminView/viewFields.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function showInterests(){
    $.ajax({
        url:"./adminView/viewInterests.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

function showUsers(){
    $.ajax({
        url:"./adminView/viewUsers.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

//delete university data
function uniDelete(id){
    $.ajax({
        url:"./controller/uniDeleteController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('University Successfully deleted');
            $('form').trigger('reset');
            showUni();
        }
    });
}

//delete interest data
function interestDelete(id){
    $.ajax({
        url:"./controller/intDeleteController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Interest Successfully deleted');
            $('form').trigger('reset');
            showInterests();
        }
    });
}

//delete field data
function fieldDelete(id){
    $.ajax({
        url:"./controller/deleteFieldController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Field Successfully deleted');
            $('form').trigger('reset');
            showFields();
        }
    });
}
