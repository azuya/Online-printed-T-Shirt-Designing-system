<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cannot go back</title>

    <script type="text/javascript">
            function noBack()
             {
                 window.history.forward()
             }
            noBack();
            window.onload = noBack;
            window.onpageshow = function(evt) { if (evt.persisted) noBack() }
            window.onunload = function() { void (0) }
        </script>

  </head>
  <body>

  </body>
</html>
