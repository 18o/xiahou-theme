<?php
function rand_posts(){  
	$num = 2;
	$db = Typecho_Db::get(); 	
	$rs = $db->fetchRow($db->select(['COUNT(cid)' => 'total'])
			 ->from('table.contents')
			 ->where('table.contents.status = ?', 'publish')		
			 ->where('table.contents.type = ?', 'post'));
	$total=$rs['total'];
	srand((float) microtime() * 10000000);
	$ary=range(0,$total-1);
    if($num>$total) $num=$total;
	$rand = array_rand($ary, $num);
	$render = [];
	foreach($rand as $index){		
		$result = $db->fetchRow($db->select()->from('table.contents')
					 ->where('table.contents.status = ?', 'publish')		
					 ->where('table.contents.type = ?', 'post')		
					 ->offset($index)
					 ->limit(1));
		$render[] = [
			'title' => $result['title'],
			'content' => mb_substr($result['text'], 0, 119, 'utf-8'),
			'created' => date("Y-m-d", $result['created']),
			'comments' => $result['commentsNum'],
			'url' => '/' . $result['slug'] . '.html'
		];
	}
	return $render;
}

function tags_count() {
    $db = Typecho_Db::get();
    $rs = $db->fetchRow($db->select(['COUNT(mid)' => 'total'])
        ->from('table.metas')
        ->where('table.metas.type = ?', 'tag'));

    return $rs['total'];
}
