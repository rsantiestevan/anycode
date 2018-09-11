<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title></title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href="resources/css/style.css">
  <script src="resources/scripts/jquery.js"></script>
  <script src="resources/scripts/scripts.js"></script>
</head>

<body>
  <a href="/contact" id="contact">Contact Us</a>
  
  <div class="dialog pop">
    <div class="dialog-title">Title example...</div>
    <form method="post" id="new_message" action="/messages">
    <div class="dialog-content">
        <label for="email">Your email or name</label><input type="text" size="30" name="email" id="email" />
        <br />
        <label for="body">Message</label>
        <br />
        <textarea rows="6" name="body" id="body" cols="35"></textarea>
    </div>
    <div class="dialog-actions">
      <input type="submit" value="Send Message" name="commit" id="message_submit"/> or <a class="close" href="/">Cancel</a>
    </div>
    </form>      
  </div>  
</body>
</html>
