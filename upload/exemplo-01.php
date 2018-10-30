<form method="POST" enctype="multipart/form-data">
    
    <input type="file" name="fileUpload">

    <button type="submit">
        Send
    </button>

</form>

<?php 

if ( $_SERVER["REQUEST_METHOD"] === "POST" ) 
{

    $file = $_FILES["fileUpload"];
    
    if ( $file["error"] ) 
    {
        throw new Exception( "Error: " . $file["error"] );
    }

    $dirUploads = "upload";

    if ( ! is_dir( $dirUploads ) ) 
    {
        mkdir( $dirUploads );
    }//End if de verificacao de diretório se existe

    //move de uma pasta temporaria para a pasta da aplicacao
    if ( move_uploaded_file( $file["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $file["name"] ) ) {

        echo "Upload realizado com sucesso.";

    } else {

        throw new Exception( "Não foi possível realizar o upload." );

    }//End if de upload de arquivo

}//End if verifica se foi feito um envio de tipo POST

?>