
//--------------------------------------------------check one by one on blur--------------------------------------------------
jQuery(document).ready(function () {

    jQuery("#txtFullName").blur(function () {
        validateEmpty("txtFullName", "spanFullName");

    });

    jQuery("#txtEmail").blur(function () {
        ValidateEmail("txtEmail", "spanEmail");
    });

    jQuery("#txtPackage").blur(function () {
        validateEmpty("txtPackage", "spanPackage");
    });

    jQuery("#txtNoOfTravelers").blur(function () {
        validateEmpty("txtNoOfTravelers", "spanNoOfTravelers");
    });

    jQuery("#txtNoOfNight").blur(function () {
        validateEmpty("txtNoOfNight", "spanNoOfNight");
    });

    jQuery("#txtStartOn").blur(function () {
        validateEmpty("txtStartOn", "spanStartOn");
    });
    jQuery("#txtNoOfRooms").blur(function () {
        validateEmpty("txtNoOfRooms", "spanNoOfRooms");
    });
    jQuery("#txtAccommodation").blur(function () {
        validateEmpty("txtAccommodation", "spanAccommodation");
    });
    jQuery("#txtDetails").blur(function () {
        validateEmpty("txtDetails", "spantDetails");
    });
    jQuery("#captchacode").blur(function () {
        validateEmpty("captchacode", "capspan");
    });


    jQuery("#btnSubmit").bind('click', function () {

        if (!validate()) {
            return;

        }

        jQuery("#checking").show();
        sendForm();
    });

    jQuery('.input-validater').keypress(function (e) {
        if (e.keyCode == 13) {

            if (!validate()) {
                return;
            }
            jQuery("#checking").show();
            sendForm();
        }
    });

});


//--------------------------------------------------function to check button click --------------------------------------------------

function validate() {

    if (
            validateEmpty("txtFullName", "spanFullName") &
            ValidateEmail("txtEmail", "spanEmail") &
            validateEmpty("txtPackage", "spanPackage") &
            validateEmpty("txtNoOfTravelers", "spanNoOfTravelers") &
            validateEmpty("txtNoOfNight", "spanNoOfNight") &
            validateEmpty("txtStartOn", "spanStartOn") &
            validateEmpty("txtNoOfRooms", "spanNoOfRooms") &
            validateEmpty("txtAccommodation", "spanAccommodation") &
            validateEmpty("captchacode", "capspan")

            )
    {
        return true;
    } else {
        return false;
    }
}



//--------------------------------------------------Ajax call --------------------------------------------------


function sendForm() {

    jQuery.ajax({
        url: "booking-form/send-email.php",
        cache: false,
        dataType: "json",
        type: "POST",
        data: {
            full_name: jQuery('#txtFullName').val(),
            email: jQuery('#txtEmail').val(),
            package: jQuery('#txtPackage').val(),
            no_of_travelers: jQuery('#txtNoOfTravelers').val(),
            no_of_night: jQuery('#txtNoOfNight').val(),
            start_on: jQuery('#txtStartOn').val(),
            no_of_rooms: jQuery('#txtNoOfRooms').val(),
            accommodation: jQuery('#txtAccommodation').val(),
            captchacode: jQuery('#captchacode').val()

        },
        success: function (html) {

            var status = html.status;
            var msg = html.msg;

            if (status == "incorrect") {

                jQuery("#capspan").addClass("notvalidated");
                jQuery("#capspan").html(msg);
                jQuery("#capspan").show();
                jQuery("#checking").fadeOut(2000);

            } else if (status == "correct") {
                jQuery("#checking").hide();
                jQuery("#dismessage").html(msg).delay(1000).show(1000);

                jQuery('#txtFullName').val("");
                jQuery('#txtEmail').val("");
                jQuery('#txtPackage').val("");
                jQuery('#txtNoOfTravelers').val("");
                jQuery('#txtNoOfNight').val("");
                jQuery('#txtStartOn').val("");
                jQuery('#txtNoOfRooms').val("");
                jQuery('#txtAccommodation').val("");
                jQuery('#txtDetails').val("");
                jQuery('#captchacode').val("");

            }
        }
    });
}

//-----------------   function to check empty -------------------------------------------------------

function validateEmpty(field, validatorspan)
{

    if (jQuery('#' + field).val().length != 0)
    {
        jQuery('#' + validatorspan).addClass("validated");
        jQuery('#' + validatorspan).removeClass("notvalidated");
        jQuery('#' + validatorspan).fadeIn('slow').fadeOut(3000);
        jQuery('#' + validatorspan).text("");

        return true;
    } else
    {
        jQuery('#' + validatorspan).addClass("notvalidated");
        jQuery('#' + validatorspan).removeClass("validated");
        jQuery('#' + validatorspan).fadeIn('slow').fadeOut(3000);
        jQuery('#' + validatorspan).text("This field can not be empty");

        return false;
    }
}

//--------------------------------------------------function to check email--------------------------------------------------

function ValidateEmail(field, validatordiv)
{
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (jQuery('#' + field).val().match(mailformat))
    {
        jQuery('#' + validatordiv).addClass("validated");
        jQuery('#' + validatordiv).removeClass("notvalidated");
        jQuery('#' + validatordiv).fadeIn('slow').fadeOut(3000);
        jQuery('#' + validatordiv).text("");
        return true;
    } else
    {
        jQuery('#' + validatordiv).addClass("notvalidated");
        jQuery('#' + validatordiv).removeClass("validated");
        jQuery('#' + validatordiv).fadeIn('slow').fadeOut(3000);
        jQuery('#' + validatordiv).text("You have entered an invalid Email Address");
        return false;
    }
}
