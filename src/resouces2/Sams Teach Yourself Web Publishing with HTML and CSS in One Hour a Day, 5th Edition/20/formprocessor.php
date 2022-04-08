<?php
    $toys = array('digicam' => 'Digital Camera',
        'mp3' => 'MP3 Player', 'wlan' => 'Wireless LAN');

    $errors = array();

    if ($_SERVER['REQUEST_METHOD'] == 'POST'count($_POST)) {
        $errors = validate();
    }

    function validate() {
        $errors = array();

        if (empty($_POST['name'])) {
            $errors['name'] = 'You must enter your name.';
        }

        if (!is_numeric($_POST['age'])) {
            $errors['age'] = "You must enter a valid age.";
        }

        if (empty($_POST['toys'])) {
            $errors['toys'] = 'You must choose at least one toy.';
        }

        return $errors;
    }
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Registration Form</title>
<style type="text/css">
label.error {
    color: red;
}
</style>
</head>
<body>
<h1>Registration Form</h1>

<p>Please fill out the form below to register for our site. Fields
with bold labels are required.</p>

<?php if (!empty($errors)) { ?>
    <ul>
        <?php foreach (array_values($errors) as $error) { ?>
            <li><?= $error ?></li>
        <?php } ?>
    </ul>
<?php } ?>

<form method="post" action="<?= $_SERVER['PHP_SELF'] ?>">

<p>
<?php if (array_key_exists('name', $errors)) { ?>
    <label for="name" class="error"><b>Name:</b></label>
<?php } else { ?>
    <label for="name"><b>Name:</b></label>
<?php } ?>
<br />
<input name="name" value="<?= strip_tags($_POST['name']) ?>" /></p>

<p>
<?php if (array_key_exists('age', $errors)) { ?>
    <label for="age" class="error"><b>Age:</b></label>
<?php } else { ?>
    <label for="age"><b>Age:</b></label>
<?php } ?>
<br />
<input name="age" value="<?= strip_tags($_POST['age']) ?>"/></p>

<p>
<?php if (array_key_exists('toys', $errors)) { ?>
    <label for="toys[]" class="error"><b>Toys:</b></label>
<?php } else { ?>
    <label for="toys[]"><b>Toys:</b></label>
<?php } ?>
<br />
<?php foreach ($toys as $key => $value) { ?>
    <input type="checkbox" name="toys[]"
    <?php if (in_array($key, $_POST['toys'])) { echo 'checked="checked" '; } ?>
    value="<?= $key ?>" /> <?= $value?><br />
<?php } ?>
</p>

<p><input type="submit" value="register" /></p>
</form>
</body>
</html>
