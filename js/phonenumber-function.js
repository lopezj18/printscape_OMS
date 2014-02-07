    $(function() {
        $.mask.definitions['~'] = "[+-]";
        $("#zipCode").mask("99999");
        $("#phoneExt").mask("(999) 999-9999? x99999");

        $("input").blur(function() {
            $("#info").html("Unmasked value: " + $(this).mask());
        }).dblclick(function() {
            $(this).unmask();
        });
    });