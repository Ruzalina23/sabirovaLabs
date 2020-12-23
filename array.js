(function($){
      
    $.fn.Array = function() {

        this.css("position", "relative");
        this.css("margin-right", "auto");
        this.css("margin-left", "auto");
        this.css("height", "400px");
        this.css("width", "700px");
        this.css("border", "1px solid black");
        this.css("border-radius", "30px");

        $('<h3 />', {
            text: 'Создание массива',
            style: 'text-align: center' 
        }).appendTo(this);

        $('<p />', {
            id: "pLen",
            text: 'Размерность массива: ',
            style: 'text-align: center' 
        }).appendTo(this);

        $('<input />', {
            value: 1,
            height: "30px",
            width: "50px",
            type: "number",
            id: "arrayLen",
        }).css("margin-left", "320px").appendTo(this);

        var warning = $('<div />', {
            id: "warning",
            title: "Длина", 
            style: 'text-align: center' 
        }).appendTo(this);

        $('<p />', {
            text: "Длина массива не может быть меньше 1",  
        }).appendTo(warning);

        warning.dialog({
            autoOpen: false,
            show: {
                effect: "drop",
                duration: 500
            },
            hide: {
                effect: "drop",
                duration: 500
            }
        });
        
        $("<p />").appendTo(this).append('<button id="formArray" class="ui-button ui-widget ui-corner-all" onclick="makeArray();">Сформировать массив</button>');
        $("#formArray").css("margin-left", "250px");

        $('<p />', {
            text: "",
            id: "mass"  
        }).css("margin-left", "10px").appendTo(this);

        $("<p />").appendTo(this).append('<button id="minMax" class="ui-button ui-widget ui-corner-all" onclick="minMax();">Найти мин и макс</button>');
        $("#minMax").css("margin-left", "270px").hide();

        $('<h3 />', {
            text: "",
            id: "minmaxLbl"  
        }).css("margin-left", "10px").appendTo(this);


    }; 

    

})(jQuery);

var arr = [];

function fmin() {
    return Math.min.apply(null, arr);
}

function fmax() {
    return Math.max.apply(null, arr);
}

function minMax() {
    var min = fmin();
    var max = fmax();

    $("#minmaxLbl").text("Минимальный элемент = " + min + ", " + "Максимальный = " + max);
    $("#minmaxLbl").show();
}

function formArray() {
    arr = [];
    var len = $("#arrayLen").val();
    var str = "[";
    for (var i = 0; i < len; i++) {
        var val = Math.round(-100 - 0.5 + Math.random() * (100 + 100 + 1)); 
        arr.push(val);
        if (i === len - 1) {
            str += val.toString();
        } else {
            str += val.toString() + ", ";
        }  
    }
    str += "]";
    $("#mass").text(str);
    $("#minMax").show();
    $("#minmaxLbl").hide();
}

function makeArray() {
    if (validate()) {
        formArray();
    } else {
        $("#warning").dialog("open");
    }
}

function validate() {
    return $("#arrayLen").val() > 0;
}