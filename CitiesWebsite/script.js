/* START COMMENT AREA HIDE AND REVEAL */
function show_hide_function(id){
    var x=document.getElementById(id);
    
    if(window.getComputedStyle(x).display=="none"){
        x.style.display="block";
    }
    else{
        x.style.display="none";
    }      
}
/* END COMMENT AREA HIDE AND REVEAL*/

function add_comment(city_id){
    var name=document.getElementByName("name1").value();
    var comment=document.getElementByName("comment1").value();

    $.post('insert_comment_into_db.php',{
        name:name,
        comment:comment,
        city_id:city_id,
    }).done(function(data) {
        alert ("Data loaded");
    });    

}