<html>
  <head>
    <title>Display Messages</title>
    <meta http-equiv="refresh" content="1;url=display.php">
  </head>
  <body>
    {foreach from=$speaks item=speak}
      {$speak.nick}: {$speak.words}<br/>
    {/foreach}
  </body>
</html>
