<?php
include_once '../../config.php';
$formData = $_POST;
$succRes = array();
$errors = array();
$succRes['succ'] = false;
$processingError = "Error while processing.";
try {
    // form data
    if (empty($formData)) {
        throw new Exception($processingError);
    }
    // do validate
//    if (!isset($formData['gridCheck']) || (isset($formData['gridCheck']) && $formData['gridCheck'] == "")) {
//        $errors[] = "Accept terms and condition field is required.";
//    }

    if (!isset($formData['name']) || (isset($formData['name']) && $formData['name'] == "")) {
        $errors[] = "Name field is required.";
    }
    //msg_subject
    if (!isset($formData['msg_subject']) || (isset($formData['msg_subject']) && $formData['msg_subject'] == "")) {
        $errors[] = "Subject field is required.";
    }

    // email
    if (!isset($formData['email']) || (isset($formData['email']) && $formData['email'] == "")) {
        $errors[] = "Email field is required.";
    } else {
        if (!filter_var($formData['email'], FILTER_VALIDATE_EMAIL)) {
            $errors[] = "{$formData['email']} is not a valid email address";
        }
    }

    //phone number
    if (!isset($formData['phone_number']) || (isset($formData['phone_number']) && $formData['phone_number'] == "")) {
        $errors[] = "Phone number field is required.";
        throw new Exception($processingError);
    }

    // if errors
    if (!empty($errors)) {
        throw new Exception($processingError);
    }

    ob_start();
    ?>
    <tr>
        <td>Name</td>
        <td><?php echo @$formData['name'] ?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><?php echo @$formData['email'] ?></td>
    </tr>
    <tr>
        <td>Phone</td>
        <td><?php echo @$formData['phone_number'] ?></td>
    </tr>
    <tr>
        <td>Subject</td>
        <td><?php echo @$formData['msg_subject'] ?></td>
    </tr>
    <tr>
        <td>Message</td>
        <td><?php echo @$formData['message'] ?></td>
    </tr>
    <?php
    $mailHtml = ob_get_clean();

    $mailBody = "";
    $mailBody .= "<h2>Hey Admin, New Enquiry from {$formData['name']}</h2>";
    $mailBody .= $mailHtml;
    $from = $formData['email'];
    $headersFrom = '';
    $headersFrom .= 'MIME-Version: 1.0' . "\r\n";
    $headersFrom .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headersFrom .= 'From: ' . $from . ' ' . "\r\n";
    mail(mk_get_admin_mail(), "New enquiry from website", $mailBody, $headersFrom);

    $succRes['succ'] = true;
    $succRes['msg'] = "Thanks for your enquiry. One of our team member will reach to you soon.";
    echo json_encode($succRes);
    die();
} catch (Exception $exception) {
    $succRes['msg'] = $exception->getMessage();
    $succRes['errors'] = $errors;
    $succRes['error_string'] = implode(',', $errors);
    echo json_encode($succRes);
    die();
}