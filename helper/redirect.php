<?php
// Function to handle redirection to a different URL or path
function redirect($path){
    // Prepend the constant ROOT to the given $path (ROOT should be a predefined constant, representing the root directory or base URL)
    $path = ROOT . $path;
    ?>
    <script>
        location.href="<?php echo $path;?>";
    </script>
    <?php
    // Perform the redirection by setting the Location header to the specified $path
    //header("Location: $path");  // This will redirect the user to the $path URL
}
?>
