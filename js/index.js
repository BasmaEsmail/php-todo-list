$('.delete').click(function(){
    const id= $(this).attr('id');
    $.post("./delete.php",
    {id:id},
    (data)=>{
        if(data)
        {
            $(this).parent().hide();

        }
    }
    )
    
});
$('.check').click(function(){
    const id= $(this).attr('id');
    $.post("./check.php",
    {id:id}
    )
    
})
