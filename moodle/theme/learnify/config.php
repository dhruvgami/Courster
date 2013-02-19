$THEME->name = 'learnify';
 
$THEME->parents = array(
    'base'
);
 
$THEME->sheets = array(
    'admin',
    'blocks',
    'calendar',
    'course',
    'grade',
    'message',
    'question',
    'user'
);
 
$THEME->layouts = array(
    'base' => array(
        'theme' => 'newtheme',
        'file' => 'general.php',
        'regions' => array(),
    ),
    'standard' => array(
        'theme' => 'newtheme',
        'file' => 'general.php',
        'regions' => array('side-pre', 'side-post'),
        'defaultregion' => 'side-post',
    )
    //.......
);

$THEME->javascripts_footer = array(
    'navigation'
);