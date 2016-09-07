<?php
return array(
	//'配置项'=>'配置值'
'TMPL_ENGINE_TYPE'=>'Smarty',
'TMPL_ENGINE_CONFIG'=>array(
        'caching'=> true,
        'compile_dir'=> TEMP_PATH.'smarty_compile/',
        'cache_dir'=> CACHE_PATH.'smarty_cache/' ,
        'left_delimiter'=>'<{',
        'right_delimiter'=>'}>',
        'debugging'=>false,
    ) ,
    DEFAULT_THEME => '',
);