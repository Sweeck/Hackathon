<?php

$paginaData->addCSS('css/upload-form.css');

return "
<body>
	<div id='FTS1'>
		<div id='FTS2'>
			<h1>Nieuwe JPG afbeeldingen opladen</h1>
			<form method='post' action='index.php?pagina=opladen'
				enctype='multipart/form-data' >
				<label>JPG afbeelding vinden om op te laden</label><br>
				<input type='file' name='image-data' accept='image/jpeg' id='B_img'/><br>
				<INPUT TYPE = 'Text' placeholder ='link' NAME = 'TBN_link' id='TB_link'>
				<INPUT TYPE = 'Text' placeholder ='name' NAME = 'TBN2_link' id='TB_link'>
				<input type='submit' value='upload' name='new-image' />
			</form>
		</div>
	</div>
</body>";
