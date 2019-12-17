
<title>File uploads</title>
<style>
  * {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
        "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji",
        "Segoe UI Emoji", "Segoe UI Symbol";
  }
</style>

<form action="process" enctype="multipart/form-data" method="post">
	@csrf

    <input id="upload" name="photos" type="file" value="Input" webkitdirectory directory multiple>
    <input type="submit" value="submit">
</form>