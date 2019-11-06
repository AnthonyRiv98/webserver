<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="Stylesheet.css">

        <div>
            Hello <?php echo htmlspecialchars($_POST['fname']), " ", htmlspecialchars($_POST['lname']); ?>
        </div>

        <?php if ((int)($_POST['eth']) == 1 and (int)($_POST['usb3']) == 1 and (int)($_POST['pwr']) == 1): ?>
            you have a raspberry pi 4 model
        <?php if ((int)($_POST['eth']) == 0 and (int)($_POST['usb3']) == 0 and (int)($_POST['pwr']) == 0): ?>
            you have a raspberry pi 3 A+ model
        <?php if ((int)($_POST['eth']) == 1 and (int)($_POST['usb3']) == 0 and (int)($_POST['pwr']) == 0): ?>
            you have a raspberry pi 3 B+ model
        <?php endif; ?>

    </head>