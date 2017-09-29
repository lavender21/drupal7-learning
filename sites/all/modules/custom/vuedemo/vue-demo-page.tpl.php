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
<div id="demo">
  <script>console.log('this is the js in the html')</script>
  <input placeholder="enter..." v-model="phrase" id="phrase" >
  <button id="submit" @click="reverse">reverse</button>
  {{ phrase }}
  {{ length }}
</div>
