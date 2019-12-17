<?php
function today() {
	$tw = 'CQC《学习态度》不少于500字Word文档。


	';
	$mr = '提交时请右键将文件夹/文件压缩。具体方法如下
	<ol>
		<li>右键你要压缩的文件/文件夹</li>
		<li>选择”发送到”</li>
		<li>点击 "压缩(zipped)文件夹"</li>
		<li>压缩完后将压缩后的文件上传即可</li>
		<li>如果没有压缩为zip，可以用其他压缩软件压缩为zip（必须）。请不要加密。</li>
	</ol>
	';

	echo "
  <div class=\"mdui-dialog\" id=\"today\">
<div class=\"mdui-dialog-title\">当前任务</div>
<div class=\"mdui-dialog-content\">$tw</div>
<div class=\"mdui-dialog-actions\">
<button class=\"mdui-btn mdui-ripple\" mdui-dialog-close>好的</button>
</div>
</div>
<div class=\"mdui-dialog\" id=\"mustread\">
<div class=\"mdui-dialog-title\">提交必看</div>
<div class=\"mdui-dialog-content\">$mr</div>
<div class=\"mdui-dialog-actions\">
<button class=\"mdui-btn mdui-ripple\" mdui-dialog-close>好的</button>
</div>
</div>
  ";
}
?>
