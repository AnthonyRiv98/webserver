<!DOCTYPE html>
<html>
    <head>
        <div>
            Hello <?php echo htmlspecialchars($_POST['fname']), " ", htmlspecialchars($_POST['lname']); ?>
        </div>
        <?php echo  (int)($_POST['eth']), (int)($_POST['usb3']), (int)($_POST['pwr']); ?>
        <?php if ((int)($_POST['eth']) == 1 and (int)($_POST['usb3']) == 1 and (int)($_POST['pwr']) == 1): ?>
            you have a raspberry pi 4 B+ model
        <?php endif; ?>

    </head>