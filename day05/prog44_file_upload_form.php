<html>
<head>
	<title>File uplaod form</title>
</head>
<body>
	<h3>File Upload Form</h3>
		<!-- The data encoding type, enctype, MUST be specified as below -->
<form enctype="multipart/form-data" action="file_upload_process.php" method="POST">
    <table name="file_upload">
		<tr>
			<td>Select file: </td>
			<td><!-- Name of input element determines name in $_FILES array -->
				<input name="userfile" type="file" />
			</td>
		</tr>
		<tr>
			<td>
			</td>
			<td>
				<input type="submit" value="Send File" />
			</td>
		</tr>
	</table>
</form>

</body>

</html>