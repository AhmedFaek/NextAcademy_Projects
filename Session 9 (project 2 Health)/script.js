$("#btn-check").click(function(){
    var w = $("#w").val();
    var h = $("#h").val(); // Convert height to meters
    var bmi =( w / (h * h) )*10000;
    
    if (bmi > 25) {
        var result = "Overweight";
    } else if (bmi < 18.5) {
        var result = "Underweight";
    } else {
        var result = "Normal weight";
    }
    
    $("#check-result").html(result);
});

$("#j").fadeIn(3000);



$(window).scroll(function(){
    $("#products").fadeIn(3000);
})
