(function($){
    $(document).ready(function () {
        $categoryName = 'rent';

        if ($("form").attr("action") == '/rent-step-14' || $("form").attr("action") == '/invest-step-10' || $("form").attr("action") == '/sell-step-9'  || $("form").attr("action") == '/buy-step-11') {

            let count= 3;
            let interVal = setInterval(function() {
                count++;

                if (count < 5) {
                    $("li.dot-item:nth-child(" + count + ")").addClass('active');
                } else {
                    $("div.welcomeRent").css('display', 'none');
                    $("div#heroSec").css('display', 'flex');
                    clearInterval(interVal);
                }
            }, 700);
        }

        // add class active to buy button and if user click button, add active class
        $(".heroSec .options li:nth-child(3) a").addClass('active');

        $(".heroSec .options li").click(function () {
            $(this).children("a").removeClass('active');
            $(this).children("a").addClass('active');

            let currentIndex = $(this).index();

            $(".heroSec .options li").each(function (idx, li) {
                if (currentIndex != idx) {
                    $(li).children("a").removeClass('active');
                }
            });
        });
        // ==========================================================================

        // Validate form Fields
        if ($("form .radiobtn input:checkbox").length > 0 || $("form input:radio").length > 0) {
            if ($("form").attr("action") != '/rent-step-6' && $("form").attr("action") != '/rent-step-9' && $("form").attr("action") != '/rent-step-5' && $("form").attr("action") != '/buy-step-4' && $("form").attr("action") != '/buy-step-6') {
                if ($("form input:checked").length > 0) {
                    $.fn.setActiveNextButton();
                    $.fn.setActiveInvestButton();
                    $.fn.setActiveSellButton();
                    $.fn.setActiveBuyButton();
                } else {
                    $.fn.setDiableNextButton();
                    $.fn.setDiableInvestButton();
                    $.fn.setDiableSellButton();
                    $.fn.setDiableBuyButton();
                }
            }
        } else if ($("form input[type=text]").length > 0) {
            if ($("form input[name=otherText]").length < 1) {
                let isInitialValid = true;

                $('form input[type=text]').each(function () {
                    if ($(this).val() === '') {
                        isInitialValid = false;
                    }
                });

                if (isInitialValid) {
                    $.fn.setActiveNextButton();
                    $.fn.setActiveInvestButton();
                    $.fn.setActiveSellButton();
                    $.fn.setActiveBuyButton();
                } else {
                    $.fn.setDiableNextButton();
                    $.fn.setDiableInvestButton();
                    $.fn.setDiableSellButton();
                    $.fn.setDiableBuyButton();
                }
            }
        }

        // handle when press checkbox or radio
        $("form input:checkbox, form input:radio").click(function () {
            if ($("form").attr("action") != '/rent-step-6' && $("form").attr("action") != '/rent-step-9' && $("form").attr("action") != '/rent-step-5' && $("form").attr("action") != '/rent-step-8' && $("form").attr("action") != '/buy-step-4' && $("form").attr("action") != '/buy-step-6') {
                if ($("form input:checked").length > 0) {
                    $.fn.setActiveNextButton();
                    $.fn.setActiveInvestButton();
                    $.fn.setActiveSellButton();
                    $.fn.setActiveBuyButton();
                } else {
                    $.fn.setDiableNextButton();
                    $.fn.setDiableInvestButton();
                    $.fn.setDiableSellButton();
                    $.fn.setDiableBuyButton();
                }
            }
        });

        // handle when key up input field
        $("form input").keyup(function () {
            let isValid = true;

            $('input').each(function () {
                if ($(this).val() === '')
                    isValid = false;
            });

            if (isValid) {
                $.fn.setActiveNextButton();
                $.fn.setActiveInvestButton();
                $.fn.setActiveSellButton();
                $.fn.setActiveBuyButton();
            } else {
                $.fn.setDiableNextButton();
                $.fn.setDiableInvestButton();
                $.fn.setDiableSellButton();
                $.fn.setDiableBuyButton();
            }
        });

        let validateSelectForm = true;
        // validate select control
        $("form select").each(function() {
            let validateForm = true;

            if ($(this).children("option:selected").val() == "0")
                validateForm = false;

            if (validateForm) {
                $.fn.setActiveInvestButton();
                $.fn.setActiveSellButton();
                $.fn.setActiveBuyButton();
            } else {
                $.fn.setDiableInvestButton();
                $.fn.setDiableSellButton();
                $.fn.setDiableBuyButton();
            }
        });

        $("form select").change(function() {

            let validateForm = true;
            $("form select").each(function() {
                if ($(this).children("option:selected").val() == "0")
                    validateForm = false;
            });

            if (validateForm) {
                $.fn.setActiveInvestButton();
                $.fn.setActiveSellButton();
                $.fn.setActiveBuyButton();
            } else {
                $.fn.setDiableInvestButton();
                $.fn.setDiableSellButton();
                $.fn.setDiableBuyButton();
            }
        });

        // ==========================================================================

        // handler to prevent to go next page when enter key input
        $('input, textarea').keydown(function() {
            if (event.keyCode == 13) {
                event.preventDefault();
            }
        });
        // ==========================================================================

        // ================ success next button clicked circle spinner add ==========
        $('form').on('submit', function () {
            $.fn.setRightHouseWithBird();
            $.fn.setNextButtonLoading();
        });
        // =========================================================================

        // ================== slider and input text changed function ===============
        String.prototype.commafy = function() {
            return this.replace(/(.)(?=(.{3})+$)/g,"$1,");
        }

        $.fn.digits = function () {
            return this.each(function () {
                $(this).val($(this).val().commafy());
            });
        }

        $("input#textValue").on('input', function() {

            if (!$.isNumeric($(this).val())) {
                $(this).val('');
            }
        });

        $("input#textValue").click(function() {
            $("input#textValue").attr('placeholder', '');
            $("input#textValue").val('');

            $.fn.setDiableNextButton();
            $.fn.setDiableInvestButton();
            $.fn.setDiableSellButton();
            $.fn.setDiableBuyButton();
        });

        // rent step 3
        $(document).on('input', "form[action='/rent-step-3'] input.custom-range", function () {
            if ($("input.custom-range").val() == 1) {
                $("input#textValue").val(500);
            } else {
                let value = 500 + 100 * ($("input.custom-range").val() - 1);

                let stringValue = String(value);
                $("input#textValue").val(stringValue.commafy());
            }

            $.fn.setActiveNextButton();
        });

        $("form[action='/rent-step-3'] input#textValue").change(function () {
            if (!$.isNumeric($("input#textValue").val())) {
                $("input#textValue").val('');
            } else {
                let value = parseInt($("input#textValue").val());

                if (value < 500) {
                    $("input#textValue").val(500);
                } else if (500 <= value && value <= 5000) {
                    $("input#textValue").val($("input#textValue").val().commafy());
                } else if (value > 5000) {
                    let maxValue = 5000;

                    $("input#textValue").val('5,000');
                }

                $("input.custom-range").val((value - 500) / 100 + 1);

                $.fn.setActiveNextButton();
            }

            if (!$("input#textValue").val()) {
                $("input#textValue").attr('placeholder', 'X,XXX');
                $.fn.setDiableNextButton();
            }
        });

        $(document).on('click', function(event) {
            if (event.target.id != "textValue" && $('form').attr('action') === '/rent-step-3') {
                if (typeof $("form[action='/rent-step-3']input#textValue").val() === "undefined"
                    || $("form[action='/rent-step-3']input#textValue").val() === "") {
                    $("input#textValue").attr('placeholder', 'X,XXX');
                }
            }
        });

        // for invest step 4
        $(document).on('input', "form[action='/invest-step-4'] input.custom-range", function () {
            if ($("input.custom-range").val() == 1) {
                let stringValue = String(25000);
                $("input#textValue").val(stringValue.commafy());
            } else {
                let value = 25000 + 100 * ($("input.custom-range").val() - 1);

                let stringValue = String(value);
                $("input#textValue").val(stringValue.commafy());
            }

            $.fn.setActiveInvestButton();
            $.fn.setActiveSellButton();
            $.fn.setActiveBuyButton();
        });

        $("form[action='/invest-step-4'] input#textValue").change(function () {
            if (!$.isNumeric($("input#textValue").val())) {
                $("input#textValue").val('');
            } else {
                let value = parseInt($("input#textValue").val());

                if (value < 25000) {
                    $("input#textValue").val('25,000');
                } else if (25000 <= value && value <= 1000000) {
                    $("input#textValue").val($("input#textValue").val().commafy());
                } else if (value > 1000000) {
                    let maxValue = 1000000;

                    $("input#textValue").val('1,000,000');
                }

                $("input.custom-range").val((value - 25000) / 100 + 1);

                $.fn.setActiveInvestButton();
                $.fn.setActiveSellButton();
                $.fn.setActiveBuyButton();
            }

            if (typeof $("input#textValue").val() === '') {
                $("input#textValue").attr('placeholder', 'XXX,XXX');
            }
        });

        $(document).on('click', function(event) {
            if (event.target.id != "textValue" && $('form').attr('action') === '/invest-step-4') {
                if (typeof $("form[action='/invest-step-4'] input#textValue").val() === 'undefined'
                    || $("form[action='/invest-step-4'] input#textValue").val() === '') {
                    $("input#textValue").attr('placeholder', 'XXX,XXX');
                }
            }
        });

        // for sell step 3
        $(document).on('input', "form[action='/sell-step-3'] input.custom-range", function () {
            if ($("input.custom-range").val() == 1) {
                let stringValue = String(25000);
                $("input#textValue").val(stringValue.commafy());
            } else {
                let value = 25000 + 100 * ($("input.custom-range").val() - 1);

                let stringValue = String(value);
                $("input#textValue").val(stringValue.commafy());
            }

            $.fn.setActiveSellButton();
        });

        $("form[action='/sell-step-3'] input#textValue").change(function () {
            if (!$.isNumeric($("input#textValue").val())) {
                $("input#textValue").val('');
            } else {
                let value = parseInt($("input#textValue").val());

                if (value < 25000) {
                    $("input#textValue").val('25,000');
                } else if (25000 <= value && value <= 1000000) {
                    $("input#textValue").val($("input#textValue").val().commafy());
                } else if (value > 1000000) {
                    let maxValue = 1000000;

                    $("input#textValue").val('1,000,000');
                }

                $("input.custom-range").val((value - 25000) / 100 + 1);

                $.fn.setActiveSellButton();
            }

            if (typeof $("input#textValue").val() === '') {
                $("input#textValue").attr('placeholder', 'XXX,XXX');
            }
        });

        $(document).on('click', function(event) {
            if (event.target.id != "textValue" && $('form').attr('action') === '/sell-step-3') {
                if (typeof $("form[action='/sell-step-3'] input#textValue").val() === 'undefined'
                    || $("form[action='/sell-step-3'] input#textValue").val() === '') {
                    $("input#textValue").attr('placeholder', 'XXX,XXX');
                }
            }
        });

        // for buy step 3
        $(document).on('input', "form[action='/buy-step-3'] input.custom-range", function () {
            if ($("input.custom-range").val() == 1) {
                let stringValue = String(25000);
                $("input#textValue").val(stringValue.commafy());
            } else {
                let value = 25000 + 1000 * ($("input.custom-range").val());

                let stringValue = String(value);
                $("input#textValue").val(stringValue.commafy());
            }

            $.fn.setActiveBuyButton();
        });

        $("form[action='/buy-step-3'] input#textValue").change(function () {
            if (!$.isNumeric($("input#textValue").val())) {
                $("input#textValue").val('');
            } else {
                let value = parseInt($("input#textValue").val());

                if (value < 25000) {
                    $("input#textValue").val('25,000');
                } else if (25000 <= value && value <= 1000000) {
                    $("input#textValue").val($("input#textValue").val().commafy());
                } else if (value > 1000000) {
                    let maxValue = 1000000;

                    $("input#textValue").val('1,000,000');
                }

                $("input.custom-range").val((value - 25000) / 1000 + 1);

                $.fn.setActiveBuyButton();
            }

            if (typeof $("input#textValue").val() === '') {
                $("input#textValue").attr('placeholder', 'XXX,XXX');
            }
        });

        $(document).on('click', function(event) {
            if (event.target.id != "textValue" && $('form').attr('action') === '/buy-step-3') {
                if (typeof $("form[action='/buy-step-3'] input#textValue").val() === 'undefined'
                    || $("form[action='/buy-step-3'] input#textValue").val() === '') {
                    $("input#textValue").attr('placeholder', 'XXX,XXX');
                }
            }
        });

        // handle for invest step 7
        $(document).on('input', "form[action='/invest-step-7'] input.custom-range", function () {
            if ($("input.custom-range").val() == 1) {
                $("input#textValue").val('500');
            } else {
                let value = 500 + 100 * ($("input.custom-range").val() - 1);

                let stringValue = String(value);
                $("input#textValue").val(stringValue.commafy());
            }

            $.fn.setActiveInvestButton();
        });

        $("form[action='/invest-step-7'] input#textValue").change(function () {
            if (!$.isNumeric($("input#textValue").val())) {
                $("input#textValue").val('');
            } else {
                let value = parseInt($("input#textValue").val());

                if (value < 500) {
                    $("input#textValue").val('500');
                } else if (500 <= value && value <= 10000) {
                    $("input#textValue").val($("input#textValue").val().commafy());
                } else if (value > 10000) {
                    let maxValue = 10000;

                    $("input#textValue").val('1,000,000');
                }

                $("input.custom-range").val((value - 500) / 100 + 1);

                $.fn.setActiveInvestButton();
            }

            if (!$("input#textValue").val()) {
                // $("input#textValue").attr('placeholder', 'X,XXX');
            }
        });

        $(document).on('click', function(event) {
            if (event.target.id != "textValue" && $("form").attr('action') == "/invest-step-7") {
                if (!$("form[action='/invest-step-7']input#textValue").val()) {
                    $("input#textValue").attr('placeholder', 'X,XXX');
                }
            }
        });

        // handle for invest step 8
        $(document).on('input', "form[action='/invest-step-8'] input#yearMinumRange", function () {
            if ($("input#yearMinumRange").val() == 1) {
                $("input#yearMinumValue").val('1900');
            } else {
                let value = 1900 + 2 * ($("input#yearMinumRange").val() - 1);

                $("input#yearMinumValue").val(String(value));
            }

            $.fn.setActiveInvestButton();
        });

        $("form[action='/invest-step-8'] input#yearMinumValue").change(function () {
            if (!$.isNumeric($("input#yearMinumValue").val())) {
                $("input#yearMinumValue").val('');
            } else {
                let value = parseInt($("input#yearMinumValue").val());

                if (value < 1900) {
                    $("input#yearMinumValue").val('1900');
                } else if (500 <= value && value <= 10000) {
                    $("input#yearMinumValue").val($("input#yearMinumValue").val());
                } else if (value > 2022) {
                    $("input#yearMinumValue").val('2022');
                }

                $("input#yearMinumRange").val((value - 1900) / 2 + 1);

                $.fn.setActiveInvestButton();
            }

            if (!$("input#yearMinumValue").val()) {
                $("input#yearMinumValue").attr('placeholder', '1900');
            }
        });

        $(document).on('click', function(event) {
            if (event.target.id != "yearMinumValue") {
                if (!$("form[action='/invest-step-8']input#yearMinumValue").val() && $("form").attr('action') == '/invest-step-8') {
                    $("input#yearMinumValue").attr('placeholder', '1900');
                }
            }
        });

        $(document).on('input', "form[action='/invest-step-8'] input#yearMaximumRange", function () {
            if ($("input#yearMaximumRange").val() == 1) {
                $("input#yearMaximumValue").val('1900');
            } else {
                let value = 1900 + 2 * ($("input#yearMaximumRange").val() - 1);

                $("input#yearMaximumValue").val(String(value));
            }

            $.fn.setActiveInvestButton();
        });

        $("form[action='/invest-step-8'] input#yearMaximumValue").change(function () {
            if (!$.isNumeric($("input#yearMaximumValue").val())) {
                $("input#yearMaximumValue").val('');
            } else {
                let value = parseInt($("input#yearMaximumValue").val());

                if (value < 1900) {
                    $("input#yearMaximumValue").val('1900');
                } else if (500 <= value && value <= 10000) {
                    $("input#yearMaximumValue").val($("input#yearMaximumValue").val());
                } else if (value > 2022) {
                    $("input#yearMaximumValue").val('2022');
                }

                $("input#yearMaximumRange").val((value - 1900) / 2 + 1);

                $.fn.setActiveInvestButton();
            }

            if (!$("input#yearMaximumValue").val()) {
                $("input#yearMaximumValue").attr('placeholder', '2022');
            }
        });

        $(document).on('click', function(event) {
            if (event.target.id != "yearMaximumValue") {
                if (!$("form[action='/invest-step-8']input#yearMaximumValue").val() && $("form").attr('action') == '/invest-step-8') {
                    // $("input#yearMaximumValue").val(parseInt($( "#slider-range" ).slider( "values", 1 )) + 1900);
                }
            }
        });

        // handle for buy step 7
        $(document).on('input', "form[action='/buy-step-7'] input#yearMinumRange", function () {
            if ($("input#yearMinumRange").val() == 1) {
                $("input#yearMinumValue").val('1900');
            } else {
                let value = 1900 + 2 * ($("input#yearMinumRange").val() - 1);

                $("input#yearMinumValue").val(String(value));
            }

            $.fn.setActiveBuyButton();
        });

        $("form[action='/buy-step-7'] input#yearMinumValue").change(function () {
            if (!$.isNumeric($("input#yearMinumValue").val())) {
                $("input#yearMinumValue").val('');
            } else {
                let value = parseInt($("input#yearMinumValue").val());

                if (value < 1900) {
                    $("input#yearMinumValue").val('1900');
                } else if (500 <= value && value <= 10000) {
                    $("input#yearMinumValue").val($("input#yearMinumValue").val());
                } else if (value > 2022) {
                    $("input#yearMinumValue").val('2022');
                }

                $("input#yearMinumRange").val((value - 1900) / 2 + 1);

                $.fn.setActiveBuyButton();
            }

            if (!$("input#yearMinumValue").val()) {
                $("input#yearMinumValue").attr('placeholder', '1900');
            }
        });

        $(document).on('click', function(event) {
            if (event.target.id != "yearMinumValue") {
                if (!$("form[action='/buy-step-7']input#yearMinumValue").val() && $("form").attr('action') == '/buy-step-7') {
                    $("input#yearMinumValue").attr('placeholder', '1900');
                }
            }
        });

        $(document).on('input', "form[action='/buy-step-7'] input#yearMaximumRange", function () {
            if ($("input#yearMaximumRange").val() == 1) {
                $("input#yearMaximumValue").val('1900');
            } else {
                let value = 1900 + 2 * ($("input#yearMaximumRange").val() - 1);

                $("input#yearMaximumValue").val(String(value));
            }

            $.fn.setActiveBuyButton();
        });

        $("form[action='/buy-step-7'] input#yearMaximumValue").change(function () {
            if (!$.isNumeric($("input#yearMaximumValue").val())) {
                $("input#yearMaximumValue").val('');
            } else {
                let value = parseInt($("input#yearMaximumValue").val());

                if (value < 1900) {
                    $("input#yearMaximumValue").val('1900');
                } else if (500 <= value && value <= 10000) {
                    $("input#yearMaximumValue").val($("input#yearMaximumValue").val());
                } else if (value > 2022) {
                    $("input#yearMaximumValue").val('2022');
                }

                $("input#yearMaximumRange").val((value - 1900) / 2 + 1);

                $.fn.setActiveInvestButton();
            }

            if (!$("input#yearMaximumValue").val()) {
                $("input#yearMaximumValue").attr('placeholder', '2022');
            }
        });

        $(document).on('click', function(event) {
            if (event.target.id != "yearMaximumValue") {
                if (!$("form[action='/buy-step-7']input#yearMaximumValue").val() && $("form").attr('action') == '/buy-step-7') {
                    $("input#yearMaximumValue").attr('placeholder', '2022');
                }
            }
        });

        $("input#yearMinumValue").click(function() {
            $(this).val('');
            $(this).attr('placeholder', '');
        });

        $("input#yearMaximumValue").click(function() {
            $(this).val('');
            $(this).attr('placeholder', '');
        });

        $("input#yearMaximumValue").on('input', function() {
            if (!$.isNumeric($(this).val())) {
                $(this).val('');
            }
        });

        $("input#yearMaximumValue").keyup(function(event) {
            if (event.keyCode === 13) {
                if (!$.isNumeric($("input#yearMaximumValue").val())) {
                    $("input#yearMaximumValue").val('');
                } else {
                    let value = parseInt($("input#yearMaximumValue").val());

                    if (value < 1900) {
                        $("input#yearMaximumValue").val('1900');
                    } else if (500 <= value && value <= 10000) {
                        $("input#yearMaximumValue").val($("input#yearMaximumValue").val());
                    } else if (value > 2022) {
                        $("input#yearMaximumValue").val('2022');
                    }

                    $("input#yearMaximumRange").val((value - 1900) / 2 + 1);

                    $.fn.setActiveInvestButton();
                }

                if (!$("input#yearMaximumValue").val()) {
                    $("input#yearMaximumValue").attr('placeholder', '2022');
                }
            }
        });

        $('input#yearMinumValue').keyup(function(event) {
            if (event.keyCode === 13) {
                if (!$.isNumeric($("input#yearMinumValue").val())) {
                    $("input#yearMinumValue").val('');
                } else {
                    let value = parseInt($("input#yearMinumValue").val());

                    if (value < 1900) {
                        $("input#yearMinumValue").val('1900');
                    } else if (500 <= value && value <= 10000) {
                        $("input#yearMinumValue").val($("input#yearMinumValue").val());
                    } else if (value > 2022) {
                        $("input#yearMinumValue").val('2022');
                    }

                    $("input#yearMinumRange").val((value - 1900) / 2 + 1);

                    $.fn.setActiveBuyButton();
                }

                if (!$("input#yearMinumValue").val()) {
                    $("input#yearMinumValue").attr('placeholder', '1900');
                }
            }
        });

        // handle for added buy step 6
        $(document).on('input', "form[action='/buy-step-added-6'] input.custom-range", function () {
            if ($("input.custom-range").val() == 1) {
                $("input#textValue").val('500');
            } else {
                let value = 500 + 100 * ($("input.custom-range").val());

                let stringValue = String(value);
                $("input#textValue").val(stringValue.commafy());
            }

            $.fn.setActiveBuyButton();
        });

        $("form[action='/buy-step-added-6'] input#textValue").change(function () {
            if (!$.isNumeric($("input#textValue").val())) {
                $("input#textValue").val('');
            } else {
                let value = parseInt($("input#textValue").val());

                if (value < 500) {
                    $("input#textValue").val('500');
                } else if (500 <= value && value <= 7500) {
                    $("input#textValue").val($("input#textValue").val().commafy());
                } else if (value > 7500) {
                    let maxValue = 7500;

                    $("input#textValue").val('7,500');
                }

                $("input.custom-range").val((value - 500) / 100 + 1);

                $.fn.setActiveBuyButton();
            }

            if (!$("input#textValue").val()) {
                // $("input#textValue").attr('placeholder', 'X,XXX');
            }
        });

        $(document).on('click', function(event) {
            if (event.target.id != "textValue" && $("form").attr('action') == "/buy-step-added-6") {
                if (!$("form[action='/buy-step-added-6']input#textValue").val()) {
                    $("input#textValue").attr('placeholder', 'X,XXX');
                }
            }
        });
        // =========================================================================

        // ===================== handle for other input text field =================
        if ($("input:checkbox[name=Other]").is(":checked")) {
            $("input[name=otherText]").css('display', 'block');
        }

        $("form input:checkbox[name=Other]").change(function () {
            if ($(this).is(":checked")) {
                $("input[name=otherText]").css('display', 'block');

                $("ul.checkboxWrap").animate({ scrollTop: $('ul.checkboxWrap').prop("scrollHeight")}, 1000);
            } else {
                $("input[name=otherText]").css('display', 'none');
            }
        });
        // =========================================================================

        // ===================== handle for Near Work/School and Near Highway input text field =================
        if ($("form[action='/buy-step-8'] input:checkbox[name='Work/School']").is(":checked")) {
            $("input[name=otherText]").css('display', 'block');
        }

        $("form[action='/buy-step-8'] input:checkbox[name='Work/School']").change(function () {
            if ($(this).is(":checked")) {
                $("input[name=otherText]").css('display', 'block');

                $("ul.checkboxWrap").animate({ scrollTop: $('ul.checkboxWrap').prop("scrollHeight")}, 1000);
            } else {
                $("input[name=otherText]").css('display', 'none');
            }
        });

        if ($("form[action='/buy-step-8'] input:checkbox[name='Highway']").is(":checked")) {
            $("input[name=otherText]").css('display', 'block');
        }

        $("form[action='/buy-step-8'] input:checkbox[name='Highway']").change(function () {
            if ($(this).is(":checked")) {
                $("input[name=otherText]").css('display', 'block');

                $("ul.checkboxWrap").animate({ scrollTop: $('ul.checkboxWrap').prop("scrollHeight")}, 1000);
            } else {
                $("input[name=otherText]").css('display', 'none');
            }
        });
        // =========================================================================

       // =============== handle for input text field of rent step 14 and invest step 10 ==============
        $("input[name=username]").click(function() {
            $(this).attr('placeholder', '');
            $(this).val('');
        });

        $("input[name=email]").click(function() {
            $(this).attr('placeholder', '');
            $(this).val('');
        });

        $("input[name=phone]").click(function() {
            $(this).attr('placeholder', '');
            $(this).val('');
        });

        $(document).click(function(event) {
            if ($("form").attr("action") == '/rent-step-14' || $("form").attr("action") == '/invest-step-10' || $("form").attr("action") == '/sell-step-9' || $("form").attr("action") == '/buy-step-11') {
                if (event.target.name != 'username' && !$("input[name=username]").val()) {
                    $("input[name=username]").attr('placeholder', 'Name');
                }

                if (event.target.name != 'email' && !$("input[name=email]").val()) {
                    $("input[name=email]").attr('placeholder', 'Email');
                }

                if (event.target.name != 'phone' && !$("input[name=phone]").val()) {
                    $("input[name=phone]").attr('placeholder', 'Phone');
                }

                let isValid = true;
                $("input").each(function () {
                    if ($(this).val() == '') {
                        isValid = false;
                        return;
                    }
                });

                if (isValid) {
                    $.fn.setActiveNextButton();
                    $.fn.setActiveInvestButton();
                    $.fn.setActiveSellButton();
                } else {
                    $.fn.setDiableNextButton();
                    $.fn.setDiableInvestButton();
                    $.fn.setDiableSellButton();
                }
            }
        });

        $("input[name=phone]").on('input', function() {
            if (!$.isNumeric($(this).val())) {
                $(this).val('');
            }
        });
        // =========================================================================

        // ============================== toggle view handler ======================
        if ($("form").attr('action') != '/rent-step-14' && $("form").attr('action') != '/invest-step-10') {
            if ($("#toggleView").is(":checked")) {
                $("button.btn-outline-light").css('border-color', '#cccccc');
            } else {
                $("button.btn-outline-light").css('border-color', '#f8f9fa');
            }
        }
        $("#toggleView").change(function (e) {
            if ($("#toggleView").is(":checked")) {
                $("button.btn-outline-light").css('border-color', '#cccccc');
            } else {
                $("button.btn-outline-light").css('border-color', '#f8f9fa');
            }
        });
        // =========================================================================

        // =============================== Pop up for radio ===========================
        $(function() {
            $('.radiobtn').on("click", function () {
                $(this).addClass("popOut");
                setTimeout(RemoveClass, 300);
            });
                function RemoveClass() {
                $('.radiobtn').removeClass("popOut");
            }
        });
        // =============================================================================

        // =============================== AJAX handler =============================
        $("ul.menu li").click(function () {
            let index = $(this).index();

            switch (index) {
                case 0:
                    $categoryName = 'buy';
                    break;
                case 1:
                    $categoryName = 'sell';
                    break;
                case 2:
                    $categoryName = 'rent';
                    break;
                case 3:
                    $categoryName = 'invest';
                    break;
            }
        });

        $("#goSearch").click(function (e) {
            e.preventDefault();
            $(location).attr('href', '/' + $categoryName + '-step-1');
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('.toggleView input:checkbox').change(function(e) {
            e.preventDefault();

            let categoryName = '';

            if ($('div.heroSec').hasClass('invest')) {
                categoryName = 'Invest';
            } else if ($('div.heroSec').hasClass('rent')) {
                categoryName = 'Rent';
            } else if ($('div.heroSec').hasClass('sell')) {
                categoryName = 'Sell';
            } else if ($('div.heroSec').hasClass('buy')) {
                categoryName = 'Buy';
            }

            $.ajax({
                type: 'POST',
                url: '/toggleview' + categoryName + 'Changed',
                data: {
                    value: $(this).is(':checked'),
                },
                success: function (data) {
                    console.log(data);
                }
            });

            if($(this).is(":checked")) {
                $('div.heroSec').removeClass("aniView");
                $('div.heroSec').addClass("normalView");
            } else {
                $('div.heroSec').addClass("aniView");
                $('div.heroSec').removeClass("normalView");
            }
        });
    });
    // ============================================================================

    // ============================ define function to handle rent part ===========
    $.fn.setActiveNextButton = function () {
        $("div.rent button[type=submit]").removeClass("btn-warning");
        $("div.rent button[type=submit]").removeClass("btn-outline-light");
        $("div.rent button[type=submit]").addClass("btn-warning");
        $("div.rent button[type=submit]").css('border', 'none');
        $("div.rent button[type=submit]").attr("disabled", false);
    };

    $.fn.setDiableNextButton = function() {
        $("div.rent button[type=submit]").removeClass("btn-outline-light");
        $("div.rent button[type=submit]").removeClass("btn-warning");
        $("div.rent button[type=submit]").addClass("btn-outline-light");
        if ($("#toggleView").is(":checked")) {
            $("button.btn-outline-light").css('border', '1px solid #cccccc');
        } else {
            $("button.btn-outline-light").css('border', '1px solid #f8f9fa');
        }

        if ($("form").attr('action') == '/rent-step-14')
            $("button.btn-outline-light").css('border', '1px solid #cccccc');

        $("div.rent button[type=submit]").attr("disabled", true);
    };

    $.fn.setRightHouseWithBird = function () {
        $(".birdNestR").css("background", "url(/images/withHawkTreehouseR.png) no-repeat left center");
        $(".birdNestR").css("background-size", "contain");
        $(".birdNestR").css("height", "270px");
    };

    $.fn.setNextButtonLoading = function () {
        $("button[type=submit] span").css('display', 'none');
        $("button[type=submit] i").css('display', 'block');
    }

    $.fn.setActiveInvestButton = function() {
        $("div.invest button[type=submit]").removeClass("btn-success");
        $("div.invest button[type=submit]").removeClass("btn-outline-light");
        $("div.invest button[type=submit]").addClass("btn-success");
        $("div.invest button[type=submit]").css('border', '1px solid #3FF95A');
        $("div.invest button[type=submit]").attr("disabled", false);
    }

    $.fn.setDiableInvestButton = function() {
        $("div.invest button[type=submit]").removeClass("btn-outline-light");
        $("div.invest button[type=submit]").removeClass("btn-success");
        $("div.invest button[type=submit]").addClass("btn-outline-light");
        if ($("#toggleView").is(":checked")) {
            $("button.btn-outline-light").css('border', '1px solid #cccccc');
        } else {
            $("button.btn-outline-light").css('border', '1px solid #f8f9fa');
        }

        if ($("form").attr('action') == '/invest-step-10') {
            $("button.btn-outline-light").css('border', '1px solid #cccccc');
        }


        $("div.invest button[type=submit]").attr("disabled", true);
    }

    $.fn.setActiveSellButton = function() {
        $("div.sell button[type=submit]").removeClass("btn-danger");
        $("div.sell button[type=submit]").removeClass("btn-outline-light");
        $("div.sell button[type=submit]").addClass("btn-danger");
        $("div.sell button[type=submit]").css('border', '1px solid #e3342f');
        $("div.sell button[type=submit]").attr("disabled", false);
    }

    $.fn.setDiableSellButton = function() {
        $("div.sell button[type=submit]").removeClass("btn-outline-light");
        $("div.sell button[type=submit]").removeClass("btn-danger");
        $("div.sell button[type=submit]").addClass("btn-outline-light");
        if ($("#toggleView").is(":checked")) {
            $("button.btn-outline-light").css('border', '1px solid #cccccc');
        } else {
            $("button.btn-outline-light").css('border', '1px solid #f8f9fa');
        }

        if ($("form").attr('action') == '/sell-step-9') {
            $("button.btn-outline-light").css('border', '1px solid #cccccc');
        }

        $("div.sell button[type=submit]").attr("disabled", true);
    }

    $.fn.setActiveBuyButton = function() {
        $("div.buy button[type=submit]").removeClass("btn-info");
        $("div.buy button[type=submit]").removeClass("btn-outline-light");
        $("div.buy button[type=submit]").addClass("btn-info");
        $("div.buy button[type=submit]").css('border', '1px solid #6cb2eb');
        $("div.buy button[type=submit]").attr("disabled", false);
    }

    $.fn.setDiableBuyButton = function() {
        $("div.buy button[type=submit]").removeClass("btn-outline-light");
        $("div.buy button[type=submit]").removeClass("btn-info");
        $("div.buy button[type=submit]").addClass("btn-outline-light");
        if ($("#toggleView").is(":checked")) {
            $("button.btn-outline-light").css('border', '1px solid #cccccc');
        } else {
            $("button.btn-outline-light").css('border', '1px solid #f8f9fa');
        }

        if ($("form").attr('action') == '/invest-step-10') {
            $("button.btn-outline-light").css('border', '1px solid #cccccc');
        }

        $("div.buy button[type=submit]").attr("disabled", true);
    }
    // ============================================================================
})(jQuery);
