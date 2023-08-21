function onEmpStatusSelect() {
    if ($("#emp-status").val() == "UNEMPLOYED" || $("#emp-status").val() == "select") {
        $(".industry").hide();
        $(".gender").hide();
        $(".course").hide();
        $(".by").hide();
        $(".es").hide();

    } else if ($("#emp-status").val() == "gender") {
        $(".industry").hide();
        $(".course").hide();
        $(".gender").show();
        $(".by").hide();
        $(".es").hide();
    } else if ($("#emp-status").val() == "industry") {
        $(".industry").show();
        $(".course").hide();
        $(".gender").hide();
        $(".by").hide();
        $(".es").hide();
    } else if ($("#emp-status").val() == "course") {
        $(".course").show();
        $(".gender").hide();
        $(".industry").hide();
        $(".by").hide();
        $(".es").hide();
    } else if ($("#emp-status").val() == "by") {
        $(".by").show();
        $(".course").hide();
        $(".gender").hide();
        $(".industry").hide();
        $(".es").hide();

    } else if ($("#emp-status").val() == "es") {
        $(".es").show();
        $(".by").hide();
        $(".course").hide();
        $(".gender").hide();
        $(".industry").hide();

    }


}
onEmpStatusSelect();