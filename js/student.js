$(document).ready(function(){
    $('#std_class').change(function(){
        var std_class_id=$('#std_class').val();
        console.log(std_class_id);
        $.ajax({
            url:'data.php',
            method:'post',
            data:'std_class='+std_class_id
        }).done(function(std_section){
            std_section=JSON.parse(std_section);
            $('#std_section').empty();
            std_section.forEach(function(std_section){
                $('#std_section').append('<option>'+std_section.section_name+'</option>')
            })
        });
    })
})