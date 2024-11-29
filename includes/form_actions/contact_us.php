<?php

add_action('admin_post_nopriv_contact_us', 'contact_us');
add_action('admin_post_contact_us', 'contact_us');

function contact_us() {

    if (!isset($_POST['contact_us_nonce'])) {
        return;
    }

    if (!wp_verify_nonce($_POST['contact_us_nonce'], 'contact_us_nonce')) {
        return;
    }

    if (empty($_POST['firstname']) or empty($_POST['email_address']) or empty($_POST['message'])) {
        $notification_message = urlencode('Firstname, email address and message are required.');
        wp_safe_redirect(get_site_url() .'/appointment?notification='. $notification_message);
        exit;
    }

    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $email_address = htmlspecialchars($_POST['email_address']);
    $contact_number = htmlspecialchars($_POST['contact_number']);
    $message = htmlspecialchars($_POST['message']);

    $to = get_option('admin_email');
    $subject = 'Inquiry';
    $headers = array(
        'Content-Type: text/html; charset=UTF-8',
        'From: '. get_site_url() .' <'. get_option('admin_email') .'>'
    );
    $message = '<body id="iiq2" style="box-sizing: border-box; margin: 0;">
        <table id="ii4m" style="box-sizing: border-box; margin: 0px auto 0px auto; padding: 12px 12px 12px 12px; width: 480px; max-width: 100%;" width="480">
            <tbody style="box-sizing: border-box;">
            <tr id="il5hf" style="box-sizing: border-box;">
                <td id="istgs" style="box-sizing: border-box; font-size: 12px; font-weight: 300; vertical-align: top; color: rgb(111, 119, 125); margin: 0; padding: 0; text-align: left;" valign="top" align="left">
                <div id="i4m8t" style="box-sizing: border-box; padding: 10px; font-family: Helvetica, sans-serif; text-align: left; color: #2a2a2a; font-size: 24px; font-weight: 700;">
                    You have a message
                </div>
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
                            '. $firstname .' '. $lastname .'
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
                            '. $email_address .'
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
                            '. $contact_number .'
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
                            '. $message .'
                        </div>
                        </td>
                    </tr>
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

    wp_safe_redirect(get_site_url(null, '/contact-us?notification='. $notification_message));
    exit;
}