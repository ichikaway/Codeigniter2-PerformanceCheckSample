<html>
<head>
<title>My Blog</title>
</head>
<body>
 <h1><?php echo $query[0]->name ?></h1>
 <p><small>Created: <?php echo $query[0]->created ?></small></p>
 <p><small>Updated: <?php echo $query[0]->modified?></small></p>
 <p><?php echo nl2br($query[0]->text); ?></p>

</body>
</html>