<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>File uploads</title>
<style>
  * {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
        "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji",
        "Segoe UI Emoji", "Segoe UI Symbol";
  }
</style>

<form action="/process" enctype="multipart/form-data" method="POST">
    <p>
        <label for="photo">
            <input type="file" name="photos[]" id="photo" multiple>
        </label>
    </p>
    <button>Upload</button>
    {{ csrf_field() }}
</form>