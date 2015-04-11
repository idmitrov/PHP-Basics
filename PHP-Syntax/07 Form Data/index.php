<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Get Form Data</title>
    <link rel="stylesheet" href="./styles/formStyles.css"/>
</head>
<body>
    <form action="#" method="post">
        <input type="text" name="first-name" placeholder="Name..." required="required"/>
        <input type="text" name="age" placeholder="Age..." required="required"/>

        <div>
            <input type="radio" id="gender-male" name="gender" value="male" checked="checked"/>
            <label for="gender-male">Male</label>
        </div>
        <div>
            <input type="radio" id="gender-female" name="gender" value="female"/>
            <label for="gender-female">Female</label>
        </div>
        <button>Submit</button>
        <?php include 'GetFormData.php'; ?>
    </form>
</body>
</html>