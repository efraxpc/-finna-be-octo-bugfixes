<div class="row" >
    <div class="col-md-12" >
        <div id="dropzone" class="dropzone"></div>
    </div>
</div>
        <script type="text/javascript">
            $(document).ready(function()
                              {
                Dropzone.autoDiscover = false;
                $("#dropzone").dropzone({
                    url: "uploads.php",
                    addRemoveLinks: true,
                    maxFileSize: 1000,
                    dictResponseError: "Ha ocurrido un error en el server",
                    acceptedFiles: 'image/*,.jpeg,.jpg,.png,.gif,.JPEG,.JPG,.PNG,.GIF,.rar,application/pdf,.psd',
                    complete: function(file)
                    {
                        if(file.status == "success")
                        {
                            alert("El siguiente archivo ha subido correctamente: " + file.name);
                        }
                    },
                    error: function(file)
                    {
                        alert("Error subiendo el archivo " + file.name);
                    },
                    removedfile: function(file, serverFileName)
                    {
                        var name = file.name;
                        $.ajax({
                            type: "POST",
                            url: "uploads.php?delete=true",
                            data: "filename="+name,
                            success: function(data)
                            {
                                var json = JSON.parse(data);
                                if(json.res == true)
                                {
                                    var element;
                                    (element = file.previewElement) != null ? 
                                        element.parentNode.removeChild(file.previewElement) : 
                                    false;
                                    alert("El elemento fué eliminado: " + name); 
                                }
                            }
                        });
                    }
                });
            });
        </script>

