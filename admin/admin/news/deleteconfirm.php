<?php
    $path = "../../";
    include $path . "admin_head1.html"; 
?>
    <link rel="stylesheet" href="<?php print $path; ?>../news/css/news.css">
<?php
    include $path . "admin_head2.html"; 
?>
    
    <!--  Begin Delete Page  -->
    <main>
        <div id="pagecontent">
        <div class="row">
            <h1 class="large-12 columns success_header">Confirm Article Deletion</h1>
        </div>
        <div class="row">
            <div class="large-12 columns success_header">
                <p>Delete article: <strong id="articlename"><?php print $_GET['articlename']; ?></strong>?</p>
            </div>
        </div>

        <div id="delete" class="row small-6 medium-5 large-4">
            <button id="office_button" class="button large expanded">DELETE</button>
        </div>
        <div id="cancel" class="row small-6 medium-5 large-4">
            <button id="office_button" class="button large expanded">CANCEL</button>
        </div>
        </div>
        
    </main>
    <!--  End Delete Page  -->
    
<?php include $path . "admin_footer.html"; ?>
<script src="js/deleteconfirm.js"></script>
