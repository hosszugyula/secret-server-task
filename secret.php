<!DOCTYPE html>
<html>
	<head>
		<title>Secret Server Task</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="style.css"/>
	</head>
	<body>
        <form action="api/add_secret.php" method="post" enctype="application/x-www-form-urlencoded" class="add-secret-form">
            <ul>
                <li>
                    <label for="secret">Secret</label>
                    <input type="text" name="secret" required>
                    <span>Enter your secret here</span>
                </li>
                <li>
                    <label for="expireAfterViews">Expire After Views</label>
                    <input type="number" step="1" min="1" pattern="\d+" name="expireAfterViews" required>
                    <span>After how many views should be the secret unavailable? It must be greater than 0.</span>
                </li>
                <li>
                    <label for="expireAfter">Expire After</label>
                    <input type="number" step="1" min="0" pattern="\d+" name="expireAfter" required>
                    <span>YAfter how many minutes should be the secret unavailable? 0 means never expires.</span>
                </li>
                <li>
                    <input type="submit" value="Save Your Secret" >
                </li>
            </ul>
        </form>
	</body>
</html>