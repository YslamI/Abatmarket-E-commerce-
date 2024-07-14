
// var count = document.getElementById('info_count');
// var num = document.getElementById('num');

// count.onkeyup = function(){
//     var count_val = count.value;
//     num.innerHTML = count_val;
// }

$(document).ready(function(){
    
    $("#info_count").change(function(){

        var count = $('#info_count').val();
        
        $.post(
            'get_count.php',
            {
                count: count
            },
            function(data)
            {
                if(data != '')
                {
                    $('#get_count').html(data);
                }
            }
        )
    })

});