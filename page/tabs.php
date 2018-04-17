<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
    <link type="text/css" href="../css/tabs-2.css" rel="stylesheet" />   
    <script type="text/javascript" src="../js/jquery.tools.min.js"></script>

    <script type="text/javascript"> 
      $(document).ready(function(){
        	$("#flowtabs").tabs("#flowpanes > div");


	    });
	</script>
  </head>
    <body>
      <!-- tabs -->
      <ul id="flowtabs">
	       <li id="n"><a class="current" id="t1" href="#">Artikel</a></li>
	       <li id="n"><a class="" id="t2" href="#">Event</a></li>
	       <li id="n"><a class="" id="t4" href="#">Angota</a></li> 
      </ul>

      <!-- panes (content untuk masing-masing tab) -->
      <div id="flowpanes">
      	 <!-- hilangkan spasi antara tabs dan panes -->
	       <br clear="all">

	       <div style="display: block;">
		        <h2>The Player</h2>
		        <img src="images/screens.png" alt="Flying screens" style="margin: 0pt 30px 200px 0pt; float: left;">

		        <p style="font-weight: bold;">
            Consectetur adipiscing elit. Duis viverra, leo sit amet auctor
            fermentum, risus lorem posuere tortor, in accumsan purus magna imperdiet sem. </p>

        		<p> Suspendisse enim. Pellentesque facilisis aliquam
            enim. Maecenas facilisis molestie lectus. Sed ornare ultricies tortor.
            Vivamus nibh metus, faucibus quis, semper ut, dignissim id, diam. </p>

		        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Duis viverra, leo sit amet auctor fermentum, risus lorem posuere tortor, 
            in accumsan purus magna imperdiet sem. </p>

		       <br clear="all">
	       </div>

    	   <div style="display: none;">
            <h2>Plugins</h2>
            <img src="images/eye192.png" alt="Flying screens" style="margin: 0pt 30px 200px 0pt; float: left;">

		        <p> Suspendisse enim. Pellentesque facilisis aliquam enim. 
            Maecenas facilisis molestie lectus. Sed ornare ultricies tortor. 
            Vivamus nibh metus, faucibus quis, semper ut, dignissim id, diam. </p>

		        <p> Mauris ultricies. Nam feugiat egestas nulla. 
            Donec augue dui, molestie sed, tristique sit amet, blandit eu, turpis. 
            Mauris hendrerit, nisi et sodales tempor, orci tellus laoreet elit, 
            sed molestie dui quam vitae dui. </p>
            
		        <p> Pellentesque nisl. Ut adipiscing vehicula risus. Nam eget tortor. 
            Maecenas id augue. Vivamus interdum nulla ac dolor. Fusce metus. 
            Suspendisse eu purus. Maecenas quis lacus eget dui volutpat molestie. </p>

		        <br clear="all">
        </div>

	     <div style="display: none;">
		      <h2>Streaming</h2>

		      <p> Mauris ultricies. Nam feugiat egestas nulla. Donec augue dui, molestie sed, 
          tristique sit amet, blandit eu, turpis. Mauris hendrerit, nisi et
          sodales tempor, orci tellus laoreet elit, sed molestie dui quam vitae dui. </p>
          
		      <p> Pellentesque nisl. Ut adipiscing vehicula risus. Nam eget tortor. 
          Maecenas id augue. Vivamus interdum nulla ac dolor. Fusce metus. 
          Suspendisse eu purus. Maecenas quis lacus eget dui volutpat molestie. </p>

		      <img src="images/eye192.png" alt="Flying screens">
       </div>

	     <div style="display: none;">
         <h2>Scripting</h2>
         
         <p> Maecenas at odio. Nunc laoreet lectus vel ante. Nullam imperdiet. 
         Sed justo dolor, mattis eu, euismod sed, tempus a, nisl. 
         Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>

		     <p> In sed dolor. Etiam eget quam ac nibh pharetra adipiscing. Nullam vitae ligula. 
         Sed sit amet leo sit amet arcu mollis ultrices. Vivamus rhoncus sapien nec lorem. 
         In mattis nisi. Vivamus at enim. Integer semper imperdiet massa. Vestibulum nulla massa, 
         pretium quis, porta id, vestibulum vitae, velit. </p>
	     </div>	     
    </div>
  </body>
</html>
