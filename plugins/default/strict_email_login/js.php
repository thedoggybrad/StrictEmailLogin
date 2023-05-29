<script>
	$(document).ready(function(){
			var label = Ossn.Print('email');	
			var container = $('input[name="username"]').parent();
			container.find('label').html(label);
	});
</script>