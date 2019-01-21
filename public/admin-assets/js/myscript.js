function prepCheckBox(){
    $(".child").on("click",function() {
        $parent = $(this).prevAll(".parent");
        if ($(this).is(":checked")) $parent.prop("checked",true);
        else {
           var len = $(this).parent().find(".child:checked").length;
           $parent.prop("checked",len>0);
        }    
    });
    $(".parent").on("click",function() {
        $(this).parent().find(".child").prop("checked",this.checked);
    });
}