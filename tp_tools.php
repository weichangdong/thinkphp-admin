<?php
/**
* 执行完这个脚本 还有一些foreach循环和一些js和php混合的地方需要手动修改。
* 好在一点就是smarty的报错，很详细很精准，而且整个html文件行数很少
*  修改TP-Admin项目的模板引擎为smarty。
*/


$file = "C:\\xampp\\htdocs\\tpAdmin\\App\\Admin\\View\\smartyView\\Linkage\\index.html";
$new_file = $file.".bak";
@unlink($new_file);
$content = file_get_contents($file);

$content = str_replace('__MODULE__','<{$smarty.const.__MODULE__}>',$content);
$content = str_replace('__CONTROLLER__','<{$smarty.const.__CONTROLLER__}>',$content);
$content = str_replace('</block>','<{/block}>',$content);
$content = str_replace('<?php echo ','<{',$content);
$content = str_replace('; ?>','}>',$content);
$content = str_replace('?>','}>',$content);
$content = str_replace('<extend name="Layout:form" />','<{extends file="Layout/form.html"}>',$content);
$content = str_replace('<extend name="Layout:list" />','<{extends file="Layout/list.html"}>',$content);


$content = preg_replace("/\{:asset\(('.*')\)\}/","<{asset($1)}>",$content);
$content = preg_replace("/\{:U\((.*)\)\}/","<{U($1)}>",$content);
$content = preg_replace("/<block name=\"(.*)\".?>/","<{block name=\"$1\"}>",$content);
$content = preg_replace("/<block name='(.*)'.?>/","<{block name='$1'}>",$content);
file_put_contents($file,$content);
echo "ok";
?>