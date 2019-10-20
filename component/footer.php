<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="js/jquery-3.4.1.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
<script type="text/javascript" src="js/lightpick.js"></script>
<script>
var picker = new Lightpick({
    field: document.getElementById('daterange'),
    singleDate: false,
    numberOfColumns: 3,
    numberOfMonths: 2,
    inline: true,
    onSelect: function(start, end){
        var str = '';
        var cek = moment(end).add(1, 'days').startOf('day').from(start);
        str += start ? start.format('Do MMMM YYYY') + ' to ' : '';
        str += end ? end.format('Do MMMM YYYY') : '...';
        document.getElementById('daterange').innerHTML = str;
        document.getElementById('durationform').value = cek;
    }
});
</script>
<script type="text/javascript">
$(document).ready(function(){
$('.datepicker').datepicker();
});

$(document).ready(function(){
   $('#traveler').modal();
 });

 $(document).ready(function(){
    $('#duration').modal();
  });

  $(document).ready(function(){
     $('#destination').modal();
   });

   $(document).ready(function(){
    $('input.autocomplete').autocomplete({
      data: {
        "Bromo Mountain": null,
        "Madakaripura Waterfall": null,
        "Ranu Agung": null,
        "Pekalen River Rafting": null,
        "Gili ketapang island": null
      },
    });
  });

$(document).ready(function(){
  $(window).scroll(function(){
  	var scroll = $(window).scrollTop();
	  if (scroll > 100) {
	    $(".nav").css("background" , "#01579b");
	  }

	  else{
		  $(".nav").css("background" , "transparent");
	  }
  })
})
</script>
</body>
</html>
