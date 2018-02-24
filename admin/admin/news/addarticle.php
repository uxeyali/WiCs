<?php
    $path = "../../";
    include $path . "admin_head1.html"; 
?>
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="<?php print $path; ?>..news/css/news.css">
<?php
    include $path . "admin_head2.html"; 
?>
    
    <!--  Begin Add Page  -->
    <main>
    <br>
    <h2>Add News Article</h2>
    <form action="articleconfirm.php" method="post">
        <div class="row">
            <h4 class="large-12 columns">Article Type:</h4>
        </div>
        <div class="row">
            <label class="large-2 columns"><input type="radio" name="articletype" value="announcement" checked>Announcement</label>
            <label class="large-10 columns"><input type="radio" name="articletype" value="event">Event</label>
        </div>
    
        <div class="row">
            <h4 class="large-8 columns">Headline:</h4>
        </div>
        <div class="row">
            <input class="large-8 columns" type="text" name="headline" placeholder="Article Headline" required>
        </div>
        
        <div class="row">
            <h4 class="large-8 columns">Article Text:</h4>
        </div>
        <div class="row">
            <textarea class="large-12 columns" rows="5" name="articletext" placeholder="Article Text" required></textarea>
        </div>
        
        <div class="row">
            <div class="large-6 columns">
                <h4 class="large-6 columns">Article Start Date:</h4>
                <input type="date" name="startdate"><span class="input-desc"><p>(Optional)</p></span>
            </div>

            <div class="large-6 columns">
                <h4 class="large-6 columns">Article End Date:</h4>
                <input type="date" name="enddate" required>
            </div>
        </div>
        
        <div class="row small-6 medium-5 large-4">
            <input id="office_button" class="button button-purple large expanded" type="submit" value="SUBMIT NEWS ARTICLE">
        </div>
    </form>
    </main>
    <!--  End Add Page  -->
    
<?php include $path . "admin_footer.html"; ?>
