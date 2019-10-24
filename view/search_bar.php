<form method="GET" class="form-inline search-from">
                    
    <input class="form-control search" <?php echo $search == null ? '' : 'value="' . $search . '"'  ?> name="student" type="text" placeholder="Search" aria-label="Search">
    
    <button type="submit" class="search">
        <i class="fa fa-search"></i>
    </button>

</form>