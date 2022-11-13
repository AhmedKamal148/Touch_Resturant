$(document).ready(function () {
    //#browseImage Is File Input
    $('#browseImage').on('change', function ($e) {
        /*
            The FileReader object lets web applications asynchronously read the contents of files
            stored on the user's computer, using File or Blob objects to specify the file or data to read.
         */
        const fileReader = new FileReader();

        // SelectedFile is  The File Will Upload

        const selectedFile = $e.target.files[0];

        if (selectedFile) {
            fileReader.readAsDataURL(selectedFile)
        } else {
            $('.image_container img').attr('src', 'assetsAdmin/images/meals/default.jpg');
        }
        fileReader.addEventListener('load', () => {
            $('.image_container img').attr('src', fileReader.result);

        })
    });
});