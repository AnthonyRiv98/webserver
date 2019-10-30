<!DOCTYPE html>
<html>
    <head>
        <div>
            Hello <?php echo htmlspecialchars($_POST['fname']), htmlspecialchars($_POST['lname']); ?>
        </div>

        <?php if ((int)($_POST['eth']) && (int)($_POST['usb3']) && (int)($_POST['pwr'])): ?>
            you have a raspberry pi 4 B+ model
        <?php endif; ?>

    </head>