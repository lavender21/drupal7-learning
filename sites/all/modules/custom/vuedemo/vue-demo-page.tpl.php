<?php
/**
 * Created by IntelliJ IDEA.
 * User: rtning
 * Date: 26/09/2017
 * Time: 10:05 AM
 */
?>
<!--<div>-->
<!-- this is the demo-->
<!--</div>-->
  <link rel="shortcut icon" type="image/png" href="jasmine/jasmine_favicon.png">
  <link rel="stylesheet" type="text/css" href="jasmine/jasmine.css">

  <script type="text/javascript" src="jasmine/jasmine.js"></script>
  <script type="text/javascript" src="jasmine/jasmine-html.js"></script>
  <script type="text/javascript" src="jasmine/boot.js"></script>

  <!-- include source files here... -->

  <!-- include test files here... -->
  <script type="text/javascript" src="test/spec.js"></script>
<div id="demo">
  <script>console.log('this is the js in the html')</script>
  <input placeholder="enter..." v-model="phrase" id="phrase" >
  <button id="submit" @click="reverse">reverse</button>
  {{ phrase }}
  {{ length }}
</div>
