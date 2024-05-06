<!DOCTYPE html>
<html>
<head>
  <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
  <meta charset="utf-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css">
  <link href="style.css" rel="stylesheet" type="text/css" />
  <script src="script.js"></script>
</head>
<body>
	<div id="head">
  	<h3 id="title" class="alert alert-primary">
  		Web Speech
  	</h3>
  </div>
	<div id="content" class="m-4">
    <div>
  	<select
      id="voice"
      style='height:36px;'></select>
    <input
      type="button"
      id="speech_button"
      value="実行" class="btn btn-primary">
    </div>
  	<textarea id="target_text" style='width:400px;height:200px;'>日本語をコンピュータに
喋らせています</textarea>
    </div>

</body>
</html>