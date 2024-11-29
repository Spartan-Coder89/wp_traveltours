<?php

add_action('admin_post_nopriv_appointment', 'set_appointment');
add_action('admin_post_appointment', 'set_appointment');

function set_appointment() {

    if (!isset($_POST['appointment_nonce'])) {
        return;
    }

    if (!wp_verify_nonce($_POST['appointment_nonce'], 'appointment_nonce')) {
        return;
    }

    if (empty($_POST['meeting_date']) or empty($_POST['meeting_time']) or empty($_POST['interested_trips_ids'])) {
        $notification_message = urlencode('Meeting date, meeting time and interested trips are required.');
        wp_safe_redirect(get_site_url() .'/appointment?notification='. $notification_message);
        exit;
    }

    $meeting_date = htmlspecialchars($_POST['meeting_date']);
    $meeting_time = htmlspecialchars($_POST['meeting_time']);
    $interested_trips_ids = json_decode(strip_tags(stripslashes($_POST['interested_trips_ids'])), true);
    $sender_firstname = htmlspecialchars($_POST['sender_firstname']);
    $sender_lastname = htmlspecialchars($_POST['sender_lastname']);
    $sender_email = htmlspecialchars($_POST['sender_email']);
    $sender_contact_number = htmlspecialchars($_POST['sender_contact_number']);
    $sender_message = htmlspecialchars($_POST['sender_message']);
    
    $interested_trips = '';
    foreach ($interested_trips_ids as $key => $trip) {

        $interested_trips .= '<tr style="box-sizing: border-box;">
            <td id="i48rh" style="box-sizing: border-box; font-size: 12px; font-weight: 300; vertical-align: top; color: rgb(111, 119, 125); margin: 0; padding: 0; width: 50%;" width="50%" valign="top">                                
                <table class="list-item" id="ix8fu" style="box-sizing: border-box; height: auto; width: 100%; margin-top: 0px; margin-right: auto; margin-bottom: 10px; margin-left: auto; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; padding-left: 5px;" width="100%">
                    <tbody style="box-sizing: border-box;">
                        <tr style="box-sizing: border-box;">
                            <td class="list-item-cell" style="box-sizing: border-box; background-color: rgb(255, 255, 255); border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; overflow-x: hidden; overflow-y: hidden; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px;" bgcolor="rgb(255, 255, 255)">
                                <table class="list-item-content" style="box-sizing: border-box; border-collapse: collapse; margin-top: 0px; margin-right: auto; margin-bottom: 0px; margin-left: auto; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; padding-left: 5px; height: 150px; width: 100%;" width="100%" height="150">
                                    <tbody style="box-sizing: border-box;">
                                        <tr class="list-item-row" style="box-sizing: border-box;">
                                            <td class="list-cell-left" style="box-sizing: border-box; width: 30%; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px;" width="30%">
                                                <img src="'. $trip['value']['thumbnail'] .'" alt="Image" class="list-item-image" id="ieb3r" style="box-sizing: border-box; color: rgb(217, 131, 166); font-size: 45px; width: 100%;">
                                            </td>
                                            <td class="list-cell-right" style="box-sizing: border-box; width: 70%; color: rgb(111, 119, 125); font-size: 13px; line-height: 20px; padding-top: 10px; padding-right: 20px; padding-bottom: 0px; padding-left: 20px;" width="70%">
                                                <h1 class="card-title" id="i4r0b" style="box-sizing: border-box; font-size: 25px; font-weight: 300; color: rgb(68, 68, 68);">
                                                    '. $trip['value']['id'] .' - '. $trip['text'] .'
                                                </h1>
                                                <p class="card-text" id="i9d1j" style="box-sizing: border-box;">
                                                    '. get_the_excerpt($trip['value']['id']) .'
                                                </p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>';
    }

    $to = get_option('admin_email');
    $subject = 'Appointment';
    $headers = array(
        'Content-Type: text/html; charset=UTF-8',
        'From: '. get_site_url() .' <'. get_option('admin_email') .'>'
    );
    $message = '
        <body id="iiq2" style="box-sizing: border-box; margin: 0;">
            <table id="ii4m" style="box-sizing: border-box; margin: 0px auto 0px auto; padding: 12px 12px 12px 12px; width: 480px; max-width: 100%;" width="480">
                <tbody style="box-sizing: border-box;">
                <tr id="il5hf" style="box-sizing: border-box;">
                    <td id="istgs" style="box-sizing: border-box; font-size: 12px; font-weight: 300; vertical-align: top; color: rgb(111, 119, 125); margin: 0; padding: 0; text-align: left;" valign="top" align="left">
                    <div id="i4m8t" style="box-sizing: border-box; padding: 10px; font-family: Helvetica, sans-serif; text-align: left; color: #2a2a2a; font-size: 24px; font-weight: 700;">
                        You have an appointment
                    </div>
                    <table id="i8gqf" style="box-sizing: border-box; margin: 0px auto 0 auto; padding: 5px 5px 5px 5px; width: 100%;" width="100%">
                        <tbody id="iexoj" style="box-sizing: border-box;">
                        <tr id="isurv" style="box-sizing: border-box;">
                            <td id="ijlrs" style="box-sizing: border-box; font-size: 12px; font-weight: 300; vertical-align: top; color: rgb(111, 119, 125); margin: 0; padding: 0; width: 50%;" width="50%" valign="top">
                                <div id="ii27g" style="box-sizing: border-box; padding: 10px; font-family: Helvetica, sans-serif; font-weight: 600; font-size: 16px; color: #2a2a2a;">
                                    Meeting Date:
                                </div>
                            </td>
                            <td id="i42ki" style="box-sizing: border-box; font-size: 12px; font-weight: 300; vertical-align: top; color: rgb(111, 119, 125); margin: 0; padding: 0; width: 50%;" width="50%" valign="top">
                                <div id="ikuaw" style="box-sizing: border-box; padding: 10px; font-size: 16px; font-family: Helvetica, sans-serif; color: #2a2a2a;">
                                    11-18-2024
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <table id="i5bpf" style="box-sizing: border-box; margin: 0px auto 0 auto; padding: 5px 5px 5px 5px; width: 100%;" width="100%">
                        <tbody id="ipxox" style="box-sizing: border-box;">
                        <tr id="iamyd" style="box-sizing: border-box;">
                            <td id="i78hk" style="box-sizing: border-box; font-size: 12px; font-weight: 300; vertical-align: top; color: rgb(111, 119, 125); margin: 0; padding: 0; width: 50%;" width="50%" valign="top">
                                <div id="i85qz" style="box-sizing: border-box; padding: 10px; font-family: Helvetica, sans-serif; font-weight: 600; font-size: 16px; color: #2a2a2a;">
                                    Meeting Time:
                                </div>
                            </td>
                            <td id="ixr62" style="box-sizing: border-box; font-size: 12px; font-weight: 300; vertical-align: top; color: rgb(111, 119, 125); margin: 0; padding: 0; width: 50%;" width="50%" valign="top">
                                <div id="i2eii" style="box-sizing: border-box; padding: 10px; font-size: 16px; font-family: Helvetica, sans-serif; color: #2a2a2a;">
                                    10:00 AM - 11:00 AM
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <table id="ip8av" style="box-sizing: border-box; margin: 0px auto 0 auto; padding: 5px 5px 5px 5px; width: 100%;" width="100%">
                        <tbody id="is4zr" style="box-sizing: border-box;">
                        <tr id="ilzjj" style="box-sizing: border-box;">
                            <td id="ioxke" style="box-sizing: border-box; font-size: 12px; font-weight: 300; vertical-align: top; color: rgb(111, 119, 125); margin: 0; padding: 0; width: 50%;" width="50%" valign="top">
                                <div id="ipzwr" style="box-sizing: border-box; padding: 10px; font-family: Helvetica, sans-serif; font-weight: 600; font-size: 16px; color: #2a2a2a;">
                                    Sender name:
                                </div>
                            </td>
                            <td id="ii4ko" style="box-sizing: border-box; font-size: 12px; font-weight: 300; vertical-align: top; color: rgb(111, 119, 125); margin: 0; padding: 0; width: 50%;" width="50%" valign="top">
                                <div id="iquny" style="box-sizing: border-box; padding: 10px; font-size: 16px; font-family: Helvetica, sans-serif; color: #2a2a2a;">
                                    John Smith
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <table id="ixmjw" style="box-sizing: border-box; margin: 0px auto 0 auto; padding: 5px 5px 5px 5px; width: 100%;" width="100%">
                        <tbody id="idg3f" style="box-sizing: border-box;">
                        <tr id="i7c2f" style="box-sizing: border-box;">
                            <td id="i8liz" style="box-sizing: border-box; font-size: 12px; font-weight: 300; vertical-align: top; color: rgb(111, 119, 125); margin: 0; padding: 0; width: 50%;" width="50%" valign="top">
                                <div id="i3qjh" style="box-sizing: border-box; padding: 10px; font-family: Helvetica, sans-serif; font-weight: 600; font-size: 16px; color: #2a2a2a;">
                                    Sender email:
                                </div>
                            </td>
                            <td id="i0ork" style="box-sizing: border-box; font-size: 12px; font-weight: 300; vertical-align: top; color: rgb(111, 119, 125); margin: 0; padding: 0; width: 50%;" width="50%" valign="top">
                                <div id="iwmag" style="box-sizing: border-box; padding: 10px; font-size: 16px; font-family: Helvetica, sans-serif; color: #2a2a2a;">
                                    jsmith@gmail.com
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <table id="ixdbf" style="box-sizing: border-box; margin: 0px auto 0 auto; padding: 5px 5px 5px 5px; width: 100%;" width="100%">
                        <tbody id="ihv55" style="box-sizing: border-box;">
                        <tr id="izacl" style="box-sizing: border-box;">
                            <td id="ijana" style="box-sizing: border-box; font-size: 12px; font-weight: 300; vertical-align: top; color: rgb(111, 119, 125); margin: 0; padding: 0; width: 50%;" width="50%" valign="top">
                                <div id="i0a23" style="box-sizing: border-box; padding: 10px; font-family: Helvetica, sans-serif; font-weight: 600; font-size: 16px; color: #2a2a2a;">
                                    Sender contact:
                                </div>
                            </td>
                            <td id="iitzl" style="box-sizing: border-box; font-size: 12px; font-weight: 300; vertical-align: top; color: rgb(111, 119, 125); margin: 0; padding: 0; width: 50%;" width="50%" valign="top">
                                <div id="ibqtr" style="box-sizing: border-box; padding: 10px; font-size: 16px; font-family: Helvetica, sans-serif; color: #2a2a2a;">
                                    09123456789
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <table id="ihofkk" style="box-sizing: border-box; margin: 0px auto 0 auto; padding: 5px 5px 5px 5px; width: 100%;" width="100%">
                        <tbody id="it9wt3" style="box-sizing: border-box;">
                        <tr id="i4tevj" style="box-sizing: border-box;">
                            <td id="ijiwg" style="box-sizing: border-box; font-size: 12px; font-weight: 300; vertical-align: top; color: rgb(111, 119, 125); margin: 0; padding: 0; width: 50%;" width="50%" valign="top">
                                <div id="iz5mf" style="box-sizing: border-box; padding: 10px; font-family: Helvetica, sans-serif; font-weight: 600; font-size: 16px; color: #2a2a2a;">
                                    Sender message:
                                </div>
                            </td>
                        </tr>
                        <tr id="i8b3ig" style="box-sizing: border-box;">
                            <td id="ilfq8r" style="box-sizing: border-box; font-size: 12px; font-weight: 300; vertical-align: top; color: rgb(111, 119, 125); margin: 0; padding: 0; width: 50%;" width="50%" valign="top">
                                <div id="iebkg5" style="box-sizing: border-box; padding: 10px; font-size: 16px; font-family: Helvetica, sans-serif; color: #2a2a2a;">
                                    Lorem ipsum dolor sit amit consectetuer
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <table id="icd2m" style="box-sizing: border-box; margin: 0px auto 0 auto; padding: 5px 5px 5px 5px; width: 100%;" width="100%">
                        <tbody style="box-sizing: border-box;">
                            <tr style="box-sizing: border-box;">
                                <td id="iymvy" style="box-sizing: border-box; font-size: 12px; font-weight: 300; vertical-align: top; color: rgb(111, 119, 125); margin: 0; padding: 0; width: 50%;" width="50%" valign="top">
                                <div id="i13pq" style="box-sizing: border-box; padding: 10px; font-family: Helvetica, sans-serif; font-weight: 600; font-size: 16px; color: #2a2a2a;">
                                    Interested Trips:
                                </div>
                                </td>
                            </tr>

                            '. $interested_trips .'
                        </tbody>
                    </table>
                    </td>
                </tr>
                </tbody>
            </table>
            </body>';

    if (wp_mail($to, $subject, $message, $headers)) {
        $notification_message = 'Your message has been sent successfully. You will hear from us as soon as possible.';
    } else {
        $notification_message = 'Message sending failed. Please contact us at '. get_option('admin_email') .' if you encounter this message.';
    }

    wp_safe_redirect(get_site_url(null, '/appointment?notification='. $notification_message));
    exit;
}

?>