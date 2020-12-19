
<?php
if(!function_exists('getCategories'))  {
    function getCategories()
    {
        return (new \App\Models\Category())->getAll();
    }
}
